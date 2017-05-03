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
        $__internal_0e49625d8a459e3b3bc223a7454eb79541ed49104f59648752ee9f7035de74ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e49625d8a459e3b3bc223a7454eb79541ed49104f59648752ee9f7035de74ab->enter($__internal_0e49625d8a459e3b3bc223a7454eb79541ed49104f59648752ee9f7035de74ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ff5792360b5c32d0aa61c7fb1e388197854a0fa36b60ce91012fa589d554c303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5792360b5c32d0aa61c7fb1e388197854a0fa36b60ce91012fa589d554c303->enter($__internal_ff5792360b5c32d0aa61c7fb1e388197854a0fa36b60ce91012fa589d554c303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e49625d8a459e3b3bc223a7454eb79541ed49104f59648752ee9f7035de74ab->leave($__internal_0e49625d8a459e3b3bc223a7454eb79541ed49104f59648752ee9f7035de74ab_prof);

        
        $__internal_ff5792360b5c32d0aa61c7fb1e388197854a0fa36b60ce91012fa589d554c303->leave($__internal_ff5792360b5c32d0aa61c7fb1e388197854a0fa36b60ce91012fa589d554c303_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d8c80c121c5f1eb8b5ad9c47ad0d16e52fe3c2f6cd6311536e22a189a6c3c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d8c80c121c5f1eb8b5ad9c47ad0d16e52fe3c2f6cd6311536e22a189a6c3c2a->enter($__internal_2d8c80c121c5f1eb8b5ad9c47ad0d16e52fe3c2f6cd6311536e22a189a6c3c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd8ffc56e65c88970f6dc20d2a3835533ed3d01700a96139d726c0381e72932e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8ffc56e65c88970f6dc20d2a3835533ed3d01700a96139d726c0381e72932e->enter($__internal_fd8ffc56e65c88970f6dc20d2a3835533ed3d01700a96139d726c0381e72932e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fd8ffc56e65c88970f6dc20d2a3835533ed3d01700a96139d726c0381e72932e->leave($__internal_fd8ffc56e65c88970f6dc20d2a3835533ed3d01700a96139d726c0381e72932e_prof);

        
        $__internal_2d8c80c121c5f1eb8b5ad9c47ad0d16e52fe3c2f6cd6311536e22a189a6c3c2a->leave($__internal_2d8c80c121c5f1eb8b5ad9c47ad0d16e52fe3c2f6cd6311536e22a189a6c3c2a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1973b0659e5fb87a30d868494ab2c05d7411af5069b30ac2db10fce53f5f7be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1973b0659e5fb87a30d868494ab2c05d7411af5069b30ac2db10fce53f5f7be3->enter($__internal_1973b0659e5fb87a30d868494ab2c05d7411af5069b30ac2db10fce53f5f7be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31ce1446ab1bbd0c2568577840cd515e3f09737830b0d1e7d12dba00a4d6069c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ce1446ab1bbd0c2568577840cd515e3f09737830b0d1e7d12dba00a4d6069c->enter($__internal_31ce1446ab1bbd0c2568577840cd515e3f09737830b0d1e7d12dba00a4d6069c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_31ce1446ab1bbd0c2568577840cd515e3f09737830b0d1e7d12dba00a4d6069c->leave($__internal_31ce1446ab1bbd0c2568577840cd515e3f09737830b0d1e7d12dba00a4d6069c_prof);

        
        $__internal_1973b0659e5fb87a30d868494ab2c05d7411af5069b30ac2db10fce53f5f7be3->leave($__internal_1973b0659e5fb87a30d868494ab2c05d7411af5069b30ac2db10fce53f5f7be3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1280a3e76930f7d4b985b92869b0c49a6b1643a14abde96d85b45fd30187339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1280a3e76930f7d4b985b92869b0c49a6b1643a14abde96d85b45fd30187339->enter($__internal_a1280a3e76930f7d4b985b92869b0c49a6b1643a14abde96d85b45fd30187339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3380fe6b2a4710091f93f05f79ef3da8631deef92ec462be44d0556df48614ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3380fe6b2a4710091f93f05f79ef3da8631deef92ec462be44d0556df48614ae->enter($__internal_3380fe6b2a4710091f93f05f79ef3da8631deef92ec462be44d0556df48614ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3380fe6b2a4710091f93f05f79ef3da8631deef92ec462be44d0556df48614ae->leave($__internal_3380fe6b2a4710091f93f05f79ef3da8631deef92ec462be44d0556df48614ae_prof);

        
        $__internal_a1280a3e76930f7d4b985b92869b0c49a6b1643a14abde96d85b45fd30187339->leave($__internal_a1280a3e76930f7d4b985b92869b0c49a6b1643a14abde96d85b45fd30187339_prof);

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
