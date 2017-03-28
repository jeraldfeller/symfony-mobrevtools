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
        $__internal_37f5f320981544a42834020f56fe96ff5dd323efa94eaae19000ae13539b361c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f5f320981544a42834020f56fe96ff5dd323efa94eaae19000ae13539b361c->enter($__internal_37f5f320981544a42834020f56fe96ff5dd323efa94eaae19000ae13539b361c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_e65a88eed1d88189d46732c39dfb567b4bedcea6a32782968a5ebd57907a9a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65a88eed1d88189d46732c39dfb567b4bedcea6a32782968a5ebd57907a9a80->enter($__internal_e65a88eed1d88189d46732c39dfb567b4bedcea6a32782968a5ebd57907a9a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_37f5f320981544a42834020f56fe96ff5dd323efa94eaae19000ae13539b361c->leave($__internal_37f5f320981544a42834020f56fe96ff5dd323efa94eaae19000ae13539b361c_prof);

        
        $__internal_e65a88eed1d88189d46732c39dfb567b4bedcea6a32782968a5ebd57907a9a80->leave($__internal_e65a88eed1d88189d46732c39dfb567b4bedcea6a32782968a5ebd57907a9a80_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_53867bd413363b5e630638fb11ccd15ab56e7a0b0fa31ac176b072942aa7a042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53867bd413363b5e630638fb11ccd15ab56e7a0b0fa31ac176b072942aa7a042->enter($__internal_53867bd413363b5e630638fb11ccd15ab56e7a0b0fa31ac176b072942aa7a042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_09dd943404e9b0dcb90fdbe69fc0351fc75a2324c43468efade3da750b803738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09dd943404e9b0dcb90fdbe69fc0351fc75a2324c43468efade3da750b803738->enter($__internal_09dd943404e9b0dcb90fdbe69fc0351fc75a2324c43468efade3da750b803738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_09dd943404e9b0dcb90fdbe69fc0351fc75a2324c43468efade3da750b803738->leave($__internal_09dd943404e9b0dcb90fdbe69fc0351fc75a2324c43468efade3da750b803738_prof);

        
        $__internal_53867bd413363b5e630638fb11ccd15ab56e7a0b0fa31ac176b072942aa7a042->leave($__internal_53867bd413363b5e630638fb11ccd15ab56e7a0b0fa31ac176b072942aa7a042_prof);

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
