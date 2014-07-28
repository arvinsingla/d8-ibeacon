<?php

/* core/modules/system/templates/select.html.twig */
class __TwigTemplate_58ff2d66328cc1ab8ed302d849e917b2b08f809a647c153f0fe0e34a86f66b48 extends Twig_Template
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
        echo "<select";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">";
        echo twig_render_var((isset($context["options"]) ? $context["options"] : null));
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/select.html.twig";
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
