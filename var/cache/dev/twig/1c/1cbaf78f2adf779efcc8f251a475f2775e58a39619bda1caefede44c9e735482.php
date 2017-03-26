<?php

/* @SgDatatables/Column/datetime.html.twig */
class __TwigTemplate_31298484d88def4fe563110882836c80400c1825d67a1ae9586f05e9fea65c6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "@SgDatatables/Column/datetime.html.twig", 9);
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
        $__internal_3a9762d5458fbca6370e6702e8fb0cdbcacd1820d17b22a06caef15cecbd604d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9762d5458fbca6370e6702e8fb0cdbcacd1820d17b22a06caef15cecbd604d->enter($__internal_3a9762d5458fbca6370e6702e8fb0cdbcacd1820d17b22a06caef15cecbd604d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/datetime.html.twig"));

        $__internal_dd5c1d3f22dbfdb585eb326fc9580545a607d49376a94edc401eb20031a1aae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5c1d3f22dbfdb585eb326fc9580545a607d49376a94edc401eb20031a1aae7->enter($__internal_dd5c1d3f22dbfdb585eb326fc9580545a607d49376a94edc401eb20031a1aae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a9762d5458fbca6370e6702e8fb0cdbcacd1820d17b22a06caef15cecbd604d->leave($__internal_3a9762d5458fbca6370e6702e8fb0cdbcacd1820d17b22a06caef15cecbd604d_prof);

        
        $__internal_dd5c1d3f22dbfdb585eb326fc9580545a607d49376a94edc401eb20031a1aae7->leave($__internal_dd5c1d3f22dbfdb585eb326fc9580545a607d49376a94edc401eb20031a1aae7_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_7ca2450402d7d7ceb9d369d802b52c8b45de04bd86f56ac5fd2a9c610e5cbe55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca2450402d7d7ceb9d369d802b52c8b45de04bd86f56ac5fd2a9c610e5cbe55->enter($__internal_7ca2450402d7d7ceb9d369d802b52c8b45de04bd86f56ac5fd2a9c610e5cbe55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_beb30fb7968ddefbbd13197a0c337709609cbfae6e960c13510b718a6e53fd82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb30fb7968ddefbbd13197a0c337709609cbfae6e960c13510b718a6e53fd82->enter($__internal_beb30fb7968ddefbbd13197a0c337709609cbfae6e960c13510b718a6e53fd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        // line 13
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "editable", array())) {
            // line 14
            echo "        \"render\": function(data, type, row, meta) {
            return render_editable_datetime(data, type, row, meta, '";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "dateFormat", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "index", array()), "html", null, true);
            echo "');
        },
    ";
        } else {
            // line 18
            echo "        \"render\": function(data, type, row, meta) {
            return ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array()), "html", null, true);
            echo "(data, type, row, meta, '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "dateFormat", array()), "html", null, true);
            echo "');
        },
    ";
        }
        
        $__internal_beb30fb7968ddefbbd13197a0c337709609cbfae6e960c13510b718a6e53fd82->leave($__internal_beb30fb7968ddefbbd13197a0c337709609cbfae6e960c13510b718a6e53fd82_prof);

        
        $__internal_7ca2450402d7d7ceb9d369d802b52c8b45de04bd86f56ac5fd2a9c610e5cbe55->leave($__internal_7ca2450402d7d7ceb9d369d802b52c8b45de04bd86f56ac5fd2a9c610e5cbe55_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Column/datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  69 => 18,  59 => 15,  56 => 14,  54 => 13,  49 => 12,  40 => 11,  11 => 9,);
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
    {% if column.editable %}
        \"render\": function(data, type, row, meta) {
            return render_editable_datetime(data, type, row, meta, '{{ column.data }}', '{{ column.dateFormat }}', '{{ column.index }}');
        },
    {% else %}
        \"render\": function(data, type, row, meta) {
            return {{ column.render }}(data, type, row, meta, '{{ column.dateFormat }}');
        },
    {% endif %}
{% endblock %}
", "@SgDatatables/Column/datetime.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Column\\datetime.html.twig");
    }
}
