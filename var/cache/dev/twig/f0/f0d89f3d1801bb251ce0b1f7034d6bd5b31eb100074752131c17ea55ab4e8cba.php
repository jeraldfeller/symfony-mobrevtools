<?php

/* SgDatatablesBundle:Column:array.html.twig */
class __TwigTemplate_ac4f2984505110665aa982fcde9928b40ddb8a43608e266d64742261e6b714cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:array.html.twig", 9);
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
        $__internal_acd77eb0e5fc09e8db2d7428132a336cb941fe857658708fe0023ccfbc6c3af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd77eb0e5fc09e8db2d7428132a336cb941fe857658708fe0023ccfbc6c3af5->enter($__internal_acd77eb0e5fc09e8db2d7428132a336cb941fe857658708fe0023ccfbc6c3af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:array.html.twig"));

        $__internal_1f2463d886d66bfa8bc8fc11193c22536ef4b75ed9387fbcf683595ddee5a35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2463d886d66bfa8bc8fc11193c22536ef4b75ed9387fbcf683595ddee5a35f->enter($__internal_1f2463d886d66bfa8bc8fc11193c22536ef4b75ed9387fbcf683595ddee5a35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:array.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acd77eb0e5fc09e8db2d7428132a336cb941fe857658708fe0023ccfbc6c3af5->leave($__internal_acd77eb0e5fc09e8db2d7428132a336cb941fe857658708fe0023ccfbc6c3af5_prof);

        
        $__internal_1f2463d886d66bfa8bc8fc11193c22536ef4b75ed9387fbcf683595ddee5a35f->leave($__internal_1f2463d886d66bfa8bc8fc11193c22536ef4b75ed9387fbcf683595ddee5a35f_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_952e996e4166ce8443d507175305455ffc75389ef49ad6fdbf81b84b16ae4b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952e996e4166ce8443d507175305455ffc75389ef49ad6fdbf81b84b16ae4b43->enter($__internal_952e996e4166ce8443d507175305455ffc75389ef49ad6fdbf81b84b16ae4b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_52a57f4ed577f5714426f507f2193653c793ef9b348218c101b471e10f796c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a57f4ed577f5714426f507f2193653c793ef9b348218c101b471e10f796c07->enter($__internal_52a57f4ed577f5714426f507f2193653c793ef9b348218c101b471e10f796c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
                $this->loadTemplate("SgDatatablesBundle:Action:action.html.twig", "SgDatatablesBundle:Column:array.html.twig", 27)->display(array_merge($context, array("actions" => $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "countAction", array()))));
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
        
        $__internal_52a57f4ed577f5714426f507f2193653c793ef9b348218c101b471e10f796c07->leave($__internal_52a57f4ed577f5714426f507f2193653c793ef9b348218c101b471e10f796c07_prof);

        
        $__internal_952e996e4166ce8443d507175305455ffc75389ef49ad6fdbf81b84b16ae4b43->leave($__internal_952e996e4166ce8443d507175305455ffc75389ef49ad6fdbf81b84b16ae4b43_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:array.html.twig";
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
", "SgDatatablesBundle:Column:array.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/array.html.twig");
    }
}
