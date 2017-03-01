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
        $__internal_c8242cc5b8e3a4b62e9211255efc1fa20ca6f60554e89e5949baa426c0a5880c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8242cc5b8e3a4b62e9211255efc1fa20ca6f60554e89e5949baa426c0a5880c->enter($__internal_c8242cc5b8e3a4b62e9211255efc1fa20ca6f60554e89e5949baa426c0a5880c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_00d70811290dadec2d0ac808deaba88e619635e8c00a2e04ecfc0893de3bb695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d70811290dadec2d0ac808deaba88e619635e8c00a2e04ecfc0893de3bb695->enter($__internal_00d70811290dadec2d0ac808deaba88e619635e8c00a2e04ecfc0893de3bb695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8242cc5b8e3a4b62e9211255efc1fa20ca6f60554e89e5949baa426c0a5880c->leave($__internal_c8242cc5b8e3a4b62e9211255efc1fa20ca6f60554e89e5949baa426c0a5880c_prof);

        
        $__internal_00d70811290dadec2d0ac808deaba88e619635e8c00a2e04ecfc0893de3bb695->leave($__internal_00d70811290dadec2d0ac808deaba88e619635e8c00a2e04ecfc0893de3bb695_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0f34d6e534faa30c8ee2bbaf78fab7bb243f24d7e0306582515c2fcdc515b7d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f34d6e534faa30c8ee2bbaf78fab7bb243f24d7e0306582515c2fcdc515b7d6->enter($__internal_0f34d6e534faa30c8ee2bbaf78fab7bb243f24d7e0306582515c2fcdc515b7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a7293e886b0c1d6fdf6ef420f6c7bee054497a54dcbba69ca082229e8d55c1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7293e886b0c1d6fdf6ef420f6c7bee054497a54dcbba69ca082229e8d55c1e1->enter($__internal_a7293e886b0c1d6fdf6ef420f6c7bee054497a54dcbba69ca082229e8d55c1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a7293e886b0c1d6fdf6ef420f6c7bee054497a54dcbba69ca082229e8d55c1e1->leave($__internal_a7293e886b0c1d6fdf6ef420f6c7bee054497a54dcbba69ca082229e8d55c1e1_prof);

        
        $__internal_0f34d6e534faa30c8ee2bbaf78fab7bb243f24d7e0306582515c2fcdc515b7d6->leave($__internal_0f34d6e534faa30c8ee2bbaf78fab7bb243f24d7e0306582515c2fcdc515b7d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_12599578b9fee579decb6d91e2d1463f3813b49ec065586d0616644fda4798b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12599578b9fee579decb6d91e2d1463f3813b49ec065586d0616644fda4798b0->enter($__internal_12599578b9fee579decb6d91e2d1463f3813b49ec065586d0616644fda4798b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_979043433f5950119b6f9bd9c9b6b3521e02859456e8ee183c48aa5aeb5e2203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979043433f5950119b6f9bd9c9b6b3521e02859456e8ee183c48aa5aeb5e2203->enter($__internal_979043433f5950119b6f9bd9c9b6b3521e02859456e8ee183c48aa5aeb5e2203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_979043433f5950119b6f9bd9c9b6b3521e02859456e8ee183c48aa5aeb5e2203->leave($__internal_979043433f5950119b6f9bd9c9b6b3521e02859456e8ee183c48aa5aeb5e2203_prof);

        
        $__internal_12599578b9fee579decb6d91e2d1463f3813b49ec065586d0616644fda4798b0->leave($__internal_12599578b9fee579decb6d91e2d1463f3813b49ec065586d0616644fda4798b0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_775b216bda8c207d1037442896a7bc00a878e405c641d63c0931f46e4239bcb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_775b216bda8c207d1037442896a7bc00a878e405c641d63c0931f46e4239bcb0->enter($__internal_775b216bda8c207d1037442896a7bc00a878e405c641d63c0931f46e4239bcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c7f412bcfc9487c6e773734f8f1ee15f4641c1fc2286979fb0967d8570ed7d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7f412bcfc9487c6e773734f8f1ee15f4641c1fc2286979fb0967d8570ed7d6->enter($__internal_5c7f412bcfc9487c6e773734f8f1ee15f4641c1fc2286979fb0967d8570ed7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5c7f412bcfc9487c6e773734f8f1ee15f4641c1fc2286979fb0967d8570ed7d6->leave($__internal_5c7f412bcfc9487c6e773734f8f1ee15f4641c1fc2286979fb0967d8570ed7d6_prof);

        
        $__internal_775b216bda8c207d1037442896a7bc00a878e405c641d63c0931f46e4239bcb0->leave($__internal_775b216bda8c207d1037442896a7bc00a878e405c641d63c0931f46e4239bcb0_prof);

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
