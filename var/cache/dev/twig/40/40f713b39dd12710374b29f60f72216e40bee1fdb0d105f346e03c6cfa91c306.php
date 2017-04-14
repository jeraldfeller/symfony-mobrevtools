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
        $__internal_288cc601914e6f818676c4e1597a3e5b3b5b64dc88a4490e7b99a9c68e4c47ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288cc601914e6f818676c4e1597a3e5b3b5b64dc88a4490e7b99a9c68e4c47ee->enter($__internal_288cc601914e6f818676c4e1597a3e5b3b5b64dc88a4490e7b99a9c68e4c47ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4db01d09f75e5a9c81b9cf58e69e1cbe93226843cd42490b43aea31b1b7f14dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db01d09f75e5a9c81b9cf58e69e1cbe93226843cd42490b43aea31b1b7f14dd->enter($__internal_4db01d09f75e5a9c81b9cf58e69e1cbe93226843cd42490b43aea31b1b7f14dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_288cc601914e6f818676c4e1597a3e5b3b5b64dc88a4490e7b99a9c68e4c47ee->leave($__internal_288cc601914e6f818676c4e1597a3e5b3b5b64dc88a4490e7b99a9c68e4c47ee_prof);

        
        $__internal_4db01d09f75e5a9c81b9cf58e69e1cbe93226843cd42490b43aea31b1b7f14dd->leave($__internal_4db01d09f75e5a9c81b9cf58e69e1cbe93226843cd42490b43aea31b1b7f14dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d532cad87f59cced20cb7b7e734129fb09633caca9fa9b6c5292a3e9a9928a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d532cad87f59cced20cb7b7e734129fb09633caca9fa9b6c5292a3e9a9928a1->enter($__internal_6d532cad87f59cced20cb7b7e734129fb09633caca9fa9b6c5292a3e9a9928a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1581790545cb44c757af6d3a06f3267233d2113e64b6d5702b6005f0757f8ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1581790545cb44c757af6d3a06f3267233d2113e64b6d5702b6005f0757f8ac6->enter($__internal_1581790545cb44c757af6d3a06f3267233d2113e64b6d5702b6005f0757f8ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1581790545cb44c757af6d3a06f3267233d2113e64b6d5702b6005f0757f8ac6->leave($__internal_1581790545cb44c757af6d3a06f3267233d2113e64b6d5702b6005f0757f8ac6_prof);

        
        $__internal_6d532cad87f59cced20cb7b7e734129fb09633caca9fa9b6c5292a3e9a9928a1->leave($__internal_6d532cad87f59cced20cb7b7e734129fb09633caca9fa9b6c5292a3e9a9928a1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a07f54d4c8b66c699819fd8eb626a9b431c0d59f92eea8646d83d64336634577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07f54d4c8b66c699819fd8eb626a9b431c0d59f92eea8646d83d64336634577->enter($__internal_a07f54d4c8b66c699819fd8eb626a9b431c0d59f92eea8646d83d64336634577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15fb8ebecee7954dd2d0661ea6d62266ec621db60bf5f456e8211ae419813220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fb8ebecee7954dd2d0661ea6d62266ec621db60bf5f456e8211ae419813220->enter($__internal_15fb8ebecee7954dd2d0661ea6d62266ec621db60bf5f456e8211ae419813220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_15fb8ebecee7954dd2d0661ea6d62266ec621db60bf5f456e8211ae419813220->leave($__internal_15fb8ebecee7954dd2d0661ea6d62266ec621db60bf5f456e8211ae419813220_prof);

        
        $__internal_a07f54d4c8b66c699819fd8eb626a9b431c0d59f92eea8646d83d64336634577->leave($__internal_a07f54d4c8b66c699819fd8eb626a9b431c0d59f92eea8646d83d64336634577_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_17adfb8ebb7d86132f0ad76abcb407f8ed78857916430f261c117dbffbaa983c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17adfb8ebb7d86132f0ad76abcb407f8ed78857916430f261c117dbffbaa983c->enter($__internal_17adfb8ebb7d86132f0ad76abcb407f8ed78857916430f261c117dbffbaa983c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc85cf6612e146ec8e1ad42fc27a00e432dbe8e02ab5531eed19e27e573a7317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc85cf6612e146ec8e1ad42fc27a00e432dbe8e02ab5531eed19e27e573a7317->enter($__internal_cc85cf6612e146ec8e1ad42fc27a00e432dbe8e02ab5531eed19e27e573a7317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_cc85cf6612e146ec8e1ad42fc27a00e432dbe8e02ab5531eed19e27e573a7317->leave($__internal_cc85cf6612e146ec8e1ad42fc27a00e432dbe8e02ab5531eed19e27e573a7317_prof);

        
        $__internal_17adfb8ebb7d86132f0ad76abcb407f8ed78857916430f261c117dbffbaa983c->leave($__internal_17adfb8ebb7d86132f0ad76abcb407f8ed78857916430f261c117dbffbaa983c_prof);

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
