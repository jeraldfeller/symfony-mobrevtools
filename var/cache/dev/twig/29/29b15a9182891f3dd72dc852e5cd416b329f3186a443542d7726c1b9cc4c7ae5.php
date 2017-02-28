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
        $__internal_dde46e35b9f86062d98d5a3411fc792ed509ba0f2571a4701c0e3d2fb227e959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde46e35b9f86062d98d5a3411fc792ed509ba0f2571a4701c0e3d2fb227e959->enter($__internal_dde46e35b9f86062d98d5a3411fc792ed509ba0f2571a4701c0e3d2fb227e959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_67482a57c01cf113f187de13781bc5d558026697b216bf3f1d5162dbbf61b977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67482a57c01cf113f187de13781bc5d558026697b216bf3f1d5162dbbf61b977->enter($__internal_67482a57c01cf113f187de13781bc5d558026697b216bf3f1d5162dbbf61b977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_dde46e35b9f86062d98d5a3411fc792ed509ba0f2571a4701c0e3d2fb227e959->leave($__internal_dde46e35b9f86062d98d5a3411fc792ed509ba0f2571a4701c0e3d2fb227e959_prof);

        
        $__internal_67482a57c01cf113f187de13781bc5d558026697b216bf3f1d5162dbbf61b977->leave($__internal_67482a57c01cf113f187de13781bc5d558026697b216bf3f1d5162dbbf61b977_prof);

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
