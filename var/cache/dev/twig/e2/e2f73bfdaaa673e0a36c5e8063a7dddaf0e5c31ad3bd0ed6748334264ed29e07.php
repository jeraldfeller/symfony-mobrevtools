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
        $__internal_276533682c956f45ad03052199f03d5cec7f4cb9bcd6afccc9137a191abae276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276533682c956f45ad03052199f03d5cec7f4cb9bcd6afccc9137a191abae276->enter($__internal_276533682c956f45ad03052199f03d5cec7f4cb9bcd6afccc9137a191abae276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_aaab02969f2deee4fb14250715459d97020c401b21d0cc54b054fd5f9c02c83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaab02969f2deee4fb14250715459d97020c401b21d0cc54b054fd5f9c02c83a->enter($__internal_aaab02969f2deee4fb14250715459d97020c401b21d0cc54b054fd5f9c02c83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_276533682c956f45ad03052199f03d5cec7f4cb9bcd6afccc9137a191abae276->leave($__internal_276533682c956f45ad03052199f03d5cec7f4cb9bcd6afccc9137a191abae276_prof);

        
        $__internal_aaab02969f2deee4fb14250715459d97020c401b21d0cc54b054fd5f9c02c83a->leave($__internal_aaab02969f2deee4fb14250715459d97020c401b21d0cc54b054fd5f9c02c83a_prof);

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
