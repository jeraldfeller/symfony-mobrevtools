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
        $__internal_f6ce3df775de2c112ed65b1338c3fb09f574ec6c95c424f1a007a7bcdbc3696c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ce3df775de2c112ed65b1338c3fb09f574ec6c95c424f1a007a7bcdbc3696c->enter($__internal_f6ce3df775de2c112ed65b1338c3fb09f574ec6c95c424f1a007a7bcdbc3696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_42ffa6b4cdd40a3e3bf5d3ba26d906009f75a14c8178a60a574d72338763b75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ffa6b4cdd40a3e3bf5d3ba26d906009f75a14c8178a60a574d72338763b75d->enter($__internal_42ffa6b4cdd40a3e3bf5d3ba26d906009f75a14c8178a60a574d72338763b75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f6ce3df775de2c112ed65b1338c3fb09f574ec6c95c424f1a007a7bcdbc3696c->leave($__internal_f6ce3df775de2c112ed65b1338c3fb09f574ec6c95c424f1a007a7bcdbc3696c_prof);

        
        $__internal_42ffa6b4cdd40a3e3bf5d3ba26d906009f75a14c8178a60a574d72338763b75d->leave($__internal_42ffa6b4cdd40a3e3bf5d3ba26d906009f75a14c8178a60a574d72338763b75d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d07a27d02b13e905f50c10af7619c6798cd93b1538109bfa7ae05615f833bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d07a27d02b13e905f50c10af7619c6798cd93b1538109bfa7ae05615f833bad->enter($__internal_4d07a27d02b13e905f50c10af7619c6798cd93b1538109bfa7ae05615f833bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cb5f92ae0bf60797e075acfe5735f78a3fe7f2c3bdb68db85d7b7c515f775a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5f92ae0bf60797e075acfe5735f78a3fe7f2c3bdb68db85d7b7c515f775a5d->enter($__internal_cb5f92ae0bf60797e075acfe5735f78a3fe7f2c3bdb68db85d7b7c515f775a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cb5f92ae0bf60797e075acfe5735f78a3fe7f2c3bdb68db85d7b7c515f775a5d->leave($__internal_cb5f92ae0bf60797e075acfe5735f78a3fe7f2c3bdb68db85d7b7c515f775a5d_prof);

        
        $__internal_4d07a27d02b13e905f50c10af7619c6798cd93b1538109bfa7ae05615f833bad->leave($__internal_4d07a27d02b13e905f50c10af7619c6798cd93b1538109bfa7ae05615f833bad_prof);

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
