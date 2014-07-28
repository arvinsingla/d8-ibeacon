<?php

/* core/modules/system/templates/links.html.twig */
class __TwigTemplate_a02ca66f98cba423be8065f03dbbe4e90da74a300edafb6a2d79c8d0c40b0577 extends Twig_Template
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
        // line 38
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 39
            if ((isset($context["heading"]) ? $context["heading"] : null)) {
                // line 40
                if ($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level")) {
                    // line 41
                    echo "<";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"));
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"));
                    echo "</";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"));
                    echo ">";
                } else {
                    // line 43
                    echo "<h2";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"));
                    echo "</h2>";
                }
            }
            // line 46
            echo "<ul";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "<li";
                echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"));
                echo ">";
                // line 49
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link")) {
                    // line 50
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link"));
                } elseif ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text_attributes")) {
                    // line 52
                    echo "<span";
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text_attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"));
                    echo "</span>";
                } else {
                    // line 54
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"));
                }
                // line 56
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 54,  55 => 49,  65 => 37,  50 => 32,  28 => 27,  158 => 81,  154 => 79,  147 => 77,  138 => 75,  136 => 74,  131 => 73,  127 => 72,  122 => 71,  118 => 70,  115 => 69,  113 => 68,  110 => 67,  105 => 64,  96 => 62,  94 => 61,  89 => 60,  85 => 44,  81 => 57,  79 => 43,  76 => 58,  70 => 56,  64 => 52,  60 => 52,  47 => 47,  42 => 46,  39 => 45,  51 => 48,  43 => 46,  36 => 29,  34 => 23,  25 => 41,  23 => 40,  21 => 39,  77 => 58,  71 => 39,  66 => 54,  63 => 36,  57 => 50,  54 => 33,  48 => 30,  46 => 29,  41 => 26,  35 => 43,  32 => 28,  26 => 41,  24 => 26,  19 => 38,);
    }
}
