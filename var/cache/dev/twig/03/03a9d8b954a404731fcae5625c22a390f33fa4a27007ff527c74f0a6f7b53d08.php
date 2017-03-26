<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_f829a7ea8e2d777c5458def8df01451584509f9d6a6efe2432bb167651a6a989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17aeba361ec7f7535d7331afb52715066921209b3c07e4a9dd17c5935d972e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17aeba361ec7f7535d7331afb52715066921209b3c07e4a9dd17c5935d972e26->enter($__internal_17aeba361ec7f7535d7331afb52715066921209b3c07e4a9dd17c5935d972e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_49f016989d241767f5e1335a5470a14a5c1069d134f3153ab8e9420356cbc208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f016989d241767f5e1335a5470a14a5c1069d134f3153ab8e9420356cbc208->enter($__internal_49f016989d241767f5e1335a5470a14a5c1069d134f3153ab8e9420356cbc208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17aeba361ec7f7535d7331afb52715066921209b3c07e4a9dd17c5935d972e26->leave($__internal_17aeba361ec7f7535d7331afb52715066921209b3c07e4a9dd17c5935d972e26_prof);

        
        $__internal_49f016989d241767f5e1335a5470a14a5c1069d134f3153ab8e9420356cbc208->leave($__internal_49f016989d241767f5e1335a5470a14a5c1069d134f3153ab8e9420356cbc208_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7272bc48522b1a58cd25acb8a9bc7bb6607169fffde390fc61f8d3a617d600f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7272bc48522b1a58cd25acb8a9bc7bb6607169fffde390fc61f8d3a617d600f8->enter($__internal_7272bc48522b1a58cd25acb8a9bc7bb6607169fffde390fc61f8d3a617d600f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0fb115f8e6c5bbb065a21c3b3a3f60f56b6ecc7ace31c3a057e7d9946b4b88e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb115f8e6c5bbb065a21c3b3a3f60f56b6ecc7ace31c3a057e7d9946b4b88e8->enter($__internal_0fb115f8e6c5bbb065a21c3b3a3f60f56b6ecc7ace31c3a057e7d9946b4b88e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_0fb115f8e6c5bbb065a21c3b3a3f60f56b6ecc7ace31c3a057e7d9946b4b88e8->leave($__internal_0fb115f8e6c5bbb065a21c3b3a3f60f56b6ecc7ace31c3a057e7d9946b4b88e8_prof);

        
        $__internal_7272bc48522b1a58cd25acb8a9bc7bb6607169fffde390fc61f8d3a617d600f8->leave($__internal_7272bc48522b1a58cd25acb8a9bc7bb6607169fffde390fc61f8d3a617d600f8_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7abccf7449a135df590379da44c508c50705d5f6e2afa4a33a3329a5959330b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7abccf7449a135df590379da44c508c50705d5f6e2afa4a33a3329a5959330b8->enter($__internal_7abccf7449a135df590379da44c508c50705d5f6e2afa4a33a3329a5959330b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cb0b3df0a964570c7fb17daa28bee390f5d9f4cd3cb78d753d7c85481bbdbee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0b3df0a964570c7fb17daa28bee390f5d9f4cd3cb78d753d7c85481bbdbee7->enter($__internal_cb0b3df0a964570c7fb17daa28bee390f5d9f4cd3cb78d753d7c85481bbdbee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_cb0b3df0a964570c7fb17daa28bee390f5d9f4cd3cb78d753d7c85481bbdbee7->leave($__internal_cb0b3df0a964570c7fb17daa28bee390f5d9f4cd3cb78d753d7c85481bbdbee7_prof);

        
        $__internal_7abccf7449a135df590379da44c508c50705d5f6e2afa4a33a3329a5959330b8->leave($__internal_7abccf7449a135df590379da44c508c50705d5f6e2afa4a33a3329a5959330b8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
