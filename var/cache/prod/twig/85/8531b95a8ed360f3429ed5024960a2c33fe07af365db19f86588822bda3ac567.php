<?php

/* @PIG/User/login.html.twig */
class __TwigTemplate_bee970f4be9a312c3116819b7cdcefb011d317ddf7dabcaeea516c22a563e45d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@PIG/User/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menubar' => array($this, 'block_menubar'),
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('menubar', $context, $blocks);
        // line 9
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 10
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 12
        echo "
<div class=\"loginRegister\">
<form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Usuario o email:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />

    <label for=\"password\">Contraseña:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 26
        echo "
    <button type=\"submit\">login</button>
</form>
</div>

";
    }

    // line 7
    public function block_menubar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@PIG/User/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 7,  69 => 26,  61 => 16,  56 => 14,  52 => 12,  46 => 10,  44 => 9,  42 => 7,  39 => 6,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}PIG{% endblock %}*/
/* {% block body %}*/
/* {# app/Resources/views/security/login.html.twig #}*/
/* {# ... you will probably extend your base template, like base.html.twig #}*/
/* */
/* {% block menubar %}*/
/* {% endblock %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <div class="loginRegister">*/
/* <form action="{{ path('login') }}" method="post">*/
/*     <label for="username">Usuario o email:</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Contraseña:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/* */
/*     {#*/
/*         If you want to control the URL the user*/
/*         is redirected to on success (more details below)*/
/*         <input type="hidden" name="_target_path" value="/account" />*/
/*     #}*/
/* */
/*     <button type="submit">login</button>*/
/* </form>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
