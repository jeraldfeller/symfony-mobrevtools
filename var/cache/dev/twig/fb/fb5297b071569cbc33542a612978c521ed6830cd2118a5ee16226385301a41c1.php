<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_bd1c7b2500f34d04f02f729190dc97c56081869ac1fa7ae0c96545d50fac483a extends Twig_Template
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
        $__internal_d84e9537e37351e4c78e46c3f13c7f73cd915ec6f80b5494ee32d4a98b9231f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84e9537e37351e4c78e46c3f13c7f73cd915ec6f80b5494ee32d4a98b9231f3->enter($__internal_d84e9537e37351e4c78e46c3f13c7f73cd915ec6f80b5494ee32d4a98b9231f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9a4c5a11dc70697fc0f7379c948f36df64c5a5515eb7fb65f3c8a260fdba5460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4c5a11dc70697fc0f7379c948f36df64c5a5515eb7fb65f3c8a260fdba5460->enter($__internal_9a4c5a11dc70697fc0f7379c948f36df64c5a5515eb7fb65f3c8a260fdba5460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d84e9537e37351e4c78e46c3f13c7f73cd915ec6f80b5494ee32d4a98b9231f3->leave($__internal_d84e9537e37351e4c78e46c3f13c7f73cd915ec6f80b5494ee32d4a98b9231f3_prof);

        
        $__internal_9a4c5a11dc70697fc0f7379c948f36df64c5a5515eb7fb65f3c8a260fdba5460->leave($__internal_9a4c5a11dc70697fc0f7379c948f36df64c5a5515eb7fb65f3c8a260fdba5460_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
