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
        $__internal_ec09958ee5fdc671b12f397a5576859cc71d4f01c6934ebd43e844e25ba03b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec09958ee5fdc671b12f397a5576859cc71d4f01c6934ebd43e844e25ba03b97->enter($__internal_ec09958ee5fdc671b12f397a5576859cc71d4f01c6934ebd43e844e25ba03b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ae5808b0833d21a3efb0ea5e24a08e95bc69d1987139c9c01ff1975371ab5866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5808b0833d21a3efb0ea5e24a08e95bc69d1987139c9c01ff1975371ab5866->enter($__internal_ae5808b0833d21a3efb0ea5e24a08e95bc69d1987139c9c01ff1975371ab5866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ec09958ee5fdc671b12f397a5576859cc71d4f01c6934ebd43e844e25ba03b97->leave($__internal_ec09958ee5fdc671b12f397a5576859cc71d4f01c6934ebd43e844e25ba03b97_prof);

        
        $__internal_ae5808b0833d21a3efb0ea5e24a08e95bc69d1987139c9c01ff1975371ab5866->leave($__internal_ae5808b0833d21a3efb0ea5e24a08e95bc69d1987139c9c01ff1975371ab5866_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0b3ec582b1027286ff1a2e2005a4e50febdab4b4583b8ec483675797d240f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b3ec582b1027286ff1a2e2005a4e50febdab4b4583b8ec483675797d240f51->enter($__internal_a0b3ec582b1027286ff1a2e2005a4e50febdab4b4583b8ec483675797d240f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b1809a3e26811054fc84ede9b3e2f5dee7cf818d548cafe1f422a65650be2a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1809a3e26811054fc84ede9b3e2f5dee7cf818d548cafe1f422a65650be2a42->enter($__internal_b1809a3e26811054fc84ede9b3e2f5dee7cf818d548cafe1f422a65650be2a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b1809a3e26811054fc84ede9b3e2f5dee7cf818d548cafe1f422a65650be2a42->leave($__internal_b1809a3e26811054fc84ede9b3e2f5dee7cf818d548cafe1f422a65650be2a42_prof);

        
        $__internal_a0b3ec582b1027286ff1a2e2005a4e50febdab4b4583b8ec483675797d240f51->leave($__internal_a0b3ec582b1027286ff1a2e2005a4e50febdab4b4583b8ec483675797d240f51_prof);

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
