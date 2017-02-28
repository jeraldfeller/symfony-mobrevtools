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
        $__internal_a8606086357a7a0be5759d9565fa202b35c29c034dd092ac1aebce28d12ff294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8606086357a7a0be5759d9565fa202b35c29c034dd092ac1aebce28d12ff294->enter($__internal_a8606086357a7a0be5759d9565fa202b35c29c034dd092ac1aebce28d12ff294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_84e6de292272ab1fecd884a06051a14d74a5469c26fab800adca62288b3cd98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e6de292272ab1fecd884a06051a14d74a5469c26fab800adca62288b3cd98c->enter($__internal_84e6de292272ab1fecd884a06051a14d74a5469c26fab800adca62288b3cd98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8606086357a7a0be5759d9565fa202b35c29c034dd092ac1aebce28d12ff294->leave($__internal_a8606086357a7a0be5759d9565fa202b35c29c034dd092ac1aebce28d12ff294_prof);

        
        $__internal_84e6de292272ab1fecd884a06051a14d74a5469c26fab800adca62288b3cd98c->leave($__internal_84e6de292272ab1fecd884a06051a14d74a5469c26fab800adca62288b3cd98c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ad243b64354429e8f85efe6f15740e6c70df5489e69450a5874a111f33fa7ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ad243b64354429e8f85efe6f15740e6c70df5489e69450a5874a111f33fa7ab->enter($__internal_9ad243b64354429e8f85efe6f15740e6c70df5489e69450a5874a111f33fa7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_22b6cd9872ea8e28068bd5ea84ce7f3a7b286cd5352f5c9a4db56328c3831db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b6cd9872ea8e28068bd5ea84ce7f3a7b286cd5352f5c9a4db56328c3831db0->enter($__internal_22b6cd9872ea8e28068bd5ea84ce7f3a7b286cd5352f5c9a4db56328c3831db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_22b6cd9872ea8e28068bd5ea84ce7f3a7b286cd5352f5c9a4db56328c3831db0->leave($__internal_22b6cd9872ea8e28068bd5ea84ce7f3a7b286cd5352f5c9a4db56328c3831db0_prof);

        
        $__internal_9ad243b64354429e8f85efe6f15740e6c70df5489e69450a5874a111f33fa7ab->leave($__internal_9ad243b64354429e8f85efe6f15740e6c70df5489e69450a5874a111f33fa7ab_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_897f44cb583cf47a0fb325c403a2bec586fbdb12f07724d495b8bdc36bce1b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897f44cb583cf47a0fb325c403a2bec586fbdb12f07724d495b8bdc36bce1b61->enter($__internal_897f44cb583cf47a0fb325c403a2bec586fbdb12f07724d495b8bdc36bce1b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bf13de4d84e3ab4ed854ba86f73d9260414b6a00c47ea8cadd6ba1d41a26a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf13de4d84e3ab4ed854ba86f73d9260414b6a00c47ea8cadd6ba1d41a26a22->enter($__internal_9bf13de4d84e3ab4ed854ba86f73d9260414b6a00c47ea8cadd6ba1d41a26a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9bf13de4d84e3ab4ed854ba86f73d9260414b6a00c47ea8cadd6ba1d41a26a22->leave($__internal_9bf13de4d84e3ab4ed854ba86f73d9260414b6a00c47ea8cadd6ba1d41a26a22_prof);

        
        $__internal_897f44cb583cf47a0fb325c403a2bec586fbdb12f07724d495b8bdc36bce1b61->leave($__internal_897f44cb583cf47a0fb325c403a2bec586fbdb12f07724d495b8bdc36bce1b61_prof);

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
