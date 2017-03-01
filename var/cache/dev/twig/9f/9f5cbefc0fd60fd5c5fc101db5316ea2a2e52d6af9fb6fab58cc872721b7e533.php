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
        $__internal_735d1bae9c6e984e058c73d9709d5ec492e8dc67671b3fb0bb95c28d18eca3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735d1bae9c6e984e058c73d9709d5ec492e8dc67671b3fb0bb95c28d18eca3be->enter($__internal_735d1bae9c6e984e058c73d9709d5ec492e8dc67671b3fb0bb95c28d18eca3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c378860cc33f87ecee52321486344f9e1a3b470dc2d2a85ff5016f45f73b94b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c378860cc33f87ecee52321486344f9e1a3b470dc2d2a85ff5016f45f73b94b8->enter($__internal_c378860cc33f87ecee52321486344f9e1a3b470dc2d2a85ff5016f45f73b94b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_735d1bae9c6e984e058c73d9709d5ec492e8dc67671b3fb0bb95c28d18eca3be->leave($__internal_735d1bae9c6e984e058c73d9709d5ec492e8dc67671b3fb0bb95c28d18eca3be_prof);

        
        $__internal_c378860cc33f87ecee52321486344f9e1a3b470dc2d2a85ff5016f45f73b94b8->leave($__internal_c378860cc33f87ecee52321486344f9e1a3b470dc2d2a85ff5016f45f73b94b8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_418e28e85d0af88000a318350615d2c03fad00f1f9b47a8c9056d4017493fa6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418e28e85d0af88000a318350615d2c03fad00f1f9b47a8c9056d4017493fa6c->enter($__internal_418e28e85d0af88000a318350615d2c03fad00f1f9b47a8c9056d4017493fa6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ee972d5604694a165be4b3e8f39a601b2d101150acc0e746dcf281bce62d0084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee972d5604694a165be4b3e8f39a601b2d101150acc0e746dcf281bce62d0084->enter($__internal_ee972d5604694a165be4b3e8f39a601b2d101150acc0e746dcf281bce62d0084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee972d5604694a165be4b3e8f39a601b2d101150acc0e746dcf281bce62d0084->leave($__internal_ee972d5604694a165be4b3e8f39a601b2d101150acc0e746dcf281bce62d0084_prof);

        
        $__internal_418e28e85d0af88000a318350615d2c03fad00f1f9b47a8c9056d4017493fa6c->leave($__internal_418e28e85d0af88000a318350615d2c03fad00f1f9b47a8c9056d4017493fa6c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ebfd48fb4024dc96513d334a9bd3dec7980194c39820a979099e4c64229c008a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebfd48fb4024dc96513d334a9bd3dec7980194c39820a979099e4c64229c008a->enter($__internal_ebfd48fb4024dc96513d334a9bd3dec7980194c39820a979099e4c64229c008a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a03c34470f9d0398ed4e98a330f0495310840c532e0dcedfef0563f7b8a6e754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03c34470f9d0398ed4e98a330f0495310840c532e0dcedfef0563f7b8a6e754->enter($__internal_a03c34470f9d0398ed4e98a330f0495310840c532e0dcedfef0563f7b8a6e754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a03c34470f9d0398ed4e98a330f0495310840c532e0dcedfef0563f7b8a6e754->leave($__internal_a03c34470f9d0398ed4e98a330f0495310840c532e0dcedfef0563f7b8a6e754_prof);

        
        $__internal_ebfd48fb4024dc96513d334a9bd3dec7980194c39820a979099e4c64229c008a->leave($__internal_ebfd48fb4024dc96513d334a9bd3dec7980194c39820a979099e4c64229c008a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_145264ae6c017d0a58e1c0c9ac68df8f52196b39f9cc65671e9aabd3dd5f7915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145264ae6c017d0a58e1c0c9ac68df8f52196b39f9cc65671e9aabd3dd5f7915->enter($__internal_145264ae6c017d0a58e1c0c9ac68df8f52196b39f9cc65671e9aabd3dd5f7915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_09f67ac28f593080a76260c535d84b4b846acae5e913e9e1324a055627ac8f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f67ac28f593080a76260c535d84b4b846acae5e913e9e1324a055627ac8f39->enter($__internal_09f67ac28f593080a76260c535d84b4b846acae5e913e9e1324a055627ac8f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09f67ac28f593080a76260c535d84b4b846acae5e913e9e1324a055627ac8f39->leave($__internal_09f67ac28f593080a76260c535d84b4b846acae5e913e9e1324a055627ac8f39_prof);

        
        $__internal_145264ae6c017d0a58e1c0c9ac68df8f52196b39f9cc65671e9aabd3dd5f7915->leave($__internal_145264ae6c017d0a58e1c0c9ac68df8f52196b39f9cc65671e9aabd3dd5f7915_prof);

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
