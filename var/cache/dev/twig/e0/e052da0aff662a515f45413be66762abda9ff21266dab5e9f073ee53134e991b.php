<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_e7fb89fc9c93d884753680e759b3202716450150b047e8dd00ed6be31c921b8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_cb92d1c67b0fc5f143b07fa14c89925464e6a96025e2bccd775c6ba58945ff66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb92d1c67b0fc5f143b07fa14c89925464e6a96025e2bccd775c6ba58945ff66->enter($__internal_cb92d1c67b0fc5f143b07fa14c89925464e6a96025e2bccd775c6ba58945ff66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_d640ee5455bb3d4ff6834c575acc64a26ec117d43c062f69260870c9f7273006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d640ee5455bb3d4ff6834c575acc64a26ec117d43c062f69260870c9f7273006->enter($__internal_d640ee5455bb3d4ff6834c575acc64a26ec117d43c062f69260870c9f7273006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb92d1c67b0fc5f143b07fa14c89925464e6a96025e2bccd775c6ba58945ff66->leave($__internal_cb92d1c67b0fc5f143b07fa14c89925464e6a96025e2bccd775c6ba58945ff66_prof);

        
        $__internal_d640ee5455bb3d4ff6834c575acc64a26ec117d43c062f69260870c9f7273006->leave($__internal_d640ee5455bb3d4ff6834c575acc64a26ec117d43c062f69260870c9f7273006_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a83dc01c856333bff3be50888b6f6578fbca3dbb61aee0b534aec357beaef822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83dc01c856333bff3be50888b6f6578fbca3dbb61aee0b534aec357beaef822->enter($__internal_a83dc01c856333bff3be50888b6f6578fbca3dbb61aee0b534aec357beaef822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5da302905bc053194447ea42390999ba7e75b717482f8122a8dc8f3c7fd926f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da302905bc053194447ea42390999ba7e75b717482f8122a8dc8f3c7fd926f0->enter($__internal_5da302905bc053194447ea42390999ba7e75b717482f8122a8dc8f3c7fd926f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_5da302905bc053194447ea42390999ba7e75b717482f8122a8dc8f3c7fd926f0->leave($__internal_5da302905bc053194447ea42390999ba7e75b717482f8122a8dc8f3c7fd926f0_prof);

        
        $__internal_a83dc01c856333bff3be50888b6f6578fbca3dbb61aee0b534aec357beaef822->leave($__internal_a83dc01c856333bff3be50888b6f6578fbca3dbb61aee0b534aec357beaef822_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f34dc04176660dd0a94d7b00a7d4063a80a67af7dd909333e88040c3f8efebbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34dc04176660dd0a94d7b00a7d4063a80a67af7dd909333e88040c3f8efebbe->enter($__internal_f34dc04176660dd0a94d7b00a7d4063a80a67af7dd909333e88040c3f8efebbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6c01b07e28902f6e6817f89cb7326a07dc5e19c7ec8eb5c0a023dfecc1bcfa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c01b07e28902f6e6817f89cb7326a07dc5e19c7ec8eb5c0a023dfecc1bcfa0->enter($__internal_f6c01b07e28902f6e6817f89cb7326a07dc5e19c7ec8eb5c0a023dfecc1bcfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f6c01b07e28902f6e6817f89cb7326a07dc5e19c7ec8eb5c0a023dfecc1bcfa0->leave($__internal_f6c01b07e28902f6e6817f89cb7326a07dc5e19c7ec8eb5c0a023dfecc1bcfa0_prof);

        
        $__internal_f34dc04176660dd0a94d7b00a7d4063a80a67af7dd909333e88040c3f8efebbe->leave($__internal_f34dc04176660dd0a94d7b00a7d4063a80a67af7dd909333e88040c3f8efebbe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
