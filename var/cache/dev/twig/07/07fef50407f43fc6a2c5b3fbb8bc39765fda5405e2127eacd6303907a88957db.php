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
        $__internal_3a1d3c7f1981b83f718c78ee8b93215acc12ecd140c32d75c6458985cf656ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1d3c7f1981b83f718c78ee8b93215acc12ecd140c32d75c6458985cf656ba7->enter($__internal_3a1d3c7f1981b83f718c78ee8b93215acc12ecd140c32d75c6458985cf656ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_64a989d2bfd8182f379e9a7a8eb878f737532a3bfc0142fa0f387a6c88769fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a989d2bfd8182f379e9a7a8eb878f737532a3bfc0142fa0f387a6c88769fb8->enter($__internal_64a989d2bfd8182f379e9a7a8eb878f737532a3bfc0142fa0f387a6c88769fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a1d3c7f1981b83f718c78ee8b93215acc12ecd140c32d75c6458985cf656ba7->leave($__internal_3a1d3c7f1981b83f718c78ee8b93215acc12ecd140c32d75c6458985cf656ba7_prof);

        
        $__internal_64a989d2bfd8182f379e9a7a8eb878f737532a3bfc0142fa0f387a6c88769fb8->leave($__internal_64a989d2bfd8182f379e9a7a8eb878f737532a3bfc0142fa0f387a6c88769fb8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c4540c3f7407987287275c74757082de7f95bb67854a9c3ffea9068c02eb50f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c4540c3f7407987287275c74757082de7f95bb67854a9c3ffea9068c02eb50f->enter($__internal_1c4540c3f7407987287275c74757082de7f95bb67854a9c3ffea9068c02eb50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6767710f495f521bc8e03cdf3b8b9aa2b107ec418220b1988a51c6bf5527d920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6767710f495f521bc8e03cdf3b8b9aa2b107ec418220b1988a51c6bf5527d920->enter($__internal_6767710f495f521bc8e03cdf3b8b9aa2b107ec418220b1988a51c6bf5527d920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6767710f495f521bc8e03cdf3b8b9aa2b107ec418220b1988a51c6bf5527d920->leave($__internal_6767710f495f521bc8e03cdf3b8b9aa2b107ec418220b1988a51c6bf5527d920_prof);

        
        $__internal_1c4540c3f7407987287275c74757082de7f95bb67854a9c3ffea9068c02eb50f->leave($__internal_1c4540c3f7407987287275c74757082de7f95bb67854a9c3ffea9068c02eb50f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6d4bcded4e666eb162c7fe37b2d28da7d4522ea3ceb8a9ca6e280cc1e4be343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d4bcded4e666eb162c7fe37b2d28da7d4522ea3ceb8a9ca6e280cc1e4be343->enter($__internal_a6d4bcded4e666eb162c7fe37b2d28da7d4522ea3ceb8a9ca6e280cc1e4be343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a38da8a28d64202a3e4d8304558314563e8ddc3869d74df47a422fa488bd5c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38da8a28d64202a3e4d8304558314563e8ddc3869d74df47a422fa488bd5c59->enter($__internal_a38da8a28d64202a3e4d8304558314563e8ddc3869d74df47a422fa488bd5c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a38da8a28d64202a3e4d8304558314563e8ddc3869d74df47a422fa488bd5c59->leave($__internal_a38da8a28d64202a3e4d8304558314563e8ddc3869d74df47a422fa488bd5c59_prof);

        
        $__internal_a6d4bcded4e666eb162c7fe37b2d28da7d4522ea3ceb8a9ca6e280cc1e4be343->leave($__internal_a6d4bcded4e666eb162c7fe37b2d28da7d4522ea3ceb8a9ca6e280cc1e4be343_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f518b6b0fe005e596f9304bd4b403103f79f80eba03407accfd34f6b7cab7bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f518b6b0fe005e596f9304bd4b403103f79f80eba03407accfd34f6b7cab7bc->enter($__internal_0f518b6b0fe005e596f9304bd4b403103f79f80eba03407accfd34f6b7cab7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_13094372b13c751ed4ecdc80047ba0f5bb7f62e9a07ee97f4ee1954b20330aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13094372b13c751ed4ecdc80047ba0f5bb7f62e9a07ee97f4ee1954b20330aba->enter($__internal_13094372b13c751ed4ecdc80047ba0f5bb7f62e9a07ee97f4ee1954b20330aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_13094372b13c751ed4ecdc80047ba0f5bb7f62e9a07ee97f4ee1954b20330aba->leave($__internal_13094372b13c751ed4ecdc80047ba0f5bb7f62e9a07ee97f4ee1954b20330aba_prof);

        
        $__internal_0f518b6b0fe005e596f9304bd4b403103f79f80eba03407accfd34f6b7cab7bc->leave($__internal_0f518b6b0fe005e596f9304bd4b403103f79f80eba03407accfd34f6b7cab7bc_prof);

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
