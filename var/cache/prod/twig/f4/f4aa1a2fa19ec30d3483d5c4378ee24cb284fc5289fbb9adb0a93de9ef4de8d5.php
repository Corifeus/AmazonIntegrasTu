<?php

/* @PIG/Caterings/nuevoCaterings.html.twig */
class __TwigTemplate_de7ec7bb1d4c0f8917fdbf0a4425adea18b50150111f4f119add0e4b7dd7e765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@PIG/Caterings/nuevoCaterings.html.twig", 1);
        $this->blocks = array(
            'menubar' => array($this, 'block_menubar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_menubar($context, array $blocks = array())
    {
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
<h1>Nuevo servicio de Catering</h1>



<div id=\"contenedorForm\">
\t";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCaterings"]) ? $context["formCaterings"] : null), 'form');
        echo "
</div>


<br><a href=\"/servicios\">Volver a Servicios</a><br>

";
    }

    public function getTemplateName()
    {
        return "@PIG/Caterings/nuevoCaterings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  37 => 8,  34 => 7,  29 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block menubar %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <h1>Nuevo servicio de Catering</h1>*/
/* */
/* */
/* */
/* <div id="contenedorForm">*/
/* 	{{form(formCaterings)}}*/
/* </div>*/
/* */
/* */
/* <br><a href="/servicios">Volver a Servicios</a><br>*/
/* */
/* {% endblock %}*/
/* */
