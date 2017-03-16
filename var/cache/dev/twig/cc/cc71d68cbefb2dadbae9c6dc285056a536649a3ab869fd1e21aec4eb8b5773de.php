<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e1cced7b91fe35b065f6175ec14bb7f49aff35c164bbe3d11d7392a7ea2630a9 extends Twig_Template
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
        $__internal_7d6d6dbcbbd21a1619bd626aed2539aa557bc3ee428dcaf0cefc6d578284c633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6d6dbcbbd21a1619bd626aed2539aa557bc3ee428dcaf0cefc6d578284c633->enter($__internal_7d6d6dbcbbd21a1619bd626aed2539aa557bc3ee428dcaf0cefc6d578284c633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_793bf749a9de885f838d3bf74171780fd81304346518b59290542150ebfdfef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793bf749a9de885f838d3bf74171780fd81304346518b59290542150ebfdfef8->enter($__internal_793bf749a9de885f838d3bf74171780fd81304346518b59290542150ebfdfef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7d6d6dbcbbd21a1619bd626aed2539aa557bc3ee428dcaf0cefc6d578284c633->leave($__internal_7d6d6dbcbbd21a1619bd626aed2539aa557bc3ee428dcaf0cefc6d578284c633_prof);

        
        $__internal_793bf749a9de885f838d3bf74171780fd81304346518b59290542150ebfdfef8->leave($__internal_793bf749a9de885f838d3bf74171780fd81304346518b59290542150ebfdfef8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_92fa30384262695e1cbda1f9a21539ea18ace75ef80eac3b72967d9ef8e6d05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92fa30384262695e1cbda1f9a21539ea18ace75ef80eac3b72967d9ef8e6d05e->enter($__internal_92fa30384262695e1cbda1f9a21539ea18ace75ef80eac3b72967d9ef8e6d05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2c093793b935e36a7bf8d2ba822ef273fd23e8ac9a9741867426f20bb3a0545b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c093793b935e36a7bf8d2ba822ef273fd23e8ac9a9741867426f20bb3a0545b->enter($__internal_2c093793b935e36a7bf8d2ba822ef273fd23e8ac9a9741867426f20bb3a0545b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2c093793b935e36a7bf8d2ba822ef273fd23e8ac9a9741867426f20bb3a0545b->leave($__internal_2c093793b935e36a7bf8d2ba822ef273fd23e8ac9a9741867426f20bb3a0545b_prof);

        
        $__internal_92fa30384262695e1cbda1f9a21539ea18ace75ef80eac3b72967d9ef8e6d05e->leave($__internal_92fa30384262695e1cbda1f9a21539ea18ace75ef80eac3b72967d9ef8e6d05e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
