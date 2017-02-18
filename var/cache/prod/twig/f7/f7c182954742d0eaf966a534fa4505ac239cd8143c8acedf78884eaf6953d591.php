<?php

/* PIGBundle:Trabajadoras:nuevaTrabajadora.html.twig */
class __TwigTemplate_f11df72f7463f943b4c21dbf0237b28bf3930dd26eff0e08ea60d9373d3a2059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIGBundle:Trabajadoras:index.html.twig", "PIGBundle:Trabajadoras:nuevaTrabajadora.html.twig", 1);
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
        return "PIGBundle:Trabajadoras:nuevaTrabajadora.html.twig";
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
