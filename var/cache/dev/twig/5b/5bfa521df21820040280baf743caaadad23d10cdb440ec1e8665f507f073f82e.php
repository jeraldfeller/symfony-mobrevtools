<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_8e58a1bf75a4d5720b99b5d55955428a1d1228831aeb5d5b66b7d7a6ab3ee0f5 extends Twig_Template
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
        $__internal_9b5f2076b653713e6f18ce961593b0bbf0cd989c5620affd17d22b011d52bf87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b5f2076b653713e6f18ce961593b0bbf0cd989c5620affd17d22b011d52bf87->enter($__internal_9b5f2076b653713e6f18ce961593b0bbf0cd989c5620affd17d22b011d52bf87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_81ac78d19e27d52fff47758dc33a1ce388d091fbb8c06866f674bb34fa9e8895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ac78d19e27d52fff47758dc33a1ce388d091fbb8c06866f674bb34fa9e8895->enter($__internal_81ac78d19e27d52fff47758dc33a1ce388d091fbb8c06866f674bb34fa9e8895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9b5f2076b653713e6f18ce961593b0bbf0cd989c5620affd17d22b011d52bf87->leave($__internal_9b5f2076b653713e6f18ce961593b0bbf0cd989c5620affd17d22b011d52bf87_prof);

        
        $__internal_81ac78d19e27d52fff47758dc33a1ce388d091fbb8c06866f674bb34fa9e8895->leave($__internal_81ac78d19e27d52fff47758dc33a1ce388d091fbb8c06866f674bb34fa9e8895_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1efd0333bbc85a4316e3e3112589ecf1718c198088d03f15430558df9cb0bf99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1efd0333bbc85a4316e3e3112589ecf1718c198088d03f15430558df9cb0bf99->enter($__internal_1efd0333bbc85a4316e3e3112589ecf1718c198088d03f15430558df9cb0bf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e9fb311ad4bb9e9b3285be594f77d75dd3478a27169625b7a759d7f866841c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fb311ad4bb9e9b3285be594f77d75dd3478a27169625b7a759d7f866841c2a->enter($__internal_e9fb311ad4bb9e9b3285be594f77d75dd3478a27169625b7a759d7f866841c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e9fb311ad4bb9e9b3285be594f77d75dd3478a27169625b7a759d7f866841c2a->leave($__internal_e9fb311ad4bb9e9b3285be594f77d75dd3478a27169625b7a759d7f866841c2a_prof);

        
        $__internal_1efd0333bbc85a4316e3e3112589ecf1718c198088d03f15430558df9cb0bf99->leave($__internal_1efd0333bbc85a4316e3e3112589ecf1718c198088d03f15430558df9cb0bf99_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
