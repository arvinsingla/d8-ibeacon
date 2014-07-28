<?php

/* core/modules/system/templates/form.html.twig */
class __TwigTemplate_fd51840a3a0cc61169fb4bcda033f9c0f7e99bb28e89c6c2049f5f18d5817cb5 extends Twig_Template
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
        // line 15
        echo "<form";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 16
        echo twig_render_var((isset($context["children"]) ? $context["children"] : null));
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 81,  154 => 79,  147 => 77,  138 => 75,  136 => 74,  131 => 73,  127 => 72,  122 => 71,  118 => 70,  115 => 69,  113 => 68,  110 => 67,  105 => 64,  96 => 62,  94 => 61,  89 => 60,  85 => 59,  81 => 57,  79 => 56,  76 => 55,  70 => 54,  64 => 52,  60 => 50,  47 => 47,  42 => 46,  39 => 45,  51 => 48,  43 => 27,  36 => 24,  34 => 23,  25 => 20,  23 => 19,  21 => 17,  77 => 58,  71 => 55,  66 => 54,  63 => 53,  57 => 51,  54 => 50,  48 => 30,  46 => 29,  41 => 26,  35 => 44,  32 => 43,  26 => 41,  24 => 16,  19 => 15,);
    }
}
