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
        $__internal_e14f9a572921134dd34442aa471813d681b2cc75caa076a9cf386e257f741a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14f9a572921134dd34442aa471813d681b2cc75caa076a9cf386e257f741a1b->enter($__internal_e14f9a572921134dd34442aa471813d681b2cc75caa076a9cf386e257f741a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_52a708003aa567e8ba82fc4084d423e82f826a1814bdb7374f089e037babf2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a708003aa567e8ba82fc4084d423e82f826a1814bdb7374f089e037babf2d2->enter($__internal_52a708003aa567e8ba82fc4084d423e82f826a1814bdb7374f089e037babf2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_e14f9a572921134dd34442aa471813d681b2cc75caa076a9cf386e257f741a1b->leave($__internal_e14f9a572921134dd34442aa471813d681b2cc75caa076a9cf386e257f741a1b_prof);

        
        $__internal_52a708003aa567e8ba82fc4084d423e82f826a1814bdb7374f089e037babf2d2->leave($__internal_52a708003aa567e8ba82fc4084d423e82f826a1814bdb7374f089e037babf2d2_prof);

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
