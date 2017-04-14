<?php

/* @SgDatatables/Filters/filter_select.html.twig */
class __TwigTemplate_bb928cf53cd0d51269b614c07709ec2245aab47f752ac5c9d0b729f9b1def8e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Filters:filter.html.twig", "@SgDatatables/Filters/filter_select.html.twig", 9);
        $this->blocks = array(
            'html' => array($this, 'block_html'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Filters:filter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_328011118c9d1322430d1723d05410a843c7810f005d96bb6744a48ca5fc3595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_328011118c9d1322430d1723d05410a843c7810f005d96bb6744a48ca5fc3595->enter($__internal_328011118c9d1322430d1723d05410a843c7810f005d96bb6744a48ca5fc3595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_select.html.twig"));

        $__internal_87600c6934424f3326aef3f577d98b6193b920c2b6c679a0f0082ae5320b5585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87600c6934424f3326aef3f577d98b6193b920c2b6c679a0f0082ae5320b5585->enter($__internal_87600c6934424f3326aef3f577d98b6193b920c2b6c679a0f0082ae5320b5585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_select.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_328011118c9d1322430d1723d05410a843c7810f005d96bb6744a48ca5fc3595->leave($__internal_328011118c9d1322430d1723d05410a843c7810f005d96bb6744a48ca5fc3595_prof);

        
        $__internal_87600c6934424f3326aef3f577d98b6193b920c2b6c679a0f0082ae5320b5585->leave($__internal_87600c6934424f3326aef3f577d98b6193b920c2b6c679a0f0082ae5320b5585_prof);

    }

    // line 11
    public function block_html($context, array $blocks = array())
    {
        $__internal_1d1164c881c5bba427aea493da26008a38b2ede6c0367cbde3104508b7125531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1164c881c5bba427aea493da26008a38b2ede6c0367cbde3104508b7125531->enter($__internal_1d1164c881c5bba427aea493da26008a38b2ede6c0367cbde3104508b7125531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_ff3b8db92eba38d529efd02be629c4f2449a718cbf858a020e6f6551ca4540cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3b8db92eba38d529efd02be629c4f2449a718cbf858a020e6f6551ca4540cd->enter($__internal_ff3b8db92eba38d529efd02be629c4f2449a718cbf858a020e6f6551ca4540cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        // line 12
        echo "    <select
        id=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
        echo "-sg-filter-";
        echo twig_escape_filter($this->env, (isset($context["selectorId"]) ? $context["selectorId"] : $this->getContext($context, "selectorId")), "html", null, true);
        echo "\"
        class=\"individual_filtering";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "class", array()), "html", null, true);
        }
        echo "\"
        style=\"";
        // line 15
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array())) {
            echo " width:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array()), "html", null, true);
            echo ";";
        }
        echo "\"
        ";
        // line 16
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array())) {
            echo "name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\"";
        }
        // line 17
        echo "        data-filter-property-id=\"";
        echo twig_escape_filter($this->env, (isset($context["filterColumnId"]) ? $context["filterColumnId"] : $this->getContext($context, "filterColumnId")), "html", null, true);
        echo "\"
        data-search-column=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "searchColumn", array()), "html", null, true);
        echo "\"
    >
        ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "searchColumn", array())) {
            // line 21
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "searchColumn", array()), "html", null, true);
            echo "\">
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "searchColumn", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("filter.default", array(), "messages"), "html", null, true);
            echo ")
            </option>
        ";
        }
        // line 25
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "selectOptions", array()));
        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
            // line 26
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </select>
    ";
        // line 29
        if ((true == $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "cancelButton", array()))) {
            // line 30
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["cancel_button_html"]) ? $context["cancel_button_html"] : $this->getContext($context, "cancel_button_html")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_ff3b8db92eba38d529efd02be629c4f2449a718cbf858a020e6f6551ca4540cd->leave($__internal_ff3b8db92eba38d529efd02be629c4f2449a718cbf858a020e6f6551ca4540cd_prof);

        
        $__internal_1d1164c881c5bba427aea493da26008a38b2ede6c0367cbde3104508b7125531->leave($__internal_1d1164c881c5bba427aea493da26008a38b2ede6c0367cbde3104508b7125531_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Filters/filter_select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 30,  123 => 29,  120 => 28,  109 => 26,  104 => 25,  96 => 22,  91 => 21,  89 => 20,  84 => 18,  79 => 17,  73 => 16,  65 => 15,  58 => 14,  52 => 13,  49 => 12,  40 => 11,  11 => 9,);
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

{% block html %}
    <select
        id=\"{{ tableId }}-sg-filter-{{ selectorId }}\"
        class=\"individual_filtering{% if column.filter.class %} {{ column.filter.class }}{% endif %}\"
        style=\"{% if column.width %} width:{{ column.width }};{% endif %}\"
        {% if column.name %}name=\"{{ column.name }}\"{% endif %}
        data-filter-property-id=\"{{ filterColumnId }}\"
        data-search-column=\"{{ column.filter.searchColumn }}\"
    >
        {% if column.filter.searchColumn %}
            <option value=\"{{ column.filter.searchColumn }}\">
                {{ column.filter.searchColumn }} ({{ 'filter.default'|trans({}, 'messages') }})
            </option>
        {% endif %}
        {% for key, name in column.filter.selectOptions %}
            <option value=\"{{ key }}\">{{ name }}</option>
        {% endfor %}
    </select>
    {% if true == column.filter.cancelButton %}
        {{ cancel_button_html }}
    {% endif %}
{% endblock %}
", "@SgDatatables/Filters/filter_select.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Filters\\filter_select.html.twig");
    }
}
