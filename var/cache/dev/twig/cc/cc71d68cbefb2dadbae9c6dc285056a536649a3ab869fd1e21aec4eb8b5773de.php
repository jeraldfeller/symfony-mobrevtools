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
        $__internal_2deda4ff4fa355236ca275db3edb8b122a3a42796d4c0e54e5f68bea80835d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2deda4ff4fa355236ca275db3edb8b122a3a42796d4c0e54e5f68bea80835d4a->enter($__internal_2deda4ff4fa355236ca275db3edb8b122a3a42796d4c0e54e5f68bea80835d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f6fbdb281d0ea90957aa98828343e699f97045f439eb92b9790d5d9e31218a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fbdb281d0ea90957aa98828343e699f97045f439eb92b9790d5d9e31218a76->enter($__internal_f6fbdb281d0ea90957aa98828343e699f97045f439eb92b9790d5d9e31218a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2deda4ff4fa355236ca275db3edb8b122a3a42796d4c0e54e5f68bea80835d4a->leave($__internal_2deda4ff4fa355236ca275db3edb8b122a3a42796d4c0e54e5f68bea80835d4a_prof);

        
        $__internal_f6fbdb281d0ea90957aa98828343e699f97045f439eb92b9790d5d9e31218a76->leave($__internal_f6fbdb281d0ea90957aa98828343e699f97045f439eb92b9790d5d9e31218a76_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f17106710527e08fd8caff362b49383c4f710f3ec2b948e784f88413d7df6089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17106710527e08fd8caff362b49383c4f710f3ec2b948e784f88413d7df6089->enter($__internal_f17106710527e08fd8caff362b49383c4f710f3ec2b948e784f88413d7df6089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fff75cbdbe7967cbf856ad606388bcf24c2c5305361c273a049422c0d95b5269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff75cbdbe7967cbf856ad606388bcf24c2c5305361c273a049422c0d95b5269->enter($__internal_fff75cbdbe7967cbf856ad606388bcf24c2c5305361c273a049422c0d95b5269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fff75cbdbe7967cbf856ad606388bcf24c2c5305361c273a049422c0d95b5269->leave($__internal_fff75cbdbe7967cbf856ad606388bcf24c2c5305361c273a049422c0d95b5269_prof);

        
        $__internal_f17106710527e08fd8caff362b49383c4f710f3ec2b948e784f88413d7df6089->leave($__internal_f17106710527e08fd8caff362b49383c4f710f3ec2b948e784f88413d7df6089_prof);

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
