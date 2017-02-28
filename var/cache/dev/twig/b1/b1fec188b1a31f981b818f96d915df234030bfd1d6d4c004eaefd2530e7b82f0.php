<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_98dad417ff15f51596fd14acaf2e5bd624b0832f7483ba4c42d956d83269e32f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_433902e2d5f0034b89501147271a910fd201ddac39a71b61288bc4232d53ae14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433902e2d5f0034b89501147271a910fd201ddac39a71b61288bc4232d53ae14->enter($__internal_433902e2d5f0034b89501147271a910fd201ddac39a71b61288bc4232d53ae14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_3a45d39e882300570e48bdcb594edbacb0239d9cb0ca2c8b2a9ea1aacb649a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a45d39e882300570e48bdcb594edbacb0239d9cb0ca2c8b2a9ea1aacb649a24->enter($__internal_3a45d39e882300570e48bdcb594edbacb0239d9cb0ca2c8b2a9ea1aacb649a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_433902e2d5f0034b89501147271a910fd201ddac39a71b61288bc4232d53ae14->leave($__internal_433902e2d5f0034b89501147271a910fd201ddac39a71b61288bc4232d53ae14_prof);

        
        $__internal_3a45d39e882300570e48bdcb594edbacb0239d9cb0ca2c8b2a9ea1aacb649a24->leave($__internal_3a45d39e882300570e48bdcb594edbacb0239d9cb0ca2c8b2a9ea1aacb649a24_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a5d9a2f01c619b3b6c2490d976a5cf3c16432ae9c7df5bb414f1d23a05ccb92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5d9a2f01c619b3b6c2490d976a5cf3c16432ae9c7df5bb414f1d23a05ccb92->enter($__internal_0a5d9a2f01c619b3b6c2490d976a5cf3c16432ae9c7df5bb414f1d23a05ccb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_afb4fb3d80fac8c63ecfd3a29e24d378f2c8b9e0861716ed37bd6c9c8cd40532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb4fb3d80fac8c63ecfd3a29e24d378f2c8b9e0861716ed37bd6c9c8cd40532->enter($__internal_afb4fb3d80fac8c63ecfd3a29e24d378f2c8b9e0861716ed37bd6c9c8cd40532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_afb4fb3d80fac8c63ecfd3a29e24d378f2c8b9e0861716ed37bd6c9c8cd40532->leave($__internal_afb4fb3d80fac8c63ecfd3a29e24d378f2c8b9e0861716ed37bd6c9c8cd40532_prof);

        
        $__internal_0a5d9a2f01c619b3b6c2490d976a5cf3c16432ae9c7df5bb414f1d23a05ccb92->leave($__internal_0a5d9a2f01c619b3b6c2490d976a5cf3c16432ae9c7df5bb414f1d23a05ccb92_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c0d76005f6d4be6a9f7a30832e0d9ecbd8692ef5bee683c433d9e8d8d70414e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0d76005f6d4be6a9f7a30832e0d9ecbd8692ef5bee683c433d9e8d8d70414e->enter($__internal_3c0d76005f6d4be6a9f7a30832e0d9ecbd8692ef5bee683c433d9e8d8d70414e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07da6e91b4a86b86e455646487f783d1d93c1bc1836230583e2248488c896e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07da6e91b4a86b86e455646487f783d1d93c1bc1836230583e2248488c896e37->enter($__internal_07da6e91b4a86b86e455646487f783d1d93c1bc1836230583e2248488c896e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_07da6e91b4a86b86e455646487f783d1d93c1bc1836230583e2248488c896e37->leave($__internal_07da6e91b4a86b86e455646487f783d1d93c1bc1836230583e2248488c896e37_prof);

        
        $__internal_3c0d76005f6d4be6a9f7a30832e0d9ecbd8692ef5bee683c433d9e8d8d70414e->leave($__internal_3c0d76005f6d4be6a9f7a30832e0d9ecbd8692ef5bee683c433d9e8d8d70414e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
