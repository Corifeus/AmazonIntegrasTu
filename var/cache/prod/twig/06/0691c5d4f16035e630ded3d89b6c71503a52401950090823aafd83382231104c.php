<?php

/* @PIG/Clientes/show.html.twig */
class __TwigTemplate_cb4949a1aa10b36134469a72d79545e775a828453e754a45e43efa1e316f7f17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIGBundle:Clientes:index.html.twig", "@PIG/Clientes/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menubar' => array($this, 'block_menubar'),
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

    // line 5
    public function block_menubar($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 8
            echo "        <li><a href=\"/clientes/show/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</a></li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
      <a href=\"/clientes/new\"><button class=\"btn btn-default\">Insertar Cliente</button></a>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "
<div class=\"col-lg-8\">


<table class=\"table table-striped\">
  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 22
            echo "  ";
            if (($this->getAttribute($context["cliente"], "id", array()) == (isset($context["id"]) ? $context["id"] : null))) {
                // line 23
                echo "  <tr>
    <td>Nombre</td>
    <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
                echo "</td>
  </tr>
  <tr>
    <td>CIF</td>
    <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "cIF", array()), "html", null, true);
                echo "</td>
  </tr>

  <tr>
      <td>Domicilio Fiscal</td>
      <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "domicilioFiscal", array()), "html", null, true);
                echo "</td>
  </tr>

  <tr>
    <td>CP</td>
    <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "cP", array()), "html", null, true);
                echo "</td>
  </tr>

  <tr>
    <td>Municipio</td>
    <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "municipio", array()), "html", null, true);
                echo "</td>
  </tr>

  <tr>
    <td>Provincia</td>
    <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "provincia", array()), "html", null, true);
                echo "</td>
  </tr>

  <tr>
    <td>Nº Cuenta bancaria</td>
    <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "noCuentaBancaria", array()), "html", null, true);
                echo "</td>
  </tr>

  <tr>
    <td>Persona de contacto</td>
    <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "personaContacto", array()), "html", null, true);
                echo "</td>
  </tr>

  <tr>
    <td>Teléfono de contacto</td>
    <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "telefonoContacto", array()), "html", null, true);
                echo "</td>
  </tr>

  <tr>
    <td>Teléfono móvil de contacto</td>
    <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "telefonoMovilContacto", array()), "html", null, true);
                echo "</td>
  </tr>

  <tr>
    <td>Razón social</td>
    <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "razonSocial", array()), "html", null, true);
                echo "</td>
  </tr>
</table>
</div>

<div class=\"col-lg-4\">


<div class=\"panel panel-default\">
<div class=\"panel-heading\">
  Servicios
</div>
<div class=\"panel-body\">
<div class=\"list-group\">
  ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 1, array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["servicio"]) {
                    // line 89
                    echo "    ";
                    if (($this->getAttribute($this->getAttribute($context["servicio"], "cliente", array()), "id", array()) == (isset($context["id"]) ? $context["id"] : null))) {
                        // line 90
                        echo "

        <a href=\"#\" class=\"list-group-item\"> ";
                        // line 92
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["servicio"], "fecha", array()), "d/m/y  g:i a"), "html", null, true);
                        echo " </a>


    ";
                    }
                    // line 96
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicio'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "  </div>
  </div>
  ";
            }
            // line 100
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "

</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PIG/Clientes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 101,  210 => 100,  205 => 97,  199 => 96,  192 => 92,  188 => 90,  185 => 89,  181 => 88,  164 => 74,  156 => 69,  148 => 64,  140 => 59,  132 => 54,  124 => 49,  116 => 44,  108 => 39,  100 => 34,  92 => 29,  85 => 25,  81 => 23,  78 => 22,  74 => 21,  67 => 16,  64 => 15,  58 => 11,  46 => 8,  42 => 7,  39 => 6,  36 => 5,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'PIGBundle:Clientes:index.html.twig' %}*/
/* {% block title %}PIG{% endblock %}*/
/* */
/* */
/* {% block menubar %}*/
/* */
/*     {% for cliente in datos[0] %}*/
/*         <li><a href="/clientes/show/{{cliente.id}}">{{ cliente.nombre }}</a></li>*/
/* */
/*     {% endfor %}*/
/* */
/*       <a href="/clientes/new"><button class="btn btn-default">Insertar Cliente</button></a>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="col-lg-8">*/
/* */
/* */
/* <table class="table table-striped">*/
/*   {% for cliente in datos[0] %}*/
/*   {% if cliente.id == id %}*/
/*   <tr>*/
/*     <td>Nombre</td>*/
/*     <td>{{ cliente.nombre }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>CIF</td>*/
/*     <td>{{ cliente.cIF }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*       <td>Domicilio Fiscal</td>*/
/*       <td>{{ cliente.domicilioFiscal }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>CP</td>*/
/*     <td>{{ cliente.cP }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Municipio</td>*/
/*     <td>{{ cliente.municipio }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Provincia</td>*/
/*     <td>{{ cliente.provincia }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Nº Cuenta bancaria</td>*/
/*     <td>{{ cliente.noCuentaBancaria }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Persona de contacto</td>*/
/*     <td>{{ cliente.personaContacto }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Teléfono de contacto</td>*/
/*     <td>{{ cliente.telefonoContacto }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Teléfono móvil de contacto</td>*/
/*     <td>{{ cliente.telefonoMovilContacto }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Razón social</td>*/
/*     <td>{{ cliente.razonSocial }}</td>*/
/*   </tr>*/
/* </table>*/
/* </div>*/
/* */
/* <div class="col-lg-4">*/
/* */
/* */
/* <div class="panel panel-default">*/
/* <div class="panel-heading">*/
/*   Servicios*/
/* </div>*/
/* <div class="panel-body">*/
/* <div class="list-group">*/
/*   {% for servicio in datos[1] %}*/
/*     {% if servicio.cliente.id == id %}*/
/* */
/* */
/*         <a href="#" class="list-group-item"> {{ servicio.fecha|date("d/m/y  g:i a") }} </a>*/
/* */
/* */
/*     {% endif %}*/
/*   {% endfor %}*/
/*   </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* */
/* */
/* </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
