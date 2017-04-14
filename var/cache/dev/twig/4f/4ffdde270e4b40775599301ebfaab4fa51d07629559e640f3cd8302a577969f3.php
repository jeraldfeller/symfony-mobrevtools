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
        $__internal_fc2238e53efaf87f0b1c5d9cfd3af86fc08221b250ab3149704b58b50d9e1dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2238e53efaf87f0b1c5d9cfd3af86fc08221b250ab3149704b58b50d9e1dc2->enter($__internal_fc2238e53efaf87f0b1c5d9cfd3af86fc08221b250ab3149704b58b50d9e1dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_9ad40145a38fce0d47299d2515428a9e24687f6b3a12c9d307f5f14cde8bd508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad40145a38fce0d47299d2515428a9e24687f6b3a12c9d307f5f14cde8bd508->enter($__internal_9ad40145a38fce0d47299d2515428a9e24687f6b3a12c9d307f5f14cde8bd508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fc2238e53efaf87f0b1c5d9cfd3af86fc08221b250ab3149704b58b50d9e1dc2->leave($__internal_fc2238e53efaf87f0b1c5d9cfd3af86fc08221b250ab3149704b58b50d9e1dc2_prof);

        
        $__internal_9ad40145a38fce0d47299d2515428a9e24687f6b3a12c9d307f5f14cde8bd508->leave($__internal_9ad40145a38fce0d47299d2515428a9e24687f6b3a12c9d307f5f14cde8bd508_prof);

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
