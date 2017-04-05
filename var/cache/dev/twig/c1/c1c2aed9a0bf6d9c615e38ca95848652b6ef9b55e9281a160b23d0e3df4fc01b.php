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
        $__internal_44fc9db4313e7ef23df25ee356c2858f98e54e43a83a9eeb4a7f4f1171a03f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44fc9db4313e7ef23df25ee356c2858f98e54e43a83a9eeb4a7f4f1171a03f91->enter($__internal_44fc9db4313e7ef23df25ee356c2858f98e54e43a83a9eeb4a7f4f1171a03f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_26d8585ce59c684af59c1968f40fecbee7d5773159d0176d71f312d743ae135c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d8585ce59c684af59c1968f40fecbee7d5773159d0176d71f312d743ae135c->enter($__internal_26d8585ce59c684af59c1968f40fecbee7d5773159d0176d71f312d743ae135c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44fc9db4313e7ef23df25ee356c2858f98e54e43a83a9eeb4a7f4f1171a03f91->leave($__internal_44fc9db4313e7ef23df25ee356c2858f98e54e43a83a9eeb4a7f4f1171a03f91_prof);

        
        $__internal_26d8585ce59c684af59c1968f40fecbee7d5773159d0176d71f312d743ae135c->leave($__internal_26d8585ce59c684af59c1968f40fecbee7d5773159d0176d71f312d743ae135c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dea5f959142236aca1d1d3934a8e7b26b5d1ee83350addf84c039e9e408c000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dea5f959142236aca1d1d3934a8e7b26b5d1ee83350addf84c039e9e408c000->enter($__internal_7dea5f959142236aca1d1d3934a8e7b26b5d1ee83350addf84c039e9e408c000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45cea6f16585b656c12fe32ab8038e95a270454036353c222545c8748030ec71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cea6f16585b656c12fe32ab8038e95a270454036353c222545c8748030ec71->enter($__internal_45cea6f16585b656c12fe32ab8038e95a270454036353c222545c8748030ec71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_45cea6f16585b656c12fe32ab8038e95a270454036353c222545c8748030ec71->leave($__internal_45cea6f16585b656c12fe32ab8038e95a270454036353c222545c8748030ec71_prof);

        
        $__internal_7dea5f959142236aca1d1d3934a8e7b26b5d1ee83350addf84c039e9e408c000->leave($__internal_7dea5f959142236aca1d1d3934a8e7b26b5d1ee83350addf84c039e9e408c000_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a59c3cb92b10310db37a386243befc557b692c4efac88c88a91649df941215ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59c3cb92b10310db37a386243befc557b692c4efac88c88a91649df941215ca->enter($__internal_a59c3cb92b10310db37a386243befc557b692c4efac88c88a91649df941215ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd61ce89f3df6a3e3ad69c4c7638da2e27e969b2d5f097ed5aee1b7c21413e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd61ce89f3df6a3e3ad69c4c7638da2e27e969b2d5f097ed5aee1b7c21413e10->enter($__internal_fd61ce89f3df6a3e3ad69c4c7638da2e27e969b2d5f097ed5aee1b7c21413e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fd61ce89f3df6a3e3ad69c4c7638da2e27e969b2d5f097ed5aee1b7c21413e10->leave($__internal_fd61ce89f3df6a3e3ad69c4c7638da2e27e969b2d5f097ed5aee1b7c21413e10_prof);

        
        $__internal_a59c3cb92b10310db37a386243befc557b692c4efac88c88a91649df941215ca->leave($__internal_a59c3cb92b10310db37a386243befc557b692c4efac88c88a91649df941215ca_prof);

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
