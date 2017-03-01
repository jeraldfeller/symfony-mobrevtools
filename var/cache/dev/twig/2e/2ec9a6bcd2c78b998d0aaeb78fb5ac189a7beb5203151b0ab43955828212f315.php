<?php

/* @SgDatatables/Datatable/after_events.js.twig */
class __TwigTemplate_8b49eb58a3ff5c34dd3134686ab761d4f2d21e4c49029d42f98bc60f8234296c extends Twig_Template
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
        $__internal_3cce623cf5135d0c5913376c7dc7904f0b9696ce7c3ae768bddcbbba46144689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cce623cf5135d0c5913376c7dc7904f0b9696ce7c3ae768bddcbbba46144689->enter($__internal_3cce623cf5135d0c5913376c7dc7904f0b9696ce7c3ae768bddcbbba46144689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/after_events.js.twig"));

        $__internal_5064d43869739e183f14ce4762b6e0d343254a2401fccf05aca1c4e4d95a3f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5064d43869739e183f14ce4762b6e0d343254a2401fccf05aca1c4e4d95a3f56->enter($__internal_5064d43869739e183f14ce4762b6e0d343254a2401fccf05aca1c4e4d95a3f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/after_events.js.twig"));

        // line 1
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "columnSizing", array())) {
            // line 2
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "columnSizing", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 3
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "columnSizing", array()), "vars", array(), "array");
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
            echo "    .on('column-sizing.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "columnSizing", array()), "template", array(), "array"), "@SgDatatables/Datatable/after_events.js.twig", 7)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 9
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "columnVisibility", array())) {
            // line 10
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "columnVisibility", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 11
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "columnVisibility", array()), "vars", array(), "array");
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
            echo "    .on('column-visibility.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "columnVisibility", array()), "template", array(), "array"), "@SgDatatables/Datatable/after_events.js.twig", 15)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 17
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "destroy", array())) {
            // line 18
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "destroy", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 19
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "destroy", array()), "vars", array(), "array");
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
            echo "    .on('destroy.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "destroy", array()), "template", array(), "array"), "@SgDatatables/Datatable/after_events.js.twig", 23)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 25
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "length", array())) {
            // line 26
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "length", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 27
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "length", array()), "vars", array(), "array");
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
            echo "    .on('length.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "length", array()), "template", array(), "array"), "@SgDatatables/Datatable/after_events.js.twig", 31)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 33
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "order", array())) {
            // line 34
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "order", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 35
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "order", array()), "vars", array(), "array");
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
            echo "    .on('order.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "order", array()), "template", array(), "array"), "@SgDatatables/Datatable/after_events.js.twig", 39)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 41
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "page", array())) {
            // line 42
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "page", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 43
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "page", array()), "vars", array(), "array");
                // line 44
                echo "    ";
            } else {
                // line 45
                echo "        ";
                $context["vars"] = array();
                // line 46
                echo "    ";
            }
            // line 47
            echo "    .on('page.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "page", array()), "template", array(), "array"), "@SgDatatables/Datatable/after_events.js.twig", 47)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 49
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "search", array())) {
            // line 50
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "search", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 51
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "search", array()), "vars", array(), "array");
                // line 52
                echo "    ";
            } else {
                // line 53
                echo "        ";
                $context["vars"] = array();
                // line 54
                echo "    ";
            }
            // line 55
            echo "    .on('search.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "search", array()), "template", array(), "array"), "@SgDatatables/Datatable/after_events.js.twig", 55)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 57
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateLoaded", array())) {
            // line 58
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "stateLoaded", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 59
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateLoaded", array()), "vars", array(), "array");
                // line 60
                echo "    ";
            } else {
                // line 61
                echo "        ";
                $context["vars"] = array();
                // line 62
                echo "    ";
            }
            // line 63
            echo "    .on('stateLoaded.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateLoaded", array()), "template", array(), "array"), "@SgDatatables/Datatable/after_events.js.twig", 63)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 65
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateLoadParams", array())) {
            // line 66
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "stateLoadParams", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 67
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateLoadParams", array()), "vars", array(), "array");
                // line 68
                echo "    ";
            } else {
                // line 69
                echo "        ";
                $context["vars"] = array();
                // line 70
                echo "    ";
            }
            // line 71
            echo "    .on('stateLoadParams.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateLoadParams", array()), "template", array(), "array"), "@SgDatatables/Datatable/after_events.js.twig", 71)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        // line 73
        if ($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateSaveParams", array())) {
            // line 74
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : null), "stateSaveParams", array(), "any", false, true), "vars", array(), "array", true, true)) {
                // line 75
                echo "        ";
                $context["vars"] = $this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateSaveParams", array()), "vars", array(), "array");
                // line 76
                echo "    ";
            } else {
                // line 77
                echo "        ";
                $context["vars"] = array();
                // line 78
                echo "    ";
            }
            // line 79
            echo "    .on('stateSaveParams.dt', ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["view_events"]) ? $context["view_events"] : $this->getContext($context, "view_events")), "stateSaveParams", array()), "template", array(), "array"), "@SgDatatables/Datatable/after_events.js.twig", 79)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars"))));
            echo ")
