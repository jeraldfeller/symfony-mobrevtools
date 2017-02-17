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
        $__internal_d145c88019262faca64acece5253ae4c89715c0e27a682e04f7d7c85ba330251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d145c88019262faca64acece5253ae4c89715c0e27a682e04f7d7c85ba330251->enter($__internal_d145c88019262faca64acece5253ae4c89715c0e27a682e04f7d7c85ba330251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_b4b403241a013a0ebfecccbf9a29b355c1604c1859d9474122af58cbf83b7fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b403241a013a0ebfecccbf9a29b355c1604c1859d9474122af58cbf83b7fc6->enter($__internal_b4b403241a013a0ebfecccbf9a29b355c1604c1859d9474122af58cbf83b7fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d145c88019262faca64acece5253ae4c89715c0e27a682e04f7d7c85ba330251->leave($__internal_d145c88019262faca64acece5253ae4c89715c0e27a682e04f7d7c85ba330251_prof);

        
        $__internal_b4b403241a013a0ebfecccbf9a29b355c1604c1859d9474122af58cbf83b7fc6->leave($__internal_b4b403241a013a0ebfecccbf9a29b355c1604c1859d9474122af58cbf83b7fc6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_85fe4443f84141dd0a7977099e3a28f29ae5e8f607e21cd5780a73cab9a87a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85fe4443f84141dd0a7977099e3a28f29ae5e8f607e21cd5780a73cab9a87a0e->enter($__internal_85fe4443f84141dd0a7977099e3a28f29ae5e8f607e21cd5780a73cab9a87a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d8979c1bfba72b795147f78f6dd77371db81e7b261f6c7316be45eeefb0ea2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8979c1bfba72b795147f78f6dd77371db81e7b261f6c7316be45eeefb0ea2b6->enter($__internal_d8979c1bfba72b795147f78f6dd77371db81e7b261f6c7316be45eeefb0ea2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d8979c1bfba72b795147f78f6dd77371db81e7b261f6c7316be45eeefb0ea2b6->leave($__internal_d8979c1bfba72b795147f78f6dd77371db81e7b261f6c7316be45eeefb0ea2b6_prof);

        
        $__internal_85fe4443f84141dd0a7977099e3a28f29ae5e8f607e21cd5780a73cab9a87a0e->leave($__internal_85fe4443f84141dd0a7977099e3a28f29ae5e8f607e21cd5780a73cab9a87a0e_prof);

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
