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
        $__internal_ee289d76bff9e0a3980a309537745e2ac1e0a90ec37acce2b171aa5aaa5e8788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee289d76bff9e0a3980a309537745e2ac1e0a90ec37acce2b171aa5aaa5e8788->enter($__internal_ee289d76bff9e0a3980a309537745e2ac1e0a90ec37acce2b171aa5aaa5e8788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_101d6fdeecddcbb2cd6feaa120ed1d5285531e0385622b6e68621590cf351cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101d6fdeecddcbb2cd6feaa120ed1d5285531e0385622b6e68621590cf351cad->enter($__internal_101d6fdeecddcbb2cd6feaa120ed1d5285531e0385622b6e68621590cf351cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ee289d76bff9e0a3980a309537745e2ac1e0a90ec37acce2b171aa5aaa5e8788->leave($__internal_ee289d76bff9e0a3980a309537745e2ac1e0a90ec37acce2b171aa5aaa5e8788_prof);

        
        $__internal_101d6fdeecddcbb2cd6feaa120ed1d5285531e0385622b6e68621590cf351cad->leave($__internal_101d6fdeecddcbb2cd6feaa120ed1d5285531e0385622b6e68621590cf351cad_prof);

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
