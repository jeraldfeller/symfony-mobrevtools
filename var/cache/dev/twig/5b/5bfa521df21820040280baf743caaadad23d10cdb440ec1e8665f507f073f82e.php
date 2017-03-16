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
        $__internal_4bc04ded8913f62f7fe539ac574ddd719c1b4c3262d201817978e6c427b7be5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc04ded8913f62f7fe539ac574ddd719c1b4c3262d201817978e6c427b7be5c->enter($__internal_4bc04ded8913f62f7fe539ac574ddd719c1b4c3262d201817978e6c427b7be5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_0e8e58e6e953b5aa1d31a07673028d8ff1c091a5988b78252ea4a44d40e756aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8e58e6e953b5aa1d31a07673028d8ff1c091a5988b78252ea4a44d40e756aa->enter($__internal_0e8e58e6e953b5aa1d31a07673028d8ff1c091a5988b78252ea4a44d40e756aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4bc04ded8913f62f7fe539ac574ddd719c1b4c3262d201817978e6c427b7be5c->leave($__internal_4bc04ded8913f62f7fe539ac574ddd719c1b4c3262d201817978e6c427b7be5c_prof);

        
        $__internal_0e8e58e6e953b5aa1d31a07673028d8ff1c091a5988b78252ea4a44d40e756aa->leave($__internal_0e8e58e6e953b5aa1d31a07673028d8ff1c091a5988b78252ea4a44d40e756aa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a79fddcc817587870a0891df2ed0b23ca0003041f500fee7885a43acd570728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a79fddcc817587870a0891df2ed0b23ca0003041f500fee7885a43acd570728->enter($__internal_9a79fddcc817587870a0891df2ed0b23ca0003041f500fee7885a43acd570728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_acd258db828aa98a09b1aac4d40864266de582ac8b924eba0c7f3abd650428a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd258db828aa98a09b1aac4d40864266de582ac8b924eba0c7f3abd650428a5->enter($__internal_acd258db828aa98a09b1aac4d40864266de582ac8b924eba0c7f3abd650428a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_acd258db828aa98a09b1aac4d40864266de582ac8b924eba0c7f3abd650428a5->leave($__internal_acd258db828aa98a09b1aac4d40864266de582ac8b924eba0c7f3abd650428a5_prof);

        
        $__internal_9a79fddcc817587870a0891df2ed0b23ca0003041f500fee7885a43acd570728->leave($__internal_9a79fddcc817587870a0891df2ed0b23ca0003041f500fee7885a43acd570728_prof);

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
