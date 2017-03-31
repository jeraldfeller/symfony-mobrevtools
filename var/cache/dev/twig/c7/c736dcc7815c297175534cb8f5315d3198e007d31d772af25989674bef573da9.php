<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_fe7f0f7316395a6d425a1a49b98b007ff324fe05d111bc701e58a9e74dc62c34 extends Twig_Template
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
        $__internal_942fef584cb11a1438eb7eb2526c798c65fe2a62c9640d36352528ed09413f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942fef584cb11a1438eb7eb2526c798c65fe2a62c9640d36352528ed09413f7c->enter($__internal_942fef584cb11a1438eb7eb2526c798c65fe2a62c9640d36352528ed09413f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_0cb3eaf6de48ceea5737f225f60ed187f3f6d0a9e424f164bff393297b84a2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb3eaf6de48ceea5737f225f60ed187f3f6d0a9e424f164bff393297b84a2dd->enter($__internal_0cb3eaf6de48ceea5737f225f60ed187f3f6d0a9e424f164bff393297b84a2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_942fef584cb11a1438eb7eb2526c798c65fe2a62c9640d36352528ed09413f7c->leave($__internal_942fef584cb11a1438eb7eb2526c798c65fe2a62c9640d36352528ed09413f7c_prof);

        
        $__internal_0cb3eaf6de48ceea5737f225f60ed187f3f6d0a9e424f164bff393297b84a2dd->leave($__internal_0cb3eaf6de48ceea5737f225f60ed187f3f6d0a9e424f164bff393297b84a2dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
