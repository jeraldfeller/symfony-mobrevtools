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
        $__internal_2b271499ce39ceaadb85fb0efbf7e1e41e7ea76ae86fac0d96cd5353b43557b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b271499ce39ceaadb85fb0efbf7e1e41e7ea76ae86fac0d96cd5353b43557b0->enter($__internal_2b271499ce39ceaadb85fb0efbf7e1e41e7ea76ae86fac0d96cd5353b43557b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_1d014761e6623cb03a6badbfe1c80074a30366485b748e1c9ce5651e4569a578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d014761e6623cb03a6badbfe1c80074a30366485b748e1c9ce5651e4569a578->enter($__internal_1d014761e6623cb03a6badbfe1c80074a30366485b748e1c9ce5651e4569a578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b271499ce39ceaadb85fb0efbf7e1e41e7ea76ae86fac0d96cd5353b43557b0->leave($__internal_2b271499ce39ceaadb85fb0efbf7e1e41e7ea76ae86fac0d96cd5353b43557b0_prof);

        
        $__internal_1d014761e6623cb03a6badbfe1c80074a30366485b748e1c9ce5651e4569a578->leave($__internal_1d014761e6623cb03a6badbfe1c80074a30366485b748e1c9ce5651e4569a578_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8a104bdabd573ea113e44bfb6bf97e6ba2841f3ef49c2b4ac86e896c259bf903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a104bdabd573ea113e44bfb6bf97e6ba2841f3ef49c2b4ac86e896c259bf903->enter($__internal_8a104bdabd573ea113e44bfb6bf97e6ba2841f3ef49c2b4ac86e896c259bf903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fff5a527e51b38b9d36701e8cc71a223d44b68ea788790d724fef0639e9e70a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff5a527e51b38b9d36701e8cc71a223d44b68ea788790d724fef0639e9e70a6->enter($__internal_fff5a527e51b38b9d36701e8cc71a223d44b68ea788790d724fef0639e9e70a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fff5a527e51b38b9d36701e8cc71a223d44b68ea788790d724fef0639e9e70a6->leave($__internal_fff5a527e51b38b9d36701e8cc71a223d44b68ea788790d724fef0639e9e70a6_prof);

        
        $__internal_8a104bdabd573ea113e44bfb6bf97e6ba2841f3ef49c2b4ac86e896c259bf903->leave($__internal_8a104bdabd573ea113e44bfb6bf97e6ba2841f3ef49c2b4ac86e896c259bf903_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4086d620fd87b533e854ba9473da7ad2e88f0cb1e4723a2805ba3b777d71f29a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4086d620fd87b533e854ba9473da7ad2e88f0cb1e4723a2805ba3b777d71f29a->enter($__internal_4086d620fd87b533e854ba9473da7ad2e88f0cb1e4723a2805ba3b777d71f29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e87e22f2642053a22a71f36d7f1d93417a437dfd3dd8569638d6581409cb7c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87e22f2642053a22a71f36d7f1d93417a437dfd3dd8569638d6581409cb7c44->enter($__internal_e87e22f2642053a22a71f36d7f1d93417a437dfd3dd8569638d6581409cb7c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e87e22f2642053a22a71f36d7f1d93417a437dfd3dd8569638d6581409cb7c44->leave($__internal_e87e22f2642053a22a71f36d7f1d93417a437dfd3dd8569638d6581409cb7c44_prof);

        
        $__internal_4086d620fd87b533e854ba9473da7ad2e88f0cb1e4723a2805ba3b777d71f29a->leave($__internal_4086d620fd87b533e854ba9473da7ad2e88f0cb1e4723a2805ba3b777d71f29a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a03b7939973ece9b3a74ef2b6a052159631ce29ada675c483efd83520b6454c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a03b7939973ece9b3a74ef2b6a052159631ce29ada675c483efd83520b6454c->enter($__internal_3a03b7939973ece9b3a74ef2b6a052159631ce29ada675c483efd83520b6454c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39db295a4caefd544e79d49640e789596476ec388ca22a39793638ca59b5853d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39db295a4caefd544e79d49640e789596476ec388ca22a39793638ca59b5853d->enter($__internal_39db295a4caefd544e79d49640e789596476ec388ca22a39793638ca59b5853d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_39db295a4caefd544e79d49640e789596476ec388ca22a39793638ca59b5853d->leave($__internal_39db295a4caefd544e79d49640e789596476ec388ca22a39793638ca59b5853d_prof);

        
        $__internal_3a03b7939973ece9b3a74ef2b6a052159631ce29ada675c483efd83520b6454c->leave($__internal_3a03b7939973ece9b3a74ef2b6a052159631ce29ada675c483efd83520b6454c_prof);

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
