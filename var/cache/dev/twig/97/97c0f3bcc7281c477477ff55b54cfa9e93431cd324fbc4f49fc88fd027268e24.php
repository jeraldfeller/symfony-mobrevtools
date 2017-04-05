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
        $__internal_6d70a576ec759f7eb100235dfa3098fd0aaddf33823f9c1ebc82b5c16082a1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d70a576ec759f7eb100235dfa3098fd0aaddf33823f9c1ebc82b5c16082a1d9->enter($__internal_6d70a576ec759f7eb100235dfa3098fd0aaddf33823f9c1ebc82b5c16082a1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_c5a4680cc50ecc01d9e20cb1f40605abf8d6b9bd58ddfaa5f99b54ada98b4a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a4680cc50ecc01d9e20cb1f40605abf8d6b9bd58ddfaa5f99b54ada98b4a19->enter($__internal_c5a4680cc50ecc01d9e20cb1f40605abf8d6b9bd58ddfaa5f99b54ada98b4a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d70a576ec759f7eb100235dfa3098fd0aaddf33823f9c1ebc82b5c16082a1d9->leave($__internal_6d70a576ec759f7eb100235dfa3098fd0aaddf33823f9c1ebc82b5c16082a1d9_prof);

        
        $__internal_c5a4680cc50ecc01d9e20cb1f40605abf8d6b9bd58ddfaa5f99b54ada98b4a19->leave($__internal_c5a4680cc50ecc01d9e20cb1f40605abf8d6b9bd58ddfaa5f99b54ada98b4a19_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80b27c121106cb7982bf6282f09909c28a9ac021d621a2039ff039d3f39366e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b27c121106cb7982bf6282f09909c28a9ac021d621a2039ff039d3f39366e4->enter($__internal_80b27c121106cb7982bf6282f09909c28a9ac021d621a2039ff039d3f39366e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13fb399e90e9a574b81245b033b20eabbdf777c96010b21048d8bf346cc5cc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13fb399e90e9a574b81245b033b20eabbdf777c96010b21048d8bf346cc5cc19->enter($__internal_13fb399e90e9a574b81245b033b20eabbdf777c96010b21048d8bf346cc5cc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_13fb399e90e9a574b81245b033b20eabbdf777c96010b21048d8bf346cc5cc19->leave($__internal_13fb399e90e9a574b81245b033b20eabbdf777c96010b21048d8bf346cc5cc19_prof);

        
        $__internal_80b27c121106cb7982bf6282f09909c28a9ac021d621a2039ff039d3f39366e4->leave($__internal_80b27c121106cb7982bf6282f09909c28a9ac021d621a2039ff039d3f39366e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_688d2ef63fa4dacdb66d071a6a8542f8e5cb8ab6f04cdd7594d44340ac29f761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688d2ef63fa4dacdb66d071a6a8542f8e5cb8ab6f04cdd7594d44340ac29f761->enter($__internal_688d2ef63fa4dacdb66d071a6a8542f8e5cb8ab6f04cdd7594d44340ac29f761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4268622c1869b5f3fb737783b466e2e1fe7932baef7440931bd5fda066d8ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4268622c1869b5f3fb737783b466e2e1fe7932baef7440931bd5fda066d8ddb->enter($__internal_d4268622c1869b5f3fb737783b466e2e1fe7932baef7440931bd5fda066d8ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d4268622c1869b5f3fb737783b466e2e1fe7932baef7440931bd5fda066d8ddb->leave($__internal_d4268622c1869b5f3fb737783b466e2e1fe7932baef7440931bd5fda066d8ddb_prof);

        
        $__internal_688d2ef63fa4dacdb66d071a6a8542f8e5cb8ab6f04cdd7594d44340ac29f761->leave($__internal_688d2ef63fa4dacdb66d071a6a8542f8e5cb8ab6f04cdd7594d44340ac29f761_prof);

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
