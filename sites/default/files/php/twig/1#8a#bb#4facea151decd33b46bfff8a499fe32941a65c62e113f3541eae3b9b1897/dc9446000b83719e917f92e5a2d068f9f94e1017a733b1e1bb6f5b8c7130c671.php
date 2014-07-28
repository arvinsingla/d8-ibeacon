<?php

/* core/modules/views_ui/templates/views-ui-display-tab-setting.html.twig */
class __TwigTemplate_8abb4facea151decd33b46bfff8a499fe32941a65c62e113f3541eae3b9b1897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 18
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 19
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 20
            echo "<span class=\"label\">";
            echo twig_render_var((isset($context["description"]) ? $context["description"] : null));
            echo "</span>";
        }
        // line 22
        echo "  ";
        if ((isset($context["settings_links"]) ? $context["settings_links"] : null)) {
            // line 23
            echo "    ";
            echo twig_render_var(twig_join_filter((isset($context["settings_links"]) ? $context["settings_links"] : null), "<span class=\"label\">&nbsp;|&nbsp;</span>"));
            echo "
  ";
        }
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-display-tab-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 25,  34 => 23,  31 => 22,  26 => 20,  24 => 19,  19 => 18,);
    }
}
