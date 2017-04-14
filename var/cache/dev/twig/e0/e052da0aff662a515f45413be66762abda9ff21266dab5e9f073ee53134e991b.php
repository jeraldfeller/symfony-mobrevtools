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
        $__internal_fa57c5a88fd6cb0b29e60a6b2f37f74d92da033fe1b59c59b8a6fc582abcb881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa57c5a88fd6cb0b29e60a6b2f37f74d92da033fe1b59c59b8a6fc582abcb881->enter($__internal_fa57c5a88fd6cb0b29e60a6b2f37f74d92da033fe1b59c59b8a6fc582abcb881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_dc442dbbb54a4a5412050d76d3de4e89733c574ad214f75dcda95845a33c779b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc442dbbb54a4a5412050d76d3de4e89733c574ad214f75dcda95845a33c779b->enter($__internal_dc442dbbb54a4a5412050d76d3de4e89733c574ad214f75dcda95845a33c779b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa57c5a88fd6cb0b29e60a6b2f37f74d92da033fe1b59c59b8a6fc582abcb881->leave($__internal_fa57c5a88fd6cb0b29e60a6b2f37f74d92da033fe1b59c59b8a6fc582abcb881_prof);

        
        $__internal_dc442dbbb54a4a5412050d76d3de4e89733c574ad214f75dcda95845a33c779b->leave($__internal_dc442dbbb54a4a5412050d76d3de4e89733c574ad214f75dcda95845a33c779b_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_13b5f6457510ff72d0210615a1ec21d5ab19e6c7e08befb6a4f9df081aca61ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b5f6457510ff72d0210615a1ec21d5ab19e6c7e08befb6a4f9df081aca61ef->enter($__internal_13b5f6457510ff72d0210615a1ec21d5ab19e6c7e08befb6a4f9df081aca61ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_28ce18c25d703bfd27badc93943025d07e250b1951f33408a501b255470007c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ce18c25d703bfd27badc93943025d07e250b1951f33408a501b255470007c8->enter($__internal_28ce18c25d703bfd27badc93943025d07e250b1951f33408a501b255470007c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_28ce18c25d703bfd27badc93943025d07e250b1951f33408a501b255470007c8->leave($__internal_28ce18c25d703bfd27badc93943025d07e250b1951f33408a501b255470007c8_prof);

        
        $__internal_13b5f6457510ff72d0210615a1ec21d5ab19e6c7e08befb6a4f9df081aca61ef->leave($__internal_13b5f6457510ff72d0210615a1ec21d5ab19e6c7e08befb6a4f9df081aca61ef_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b162e88d966b5d73f1f4088588847f780c0f66b946756f861f47200c0ab16f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b162e88d966b5d73f1f4088588847f780c0f66b946756f861f47200c0ab16f41->enter($__internal_b162e88d966b5d73f1f4088588847f780c0f66b946756f861f47200c0ab16f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a1460324f9d5dee9f8624a5708ed9c133f79437318c80f4e9cdb0683895fc620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1460324f9d5dee9f8624a5708ed9c133f79437318c80f4e9cdb0683895fc620->enter($__internal_a1460324f9d5dee9f8624a5708ed9c133f79437318c80f4e9cdb0683895fc620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a1460324f9d5dee9f8624a5708ed9c133f79437318c80f4e9cdb0683895fc620->leave($__internal_a1460324f9d5dee9f8624a5708ed9c133f79437318c80f4e9cdb0683895fc620_prof);

        
        $__internal_b162e88d966b5d73f1f4088588847f780c0f66b946756f861f47200c0ab16f41->leave($__internal_b162e88d966b5d73f1f4088588847f780c0f66b946756f861f47200c0ab16f41_prof);

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
