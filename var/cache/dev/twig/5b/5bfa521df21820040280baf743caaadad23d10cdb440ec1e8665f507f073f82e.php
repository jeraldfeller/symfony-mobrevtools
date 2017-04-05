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
        $__internal_018db7d8538cbdfc72303ac228766b36cf73744b99f3d0a79f2efeb329242cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018db7d8538cbdfc72303ac228766b36cf73744b99f3d0a79f2efeb329242cbd->enter($__internal_018db7d8538cbdfc72303ac228766b36cf73744b99f3d0a79f2efeb329242cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_efd03bf97fe9b5fc86abcaacf22d03da2d9a43e7bbc5e19a59836be6422659ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd03bf97fe9b5fc86abcaacf22d03da2d9a43e7bbc5e19a59836be6422659ef->enter($__internal_efd03bf97fe9b5fc86abcaacf22d03da2d9a43e7bbc5e19a59836be6422659ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_018db7d8538cbdfc72303ac228766b36cf73744b99f3d0a79f2efeb329242cbd->leave($__internal_018db7d8538cbdfc72303ac228766b36cf73744b99f3d0a79f2efeb329242cbd_prof);

        
        $__internal_efd03bf97fe9b5fc86abcaacf22d03da2d9a43e7bbc5e19a59836be6422659ef->leave($__internal_efd03bf97fe9b5fc86abcaacf22d03da2d9a43e7bbc5e19a59836be6422659ef_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c65bf8cfb166c87e10eaa5573560eb00a90a183ce187801d929d112ad3c04640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65bf8cfb166c87e10eaa5573560eb00a90a183ce187801d929d112ad3c04640->enter($__internal_c65bf8cfb166c87e10eaa5573560eb00a90a183ce187801d929d112ad3c04640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6542a57afb7241458f788fd7c749e8de49ffc7f2b246ac9f2b3da9b1152ccbfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6542a57afb7241458f788fd7c749e8de49ffc7f2b246ac9f2b3da9b1152ccbfb->enter($__internal_6542a57afb7241458f788fd7c749e8de49ffc7f2b246ac9f2b3da9b1152ccbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6542a57afb7241458f788fd7c749e8de49ffc7f2b246ac9f2b3da9b1152ccbfb->leave($__internal_6542a57afb7241458f788fd7c749e8de49ffc7f2b246ac9f2b3da9b1152ccbfb_prof);

        
        $__internal_c65bf8cfb166c87e10eaa5573560eb00a90a183ce187801d929d112ad3c04640->leave($__internal_c65bf8cfb166c87e10eaa5573560eb00a90a183ce187801d929d112ad3c04640_prof);

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
