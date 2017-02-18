<?php

/* PIGBundle:Clientes:all.html.twig */
class __TwigTemplate_a28b4e32fa02fab89b5a5840f3640da4d1ebf0fd0bbf14cb5362ef7c28fa097f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIGBundle:Clientes:index.html.twig", "PIGBundle:Clientes:all.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PIGBundle:Clientes:index.html.twig";
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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<table>

  <tr>
    <td>CIF</td>
    <td>Domicilio Fiscal</td>
    <td>CP</td>
    <td>Municipio</td>
    <td>Provincia</td>
    <td>Nº Cuenta bancaria</td>
    <td>Persona de contacto</td>
    <td>Teléfono de contacto</td>
    <td>Teléfono móvil de contacto</td>
    <td>Razón social</td>
  </tr>

  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 21
            echo "    <tr>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "cIF", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "domicilioFiscal", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "cP", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "municipio", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "provincia", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "noCuentaBancaria", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "personaContacto", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "telefonoContacto", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "telefonoMovilContacto", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "razonSocial", array()), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>

<br><a href=\"/clientes\">Clientes</a>
";
    }

    public function getTemplateName()
    {
        return "PIGBundle:Clientes:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  82 => 27,  78 => 26,  74 => 25,  70 => 24,  66 => 23,  62 => 22,  59 => 21,  55 => 20,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'PIGBundle:Clientes:index.html.twig' %}*/
/* {% block title %}PIG{% endblock %}*/
/* */
/* {% block body %}*/
/* <table>*/
/* */
/*   <tr>*/
/*     <td>CIF</td>*/
/*     <td>Domicilio Fiscal</td>*/
/*     <td>CP</td>*/
/*     <td>Municipio</td>*/
/*     <td>Provincia</td>*/
/*     <td>Nº Cuenta bancaria</td>*/
/*     <td>Persona de contacto</td>*/
/*     <td>Teléfono de contacto</td>*/
/*     <td>Teléfono móvil de contacto</td>*/
/*     <td>Razón social</td>*/
/*   </tr>*/
/* */
/*   {% for cliente in clientes %}*/
/*     <tr>*/
/*       <td>{{ cliente.cIF }}</td>*/
/*       <td>{{ cliente.domicilioFiscal }}</td>*/
/*       <td>{{ cliente.cP }}</td>*/
/*       <td>{{ cliente.municipio }}</td>*/
/*       <td>{{ cliente.provincia }}</td>*/
/*       <td>{{ cliente.noCuentaBancaria }}</td>*/
/*       <td>{{ cliente.personaContacto }}</td>*/
/*       <td>{{ cliente.telefonoContacto }}</td>*/
/*       <td>{{ cliente.telefonoMovilContacto }}</td>*/
/*       <td>{{ cliente.razonSocial }}</td>*/
/*     </tr>*/
/*   {% endfor %}*/
/* </table>*/
/* */
/* <br><a href="/clientes">Clientes</a>*/
/* {% endblock %}*/
/* */
