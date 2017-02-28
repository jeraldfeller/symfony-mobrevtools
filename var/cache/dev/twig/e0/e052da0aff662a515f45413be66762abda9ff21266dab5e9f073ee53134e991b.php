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
        $__internal_ea3ab92ffc2f53e25e351b70175575747f4d42b8cc8091aedb665aaa18379543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3ab92ffc2f53e25e351b70175575747f4d42b8cc8091aedb665aaa18379543->enter($__internal_ea3ab92ffc2f53e25e351b70175575747f4d42b8cc8091aedb665aaa18379543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5578c610bb0012ec00b16c84e8b5e71e19d29239b23f3343e9f402720ee041d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5578c610bb0012ec00b16c84e8b5e71e19d29239b23f3343e9f402720ee041d8->enter($__internal_5578c610bb0012ec00b16c84e8b5e71e19d29239b23f3343e9f402720ee041d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea3ab92ffc2f53e25e351b70175575747f4d42b8cc8091aedb665aaa18379543->leave($__internal_ea3ab92ffc2f53e25e351b70175575747f4d42b8cc8091aedb665aaa18379543_prof);

        
        $__internal_5578c610bb0012ec00b16c84e8b5e71e19d29239b23f3343e9f402720ee041d8->leave($__internal_5578c610bb0012ec00b16c84e8b5e71e19d29239b23f3343e9f402720ee041d8_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_508e6ac178ed51b44581c68c8e9e04c54c8e50aef2242a08c801b0df89b2c48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_508e6ac178ed51b44581c68c8e9e04c54c8e50aef2242a08c801b0df89b2c48c->enter($__internal_508e6ac178ed51b44581c68c8e9e04c54c8e50aef2242a08c801b0df89b2c48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_77621a4f8029386253fb696377204bf342c3ceccf32c1984caaae449bbe67f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77621a4f8029386253fb696377204bf342c3ceccf32c1984caaae449bbe67f33->enter($__internal_77621a4f8029386253fb696377204bf342c3ceccf32c1984caaae449bbe67f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_77621a4f8029386253fb696377204bf342c3ceccf32c1984caaae449bbe67f33->leave($__internal_77621a4f8029386253fb696377204bf342c3ceccf32c1984caaae449bbe67f33_prof);

        
        $__internal_508e6ac178ed51b44581c68c8e9e04c54c8e50aef2242a08c801b0df89b2c48c->leave($__internal_508e6ac178ed51b44581c68c8e9e04c54c8e50aef2242a08c801b0df89b2c48c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ebca0ceffafc1096f627c359b561a72252f07651139168b97b4529f7c441e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ebca0ceffafc1096f627c359b561a72252f07651139168b97b4529f7c441e0d->enter($__internal_4ebca0ceffafc1096f627c359b561a72252f07651139168b97b4529f7c441e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_005424d6832de3e6e62256f796d691940161c8cee656d7928e5ea2f4aa4941c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005424d6832de3e6e62256f796d691940161c8cee656d7928e5ea2f4aa4941c7->enter($__internal_005424d6832de3e6e62256f796d691940161c8cee656d7928e5ea2f4aa4941c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_005424d6832de3e6e62256f796d691940161c8cee656d7928e5ea2f4aa4941c7->leave($__internal_005424d6832de3e6e62256f796d691940161c8cee656d7928e5ea2f4aa4941c7_prof);

        
        $__internal_4ebca0ceffafc1096f627c359b561a72252f07651139168b97b4529f7c441e0d->leave($__internal_4ebca0ceffafc1096f627c359b561a72252f07651139168b97b4529f7c441e0d_prof);

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
