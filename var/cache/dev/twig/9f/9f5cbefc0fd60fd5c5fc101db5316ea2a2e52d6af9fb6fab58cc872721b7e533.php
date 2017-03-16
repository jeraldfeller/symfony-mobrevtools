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
        $__internal_ee64c57d865c5fdc6d5c70af089b368c055008bca28f489efddc8523978e9037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee64c57d865c5fdc6d5c70af089b368c055008bca28f489efddc8523978e9037->enter($__internal_ee64c57d865c5fdc6d5c70af089b368c055008bca28f489efddc8523978e9037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_002c9113f5da40233a0849ddbfa511367934471f6db2c3cec633ac1d284b5aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002c9113f5da40233a0849ddbfa511367934471f6db2c3cec633ac1d284b5aea->enter($__internal_002c9113f5da40233a0849ddbfa511367934471f6db2c3cec633ac1d284b5aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee64c57d865c5fdc6d5c70af089b368c055008bca28f489efddc8523978e9037->leave($__internal_ee64c57d865c5fdc6d5c70af089b368c055008bca28f489efddc8523978e9037_prof);

        
        $__internal_002c9113f5da40233a0849ddbfa511367934471f6db2c3cec633ac1d284b5aea->leave($__internal_002c9113f5da40233a0849ddbfa511367934471f6db2c3cec633ac1d284b5aea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8513a72e617549aabe1a3722ead6edc5ab531afedb3083f6827c94b996d84b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8513a72e617549aabe1a3722ead6edc5ab531afedb3083f6827c94b996d84b15->enter($__internal_8513a72e617549aabe1a3722ead6edc5ab531afedb3083f6827c94b996d84b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b274a56f2696ab55dce7ad655bf298c613b128602ede06134f5a6a5f440b5675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b274a56f2696ab55dce7ad655bf298c613b128602ede06134f5a6a5f440b5675->enter($__internal_b274a56f2696ab55dce7ad655bf298c613b128602ede06134f5a6a5f440b5675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b274a56f2696ab55dce7ad655bf298c613b128602ede06134f5a6a5f440b5675->leave($__internal_b274a56f2696ab55dce7ad655bf298c613b128602ede06134f5a6a5f440b5675_prof);

        
        $__internal_8513a72e617549aabe1a3722ead6edc5ab531afedb3083f6827c94b996d84b15->leave($__internal_8513a72e617549aabe1a3722ead6edc5ab531afedb3083f6827c94b996d84b15_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9fa56ff4ae189537cd20016440cc336f457dc8b17b08b7e26e78c036e7df301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9fa56ff4ae189537cd20016440cc336f457dc8b17b08b7e26e78c036e7df301->enter($__internal_d9fa56ff4ae189537cd20016440cc336f457dc8b17b08b7e26e78c036e7df301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ad04e3f6cd1857286c0b2ad7b9273d7e95f74abe372d46c04e2db5436fe46f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad04e3f6cd1857286c0b2ad7b9273d7e95f74abe372d46c04e2db5436fe46f0->enter($__internal_9ad04e3f6cd1857286c0b2ad7b9273d7e95f74abe372d46c04e2db5436fe46f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ad04e3f6cd1857286c0b2ad7b9273d7e95f74abe372d46c04e2db5436fe46f0->leave($__internal_9ad04e3f6cd1857286c0b2ad7b9273d7e95f74abe372d46c04e2db5436fe46f0_prof);

        
        $__internal_d9fa56ff4ae189537cd20016440cc336f457dc8b17b08b7e26e78c036e7df301->leave($__internal_d9fa56ff4ae189537cd20016440cc336f457dc8b17b08b7e26e78c036e7df301_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8af1814608b04e7c9259934b453f5dad7162ad50138963b2de9254214699da8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af1814608b04e7c9259934b453f5dad7162ad50138963b2de9254214699da8e->enter($__internal_8af1814608b04e7c9259934b453f5dad7162ad50138963b2de9254214699da8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c15b8fb075b8980302cff32f9696aa8e94fb2cf954ae124ff6482cea654f8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c15b8fb075b8980302cff32f9696aa8e94fb2cf954ae124ff6482cea654f8fd->enter($__internal_7c15b8fb075b8980302cff32f9696aa8e94fb2cf954ae124ff6482cea654f8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7c15b8fb075b8980302cff32f9696aa8e94fb2cf954ae124ff6482cea654f8fd->leave($__internal_7c15b8fb075b8980302cff32f9696aa8e94fb2cf954ae124ff6482cea654f8fd_prof);

        
        $__internal_8af1814608b04e7c9259934b453f5dad7162ad50138963b2de9254214699da8e->leave($__internal_8af1814608b04e7c9259934b453f5dad7162ad50138963b2de9254214699da8e_prof);

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
