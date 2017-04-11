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
        $__internal_2dd45f4df16716a713ae333746e77ed00fa0ff67150462cc5bf55e766049065e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd45f4df16716a713ae333746e77ed00fa0ff67150462cc5bf55e766049065e->enter($__internal_2dd45f4df16716a713ae333746e77ed00fa0ff67150462cc5bf55e766049065e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_02b7d6113136da63c143e48d94d102a663f6d72c9c24f89d4da0660732377965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b7d6113136da63c143e48d94d102a663f6d72c9c24f89d4da0660732377965->enter($__internal_02b7d6113136da63c143e48d94d102a663f6d72c9c24f89d4da0660732377965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dd45f4df16716a713ae333746e77ed00fa0ff67150462cc5bf55e766049065e->leave($__internal_2dd45f4df16716a713ae333746e77ed00fa0ff67150462cc5bf55e766049065e_prof);

        
        $__internal_02b7d6113136da63c143e48d94d102a663f6d72c9c24f89d4da0660732377965->leave($__internal_02b7d6113136da63c143e48d94d102a663f6d72c9c24f89d4da0660732377965_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cec966b4f9c2e673ae119d8b5a5d9195b814a84154963cf616c14060b5bc5ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec966b4f9c2e673ae119d8b5a5d9195b814a84154963cf616c14060b5bc5ea4->enter($__internal_cec966b4f9c2e673ae119d8b5a5d9195b814a84154963cf616c14060b5bc5ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a74133ecc4ec2367e7cf1a0ba762f95c953a45dda75177c0f019da21acd353c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a74133ecc4ec2367e7cf1a0ba762f95c953a45dda75177c0f019da21acd353c->enter($__internal_8a74133ecc4ec2367e7cf1a0ba762f95c953a45dda75177c0f019da21acd353c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8a74133ecc4ec2367e7cf1a0ba762f95c953a45dda75177c0f019da21acd353c->leave($__internal_8a74133ecc4ec2367e7cf1a0ba762f95c953a45dda75177c0f019da21acd353c_prof);

        
        $__internal_cec966b4f9c2e673ae119d8b5a5d9195b814a84154963cf616c14060b5bc5ea4->leave($__internal_cec966b4f9c2e673ae119d8b5a5d9195b814a84154963cf616c14060b5bc5ea4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_56c9a5827de5c00c7573cf37e2dad8c049dcf19b16bd97a3ab8587cde49db80b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56c9a5827de5c00c7573cf37e2dad8c049dcf19b16bd97a3ab8587cde49db80b->enter($__internal_56c9a5827de5c00c7573cf37e2dad8c049dcf19b16bd97a3ab8587cde49db80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01f1dd53648a1b0d75087f942a7d96bfaf78f8e4ced090a0e985dbc8b8901067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f1dd53648a1b0d75087f942a7d96bfaf78f8e4ced090a0e985dbc8b8901067->enter($__internal_01f1dd53648a1b0d75087f942a7d96bfaf78f8e4ced090a0e985dbc8b8901067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_01f1dd53648a1b0d75087f942a7d96bfaf78f8e4ced090a0e985dbc8b8901067->leave($__internal_01f1dd53648a1b0d75087f942a7d96bfaf78f8e4ced090a0e985dbc8b8901067_prof);

        
        $__internal_56c9a5827de5c00c7573cf37e2dad8c049dcf19b16bd97a3ab8587cde49db80b->leave($__internal_56c9a5827de5c00c7573cf37e2dad8c049dcf19b16bd97a3ab8587cde49db80b_prof);

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
