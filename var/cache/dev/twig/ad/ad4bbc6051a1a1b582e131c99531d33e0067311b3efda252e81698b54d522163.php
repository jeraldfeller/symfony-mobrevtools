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
        $__internal_900d99c5ce451cade6652368a97719893627a63c78832d4c43cc09afbc4fbe3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900d99c5ce451cade6652368a97719893627a63c78832d4c43cc09afbc4fbe3e->enter($__internal_900d99c5ce451cade6652368a97719893627a63c78832d4c43cc09afbc4fbe3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_30d5bff658586639124a38fe50f9ca6e011a8feec5029f4d468e6c5aed49cc53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d5bff658586639124a38fe50f9ca6e011a8feec5029f4d468e6c5aed49cc53->enter($__internal_30d5bff658586639124a38fe50f9ca6e011a8feec5029f4d468e6c5aed49cc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_900d99c5ce451cade6652368a97719893627a63c78832d4c43cc09afbc4fbe3e->leave($__internal_900d99c5ce451cade6652368a97719893627a63c78832d4c43cc09afbc4fbe3e_prof);

        
        $__internal_30d5bff658586639124a38fe50f9ca6e011a8feec5029f4d468e6c5aed49cc53->leave($__internal_30d5bff658586639124a38fe50f9ca6e011a8feec5029f4d468e6c5aed49cc53_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48a3bf875becfcd4b3c8165e04a919fcf9a8aa95df4c006157e960453fe79ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a3bf875becfcd4b3c8165e04a919fcf9a8aa95df4c006157e960453fe79ccc->enter($__internal_48a3bf875becfcd4b3c8165e04a919fcf9a8aa95df4c006157e960453fe79ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_970c51d9f9fb03a4d16700996c348413cb1ba599f5cb4c88c892306db65eb23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970c51d9f9fb03a4d16700996c348413cb1ba599f5cb4c88c892306db65eb23c->enter($__internal_970c51d9f9fb03a4d16700996c348413cb1ba599f5cb4c88c892306db65eb23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_970c51d9f9fb03a4d16700996c348413cb1ba599f5cb4c88c892306db65eb23c->leave($__internal_970c51d9f9fb03a4d16700996c348413cb1ba599f5cb4c88c892306db65eb23c_prof);

        
        $__internal_48a3bf875becfcd4b3c8165e04a919fcf9a8aa95df4c006157e960453fe79ccc->leave($__internal_48a3bf875becfcd4b3c8165e04a919fcf9a8aa95df4c006157e960453fe79ccc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62f3f07583a0716d76a309752a12f11341c647a0f7d38b43fd9be5eb5e2101c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62f3f07583a0716d76a309752a12f11341c647a0f7d38b43fd9be5eb5e2101c1->enter($__internal_62f3f07583a0716d76a309752a12f11341c647a0f7d38b43fd9be5eb5e2101c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bb8e210c0fdbb3cd56b9a07aa804ed0d90435854b7f0ad476b9b900b151d0b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8e210c0fdbb3cd56b9a07aa804ed0d90435854b7f0ad476b9b900b151d0b76->enter($__internal_bb8e210c0fdbb3cd56b9a07aa804ed0d90435854b7f0ad476b9b900b151d0b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bb8e210c0fdbb3cd56b9a07aa804ed0d90435854b7f0ad476b9b900b151d0b76->leave($__internal_bb8e210c0fdbb3cd56b9a07aa804ed0d90435854b7f0ad476b9b900b151d0b76_prof);

        
        $__internal_62f3f07583a0716d76a309752a12f11341c647a0f7d38b43fd9be5eb5e2101c1->leave($__internal_62f3f07583a0716d76a309752a12f11341c647a0f7d38b43fd9be5eb5e2101c1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d65916c54fb132d97c6f91d49f7af8054e94d5123e8516fa26985aff2a21774b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65916c54fb132d97c6f91d49f7af8054e94d5123e8516fa26985aff2a21774b->enter($__internal_d65916c54fb132d97c6f91d49f7af8054e94d5123e8516fa26985aff2a21774b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_662d7650c78ed43db9ee99be3038415cc8201b65d74ee01034a517e43ab762f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662d7650c78ed43db9ee99be3038415cc8201b65d74ee01034a517e43ab762f3->enter($__internal_662d7650c78ed43db9ee99be3038415cc8201b65d74ee01034a517e43ab762f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_662d7650c78ed43db9ee99be3038415cc8201b65d74ee01034a517e43ab762f3->leave($__internal_662d7650c78ed43db9ee99be3038415cc8201b65d74ee01034a517e43ab762f3_prof);

        
        $__internal_d65916c54fb132d97c6f91d49f7af8054e94d5123e8516fa26985aff2a21774b->leave($__internal_d65916c54fb132d97c6f91d49f7af8054e94d5123e8516fa26985aff2a21774b_prof);

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
