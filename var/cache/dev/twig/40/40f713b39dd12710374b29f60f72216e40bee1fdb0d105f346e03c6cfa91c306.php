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
        $__internal_334f13cdedb5a7d38077018081180e9f648d45c67d5d59e997b0a31af9af573d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334f13cdedb5a7d38077018081180e9f648d45c67d5d59e997b0a31af9af573d->enter($__internal_334f13cdedb5a7d38077018081180e9f648d45c67d5d59e997b0a31af9af573d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1cf5523316d933c125f00a2dc3b8af7190f7b7937dfddb37aa7de7fae35471ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf5523316d933c125f00a2dc3b8af7190f7b7937dfddb37aa7de7fae35471ca->enter($__internal_1cf5523316d933c125f00a2dc3b8af7190f7b7937dfddb37aa7de7fae35471ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_334f13cdedb5a7d38077018081180e9f648d45c67d5d59e997b0a31af9af573d->leave($__internal_334f13cdedb5a7d38077018081180e9f648d45c67d5d59e997b0a31af9af573d_prof);

        
        $__internal_1cf5523316d933c125f00a2dc3b8af7190f7b7937dfddb37aa7de7fae35471ca->leave($__internal_1cf5523316d933c125f00a2dc3b8af7190f7b7937dfddb37aa7de7fae35471ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_59caf2197891372d8a6604af97901212b51f6ae311f92fd166f5564a198a4674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59caf2197891372d8a6604af97901212b51f6ae311f92fd166f5564a198a4674->enter($__internal_59caf2197891372d8a6604af97901212b51f6ae311f92fd166f5564a198a4674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_374947e8b564982e6e90c173bcfd78a0795c785bcc89a15c211c45fe1ed80302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374947e8b564982e6e90c173bcfd78a0795c785bcc89a15c211c45fe1ed80302->enter($__internal_374947e8b564982e6e90c173bcfd78a0795c785bcc89a15c211c45fe1ed80302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_374947e8b564982e6e90c173bcfd78a0795c785bcc89a15c211c45fe1ed80302->leave($__internal_374947e8b564982e6e90c173bcfd78a0795c785bcc89a15c211c45fe1ed80302_prof);

        
        $__internal_59caf2197891372d8a6604af97901212b51f6ae311f92fd166f5564a198a4674->leave($__internal_59caf2197891372d8a6604af97901212b51f6ae311f92fd166f5564a198a4674_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb4ce8ac334987be219171441615d5c7ef10101afaa12153da434d2c5d370ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4ce8ac334987be219171441615d5c7ef10101afaa12153da434d2c5d370ba8->enter($__internal_bb4ce8ac334987be219171441615d5c7ef10101afaa12153da434d2c5d370ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4820938b4418e3890f7e19132d6a78092f0f94d65c27045d116dedb0950dd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4820938b4418e3890f7e19132d6a78092f0f94d65c27045d116dedb0950dd6b->enter($__internal_d4820938b4418e3890f7e19132d6a78092f0f94d65c27045d116dedb0950dd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d4820938b4418e3890f7e19132d6a78092f0f94d65c27045d116dedb0950dd6b->leave($__internal_d4820938b4418e3890f7e19132d6a78092f0f94d65c27045d116dedb0950dd6b_prof);

        
        $__internal_bb4ce8ac334987be219171441615d5c7ef10101afaa12153da434d2c5d370ba8->leave($__internal_bb4ce8ac334987be219171441615d5c7ef10101afaa12153da434d2c5d370ba8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5562ef11dc8444ca13ca2e2244915656fd75fc4ffc6ae20346af2ea042d6442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5562ef11dc8444ca13ca2e2244915656fd75fc4ffc6ae20346af2ea042d6442->enter($__internal_d5562ef11dc8444ca13ca2e2244915656fd75fc4ffc6ae20346af2ea042d6442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d84964f87b6400fba12ccdef334d0bc4908b7b6bf2e8b1ec738d68f4238a274f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84964f87b6400fba12ccdef334d0bc4908b7b6bf2e8b1ec738d68f4238a274f->enter($__internal_d84964f87b6400fba12ccdef334d0bc4908b7b6bf2e8b1ec738d68f4238a274f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d84964f87b6400fba12ccdef334d0bc4908b7b6bf2e8b1ec738d68f4238a274f->leave($__internal_d84964f87b6400fba12ccdef334d0bc4908b7b6bf2e8b1ec738d68f4238a274f_prof);

        
        $__internal_d5562ef11dc8444ca13ca2e2244915656fd75fc4ffc6ae20346af2ea042d6442->leave($__internal_d5562ef11dc8444ca13ca2e2244915656fd75fc4ffc6ae20346af2ea042d6442_prof);

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
