<?php

/* PIGBundle:Trabajadoras:all.html.twig */
class __TwigTemplate_90161567f1a836297fd779881e8841da68aeeede4bb1fee81db8ef94ed009999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIGBundle:Trabajadoras:index.html.twig", "PIGBundle:Trabajadoras:all.html.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
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

  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trabajadoras"]) ? $context["trabajadoras"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajadora"]) {
            // line 21
            echo "    <tr>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "nombre", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "apellidos", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "direccion", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trabajadora"], "fechaAlta", array()), "date", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "puesto", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "noCuentaBanco", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "noSeguridadSocial", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "dNI", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trabajadora"], "fechaNac", array()), "date", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "telefono", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "estado", array()), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajadora'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</table>


<br><a href=\"/trabajadoras\">Volver a trabajadoras</a>

";
    }

    public function getTemplateName()
    {
        return "PIGBundle:Trabajadoras:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  64 => 24,  60 => 23,  56 => 22,  53 => 21,  49 => 20,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PIGBundle:Trabajadoras:index.html.twig' %}*/
/* */
/* {% block body %}*/
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
/*   {% for trabajadora in trabajadoras %}*/
/*     <tr>*/
/*       <td>{{ trabajadora.nombre }}</td>*/
/*       <td>{{ trabajadora.apellidos }}</td>*/
/*       <td>{{ trabajadora.direccion }}</td>*/
/*       <td>{{ trabajadora.fechaAlta.date }}</td>*/
/*       <td>{{ trabajadora.puesto }}</td>*/
/*       <td>{{ trabajadora.noCuentaBanco }}</td>*/
/*       <td>{{ trabajadora.noSeguridadSocial }}</td>*/
/*       <td>{{ trabajadora.dNI }}</td>*/
/*       <td>{{ trabajadora.fechaNac.date }}</td>*/
/*       <td>{{ trabajadora.telefono }}</td>*/
/*       <td>{{ trabajadora.estado }}</td>*/
/*     </tr>*/
/*   {% endfor %}*/
/* </table>*/
/* */
/* */
/* <br><a href="/trabajadoras">Volver a trabajadoras</a>*/
/* */
/* {% endblock %}*/
/* */
