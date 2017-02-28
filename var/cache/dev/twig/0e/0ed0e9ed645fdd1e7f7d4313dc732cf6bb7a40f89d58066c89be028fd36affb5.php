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
        $__internal_0c8b2dd4f25f1a4a82e3a5f68db9e5d8871efb6ce083fc7217e51045584c73ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8b2dd4f25f1a4a82e3a5f68db9e5d8871efb6ce083fc7217e51045584c73ed->enter($__internal_0c8b2dd4f25f1a4a82e3a5f68db9e5d8871efb6ce083fc7217e51045584c73ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/array.html.twig"));

        $__internal_874056d2d359d8af23a9560953b65a38ae229a864b6efc74ffa9beb850cc3a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874056d2d359d8af23a9560953b65a38ae229a864b6efc74ffa9beb850cc3a67->enter($__internal_874056d2d359d8af23a9560953b65a38ae229a864b6efc74ffa9beb850cc3a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/array.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c8b2dd4f25f1a4a82e3a5f68db9e5d8871efb6ce083fc7217e51045584c73ed->leave($__internal_0c8b2dd4f25f1a4a82e3a5f68db9e5d8871efb6ce083fc7217e51045584c73ed_prof);

        
        $__internal_874056d2d359d8af23a9560953b65a38ae229a864b6efc74ffa9beb850cc3a67->leave($__internal_874056d2d359d8af23a9560953b65a38ae229a864b6efc74ffa9beb850cc3a67_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_d192f5a57b38da1e54f038d7e9772555a745f2153bd5a572eeaa2679110754bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d192f5a57b38da1e54f038d7e9772555a745f2153bd5a572eeaa2679110754bc->enter($__internal_d192f5a57b38da1e54f038d7e9772555a745f2153bd5a572eeaa2679110754bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_4e904f67c6d04ec372287b31dec00197768980d754cf5c602ab7f8cc7aa08506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e904f67c6d04ec372287b31dec00197768980d754cf5c602ab7f8cc7aa08506->enter($__internal_4e904f67c6d04ec372287b31dec00197768980d754cf5c602ab7f8cc7aa08506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_4e904f67c6d04ec372287b31dec00197768980d754cf5c602ab7f8cc7aa08506->leave($__internal_4e904f67c6d04ec372287b31dec00197768980d754cf5c602ab7f8cc7aa08506_prof);

        
        $__internal_d192f5a57b38da1e54f038d7e9772555a745f2153bd5a572eeaa2679110754bc->leave($__internal_d192f5a57b38da1e54f038d7e9772555a745f2153bd5a572eeaa2679110754bc_prof);

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
