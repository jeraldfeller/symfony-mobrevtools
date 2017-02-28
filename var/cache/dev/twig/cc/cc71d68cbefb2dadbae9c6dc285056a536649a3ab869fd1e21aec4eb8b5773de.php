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
        $__internal_0e99d25f818ffb884b591b8496640528ced29a8487f0090d76a4e4b5959f9f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e99d25f818ffb884b591b8496640528ced29a8487f0090d76a4e4b5959f9f03->enter($__internal_0e99d25f818ffb884b591b8496640528ced29a8487f0090d76a4e4b5959f9f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_327d88b9bb3f450e345bd1f7415420461ecfcd3c2855bc4a2f137c7c10c98e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327d88b9bb3f450e345bd1f7415420461ecfcd3c2855bc4a2f137c7c10c98e1f->enter($__internal_327d88b9bb3f450e345bd1f7415420461ecfcd3c2855bc4a2f137c7c10c98e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0e99d25f818ffb884b591b8496640528ced29a8487f0090d76a4e4b5959f9f03->leave($__internal_0e99d25f818ffb884b591b8496640528ced29a8487f0090d76a4e4b5959f9f03_prof);

        
        $__internal_327d88b9bb3f450e345bd1f7415420461ecfcd3c2855bc4a2f137c7c10c98e1f->leave($__internal_327d88b9bb3f450e345bd1f7415420461ecfcd3c2855bc4a2f137c7c10c98e1f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a9d8303a6e31875050c1a63a7add7579defe3d4d6792f323ca623f9369d1481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9d8303a6e31875050c1a63a7add7579defe3d4d6792f323ca623f9369d1481->enter($__internal_7a9d8303a6e31875050c1a63a7add7579defe3d4d6792f323ca623f9369d1481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e79b16bdd3bac9b8fdfe393e08f5f65cc55943607cbdad4a899301fc8725edce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e79b16bdd3bac9b8fdfe393e08f5f65cc55943607cbdad4a899301fc8725edce->enter($__internal_e79b16bdd3bac9b8fdfe393e08f5f65cc55943607cbdad4a899301fc8725edce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e79b16bdd3bac9b8fdfe393e08f5f65cc55943607cbdad4a899301fc8725edce->leave($__internal_e79b16bdd3bac9b8fdfe393e08f5f65cc55943607cbdad4a899301fc8725edce_prof);

        
        $__internal_7a9d8303a6e31875050c1a63a7add7579defe3d4d6792f323ca623f9369d1481->leave($__internal_7a9d8303a6e31875050c1a63a7add7579defe3d4d6792f323ca623f9369d1481_prof);

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
