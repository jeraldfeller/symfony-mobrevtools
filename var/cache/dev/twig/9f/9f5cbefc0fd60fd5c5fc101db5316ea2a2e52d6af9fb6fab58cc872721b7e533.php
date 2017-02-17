<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_85d12e649210931c67134325f95080093f5d5f05409e9d2829f43e0fa7ad76d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_20569b6a53b31713281e1013c9382acec53f08c5de45cd5af9144ab88e192430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20569b6a53b31713281e1013c9382acec53f08c5de45cd5af9144ab88e192430->enter($__internal_20569b6a53b31713281e1013c9382acec53f08c5de45cd5af9144ab88e192430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fa5327e41bec27c4acbdce5e0cd3f0cbe010aa061929e1e1230b2b14af77f02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5327e41bec27c4acbdce5e0cd3f0cbe010aa061929e1e1230b2b14af77f02a->enter($__internal_fa5327e41bec27c4acbdce5e0cd3f0cbe010aa061929e1e1230b2b14af77f02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20569b6a53b31713281e1013c9382acec53f08c5de45cd5af9144ab88e192430->leave($__internal_20569b6a53b31713281e1013c9382acec53f08c5de45cd5af9144ab88e192430_prof);

        
        $__internal_fa5327e41bec27c4acbdce5e0cd3f0cbe010aa061929e1e1230b2b14af77f02a->leave($__internal_fa5327e41bec27c4acbdce5e0cd3f0cbe010aa061929e1e1230b2b14af77f02a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11aba97dc11a859fefcd1042429ce7781c3ff7bfb51da16031c0534f122628cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11aba97dc11a859fefcd1042429ce7781c3ff7bfb51da16031c0534f122628cb->enter($__internal_11aba97dc11a859fefcd1042429ce7781c3ff7bfb51da16031c0534f122628cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6c2f42280280357e680112c9c2413976a933db280c11227509697101375adbb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2f42280280357e680112c9c2413976a933db280c11227509697101375adbb7->enter($__internal_6c2f42280280357e680112c9c2413976a933db280c11227509697101375adbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6c2f42280280357e680112c9c2413976a933db280c11227509697101375adbb7->leave($__internal_6c2f42280280357e680112c9c2413976a933db280c11227509697101375adbb7_prof);

        
        $__internal_11aba97dc11a859fefcd1042429ce7781c3ff7bfb51da16031c0534f122628cb->leave($__internal_11aba97dc11a859fefcd1042429ce7781c3ff7bfb51da16031c0534f122628cb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a8fb435a3f67809949126074af5bc4c141c53470a9027b28a2e46bf516be03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8fb435a3f67809949126074af5bc4c141c53470a9027b28a2e46bf516be03d->enter($__internal_5a8fb435a3f67809949126074af5bc4c141c53470a9027b28a2e46bf516be03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d2951207bf9146f5bc5b2c3e5d07f716c492f58858b3c776141ad193de7dd9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2951207bf9146f5bc5b2c3e5d07f716c492f58858b3c776141ad193de7dd9b8->enter($__internal_d2951207bf9146f5bc5b2c3e5d07f716c492f58858b3c776141ad193de7dd9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d2951207bf9146f5bc5b2c3e5d07f716c492f58858b3c776141ad193de7dd9b8->leave($__internal_d2951207bf9146f5bc5b2c3e5d07f716c492f58858b3c776141ad193de7dd9b8_prof);

        
        $__internal_5a8fb435a3f67809949126074af5bc4c141c53470a9027b28a2e46bf516be03d->leave($__internal_5a8fb435a3f67809949126074af5bc4c141c53470a9027b28a2e46bf516be03d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7cee4c9c7b7bd0cacbf4e9f5f50c766d728a3c00cd8fd4b186914c2dd0315a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cee4c9c7b7bd0cacbf4e9f5f50c766d728a3c00cd8fd4b186914c2dd0315a52->enter($__internal_7cee4c9c7b7bd0cacbf4e9f5f50c766d728a3c00cd8fd4b186914c2dd0315a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ff09f1d0f16a909f5901c647a51b09a3fa4107cd691e776a1d29bccf9f69298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff09f1d0f16a909f5901c647a51b09a3fa4107cd691e776a1d29bccf9f69298->enter($__internal_1ff09f1d0f16a909f5901c647a51b09a3fa4107cd691e776a1d29bccf9f69298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1ff09f1d0f16a909f5901c647a51b09a3fa4107cd691e776a1d29bccf9f69298->leave($__internal_1ff09f1d0f16a909f5901c647a51b09a3fa4107cd691e776a1d29bccf9f69298_prof);

        
        $__internal_7cee4c9c7b7bd0cacbf4e9f5f50c766d728a3c00cd8fd4b186914c2dd0315a52->leave($__internal_7cee4c9c7b7bd0cacbf4e9f5f50c766d728a3c00cd8fd4b186914c2dd0315a52_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
