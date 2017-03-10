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
        $__internal_4eb48c9b700d10d808c82568b80328151403f5ff2f1d9b3100c2bb700b1623ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb48c9b700d10d808c82568b80328151403f5ff2f1d9b3100c2bb700b1623ee->enter($__internal_4eb48c9b700d10d808c82568b80328151403f5ff2f1d9b3100c2bb700b1623ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_426461bb8a9a837026297c1bea7b14ca1fc052e2587516d756f1c866b33a9cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426461bb8a9a837026297c1bea7b14ca1fc052e2587516d756f1c866b33a9cb6->enter($__internal_426461bb8a9a837026297c1bea7b14ca1fc052e2587516d756f1c866b33a9cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4eb48c9b700d10d808c82568b80328151403f5ff2f1d9b3100c2bb700b1623ee->leave($__internal_4eb48c9b700d10d808c82568b80328151403f5ff2f1d9b3100c2bb700b1623ee_prof);

        
        $__internal_426461bb8a9a837026297c1bea7b14ca1fc052e2587516d756f1c866b33a9cb6->leave($__internal_426461bb8a9a837026297c1bea7b14ca1fc052e2587516d756f1c866b33a9cb6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_309eed00b183d82ee6fae0c46bebe70c6a208ec78aaf0409784d9e66fde0404d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309eed00b183d82ee6fae0c46bebe70c6a208ec78aaf0409784d9e66fde0404d->enter($__internal_309eed00b183d82ee6fae0c46bebe70c6a208ec78aaf0409784d9e66fde0404d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7ec6f5702c71d72351fce11425fdefcb04d9f95f2b1f5241c624d8a182b85bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec6f5702c71d72351fce11425fdefcb04d9f95f2b1f5241c624d8a182b85bdb->enter($__internal_7ec6f5702c71d72351fce11425fdefcb04d9f95f2b1f5241c624d8a182b85bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7ec6f5702c71d72351fce11425fdefcb04d9f95f2b1f5241c624d8a182b85bdb->leave($__internal_7ec6f5702c71d72351fce11425fdefcb04d9f95f2b1f5241c624d8a182b85bdb_prof);

        
        $__internal_309eed00b183d82ee6fae0c46bebe70c6a208ec78aaf0409784d9e66fde0404d->leave($__internal_309eed00b183d82ee6fae0c46bebe70c6a208ec78aaf0409784d9e66fde0404d_prof);

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
