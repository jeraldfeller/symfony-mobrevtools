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
        $__internal_812ae231f45bd87189ef0601cc963fd706e8788f438d6091c5d7573d6266fc4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812ae231f45bd87189ef0601cc963fd706e8788f438d6091c5d7573d6266fc4b->enter($__internal_812ae231f45bd87189ef0601cc963fd706e8788f438d6091c5d7573d6266fc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_9d7ed48b4005526d67749327193bf7ed603389a45132ea61f7a60745ef356f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7ed48b4005526d67749327193bf7ed603389a45132ea61f7a60745ef356f3b->enter($__internal_9d7ed48b4005526d67749327193bf7ed603389a45132ea61f7a60745ef356f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_812ae231f45bd87189ef0601cc963fd706e8788f438d6091c5d7573d6266fc4b->leave($__internal_812ae231f45bd87189ef0601cc963fd706e8788f438d6091c5d7573d6266fc4b_prof);

        
        $__internal_9d7ed48b4005526d67749327193bf7ed603389a45132ea61f7a60745ef356f3b->leave($__internal_9d7ed48b4005526d67749327193bf7ed603389a45132ea61f7a60745ef356f3b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad20d4494349662861389f545a9fdae89bee7a01271e13bd34e79d2e646e5bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad20d4494349662861389f545a9fdae89bee7a01271e13bd34e79d2e646e5bd1->enter($__internal_ad20d4494349662861389f545a9fdae89bee7a01271e13bd34e79d2e646e5bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2ccb5ec458dc0c8bfef8dc1a338f618eb4391ede64874fccd322eae4a60f4293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ccb5ec458dc0c8bfef8dc1a338f618eb4391ede64874fccd322eae4a60f4293->enter($__internal_2ccb5ec458dc0c8bfef8dc1a338f618eb4391ede64874fccd322eae4a60f4293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2ccb5ec458dc0c8bfef8dc1a338f618eb4391ede64874fccd322eae4a60f4293->leave($__internal_2ccb5ec458dc0c8bfef8dc1a338f618eb4391ede64874fccd322eae4a60f4293_prof);

        
        $__internal_ad20d4494349662861389f545a9fdae89bee7a01271e13bd34e79d2e646e5bd1->leave($__internal_ad20d4494349662861389f545a9fdae89bee7a01271e13bd34e79d2e646e5bd1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8396c1dc36f75a2ed2147fe7adc6a436a2e4497c84760d88c453a215452219cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8396c1dc36f75a2ed2147fe7adc6a436a2e4497c84760d88c453a215452219cb->enter($__internal_8396c1dc36f75a2ed2147fe7adc6a436a2e4497c84760d88c453a215452219cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43efc406382be7c1ed3d6608861dc66201b6ce29cd1358befc4a4a2ce0799c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43efc406382be7c1ed3d6608861dc66201b6ce29cd1358befc4a4a2ce0799c49->enter($__internal_43efc406382be7c1ed3d6608861dc66201b6ce29cd1358befc4a4a2ce0799c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_43efc406382be7c1ed3d6608861dc66201b6ce29cd1358befc4a4a2ce0799c49->leave($__internal_43efc406382be7c1ed3d6608861dc66201b6ce29cd1358befc4a4a2ce0799c49_prof);

        
        $__internal_8396c1dc36f75a2ed2147fe7adc6a436a2e4497c84760d88c453a215452219cb->leave($__internal_8396c1dc36f75a2ed2147fe7adc6a436a2e4497c84760d88c453a215452219cb_prof);

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
