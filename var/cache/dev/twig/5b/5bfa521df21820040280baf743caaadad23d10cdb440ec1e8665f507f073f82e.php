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
        $__internal_e9d99a296b0ab55a22f5027d625be69824bce2e5c61b125ca23653d59fff6c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d99a296b0ab55a22f5027d625be69824bce2e5c61b125ca23653d59fff6c2a->enter($__internal_e9d99a296b0ab55a22f5027d625be69824bce2e5c61b125ca23653d59fff6c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_7612e0e17e5a4fdbe2d062dd5c32037cddd25452d69d57b01588decb969eb6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7612e0e17e5a4fdbe2d062dd5c32037cddd25452d69d57b01588decb969eb6b6->enter($__internal_7612e0e17e5a4fdbe2d062dd5c32037cddd25452d69d57b01588decb969eb6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e9d99a296b0ab55a22f5027d625be69824bce2e5c61b125ca23653d59fff6c2a->leave($__internal_e9d99a296b0ab55a22f5027d625be69824bce2e5c61b125ca23653d59fff6c2a_prof);

        
        $__internal_7612e0e17e5a4fdbe2d062dd5c32037cddd25452d69d57b01588decb969eb6b6->leave($__internal_7612e0e17e5a4fdbe2d062dd5c32037cddd25452d69d57b01588decb969eb6b6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5db923107ac212fbb4a9aeb97e7e7f0a49df7db6e66edcd209a3f4be9d63b704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db923107ac212fbb4a9aeb97e7e7f0a49df7db6e66edcd209a3f4be9d63b704->enter($__internal_5db923107ac212fbb4a9aeb97e7e7f0a49df7db6e66edcd209a3f4be9d63b704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_52c34d65d5c22f23a2f3d93c7c8042a25b8e44748b0f4435f055be8a6dd22656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c34d65d5c22f23a2f3d93c7c8042a25b8e44748b0f4435f055be8a6dd22656->enter($__internal_52c34d65d5c22f23a2f3d93c7c8042a25b8e44748b0f4435f055be8a6dd22656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_52c34d65d5c22f23a2f3d93c7c8042a25b8e44748b0f4435f055be8a6dd22656->leave($__internal_52c34d65d5c22f23a2f3d93c7c8042a25b8e44748b0f4435f055be8a6dd22656_prof);

        
        $__internal_5db923107ac212fbb4a9aeb97e7e7f0a49df7db6e66edcd209a3f4be9d63b704->leave($__internal_5db923107ac212fbb4a9aeb97e7e7f0a49df7db6e66edcd209a3f4be9d63b704_prof);

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
