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
        $__internal_948f0fae1be9021f8adf20e19e22a4a931a7275792b4a5388748fb436d39c2b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948f0fae1be9021f8adf20e19e22a4a931a7275792b4a5388748fb436d39c2b8->enter($__internal_948f0fae1be9021f8adf20e19e22a4a931a7275792b4a5388748fb436d39c2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_caf8b659447c948bd36fc8338474e99b65faf0fefc413a3d0ff35ce21d7ed9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf8b659447c948bd36fc8338474e99b65faf0fefc413a3d0ff35ce21d7ed9ee->enter($__internal_caf8b659447c948bd36fc8338474e99b65faf0fefc413a3d0ff35ce21d7ed9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_948f0fae1be9021f8adf20e19e22a4a931a7275792b4a5388748fb436d39c2b8->leave($__internal_948f0fae1be9021f8adf20e19e22a4a931a7275792b4a5388748fb436d39c2b8_prof);

        
        $__internal_caf8b659447c948bd36fc8338474e99b65faf0fefc413a3d0ff35ce21d7ed9ee->leave($__internal_caf8b659447c948bd36fc8338474e99b65faf0fefc413a3d0ff35ce21d7ed9ee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f735a7e0b9bc9b0c43d5f08a5d184e982efde41b74ebfd1b4d4ea7bebad4c083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f735a7e0b9bc9b0c43d5f08a5d184e982efde41b74ebfd1b4d4ea7bebad4c083->enter($__internal_f735a7e0b9bc9b0c43d5f08a5d184e982efde41b74ebfd1b4d4ea7bebad4c083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8eefa89d00ad362fa193a88d4d5332256dd6331cceab7fe73d1610115f453076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eefa89d00ad362fa193a88d4d5332256dd6331cceab7fe73d1610115f453076->enter($__internal_8eefa89d00ad362fa193a88d4d5332256dd6331cceab7fe73d1610115f453076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8eefa89d00ad362fa193a88d4d5332256dd6331cceab7fe73d1610115f453076->leave($__internal_8eefa89d00ad362fa193a88d4d5332256dd6331cceab7fe73d1610115f453076_prof);

        
        $__internal_f735a7e0b9bc9b0c43d5f08a5d184e982efde41b74ebfd1b4d4ea7bebad4c083->leave($__internal_f735a7e0b9bc9b0c43d5f08a5d184e982efde41b74ebfd1b4d4ea7bebad4c083_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b454a0cfc4e7ab7546db36d0e633f259fe533330561e25b284fbd6ae15716b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b454a0cfc4e7ab7546db36d0e633f259fe533330561e25b284fbd6ae15716b9->enter($__internal_6b454a0cfc4e7ab7546db36d0e633f259fe533330561e25b284fbd6ae15716b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d7125857367085e02b9192fddb9ccb28c2886317a1d15137caff1ccd3a44706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7125857367085e02b9192fddb9ccb28c2886317a1d15137caff1ccd3a44706->enter($__internal_1d7125857367085e02b9192fddb9ccb28c2886317a1d15137caff1ccd3a44706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1d7125857367085e02b9192fddb9ccb28c2886317a1d15137caff1ccd3a44706->leave($__internal_1d7125857367085e02b9192fddb9ccb28c2886317a1d15137caff1ccd3a44706_prof);

        
        $__internal_6b454a0cfc4e7ab7546db36d0e633f259fe533330561e25b284fbd6ae15716b9->leave($__internal_6b454a0cfc4e7ab7546db36d0e633f259fe533330561e25b284fbd6ae15716b9_prof);

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
