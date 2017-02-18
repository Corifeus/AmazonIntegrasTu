<?php

/* ::base.html.twig */
class __TwigTemplate_02bb1aebde6cb4a83cfa2ba967306e509b0541164743c898d42c94579fb4843e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menubar' => array($this, 'block_menubar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    </head>
    <body>

        <div id=\"wrapper\">

            <!-- Navigation -->
            <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\">IntegrasTu</a>

                </div>
                <!-- /.navbar-header -->



                <ul class=\"nav navbar-top-links navbar-right\">

                    <!-- /.dropdown -->
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                        </a>
                        <ul id=\"user\" class=\"dropdown-menu dropdown-user\">
                            <li><a href=\"register\"><i class=\"fa fa-user fa-fw\"></i>Registrar Usuarios</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li><a href=\"/usuarios/logout\"><i class=\"fa fa-sign-out fa-fw\"></i>Cerrar Sesión</a>
                            </li>
                        </ul>


                        <!-- /.dropdown-user -->
                    </li>

                    <!-- /.dropdown -->
                </ul>

                <ul class=\"nav nav-tabs nav-justified\">
                    <li id=\"clientes\"><a class=\"active\" href=\"/clientes\">Clientes</a><span class=\"sr-only\">current</span></li>
                    <li id=\"servicios\"><a href=\"/servicios\">Servicios</a></li>
                    <li id=\"trabajadoras\"><a href=\"/trabajadoras\" class=\"active\">Empleadas</a><span class=\"sr-only\">current</span></li>
                </ul>


                <!-- /.navbar-top-links -->



                <div class=\"navbar-default sidebar\" role=\"navigation\">
                    <div class=\"sidebar-nav navbar-collapse\">
                        <ul class=\"nav\" id=\"side-menu\">
                          ";
        // line 78
        $this->displayBlock('menubar', $context, $blocks);
        // line 79
        echo "                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id=\"page-wrapper\">
                ";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>

        <div id=\"help\">
            <div><span id=\"mensaje\">Mensajes de ayuda</span>
                <button id=\"quitar\">Quitar ayuda</button>
            </div>
        </div>
        <button id=\"mostrar\">Mostrar ayuda</button>
        ";
        // line 100
        $this->displayBlock('javascripts', $context, $blocks);
        // line 115
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />



        ";
    }

    // line 78
    public function block_menubar($context, array $blocks = array())
    {
    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        // line 101
        echo "        <!-- jQuery -->
            <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/raphael/raphael.min.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/morrisjs/morris.min.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("data/morris-data.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/active.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/help.js"), "html", null, true);
        echo "\"/></script>

              <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 110,  220 => 109,  216 => 108,  212 => 107,  208 => 106,  204 => 105,  200 => 104,  196 => 103,  192 => 102,  189 => 101,  186 => 100,  181 => 87,  176 => 78,  167 => 12,  163 => 11,  159 => 10,  155 => 9,  151 => 8,  146 => 7,  143 => 6,  137 => 5,  131 => 115,  129 => 100,  115 => 88,  113 => 87,  103 => 79,  101 => 78,  36 => 17,  34 => 6,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('dist/css/sb-admin-2.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('vendor/morrisjs/morris.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>*/
/*         <link href="{{ asset('css/estilos.css') }}" rel="stylesheet" />*/
/* */
/* */
/* */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/*         <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">*/
/* */
/*     </head>*/
/*     <body>*/
/* */
/*         <div id="wrapper">*/
/* */
/*             <!-- Navigation -->*/
/*             <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="/">IntegrasTu</a>*/
/* */
/*                 </div>*/
/*                 <!-- /.navbar-header -->*/
/* */
/* */
/* */
/*                 <ul class="nav navbar-top-links navbar-right">*/
/* */
/*                     <!-- /.dropdown -->*/
/*                     <li class="dropdown">*/
/*                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                             <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                         </a>*/
/*                         <ul id="user" class="dropdown-menu dropdown-user">*/
/*                             <li><a href="register"><i class="fa fa-user fa-fw"></i>Registrar Usuarios</a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li><a href="/usuarios/logout"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesión</a>*/
/*                             </li>*/
/*                         </ul>*/
/* */
/* */
/*                         <!-- /.dropdown-user -->*/
/*                     </li>*/
/* */
/*                     <!-- /.dropdown -->*/
/*                 </ul>*/
/* */
/*                 <ul class="nav nav-tabs nav-justified">*/
/*                     <li id="clientes"><a class="active" href="/clientes">Clientes</a><span class="sr-only">current</span></li>*/
/*                     <li id="servicios"><a href="/servicios">Servicios</a></li>*/
/*                     <li id="trabajadoras"><a href="/trabajadoras" class="active">Empleadas</a><span class="sr-only">current</span></li>*/
/*                 </ul>*/
/* */
/* */
/*                 <!-- /.navbar-top-links -->*/
/* */
/* */
/* */
/*                 <div class="navbar-default sidebar" role="navigation">*/
/*                     <div class="sidebar-nav navbar-collapse">*/
/*                         <ul class="nav" id="side-menu">*/
/*                           {% block menubar %}{% endblock %}*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- /.sidebar-collapse -->*/
/*                 </div>*/
/*                 <!-- /.navbar-static-side -->*/
/*             </nav>*/
/* */
/*             <div id="page-wrapper">*/
/*                 {% block body %}{% endblock %}*/
/*                 <!-- /.row -->*/
/*             </div>*/
/*             <!-- /#page-wrapper -->*/
/* */
/*         </div>*/
/* */
/*         <div id="help">*/
/*             <div><span id="mensaje">Mensajes de ayuda</span>*/
/*                 <button id="quitar">Quitar ayuda</button>*/
/*             </div>*/
/*         </div>*/
/*         <button id="mostrar">Mostrar ayuda</button>*/
/*         {% block javascripts %}*/
/*         <!-- jQuery -->*/
/*             <script src="{{ asset('vendor/jquery/jquery.min.js') }}"/></script>*/
/*             <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"/></script>*/
/*             <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"/></script>*/
/*             <script src="{{ asset('vendor/raphael/raphael.min.js') }}"/></script>*/
/*             <script src="{{ asset('vendor/morrisjs/morris.min.js') }}"/></script>*/
/*             <script src="{{ asset('data/morris-data.js') }}"/></script>*/
/*             <script src="{{ asset('dist/js/sb-admin-2.js') }}"/></script>*/
/*             <script src="{{ asset('js/active.js') }}"/></script>*/
/*             <script src="{{ asset('js/help.js') }}"/></script>*/
/* */
/*               <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
