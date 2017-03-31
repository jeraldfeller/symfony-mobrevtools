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
        $__internal_3dad9dd2fb5082f611a5f5b4da835d2577ded8a1472efb22d1306c41c321eed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dad9dd2fb5082f611a5f5b4da835d2577ded8a1472efb22d1306c41c321eed5->enter($__internal_3dad9dd2fb5082f611a5f5b4da835d2577ded8a1472efb22d1306c41c321eed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_817b08c28f03935920fda184157899083d77df73e5d264e8a01a51aa26226bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817b08c28f03935920fda184157899083d77df73e5d264e8a01a51aa26226bb4->enter($__internal_817b08c28f03935920fda184157899083d77df73e5d264e8a01a51aa26226bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3dad9dd2fb5082f611a5f5b4da835d2577ded8a1472efb22d1306c41c321eed5->leave($__internal_3dad9dd2fb5082f611a5f5b4da835d2577ded8a1472efb22d1306c41c321eed5_prof);

        
        $__internal_817b08c28f03935920fda184157899083d77df73e5d264e8a01a51aa26226bb4->leave($__internal_817b08c28f03935920fda184157899083d77df73e5d264e8a01a51aa26226bb4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b5d4c5a49dd864e0fb2cf62972ff747f2dc279dfeb184f0ca78b6f81f8b56d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5d4c5a49dd864e0fb2cf62972ff747f2dc279dfeb184f0ca78b6f81f8b56d6->enter($__internal_8b5d4c5a49dd864e0fb2cf62972ff747f2dc279dfeb184f0ca78b6f81f8b56d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a7033d5b685e7d0e3a3a2f360a716cafe7d29083f6abacbbe35e31c6bf1066ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7033d5b685e7d0e3a3a2f360a716cafe7d29083f6abacbbe35e31c6bf1066ff->enter($__internal_a7033d5b685e7d0e3a3a2f360a716cafe7d29083f6abacbbe35e31c6bf1066ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a7033d5b685e7d0e3a3a2f360a716cafe7d29083f6abacbbe35e31c6bf1066ff->leave($__internal_a7033d5b685e7d0e3a3a2f360a716cafe7d29083f6abacbbe35e31c6bf1066ff_prof);

        
        $__internal_8b5d4c5a49dd864e0fb2cf62972ff747f2dc279dfeb184f0ca78b6f81f8b56d6->leave($__internal_8b5d4c5a49dd864e0fb2cf62972ff747f2dc279dfeb184f0ca78b6f81f8b56d6_prof);

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
