<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7917374b3bb77fd7c0414183bee09e024f78cdbac6f772ed65a2c56da7731e1d extends Twig_Template
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
        $__internal_2d7e992760c7c5eb8149fb9bd60d9feef1c287252c224f8b37bc6c5ef36c15dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7e992760c7c5eb8149fb9bd60d9feef1c287252c224f8b37bc6c5ef36c15dd->enter($__internal_2d7e992760c7c5eb8149fb9bd60d9feef1c287252c224f8b37bc6c5ef36c15dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_c96425e43d70433ebf0a43377393af03dc64fd8a7d9064e04c7978199752013a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96425e43d70433ebf0a43377393af03dc64fd8a7d9064e04c7978199752013a->enter($__internal_c96425e43d70433ebf0a43377393af03dc64fd8a7d9064e04c7978199752013a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2d7e992760c7c5eb8149fb9bd60d9feef1c287252c224f8b37bc6c5ef36c15dd->leave($__internal_2d7e992760c7c5eb8149fb9bd60d9feef1c287252c224f8b37bc6c5ef36c15dd_prof);

        
        $__internal_c96425e43d70433ebf0a43377393af03dc64fd8a7d9064e04c7978199752013a->leave($__internal_c96425e43d70433ebf0a43377393af03dc64fd8a7d9064e04c7978199752013a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
