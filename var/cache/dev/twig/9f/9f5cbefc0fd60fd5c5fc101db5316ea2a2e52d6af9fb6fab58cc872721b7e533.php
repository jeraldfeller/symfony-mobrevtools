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
        $__internal_30b1d215a832b604cfe7f0c4bcfd54dc2ce4060dd255bfb86a29cfa076b2da2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b1d215a832b604cfe7f0c4bcfd54dc2ce4060dd255bfb86a29cfa076b2da2e->enter($__internal_30b1d215a832b604cfe7f0c4bcfd54dc2ce4060dd255bfb86a29cfa076b2da2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fc0fce4ba56ce0a738c74017e671481500c2be00eb3d4ab82c1d60e0ccfc6711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0fce4ba56ce0a738c74017e671481500c2be00eb3d4ab82c1d60e0ccfc6711->enter($__internal_fc0fce4ba56ce0a738c74017e671481500c2be00eb3d4ab82c1d60e0ccfc6711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b1d215a832b604cfe7f0c4bcfd54dc2ce4060dd255bfb86a29cfa076b2da2e->leave($__internal_30b1d215a832b604cfe7f0c4bcfd54dc2ce4060dd255bfb86a29cfa076b2da2e_prof);

        
        $__internal_fc0fce4ba56ce0a738c74017e671481500c2be00eb3d4ab82c1d60e0ccfc6711->leave($__internal_fc0fce4ba56ce0a738c74017e671481500c2be00eb3d4ab82c1d60e0ccfc6711_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a243d0081cf9dab6deeff14ee3300ba0e47a0d80e0820b56775c535b47153e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a243d0081cf9dab6deeff14ee3300ba0e47a0d80e0820b56775c535b47153e84->enter($__internal_a243d0081cf9dab6deeff14ee3300ba0e47a0d80e0820b56775c535b47153e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e2c2d41cf2cec314a117dde3728b27eae78e5cbcf576f4ee224918fd775d1ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c2d41cf2cec314a117dde3728b27eae78e5cbcf576f4ee224918fd775d1ab3->enter($__internal_e2c2d41cf2cec314a117dde3728b27eae78e5cbcf576f4ee224918fd775d1ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e2c2d41cf2cec314a117dde3728b27eae78e5cbcf576f4ee224918fd775d1ab3->leave($__internal_e2c2d41cf2cec314a117dde3728b27eae78e5cbcf576f4ee224918fd775d1ab3_prof);

        
        $__internal_a243d0081cf9dab6deeff14ee3300ba0e47a0d80e0820b56775c535b47153e84->leave($__internal_a243d0081cf9dab6deeff14ee3300ba0e47a0d80e0820b56775c535b47153e84_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5bb2a343dac4c1a2681079e8601931e31b4f53d97532318a7c68f1400ba28bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb2a343dac4c1a2681079e8601931e31b4f53d97532318a7c68f1400ba28bd4->enter($__internal_5bb2a343dac4c1a2681079e8601931e31b4f53d97532318a7c68f1400ba28bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_314104358ca2fb3b8985994b05a23665add5d55844c6ef7b15ee4194f2331f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314104358ca2fb3b8985994b05a23665add5d55844c6ef7b15ee4194f2331f83->enter($__internal_314104358ca2fb3b8985994b05a23665add5d55844c6ef7b15ee4194f2331f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_314104358ca2fb3b8985994b05a23665add5d55844c6ef7b15ee4194f2331f83->leave($__internal_314104358ca2fb3b8985994b05a23665add5d55844c6ef7b15ee4194f2331f83_prof);

        
        $__internal_5bb2a343dac4c1a2681079e8601931e31b4f53d97532318a7c68f1400ba28bd4->leave($__internal_5bb2a343dac4c1a2681079e8601931e31b4f53d97532318a7c68f1400ba28bd4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db2eb228d481edc66f9feb6deb11fa2126fd9dfec79eaf705ccde927e1a6e0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2eb228d481edc66f9feb6deb11fa2126fd9dfec79eaf705ccde927e1a6e0cf->enter($__internal_db2eb228d481edc66f9feb6deb11fa2126fd9dfec79eaf705ccde927e1a6e0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25c5813bbdf4483d87add9597bdd24d37f1ad4d2b1738601e1071805b59dbb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c5813bbdf4483d87add9597bdd24d37f1ad4d2b1738601e1071805b59dbb1a->enter($__internal_25c5813bbdf4483d87add9597bdd24d37f1ad4d2b1738601e1071805b59dbb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_25c5813bbdf4483d87add9597bdd24d37f1ad4d2b1738601e1071805b59dbb1a->leave($__internal_25c5813bbdf4483d87add9597bdd24d37f1ad4d2b1738601e1071805b59dbb1a_prof);

        
        $__internal_db2eb228d481edc66f9feb6deb11fa2126fd9dfec79eaf705ccde927e1a6e0cf->leave($__internal_db2eb228d481edc66f9feb6deb11fa2126fd9dfec79eaf705ccde927e1a6e0cf_prof);

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
