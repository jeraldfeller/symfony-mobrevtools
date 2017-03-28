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
        $__internal_a3f2906f7972e10fa979841f09d9f3bb9cfda712a6d7873da2ec66b7ea62f8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f2906f7972e10fa979841f09d9f3bb9cfda712a6d7873da2ec66b7ea62f8c0->enter($__internal_a3f2906f7972e10fa979841f09d9f3bb9cfda712a6d7873da2ec66b7ea62f8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_cf051ec12ca1b03fe2c5160aae1186208381a89a1abd7a0b753a82d8ce12492f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf051ec12ca1b03fe2c5160aae1186208381a89a1abd7a0b753a82d8ce12492f->enter($__internal_cf051ec12ca1b03fe2c5160aae1186208381a89a1abd7a0b753a82d8ce12492f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3f2906f7972e10fa979841f09d9f3bb9cfda712a6d7873da2ec66b7ea62f8c0->leave($__internal_a3f2906f7972e10fa979841f09d9f3bb9cfda712a6d7873da2ec66b7ea62f8c0_prof);

        
        $__internal_cf051ec12ca1b03fe2c5160aae1186208381a89a1abd7a0b753a82d8ce12492f->leave($__internal_cf051ec12ca1b03fe2c5160aae1186208381a89a1abd7a0b753a82d8ce12492f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a96e572878401b968070795c45f708986fede110b6b6bec87158371d87a182e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a96e572878401b968070795c45f708986fede110b6b6bec87158371d87a182e->enter($__internal_6a96e572878401b968070795c45f708986fede110b6b6bec87158371d87a182e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d084aea362879f95e3796a409895129d651e2a937e6ddf8cc3099fb90a444e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d084aea362879f95e3796a409895129d651e2a937e6ddf8cc3099fb90a444e24->enter($__internal_d084aea362879f95e3796a409895129d651e2a937e6ddf8cc3099fb90a444e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d084aea362879f95e3796a409895129d651e2a937e6ddf8cc3099fb90a444e24->leave($__internal_d084aea362879f95e3796a409895129d651e2a937e6ddf8cc3099fb90a444e24_prof);

        
        $__internal_6a96e572878401b968070795c45f708986fede110b6b6bec87158371d87a182e->leave($__internal_6a96e572878401b968070795c45f708986fede110b6b6bec87158371d87a182e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_082397c436b4767eb37bb3f7631f34282ec54e82bc0230a7f9466519d4e9332b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082397c436b4767eb37bb3f7631f34282ec54e82bc0230a7f9466519d4e9332b->enter($__internal_082397c436b4767eb37bb3f7631f34282ec54e82bc0230a7f9466519d4e9332b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbc7006e2041a4a6d41e6b49c3383dc317abd51a68748e1264373c95beeeea68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc7006e2041a4a6d41e6b49c3383dc317abd51a68748e1264373c95beeeea68->enter($__internal_bbc7006e2041a4a6d41e6b49c3383dc317abd51a68748e1264373c95beeeea68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bbc7006e2041a4a6d41e6b49c3383dc317abd51a68748e1264373c95beeeea68->leave($__internal_bbc7006e2041a4a6d41e6b49c3383dc317abd51a68748e1264373c95beeeea68_prof);

        
        $__internal_082397c436b4767eb37bb3f7631f34282ec54e82bc0230a7f9466519d4e9332b->leave($__internal_082397c436b4767eb37bb3f7631f34282ec54e82bc0230a7f9466519d4e9332b_prof);

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
