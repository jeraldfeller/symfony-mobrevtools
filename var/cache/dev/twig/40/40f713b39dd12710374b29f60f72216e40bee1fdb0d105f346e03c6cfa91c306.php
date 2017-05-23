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
        $__internal_9fb7932df2d9652e74195529936fa4e4c6a77367a885afd8c090d2de8d75c311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb7932df2d9652e74195529936fa4e4c6a77367a885afd8c090d2de8d75c311->enter($__internal_9fb7932df2d9652e74195529936fa4e4c6a77367a885afd8c090d2de8d75c311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_77a82be3de65ef9ba4b508fc13d4a2a08352d3c0bcebbb823832d61f874c88dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a82be3de65ef9ba4b508fc13d4a2a08352d3c0bcebbb823832d61f874c88dd->enter($__internal_77a82be3de65ef9ba4b508fc13d4a2a08352d3c0bcebbb823832d61f874c88dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fb7932df2d9652e74195529936fa4e4c6a77367a885afd8c090d2de8d75c311->leave($__internal_9fb7932df2d9652e74195529936fa4e4c6a77367a885afd8c090d2de8d75c311_prof);

        
        $__internal_77a82be3de65ef9ba4b508fc13d4a2a08352d3c0bcebbb823832d61f874c88dd->leave($__internal_77a82be3de65ef9ba4b508fc13d4a2a08352d3c0bcebbb823832d61f874c88dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_684647ee7ad43e52603893126aa4bdc2650bb6e7103995ec546ca8b87efa932d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684647ee7ad43e52603893126aa4bdc2650bb6e7103995ec546ca8b87efa932d->enter($__internal_684647ee7ad43e52603893126aa4bdc2650bb6e7103995ec546ca8b87efa932d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9ffe3041d2e1c6e1ac37b8348e8d5b14dd2d8dfa364e129dd8d6a30830ac56c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffe3041d2e1c6e1ac37b8348e8d5b14dd2d8dfa364e129dd8d6a30830ac56c3->enter($__internal_9ffe3041d2e1c6e1ac37b8348e8d5b14dd2d8dfa364e129dd8d6a30830ac56c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9ffe3041d2e1c6e1ac37b8348e8d5b14dd2d8dfa364e129dd8d6a30830ac56c3->leave($__internal_9ffe3041d2e1c6e1ac37b8348e8d5b14dd2d8dfa364e129dd8d6a30830ac56c3_prof);

        
        $__internal_684647ee7ad43e52603893126aa4bdc2650bb6e7103995ec546ca8b87efa932d->leave($__internal_684647ee7ad43e52603893126aa4bdc2650bb6e7103995ec546ca8b87efa932d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe0c8535a791d01e4254fef358be6767b174149e05813eb715dff672d064f2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0c8535a791d01e4254fef358be6767b174149e05813eb715dff672d064f2f6->enter($__internal_fe0c8535a791d01e4254fef358be6767b174149e05813eb715dff672d064f2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_554e9684cdf38ed4574eb7035c70b8e2dcfb7ebf6f70d350bbfad256b3d91fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554e9684cdf38ed4574eb7035c70b8e2dcfb7ebf6f70d350bbfad256b3d91fec->enter($__internal_554e9684cdf38ed4574eb7035c70b8e2dcfb7ebf6f70d350bbfad256b3d91fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_554e9684cdf38ed4574eb7035c70b8e2dcfb7ebf6f70d350bbfad256b3d91fec->leave($__internal_554e9684cdf38ed4574eb7035c70b8e2dcfb7ebf6f70d350bbfad256b3d91fec_prof);

        
        $__internal_fe0c8535a791d01e4254fef358be6767b174149e05813eb715dff672d064f2f6->leave($__internal_fe0c8535a791d01e4254fef358be6767b174149e05813eb715dff672d064f2f6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0894225eb69039abd49a24ec86802eb9017df9762213cc4c204c10bc87a29d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0894225eb69039abd49a24ec86802eb9017df9762213cc4c204c10bc87a29d1->enter($__internal_f0894225eb69039abd49a24ec86802eb9017df9762213cc4c204c10bc87a29d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ec3d1e211bdb3ce904efc7f5873453a14816a4b80f239f1752aa63032807c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec3d1e211bdb3ce904efc7f5873453a14816a4b80f239f1752aa63032807c10->enter($__internal_7ec3d1e211bdb3ce904efc7f5873453a14816a4b80f239f1752aa63032807c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_7ec3d1e211bdb3ce904efc7f5873453a14816a4b80f239f1752aa63032807c10->leave($__internal_7ec3d1e211bdb3ce904efc7f5873453a14816a4b80f239f1752aa63032807c10_prof);

        
        $__internal_f0894225eb69039abd49a24ec86802eb9017df9762213cc4c204c10bc87a29d1->leave($__internal_f0894225eb69039abd49a24ec86802eb9017df9762213cc4c204c10bc87a29d1_prof);

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
