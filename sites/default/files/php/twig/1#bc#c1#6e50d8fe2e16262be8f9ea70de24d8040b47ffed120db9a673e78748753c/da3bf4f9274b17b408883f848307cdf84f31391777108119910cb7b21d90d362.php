<?php

/* core/modules/system/templates/input.html.twig */
class __TwigTemplate_bcc16e50d8fe2e16262be8f9ea70de24d8040b47ffed120db9a673e78748753c extends Twig_Template
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
        echo "<input";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo " />";
        echo twig_render_var((isset($context["children"]) ? $context["children"] : null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 15,);
    }
}