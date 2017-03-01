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
        $__internal_0903869367eacd312b0c72b10e7510f3ff33272b5ef1cae351db94dd7a42fac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0903869367eacd312b0c72b10e7510f3ff33272b5ef1cae351db94dd7a42fac0->enter($__internal_0903869367eacd312b0c72b10e7510f3ff33272b5ef1cae351db94dd7a42fac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_6b5f31afd81ac6acc18cea81077bc11e6d5c3e96898314e8489e74166ba94ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5f31afd81ac6acc18cea81077bc11e6d5c3e96898314e8489e74166ba94ba1->enter($__internal_6b5f31afd81ac6acc18cea81077bc11e6d5c3e96898314e8489e74166ba94ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0903869367eacd312b0c72b10e7510f3ff33272b5ef1cae351db94dd7a42fac0->leave($__internal_0903869367eacd312b0c72b10e7510f3ff33272b5ef1cae351db94dd7a42fac0_prof);

        
        $__internal_6b5f31afd81ac6acc18cea81077bc11e6d5c3e96898314e8489e74166ba94ba1->leave($__internal_6b5f31afd81ac6acc18cea81077bc11e6d5c3e96898314e8489e74166ba94ba1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_156ecbc7934f46feef12d389d829f5b4f7e6bf91e0def37a02e60a8e300d117b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156ecbc7934f46feef12d389d829f5b4f7e6bf91e0def37a02e60a8e300d117b->enter($__internal_156ecbc7934f46feef12d389d829f5b4f7e6bf91e0def37a02e60a8e300d117b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_35545a791e8cbae3699fd31c4ad3f47449bda08e23d40bcc2a880264caa0be0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35545a791e8cbae3699fd31c4ad3f47449bda08e23d40bcc2a880264caa0be0f->enter($__internal_35545a791e8cbae3699fd31c4ad3f47449bda08e23d40bcc2a880264caa0be0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_35545a791e8cbae3699fd31c4ad3f47449bda08e23d40bcc2a880264caa0be0f->leave($__internal_35545a791e8cbae3699fd31c4ad3f47449bda08e23d40bcc2a880264caa0be0f_prof);

        
        $__internal_156ecbc7934f46feef12d389d829f5b4f7e6bf91e0def37a02e60a8e300d117b->leave($__internal_156ecbc7934f46feef12d389d829f5b4f7e6bf91e0def37a02e60a8e300d117b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d9ec623dc14bd86e30a91da3d40d3c5dc5f4ffffb30bac9ba729df6a81adc75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d9ec623dc14bd86e30a91da3d40d3c5dc5f4ffffb30bac9ba729df6a81adc75->enter($__internal_9d9ec623dc14bd86e30a91da3d40d3c5dc5f4ffffb30bac9ba729df6a81adc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f31a5f62809e801270453f44ea2c4dc2aea63661c620dd83b8a6eba2b8d5e985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31a5f62809e801270453f44ea2c4dc2aea63661c620dd83b8a6eba2b8d5e985->enter($__internal_f31a5f62809e801270453f44ea2c4dc2aea63661c620dd83b8a6eba2b8d5e985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f31a5f62809e801270453f44ea2c4dc2aea63661c620dd83b8a6eba2b8d5e985->leave($__internal_f31a5f62809e801270453f44ea2c4dc2aea63661c620dd83b8a6eba2b8d5e985_prof);

        
        $__internal_9d9ec623dc14bd86e30a91da3d40d3c5dc5f4ffffb30bac9ba729df6a81adc75->leave($__internal_9d9ec623dc14bd86e30a91da3d40d3c5dc5f4ffffb30bac9ba729df6a81adc75_prof);

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
