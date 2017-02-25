<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_98dad417ff15f51596fd14acaf2e5bd624b0832f7483ba4c42d956d83269e32f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_9ddf604132077ec818eee9f7f45af790c1463f0e0e4c827b3fa0093c279c93b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ddf604132077ec818eee9f7f45af790c1463f0e0e4c827b3fa0093c279c93b8->enter($__internal_9ddf604132077ec818eee9f7f45af790c1463f0e0e4c827b3fa0093c279c93b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_fbfcc24567af9e2e9ccedfe549356e780ce8ff0fdfbc7faf021bae085ae39b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbfcc24567af9e2e9ccedfe549356e780ce8ff0fdfbc7faf021bae085ae39b66->enter($__internal_fbfcc24567af9e2e9ccedfe549356e780ce8ff0fdfbc7faf021bae085ae39b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ddf604132077ec818eee9f7f45af790c1463f0e0e4c827b3fa0093c279c93b8->leave($__internal_9ddf604132077ec818eee9f7f45af790c1463f0e0e4c827b3fa0093c279c93b8_prof);

        
        $__internal_fbfcc24567af9e2e9ccedfe549356e780ce8ff0fdfbc7faf021bae085ae39b66->leave($__internal_fbfcc24567af9e2e9ccedfe549356e780ce8ff0fdfbc7faf021bae085ae39b66_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5cec16d6d909b278ac0b1831d05cebe539f871a08423966559e737dea6e0942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5cec16d6d909b278ac0b1831d05cebe539f871a08423966559e737dea6e0942->enter($__internal_a5cec16d6d909b278ac0b1831d05cebe539f871a08423966559e737dea6e0942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e77c275c33c3bcd4d190ef84a61bfcb1c417e291cc04c4d3e9965116168f0d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77c275c33c3bcd4d190ef84a61bfcb1c417e291cc04c4d3e9965116168f0d71->enter($__internal_e77c275c33c3bcd4d190ef84a61bfcb1c417e291cc04c4d3e9965116168f0d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e77c275c33c3bcd4d190ef84a61bfcb1c417e291cc04c4d3e9965116168f0d71->leave($__internal_e77c275c33c3bcd4d190ef84a61bfcb1c417e291cc04c4d3e9965116168f0d71_prof);

        
        $__internal_a5cec16d6d909b278ac0b1831d05cebe539f871a08423966559e737dea6e0942->leave($__internal_a5cec16d6d909b278ac0b1831d05cebe539f871a08423966559e737dea6e0942_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b4150eb7d5c9672514d2952e513da20698e2153ffe2d40ce3fa2fc5fc7fdfd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b4150eb7d5c9672514d2952e513da20698e2153ffe2d40ce3fa2fc5fc7fdfd9->enter($__internal_8b4150eb7d5c9672514d2952e513da20698e2153ffe2d40ce3fa2fc5fc7fdfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87bc915eaa529a58b7ec5bef9c6eaf49712b9a6bdbe8eff8073bacd654fa7e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87bc915eaa529a58b7ec5bef9c6eaf49712b9a6bdbe8eff8073bacd654fa7e58->enter($__internal_87bc915eaa529a58b7ec5bef9c6eaf49712b9a6bdbe8eff8073bacd654fa7e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_87bc915eaa529a58b7ec5bef9c6eaf49712b9a6bdbe8eff8073bacd654fa7e58->leave($__internal_87bc915eaa529a58b7ec5bef9c6eaf49712b9a6bdbe8eff8073bacd654fa7e58_prof);

        
        $__internal_8b4150eb7d5c9672514d2952e513da20698e2153ffe2d40ce3fa2fc5fc7fdfd9->leave($__internal_8b4150eb7d5c9672514d2952e513da20698e2153ffe2d40ce3fa2fc5fc7fdfd9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
