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
        $__internal_a17bed22a6b1dfb3001feab098b5548996b7a83df605fe49ff5744541c15eb30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a17bed22a6b1dfb3001feab098b5548996b7a83df605fe49ff5744541c15eb30->enter($__internal_a17bed22a6b1dfb3001feab098b5548996b7a83df605fe49ff5744541c15eb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_09b87872078ce43c5c1ff6ece2e522c34f772677f605a86f1976683f2a1481f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b87872078ce43c5c1ff6ece2e522c34f772677f605a86f1976683f2a1481f9->enter($__internal_09b87872078ce43c5c1ff6ece2e522c34f772677f605a86f1976683f2a1481f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a17bed22a6b1dfb3001feab098b5548996b7a83df605fe49ff5744541c15eb30->leave($__internal_a17bed22a6b1dfb3001feab098b5548996b7a83df605fe49ff5744541c15eb30_prof);

        
        $__internal_09b87872078ce43c5c1ff6ece2e522c34f772677f605a86f1976683f2a1481f9->leave($__internal_09b87872078ce43c5c1ff6ece2e522c34f772677f605a86f1976683f2a1481f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a0c0e2c2da5b33a20e99c5d942fd7a1ad02d3d34df2734a4463621bc277b70e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0c0e2c2da5b33a20e99c5d942fd7a1ad02d3d34df2734a4463621bc277b70e->enter($__internal_9a0c0e2c2da5b33a20e99c5d942fd7a1ad02d3d34df2734a4463621bc277b70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a3c3ce7e679b841dd4c39480dbcb9b428d64fabfca1db70de4567635eb4a3db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c3ce7e679b841dd4c39480dbcb9b428d64fabfca1db70de4567635eb4a3db4->enter($__internal_a3c3ce7e679b841dd4c39480dbcb9b428d64fabfca1db70de4567635eb4a3db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a3c3ce7e679b841dd4c39480dbcb9b428d64fabfca1db70de4567635eb4a3db4->leave($__internal_a3c3ce7e679b841dd4c39480dbcb9b428d64fabfca1db70de4567635eb4a3db4_prof);

        
        $__internal_9a0c0e2c2da5b33a20e99c5d942fd7a1ad02d3d34df2734a4463621bc277b70e->leave($__internal_9a0c0e2c2da5b33a20e99c5d942fd7a1ad02d3d34df2734a4463621bc277b70e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86d777663a7edec16f70648ffa2f9d5a8df3be1534dc6c7ee2bc56980bb3459f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d777663a7edec16f70648ffa2f9d5a8df3be1534dc6c7ee2bc56980bb3459f->enter($__internal_86d777663a7edec16f70648ffa2f9d5a8df3be1534dc6c7ee2bc56980bb3459f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9a79dfa5634394324b6120ecba537846a6b1e6323cba83ae3bc9ca4eed9b5112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a79dfa5634394324b6120ecba537846a6b1e6323cba83ae3bc9ca4eed9b5112->enter($__internal_9a79dfa5634394324b6120ecba537846a6b1e6323cba83ae3bc9ca4eed9b5112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9a79dfa5634394324b6120ecba537846a6b1e6323cba83ae3bc9ca4eed9b5112->leave($__internal_9a79dfa5634394324b6120ecba537846a6b1e6323cba83ae3bc9ca4eed9b5112_prof);

        
        $__internal_86d777663a7edec16f70648ffa2f9d5a8df3be1534dc6c7ee2bc56980bb3459f->leave($__internal_86d777663a7edec16f70648ffa2f9d5a8df3be1534dc6c7ee2bc56980bb3459f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_30199884994fbbeff3320f504228618b333be7f52150fadabc54c68f401a9478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30199884994fbbeff3320f504228618b333be7f52150fadabc54c68f401a9478->enter($__internal_30199884994fbbeff3320f504228618b333be7f52150fadabc54c68f401a9478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ba769109da7a93c9a62844a01187d13529d59c823ddd0a723ce2189047508258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba769109da7a93c9a62844a01187d13529d59c823ddd0a723ce2189047508258->enter($__internal_ba769109da7a93c9a62844a01187d13529d59c823ddd0a723ce2189047508258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ba769109da7a93c9a62844a01187d13529d59c823ddd0a723ce2189047508258->leave($__internal_ba769109da7a93c9a62844a01187d13529d59c823ddd0a723ce2189047508258_prof);

        
        $__internal_30199884994fbbeff3320f504228618b333be7f52150fadabc54c68f401a9478->leave($__internal_30199884994fbbeff3320f504228618b333be7f52150fadabc54c68f401a9478_prof);

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
