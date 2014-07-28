<?php

/* core/modules/system/templates/system-config-form.html.twig */
class __TwigTemplate_8736a5f3fb52c10daafa532a48d317cdde7a93a7971c9f44d0bb8bfb5b86e372 extends Twig_Template
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
        // line 17
        echo twig_render_var((isset($context["form"]) ? $context["form"] : null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/system-config-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 17,);
    }
}
