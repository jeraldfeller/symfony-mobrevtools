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
        $__internal_4389a9b9da27dfd90adab1bb30a502813191256249d1a5d8f4ee91a400b5b345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4389a9b9da27dfd90adab1bb30a502813191256249d1a5d8f4ee91a400b5b345->enter($__internal_4389a9b9da27dfd90adab1bb30a502813191256249d1a5d8f4ee91a400b5b345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c9d6d0aa74eb565e7af0f02824bde7515f5f46e5e596492836c75c5bca38020e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d6d0aa74eb565e7af0f02824bde7515f5f46e5e596492836c75c5bca38020e->enter($__internal_c9d6d0aa74eb565e7af0f02824bde7515f5f46e5e596492836c75c5bca38020e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4389a9b9da27dfd90adab1bb30a502813191256249d1a5d8f4ee91a400b5b345->leave($__internal_4389a9b9da27dfd90adab1bb30a502813191256249d1a5d8f4ee91a400b5b345_prof);

        
        $__internal_c9d6d0aa74eb565e7af0f02824bde7515f5f46e5e596492836c75c5bca38020e->leave($__internal_c9d6d0aa74eb565e7af0f02824bde7515f5f46e5e596492836c75c5bca38020e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79540dd6076d29015b582181a57aaa43e2a6ca99b326cc05da113a17e386bf1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79540dd6076d29015b582181a57aaa43e2a6ca99b326cc05da113a17e386bf1e->enter($__internal_79540dd6076d29015b582181a57aaa43e2a6ca99b326cc05da113a17e386bf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_42cf7b40708a669e8ce3be0f4038916e2cf3466065ab7d659921f300aafb4612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42cf7b40708a669e8ce3be0f4038916e2cf3466065ab7d659921f300aafb4612->enter($__internal_42cf7b40708a669e8ce3be0f4038916e2cf3466065ab7d659921f300aafb4612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_42cf7b40708a669e8ce3be0f4038916e2cf3466065ab7d659921f300aafb4612->leave($__internal_42cf7b40708a669e8ce3be0f4038916e2cf3466065ab7d659921f300aafb4612_prof);

        
        $__internal_79540dd6076d29015b582181a57aaa43e2a6ca99b326cc05da113a17e386bf1e->leave($__internal_79540dd6076d29015b582181a57aaa43e2a6ca99b326cc05da113a17e386bf1e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1413d134a2c1311c3d2aa4e6120adfb01202603047b6515db6d07d815635b16d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1413d134a2c1311c3d2aa4e6120adfb01202603047b6515db6d07d815635b16d->enter($__internal_1413d134a2c1311c3d2aa4e6120adfb01202603047b6515db6d07d815635b16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49535aad90a5049fbea218c7a34375a36c2790379f907102893744c66ad9c751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49535aad90a5049fbea218c7a34375a36c2790379f907102893744c66ad9c751->enter($__internal_49535aad90a5049fbea218c7a34375a36c2790379f907102893744c66ad9c751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_49535aad90a5049fbea218c7a34375a36c2790379f907102893744c66ad9c751->leave($__internal_49535aad90a5049fbea218c7a34375a36c2790379f907102893744c66ad9c751_prof);

        
        $__internal_1413d134a2c1311c3d2aa4e6120adfb01202603047b6515db6d07d815635b16d->leave($__internal_1413d134a2c1311c3d2aa4e6120adfb01202603047b6515db6d07d815635b16d_prof);

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
