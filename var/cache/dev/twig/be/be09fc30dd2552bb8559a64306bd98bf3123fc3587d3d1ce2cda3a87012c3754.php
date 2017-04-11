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
        $__internal_6146949e846a06a562eb6574e5e7f6bf8454a468f74de0dbb0589796f06a1bea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6146949e846a06a562eb6574e5e7f6bf8454a468f74de0dbb0589796f06a1bea->enter($__internal_6146949e846a06a562eb6574e5e7f6bf8454a468f74de0dbb0589796f06a1bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_8ff7801f6f1756c888b0882e0ccca74911a2e62a626a3352604c8f37998b08d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff7801f6f1756c888b0882e0ccca74911a2e62a626a3352604c8f37998b08d8->enter($__internal_8ff7801f6f1756c888b0882e0ccca74911a2e62a626a3352604c8f37998b08d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6146949e846a06a562eb6574e5e7f6bf8454a468f74de0dbb0589796f06a1bea->leave($__internal_6146949e846a06a562eb6574e5e7f6bf8454a468f74de0dbb0589796f06a1bea_prof);

        
        $__internal_8ff7801f6f1756c888b0882e0ccca74911a2e62a626a3352604c8f37998b08d8->leave($__internal_8ff7801f6f1756c888b0882e0ccca74911a2e62a626a3352604c8f37998b08d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b765c07a631323731882d7d0f4f64965e534db431b51ba40c6395d318e6c0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b765c07a631323731882d7d0f4f64965e534db431b51ba40c6395d318e6c0c3->enter($__internal_4b765c07a631323731882d7d0f4f64965e534db431b51ba40c6395d318e6c0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8d3295ec0bdac466778053f170e7e0448e24bd056bd2b7be2964db3e7f8e059e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3295ec0bdac466778053f170e7e0448e24bd056bd2b7be2964db3e7f8e059e->enter($__internal_8d3295ec0bdac466778053f170e7e0448e24bd056bd2b7be2964db3e7f8e059e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_8d3295ec0bdac466778053f170e7e0448e24bd056bd2b7be2964db3e7f8e059e->leave($__internal_8d3295ec0bdac466778053f170e7e0448e24bd056bd2b7be2964db3e7f8e059e_prof);

        
        $__internal_4b765c07a631323731882d7d0f4f64965e534db431b51ba40c6395d318e6c0c3->leave($__internal_4b765c07a631323731882d7d0f4f64965e534db431b51ba40c6395d318e6c0c3_prof);

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
