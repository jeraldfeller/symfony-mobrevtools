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
        $__internal_718b5cfb1a20b6f494e7dedc711025574f9b529d11c212415365b7ed05788e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718b5cfb1a20b6f494e7dedc711025574f9b529d11c212415365b7ed05788e53->enter($__internal_718b5cfb1a20b6f494e7dedc711025574f9b529d11c212415365b7ed05788e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_65f66c4f91ed53f1ad32f5e9aa59a07c0636aef598d4b29d8ee28df8c6eb5212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f66c4f91ed53f1ad32f5e9aa59a07c0636aef598d4b29d8ee28df8c6eb5212->enter($__internal_65f66c4f91ed53f1ad32f5e9aa59a07c0636aef598d4b29d8ee28df8c6eb5212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_718b5cfb1a20b6f494e7dedc711025574f9b529d11c212415365b7ed05788e53->leave($__internal_718b5cfb1a20b6f494e7dedc711025574f9b529d11c212415365b7ed05788e53_prof);

        
        $__internal_65f66c4f91ed53f1ad32f5e9aa59a07c0636aef598d4b29d8ee28df8c6eb5212->leave($__internal_65f66c4f91ed53f1ad32f5e9aa59a07c0636aef598d4b29d8ee28df8c6eb5212_prof);

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
