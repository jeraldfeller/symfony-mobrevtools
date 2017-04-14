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
        $__internal_3be6ded63b8a2a7830b9445cd87ef1c181acaa550a637f0b27b8b5ce92035e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be6ded63b8a2a7830b9445cd87ef1c181acaa550a637f0b27b8b5ce92035e1d->enter($__internal_3be6ded63b8a2a7830b9445cd87ef1c181acaa550a637f0b27b8b5ce92035e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_6da30fd4b087026f8b2ff6d74baa8ea17c6dc36ef7c637190780803edf7d8dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da30fd4b087026f8b2ff6d74baa8ea17c6dc36ef7c637190780803edf7d8dce->enter($__internal_6da30fd4b087026f8b2ff6d74baa8ea17c6dc36ef7c637190780803edf7d8dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3be6ded63b8a2a7830b9445cd87ef1c181acaa550a637f0b27b8b5ce92035e1d->leave($__internal_3be6ded63b8a2a7830b9445cd87ef1c181acaa550a637f0b27b8b5ce92035e1d_prof);

        
        $__internal_6da30fd4b087026f8b2ff6d74baa8ea17c6dc36ef7c637190780803edf7d8dce->leave($__internal_6da30fd4b087026f8b2ff6d74baa8ea17c6dc36ef7c637190780803edf7d8dce_prof);

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
