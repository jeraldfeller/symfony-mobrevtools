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
        $__internal_03d4113c3688fc10d48c4420a79ed25d780055c1a268a92539b27bae2a291f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d4113c3688fc10d48c4420a79ed25d780055c1a268a92539b27bae2a291f81->enter($__internal_03d4113c3688fc10d48c4420a79ed25d780055c1a268a92539b27bae2a291f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7fb0817a5845d59d0acee9ae63d90f3b84232553c8efc494a776708f2a444ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb0817a5845d59d0acee9ae63d90f3b84232553c8efc494a776708f2a444ad4->enter($__internal_7fb0817a5845d59d0acee9ae63d90f3b84232553c8efc494a776708f2a444ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03d4113c3688fc10d48c4420a79ed25d780055c1a268a92539b27bae2a291f81->leave($__internal_03d4113c3688fc10d48c4420a79ed25d780055c1a268a92539b27bae2a291f81_prof);

        
        $__internal_7fb0817a5845d59d0acee9ae63d90f3b84232553c8efc494a776708f2a444ad4->leave($__internal_7fb0817a5845d59d0acee9ae63d90f3b84232553c8efc494a776708f2a444ad4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_95626df03cf67181e19e72d8b88c48750cf4a678ca8932a9ea1f234653c023ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95626df03cf67181e19e72d8b88c48750cf4a678ca8932a9ea1f234653c023ab->enter($__internal_95626df03cf67181e19e72d8b88c48750cf4a678ca8932a9ea1f234653c023ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6e892549cf6d7511942972fa37d3aa6a855a464ff32e36c19d78dc5a1375b5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e892549cf6d7511942972fa37d3aa6a855a464ff32e36c19d78dc5a1375b5ca->enter($__internal_6e892549cf6d7511942972fa37d3aa6a855a464ff32e36c19d78dc5a1375b5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e892549cf6d7511942972fa37d3aa6a855a464ff32e36c19d78dc5a1375b5ca->leave($__internal_6e892549cf6d7511942972fa37d3aa6a855a464ff32e36c19d78dc5a1375b5ca_prof);

        
        $__internal_95626df03cf67181e19e72d8b88c48750cf4a678ca8932a9ea1f234653c023ab->leave($__internal_95626df03cf67181e19e72d8b88c48750cf4a678ca8932a9ea1f234653c023ab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ddade79149dbd83edebb9d3cc0c070cbc8fc8b3dac95f6f04ffd1c5acd52a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ddade79149dbd83edebb9d3cc0c070cbc8fc8b3dac95f6f04ffd1c5acd52a6f->enter($__internal_4ddade79149dbd83edebb9d3cc0c070cbc8fc8b3dac95f6f04ffd1c5acd52a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ea2b343f684c6e89259303097d1b05ad0c875389d8d6508984b81cef54d0cd63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2b343f684c6e89259303097d1b05ad0c875389d8d6508984b81cef54d0cd63->enter($__internal_ea2b343f684c6e89259303097d1b05ad0c875389d8d6508984b81cef54d0cd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ea2b343f684c6e89259303097d1b05ad0c875389d8d6508984b81cef54d0cd63->leave($__internal_ea2b343f684c6e89259303097d1b05ad0c875389d8d6508984b81cef54d0cd63_prof);

        
        $__internal_4ddade79149dbd83edebb9d3cc0c070cbc8fc8b3dac95f6f04ffd1c5acd52a6f->leave($__internal_4ddade79149dbd83edebb9d3cc0c070cbc8fc8b3dac95f6f04ffd1c5acd52a6f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4d23115f22fa300cfde5f1ea4ee37d7399f835a7d14d790a239db368bbc7a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d23115f22fa300cfde5f1ea4ee37d7399f835a7d14d790a239db368bbc7a51->enter($__internal_e4d23115f22fa300cfde5f1ea4ee37d7399f835a7d14d790a239db368bbc7a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d05883f92904d5b131576f4e7029a5a800e36bf3754ee62aadbe6d7129a43750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05883f92904d5b131576f4e7029a5a800e36bf3754ee62aadbe6d7129a43750->enter($__internal_d05883f92904d5b131576f4e7029a5a800e36bf3754ee62aadbe6d7129a43750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d05883f92904d5b131576f4e7029a5a800e36bf3754ee62aadbe6d7129a43750->leave($__internal_d05883f92904d5b131576f4e7029a5a800e36bf3754ee62aadbe6d7129a43750_prof);

        
        $__internal_e4d23115f22fa300cfde5f1ea4ee37d7399f835a7d14d790a239db368bbc7a51->leave($__internal_e4d23115f22fa300cfde5f1ea4ee37d7399f835a7d14d790a239db368bbc7a51_prof);

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
