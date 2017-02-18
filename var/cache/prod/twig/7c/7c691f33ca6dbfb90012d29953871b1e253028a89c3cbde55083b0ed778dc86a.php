<?php

/* PIGBundle:Trabajadoras:horario.html.twig */
class __TwigTemplate_231c8ee4631c9da771815f4efbf41a40dd46d2b3eed9265540ed936197fafbdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table>

  <tr>
    <td>Nombre</td>
    <td>Apellidos</td>
    <td>Direccion</td>
    <td>Fecha de alta</td>
    <td>Puesto</td>
    <td>Nº Cuenta bancaria</td>
    <td>Nº Seguridad Social</td>
    <td>DNI</td>
    <td>Fecha de nacimiento</td>
    <td>Teléfono</td>
    <td>Estado</td>
  </tr>

    <tr>
      <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "nombre", array()), "html", null, true);
        echo "</td>
      <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "apellidos", array()), "html", null, true);
        echo "</td>
      <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "direccion", array()), "html", null, true);
        echo "</td>
      <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "fechaAlta", array()), "date", array()), "html", null, true);
        echo "</td>
      <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "puesto", array()), "html", null, true);
        echo "</td>
      <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "noCuentaBanco", array()), "html", null, true);
        echo "</td>
      <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "noSeguridadSocial", array()), "html", null, true);
        echo "</td>
      <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "dNI", array()), "html", null, true);
        echo "</td>
      <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "fechaNac", array()), "date", array()), "html", null, true);
        echo "</td>
      <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "telefono", array()), "html", null, true);
        echo "</td>
      <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 0, array(), "array"), "estado", array()), "html", null, true);
        echo "</td>
    </tr>
</table>

<table>
  ";
        // line 33
        $context["counter"] = 1;
        // line 34
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 1, array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["horas"]) {
            // line 35
            echo "
  <tr>
    <td>Horario ";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
            echo "</td>
    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : null), 1, array(), "array"), "fecha", array()), "date", array()), "html", null, true);
            echo "</td>
    ";
            // line 39
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
            // line 40
            echo "  </tr>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "PIGBundle:Trabajadoras:horario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  107 => 40,  105 => 39,  101 => 38,  97 => 37,  93 => 35,  88 => 34,  86 => 33,  78 => 28,  74 => 27,  70 => 26,  66 => 25,  62 => 24,  58 => 23,  54 => 22,  50 => 21,  46 => 20,  42 => 19,  38 => 18,  19 => 1,);
    }
}
/* <table>*/
/* */
/*   <tr>*/
/*     <td>Nombre</td>*/
/*     <td>Apellidos</td>*/
/*     <td>Direccion</td>*/
/*     <td>Fecha de alta</td>*/
/*     <td>Puesto</td>*/
/*     <td>Nº Cuenta bancaria</td>*/
/*     <td>Nº Seguridad Social</td>*/
/*     <td>DNI</td>*/
/*     <td>Fecha de nacimiento</td>*/
/*     <td>Teléfono</td>*/
/*     <td>Estado</td>*/
/*   </tr>*/
/* */
/*     <tr>*/
/*       <td>{{ datos[0].nombre }}</td>*/
/*       <td>{{ datos[0].apellidos }}</td>*/
/*       <td>{{ datos[0].direccion }}</td>*/
/*       <td>{{ datos[0].fechaAlta.date }}</td>*/
/*       <td>{{ datos[0].puesto }}</td>*/
/*       <td>{{ datos[0].noCuentaBanco }}</td>*/
/*       <td>{{ datos[0].noSeguridadSocial }}</td>*/
/*       <td>{{ datos[0].dNI }}</td>*/
/*       <td>{{ datos[0].fechaNac.date }}</td>*/
/*       <td>{{ datos[0].telefono }}</td>*/
/*       <td>{{ datos[0].estado }}</td>*/
/*     </tr>*/
/* </table>*/
/* */
/* <table>*/
/*   {% set counter = 1 %}*/
/*   {% for horas in datos[1] %}*/
/* */
/*   <tr>*/
/*     <td>Horario {{counter}}</td>*/
/*     <td>{{ datos[1].fecha.date }}</td>*/
/*     {% set counter = counter + 1 %}*/
/*   </tr>*/
/* */
/*   {% endfor %}*/
/* </table>*/
/* */
