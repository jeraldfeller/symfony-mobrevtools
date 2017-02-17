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
        $__internal_e39c6b2c1b8fa3a017f3fe7d6fd20619f026a475cd7ee4ad1678689ff42d964c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39c6b2c1b8fa3a017f3fe7d6fd20619f026a475cd7ee4ad1678689ff42d964c->enter($__internal_e39c6b2c1b8fa3a017f3fe7d6fd20619f026a475cd7ee4ad1678689ff42d964c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_d3ff3df9d021102909a3708d9ba77ce3a4c93b34f5c3821a2f06b4975f0e17d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ff3df9d021102909a3708d9ba77ce3a4c93b34f5c3821a2f06b4975f0e17d2->enter($__internal_d3ff3df9d021102909a3708d9ba77ce3a4c93b34f5c3821a2f06b4975f0e17d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e39c6b2c1b8fa3a017f3fe7d6fd20619f026a475cd7ee4ad1678689ff42d964c->leave($__internal_e39c6b2c1b8fa3a017f3fe7d6fd20619f026a475cd7ee4ad1678689ff42d964c_prof);

        
        $__internal_d3ff3df9d021102909a3708d9ba77ce3a4c93b34f5c3821a2f06b4975f0e17d2->leave($__internal_d3ff3df9d021102909a3708d9ba77ce3a4c93b34f5c3821a2f06b4975f0e17d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9129dfca2675c49b9f9f9f285eb39e20988afe9d00c08f119b39410246d35e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9129dfca2675c49b9f9f9f285eb39e20988afe9d00c08f119b39410246d35e57->enter($__internal_9129dfca2675c49b9f9f9f285eb39e20988afe9d00c08f119b39410246d35e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0188bbccfa9d14d4cec27bf33b4bfd19acf821160fad1c34105c90085c248b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0188bbccfa9d14d4cec27bf33b4bfd19acf821160fad1c34105c90085c248b1e->enter($__internal_0188bbccfa9d14d4cec27bf33b4bfd19acf821160fad1c34105c90085c248b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_0188bbccfa9d14d4cec27bf33b4bfd19acf821160fad1c34105c90085c248b1e->leave($__internal_0188bbccfa9d14d4cec27bf33b4bfd19acf821160fad1c34105c90085c248b1e_prof);

        
        $__internal_9129dfca2675c49b9f9f9f285eb39e20988afe9d00c08f119b39410246d35e57->leave($__internal_9129dfca2675c49b9f9f9f285eb39e20988afe9d00c08f119b39410246d35e57_prof);

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
