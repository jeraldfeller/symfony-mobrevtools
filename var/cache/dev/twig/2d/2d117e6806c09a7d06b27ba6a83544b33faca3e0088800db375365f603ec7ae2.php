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
        $__internal_b6bac1fa420077f22ba49e8471b1464039d3427f707255528f5c8019802c53ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6bac1fa420077f22ba49e8471b1464039d3427f707255528f5c8019802c53ff->enter($__internal_b6bac1fa420077f22ba49e8471b1464039d3427f707255528f5c8019802c53ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_75b29a33e6754a6d582664404d97cd57851d35a140312fc0d9663d73506ebb78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b29a33e6754a6d582664404d97cd57851d35a140312fc0d9663d73506ebb78->enter($__internal_75b29a33e6754a6d582664404d97cd57851d35a140312fc0d9663d73506ebb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b6bac1fa420077f22ba49e8471b1464039d3427f707255528f5c8019802c53ff->leave($__internal_b6bac1fa420077f22ba49e8471b1464039d3427f707255528f5c8019802c53ff_prof);

        
        $__internal_75b29a33e6754a6d582664404d97cd57851d35a140312fc0d9663d73506ebb78->leave($__internal_75b29a33e6754a6d582664404d97cd57851d35a140312fc0d9663d73506ebb78_prof);

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
