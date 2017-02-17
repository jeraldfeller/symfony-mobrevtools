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
        $__internal_5ca6fdfa793d4d9d4b5cd9eccadefc5051a23c885086825fe30f7c3b8e4acea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca6fdfa793d4d9d4b5cd9eccadefc5051a23c885086825fe30f7c3b8e4acea4->enter($__internal_5ca6fdfa793d4d9d4b5cd9eccadefc5051a23c885086825fe30f7c3b8e4acea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_14d177c9b14f95025cef1f9a5d90b341da384cf92da78f0b757b53e4cd5f584e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d177c9b14f95025cef1f9a5d90b341da384cf92da78f0b757b53e4cd5f584e->enter($__internal_14d177c9b14f95025cef1f9a5d90b341da384cf92da78f0b757b53e4cd5f584e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5ca6fdfa793d4d9d4b5cd9eccadefc5051a23c885086825fe30f7c3b8e4acea4->leave($__internal_5ca6fdfa793d4d9d4b5cd9eccadefc5051a23c885086825fe30f7c3b8e4acea4_prof);

        
        $__internal_14d177c9b14f95025cef1f9a5d90b341da384cf92da78f0b757b53e4cd5f584e->leave($__internal_14d177c9b14f95025cef1f9a5d90b341da384cf92da78f0b757b53e4cd5f584e_prof);

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
