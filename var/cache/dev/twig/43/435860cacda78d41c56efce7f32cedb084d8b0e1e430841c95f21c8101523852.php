<?php

/* SgDatatablesBundle:Datatable:before_events.js.twig */
class __TwigTemplate_35a8dcf3f6282eeb79216ea8699514f29b47ed35d8369fe9b4f8ed8abef0a8b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c970f3314fd2467708c6ae8703688e2f466185f1499e494d133077114bfa23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c970f3314fd2467708c6ae8703688e2f466185f1499e494d133077114bfa23e->enter($__internal_8c970f3314fd2467708c6ae8703688e2f466185f1499e494d133077114bfa23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:before_events.js.twig"));

        $__internal_0187c2e86a6463c8d96fb2e38bc57ec15be869631e26237e8d8b0154f2c3781d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0187c2e86a6463c8d96fb2e38bc57ec15be869631e26237e8d8b0154f2c3781d->enter($__internal_0187c2e86a6463c8d96fb2e38bc57ec15be869631e26237e8d8b0154f2c3781d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:before_events.js.twig"));

        // line 1
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "processing", array())) {
            // line 2
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "processing", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 3
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "processing", array()), "vars", array(), "array");
                // line 4
                echo "    ";
            } else {
                // line 5
                echo "        ";
                $context["vars"] = array();
                // line 6
                echo "    ";
            }
            // line 7
            echo "    .on('processing.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "processing", array()), "template", array(), "array"), "SgDatatablesBundle:Datatable:before_events.js.twig", 7)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 9
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "error", array())) {
            // line 10
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "error", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 11
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "error", array()), "vars", array(), "array");
                // line 12
                echo "    ";
            } else {
                // line 13
                echo "        ";
                $context["vars"] = array();
                // line 14
                echo "    ";
            }
            // line 15
            echo "    .on('error.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "error", array()), "template", array(), "array"), "SgDatatablesBundle:Datatable:before_events.js.twig", 15)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 17
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "preInit", array())) {
            // line 18
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "preInit", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 19
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "preInit", array()), "vars", array(), "array");
                // line 20
                echo "    ";
            } else {
                // line 21
                echo "        ";
                $context["vars"] = array();
                // line 22
                echo "    ";
            }
            // line 23
            echo "    .on('preInit.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "preInit", array()), "template", array(), "array"), "SgDatatablesBundle:Datatable:before_events.js.twig", 23)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 25
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "preXhr", array())) {
            // line 26
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "preXhr", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 27
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "preXhr", array()), "vars", array(), "array");
                // line 28
                echo "    ";
            } else {
                // line 29
                echo "        ";
                $context["vars"] = array();
                // line 30
                echo "    ";
            }
            // line 31
            echo "    .on('preXhr.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "preXhr", array()), "template", array(), "array"), "SgDatatablesBundle:Datatable:before_events.js.twig", 31)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 33
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "xhr", array())) {
            // line 34
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "xhr", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 35
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "xhr", array()), "vars", array(), "array");
                // line 36
                echo "    ";
            } else {
                // line 37
                echo "        ";
                $context["vars"] = array();
                // line 38
                echo "    ";
            }
            // line 39
            echo "    .on('xhr.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "xhr", array()), "template", array(), "array"), "SgDatatablesBundle:Datatable:before_events.js.twig", 39)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        
        $__internal_8c970f3314fd2467708c6ae8703688e2f466185f1499e494d133077114bfa23e->leave($__internal_8c970f3314fd2467708c6ae8703688e2f466185f1499e494d133077114bfa23e_prof);

        
        $__internal_0187c2e86a6463c8d96fb2e38bc57ec15be869631e26237e8d8b0154f2c3781d->leave($__internal_0187c2e86a6463c8d96fb2e38bc57ec15be869631e26237e8d8b0154f2c3781d_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:before_events.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 39,  131 => 38,  128 => 37,  125 => 36,  122 => 35,  119 => 34,  117 => 33,  111 => 31,  108 => 30,  105 => 29,  102 => 28,  99 => 27,  96 => 26,  94 => 25,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  71 => 17,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  48 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if (view_events.processing) %}
    {% if (view_events.processing['vars'] is defined) %}
        {% set vars = view_events.processing['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('processing.dt', {% include view_events.processing['template'] with vars %})
{% endif %}
{% if (view_events.error) %}
    {% if (view_events.error['vars'] is defined) %}
        {% set vars = view_events.error['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('error.dt', {% include view_events.error['template'] with vars %})
{% endif %}
{% if (view_events.preInit) %}
    {% if (view_events.preInit['vars'] is defined) %}
        {% set vars = view_events.preInit['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('preInit.dt', {% include view_events.preInit['template'] with vars %})
{% endif %}
{% if (view_events.preXhr) %}
    {% if (view_events.preXhr['vars'] is defined) %}
        {% set vars = view_events.preXhr['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('preXhr.dt', {% include view_events.preXhr['template'] with vars %})
{% endif %}
{% if (view_events.xhr) %}
    {% if (view_events.xhr['vars'] is defined) %}
        {% set vars = view_events.xhr['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('xhr.dt', {% include view_events.xhr['template'] with vars %})
{% endif %}
", "SgDatatablesBundle:Datatable:before_events.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Datatable/before_events.js.twig");
    }
}
