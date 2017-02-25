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
        $__internal_5fe6eeb77fd14014662d183278aab779b83f3ece8b3f92fedece498851946908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe6eeb77fd14014662d183278aab779b83f3ece8b3f92fedece498851946908->enter($__internal_5fe6eeb77fd14014662d183278aab779b83f3ece8b3f92fedece498851946908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_dd5e9279eaab8758490bd1b703ed940405be6bf1041ef32f706003c836a48d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5e9279eaab8758490bd1b703ed940405be6bf1041ef32f706003c836a48d1b->enter($__internal_dd5e9279eaab8758490bd1b703ed940405be6bf1041ef32f706003c836a48d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fe6eeb77fd14014662d183278aab779b83f3ece8b3f92fedece498851946908->leave($__internal_5fe6eeb77fd14014662d183278aab779b83f3ece8b3f92fedece498851946908_prof);

        
        $__internal_dd5e9279eaab8758490bd1b703ed940405be6bf1041ef32f706003c836a48d1b->leave($__internal_dd5e9279eaab8758490bd1b703ed940405be6bf1041ef32f706003c836a48d1b_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8f27f9af5c7db484c399d883a9ff34c1041d83bf02d12e875312ebe4f2799b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f27f9af5c7db484c399d883a9ff34c1041d83bf02d12e875312ebe4f2799b6b->enter($__internal_8f27f9af5c7db484c399d883a9ff34c1041d83bf02d12e875312ebe4f2799b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_99c9de2b6ed5713379f7c03df555a25e957c25aa961809d74e2225c4d8abe424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c9de2b6ed5713379f7c03df555a25e957c25aa961809d74e2225c4d8abe424->enter($__internal_99c9de2b6ed5713379f7c03df555a25e957c25aa961809d74e2225c4d8abe424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_99c9de2b6ed5713379f7c03df555a25e957c25aa961809d74e2225c4d8abe424->leave($__internal_99c9de2b6ed5713379f7c03df555a25e957c25aa961809d74e2225c4d8abe424_prof);

        
        $__internal_8f27f9af5c7db484c399d883a9ff34c1041d83bf02d12e875312ebe4f2799b6b->leave($__internal_8f27f9af5c7db484c399d883a9ff34c1041d83bf02d12e875312ebe4f2799b6b_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f27035b945ab03f72053470c6591d6522dc9bd4930fd256b3e07df7a6b70323f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27035b945ab03f72053470c6591d6522dc9bd4930fd256b3e07df7a6b70323f->enter($__internal_f27035b945ab03f72053470c6591d6522dc9bd4930fd256b3e07df7a6b70323f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_05c480a8191eb7a6342f58f333f65c434dedf51267ed6541fa0ffedc592fd599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c480a8191eb7a6342f58f333f65c434dedf51267ed6541fa0ffedc592fd599->enter($__internal_05c480a8191eb7a6342f58f333f65c434dedf51267ed6541fa0ffedc592fd599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_05c480a8191eb7a6342f58f333f65c434dedf51267ed6541fa0ffedc592fd599->leave($__internal_05c480a8191eb7a6342f58f333f65c434dedf51267ed6541fa0ffedc592fd599_prof);

        
        $__internal_f27035b945ab03f72053470c6591d6522dc9bd4930fd256b3e07df7a6b70323f->leave($__internal_f27035b945ab03f72053470c6591d6522dc9bd4930fd256b3e07df7a6b70323f_prof);

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
