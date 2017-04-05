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
        $__internal_1372498c1c3732c88f862c91b23a1b8302b973101db61ef22a84b15292189168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1372498c1c3732c88f862c91b23a1b8302b973101db61ef22a84b15292189168->enter($__internal_1372498c1c3732c88f862c91b23a1b8302b973101db61ef22a84b15292189168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_32a7e4ed06988bf457d51f1f643cc84ad8d23314293c8bb77b5615c09a9abb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a7e4ed06988bf457d51f1f643cc84ad8d23314293c8bb77b5615c09a9abb9a->enter($__internal_32a7e4ed06988bf457d51f1f643cc84ad8d23314293c8bb77b5615c09a9abb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1372498c1c3732c88f862c91b23a1b8302b973101db61ef22a84b15292189168->leave($__internal_1372498c1c3732c88f862c91b23a1b8302b973101db61ef22a84b15292189168_prof);

        
        $__internal_32a7e4ed06988bf457d51f1f643cc84ad8d23314293c8bb77b5615c09a9abb9a->leave($__internal_32a7e4ed06988bf457d51f1f643cc84ad8d23314293c8bb77b5615c09a9abb9a_prof);

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
