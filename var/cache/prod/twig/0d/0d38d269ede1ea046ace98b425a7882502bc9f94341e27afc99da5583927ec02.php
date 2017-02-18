<?php

/* @PIG/Servicios/show.html.twig */
class __TwigTemplate_8202e439a7ff32b14256210881bb05716aca9ee6591a83c72e6e1969e7088559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@PIG/Servicios/show.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["servicio"]) {
            // line 6
            echo "
        <li><a href=\"/servicios/show/";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "id", array()), "html", null, true);
            echo "\"> Tipo: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "Tipo", array()), "html", null, true);
            echo " Fecha: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["servicio"], "Fecha", array()), "d/m/y  g:i a"), "html", null, true);
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
        echo "<table class=\"table table-striped\">

  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["servicio"]) {
            // line 21
            echo "  ";
            if (($this->getAttribute($context["servicio"], "id", array()) == (isset($context["id"]) ? $context["id"] : null))) {
                // line 22
                echo "
  <tr>
      <td>Persona de contacto</td>
      <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "personaContacto", array()), "html", null, true);
                echo "</td>
  </tr>

  <tr>
    <td>Telefono de Contacto</td>
    <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "telefonoContacto", array()), "html", null, true);
                echo "</td>
  </tr>

  <tr>
    <td>Fecha de Registro</td>
    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["servicio"], "fecha", array()), "d/m/y  g:i a"), "html", null, true);
                echo "</td>
  </tr>

  <tr>
    <td>Observaciones</td>
    <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "observaciones", array()), "html", null, true);
                echo "</td>
  </tr>

  <tr>
    <td>Estado del Servicio</td>
    <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "estado", array()), "html", null, true);
                echo "</td>
  </tr>

  <tr>
    <td>Direccion del Servicio</td>
    <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "direccion", array()), "html", null, true);
                echo "</td>
  </tr>

  <tr>
    <td>Tipo de Servicio</td>
    <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["servicio"], "tipo", array()), "html", null, true);
                echo "</td>
  </tr>
  ";
            }
            // line 58
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</table>

<table class=\"table table-striped\">

  ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 1, array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
            // line 64
            echo "  ";
            if (($this->getAttribute($context["tipo"], "idServicio", array()) == (isset($context["id"]) ? $context["id"] : null))) {
                // line 65
                echo "

  ";
                // line 67
                if (($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 2, array(), "array") == "Limpieza")) {
                    // line 68
                    echo "      <tr>
        <td>Productos</td>
        <td>";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "productos", array()), "html", null, true);
                    echo "</td>
      </tr>

      <tr>
        <td>Especificaciones</td>
        <td>";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "especificaciones", array()), "html", null, true);
                    echo "</td>
      </tr>
  ";
                }
                // line 78
                echo "
  ";
                // line 79
                if (($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 2, array(), "array") == "Catering")) {
                    // line 80
                    echo "      <tr>
        <td>Hora de llegada</td>
        <td>";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "horaLlegada", array()), "html", null, true);
                    echo "</td>
      </tr>

      <tr>
        <td>Hora de inicio</td>
        <td>";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "horaInicio", array()), "html", null, true);
                    echo "</td>
      </tr>

      <tr>
        <td>Hora de finalización</td>
        <td>";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "horaFin", array()), "html", null, true);
                    echo "</td>
      </tr>

      <tr>
        <td>Tipo</td>
        <td>";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "tipo", array()), "html", null, true);
                    echo "</td>
      </tr>

      <tr>
        <td>NºComensales</td>
        <td>";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "noComensales", array()), "html", null, true);
                    echo "</td>
      </tr>

      <tr>
        <td>Observaciones de los comensales</td>
        <td>";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "observComensales", array()), "html", null, true);
                    echo "</td>
      </tr>

      <tr>
        <td>Observaciones del menú</td>
        <td>";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "observMenu", array()), "html", null, true);
                    echo "</td>
      </tr>

      <tr>
        <td>Especificaciones</td>
        <td>";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "especificaciones", array()), "html", null, true);
                    echo "</td>
      </tr>
    ";
                }
                // line 120
                echo "

    ";
                // line 122
                if (($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 2, array(), "array") == "Mantenimiento")) {
                    // line 123
                    echo "
      <tr>
        <td>Material</td>
        <td>";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "material", array()), "html", null, true);
                    echo "</td>
      </tr>

      <tr>
        <td>Especificaciones</td>
        <td>";
                    // line 131
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "especificaciones", array()), "html", null, true);
                    echo "</td>
      </tr>

    ";
                }
                // line 135
                echo "
    ";
                // line 136
                if (($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 2, array(), "array") == "Otro")) {
                    // line 137
                    echo "
      <tr>
        <td>Especificaciones</td>
        <td>";
                    // line 140
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "especificaciones", array()), "html", null, true);
                    echo "</td>
      </tr>
    ";
                }
                // line 143
                echo "
  ";
            }
            // line 145
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "</table>

