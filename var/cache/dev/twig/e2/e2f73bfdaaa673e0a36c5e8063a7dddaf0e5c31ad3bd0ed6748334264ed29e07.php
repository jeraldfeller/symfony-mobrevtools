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
        $__internal_e4880e1edc21a6d9ed5b1c543435ea83ea00cf6b43d91c255ec69207df53307a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4880e1edc21a6d9ed5b1c543435ea83ea00cf6b43d91c255ec69207df53307a->enter($__internal_e4880e1edc21a6d9ed5b1c543435ea83ea00cf6b43d91c255ec69207df53307a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_4a3ec699dd96fb97a6c3e74c29653b06097df43e78d01f31c2f95bdb5770885b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3ec699dd96fb97a6c3e74c29653b06097df43e78d01f31c2f95bdb5770885b->enter($__internal_4a3ec699dd96fb97a6c3e74c29653b06097df43e78d01f31c2f95bdb5770885b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e4880e1edc21a6d9ed5b1c543435ea83ea00cf6b43d91c255ec69207df53307a->leave($__internal_e4880e1edc21a6d9ed5b1c543435ea83ea00cf6b43d91c255ec69207df53307a_prof);

        
        $__internal_4a3ec699dd96fb97a6c3e74c29653b06097df43e78d01f31c2f95bdb5770885b->leave($__internal_4a3ec699dd96fb97a6c3e74c29653b06097df43e78d01f31c2f95bdb5770885b_prof);

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
