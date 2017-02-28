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
        $__internal_f615d1a2445225f57ed92b4a5ff2d049c8c48cdae8df0eb4dd4b6280e83d5bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f615d1a2445225f57ed92b4a5ff2d049c8c48cdae8df0eb4dd4b6280e83d5bf6->enter($__internal_f615d1a2445225f57ed92b4a5ff2d049c8c48cdae8df0eb4dd4b6280e83d5bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ffd4119dbc6906a7093febcef8ae2a2b289b9908ab1bc53277ffae488d270ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd4119dbc6906a7093febcef8ae2a2b289b9908ab1bc53277ffae488d270ba2->enter($__internal_ffd4119dbc6906a7093febcef8ae2a2b289b9908ab1bc53277ffae488d270ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f615d1a2445225f57ed92b4a5ff2d049c8c48cdae8df0eb4dd4b6280e83d5bf6->leave($__internal_f615d1a2445225f57ed92b4a5ff2d049c8c48cdae8df0eb4dd4b6280e83d5bf6_prof);

        
        $__internal_ffd4119dbc6906a7093febcef8ae2a2b289b9908ab1bc53277ffae488d270ba2->leave($__internal_ffd4119dbc6906a7093febcef8ae2a2b289b9908ab1bc53277ffae488d270ba2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_716a9836db63c2f508885a32e06a72de13d00b72f4c357f969fa3e7d4866370b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716a9836db63c2f508885a32e06a72de13d00b72f4c357f969fa3e7d4866370b->enter($__internal_716a9836db63c2f508885a32e06a72de13d00b72f4c357f969fa3e7d4866370b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5d3353706d4e52466440b2c1f26c740f49c87e719eb3f360dd1feffeb6a4923c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3353706d4e52466440b2c1f26c740f49c87e719eb3f360dd1feffeb6a4923c->enter($__internal_5d3353706d4e52466440b2c1f26c740f49c87e719eb3f360dd1feffeb6a4923c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5d3353706d4e52466440b2c1f26c740f49c87e719eb3f360dd1feffeb6a4923c->leave($__internal_5d3353706d4e52466440b2c1f26c740f49c87e719eb3f360dd1feffeb6a4923c_prof);

        
        $__internal_716a9836db63c2f508885a32e06a72de13d00b72f4c357f969fa3e7d4866370b->leave($__internal_716a9836db63c2f508885a32e06a72de13d00b72f4c357f969fa3e7d4866370b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b48210e57c34dd91327fe9a4b5303b484c68a60a4f1462b97a17933a47624e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b48210e57c34dd91327fe9a4b5303b484c68a60a4f1462b97a17933a47624e1->enter($__internal_9b48210e57c34dd91327fe9a4b5303b484c68a60a4f1462b97a17933a47624e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a59f60df9c2564d0ff12c4496c5120f74a4ba27d81e715444ceae7af511e1b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59f60df9c2564d0ff12c4496c5120f74a4ba27d81e715444ceae7af511e1b24->enter($__internal_a59f60df9c2564d0ff12c4496c5120f74a4ba27d81e715444ceae7af511e1b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a59f60df9c2564d0ff12c4496c5120f74a4ba27d81e715444ceae7af511e1b24->leave($__internal_a59f60df9c2564d0ff12c4496c5120f74a4ba27d81e715444ceae7af511e1b24_prof);

        
        $__internal_9b48210e57c34dd91327fe9a4b5303b484c68a60a4f1462b97a17933a47624e1->leave($__internal_9b48210e57c34dd91327fe9a4b5303b484c68a60a4f1462b97a17933a47624e1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_41c499d586714ec5d201a0a20bd587c569e1411bdb06f426503e016ee645000d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c499d586714ec5d201a0a20bd587c569e1411bdb06f426503e016ee645000d->enter($__internal_41c499d586714ec5d201a0a20bd587c569e1411bdb06f426503e016ee645000d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba3e991eed96434920bc58fa6d4ceb463267076b7245a1a6ac853fadf7109bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3e991eed96434920bc58fa6d4ceb463267076b7245a1a6ac853fadf7109bb4->enter($__internal_ba3e991eed96434920bc58fa6d4ceb463267076b7245a1a6ac853fadf7109bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ba3e991eed96434920bc58fa6d4ceb463267076b7245a1a6ac853fadf7109bb4->leave($__internal_ba3e991eed96434920bc58fa6d4ceb463267076b7245a1a6ac853fadf7109bb4_prof);

        
        $__internal_41c499d586714ec5d201a0a20bd587c569e1411bdb06f426503e016ee645000d->leave($__internal_41c499d586714ec5d201a0a20bd587c569e1411bdb06f426503e016ee645000d_prof);

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
