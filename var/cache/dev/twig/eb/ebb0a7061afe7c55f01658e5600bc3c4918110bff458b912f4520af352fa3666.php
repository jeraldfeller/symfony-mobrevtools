<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3b561f975f00eb3eb9c0ebcf1d9dc531557c2ed5a49d2ebddef592aad978d461 extends Twig_Template
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
        $__internal_a70ee828290cdfb95e089f0a6e3d64fff7af540acc16685848a02326ae48feb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70ee828290cdfb95e089f0a6e3d64fff7af540acc16685848a02326ae48feb8->enter($__internal_a70ee828290cdfb95e089f0a6e3d64fff7af540acc16685848a02326ae48feb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_743b5b8112b642cbdab25234f3e3913535aa08aee6c13d962362709ebfc02cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743b5b8112b642cbdab25234f3e3913535aa08aee6c13d962362709ebfc02cf4->enter($__internal_743b5b8112b642cbdab25234f3e3913535aa08aee6c13d962362709ebfc02cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a70ee828290cdfb95e089f0a6e3d64fff7af540acc16685848a02326ae48feb8->leave($__internal_a70ee828290cdfb95e089f0a6e3d64fff7af540acc16685848a02326ae48feb8_prof);

        
        $__internal_743b5b8112b642cbdab25234f3e3913535aa08aee6c13d962362709ebfc02cf4->leave($__internal_743b5b8112b642cbdab25234f3e3913535aa08aee6c13d962362709ebfc02cf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
