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
        $__internal_52435e53992a044d712af70beb2b6d1136059393f02abe25da9220ba21e998f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52435e53992a044d712af70beb2b6d1136059393f02abe25da9220ba21e998f7->enter($__internal_52435e53992a044d712af70beb2b6d1136059393f02abe25da9220ba21e998f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_ae09031c72d9811f8bf14ee07e03be42e9278f380bd755c7588846afbd9c0c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae09031c72d9811f8bf14ee07e03be42e9278f380bd755c7588846afbd9c0c21->enter($__internal_ae09031c72d9811f8bf14ee07e03be42e9278f380bd755c7588846afbd9c0c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_52435e53992a044d712af70beb2b6d1136059393f02abe25da9220ba21e998f7->leave($__internal_52435e53992a044d712af70beb2b6d1136059393f02abe25da9220ba21e998f7_prof);

        
        $__internal_ae09031c72d9811f8bf14ee07e03be42e9278f380bd755c7588846afbd9c0c21->leave($__internal_ae09031c72d9811f8bf14ee07e03be42e9278f380bd755c7588846afbd9c0c21_prof);

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
