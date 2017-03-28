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
        $__internal_e41a468bb2d0cb51d9136ccc466dba1852b62a39465665a34c3debfb5a2b9825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41a468bb2d0cb51d9136ccc466dba1852b62a39465665a34c3debfb5a2b9825->enter($__internal_e41a468bb2d0cb51d9136ccc466dba1852b62a39465665a34c3debfb5a2b9825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_fda8891e835a8aff3f95ae3ce6bb7968ebb7d97e86cf15239e3e6eaa3f2a4aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda8891e835a8aff3f95ae3ce6bb7968ebb7d97e86cf15239e3e6eaa3f2a4aa1->enter($__internal_fda8891e835a8aff3f95ae3ce6bb7968ebb7d97e86cf15239e3e6eaa3f2a4aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e41a468bb2d0cb51d9136ccc466dba1852b62a39465665a34c3debfb5a2b9825->leave($__internal_e41a468bb2d0cb51d9136ccc466dba1852b62a39465665a34c3debfb5a2b9825_prof);

        
        $__internal_fda8891e835a8aff3f95ae3ce6bb7968ebb7d97e86cf15239e3e6eaa3f2a4aa1->leave($__internal_fda8891e835a8aff3f95ae3ce6bb7968ebb7d97e86cf15239e3e6eaa3f2a4aa1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1686df0d31ccac2e41d9f26b20251607aaed0d5e48dbd6aa8fd0fc8dd95b2662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1686df0d31ccac2e41d9f26b20251607aaed0d5e48dbd6aa8fd0fc8dd95b2662->enter($__internal_1686df0d31ccac2e41d9f26b20251607aaed0d5e48dbd6aa8fd0fc8dd95b2662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8c0780ae978fdf9f159d5103c4a667a3d5db7082588efbacb5dd0f18827fbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c0780ae978fdf9f159d5103c4a667a3d5db7082588efbacb5dd0f18827fbb2->enter($__internal_b8c0780ae978fdf9f159d5103c4a667a3d5db7082588efbacb5dd0f18827fbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b8c0780ae978fdf9f159d5103c4a667a3d5db7082588efbacb5dd0f18827fbb2->leave($__internal_b8c0780ae978fdf9f159d5103c4a667a3d5db7082588efbacb5dd0f18827fbb2_prof);

        
        $__internal_1686df0d31ccac2e41d9f26b20251607aaed0d5e48dbd6aa8fd0fc8dd95b2662->leave($__internal_1686df0d31ccac2e41d9f26b20251607aaed0d5e48dbd6aa8fd0fc8dd95b2662_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f2afd24decfae330ed982f81f4812f91f51c4c371c9b58ef4023a88225f86cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2afd24decfae330ed982f81f4812f91f51c4c371c9b58ef4023a88225f86cd->enter($__internal_4f2afd24decfae330ed982f81f4812f91f51c4c371c9b58ef4023a88225f86cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1e70475f961c3662779e1e7adc8fb8c50a18dc3d970a03b964ec571c6060075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e70475f961c3662779e1e7adc8fb8c50a18dc3d970a03b964ec571c6060075->enter($__internal_a1e70475f961c3662779e1e7adc8fb8c50a18dc3d970a03b964ec571c6060075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a1e70475f961c3662779e1e7adc8fb8c50a18dc3d970a03b964ec571c6060075->leave($__internal_a1e70475f961c3662779e1e7adc8fb8c50a18dc3d970a03b964ec571c6060075_prof);

        
        $__internal_4f2afd24decfae330ed982f81f4812f91f51c4c371c9b58ef4023a88225f86cd->leave($__internal_4f2afd24decfae330ed982f81f4812f91f51c4c371c9b58ef4023a88225f86cd_prof);

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
