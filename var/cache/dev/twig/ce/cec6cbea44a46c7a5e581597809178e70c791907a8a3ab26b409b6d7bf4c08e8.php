<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1e2af730eb385af8d51df122d2295a4e63ed605b4e3891b933bb3960c5080881 extends Twig_Template
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
        $__internal_0042625cf152f8a2a18b0044b746523e24206f57c8a7c63f12be435c21334c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0042625cf152f8a2a18b0044b746523e24206f57c8a7c63f12be435c21334c17->enter($__internal_0042625cf152f8a2a18b0044b746523e24206f57c8a7c63f12be435c21334c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_8f1b33f7e9f40b815c0e1fafd187b7f1c848860ac5fc4015791eae5a63186525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1b33f7e9f40b815c0e1fafd187b7f1c848860ac5fc4015791eae5a63186525->enter($__internal_8f1b33f7e9f40b815c0e1fafd187b7f1c848860ac5fc4015791eae5a63186525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0042625cf152f8a2a18b0044b746523e24206f57c8a7c63f12be435c21334c17->leave($__internal_0042625cf152f8a2a18b0044b746523e24206f57c8a7c63f12be435c21334c17_prof);

        
        $__internal_8f1b33f7e9f40b815c0e1fafd187b7f1c848860ac5fc4015791eae5a63186525->leave($__internal_8f1b33f7e9f40b815c0e1fafd187b7f1c848860ac5fc4015791eae5a63186525_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
