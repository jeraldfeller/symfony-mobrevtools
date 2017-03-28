<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_af5aa7b23cf43e00858890d5c81df63821c55bb99833b464116cf0360424cded extends Twig_Template
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
        $__internal_a2ebfba99fe21c37b051c38dc9fc540a8c07a46d471fdd6e111d4e417fd51693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ebfba99fe21c37b051c38dc9fc540a8c07a46d471fdd6e111d4e417fd51693->enter($__internal_a2ebfba99fe21c37b051c38dc9fc540a8c07a46d471fdd6e111d4e417fd51693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_8d929b37230cd0085e1b256362acfdc9f87d6f3b31db229692712740daa105eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d929b37230cd0085e1b256362acfdc9f87d6f3b31db229692712740daa105eb->enter($__internal_8d929b37230cd0085e1b256362acfdc9f87d6f3b31db229692712740daa105eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a2ebfba99fe21c37b051c38dc9fc540a8c07a46d471fdd6e111d4e417fd51693->leave($__internal_a2ebfba99fe21c37b051c38dc9fc540a8c07a46d471fdd6e111d4e417fd51693_prof);

        
        $__internal_8d929b37230cd0085e1b256362acfdc9f87d6f3b31db229692712740daa105eb->leave($__internal_8d929b37230cd0085e1b256362acfdc9f87d6f3b31db229692712740daa105eb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
