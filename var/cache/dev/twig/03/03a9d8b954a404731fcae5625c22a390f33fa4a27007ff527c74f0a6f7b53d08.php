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
        $__internal_81cd4bb2e042928dd54f5f8b351e46334ddb0570230f9916a5743d93deb56741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cd4bb2e042928dd54f5f8b351e46334ddb0570230f9916a5743d93deb56741->enter($__internal_81cd4bb2e042928dd54f5f8b351e46334ddb0570230f9916a5743d93deb56741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_270ab0364a956b107dac767a1bdf9db0156e3cbcf7fed44bb785255d2ade55bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270ab0364a956b107dac767a1bdf9db0156e3cbcf7fed44bb785255d2ade55bb->enter($__internal_270ab0364a956b107dac767a1bdf9db0156e3cbcf7fed44bb785255d2ade55bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81cd4bb2e042928dd54f5f8b351e46334ddb0570230f9916a5743d93deb56741->leave($__internal_81cd4bb2e042928dd54f5f8b351e46334ddb0570230f9916a5743d93deb56741_prof);

        
        $__internal_270ab0364a956b107dac767a1bdf9db0156e3cbcf7fed44bb785255d2ade55bb->leave($__internal_270ab0364a956b107dac767a1bdf9db0156e3cbcf7fed44bb785255d2ade55bb_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bec9ebdd748cfcf4a7da5cf3be8325a5bd1c54d69bb5842ee65da2f88002e1f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec9ebdd748cfcf4a7da5cf3be8325a5bd1c54d69bb5842ee65da2f88002e1f2->enter($__internal_bec9ebdd748cfcf4a7da5cf3be8325a5bd1c54d69bb5842ee65da2f88002e1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e046ca7ce042527ad3c8a42b0836cd4ac5743783e2a07aec8476773151245449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e046ca7ce042527ad3c8a42b0836cd4ac5743783e2a07aec8476773151245449->enter($__internal_e046ca7ce042527ad3c8a42b0836cd4ac5743783e2a07aec8476773151245449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e046ca7ce042527ad3c8a42b0836cd4ac5743783e2a07aec8476773151245449->leave($__internal_e046ca7ce042527ad3c8a42b0836cd4ac5743783e2a07aec8476773151245449_prof);

        
        $__internal_bec9ebdd748cfcf4a7da5cf3be8325a5bd1c54d69bb5842ee65da2f88002e1f2->leave($__internal_bec9ebdd748cfcf4a7da5cf3be8325a5bd1c54d69bb5842ee65da2f88002e1f2_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f3a6378ce84829a449f6a0888f0f5020a29701171fff8e090bcffc2c46ddd1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3a6378ce84829a449f6a0888f0f5020a29701171fff8e090bcffc2c46ddd1d->enter($__internal_7f3a6378ce84829a449f6a0888f0f5020a29701171fff8e090bcffc2c46ddd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d069f17857ac7b5d4d89c4768ec2609215d2b9bca03120cc450bde6d3c10b734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d069f17857ac7b5d4d89c4768ec2609215d2b9bca03120cc450bde6d3c10b734->enter($__internal_d069f17857ac7b5d4d89c4768ec2609215d2b9bca03120cc450bde6d3c10b734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d069f17857ac7b5d4d89c4768ec2609215d2b9bca03120cc450bde6d3c10b734->leave($__internal_d069f17857ac7b5d4d89c4768ec2609215d2b9bca03120cc450bde6d3c10b734_prof);

        
        $__internal_7f3a6378ce84829a449f6a0888f0f5020a29701171fff8e090bcffc2c46ddd1d->leave($__internal_7f3a6378ce84829a449f6a0888f0f5020a29701171fff8e090bcffc2c46ddd1d_prof);

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
