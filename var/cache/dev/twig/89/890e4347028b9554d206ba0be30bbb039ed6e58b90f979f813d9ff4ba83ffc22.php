<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_f544f412f143d9c4dc7ec46d19891d06889329c7b23ede88ea98486e55801520 extends Twig_Template
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
        $__internal_10587234f770b27f74929f8ea59b7272f8a76dbc0473a65b1d46001a5266f229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10587234f770b27f74929f8ea59b7272f8a76dbc0473a65b1d46001a5266f229->enter($__internal_10587234f770b27f74929f8ea59b7272f8a76dbc0473a65b1d46001a5266f229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_ee7e46224089d96d87b1f355c12584f5d75c9a9fde7cf1c03d4865e86453a342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7e46224089d96d87b1f355c12584f5d75c9a9fde7cf1c03d4865e86453a342->enter($__internal_ee7e46224089d96d87b1f355c12584f5d75c9a9fde7cf1c03d4865e86453a342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_10587234f770b27f74929f8ea59b7272f8a76dbc0473a65b1d46001a5266f229->leave($__internal_10587234f770b27f74929f8ea59b7272f8a76dbc0473a65b1d46001a5266f229_prof);

        
        $__internal_ee7e46224089d96d87b1f355c12584f5d75c9a9fde7cf1c03d4865e86453a342->leave($__internal_ee7e46224089d96d87b1f355c12584f5d75c9a9fde7cf1c03d4865e86453a342_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
