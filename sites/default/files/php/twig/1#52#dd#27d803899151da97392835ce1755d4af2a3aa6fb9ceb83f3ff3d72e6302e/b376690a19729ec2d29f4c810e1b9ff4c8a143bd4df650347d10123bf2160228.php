<?php

/* core/modules/system/templates/confirm-form.html.twig */
class __TwigTemplate_52dd27d803899151da97392835ce1755d4af2a3aa6fb9ceb83f3ff3d72e6302e extends Twig_Template
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
        echo twig_render_var((isset($context["form"]) ? $context["form"] : null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/confirm-form.html.twig";
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
