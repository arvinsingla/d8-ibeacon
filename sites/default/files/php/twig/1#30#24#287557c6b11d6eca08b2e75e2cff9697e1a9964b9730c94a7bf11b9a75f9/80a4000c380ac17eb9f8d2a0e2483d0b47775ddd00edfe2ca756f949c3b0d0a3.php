<?php

/* core/modules/views_ui/templates/views-ui-display-tab-bucket.html.twig */
class __TwigTemplate_3024287557c6b11d6eca08b2e75e2cff9697e1a9964b9730c94a7bf11b9a75f9 extends Twig_Template
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
        // line 17
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 18
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 19
            echo "<h3>";
            echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
            echo "</h3>";
        }
        // line 21
        echo "  ";
        echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
        echo "
  ";
        // line 22
        if ((isset($context["actions"]) ? $context["actions"] : null)) {
            // line 23
            echo twig_render_var((isset($context["actions"]) ? $context["actions"] : null));
        }
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-display-tab-bucket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 25,  38 => 23,  36 => 22,  40 => 25,  34 => 23,  31 => 21,  26 => 19,  24 => 18,  19 => 17,);
    }
}
