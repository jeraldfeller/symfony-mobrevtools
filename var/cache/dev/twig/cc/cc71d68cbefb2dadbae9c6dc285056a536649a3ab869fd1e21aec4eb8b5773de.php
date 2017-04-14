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
        $__internal_d5d2a9a867f5585c3dc271aa19c1d4b0c44f8aaabbb26eea1c7a5c51e0604eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d2a9a867f5585c3dc271aa19c1d4b0c44f8aaabbb26eea1c7a5c51e0604eae->enter($__internal_d5d2a9a867f5585c3dc271aa19c1d4b0c44f8aaabbb26eea1c7a5c51e0604eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_c4b36bb74067a6e0529cb720ae6a4e06c080b2653e6021fa31ff98a500fe13ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b36bb74067a6e0529cb720ae6a4e06c080b2653e6021fa31ff98a500fe13ed->enter($__internal_c4b36bb74067a6e0529cb720ae6a4e06c080b2653e6021fa31ff98a500fe13ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d5d2a9a867f5585c3dc271aa19c1d4b0c44f8aaabbb26eea1c7a5c51e0604eae->leave($__internal_d5d2a9a867f5585c3dc271aa19c1d4b0c44f8aaabbb26eea1c7a5c51e0604eae_prof);

        
        $__internal_c4b36bb74067a6e0529cb720ae6a4e06c080b2653e6021fa31ff98a500fe13ed->leave($__internal_c4b36bb74067a6e0529cb720ae6a4e06c080b2653e6021fa31ff98a500fe13ed_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3fe933e157d1c1cfc2668aeca37fcd4651b0b043fb0105af2083c526d55c788b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe933e157d1c1cfc2668aeca37fcd4651b0b043fb0105af2083c526d55c788b->enter($__internal_3fe933e157d1c1cfc2668aeca37fcd4651b0b043fb0105af2083c526d55c788b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f0c5ba150ac5f3c0ae02bca2291f05a595b105ba06e2dad8f27e10e8e14cc8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c5ba150ac5f3c0ae02bca2291f05a595b105ba06e2dad8f27e10e8e14cc8ce->enter($__internal_f0c5ba150ac5f3c0ae02bca2291f05a595b105ba06e2dad8f27e10e8e14cc8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f0c5ba150ac5f3c0ae02bca2291f05a595b105ba06e2dad8f27e10e8e14cc8ce->leave($__internal_f0c5ba150ac5f3c0ae02bca2291f05a595b105ba06e2dad8f27e10e8e14cc8ce_prof);

        
        $__internal_3fe933e157d1c1cfc2668aeca37fcd4651b0b043fb0105af2083c526d55c788b->leave($__internal_3fe933e157d1c1cfc2668aeca37fcd4651b0b043fb0105af2083c526d55c788b_prof);

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
