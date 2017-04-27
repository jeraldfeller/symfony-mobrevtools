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
        $__internal_7eeab7d5d6d50d3d289cf367d4b4e7a2c574d64992422e198e6c2a8b86453d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eeab7d5d6d50d3d289cf367d4b4e7a2c574d64992422e198e6c2a8b86453d22->enter($__internal_7eeab7d5d6d50d3d289cf367d4b4e7a2c574d64992422e198e6c2a8b86453d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9a458716763b3b64d3dbeebd3045c5219d20b301cd46e99ab2663f139f611f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a458716763b3b64d3dbeebd3045c5219d20b301cd46e99ab2663f139f611f7b->enter($__internal_9a458716763b3b64d3dbeebd3045c5219d20b301cd46e99ab2663f139f611f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eeab7d5d6d50d3d289cf367d4b4e7a2c574d64992422e198e6c2a8b86453d22->leave($__internal_7eeab7d5d6d50d3d289cf367d4b4e7a2c574d64992422e198e6c2a8b86453d22_prof);

        
        $__internal_9a458716763b3b64d3dbeebd3045c5219d20b301cd46e99ab2663f139f611f7b->leave($__internal_9a458716763b3b64d3dbeebd3045c5219d20b301cd46e99ab2663f139f611f7b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ba6af77c37204c5f2fb5b79d705787599d988b8b156509ffadcbf1ec7a25afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba6af77c37204c5f2fb5b79d705787599d988b8b156509ffadcbf1ec7a25afe->enter($__internal_9ba6af77c37204c5f2fb5b79d705787599d988b8b156509ffadcbf1ec7a25afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_afdc81970d438197c01ec808663c6a4cc8e0e9ed972c7561dc0e0ac4b6e6026f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdc81970d438197c01ec808663c6a4cc8e0e9ed972c7561dc0e0ac4b6e6026f->enter($__internal_afdc81970d438197c01ec808663c6a4cc8e0e9ed972c7561dc0e0ac4b6e6026f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_afdc81970d438197c01ec808663c6a4cc8e0e9ed972c7561dc0e0ac4b6e6026f->leave($__internal_afdc81970d438197c01ec808663c6a4cc8e0e9ed972c7561dc0e0ac4b6e6026f_prof);

        
        $__internal_9ba6af77c37204c5f2fb5b79d705787599d988b8b156509ffadcbf1ec7a25afe->leave($__internal_9ba6af77c37204c5f2fb5b79d705787599d988b8b156509ffadcbf1ec7a25afe_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_587a11ec34ca59d36e58b764caad65a7537ede8481c725d22cd1f742e8a5a18a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587a11ec34ca59d36e58b764caad65a7537ede8481c725d22cd1f742e8a5a18a->enter($__internal_587a11ec34ca59d36e58b764caad65a7537ede8481c725d22cd1f742e8a5a18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10b3a47ac50ab1bfaa736e4dc0efc641824d412fa92f6a07dc0a5fa8c6423a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b3a47ac50ab1bfaa736e4dc0efc641824d412fa92f6a07dc0a5fa8c6423a0a->enter($__internal_10b3a47ac50ab1bfaa736e4dc0efc641824d412fa92f6a07dc0a5fa8c6423a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_10b3a47ac50ab1bfaa736e4dc0efc641824d412fa92f6a07dc0a5fa8c6423a0a->leave($__internal_10b3a47ac50ab1bfaa736e4dc0efc641824d412fa92f6a07dc0a5fa8c6423a0a_prof);

        
        $__internal_587a11ec34ca59d36e58b764caad65a7537ede8481c725d22cd1f742e8a5a18a->leave($__internal_587a11ec34ca59d36e58b764caad65a7537ede8481c725d22cd1f742e8a5a18a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3fa45a1d5f789d08990a0eb774dbb7bbd2756f2543339a0c4e0d2e371a7d9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3fa45a1d5f789d08990a0eb774dbb7bbd2756f2543339a0c4e0d2e371a7d9ab->enter($__internal_d3fa45a1d5f789d08990a0eb774dbb7bbd2756f2543339a0c4e0d2e371a7d9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea627491c8b2f55a0699a97b568cb115585447c20c33f10d694a449f31174bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea627491c8b2f55a0699a97b568cb115585447c20c33f10d694a449f31174bae->enter($__internal_ea627491c8b2f55a0699a97b568cb115585447c20c33f10d694a449f31174bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ea627491c8b2f55a0699a97b568cb115585447c20c33f10d694a449f31174bae->leave($__internal_ea627491c8b2f55a0699a97b568cb115585447c20c33f10d694a449f31174bae_prof);

        
        $__internal_d3fa45a1d5f789d08990a0eb774dbb7bbd2756f2543339a0c4e0d2e371a7d9ab->leave($__internal_d3fa45a1d5f789d08990a0eb774dbb7bbd2756f2543339a0c4e0d2e371a7d9ab_prof);

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
