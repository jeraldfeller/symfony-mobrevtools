<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_fbdefb194f8c2305efd335e0e387e4f4ae526acd801fdf32de222e89b99109a5 extends Twig_Template
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
        $__internal_51152148bb2ca63241c52036f955ef980857f2edce4f0e8d448cd74b04e15c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51152148bb2ca63241c52036f955ef980857f2edce4f0e8d448cd74b04e15c47->enter($__internal_51152148bb2ca63241c52036f955ef980857f2edce4f0e8d448cd74b04e15c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_f6702bd386c58827252eb513e54125ed6f9006f5424fe8605fd9820873740a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6702bd386c58827252eb513e54125ed6f9006f5424fe8605fd9820873740a50->enter($__internal_f6702bd386c58827252eb513e54125ed6f9006f5424fe8605fd9820873740a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_51152148bb2ca63241c52036f955ef980857f2edce4f0e8d448cd74b04e15c47->leave($__internal_51152148bb2ca63241c52036f955ef980857f2edce4f0e8d448cd74b04e15c47_prof);

        
        $__internal_f6702bd386c58827252eb513e54125ed6f9006f5424fe8605fd9820873740a50->leave($__internal_f6702bd386c58827252eb513e54125ed6f9006f5424fe8605fd9820873740a50_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
