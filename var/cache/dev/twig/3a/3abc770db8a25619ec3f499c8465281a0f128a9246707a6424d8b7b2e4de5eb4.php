<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_cb2592bed280ed0d30d9ec8af8178824544eb5507e32b1501beebf4dc584ac8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f900a74d4ebaf196f71b614cde0d08fbdeaee07de4f33ad0497fe814de1cba6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f900a74d4ebaf196f71b614cde0d08fbdeaee07de4f33ad0497fe814de1cba6d->enter($__internal_f900a74d4ebaf196f71b614cde0d08fbdeaee07de4f33ad0497fe814de1cba6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_2c7e3261b02a38b4c958d543efd3eef0323c1c8b10056f43c9f60d9c601e71d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7e3261b02a38b4c958d543efd3eef0323c1c8b10056f43c9f60d9c601e71d8->enter($__internal_2c7e3261b02a38b4c958d543efd3eef0323c1c8b10056f43c9f60d9c601e71d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f900a74d4ebaf196f71b614cde0d08fbdeaee07de4f33ad0497fe814de1cba6d->leave($__internal_f900a74d4ebaf196f71b614cde0d08fbdeaee07de4f33ad0497fe814de1cba6d_prof);

        
        $__internal_2c7e3261b02a38b4c958d543efd3eef0323c1c8b10056f43c9f60d9c601e71d8->leave($__internal_2c7e3261b02a38b4c958d543efd3eef0323c1c8b10056f43c9f60d9c601e71d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03eff8dcf8d16bf1f8e2a8cff089ff764a04f8723fe4a13f898ec06a71ca7c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03eff8dcf8d16bf1f8e2a8cff089ff764a04f8723fe4a13f898ec06a71ca7c07->enter($__internal_03eff8dcf8d16bf1f8e2a8cff089ff764a04f8723fe4a13f898ec06a71ca7c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_068600a019e53f60be7c569a0a56f78b974f1cf105b5d51a8ee390867a72f946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068600a019e53f60be7c569a0a56f78b974f1cf105b5d51a8ee390867a72f946->enter($__internal_068600a019e53f60be7c569a0a56f78b974f1cf105b5d51a8ee390867a72f946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_068600a019e53f60be7c569a0a56f78b974f1cf105b5d51a8ee390867a72f946->leave($__internal_068600a019e53f60be7c569a0a56f78b974f1cf105b5d51a8ee390867a72f946_prof);

        
        $__internal_03eff8dcf8d16bf1f8e2a8cff089ff764a04f8723fe4a13f898ec06a71ca7c07->leave($__internal_03eff8dcf8d16bf1f8e2a8cff089ff764a04f8723fe4a13f898ec06a71ca7c07_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d9ef63f139bf1372fc7f2b4d9735ec8569f1d188c193f0ba1cae21874abcfd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9ef63f139bf1372fc7f2b4d9735ec8569f1d188c193f0ba1cae21874abcfd8->enter($__internal_1d9ef63f139bf1372fc7f2b4d9735ec8569f1d188c193f0ba1cae21874abcfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e2633c47285f01b5986c6642422935f55a034b24bfe01b2ef4389cd602d74caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2633c47285f01b5986c6642422935f55a034b24bfe01b2ef4389cd602d74caa->enter($__internal_e2633c47285f01b5986c6642422935f55a034b24bfe01b2ef4389cd602d74caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e2633c47285f01b5986c6642422935f55a034b24bfe01b2ef4389cd602d74caa->leave($__internal_e2633c47285f01b5986c6642422935f55a034b24bfe01b2ef4389cd602d74caa_prof);

        
        $__internal_1d9ef63f139bf1372fc7f2b4d9735ec8569f1d188c193f0ba1cae21874abcfd8->leave($__internal_1d9ef63f139bf1372fc7f2b4d9735ec8569f1d188c193f0ba1cae21874abcfd8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37d7a6eee211caa04889c3df9871eece76f9059d87a78444f7364f7b3fe700ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d7a6eee211caa04889c3df9871eece76f9059d87a78444f7364f7b3fe700ac->enter($__internal_37d7a6eee211caa04889c3df9871eece76f9059d87a78444f7364f7b3fe700ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6cc8693ff6014490647584561856bb8deb3bc6ebcac7d041b5fd6981122ea496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc8693ff6014490647584561856bb8deb3bc6ebcac7d041b5fd6981122ea496->enter($__internal_6cc8693ff6014490647584561856bb8deb3bc6ebcac7d041b5fd6981122ea496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6cc8693ff6014490647584561856bb8deb3bc6ebcac7d041b5fd6981122ea496->leave($__internal_6cc8693ff6014490647584561856bb8deb3bc6ebcac7d041b5fd6981122ea496_prof);

        
        $__internal_37d7a6eee211caa04889c3df9871eece76f9059d87a78444f7364f7b3fe700ac->leave($__internal_37d7a6eee211caa04889c3df9871eece76f9059d87a78444f7364f7b3fe700ac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
