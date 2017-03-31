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
        $__internal_b03401c919e974ed1b63b0e58d97261c2c2bc8762480d173d9e9aa9d71ff9ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03401c919e974ed1b63b0e58d97261c2c2bc8762480d173d9e9aa9d71ff9ddc->enter($__internal_b03401c919e974ed1b63b0e58d97261c2c2bc8762480d173d9e9aa9d71ff9ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b821aec48efd1ba0f5fa186ab4bd4aaa6c3d0b048ea2306f4b94221549298577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b821aec48efd1ba0f5fa186ab4bd4aaa6c3d0b048ea2306f4b94221549298577->enter($__internal_b821aec48efd1ba0f5fa186ab4bd4aaa6c3d0b048ea2306f4b94221549298577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b03401c919e974ed1b63b0e58d97261c2c2bc8762480d173d9e9aa9d71ff9ddc->leave($__internal_b03401c919e974ed1b63b0e58d97261c2c2bc8762480d173d9e9aa9d71ff9ddc_prof);

        
        $__internal_b821aec48efd1ba0f5fa186ab4bd4aaa6c3d0b048ea2306f4b94221549298577->leave($__internal_b821aec48efd1ba0f5fa186ab4bd4aaa6c3d0b048ea2306f4b94221549298577_prof);

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
