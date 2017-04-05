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
        $__internal_37e2fe98aa1bd00cb0af264fbf05ec5aa24ede4418a8457b3af60bd13232b321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e2fe98aa1bd00cb0af264fbf05ec5aa24ede4418a8457b3af60bd13232b321->enter($__internal_37e2fe98aa1bd00cb0af264fbf05ec5aa24ede4418a8457b3af60bd13232b321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_df64d419a68bc2d5398324d985b721f4a43a51af1cfff6b5cf3399f0e2985381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df64d419a68bc2d5398324d985b721f4a43a51af1cfff6b5cf3399f0e2985381->enter($__internal_df64d419a68bc2d5398324d985b721f4a43a51af1cfff6b5cf3399f0e2985381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37e2fe98aa1bd00cb0af264fbf05ec5aa24ede4418a8457b3af60bd13232b321->leave($__internal_37e2fe98aa1bd00cb0af264fbf05ec5aa24ede4418a8457b3af60bd13232b321_prof);

        
        $__internal_df64d419a68bc2d5398324d985b721f4a43a51af1cfff6b5cf3399f0e2985381->leave($__internal_df64d419a68bc2d5398324d985b721f4a43a51af1cfff6b5cf3399f0e2985381_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a2fad6df868e8c271a832662c8d8f8510741a8d651dcfecc3e6e6ec45e1441e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2fad6df868e8c271a832662c8d8f8510741a8d651dcfecc3e6e6ec45e1441e->enter($__internal_2a2fad6df868e8c271a832662c8d8f8510741a8d651dcfecc3e6e6ec45e1441e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a1271d3715124b4b3def9a1b630efb30b416f4abaa1387d4c258c3cb3fc2d97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1271d3715124b4b3def9a1b630efb30b416f4abaa1387d4c258c3cb3fc2d97a->enter($__internal_a1271d3715124b4b3def9a1b630efb30b416f4abaa1387d4c258c3cb3fc2d97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a1271d3715124b4b3def9a1b630efb30b416f4abaa1387d4c258c3cb3fc2d97a->leave($__internal_a1271d3715124b4b3def9a1b630efb30b416f4abaa1387d4c258c3cb3fc2d97a_prof);

        
        $__internal_2a2fad6df868e8c271a832662c8d8f8510741a8d651dcfecc3e6e6ec45e1441e->leave($__internal_2a2fad6df868e8c271a832662c8d8f8510741a8d651dcfecc3e6e6ec45e1441e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f48bc2e1c039e61062c180679eccb4ba47357771181c242ee346abb2a80fc7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f48bc2e1c039e61062c180679eccb4ba47357771181c242ee346abb2a80fc7c->enter($__internal_7f48bc2e1c039e61062c180679eccb4ba47357771181c242ee346abb2a80fc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4fd9ac26bee2f126bc6620bb9abc2e115e25db1d79a86ec2497724f872910ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fd9ac26bee2f126bc6620bb9abc2e115e25db1d79a86ec2497724f872910ec->enter($__internal_c4fd9ac26bee2f126bc6620bb9abc2e115e25db1d79a86ec2497724f872910ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4fd9ac26bee2f126bc6620bb9abc2e115e25db1d79a86ec2497724f872910ec->leave($__internal_c4fd9ac26bee2f126bc6620bb9abc2e115e25db1d79a86ec2497724f872910ec_prof);

        
        $__internal_7f48bc2e1c039e61062c180679eccb4ba47357771181c242ee346abb2a80fc7c->leave($__internal_7f48bc2e1c039e61062c180679eccb4ba47357771181c242ee346abb2a80fc7c_prof);

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
