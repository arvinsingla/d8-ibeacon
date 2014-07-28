<?php

/* core/modules/system/templates/container.html.twig */
class __TwigTemplate_d25d918eab3f946197900ed6c4d1e59b28620c525241ef8eaa0c8b6e7dacbd9c extends Twig_Template
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
        // line 18
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">";
        echo twig_render_var((isset($context["children"]) ? $context["children"] : null));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 17,  77 => 58,  71 => 55,  66 => 54,  63 => 53,  57 => 51,  54 => 50,  48 => 48,  46 => 47,  41 => 46,  35 => 44,  32 => 43,  26 => 41,  24 => 40,  19 => 18,);
    }
}
