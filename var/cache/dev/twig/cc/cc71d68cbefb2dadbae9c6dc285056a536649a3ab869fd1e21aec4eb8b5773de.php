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
        $__internal_fc021d60a6755b70d876fb0e95089f85eda65e34347a4e2fcbcc1d819a5488e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc021d60a6755b70d876fb0e95089f85eda65e34347a4e2fcbcc1d819a5488e8->enter($__internal_fc021d60a6755b70d876fb0e95089f85eda65e34347a4e2fcbcc1d819a5488e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_9ae6cbac61982cfb14a70e4bf0fd7ec4d743384e3c90e471345318af5c001714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae6cbac61982cfb14a70e4bf0fd7ec4d743384e3c90e471345318af5c001714->enter($__internal_9ae6cbac61982cfb14a70e4bf0fd7ec4d743384e3c90e471345318af5c001714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fc021d60a6755b70d876fb0e95089f85eda65e34347a4e2fcbcc1d819a5488e8->leave($__internal_fc021d60a6755b70d876fb0e95089f85eda65e34347a4e2fcbcc1d819a5488e8_prof);

        
        $__internal_9ae6cbac61982cfb14a70e4bf0fd7ec4d743384e3c90e471345318af5c001714->leave($__internal_9ae6cbac61982cfb14a70e4bf0fd7ec4d743384e3c90e471345318af5c001714_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_91200cc866307a8dd5b0e8198c19b51d7907e20a92b23063408970e56e54c288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91200cc866307a8dd5b0e8198c19b51d7907e20a92b23063408970e56e54c288->enter($__internal_91200cc866307a8dd5b0e8198c19b51d7907e20a92b23063408970e56e54c288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c55201a5d31e132d974346d0fd5233343926329cad13fd06898f010cda5b3ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55201a5d31e132d974346d0fd5233343926329cad13fd06898f010cda5b3ba6->enter($__internal_c55201a5d31e132d974346d0fd5233343926329cad13fd06898f010cda5b3ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c55201a5d31e132d974346d0fd5233343926329cad13fd06898f010cda5b3ba6->leave($__internal_c55201a5d31e132d974346d0fd5233343926329cad13fd06898f010cda5b3ba6_prof);

        
        $__internal_91200cc866307a8dd5b0e8198c19b51d7907e20a92b23063408970e56e54c288->leave($__internal_91200cc866307a8dd5b0e8198c19b51d7907e20a92b23063408970e56e54c288_prof);

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
