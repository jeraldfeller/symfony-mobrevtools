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
        $__internal_a727ae05a88086990a7cc20d19a1b77601357ec04ebf333947ffdf6857359f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a727ae05a88086990a7cc20d19a1b77601357ec04ebf333947ffdf6857359f40->enter($__internal_a727ae05a88086990a7cc20d19a1b77601357ec04ebf333947ffdf6857359f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_602c0d51222d56d6fdc1d1b60da92d27a17b69d4c2c0d712ed689e9b53b4dcb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602c0d51222d56d6fdc1d1b60da92d27a17b69d4c2c0d712ed689e9b53b4dcb2->enter($__internal_602c0d51222d56d6fdc1d1b60da92d27a17b69d4c2c0d712ed689e9b53b4dcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a727ae05a88086990a7cc20d19a1b77601357ec04ebf333947ffdf6857359f40->leave($__internal_a727ae05a88086990a7cc20d19a1b77601357ec04ebf333947ffdf6857359f40_prof);

        
        $__internal_602c0d51222d56d6fdc1d1b60da92d27a17b69d4c2c0d712ed689e9b53b4dcb2->leave($__internal_602c0d51222d56d6fdc1d1b60da92d27a17b69d4c2c0d712ed689e9b53b4dcb2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0fffcf442f474d6628d7d4741a8dee13dbeb8d8f4b5d3b1b1da4212825b1aa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0fffcf442f474d6628d7d4741a8dee13dbeb8d8f4b5d3b1b1da4212825b1aa7->enter($__internal_b0fffcf442f474d6628d7d4741a8dee13dbeb8d8f4b5d3b1b1da4212825b1aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ccf7157245d08be64d95fe24e7af25d5147869b99161e760db294c0e83b8b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ccf7157245d08be64d95fe24e7af25d5147869b99161e760db294c0e83b8b97->enter($__internal_4ccf7157245d08be64d95fe24e7af25d5147869b99161e760db294c0e83b8b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4ccf7157245d08be64d95fe24e7af25d5147869b99161e760db294c0e83b8b97->leave($__internal_4ccf7157245d08be64d95fe24e7af25d5147869b99161e760db294c0e83b8b97_prof);

        
        $__internal_b0fffcf442f474d6628d7d4741a8dee13dbeb8d8f4b5d3b1b1da4212825b1aa7->leave($__internal_b0fffcf442f474d6628d7d4741a8dee13dbeb8d8f4b5d3b1b1da4212825b1aa7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_63cd31f6cc9afb83e42dc69c7205060b478c0975fa4321deb9239e5f7ad9e950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63cd31f6cc9afb83e42dc69c7205060b478c0975fa4321deb9239e5f7ad9e950->enter($__internal_63cd31f6cc9afb83e42dc69c7205060b478c0975fa4321deb9239e5f7ad9e950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bba40c388139709a412dfa80189adadc1311cd776349b6bcdf0889c92a610cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba40c388139709a412dfa80189adadc1311cd776349b6bcdf0889c92a610cb4->enter($__internal_bba40c388139709a412dfa80189adadc1311cd776349b6bcdf0889c92a610cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bba40c388139709a412dfa80189adadc1311cd776349b6bcdf0889c92a610cb4->leave($__internal_bba40c388139709a412dfa80189adadc1311cd776349b6bcdf0889c92a610cb4_prof);

        
        $__internal_63cd31f6cc9afb83e42dc69c7205060b478c0975fa4321deb9239e5f7ad9e950->leave($__internal_63cd31f6cc9afb83e42dc69c7205060b478c0975fa4321deb9239e5f7ad9e950_prof);

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
