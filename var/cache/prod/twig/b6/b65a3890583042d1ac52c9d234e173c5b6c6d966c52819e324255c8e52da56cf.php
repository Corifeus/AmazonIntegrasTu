<?php

/* @PIG/Trabajadoras/nuevaTrabajadora.html.twig */
class __TwigTemplate_8ddb6c64d813f6f82aefa643858b0df2755023a5aa47b2e93f79458a0b61bcfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIGBundle:Trabajadoras:index.html.twig", "@PIG/Trabajadoras/nuevaTrabajadora.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PIGBundle:Trabajadoras:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "PIG";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>Nueva trabajadora</h1>

\t\t<div id=\"contenedorForm\">
\t\t\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTrabajadoras"]) ? $context["formTrabajadoras"] : null), 'form');
        echo "
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "@PIG/Trabajadoras/nuevaTrabajadora.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'PIGBundle:Trabajadoras:index.html.twig' %}*/
/* */
/* {% block title %}PIG{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <h1>Nueva trabajadora</h1>*/
/* */
/* 		<div id="contenedorForm">*/
/* 			{{form(formTrabajadoras)}}*/
/* 		</div>*/
/* */
/* {% endblock %}*/
/* */
