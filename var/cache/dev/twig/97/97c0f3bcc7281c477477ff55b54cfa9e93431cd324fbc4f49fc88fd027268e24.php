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
        $__internal_51fd9b8ad53b15909d67f22ae2c3fd04cfb55a337fa2b08a5e698bff15831fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51fd9b8ad53b15909d67f22ae2c3fd04cfb55a337fa2b08a5e698bff15831fbf->enter($__internal_51fd9b8ad53b15909d67f22ae2c3fd04cfb55a337fa2b08a5e698bff15831fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_ce2518c42706c04bd2b78f48ba739f4dbe1a835bdf8040139946edce73a907f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2518c42706c04bd2b78f48ba739f4dbe1a835bdf8040139946edce73a907f1->enter($__internal_ce2518c42706c04bd2b78f48ba739f4dbe1a835bdf8040139946edce73a907f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51fd9b8ad53b15909d67f22ae2c3fd04cfb55a337fa2b08a5e698bff15831fbf->leave($__internal_51fd9b8ad53b15909d67f22ae2c3fd04cfb55a337fa2b08a5e698bff15831fbf_prof);

        
        $__internal_ce2518c42706c04bd2b78f48ba739f4dbe1a835bdf8040139946edce73a907f1->leave($__internal_ce2518c42706c04bd2b78f48ba739f4dbe1a835bdf8040139946edce73a907f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd9b0e4e05f00d1b17ca2a7f3afa57911928bd21518efdea1c6f2cc9d2b11445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9b0e4e05f00d1b17ca2a7f3afa57911928bd21518efdea1c6f2cc9d2b11445->enter($__internal_dd9b0e4e05f00d1b17ca2a7f3afa57911928bd21518efdea1c6f2cc9d2b11445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e121afe8c0bb82aeab5ec1072077f66c61ac9914d4f3436157d2b7330893833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e121afe8c0bb82aeab5ec1072077f66c61ac9914d4f3436157d2b7330893833->enter($__internal_0e121afe8c0bb82aeab5ec1072077f66c61ac9914d4f3436157d2b7330893833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0e121afe8c0bb82aeab5ec1072077f66c61ac9914d4f3436157d2b7330893833->leave($__internal_0e121afe8c0bb82aeab5ec1072077f66c61ac9914d4f3436157d2b7330893833_prof);

        
        $__internal_dd9b0e4e05f00d1b17ca2a7f3afa57911928bd21518efdea1c6f2cc9d2b11445->leave($__internal_dd9b0e4e05f00d1b17ca2a7f3afa57911928bd21518efdea1c6f2cc9d2b11445_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dceeeb20bf7cfd4b79dbb296e27d6632934cb0e22ea0610da86acfac17320f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dceeeb20bf7cfd4b79dbb296e27d6632934cb0e22ea0610da86acfac17320f2->enter($__internal_9dceeeb20bf7cfd4b79dbb296e27d6632934cb0e22ea0610da86acfac17320f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5cd155312e6b83e5fe33e8d022192b5fb2ace18fa0f1ca92b51cc82d7a0fb3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd155312e6b83e5fe33e8d022192b5fb2ace18fa0f1ca92b51cc82d7a0fb3e0->enter($__internal_5cd155312e6b83e5fe33e8d022192b5fb2ace18fa0f1ca92b51cc82d7a0fb3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5cd155312e6b83e5fe33e8d022192b5fb2ace18fa0f1ca92b51cc82d7a0fb3e0->leave($__internal_5cd155312e6b83e5fe33e8d022192b5fb2ace18fa0f1ca92b51cc82d7a0fb3e0_prof);

        
        $__internal_9dceeeb20bf7cfd4b79dbb296e27d6632934cb0e22ea0610da86acfac17320f2->leave($__internal_9dceeeb20bf7cfd4b79dbb296e27d6632934cb0e22ea0610da86acfac17320f2_prof);

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
