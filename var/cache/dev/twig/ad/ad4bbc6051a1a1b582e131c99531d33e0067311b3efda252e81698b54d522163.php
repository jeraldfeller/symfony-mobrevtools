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
        $__internal_3479d698db67c79c69e14d668a805eb63c2a3a4d44f5eb0e51175f5c3cbc77a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3479d698db67c79c69e14d668a805eb63c2a3a4d44f5eb0e51175f5c3cbc77a7->enter($__internal_3479d698db67c79c69e14d668a805eb63c2a3a4d44f5eb0e51175f5c3cbc77a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_92d7bfe0aec8e50c1a027fe1d7539f8bd9f10f5c8282016589d6f6af49468517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d7bfe0aec8e50c1a027fe1d7539f8bd9f10f5c8282016589d6f6af49468517->enter($__internal_92d7bfe0aec8e50c1a027fe1d7539f8bd9f10f5c8282016589d6f6af49468517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3479d698db67c79c69e14d668a805eb63c2a3a4d44f5eb0e51175f5c3cbc77a7->leave($__internal_3479d698db67c79c69e14d668a805eb63c2a3a4d44f5eb0e51175f5c3cbc77a7_prof);

        
        $__internal_92d7bfe0aec8e50c1a027fe1d7539f8bd9f10f5c8282016589d6f6af49468517->leave($__internal_92d7bfe0aec8e50c1a027fe1d7539f8bd9f10f5c8282016589d6f6af49468517_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d513a7e2411ec630dfaf79088be78574792e0b1395a7c78efd06a89810d957f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d513a7e2411ec630dfaf79088be78574792e0b1395a7c78efd06a89810d957f->enter($__internal_9d513a7e2411ec630dfaf79088be78574792e0b1395a7c78efd06a89810d957f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0bd3f670e5a5d14ce46e5e12196e5c314e5f704ea22b3d70daa78d2d110dc396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd3f670e5a5d14ce46e5e12196e5c314e5f704ea22b3d70daa78d2d110dc396->enter($__internal_0bd3f670e5a5d14ce46e5e12196e5c314e5f704ea22b3d70daa78d2d110dc396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0bd3f670e5a5d14ce46e5e12196e5c314e5f704ea22b3d70daa78d2d110dc396->leave($__internal_0bd3f670e5a5d14ce46e5e12196e5c314e5f704ea22b3d70daa78d2d110dc396_prof);

        
        $__internal_9d513a7e2411ec630dfaf79088be78574792e0b1395a7c78efd06a89810d957f->leave($__internal_9d513a7e2411ec630dfaf79088be78574792e0b1395a7c78efd06a89810d957f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b3f41bc557d2c3b8931ce60f766eced3aad81a3cd4deb1f49ebc4872159dfa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3f41bc557d2c3b8931ce60f766eced3aad81a3cd4deb1f49ebc4872159dfa3->enter($__internal_9b3f41bc557d2c3b8931ce60f766eced3aad81a3cd4deb1f49ebc4872159dfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4f73af8275afbe03e6a6fd9af2f9a341478d4802003c42388cfead2af62760a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f73af8275afbe03e6a6fd9af2f9a341478d4802003c42388cfead2af62760a4->enter($__internal_4f73af8275afbe03e6a6fd9af2f9a341478d4802003c42388cfead2af62760a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4f73af8275afbe03e6a6fd9af2f9a341478d4802003c42388cfead2af62760a4->leave($__internal_4f73af8275afbe03e6a6fd9af2f9a341478d4802003c42388cfead2af62760a4_prof);

        
        $__internal_9b3f41bc557d2c3b8931ce60f766eced3aad81a3cd4deb1f49ebc4872159dfa3->leave($__internal_9b3f41bc557d2c3b8931ce60f766eced3aad81a3cd4deb1f49ebc4872159dfa3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75fcd41fa0fd9239912edf4269421123658bbf796e639ac505ae13f28ef7eb46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fcd41fa0fd9239912edf4269421123658bbf796e639ac505ae13f28ef7eb46->enter($__internal_75fcd41fa0fd9239912edf4269421123658bbf796e639ac505ae13f28ef7eb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3a36bdc624c5076e0bc2863aa4f4b2a3a1f3619324997e8134dca0f1f9e35bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a36bdc624c5076e0bc2863aa4f4b2a3a1f3619324997e8134dca0f1f9e35bd8->enter($__internal_3a36bdc624c5076e0bc2863aa4f4b2a3a1f3619324997e8134dca0f1f9e35bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3a36bdc624c5076e0bc2863aa4f4b2a3a1f3619324997e8134dca0f1f9e35bd8->leave($__internal_3a36bdc624c5076e0bc2863aa4f4b2a3a1f3619324997e8134dca0f1f9e35bd8_prof);

        
        $__internal_75fcd41fa0fd9239912edf4269421123658bbf796e639ac505ae13f28ef7eb46->leave($__internal_75fcd41fa0fd9239912edf4269421123658bbf796e639ac505ae13f28ef7eb46_prof);

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
