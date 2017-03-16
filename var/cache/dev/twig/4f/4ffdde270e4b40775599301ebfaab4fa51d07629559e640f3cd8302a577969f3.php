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
        $__internal_9176f462b0db3ba78fa980bbc7e27bfa95af9201de875b3687fc370a29d4e77f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9176f462b0db3ba78fa980bbc7e27bfa95af9201de875b3687fc370a29d4e77f->enter($__internal_9176f462b0db3ba78fa980bbc7e27bfa95af9201de875b3687fc370a29d4e77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_bee77739c57c7442cd1274b03734233b893186e61dfbf4fef5cb01b495d6220f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee77739c57c7442cd1274b03734233b893186e61dfbf4fef5cb01b495d6220f->enter($__internal_bee77739c57c7442cd1274b03734233b893186e61dfbf4fef5cb01b495d6220f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9176f462b0db3ba78fa980bbc7e27bfa95af9201de875b3687fc370a29d4e77f->leave($__internal_9176f462b0db3ba78fa980bbc7e27bfa95af9201de875b3687fc370a29d4e77f_prof);

        
        $__internal_bee77739c57c7442cd1274b03734233b893186e61dfbf4fef5cb01b495d6220f->leave($__internal_bee77739c57c7442cd1274b03734233b893186e61dfbf4fef5cb01b495d6220f_prof);

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
