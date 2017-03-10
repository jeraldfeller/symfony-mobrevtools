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
        $__internal_094fc9539f67a71781e2bd66c7f41fb012bc684b162d0ffa8577ab89931b5c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094fc9539f67a71781e2bd66c7f41fb012bc684b162d0ffa8577ab89931b5c96->enter($__internal_094fc9539f67a71781e2bd66c7f41fb012bc684b162d0ffa8577ab89931b5c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f2ce0d6613f7cdf7c33711d4d3446a09ae2e1587ff6e65d2fa1db902fed43091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ce0d6613f7cdf7c33711d4d3446a09ae2e1587ff6e65d2fa1db902fed43091->enter($__internal_f2ce0d6613f7cdf7c33711d4d3446a09ae2e1587ff6e65d2fa1db902fed43091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_094fc9539f67a71781e2bd66c7f41fb012bc684b162d0ffa8577ab89931b5c96->leave($__internal_094fc9539f67a71781e2bd66c7f41fb012bc684b162d0ffa8577ab89931b5c96_prof);

        
        $__internal_f2ce0d6613f7cdf7c33711d4d3446a09ae2e1587ff6e65d2fa1db902fed43091->leave($__internal_f2ce0d6613f7cdf7c33711d4d3446a09ae2e1587ff6e65d2fa1db902fed43091_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a98e07e9fadf0d80ebf97877da9ccfdcd7f01bc74588a88aee7ac1500b6127ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98e07e9fadf0d80ebf97877da9ccfdcd7f01bc74588a88aee7ac1500b6127ed->enter($__internal_a98e07e9fadf0d80ebf97877da9ccfdcd7f01bc74588a88aee7ac1500b6127ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_690376d3226d5a85a033ee9b00e38f09948872341337cb58fe0a2ab7ad6f04cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690376d3226d5a85a033ee9b00e38f09948872341337cb58fe0a2ab7ad6f04cb->enter($__internal_690376d3226d5a85a033ee9b00e38f09948872341337cb58fe0a2ab7ad6f04cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_690376d3226d5a85a033ee9b00e38f09948872341337cb58fe0a2ab7ad6f04cb->leave($__internal_690376d3226d5a85a033ee9b00e38f09948872341337cb58fe0a2ab7ad6f04cb_prof);

        
        $__internal_a98e07e9fadf0d80ebf97877da9ccfdcd7f01bc74588a88aee7ac1500b6127ed->leave($__internal_a98e07e9fadf0d80ebf97877da9ccfdcd7f01bc74588a88aee7ac1500b6127ed_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd5f1ba185918a287cce92377bbb31520097ae996b462645c9845c9595f75a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5f1ba185918a287cce92377bbb31520097ae996b462645c9845c9595f75a78->enter($__internal_cd5f1ba185918a287cce92377bbb31520097ae996b462645c9845c9595f75a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f4388d9e84ba534cf19238d98860b5f3c8ad9fbf83833ea4dfcf25c9886cb664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4388d9e84ba534cf19238d98860b5f3c8ad9fbf83833ea4dfcf25c9886cb664->enter($__internal_f4388d9e84ba534cf19238d98860b5f3c8ad9fbf83833ea4dfcf25c9886cb664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f4388d9e84ba534cf19238d98860b5f3c8ad9fbf83833ea4dfcf25c9886cb664->leave($__internal_f4388d9e84ba534cf19238d98860b5f3c8ad9fbf83833ea4dfcf25c9886cb664_prof);

        
        $__internal_cd5f1ba185918a287cce92377bbb31520097ae996b462645c9845c9595f75a78->leave($__internal_cd5f1ba185918a287cce92377bbb31520097ae996b462645c9845c9595f75a78_prof);

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
