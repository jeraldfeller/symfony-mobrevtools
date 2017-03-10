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
        $__internal_4c0909600604adf31570c7244265da0c27bbcffd81d1ff0fe5918496e49d7e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c0909600604adf31570c7244265da0c27bbcffd81d1ff0fe5918496e49d7e62->enter($__internal_4c0909600604adf31570c7244265da0c27bbcffd81d1ff0fe5918496e49d7e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c19259537dcc51c3fee1ac01097a4813d26a058402193cec1968fb34043d88a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c19259537dcc51c3fee1ac01097a4813d26a058402193cec1968fb34043d88a3->enter($__internal_c19259537dcc51c3fee1ac01097a4813d26a058402193cec1968fb34043d88a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c0909600604adf31570c7244265da0c27bbcffd81d1ff0fe5918496e49d7e62->leave($__internal_4c0909600604adf31570c7244265da0c27bbcffd81d1ff0fe5918496e49d7e62_prof);

        
        $__internal_c19259537dcc51c3fee1ac01097a4813d26a058402193cec1968fb34043d88a3->leave($__internal_c19259537dcc51c3fee1ac01097a4813d26a058402193cec1968fb34043d88a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee45b2ee7782221a0631b8bbeb32dc115fb9a181b9ca8eb244531d56a296323e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee45b2ee7782221a0631b8bbeb32dc115fb9a181b9ca8eb244531d56a296323e->enter($__internal_ee45b2ee7782221a0631b8bbeb32dc115fb9a181b9ca8eb244531d56a296323e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f336b6732de3fa535bae09b4ecebfb16693834d10ef1149e1d8614461523f4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f336b6732de3fa535bae09b4ecebfb16693834d10ef1149e1d8614461523f4d2->enter($__internal_f336b6732de3fa535bae09b4ecebfb16693834d10ef1149e1d8614461523f4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f336b6732de3fa535bae09b4ecebfb16693834d10ef1149e1d8614461523f4d2->leave($__internal_f336b6732de3fa535bae09b4ecebfb16693834d10ef1149e1d8614461523f4d2_prof);

        
        $__internal_ee45b2ee7782221a0631b8bbeb32dc115fb9a181b9ca8eb244531d56a296323e->leave($__internal_ee45b2ee7782221a0631b8bbeb32dc115fb9a181b9ca8eb244531d56a296323e_prof);

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
