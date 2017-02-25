<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8a540ad17a7413bd7b5318c55b11e6f0f1239e28f9a60314f3def6b779fc4a62 extends Twig_Template
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
        $__internal_417fce21535b4131364a0d2cf516e0973b4058e4317b295781991d0d63ac9a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417fce21535b4131364a0d2cf516e0973b4058e4317b295781991d0d63ac9a18->enter($__internal_417fce21535b4131364a0d2cf516e0973b4058e4317b295781991d0d63ac9a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_761642411018703cb3a6e90978256021e7594afbcdd656bd748302fd0f39b1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761642411018703cb3a6e90978256021e7594afbcdd656bd748302fd0f39b1af->enter($__internal_761642411018703cb3a6e90978256021e7594afbcdd656bd748302fd0f39b1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_417fce21535b4131364a0d2cf516e0973b4058e4317b295781991d0d63ac9a18->leave($__internal_417fce21535b4131364a0d2cf516e0973b4058e4317b295781991d0d63ac9a18_prof);

        
        $__internal_761642411018703cb3a6e90978256021e7594afbcdd656bd748302fd0f39b1af->leave($__internal_761642411018703cb3a6e90978256021e7594afbcdd656bd748302fd0f39b1af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
