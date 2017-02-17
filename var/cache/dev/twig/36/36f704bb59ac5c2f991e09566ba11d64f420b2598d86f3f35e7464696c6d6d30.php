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
        $__internal_bb21f0de672e6a756044799a8bbfe814f4564b9468fdd7d4508ec0cfa940f6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb21f0de672e6a756044799a8bbfe814f4564b9468fdd7d4508ec0cfa940f6e1->enter($__internal_bb21f0de672e6a756044799a8bbfe814f4564b9468fdd7d4508ec0cfa940f6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8c8186f18deb77dbdf1e86bec92d726246538f4efa1b977c443fae89c85ae63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8186f18deb77dbdf1e86bec92d726246538f4efa1b977c443fae89c85ae63e->enter($__internal_8c8186f18deb77dbdf1e86bec92d726246538f4efa1b977c443fae89c85ae63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb21f0de672e6a756044799a8bbfe814f4564b9468fdd7d4508ec0cfa940f6e1->leave($__internal_bb21f0de672e6a756044799a8bbfe814f4564b9468fdd7d4508ec0cfa940f6e1_prof);

        
        $__internal_8c8186f18deb77dbdf1e86bec92d726246538f4efa1b977c443fae89c85ae63e->leave($__internal_8c8186f18deb77dbdf1e86bec92d726246538f4efa1b977c443fae89c85ae63e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5686cdee4363bb7c0c861a78756aa7fe464402c4db04ea75a054b2a00beba1ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5686cdee4363bb7c0c861a78756aa7fe464402c4db04ea75a054b2a00beba1ae->enter($__internal_5686cdee4363bb7c0c861a78756aa7fe464402c4db04ea75a054b2a00beba1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9a43224958735ad33d2b7fe06b5612a4965e12c9c14c8a6c0bd8808daf613cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a43224958735ad33d2b7fe06b5612a4965e12c9c14c8a6c0bd8808daf613cd4->enter($__internal_9a43224958735ad33d2b7fe06b5612a4965e12c9c14c8a6c0bd8808daf613cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9a43224958735ad33d2b7fe06b5612a4965e12c9c14c8a6c0bd8808daf613cd4->leave($__internal_9a43224958735ad33d2b7fe06b5612a4965e12c9c14c8a6c0bd8808daf613cd4_prof);

        
        $__internal_5686cdee4363bb7c0c861a78756aa7fe464402c4db04ea75a054b2a00beba1ae->leave($__internal_5686cdee4363bb7c0c861a78756aa7fe464402c4db04ea75a054b2a00beba1ae_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_45e9632291aa0b88892f0c2d63e035ff7cfe8cf6cb0777907adbeb95bbe08788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e9632291aa0b88892f0c2d63e035ff7cfe8cf6cb0777907adbeb95bbe08788->enter($__internal_45e9632291aa0b88892f0c2d63e035ff7cfe8cf6cb0777907adbeb95bbe08788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_242d98578e220c04560562e8e4bc887d10b3754bf4e811265d3b00b243692b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242d98578e220c04560562e8e4bc887d10b3754bf4e811265d3b00b243692b70->enter($__internal_242d98578e220c04560562e8e4bc887d10b3754bf4e811265d3b00b243692b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_242d98578e220c04560562e8e4bc887d10b3754bf4e811265d3b00b243692b70->leave($__internal_242d98578e220c04560562e8e4bc887d10b3754bf4e811265d3b00b243692b70_prof);

        
        $__internal_45e9632291aa0b88892f0c2d63e035ff7cfe8cf6cb0777907adbeb95bbe08788->leave($__internal_45e9632291aa0b88892f0c2d63e035ff7cfe8cf6cb0777907adbeb95bbe08788_prof);

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