<table class=\"table table-striped\">

  ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 3, array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajadora"]) {
            // line 151
            echo "
  <tr>
    <td>Nombre y apellidos</td>
    <td>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "Nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "Apellidos", array()), "html", null, true);
            echo "</td>
  </tr>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajadora'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "</table>

";
    }

    public function getTemplateName()
    {
        return "@PIG/Servicios/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 158,  323 => 154,  318 => 151,  314 => 150,  308 => 146,  302 => 145,  298 => 143,  292 => 140,  287 => 137,  285 => 136,  282 => 135,  275 => 131,  267 => 126,  262 => 123,  260 => 122,  256 => 120,  250 => 117,  242 => 112,  234 => 107,  226 => 102,  218 => 97,  210 => 92,  202 => 87,  194 => 82,  190 => 80,  188 => 79,  185 => 78,  179 => 75,  171 => 70,  167 => 68,  165 => 67,  161 => 65,  158 => 64,  154 => 63,  148 => 59,  142 => 58,  136 => 55,  128 => 50,  120 => 45,  112 => 40,  104 => 35,  96 => 30,  88 => 25,  83 => 22,  80 => 21,  76 => 20,  72 => 18,  69 => 17,  60 => 10,  47 => 7,  44 => 6,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}PIG{% endblock %}*/
/* */
/* {% block menubar %}*/
/*     {% for servicio in datos[0] %}*/
/* */
/*         <li><a href="/servicios/show/{{servicio.id}}"> Tipo: {{ servicio.Tipo }} Fecha: {{ servicio.Fecha|date("d/m/y  g:i a") }}</a></li>*/
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
/* <table class="table table-striped">*/
/* */
/*   {% for servicio in datos[0] %}*/
/*   {% if servicio.id == id %}*/
/* */
/*   <tr>*/
/*       <td>Persona de contacto</td>*/
/*       <td>{{ servicio.personaContacto }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Telefono de Contacto</td>*/
/*     <td>{{ servicio.telefonoContacto }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Fecha de Registro</td>*/
/*     <td>{{ servicio.fecha|date("d/m/y  g:i a") }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Observaciones</td>*/
/*     <td>{{ servicio.observaciones }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Estado del Servicio</td>*/
/*     <td>{{ servicio.estado }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Direccion del Servicio</td>*/
/*     <td>{{ servicio.direccion }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Tipo de Servicio</td>*/
/*     <td>{{ servicio.tipo }}</td>*/
/*   </tr>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* </table>*/
/* */
/* <table class="table table-striped">*/
/* */
/*   {% for tipo in datos[1] %}*/
/*   {% if tipo.idServicio == id %}*/
/* */
/* */
/*   {% if datos[2] == "Limpieza" %}*/
/*       <tr>*/
/*         <td>Productos</td>*/
/*         <td>{{ tipo.productos }}</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>Especificaciones</td>*/
/*         <td>{{ tipo.especificaciones }}</td>*/
/*       </tr>*/
/*   {% endif %}*/
/* */
/*   {% if datos[2] == "Catering" %}*/
/*       <tr>*/
/*         <td>Hora de llegada</td>*/
/*         <td>{{ tipo.horaLlegada }}</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>Hora de inicio</td>*/
/*         <td>{{ tipo.horaInicio }}</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>Hora de finalización</td>*/
/*         <td>{{ tipo.horaFin }}</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>Tipo</td>*/
/*         <td>{{ tipo.tipo }}</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>NºComensales</td>*/
/*         <td>{{ tipo.noComensales }}</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>Observaciones de los comensales</td>*/
/*         <td>{{ tipo.observComensales }}</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>Observaciones del menú</td>*/
/*         <td>{{ tipo.observMenu }}</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>Especificaciones</td>*/
/*         <td>{{ tipo.especificaciones }}</td>*/
/*       </tr>*/
/*     {% endif %}*/
/* */
/* */
/*     {% if datos[2] == "Mantenimiento" %}*/
/* */
/*       <tr>*/
/*         <td>Material</td>*/
/*         <td>{{ tipo.material }}</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>Especificaciones</td>*/
/*         <td>{{ tipo.especificaciones }}</td>*/
/*       </tr>*/
/* */
/*     {% endif %}*/
/* */
/*     {% if datos[2] == "Otro" %}*/
/* */
/*       <tr>*/
/*         <td>Especificaciones</td>*/
/*         <td>{{ tipo.especificaciones }}</td>*/
/*       </tr>*/
/*     {% endif %}*/
/* */
/*   {% endif %}*/
/*   {% endfor %}*/
/* </table>*/
/* */
/* <table class="table table-striped">*/
/* */
/*   {% for trabajadora in datos[3] %}*/
/* */
/*   <tr>*/
/*     <td>Nombre y apellidos</td>*/
/*     <td>{{ trabajadora.Nombre }} {{ trabajadora.Apellidos }}</td>*/
/*   </tr>*/
/* */
/*   {% endfor %}*/
/* </table>*/
/* */
/* {% endblock %}*/
/* */
