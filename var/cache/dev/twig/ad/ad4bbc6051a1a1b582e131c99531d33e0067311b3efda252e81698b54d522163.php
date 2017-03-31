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
        $__internal_75f4a14cad558cef17666218fc63c33a8209586dadfb04d8dcbdc8e14ef5a1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f4a14cad558cef17666218fc63c33a8209586dadfb04d8dcbdc8e14ef5a1df->enter($__internal_75f4a14cad558cef17666218fc63c33a8209586dadfb04d8dcbdc8e14ef5a1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_56865aa0e4e00c69dc0df48f77bb3aba6cb1fa605a60a359a0589c9d67754503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56865aa0e4e00c69dc0df48f77bb3aba6cb1fa605a60a359a0589c9d67754503->enter($__internal_56865aa0e4e00c69dc0df48f77bb3aba6cb1fa605a60a359a0589c9d67754503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75f4a14cad558cef17666218fc63c33a8209586dadfb04d8dcbdc8e14ef5a1df->leave($__internal_75f4a14cad558cef17666218fc63c33a8209586dadfb04d8dcbdc8e14ef5a1df_prof);

        
        $__internal_56865aa0e4e00c69dc0df48f77bb3aba6cb1fa605a60a359a0589c9d67754503->leave($__internal_56865aa0e4e00c69dc0df48f77bb3aba6cb1fa605a60a359a0589c9d67754503_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7443261e161e63323ba5366df662f2fcafba369aea41d57ac427c9bf551c253b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7443261e161e63323ba5366df662f2fcafba369aea41d57ac427c9bf551c253b->enter($__internal_7443261e161e63323ba5366df662f2fcafba369aea41d57ac427c9bf551c253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_238eb7a9cf35756aef5b8c805f695b1d878b4a802742498c84c0e89aaf9070e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238eb7a9cf35756aef5b8c805f695b1d878b4a802742498c84c0e89aaf9070e0->enter($__internal_238eb7a9cf35756aef5b8c805f695b1d878b4a802742498c84c0e89aaf9070e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_238eb7a9cf35756aef5b8c805f695b1d878b4a802742498c84c0e89aaf9070e0->leave($__internal_238eb7a9cf35756aef5b8c805f695b1d878b4a802742498c84c0e89aaf9070e0_prof);

        
        $__internal_7443261e161e63323ba5366df662f2fcafba369aea41d57ac427c9bf551c253b->leave($__internal_7443261e161e63323ba5366df662f2fcafba369aea41d57ac427c9bf551c253b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c7b76496c4147ac68ac13d751a9b4326ad41b7a2a0292ca00cc7a60b7209dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7b76496c4147ac68ac13d751a9b4326ad41b7a2a0292ca00cc7a60b7209dc6->enter($__internal_8c7b76496c4147ac68ac13d751a9b4326ad41b7a2a0292ca00cc7a60b7209dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f5ce154cf7b82470303b2acee6a1343137b58f48b8a5e5ed26910460f8f82fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ce154cf7b82470303b2acee6a1343137b58f48b8a5e5ed26910460f8f82fd9->enter($__internal_f5ce154cf7b82470303b2acee6a1343137b58f48b8a5e5ed26910460f8f82fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f5ce154cf7b82470303b2acee6a1343137b58f48b8a5e5ed26910460f8f82fd9->leave($__internal_f5ce154cf7b82470303b2acee6a1343137b58f48b8a5e5ed26910460f8f82fd9_prof);

        
        $__internal_8c7b76496c4147ac68ac13d751a9b4326ad41b7a2a0292ca00cc7a60b7209dc6->leave($__internal_8c7b76496c4147ac68ac13d751a9b4326ad41b7a2a0292ca00cc7a60b7209dc6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d68f3e99fafff3bf936c0b9a65831ef7d9db84fafe37afb6a8aa299d3645d7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d68f3e99fafff3bf936c0b9a65831ef7d9db84fafe37afb6a8aa299d3645d7f2->enter($__internal_d68f3e99fafff3bf936c0b9a65831ef7d9db84fafe37afb6a8aa299d3645d7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c2d7eaaa3c14fb9bbd359dd93c1717aadc82042af5cf87ac011d2f9b456e9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2d7eaaa3c14fb9bbd359dd93c1717aadc82042af5cf87ac011d2f9b456e9c5->enter($__internal_7c2d7eaaa3c14fb9bbd359dd93c1717aadc82042af5cf87ac011d2f9b456e9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7c2d7eaaa3c14fb9bbd359dd93c1717aadc82042af5cf87ac011d2f9b456e9c5->leave($__internal_7c2d7eaaa3c14fb9bbd359dd93c1717aadc82042af5cf87ac011d2f9b456e9c5_prof);

        
        $__internal_d68f3e99fafff3bf936c0b9a65831ef7d9db84fafe37afb6a8aa299d3645d7f2->leave($__internal_d68f3e99fafff3bf936c0b9a65831ef7d9db84fafe37afb6a8aa299d3645d7f2_prof);

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
