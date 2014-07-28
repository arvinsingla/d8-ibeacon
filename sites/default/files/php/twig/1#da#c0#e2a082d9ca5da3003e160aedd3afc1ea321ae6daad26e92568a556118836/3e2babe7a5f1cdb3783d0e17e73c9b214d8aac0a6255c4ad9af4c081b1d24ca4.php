<?php

/* core/modules/system/templates/html.html.twig */
class __TwigTemplate_dac0e2a082d9ca5da3003e160aedd3afc1ea321ae6daad26e92568a556118836 extends Twig_Template
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
        // line 29
        echo "<!DOCTYPE html>
<html";
        // line 30
        echo twig_render_var((isset($context["html_attributes"]) ? $context["html_attributes"] : null));
        echo ">
  <head>
    ";
        // line 32
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "head"));
        echo "
    <title>";
        // line 33
        echo twig_render_var((isset($context["head_title"]) ? $context["head_title"] : null));
        echo "</title>
    ";
        // line 34
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "styles"));
        echo "
    ";
        // line 35
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "scripts"));
        echo "
  </head>
  <body";
        // line 37
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 39
        echo twig_render_var(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 41
        echo twig_render_var((isset($context["page_top"]) ? $context["page_top"] : null));
        echo "
    ";
        // line 42
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"));
        echo "
    ";
        // line 43
        echo twig_render_var((isset($context["page_bottom"]) ? $context["page_bottom"] : null));
        echo "
    ";
        // line 44
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "scripts", array(0 => "footer"), "method"));
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 42,  49 => 39,  44 => 37,  31 => 33,  22 => 30,  68 => 41,  45 => 34,  30 => 28,  33 => 17,  112 => 105,  104 => 101,  98 => 98,  95 => 97,  92 => 96,  86 => 93,  83 => 92,  80 => 91,  74 => 43,  72 => 88,  62 => 43,  56 => 81,  40 => 73,  29 => 16,  27 => 32,  67 => 54,  55 => 37,  65 => 84,  50 => 32,  28 => 27,  158 => 81,  154 => 79,  147 => 77,  138 => 75,  136 => 74,  131 => 73,  127 => 72,  122 => 71,  118 => 70,  115 => 69,  113 => 68,  110 => 67,  105 => 64,  96 => 62,  94 => 61,  89 => 60,  85 => 44,  81 => 46,  79 => 43,  76 => 58,  70 => 56,  64 => 39,  60 => 52,  47 => 47,  42 => 19,  39 => 35,  51 => 36,  43 => 46,  36 => 31,  34 => 23,  25 => 41,  23 => 27,  21 => 13,  77 => 44,  71 => 39,  66 => 44,  63 => 36,  57 => 50,  54 => 41,  48 => 35,  46 => 29,  41 => 26,  35 => 34,  32 => 29,  26 => 25,  24 => 14,  19 => 29,);
    }
}
