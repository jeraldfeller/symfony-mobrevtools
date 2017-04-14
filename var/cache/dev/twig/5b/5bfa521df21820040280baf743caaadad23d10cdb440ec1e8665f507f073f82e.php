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
        $__internal_c274ecdcd2fda5232392af25b88a0573784e96769ca7db58fb871fb23b87d49d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c274ecdcd2fda5232392af25b88a0573784e96769ca7db58fb871fb23b87d49d->enter($__internal_c274ecdcd2fda5232392af25b88a0573784e96769ca7db58fb871fb23b87d49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_bc73c5b4d8b15c4def316bdb295232ca1f46c3cdbd924b2b7f76b150f403ff5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc73c5b4d8b15c4def316bdb295232ca1f46c3cdbd924b2b7f76b150f403ff5b->enter($__internal_bc73c5b4d8b15c4def316bdb295232ca1f46c3cdbd924b2b7f76b150f403ff5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c274ecdcd2fda5232392af25b88a0573784e96769ca7db58fb871fb23b87d49d->leave($__internal_c274ecdcd2fda5232392af25b88a0573784e96769ca7db58fb871fb23b87d49d_prof);

        
        $__internal_bc73c5b4d8b15c4def316bdb295232ca1f46c3cdbd924b2b7f76b150f403ff5b->leave($__internal_bc73c5b4d8b15c4def316bdb295232ca1f46c3cdbd924b2b7f76b150f403ff5b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a89fb063c0afb668edc296ce31229103a10aa2cdbf99715fd397e62754c26175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89fb063c0afb668edc296ce31229103a10aa2cdbf99715fd397e62754c26175->enter($__internal_a89fb063c0afb668edc296ce31229103a10aa2cdbf99715fd397e62754c26175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bcf33d8eea9697433c2d22c6f40df957360acfc8c6b60bf2b589fcfd1cddbe88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf33d8eea9697433c2d22c6f40df957360acfc8c6b60bf2b589fcfd1cddbe88->enter($__internal_bcf33d8eea9697433c2d22c6f40df957360acfc8c6b60bf2b589fcfd1cddbe88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bcf33d8eea9697433c2d22c6f40df957360acfc8c6b60bf2b589fcfd1cddbe88->leave($__internal_bcf33d8eea9697433c2d22c6f40df957360acfc8c6b60bf2b589fcfd1cddbe88_prof);

        
        $__internal_a89fb063c0afb668edc296ce31229103a10aa2cdbf99715fd397e62754c26175->leave($__internal_a89fb063c0afb668edc296ce31229103a10aa2cdbf99715fd397e62754c26175_prof);

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
