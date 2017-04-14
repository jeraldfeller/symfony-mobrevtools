<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a694fdbfc0079b85e0d1e7898d55b9becf9e7b3fb4119c2293082466091c6b4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_91e35b9868bfe1a2150d14780bce3e3a531ff505ff27d8faff2df3ef5db5f83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e35b9868bfe1a2150d14780bce3e3a531ff505ff27d8faff2df3ef5db5f83c->enter($__internal_91e35b9868bfe1a2150d14780bce3e3a531ff505ff27d8faff2df3ef5db5f83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_c1e53709b46f0c444fc7ab891ea26528c32d5b8d19c6369ab50a2e9713d8a1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e53709b46f0c444fc7ab891ea26528c32d5b8d19c6369ab50a2e9713d8a1d8->enter($__internal_c1e53709b46f0c444fc7ab891ea26528c32d5b8d19c6369ab50a2e9713d8a1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e35b9868bfe1a2150d14780bce3e3a531ff505ff27d8faff2df3ef5db5f83c->leave($__internal_91e35b9868bfe1a2150d14780bce3e3a531ff505ff27d8faff2df3ef5db5f83c_prof);

        
        $__internal_c1e53709b46f0c444fc7ab891ea26528c32d5b8d19c6369ab50a2e9713d8a1d8->leave($__internal_c1e53709b46f0c444fc7ab891ea26528c32d5b8d19c6369ab50a2e9713d8a1d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_52e37069301475e9df09f94ae8e9d33f702b112ee2c726d9b204aa473f7bff9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e37069301475e9df09f94ae8e9d33f702b112ee2c726d9b204aa473f7bff9d->enter($__internal_52e37069301475e9df09f94ae8e9d33f702b112ee2c726d9b204aa473f7bff9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ebd09f6757a555b5b9caa1fe60c966c1dcb7c07ab72323ba853b1b8c3ec00e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebd09f6757a555b5b9caa1fe60c966c1dcb7c07ab72323ba853b1b8c3ec00e1->enter($__internal_3ebd09f6757a555b5b9caa1fe60c966c1dcb7c07ab72323ba853b1b8c3ec00e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3ebd09f6757a555b5b9caa1fe60c966c1dcb7c07ab72323ba853b1b8c3ec00e1->leave($__internal_3ebd09f6757a555b5b9caa1fe60c966c1dcb7c07ab72323ba853b1b8c3ec00e1_prof);

        
        $__internal_52e37069301475e9df09f94ae8e9d33f702b112ee2c726d9b204aa473f7bff9d->leave($__internal_52e37069301475e9df09f94ae8e9d33f702b112ee2c726d9b204aa473f7bff9d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f546641f25e504eddbf97ada3443ace232133d1c51716cb7c8086e04e291da78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f546641f25e504eddbf97ada3443ace232133d1c51716cb7c8086e04e291da78->enter($__internal_f546641f25e504eddbf97ada3443ace232133d1c51716cb7c8086e04e291da78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34bc6679fffc2ea1407107d20f206e1013e51f891e33edb1b6dd61aa612243b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34bc6679fffc2ea1407107d20f206e1013e51f891e33edb1b6dd61aa612243b9->enter($__internal_34bc6679fffc2ea1407107d20f206e1013e51f891e33edb1b6dd61aa612243b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_34bc6679fffc2ea1407107d20f206e1013e51f891e33edb1b6dd61aa612243b9->leave($__internal_34bc6679fffc2ea1407107d20f206e1013e51f891e33edb1b6dd61aa612243b9_prof);

        
        $__internal_f546641f25e504eddbf97ada3443ace232133d1c51716cb7c8086e04e291da78->leave($__internal_f546641f25e504eddbf97ada3443ace232133d1c51716cb7c8086e04e291da78_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
