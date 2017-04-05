<?php

/* @SgDatatables/Filters/filter_slider.html.twig */
class __TwigTemplate_97c670915edc6c4e583c1ab268c364319a639e02260e80fac92bd886b511a8fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Filters:filter.html.twig", "@SgDatatables/Filters/filter_slider.html.twig", 9);
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
        $__internal_6d793dafd73535ea7d2bc3ebd1e3b401613a7881413d506d1770ba2a9caabe5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d793dafd73535ea7d2bc3ebd1e3b401613a7881413d506d1770ba2a9caabe5b->enter($__internal_6d793dafd73535ea7d2bc3ebd1e3b401613a7881413d506d1770ba2a9caabe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_slider.html.twig"));

        $__internal_671c9024dc2e62ab340168ca8330ec1606863ce30d925f11ce16fbc343e26908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671c9024dc2e62ab340168ca8330ec1606863ce30d925f11ce16fbc343e26908->enter($__internal_671c9024dc2e62ab340168ca8330ec1606863ce30d925f11ce16fbc343e26908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_slider.html.twig"));

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
        
        $__internal_6d793dafd73535ea7d2bc3ebd1e3b401613a7881413d506d1770ba2a9caabe5b->leave($__internal_6d793dafd73535ea7d2bc3ebd1e3b401613a7881413d506d1770ba2a9caabe5b_prof);

        
        $__internal_671c9024dc2e62ab340168ca8330ec1606863ce30d925f11ce16fbc343e26908->leave($__internal_671c9024dc2e62ab340168ca8330ec1606863ce30d925f11ce16fbc343e26908_prof);

    }

    // line 19
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_46485bbdab79bcba506e1a66ba4ce70d5eab0da843eb6f4c96fe4acc2991fb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46485bbdab79bcba506e1a66ba4ce70d5eab0da843eb6f4c96fe4acc2991fb6c->enter($__internal_46485bbdab79bcba506e1a66ba4ce70d5eab0da843eb6f4c96fe4acc2991fb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_b4efca18deb1db86d11e22d5872f7312778b8f54f9a1545328ff69b7994b6ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4efca18deb1db86d11e22d5872f7312778b8f54f9a1545328ff69b7994b6ab6->enter($__internal_b4efca18deb1db86d11e22d5872f7312778b8f54f9a1545328ff69b7994b6ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
            $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "formatter", array()), "@SgDatatables/Filters/filter_slider.html.twig", 36)->display($context);
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
        
        $__internal_b4efca18deb1db86d11e22d5872f7312778b8f54f9a1545328ff69b7994b6ab6->leave($__internal_b4efca18deb1db86d11e22d5872f7312778b8f54f9a1545328ff69b7994b6ab6_prof);

        
        $__internal_46485bbdab79bcba506e1a66ba4ce70d5eab0da843eb6f4c96fe4acc2991fb6c->leave($__internal_46485bbdab79bcba506e1a66ba4ce70d5eab0da843eb6f4c96fe4acc2991fb6c_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Filters/filter_slider.html.twig";
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
", "@SgDatatables/Filters/filter_slider.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Filters\\filter_slider.html.twig");
    }
}
