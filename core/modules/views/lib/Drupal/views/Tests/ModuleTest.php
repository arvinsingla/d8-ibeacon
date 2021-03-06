<?php

/**
 * @file
 * Definition of Drupal\views\Tests\ModuleTest.
 */

namespace Drupal\views\Tests;

/**
 * Tests basic functions from the Views module.
 */
use Drupal\views\Plugin\views\filter\Standard;
use Drupal\views\Views;
use Drupal\Component\Utility\String;

class ModuleTest extends ViewUnitTestBase {

  /**
   * Views used by this test.
   *
   * @var array
   */
  public static $testViews = array('test_view_status', 'test_view');

  /**
   * Stores the last triggered error, for example via debug().
   *
   * @var string
   *
   * @see \Drupal\views\Tests\ModuleTest::errorHandler()
   */
  protected $lastErrorMessage;

  public static function getInfo() {
    return array(
      'name' => 'Views Module tests',
      'description' => 'Tests some basic functions of views.module.',
      'group' => 'Views',
    );
  }

  /**
   * Tests the views_get_handler method.
   *
   * @see views_get_handler()
   */
  public function testViewsGetHandler() {
    $types = array('field', 'area', 'filter');
    foreach ($types as $type) {
      $item = array(
        'table' => $this->randomName(),
        'field' => $this->randomName(),
      );
      $handler = $this->container->get('plugin.manager.views.' . $type)->getHandler($item);
      $this->assertEqual('Drupal\views\Plugin\views\\' . $type . '\Broken', get_class($handler), t('Make sure that a broken handler of type: @type are created', array('@type' => $type)));
    }

    $views_data = $this->viewsData();
    $test_tables = array('views_test_data' => array('id', 'name'));
    foreach ($test_tables as $table => $fields) {
      foreach ($fields as $field) {
        $data = $views_data[$table][$field];
        $item = array(
          'table' => $table,
          'field' => $field,
        );
        foreach ($data as $id => $field_data) {
          if (!in_array($id, array('title', 'help'))) {
            $handler = $this->container->get('plugin.manager.views.' . $id)->getHandler($item);
            $this->assertInstanceHandler($handler, $table, $field, $id);
          }
        }
      }
    }

    // Test the override handler feature.
    $item = array(
      'table' => 'views_test_data',
      'field' => 'job',
    );
    $handler = $this->container->get('plugin.manager.views.filter')->getHandler($item, 'standard');
    $this->assertTrue($handler instanceof Standard);

    // @todo Reinstate these tests when the debug() in views_get_handler() is
    //   restored.
    return;

    // Test non-existent tables/fields.
    set_error_handler(array($this, 'customErrorHandler'));
    $item = array(
      'table' => 'views_test_data',
      'field' => 'field_invalid',
    );
    $this->container->get('plugin.manager.views.field')->getHandler($item);
    $this->assertTrue(strpos($this->lastErrorMessage, format_string("Missing handler: @table @field @type", array('@table' => 'views_test_data', '@field' => 'field_invalid', '@type' => 'field'))) !== FALSE, 'An invalid field name throws a debug message.');
    unset($this->lastErrorMessage);

    $item = array(
      'table' => 'table_invalid',
      'field' => 'id',
    );
    $this->container->get('plugin.manager.views.filter')->getHandler($item);
    $this->assertEqual(strpos($this->lastErrorMessage, format_string("Missing handler: @table @field @type", array('@table' => 'table_invalid', '@field' => 'id', '@type' => 'filter'))) !== FALSE, 'An invalid table name throws a debug message.');
    unset($this->lastErrorMessage);

    $item = array(
      'table' => 'table_invalid',
      'field' => 'id',
      'optional' => FALSE,
    );
    $this->container->get('plugin.manager.views.filter')->getHandler($item);
    $this->assertEqual(strpos($this->lastErrorMessage, format_string("Missing handler: @table @field @type", array('@table' => 'table_invalid', '@field' => 'id', '@type' => 'filter'))) !== FALSE, 'An invalid table name throws a debug message.');
    unset($this->lastErrorMessage);

    $item = array(
      'table' => 'table_invalid',
      'field' => 'id',
      'optional' => TRUE,
    );
    $this->container->get('plugin.manager.views.filter')->getHandler($item);
    $this->assertFalse($this->lastErrorMessage, "An optional handler does not throw a debug message.");
    unset($this->lastErrorMessage);

    restore_error_handler();
  }

