<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b697a1d351e8e1c17751e5f6be2ebb3874d728c4d74cd3be793cfe108ca14494 extends Twig_Template
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
        $__internal_1459905df1afb5f4ad500659d775748b7e0c545212ffc7b2996d34727d124806 = $this->env->getExtension("native_profiler");
        $__internal_1459905df1afb5f4ad500659d775748b7e0c545212ffc7b2996d34727d124806->enter($__internal_1459905df1afb5f4ad500659d775748b7e0c545212ffc7b2996d34727d124806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1459905df1afb5f4ad500659d775748b7e0c545212ffc7b2996d34727d124806->leave($__internal_1459905df1afb5f4ad500659d775748b7e0c545212ffc7b2996d34727d124806_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
