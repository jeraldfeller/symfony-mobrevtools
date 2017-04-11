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
        $__internal_39ac46b71afb2266430408341ae1adab46b63e353c6580623d0b5135bb3399dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ac46b71afb2266430408341ae1adab46b63e353c6580623d0b5135bb3399dc->enter($__internal_39ac46b71afb2266430408341ae1adab46b63e353c6580623d0b5135bb3399dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_145b9290ab6e60ee0096feeb3b9ff07d7f694d7d46785f65de8d6146db24e6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145b9290ab6e60ee0096feeb3b9ff07d7f694d7d46785f65de8d6146db24e6ba->enter($__internal_145b9290ab6e60ee0096feeb3b9ff07d7f694d7d46785f65de8d6146db24e6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ac46b71afb2266430408341ae1adab46b63e353c6580623d0b5135bb3399dc->leave($__internal_39ac46b71afb2266430408341ae1adab46b63e353c6580623d0b5135bb3399dc_prof);

        
        $__internal_145b9290ab6e60ee0096feeb3b9ff07d7f694d7d46785f65de8d6146db24e6ba->leave($__internal_145b9290ab6e60ee0096feeb3b9ff07d7f694d7d46785f65de8d6146db24e6ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_da516375efcf6a3ad1c938cace7cbf0444027ba86cdd31ee2d968ca98860b684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da516375efcf6a3ad1c938cace7cbf0444027ba86cdd31ee2d968ca98860b684->enter($__internal_da516375efcf6a3ad1c938cace7cbf0444027ba86cdd31ee2d968ca98860b684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_be7d24521ab0c7fbbec3c3dadc663c90f3225b8d342390a3d2a6487642335c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7d24521ab0c7fbbec3c3dadc663c90f3225b8d342390a3d2a6487642335c93->enter($__internal_be7d24521ab0c7fbbec3c3dadc663c90f3225b8d342390a3d2a6487642335c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_be7d24521ab0c7fbbec3c3dadc663c90f3225b8d342390a3d2a6487642335c93->leave($__internal_be7d24521ab0c7fbbec3c3dadc663c90f3225b8d342390a3d2a6487642335c93_prof);

        
        $__internal_da516375efcf6a3ad1c938cace7cbf0444027ba86cdd31ee2d968ca98860b684->leave($__internal_da516375efcf6a3ad1c938cace7cbf0444027ba86cdd31ee2d968ca98860b684_prof);

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
