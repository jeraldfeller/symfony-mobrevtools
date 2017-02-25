<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4d906b41c419cd60b60a5b877ec20488b7f480c37438477fe264a596ed445dca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_1e3dd0993258127dae80911e837b1b7109e8e21ffb3ac16c12dd40aec155eab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3dd0993258127dae80911e837b1b7109e8e21ffb3ac16c12dd40aec155eab2->enter($__internal_1e3dd0993258127dae80911e837b1b7109e8e21ffb3ac16c12dd40aec155eab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_606a7c3e65df23536cddb5ec7daab2a1a242f563ef1b921ece747a38d20a5ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606a7c3e65df23536cddb5ec7daab2a1a242f563ef1b921ece747a38d20a5ed7->enter($__internal_606a7c3e65df23536cddb5ec7daab2a1a242f563ef1b921ece747a38d20a5ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e3dd0993258127dae80911e837b1b7109e8e21ffb3ac16c12dd40aec155eab2->leave($__internal_1e3dd0993258127dae80911e837b1b7109e8e21ffb3ac16c12dd40aec155eab2_prof);

        
        $__internal_606a7c3e65df23536cddb5ec7daab2a1a242f563ef1b921ece747a38d20a5ed7->leave($__internal_606a7c3e65df23536cddb5ec7daab2a1a242f563ef1b921ece747a38d20a5ed7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9a31d9fe1a5165cdd7fd12aa812bb23473451d12f5a1427a62d805fde57bb23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a31d9fe1a5165cdd7fd12aa812bb23473451d12f5a1427a62d805fde57bb23->enter($__internal_d9a31d9fe1a5165cdd7fd12aa812bb23473451d12f5a1427a62d805fde57bb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_51c68f2445ca76ef2decb18f7dfe935bc7339842cfdc3c4231a361fccad7b90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c68f2445ca76ef2decb18f7dfe935bc7339842cfdc3c4231a361fccad7b90f->enter($__internal_51c68f2445ca76ef2decb18f7dfe935bc7339842cfdc3c4231a361fccad7b90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_51c68f2445ca76ef2decb18f7dfe935bc7339842cfdc3c4231a361fccad7b90f->leave($__internal_51c68f2445ca76ef2decb18f7dfe935bc7339842cfdc3c4231a361fccad7b90f_prof);

        
        $__internal_d9a31d9fe1a5165cdd7fd12aa812bb23473451d12f5a1427a62d805fde57bb23->leave($__internal_d9a31d9fe1a5165cdd7fd12aa812bb23473451d12f5a1427a62d805fde57bb23_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc3a4bd105e7b599059e0a3552a665253b404a1ba44a1d97abbf5275bdcbd5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3a4bd105e7b599059e0a3552a665253b404a1ba44a1d97abbf5275bdcbd5f0->enter($__internal_dc3a4bd105e7b599059e0a3552a665253b404a1ba44a1d97abbf5275bdcbd5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b050c8c3b5ecbe386f94969c0ebdc4dcac8e08f37ffa748686249f3ed1ae79f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b050c8c3b5ecbe386f94969c0ebdc4dcac8e08f37ffa748686249f3ed1ae79f9->enter($__internal_b050c8c3b5ecbe386f94969c0ebdc4dcac8e08f37ffa748686249f3ed1ae79f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b050c8c3b5ecbe386f94969c0ebdc4dcac8e08f37ffa748686249f3ed1ae79f9->leave($__internal_b050c8c3b5ecbe386f94969c0ebdc4dcac8e08f37ffa748686249f3ed1ae79f9_prof);

        
        $__internal_dc3a4bd105e7b599059e0a3552a665253b404a1ba44a1d97abbf5275bdcbd5f0->leave($__internal_dc3a4bd105e7b599059e0a3552a665253b404a1ba44a1d97abbf5275bdcbd5f0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6a8b87d9afd81006f0300c64e12e6a2ce9478beeb5fdce9ca0ce45f92cbc552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a8b87d9afd81006f0300c64e12e6a2ce9478beeb5fdce9ca0ce45f92cbc552->enter($__internal_c6a8b87d9afd81006f0300c64e12e6a2ce9478beeb5fdce9ca0ce45f92cbc552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d203ab8d82ea89443acf812a5aada301cd92bb9feb8d9cebf0675f37e1a18e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d203ab8d82ea89443acf812a5aada301cd92bb9feb8d9cebf0675f37e1a18e7c->enter($__internal_d203ab8d82ea89443acf812a5aada301cd92bb9feb8d9cebf0675f37e1a18e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d203ab8d82ea89443acf812a5aada301cd92bb9feb8d9cebf0675f37e1a18e7c->leave($__internal_d203ab8d82ea89443acf812a5aada301cd92bb9feb8d9cebf0675f37e1a18e7c_prof);

        
        $__internal_c6a8b87d9afd81006f0300c64e12e6a2ce9478beeb5fdce9ca0ce45f92cbc552->leave($__internal_c6a8b87d9afd81006f0300c64e12e6a2ce9478beeb5fdce9ca0ce45f92cbc552_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
