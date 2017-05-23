<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fbeda67568f961321ae82da7137b94dc3efea2013f49f7917055838a910d1762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cae3a820a401facb8ad633102072146b68d529c915db0ca9fd2dc1c36c1e70dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae3a820a401facb8ad633102072146b68d529c915db0ca9fd2dc1c36c1e70dc->enter($__internal_cae3a820a401facb8ad633102072146b68d529c915db0ca9fd2dc1c36c1e70dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6d1c78a8ac33700c353fa828af2cb72763a4ed4a6d7750d5f71ebfba75624053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1c78a8ac33700c353fa828af2cb72763a4ed4a6d7750d5f71ebfba75624053->enter($__internal_6d1c78a8ac33700c353fa828af2cb72763a4ed4a6d7750d5f71ebfba75624053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cae3a820a401facb8ad633102072146b68d529c915db0ca9fd2dc1c36c1e70dc->leave($__internal_cae3a820a401facb8ad633102072146b68d529c915db0ca9fd2dc1c36c1e70dc_prof);

        
        $__internal_6d1c78a8ac33700c353fa828af2cb72763a4ed4a6d7750d5f71ebfba75624053->leave($__internal_6d1c78a8ac33700c353fa828af2cb72763a4ed4a6d7750d5f71ebfba75624053_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_494114dfd3cdb374ed37be5e30869f49647605fce23c2529e811e581870e4953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494114dfd3cdb374ed37be5e30869f49647605fce23c2529e811e581870e4953->enter($__internal_494114dfd3cdb374ed37be5e30869f49647605fce23c2529e811e581870e4953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_604370c78f25420b9fa07477108e4ceed3fb3a9c006a88938f8b80775fd28eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604370c78f25420b9fa07477108e4ceed3fb3a9c006a88938f8b80775fd28eb7->enter($__internal_604370c78f25420b9fa07477108e4ceed3fb3a9c006a88938f8b80775fd28eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_604370c78f25420b9fa07477108e4ceed3fb3a9c006a88938f8b80775fd28eb7->leave($__internal_604370c78f25420b9fa07477108e4ceed3fb3a9c006a88938f8b80775fd28eb7_prof);

        
        $__internal_494114dfd3cdb374ed37be5e30869f49647605fce23c2529e811e581870e4953->leave($__internal_494114dfd3cdb374ed37be5e30869f49647605fce23c2529e811e581870e4953_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfbd30024d2b40072a5c65e95692ccab3da64cb1ef664d1c633d7bdb09deb652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfbd30024d2b40072a5c65e95692ccab3da64cb1ef664d1c633d7bdb09deb652->enter($__internal_cfbd30024d2b40072a5c65e95692ccab3da64cb1ef664d1c633d7bdb09deb652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c50a7589bcfe8330529871ffd47f78f03bd2e638b97fede6011ff6f24333cf09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50a7589bcfe8330529871ffd47f78f03bd2e638b97fede6011ff6f24333cf09->enter($__internal_c50a7589bcfe8330529871ffd47f78f03bd2e638b97fede6011ff6f24333cf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c50a7589bcfe8330529871ffd47f78f03bd2e638b97fede6011ff6f24333cf09->leave($__internal_c50a7589bcfe8330529871ffd47f78f03bd2e638b97fede6011ff6f24333cf09_prof);

        
        $__internal_cfbd30024d2b40072a5c65e95692ccab3da64cb1ef664d1c633d7bdb09deb652->leave($__internal_cfbd30024d2b40072a5c65e95692ccab3da64cb1ef664d1c633d7bdb09deb652_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f45a47ad71348fe8c6e7f492a241621f3fb418f1efb5cd9c677b7e7e0f555119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45a47ad71348fe8c6e7f492a241621f3fb418f1efb5cd9c677b7e7e0f555119->enter($__internal_f45a47ad71348fe8c6e7f492a241621f3fb418f1efb5cd9c677b7e7e0f555119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fad248d65c581ee6e980c2990e2cdfc677ab2d33e2771003597e0ff8bf7db97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad248d65c581ee6e980c2990e2cdfc677ab2d33e2771003597e0ff8bf7db97f->enter($__internal_fad248d65c581ee6e980c2990e2cdfc677ab2d33e2771003597e0ff8bf7db97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_fad248d65c581ee6e980c2990e2cdfc677ab2d33e2771003597e0ff8bf7db97f->leave($__internal_fad248d65c581ee6e980c2990e2cdfc677ab2d33e2771003597e0ff8bf7db97f_prof);

        
        $__internal_f45a47ad71348fe8c6e7f492a241621f3fb418f1efb5cd9c677b7e7e0f555119->leave($__internal_f45a47ad71348fe8c6e7f492a241621f3fb418f1efb5cd9c677b7e7e0f555119_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
