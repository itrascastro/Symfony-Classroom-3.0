<?php

/* :user:menu.html.twig */
class __TwigTemplate_0b16276001344494d59a98435b758e44d5c7891e2669c298167be6032e5d2f11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":user:menu.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24e542e4f26c225f7f365044563ece8e9c8d5aa882bb35966f71311ffdc6b491 = $this->env->getExtension("native_profiler");
        $__internal_24e542e4f26c225f7f365044563ece8e9c8d5aa882bb35966f71311ffdc6b491->enter($__internal_24e542e4f26c225f7f365044563ece8e9c8d5aa882bb35966f71311ffdc6b491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24e542e4f26c225f7f365044563ece8e9c8d5aa882bb35966f71311ffdc6b491->leave($__internal_24e542e4f26c225f7f365044563ece8e9c8d5aa882bb35966f71311ffdc6b491_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5cfafe596d2216510799e40eade35476b89eb7c311602420cfe77bf2800fba2 = $this->env->getExtension("native_profiler");
        $__internal_f5cfafe596d2216510799e40eade35476b89eb7c311602420cfe77bf2800fba2->enter($__internal_f5cfafe596d2216510799e40eade35476b89eb7c311602420cfe77bf2800fba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        <ul>
            <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("app_user_menu");
        echo "\">Menu</a></li>
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("app_user_index");
        echo "\">List Users</a></li>
        </ul>
        <div>
            ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                Welcome ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " | <a href=\"";
            echo $this->env->getExtension('routing')->getPath("app_security_logout");
            echo "\">Logout</a>
            ";
        } elseif ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_ANONYMOUSLY")) {
            // line 13
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("app_security_login");
            echo "\">Sign in</a>
                <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("app_user_register");
            echo "\">Sign up</a>
            ";
        }
        // line 16
        echo "        </div>
    </div>
";
        
        $__internal_f5cfafe596d2216510799e40eade35476b89eb7c311602420cfe77bf2800fba2->leave($__internal_f5cfafe596d2216510799e40eade35476b89eb7c311602420cfe77bf2800fba2_prof);

    }

    public function getTemplateName()
    {
        return ":user:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  69 => 14,  64 => 13,  56 => 11,  54 => 10,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         <ul>*/
/*             <li><a href="{{ path('app_user_menu') }}">Menu</a></li>*/
/*             <li><a href="{{ path('app_user_index') }}">List Users</a></li>*/
/*         </ul>*/
/*         <div>*/
/*             {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                 Welcome {{ app.user.username }} | <a href="{{ path('app_security_logout') }}">Logout</a>*/
/*             {% elseif is_granted('IS_AUTHENTICATED_ANONYMOUSLY') %}*/
/*                 <a href="{{ path('app_security_login') }}">Sign in</a>*/
/*                 <a href="{{ path('app_user_register') }}">Sign up</a>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
