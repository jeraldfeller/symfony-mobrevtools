<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_73436ba810e44fa54b35dbdafdd8931743bb3418379962027e803f9c65a1b67b extends Twig_Template
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
        $__internal_00f1fb2bf7f186ed71d68e73f4cd380a693fb1a55c156624cbe29e72433e6bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f1fb2bf7f186ed71d68e73f4cd380a693fb1a55c156624cbe29e72433e6bf9->enter($__internal_00f1fb2bf7f186ed71d68e73f4cd380a693fb1a55c156624cbe29e72433e6bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_a928dc171c0fa2043eb782e6eac32497a57519d6e0d28f33135873b84bf37f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a928dc171c0fa2043eb782e6eac32497a57519d6e0d28f33135873b84bf37f04->enter($__internal_a928dc171c0fa2043eb782e6eac32497a57519d6e0d28f33135873b84bf37f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_00f1fb2bf7f186ed71d68e73f4cd380a693fb1a55c156624cbe29e72433e6bf9->leave($__internal_00f1fb2bf7f186ed71d68e73f4cd380a693fb1a55c156624cbe29e72433e6bf9_prof);

        
        $__internal_a928dc171c0fa2043eb782e6eac32497a57519d6e0d28f33135873b84bf37f04->leave($__internal_a928dc171c0fa2043eb782e6eac32497a57519d6e0d28f33135873b84bf37f04_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
