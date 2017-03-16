<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_bbef78d2d0eae0c3494b568c4c4abb858a5bf45c407be474c958c1491bb26e7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_660c42b5212773c01479cada786195bb2e674b4eeefd5109326dcfb0d29756ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660c42b5212773c01479cada786195bb2e674b4eeefd5109326dcfb0d29756ea->enter($__internal_660c42b5212773c01479cada786195bb2e674b4eeefd5109326dcfb0d29756ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7539fb3c924d658f816450853f2f99ea97a6f5bc04fe4069d097e3141794a2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7539fb3c924d658f816450853f2f99ea97a6f5bc04fe4069d097e3141794a2a9->enter($__internal_7539fb3c924d658f816450853f2f99ea97a6f5bc04fe4069d097e3141794a2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_660c42b5212773c01479cada786195bb2e674b4eeefd5109326dcfb0d29756ea->leave($__internal_660c42b5212773c01479cada786195bb2e674b4eeefd5109326dcfb0d29756ea_prof);

        
        $__internal_7539fb3c924d658f816450853f2f99ea97a6f5bc04fe4069d097e3141794a2a9->leave($__internal_7539fb3c924d658f816450853f2f99ea97a6f5bc04fe4069d097e3141794a2a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d15ace06d450b0c195948e4cd52af5cac2e9c6e38c460358d32ea3eda3ddf0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d15ace06d450b0c195948e4cd52af5cac2e9c6e38c460358d32ea3eda3ddf0c->enter($__internal_1d15ace06d450b0c195948e4cd52af5cac2e9c6e38c460358d32ea3eda3ddf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2fd4f9e38c9d666ddc309cf271d9b8dddca49532404a81871f6366d6421af2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd4f9e38c9d666ddc309cf271d9b8dddca49532404a81871f6366d6421af2f1->enter($__internal_2fd4f9e38c9d666ddc309cf271d9b8dddca49532404a81871f6366d6421af2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2fd4f9e38c9d666ddc309cf271d9b8dddca49532404a81871f6366d6421af2f1->leave($__internal_2fd4f9e38c9d666ddc309cf271d9b8dddca49532404a81871f6366d6421af2f1_prof);

        
        $__internal_1d15ace06d450b0c195948e4cd52af5cac2e9c6e38c460358d32ea3eda3ddf0c->leave($__internal_1d15ace06d450b0c195948e4cd52af5cac2e9c6e38c460358d32ea3eda3ddf0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
