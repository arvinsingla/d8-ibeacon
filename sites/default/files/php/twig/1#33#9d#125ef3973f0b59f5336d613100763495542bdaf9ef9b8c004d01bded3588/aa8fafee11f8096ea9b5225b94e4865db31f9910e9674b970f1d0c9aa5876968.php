<?php

/* core/modules/toolbar/templates/toolbar.html.twig */
class __TwigTemplate_339d125ef3973f0b59f5336d613100763495542bdaf9ef9b8c004d01bded3588 extends Twig_Template
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
        // line 25
        echo "<nav";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  <div";
        // line 26
        echo twig_render_var((isset($context["toolbar_attributes"]) ? $context["toolbar_attributes"] : null));
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 27
        echo twig_render_var((isset($context["toolbar_heading"]) ? $context["toolbar_heading"] : null));
        echo "</h2>
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 29
            echo "      <div";
            echo twig_render_var($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "attributes"));
            echo ">";
            echo twig_render_var($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "link"));
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </div>
  ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trays"]) ? $context["trays"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tray"]) {
            // line 33
            echo "    ";
            ob_start();
            // line 34
            echo "    <div";
            echo twig_render_var($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "attributes"));
            echo ">
      <div class=\"toolbar-lining clearfix\">
        ";
            // line 36
            if ($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label")) {
                // line 37
                echo "          <h3 class=\"toolbar-tray-name visually-hidden\">";
                echo twig_render_var($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label"));
                echo "</h3>
        ";
            }
            // line 39
            echo "        ";
            echo twig_render_var($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "links"));
            echo "
      </div>
    </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 43
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tray'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  ";
        echo twig_render_var((isset($context["remainder"]) ? $context["remainder"] : null));
        echo "
</nav>
";
    }

    public function getTemplateName()
    {
        return "core/modules/toolbar/templates/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 37,  50 => 32,  28 => 27,  158 => 81,  154 => 79,  147 => 77,  138 => 75,  136 => 74,  131 => 73,  127 => 72,  122 => 71,  118 => 70,  115 => 69,  113 => 68,  110 => 67,  105 => 64,  96 => 62,  94 => 61,  89 => 60,  85 => 44,  81 => 57,  79 => 43,  76 => 55,  70 => 54,  64 => 52,  60 => 50,  47 => 31,  42 => 46,  39 => 45,  51 => 48,  43 => 27,  36 => 29,  34 => 23,  25 => 20,  23 => 19,  21 => 17,  77 => 58,  71 => 39,  66 => 54,  63 => 36,  57 => 34,  54 => 33,  48 => 30,  46 => 29,  41 => 26,  35 => 44,  32 => 28,  26 => 41,  24 => 26,  19 => 25,);
    }
}
