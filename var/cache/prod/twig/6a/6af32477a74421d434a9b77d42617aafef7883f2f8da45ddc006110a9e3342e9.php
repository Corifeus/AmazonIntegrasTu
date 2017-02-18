<?php

/* @PIG/Clientes/nuevoCliente.html.twig */
class __TwigTemplate_ad12cf1ea38e3285fa33e47801b438f8828ee4a491a893da62268ef89329fcca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@PIG/Clientes/nuevoCliente.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "PIG";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Nuevo cliente</h1>

\t\t<div id=\"contenedorForm\">
\t\t\t</form> ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formClientes"]) ? $context["formClientes"] : null), 'form');
        echo "
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "@PIG/Clientes/nuevoCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}PIG{% endblock %}*/
/* {% block body %}*/
/* <h1>Nuevo cliente</h1>*/
/* */
/* 		<div id="contenedorForm">*/
/* 			</form> {{form(formClientes)}}*/
/* 		</div>*/
/* */
/* {% endblock %}*/
/* */
