<?php

/* core/modules/system/templates/textarea.html.twig */
class __TwigTemplate_7674d5eaadc19f3ccd3068d492e9182f8af6dbfbe5d0d07de67282b462c2e79f extends Twig_Template
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
        // line 16
        echo "<div";
        echo twig_render_var((isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null));
        echo "><textarea";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">";
        echo twig_render_var((isset($context["value"]) ? $context["value"] : null));
        echo "</textarea></div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 16,);
    }
}
