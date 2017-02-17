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
        $__internal_3853afe3cb42a0fdb45e6026472c3ce2ae34b0e4c4a113912494e4a8d00a4b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3853afe3cb42a0fdb45e6026472c3ce2ae34b0e4c4a113912494e4a8d00a4b45->enter($__internal_3853afe3cb42a0fdb45e6026472c3ce2ae34b0e4c4a113912494e4a8d00a4b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $__internal_9c5d253ff178f16968d59f50f1ca12b14bd5ffe20b07cde52e5aaaab60edef05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5d253ff178f16968d59f50f1ca12b14bd5ffe20b07cde52e5aaaab60edef05->enter($__internal_9c5d253ff178f16968d59f50f1ca12b14bd5ffe20b07cde52e5aaaab60edef05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3853afe3cb42a0fdb45e6026472c3ce2ae34b0e4c4a113912494e4a8d00a4b45->leave($__internal_3853afe3cb42a0fdb45e6026472c3ce2ae34b0e4c4a113912494e4a8d00a4b45_prof);

        
        $__internal_9c5d253ff178f16968d59f50f1ca12b14bd5ffe20b07cde52e5aaaab60edef05->leave($__internal_9c5d253ff178f16968d59f50f1ca12b14bd5ffe20b07cde52e5aaaab60edef05_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_3fa9112903c574e05e215b339e0e4bcdfa874cb8f5bb8e56c42792dc4266d4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa9112903c574e05e215b339e0e4bcdfa874cb8f5bb8e56c42792dc4266d4a1->enter($__internal_3fa9112903c574e05e215b339e0e4bcdfa874cb8f5bb8e56c42792dc4266d4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_2fccaf8c5801c4ebdb4ef3d2b36e9e97587113c383ba32e82695994c8693236a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fccaf8c5801c4ebdb4ef3d2b36e9e97587113c383ba32e82695994c8693236a->enter($__internal_2fccaf8c5801c4ebdb4ef3d2b36e9e97587113c383ba32e82695994c8693236a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_2fccaf8c5801c4ebdb4ef3d2b36e9e97587113c383ba32e82695994c8693236a->leave($__internal_2fccaf8c5801c4ebdb4ef3d2b36e9e97587113c383ba32e82695994c8693236a_prof);

        
        $__internal_3fa9112903c574e05e215b339e0e4bcdfa874cb8f5bb8e56c42792dc4266d4a1->leave($__internal_3fa9112903c574e05e215b339e0e4bcdfa874cb8f5bb8e56c42792dc4266d4a1_prof);

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
