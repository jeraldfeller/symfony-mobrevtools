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
        $__internal_f16afd7a1901d1c75578b3c71d0da9445916aef526edda455ca069a98749ef83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16afd7a1901d1c75578b3c71d0da9445916aef526edda455ca069a98749ef83->enter($__internal_f16afd7a1901d1c75578b3c71d0da9445916aef526edda455ca069a98749ef83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bd352cbe52494e2669097d2d034ffefb14f59bb97975837273c6d6dd5acd22be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd352cbe52494e2669097d2d034ffefb14f59bb97975837273c6d6dd5acd22be->enter($__internal_bd352cbe52494e2669097d2d034ffefb14f59bb97975837273c6d6dd5acd22be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f16afd7a1901d1c75578b3c71d0da9445916aef526edda455ca069a98749ef83->leave($__internal_f16afd7a1901d1c75578b3c71d0da9445916aef526edda455ca069a98749ef83_prof);

        
        $__internal_bd352cbe52494e2669097d2d034ffefb14f59bb97975837273c6d6dd5acd22be->leave($__internal_bd352cbe52494e2669097d2d034ffefb14f59bb97975837273c6d6dd5acd22be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd1f4a1204322a04a3748ee2e2ae274f631c6e7e07d14b6d75fa147bd466088d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1f4a1204322a04a3748ee2e2ae274f631c6e7e07d14b6d75fa147bd466088d->enter($__internal_cd1f4a1204322a04a3748ee2e2ae274f631c6e7e07d14b6d75fa147bd466088d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_01920097aaf9b49cf7b819d2817982711fcaaf08fbb25e69264c24c43c72b236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01920097aaf9b49cf7b819d2817982711fcaaf08fbb25e69264c24c43c72b236->enter($__internal_01920097aaf9b49cf7b819d2817982711fcaaf08fbb25e69264c24c43c72b236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_01920097aaf9b49cf7b819d2817982711fcaaf08fbb25e69264c24c43c72b236->leave($__internal_01920097aaf9b49cf7b819d2817982711fcaaf08fbb25e69264c24c43c72b236_prof);

        
        $__internal_cd1f4a1204322a04a3748ee2e2ae274f631c6e7e07d14b6d75fa147bd466088d->leave($__internal_cd1f4a1204322a04a3748ee2e2ae274f631c6e7e07d14b6d75fa147bd466088d_prof);

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
