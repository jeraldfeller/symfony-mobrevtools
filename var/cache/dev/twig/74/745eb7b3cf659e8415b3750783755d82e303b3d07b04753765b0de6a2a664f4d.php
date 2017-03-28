<?php

/* @SgDatatables/Column/timeago.html.twig */
class __TwigTemplate_bf89322f0377173bb882342daa36a11b73b249bc49712d6b01d5cb21c972f82f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "@SgDatatables/Column/timeago.html.twig", 9);
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
        $__internal_9c551492c00c55bff428f46b2b70a5096085bd12b540c8cf3054e8db8f360f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c551492c00c55bff428f46b2b70a5096085bd12b540c8cf3054e8db8f360f02->enter($__internal_9c551492c00c55bff428f46b2b70a5096085bd12b540c8cf3054e8db8f360f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $__internal_9297e312fd1a2cc81f03e9d766a19f9d598141c328acc5ff8fcab9296127632c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9297e312fd1a2cc81f03e9d766a19f9d598141c328acc5ff8fcab9296127632c->enter($__internal_9297e312fd1a2cc81f03e9d766a19f9d598141c328acc5ff8fcab9296127632c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c551492c00c55bff428f46b2b70a5096085bd12b540c8cf3054e8db8f360f02->leave($__internal_9c551492c00c55bff428f46b2b70a5096085bd12b540c8cf3054e8db8f360f02_prof);

        
        $__internal_9297e312fd1a2cc81f03e9d766a19f9d598141c328acc5ff8fcab9296127632c->leave($__internal_9297e312fd1a2cc81f03e9d766a19f9d598141c328acc5ff8fcab9296127632c_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_20d2bb287b45352caee8f7dca5df79b6a9a2495b9770a22ef20ffada3d3033c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20d2bb287b45352caee8f7dca5df79b6a9a2495b9770a22ef20ffada3d3033c8->enter($__internal_20d2bb287b45352caee8f7dca5df79b6a9a2495b9770a22ef20ffada3d3033c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_3d4d71d56455174366c7eca4bdf7ddb9a642ca56edcd7402cdd3d5b1275ad26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4d71d56455174366c7eca4bdf7ddb9a642ca56edcd7402cdd3d5b1275ad26f->enter($__internal_3d4d71d56455174366c7eca4bdf7ddb9a642ca56edcd7402cdd3d5b1275ad26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    \"render\": function(data, type, row, meta) {
        return ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array()), "html", null, true);
        echo "(data, type, row, meta);
    },
";
        
        $__internal_3d4d71d56455174366c7eca4bdf7ddb9a642ca56edcd7402cdd3d5b1275ad26f->leave($__internal_3d4d71d56455174366c7eca4bdf7ddb9a642ca56edcd7402cdd3d5b1275ad26f_prof);

        
        $__internal_20d2bb287b45352caee8f7dca5df79b6a9a2495b9770a22ef20ffada3d3033c8->leave($__internal_20d2bb287b45352caee8f7dca5df79b6a9a2495b9770a22ef20ffada3d3033c8_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Column/timeago.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  49 => 12,  40 => 11,  11 => 9,);
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
    \"render\": function(data, type, row, meta) {
        return {{ column.render }}(data, type, row, meta);
    },
{% endblock %}
", "@SgDatatables/Column/timeago.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Column\\timeago.html.twig");
    }
}
