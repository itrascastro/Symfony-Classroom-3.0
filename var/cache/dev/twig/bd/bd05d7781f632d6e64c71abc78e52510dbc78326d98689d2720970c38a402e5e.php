<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7b43b24f46897e5f29f3956ed5eefff912257a67eb5b7376349b76e4c9040037 extends Twig_Template
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
        $__internal_0d72d820aa9d973d5af9bbef95576ac057b57727cc53aa4a0cbe0293394ac009 = $this->env->getExtension("native_profiler");
        $__internal_0d72d820aa9d973d5af9bbef95576ac057b57727cc53aa4a0cbe0293394ac009->enter($__internal_0d72d820aa9d973d5af9bbef95576ac057b57727cc53aa4a0cbe0293394ac009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0d72d820aa9d973d5af9bbef95576ac057b57727cc53aa4a0cbe0293394ac009->leave($__internal_0d72d820aa9d973d5af9bbef95576ac057b57727cc53aa4a0cbe0293394ac009_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
