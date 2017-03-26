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
        $__internal_e4e7a27fd7dc2824e217d94b4efcb4d9ee081fd02231c18df50046023d824337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e7a27fd7dc2824e217d94b4efcb4d9ee081fd02231c18df50046023d824337->enter($__internal_e4e7a27fd7dc2824e217d94b4efcb4d9ee081fd02231c18df50046023d824337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e9f8d374a0d403eb561de6f686e1d73c93328c4a97836edfea97c1959dbecaba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f8d374a0d403eb561de6f686e1d73c93328c4a97836edfea97c1959dbecaba->enter($__internal_e9f8d374a0d403eb561de6f686e1d73c93328c4a97836edfea97c1959dbecaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e7a27fd7dc2824e217d94b4efcb4d9ee081fd02231c18df50046023d824337->leave($__internal_e4e7a27fd7dc2824e217d94b4efcb4d9ee081fd02231c18df50046023d824337_prof);

        
        $__internal_e9f8d374a0d403eb561de6f686e1d73c93328c4a97836edfea97c1959dbecaba->leave($__internal_e9f8d374a0d403eb561de6f686e1d73c93328c4a97836edfea97c1959dbecaba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cd868feebec24029cdd475ebed0f4cd177a97059d3754e67709346eb30a52a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd868feebec24029cdd475ebed0f4cd177a97059d3754e67709346eb30a52a8->enter($__internal_1cd868feebec24029cdd475ebed0f4cd177a97059d3754e67709346eb30a52a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12367b357a07c3adde2adc317490f7ca7a704dad5aaf307f0236f932c128cecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12367b357a07c3adde2adc317490f7ca7a704dad5aaf307f0236f932c128cecd->enter($__internal_12367b357a07c3adde2adc317490f7ca7a704dad5aaf307f0236f932c128cecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_12367b357a07c3adde2adc317490f7ca7a704dad5aaf307f0236f932c128cecd->leave($__internal_12367b357a07c3adde2adc317490f7ca7a704dad5aaf307f0236f932c128cecd_prof);

        
        $__internal_1cd868feebec24029cdd475ebed0f4cd177a97059d3754e67709346eb30a52a8->leave($__internal_1cd868feebec24029cdd475ebed0f4cd177a97059d3754e67709346eb30a52a8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc68434bf38b2dfa5285410895c449948d3229508782e2e2ef4ffa98e7d04c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc68434bf38b2dfa5285410895c449948d3229508782e2e2ef4ffa98e7d04c69->enter($__internal_cc68434bf38b2dfa5285410895c449948d3229508782e2e2ef4ffa98e7d04c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10e9dc6bd2b318487d4e83979ef93c641739410daee05cfb5562b343cd2760b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e9dc6bd2b318487d4e83979ef93c641739410daee05cfb5562b343cd2760b5->enter($__internal_10e9dc6bd2b318487d4e83979ef93c641739410daee05cfb5562b343cd2760b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_10e9dc6bd2b318487d4e83979ef93c641739410daee05cfb5562b343cd2760b5->leave($__internal_10e9dc6bd2b318487d4e83979ef93c641739410daee05cfb5562b343cd2760b5_prof);

        
        $__internal_cc68434bf38b2dfa5285410895c449948d3229508782e2e2ef4ffa98e7d04c69->leave($__internal_cc68434bf38b2dfa5285410895c449948d3229508782e2e2ef4ffa98e7d04c69_prof);

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
