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
        $__internal_c91f0a76e9e1dde40b69c4c7b4c0af4257b490699fd0620ede22081ab95def5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91f0a76e9e1dde40b69c4c7b4c0af4257b490699fd0620ede22081ab95def5c->enter($__internal_c91f0a76e9e1dde40b69c4c7b4c0af4257b490699fd0620ede22081ab95def5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_33db57fc7dc290633ed66f32c0589ce6a3713368218a5a551e75b2645e878d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33db57fc7dc290633ed66f32c0589ce6a3713368218a5a551e75b2645e878d27->enter($__internal_33db57fc7dc290633ed66f32c0589ce6a3713368218a5a551e75b2645e878d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c91f0a76e9e1dde40b69c4c7b4c0af4257b490699fd0620ede22081ab95def5c->leave($__internal_c91f0a76e9e1dde40b69c4c7b4c0af4257b490699fd0620ede22081ab95def5c_prof);

        
        $__internal_33db57fc7dc290633ed66f32c0589ce6a3713368218a5a551e75b2645e878d27->leave($__internal_33db57fc7dc290633ed66f32c0589ce6a3713368218a5a551e75b2645e878d27_prof);

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
