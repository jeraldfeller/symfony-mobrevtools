<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_40906b6602e6afdb92b8700673cb46321eed0612f032d4d0e7fd11d314e343ba extends Twig_Template
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
        $__internal_80f6f2c7158bdef24d11a089ff2d96f75a232223763006e88365238ad50e87d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f6f2c7158bdef24d11a089ff2d96f75a232223763006e88365238ad50e87d6->enter($__internal_80f6f2c7158bdef24d11a089ff2d96f75a232223763006e88365238ad50e87d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_30a8179758193c4b264d7d9c95dd50f0e328a3fe12fc740b6d5d5a7517572fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a8179758193c4b264d7d9c95dd50f0e328a3fe12fc740b6d5d5a7517572fed->enter($__internal_30a8179758193c4b264d7d9c95dd50f0e328a3fe12fc740b6d5d5a7517572fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
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
        
        $__internal_80f6f2c7158bdef24d11a089ff2d96f75a232223763006e88365238ad50e87d6->leave($__internal_80f6f2c7158bdef24d11a089ff2d96f75a232223763006e88365238ad50e87d6_prof);

        
        $__internal_30a8179758193c4b264d7d9c95dd50f0e328a3fe12fc740b6d5d5a7517572fed->leave($__internal_30a8179758193c4b264d7d9c95dd50f0e328a3fe12fc740b6d5d5a7517572fed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
