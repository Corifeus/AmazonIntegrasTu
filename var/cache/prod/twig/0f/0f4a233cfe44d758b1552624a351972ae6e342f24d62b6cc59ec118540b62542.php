<?php

/* PIGBundle:Limpiezas:index.html.twig */
class __TwigTemplate_b5b0d8de84f2c2dd4576e2afe53d4aab6071f507172131c1663d15c325ff9f0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PIGBundle:Limpiezas:index.html.twig", 1);
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
        <li>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "id", array()), "html", null, true);
            echo "</li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<!-- Portfolio Grid Section -->

";
    }

    public function getTemplateName()
    {
        return "PIGBundle:Limpiezas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  58 => 12,  47 => 7,  44 => 6,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}PIG{% endblock %}*/
/* */
/* {% block menubar %}*/
/*     {% for servicio in servicios %}*/
/* */
/*         <li>{{ servicio.id }}</li>*/
/* */
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <!-- Portfolio Grid Section -->*/
/* */
/* {% endblock %}*/
/* */
