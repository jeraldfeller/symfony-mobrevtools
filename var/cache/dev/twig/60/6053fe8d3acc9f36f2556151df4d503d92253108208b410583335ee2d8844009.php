<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_f428672689a2bebee368cf495804c2b7ced2cb9e98cf9e1f5ff6b7f9aab845f2 extends Twig_Template
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
        $__internal_fe4a5a2dd5bcbc697880f5d92fff7e11d6201c9dc852013930c01ef8d5b7a048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4a5a2dd5bcbc697880f5d92fff7e11d6201c9dc852013930c01ef8d5b7a048->enter($__internal_fe4a5a2dd5bcbc697880f5d92fff7e11d6201c9dc852013930c01ef8d5b7a048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_4152b469405180261aa0e4e9530590578312c8049da8e1975e3e8e3213fb8766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4152b469405180261aa0e4e9530590578312c8049da8e1975e3e8e3213fb8766->enter($__internal_4152b469405180261aa0e4e9530590578312c8049da8e1975e3e8e3213fb8766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_fe4a5a2dd5bcbc697880f5d92fff7e11d6201c9dc852013930c01ef8d5b7a048->leave($__internal_fe4a5a2dd5bcbc697880f5d92fff7e11d6201c9dc852013930c01ef8d5b7a048_prof);

        
        $__internal_4152b469405180261aa0e4e9530590578312c8049da8e1975e3e8e3213fb8766->leave($__internal_4152b469405180261aa0e4e9530590578312c8049da8e1975e3e8e3213fb8766_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
