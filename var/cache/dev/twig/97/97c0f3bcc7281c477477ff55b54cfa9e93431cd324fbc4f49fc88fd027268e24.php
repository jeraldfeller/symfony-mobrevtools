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
        $__internal_fcb366b53a2d98af61d8724ccf954586472b08e746f6a234888cce7be6b55270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb366b53a2d98af61d8724ccf954586472b08e746f6a234888cce7be6b55270->enter($__internal_fcb366b53a2d98af61d8724ccf954586472b08e746f6a234888cce7be6b55270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_9939aceb13389a8c1c47447f2cb074a5801e23ac6f7eb12b0d2932f0611e5b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9939aceb13389a8c1c47447f2cb074a5801e23ac6f7eb12b0d2932f0611e5b58->enter($__internal_9939aceb13389a8c1c47447f2cb074a5801e23ac6f7eb12b0d2932f0611e5b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcb366b53a2d98af61d8724ccf954586472b08e746f6a234888cce7be6b55270->leave($__internal_fcb366b53a2d98af61d8724ccf954586472b08e746f6a234888cce7be6b55270_prof);

        
        $__internal_9939aceb13389a8c1c47447f2cb074a5801e23ac6f7eb12b0d2932f0611e5b58->leave($__internal_9939aceb13389a8c1c47447f2cb074a5801e23ac6f7eb12b0d2932f0611e5b58_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97f4a921e7651780fc4f163d4054ecdb4ab3a415fac870727b9e3beb7674b1e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f4a921e7651780fc4f163d4054ecdb4ab3a415fac870727b9e3beb7674b1e2->enter($__internal_97f4a921e7651780fc4f163d4054ecdb4ab3a415fac870727b9e3beb7674b1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17f664f29300dc7848cc1a080227a9e5777b5e8e73731d78ef87f9e5cc66fb9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f664f29300dc7848cc1a080227a9e5777b5e8e73731d78ef87f9e5cc66fb9c->enter($__internal_17f664f29300dc7848cc1a080227a9e5777b5e8e73731d78ef87f9e5cc66fb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_17f664f29300dc7848cc1a080227a9e5777b5e8e73731d78ef87f9e5cc66fb9c->leave($__internal_17f664f29300dc7848cc1a080227a9e5777b5e8e73731d78ef87f9e5cc66fb9c_prof);

        
        $__internal_97f4a921e7651780fc4f163d4054ecdb4ab3a415fac870727b9e3beb7674b1e2->leave($__internal_97f4a921e7651780fc4f163d4054ecdb4ab3a415fac870727b9e3beb7674b1e2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c645f73e0bf0efc6e0638ae47f3284df945fa002f50e6695ba2770180f85a23a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c645f73e0bf0efc6e0638ae47f3284df945fa002f50e6695ba2770180f85a23a->enter($__internal_c645f73e0bf0efc6e0638ae47f3284df945fa002f50e6695ba2770180f85a23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db33093907ce870a5fce599d1fd409fd010068b34697fd77b768aa878adc9cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db33093907ce870a5fce599d1fd409fd010068b34697fd77b768aa878adc9cca->enter($__internal_db33093907ce870a5fce599d1fd409fd010068b34697fd77b768aa878adc9cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db33093907ce870a5fce599d1fd409fd010068b34697fd77b768aa878adc9cca->leave($__internal_db33093907ce870a5fce599d1fd409fd010068b34697fd77b768aa878adc9cca_prof);

        
        $__internal_c645f73e0bf0efc6e0638ae47f3284df945fa002f50e6695ba2770180f85a23a->leave($__internal_c645f73e0bf0efc6e0638ae47f3284df945fa002f50e6695ba2770180f85a23a_prof);

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
