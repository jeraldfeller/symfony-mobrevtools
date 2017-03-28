<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7f65b22b222b4587006b29e47c0a12451f874f04c5b0970b7ccbac6f1ba651e2 extends Twig_Template
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
        $__internal_ba5ebcf1c599688cbf4a22b460b3044a1a1cc593173ec816e4110d7010f2aaf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5ebcf1c599688cbf4a22b460b3044a1a1cc593173ec816e4110d7010f2aaf8->enter($__internal_ba5ebcf1c599688cbf4a22b460b3044a1a1cc593173ec816e4110d7010f2aaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_420b001283e3c51b94b64f9e0ae6901148749d1ecd2c99102c5585034af778d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420b001283e3c51b94b64f9e0ae6901148749d1ecd2c99102c5585034af778d7->enter($__internal_420b001283e3c51b94b64f9e0ae6901148749d1ecd2c99102c5585034af778d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ba5ebcf1c599688cbf4a22b460b3044a1a1cc593173ec816e4110d7010f2aaf8->leave($__internal_ba5ebcf1c599688cbf4a22b460b3044a1a1cc593173ec816e4110d7010f2aaf8_prof);

        
        $__internal_420b001283e3c51b94b64f9e0ae6901148749d1ecd2c99102c5585034af778d7->leave($__internal_420b001283e3c51b94b64f9e0ae6901148749d1ecd2c99102c5585034af778d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
