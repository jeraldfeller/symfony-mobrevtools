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
        $__internal_e84a15e2598d135762182b6ef40ce22f9c1aa44fd83f5d6e380792f85096b234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e84a15e2598d135762182b6ef40ce22f9c1aa44fd83f5d6e380792f85096b234->enter($__internal_e84a15e2598d135762182b6ef40ce22f9c1aa44fd83f5d6e380792f85096b234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b0522835d870e4c5b0a19b2c08ecd693e193c6843885d4111732231fb8e63abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0522835d870e4c5b0a19b2c08ecd693e193c6843885d4111732231fb8e63abf->enter($__internal_b0522835d870e4c5b0a19b2c08ecd693e193c6843885d4111732231fb8e63abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e84a15e2598d135762182b6ef40ce22f9c1aa44fd83f5d6e380792f85096b234->leave($__internal_e84a15e2598d135762182b6ef40ce22f9c1aa44fd83f5d6e380792f85096b234_prof);

        
        $__internal_b0522835d870e4c5b0a19b2c08ecd693e193c6843885d4111732231fb8e63abf->leave($__internal_b0522835d870e4c5b0a19b2c08ecd693e193c6843885d4111732231fb8e63abf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5148564d1338bba2896d1b1a0f60e88141fa83b41e85a82789e322c09d22aa8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5148564d1338bba2896d1b1a0f60e88141fa83b41e85a82789e322c09d22aa8e->enter($__internal_5148564d1338bba2896d1b1a0f60e88141fa83b41e85a82789e322c09d22aa8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1504fcfa25f572166b78c4cdcedce459d54ea42774e5172dcdc234d02307f7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1504fcfa25f572166b78c4cdcedce459d54ea42774e5172dcdc234d02307f7d4->enter($__internal_1504fcfa25f572166b78c4cdcedce459d54ea42774e5172dcdc234d02307f7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1504fcfa25f572166b78c4cdcedce459d54ea42774e5172dcdc234d02307f7d4->leave($__internal_1504fcfa25f572166b78c4cdcedce459d54ea42774e5172dcdc234d02307f7d4_prof);

        
        $__internal_5148564d1338bba2896d1b1a0f60e88141fa83b41e85a82789e322c09d22aa8e->leave($__internal_5148564d1338bba2896d1b1a0f60e88141fa83b41e85a82789e322c09d22aa8e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f912295aae83dd2fdcdd9c693fdd955849b1f0616605c78243b7887c991bb37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f912295aae83dd2fdcdd9c693fdd955849b1f0616605c78243b7887c991bb37d->enter($__internal_f912295aae83dd2fdcdd9c693fdd955849b1f0616605c78243b7887c991bb37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef86eb127ff55253d851afb40501f2fd838682c548bb64987e5e69eaf87148dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef86eb127ff55253d851afb40501f2fd838682c548bb64987e5e69eaf87148dc->enter($__internal_ef86eb127ff55253d851afb40501f2fd838682c548bb64987e5e69eaf87148dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ef86eb127ff55253d851afb40501f2fd838682c548bb64987e5e69eaf87148dc->leave($__internal_ef86eb127ff55253d851afb40501f2fd838682c548bb64987e5e69eaf87148dc_prof);

        
        $__internal_f912295aae83dd2fdcdd9c693fdd955849b1f0616605c78243b7887c991bb37d->leave($__internal_f912295aae83dd2fdcdd9c693fdd955849b1f0616605c78243b7887c991bb37d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67cca26212535572487ecf3ba5f3da7dbff3953bc4bd787ed62ea86ffe2e9e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67cca26212535572487ecf3ba5f3da7dbff3953bc4bd787ed62ea86ffe2e9e33->enter($__internal_67cca26212535572487ecf3ba5f3da7dbff3953bc4bd787ed62ea86ffe2e9e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f4514aa27a3f1794f4cc4bf91d0258828fb79a38c1b17ef48acd3d24a281f64e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4514aa27a3f1794f4cc4bf91d0258828fb79a38c1b17ef48acd3d24a281f64e->enter($__internal_f4514aa27a3f1794f4cc4bf91d0258828fb79a38c1b17ef48acd3d24a281f64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f4514aa27a3f1794f4cc4bf91d0258828fb79a38c1b17ef48acd3d24a281f64e->leave($__internal_f4514aa27a3f1794f4cc4bf91d0258828fb79a38c1b17ef48acd3d24a281f64e_prof);

        
        $__internal_67cca26212535572487ecf3ba5f3da7dbff3953bc4bd787ed62ea86ffe2e9e33->leave($__internal_67cca26212535572487ecf3ba5f3da7dbff3953bc4bd787ed62ea86ffe2e9e33_prof);

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
