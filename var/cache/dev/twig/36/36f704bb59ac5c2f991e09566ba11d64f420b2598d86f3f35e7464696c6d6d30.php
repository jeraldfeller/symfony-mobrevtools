<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_4b6cf9807883861a759685d1ef595233792f60efef1a35b975ae8bdaa8dbd2ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_95480206512ca008842c31bc3eaf40a65ea092e85d54ceb347e1acd9b8786971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95480206512ca008842c31bc3eaf40a65ea092e85d54ceb347e1acd9b8786971->enter($__internal_95480206512ca008842c31bc3eaf40a65ea092e85d54ceb347e1acd9b8786971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_1ae9f2401be3ebe6d075adb002dd5f7e6d08d069593082c36efdce52f4966d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae9f2401be3ebe6d075adb002dd5f7e6d08d069593082c36efdce52f4966d68->enter($__internal_1ae9f2401be3ebe6d075adb002dd5f7e6d08d069593082c36efdce52f4966d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95480206512ca008842c31bc3eaf40a65ea092e85d54ceb347e1acd9b8786971->leave($__internal_95480206512ca008842c31bc3eaf40a65ea092e85d54ceb347e1acd9b8786971_prof);

        
        $__internal_1ae9f2401be3ebe6d075adb002dd5f7e6d08d069593082c36efdce52f4966d68->leave($__internal_1ae9f2401be3ebe6d075adb002dd5f7e6d08d069593082c36efdce52f4966d68_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f1f9f1902ca083e0e36147c32eb7e09a8fa95286737b9ad6f42335cd1fc8c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1f9f1902ca083e0e36147c32eb7e09a8fa95286737b9ad6f42335cd1fc8c14->enter($__internal_0f1f9f1902ca083e0e36147c32eb7e09a8fa95286737b9ad6f42335cd1fc8c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e07610fa533ceb202e1180b42c5ab42cef3a1cc429350ca0cd55825c2586f749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07610fa533ceb202e1180b42c5ab42cef3a1cc429350ca0cd55825c2586f749->enter($__internal_e07610fa533ceb202e1180b42c5ab42cef3a1cc429350ca0cd55825c2586f749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e07610fa533ceb202e1180b42c5ab42cef3a1cc429350ca0cd55825c2586f749->leave($__internal_e07610fa533ceb202e1180b42c5ab42cef3a1cc429350ca0cd55825c2586f749_prof);

        
        $__internal_0f1f9f1902ca083e0e36147c32eb7e09a8fa95286737b9ad6f42335cd1fc8c14->leave($__internal_0f1f9f1902ca083e0e36147c32eb7e09a8fa95286737b9ad6f42335cd1fc8c14_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_76dfa8cfa2cab86304c750fce14e5167bf7ae947a1da136bcb9c6e3bc803b8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76dfa8cfa2cab86304c750fce14e5167bf7ae947a1da136bcb9c6e3bc803b8b6->enter($__internal_76dfa8cfa2cab86304c750fce14e5167bf7ae947a1da136bcb9c6e3bc803b8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_965f5fafde9eedd9f9dd843bc23268aa501adb28e01535aae91c1ab6b13c69aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965f5fafde9eedd9f9dd843bc23268aa501adb28e01535aae91c1ab6b13c69aa->enter($__internal_965f5fafde9eedd9f9dd843bc23268aa501adb28e01535aae91c1ab6b13c69aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_965f5fafde9eedd9f9dd843bc23268aa501adb28e01535aae91c1ab6b13c69aa->leave($__internal_965f5fafde9eedd9f9dd843bc23268aa501adb28e01535aae91c1ab6b13c69aa_prof);

        
        $__internal_76dfa8cfa2cab86304c750fce14e5167bf7ae947a1da136bcb9c6e3bc803b8b6->leave($__internal_76dfa8cfa2cab86304c750fce14e5167bf7ae947a1da136bcb9c6e3bc803b8b6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
