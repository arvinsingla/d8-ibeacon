<?php

/* core/modules/system/templates/status-messages.html.twig */
class __TwigTemplate_bfb37e63fbdff4e4ccd69544d9abd27f89d3e865fbcf0ed0c957d876c1e270d2 extends Twig_Template
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
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "  <div class=\"messages messages--";
            echo twig_render_var((isset($context["type"]) ? $context["type"] : null));
            echo "\" role=\"contentinfo\" aria-label=\"";
            echo twig_render_var($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"));
            echo "\">
    ";
            // line 28
            if (((isset($context["type"]) ? $context["type"] : null) == "error")) {
                // line 29
                echo "      <div role=\"alert\">
    ";
            }
            // line 31
            echo "      ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array")) {
                // line 32
                echo "        <h2 class=\"visually-hidden\">";
                echo twig_render_var($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"));
                echo "</h2>
      ";
            }
            // line 34
            echo "      ";
            if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) > 1)) {
                // line 35
                echo "        <ul class=\"messages__list\">
          ";
                // line 36
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 37
                    echo "            <li class=\"messages__item\">";
                    echo twig_render_var((isset($context["message"]) ? $context["message"] : null));
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "        </ul>
      ";
            } else {
                // line 41
                echo "        ";
                echo twig_render_var($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), 0));
                echo "
      ";
            }
            // line 43
            echo "    ";
            if (((isset($context["type"]) ? $context["type"] : null) == "error")) {
                // line 44
                echo "      </div>
    ";
            }
            // line 46
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 41,  45 => 34,  30 => 28,  33 => 17,  112 => 105,  104 => 101,  98 => 98,  95 => 97,  92 => 96,  86 => 93,  83 => 92,  80 => 91,  74 => 43,  72 => 88,  62 => 83,  56 => 81,  40 => 73,  29 => 16,  27 => 69,  67 => 54,  55 => 37,  65 => 84,  50 => 32,  28 => 27,  158 => 81,  154 => 79,  147 => 77,  138 => 75,  136 => 74,  131 => 73,  127 => 72,  122 => 71,  118 => 70,  115 => 69,  113 => 68,  110 => 67,  105 => 64,  96 => 62,  94 => 61,  89 => 60,  85 => 44,  81 => 46,  79 => 43,  76 => 58,  70 => 56,  64 => 39,  60 => 52,  47 => 47,  42 => 19,  39 => 32,  51 => 36,  43 => 46,  36 => 31,  34 => 23,  25 => 41,  23 => 27,  21 => 13,  77 => 44,  71 => 39,  66 => 54,  63 => 36,  57 => 50,  54 => 80,  48 => 35,  46 => 29,  41 => 26,  35 => 72,  32 => 29,  26 => 25,  24 => 14,  19 => 26,);
    }
}
