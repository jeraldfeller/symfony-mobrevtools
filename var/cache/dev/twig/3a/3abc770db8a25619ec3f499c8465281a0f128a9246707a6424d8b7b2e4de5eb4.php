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
        $__internal_edfef4dd2ac252cb64e5da8276d9e17a25c938190ca721aea032b7403d4dfaa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edfef4dd2ac252cb64e5da8276d9e17a25c938190ca721aea032b7403d4dfaa8->enter($__internal_edfef4dd2ac252cb64e5da8276d9e17a25c938190ca721aea032b7403d4dfaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_26aad51b18984386930bff6137d48906855d6183b6a2d4553a7ff326472853d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26aad51b18984386930bff6137d48906855d6183b6a2d4553a7ff326472853d8->enter($__internal_26aad51b18984386930bff6137d48906855d6183b6a2d4553a7ff326472853d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edfef4dd2ac252cb64e5da8276d9e17a25c938190ca721aea032b7403d4dfaa8->leave($__internal_edfef4dd2ac252cb64e5da8276d9e17a25c938190ca721aea032b7403d4dfaa8_prof);

        
        $__internal_26aad51b18984386930bff6137d48906855d6183b6a2d4553a7ff326472853d8->leave($__internal_26aad51b18984386930bff6137d48906855d6183b6a2d4553a7ff326472853d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f38fdb5294998c60180121916b284cf48d77a3bc1e26cee1e0e5cdf73af36d70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38fdb5294998c60180121916b284cf48d77a3bc1e26cee1e0e5cdf73af36d70->enter($__internal_f38fdb5294998c60180121916b284cf48d77a3bc1e26cee1e0e5cdf73af36d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8f15d7624e0c3fd3b5ccc4a95dffc13d898710578017b29953b798c3923e62a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f15d7624e0c3fd3b5ccc4a95dffc13d898710578017b29953b798c3923e62a3->enter($__internal_8f15d7624e0c3fd3b5ccc4a95dffc13d898710578017b29953b798c3923e62a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8f15d7624e0c3fd3b5ccc4a95dffc13d898710578017b29953b798c3923e62a3->leave($__internal_8f15d7624e0c3fd3b5ccc4a95dffc13d898710578017b29953b798c3923e62a3_prof);

        
        $__internal_f38fdb5294998c60180121916b284cf48d77a3bc1e26cee1e0e5cdf73af36d70->leave($__internal_f38fdb5294998c60180121916b284cf48d77a3bc1e26cee1e0e5cdf73af36d70_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e06141823f6b1d005d0559b0e708531ebf521e28e9af71484e1f45a867ffd2ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06141823f6b1d005d0559b0e708531ebf521e28e9af71484e1f45a867ffd2ff->enter($__internal_e06141823f6b1d005d0559b0e708531ebf521e28e9af71484e1f45a867ffd2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e9a1b4be62cd9e08ca9b9fd05eb91c494758c1e5479a0fb2414e7b501b2ee2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a1b4be62cd9e08ca9b9fd05eb91c494758c1e5479a0fb2414e7b501b2ee2a2->enter($__internal_e9a1b4be62cd9e08ca9b9fd05eb91c494758c1e5479a0fb2414e7b501b2ee2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e9a1b4be62cd9e08ca9b9fd05eb91c494758c1e5479a0fb2414e7b501b2ee2a2->leave($__internal_e9a1b4be62cd9e08ca9b9fd05eb91c494758c1e5479a0fb2414e7b501b2ee2a2_prof);

        
        $__internal_e06141823f6b1d005d0559b0e708531ebf521e28e9af71484e1f45a867ffd2ff->leave($__internal_e06141823f6b1d005d0559b0e708531ebf521e28e9af71484e1f45a867ffd2ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5b84a2395796fc657a11b4d9aafacb8bdc2563205eb727988808e92e169cf05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b84a2395796fc657a11b4d9aafacb8bdc2563205eb727988808e92e169cf05->enter($__internal_b5b84a2395796fc657a11b4d9aafacb8bdc2563205eb727988808e92e169cf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e93ce6f681b7d24264197af388d8e0e50a7f234bc236176f6f1eafdd459f72d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93ce6f681b7d24264197af388d8e0e50a7f234bc236176f6f1eafdd459f72d1->enter($__internal_e93ce6f681b7d24264197af388d8e0e50a7f234bc236176f6f1eafdd459f72d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e93ce6f681b7d24264197af388d8e0e50a7f234bc236176f6f1eafdd459f72d1->leave($__internal_e93ce6f681b7d24264197af388d8e0e50a7f234bc236176f6f1eafdd459f72d1_prof);

        
        $__internal_b5b84a2395796fc657a11b4d9aafacb8bdc2563205eb727988808e92e169cf05->leave($__internal_b5b84a2395796fc657a11b4d9aafacb8bdc2563205eb727988808e92e169cf05_prof);

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
