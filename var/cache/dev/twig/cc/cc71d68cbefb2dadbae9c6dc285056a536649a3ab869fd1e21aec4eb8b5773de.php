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
        $__internal_4d19721834b94fd92148d25de3822b953322f094da15d9f9ff9538d4eb7d6439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d19721834b94fd92148d25de3822b953322f094da15d9f9ff9538d4eb7d6439->enter($__internal_4d19721834b94fd92148d25de3822b953322f094da15d9f9ff9538d4eb7d6439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6674f07fd0a3163527e99e87e70856ef9a509404290e51608ffc3fba72831ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6674f07fd0a3163527e99e87e70856ef9a509404290e51608ffc3fba72831ae9->enter($__internal_6674f07fd0a3163527e99e87e70856ef9a509404290e51608ffc3fba72831ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4d19721834b94fd92148d25de3822b953322f094da15d9f9ff9538d4eb7d6439->leave($__internal_4d19721834b94fd92148d25de3822b953322f094da15d9f9ff9538d4eb7d6439_prof);

        
        $__internal_6674f07fd0a3163527e99e87e70856ef9a509404290e51608ffc3fba72831ae9->leave($__internal_6674f07fd0a3163527e99e87e70856ef9a509404290e51608ffc3fba72831ae9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3373119f6b864e83fd3adb1b83f552b62efb921f2bc3a4eb4f627aaeb0784e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3373119f6b864e83fd3adb1b83f552b62efb921f2bc3a4eb4f627aaeb0784e18->enter($__internal_3373119f6b864e83fd3adb1b83f552b62efb921f2bc3a4eb4f627aaeb0784e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e10b7218a57239ab94bebb1d8620261a64370911c5436f051bc6c78a172a56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e10b7218a57239ab94bebb1d8620261a64370911c5436f051bc6c78a172a56d->enter($__internal_3e10b7218a57239ab94bebb1d8620261a64370911c5436f051bc6c78a172a56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3e10b7218a57239ab94bebb1d8620261a64370911c5436f051bc6c78a172a56d->leave($__internal_3e10b7218a57239ab94bebb1d8620261a64370911c5436f051bc6c78a172a56d_prof);

        
        $__internal_3373119f6b864e83fd3adb1b83f552b62efb921f2bc3a4eb4f627aaeb0784e18->leave($__internal_3373119f6b864e83fd3adb1b83f552b62efb921f2bc3a4eb4f627aaeb0784e18_prof);

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
