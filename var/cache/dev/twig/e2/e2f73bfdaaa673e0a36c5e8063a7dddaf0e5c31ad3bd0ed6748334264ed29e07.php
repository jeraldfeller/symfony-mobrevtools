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
        $__internal_8bde56eae0a309d9781e6769f00fbcd840794b1445de08f1beeb9b982442707a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bde56eae0a309d9781e6769f00fbcd840794b1445de08f1beeb9b982442707a->enter($__internal_8bde56eae0a309d9781e6769f00fbcd840794b1445de08f1beeb9b982442707a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_568730e3a2e68c55655115ace8192bba0ebf06dc360d5090d1257e1b7b595942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568730e3a2e68c55655115ace8192bba0ebf06dc360d5090d1257e1b7b595942->enter($__internal_568730e3a2e68c55655115ace8192bba0ebf06dc360d5090d1257e1b7b595942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_8bde56eae0a309d9781e6769f00fbcd840794b1445de08f1beeb9b982442707a->leave($__internal_8bde56eae0a309d9781e6769f00fbcd840794b1445de08f1beeb9b982442707a_prof);

        
        $__internal_568730e3a2e68c55655115ace8192bba0ebf06dc360d5090d1257e1b7b595942->leave($__internal_568730e3a2e68c55655115ace8192bba0ebf06dc360d5090d1257e1b7b595942_prof);

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
