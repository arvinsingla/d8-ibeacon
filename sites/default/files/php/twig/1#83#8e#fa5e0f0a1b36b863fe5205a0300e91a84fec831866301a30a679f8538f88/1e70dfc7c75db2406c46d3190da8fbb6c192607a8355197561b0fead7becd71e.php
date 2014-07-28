<?php

/* core/modules/views_ui/templates/views-ui-style-plugin-table.html.twig */
class __TwigTemplate_838efa5e0f0a1b36b863fe5205a0300e91a84fec831866301a30a679f8538f88 extends Twig_Template
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
        echo twig_render_var($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description_markup"));
        echo "
";
        // line 17
        echo twig_render_var((isset($context["table"]) ? $context["table"] : null));
        echo "
";
        // line 18
        echo twig_render_var((isset($context["form"]) ? $context["form"] : null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/views_ui/templates/views-ui-style-plugin-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 18,  23 => 17,  19 => 16,);
    }
}