";
        }
        
        $__internal_3cce623cf5135d0c5913376c7dc7904f0b9696ce7c3ae768bddcbbba46144689->leave($__internal_3cce623cf5135d0c5913376c7dc7904f0b9696ce7c3ae768bddcbbba46144689_prof);

        
        $__internal_5064d43869739e183f14ce4762b6e0d343254a2401fccf05aca1c4e4d95a3f56->leave($__internal_5064d43869739e183f14ce4762b6e0d343254a2401fccf05aca1c4e4d95a3f56_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Datatable/after_events.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 79,  246 => 78,  243 => 77,  240 => 76,  237 => 75,  234 => 74,  232 => 73,  226 => 71,  223 => 70,  220 => 69,  217 => 68,  214 => 67,  211 => 66,  209 => 65,  203 => 63,  200 => 62,  197 => 61,  194 => 60,  191 => 59,  188 => 58,  186 => 57,  180 => 55,  177 => 54,  174 => 53,  171 => 52,  168 => 51,  165 => 50,  163 => 49,  157 => 47,  154 => 46,  151 => 45,  148 => 44,  145 => 43,  142 => 42,  140 => 41,  134 => 39,  131 => 38,  128 => 37,  125 => 36,  122 => 35,  119 => 34,  117 => 33,  111 => 31,  108 => 30,  105 => 29,  102 => 28,  99 => 27,  96 => 26,  94 => 25,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  71 => 17,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  48 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if (view_events.columnSizing) %}
    {% if (view_events.columnSizing['vars'] is defined) %}
        {% set vars = view_events.columnSizing['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('column-sizing.dt', {% include view_events.columnSizing['template'] with vars %})
{% endif %}
{% if (view_events.columnVisibility) %}
    {% if (view_events.columnVisibility['vars'] is defined) %}
        {% set vars = view_events.columnVisibility['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('column-visibility.dt', {% include view_events.columnVisibility['template'] with vars %})
{% endif %}
{% if (view_events.destroy) %}
    {% if (view_events.destroy['vars'] is defined) %}
        {% set vars = view_events.destroy['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('destroy.dt', {% include view_events.destroy['template'] with vars %})
{% endif %}
{% if (view_events.length) %}
    {% if (view_events.length['vars'] is defined) %}
        {% set vars = view_events.length['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('length.dt', {% include view_events.length['template'] with vars %})
{% endif %}
{% if (view_events.order) %}
    {% if (view_events.order['vars'] is defined) %}
        {% set vars = view_events.order['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('order.dt', {% include view_events.order['template'] with vars %})
{% endif %}
{% if (view_events.page) %}
    {% if (view_events.page['vars'] is defined) %}
        {% set vars = view_events.page['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('page.dt', {% include view_events.page['template'] with vars %})
{% endif %}
{% if (view_events.search) %}
    {% if (view_events.search['vars'] is defined) %}
        {% set vars = view_events.search['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('search.dt', {% include view_events.search['template'] with vars %})
{% endif %}
{% if (view_events.stateLoaded) %}
    {% if (view_events.stateLoaded['vars'] is defined) %}
        {% set vars = view_events.stateLoaded['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('stateLoaded.dt', {% include view_events.stateLoaded['template'] with vars %})
{% endif %}
{% if (view_events.stateLoadParams) %}
    {% if (view_events.stateLoadParams['vars'] is defined) %}
        {% set vars = view_events.stateLoadParams['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('stateLoadParams.dt', {% include view_events.stateLoadParams['template'] with vars %})
{% endif %}
{% if (view_events.stateSaveParams) %}
    {% if (view_events.stateSaveParams['vars'] is defined) %}
        {% set vars = view_events.stateSaveParams['vars'] %}
    {% else %}
        {% set vars = {} %}
    {% endif %}
    .on('stateSaveParams.dt', {% include view_events.stateSaveParams['template'] with vars %})
{% endif %}
", "@SgDatatables/Datatable/after_events.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Datatable\\after_events.js.twig");
    }
}
