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
        $__internal_bd11d595afa650f130cc09483b517d83f414361b6563916d9adf0431ae9bbcef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd11d595afa650f130cc09483b517d83f414361b6563916d9adf0431ae9bbcef->enter($__internal_bd11d595afa650f130cc09483b517d83f414361b6563916d9adf0431ae9bbcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0df754cff736f89d874fe195fd6451d7f2874549cfc849f8b02efb60753a2a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df754cff736f89d874fe195fd6451d7f2874549cfc849f8b02efb60753a2a75->enter($__internal_0df754cff736f89d874fe195fd6451d7f2874549cfc849f8b02efb60753a2a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bd11d595afa650f130cc09483b517d83f414361b6563916d9adf0431ae9bbcef->leave($__internal_bd11d595afa650f130cc09483b517d83f414361b6563916d9adf0431ae9bbcef_prof);

        
        $__internal_0df754cff736f89d874fe195fd6451d7f2874549cfc849f8b02efb60753a2a75->leave($__internal_0df754cff736f89d874fe195fd6451d7f2874549cfc849f8b02efb60753a2a75_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb81c7c943440b7e4607e9fb6a1093f4c7ff4d2d59b424369b686b6480b17cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb81c7c943440b7e4607e9fb6a1093f4c7ff4d2d59b424369b686b6480b17cf7->enter($__internal_fb81c7c943440b7e4607e9fb6a1093f4c7ff4d2d59b424369b686b6480b17cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_67ef0644a5bee20ff268f60f38a27a8306bbd86ae58a36ea4e79615e3879d44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ef0644a5bee20ff268f60f38a27a8306bbd86ae58a36ea4e79615e3879d44a->enter($__internal_67ef0644a5bee20ff268f60f38a27a8306bbd86ae58a36ea4e79615e3879d44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_67ef0644a5bee20ff268f60f38a27a8306bbd86ae58a36ea4e79615e3879d44a->leave($__internal_67ef0644a5bee20ff268f60f38a27a8306bbd86ae58a36ea4e79615e3879d44a_prof);

        
        $__internal_fb81c7c943440b7e4607e9fb6a1093f4c7ff4d2d59b424369b686b6480b17cf7->leave($__internal_fb81c7c943440b7e4607e9fb6a1093f4c7ff4d2d59b424369b686b6480b17cf7_prof);

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
