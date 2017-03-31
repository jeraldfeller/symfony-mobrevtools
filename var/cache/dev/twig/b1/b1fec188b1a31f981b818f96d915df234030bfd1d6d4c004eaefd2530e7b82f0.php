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
        $__internal_b09e7b1f1ec7b6bd838b00b09bfa16bddfbe7633f20d1645703d99a2e331d6d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09e7b1f1ec7b6bd838b00b09bfa16bddfbe7633f20d1645703d99a2e331d6d6->enter($__internal_b09e7b1f1ec7b6bd838b00b09bfa16bddfbe7633f20d1645703d99a2e331d6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e72c4da45ce08b2a77e3ee8f177e7f53b2350fc07f51d75765d32d7ccd9aad6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72c4da45ce08b2a77e3ee8f177e7f53b2350fc07f51d75765d32d7ccd9aad6a->enter($__internal_e72c4da45ce08b2a77e3ee8f177e7f53b2350fc07f51d75765d32d7ccd9aad6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b09e7b1f1ec7b6bd838b00b09bfa16bddfbe7633f20d1645703d99a2e331d6d6->leave($__internal_b09e7b1f1ec7b6bd838b00b09bfa16bddfbe7633f20d1645703d99a2e331d6d6_prof);

        
        $__internal_e72c4da45ce08b2a77e3ee8f177e7f53b2350fc07f51d75765d32d7ccd9aad6a->leave($__internal_e72c4da45ce08b2a77e3ee8f177e7f53b2350fc07f51d75765d32d7ccd9aad6a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b4c85810a840af86f5bf13a95174ff926393fe08a72123deb8269e009864b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4c85810a840af86f5bf13a95174ff926393fe08a72123deb8269e009864b7e->enter($__internal_4b4c85810a840af86f5bf13a95174ff926393fe08a72123deb8269e009864b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6d4a5a8c0452dc7cfa1ce7ec65244979e3bbdcb03dfc5dcc607c810d92416a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d4a5a8c0452dc7cfa1ce7ec65244979e3bbdcb03dfc5dcc607c810d92416a0->enter($__internal_d6d4a5a8c0452dc7cfa1ce7ec65244979e3bbdcb03dfc5dcc607c810d92416a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d6d4a5a8c0452dc7cfa1ce7ec65244979e3bbdcb03dfc5dcc607c810d92416a0->leave($__internal_d6d4a5a8c0452dc7cfa1ce7ec65244979e3bbdcb03dfc5dcc607c810d92416a0_prof);

        
        $__internal_4b4c85810a840af86f5bf13a95174ff926393fe08a72123deb8269e009864b7e->leave($__internal_4b4c85810a840af86f5bf13a95174ff926393fe08a72123deb8269e009864b7e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a4f6d2e803f2f6e5a778ab5fb409841b92b2f393a64756678cc5ef2dbb8b80b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4f6d2e803f2f6e5a778ab5fb409841b92b2f393a64756678cc5ef2dbb8b80b->enter($__internal_4a4f6d2e803f2f6e5a778ab5fb409841b92b2f393a64756678cc5ef2dbb8b80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b771cd73931a194f9bb78b9d4dab8772426007fa58ea17e4781338d4de2318c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b771cd73931a194f9bb78b9d4dab8772426007fa58ea17e4781338d4de2318c->enter($__internal_8b771cd73931a194f9bb78b9d4dab8772426007fa58ea17e4781338d4de2318c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b771cd73931a194f9bb78b9d4dab8772426007fa58ea17e4781338d4de2318c->leave($__internal_8b771cd73931a194f9bb78b9d4dab8772426007fa58ea17e4781338d4de2318c_prof);

        
        $__internal_4a4f6d2e803f2f6e5a778ab5fb409841b92b2f393a64756678cc5ef2dbb8b80b->leave($__internal_4a4f6d2e803f2f6e5a778ab5fb409841b92b2f393a64756678cc5ef2dbb8b80b_prof);

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
