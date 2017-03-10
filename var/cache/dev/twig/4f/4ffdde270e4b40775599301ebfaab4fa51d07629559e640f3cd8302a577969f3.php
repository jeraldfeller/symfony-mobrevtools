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
        $__internal_aa2234ec984a0ed0b73763ef642aa3cdcb74d63f85556a0ee83603af4ff28762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa2234ec984a0ed0b73763ef642aa3cdcb74d63f85556a0ee83603af4ff28762->enter($__internal_aa2234ec984a0ed0b73763ef642aa3cdcb74d63f85556a0ee83603af4ff28762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b43946fc06baf24233e3bb5a7e2cd0142d0c0f5f19c269c7c96f617e506bea08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43946fc06baf24233e3bb5a7e2cd0142d0c0f5f19c269c7c96f617e506bea08->enter($__internal_b43946fc06baf24233e3bb5a7e2cd0142d0c0f5f19c269c7c96f617e506bea08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_aa2234ec984a0ed0b73763ef642aa3cdcb74d63f85556a0ee83603af4ff28762->leave($__internal_aa2234ec984a0ed0b73763ef642aa3cdcb74d63f85556a0ee83603af4ff28762_prof);

        
        $__internal_b43946fc06baf24233e3bb5a7e2cd0142d0c0f5f19c269c7c96f617e506bea08->leave($__internal_b43946fc06baf24233e3bb5a7e2cd0142d0c0f5f19c269c7c96f617e506bea08_prof);

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
