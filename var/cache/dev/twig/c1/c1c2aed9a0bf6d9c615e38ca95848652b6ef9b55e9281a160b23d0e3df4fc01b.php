<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ea9f09f42916f8f4acf778706cca9ddd20b59b9dcc0dac08f191931aa642121e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_6f7916725873b824fe9188f40882b24ff5353a13284bc36eb7b16c4b1e533350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7916725873b824fe9188f40882b24ff5353a13284bc36eb7b16c4b1e533350->enter($__internal_6f7916725873b824fe9188f40882b24ff5353a13284bc36eb7b16c4b1e533350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_02e28041594f848b43c1bae229a9fe258c0232b87ab3f0909caa10f5a37e2955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e28041594f848b43c1bae229a9fe258c0232b87ab3f0909caa10f5a37e2955->enter($__internal_02e28041594f848b43c1bae229a9fe258c0232b87ab3f0909caa10f5a37e2955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f7916725873b824fe9188f40882b24ff5353a13284bc36eb7b16c4b1e533350->leave($__internal_6f7916725873b824fe9188f40882b24ff5353a13284bc36eb7b16c4b1e533350_prof);

        
        $__internal_02e28041594f848b43c1bae229a9fe258c0232b87ab3f0909caa10f5a37e2955->leave($__internal_02e28041594f848b43c1bae229a9fe258c0232b87ab3f0909caa10f5a37e2955_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0df98209a3280fc1ce2a932f6c3a0c3020e32e8ae2f6a0a4948bdf4a6acf48e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df98209a3280fc1ce2a932f6c3a0c3020e32e8ae2f6a0a4948bdf4a6acf48e4->enter($__internal_0df98209a3280fc1ce2a932f6c3a0c3020e32e8ae2f6a0a4948bdf4a6acf48e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e1ffdf4b14fe91ec7b90a2e1c999c5d31ef765e88e3609f13626760fce04979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1ffdf4b14fe91ec7b90a2e1c999c5d31ef765e88e3609f13626760fce04979->enter($__internal_1e1ffdf4b14fe91ec7b90a2e1c999c5d31ef765e88e3609f13626760fce04979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1e1ffdf4b14fe91ec7b90a2e1c999c5d31ef765e88e3609f13626760fce04979->leave($__internal_1e1ffdf4b14fe91ec7b90a2e1c999c5d31ef765e88e3609f13626760fce04979_prof);

        
        $__internal_0df98209a3280fc1ce2a932f6c3a0c3020e32e8ae2f6a0a4948bdf4a6acf48e4->leave($__internal_0df98209a3280fc1ce2a932f6c3a0c3020e32e8ae2f6a0a4948bdf4a6acf48e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_953895a9fe96da8c76441921a6d95d0e234f449cbbe54f0487bad51fcb236b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953895a9fe96da8c76441921a6d95d0e234f449cbbe54f0487bad51fcb236b6e->enter($__internal_953895a9fe96da8c76441921a6d95d0e234f449cbbe54f0487bad51fcb236b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af52326242c01bd10d0b9fcd2bfd557a9243c03501576c326c03d29a1887f512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af52326242c01bd10d0b9fcd2bfd557a9243c03501576c326c03d29a1887f512->enter($__internal_af52326242c01bd10d0b9fcd2bfd557a9243c03501576c326c03d29a1887f512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_af52326242c01bd10d0b9fcd2bfd557a9243c03501576c326c03d29a1887f512->leave($__internal_af52326242c01bd10d0b9fcd2bfd557a9243c03501576c326c03d29a1887f512_prof);

        
        $__internal_953895a9fe96da8c76441921a6d95d0e234f449cbbe54f0487bad51fcb236b6e->leave($__internal_953895a9fe96da8c76441921a6d95d0e234f449cbbe54f0487bad51fcb236b6e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
