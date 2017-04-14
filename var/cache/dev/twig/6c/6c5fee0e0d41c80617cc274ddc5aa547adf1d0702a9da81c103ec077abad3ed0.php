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
        $__internal_3d8b2c7fbd30ac578323ebe41b28aad03f38ca630e64611ade682ccc6c5978d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8b2c7fbd30ac578323ebe41b28aad03f38ca630e64611ade682ccc6c5978d0->enter($__internal_3d8b2c7fbd30ac578323ebe41b28aad03f38ca630e64611ade682ccc6c5978d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_b0ca9f4c983b188859f5244f8fdb45f7652de9e5e0ccbaef61495795fd029987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ca9f4c983b188859f5244f8fdb45f7652de9e5e0ccbaef61495795fd029987->enter($__internal_b0ca9f4c983b188859f5244f8fdb45f7652de9e5e0ccbaef61495795fd029987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_3d8b2c7fbd30ac578323ebe41b28aad03f38ca630e64611ade682ccc6c5978d0->leave($__internal_3d8b2c7fbd30ac578323ebe41b28aad03f38ca630e64611ade682ccc6c5978d0_prof);

        
        $__internal_b0ca9f4c983b188859f5244f8fdb45f7652de9e5e0ccbaef61495795fd029987->leave($__internal_b0ca9f4c983b188859f5244f8fdb45f7652de9e5e0ccbaef61495795fd029987_prof);

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
