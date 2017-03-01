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
        $__internal_7e3a730569ef1085051400d4ea2cd062845523d149c323a4b906d478be405e7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3a730569ef1085051400d4ea2cd062845523d149c323a4b906d478be405e7d->enter($__internal_7e3a730569ef1085051400d4ea2cd062845523d149c323a4b906d478be405e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_fd09223ec17597f62eb9e2afd1e474931eb7f2f85bb4a815907c1b06ec57662d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd09223ec17597f62eb9e2afd1e474931eb7f2f85bb4a815907c1b06ec57662d->enter($__internal_fd09223ec17597f62eb9e2afd1e474931eb7f2f85bb4a815907c1b06ec57662d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7e3a730569ef1085051400d4ea2cd062845523d149c323a4b906d478be405e7d->leave($__internal_7e3a730569ef1085051400d4ea2cd062845523d149c323a4b906d478be405e7d_prof);

        
        $__internal_fd09223ec17597f62eb9e2afd1e474931eb7f2f85bb4a815907c1b06ec57662d->leave($__internal_fd09223ec17597f62eb9e2afd1e474931eb7f2f85bb4a815907c1b06ec57662d_prof);

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
