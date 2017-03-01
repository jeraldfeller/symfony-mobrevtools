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
        $__internal_9fb2d3d40dba8e76fed57b07a321d491bc684c42c14d8c4711f22b36b4ea7c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb2d3d40dba8e76fed57b07a321d491bc684c42c14d8c4711f22b36b4ea7c0d->enter($__internal_9fb2d3d40dba8e76fed57b07a321d491bc684c42c14d8c4711f22b36b4ea7c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ee1165095c46cded09768fb2167df7483f49f2389d3a44a27528e920176429a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1165095c46cded09768fb2167df7483f49f2389d3a44a27528e920176429a3->enter($__internal_ee1165095c46cded09768fb2167df7483f49f2389d3a44a27528e920176429a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fb2d3d40dba8e76fed57b07a321d491bc684c42c14d8c4711f22b36b4ea7c0d->leave($__internal_9fb2d3d40dba8e76fed57b07a321d491bc684c42c14d8c4711f22b36b4ea7c0d_prof);

        
        $__internal_ee1165095c46cded09768fb2167df7483f49f2389d3a44a27528e920176429a3->leave($__internal_ee1165095c46cded09768fb2167df7483f49f2389d3a44a27528e920176429a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75d56d726ebf343ee2f250e7c965de19bcd1f413eb32084def6240b37c260a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d56d726ebf343ee2f250e7c965de19bcd1f413eb32084def6240b37c260a6b->enter($__internal_75d56d726ebf343ee2f250e7c965de19bcd1f413eb32084def6240b37c260a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30c3c64b76f1ac304463e087da300daffe7728cd6af7efb2c11e57b1d9771442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c3c64b76f1ac304463e087da300daffe7728cd6af7efb2c11e57b1d9771442->enter($__internal_30c3c64b76f1ac304463e087da300daffe7728cd6af7efb2c11e57b1d9771442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_30c3c64b76f1ac304463e087da300daffe7728cd6af7efb2c11e57b1d9771442->leave($__internal_30c3c64b76f1ac304463e087da300daffe7728cd6af7efb2c11e57b1d9771442_prof);

        
        $__internal_75d56d726ebf343ee2f250e7c965de19bcd1f413eb32084def6240b37c260a6b->leave($__internal_75d56d726ebf343ee2f250e7c965de19bcd1f413eb32084def6240b37c260a6b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c79c81cddcf8d58def9f2ec0bc89a69519f24afc12a972e50384ffea741eb75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79c81cddcf8d58def9f2ec0bc89a69519f24afc12a972e50384ffea741eb75d->enter($__internal_c79c81cddcf8d58def9f2ec0bc89a69519f24afc12a972e50384ffea741eb75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0f38f8fec905cda4da91a14219a21bb118fa698ca9930603f21cd0fec3efd390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f38f8fec905cda4da91a14219a21bb118fa698ca9930603f21cd0fec3efd390->enter($__internal_0f38f8fec905cda4da91a14219a21bb118fa698ca9930603f21cd0fec3efd390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0f38f8fec905cda4da91a14219a21bb118fa698ca9930603f21cd0fec3efd390->leave($__internal_0f38f8fec905cda4da91a14219a21bb118fa698ca9930603f21cd0fec3efd390_prof);

        
        $__internal_c79c81cddcf8d58def9f2ec0bc89a69519f24afc12a972e50384ffea741eb75d->leave($__internal_c79c81cddcf8d58def9f2ec0bc89a69519f24afc12a972e50384ffea741eb75d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_98ab98a5d67975ea2ab3f074ae8ea2c31a2a7453cfd47ed5f3a971f9d2491930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ab98a5d67975ea2ab3f074ae8ea2c31a2a7453cfd47ed5f3a971f9d2491930->enter($__internal_98ab98a5d67975ea2ab3f074ae8ea2c31a2a7453cfd47ed5f3a971f9d2491930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82dcfc1c6c28971cd407acbeed06a5f568536dc775a813d51624e9971f124b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82dcfc1c6c28971cd407acbeed06a5f568536dc775a813d51624e9971f124b9e->enter($__internal_82dcfc1c6c28971cd407acbeed06a5f568536dc775a813d51624e9971f124b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_82dcfc1c6c28971cd407acbeed06a5f568536dc775a813d51624e9971f124b9e->leave($__internal_82dcfc1c6c28971cd407acbeed06a5f568536dc775a813d51624e9971f124b9e_prof);

        
        $__internal_98ab98a5d67975ea2ab3f074ae8ea2c31a2a7453cfd47ed5f3a971f9d2491930->leave($__internal_98ab98a5d67975ea2ab3f074ae8ea2c31a2a7453cfd47ed5f3a971f9d2491930_prof);

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
