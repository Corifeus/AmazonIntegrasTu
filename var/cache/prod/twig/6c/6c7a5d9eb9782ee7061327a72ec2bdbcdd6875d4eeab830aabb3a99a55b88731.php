<?php

/* PIGBundle:Servicios:nuevoServicio.html.twig */
class __TwigTemplate_0e404b59cff8bc718eaad5230faca61381fc92ff28b2c72de2e9ace01d892e46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PIGBundle:Servicios:nuevoServicio.html.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Nuevo servicio</h1>



\t\t<div id=\"contenedorForm\">
\t\t\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formServicios"]) ? $context["formServicios"] : null), 'form');
        echo "
\t\t</div>


<br><a href=\"/servicios\">Volver a Servicios</a><br>

";
    }

    public function getTemplateName()
    {
        return "PIGBundle:Servicios:nuevoServicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <h1>Nuevo servicio</h1>*/
/* */
/* */
/* */
/* 		<div id="contenedorForm">*/
/* 			{{form(formServicios)}}*/
/* 		</div>*/
/* */
/* */
/* <br><a href="/servicios">Volver a Servicios</a><br>*/
/* */
/* {% endblock %}*/
/* */
