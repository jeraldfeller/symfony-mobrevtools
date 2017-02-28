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
        $__internal_5575a63264595304d4baa2722c63f6f92fe48b867be1b4666b1a472fc17176e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5575a63264595304d4baa2722c63f6f92fe48b867be1b4666b1a472fc17176e1->enter($__internal_5575a63264595304d4baa2722c63f6f92fe48b867be1b4666b1a472fc17176e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_907f0ea33057b712c2cc96604a06eaf27a53e4120103875eb279dd6e9c1228ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907f0ea33057b712c2cc96604a06eaf27a53e4120103875eb279dd6e9c1228ac->enter($__internal_907f0ea33057b712c2cc96604a06eaf27a53e4120103875eb279dd6e9c1228ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5575a63264595304d4baa2722c63f6f92fe48b867be1b4666b1a472fc17176e1->leave($__internal_5575a63264595304d4baa2722c63f6f92fe48b867be1b4666b1a472fc17176e1_prof);

        
        $__internal_907f0ea33057b712c2cc96604a06eaf27a53e4120103875eb279dd6e9c1228ac->leave($__internal_907f0ea33057b712c2cc96604a06eaf27a53e4120103875eb279dd6e9c1228ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d3b15e7f8bf64f56ab2485f26e42844e996daa39cf78f77ddc730e88af4b432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3b15e7f8bf64f56ab2485f26e42844e996daa39cf78f77ddc730e88af4b432->enter($__internal_9d3b15e7f8bf64f56ab2485f26e42844e996daa39cf78f77ddc730e88af4b432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_694b3c8d9060182d87329fec8fae33896c9b2c00648d141dc45d7d5569338bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694b3c8d9060182d87329fec8fae33896c9b2c00648d141dc45d7d5569338bcd->enter($__internal_694b3c8d9060182d87329fec8fae33896c9b2c00648d141dc45d7d5569338bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_694b3c8d9060182d87329fec8fae33896c9b2c00648d141dc45d7d5569338bcd->leave($__internal_694b3c8d9060182d87329fec8fae33896c9b2c00648d141dc45d7d5569338bcd_prof);

        
        $__internal_9d3b15e7f8bf64f56ab2485f26e42844e996daa39cf78f77ddc730e88af4b432->leave($__internal_9d3b15e7f8bf64f56ab2485f26e42844e996daa39cf78f77ddc730e88af4b432_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e1c96f9a1cb1410863f7eab7a69cae5f257378bf6e1cba6364c0c45498628b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1c96f9a1cb1410863f7eab7a69cae5f257378bf6e1cba6364c0c45498628b0->enter($__internal_7e1c96f9a1cb1410863f7eab7a69cae5f257378bf6e1cba6364c0c45498628b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8a92085dc121b3f2e480899167cd9defc66a6590894494ebca841520c36db5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a92085dc121b3f2e480899167cd9defc66a6590894494ebca841520c36db5e->enter($__internal_f8a92085dc121b3f2e480899167cd9defc66a6590894494ebca841520c36db5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f8a92085dc121b3f2e480899167cd9defc66a6590894494ebca841520c36db5e->leave($__internal_f8a92085dc121b3f2e480899167cd9defc66a6590894494ebca841520c36db5e_prof);

        
        $__internal_7e1c96f9a1cb1410863f7eab7a69cae5f257378bf6e1cba6364c0c45498628b0->leave($__internal_7e1c96f9a1cb1410863f7eab7a69cae5f257378bf6e1cba6364c0c45498628b0_prof);

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
