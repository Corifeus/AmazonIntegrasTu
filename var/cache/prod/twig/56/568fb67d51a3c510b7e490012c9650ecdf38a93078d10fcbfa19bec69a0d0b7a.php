<?php

/* @PIG/Trabajadoras/index.html.twig */
class __TwigTemplate_2cf086768b76fdcbb744e07d14145923b3939930ca3130de34ef249e9abee103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@PIG/Trabajadoras/index.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["trabajadoras"]) ? $context["trabajadoras"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajadora"]) {
            // line 6
            echo "
        <li><a href=\"/trabajadoras/show/";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "nombre", array()), "html", null, true);
            echo "</a></li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajadora'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
    <a href=\"/trabajadoras/new\"><button class=\"btn btn-default\">Insertar Empleada</button></a>

";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<!-- Portfolio Grid Section -->

";
    }

    public function getTemplateName()
    {
        return "@PIG/Trabajadoras/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  65 => 15,  58 => 10,  47 => 7,  44 => 6,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}PIG{% endblock %}*/
/* */
/* {% block menubar %}*/
/*     {% for trabajadora in trabajadoras %}*/
/* */
/*         <li><a href="/trabajadoras/show/{{trabajadora.id}}">{{ trabajadora.nombre }}</a></li>*/
/* */
/*     {% endfor %}*/
/* */
/*     <a href="/trabajadoras/new"><button class="btn btn-default">Insertar Empleada</button></a>*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <!-- Portfolio Grid Section -->*/
/* */
/* {% endblock %}*/
/* */
