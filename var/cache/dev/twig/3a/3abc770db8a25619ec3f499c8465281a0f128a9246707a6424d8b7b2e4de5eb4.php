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
        $__internal_90388e8a7aec49fe014808889913ecb017d8bd0985719f3efd75b540b5294898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90388e8a7aec49fe014808889913ecb017d8bd0985719f3efd75b540b5294898->enter($__internal_90388e8a7aec49fe014808889913ecb017d8bd0985719f3efd75b540b5294898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_1df0ca9a5201dc93cfbde37a0151ce59659c754d963e00a85a6538f6f39dfcd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df0ca9a5201dc93cfbde37a0151ce59659c754d963e00a85a6538f6f39dfcd3->enter($__internal_1df0ca9a5201dc93cfbde37a0151ce59659c754d963e00a85a6538f6f39dfcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90388e8a7aec49fe014808889913ecb017d8bd0985719f3efd75b540b5294898->leave($__internal_90388e8a7aec49fe014808889913ecb017d8bd0985719f3efd75b540b5294898_prof);

        
        $__internal_1df0ca9a5201dc93cfbde37a0151ce59659c754d963e00a85a6538f6f39dfcd3->leave($__internal_1df0ca9a5201dc93cfbde37a0151ce59659c754d963e00a85a6538f6f39dfcd3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_de08f0b6ac5db0e9400eeb9b1729d2d0868fa1e53fb0ed613e2e5e6572339aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de08f0b6ac5db0e9400eeb9b1729d2d0868fa1e53fb0ed613e2e5e6572339aac->enter($__internal_de08f0b6ac5db0e9400eeb9b1729d2d0868fa1e53fb0ed613e2e5e6572339aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1a964c68dc5e16759007b6b1cd0d581e1c28aa89e820fb5f9e855b60981274b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a964c68dc5e16759007b6b1cd0d581e1c28aa89e820fb5f9e855b60981274b6->enter($__internal_1a964c68dc5e16759007b6b1cd0d581e1c28aa89e820fb5f9e855b60981274b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1a964c68dc5e16759007b6b1cd0d581e1c28aa89e820fb5f9e855b60981274b6->leave($__internal_1a964c68dc5e16759007b6b1cd0d581e1c28aa89e820fb5f9e855b60981274b6_prof);

        
        $__internal_de08f0b6ac5db0e9400eeb9b1729d2d0868fa1e53fb0ed613e2e5e6572339aac->leave($__internal_de08f0b6ac5db0e9400eeb9b1729d2d0868fa1e53fb0ed613e2e5e6572339aac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1e8a800429053d1e45ef411565bd6b8d5bdc0a35e63389f4a01a03bb3e098504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8a800429053d1e45ef411565bd6b8d5bdc0a35e63389f4a01a03bb3e098504->enter($__internal_1e8a800429053d1e45ef411565bd6b8d5bdc0a35e63389f4a01a03bb3e098504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d7289140d162ffb9c3a9608a2c5f945bea92db70c97f8a82258089a5808bf07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7289140d162ffb9c3a9608a2c5f945bea92db70c97f8a82258089a5808bf07b->enter($__internal_d7289140d162ffb9c3a9608a2c5f945bea92db70c97f8a82258089a5808bf07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7289140d162ffb9c3a9608a2c5f945bea92db70c97f8a82258089a5808bf07b->leave($__internal_d7289140d162ffb9c3a9608a2c5f945bea92db70c97f8a82258089a5808bf07b_prof);

        
        $__internal_1e8a800429053d1e45ef411565bd6b8d5bdc0a35e63389f4a01a03bb3e098504->leave($__internal_1e8a800429053d1e45ef411565bd6b8d5bdc0a35e63389f4a01a03bb3e098504_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_120e840de3a721bbf3fcaf5e9aceddf997dcb0f84adfc0529da08f9f31b1bcc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120e840de3a721bbf3fcaf5e9aceddf997dcb0f84adfc0529da08f9f31b1bcc8->enter($__internal_120e840de3a721bbf3fcaf5e9aceddf997dcb0f84adfc0529da08f9f31b1bcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_28d873caae9a58f8cb9b7c9cdf56533bbbe063dd144fa8015b55e7b7aa61da85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d873caae9a58f8cb9b7c9cdf56533bbbe063dd144fa8015b55e7b7aa61da85->enter($__internal_28d873caae9a58f8cb9b7c9cdf56533bbbe063dd144fa8015b55e7b7aa61da85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_28d873caae9a58f8cb9b7c9cdf56533bbbe063dd144fa8015b55e7b7aa61da85->leave($__internal_28d873caae9a58f8cb9b7c9cdf56533bbbe063dd144fa8015b55e7b7aa61da85_prof);

        
        $__internal_120e840de3a721bbf3fcaf5e9aceddf997dcb0f84adfc0529da08f9f31b1bcc8->leave($__internal_120e840de3a721bbf3fcaf5e9aceddf997dcb0f84adfc0529da08f9f31b1bcc8_prof);

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
