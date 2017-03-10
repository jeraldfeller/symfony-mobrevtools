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
        $__internal_7b1225a92b52576e806978d030421f11132e16cdda7cc7e6a3c8b994c9e61753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1225a92b52576e806978d030421f11132e16cdda7cc7e6a3c8b994c9e61753->enter($__internal_7b1225a92b52576e806978d030421f11132e16cdda7cc7e6a3c8b994c9e61753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e2a59926aa07f4660beda6f5e5db5e50e3e84d5d680383fb094184b6f4edee24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a59926aa07f4660beda6f5e5db5e50e3e84d5d680383fb094184b6f4edee24->enter($__internal_e2a59926aa07f4660beda6f5e5db5e50e3e84d5d680383fb094184b6f4edee24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b1225a92b52576e806978d030421f11132e16cdda7cc7e6a3c8b994c9e61753->leave($__internal_7b1225a92b52576e806978d030421f11132e16cdda7cc7e6a3c8b994c9e61753_prof);

        
        $__internal_e2a59926aa07f4660beda6f5e5db5e50e3e84d5d680383fb094184b6f4edee24->leave($__internal_e2a59926aa07f4660beda6f5e5db5e50e3e84d5d680383fb094184b6f4edee24_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_83de24550b8dbb5412e26c5d03fb605c448db5516cb474505179ba6a4f37a28d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83de24550b8dbb5412e26c5d03fb605c448db5516cb474505179ba6a4f37a28d->enter($__internal_83de24550b8dbb5412e26c5d03fb605c448db5516cb474505179ba6a4f37a28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a21e9cbc78b803bf23b76f8fe2b205d10e72f4d73b75ac20477444ee0a4e034e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21e9cbc78b803bf23b76f8fe2b205d10e72f4d73b75ac20477444ee0a4e034e->enter($__internal_a21e9cbc78b803bf23b76f8fe2b205d10e72f4d73b75ac20477444ee0a4e034e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a21e9cbc78b803bf23b76f8fe2b205d10e72f4d73b75ac20477444ee0a4e034e->leave($__internal_a21e9cbc78b803bf23b76f8fe2b205d10e72f4d73b75ac20477444ee0a4e034e_prof);

        
        $__internal_83de24550b8dbb5412e26c5d03fb605c448db5516cb474505179ba6a4f37a28d->leave($__internal_83de24550b8dbb5412e26c5d03fb605c448db5516cb474505179ba6a4f37a28d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8de8d1de80ac411f64bd58e544b1b8b766615cafe44484282a351709efabd1d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de8d1de80ac411f64bd58e544b1b8b766615cafe44484282a351709efabd1d5->enter($__internal_8de8d1de80ac411f64bd58e544b1b8b766615cafe44484282a351709efabd1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d9fd6183147123e327895d90796023fd36ebbda7f89db7a84d8abe10e3d0490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9fd6183147123e327895d90796023fd36ebbda7f89db7a84d8abe10e3d0490->enter($__internal_7d9fd6183147123e327895d90796023fd36ebbda7f89db7a84d8abe10e3d0490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7d9fd6183147123e327895d90796023fd36ebbda7f89db7a84d8abe10e3d0490->leave($__internal_7d9fd6183147123e327895d90796023fd36ebbda7f89db7a84d8abe10e3d0490_prof);

        
        $__internal_8de8d1de80ac411f64bd58e544b1b8b766615cafe44484282a351709efabd1d5->leave($__internal_8de8d1de80ac411f64bd58e544b1b8b766615cafe44484282a351709efabd1d5_prof);

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
