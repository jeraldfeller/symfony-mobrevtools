<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a694fdbfc0079b85e0d1e7898d55b9becf9e7b3fb4119c2293082466091c6b4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a37f78a495fc42be29c2c0ce4e04cf3575947cbe3c5e860e852cd9e0753b0a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a37f78a495fc42be29c2c0ce4e04cf3575947cbe3c5e860e852cd9e0753b0a98->enter($__internal_a37f78a495fc42be29c2c0ce4e04cf3575947cbe3c5e860e852cd9e0753b0a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_efaee0e036ec8d2156d03bb7435afca5f9bd82baf0db794d64fb39dec52fb076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaee0e036ec8d2156d03bb7435afca5f9bd82baf0db794d64fb39dec52fb076->enter($__internal_efaee0e036ec8d2156d03bb7435afca5f9bd82baf0db794d64fb39dec52fb076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a37f78a495fc42be29c2c0ce4e04cf3575947cbe3c5e860e852cd9e0753b0a98->leave($__internal_a37f78a495fc42be29c2c0ce4e04cf3575947cbe3c5e860e852cd9e0753b0a98_prof);

        
        $__internal_efaee0e036ec8d2156d03bb7435afca5f9bd82baf0db794d64fb39dec52fb076->leave($__internal_efaee0e036ec8d2156d03bb7435afca5f9bd82baf0db794d64fb39dec52fb076_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad675bb2adeb8bf346636cbd5bcc17708d0f67dd5aa16b019ec72e92c53d3eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad675bb2adeb8bf346636cbd5bcc17708d0f67dd5aa16b019ec72e92c53d3eab->enter($__internal_ad675bb2adeb8bf346636cbd5bcc17708d0f67dd5aa16b019ec72e92c53d3eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bafd2df5ab7527da86b1e34257032d3e98799ec87e4c8d778331a9761d6065c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafd2df5ab7527da86b1e34257032d3e98799ec87e4c8d778331a9761d6065c5->enter($__internal_bafd2df5ab7527da86b1e34257032d3e98799ec87e4c8d778331a9761d6065c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bafd2df5ab7527da86b1e34257032d3e98799ec87e4c8d778331a9761d6065c5->leave($__internal_bafd2df5ab7527da86b1e34257032d3e98799ec87e4c8d778331a9761d6065c5_prof);

        
        $__internal_ad675bb2adeb8bf346636cbd5bcc17708d0f67dd5aa16b019ec72e92c53d3eab->leave($__internal_ad675bb2adeb8bf346636cbd5bcc17708d0f67dd5aa16b019ec72e92c53d3eab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da193c36b1b47112d9624b45881212ee4306e6d413f69f605cc9cefe4f747336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da193c36b1b47112d9624b45881212ee4306e6d413f69f605cc9cefe4f747336->enter($__internal_da193c36b1b47112d9624b45881212ee4306e6d413f69f605cc9cefe4f747336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_646d75f79be8672a7e342f101333e99b15d25859b7202caafc4b84a7c7d2f209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646d75f79be8672a7e342f101333e99b15d25859b7202caafc4b84a7c7d2f209->enter($__internal_646d75f79be8672a7e342f101333e99b15d25859b7202caafc4b84a7c7d2f209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_646d75f79be8672a7e342f101333e99b15d25859b7202caafc4b84a7c7d2f209->leave($__internal_646d75f79be8672a7e342f101333e99b15d25859b7202caafc4b84a7c7d2f209_prof);

        
        $__internal_da193c36b1b47112d9624b45881212ee4306e6d413f69f605cc9cefe4f747336->leave($__internal_da193c36b1b47112d9624b45881212ee4306e6d413f69f605cc9cefe4f747336_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
