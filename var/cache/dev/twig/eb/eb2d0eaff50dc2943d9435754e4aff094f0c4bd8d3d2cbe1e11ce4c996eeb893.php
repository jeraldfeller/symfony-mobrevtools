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
        $__internal_340b610855d939bcdc5c1f7af77744d33ef2e2f10949d6386205e4c9b0d3e219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340b610855d939bcdc5c1f7af77744d33ef2e2f10949d6386205e4c9b0d3e219->enter($__internal_340b610855d939bcdc5c1f7af77744d33ef2e2f10949d6386205e4c9b0d3e219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e0dbd4f281597b1d14a5a615fbf85fa393897d50b799ebcc37505f462a1bc97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0dbd4f281597b1d14a5a615fbf85fa393897d50b799ebcc37505f462a1bc97b->enter($__internal_e0dbd4f281597b1d14a5a615fbf85fa393897d50b799ebcc37505f462a1bc97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_340b610855d939bcdc5c1f7af77744d33ef2e2f10949d6386205e4c9b0d3e219->leave($__internal_340b610855d939bcdc5c1f7af77744d33ef2e2f10949d6386205e4c9b0d3e219_prof);

        
        $__internal_e0dbd4f281597b1d14a5a615fbf85fa393897d50b799ebcc37505f462a1bc97b->leave($__internal_e0dbd4f281597b1d14a5a615fbf85fa393897d50b799ebcc37505f462a1bc97b_prof);

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
