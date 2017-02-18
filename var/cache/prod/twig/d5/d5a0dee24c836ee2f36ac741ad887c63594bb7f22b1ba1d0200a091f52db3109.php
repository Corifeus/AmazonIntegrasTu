<?php

/* PIGBundle:Servicios:index.html.twig */
class __TwigTemplate_b6ac13453040ddccb6a88c6b8b1ec5fc84c95bb92dc07a0661da8102393655bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PIGBundle:Servicios:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "PIG";
    }

    // line 4
    public function block_menubar($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicios"]) ? $context["servicios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["servicio"]) {
            // line 6
            echo "
        <li><a href=\"/servicios/show/";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "id", array()), "html", null, true);
            echo "\"> Tipo: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "Tipo", array()), "html", null, true);
            echo " Fecha: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["servicio"], "Fecha", array()), "date", array()), "d/m/y  g:i a"), "html", null, true);
            echo "</a></li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "

    <a href=\"/servicios/new\"><button class=\"btn btn-default\">Insertar Servicio</button></a>


";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "<!-- Portfolio Grid Section -->

";
    }

    public function getTemplateName()
    {
        return "PIGBundle:Servicios:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  69 => 17,  60 => 10,  47 => 7,  44 => 6,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}PIG{% endblock %}*/
/* */
/* {% block menubar %}*/
/*     {% for servicio in servicios %}*/
/* */
/*         <li><a href="/servicios/show/{{servicio.id}}"> Tipo: {{ servicio.Tipo }} Fecha: {{ servicio.Fecha.date|date("d/m/y  g:i a") }}</a></li>*/
/* */
/*     {% endfor %}*/
/* */
/* */
/*     <a href="/servicios/new"><button class="btn btn-default">Insertar Servicio</button></a>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <!-- Portfolio Grid Section -->*/
/* */
/* {% endblock %}*/
/* */
