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
        $__internal_98dbeb9d730fe24340dadd050a8f5a8515701d4c90f6d07d510f9b35bc484665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98dbeb9d730fe24340dadd050a8f5a8515701d4c90f6d07d510f9b35bc484665->enter($__internal_98dbeb9d730fe24340dadd050a8f5a8515701d4c90f6d07d510f9b35bc484665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_4b79ec6ba5b91b62967a9a1e8b7760b700d8e161e65e2987d80f339cba60c04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b79ec6ba5b91b62967a9a1e8b7760b700d8e161e65e2987d80f339cba60c04c->enter($__internal_4b79ec6ba5b91b62967a9a1e8b7760b700d8e161e65e2987d80f339cba60c04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_98dbeb9d730fe24340dadd050a8f5a8515701d4c90f6d07d510f9b35bc484665->leave($__internal_98dbeb9d730fe24340dadd050a8f5a8515701d4c90f6d07d510f9b35bc484665_prof);

        
        $__internal_4b79ec6ba5b91b62967a9a1e8b7760b700d8e161e65e2987d80f339cba60c04c->leave($__internal_4b79ec6ba5b91b62967a9a1e8b7760b700d8e161e65e2987d80f339cba60c04c_prof);

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
