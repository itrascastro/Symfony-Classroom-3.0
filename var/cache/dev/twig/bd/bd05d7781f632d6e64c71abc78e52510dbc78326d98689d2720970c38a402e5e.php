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
        $__internal_3032df4bfc830e8bd92b029eee0b44b242ac3a65e791d0d8326711e61f0efff6 = $this->env->getExtension("native_profiler");
        $__internal_3032df4bfc830e8bd92b029eee0b44b242ac3a65e791d0d8326711e61f0efff6->enter($__internal_3032df4bfc830e8bd92b029eee0b44b242ac3a65e791d0d8326711e61f0efff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3032df4bfc830e8bd92b029eee0b44b242ac3a65e791d0d8326711e61f0efff6->leave($__internal_3032df4bfc830e8bd92b029eee0b44b242ac3a65e791d0d8326711e61f0efff6_prof);

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
