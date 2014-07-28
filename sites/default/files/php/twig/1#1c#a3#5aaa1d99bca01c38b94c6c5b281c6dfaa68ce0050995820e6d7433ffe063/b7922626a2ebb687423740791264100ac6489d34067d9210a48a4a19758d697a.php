<?php

/* core/modules/system/templates/breadcrumb.html.twig */
class __TwigTemplate_1ca35aaa1d99bca01c38b94c6c5b281c6dfaa68ce0050995820e6d7433ffe063 extends Twig_Template
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
        // line 12
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 13
            echo "  <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
    <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 14
            echo twig_render_var(t("Breadcrumb"));
            echo "</h2>
    <ol>
    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "      <li>";
                echo twig_render_var((isset($context["item"]) ? $context["item"] : null));
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </ol>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 17,  112 => 105,  104 => 101,  98 => 98,  95 => 97,  92 => 96,  86 => 93,  83 => 92,  80 => 91,  74 => 89,  72 => 88,  62 => 83,  56 => 81,  40 => 73,  29 => 16,  27 => 69,  67 => 54,  55 => 49,  65 => 84,  50 => 32,  28 => 27,  158 => 81,  154 => 79,  147 => 77,  138 => 75,  136 => 74,  131 => 73,  127 => 72,  122 => 71,  118 => 70,  115 => 69,  113 => 68,  110 => 67,  105 => 64,  96 => 62,  94 => 61,  89 => 60,  85 => 44,  81 => 57,  79 => 43,  76 => 58,  70 => 56,  64 => 52,  60 => 52,  47 => 47,  42 => 19,  39 => 45,  51 => 48,  43 => 46,  36 => 29,  34 => 23,  25 => 41,  23 => 68,  21 => 13,  77 => 58,  71 => 39,  66 => 54,  63 => 36,  57 => 50,  54 => 80,  48 => 76,  46 => 29,  41 => 26,  35 => 72,  32 => 28,  26 => 25,  24 => 14,  19 => 12,);
    }
}
