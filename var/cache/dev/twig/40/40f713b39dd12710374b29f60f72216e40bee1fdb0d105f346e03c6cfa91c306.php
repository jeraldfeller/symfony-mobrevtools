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
        $__internal_54cf978c858bb3c84d578b45383f16e7a887c65f882254985b5c9fef530cce4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54cf978c858bb3c84d578b45383f16e7a887c65f882254985b5c9fef530cce4d->enter($__internal_54cf978c858bb3c84d578b45383f16e7a887c65f882254985b5c9fef530cce4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6fbf094d28842a3cd89bf3fd00f8b7bef871687c25b351c5a65a9dc3629c7834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fbf094d28842a3cd89bf3fd00f8b7bef871687c25b351c5a65a9dc3629c7834->enter($__internal_6fbf094d28842a3cd89bf3fd00f8b7bef871687c25b351c5a65a9dc3629c7834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54cf978c858bb3c84d578b45383f16e7a887c65f882254985b5c9fef530cce4d->leave($__internal_54cf978c858bb3c84d578b45383f16e7a887c65f882254985b5c9fef530cce4d_prof);

        
        $__internal_6fbf094d28842a3cd89bf3fd00f8b7bef871687c25b351c5a65a9dc3629c7834->leave($__internal_6fbf094d28842a3cd89bf3fd00f8b7bef871687c25b351c5a65a9dc3629c7834_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da4493ef7b1e56ee5d644c20af20d3aa65c8b1009b3fdaf460126a41dfbb712e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4493ef7b1e56ee5d644c20af20d3aa65c8b1009b3fdaf460126a41dfbb712e->enter($__internal_da4493ef7b1e56ee5d644c20af20d3aa65c8b1009b3fdaf460126a41dfbb712e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e90cd7adcf03b123e17f79fdc28e4f070bb1129bc84cfbe772b263f8e5e366f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90cd7adcf03b123e17f79fdc28e4f070bb1129bc84cfbe772b263f8e5e366f5->enter($__internal_e90cd7adcf03b123e17f79fdc28e4f070bb1129bc84cfbe772b263f8e5e366f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e90cd7adcf03b123e17f79fdc28e4f070bb1129bc84cfbe772b263f8e5e366f5->leave($__internal_e90cd7adcf03b123e17f79fdc28e4f070bb1129bc84cfbe772b263f8e5e366f5_prof);

        
        $__internal_da4493ef7b1e56ee5d644c20af20d3aa65c8b1009b3fdaf460126a41dfbb712e->leave($__internal_da4493ef7b1e56ee5d644c20af20d3aa65c8b1009b3fdaf460126a41dfbb712e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ada5a7f2282a86bae0668d0041a8647bc11820aed49d6af40ac4f0bebd458bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ada5a7f2282a86bae0668d0041a8647bc11820aed49d6af40ac4f0bebd458bd->enter($__internal_9ada5a7f2282a86bae0668d0041a8647bc11820aed49d6af40ac4f0bebd458bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e49f2569b85e1487e1329fce6be5b2d6c00f106ff0108b64c714396a5936e16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49f2569b85e1487e1329fce6be5b2d6c00f106ff0108b64c714396a5936e16c->enter($__internal_e49f2569b85e1487e1329fce6be5b2d6c00f106ff0108b64c714396a5936e16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e49f2569b85e1487e1329fce6be5b2d6c00f106ff0108b64c714396a5936e16c->leave($__internal_e49f2569b85e1487e1329fce6be5b2d6c00f106ff0108b64c714396a5936e16c_prof);

        
        $__internal_9ada5a7f2282a86bae0668d0041a8647bc11820aed49d6af40ac4f0bebd458bd->leave($__internal_9ada5a7f2282a86bae0668d0041a8647bc11820aed49d6af40ac4f0bebd458bd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b39a3e1efaa506f302bae7889423a5302b6bb5e161c6ff3f95c2fe1ac68be98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b39a3e1efaa506f302bae7889423a5302b6bb5e161c6ff3f95c2fe1ac68be98->enter($__internal_7b39a3e1efaa506f302bae7889423a5302b6bb5e161c6ff3f95c2fe1ac68be98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae5cf10b8ac7f8fe902019952967dff49b64d8da026bccff32ebc6f8ff93bd2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5cf10b8ac7f8fe902019952967dff49b64d8da026bccff32ebc6f8ff93bd2f->enter($__internal_ae5cf10b8ac7f8fe902019952967dff49b64d8da026bccff32ebc6f8ff93bd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ae5cf10b8ac7f8fe902019952967dff49b64d8da026bccff32ebc6f8ff93bd2f->leave($__internal_ae5cf10b8ac7f8fe902019952967dff49b64d8da026bccff32ebc6f8ff93bd2f_prof);

        
        $__internal_7b39a3e1efaa506f302bae7889423a5302b6bb5e161c6ff3f95c2fe1ac68be98->leave($__internal_7b39a3e1efaa506f302bae7889423a5302b6bb5e161c6ff3f95c2fe1ac68be98_prof);

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
