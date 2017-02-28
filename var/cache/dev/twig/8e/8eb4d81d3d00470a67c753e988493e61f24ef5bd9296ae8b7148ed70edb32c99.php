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
        $__internal_5cc196fc0af3fb5ad466a6be74dbfe12661a81c365fb4879bd11cd14b71cb0f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc196fc0af3fb5ad466a6be74dbfe12661a81c365fb4879bd11cd14b71cb0f9->enter($__internal_5cc196fc0af3fb5ad466a6be74dbfe12661a81c365fb4879bd11cd14b71cb0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d3b5751b238a0bdea84105cbc36ea7e3f4a28ab8e185afd65d2093797d68ab1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b5751b238a0bdea84105cbc36ea7e3f4a28ab8e185afd65d2093797d68ab1a->enter($__internal_d3b5751b238a0bdea84105cbc36ea7e3f4a28ab8e185afd65d2093797d68ab1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5cc196fc0af3fb5ad466a6be74dbfe12661a81c365fb4879bd11cd14b71cb0f9->leave($__internal_5cc196fc0af3fb5ad466a6be74dbfe12661a81c365fb4879bd11cd14b71cb0f9_prof);

        
        $__internal_d3b5751b238a0bdea84105cbc36ea7e3f4a28ab8e185afd65d2093797d68ab1a->leave($__internal_d3b5751b238a0bdea84105cbc36ea7e3f4a28ab8e185afd65d2093797d68ab1a_prof);

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
