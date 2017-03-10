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
        $__internal_3a718d782751d33201c1ac11b8b1e883b1fbc53f25824077c2a979b10d5852ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a718d782751d33201c1ac11b8b1e883b1fbc53f25824077c2a979b10d5852ab->enter($__internal_3a718d782751d33201c1ac11b8b1e883b1fbc53f25824077c2a979b10d5852ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_40f31f2632afc0d613b124cdb10a5a7b17a218f05de7ba02ff952aeef8ef4a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f31f2632afc0d613b124cdb10a5a7b17a218f05de7ba02ff952aeef8ef4a12->enter($__internal_40f31f2632afc0d613b124cdb10a5a7b17a218f05de7ba02ff952aeef8ef4a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a718d782751d33201c1ac11b8b1e883b1fbc53f25824077c2a979b10d5852ab->leave($__internal_3a718d782751d33201c1ac11b8b1e883b1fbc53f25824077c2a979b10d5852ab_prof);

        
        $__internal_40f31f2632afc0d613b124cdb10a5a7b17a218f05de7ba02ff952aeef8ef4a12->leave($__internal_40f31f2632afc0d613b124cdb10a5a7b17a218f05de7ba02ff952aeef8ef4a12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb557588ad0a8745ff6a182cf65c7503bac8706dc70ae24e5da6f7b0cd248c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb557588ad0a8745ff6a182cf65c7503bac8706dc70ae24e5da6f7b0cd248c89->enter($__internal_bb557588ad0a8745ff6a182cf65c7503bac8706dc70ae24e5da6f7b0cd248c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_96789de85be977b96a8ebe3066f667d44c34740236fe3282e57591536f6f4745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96789de85be977b96a8ebe3066f667d44c34740236fe3282e57591536f6f4745->enter($__internal_96789de85be977b96a8ebe3066f667d44c34740236fe3282e57591536f6f4745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_96789de85be977b96a8ebe3066f667d44c34740236fe3282e57591536f6f4745->leave($__internal_96789de85be977b96a8ebe3066f667d44c34740236fe3282e57591536f6f4745_prof);

        
        $__internal_bb557588ad0a8745ff6a182cf65c7503bac8706dc70ae24e5da6f7b0cd248c89->leave($__internal_bb557588ad0a8745ff6a182cf65c7503bac8706dc70ae24e5da6f7b0cd248c89_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d201f718e331c39337dabd3dca278054e758c206a3da9f1581ce805cfba0d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d201f718e331c39337dabd3dca278054e758c206a3da9f1581ce805cfba0d36->enter($__internal_4d201f718e331c39337dabd3dca278054e758c206a3da9f1581ce805cfba0d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df15ad3aa8af3b691c013cd89726cf4d4af5d6bbdd607f29a638b3a5ca1144a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df15ad3aa8af3b691c013cd89726cf4d4af5d6bbdd607f29a638b3a5ca1144a0->enter($__internal_df15ad3aa8af3b691c013cd89726cf4d4af5d6bbdd607f29a638b3a5ca1144a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_df15ad3aa8af3b691c013cd89726cf4d4af5d6bbdd607f29a638b3a5ca1144a0->leave($__internal_df15ad3aa8af3b691c013cd89726cf4d4af5d6bbdd607f29a638b3a5ca1144a0_prof);

        
        $__internal_4d201f718e331c39337dabd3dca278054e758c206a3da9f1581ce805cfba0d36->leave($__internal_4d201f718e331c39337dabd3dca278054e758c206a3da9f1581ce805cfba0d36_prof);

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
