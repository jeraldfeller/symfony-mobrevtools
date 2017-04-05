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
        $__internal_cb52bcfbf121726a27469ac7fc83177de710d3bf7f5567741e4dfa6a5126b2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb52bcfbf121726a27469ac7fc83177de710d3bf7f5567741e4dfa6a5126b2c0->enter($__internal_cb52bcfbf121726a27469ac7fc83177de710d3bf7f5567741e4dfa6a5126b2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_1a42cbe3fd413718d6e6a10bc4ada8a7dedc19225534a81ea50d34523f0117d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a42cbe3fd413718d6e6a10bc4ada8a7dedc19225534a81ea50d34523f0117d6->enter($__internal_1a42cbe3fd413718d6e6a10bc4ada8a7dedc19225534a81ea50d34523f0117d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb52bcfbf121726a27469ac7fc83177de710d3bf7f5567741e4dfa6a5126b2c0->leave($__internal_cb52bcfbf121726a27469ac7fc83177de710d3bf7f5567741e4dfa6a5126b2c0_prof);

        
        $__internal_1a42cbe3fd413718d6e6a10bc4ada8a7dedc19225534a81ea50d34523f0117d6->leave($__internal_1a42cbe3fd413718d6e6a10bc4ada8a7dedc19225534a81ea50d34523f0117d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2abc3cb678abb8a42c36df5cc579f159ee031f379e439b21e628009547f4a0af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2abc3cb678abb8a42c36df5cc579f159ee031f379e439b21e628009547f4a0af->enter($__internal_2abc3cb678abb8a42c36df5cc579f159ee031f379e439b21e628009547f4a0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d6f4a0858693b0352fb9b8e4464075387d9580d66377ce9d96d8f82b9c5c230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6f4a0858693b0352fb9b8e4464075387d9580d66377ce9d96d8f82b9c5c230->enter($__internal_0d6f4a0858693b0352fb9b8e4464075387d9580d66377ce9d96d8f82b9c5c230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0d6f4a0858693b0352fb9b8e4464075387d9580d66377ce9d96d8f82b9c5c230->leave($__internal_0d6f4a0858693b0352fb9b8e4464075387d9580d66377ce9d96d8f82b9c5c230_prof);

        
        $__internal_2abc3cb678abb8a42c36df5cc579f159ee031f379e439b21e628009547f4a0af->leave($__internal_2abc3cb678abb8a42c36df5cc579f159ee031f379e439b21e628009547f4a0af_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f8426ef0d186f847d48b8bdd4c9a2b2b638fff3bb0ef9abb5128896257ff746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8426ef0d186f847d48b8bdd4c9a2b2b638fff3bb0ef9abb5128896257ff746->enter($__internal_3f8426ef0d186f847d48b8bdd4c9a2b2b638fff3bb0ef9abb5128896257ff746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8c946f0734d11d82c8bbb109f2f18b73b7b8b89d570d35cb32083add9cb31977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c946f0734d11d82c8bbb109f2f18b73b7b8b89d570d35cb32083add9cb31977->enter($__internal_8c946f0734d11d82c8bbb109f2f18b73b7b8b89d570d35cb32083add9cb31977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8c946f0734d11d82c8bbb109f2f18b73b7b8b89d570d35cb32083add9cb31977->leave($__internal_8c946f0734d11d82c8bbb109f2f18b73b7b8b89d570d35cb32083add9cb31977_prof);

        
        $__internal_3f8426ef0d186f847d48b8bdd4c9a2b2b638fff3bb0ef9abb5128896257ff746->leave($__internal_3f8426ef0d186f847d48b8bdd4c9a2b2b638fff3bb0ef9abb5128896257ff746_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cd0df58b2729df0f4b66c9f79300f53e9508f966dec03edcc266fabf9822493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd0df58b2729df0f4b66c9f79300f53e9508f966dec03edcc266fabf9822493->enter($__internal_5cd0df58b2729df0f4b66c9f79300f53e9508f966dec03edcc266fabf9822493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a75a18e16ea95dddcd6c91bdefa595591ecf51441c1dc84ad049ddaaf8a1416e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75a18e16ea95dddcd6c91bdefa595591ecf51441c1dc84ad049ddaaf8a1416e->enter($__internal_a75a18e16ea95dddcd6c91bdefa595591ecf51441c1dc84ad049ddaaf8a1416e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a75a18e16ea95dddcd6c91bdefa595591ecf51441c1dc84ad049ddaaf8a1416e->leave($__internal_a75a18e16ea95dddcd6c91bdefa595591ecf51441c1dc84ad049ddaaf8a1416e_prof);

        
        $__internal_5cd0df58b2729df0f4b66c9f79300f53e9508f966dec03edcc266fabf9822493->leave($__internal_5cd0df58b2729df0f4b66c9f79300f53e9508f966dec03edcc266fabf9822493_prof);

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
