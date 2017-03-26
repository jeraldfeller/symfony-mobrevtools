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
        $__internal_82e0b6fec09756216f242a21a85e34816c34291f6aafec41acf7dec1e264f556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e0b6fec09756216f242a21a85e34816c34291f6aafec41acf7dec1e264f556->enter($__internal_82e0b6fec09756216f242a21a85e34816c34291f6aafec41acf7dec1e264f556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_1a0a66d78e81893a19d4ddbce45074587f8099e7ca048a2fffb4fa4b98e487d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0a66d78e81893a19d4ddbce45074587f8099e7ca048a2fffb4fa4b98e487d4->enter($__internal_1a0a66d78e81893a19d4ddbce45074587f8099e7ca048a2fffb4fa4b98e487d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82e0b6fec09756216f242a21a85e34816c34291f6aafec41acf7dec1e264f556->leave($__internal_82e0b6fec09756216f242a21a85e34816c34291f6aafec41acf7dec1e264f556_prof);

        
        $__internal_1a0a66d78e81893a19d4ddbce45074587f8099e7ca048a2fffb4fa4b98e487d4->leave($__internal_1a0a66d78e81893a19d4ddbce45074587f8099e7ca048a2fffb4fa4b98e487d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea8f0f72bfb096a6c342118fdb66e016aaf8d6cc6e372531a16b805dad4c8ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8f0f72bfb096a6c342118fdb66e016aaf8d6cc6e372531a16b805dad4c8ee8->enter($__internal_ea8f0f72bfb096a6c342118fdb66e016aaf8d6cc6e372531a16b805dad4c8ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0413450baf4f0e86783ac8df9918e7086d1731a7049117790466fc7b7c2a37aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0413450baf4f0e86783ac8df9918e7086d1731a7049117790466fc7b7c2a37aa->enter($__internal_0413450baf4f0e86783ac8df9918e7086d1731a7049117790466fc7b7c2a37aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0413450baf4f0e86783ac8df9918e7086d1731a7049117790466fc7b7c2a37aa->leave($__internal_0413450baf4f0e86783ac8df9918e7086d1731a7049117790466fc7b7c2a37aa_prof);

        
        $__internal_ea8f0f72bfb096a6c342118fdb66e016aaf8d6cc6e372531a16b805dad4c8ee8->leave($__internal_ea8f0f72bfb096a6c342118fdb66e016aaf8d6cc6e372531a16b805dad4c8ee8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_35a69c0f8f7338e3ed4e053afd5d57e86cf3a7983555d8a6bff815d60e72316f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a69c0f8f7338e3ed4e053afd5d57e86cf3a7983555d8a6bff815d60e72316f->enter($__internal_35a69c0f8f7338e3ed4e053afd5d57e86cf3a7983555d8a6bff815d60e72316f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd9f6bf79e0c49f626f37d2f6cf03ce4bb9ec6c5f30a937302c5a5466a12198e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9f6bf79e0c49f626f37d2f6cf03ce4bb9ec6c5f30a937302c5a5466a12198e->enter($__internal_dd9f6bf79e0c49f626f37d2f6cf03ce4bb9ec6c5f30a937302c5a5466a12198e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dd9f6bf79e0c49f626f37d2f6cf03ce4bb9ec6c5f30a937302c5a5466a12198e->leave($__internal_dd9f6bf79e0c49f626f37d2f6cf03ce4bb9ec6c5f30a937302c5a5466a12198e_prof);

        
        $__internal_35a69c0f8f7338e3ed4e053afd5d57e86cf3a7983555d8a6bff815d60e72316f->leave($__internal_35a69c0f8f7338e3ed4e053afd5d57e86cf3a7983555d8a6bff815d60e72316f_prof);

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
