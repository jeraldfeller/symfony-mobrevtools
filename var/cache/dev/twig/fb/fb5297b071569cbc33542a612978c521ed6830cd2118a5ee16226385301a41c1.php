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
        $__internal_a55dddcf021c5845846ff1966afba2e7a4e8cd1a6294e62c8c67c05c44c8b30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55dddcf021c5845846ff1966afba2e7a4e8cd1a6294e62c8c67c05c44c8b30e->enter($__internal_a55dddcf021c5845846ff1966afba2e7a4e8cd1a6294e62c8c67c05c44c8b30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9101a718675b50edfa9db36b73f870ae1430a733026f0c05a4e07f761a016eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9101a718675b50edfa9db36b73f870ae1430a733026f0c05a4e07f761a016eda->enter($__internal_9101a718675b50edfa9db36b73f870ae1430a733026f0c05a4e07f761a016eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a55dddcf021c5845846ff1966afba2e7a4e8cd1a6294e62c8c67c05c44c8b30e->leave($__internal_a55dddcf021c5845846ff1966afba2e7a4e8cd1a6294e62c8c67c05c44c8b30e_prof);

        
        $__internal_9101a718675b50edfa9db36b73f870ae1430a733026f0c05a4e07f761a016eda->leave($__internal_9101a718675b50edfa9db36b73f870ae1430a733026f0c05a4e07f761a016eda_prof);

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
