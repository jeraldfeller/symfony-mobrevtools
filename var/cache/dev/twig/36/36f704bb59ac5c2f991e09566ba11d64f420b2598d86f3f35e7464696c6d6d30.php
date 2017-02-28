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
        $__internal_a15ec3dc090170e558fd571027b113c4c7861d45137e715b3251388fcd558e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15ec3dc090170e558fd571027b113c4c7861d45137e715b3251388fcd558e7f->enter($__internal_a15ec3dc090170e558fd571027b113c4c7861d45137e715b3251388fcd558e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_874323de69e7e11ae666c2acffe364119ab6606f21996dca27ed3ffdd2790d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874323de69e7e11ae666c2acffe364119ab6606f21996dca27ed3ffdd2790d4b->enter($__internal_874323de69e7e11ae666c2acffe364119ab6606f21996dca27ed3ffdd2790d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a15ec3dc090170e558fd571027b113c4c7861d45137e715b3251388fcd558e7f->leave($__internal_a15ec3dc090170e558fd571027b113c4c7861d45137e715b3251388fcd558e7f_prof);

        
        $__internal_874323de69e7e11ae666c2acffe364119ab6606f21996dca27ed3ffdd2790d4b->leave($__internal_874323de69e7e11ae666c2acffe364119ab6606f21996dca27ed3ffdd2790d4b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_356fd2dcd8ec55843713afe9e4e452e8208704ca290df773735e475182b94ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356fd2dcd8ec55843713afe9e4e452e8208704ca290df773735e475182b94ce9->enter($__internal_356fd2dcd8ec55843713afe9e4e452e8208704ca290df773735e475182b94ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_327cf60ebc53ef2739c94cb42a54b68a52802d2e43c6fa94f4dcbf0dc302c774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327cf60ebc53ef2739c94cb42a54b68a52802d2e43c6fa94f4dcbf0dc302c774->enter($__internal_327cf60ebc53ef2739c94cb42a54b68a52802d2e43c6fa94f4dcbf0dc302c774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_327cf60ebc53ef2739c94cb42a54b68a52802d2e43c6fa94f4dcbf0dc302c774->leave($__internal_327cf60ebc53ef2739c94cb42a54b68a52802d2e43c6fa94f4dcbf0dc302c774_prof);

        
        $__internal_356fd2dcd8ec55843713afe9e4e452e8208704ca290df773735e475182b94ce9->leave($__internal_356fd2dcd8ec55843713afe9e4e452e8208704ca290df773735e475182b94ce9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_854f9593cd6ada1939245a3bf29a5570de4c83ec54d7a42abcdaf148edcfa384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854f9593cd6ada1939245a3bf29a5570de4c83ec54d7a42abcdaf148edcfa384->enter($__internal_854f9593cd6ada1939245a3bf29a5570de4c83ec54d7a42abcdaf148edcfa384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e91bfbbab32f4b8140d3ce4ff8a4ce29d545966d1baf37da45a7ae235861738f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91bfbbab32f4b8140d3ce4ff8a4ce29d545966d1baf37da45a7ae235861738f->enter($__internal_e91bfbbab32f4b8140d3ce4ff8a4ce29d545966d1baf37da45a7ae235861738f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e91bfbbab32f4b8140d3ce4ff8a4ce29d545966d1baf37da45a7ae235861738f->leave($__internal_e91bfbbab32f4b8140d3ce4ff8a4ce29d545966d1baf37da45a7ae235861738f_prof);

        
        $__internal_854f9593cd6ada1939245a3bf29a5570de4c83ec54d7a42abcdaf148edcfa384->leave($__internal_854f9593cd6ada1939245a3bf29a5570de4c83ec54d7a42abcdaf148edcfa384_prof);

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
