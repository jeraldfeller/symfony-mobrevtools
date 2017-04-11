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
        $__internal_037bdae60acadefa9d082f9b7eac085b87641961bc8b4099fb47635527b8a9b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037bdae60acadefa9d082f9b7eac085b87641961bc8b4099fb47635527b8a9b5->enter($__internal_037bdae60acadefa9d082f9b7eac085b87641961bc8b4099fb47635527b8a9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8189f8f7574c71c56cd03434bf3b412f15a32a9940a2b7ceeab4010416a63674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8189f8f7574c71c56cd03434bf3b412f15a32a9940a2b7ceeab4010416a63674->enter($__internal_8189f8f7574c71c56cd03434bf3b412f15a32a9940a2b7ceeab4010416a63674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_037bdae60acadefa9d082f9b7eac085b87641961bc8b4099fb47635527b8a9b5->leave($__internal_037bdae60acadefa9d082f9b7eac085b87641961bc8b4099fb47635527b8a9b5_prof);

        
        $__internal_8189f8f7574c71c56cd03434bf3b412f15a32a9940a2b7ceeab4010416a63674->leave($__internal_8189f8f7574c71c56cd03434bf3b412f15a32a9940a2b7ceeab4010416a63674_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7dbc7a8278947b12c13699b3a903b87d6ffe5d98ac83ae04657836c85da3e986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dbc7a8278947b12c13699b3a903b87d6ffe5d98ac83ae04657836c85da3e986->enter($__internal_7dbc7a8278947b12c13699b3a903b87d6ffe5d98ac83ae04657836c85da3e986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_facf65e33cb7cf5740000526d473ab15ad81a146e7ed69f0aa51cabc923e2e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_facf65e33cb7cf5740000526d473ab15ad81a146e7ed69f0aa51cabc923e2e60->enter($__internal_facf65e33cb7cf5740000526d473ab15ad81a146e7ed69f0aa51cabc923e2e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_facf65e33cb7cf5740000526d473ab15ad81a146e7ed69f0aa51cabc923e2e60->leave($__internal_facf65e33cb7cf5740000526d473ab15ad81a146e7ed69f0aa51cabc923e2e60_prof);

        
        $__internal_7dbc7a8278947b12c13699b3a903b87d6ffe5d98ac83ae04657836c85da3e986->leave($__internal_7dbc7a8278947b12c13699b3a903b87d6ffe5d98ac83ae04657836c85da3e986_prof);

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
