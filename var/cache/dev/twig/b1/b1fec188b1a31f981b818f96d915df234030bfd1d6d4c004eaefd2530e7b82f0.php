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
        $__internal_4b53fdf514fee02e2b76a071d28a3f7004f726dedd4dbfa88ee23d5f22c92424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b53fdf514fee02e2b76a071d28a3f7004f726dedd4dbfa88ee23d5f22c92424->enter($__internal_4b53fdf514fee02e2b76a071d28a3f7004f726dedd4dbfa88ee23d5f22c92424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_73a4bdd28215bd5e36f69fee6318e56cce7c0fad3ca906060336a948f5ddf995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a4bdd28215bd5e36f69fee6318e56cce7c0fad3ca906060336a948f5ddf995->enter($__internal_73a4bdd28215bd5e36f69fee6318e56cce7c0fad3ca906060336a948f5ddf995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b53fdf514fee02e2b76a071d28a3f7004f726dedd4dbfa88ee23d5f22c92424->leave($__internal_4b53fdf514fee02e2b76a071d28a3f7004f726dedd4dbfa88ee23d5f22c92424_prof);

        
        $__internal_73a4bdd28215bd5e36f69fee6318e56cce7c0fad3ca906060336a948f5ddf995->leave($__internal_73a4bdd28215bd5e36f69fee6318e56cce7c0fad3ca906060336a948f5ddf995_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_967c160ce867c4986cba6b892442741a21c3eb43e979f40ef15a92e155849f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967c160ce867c4986cba6b892442741a21c3eb43e979f40ef15a92e155849f20->enter($__internal_967c160ce867c4986cba6b892442741a21c3eb43e979f40ef15a92e155849f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4adae3a5a0484d6bc7c07a9154ac0644d9896c334e8bce37d575c56dd6a4c902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4adae3a5a0484d6bc7c07a9154ac0644d9896c334e8bce37d575c56dd6a4c902->enter($__internal_4adae3a5a0484d6bc7c07a9154ac0644d9896c334e8bce37d575c56dd6a4c902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4adae3a5a0484d6bc7c07a9154ac0644d9896c334e8bce37d575c56dd6a4c902->leave($__internal_4adae3a5a0484d6bc7c07a9154ac0644d9896c334e8bce37d575c56dd6a4c902_prof);

        
        $__internal_967c160ce867c4986cba6b892442741a21c3eb43e979f40ef15a92e155849f20->leave($__internal_967c160ce867c4986cba6b892442741a21c3eb43e979f40ef15a92e155849f20_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d55fc73b0c42f64c52a0eb5458e843cfb9bf64c5de04a6b0296fb03e4f6232e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d55fc73b0c42f64c52a0eb5458e843cfb9bf64c5de04a6b0296fb03e4f6232e6->enter($__internal_d55fc73b0c42f64c52a0eb5458e843cfb9bf64c5de04a6b0296fb03e4f6232e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fba1ec52218dce536aa8dd1f6d4437bb914bdb9dbe45ed07b90987d00979008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fba1ec52218dce536aa8dd1f6d4437bb914bdb9dbe45ed07b90987d00979008->enter($__internal_4fba1ec52218dce536aa8dd1f6d4437bb914bdb9dbe45ed07b90987d00979008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4fba1ec52218dce536aa8dd1f6d4437bb914bdb9dbe45ed07b90987d00979008->leave($__internal_4fba1ec52218dce536aa8dd1f6d4437bb914bdb9dbe45ed07b90987d00979008_prof);

        
        $__internal_d55fc73b0c42f64c52a0eb5458e843cfb9bf64c5de04a6b0296fb03e4f6232e6->leave($__internal_d55fc73b0c42f64c52a0eb5458e843cfb9bf64c5de04a6b0296fb03e4f6232e6_prof);

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
