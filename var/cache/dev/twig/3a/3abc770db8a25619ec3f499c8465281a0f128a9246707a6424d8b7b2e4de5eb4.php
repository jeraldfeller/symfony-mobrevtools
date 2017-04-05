<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_cb2592bed280ed0d30d9ec8af8178824544eb5507e32b1501beebf4dc584ac8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_f0e500257f8fa8d56da4a9df744bdf5dad58b11daa6e629d989922a1067bb714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e500257f8fa8d56da4a9df744bdf5dad58b11daa6e629d989922a1067bb714->enter($__internal_f0e500257f8fa8d56da4a9df744bdf5dad58b11daa6e629d989922a1067bb714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b1bc37f13e6565f0b3d5ba53324bb2e31bc7a2a4757a6f0d3936ce43eec16108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bc37f13e6565f0b3d5ba53324bb2e31bc7a2a4757a6f0d3936ce43eec16108->enter($__internal_b1bc37f13e6565f0b3d5ba53324bb2e31bc7a2a4757a6f0d3936ce43eec16108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0e500257f8fa8d56da4a9df744bdf5dad58b11daa6e629d989922a1067bb714->leave($__internal_f0e500257f8fa8d56da4a9df744bdf5dad58b11daa6e629d989922a1067bb714_prof);

        
        $__internal_b1bc37f13e6565f0b3d5ba53324bb2e31bc7a2a4757a6f0d3936ce43eec16108->leave($__internal_b1bc37f13e6565f0b3d5ba53324bb2e31bc7a2a4757a6f0d3936ce43eec16108_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4f4410adadbe9492f42fdb30f5819706803d8fc01a385256dd54da662626a76e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4410adadbe9492f42fdb30f5819706803d8fc01a385256dd54da662626a76e->enter($__internal_4f4410adadbe9492f42fdb30f5819706803d8fc01a385256dd54da662626a76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ff1e1c71387e794cccec1b902a1791b68cd255933fb98bcb25d6c03a28f8fcf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1e1c71387e794cccec1b902a1791b68cd255933fb98bcb25d6c03a28f8fcf6->enter($__internal_ff1e1c71387e794cccec1b902a1791b68cd255933fb98bcb25d6c03a28f8fcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff1e1c71387e794cccec1b902a1791b68cd255933fb98bcb25d6c03a28f8fcf6->leave($__internal_ff1e1c71387e794cccec1b902a1791b68cd255933fb98bcb25d6c03a28f8fcf6_prof);

        
        $__internal_4f4410adadbe9492f42fdb30f5819706803d8fc01a385256dd54da662626a76e->leave($__internal_4f4410adadbe9492f42fdb30f5819706803d8fc01a385256dd54da662626a76e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d113fe0508fae91ea862031b212779c45ebef583414a307ada85e09086619c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d113fe0508fae91ea862031b212779c45ebef583414a307ada85e09086619c2f->enter($__internal_d113fe0508fae91ea862031b212779c45ebef583414a307ada85e09086619c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_efbb93f75a45ff0d2e25588e602f6635d4ac1504fd7ddb7d15f980305275b774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efbb93f75a45ff0d2e25588e602f6635d4ac1504fd7ddb7d15f980305275b774->enter($__internal_efbb93f75a45ff0d2e25588e602f6635d4ac1504fd7ddb7d15f980305275b774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_efbb93f75a45ff0d2e25588e602f6635d4ac1504fd7ddb7d15f980305275b774->leave($__internal_efbb93f75a45ff0d2e25588e602f6635d4ac1504fd7ddb7d15f980305275b774_prof);

        
        $__internal_d113fe0508fae91ea862031b212779c45ebef583414a307ada85e09086619c2f->leave($__internal_d113fe0508fae91ea862031b212779c45ebef583414a307ada85e09086619c2f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0cd0fef564f58f47a68fd7b3d2f38124fc35c0cd28dd8f1834bdb3475c451f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd0fef564f58f47a68fd7b3d2f38124fc35c0cd28dd8f1834bdb3475c451f12->enter($__internal_0cd0fef564f58f47a68fd7b3d2f38124fc35c0cd28dd8f1834bdb3475c451f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ff46b4f0081c44e0106e2e5a5f3bf477e518badf473347f6407658c1659d822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff46b4f0081c44e0106e2e5a5f3bf477e518badf473347f6407658c1659d822->enter($__internal_1ff46b4f0081c44e0106e2e5a5f3bf477e518badf473347f6407658c1659d822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1ff46b4f0081c44e0106e2e5a5f3bf477e518badf473347f6407658c1659d822->leave($__internal_1ff46b4f0081c44e0106e2e5a5f3bf477e518badf473347f6407658c1659d822_prof);

        
        $__internal_0cd0fef564f58f47a68fd7b3d2f38124fc35c0cd28dd8f1834bdb3475c451f12->leave($__internal_0cd0fef564f58f47a68fd7b3d2f38124fc35c0cd28dd8f1834bdb3475c451f12_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
