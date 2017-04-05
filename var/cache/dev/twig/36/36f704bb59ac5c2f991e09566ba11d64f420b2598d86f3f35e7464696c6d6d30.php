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
        $__internal_feccce8475bbe6bc2affadd3fdb584582d9ba6b6bad1a742dcab5ce46b432e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feccce8475bbe6bc2affadd3fdb584582d9ba6b6bad1a742dcab5ce46b432e76->enter($__internal_feccce8475bbe6bc2affadd3fdb584582d9ba6b6bad1a742dcab5ce46b432e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_1466897f706168e1d0a149a4b3751d36b3347b100fe0f6c5ba66ed4b2ab68743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1466897f706168e1d0a149a4b3751d36b3347b100fe0f6c5ba66ed4b2ab68743->enter($__internal_1466897f706168e1d0a149a4b3751d36b3347b100fe0f6c5ba66ed4b2ab68743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feccce8475bbe6bc2affadd3fdb584582d9ba6b6bad1a742dcab5ce46b432e76->leave($__internal_feccce8475bbe6bc2affadd3fdb584582d9ba6b6bad1a742dcab5ce46b432e76_prof);

        
        $__internal_1466897f706168e1d0a149a4b3751d36b3347b100fe0f6c5ba66ed4b2ab68743->leave($__internal_1466897f706168e1d0a149a4b3751d36b3347b100fe0f6c5ba66ed4b2ab68743_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d7bc0cc1c6260584160eda193a25a58d06017453b37b52de5bd00615c8b50fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7bc0cc1c6260584160eda193a25a58d06017453b37b52de5bd00615c8b50fe->enter($__internal_9d7bc0cc1c6260584160eda193a25a58d06017453b37b52de5bd00615c8b50fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_34d1b996958baf0c42362f952e8c11889c96b948fea138dc66a7cc01d233d36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d1b996958baf0c42362f952e8c11889c96b948fea138dc66a7cc01d233d36a->enter($__internal_34d1b996958baf0c42362f952e8c11889c96b948fea138dc66a7cc01d233d36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_34d1b996958baf0c42362f952e8c11889c96b948fea138dc66a7cc01d233d36a->leave($__internal_34d1b996958baf0c42362f952e8c11889c96b948fea138dc66a7cc01d233d36a_prof);

        
        $__internal_9d7bc0cc1c6260584160eda193a25a58d06017453b37b52de5bd00615c8b50fe->leave($__internal_9d7bc0cc1c6260584160eda193a25a58d06017453b37b52de5bd00615c8b50fe_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_774d846fef8ef3c6615eeeb6e8853106763f905fa60bb1cbea66800eaa171915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774d846fef8ef3c6615eeeb6e8853106763f905fa60bb1cbea66800eaa171915->enter($__internal_774d846fef8ef3c6615eeeb6e8853106763f905fa60bb1cbea66800eaa171915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86b70a621a3aa4838ea0d16c63c42e2b45bcef67b6f2ffaeab1148c4c0bbdc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b70a621a3aa4838ea0d16c63c42e2b45bcef67b6f2ffaeab1148c4c0bbdc0c->enter($__internal_86b70a621a3aa4838ea0d16c63c42e2b45bcef67b6f2ffaeab1148c4c0bbdc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_86b70a621a3aa4838ea0d16c63c42e2b45bcef67b6f2ffaeab1148c4c0bbdc0c->leave($__internal_86b70a621a3aa4838ea0d16c63c42e2b45bcef67b6f2ffaeab1148c4c0bbdc0c_prof);

        
        $__internal_774d846fef8ef3c6615eeeb6e8853106763f905fa60bb1cbea66800eaa171915->leave($__internal_774d846fef8ef3c6615eeeb6e8853106763f905fa60bb1cbea66800eaa171915_prof);

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
