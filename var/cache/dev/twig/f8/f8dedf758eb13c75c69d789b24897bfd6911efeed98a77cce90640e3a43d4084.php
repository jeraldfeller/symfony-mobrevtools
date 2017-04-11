<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5f4f80f4fc54b961df9669f723b216dcd2a9427c27e5f7a5991e99587d471bf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_6115ee7466f0323b6113f009adfbab3138cdc590f33f045063077276e6f4113d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6115ee7466f0323b6113f009adfbab3138cdc590f33f045063077276e6f4113d->enter($__internal_6115ee7466f0323b6113f009adfbab3138cdc590f33f045063077276e6f4113d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_ac94ebb14640fd27978666883ec4c83cf0e22baf8e20de68b96ef8e6e67376ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac94ebb14640fd27978666883ec4c83cf0e22baf8e20de68b96ef8e6e67376ec->enter($__internal_ac94ebb14640fd27978666883ec4c83cf0e22baf8e20de68b96ef8e6e67376ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6115ee7466f0323b6113f009adfbab3138cdc590f33f045063077276e6f4113d->leave($__internal_6115ee7466f0323b6113f009adfbab3138cdc590f33f045063077276e6f4113d_prof);

        
        $__internal_ac94ebb14640fd27978666883ec4c83cf0e22baf8e20de68b96ef8e6e67376ec->leave($__internal_ac94ebb14640fd27978666883ec4c83cf0e22baf8e20de68b96ef8e6e67376ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38039ee2731e9c8767f01532d6eff9358279d1b01e033dd3f863deb8856b63bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38039ee2731e9c8767f01532d6eff9358279d1b01e033dd3f863deb8856b63bb->enter($__internal_38039ee2731e9c8767f01532d6eff9358279d1b01e033dd3f863deb8856b63bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_36695bf63823cee5d2580d54b7521180fbb74053945fe6116d3c86bec65e4e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36695bf63823cee5d2580d54b7521180fbb74053945fe6116d3c86bec65e4e3f->enter($__internal_36695bf63823cee5d2580d54b7521180fbb74053945fe6116d3c86bec65e4e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_36695bf63823cee5d2580d54b7521180fbb74053945fe6116d3c86bec65e4e3f->leave($__internal_36695bf63823cee5d2580d54b7521180fbb74053945fe6116d3c86bec65e4e3f_prof);

        
        $__internal_38039ee2731e9c8767f01532d6eff9358279d1b01e033dd3f863deb8856b63bb->leave($__internal_38039ee2731e9c8767f01532d6eff9358279d1b01e033dd3f863deb8856b63bb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_36c3a0f94485b21ea37f67846a99ac8da009966746439aa58975c38e20eac605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c3a0f94485b21ea37f67846a99ac8da009966746439aa58975c38e20eac605->enter($__internal_36c3a0f94485b21ea37f67846a99ac8da009966746439aa58975c38e20eac605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7d5c6d11a96819a50a661bac6fab1cb26b826beff24164ad8b3d39b02d5c5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d5c6d11a96819a50a661bac6fab1cb26b826beff24164ad8b3d39b02d5c5d7->enter($__internal_d7d5c6d11a96819a50a661bac6fab1cb26b826beff24164ad8b3d39b02d5c5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d7d5c6d11a96819a50a661bac6fab1cb26b826beff24164ad8b3d39b02d5c5d7->leave($__internal_d7d5c6d11a96819a50a661bac6fab1cb26b826beff24164ad8b3d39b02d5c5d7_prof);

        
        $__internal_36c3a0f94485b21ea37f67846a99ac8da009966746439aa58975c38e20eac605->leave($__internal_36c3a0f94485b21ea37f67846a99ac8da009966746439aa58975c38e20eac605_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d4373e340808d7d91a35c4760f715a233a69f28469e8e08e10691f9d33addf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4373e340808d7d91a35c4760f715a233a69f28469e8e08e10691f9d33addf6->enter($__internal_3d4373e340808d7d91a35c4760f715a233a69f28469e8e08e10691f9d33addf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e72a38107a20ae4e64136691782e4b4ec3a28a3c5309e0829bf6ecf3aacd1855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72a38107a20ae4e64136691782e4b4ec3a28a3c5309e0829bf6ecf3aacd1855->enter($__internal_e72a38107a20ae4e64136691782e4b4ec3a28a3c5309e0829bf6ecf3aacd1855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e72a38107a20ae4e64136691782e4b4ec3a28a3c5309e0829bf6ecf3aacd1855->leave($__internal_e72a38107a20ae4e64136691782e4b4ec3a28a3c5309e0829bf6ecf3aacd1855_prof);

        
        $__internal_3d4373e340808d7d91a35c4760f715a233a69f28469e8e08e10691f9d33addf6->leave($__internal_3d4373e340808d7d91a35c4760f715a233a69f28469e8e08e10691f9d33addf6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