  /**
   * Defines an error handler which is used in the test.
   *
   * @param int $error_level
   *   The level of the error raised.
   * @param string $message
   *   The error message.
   * @param string $filename
   *   The filename that the error was raised in.
   * @param int $line
   *   The line number the error was raised at.
   * @param array $context
   *   An array that points to the active symbol table at the point the error
   *   occurred.
   *
   * Because this is registered in set_error_handler(), it has to be public.
   * @see set_error_handler()
   */
  public function customErrorHandler($error_level, $message, $filename, $line, $context) {
    $this->lastErrorMessage = $message;
  }

  /**
   * Tests the load wrapper/helper functions.
   */
  public function testLoadFunctions() {
    $this->enableModules(array('node'));
    $controller = $this->container->get('entity.manager')->getStorageController('view');

    // Test views_view_is_enabled/disabled.
    $archive = $controller->load('archive');
    $this->assertTrue(views_view_is_disabled($archive), 'views_view_is_disabled works as expected.');
    // Enable the view and check this.
    $archive->enable();
    $this->assertTrue(views_view_is_enabled($archive), ' views_view_is_enabled works as expected.');

    // We can store this now, as we have enabled/disabled above.
    $all_views = $controller->loadMultiple();

    // Test Views::getAllViews().
    $this->assertIdentical(array_keys($all_views), array_keys(Views::getAllViews()), 'Views::getAllViews works as expected.');

    // Test Views::getEnabledViews().
    $expected_enabled = array_filter($all_views, function($view) {
      return views_view_is_enabled($view);
    });
    $this->assertIdentical(array_keys($expected_enabled), array_keys(Views::getEnabledViews()), 'Expected enabled views returned.');

    // Test Views::getDisabledViews().
    $expected_disabled = array_filter($all_views, function($view) {
      return views_view_is_disabled($view);
    });
    $this->assertIdentical(array_keys($expected_disabled), array_keys(Views::getDisabledViews()), 'Expected disabled views returned.');

    // Test Views::getViewsAsOptions().
    // Test the $views_only parameter.
    $this->assertIdentical(array_keys($all_views), array_keys(Views::getViewsAsOptions(TRUE)), 'Expected option keys for all views were returned.');
    $expected_options = array();
    foreach ($all_views as $id => $view) {
      $expected_options[$id] = $view->label();
    }
    $this->assertIdentical($expected_options, Views::getViewsAsOptions(TRUE), 'Expected options array was returned.');

    // Test the default.
    $this->assertIdentical($this->formatViewOptions($all_views), Views::getViewsAsOptions(), 'Expected options array for all views was returned.');
    // Test enabled views.
    $this->assertIdentical($this->formatViewOptions($expected_enabled), Views::getViewsAsOptions(FALSE, 'enabled'), 'Expected enabled options array was returned.');
    // Test disabled views.
    $this->assertIdentical($this->formatViewOptions($expected_disabled), Views::getViewsAsOptions(FALSE, 'disabled'), 'Expected disabled options array was returned.');

    // Test the sort parameter.
    $all_views_sorted = $all_views;
    ksort($all_views_sorted);
    $this->assertIdentical(array_keys($all_views_sorted), array_keys(Views::getViewsAsOptions(TRUE, 'all', NULL, FALSE, TRUE)), 'All view id keys returned in expected sort order');

    // Test $exclude_view parameter.
    $this->assertFalse(array_key_exists('archive', Views::getViewsAsOptions(TRUE, 'all', 'archive')), 'View excluded from options based on name');
    $this->assertFalse(array_key_exists('archive:default', Views::getViewsAsOptions(FALSE, 'all', 'archive:default')), 'View display excluded from options based on name');
    $this->assertFalse(array_key_exists('archive', Views::getViewsAsOptions(TRUE, 'all', $archive->getExecutable())), 'View excluded from options based on object');

    // Test the $opt_group parameter.
    $expected_opt_groups = array();
    foreach ($all_views as $view) {
      foreach ($view->get('display') as $display) {
          $expected_opt_groups[$view->id()][$view->id() . ':' . $display['id']] = t('@view : @display', array('@view' => $view->id(), '@display' => $display['id']));
      }
    }
    $this->assertIdentical($expected_opt_groups, Views::getViewsAsOptions(FALSE, 'all', NULL, TRUE), 'Expected option array for an option group returned.');
  }

