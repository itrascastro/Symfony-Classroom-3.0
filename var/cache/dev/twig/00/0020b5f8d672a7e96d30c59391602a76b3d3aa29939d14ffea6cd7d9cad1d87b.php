<?php

/* UserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_e04b3b0ad0aa56a2e1421c9da605f497d0c3defc1debc8595c724746d9900166 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6cf341f23c093c6b290d33aef387499e81df8d519d9b67304bb6311ce774d87 = $this->env->getExtension("native_profiler");
        $__internal_b6cf341f23c093c6b290d33aef387499e81df8d519d9b67304bb6311ce774d87->enter($__internal_b6cf341f23c093c6b290d33aef387499e81df8d519d9b67304bb6311ce774d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6cf341f23c093c6b290d33aef387499e81df8d519d9b67304bb6311ce774d87->leave($__internal_b6cf341f23c093c6b290d33aef387499e81df8d519d9b67304bb6311ce774d87_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18f6666d48467f938199852a3917870064b12017f6e17ad3432e09d29fc7c1fd = $this->env->getExtension("native_profiler");
        $__internal_18f6666d48467f938199852a3917870064b12017f6e17ad3432e09d29fc7c1fd->enter($__internal_18f6666d48467f938199852a3917870064b12017f6e17ad3432e09d29fc7c1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_18f6666d48467f938199852a3917870064b12017f6e17ad3432e09d29fc7c1fd->leave($__internal_18f6666d48467f938199852a3917870064b12017f6e17ad3432e09d29fc7c1fd_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
