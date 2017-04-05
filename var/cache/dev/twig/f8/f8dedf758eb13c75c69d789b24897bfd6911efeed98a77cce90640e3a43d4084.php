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
        $__internal_f641e5c9b473459ab238b8307838c4cb20ae31239a125a3260f80a16c69e33a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f641e5c9b473459ab238b8307838c4cb20ae31239a125a3260f80a16c69e33a2->enter($__internal_f641e5c9b473459ab238b8307838c4cb20ae31239a125a3260f80a16c69e33a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_1cb54795ba41c7ea59366121ad472fa56f2f01aad491128986e9fec406e5b92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb54795ba41c7ea59366121ad472fa56f2f01aad491128986e9fec406e5b92e->enter($__internal_1cb54795ba41c7ea59366121ad472fa56f2f01aad491128986e9fec406e5b92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f641e5c9b473459ab238b8307838c4cb20ae31239a125a3260f80a16c69e33a2->leave($__internal_f641e5c9b473459ab238b8307838c4cb20ae31239a125a3260f80a16c69e33a2_prof);

        
        $__internal_1cb54795ba41c7ea59366121ad472fa56f2f01aad491128986e9fec406e5b92e->leave($__internal_1cb54795ba41c7ea59366121ad472fa56f2f01aad491128986e9fec406e5b92e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_69d7e8c4ca012d11b1725aceb63f42cf249e96f09bc7e17b0f7005cd87a93ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d7e8c4ca012d11b1725aceb63f42cf249e96f09bc7e17b0f7005cd87a93ef0->enter($__internal_69d7e8c4ca012d11b1725aceb63f42cf249e96f09bc7e17b0f7005cd87a93ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cc56582f4bc53be4ac6a644cbec5e64447438ce00d0b14ff584b5a723e879290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc56582f4bc53be4ac6a644cbec5e64447438ce00d0b14ff584b5a723e879290->enter($__internal_cc56582f4bc53be4ac6a644cbec5e64447438ce00d0b14ff584b5a723e879290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cc56582f4bc53be4ac6a644cbec5e64447438ce00d0b14ff584b5a723e879290->leave($__internal_cc56582f4bc53be4ac6a644cbec5e64447438ce00d0b14ff584b5a723e879290_prof);

        
        $__internal_69d7e8c4ca012d11b1725aceb63f42cf249e96f09bc7e17b0f7005cd87a93ef0->leave($__internal_69d7e8c4ca012d11b1725aceb63f42cf249e96f09bc7e17b0f7005cd87a93ef0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc5aabe0f7eec4c8940b23117b5f78780c1c22ee615c828c2561fc47ada8dfbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5aabe0f7eec4c8940b23117b5f78780c1c22ee615c828c2561fc47ada8dfbf->enter($__internal_cc5aabe0f7eec4c8940b23117b5f78780c1c22ee615c828c2561fc47ada8dfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e70ba952a13411bb67b63e65e9eacbd7127ea59e3e502851abc5973b4022e0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70ba952a13411bb67b63e65e9eacbd7127ea59e3e502851abc5973b4022e0ed->enter($__internal_e70ba952a13411bb67b63e65e9eacbd7127ea59e3e502851abc5973b4022e0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e70ba952a13411bb67b63e65e9eacbd7127ea59e3e502851abc5973b4022e0ed->leave($__internal_e70ba952a13411bb67b63e65e9eacbd7127ea59e3e502851abc5973b4022e0ed_prof);

        
        $__internal_cc5aabe0f7eec4c8940b23117b5f78780c1c22ee615c828c2561fc47ada8dfbf->leave($__internal_cc5aabe0f7eec4c8940b23117b5f78780c1c22ee615c828c2561fc47ada8dfbf_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b76db59441fc67e31538c72fc6ba75cc5dac9394ab386e7bd61c13af47cdbc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b76db59441fc67e31538c72fc6ba75cc5dac9394ab386e7bd61c13af47cdbc1->enter($__internal_8b76db59441fc67e31538c72fc6ba75cc5dac9394ab386e7bd61c13af47cdbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6aa345ee37afc3c993406823c7bdcdc9d9b98f2da09de514c6110a83e9a06e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa345ee37afc3c993406823c7bdcdc9d9b98f2da09de514c6110a83e9a06e9d->enter($__internal_6aa345ee37afc3c993406823c7bdcdc9d9b98f2da09de514c6110a83e9a06e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_6aa345ee37afc3c993406823c7bdcdc9d9b98f2da09de514c6110a83e9a06e9d->leave($__internal_6aa345ee37afc3c993406823c7bdcdc9d9b98f2da09de514c6110a83e9a06e9d_prof);

        
        $__internal_8b76db59441fc67e31538c72fc6ba75cc5dac9394ab386e7bd61c13af47cdbc1->leave($__internal_8b76db59441fc67e31538c72fc6ba75cc5dac9394ab386e7bd61c13af47cdbc1_prof);

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
