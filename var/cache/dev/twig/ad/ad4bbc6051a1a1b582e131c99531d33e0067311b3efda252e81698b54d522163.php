<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2e19e4bfd8672deb9def05088e9007699ca0e397f9173b176435a32badaa5bbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_500cfaeeaebe0948e9b9aaf5da3507ad1f43640fd9fc2a10288a95217eaadd00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500cfaeeaebe0948e9b9aaf5da3507ad1f43640fd9fc2a10288a95217eaadd00->enter($__internal_500cfaeeaebe0948e9b9aaf5da3507ad1f43640fd9fc2a10288a95217eaadd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_66a4fa4e82033f9e1026932213498b0e4a921b968d2ef65ee2c977bfbb0ef6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a4fa4e82033f9e1026932213498b0e4a921b968d2ef65ee2c977bfbb0ef6e6->enter($__internal_66a4fa4e82033f9e1026932213498b0e4a921b968d2ef65ee2c977bfbb0ef6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_500cfaeeaebe0948e9b9aaf5da3507ad1f43640fd9fc2a10288a95217eaadd00->leave($__internal_500cfaeeaebe0948e9b9aaf5da3507ad1f43640fd9fc2a10288a95217eaadd00_prof);

        
        $__internal_66a4fa4e82033f9e1026932213498b0e4a921b968d2ef65ee2c977bfbb0ef6e6->leave($__internal_66a4fa4e82033f9e1026932213498b0e4a921b968d2ef65ee2c977bfbb0ef6e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ba29ffde7547be0140a9e9c5e7e1e1a59b1a3a2fd91574a728a9986152acf91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba29ffde7547be0140a9e9c5e7e1e1a59b1a3a2fd91574a728a9986152acf91->enter($__internal_2ba29ffde7547be0140a9e9c5e7e1e1a59b1a3a2fd91574a728a9986152acf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8536279f13e438c16a00f655d8f05dc240b3fc895a3b5a5af3acbc548bac5da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8536279f13e438c16a00f655d8f05dc240b3fc895a3b5a5af3acbc548bac5da8->enter($__internal_8536279f13e438c16a00f655d8f05dc240b3fc895a3b5a5af3acbc548bac5da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8536279f13e438c16a00f655d8f05dc240b3fc895a3b5a5af3acbc548bac5da8->leave($__internal_8536279f13e438c16a00f655d8f05dc240b3fc895a3b5a5af3acbc548bac5da8_prof);

        
        $__internal_2ba29ffde7547be0140a9e9c5e7e1e1a59b1a3a2fd91574a728a9986152acf91->leave($__internal_2ba29ffde7547be0140a9e9c5e7e1e1a59b1a3a2fd91574a728a9986152acf91_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_91422535d4bfd9e1df7d68f45187a1e4008f508d74cc34bd3c4174a3c1a913b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91422535d4bfd9e1df7d68f45187a1e4008f508d74cc34bd3c4174a3c1a913b5->enter($__internal_91422535d4bfd9e1df7d68f45187a1e4008f508d74cc34bd3c4174a3c1a913b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6ebed3cbb587b0f6c71220344bf283d2a54bd6f7643e7d6c194c397408a96d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebed3cbb587b0f6c71220344bf283d2a54bd6f7643e7d6c194c397408a96d14->enter($__internal_6ebed3cbb587b0f6c71220344bf283d2a54bd6f7643e7d6c194c397408a96d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6ebed3cbb587b0f6c71220344bf283d2a54bd6f7643e7d6c194c397408a96d14->leave($__internal_6ebed3cbb587b0f6c71220344bf283d2a54bd6f7643e7d6c194c397408a96d14_prof);

        
        $__internal_91422535d4bfd9e1df7d68f45187a1e4008f508d74cc34bd3c4174a3c1a913b5->leave($__internal_91422535d4bfd9e1df7d68f45187a1e4008f508d74cc34bd3c4174a3c1a913b5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d74f70fe843adf0d380cee30f9971b99d9cc01b7a4ea9c1d83f768286b9127ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74f70fe843adf0d380cee30f9971b99d9cc01b7a4ea9c1d83f768286b9127ce->enter($__internal_d74f70fe843adf0d380cee30f9971b99d9cc01b7a4ea9c1d83f768286b9127ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_516b4de11efa0f2da5c4b8ac075ba6fe9b6923547ff6ac93d4e50cd2daf5dbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516b4de11efa0f2da5c4b8ac075ba6fe9b6923547ff6ac93d4e50cd2daf5dbc4->enter($__internal_516b4de11efa0f2da5c4b8ac075ba6fe9b6923547ff6ac93d4e50cd2daf5dbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_516b4de11efa0f2da5c4b8ac075ba6fe9b6923547ff6ac93d4e50cd2daf5dbc4->leave($__internal_516b4de11efa0f2da5c4b8ac075ba6fe9b6923547ff6ac93d4e50cd2daf5dbc4_prof);

        
        $__internal_d74f70fe843adf0d380cee30f9971b99d9cc01b7a4ea9c1d83f768286b9127ce->leave($__internal_d74f70fe843adf0d380cee30f9971b99d9cc01b7a4ea9c1d83f768286b9127ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
