<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_f544f412f143d9c4dc7ec46d19891d06889329c7b23ede88ea98486e55801520 extends Twig_Template
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
        $__internal_1789f308fb0e66b4b7e644ae4bad5985ec4d8a390d8697f17b96ca2ae3ce745e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1789f308fb0e66b4b7e644ae4bad5985ec4d8a390d8697f17b96ca2ae3ce745e->enter($__internal_1789f308fb0e66b4b7e644ae4bad5985ec4d8a390d8697f17b96ca2ae3ce745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_5a7ba907b5f64f95ef1566a19248e7108ab747766d2394c180ddeedfede0136c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7ba907b5f64f95ef1566a19248e7108ab747766d2394c180ddeedfede0136c->enter($__internal_5a7ba907b5f64f95ef1566a19248e7108ab747766d2394c180ddeedfede0136c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_1789f308fb0e66b4b7e644ae4bad5985ec4d8a390d8697f17b96ca2ae3ce745e->leave($__internal_1789f308fb0e66b4b7e644ae4bad5985ec4d8a390d8697f17b96ca2ae3ce745e_prof);

        
        $__internal_5a7ba907b5f64f95ef1566a19248e7108ab747766d2394c180ddeedfede0136c->leave($__internal_5a7ba907b5f64f95ef1566a19248e7108ab747766d2394c180ddeedfede0136c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
