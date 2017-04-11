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
        $__internal_250798d1ee0b3c3e0f3613bc72a4fba3f19fe098d806660f19ef936b68cfeaf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_250798d1ee0b3c3e0f3613bc72a4fba3f19fe098d806660f19ef936b68cfeaf2->enter($__internal_250798d1ee0b3c3e0f3613bc72a4fba3f19fe098d806660f19ef936b68cfeaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_dcd433f569426d8c33f9525b914b30b924ee64fce16e200cf68b8cd64413ad05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd433f569426d8c33f9525b914b30b924ee64fce16e200cf68b8cd64413ad05->enter($__internal_dcd433f569426d8c33f9525b914b30b924ee64fce16e200cf68b8cd64413ad05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_250798d1ee0b3c3e0f3613bc72a4fba3f19fe098d806660f19ef936b68cfeaf2->leave($__internal_250798d1ee0b3c3e0f3613bc72a4fba3f19fe098d806660f19ef936b68cfeaf2_prof);

        
        $__internal_dcd433f569426d8c33f9525b914b30b924ee64fce16e200cf68b8cd64413ad05->leave($__internal_dcd433f569426d8c33f9525b914b30b924ee64fce16e200cf68b8cd64413ad05_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4c0467f71ae28a9ba77d4cadd347654d29055a08c5c12f51fc628731ac9316c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c0467f71ae28a9ba77d4cadd347654d29055a08c5c12f51fc628731ac9316c2->enter($__internal_4c0467f71ae28a9ba77d4cadd347654d29055a08c5c12f51fc628731ac9316c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d5880da980422b3417c332938e94e4e152471f1b78a36f41a0a4e0344f92aa27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5880da980422b3417c332938e94e4e152471f1b78a36f41a0a4e0344f92aa27->enter($__internal_d5880da980422b3417c332938e94e4e152471f1b78a36f41a0a4e0344f92aa27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d5880da980422b3417c332938e94e4e152471f1b78a36f41a0a4e0344f92aa27->leave($__internal_d5880da980422b3417c332938e94e4e152471f1b78a36f41a0a4e0344f92aa27_prof);

        
        $__internal_4c0467f71ae28a9ba77d4cadd347654d29055a08c5c12f51fc628731ac9316c2->leave($__internal_4c0467f71ae28a9ba77d4cadd347654d29055a08c5c12f51fc628731ac9316c2_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_81c333577ffeaab806c823eb296f6830f4231ab77b4f542286c01ebf39126fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81c333577ffeaab806c823eb296f6830f4231ab77b4f542286c01ebf39126fcb->enter($__internal_81c333577ffeaab806c823eb296f6830f4231ab77b4f542286c01ebf39126fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45a90c1ebbf65742d4afab566afd7719e360be385b0a7327c01fd486d1f22d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a90c1ebbf65742d4afab566afd7719e360be385b0a7327c01fd486d1f22d6d->enter($__internal_45a90c1ebbf65742d4afab566afd7719e360be385b0a7327c01fd486d1f22d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_45a90c1ebbf65742d4afab566afd7719e360be385b0a7327c01fd486d1f22d6d->leave($__internal_45a90c1ebbf65742d4afab566afd7719e360be385b0a7327c01fd486d1f22d6d_prof);

        
        $__internal_81c333577ffeaab806c823eb296f6830f4231ab77b4f542286c01ebf39126fcb->leave($__internal_81c333577ffeaab806c823eb296f6830f4231ab77b4f542286c01ebf39126fcb_prof);

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
