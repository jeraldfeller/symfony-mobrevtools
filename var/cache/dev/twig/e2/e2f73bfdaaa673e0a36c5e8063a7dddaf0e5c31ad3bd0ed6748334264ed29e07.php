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
        $__internal_3be9b5ce708353e4035a0e16d4cf999f8f4f5ff4e6f966210aab3ab0c3bffaee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be9b5ce708353e4035a0e16d4cf999f8f4f5ff4e6f966210aab3ab0c3bffaee->enter($__internal_3be9b5ce708353e4035a0e16d4cf999f8f4f5ff4e6f966210aab3ab0c3bffaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_48bfa983d2d6ce51f9b8528709d20e2f4bf2c8b94aa0669cd49f7e64373f1833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48bfa983d2d6ce51f9b8528709d20e2f4bf2c8b94aa0669cd49f7e64373f1833->enter($__internal_48bfa983d2d6ce51f9b8528709d20e2f4bf2c8b94aa0669cd49f7e64373f1833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3be9b5ce708353e4035a0e16d4cf999f8f4f5ff4e6f966210aab3ab0c3bffaee->leave($__internal_3be9b5ce708353e4035a0e16d4cf999f8f4f5ff4e6f966210aab3ab0c3bffaee_prof);

        
        $__internal_48bfa983d2d6ce51f9b8528709d20e2f4bf2c8b94aa0669cd49f7e64373f1833->leave($__internal_48bfa983d2d6ce51f9b8528709d20e2f4bf2c8b94aa0669cd49f7e64373f1833_prof);

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
