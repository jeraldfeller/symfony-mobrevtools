<?php

/* SgDatatablesBundle:Column:timeago.html.twig */
class __TwigTemplate_a00b788ac1f6ffea78b30eb9cee63529e0f817f7fd2786398898034e010c0aff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:timeago.html.twig", 9);
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
        $__internal_5107b6de21a0311f0d308d5f2d923004075dc083e97009c16a48e33533c0af6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5107b6de21a0311f0d308d5f2d923004075dc083e97009c16a48e33533c0af6d->enter($__internal_5107b6de21a0311f0d308d5f2d923004075dc083e97009c16a48e33533c0af6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $__internal_f7713c8f2bc76a803f6f0e74355874aaf9c1bf775d8a57e812aaa5dded736995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7713c8f2bc76a803f6f0e74355874aaf9c1bf775d8a57e812aaa5dded736995->enter($__internal_f7713c8f2bc76a803f6f0e74355874aaf9c1bf775d8a57e812aaa5dded736995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5107b6de21a0311f0d308d5f2d923004075dc083e97009c16a48e33533c0af6d->leave($__internal_5107b6de21a0311f0d308d5f2d923004075dc083e97009c16a48e33533c0af6d_prof);

        
        $__internal_f7713c8f2bc76a803f6f0e74355874aaf9c1bf775d8a57e812aaa5dded736995->leave($__internal_f7713c8f2bc76a803f6f0e74355874aaf9c1bf775d8a57e812aaa5dded736995_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_364bc94f94c5110ce66107ccdedd9bd5143c139c6ef08579feeed9f63468cd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364bc94f94c5110ce66107ccdedd9bd5143c139c6ef08579feeed9f63468cd8b->enter($__internal_364bc94f94c5110ce66107ccdedd9bd5143c139c6ef08579feeed9f63468cd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_25aea74871f5b0d6596eb4f500cf2949f5b82e7e5084931f74f78fd23b695b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25aea74871f5b0d6596eb4f500cf2949f5b82e7e5084931f74f78fd23b695b93->enter($__internal_25aea74871f5b0d6596eb4f500cf2949f5b82e7e5084931f74f78fd23b695b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_25aea74871f5b0d6596eb4f500cf2949f5b82e7e5084931f74f78fd23b695b93->leave($__internal_25aea74871f5b0d6596eb4f500cf2949f5b82e7e5084931f74f78fd23b695b93_prof);

        
        $__internal_364bc94f94c5110ce66107ccdedd9bd5143c139c6ef08579feeed9f63468cd8b->leave($__internal_364bc94f94c5110ce66107ccdedd9bd5143c139c6ef08579feeed9f63468cd8b_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:timeago.html.twig";
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
", "SgDatatablesBundle:Column:timeago.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/timeago.html.twig");
    }
}
