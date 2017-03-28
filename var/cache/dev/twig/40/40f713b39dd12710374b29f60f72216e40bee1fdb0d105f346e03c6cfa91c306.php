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
        $__internal_2f02e1454a9ddc42eb126e29ed353a9a244a36128ef834366ff4531cdce7de1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f02e1454a9ddc42eb126e29ed353a9a244a36128ef834366ff4531cdce7de1c->enter($__internal_2f02e1454a9ddc42eb126e29ed353a9a244a36128ef834366ff4531cdce7de1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b4df26e64fb8d26fa7dc40a9c861fc4191bc8e7346251b5d88c25ad4dc65eac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4df26e64fb8d26fa7dc40a9c861fc4191bc8e7346251b5d88c25ad4dc65eac3->enter($__internal_b4df26e64fb8d26fa7dc40a9c861fc4191bc8e7346251b5d88c25ad4dc65eac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f02e1454a9ddc42eb126e29ed353a9a244a36128ef834366ff4531cdce7de1c->leave($__internal_2f02e1454a9ddc42eb126e29ed353a9a244a36128ef834366ff4531cdce7de1c_prof);

        
        $__internal_b4df26e64fb8d26fa7dc40a9c861fc4191bc8e7346251b5d88c25ad4dc65eac3->leave($__internal_b4df26e64fb8d26fa7dc40a9c861fc4191bc8e7346251b5d88c25ad4dc65eac3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d5e3b0a0ba79b28a0f7ce0cf2947aef5adf08137f15d4a9b1931ad491dd0d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5e3b0a0ba79b28a0f7ce0cf2947aef5adf08137f15d4a9b1931ad491dd0d94->enter($__internal_2d5e3b0a0ba79b28a0f7ce0cf2947aef5adf08137f15d4a9b1931ad491dd0d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98f55864254a90f0a7cee3528183eea3c0873a9915b328af11d0e294bf5ddfe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f55864254a90f0a7cee3528183eea3c0873a9915b328af11d0e294bf5ddfe1->enter($__internal_98f55864254a90f0a7cee3528183eea3c0873a9915b328af11d0e294bf5ddfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_98f55864254a90f0a7cee3528183eea3c0873a9915b328af11d0e294bf5ddfe1->leave($__internal_98f55864254a90f0a7cee3528183eea3c0873a9915b328af11d0e294bf5ddfe1_prof);

        
        $__internal_2d5e3b0a0ba79b28a0f7ce0cf2947aef5adf08137f15d4a9b1931ad491dd0d94->leave($__internal_2d5e3b0a0ba79b28a0f7ce0cf2947aef5adf08137f15d4a9b1931ad491dd0d94_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7ad47ee1eaaae40f8e9f5bcc056dbf59eaa4d7e3578d4840b43b8cd102e4513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ad47ee1eaaae40f8e9f5bcc056dbf59eaa4d7e3578d4840b43b8cd102e4513->enter($__internal_f7ad47ee1eaaae40f8e9f5bcc056dbf59eaa4d7e3578d4840b43b8cd102e4513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f433b9c4ad1df28c35d338ad420a1ff8e246a7b68ce175025aa21596931dbd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f433b9c4ad1df28c35d338ad420a1ff8e246a7b68ce175025aa21596931dbd4c->enter($__internal_f433b9c4ad1df28c35d338ad420a1ff8e246a7b68ce175025aa21596931dbd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f433b9c4ad1df28c35d338ad420a1ff8e246a7b68ce175025aa21596931dbd4c->leave($__internal_f433b9c4ad1df28c35d338ad420a1ff8e246a7b68ce175025aa21596931dbd4c_prof);

        
        $__internal_f7ad47ee1eaaae40f8e9f5bcc056dbf59eaa4d7e3578d4840b43b8cd102e4513->leave($__internal_f7ad47ee1eaaae40f8e9f5bcc056dbf59eaa4d7e3578d4840b43b8cd102e4513_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c25c9be39a8c6b8aed4729c79e6df64724358af0690818311309d88191be7ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25c9be39a8c6b8aed4729c79e6df64724358af0690818311309d88191be7ce4->enter($__internal_c25c9be39a8c6b8aed4729c79e6df64724358af0690818311309d88191be7ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25ac3005bc4dd511711084ea82667b91d8daade3e3cee120945966bd4544a7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ac3005bc4dd511711084ea82667b91d8daade3e3cee120945966bd4544a7f7->enter($__internal_25ac3005bc4dd511711084ea82667b91d8daade3e3cee120945966bd4544a7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_25ac3005bc4dd511711084ea82667b91d8daade3e3cee120945966bd4544a7f7->leave($__internal_25ac3005bc4dd511711084ea82667b91d8daade3e3cee120945966bd4544a7f7_prof);

        
        $__internal_c25c9be39a8c6b8aed4729c79e6df64724358af0690818311309d88191be7ce4->leave($__internal_c25c9be39a8c6b8aed4729c79e6df64724358af0690818311309d88191be7ce4_prof);

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
