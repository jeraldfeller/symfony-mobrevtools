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
        $__internal_6bd4ce7f86f22575facdc347707ffaa409450fcf0e4e2c4f109819498d6636db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd4ce7f86f22575facdc347707ffaa409450fcf0e4e2c4f109819498d6636db->enter($__internal_6bd4ce7f86f22575facdc347707ffaa409450fcf0e4e2c4f109819498d6636db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f75545519fb794baf881610f71a0362157fea9c0323b05e5aeb389d294a25bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75545519fb794baf881610f71a0362157fea9c0323b05e5aeb389d294a25bfb->enter($__internal_f75545519fb794baf881610f71a0362157fea9c0323b05e5aeb389d294a25bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bd4ce7f86f22575facdc347707ffaa409450fcf0e4e2c4f109819498d6636db->leave($__internal_6bd4ce7f86f22575facdc347707ffaa409450fcf0e4e2c4f109819498d6636db_prof);

        
        $__internal_f75545519fb794baf881610f71a0362157fea9c0323b05e5aeb389d294a25bfb->leave($__internal_f75545519fb794baf881610f71a0362157fea9c0323b05e5aeb389d294a25bfb_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_636af0ea5fc0e8c9aa9b2ea35957f519d77b934b66855386152c72b021f72642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636af0ea5fc0e8c9aa9b2ea35957f519d77b934b66855386152c72b021f72642->enter($__internal_636af0ea5fc0e8c9aa9b2ea35957f519d77b934b66855386152c72b021f72642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f9378f361292e4e0830bcf6a88bd67f2c725c3621e9969121f46ab75aea83d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9378f361292e4e0830bcf6a88bd67f2c725c3621e9969121f46ab75aea83d01->enter($__internal_f9378f361292e4e0830bcf6a88bd67f2c725c3621e9969121f46ab75aea83d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_f9378f361292e4e0830bcf6a88bd67f2c725c3621e9969121f46ab75aea83d01->leave($__internal_f9378f361292e4e0830bcf6a88bd67f2c725c3621e9969121f46ab75aea83d01_prof);

        
        $__internal_636af0ea5fc0e8c9aa9b2ea35957f519d77b934b66855386152c72b021f72642->leave($__internal_636af0ea5fc0e8c9aa9b2ea35957f519d77b934b66855386152c72b021f72642_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d0eb038a4bfee83aa3110f8f8d0c361aaffc45268e16f5ec7206a416a133379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d0eb038a4bfee83aa3110f8f8d0c361aaffc45268e16f5ec7206a416a133379->enter($__internal_7d0eb038a4bfee83aa3110f8f8d0c361aaffc45268e16f5ec7206a416a133379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e151060dc9e5b6edc8f2229311eeb1443e80580d46d4ecedd296e693c79987f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e151060dc9e5b6edc8f2229311eeb1443e80580d46d4ecedd296e693c79987f->enter($__internal_6e151060dc9e5b6edc8f2229311eeb1443e80580d46d4ecedd296e693c79987f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6e151060dc9e5b6edc8f2229311eeb1443e80580d46d4ecedd296e693c79987f->leave($__internal_6e151060dc9e5b6edc8f2229311eeb1443e80580d46d4ecedd296e693c79987f_prof);

        
        $__internal_7d0eb038a4bfee83aa3110f8f8d0c361aaffc45268e16f5ec7206a416a133379->leave($__internal_7d0eb038a4bfee83aa3110f8f8d0c361aaffc45268e16f5ec7206a416a133379_prof);

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
