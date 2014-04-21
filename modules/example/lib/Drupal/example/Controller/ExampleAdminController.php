<?php
/**
 * @file
 * Contains \Drupal\example\Controller\ExampleAdminController.
 */
namespace Drupal\example\Controller;
/**
 * Example page controller.
 */
class ExampleAdminController {
  /**
   * Generates an example page.
   */
  public function content() {
    return array(
      '#markup' => "Hello admin",
    );
  }
}
?>