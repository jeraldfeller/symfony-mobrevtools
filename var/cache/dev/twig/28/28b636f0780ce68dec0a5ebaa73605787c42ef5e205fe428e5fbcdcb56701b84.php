<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_64f254faad4dafb71132411fc15d137185cd0b2b288ac95586590c22a24148dd extends Twig_Template
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
        $__internal_ed6650f14b6bdb1ba10109544e500d6d8f039be7100b2f5581c0d55ea8e45a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6650f14b6bdb1ba10109544e500d6d8f039be7100b2f5581c0d55ea8e45a78->enter($__internal_ed6650f14b6bdb1ba10109544e500d6d8f039be7100b2f5581c0d55ea8e45a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d3f9939a1f01d104bdc5f3f1fe9e65bd9b9a3cf4e066cb437ec3ca115d7e9403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f9939a1f01d104bdc5f3f1fe9e65bd9b9a3cf4e066cb437ec3ca115d7e9403->enter($__internal_d3f9939a1f01d104bdc5f3f1fe9e65bd9b9a3cf4e066cb437ec3ca115d7e9403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ed6650f14b6bdb1ba10109544e500d6d8f039be7100b2f5581c0d55ea8e45a78->leave($__internal_ed6650f14b6bdb1ba10109544e500d6d8f039be7100b2f5581c0d55ea8e45a78_prof);

        
        $__internal_d3f9939a1f01d104bdc5f3f1fe9e65bd9b9a3cf4e066cb437ec3ca115d7e9403->leave($__internal_d3f9939a1f01d104bdc5f3f1fe9e65bd9b9a3cf4e066cb437ec3ca115d7e9403_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
