<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8aca62dec61eb97bc00bf257f9163e2a2a2fd0ff96c4f4ca3558630e66cf6001 extends Twig_Template
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
        $__internal_6ea220db72cc4313b1a5d63a8fab82c98d10bb68ab46cc33b0acac9ee9b3bee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea220db72cc4313b1a5d63a8fab82c98d10bb68ab46cc33b0acac9ee9b3bee4->enter($__internal_6ea220db72cc4313b1a5d63a8fab82c98d10bb68ab46cc33b0acac9ee9b3bee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_af638c3ce6bf7b0d143d07820b093148d3f66596cee6249bdfe6fc6641f5a037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af638c3ce6bf7b0d143d07820b093148d3f66596cee6249bdfe6fc6641f5a037->enter($__internal_af638c3ce6bf7b0d143d07820b093148d3f66596cee6249bdfe6fc6641f5a037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6ea220db72cc4313b1a5d63a8fab82c98d10bb68ab46cc33b0acac9ee9b3bee4->leave($__internal_6ea220db72cc4313b1a5d63a8fab82c98d10bb68ab46cc33b0acac9ee9b3bee4_prof);

        
        $__internal_af638c3ce6bf7b0d143d07820b093148d3f66596cee6249bdfe6fc6641f5a037->leave($__internal_af638c3ce6bf7b0d143d07820b093148d3f66596cee6249bdfe6fc6641f5a037_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
