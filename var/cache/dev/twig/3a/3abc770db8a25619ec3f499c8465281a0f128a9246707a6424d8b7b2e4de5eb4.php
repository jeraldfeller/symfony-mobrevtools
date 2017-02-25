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
        $__internal_1193d206550e0c7c635ad7eeefd5294722edd90c105503749aff40d8d679cd38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1193d206550e0c7c635ad7eeefd5294722edd90c105503749aff40d8d679cd38->enter($__internal_1193d206550e0c7c635ad7eeefd5294722edd90c105503749aff40d8d679cd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_213fd2a6a3ae7da81ce3b1946379fb979e8f0c13915dfc71325afa4a812f2289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213fd2a6a3ae7da81ce3b1946379fb979e8f0c13915dfc71325afa4a812f2289->enter($__internal_213fd2a6a3ae7da81ce3b1946379fb979e8f0c13915dfc71325afa4a812f2289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1193d206550e0c7c635ad7eeefd5294722edd90c105503749aff40d8d679cd38->leave($__internal_1193d206550e0c7c635ad7eeefd5294722edd90c105503749aff40d8d679cd38_prof);

        
        $__internal_213fd2a6a3ae7da81ce3b1946379fb979e8f0c13915dfc71325afa4a812f2289->leave($__internal_213fd2a6a3ae7da81ce3b1946379fb979e8f0c13915dfc71325afa4a812f2289_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_80a825a35f9b42bad8817d2e5d5589634c1862f2c97fe8f9f39616b0f2fc215f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a825a35f9b42bad8817d2e5d5589634c1862f2c97fe8f9f39616b0f2fc215f->enter($__internal_80a825a35f9b42bad8817d2e5d5589634c1862f2c97fe8f9f39616b0f2fc215f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_061d6c22378ba2d761fde49bc18a0ebed5f475992ae392f9ca394b077c2d7306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061d6c22378ba2d761fde49bc18a0ebed5f475992ae392f9ca394b077c2d7306->enter($__internal_061d6c22378ba2d761fde49bc18a0ebed5f475992ae392f9ca394b077c2d7306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_061d6c22378ba2d761fde49bc18a0ebed5f475992ae392f9ca394b077c2d7306->leave($__internal_061d6c22378ba2d761fde49bc18a0ebed5f475992ae392f9ca394b077c2d7306_prof);

        
        $__internal_80a825a35f9b42bad8817d2e5d5589634c1862f2c97fe8f9f39616b0f2fc215f->leave($__internal_80a825a35f9b42bad8817d2e5d5589634c1862f2c97fe8f9f39616b0f2fc215f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1aaecf6d9b7f7a57c6cd3470a35e9339dce05df7f40ac721067d0122e7f57c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aaecf6d9b7f7a57c6cd3470a35e9339dce05df7f40ac721067d0122e7f57c9d->enter($__internal_1aaecf6d9b7f7a57c6cd3470a35e9339dce05df7f40ac721067d0122e7f57c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_659abe49084c3473184e77958a249c515da4e0fdb01959bac8e68f001faf528b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659abe49084c3473184e77958a249c515da4e0fdb01959bac8e68f001faf528b->enter($__internal_659abe49084c3473184e77958a249c515da4e0fdb01959bac8e68f001faf528b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_659abe49084c3473184e77958a249c515da4e0fdb01959bac8e68f001faf528b->leave($__internal_659abe49084c3473184e77958a249c515da4e0fdb01959bac8e68f001faf528b_prof);

        
        $__internal_1aaecf6d9b7f7a57c6cd3470a35e9339dce05df7f40ac721067d0122e7f57c9d->leave($__internal_1aaecf6d9b7f7a57c6cd3470a35e9339dce05df7f40ac721067d0122e7f57c9d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c16d5f036579d204c2ac8f08a3d80d99e01997409d66a52805727f5d670db052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c16d5f036579d204c2ac8f08a3d80d99e01997409d66a52805727f5d670db052->enter($__internal_c16d5f036579d204c2ac8f08a3d80d99e01997409d66a52805727f5d670db052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8453b11d2675abe82fd2cfc6f210bfe601d2edc3123164273588eb5afac3988c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8453b11d2675abe82fd2cfc6f210bfe601d2edc3123164273588eb5afac3988c->enter($__internal_8453b11d2675abe82fd2cfc6f210bfe601d2edc3123164273588eb5afac3988c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8453b11d2675abe82fd2cfc6f210bfe601d2edc3123164273588eb5afac3988c->leave($__internal_8453b11d2675abe82fd2cfc6f210bfe601d2edc3123164273588eb5afac3988c_prof);

        
        $__internal_c16d5f036579d204c2ac8f08a3d80d99e01997409d66a52805727f5d670db052->leave($__internal_c16d5f036579d204c2ac8f08a3d80d99e01997409d66a52805727f5d670db052_prof);

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
