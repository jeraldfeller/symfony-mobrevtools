<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_cdc886d84d53c72c5b8ba1b1941d53a50a61e88b787fd7159cde19b226cbd086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_50ab12b7bc2440bb836443f1f8aebee1c345950a2716f7df0dcdd36c01b1aa60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ab12b7bc2440bb836443f1f8aebee1c345950a2716f7df0dcdd36c01b1aa60->enter($__internal_50ab12b7bc2440bb836443f1f8aebee1c345950a2716f7df0dcdd36c01b1aa60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_c6e7a7e0e475aa6c69abb00c32516d7c962051a887e6fe73b44a3886c299cd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e7a7e0e475aa6c69abb00c32516d7c962051a887e6fe73b44a3886c299cd7e->enter($__internal_c6e7a7e0e475aa6c69abb00c32516d7c962051a887e6fe73b44a3886c299cd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50ab12b7bc2440bb836443f1f8aebee1c345950a2716f7df0dcdd36c01b1aa60->leave($__internal_50ab12b7bc2440bb836443f1f8aebee1c345950a2716f7df0dcdd36c01b1aa60_prof);

        
        $__internal_c6e7a7e0e475aa6c69abb00c32516d7c962051a887e6fe73b44a3886c299cd7e->leave($__internal_c6e7a7e0e475aa6c69abb00c32516d7c962051a887e6fe73b44a3886c299cd7e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_79d85e87fc0d3f22674c96ef19919cfc2a132ec9f428828b5bf13e22b1b11583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d85e87fc0d3f22674c96ef19919cfc2a132ec9f428828b5bf13e22b1b11583->enter($__internal_79d85e87fc0d3f22674c96ef19919cfc2a132ec9f428828b5bf13e22b1b11583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fe9fa5bb62a9ec9b72a93b012bd8343c42b4c0dcde3312f280222c91be5abe9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9fa5bb62a9ec9b72a93b012bd8343c42b4c0dcde3312f280222c91be5abe9b->enter($__internal_fe9fa5bb62a9ec9b72a93b012bd8343c42b4c0dcde3312f280222c91be5abe9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_fe9fa5bb62a9ec9b72a93b012bd8343c42b4c0dcde3312f280222c91be5abe9b->leave($__internal_fe9fa5bb62a9ec9b72a93b012bd8343c42b4c0dcde3312f280222c91be5abe9b_prof);

        
        $__internal_79d85e87fc0d3f22674c96ef19919cfc2a132ec9f428828b5bf13e22b1b11583->leave($__internal_79d85e87fc0d3f22674c96ef19919cfc2a132ec9f428828b5bf13e22b1b11583_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
