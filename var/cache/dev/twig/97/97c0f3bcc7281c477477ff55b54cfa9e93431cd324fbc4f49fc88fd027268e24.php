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
        $__internal_9b12f122249192ea71c9eb8d43d4f75a3a5266c17c64f4ec876b8ff996141ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b12f122249192ea71c9eb8d43d4f75a3a5266c17c64f4ec876b8ff996141ae5->enter($__internal_9b12f122249192ea71c9eb8d43d4f75a3a5266c17c64f4ec876b8ff996141ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_7194c3a5e262f0c45fb14ca529dc4f8bb81b280b0697d4109e1476522e916c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7194c3a5e262f0c45fb14ca529dc4f8bb81b280b0697d4109e1476522e916c4c->enter($__internal_7194c3a5e262f0c45fb14ca529dc4f8bb81b280b0697d4109e1476522e916c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b12f122249192ea71c9eb8d43d4f75a3a5266c17c64f4ec876b8ff996141ae5->leave($__internal_9b12f122249192ea71c9eb8d43d4f75a3a5266c17c64f4ec876b8ff996141ae5_prof);

        
        $__internal_7194c3a5e262f0c45fb14ca529dc4f8bb81b280b0697d4109e1476522e916c4c->leave($__internal_7194c3a5e262f0c45fb14ca529dc4f8bb81b280b0697d4109e1476522e916c4c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3208ca505061b016a203cc4c4449b846a995c391bc6d45f5a100e09087350f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3208ca505061b016a203cc4c4449b846a995c391bc6d45f5a100e09087350f70->enter($__internal_3208ca505061b016a203cc4c4449b846a995c391bc6d45f5a100e09087350f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_547eea9ef9a6245bff399292d5ca10f36a1cabaaf0464062078d28461e85a544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547eea9ef9a6245bff399292d5ca10f36a1cabaaf0464062078d28461e85a544->enter($__internal_547eea9ef9a6245bff399292d5ca10f36a1cabaaf0464062078d28461e85a544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_547eea9ef9a6245bff399292d5ca10f36a1cabaaf0464062078d28461e85a544->leave($__internal_547eea9ef9a6245bff399292d5ca10f36a1cabaaf0464062078d28461e85a544_prof);

        
        $__internal_3208ca505061b016a203cc4c4449b846a995c391bc6d45f5a100e09087350f70->leave($__internal_3208ca505061b016a203cc4c4449b846a995c391bc6d45f5a100e09087350f70_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a15d773f03aaadecacd65cd0f2e0eb188222ca73c9f2161c78c1ed9d8df9a174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15d773f03aaadecacd65cd0f2e0eb188222ca73c9f2161c78c1ed9d8df9a174->enter($__internal_a15d773f03aaadecacd65cd0f2e0eb188222ca73c9f2161c78c1ed9d8df9a174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2706cf0bbc7bcf3a02e0963f93311e04de20dfec9263b98a8607d0086502091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2706cf0bbc7bcf3a02e0963f93311e04de20dfec9263b98a8607d0086502091->enter($__internal_a2706cf0bbc7bcf3a02e0963f93311e04de20dfec9263b98a8607d0086502091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a2706cf0bbc7bcf3a02e0963f93311e04de20dfec9263b98a8607d0086502091->leave($__internal_a2706cf0bbc7bcf3a02e0963f93311e04de20dfec9263b98a8607d0086502091_prof);

        
        $__internal_a15d773f03aaadecacd65cd0f2e0eb188222ca73c9f2161c78c1ed9d8df9a174->leave($__internal_a15d773f03aaadecacd65cd0f2e0eb188222ca73c9f2161c78c1ed9d8df9a174_prof);

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
