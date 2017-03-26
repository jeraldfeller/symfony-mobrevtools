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
        $__internal_bc91cf9641d6d24259448ded3f8663de490cb5c6a5227a5ff76325568e6e1f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc91cf9641d6d24259448ded3f8663de490cb5c6a5227a5ff76325568e6e1f72->enter($__internal_bc91cf9641d6d24259448ded3f8663de490cb5c6a5227a5ff76325568e6e1f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6c9dff983517a1eda6e05a416ae861f962d33597454ccaa7845d1134f00c1ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9dff983517a1eda6e05a416ae861f962d33597454ccaa7845d1134f00c1ed2->enter($__internal_6c9dff983517a1eda6e05a416ae861f962d33597454ccaa7845d1134f00c1ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bc91cf9641d6d24259448ded3f8663de490cb5c6a5227a5ff76325568e6e1f72->leave($__internal_bc91cf9641d6d24259448ded3f8663de490cb5c6a5227a5ff76325568e6e1f72_prof);

        
        $__internal_6c9dff983517a1eda6e05a416ae861f962d33597454ccaa7845d1134f00c1ed2->leave($__internal_6c9dff983517a1eda6e05a416ae861f962d33597454ccaa7845d1134f00c1ed2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5557af8deb68f3766aef19906a75bf3f7118982693bd83ad377bd60cafc43c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5557af8deb68f3766aef19906a75bf3f7118982693bd83ad377bd60cafc43c4->enter($__internal_f5557af8deb68f3766aef19906a75bf3f7118982693bd83ad377bd60cafc43c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5d620ec4c13e5b4cabbf485fdb992fff2a1c5f07861a6a6f4e01f99239a5e0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d620ec4c13e5b4cabbf485fdb992fff2a1c5f07861a6a6f4e01f99239a5e0f0->enter($__internal_5d620ec4c13e5b4cabbf485fdb992fff2a1c5f07861a6a6f4e01f99239a5e0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5d620ec4c13e5b4cabbf485fdb992fff2a1c5f07861a6a6f4e01f99239a5e0f0->leave($__internal_5d620ec4c13e5b4cabbf485fdb992fff2a1c5f07861a6a6f4e01f99239a5e0f0_prof);

        
        $__internal_f5557af8deb68f3766aef19906a75bf3f7118982693bd83ad377bd60cafc43c4->leave($__internal_f5557af8deb68f3766aef19906a75bf3f7118982693bd83ad377bd60cafc43c4_prof);

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
