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
        $__internal_d32a2cc659ccca1c6e2443879bf9274e59cf5b23b31a5a595d71866ed659ae9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32a2cc659ccca1c6e2443879bf9274e59cf5b23b31a5a595d71866ed659ae9b->enter($__internal_d32a2cc659ccca1c6e2443879bf9274e59cf5b23b31a5a595d71866ed659ae9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_b69b56138036db2d5f8fc1f26e333151542ea11711221d3c0f59172a5fabd53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69b56138036db2d5f8fc1f26e333151542ea11711221d3c0f59172a5fabd53a->enter($__internal_b69b56138036db2d5f8fc1f26e333151542ea11711221d3c0f59172a5fabd53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d32a2cc659ccca1c6e2443879bf9274e59cf5b23b31a5a595d71866ed659ae9b->leave($__internal_d32a2cc659ccca1c6e2443879bf9274e59cf5b23b31a5a595d71866ed659ae9b_prof);

        
        $__internal_b69b56138036db2d5f8fc1f26e333151542ea11711221d3c0f59172a5fabd53a->leave($__internal_b69b56138036db2d5f8fc1f26e333151542ea11711221d3c0f59172a5fabd53a_prof);

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
