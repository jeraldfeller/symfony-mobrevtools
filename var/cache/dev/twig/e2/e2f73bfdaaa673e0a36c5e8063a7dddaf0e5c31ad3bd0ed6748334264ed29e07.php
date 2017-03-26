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
        $__internal_763a67e4ba9e9541e309148cae7293004239034802ac0d89790f1ce0fa7aa902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763a67e4ba9e9541e309148cae7293004239034802ac0d89790f1ce0fa7aa902->enter($__internal_763a67e4ba9e9541e309148cae7293004239034802ac0d89790f1ce0fa7aa902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_379583100433210ef1863f0e9733647e79bd79002494300920fe2ed0b7578fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379583100433210ef1863f0e9733647e79bd79002494300920fe2ed0b7578fb3->enter($__internal_379583100433210ef1863f0e9733647e79bd79002494300920fe2ed0b7578fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_763a67e4ba9e9541e309148cae7293004239034802ac0d89790f1ce0fa7aa902->leave($__internal_763a67e4ba9e9541e309148cae7293004239034802ac0d89790f1ce0fa7aa902_prof);

        
        $__internal_379583100433210ef1863f0e9733647e79bd79002494300920fe2ed0b7578fb3->leave($__internal_379583100433210ef1863f0e9733647e79bd79002494300920fe2ed0b7578fb3_prof);

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
