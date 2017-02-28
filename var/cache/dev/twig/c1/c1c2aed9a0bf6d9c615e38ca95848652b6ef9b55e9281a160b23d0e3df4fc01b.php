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
        $__internal_80f8d918c41fcb04b29a5a5896d5088405ab07ba590ee036291af8b604d780c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f8d918c41fcb04b29a5a5896d5088405ab07ba590ee036291af8b604d780c8->enter($__internal_80f8d918c41fcb04b29a5a5896d5088405ab07ba590ee036291af8b604d780c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_bcacbb008f4a14773d9dd77875aee3c6151bb4e7161a23760272f7d91b16f920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcacbb008f4a14773d9dd77875aee3c6151bb4e7161a23760272f7d91b16f920->enter($__internal_bcacbb008f4a14773d9dd77875aee3c6151bb4e7161a23760272f7d91b16f920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80f8d918c41fcb04b29a5a5896d5088405ab07ba590ee036291af8b604d780c8->leave($__internal_80f8d918c41fcb04b29a5a5896d5088405ab07ba590ee036291af8b604d780c8_prof);

        
        $__internal_bcacbb008f4a14773d9dd77875aee3c6151bb4e7161a23760272f7d91b16f920->leave($__internal_bcacbb008f4a14773d9dd77875aee3c6151bb4e7161a23760272f7d91b16f920_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cba86fde9bbf97b588c5f947b26b211c2a501a71fd94e4bd1607be9d31771bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba86fde9bbf97b588c5f947b26b211c2a501a71fd94e4bd1607be9d31771bf8->enter($__internal_cba86fde9bbf97b588c5f947b26b211c2a501a71fd94e4bd1607be9d31771bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_545a26565b357a5c6de1f01ee75442c0f970acbb165b7168d1eca0d644c591c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545a26565b357a5c6de1f01ee75442c0f970acbb165b7168d1eca0d644c591c8->enter($__internal_545a26565b357a5c6de1f01ee75442c0f970acbb165b7168d1eca0d644c591c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_545a26565b357a5c6de1f01ee75442c0f970acbb165b7168d1eca0d644c591c8->leave($__internal_545a26565b357a5c6de1f01ee75442c0f970acbb165b7168d1eca0d644c591c8_prof);

        
        $__internal_cba86fde9bbf97b588c5f947b26b211c2a501a71fd94e4bd1607be9d31771bf8->leave($__internal_cba86fde9bbf97b588c5f947b26b211c2a501a71fd94e4bd1607be9d31771bf8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_54ae73c4ef061a6f7f939eaac3f7873942e12a8d15f9a278fc58b0a031f102c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ae73c4ef061a6f7f939eaac3f7873942e12a8d15f9a278fc58b0a031f102c3->enter($__internal_54ae73c4ef061a6f7f939eaac3f7873942e12a8d15f9a278fc58b0a031f102c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d415ffe21d02d806f1b6153ecc2b5680f9c3d1c041bf0550d6a65fb4d37e0290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d415ffe21d02d806f1b6153ecc2b5680f9c3d1c041bf0550d6a65fb4d37e0290->enter($__internal_d415ffe21d02d806f1b6153ecc2b5680f9c3d1c041bf0550d6a65fb4d37e0290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d415ffe21d02d806f1b6153ecc2b5680f9c3d1c041bf0550d6a65fb4d37e0290->leave($__internal_d415ffe21d02d806f1b6153ecc2b5680f9c3d1c041bf0550d6a65fb4d37e0290_prof);

        
        $__internal_54ae73c4ef061a6f7f939eaac3f7873942e12a8d15f9a278fc58b0a031f102c3->leave($__internal_54ae73c4ef061a6f7f939eaac3f7873942e12a8d15f9a278fc58b0a031f102c3_prof);

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
