<?php

/* UserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_785340534e3be41ff90c4b5862d4e71630ec75279157f3b34b900a59b18bb766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_b20fa7a03684dc2d32916cb5fdc9c2cc2e494cc8e720823d3b4394b288656cb2 = $this->env->getExtension("native_profiler");
        $__internal_b20fa7a03684dc2d32916cb5fdc9c2cc2e494cc8e720823d3b4394b288656cb2->enter($__internal_b20fa7a03684dc2d32916cb5fdc9c2cc2e494cc8e720823d3b4394b288656cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b20fa7a03684dc2d32916cb5fdc9c2cc2e494cc8e720823d3b4394b288656cb2->leave($__internal_b20fa7a03684dc2d32916cb5fdc9c2cc2e494cc8e720823d3b4394b288656cb2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b536b16d242d5c84a5dbb3dabc0ddaf44b6aed1bd0d3e68b7763900248375752 = $this->env->getExtension("native_profiler");
        $__internal_b536b16d242d5c84a5dbb3dabc0ddaf44b6aed1bd0d3e68b7763900248375752->enter($__internal_b536b16d242d5c84a5dbb3dabc0ddaf44b6aed1bd0d3e68b7763900248375752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b536b16d242d5c84a5dbb3dabc0ddaf44b6aed1bd0d3e68b7763900248375752->leave($__internal_b536b16d242d5c84a5dbb3dabc0ddaf44b6aed1bd0d3e68b7763900248375752_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
