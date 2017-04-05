<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0050df91baea8b8ff649bdb3ae9c97137f39662a05a5bbbeaa12ca2f9686013f extends Twig_Template
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
        $__internal_c1e8ac026958b5ccfcd47600be5f2467fa7acd89bb9f93cb9beba8b8e674c744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e8ac026958b5ccfcd47600be5f2467fa7acd89bb9f93cb9beba8b8e674c744->enter($__internal_c1e8ac026958b5ccfcd47600be5f2467fa7acd89bb9f93cb9beba8b8e674c744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a1ae0386e7b78fbaec3490dee812b6312c2da1cc15b98fcd4986096232185fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ae0386e7b78fbaec3490dee812b6312c2da1cc15b98fcd4986096232185fdc->enter($__internal_a1ae0386e7b78fbaec3490dee812b6312c2da1cc15b98fcd4986096232185fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c1e8ac026958b5ccfcd47600be5f2467fa7acd89bb9f93cb9beba8b8e674c744->leave($__internal_c1e8ac026958b5ccfcd47600be5f2467fa7acd89bb9f93cb9beba8b8e674c744_prof);

        
        $__internal_a1ae0386e7b78fbaec3490dee812b6312c2da1cc15b98fcd4986096232185fdc->leave($__internal_a1ae0386e7b78fbaec3490dee812b6312c2da1cc15b98fcd4986096232185fdc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
