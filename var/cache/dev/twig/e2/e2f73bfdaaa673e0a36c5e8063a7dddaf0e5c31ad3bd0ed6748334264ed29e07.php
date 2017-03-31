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
        $__internal_a34742f61fabff99b7c57e31d7486584e160a75bcd33d8013794fe15acf68ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34742f61fabff99b7c57e31d7486584e160a75bcd33d8013794fe15acf68ea1->enter($__internal_a34742f61fabff99b7c57e31d7486584e160a75bcd33d8013794fe15acf68ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f08e308a3b0813d0c2da004aed61b98092120504d89f5bcfda0c5c6487c58374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08e308a3b0813d0c2da004aed61b98092120504d89f5bcfda0c5c6487c58374->enter($__internal_f08e308a3b0813d0c2da004aed61b98092120504d89f5bcfda0c5c6487c58374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a34742f61fabff99b7c57e31d7486584e160a75bcd33d8013794fe15acf68ea1->leave($__internal_a34742f61fabff99b7c57e31d7486584e160a75bcd33d8013794fe15acf68ea1_prof);

        
        $__internal_f08e308a3b0813d0c2da004aed61b98092120504d89f5bcfda0c5c6487c58374->leave($__internal_f08e308a3b0813d0c2da004aed61b98092120504d89f5bcfda0c5c6487c58374_prof);

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
