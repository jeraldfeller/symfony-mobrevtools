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
        $__internal_92c5026516128952efbf6d2f0a0cdd586155c1de76d5c9d98ed53d7840ac8160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c5026516128952efbf6d2f0a0cdd586155c1de76d5c9d98ed53d7840ac8160->enter($__internal_92c5026516128952efbf6d2f0a0cdd586155c1de76d5c9d98ed53d7840ac8160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_94a3c842380ca3146eb28fd80dd0ad987c3ef7f77e6c206d8e6acd56dc86a117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a3c842380ca3146eb28fd80dd0ad987c3ef7f77e6c206d8e6acd56dc86a117->enter($__internal_94a3c842380ca3146eb28fd80dd0ad987c3ef7f77e6c206d8e6acd56dc86a117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92c5026516128952efbf6d2f0a0cdd586155c1de76d5c9d98ed53d7840ac8160->leave($__internal_92c5026516128952efbf6d2f0a0cdd586155c1de76d5c9d98ed53d7840ac8160_prof);

        
        $__internal_94a3c842380ca3146eb28fd80dd0ad987c3ef7f77e6c206d8e6acd56dc86a117->leave($__internal_94a3c842380ca3146eb28fd80dd0ad987c3ef7f77e6c206d8e6acd56dc86a117_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7994513bbc8ef79ae2b852a04fda20936b50cc56967cc8142aef95760d55818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7994513bbc8ef79ae2b852a04fda20936b50cc56967cc8142aef95760d55818->enter($__internal_d7994513bbc8ef79ae2b852a04fda20936b50cc56967cc8142aef95760d55818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b643b0c9dfae13ee2a3369be69c5e73e2f0e0b9c70df896cf192fcafd0315458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b643b0c9dfae13ee2a3369be69c5e73e2f0e0b9c70df896cf192fcafd0315458->enter($__internal_b643b0c9dfae13ee2a3369be69c5e73e2f0e0b9c70df896cf192fcafd0315458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b643b0c9dfae13ee2a3369be69c5e73e2f0e0b9c70df896cf192fcafd0315458->leave($__internal_b643b0c9dfae13ee2a3369be69c5e73e2f0e0b9c70df896cf192fcafd0315458_prof);

        
        $__internal_d7994513bbc8ef79ae2b852a04fda20936b50cc56967cc8142aef95760d55818->leave($__internal_d7994513bbc8ef79ae2b852a04fda20936b50cc56967cc8142aef95760d55818_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b10d8657f94116bee2d9aca7b5e1d87fe0b45e036937ad00f14ba61bbe1f46d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b10d8657f94116bee2d9aca7b5e1d87fe0b45e036937ad00f14ba61bbe1f46d4->enter($__internal_b10d8657f94116bee2d9aca7b5e1d87fe0b45e036937ad00f14ba61bbe1f46d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1aaf13ca05eac93692640f89f682344811c47ac92ac992b48c6b4b26cca9bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1aaf13ca05eac93692640f89f682344811c47ac92ac992b48c6b4b26cca9bda->enter($__internal_c1aaf13ca05eac93692640f89f682344811c47ac92ac992b48c6b4b26cca9bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c1aaf13ca05eac93692640f89f682344811c47ac92ac992b48c6b4b26cca9bda->leave($__internal_c1aaf13ca05eac93692640f89f682344811c47ac92ac992b48c6b4b26cca9bda_prof);

        
        $__internal_b10d8657f94116bee2d9aca7b5e1d87fe0b45e036937ad00f14ba61bbe1f46d4->leave($__internal_b10d8657f94116bee2d9aca7b5e1d87fe0b45e036937ad00f14ba61bbe1f46d4_prof);

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
