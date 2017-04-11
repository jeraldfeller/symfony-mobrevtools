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
        $__internal_d1a080c8ae42bd6441503fbd7495a145782617b9ccd7a735f5fb5b42c7a7c93c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a080c8ae42bd6441503fbd7495a145782617b9ccd7a735f5fb5b42c7a7c93c->enter($__internal_d1a080c8ae42bd6441503fbd7495a145782617b9ccd7a735f5fb5b42c7a7c93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_fb4fb2bc810e104303c3e17d5d3eef207be7c0611d5b9d857d46be6000ac9557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4fb2bc810e104303c3e17d5d3eef207be7c0611d5b9d857d46be6000ac9557->enter($__internal_fb4fb2bc810e104303c3e17d5d3eef207be7c0611d5b9d857d46be6000ac9557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1a080c8ae42bd6441503fbd7495a145782617b9ccd7a735f5fb5b42c7a7c93c->leave($__internal_d1a080c8ae42bd6441503fbd7495a145782617b9ccd7a735f5fb5b42c7a7c93c_prof);

        
        $__internal_fb4fb2bc810e104303c3e17d5d3eef207be7c0611d5b9d857d46be6000ac9557->leave($__internal_fb4fb2bc810e104303c3e17d5d3eef207be7c0611d5b9d857d46be6000ac9557_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6bd5c3178a0f565189ff53dbb9c06bbd1fb02dd1b2aa28366246e0917bfd6ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bd5c3178a0f565189ff53dbb9c06bbd1fb02dd1b2aa28366246e0917bfd6ca->enter($__internal_c6bd5c3178a0f565189ff53dbb9c06bbd1fb02dd1b2aa28366246e0917bfd6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a38156c4a99cb285a99b0d9b212a8cafac62ed41de84a988d9ddf4d5658a23b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38156c4a99cb285a99b0d9b212a8cafac62ed41de84a988d9ddf4d5658a23b1->enter($__internal_a38156c4a99cb285a99b0d9b212a8cafac62ed41de84a988d9ddf4d5658a23b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a38156c4a99cb285a99b0d9b212a8cafac62ed41de84a988d9ddf4d5658a23b1->leave($__internal_a38156c4a99cb285a99b0d9b212a8cafac62ed41de84a988d9ddf4d5658a23b1_prof);

        
        $__internal_c6bd5c3178a0f565189ff53dbb9c06bbd1fb02dd1b2aa28366246e0917bfd6ca->leave($__internal_c6bd5c3178a0f565189ff53dbb9c06bbd1fb02dd1b2aa28366246e0917bfd6ca_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_611a96760675a0b779a71235a40cd935d251e0aeb3f62852a9fd4bc9133b7936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_611a96760675a0b779a71235a40cd935d251e0aeb3f62852a9fd4bc9133b7936->enter($__internal_611a96760675a0b779a71235a40cd935d251e0aeb3f62852a9fd4bc9133b7936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e16ad9038eee92f42096cc1b4e69cc4989778432ab8076d33abbae4f2c13b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e16ad9038eee92f42096cc1b4e69cc4989778432ab8076d33abbae4f2c13b26->enter($__internal_7e16ad9038eee92f42096cc1b4e69cc4989778432ab8076d33abbae4f2c13b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7e16ad9038eee92f42096cc1b4e69cc4989778432ab8076d33abbae4f2c13b26->leave($__internal_7e16ad9038eee92f42096cc1b4e69cc4989778432ab8076d33abbae4f2c13b26_prof);

        
        $__internal_611a96760675a0b779a71235a40cd935d251e0aeb3f62852a9fd4bc9133b7936->leave($__internal_611a96760675a0b779a71235a40cd935d251e0aeb3f62852a9fd4bc9133b7936_prof);

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
