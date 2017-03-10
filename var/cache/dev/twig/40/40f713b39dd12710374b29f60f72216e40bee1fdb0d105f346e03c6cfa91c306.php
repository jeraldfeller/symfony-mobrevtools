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
        $__internal_04cabd4025d9846bbb71106e0b3f8e93a3aadfdffb066f55cb85b42340cb0f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04cabd4025d9846bbb71106e0b3f8e93a3aadfdffb066f55cb85b42340cb0f1e->enter($__internal_04cabd4025d9846bbb71106e0b3f8e93a3aadfdffb066f55cb85b42340cb0f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7ec74596106c1946f312a8c7ed9cdcb85363b70b69f8adb0a91300f8603062b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec74596106c1946f312a8c7ed9cdcb85363b70b69f8adb0a91300f8603062b6->enter($__internal_7ec74596106c1946f312a8c7ed9cdcb85363b70b69f8adb0a91300f8603062b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04cabd4025d9846bbb71106e0b3f8e93a3aadfdffb066f55cb85b42340cb0f1e->leave($__internal_04cabd4025d9846bbb71106e0b3f8e93a3aadfdffb066f55cb85b42340cb0f1e_prof);

        
        $__internal_7ec74596106c1946f312a8c7ed9cdcb85363b70b69f8adb0a91300f8603062b6->leave($__internal_7ec74596106c1946f312a8c7ed9cdcb85363b70b69f8adb0a91300f8603062b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a582dda4d7d61541022c34945145e1964898e4aee2d89c1a3785fe9b1c98be47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a582dda4d7d61541022c34945145e1964898e4aee2d89c1a3785fe9b1c98be47->enter($__internal_a582dda4d7d61541022c34945145e1964898e4aee2d89c1a3785fe9b1c98be47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_61834cffdd2b0ae7f13b023609c66ad0bb59e6273ca0b83df26eba73eccfef52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61834cffdd2b0ae7f13b023609c66ad0bb59e6273ca0b83df26eba73eccfef52->enter($__internal_61834cffdd2b0ae7f13b023609c66ad0bb59e6273ca0b83df26eba73eccfef52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_61834cffdd2b0ae7f13b023609c66ad0bb59e6273ca0b83df26eba73eccfef52->leave($__internal_61834cffdd2b0ae7f13b023609c66ad0bb59e6273ca0b83df26eba73eccfef52_prof);

        
        $__internal_a582dda4d7d61541022c34945145e1964898e4aee2d89c1a3785fe9b1c98be47->leave($__internal_a582dda4d7d61541022c34945145e1964898e4aee2d89c1a3785fe9b1c98be47_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cfb8ad4ff1ff5e44578c78a296894a5f16071e680bac032bd5e7761f52f1193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfb8ad4ff1ff5e44578c78a296894a5f16071e680bac032bd5e7761f52f1193->enter($__internal_4cfb8ad4ff1ff5e44578c78a296894a5f16071e680bac032bd5e7761f52f1193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5acd4538ef3cd22505b45dc90fdf41f1d141e16cc2496dfc4fc1aada1a58996e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acd4538ef3cd22505b45dc90fdf41f1d141e16cc2496dfc4fc1aada1a58996e->enter($__internal_5acd4538ef3cd22505b45dc90fdf41f1d141e16cc2496dfc4fc1aada1a58996e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5acd4538ef3cd22505b45dc90fdf41f1d141e16cc2496dfc4fc1aada1a58996e->leave($__internal_5acd4538ef3cd22505b45dc90fdf41f1d141e16cc2496dfc4fc1aada1a58996e_prof);

        
        $__internal_4cfb8ad4ff1ff5e44578c78a296894a5f16071e680bac032bd5e7761f52f1193->leave($__internal_4cfb8ad4ff1ff5e44578c78a296894a5f16071e680bac032bd5e7761f52f1193_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_97010e5a972bd570efb20e28af28f25ed28eaa5c8016aec23e6a32a2eff0ff67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97010e5a972bd570efb20e28af28f25ed28eaa5c8016aec23e6a32a2eff0ff67->enter($__internal_97010e5a972bd570efb20e28af28f25ed28eaa5c8016aec23e6a32a2eff0ff67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_311849cd0777fdc714022c7320abfe9c22dd555cdf4fa92f6cb4a03fbd34b93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311849cd0777fdc714022c7320abfe9c22dd555cdf4fa92f6cb4a03fbd34b93d->enter($__internal_311849cd0777fdc714022c7320abfe9c22dd555cdf4fa92f6cb4a03fbd34b93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_311849cd0777fdc714022c7320abfe9c22dd555cdf4fa92f6cb4a03fbd34b93d->leave($__internal_311849cd0777fdc714022c7320abfe9c22dd555cdf4fa92f6cb4a03fbd34b93d_prof);

        
        $__internal_97010e5a972bd570efb20e28af28f25ed28eaa5c8016aec23e6a32a2eff0ff67->leave($__internal_97010e5a972bd570efb20e28af28f25ed28eaa5c8016aec23e6a32a2eff0ff67_prof);

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
