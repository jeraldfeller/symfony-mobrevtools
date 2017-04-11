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
        $__internal_3d3186d99a89bbbb157afc25a0a8983abd184c0b4cdc50d0fbab99845eb4ea70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3186d99a89bbbb157afc25a0a8983abd184c0b4cdc50d0fbab99845eb4ea70->enter($__internal_3d3186d99a89bbbb157afc25a0a8983abd184c0b4cdc50d0fbab99845eb4ea70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d93d47f3e12b3f05fb94a29b0f1a50c54b3019939f58f25baa92eaa8f0688e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93d47f3e12b3f05fb94a29b0f1a50c54b3019939f58f25baa92eaa8f0688e98->enter($__internal_d93d47f3e12b3f05fb94a29b0f1a50c54b3019939f58f25baa92eaa8f0688e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3186d99a89bbbb157afc25a0a8983abd184c0b4cdc50d0fbab99845eb4ea70->leave($__internal_3d3186d99a89bbbb157afc25a0a8983abd184c0b4cdc50d0fbab99845eb4ea70_prof);

        
        $__internal_d93d47f3e12b3f05fb94a29b0f1a50c54b3019939f58f25baa92eaa8f0688e98->leave($__internal_d93d47f3e12b3f05fb94a29b0f1a50c54b3019939f58f25baa92eaa8f0688e98_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28002074a9215f42f696e18f660964aac9d6bca1c2395d17d5d871f0919d7488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28002074a9215f42f696e18f660964aac9d6bca1c2395d17d5d871f0919d7488->enter($__internal_28002074a9215f42f696e18f660964aac9d6bca1c2395d17d5d871f0919d7488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eefa4cffb436a7c9ae897483633be31fd9a57c71226052a4e67dc0bbfec429b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eefa4cffb436a7c9ae897483633be31fd9a57c71226052a4e67dc0bbfec429b9->enter($__internal_eefa4cffb436a7c9ae897483633be31fd9a57c71226052a4e67dc0bbfec429b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eefa4cffb436a7c9ae897483633be31fd9a57c71226052a4e67dc0bbfec429b9->leave($__internal_eefa4cffb436a7c9ae897483633be31fd9a57c71226052a4e67dc0bbfec429b9_prof);

        
        $__internal_28002074a9215f42f696e18f660964aac9d6bca1c2395d17d5d871f0919d7488->leave($__internal_28002074a9215f42f696e18f660964aac9d6bca1c2395d17d5d871f0919d7488_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0cec8dbdec97664d81bb1d35dd994d02c813918b8a3ee299bb059cf0a7ff8ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cec8dbdec97664d81bb1d35dd994d02c813918b8a3ee299bb059cf0a7ff8ab6->enter($__internal_0cec8dbdec97664d81bb1d35dd994d02c813918b8a3ee299bb059cf0a7ff8ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_518bbac26e8c7b94a1ff4e1af98ec44e9a28b19a1f82d35479709381466affbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518bbac26e8c7b94a1ff4e1af98ec44e9a28b19a1f82d35479709381466affbf->enter($__internal_518bbac26e8c7b94a1ff4e1af98ec44e9a28b19a1f82d35479709381466affbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_518bbac26e8c7b94a1ff4e1af98ec44e9a28b19a1f82d35479709381466affbf->leave($__internal_518bbac26e8c7b94a1ff4e1af98ec44e9a28b19a1f82d35479709381466affbf_prof);

        
        $__internal_0cec8dbdec97664d81bb1d35dd994d02c813918b8a3ee299bb059cf0a7ff8ab6->leave($__internal_0cec8dbdec97664d81bb1d35dd994d02c813918b8a3ee299bb059cf0a7ff8ab6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ad28b56b356e0b1e8e93947e170537856f6cd922a5f6e9e35062ea34f1d8379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad28b56b356e0b1e8e93947e170537856f6cd922a5f6e9e35062ea34f1d8379->enter($__internal_5ad28b56b356e0b1e8e93947e170537856f6cd922a5f6e9e35062ea34f1d8379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca76affa13f655c91338f762080f877c77c12ec791b659122b2d754678eddc80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca76affa13f655c91338f762080f877c77c12ec791b659122b2d754678eddc80->enter($__internal_ca76affa13f655c91338f762080f877c77c12ec791b659122b2d754678eddc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ca76affa13f655c91338f762080f877c77c12ec791b659122b2d754678eddc80->leave($__internal_ca76affa13f655c91338f762080f877c77c12ec791b659122b2d754678eddc80_prof);

        
        $__internal_5ad28b56b356e0b1e8e93947e170537856f6cd922a5f6e9e35062ea34f1d8379->leave($__internal_5ad28b56b356e0b1e8e93947e170537856f6cd922a5f6e9e35062ea34f1d8379_prof);

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
