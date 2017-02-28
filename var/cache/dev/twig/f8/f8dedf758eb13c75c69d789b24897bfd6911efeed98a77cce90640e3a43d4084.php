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
        $__internal_15651817c3d38c17120a2c258c6d0a9f3119ab59a589362aeba8755461e7e939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15651817c3d38c17120a2c258c6d0a9f3119ab59a589362aeba8755461e7e939->enter($__internal_15651817c3d38c17120a2c258c6d0a9f3119ab59a589362aeba8755461e7e939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_fbbcea51210a34c4c085de5f3defcdd3fbbf3a59c03e557bdc5c29d7f2691a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbcea51210a34c4c085de5f3defcdd3fbbf3a59c03e557bdc5c29d7f2691a1a->enter($__internal_fbbcea51210a34c4c085de5f3defcdd3fbbf3a59c03e557bdc5c29d7f2691a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15651817c3d38c17120a2c258c6d0a9f3119ab59a589362aeba8755461e7e939->leave($__internal_15651817c3d38c17120a2c258c6d0a9f3119ab59a589362aeba8755461e7e939_prof);

        
        $__internal_fbbcea51210a34c4c085de5f3defcdd3fbbf3a59c03e557bdc5c29d7f2691a1a->leave($__internal_fbbcea51210a34c4c085de5f3defcdd3fbbf3a59c03e557bdc5c29d7f2691a1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c180d4e4d6395d753b048447b82e3ee57d357ff963c0a1e342dc69fcfdd46525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c180d4e4d6395d753b048447b82e3ee57d357ff963c0a1e342dc69fcfdd46525->enter($__internal_c180d4e4d6395d753b048447b82e3ee57d357ff963c0a1e342dc69fcfdd46525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2686b3bf2f8276b00a00dbebbfdec2ce821c000389661cefb59d3a7ee1d80d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2686b3bf2f8276b00a00dbebbfdec2ce821c000389661cefb59d3a7ee1d80d83->enter($__internal_2686b3bf2f8276b00a00dbebbfdec2ce821c000389661cefb59d3a7ee1d80d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2686b3bf2f8276b00a00dbebbfdec2ce821c000389661cefb59d3a7ee1d80d83->leave($__internal_2686b3bf2f8276b00a00dbebbfdec2ce821c000389661cefb59d3a7ee1d80d83_prof);

        
        $__internal_c180d4e4d6395d753b048447b82e3ee57d357ff963c0a1e342dc69fcfdd46525->leave($__internal_c180d4e4d6395d753b048447b82e3ee57d357ff963c0a1e342dc69fcfdd46525_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3faf319fe79c7a7dd593f0600bb3dd52a361c732162f8d8d4fdb1c357e2424bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3faf319fe79c7a7dd593f0600bb3dd52a361c732162f8d8d4fdb1c357e2424bc->enter($__internal_3faf319fe79c7a7dd593f0600bb3dd52a361c732162f8d8d4fdb1c357e2424bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87c76ada171c44e460bde9f2b5bff35eb8b167e84ebced89f5aade89b5218fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c76ada171c44e460bde9f2b5bff35eb8b167e84ebced89f5aade89b5218fcd->enter($__internal_87c76ada171c44e460bde9f2b5bff35eb8b167e84ebced89f5aade89b5218fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87c76ada171c44e460bde9f2b5bff35eb8b167e84ebced89f5aade89b5218fcd->leave($__internal_87c76ada171c44e460bde9f2b5bff35eb8b167e84ebced89f5aade89b5218fcd_prof);

        
        $__internal_3faf319fe79c7a7dd593f0600bb3dd52a361c732162f8d8d4fdb1c357e2424bc->leave($__internal_3faf319fe79c7a7dd593f0600bb3dd52a361c732162f8d8d4fdb1c357e2424bc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_192f4734afae052ff0a5707e6083377101da6b1286097eb4c31af2f419a8ba40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192f4734afae052ff0a5707e6083377101da6b1286097eb4c31af2f419a8ba40->enter($__internal_192f4734afae052ff0a5707e6083377101da6b1286097eb4c31af2f419a8ba40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b522b58b90e01e00ae02d4d27082649fdc3c4defbfa51663de7cdd6f08d89bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b522b58b90e01e00ae02d4d27082649fdc3c4defbfa51663de7cdd6f08d89bf2->enter($__internal_b522b58b90e01e00ae02d4d27082649fdc3c4defbfa51663de7cdd6f08d89bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_b522b58b90e01e00ae02d4d27082649fdc3c4defbfa51663de7cdd6f08d89bf2->leave($__internal_b522b58b90e01e00ae02d4d27082649fdc3c4defbfa51663de7cdd6f08d89bf2_prof);

        
        $__internal_192f4734afae052ff0a5707e6083377101da6b1286097eb4c31af2f419a8ba40->leave($__internal_192f4734afae052ff0a5707e6083377101da6b1286097eb4c31af2f419a8ba40_prof);

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
