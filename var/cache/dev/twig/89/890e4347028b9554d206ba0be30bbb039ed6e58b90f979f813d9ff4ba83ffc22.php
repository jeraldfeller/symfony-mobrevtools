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
        $__internal_a3e67bca5feae5388a92602b71c00949e4fe7618eb3b02b5e1f1ba16024b16d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e67bca5feae5388a92602b71c00949e4fe7618eb3b02b5e1f1ba16024b16d3->enter($__internal_a3e67bca5feae5388a92602b71c00949e4fe7618eb3b02b5e1f1ba16024b16d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_87ae521d42607324698bbdf9e2db9fd93f6a6a08d96521f959df9c1404b322fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ae521d42607324698bbdf9e2db9fd93f6a6a08d96521f959df9c1404b322fa->enter($__internal_87ae521d42607324698bbdf9e2db9fd93f6a6a08d96521f959df9c1404b322fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_a3e67bca5feae5388a92602b71c00949e4fe7618eb3b02b5e1f1ba16024b16d3->leave($__internal_a3e67bca5feae5388a92602b71c00949e4fe7618eb3b02b5e1f1ba16024b16d3_prof);

        
        $__internal_87ae521d42607324698bbdf9e2db9fd93f6a6a08d96521f959df9c1404b322fa->leave($__internal_87ae521d42607324698bbdf9e2db9fd93f6a6a08d96521f959df9c1404b322fa_prof);

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
