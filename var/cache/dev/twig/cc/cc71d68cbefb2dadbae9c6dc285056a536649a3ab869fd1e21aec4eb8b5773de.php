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
        $__internal_0c5b74b20be6d1e67af41f9d27a026bd46d24518cb3ea6e18689351ab577f7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5b74b20be6d1e67af41f9d27a026bd46d24518cb3ea6e18689351ab577f7a3->enter($__internal_0c5b74b20be6d1e67af41f9d27a026bd46d24518cb3ea6e18689351ab577f7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d0addafe62cfc4af032b7bc21316c08a74f155c3c4d3f50a9d3966218b0de342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0addafe62cfc4af032b7bc21316c08a74f155c3c4d3f50a9d3966218b0de342->enter($__internal_d0addafe62cfc4af032b7bc21316c08a74f155c3c4d3f50a9d3966218b0de342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0c5b74b20be6d1e67af41f9d27a026bd46d24518cb3ea6e18689351ab577f7a3->leave($__internal_0c5b74b20be6d1e67af41f9d27a026bd46d24518cb3ea6e18689351ab577f7a3_prof);

        
        $__internal_d0addafe62cfc4af032b7bc21316c08a74f155c3c4d3f50a9d3966218b0de342->leave($__internal_d0addafe62cfc4af032b7bc21316c08a74f155c3c4d3f50a9d3966218b0de342_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fd80d7458dfd04a2f9c697e0f614294169badf751de3f0ee3efa78480b7f0c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd80d7458dfd04a2f9c697e0f614294169badf751de3f0ee3efa78480b7f0c2->enter($__internal_9fd80d7458dfd04a2f9c697e0f614294169badf751de3f0ee3efa78480b7f0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e1f005b69f2b3862751f094d380e2ba5bb1d8c1739d434f65b18f6d102b86887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f005b69f2b3862751f094d380e2ba5bb1d8c1739d434f65b18f6d102b86887->enter($__internal_e1f005b69f2b3862751f094d380e2ba5bb1d8c1739d434f65b18f6d102b86887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e1f005b69f2b3862751f094d380e2ba5bb1d8c1739d434f65b18f6d102b86887->leave($__internal_e1f005b69f2b3862751f094d380e2ba5bb1d8c1739d434f65b18f6d102b86887_prof);

        
        $__internal_9fd80d7458dfd04a2f9c697e0f614294169badf751de3f0ee3efa78480b7f0c2->leave($__internal_9fd80d7458dfd04a2f9c697e0f614294169badf751de3f0ee3efa78480b7f0c2_prof);

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
