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
        $__internal_8750f01b99d89017ea5db2aa29388b49a18e22e0d2ed03bae716b3c990d60071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8750f01b99d89017ea5db2aa29388b49a18e22e0d2ed03bae716b3c990d60071->enter($__internal_8750f01b99d89017ea5db2aa29388b49a18e22e0d2ed03bae716b3c990d60071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e2bf17f1dd600314b9459d9bcc53dd75a8ea9b0e4f726c31392317698dee90ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2bf17f1dd600314b9459d9bcc53dd75a8ea9b0e4f726c31392317698dee90ac->enter($__internal_e2bf17f1dd600314b9459d9bcc53dd75a8ea9b0e4f726c31392317698dee90ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8750f01b99d89017ea5db2aa29388b49a18e22e0d2ed03bae716b3c990d60071->leave($__internal_8750f01b99d89017ea5db2aa29388b49a18e22e0d2ed03bae716b3c990d60071_prof);

        
        $__internal_e2bf17f1dd600314b9459d9bcc53dd75a8ea9b0e4f726c31392317698dee90ac->leave($__internal_e2bf17f1dd600314b9459d9bcc53dd75a8ea9b0e4f726c31392317698dee90ac_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_860e737b2c2cc4144667f17d4e849ac95f79631aada0b0fa8f4bd75d82a38b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860e737b2c2cc4144667f17d4e849ac95f79631aada0b0fa8f4bd75d82a38b2f->enter($__internal_860e737b2c2cc4144667f17d4e849ac95f79631aada0b0fa8f4bd75d82a38b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fb43f8caea6c0d072f78f62cb9fc8c203fa9dc47b5abae8ad5715f91a288b4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb43f8caea6c0d072f78f62cb9fc8c203fa9dc47b5abae8ad5715f91a288b4a1->enter($__internal_fb43f8caea6c0d072f78f62cb9fc8c203fa9dc47b5abae8ad5715f91a288b4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fb43f8caea6c0d072f78f62cb9fc8c203fa9dc47b5abae8ad5715f91a288b4a1->leave($__internal_fb43f8caea6c0d072f78f62cb9fc8c203fa9dc47b5abae8ad5715f91a288b4a1_prof);

        
        $__internal_860e737b2c2cc4144667f17d4e849ac95f79631aada0b0fa8f4bd75d82a38b2f->leave($__internal_860e737b2c2cc4144667f17d4e849ac95f79631aada0b0fa8f4bd75d82a38b2f_prof);

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
