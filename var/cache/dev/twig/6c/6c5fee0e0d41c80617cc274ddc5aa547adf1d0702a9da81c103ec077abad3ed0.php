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
        $__internal_14e0f8ed9589c9053597c60d7a6fe3bd9df9dd90688445d8e613983d7b37af24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e0f8ed9589c9053597c60d7a6fe3bd9df9dd90688445d8e613983d7b37af24->enter($__internal_14e0f8ed9589c9053597c60d7a6fe3bd9df9dd90688445d8e613983d7b37af24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_45392c64dacd70524c19c45199b50199fa28ffc039075181574549baa7bb1d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45392c64dacd70524c19c45199b50199fa28ffc039075181574549baa7bb1d1e->enter($__internal_45392c64dacd70524c19c45199b50199fa28ffc039075181574549baa7bb1d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_14e0f8ed9589c9053597c60d7a6fe3bd9df9dd90688445d8e613983d7b37af24->leave($__internal_14e0f8ed9589c9053597c60d7a6fe3bd9df9dd90688445d8e613983d7b37af24_prof);

        
        $__internal_45392c64dacd70524c19c45199b50199fa28ffc039075181574549baa7bb1d1e->leave($__internal_45392c64dacd70524c19c45199b50199fa28ffc039075181574549baa7bb1d1e_prof);

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
