<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_28219e4c2a243cefd1291fec5eb1d6d5ddb257fbabbcfc49f8408b10ff62cdf3 extends Twig_Template
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
        $__internal_973a6c79e9c905cc7b3e4eed9486391e81c80033fb763c0563b4ecd15de53501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973a6c79e9c905cc7b3e4eed9486391e81c80033fb763c0563b4ecd15de53501->enter($__internal_973a6c79e9c905cc7b3e4eed9486391e81c80033fb763c0563b4ecd15de53501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_59a30c07285da64b6a86e043998368c7ac07ee644c3cf7e56cd0dd5a0ccdc8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a30c07285da64b6a86e043998368c7ac07ee644c3cf7e56cd0dd5a0ccdc8f0->enter($__internal_59a30c07285da64b6a86e043998368c7ac07ee644c3cf7e56cd0dd5a0ccdc8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_973a6c79e9c905cc7b3e4eed9486391e81c80033fb763c0563b4ecd15de53501->leave($__internal_973a6c79e9c905cc7b3e4eed9486391e81c80033fb763c0563b4ecd15de53501_prof);

        
        $__internal_59a30c07285da64b6a86e043998368c7ac07ee644c3cf7e56cd0dd5a0ccdc8f0->leave($__internal_59a30c07285da64b6a86e043998368c7ac07ee644c3cf7e56cd0dd5a0ccdc8f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
