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
        $__internal_a2073c2581756f70774ab26daf95b1ba759e0c2351b473e0ef0799def29471d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2073c2581756f70774ab26daf95b1ba759e0c2351b473e0ef0799def29471d9->enter($__internal_a2073c2581756f70774ab26daf95b1ba759e0c2351b473e0ef0799def29471d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_655738e8abebb30d98f19ff3d5a3f22abff3beca4ddb903f47e2eff8c0b88b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655738e8abebb30d98f19ff3d5a3f22abff3beca4ddb903f47e2eff8c0b88b10->enter($__internal_655738e8abebb30d98f19ff3d5a3f22abff3beca4ddb903f47e2eff8c0b88b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2073c2581756f70774ab26daf95b1ba759e0c2351b473e0ef0799def29471d9->leave($__internal_a2073c2581756f70774ab26daf95b1ba759e0c2351b473e0ef0799def29471d9_prof);

        
        $__internal_655738e8abebb30d98f19ff3d5a3f22abff3beca4ddb903f47e2eff8c0b88b10->leave($__internal_655738e8abebb30d98f19ff3d5a3f22abff3beca4ddb903f47e2eff8c0b88b10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2a83d9c2a61af4cd14b7755d1c38109fb8ccc5fc52488655049481c4fd154c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a83d9c2a61af4cd14b7755d1c38109fb8ccc5fc52488655049481c4fd154c3->enter($__internal_f2a83d9c2a61af4cd14b7755d1c38109fb8ccc5fc52488655049481c4fd154c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_31a6dd9c01ee95028a9b0fefbcf5bb8c06b6751d5c0cc0da0c841a51f0dc7454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a6dd9c01ee95028a9b0fefbcf5bb8c06b6751d5c0cc0da0c841a51f0dc7454->enter($__internal_31a6dd9c01ee95028a9b0fefbcf5bb8c06b6751d5c0cc0da0c841a51f0dc7454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_31a6dd9c01ee95028a9b0fefbcf5bb8c06b6751d5c0cc0da0c841a51f0dc7454->leave($__internal_31a6dd9c01ee95028a9b0fefbcf5bb8c06b6751d5c0cc0da0c841a51f0dc7454_prof);

        
        $__internal_f2a83d9c2a61af4cd14b7755d1c38109fb8ccc5fc52488655049481c4fd154c3->leave($__internal_f2a83d9c2a61af4cd14b7755d1c38109fb8ccc5fc52488655049481c4fd154c3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2140ccace0acc1796100fc6d1207ac28e6c81f73f23cf5d955f3447dded27ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2140ccace0acc1796100fc6d1207ac28e6c81f73f23cf5d955f3447dded27ce2->enter($__internal_2140ccace0acc1796100fc6d1207ac28e6c81f73f23cf5d955f3447dded27ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3aadc4c82354bf8d51e91ef1fcde3caa60cefec43cd354304f746015205305d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aadc4c82354bf8d51e91ef1fcde3caa60cefec43cd354304f746015205305d0->enter($__internal_3aadc4c82354bf8d51e91ef1fcde3caa60cefec43cd354304f746015205305d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3aadc4c82354bf8d51e91ef1fcde3caa60cefec43cd354304f746015205305d0->leave($__internal_3aadc4c82354bf8d51e91ef1fcde3caa60cefec43cd354304f746015205305d0_prof);

        
        $__internal_2140ccace0acc1796100fc6d1207ac28e6c81f73f23cf5d955f3447dded27ce2->leave($__internal_2140ccace0acc1796100fc6d1207ac28e6c81f73f23cf5d955f3447dded27ce2_prof);

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
