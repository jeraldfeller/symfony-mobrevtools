<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ea9f09f42916f8f4acf778706cca9ddd20b59b9dcc0dac08f191931aa642121e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_f227813031b2167556c5f0a5f6e054e0d26c80657892a644735ebb3366707983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f227813031b2167556c5f0a5f6e054e0d26c80657892a644735ebb3366707983->enter($__internal_f227813031b2167556c5f0a5f6e054e0d26c80657892a644735ebb3366707983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4062dce1169455e21b465daaaf8eb396ce32cb11d62b24b829c0b57c84970475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4062dce1169455e21b465daaaf8eb396ce32cb11d62b24b829c0b57c84970475->enter($__internal_4062dce1169455e21b465daaaf8eb396ce32cb11d62b24b829c0b57c84970475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f227813031b2167556c5f0a5f6e054e0d26c80657892a644735ebb3366707983->leave($__internal_f227813031b2167556c5f0a5f6e054e0d26c80657892a644735ebb3366707983_prof);

        
        $__internal_4062dce1169455e21b465daaaf8eb396ce32cb11d62b24b829c0b57c84970475->leave($__internal_4062dce1169455e21b465daaaf8eb396ce32cb11d62b24b829c0b57c84970475_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f136bec1b93bce72ab6ab8f0d543c7972778dc482a7d3b13046f134c2f2ca34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f136bec1b93bce72ab6ab8f0d543c7972778dc482a7d3b13046f134c2f2ca34->enter($__internal_7f136bec1b93bce72ab6ab8f0d543c7972778dc482a7d3b13046f134c2f2ca34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24eff1fea30363fe54efd84e570b4079e50ab70d5b4fae5f58436e088e0da068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24eff1fea30363fe54efd84e570b4079e50ab70d5b4fae5f58436e088e0da068->enter($__internal_24eff1fea30363fe54efd84e570b4079e50ab70d5b4fae5f58436e088e0da068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_24eff1fea30363fe54efd84e570b4079e50ab70d5b4fae5f58436e088e0da068->leave($__internal_24eff1fea30363fe54efd84e570b4079e50ab70d5b4fae5f58436e088e0da068_prof);

        
        $__internal_7f136bec1b93bce72ab6ab8f0d543c7972778dc482a7d3b13046f134c2f2ca34->leave($__internal_7f136bec1b93bce72ab6ab8f0d543c7972778dc482a7d3b13046f134c2f2ca34_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfc9cfca25c8bd5f0c8406c3c95c066031262fb177dcb5d1f6c0832edfda4d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc9cfca25c8bd5f0c8406c3c95c066031262fb177dcb5d1f6c0832edfda4d33->enter($__internal_cfc9cfca25c8bd5f0c8406c3c95c066031262fb177dcb5d1f6c0832edfda4d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21d3553049dfffd81cb17b0a99b0cf8151c37018cb56b3b6c36533f9d14c2872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d3553049dfffd81cb17b0a99b0cf8151c37018cb56b3b6c36533f9d14c2872->enter($__internal_21d3553049dfffd81cb17b0a99b0cf8151c37018cb56b3b6c36533f9d14c2872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_21d3553049dfffd81cb17b0a99b0cf8151c37018cb56b3b6c36533f9d14c2872->leave($__internal_21d3553049dfffd81cb17b0a99b0cf8151c37018cb56b3b6c36533f9d14c2872_prof);

        
        $__internal_cfc9cfca25c8bd5f0c8406c3c95c066031262fb177dcb5d1f6c0832edfda4d33->leave($__internal_cfc9cfca25c8bd5f0c8406c3c95c066031262fb177dcb5d1f6c0832edfda4d33_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
