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
        $__internal_527c63ba7faeba8601d6189c69fc7093b9615ca0035605605c09354be6255a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527c63ba7faeba8601d6189c69fc7093b9615ca0035605605c09354be6255a30->enter($__internal_527c63ba7faeba8601d6189c69fc7093b9615ca0035605605c09354be6255a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0a35a8ed593e0cd32ae37a77d92177523bd53528e39033b7ffcddbd87cf231b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a35a8ed593e0cd32ae37a77d92177523bd53528e39033b7ffcddbd87cf231b5->enter($__internal_0a35a8ed593e0cd32ae37a77d92177523bd53528e39033b7ffcddbd87cf231b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_527c63ba7faeba8601d6189c69fc7093b9615ca0035605605c09354be6255a30->leave($__internal_527c63ba7faeba8601d6189c69fc7093b9615ca0035605605c09354be6255a30_prof);

        
        $__internal_0a35a8ed593e0cd32ae37a77d92177523bd53528e39033b7ffcddbd87cf231b5->leave($__internal_0a35a8ed593e0cd32ae37a77d92177523bd53528e39033b7ffcddbd87cf231b5_prof);

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
