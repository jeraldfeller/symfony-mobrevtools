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
        $__internal_1b22942da548b4975bf0c051cffda92a440cb0e496c0a47a097e0c1cdb639230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b22942da548b4975bf0c051cffda92a440cb0e496c0a47a097e0c1cdb639230->enter($__internal_1b22942da548b4975bf0c051cffda92a440cb0e496c0a47a097e0c1cdb639230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_095a445235fde06e3ee16960fde8ce2e8a52849c7a1af5de7d3d6d43e73132b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095a445235fde06e3ee16960fde8ce2e8a52849c7a1af5de7d3d6d43e73132b8->enter($__internal_095a445235fde06e3ee16960fde8ce2e8a52849c7a1af5de7d3d6d43e73132b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b22942da548b4975bf0c051cffda92a440cb0e496c0a47a097e0c1cdb639230->leave($__internal_1b22942da548b4975bf0c051cffda92a440cb0e496c0a47a097e0c1cdb639230_prof);

        
        $__internal_095a445235fde06e3ee16960fde8ce2e8a52849c7a1af5de7d3d6d43e73132b8->leave($__internal_095a445235fde06e3ee16960fde8ce2e8a52849c7a1af5de7d3d6d43e73132b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_60815edc3b7f2d5ef9a8e821b7c3ba1c21c77b838971a01dfee83a6b571f4785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60815edc3b7f2d5ef9a8e821b7c3ba1c21c77b838971a01dfee83a6b571f4785->enter($__internal_60815edc3b7f2d5ef9a8e821b7c3ba1c21c77b838971a01dfee83a6b571f4785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e7220874cdbab4ecba73343642aaa246546e5dee40c20cfa8e444b4c31379e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7220874cdbab4ecba73343642aaa246546e5dee40c20cfa8e444b4c31379e84->enter($__internal_e7220874cdbab4ecba73343642aaa246546e5dee40c20cfa8e444b4c31379e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e7220874cdbab4ecba73343642aaa246546e5dee40c20cfa8e444b4c31379e84->leave($__internal_e7220874cdbab4ecba73343642aaa246546e5dee40c20cfa8e444b4c31379e84_prof);

        
        $__internal_60815edc3b7f2d5ef9a8e821b7c3ba1c21c77b838971a01dfee83a6b571f4785->leave($__internal_60815edc3b7f2d5ef9a8e821b7c3ba1c21c77b838971a01dfee83a6b571f4785_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b53251ece9b643cd3ed1500ade6092f45e34e99b5fd1c93da4287d52ba99465d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53251ece9b643cd3ed1500ade6092f45e34e99b5fd1c93da4287d52ba99465d->enter($__internal_b53251ece9b643cd3ed1500ade6092f45e34e99b5fd1c93da4287d52ba99465d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_14ec1d4198343c6effb96ef6d778c36f9a89072ab4a4ccf3e7929e7ca6580ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ec1d4198343c6effb96ef6d778c36f9a89072ab4a4ccf3e7929e7ca6580ae8->enter($__internal_14ec1d4198343c6effb96ef6d778c36f9a89072ab4a4ccf3e7929e7ca6580ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_14ec1d4198343c6effb96ef6d778c36f9a89072ab4a4ccf3e7929e7ca6580ae8->leave($__internal_14ec1d4198343c6effb96ef6d778c36f9a89072ab4a4ccf3e7929e7ca6580ae8_prof);

        
        $__internal_b53251ece9b643cd3ed1500ade6092f45e34e99b5fd1c93da4287d52ba99465d->leave($__internal_b53251ece9b643cd3ed1500ade6092f45e34e99b5fd1c93da4287d52ba99465d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b49b131abd6ef15ea74ab265065b0d63c8f1df46112816bd293cdf81b399c626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49b131abd6ef15ea74ab265065b0d63c8f1df46112816bd293cdf81b399c626->enter($__internal_b49b131abd6ef15ea74ab265065b0d63c8f1df46112816bd293cdf81b399c626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_13b5fd4234d8fef4e7be7c88f540777381b636e9f83fac8c98b39c4e3aaa9bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b5fd4234d8fef4e7be7c88f540777381b636e9f83fac8c98b39c4e3aaa9bbe->enter($__internal_13b5fd4234d8fef4e7be7c88f540777381b636e9f83fac8c98b39c4e3aaa9bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_13b5fd4234d8fef4e7be7c88f540777381b636e9f83fac8c98b39c4e3aaa9bbe->leave($__internal_13b5fd4234d8fef4e7be7c88f540777381b636e9f83fac8c98b39c4e3aaa9bbe_prof);

        
        $__internal_b49b131abd6ef15ea74ab265065b0d63c8f1df46112816bd293cdf81b399c626->leave($__internal_b49b131abd6ef15ea74ab265065b0d63c8f1df46112816bd293cdf81b399c626_prof);

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
