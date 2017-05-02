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
        $__internal_1fc580095d73acda964dffadd75074ffaaa96a1fa05fcd8af0e2add811e2da1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc580095d73acda964dffadd75074ffaaa96a1fa05fcd8af0e2add811e2da1f->enter($__internal_1fc580095d73acda964dffadd75074ffaaa96a1fa05fcd8af0e2add811e2da1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3782500e8fd05c71cc019e8f8943c4cc54353aa8b5ddc34f000c5e4991ad30e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3782500e8fd05c71cc019e8f8943c4cc54353aa8b5ddc34f000c5e4991ad30e8->enter($__internal_3782500e8fd05c71cc019e8f8943c4cc54353aa8b5ddc34f000c5e4991ad30e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc580095d73acda964dffadd75074ffaaa96a1fa05fcd8af0e2add811e2da1f->leave($__internal_1fc580095d73acda964dffadd75074ffaaa96a1fa05fcd8af0e2add811e2da1f_prof);

        
        $__internal_3782500e8fd05c71cc019e8f8943c4cc54353aa8b5ddc34f000c5e4991ad30e8->leave($__internal_3782500e8fd05c71cc019e8f8943c4cc54353aa8b5ddc34f000c5e4991ad30e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2e6e92e48b55b4584cf87665e31aeab0e5bfb3f0c7f0e5d8304eb59949ca1ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e6e92e48b55b4584cf87665e31aeab0e5bfb3f0c7f0e5d8304eb59949ca1ea->enter($__internal_a2e6e92e48b55b4584cf87665e31aeab0e5bfb3f0c7f0e5d8304eb59949ca1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da529f8a1ba6cc349140407d826152a3e94f3d338376b2490845c8e34efd2a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da529f8a1ba6cc349140407d826152a3e94f3d338376b2490845c8e34efd2a56->enter($__internal_da529f8a1ba6cc349140407d826152a3e94f3d338376b2490845c8e34efd2a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_da529f8a1ba6cc349140407d826152a3e94f3d338376b2490845c8e34efd2a56->leave($__internal_da529f8a1ba6cc349140407d826152a3e94f3d338376b2490845c8e34efd2a56_prof);

        
        $__internal_a2e6e92e48b55b4584cf87665e31aeab0e5bfb3f0c7f0e5d8304eb59949ca1ea->leave($__internal_a2e6e92e48b55b4584cf87665e31aeab0e5bfb3f0c7f0e5d8304eb59949ca1ea_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ba4949fb1694f855adf4d7252ce6502632ca41cef9d9bde693f522ee9662347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba4949fb1694f855adf4d7252ce6502632ca41cef9d9bde693f522ee9662347->enter($__internal_2ba4949fb1694f855adf4d7252ce6502632ca41cef9d9bde693f522ee9662347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e7db8b17fede17dbb0762f9204983863ff3fc4d7bdca6c09981b11a9c39d37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7db8b17fede17dbb0762f9204983863ff3fc4d7bdca6c09981b11a9c39d37c->enter($__internal_1e7db8b17fede17dbb0762f9204983863ff3fc4d7bdca6c09981b11a9c39d37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1e7db8b17fede17dbb0762f9204983863ff3fc4d7bdca6c09981b11a9c39d37c->leave($__internal_1e7db8b17fede17dbb0762f9204983863ff3fc4d7bdca6c09981b11a9c39d37c_prof);

        
        $__internal_2ba4949fb1694f855adf4d7252ce6502632ca41cef9d9bde693f522ee9662347->leave($__internal_2ba4949fb1694f855adf4d7252ce6502632ca41cef9d9bde693f522ee9662347_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f576f2bde63e97fdbc01045210d134d57620f63e99f405744da8aa986178d217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f576f2bde63e97fdbc01045210d134d57620f63e99f405744da8aa986178d217->enter($__internal_f576f2bde63e97fdbc01045210d134d57620f63e99f405744da8aa986178d217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f18b426bb0293ea1ba707f8c08f616df7be60b65f1947dc30fa4cc2cf4ba4095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18b426bb0293ea1ba707f8c08f616df7be60b65f1947dc30fa4cc2cf4ba4095->enter($__internal_f18b426bb0293ea1ba707f8c08f616df7be60b65f1947dc30fa4cc2cf4ba4095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f18b426bb0293ea1ba707f8c08f616df7be60b65f1947dc30fa4cc2cf4ba4095->leave($__internal_f18b426bb0293ea1ba707f8c08f616df7be60b65f1947dc30fa4cc2cf4ba4095_prof);

        
        $__internal_f576f2bde63e97fdbc01045210d134d57620f63e99f405744da8aa986178d217->leave($__internal_f576f2bde63e97fdbc01045210d134d57620f63e99f405744da8aa986178d217_prof);

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
