<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_19179dba84515c3aecd4fa5465debba977ce4288173c33959909cc0261a69edb extends Twig_Template
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
        $__internal_3f940a32f33554b3ede8785601076c9baeb7bf7555b65a1d56183ee03180fba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f940a32f33554b3ede8785601076c9baeb7bf7555b65a1d56183ee03180fba6->enter($__internal_3f940a32f33554b3ede8785601076c9baeb7bf7555b65a1d56183ee03180fba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4caeeb14970f6693970fa8e7bb38f4edce2c9043e31b14a3733666948465c7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4caeeb14970f6693970fa8e7bb38f4edce2c9043e31b14a3733666948465c7a0->enter($__internal_4caeeb14970f6693970fa8e7bb38f4edce2c9043e31b14a3733666948465c7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3f940a32f33554b3ede8785601076c9baeb7bf7555b65a1d56183ee03180fba6->leave($__internal_3f940a32f33554b3ede8785601076c9baeb7bf7555b65a1d56183ee03180fba6_prof);

        
        $__internal_4caeeb14970f6693970fa8e7bb38f4edce2c9043e31b14a3733666948465c7a0->leave($__internal_4caeeb14970f6693970fa8e7bb38f4edce2c9043e31b14a3733666948465c7a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
