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
        $__internal_7aecc56945b34bceea1cb17f89b2baf06d9c21343944c6d68290b55d17d8829c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aecc56945b34bceea1cb17f89b2baf06d9c21343944c6d68290b55d17d8829c->enter($__internal_7aecc56945b34bceea1cb17f89b2baf06d9c21343944c6d68290b55d17d8829c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_eda463469efe7f0bb15f7f228f70c259f775e9a23a0580048a949c6ff28e0e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda463469efe7f0bb15f7f228f70c259f775e9a23a0580048a949c6ff28e0e69->enter($__internal_eda463469efe7f0bb15f7f228f70c259f775e9a23a0580048a949c6ff28e0e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7aecc56945b34bceea1cb17f89b2baf06d9c21343944c6d68290b55d17d8829c->leave($__internal_7aecc56945b34bceea1cb17f89b2baf06d9c21343944c6d68290b55d17d8829c_prof);

        
        $__internal_eda463469efe7f0bb15f7f228f70c259f775e9a23a0580048a949c6ff28e0e69->leave($__internal_eda463469efe7f0bb15f7f228f70c259f775e9a23a0580048a949c6ff28e0e69_prof);

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
