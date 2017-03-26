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
        $__internal_5ab6f46e69ca1e1d642525a3b5546c8d192211970726b0845109f62e6d5f6a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab6f46e69ca1e1d642525a3b5546c8d192211970726b0845109f62e6d5f6a5f->enter($__internal_5ab6f46e69ca1e1d642525a3b5546c8d192211970726b0845109f62e6d5f6a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2bb066b87eacb94bc9f6873641717b0a6e4fc35c7e87dc810b936f6fd6eb130b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb066b87eacb94bc9f6873641717b0a6e4fc35c7e87dc810b936f6fd6eb130b->enter($__internal_2bb066b87eacb94bc9f6873641717b0a6e4fc35c7e87dc810b936f6fd6eb130b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ab6f46e69ca1e1d642525a3b5546c8d192211970726b0845109f62e6d5f6a5f->leave($__internal_5ab6f46e69ca1e1d642525a3b5546c8d192211970726b0845109f62e6d5f6a5f_prof);

        
        $__internal_2bb066b87eacb94bc9f6873641717b0a6e4fc35c7e87dc810b936f6fd6eb130b->leave($__internal_2bb066b87eacb94bc9f6873641717b0a6e4fc35c7e87dc810b936f6fd6eb130b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_91ac6b233b0c9f6ad3ef08366195051ff3e40096143231e7529c06f97ed609db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ac6b233b0c9f6ad3ef08366195051ff3e40096143231e7529c06f97ed609db->enter($__internal_91ac6b233b0c9f6ad3ef08366195051ff3e40096143231e7529c06f97ed609db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d17870eeb5e2cdfa9de0d1fbd9a25ccea8dadcd66c694f1d1e1d8dd6742996a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17870eeb5e2cdfa9de0d1fbd9a25ccea8dadcd66c694f1d1e1d8dd6742996a0->enter($__internal_d17870eeb5e2cdfa9de0d1fbd9a25ccea8dadcd66c694f1d1e1d8dd6742996a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d17870eeb5e2cdfa9de0d1fbd9a25ccea8dadcd66c694f1d1e1d8dd6742996a0->leave($__internal_d17870eeb5e2cdfa9de0d1fbd9a25ccea8dadcd66c694f1d1e1d8dd6742996a0_prof);

        
        $__internal_91ac6b233b0c9f6ad3ef08366195051ff3e40096143231e7529c06f97ed609db->leave($__internal_91ac6b233b0c9f6ad3ef08366195051ff3e40096143231e7529c06f97ed609db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be00a3b3d7a23119cdbf53d92136499faac9802f3caf53d583077002e831d98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be00a3b3d7a23119cdbf53d92136499faac9802f3caf53d583077002e831d98e->enter($__internal_be00a3b3d7a23119cdbf53d92136499faac9802f3caf53d583077002e831d98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f3905b1b78e536a442a0f42c117498a1ffd0f89081b0cfdbe468a24063c5646f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3905b1b78e536a442a0f42c117498a1ffd0f89081b0cfdbe468a24063c5646f->enter($__internal_f3905b1b78e536a442a0f42c117498a1ffd0f89081b0cfdbe468a24063c5646f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f3905b1b78e536a442a0f42c117498a1ffd0f89081b0cfdbe468a24063c5646f->leave($__internal_f3905b1b78e536a442a0f42c117498a1ffd0f89081b0cfdbe468a24063c5646f_prof);

        
        $__internal_be00a3b3d7a23119cdbf53d92136499faac9802f3caf53d583077002e831d98e->leave($__internal_be00a3b3d7a23119cdbf53d92136499faac9802f3caf53d583077002e831d98e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_34b6c361d6e223373f7ecd0992ea284b4df304789844c027dbfc30561e94a432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b6c361d6e223373f7ecd0992ea284b4df304789844c027dbfc30561e94a432->enter($__internal_34b6c361d6e223373f7ecd0992ea284b4df304789844c027dbfc30561e94a432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d34ec3d1ce5cfe75272ded2d7dacfc4d4034b863d33e73c5b628c7011cddc5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34ec3d1ce5cfe75272ded2d7dacfc4d4034b863d33e73c5b628c7011cddc5fd->enter($__internal_d34ec3d1ce5cfe75272ded2d7dacfc4d4034b863d33e73c5b628c7011cddc5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d34ec3d1ce5cfe75272ded2d7dacfc4d4034b863d33e73c5b628c7011cddc5fd->leave($__internal_d34ec3d1ce5cfe75272ded2d7dacfc4d4034b863d33e73c5b628c7011cddc5fd_prof);

        
        $__internal_34b6c361d6e223373f7ecd0992ea284b4df304789844c027dbfc30561e94a432->leave($__internal_34b6c361d6e223373f7ecd0992ea284b4df304789844c027dbfc30561e94a432_prof);

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
