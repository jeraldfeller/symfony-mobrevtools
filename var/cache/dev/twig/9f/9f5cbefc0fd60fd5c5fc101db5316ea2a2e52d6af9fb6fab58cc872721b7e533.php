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
        $__internal_6b899d80f9d24a20931f25569fd31fd89923bab17835a9b787e6bb1813db3e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b899d80f9d24a20931f25569fd31fd89923bab17835a9b787e6bb1813db3e6c->enter($__internal_6b899d80f9d24a20931f25569fd31fd89923bab17835a9b787e6bb1813db3e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c2e8606211008a9613cac0a3ab1e6d1f15c354f4efad0e1e7a4cfa71d7faa769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e8606211008a9613cac0a3ab1e6d1f15c354f4efad0e1e7a4cfa71d7faa769->enter($__internal_c2e8606211008a9613cac0a3ab1e6d1f15c354f4efad0e1e7a4cfa71d7faa769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b899d80f9d24a20931f25569fd31fd89923bab17835a9b787e6bb1813db3e6c->leave($__internal_6b899d80f9d24a20931f25569fd31fd89923bab17835a9b787e6bb1813db3e6c_prof);

        
        $__internal_c2e8606211008a9613cac0a3ab1e6d1f15c354f4efad0e1e7a4cfa71d7faa769->leave($__internal_c2e8606211008a9613cac0a3ab1e6d1f15c354f4efad0e1e7a4cfa71d7faa769_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5adf42f7ba60883c256eb2ea94db628e54aff1cb8c127654500ad4477a662ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5adf42f7ba60883c256eb2ea94db628e54aff1cb8c127654500ad4477a662ce3->enter($__internal_5adf42f7ba60883c256eb2ea94db628e54aff1cb8c127654500ad4477a662ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_34fc996d53db367893e4148fcea594267eb31e2393323c923543dc09700a6824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fc996d53db367893e4148fcea594267eb31e2393323c923543dc09700a6824->enter($__internal_34fc996d53db367893e4148fcea594267eb31e2393323c923543dc09700a6824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_34fc996d53db367893e4148fcea594267eb31e2393323c923543dc09700a6824->leave($__internal_34fc996d53db367893e4148fcea594267eb31e2393323c923543dc09700a6824_prof);

        
        $__internal_5adf42f7ba60883c256eb2ea94db628e54aff1cb8c127654500ad4477a662ce3->leave($__internal_5adf42f7ba60883c256eb2ea94db628e54aff1cb8c127654500ad4477a662ce3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea7dd2a1e67b1ea6c23cdb78888e9eabeb126472461daf27b6e8c186bb282268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7dd2a1e67b1ea6c23cdb78888e9eabeb126472461daf27b6e8c186bb282268->enter($__internal_ea7dd2a1e67b1ea6c23cdb78888e9eabeb126472461daf27b6e8c186bb282268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3890b91d5caa98dda1d85dd9364853fb38b898efebe57f6ed455ed6b18d245df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3890b91d5caa98dda1d85dd9364853fb38b898efebe57f6ed455ed6b18d245df->enter($__internal_3890b91d5caa98dda1d85dd9364853fb38b898efebe57f6ed455ed6b18d245df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3890b91d5caa98dda1d85dd9364853fb38b898efebe57f6ed455ed6b18d245df->leave($__internal_3890b91d5caa98dda1d85dd9364853fb38b898efebe57f6ed455ed6b18d245df_prof);

        
        $__internal_ea7dd2a1e67b1ea6c23cdb78888e9eabeb126472461daf27b6e8c186bb282268->leave($__internal_ea7dd2a1e67b1ea6c23cdb78888e9eabeb126472461daf27b6e8c186bb282268_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b62daa75b05b67b68e16d034c67c39ee16032085103f7e534a502d24186d0096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62daa75b05b67b68e16d034c67c39ee16032085103f7e534a502d24186d0096->enter($__internal_b62daa75b05b67b68e16d034c67c39ee16032085103f7e534a502d24186d0096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d922027ce0a87f46cd33e6a2b03f05821b058e24a0c377f0ced151c458f8375f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d922027ce0a87f46cd33e6a2b03f05821b058e24a0c377f0ced151c458f8375f->enter($__internal_d922027ce0a87f46cd33e6a2b03f05821b058e24a0c377f0ced151c458f8375f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d922027ce0a87f46cd33e6a2b03f05821b058e24a0c377f0ced151c458f8375f->leave($__internal_d922027ce0a87f46cd33e6a2b03f05821b058e24a0c377f0ced151c458f8375f_prof);

        
        $__internal_b62daa75b05b67b68e16d034c67c39ee16032085103f7e534a502d24186d0096->leave($__internal_b62daa75b05b67b68e16d034c67c39ee16032085103f7e534a502d24186d0096_prof);

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
