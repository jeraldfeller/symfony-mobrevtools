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
        $__internal_3ac693e6d0d8b2aa5cd843895e955ce7a8a0cd0cba5acd07a72dab075d49d843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ac693e6d0d8b2aa5cd843895e955ce7a8a0cd0cba5acd07a72dab075d49d843->enter($__internal_3ac693e6d0d8b2aa5cd843895e955ce7a8a0cd0cba5acd07a72dab075d49d843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_36f16e62fcdc67b22b4aed5cdd7d35e43927320e48380d9a2a6068b71901fa6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f16e62fcdc67b22b4aed5cdd7d35e43927320e48380d9a2a6068b71901fa6e->enter($__internal_36f16e62fcdc67b22b4aed5cdd7d35e43927320e48380d9a2a6068b71901fa6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ac693e6d0d8b2aa5cd843895e955ce7a8a0cd0cba5acd07a72dab075d49d843->leave($__internal_3ac693e6d0d8b2aa5cd843895e955ce7a8a0cd0cba5acd07a72dab075d49d843_prof);

        
        $__internal_36f16e62fcdc67b22b4aed5cdd7d35e43927320e48380d9a2a6068b71901fa6e->leave($__internal_36f16e62fcdc67b22b4aed5cdd7d35e43927320e48380d9a2a6068b71901fa6e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec8b41fbcdd2f36c1a12a9d95fb41d4d3924a9736f4deeaa1be96cebe7b12cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8b41fbcdd2f36c1a12a9d95fb41d4d3924a9736f4deeaa1be96cebe7b12cb9->enter($__internal_ec8b41fbcdd2f36c1a12a9d95fb41d4d3924a9736f4deeaa1be96cebe7b12cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_30573dc08709bc04fb792f96c453e4cf6b8d77db0f107cf417a3cfeb5dfec85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30573dc08709bc04fb792f96c453e4cf6b8d77db0f107cf417a3cfeb5dfec85b->enter($__internal_30573dc08709bc04fb792f96c453e4cf6b8d77db0f107cf417a3cfeb5dfec85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_30573dc08709bc04fb792f96c453e4cf6b8d77db0f107cf417a3cfeb5dfec85b->leave($__internal_30573dc08709bc04fb792f96c453e4cf6b8d77db0f107cf417a3cfeb5dfec85b_prof);

        
        $__internal_ec8b41fbcdd2f36c1a12a9d95fb41d4d3924a9736f4deeaa1be96cebe7b12cb9->leave($__internal_ec8b41fbcdd2f36c1a12a9d95fb41d4d3924a9736f4deeaa1be96cebe7b12cb9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b28401a387208aa77a5d3de2decda216be087cb7f03b40b7e0431658729af86c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28401a387208aa77a5d3de2decda216be087cb7f03b40b7e0431658729af86c->enter($__internal_b28401a387208aa77a5d3de2decda216be087cb7f03b40b7e0431658729af86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e873c0eb0ef5ba47a2b4c489de63a0c1c37472669085d3a1c1dad4bac1fb162e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e873c0eb0ef5ba47a2b4c489de63a0c1c37472669085d3a1c1dad4bac1fb162e->enter($__internal_e873c0eb0ef5ba47a2b4c489de63a0c1c37472669085d3a1c1dad4bac1fb162e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e873c0eb0ef5ba47a2b4c489de63a0c1c37472669085d3a1c1dad4bac1fb162e->leave($__internal_e873c0eb0ef5ba47a2b4c489de63a0c1c37472669085d3a1c1dad4bac1fb162e_prof);

        
        $__internal_b28401a387208aa77a5d3de2decda216be087cb7f03b40b7e0431658729af86c->leave($__internal_b28401a387208aa77a5d3de2decda216be087cb7f03b40b7e0431658729af86c_prof);

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
