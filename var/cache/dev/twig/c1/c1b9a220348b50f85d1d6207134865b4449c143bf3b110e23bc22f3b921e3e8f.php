<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_da0cef4df4138520b4a58a698aa73014dbbaebdc1b42a366bb9d3cf4e2ecc736 extends Twig_Template
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
        $__internal_2faa4d304312b8fa946f94c93d31b2fa6690419e66241d11e5e0062b02d1c4e3 = $this->env->getExtension("native_profiler");
        $__internal_2faa4d304312b8fa946f94c93d31b2fa6690419e66241d11e5e0062b02d1c4e3->enter($__internal_2faa4d304312b8fa946f94c93d31b2fa6690419e66241d11e5e0062b02d1c4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2faa4d304312b8fa946f94c93d31b2fa6690419e66241d11e5e0062b02d1c4e3->leave($__internal_2faa4d304312b8fa946f94c93d31b2fa6690419e66241d11e5e0062b02d1c4e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
