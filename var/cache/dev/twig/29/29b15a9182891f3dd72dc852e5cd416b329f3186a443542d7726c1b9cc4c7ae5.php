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
        $__internal_488772b167764a6ae7402e94d8deb1154a14046e6a55ea5bdafbfab4308c9b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488772b167764a6ae7402e94d8deb1154a14046e6a55ea5bdafbfab4308c9b68->enter($__internal_488772b167764a6ae7402e94d8deb1154a14046e6a55ea5bdafbfab4308c9b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_7e4eb0262d6c06bff9f0a0f10d8fdf78777495daa0327c258c400624af407c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4eb0262d6c06bff9f0a0f10d8fdf78777495daa0327c258c400624af407c6e->enter($__internal_7e4eb0262d6c06bff9f0a0f10d8fdf78777495daa0327c258c400624af407c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_488772b167764a6ae7402e94d8deb1154a14046e6a55ea5bdafbfab4308c9b68->leave($__internal_488772b167764a6ae7402e94d8deb1154a14046e6a55ea5bdafbfab4308c9b68_prof);

        
        $__internal_7e4eb0262d6c06bff9f0a0f10d8fdf78777495daa0327c258c400624af407c6e->leave($__internal_7e4eb0262d6c06bff9f0a0f10d8fdf78777495daa0327c258c400624af407c6e_prof);

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
