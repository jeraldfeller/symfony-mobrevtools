<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_48ae2895c61845b2d88a64f807d00c5820ba5c1eed99bdb20ab46733445f8c35 extends Twig_Template
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
        $__internal_cee68380a27355e157bf6e9c24bf937015a4ab04db4c710e78cc28dda5777c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee68380a27355e157bf6e9c24bf937015a4ab04db4c710e78cc28dda5777c2c->enter($__internal_cee68380a27355e157bf6e9c24bf937015a4ab04db4c710e78cc28dda5777c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_2576b325aded507aaef8210ba6ad12470eb105252bbccb42aebbcece3351295e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2576b325aded507aaef8210ba6ad12470eb105252bbccb42aebbcece3351295e->enter($__internal_2576b325aded507aaef8210ba6ad12470eb105252bbccb42aebbcece3351295e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_cee68380a27355e157bf6e9c24bf937015a4ab04db4c710e78cc28dda5777c2c->leave($__internal_cee68380a27355e157bf6e9c24bf937015a4ab04db4c710e78cc28dda5777c2c_prof);

        
        $__internal_2576b325aded507aaef8210ba6ad12470eb105252bbccb42aebbcece3351295e->leave($__internal_2576b325aded507aaef8210ba6ad12470eb105252bbccb42aebbcece3351295e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