  /**
   * Tests view enable and disable procedural wrapper functions.
   */
  function testStatusFunctions() {
    $view = Views::getView('test_view_status')->storage;

    $this->assertFalse($view->status(), 'The view status is disabled.');

    views_enable_view($view);
    $this->assertTrue($view->status(), 'A view has been enabled.');
    $this->assertEqual($view->status(), views_view_is_enabled($view), 'views_view_is_enabled is correct.');

    views_disable_view($view);
    $this->assertFalse($view->status(), 'A view has been disabled.');
    $this->assertEqual(!$view->status(), views_view_is_disabled($view), 'views_view_is_disabled is correct.');
  }

  /**
   * Tests the \Drupal\views\Views::fetchPluginNames() method.
   */
  public function testViewsFetchPluginNames() {
    // All style plugins should be returned, as we have not specified a type.
    $plugins = Views::fetchPluginNames('style');
    $definitions = $this->container->get('plugin.manager.views.style')->getDefinitions();
    $expected = array();
    foreach ($definitions as $id =>$definition) {
      $expected[$id] = $definition['title'];
    }
    asort($expected);
    $this->assertIdentical(array_keys($plugins), array_keys($expected));

    // Test using the 'test' style plugin type only returns the test_style and
    // mapping_test plugins.
    $plugins = Views::fetchPluginNames('style', 'test');
    $this->assertIdentical(array_keys($plugins), array('mapping_test', 'test_style', 'test_template_style'));

    // Test a non existent style plugin type returns no plugins.
    $plugins = Views::fetchPluginNames('style', $this->randomString());
    $this->assertIdentical($plugins, array());
  }

  /**
   * Tests the \Drupal\views\Views::pluginList() method.
   */
  public function testViewsPluginList() {
    $plugin_list = Views::pluginList();
    // Only plugins used by 'test_view' should be in the plugin list.
    foreach (array('display:default', 'pager:none') as $key) {
      list($plugin_type, $plugin_id) = explode(':', $key);
      $plugin_def = $this->container->get("plugin.manager.views.$plugin_type")->getDefinition($plugin_id);

      $this->assertTrue(isset($plugin_list[$key]), String::format('The expected @key plugin list key was found.', array('@key' => $key)));
      $plugin_details = $plugin_list[$key];

      $this->assertEqual($plugin_details['type'], $plugin_type, 'The expected plugin type was found.');
      $this->assertEqual($plugin_details['title'], $plugin_def['title'], 'The expected plugin title was found.');
      $this->assertEqual($plugin_details['provider'], $plugin_def['provider'], 'The expected plugin provider was found.');
      $this->assertTrue(in_array('test_view', $plugin_details['views']), 'The test_view View was found in the list of views using this plugin.');
    }
  }

  /**
   * Helper to return an expected views option array.
   *
   * @param array $views
   *   An array of Drupal\views\Entity\View objects for which to
   *   create an options array.
   *
   * @return array
   *   A formatted options array that matches the expected output.
   */
  protected function formatViewOptions(array $views = array()) {
    $expected_options = array();
    foreach ($views as $view) {
      foreach ($view->get('display') as $display) {
        $expected_options[$view->id() . ':' . $display['id']] = t('View: @view - Display: @display',
          array('@view' => $view->id(), '@display' => $display['id']));
      }
    }

    return $expected_options;
  }

  /**
   * Ensure that a certain handler is a instance of a certain table/field.
   */
  function assertInstanceHandler($handler, $table, $field, $id) {
    $table_data = $this->container->get('views.views_data')->get($table);
    $field_data = $table_data[$field][$id];

    $this->assertEqual($field_data['id'], $handler->getPluginId());
  }

}
