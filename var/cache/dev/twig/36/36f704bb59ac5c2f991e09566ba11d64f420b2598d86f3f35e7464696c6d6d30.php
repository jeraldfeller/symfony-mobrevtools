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
        $__internal_1f94a4acc56b53c7377a784e660e6c8705c89f675d6710acd6ff7a3800946f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f94a4acc56b53c7377a784e660e6c8705c89f675d6710acd6ff7a3800946f27->enter($__internal_1f94a4acc56b53c7377a784e660e6c8705c89f675d6710acd6ff7a3800946f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d1296bdfe556b246d72dc606bffd3bf22a422132a714a2f9bf36a3c56766f17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1296bdfe556b246d72dc606bffd3bf22a422132a714a2f9bf36a3c56766f17e->enter($__internal_d1296bdfe556b246d72dc606bffd3bf22a422132a714a2f9bf36a3c56766f17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f94a4acc56b53c7377a784e660e6c8705c89f675d6710acd6ff7a3800946f27->leave($__internal_1f94a4acc56b53c7377a784e660e6c8705c89f675d6710acd6ff7a3800946f27_prof);

        
        $__internal_d1296bdfe556b246d72dc606bffd3bf22a422132a714a2f9bf36a3c56766f17e->leave($__internal_d1296bdfe556b246d72dc606bffd3bf22a422132a714a2f9bf36a3c56766f17e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9c4a709e55237f3c3d721c8fe879fd5c1a0167dae6ee4d12c6850454ed9acb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c4a709e55237f3c3d721c8fe879fd5c1a0167dae6ee4d12c6850454ed9acb3->enter($__internal_e9c4a709e55237f3c3d721c8fe879fd5c1a0167dae6ee4d12c6850454ed9acb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1274c8fdc26ceb398c93f26b991ed12972184812f9d8537e927fd6e907771c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1274c8fdc26ceb398c93f26b991ed12972184812f9d8537e927fd6e907771c41->enter($__internal_1274c8fdc26ceb398c93f26b991ed12972184812f9d8537e927fd6e907771c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1274c8fdc26ceb398c93f26b991ed12972184812f9d8537e927fd6e907771c41->leave($__internal_1274c8fdc26ceb398c93f26b991ed12972184812f9d8537e927fd6e907771c41_prof);

        
        $__internal_e9c4a709e55237f3c3d721c8fe879fd5c1a0167dae6ee4d12c6850454ed9acb3->leave($__internal_e9c4a709e55237f3c3d721c8fe879fd5c1a0167dae6ee4d12c6850454ed9acb3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ce20aebc3eea68135183b23a1eec831163bc12cfe894f8b23c2fd34d9a90cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce20aebc3eea68135183b23a1eec831163bc12cfe894f8b23c2fd34d9a90cb0->enter($__internal_2ce20aebc3eea68135183b23a1eec831163bc12cfe894f8b23c2fd34d9a90cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9e3f71a257578a0cf7d882bbea42f2f152bcb45820c734dc11b6be1860bb93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e3f71a257578a0cf7d882bbea42f2f152bcb45820c734dc11b6be1860bb93c->enter($__internal_c9e3f71a257578a0cf7d882bbea42f2f152bcb45820c734dc11b6be1860bb93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c9e3f71a257578a0cf7d882bbea42f2f152bcb45820c734dc11b6be1860bb93c->leave($__internal_c9e3f71a257578a0cf7d882bbea42f2f152bcb45820c734dc11b6be1860bb93c_prof);

        
        $__internal_2ce20aebc3eea68135183b23a1eec831163bc12cfe894f8b23c2fd34d9a90cb0->leave($__internal_2ce20aebc3eea68135183b23a1eec831163bc12cfe894f8b23c2fd34d9a90cb0_prof);

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
