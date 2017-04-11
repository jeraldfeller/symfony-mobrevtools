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
        $__internal_3c07896c6b8e08c7b194940cd5f25551e853c92f27d73f144127be320cb70aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c07896c6b8e08c7b194940cd5f25551e853c92f27d73f144127be320cb70aab->enter($__internal_3c07896c6b8e08c7b194940cd5f25551e853c92f27d73f144127be320cb70aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a3e4861b4150d2d7c6d38eaeb288fde94cea2731dd6dccb975466ea81e207e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e4861b4150d2d7c6d38eaeb288fde94cea2731dd6dccb975466ea81e207e27->enter($__internal_a3e4861b4150d2d7c6d38eaeb288fde94cea2731dd6dccb975466ea81e207e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3c07896c6b8e08c7b194940cd5f25551e853c92f27d73f144127be320cb70aab->leave($__internal_3c07896c6b8e08c7b194940cd5f25551e853c92f27d73f144127be320cb70aab_prof);

        
        $__internal_a3e4861b4150d2d7c6d38eaeb288fde94cea2731dd6dccb975466ea81e207e27->leave($__internal_a3e4861b4150d2d7c6d38eaeb288fde94cea2731dd6dccb975466ea81e207e27_prof);

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
