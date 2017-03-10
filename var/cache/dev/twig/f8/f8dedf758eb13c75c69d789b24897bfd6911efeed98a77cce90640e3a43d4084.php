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
        $__internal_e6e5f28a431a0134f6d582150a39b6e5907785f2c90a757218ec646412f32af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e5f28a431a0134f6d582150a39b6e5907785f2c90a757218ec646412f32af7->enter($__internal_e6e5f28a431a0134f6d582150a39b6e5907785f2c90a757218ec646412f32af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_16701b554f90e910835bf962a2ef28cef1f3f176766ff5f228933390e6892e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16701b554f90e910835bf962a2ef28cef1f3f176766ff5f228933390e6892e65->enter($__internal_16701b554f90e910835bf962a2ef28cef1f3f176766ff5f228933390e6892e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6e5f28a431a0134f6d582150a39b6e5907785f2c90a757218ec646412f32af7->leave($__internal_e6e5f28a431a0134f6d582150a39b6e5907785f2c90a757218ec646412f32af7_prof);

        
        $__internal_16701b554f90e910835bf962a2ef28cef1f3f176766ff5f228933390e6892e65->leave($__internal_16701b554f90e910835bf962a2ef28cef1f3f176766ff5f228933390e6892e65_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bcad6ca41bf7bcbf466aed8ef5ef78d73beeff173f518bb68829a3d64216ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bcad6ca41bf7bcbf466aed8ef5ef78d73beeff173f518bb68829a3d64216ebe->enter($__internal_3bcad6ca41bf7bcbf466aed8ef5ef78d73beeff173f518bb68829a3d64216ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8905078f7218abc5aa22555118c95ba8f808e3f9ae87600fc85e5d8fc28ef0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8905078f7218abc5aa22555118c95ba8f808e3f9ae87600fc85e5d8fc28ef0dd->enter($__internal_8905078f7218abc5aa22555118c95ba8f808e3f9ae87600fc85e5d8fc28ef0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8905078f7218abc5aa22555118c95ba8f808e3f9ae87600fc85e5d8fc28ef0dd->leave($__internal_8905078f7218abc5aa22555118c95ba8f808e3f9ae87600fc85e5d8fc28ef0dd_prof);

        
        $__internal_3bcad6ca41bf7bcbf466aed8ef5ef78d73beeff173f518bb68829a3d64216ebe->leave($__internal_3bcad6ca41bf7bcbf466aed8ef5ef78d73beeff173f518bb68829a3d64216ebe_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_db09bc29ff16016f3a9670a61efcd12803d2460bf816172b33caaa45c4edb9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db09bc29ff16016f3a9670a61efcd12803d2460bf816172b33caaa45c4edb9ad->enter($__internal_db09bc29ff16016f3a9670a61efcd12803d2460bf816172b33caaa45c4edb9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7bd649a84ecc53b2247d30c357709ace303a3d6a722f0b653003c6b4a9a476a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd649a84ecc53b2247d30c357709ace303a3d6a722f0b653003c6b4a9a476a1->enter($__internal_7bd649a84ecc53b2247d30c357709ace303a3d6a722f0b653003c6b4a9a476a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7bd649a84ecc53b2247d30c357709ace303a3d6a722f0b653003c6b4a9a476a1->leave($__internal_7bd649a84ecc53b2247d30c357709ace303a3d6a722f0b653003c6b4a9a476a1_prof);

        
        $__internal_db09bc29ff16016f3a9670a61efcd12803d2460bf816172b33caaa45c4edb9ad->leave($__internal_db09bc29ff16016f3a9670a61efcd12803d2460bf816172b33caaa45c4edb9ad_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5013ea2978f8fe7a901f8d98622f804a79e45f05716651b05a8d4bd3ec4112f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5013ea2978f8fe7a901f8d98622f804a79e45f05716651b05a8d4bd3ec4112f2->enter($__internal_5013ea2978f8fe7a901f8d98622f804a79e45f05716651b05a8d4bd3ec4112f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b9734dd036401c162fb4b7ea717cc2114d5986141b2a234f843564bc889eef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9734dd036401c162fb4b7ea717cc2114d5986141b2a234f843564bc889eef3->enter($__internal_0b9734dd036401c162fb4b7ea717cc2114d5986141b2a234f843564bc889eef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_0b9734dd036401c162fb4b7ea717cc2114d5986141b2a234f843564bc889eef3->leave($__internal_0b9734dd036401c162fb4b7ea717cc2114d5986141b2a234f843564bc889eef3_prof);

        
        $__internal_5013ea2978f8fe7a901f8d98622f804a79e45f05716651b05a8d4bd3ec4112f2->leave($__internal_5013ea2978f8fe7a901f8d98622f804a79e45f05716651b05a8d4bd3ec4112f2_prof);

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
