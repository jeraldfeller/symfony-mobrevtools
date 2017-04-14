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
        $__internal_79419bad5fe7cac802565e302183a76f213e05431f07bb047842f67d85ad47a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79419bad5fe7cac802565e302183a76f213e05431f07bb047842f67d85ad47a0->enter($__internal_79419bad5fe7cac802565e302183a76f213e05431f07bb047842f67d85ad47a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ccf856affec8d5527aed60681d48717ba3c3de4b460c3d01f05426937a169b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf856affec8d5527aed60681d48717ba3c3de4b460c3d01f05426937a169b76->enter($__internal_ccf856affec8d5527aed60681d48717ba3c3de4b460c3d01f05426937a169b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79419bad5fe7cac802565e302183a76f213e05431f07bb047842f67d85ad47a0->leave($__internal_79419bad5fe7cac802565e302183a76f213e05431f07bb047842f67d85ad47a0_prof);

        
        $__internal_ccf856affec8d5527aed60681d48717ba3c3de4b460c3d01f05426937a169b76->leave($__internal_ccf856affec8d5527aed60681d48717ba3c3de4b460c3d01f05426937a169b76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_098cd970f5a3dbee3366f37161284e962f0f1e8012ee4eec53f06b93dc678c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098cd970f5a3dbee3366f37161284e962f0f1e8012ee4eec53f06b93dc678c38->enter($__internal_098cd970f5a3dbee3366f37161284e962f0f1e8012ee4eec53f06b93dc678c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_173a2f0c2fbaed4103017f7335817d308ea3d8508bf54afc29ec92506ed0d97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173a2f0c2fbaed4103017f7335817d308ea3d8508bf54afc29ec92506ed0d97c->enter($__internal_173a2f0c2fbaed4103017f7335817d308ea3d8508bf54afc29ec92506ed0d97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_173a2f0c2fbaed4103017f7335817d308ea3d8508bf54afc29ec92506ed0d97c->leave($__internal_173a2f0c2fbaed4103017f7335817d308ea3d8508bf54afc29ec92506ed0d97c_prof);

        
        $__internal_098cd970f5a3dbee3366f37161284e962f0f1e8012ee4eec53f06b93dc678c38->leave($__internal_098cd970f5a3dbee3366f37161284e962f0f1e8012ee4eec53f06b93dc678c38_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d5376316f2834399735e680b6bc49e5582f7119a7fe6050114e5052635e0340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5376316f2834399735e680b6bc49e5582f7119a7fe6050114e5052635e0340->enter($__internal_4d5376316f2834399735e680b6bc49e5582f7119a7fe6050114e5052635e0340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_818d7ce429bdab781e18a94b31becd6e65a8bf743d8d8ed418731685c0601d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818d7ce429bdab781e18a94b31becd6e65a8bf743d8d8ed418731685c0601d47->enter($__internal_818d7ce429bdab781e18a94b31becd6e65a8bf743d8d8ed418731685c0601d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_818d7ce429bdab781e18a94b31becd6e65a8bf743d8d8ed418731685c0601d47->leave($__internal_818d7ce429bdab781e18a94b31becd6e65a8bf743d8d8ed418731685c0601d47_prof);

        
        $__internal_4d5376316f2834399735e680b6bc49e5582f7119a7fe6050114e5052635e0340->leave($__internal_4d5376316f2834399735e680b6bc49e5582f7119a7fe6050114e5052635e0340_prof);

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
