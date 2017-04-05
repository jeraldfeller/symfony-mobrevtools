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
        $__internal_96ddee85d85831ec39048913dd680bbf60d1eacb05f7b5bef14decbfc3a89789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ddee85d85831ec39048913dd680bbf60d1eacb05f7b5bef14decbfc3a89789->enter($__internal_96ddee85d85831ec39048913dd680bbf60d1eacb05f7b5bef14decbfc3a89789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b47b10b13251ab7de66229420da02e53358645b623854a8f125afa360b7d9ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47b10b13251ab7de66229420da02e53358645b623854a8f125afa360b7d9ad9->enter($__internal_b47b10b13251ab7de66229420da02e53358645b623854a8f125afa360b7d9ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96ddee85d85831ec39048913dd680bbf60d1eacb05f7b5bef14decbfc3a89789->leave($__internal_96ddee85d85831ec39048913dd680bbf60d1eacb05f7b5bef14decbfc3a89789_prof);

        
        $__internal_b47b10b13251ab7de66229420da02e53358645b623854a8f125afa360b7d9ad9->leave($__internal_b47b10b13251ab7de66229420da02e53358645b623854a8f125afa360b7d9ad9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39b17218508d6b24fde681cffcc00b6e3e47b254d3bc443f652ea08e71b787e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b17218508d6b24fde681cffcc00b6e3e47b254d3bc443f652ea08e71b787e8->enter($__internal_39b17218508d6b24fde681cffcc00b6e3e47b254d3bc443f652ea08e71b787e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d15ea47bb39e7dcdf0ad54df4a73f2ad3591c338cbe2465f8e7566c2c3e2933d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15ea47bb39e7dcdf0ad54df4a73f2ad3591c338cbe2465f8e7566c2c3e2933d->enter($__internal_d15ea47bb39e7dcdf0ad54df4a73f2ad3591c338cbe2465f8e7566c2c3e2933d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d15ea47bb39e7dcdf0ad54df4a73f2ad3591c338cbe2465f8e7566c2c3e2933d->leave($__internal_d15ea47bb39e7dcdf0ad54df4a73f2ad3591c338cbe2465f8e7566c2c3e2933d_prof);

        
        $__internal_39b17218508d6b24fde681cffcc00b6e3e47b254d3bc443f652ea08e71b787e8->leave($__internal_39b17218508d6b24fde681cffcc00b6e3e47b254d3bc443f652ea08e71b787e8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_010d82d8f96d62d975e22816738717946e81cea9dcf107673eb4b47c71c0771c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010d82d8f96d62d975e22816738717946e81cea9dcf107673eb4b47c71c0771c->enter($__internal_010d82d8f96d62d975e22816738717946e81cea9dcf107673eb4b47c71c0771c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cfe4255ffed358a9df51a5b7db4b3979c9dd4f222303b26e6beda5eb44895a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe4255ffed358a9df51a5b7db4b3979c9dd4f222303b26e6beda5eb44895a86->enter($__internal_cfe4255ffed358a9df51a5b7db4b3979c9dd4f222303b26e6beda5eb44895a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cfe4255ffed358a9df51a5b7db4b3979c9dd4f222303b26e6beda5eb44895a86->leave($__internal_cfe4255ffed358a9df51a5b7db4b3979c9dd4f222303b26e6beda5eb44895a86_prof);

        
        $__internal_010d82d8f96d62d975e22816738717946e81cea9dcf107673eb4b47c71c0771c->leave($__internal_010d82d8f96d62d975e22816738717946e81cea9dcf107673eb4b47c71c0771c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8e5029e26fa59f0cbc5d3b1785d062a1a2d50a4fd409c6f71c5db73bd3efb3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e5029e26fa59f0cbc5d3b1785d062a1a2d50a4fd409c6f71c5db73bd3efb3d->enter($__internal_d8e5029e26fa59f0cbc5d3b1785d062a1a2d50a4fd409c6f71c5db73bd3efb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b4bf757c8eaa05d8bcce72153da046480d2f5ee3c7211811e3f5704204c6549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4bf757c8eaa05d8bcce72153da046480d2f5ee3c7211811e3f5704204c6549->enter($__internal_5b4bf757c8eaa05d8bcce72153da046480d2f5ee3c7211811e3f5704204c6549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5b4bf757c8eaa05d8bcce72153da046480d2f5ee3c7211811e3f5704204c6549->leave($__internal_5b4bf757c8eaa05d8bcce72153da046480d2f5ee3c7211811e3f5704204c6549_prof);

        
        $__internal_d8e5029e26fa59f0cbc5d3b1785d062a1a2d50a4fd409c6f71c5db73bd3efb3d->leave($__internal_d8e5029e26fa59f0cbc5d3b1785d062a1a2d50a4fd409c6f71c5db73bd3efb3d_prof);

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
