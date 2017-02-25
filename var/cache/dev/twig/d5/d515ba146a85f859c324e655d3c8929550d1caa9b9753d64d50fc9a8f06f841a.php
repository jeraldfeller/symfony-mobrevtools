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
        $__internal_6861412e079e33c29b518a7c74f95be0bd09b88beed0e6b7bd50072b2b1efd76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6861412e079e33c29b518a7c74f95be0bd09b88beed0e6b7bd50072b2b1efd76->enter($__internal_6861412e079e33c29b518a7c74f95be0bd09b88beed0e6b7bd50072b2b1efd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $__internal_45448d337a68b4b18476bd475198c9ae4812f9d239fe96f23dd8c83f973a093f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45448d337a68b4b18476bd475198c9ae4812f9d239fe96f23dd8c83f973a093f->enter($__internal_45448d337a68b4b18476bd475198c9ae4812f9d239fe96f23dd8c83f973a093f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6861412e079e33c29b518a7c74f95be0bd09b88beed0e6b7bd50072b2b1efd76->leave($__internal_6861412e079e33c29b518a7c74f95be0bd09b88beed0e6b7bd50072b2b1efd76_prof);

        
        $__internal_45448d337a68b4b18476bd475198c9ae4812f9d239fe96f23dd8c83f973a093f->leave($__internal_45448d337a68b4b18476bd475198c9ae4812f9d239fe96f23dd8c83f973a093f_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_de3eb64de5edfc7b99c5f5e6141918fc39a406ba1a69629115cfb2ef41e77058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3eb64de5edfc7b99c5f5e6141918fc39a406ba1a69629115cfb2ef41e77058->enter($__internal_de3eb64de5edfc7b99c5f5e6141918fc39a406ba1a69629115cfb2ef41e77058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_4bfefea5c74148489d735d1312a33ef98af0ed6f195e4649ae70a5e52e949933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfefea5c74148489d735d1312a33ef98af0ed6f195e4649ae70a5e52e949933->enter($__internal_4bfefea5c74148489d735d1312a33ef98af0ed6f195e4649ae70a5e52e949933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_4bfefea5c74148489d735d1312a33ef98af0ed6f195e4649ae70a5e52e949933->leave($__internal_4bfefea5c74148489d735d1312a33ef98af0ed6f195e4649ae70a5e52e949933_prof);

        
        $__internal_de3eb64de5edfc7b99c5f5e6141918fc39a406ba1a69629115cfb2ef41e77058->leave($__internal_de3eb64de5edfc7b99c5f5e6141918fc39a406ba1a69629115cfb2ef41e77058_prof);

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
