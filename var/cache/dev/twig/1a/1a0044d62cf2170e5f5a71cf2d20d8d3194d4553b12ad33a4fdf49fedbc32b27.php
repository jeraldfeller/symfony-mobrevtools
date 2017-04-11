<?php

/* SgDatatablesBundle:Filters:filter_slider.html.twig */
class __TwigTemplate_28df409ff0a5d4af861da57b1f95f1cef0b148bbdb42c38fb9289675a2485efe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Filters:filter.html.twig", "SgDatatablesBundle:Filters:filter_slider.html.twig", 9);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Filters:filter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aafb44151c63677dc3617b496f1b38e61f8c597ccd3534588473dc2ae55ff860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aafb44151c63677dc3617b496f1b38e61f8c597ccd3534588473dc2ae55ff860->enter($__internal_aafb44151c63677dc3617b496f1b38e61f8c597ccd3534588473dc2ae55ff860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_slider.html.twig"));

        $__internal_35f9592d0e2d85400cc43be150c7b587309904cd168df48b59879263486f3add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f9592d0e2d85400cc43be150c7b587309904cd168df48b59879263486f3add->enter($__internal_35f9592d0e2d85400cc43be150c7b587309904cd168df48b59879263486f3add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_slider.html.twig"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (twig_test_iterable($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "value", array()))) {
            // line 13
            echo "        [";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "value", array()), ", "), "html", null, true);
            echo "]
    ";
        } else {
            // line 15
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "value", array()), "html", null, true);
            echo "
    ";
        }
        $context["filter_initial_value"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aafb44151c63677dc3617b496f1b38e61f8c597ccd3534588473dc2ae55ff860->leave($__internal_aafb44151c63677dc3617b496f1b38e61f8c597ccd3534588473dc2ae55ff860_prof);

        
        $__internal_35f9592d0e2d85400cc43be150c7b587309904cd168df48b59879263486f3add->leave($__internal_35f9592d0e2d85400cc43be150c7b587309904cd168df48b59879263486f3add_prof);

    }

    // line 19
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_267457914579bea32ce7f59e29a7d29331d2adda80f2127f2dc7a16fd91daba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267457914579bea32ce7f59e29a7d29331d2adda80f2127f2dc7a16fd91daba7->enter($__internal_267457914579bea32ce7f59e29a7d29331d2adda80f2127f2dc7a16fd91daba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_b2f7c96fb47dee234d6c7abdaaf326d3a1010e8942be2f941b6f6c172f1cbe9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f7c96fb47dee234d6c7abdaaf326d3a1010e8942be2f941b6f6c172f1cbe9c->enter($__internal_b2f7c96fb47dee234d6c7abdaaf326d3a1010e8942be2f941b6f6c172f1cbe9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 20
        echo "    <script type=\"text/javascript\">
        var sliderField = \$(\"#";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
        echo "-sg-filter-";
        echo twig_escape_filter($this->env, (isset($context["selectorId"]) ? $context["selectorId"] : $this->getContext($context, "selectorId")), "html", null, true);
        echo "\").slider({
            min: ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "min", array()), "html", null, true);
        echo ",
            max: ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "max", array()), "html", null, true);
        echo ",
            step: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "step", array()), "html", null, true);
        echo ",
            precision: ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "precision", array()), "html", null, true);
        echo ",
            orientation: \"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "orientation", array()), "html", null, true);
        echo "\",
            value: ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["filter_initial_value"]) ? $context["filter_initial_value"] : $this->getContext($context, "filter_initial_value")), "html", null, true);
        echo ",
            range: ";
        // line 28
        echo (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "range", array())) ? ("true") : ("false"));
        echo ",
            selection: \"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "selection", array()), "html", null, true);
        echo "\",
            tooltip: \"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "tooltip", array()), "html", null, true);
        echo "\",
            tooltip_split: ";
        // line 31
        echo (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "tooltipSplit", array())) ? ("true") : ("false"));
        echo ",
            handle: \"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "handle", array()), "html", null, true);
        echo "\",
            reversed: ";
        // line 33
        echo (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "reversed", array())) ? ("true") : ("false"));
        echo ",
            enabled: ";
        // line 34
        echo (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "enabled", array())) ? ("true") : ("false"));
        echo ",
            ";
        // line 35
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "formatter", array())) {
            // line 36
            echo "            formatter: ";
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "formatter", array()), "SgDatatablesBundle:Filters:filter_slider.html.twig", 36)->display($context);
            echo ",
            ";
        }
        // line 38
        echo "            natural_arrow_keys: ";
        echo (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "naturalArrowKeys", array())) ? ("true") : ("false"));
        echo ",
            ticks: [";
        // line 39
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "ticks", array()), ", "), "html", null, true);
        echo "],
            ticks_positions: [";
        // line 40
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "ticksPositions", array()), ", "), "html", null, true);
        echo "],
            ticks_labels: [\"";
        // line 41
        echo twig_join_filter($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "tickslabels", array()), "\",\"");
        echo "\"],
            ticks_snap_bounds: ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "ticksSnapBounds", array()), "html", null, true);
        echo ",
            scale: \"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "scale", array()), "html", null, true);
        echo "\",
            focus: ";
        // line 44
        echo (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "focus", array())) ? ("true") : ("false"));
        echo ",
            tooltip_position: \"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "tooltipPosition", array()), "html", null, true);
        echo "\",
            labelledby: \"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "labelledby", array()), "html", null, true);
        echo "\"
        });
        \$(\"#";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
        echo "-sg-filter-cancel-button-";
        echo twig_escape_filter($this->env, (isset($context["selectorId"]) ? $context["selectorId"] : $this->getContext($context, "selectorId")), "html", null, true);
        echo "\").click(function() {
            \$(\"#";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
        echo "-sg-filter-";
        echo twig_escape_filter($this->env, (isset($context["selectorId"]) ? $context["selectorId"] : $this->getContext($context, "selectorId")), "html", null, true);
        echo "\")
                .val('')
                .change();
        });
    </script>
