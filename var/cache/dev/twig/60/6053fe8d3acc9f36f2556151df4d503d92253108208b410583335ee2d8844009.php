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
        $__internal_81da7016b876d757589bbac5f7ee079313aea0f85298a1f8fc5fb2ba27c281f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81da7016b876d757589bbac5f7ee079313aea0f85298a1f8fc5fb2ba27c281f0->enter($__internal_81da7016b876d757589bbac5f7ee079313aea0f85298a1f8fc5fb2ba27c281f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_f8840dc702b0ef0a21cb407f7659c892e8db6b29f1a88d7208fa678c57fbbcb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8840dc702b0ef0a21cb407f7659c892e8db6b29f1a88d7208fa678c57fbbcb8->enter($__internal_f8840dc702b0ef0a21cb407f7659c892e8db6b29f1a88d7208fa678c57fbbcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_81da7016b876d757589bbac5f7ee079313aea0f85298a1f8fc5fb2ba27c281f0->leave($__internal_81da7016b876d757589bbac5f7ee079313aea0f85298a1f8fc5fb2ba27c281f0_prof);

        
        $__internal_f8840dc702b0ef0a21cb407f7659c892e8db6b29f1a88d7208fa678c57fbbcb8->leave($__internal_f8840dc702b0ef0a21cb407f7659c892e8db6b29f1a88d7208fa678c57fbbcb8_prof);

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
