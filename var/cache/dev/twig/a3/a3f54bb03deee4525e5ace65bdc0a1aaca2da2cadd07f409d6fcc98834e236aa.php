<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e0938ad366002dc40c0def70d028a80cd1b46046c1733640b74876fc90a6a924 extends Twig_Template
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
        $__internal_b8b8cdb7392406acfede36b88d78141e555ccae2d2597207d8053781d647879e = $this->env->getExtension("native_profiler");
        $__internal_b8b8cdb7392406acfede36b88d78141e555ccae2d2597207d8053781d647879e->enter($__internal_b8b8cdb7392406acfede36b88d78141e555ccae2d2597207d8053781d647879e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b8b8cdb7392406acfede36b88d78141e555ccae2d2597207d8053781d647879e->leave($__internal_b8b8cdb7392406acfede36b88d78141e555ccae2d2597207d8053781d647879e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
