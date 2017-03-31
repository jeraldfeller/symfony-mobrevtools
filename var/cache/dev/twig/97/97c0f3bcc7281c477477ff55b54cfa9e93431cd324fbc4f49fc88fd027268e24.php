<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a694fdbfc0079b85e0d1e7898d55b9becf9e7b3fb4119c2293082466091c6b4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8e556a33fe6490b44e163df3b4bec307d1165b167955dd0abe17480f836a4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e556a33fe6490b44e163df3b4bec307d1165b167955dd0abe17480f836a4f6->enter($__internal_f8e556a33fe6490b44e163df3b4bec307d1165b167955dd0abe17480f836a4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_3d3bce648db0e5810d15940c9d5fcbaf5753fa7c017e929e9b3bfcac422a9862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3bce648db0e5810d15940c9d5fcbaf5753fa7c017e929e9b3bfcac422a9862->enter($__internal_3d3bce648db0e5810d15940c9d5fcbaf5753fa7c017e929e9b3bfcac422a9862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e556a33fe6490b44e163df3b4bec307d1165b167955dd0abe17480f836a4f6->leave($__internal_f8e556a33fe6490b44e163df3b4bec307d1165b167955dd0abe17480f836a4f6_prof);

        
        $__internal_3d3bce648db0e5810d15940c9d5fcbaf5753fa7c017e929e9b3bfcac422a9862->leave($__internal_3d3bce648db0e5810d15940c9d5fcbaf5753fa7c017e929e9b3bfcac422a9862_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b66d933fe242467df5b55fabb64b43fe43cfabb7944df0a4b86cf423015947d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b66d933fe242467df5b55fabb64b43fe43cfabb7944df0a4b86cf423015947d6->enter($__internal_b66d933fe242467df5b55fabb64b43fe43cfabb7944df0a4b86cf423015947d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9bc3bd36baa3cffb09d413f6c9a705eda6a99ae468298cb52aedb43407eb7e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc3bd36baa3cffb09d413f6c9a705eda6a99ae468298cb52aedb43407eb7e0d->enter($__internal_9bc3bd36baa3cffb09d413f6c9a705eda6a99ae468298cb52aedb43407eb7e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9bc3bd36baa3cffb09d413f6c9a705eda6a99ae468298cb52aedb43407eb7e0d->leave($__internal_9bc3bd36baa3cffb09d413f6c9a705eda6a99ae468298cb52aedb43407eb7e0d_prof);

        
        $__internal_b66d933fe242467df5b55fabb64b43fe43cfabb7944df0a4b86cf423015947d6->leave($__internal_b66d933fe242467df5b55fabb64b43fe43cfabb7944df0a4b86cf423015947d6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_10b7bfc7a4630f63cd68978ef75abc46c214156422c634fc39be9b24a3e0c2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b7bfc7a4630f63cd68978ef75abc46c214156422c634fc39be9b24a3e0c2e3->enter($__internal_10b7bfc7a4630f63cd68978ef75abc46c214156422c634fc39be9b24a3e0c2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5dd82c7a54fc84a620dbbc86fd767ec5a2c8e8df6d3a6908947e18cb99a213af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd82c7a54fc84a620dbbc86fd767ec5a2c8e8df6d3a6908947e18cb99a213af->enter($__internal_5dd82c7a54fc84a620dbbc86fd767ec5a2c8e8df6d3a6908947e18cb99a213af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5dd82c7a54fc84a620dbbc86fd767ec5a2c8e8df6d3a6908947e18cb99a213af->leave($__internal_5dd82c7a54fc84a620dbbc86fd767ec5a2c8e8df6d3a6908947e18cb99a213af_prof);

        
        $__internal_10b7bfc7a4630f63cd68978ef75abc46c214156422c634fc39be9b24a3e0c2e3->leave($__internal_10b7bfc7a4630f63cd68978ef75abc46c214156422c634fc39be9b24a3e0c2e3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
