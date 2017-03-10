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
        $__internal_12fea426d80e9be4aeb79af259666607351520eada2cb0ede8465a89d09700a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12fea426d80e9be4aeb79af259666607351520eada2cb0ede8465a89d09700a8->enter($__internal_12fea426d80e9be4aeb79af259666607351520eada2cb0ede8465a89d09700a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9ae0159fd09483a2be4ea53978b55c6f43b456875e4500012e32ed12a70c01cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae0159fd09483a2be4ea53978b55c6f43b456875e4500012e32ed12a70c01cf->enter($__internal_9ae0159fd09483a2be4ea53978b55c6f43b456875e4500012e32ed12a70c01cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12fea426d80e9be4aeb79af259666607351520eada2cb0ede8465a89d09700a8->leave($__internal_12fea426d80e9be4aeb79af259666607351520eada2cb0ede8465a89d09700a8_prof);

        
        $__internal_9ae0159fd09483a2be4ea53978b55c6f43b456875e4500012e32ed12a70c01cf->leave($__internal_9ae0159fd09483a2be4ea53978b55c6f43b456875e4500012e32ed12a70c01cf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4676ba06cb899ed984d510850892e8ff39463c55b9fc366afe58766dd6934fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4676ba06cb899ed984d510850892e8ff39463c55b9fc366afe58766dd6934fe8->enter($__internal_4676ba06cb899ed984d510850892e8ff39463c55b9fc366afe58766dd6934fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8deed3349efa03b9b9f423a49153d5f187636f63cad2dfcef63aa2b60152fa5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8deed3349efa03b9b9f423a49153d5f187636f63cad2dfcef63aa2b60152fa5d->enter($__internal_8deed3349efa03b9b9f423a49153d5f187636f63cad2dfcef63aa2b60152fa5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8deed3349efa03b9b9f423a49153d5f187636f63cad2dfcef63aa2b60152fa5d->leave($__internal_8deed3349efa03b9b9f423a49153d5f187636f63cad2dfcef63aa2b60152fa5d_prof);

        
        $__internal_4676ba06cb899ed984d510850892e8ff39463c55b9fc366afe58766dd6934fe8->leave($__internal_4676ba06cb899ed984d510850892e8ff39463c55b9fc366afe58766dd6934fe8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c4b20cd91b10a1fa7c8408b6c3c769057d1845cd81326f2bdd70ea12f853e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4b20cd91b10a1fa7c8408b6c3c769057d1845cd81326f2bdd70ea12f853e81->enter($__internal_8c4b20cd91b10a1fa7c8408b6c3c769057d1845cd81326f2bdd70ea12f853e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b67c313baf7492101e0cc1d59b3ce581504147c573ca310751acd0febdc4e84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67c313baf7492101e0cc1d59b3ce581504147c573ca310751acd0febdc4e84a->enter($__internal_b67c313baf7492101e0cc1d59b3ce581504147c573ca310751acd0febdc4e84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b67c313baf7492101e0cc1d59b3ce581504147c573ca310751acd0febdc4e84a->leave($__internal_b67c313baf7492101e0cc1d59b3ce581504147c573ca310751acd0febdc4e84a_prof);

        
        $__internal_8c4b20cd91b10a1fa7c8408b6c3c769057d1845cd81326f2bdd70ea12f853e81->leave($__internal_8c4b20cd91b10a1fa7c8408b6c3c769057d1845cd81326f2bdd70ea12f853e81_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_983dcabb9a23bf26332ef0170830e661bd15eb533fb54e8459aeb58969352bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_983dcabb9a23bf26332ef0170830e661bd15eb533fb54e8459aeb58969352bec->enter($__internal_983dcabb9a23bf26332ef0170830e661bd15eb533fb54e8459aeb58969352bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2b23c38051cf8422a65c97a35d732f661f6f7b8e80f46b56d42c5c2610044a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b23c38051cf8422a65c97a35d732f661f6f7b8e80f46b56d42c5c2610044a60->enter($__internal_2b23c38051cf8422a65c97a35d732f661f6f7b8e80f46b56d42c5c2610044a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2b23c38051cf8422a65c97a35d732f661f6f7b8e80f46b56d42c5c2610044a60->leave($__internal_2b23c38051cf8422a65c97a35d732f661f6f7b8e80f46b56d42c5c2610044a60_prof);

        
        $__internal_983dcabb9a23bf26332ef0170830e661bd15eb533fb54e8459aeb58969352bec->leave($__internal_983dcabb9a23bf26332ef0170830e661bd15eb533fb54e8459aeb58969352bec_prof);

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
