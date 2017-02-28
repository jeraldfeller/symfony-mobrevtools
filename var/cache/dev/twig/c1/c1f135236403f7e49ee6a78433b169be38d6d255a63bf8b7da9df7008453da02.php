<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a9f338539ac3ea48cf9f9035fd41b9e1f8b30f31cba658f1b3b2ee51190c590f extends Twig_Template
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
        $__internal_7a82e6bb3532f0adbaef00e3737b7dbc3bde83cc6bcb683ce906815c3c5fae1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a82e6bb3532f0adbaef00e3737b7dbc3bde83cc6bcb683ce906815c3c5fae1d->enter($__internal_7a82e6bb3532f0adbaef00e3737b7dbc3bde83cc6bcb683ce906815c3c5fae1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_bb728280fedd8d176a7d616968a33d3f577ec4af33a113d0fe417ce10b7b6c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb728280fedd8d176a7d616968a33d3f577ec4af33a113d0fe417ce10b7b6c9f->enter($__internal_bb728280fedd8d176a7d616968a33d3f577ec4af33a113d0fe417ce10b7b6c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7a82e6bb3532f0adbaef00e3737b7dbc3bde83cc6bcb683ce906815c3c5fae1d->leave($__internal_7a82e6bb3532f0adbaef00e3737b7dbc3bde83cc6bcb683ce906815c3c5fae1d_prof);

        
        $__internal_bb728280fedd8d176a7d616968a33d3f577ec4af33a113d0fe417ce10b7b6c9f->leave($__internal_bb728280fedd8d176a7d616968a33d3f577ec4af33a113d0fe417ce10b7b6c9f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
