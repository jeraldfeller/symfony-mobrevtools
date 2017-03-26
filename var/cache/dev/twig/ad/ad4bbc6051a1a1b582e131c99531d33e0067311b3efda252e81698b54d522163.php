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
        $__internal_fd06fa4d1e42d5b9eef89f97c537727e4cbbe305b9282416216bac337e9b189a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd06fa4d1e42d5b9eef89f97c537727e4cbbe305b9282416216bac337e9b189a->enter($__internal_fd06fa4d1e42d5b9eef89f97c537727e4cbbe305b9282416216bac337e9b189a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_230e83ace3c12ed2d64b8abab5b7e24299755a6048a6042640c47e74663ead48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230e83ace3c12ed2d64b8abab5b7e24299755a6048a6042640c47e74663ead48->enter($__internal_230e83ace3c12ed2d64b8abab5b7e24299755a6048a6042640c47e74663ead48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd06fa4d1e42d5b9eef89f97c537727e4cbbe305b9282416216bac337e9b189a->leave($__internal_fd06fa4d1e42d5b9eef89f97c537727e4cbbe305b9282416216bac337e9b189a_prof);

        
        $__internal_230e83ace3c12ed2d64b8abab5b7e24299755a6048a6042640c47e74663ead48->leave($__internal_230e83ace3c12ed2d64b8abab5b7e24299755a6048a6042640c47e74663ead48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de57f1caab2fb5a1309c58537568f2ebf0c0cb7f835005772ab27e3c1e6e7929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de57f1caab2fb5a1309c58537568f2ebf0c0cb7f835005772ab27e3c1e6e7929->enter($__internal_de57f1caab2fb5a1309c58537568f2ebf0c0cb7f835005772ab27e3c1e6e7929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b8211155b3af59a78aa411d56006afe3698e6ef2f44290ac40e4203676d3801b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8211155b3af59a78aa411d56006afe3698e6ef2f44290ac40e4203676d3801b->enter($__internal_b8211155b3af59a78aa411d56006afe3698e6ef2f44290ac40e4203676d3801b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b8211155b3af59a78aa411d56006afe3698e6ef2f44290ac40e4203676d3801b->leave($__internal_b8211155b3af59a78aa411d56006afe3698e6ef2f44290ac40e4203676d3801b_prof);

        
        $__internal_de57f1caab2fb5a1309c58537568f2ebf0c0cb7f835005772ab27e3c1e6e7929->leave($__internal_de57f1caab2fb5a1309c58537568f2ebf0c0cb7f835005772ab27e3c1e6e7929_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f8e3573c39edbba968aa9d352ac2cdea5c1eb198b58134da3c14fe18dea3469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8e3573c39edbba968aa9d352ac2cdea5c1eb198b58134da3c14fe18dea3469->enter($__internal_0f8e3573c39edbba968aa9d352ac2cdea5c1eb198b58134da3c14fe18dea3469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_763bf8a529ba12fd9881ddb005932696dcab07c7db636a825caa8c530b8aa061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763bf8a529ba12fd9881ddb005932696dcab07c7db636a825caa8c530b8aa061->enter($__internal_763bf8a529ba12fd9881ddb005932696dcab07c7db636a825caa8c530b8aa061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_763bf8a529ba12fd9881ddb005932696dcab07c7db636a825caa8c530b8aa061->leave($__internal_763bf8a529ba12fd9881ddb005932696dcab07c7db636a825caa8c530b8aa061_prof);

        
        $__internal_0f8e3573c39edbba968aa9d352ac2cdea5c1eb198b58134da3c14fe18dea3469->leave($__internal_0f8e3573c39edbba968aa9d352ac2cdea5c1eb198b58134da3c14fe18dea3469_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8965188e7c67d8777e9c6a603590991f51154253619c801247d2b2059a181f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8965188e7c67d8777e9c6a603590991f51154253619c801247d2b2059a181f95->enter($__internal_8965188e7c67d8777e9c6a603590991f51154253619c801247d2b2059a181f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_55101d7cac53c8f5b2d22f55d7d40272d97b86ca98e2272249cca7a601a866e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55101d7cac53c8f5b2d22f55d7d40272d97b86ca98e2272249cca7a601a866e3->enter($__internal_55101d7cac53c8f5b2d22f55d7d40272d97b86ca98e2272249cca7a601a866e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_55101d7cac53c8f5b2d22f55d7d40272d97b86ca98e2272249cca7a601a866e3->leave($__internal_55101d7cac53c8f5b2d22f55d7d40272d97b86ca98e2272249cca7a601a866e3_prof);

        
        $__internal_8965188e7c67d8777e9c6a603590991f51154253619c801247d2b2059a181f95->leave($__internal_8965188e7c67d8777e9c6a603590991f51154253619c801247d2b2059a181f95_prof);

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
