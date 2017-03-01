<?php

/* @SgDatatables/Column/array.html.twig */
class __TwigTemplate_b0dd2c2c52c53d7502e33e943f0cb2cef9c796a4c0dfd63fa2c6355823109099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "@SgDatatables/Column/array.html.twig", 9);
        $this->blocks = array(
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Column:column.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f1a1d609a66b805696180cb7d6256e272b34c593601b66b87c587ab6700cea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1a1d609a66b805696180cb7d6256e272b34c593601b66b87c587ab6700cea1->enter($__internal_5f1a1d609a66b805696180cb7d6256e272b34c593601b66b87c587ab6700cea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/array.html.twig"));

        $__internal_5af3e3bfe44e8f9f7ee000bcf6d0e8661384018e1a5b28515d39138849787f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af3e3bfe44e8f9f7ee000bcf6d0e8661384018e1a5b28515d39138849787f3a->enter($__internal_5af3e3bfe44e8f9f7ee000bcf6d0e8661384018e1a5b28515d39138849787f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/array.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f1a1d609a66b805696180cb7d6256e272b34c593601b66b87c587ab6700cea1->leave($__internal_5f1a1d609a66b805696180cb7d6256e272b34c593601b66b87c587ab6700cea1_prof);

        
        $__internal_5af3e3bfe44e8f9f7ee000bcf6d0e8661384018e1a5b28515d39138849787f3a->leave($__internal_5af3e3bfe44e8f9f7ee000bcf6d0e8661384018e1a5b28515d39138849787f3a_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_a7e25b89f3df40b8caa06a8fd627480c3d30424f54097d1b54fbea989f9c980e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e25b89f3df40b8caa06a8fd627480c3d30424f54097d1b54fbea989f9c980e->enter($__internal_a7e25b89f3df40b8caa06a8fd627480c3d30424f54097d1b54fbea989f9c980e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_7fbaa9e63205c38ed104ae8fe47fce19f275d29ce7e998c9d6f04543b1718735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbaa9e63205c38ed104ae8fe47fce19f275d29ce7e998c9d6f04543b1718735->enter($__internal_7fbaa9e63205c38ed104ae8fe47fce19f275d29ce7e998c9d6f04543b1718735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        // line 13
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "default", array()) && (null === $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array())))) {
            // line 14
            echo "        \"render\": function(data) {
            if (\"\" == data) {
                return \"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "default", array()), "html", null, true);
            echo "\";
            } else {
                return data;
            }
        },
    ";
        }
        // line 22
        echo "    ";
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "count", array()) && (null === $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array())))) {
            // line 23
            echo "        \"render\": function(data, type, row, meta) {
            var array = data.split(',');
            var count = (data == '') ? 0 : array.length;
            ";
            // line 26
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "countAction", array())) {
                // line 27
                echo "                ";
                $this->loadTemplate("SgDatatablesBundle:Action:action.html.twig", "@SgDatatables/Column/array.html.twig", 27)->display(array_merge($context, array("actions" => $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "countAction", array()))));
                // line 28
                echo "            ";
            } else {
                // line 29
                echo "                return count;
            ";
            }
            // line 31
            echo "        },
    ";
        }
        // line 33
        echo "    ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array())) {
            // line 34
            echo "        \"render\": function(data, type, row, meta) {
            return ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array()), "html", null, true);
            echo "(data, type, row, meta);
        },
    ";
        }
        
        $__internal_7fbaa9e63205c38ed104ae8fe47fce19f275d29ce7e998c9d6f04543b1718735->leave($__internal_7fbaa9e63205c38ed104ae8fe47fce19f275d29ce7e998c9d6f04543b1718735_prof);

        
        $__internal_a7e25b89f3df40b8caa06a8fd627480c3d30424f54097d1b54fbea989f9c980e->leave($__internal_a7e25b89f3df40b8caa06a8fd627480c3d30424f54097d1b54fbea989f9c980e_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Column/array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 35,  96 => 34,  93 => 33,  89 => 31,  85 => 29,  82 => 28,  79 => 27,  77 => 26,  72 => 23,  69 => 22,  60 => 16,  56 => 14,  54 => 13,  49 => 12,  40 => 11,  11 => 9,);
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
{% extends 'SgDatatablesBundle:Column:column.html.twig' %}

{% block data %}
    \"data\": \"{{ column.data }}\",
    {% if column.default and column.render is null %}
        \"render\": function(data) {
            if (\"\" == data) {
                return \"{{ column.default }}\";
            } else {
                return data;
            }
        },
    {% endif %}
    {% if column.count and column.render is null %}
        \"render\": function(data, type, row, meta) {
            var array = data.split(',');
            var count = (data == '') ? 0 : array.length;
            {% if (column.countAction) %}
                {% include 'SgDatatablesBundle:Action:action.html.twig' with { 'actions': column.countAction } %}
            {% else %}
                return count;
            {% endif %}
        },
    {% endif %}
    {% if column.render %}
        \"render\": function(data, type, row, meta) {
            return {{ column.render }}(data, type, row, meta);
        },
    {% endif %}
{% endblock %}
", "@SgDatatables/Column/array.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Column\\array.html.twig");
    }
}
