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
        $__internal_589bbcc2523f2cd19029b67e1e4d5ac30f8659f20e7bfa99e663056d81b9cf8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_589bbcc2523f2cd19029b67e1e4d5ac30f8659f20e7bfa99e663056d81b9cf8e->enter($__internal_589bbcc2523f2cd19029b67e1e4d5ac30f8659f20e7bfa99e663056d81b9cf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_313f0fa137ee6b03d5677cfff400165c556a5a192cc992c8fb389e49060c1b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313f0fa137ee6b03d5677cfff400165c556a5a192cc992c8fb389e49060c1b7a->enter($__internal_313f0fa137ee6b03d5677cfff400165c556a5a192cc992c8fb389e49060c1b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_589bbcc2523f2cd19029b67e1e4d5ac30f8659f20e7bfa99e663056d81b9cf8e->leave($__internal_589bbcc2523f2cd19029b67e1e4d5ac30f8659f20e7bfa99e663056d81b9cf8e_prof);

        
        $__internal_313f0fa137ee6b03d5677cfff400165c556a5a192cc992c8fb389e49060c1b7a->leave($__internal_313f0fa137ee6b03d5677cfff400165c556a5a192cc992c8fb389e49060c1b7a_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2b18ec8c82a2a9cb47dbbbd84478c6edb846eb32653d66a8607f9a01fa56aa2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b18ec8c82a2a9cb47dbbbd84478c6edb846eb32653d66a8607f9a01fa56aa2f->enter($__internal_2b18ec8c82a2a9cb47dbbbd84478c6edb846eb32653d66a8607f9a01fa56aa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cad1247f9b115887592c67a8606bcb11862be9916eab2b1dc41ac6c3da523b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad1247f9b115887592c67a8606bcb11862be9916eab2b1dc41ac6c3da523b2f->enter($__internal_cad1247f9b115887592c67a8606bcb11862be9916eab2b1dc41ac6c3da523b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_cad1247f9b115887592c67a8606bcb11862be9916eab2b1dc41ac6c3da523b2f->leave($__internal_cad1247f9b115887592c67a8606bcb11862be9916eab2b1dc41ac6c3da523b2f_prof);

        
        $__internal_2b18ec8c82a2a9cb47dbbbd84478c6edb846eb32653d66a8607f9a01fa56aa2f->leave($__internal_2b18ec8c82a2a9cb47dbbbd84478c6edb846eb32653d66a8607f9a01fa56aa2f_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f84f563a3241e743114293a0b2da3a0f563e1db0ad95c2e924e5bae046782812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84f563a3241e743114293a0b2da3a0f563e1db0ad95c2e924e5bae046782812->enter($__internal_f84f563a3241e743114293a0b2da3a0f563e1db0ad95c2e924e5bae046782812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_baca0419e2906ba233e8d4339aa6e6f8bf6fd90432b369e750767ab0aba0c52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baca0419e2906ba233e8d4339aa6e6f8bf6fd90432b369e750767ab0aba0c52f->enter($__internal_baca0419e2906ba233e8d4339aa6e6f8bf6fd90432b369e750767ab0aba0c52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_baca0419e2906ba233e8d4339aa6e6f8bf6fd90432b369e750767ab0aba0c52f->leave($__internal_baca0419e2906ba233e8d4339aa6e6f8bf6fd90432b369e750767ab0aba0c52f_prof);

        
        $__internal_f84f563a3241e743114293a0b2da3a0f563e1db0ad95c2e924e5bae046782812->leave($__internal_f84f563a3241e743114293a0b2da3a0f563e1db0ad95c2e924e5bae046782812_prof);

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
