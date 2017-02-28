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
        $__internal_476b25913acdf35272e32b6cc688078f4aa1d286660b4300427fe0acbd65ee49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476b25913acdf35272e32b6cc688078f4aa1d286660b4300427fe0acbd65ee49->enter($__internal_476b25913acdf35272e32b6cc688078f4aa1d286660b4300427fe0acbd65ee49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_0e1a05b5c475694e1d3afb591f1b8ab28038288af29284b6d6c4ded041e718b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1a05b5c475694e1d3afb591f1b8ab28038288af29284b6d6c4ded041e718b6->enter($__internal_0e1a05b5c475694e1d3afb591f1b8ab28038288af29284b6d6c4ded041e718b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_476b25913acdf35272e32b6cc688078f4aa1d286660b4300427fe0acbd65ee49->leave($__internal_476b25913acdf35272e32b6cc688078f4aa1d286660b4300427fe0acbd65ee49_prof);

        
        $__internal_0e1a05b5c475694e1d3afb591f1b8ab28038288af29284b6d6c4ded041e718b6->leave($__internal_0e1a05b5c475694e1d3afb591f1b8ab28038288af29284b6d6c4ded041e718b6_prof);

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
