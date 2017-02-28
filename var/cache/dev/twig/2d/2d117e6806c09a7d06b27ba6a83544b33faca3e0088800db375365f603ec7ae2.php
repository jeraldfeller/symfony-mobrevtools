<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_9b8b23f81fd6fb587813f16531618ed54cb93290ebe5fa30f1f74869504230ba extends Twig_Template
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
        $__internal_cb166ba891ee289bd750ccd2bc1a9485fb04ca5e5d0026e16afd892c179cb74d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb166ba891ee289bd750ccd2bc1a9485fb04ca5e5d0026e16afd892c179cb74d->enter($__internal_cb166ba891ee289bd750ccd2bc1a9485fb04ca5e5d0026e16afd892c179cb74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_16262af49d9d12306b4678ce87210631b2ba2ec506acd1c29005a6a4988b55bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16262af49d9d12306b4678ce87210631b2ba2ec506acd1c29005a6a4988b55bf->enter($__internal_16262af49d9d12306b4678ce87210631b2ba2ec506acd1c29005a6a4988b55bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_cb166ba891ee289bd750ccd2bc1a9485fb04ca5e5d0026e16afd892c179cb74d->leave($__internal_cb166ba891ee289bd750ccd2bc1a9485fb04ca5e5d0026e16afd892c179cb74d_prof);

        
        $__internal_16262af49d9d12306b4678ce87210631b2ba2ec506acd1c29005a6a4988b55bf->leave($__internal_16262af49d9d12306b4678ce87210631b2ba2ec506acd1c29005a6a4988b55bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
