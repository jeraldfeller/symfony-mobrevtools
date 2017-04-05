<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2d481a650911b2bcff592189240468d538b8d95c9771da246eb06edeaf5acea5 extends Twig_Template
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
        $__internal_1e443d218ab794e2bb7ac09afaaa55fe53e6ce0e8af80ddf2d97249ed45b5733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e443d218ab794e2bb7ac09afaaa55fe53e6ce0e8af80ddf2d97249ed45b5733->enter($__internal_1e443d218ab794e2bb7ac09afaaa55fe53e6ce0e8af80ddf2d97249ed45b5733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0b999669ce5124d7ec5a0985ecd8b8fff9b2912e239bef31f54b4efd46c4d5f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b999669ce5124d7ec5a0985ecd8b8fff9b2912e239bef31f54b4efd46c4d5f6->enter($__internal_0b999669ce5124d7ec5a0985ecd8b8fff9b2912e239bef31f54b4efd46c4d5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1e443d218ab794e2bb7ac09afaaa55fe53e6ce0e8af80ddf2d97249ed45b5733->leave($__internal_1e443d218ab794e2bb7ac09afaaa55fe53e6ce0e8af80ddf2d97249ed45b5733_prof);

        
        $__internal_0b999669ce5124d7ec5a0985ecd8b8fff9b2912e239bef31f54b4efd46c4d5f6->leave($__internal_0b999669ce5124d7ec5a0985ecd8b8fff9b2912e239bef31f54b4efd46c4d5f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
