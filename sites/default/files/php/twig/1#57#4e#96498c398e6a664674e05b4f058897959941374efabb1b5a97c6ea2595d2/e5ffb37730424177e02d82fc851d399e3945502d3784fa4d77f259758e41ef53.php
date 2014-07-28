<?php

/* core/modules/system/templates/region.html.twig */
class __TwigTemplate_574e96498c398e6a664674e05b4f058897959941374efabb1b5a97c6ea2595d2 extends Twig_Template
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
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  <div";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">
    ";
            // line 25
            echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 54,  55 => 49,  65 => 37,  50 => 32,  28 => 27,  158 => 81,  154 => 79,  147 => 77,  138 => 75,  136 => 74,  131 => 73,  127 => 72,  122 => 71,  118 => 70,  115 => 69,  113 => 68,  110 => 67,  105 => 64,  96 => 62,  94 => 61,  89 => 60,  85 => 44,  81 => 57,  79 => 43,  76 => 58,  70 => 56,  64 => 52,  60 => 52,  47 => 47,  42 => 46,  39 => 45,  51 => 48,  43 => 46,  36 => 29,  34 => 23,  25 => 41,  23 => 40,  21 => 24,  77 => 58,  71 => 39,  66 => 54,  63 => 36,  57 => 50,  54 => 33,  48 => 30,  46 => 29,  41 => 26,  35 => 43,  32 => 28,  26 => 25,  24 => 26,  19 => 23,);
    }
}
