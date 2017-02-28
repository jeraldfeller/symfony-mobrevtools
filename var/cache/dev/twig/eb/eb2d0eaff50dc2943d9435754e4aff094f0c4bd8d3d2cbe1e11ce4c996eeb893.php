<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5d80faa5d0517b4c6eb562e3cb8eea063b9cac5e1ccf6df8d408273bac5e239b extends Twig_Template
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
        $__internal_2871fe34867760b3c4498ab0fdfac826c22fab66b491f9f5e30fbad8a427f470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2871fe34867760b3c4498ab0fdfac826c22fab66b491f9f5e30fbad8a427f470->enter($__internal_2871fe34867760b3c4498ab0fdfac826c22fab66b491f9f5e30fbad8a427f470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_dbfad56dc146867c306e65201394a7c5519381a842031833034e299b021a793f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfad56dc146867c306e65201394a7c5519381a842031833034e299b021a793f->enter($__internal_dbfad56dc146867c306e65201394a7c5519381a842031833034e299b021a793f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2871fe34867760b3c4498ab0fdfac826c22fab66b491f9f5e30fbad8a427f470->leave($__internal_2871fe34867760b3c4498ab0fdfac826c22fab66b491f9f5e30fbad8a427f470_prof);

        
        $__internal_dbfad56dc146867c306e65201394a7c5519381a842031833034e299b021a793f->leave($__internal_dbfad56dc146867c306e65201394a7c5519381a842031833034e299b021a793f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
