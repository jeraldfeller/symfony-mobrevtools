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
        $__internal_1437a6c7f0e54e4e157a2467e6f43888f1c06932039b2b536c2d370141ba6aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1437a6c7f0e54e4e157a2467e6f43888f1c06932039b2b536c2d370141ba6aac->enter($__internal_1437a6c7f0e54e4e157a2467e6f43888f1c06932039b2b536c2d370141ba6aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_0d0687621f449a2b0b305e6c217e2b770b301bc901419894d16e37169acc4ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0687621f449a2b0b305e6c217e2b770b301bc901419894d16e37169acc4ecb->enter($__internal_0d0687621f449a2b0b305e6c217e2b770b301bc901419894d16e37169acc4ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_1437a6c7f0e54e4e157a2467e6f43888f1c06932039b2b536c2d370141ba6aac->leave($__internal_1437a6c7f0e54e4e157a2467e6f43888f1c06932039b2b536c2d370141ba6aac_prof);

        
        $__internal_0d0687621f449a2b0b305e6c217e2b770b301bc901419894d16e37169acc4ecb->leave($__internal_0d0687621f449a2b0b305e6c217e2b770b301bc901419894d16e37169acc4ecb_prof);

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
