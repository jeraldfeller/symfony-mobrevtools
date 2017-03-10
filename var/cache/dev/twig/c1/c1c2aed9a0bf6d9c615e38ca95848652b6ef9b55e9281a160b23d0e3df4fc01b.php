<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ea9f09f42916f8f4acf778706cca9ddd20b59b9dcc0dac08f191931aa642121e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_446d53a5ea023e9f0a29ef8775de84f33a8065ed5ab2988ff10cf2ba8b2b561e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446d53a5ea023e9f0a29ef8775de84f33a8065ed5ab2988ff10cf2ba8b2b561e->enter($__internal_446d53a5ea023e9f0a29ef8775de84f33a8065ed5ab2988ff10cf2ba8b2b561e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_fa514f2541569682d25b3b8e836037c199ccd823efa6d4ec49a61b445cf1847a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa514f2541569682d25b3b8e836037c199ccd823efa6d4ec49a61b445cf1847a->enter($__internal_fa514f2541569682d25b3b8e836037c199ccd823efa6d4ec49a61b445cf1847a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_446d53a5ea023e9f0a29ef8775de84f33a8065ed5ab2988ff10cf2ba8b2b561e->leave($__internal_446d53a5ea023e9f0a29ef8775de84f33a8065ed5ab2988ff10cf2ba8b2b561e_prof);

        
        $__internal_fa514f2541569682d25b3b8e836037c199ccd823efa6d4ec49a61b445cf1847a->leave($__internal_fa514f2541569682d25b3b8e836037c199ccd823efa6d4ec49a61b445cf1847a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbc3a5a0edd316fb266efebf1f13bb8fbb3cc5a1089a5ced7854956fb1004c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc3a5a0edd316fb266efebf1f13bb8fbb3cc5a1089a5ced7854956fb1004c2f->enter($__internal_bbc3a5a0edd316fb266efebf1f13bb8fbb3cc5a1089a5ced7854956fb1004c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b0d1a3e4c6ef4d11e36dd1d074e4a0149758eb3b76c99283d698341b9f366cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0d1a3e4c6ef4d11e36dd1d074e4a0149758eb3b76c99283d698341b9f366cf->enter($__internal_5b0d1a3e4c6ef4d11e36dd1d074e4a0149758eb3b76c99283d698341b9f366cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5b0d1a3e4c6ef4d11e36dd1d074e4a0149758eb3b76c99283d698341b9f366cf->leave($__internal_5b0d1a3e4c6ef4d11e36dd1d074e4a0149758eb3b76c99283d698341b9f366cf_prof);

        
        $__internal_bbc3a5a0edd316fb266efebf1f13bb8fbb3cc5a1089a5ced7854956fb1004c2f->leave($__internal_bbc3a5a0edd316fb266efebf1f13bb8fbb3cc5a1089a5ced7854956fb1004c2f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_470158272052887ac89a065e2a499f50955ba12db26e2e677d731fa579231477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470158272052887ac89a065e2a499f50955ba12db26e2e677d731fa579231477->enter($__internal_470158272052887ac89a065e2a499f50955ba12db26e2e677d731fa579231477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e65b017ae1308f8d609b5522946ee700ba5294310669c8633613361adec05fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65b017ae1308f8d609b5522946ee700ba5294310669c8633613361adec05fcf->enter($__internal_e65b017ae1308f8d609b5522946ee700ba5294310669c8633613361adec05fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e65b017ae1308f8d609b5522946ee700ba5294310669c8633613361adec05fcf->leave($__internal_e65b017ae1308f8d609b5522946ee700ba5294310669c8633613361adec05fcf_prof);

        
        $__internal_470158272052887ac89a065e2a499f50955ba12db26e2e677d731fa579231477->leave($__internal_470158272052887ac89a065e2a499f50955ba12db26e2e677d731fa579231477_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
