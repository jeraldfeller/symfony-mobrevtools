<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_10d2b1edc2ae529eb9dda1a95cda2e6b8e60d600e377108950c2618535fb5678 extends Twig_Template
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
        $__internal_35e2c545c0f54ba3955502d8d579b1cdfb9d47d9c905c2f5a9b3adaeea312619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e2c545c0f54ba3955502d8d579b1cdfb9d47d9c905c2f5a9b3adaeea312619->enter($__internal_35e2c545c0f54ba3955502d8d579b1cdfb9d47d9c905c2f5a9b3adaeea312619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_fd3d93df6fafc9107b1993d3e8fa01bbfc0927c1f1ccb4cf49649c0a37a4f88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3d93df6fafc9107b1993d3e8fa01bbfc0927c1f1ccb4cf49649c0a37a4f88e->enter($__internal_fd3d93df6fafc9107b1993d3e8fa01bbfc0927c1f1ccb4cf49649c0a37a4f88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_35e2c545c0f54ba3955502d8d579b1cdfb9d47d9c905c2f5a9b3adaeea312619->leave($__internal_35e2c545c0f54ba3955502d8d579b1cdfb9d47d9c905c2f5a9b3adaeea312619_prof);

        
        $__internal_fd3d93df6fafc9107b1993d3e8fa01bbfc0927c1f1ccb4cf49649c0a37a4f88e->leave($__internal_fd3d93df6fafc9107b1993d3e8fa01bbfc0927c1f1ccb4cf49649c0a37a4f88e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
