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
        $__internal_482b177025b05921004a007d5888c845afc9ecb229199693446635941af9714c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482b177025b05921004a007d5888c845afc9ecb229199693446635941af9714c->enter($__internal_482b177025b05921004a007d5888c845afc9ecb229199693446635941af9714c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7be07df27c454901a2e34252fd54148e1c7bf8befd461361c93f6f3541098650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be07df27c454901a2e34252fd54148e1c7bf8befd461361c93f6f3541098650->enter($__internal_7be07df27c454901a2e34252fd54148e1c7bf8befd461361c93f6f3541098650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_482b177025b05921004a007d5888c845afc9ecb229199693446635941af9714c->leave($__internal_482b177025b05921004a007d5888c845afc9ecb229199693446635941af9714c_prof);

        
        $__internal_7be07df27c454901a2e34252fd54148e1c7bf8befd461361c93f6f3541098650->leave($__internal_7be07df27c454901a2e34252fd54148e1c7bf8befd461361c93f6f3541098650_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb8c50ac8ffe1992675f8595cf3d8fefbe04b1eb23a1cf90e11983930f95d1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8c50ac8ffe1992675f8595cf3d8fefbe04b1eb23a1cf90e11983930f95d1ac->enter($__internal_bb8c50ac8ffe1992675f8595cf3d8fefbe04b1eb23a1cf90e11983930f95d1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0b5cfcbfda50ebcc442bd0ac6cf2bcf252ca1d36b655b0fef47b71b99bb68c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b5cfcbfda50ebcc442bd0ac6cf2bcf252ca1d36b655b0fef47b71b99bb68c7->enter($__internal_d0b5cfcbfda50ebcc442bd0ac6cf2bcf252ca1d36b655b0fef47b71b99bb68c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d0b5cfcbfda50ebcc442bd0ac6cf2bcf252ca1d36b655b0fef47b71b99bb68c7->leave($__internal_d0b5cfcbfda50ebcc442bd0ac6cf2bcf252ca1d36b655b0fef47b71b99bb68c7_prof);

        
        $__internal_bb8c50ac8ffe1992675f8595cf3d8fefbe04b1eb23a1cf90e11983930f95d1ac->leave($__internal_bb8c50ac8ffe1992675f8595cf3d8fefbe04b1eb23a1cf90e11983930f95d1ac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_af588ebc0a072d094c89281d67da111b0ef066f61c59853d638165392e610056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af588ebc0a072d094c89281d67da111b0ef066f61c59853d638165392e610056->enter($__internal_af588ebc0a072d094c89281d67da111b0ef066f61c59853d638165392e610056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e9ff713d85f829581e25ad161fc62831aa6373cbbf7953b2af1632ae7eb9d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9ff713d85f829581e25ad161fc62831aa6373cbbf7953b2af1632ae7eb9d89->enter($__internal_0e9ff713d85f829581e25ad161fc62831aa6373cbbf7953b2af1632ae7eb9d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0e9ff713d85f829581e25ad161fc62831aa6373cbbf7953b2af1632ae7eb9d89->leave($__internal_0e9ff713d85f829581e25ad161fc62831aa6373cbbf7953b2af1632ae7eb9d89_prof);

        
        $__internal_af588ebc0a072d094c89281d67da111b0ef066f61c59853d638165392e610056->leave($__internal_af588ebc0a072d094c89281d67da111b0ef066f61c59853d638165392e610056_prof);

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
