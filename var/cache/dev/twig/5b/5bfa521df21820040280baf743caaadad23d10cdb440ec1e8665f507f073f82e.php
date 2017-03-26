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
        $__internal_7bd25612417c474acf724eefc9174cda0a6e95880a6d6de89e3146b05a9a2c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd25612417c474acf724eefc9174cda0a6e95880a6d6de89e3146b05a9a2c8e->enter($__internal_7bd25612417c474acf724eefc9174cda0a6e95880a6d6de89e3146b05a9a2c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_4cedbc5856b51e9e9efe1a7483fe09ecd6623681c01d17ade08b93e164a2b79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cedbc5856b51e9e9efe1a7483fe09ecd6623681c01d17ade08b93e164a2b79d->enter($__internal_4cedbc5856b51e9e9efe1a7483fe09ecd6623681c01d17ade08b93e164a2b79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7bd25612417c474acf724eefc9174cda0a6e95880a6d6de89e3146b05a9a2c8e->leave($__internal_7bd25612417c474acf724eefc9174cda0a6e95880a6d6de89e3146b05a9a2c8e_prof);

        
        $__internal_4cedbc5856b51e9e9efe1a7483fe09ecd6623681c01d17ade08b93e164a2b79d->leave($__internal_4cedbc5856b51e9e9efe1a7483fe09ecd6623681c01d17ade08b93e164a2b79d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_028d8fdc288f4b6a1a288995ea79d294d91fe8ddabe159917cef3649c9b9d957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_028d8fdc288f4b6a1a288995ea79d294d91fe8ddabe159917cef3649c9b9d957->enter($__internal_028d8fdc288f4b6a1a288995ea79d294d91fe8ddabe159917cef3649c9b9d957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_50a0a34871e2d05e4f355452a77dd6d431af3b807bd81ef3d1617d19d84a956e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a0a34871e2d05e4f355452a77dd6d431af3b807bd81ef3d1617d19d84a956e->enter($__internal_50a0a34871e2d05e4f355452a77dd6d431af3b807bd81ef3d1617d19d84a956e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_50a0a34871e2d05e4f355452a77dd6d431af3b807bd81ef3d1617d19d84a956e->leave($__internal_50a0a34871e2d05e4f355452a77dd6d431af3b807bd81ef3d1617d19d84a956e_prof);

        
        $__internal_028d8fdc288f4b6a1a288995ea79d294d91fe8ddabe159917cef3649c9b9d957->leave($__internal_028d8fdc288f4b6a1a288995ea79d294d91fe8ddabe159917cef3649c9b9d957_prof);

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
