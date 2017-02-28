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
        $__internal_0eedd4aa1942cf9644a7d49beaa6aa4d0106674b04c4cf575cb309c798e249d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eedd4aa1942cf9644a7d49beaa6aa4d0106674b04c4cf575cb309c798e249d9->enter($__internal_0eedd4aa1942cf9644a7d49beaa6aa4d0106674b04c4cf575cb309c798e249d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_5a669931d042c85c53717669d2d8d30f6ac4a9dbc407b2f562a5da3458567384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a669931d042c85c53717669d2d8d30f6ac4a9dbc407b2f562a5da3458567384->enter($__internal_5a669931d042c85c53717669d2d8d30f6ac4a9dbc407b2f562a5da3458567384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0eedd4aa1942cf9644a7d49beaa6aa4d0106674b04c4cf575cb309c798e249d9->leave($__internal_0eedd4aa1942cf9644a7d49beaa6aa4d0106674b04c4cf575cb309c798e249d9_prof);

        
        $__internal_5a669931d042c85c53717669d2d8d30f6ac4a9dbc407b2f562a5da3458567384->leave($__internal_5a669931d042c85c53717669d2d8d30f6ac4a9dbc407b2f562a5da3458567384_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_23b17278e02f193796e970de92572389a8060bb8abd8b4f7b5ae3c6aa9e23c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b17278e02f193796e970de92572389a8060bb8abd8b4f7b5ae3c6aa9e23c22->enter($__internal_23b17278e02f193796e970de92572389a8060bb8abd8b4f7b5ae3c6aa9e23c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_35fc255641dc2b4d4e6f5e264af75d7636fbf48f212ebb2bd8a9abc3e370c9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fc255641dc2b4d4e6f5e264af75d7636fbf48f212ebb2bd8a9abc3e370c9bd->enter($__internal_35fc255641dc2b4d4e6f5e264af75d7636fbf48f212ebb2bd8a9abc3e370c9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_35fc255641dc2b4d4e6f5e264af75d7636fbf48f212ebb2bd8a9abc3e370c9bd->leave($__internal_35fc255641dc2b4d4e6f5e264af75d7636fbf48f212ebb2bd8a9abc3e370c9bd_prof);

        
        $__internal_23b17278e02f193796e970de92572389a8060bb8abd8b4f7b5ae3c6aa9e23c22->leave($__internal_23b17278e02f193796e970de92572389a8060bb8abd8b4f7b5ae3c6aa9e23c22_prof);

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
