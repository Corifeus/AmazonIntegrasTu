<?php

/* @PIG/Trabajadoras/show.html.twig */
class __TwigTemplate_aef3ce737c64dc2e363154e856da326b79def61530563383607399e499d55c75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIGBundle:Trabajadoras:index.html.twig", "@PIG/Trabajadoras/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menubar' => array($this, 'block_menubar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PIGBundle:Trabajadoras:index.html.twig";
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 2, array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajadora"]) {
            // line 8
            echo "        <li><a href=\"/trabajadoras/show/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "nombre", array()), "html", null, true);
            echo "</a></li>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajadora'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        <a href=\"/trabajadoras/new\"><button class=\"btn btn-default\">Insertar Empleada</button></a>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "<table class=\"table table-striped\">

  <tr>
    <td>Nombre</td>
    <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "nombre", array()), "html", null, true);
        echo "</td>
  </tr>

  <tr>
    <td>Apellidos</td>
    <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "apellidos", array()), "html", null, true);
        echo "</td>
  </tr>

  <tr>
    <td>Direccion</td>
    <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "direccion", array()), "html", null, true);
        echo "</td>
  </tr>

  <tr>
    <td>Fecha de alta</td>
    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "fechaAlta", array()), "date", array()), "html", null, true);
        echo "</td>
  </tr>

  <tr>
    <td>Puesto</td>
    <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "puesto", array()), "html", null, true);
        echo "</td>
  </tr>

  <tr>
    <td>Nº Cuenta bancaria</td>
    <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "noCuentaBanco", array()), "html", null, true);
        echo "</td>
  </tr>

  <tr>
    <td>Nº Seguridad Social</td>
    <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "noSeguridadSocial", array()), "html", null, true);
        echo "</td>
  </tr>

  <tr>
    <td>DNI</td>
    <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "dNI", array()), "html", null, true);
        echo "</td>
  </tr>

  <tr>
    <td>Fecha de nacimiento</td>
    <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "fechaNac", array()), "date", array()), "html", null, true);
        echo "</td>
  </tr>

  <tr>
    <td>Teléfono</td>
    <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "telefono", array()), "html", null, true);
        echo "</td>
  </tr>

  <tr>
    <td>Estado</td>
    <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "estado", array()), "html", null, true);
        echo "</td>
  </tr>
</table>

<table class=\"table table-striped\">
  ";
        // line 74
        $context["counter"] = 1;
        // line 75
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 1, array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["horas"]) {
            // line 76
            echo "
  <tr>
    <td>Horario ";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
            echo "</td>
    <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["horas"], "Fecha", array()), "html", null, true);
            echo "</td>
    ";
            // line 80
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
            // line 81
            echo "  </tr>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "</table>

";
    }

    public function getTemplateName()
    {
        return "@PIG/Trabajadoras/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 84,  181 => 81,  179 => 80,  175 => 79,  171 => 78,  167 => 76,  162 => 75,  160 => 74,  152 => 69,  144 => 64,  136 => 59,  128 => 54,  120 => 49,  112 => 44,  104 => 39,  96 => 34,  88 => 29,  80 => 24,  72 => 19,  66 => 15,  63 => 14,  58 => 11,  46 => 8,  42 => 7,  39 => 6,  36 => 5,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'PIGBundle:Trabajadoras:index.html.twig' %}*/
/* {% block title %}PIG{% endblock %}*/
/* */
/* */
/* {% block menubar %}*/
/* */
/*   {% for trabajadora in datos[2] %}*/
/*         <li><a href="/trabajadoras/show/{{trabajadora.id}}">{{ trabajadora.nombre }}</a></li>*/
/* */
/*         {% endfor %}*/
/*         <a href="/trabajadoras/new"><button class="btn btn-default">Insertar Empleada</button></a>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <table class="table table-striped">*/
/* */
/*   <tr>*/
/*     <td>Nombre</td>*/
/*     <td>{{ datos[0].nombre }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Apellidos</td>*/
/*     <td>{{ datos[0].apellidos }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Direccion</td>*/
/*     <td>{{ datos[0].direccion }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Fecha de alta</td>*/
/*     <td>{{ datos[0].fechaAlta.date }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Puesto</td>*/
/*     <td>{{ datos[0].puesto }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Nº Cuenta bancaria</td>*/
/*     <td>{{ datos[0].noCuentaBanco }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Nº Seguridad Social</td>*/
/*     <td>{{ datos[0].noSeguridadSocial }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>DNI</td>*/
/*     <td>{{ datos[0].dNI }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Fecha de nacimiento</td>*/
/*     <td>{{ datos[0].fechaNac.date }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Teléfono</td>*/
/*     <td>{{ datos[0].telefono }}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td>Estado</td>*/
/*     <td>{{ datos[0].estado }}</td>*/
/*   </tr>*/
/* </table>*/
/* */
/* <table class="table table-striped">*/
/*   {% set counter = 1 %}*/
/*   {% for horas in datos[1] %}*/
/* */
/*   <tr>*/
/*     <td>Horario {{counter}}</td>*/
/*     <td>{{horas.Fecha}}</td>*/
/*     {% set counter = counter + 1 %}*/
/*   </tr>*/
/* */
/*   {% endfor %}*/
/* </table>*/
/* */
/* {% endblock %}*/
/* */
