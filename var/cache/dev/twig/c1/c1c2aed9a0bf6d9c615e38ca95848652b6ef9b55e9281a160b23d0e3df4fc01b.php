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
        $__internal_823893373a5d457fb17e7af12ec0aa8af9599a1fbdec3ce84c4c8fc97792d987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823893373a5d457fb17e7af12ec0aa8af9599a1fbdec3ce84c4c8fc97792d987->enter($__internal_823893373a5d457fb17e7af12ec0aa8af9599a1fbdec3ce84c4c8fc97792d987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_35cdae3cc51c3b266d7de7daf52749248feb76ef049c72c97f3a1a5238ba4fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35cdae3cc51c3b266d7de7daf52749248feb76ef049c72c97f3a1a5238ba4fe7->enter($__internal_35cdae3cc51c3b266d7de7daf52749248feb76ef049c72c97f3a1a5238ba4fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_823893373a5d457fb17e7af12ec0aa8af9599a1fbdec3ce84c4c8fc97792d987->leave($__internal_823893373a5d457fb17e7af12ec0aa8af9599a1fbdec3ce84c4c8fc97792d987_prof);

        
        $__internal_35cdae3cc51c3b266d7de7daf52749248feb76ef049c72c97f3a1a5238ba4fe7->leave($__internal_35cdae3cc51c3b266d7de7daf52749248feb76ef049c72c97f3a1a5238ba4fe7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78bd1bb49a6e8d4d751cfde3f7f16e4e409c1757d744ae95fb8dd61dabb380c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78bd1bb49a6e8d4d751cfde3f7f16e4e409c1757d744ae95fb8dd61dabb380c6->enter($__internal_78bd1bb49a6e8d4d751cfde3f7f16e4e409c1757d744ae95fb8dd61dabb380c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d257ad051de421a370e036b3e7184090ab4d111338003ee723ef048b12b6464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d257ad051de421a370e036b3e7184090ab4d111338003ee723ef048b12b6464->enter($__internal_7d257ad051de421a370e036b3e7184090ab4d111338003ee723ef048b12b6464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7d257ad051de421a370e036b3e7184090ab4d111338003ee723ef048b12b6464->leave($__internal_7d257ad051de421a370e036b3e7184090ab4d111338003ee723ef048b12b6464_prof);

        
        $__internal_78bd1bb49a6e8d4d751cfde3f7f16e4e409c1757d744ae95fb8dd61dabb380c6->leave($__internal_78bd1bb49a6e8d4d751cfde3f7f16e4e409c1757d744ae95fb8dd61dabb380c6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_438eb03fd100d7622897e21215f14cc9214848d7abd9fc47b3df60e107bcf1a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438eb03fd100d7622897e21215f14cc9214848d7abd9fc47b3df60e107bcf1a8->enter($__internal_438eb03fd100d7622897e21215f14cc9214848d7abd9fc47b3df60e107bcf1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dbf248c6daef90a1889d67db6e17c201bea40648b318b5891c79a8ff8effbce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf248c6daef90a1889d67db6e17c201bea40648b318b5891c79a8ff8effbce4->enter($__internal_dbf248c6daef90a1889d67db6e17c201bea40648b318b5891c79a8ff8effbce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dbf248c6daef90a1889d67db6e17c201bea40648b318b5891c79a8ff8effbce4->leave($__internal_dbf248c6daef90a1889d67db6e17c201bea40648b318b5891c79a8ff8effbce4_prof);

        
        $__internal_438eb03fd100d7622897e21215f14cc9214848d7abd9fc47b3df60e107bcf1a8->leave($__internal_438eb03fd100d7622897e21215f14cc9214848d7abd9fc47b3df60e107bcf1a8_prof);

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