";
        
        $__internal_b2f7c96fb47dee234d6c7abdaaf326d3a1010e8942be2f941b6f6c172f1cbe9c->leave($__internal_b2f7c96fb47dee234d6c7abdaaf326d3a1010e8942be2f941b6f6c172f1cbe9c_prof);

        
        $__internal_267457914579bea32ce7f59e29a7d29331d2adda80f2127f2dc7a16fd91daba7->leave($__internal_267457914579bea32ce7f59e29a7d29331d2adda80f2127f2dc7a16fd91daba7_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Filters:filter_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 49,  175 => 48,  170 => 46,  166 => 45,  162 => 44,  158 => 43,  154 => 42,  150 => 41,  146 => 40,  142 => 39,  137 => 38,  131 => 36,  129 => 35,  125 => 34,  121 => 33,  117 => 32,  113 => 31,  109 => 30,  105 => 29,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  71 => 21,  68 => 20,  59 => 19,  49 => 9,  42 => 15,  36 => 13,  33 => 12,  31 => 11,  11 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
{% extends 'SgDatatablesBundle:Filters:filter.html.twig' %}

{% set filter_initial_value %}
    {% if column.filter.value is iterable %}
        [{{ column.filter.value|join(', ') }}]
    {% else %}
        {{ column.filter.value }}
    {% endif %}
{% endset %}

{% block javascript %}
    <script type=\"text/javascript\">
        var sliderField = \$(\"#{{ tableId }}-sg-filter-{{ selectorId }}\").slider({
            min: {{ column.filter.min }},
            max: {{ column.filter.max }},
            step: {{ column.filter.step }},
            precision: {{ column.filter.precision }},
            orientation: \"{{ column.filter.orientation }}\",
            value: {{ filter_initial_value }},
            range: {{ column.filter.range ? 'true' : 'false' }},
            selection: \"{{ column.filter.selection }}\",
            tooltip: \"{{ column.filter.tooltip }}\",
            tooltip_split: {{ column.filter.tooltipSplit ? 'true' : 'false' }},
            handle: \"{{ column.filter.handle }}\",
            reversed: {{ column.filter.reversed ? 'true' : 'false' }},
            enabled: {{ column.filter.enabled ? 'true' : 'false' }},
            {% if (column.filter.formatter) %}
            formatter: {% include column.filter.formatter %},
            {% endif %}
            natural_arrow_keys: {{ column.filter.naturalArrowKeys ? 'true' : 'false' }},
            ticks: [{{ column.filter.ticks|join(', ') }}],
            ticks_positions: [{{ column.filter.ticksPositions|join(', ') }}],
            ticks_labels: [\"{{ column.filter.tickslabels|join('\",\"')|raw }}\"],
            ticks_snap_bounds: {{ column.filter.ticksSnapBounds }},
            scale: \"{{ column.filter.scale }}\",
            focus: {{ column.filter.focus ? 'true' : 'false' }},
            tooltip_position: \"{{ column.filter.tooltipPosition }}\",
            labelledby: \"{{ column.filter.labelledby }}\"
        });
        \$(\"#{{ tableId }}-sg-filter-cancel-button-{{ selectorId }}\").click(function() {
            \$(\"#{{ tableId }}-sg-filter-{{ selectorId }}\")
                .val('')
                .change();
        });
    </script>
{% endblock %}
", "SgDatatablesBundle:Filters:filter_slider.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Filters/filter_slider.html.twig");
    }
}
