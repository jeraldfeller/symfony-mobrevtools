<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_4b6cf9807883861a759685d1ef595233792f60efef1a35b975ae8bdaa8dbd2ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3edc3160dbda05e569d1bea987ac92fc6d552f8db50f7599360ae2b310ded27a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3edc3160dbda05e569d1bea987ac92fc6d552f8db50f7599360ae2b310ded27a->enter($__internal_3edc3160dbda05e569d1bea987ac92fc6d552f8db50f7599360ae2b310ded27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a026287619444ffc64412f637fb6deae389f42f4d75def86acd13883635cd032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a026287619444ffc64412f637fb6deae389f42f4d75def86acd13883635cd032->enter($__internal_a026287619444ffc64412f637fb6deae389f42f4d75def86acd13883635cd032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3edc3160dbda05e569d1bea987ac92fc6d552f8db50f7599360ae2b310ded27a->leave($__internal_3edc3160dbda05e569d1bea987ac92fc6d552f8db50f7599360ae2b310ded27a_prof);

        
        $__internal_a026287619444ffc64412f637fb6deae389f42f4d75def86acd13883635cd032->leave($__internal_a026287619444ffc64412f637fb6deae389f42f4d75def86acd13883635cd032_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d047a37ff371ebdac6d7f619d697fa7b1be778ea3fc59bf491eabae23c76ef2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d047a37ff371ebdac6d7f619d697fa7b1be778ea3fc59bf491eabae23c76ef2a->enter($__internal_d047a37ff371ebdac6d7f619d697fa7b1be778ea3fc59bf491eabae23c76ef2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_119130567736b5dca0a885494a85f9c1d14ec24c69a89549b7d2c3ef46becd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119130567736b5dca0a885494a85f9c1d14ec24c69a89549b7d2c3ef46becd4a->enter($__internal_119130567736b5dca0a885494a85f9c1d14ec24c69a89549b7d2c3ef46becd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_119130567736b5dca0a885494a85f9c1d14ec24c69a89549b7d2c3ef46becd4a->leave($__internal_119130567736b5dca0a885494a85f9c1d14ec24c69a89549b7d2c3ef46becd4a_prof);

        
        $__internal_d047a37ff371ebdac6d7f619d697fa7b1be778ea3fc59bf491eabae23c76ef2a->leave($__internal_d047a37ff371ebdac6d7f619d697fa7b1be778ea3fc59bf491eabae23c76ef2a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b8638909a4d7d3f9a402aa87cbda32817637808585089f835457fa9bc5d3e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8638909a4d7d3f9a402aa87cbda32817637808585089f835457fa9bc5d3e5c->enter($__internal_4b8638909a4d7d3f9a402aa87cbda32817637808585089f835457fa9bc5d3e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6486bcdcaf82fa5858331936b47bf9880251b33f6afd13a1f9bd68090bb59c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6486bcdcaf82fa5858331936b47bf9880251b33f6afd13a1f9bd68090bb59c51->enter($__internal_6486bcdcaf82fa5858331936b47bf9880251b33f6afd13a1f9bd68090bb59c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_6486bcdcaf82fa5858331936b47bf9880251b33f6afd13a1f9bd68090bb59c51->leave($__internal_6486bcdcaf82fa5858331936b47bf9880251b33f6afd13a1f9bd68090bb59c51_prof);

        
        $__internal_4b8638909a4d7d3f9a402aa87cbda32817637808585089f835457fa9bc5d3e5c->leave($__internal_4b8638909a4d7d3f9a402aa87cbda32817637808585089f835457fa9bc5d3e5c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
