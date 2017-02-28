<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b4acb9cb541094e958246a4a248df9cee748a724cdbf1f8d584c5dd654ef781f extends Twig_Template
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
        $__internal_6da60deea08875ebc2447011b5c405de9509e6e4c502f66a428ce5862fac4566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da60deea08875ebc2447011b5c405de9509e6e4c502f66a428ce5862fac4566->enter($__internal_6da60deea08875ebc2447011b5c405de9509e6e4c502f66a428ce5862fac4566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e845c92d6b559323252b6735a356e7a5ec33380e0d920b0ebd16441e682db241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e845c92d6b559323252b6735a356e7a5ec33380e0d920b0ebd16441e682db241->enter($__internal_e845c92d6b559323252b6735a356e7a5ec33380e0d920b0ebd16441e682db241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_6da60deea08875ebc2447011b5c405de9509e6e4c502f66a428ce5862fac4566->leave($__internal_6da60deea08875ebc2447011b5c405de9509e6e4c502f66a428ce5862fac4566_prof);

        
        $__internal_e845c92d6b559323252b6735a356e7a5ec33380e0d920b0ebd16441e682db241->leave($__internal_e845c92d6b559323252b6735a356e7a5ec33380e0d920b0ebd16441e682db241_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
