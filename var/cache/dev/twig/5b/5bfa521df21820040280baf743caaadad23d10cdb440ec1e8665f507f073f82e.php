<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_8e58a1bf75a4d5720b99b5d55955428a1d1228831aeb5d5b66b7d7a6ab3ee0f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_066851fa233da72a5749a692762dcfacd64c35a48b7a39528f985215537ddeb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066851fa233da72a5749a692762dcfacd64c35a48b7a39528f985215537ddeb8->enter($__internal_066851fa233da72a5749a692762dcfacd64c35a48b7a39528f985215537ddeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_3d635cb238a998169ca2f5e52f9c4ab4167bc0f8cef3087090d2b7e1ba229fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d635cb238a998169ca2f5e52f9c4ab4167bc0f8cef3087090d2b7e1ba229fbb->enter($__internal_3d635cb238a998169ca2f5e52f9c4ab4167bc0f8cef3087090d2b7e1ba229fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_066851fa233da72a5749a692762dcfacd64c35a48b7a39528f985215537ddeb8->leave($__internal_066851fa233da72a5749a692762dcfacd64c35a48b7a39528f985215537ddeb8_prof);

        
        $__internal_3d635cb238a998169ca2f5e52f9c4ab4167bc0f8cef3087090d2b7e1ba229fbb->leave($__internal_3d635cb238a998169ca2f5e52f9c4ab4167bc0f8cef3087090d2b7e1ba229fbb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc758e28fc0ec1721716edc7547067a540d3a6e208156a31e6cd3e4799c78da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc758e28fc0ec1721716edc7547067a540d3a6e208156a31e6cd3e4799c78da8->enter($__internal_cc758e28fc0ec1721716edc7547067a540d3a6e208156a31e6cd3e4799c78da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_12f54cfbc8f4f190dea27fb2e6bf01ac05eb5fdcf5d6041423d02b3b52e868ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f54cfbc8f4f190dea27fb2e6bf01ac05eb5fdcf5d6041423d02b3b52e868ef->enter($__internal_12f54cfbc8f4f190dea27fb2e6bf01ac05eb5fdcf5d6041423d02b3b52e868ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_12f54cfbc8f4f190dea27fb2e6bf01ac05eb5fdcf5d6041423d02b3b52e868ef->leave($__internal_12f54cfbc8f4f190dea27fb2e6bf01ac05eb5fdcf5d6041423d02b3b52e868ef_prof);

        
        $__internal_cc758e28fc0ec1721716edc7547067a540d3a6e208156a31e6cd3e4799c78da8->leave($__internal_cc758e28fc0ec1721716edc7547067a540d3a6e208156a31e6cd3e4799c78da8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
