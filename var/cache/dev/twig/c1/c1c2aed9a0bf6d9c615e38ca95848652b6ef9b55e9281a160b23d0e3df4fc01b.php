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
        $__internal_bf118ca2451ef9ffad6b0525e4c0c620326c5c672f748bb6c06a23d6de7a0ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf118ca2451ef9ffad6b0525e4c0c620326c5c672f748bb6c06a23d6de7a0ef0->enter($__internal_bf118ca2451ef9ffad6b0525e4c0c620326c5c672f748bb6c06a23d6de7a0ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c8b73868bdb46bdafad288efd16f79be3777dec0977404cb4e52e3a2fc2f404e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b73868bdb46bdafad288efd16f79be3777dec0977404cb4e52e3a2fc2f404e->enter($__internal_c8b73868bdb46bdafad288efd16f79be3777dec0977404cb4e52e3a2fc2f404e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf118ca2451ef9ffad6b0525e4c0c620326c5c672f748bb6c06a23d6de7a0ef0->leave($__internal_bf118ca2451ef9ffad6b0525e4c0c620326c5c672f748bb6c06a23d6de7a0ef0_prof);

        
        $__internal_c8b73868bdb46bdafad288efd16f79be3777dec0977404cb4e52e3a2fc2f404e->leave($__internal_c8b73868bdb46bdafad288efd16f79be3777dec0977404cb4e52e3a2fc2f404e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b831cd6932dc45d16dc2f1ffb2f56413b71e6ae046576e12eecd2c834630f7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b831cd6932dc45d16dc2f1ffb2f56413b71e6ae046576e12eecd2c834630f7ae->enter($__internal_b831cd6932dc45d16dc2f1ffb2f56413b71e6ae046576e12eecd2c834630f7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51c465d1746dd47823cf02c75bba5a0826e4173b9d4a941436cb126934a15c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c465d1746dd47823cf02c75bba5a0826e4173b9d4a941436cb126934a15c52->enter($__internal_51c465d1746dd47823cf02c75bba5a0826e4173b9d4a941436cb126934a15c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_51c465d1746dd47823cf02c75bba5a0826e4173b9d4a941436cb126934a15c52->leave($__internal_51c465d1746dd47823cf02c75bba5a0826e4173b9d4a941436cb126934a15c52_prof);

        
        $__internal_b831cd6932dc45d16dc2f1ffb2f56413b71e6ae046576e12eecd2c834630f7ae->leave($__internal_b831cd6932dc45d16dc2f1ffb2f56413b71e6ae046576e12eecd2c834630f7ae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_615368c9a743b5a5c73f4a454fd50dcbe49e345a7d0aa8ec9199231488d43c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615368c9a743b5a5c73f4a454fd50dcbe49e345a7d0aa8ec9199231488d43c68->enter($__internal_615368c9a743b5a5c73f4a454fd50dcbe49e345a7d0aa8ec9199231488d43c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89ff5ca1950f1f1b93c6f1c1286bfdc7b762adad0d8357f4c334801374bcc4fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ff5ca1950f1f1b93c6f1c1286bfdc7b762adad0d8357f4c334801374bcc4fc->enter($__internal_89ff5ca1950f1f1b93c6f1c1286bfdc7b762adad0d8357f4c334801374bcc4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89ff5ca1950f1f1b93c6f1c1286bfdc7b762adad0d8357f4c334801374bcc4fc->leave($__internal_89ff5ca1950f1f1b93c6f1c1286bfdc7b762adad0d8357f4c334801374bcc4fc_prof);

        
        $__internal_615368c9a743b5a5c73f4a454fd50dcbe49e345a7d0aa8ec9199231488d43c68->leave($__internal_615368c9a743b5a5c73f4a454fd50dcbe49e345a7d0aa8ec9199231488d43c68_prof);

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
