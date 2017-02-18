<?php

/* @PIG/Otros/all.html.twig */
class __TwigTemplate_16f3a7ebf19bffcd55a60079db77b6477a2354be8c266104b0d01157c07f08de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@PIG/Otros/all.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<table>

  <tr>
    <td>Persona de Contacto</td>
    <td>Telefono de Contacto</td>
    <td>Dirección</td>
    <td>Fecha</td>
    <td>Observaciones</td>
    <td>Estado</td>
    <td>servicio</td>
  </tr>

  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicios"]) ? $context["servicios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["servicio"]) {
            // line 19
            echo "    <tr>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "personaContacto", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "telefonoContacto", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "direccion", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "fecha", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "observaciones", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "estado", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["servicio"], "cliente", array()), "nombre", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "telefonoContacto", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "telefonoMovilContacto", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "razonSocial", array()), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</table>

<br><a href=\"/servicios\">Volver a Servicios</a>
";
    }

    public function getTemplateName()
    {
        return "@PIG/Otros/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 32,  95 => 29,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  67 => 22,  63 => 21,  59 => 20,  56 => 19,  52 => 18,  38 => 6,  35 => 5,  29 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}PIG{% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <table>*/
/* */
/*   <tr>*/
/*     <td>Persona de Contacto</td>*/
/*     <td>Telefono de Contacto</td>*/
/*     <td>Dirección</td>*/
/*     <td>Fecha</td>*/
/*     <td>Observaciones</td>*/
/*     <td>Estado</td>*/
/*     <td>servicio</td>*/
/*   </tr>*/
/* */
/*   {% for servicio in servicios %}*/
/*     <tr>*/
/*       <td>{{ servicio.personaContacto }}</td>*/
/*       <td>{{ servicio.telefonoContacto }}</td>*/
/*       <td>{{ servicio.direccion }}</td>*/
/*       <td>{{ servicio.fecha }}</td>*/
/*       <td>{{ servicio.observaciones }}</td>*/
/*       <td>{{ servicio.estado }}</td>*/
/*       <td>{{ servicio.cliente.nombre }}</td>*/
/*       <td>{{ servicio.telefonoContacto }}</td>*/
/*       <td>{{ servicio.telefonoMovilContacto }}</td>*/
/*       <td>{{ servicio.razonSocial }}</td>*/
/*     </tr>*/
/*   {% endfor %}*/
/* </table>*/
/* */
/* <br><a href="/servicios">Volver a Servicios</a>*/
/* {% endblock %}*/
/* */
