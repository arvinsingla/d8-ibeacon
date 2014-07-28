<?php

/* core/modules/system/templates/form-element-label.html.twig */
class __TwigTemplate_7b636ef17b54ab38c8d4fa889b3c5bbfe25f82713c4303621ea4b0aba64cb901 extends Twig_Template
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
        if (((!twig_test_empty((isset($context["title"]) ? $context["title"] : null))) || (isset($context["required"]) ? $context["required"] : null))) {
            // line 17
            echo "<label";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">";
            echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
            echo "</label>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 17,  77 => 58,  71 => 55,  66 => 54,  63 => 53,  57 => 51,  54 => 50,  48 => 48,  46 => 47,  41 => 46,  35 => 44,  32 => 43,  26 => 41,  24 => 40,  19 => 16,);
    }
}
