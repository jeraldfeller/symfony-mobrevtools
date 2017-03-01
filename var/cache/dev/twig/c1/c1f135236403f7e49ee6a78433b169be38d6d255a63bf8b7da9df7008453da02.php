<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a9f338539ac3ea48cf9f9035fd41b9e1f8b30f31cba658f1b3b2ee51190c590f extends Twig_Template
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
        $__internal_66768e60d1e1c6fc1b373b891a063a98fd02e8095227517a23a02465e47b26d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66768e60d1e1c6fc1b373b891a063a98fd02e8095227517a23a02465e47b26d2->enter($__internal_66768e60d1e1c6fc1b373b891a063a98fd02e8095227517a23a02465e47b26d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_121fb25bf651d0c071a6961343ea7f1336100eef5a0b7424a5765c5192d99a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121fb25bf651d0c071a6961343ea7f1336100eef5a0b7424a5765c5192d99a63->enter($__internal_121fb25bf651d0c071a6961343ea7f1336100eef5a0b7424a5765c5192d99a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_66768e60d1e1c6fc1b373b891a063a98fd02e8095227517a23a02465e47b26d2->leave($__internal_66768e60d1e1c6fc1b373b891a063a98fd02e8095227517a23a02465e47b26d2_prof);

        
        $__internal_121fb25bf651d0c071a6961343ea7f1336100eef5a0b7424a5765c5192d99a63->leave($__internal_121fb25bf651d0c071a6961343ea7f1336100eef5a0b7424a5765c5192d99a63_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
