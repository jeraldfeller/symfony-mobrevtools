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
        $__internal_394370afa317d5deb595e3ff2e90f5305cff9fc48ea80889b8942113c3d4527a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394370afa317d5deb595e3ff2e90f5305cff9fc48ea80889b8942113c3d4527a->enter($__internal_394370afa317d5deb595e3ff2e90f5305cff9fc48ea80889b8942113c3d4527a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9e96b60a2bcef966a66f9e516bc44db9c3165b03e44dab8f97ba4eb87ad2385d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e96b60a2bcef966a66f9e516bc44db9c3165b03e44dab8f97ba4eb87ad2385d->enter($__internal_9e96b60a2bcef966a66f9e516bc44db9c3165b03e44dab8f97ba4eb87ad2385d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_394370afa317d5deb595e3ff2e90f5305cff9fc48ea80889b8942113c3d4527a->leave($__internal_394370afa317d5deb595e3ff2e90f5305cff9fc48ea80889b8942113c3d4527a_prof);

        
        $__internal_9e96b60a2bcef966a66f9e516bc44db9c3165b03e44dab8f97ba4eb87ad2385d->leave($__internal_9e96b60a2bcef966a66f9e516bc44db9c3165b03e44dab8f97ba4eb87ad2385d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_176c666542b099e373f3af247d1a41dc9616b4d83d2fb400556c25e81866809c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176c666542b099e373f3af247d1a41dc9616b4d83d2fb400556c25e81866809c->enter($__internal_176c666542b099e373f3af247d1a41dc9616b4d83d2fb400556c25e81866809c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_726d4d65267b37e810d85bc0cd6c172da9bdc952f7b3a8f9df9667d513c09bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726d4d65267b37e810d85bc0cd6c172da9bdc952f7b3a8f9df9667d513c09bfe->enter($__internal_726d4d65267b37e810d85bc0cd6c172da9bdc952f7b3a8f9df9667d513c09bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_726d4d65267b37e810d85bc0cd6c172da9bdc952f7b3a8f9df9667d513c09bfe->leave($__internal_726d4d65267b37e810d85bc0cd6c172da9bdc952f7b3a8f9df9667d513c09bfe_prof);

        
        $__internal_176c666542b099e373f3af247d1a41dc9616b4d83d2fb400556c25e81866809c->leave($__internal_176c666542b099e373f3af247d1a41dc9616b4d83d2fb400556c25e81866809c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f36c27c578f442b768905571f77300d98b74e7b78d2f5224e11f9c3d3aaccd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f36c27c578f442b768905571f77300d98b74e7b78d2f5224e11f9c3d3aaccd1->enter($__internal_4f36c27c578f442b768905571f77300d98b74e7b78d2f5224e11f9c3d3aaccd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d55c7a2230015df03b5e6c49ff818b64c1a413e89d2fa81240c4d2e572102f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55c7a2230015df03b5e6c49ff818b64c1a413e89d2fa81240c4d2e572102f3b->enter($__internal_d55c7a2230015df03b5e6c49ff818b64c1a413e89d2fa81240c4d2e572102f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d55c7a2230015df03b5e6c49ff818b64c1a413e89d2fa81240c4d2e572102f3b->leave($__internal_d55c7a2230015df03b5e6c49ff818b64c1a413e89d2fa81240c4d2e572102f3b_prof);

        
        $__internal_4f36c27c578f442b768905571f77300d98b74e7b78d2f5224e11f9c3d3aaccd1->leave($__internal_4f36c27c578f442b768905571f77300d98b74e7b78d2f5224e11f9c3d3aaccd1_prof);

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
