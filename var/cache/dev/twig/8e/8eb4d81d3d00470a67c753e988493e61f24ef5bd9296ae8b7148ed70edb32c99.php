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
        $__internal_3b3c33a7fd2f32c5fbeef42799695279a4abbea040865f76785472bdbc6885d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3c33a7fd2f32c5fbeef42799695279a4abbea040865f76785472bdbc6885d7->enter($__internal_3b3c33a7fd2f32c5fbeef42799695279a4abbea040865f76785472bdbc6885d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d927ac8b1c0c8e556d10f2f332ad92a94feedf7aea01b91c9d159409abcf12d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d927ac8b1c0c8e556d10f2f332ad92a94feedf7aea01b91c9d159409abcf12d5->enter($__internal_d927ac8b1c0c8e556d10f2f332ad92a94feedf7aea01b91c9d159409abcf12d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3b3c33a7fd2f32c5fbeef42799695279a4abbea040865f76785472bdbc6885d7->leave($__internal_3b3c33a7fd2f32c5fbeef42799695279a4abbea040865f76785472bdbc6885d7_prof);

        
        $__internal_d927ac8b1c0c8e556d10f2f332ad92a94feedf7aea01b91c9d159409abcf12d5->leave($__internal_d927ac8b1c0c8e556d10f2f332ad92a94feedf7aea01b91c9d159409abcf12d5_prof);

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
