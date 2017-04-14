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
        $__internal_7d07f991ee36d8503af4cebcc4c7fdef18e612227b2c841a3a8e52814e5451db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d07f991ee36d8503af4cebcc4c7fdef18e612227b2c841a3a8e52814e5451db->enter($__internal_7d07f991ee36d8503af4cebcc4c7fdef18e612227b2c841a3a8e52814e5451db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_5a1632bd3100ef9d56274bb05a1b7cc6a6a62a678da712e4a70ce5b63ad2d567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1632bd3100ef9d56274bb05a1b7cc6a6a62a678da712e4a70ce5b63ad2d567->enter($__internal_5a1632bd3100ef9d56274bb05a1b7cc6a6a62a678da712e4a70ce5b63ad2d567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d07f991ee36d8503af4cebcc4c7fdef18e612227b2c841a3a8e52814e5451db->leave($__internal_7d07f991ee36d8503af4cebcc4c7fdef18e612227b2c841a3a8e52814e5451db_prof);

        
        $__internal_5a1632bd3100ef9d56274bb05a1b7cc6a6a62a678da712e4a70ce5b63ad2d567->leave($__internal_5a1632bd3100ef9d56274bb05a1b7cc6a6a62a678da712e4a70ce5b63ad2d567_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b3b4bb0dbbd394a8cf26c6d7071e537734519f22a4851de8c6928728f119287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3b4bb0dbbd394a8cf26c6d7071e537734519f22a4851de8c6928728f119287->enter($__internal_0b3b4bb0dbbd394a8cf26c6d7071e537734519f22a4851de8c6928728f119287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_29628245cde80fb6340f60850aff9dc657d58db11688b4b3a396eb6932242f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29628245cde80fb6340f60850aff9dc657d58db11688b4b3a396eb6932242f5c->enter($__internal_29628245cde80fb6340f60850aff9dc657d58db11688b4b3a396eb6932242f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_29628245cde80fb6340f60850aff9dc657d58db11688b4b3a396eb6932242f5c->leave($__internal_29628245cde80fb6340f60850aff9dc657d58db11688b4b3a396eb6932242f5c_prof);

        
        $__internal_0b3b4bb0dbbd394a8cf26c6d7071e537734519f22a4851de8c6928728f119287->leave($__internal_0b3b4bb0dbbd394a8cf26c6d7071e537734519f22a4851de8c6928728f119287_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e09488d72bf8c14b86db2405cbea252b2df13340bff7ab234364486d215fd38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e09488d72bf8c14b86db2405cbea252b2df13340bff7ab234364486d215fd38->enter($__internal_5e09488d72bf8c14b86db2405cbea252b2df13340bff7ab234364486d215fd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_527a5d4d0d8b7b8ace71eceedbd0f573b0887cb22ef63bf36637d2258a9de154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527a5d4d0d8b7b8ace71eceedbd0f573b0887cb22ef63bf36637d2258a9de154->enter($__internal_527a5d4d0d8b7b8ace71eceedbd0f573b0887cb22ef63bf36637d2258a9de154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_527a5d4d0d8b7b8ace71eceedbd0f573b0887cb22ef63bf36637d2258a9de154->leave($__internal_527a5d4d0d8b7b8ace71eceedbd0f573b0887cb22ef63bf36637d2258a9de154_prof);

        
        $__internal_5e09488d72bf8c14b86db2405cbea252b2df13340bff7ab234364486d215fd38->leave($__internal_5e09488d72bf8c14b86db2405cbea252b2df13340bff7ab234364486d215fd38_prof);

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
