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
        $__internal_e45c5e05e1a6faf01b648d98a0bd3868780e19e7cd14b74a2bcddffd51333114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45c5e05e1a6faf01b648d98a0bd3868780e19e7cd14b74a2bcddffd51333114->enter($__internal_e45c5e05e1a6faf01b648d98a0bd3868780e19e7cd14b74a2bcddffd51333114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $__internal_0f2094cfd9a7c77da0d0422c58c49af279d307cb86c194de8be5bcb8b97cfa62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2094cfd9a7c77da0d0422c58c49af279d307cb86c194de8be5bcb8b97cfa62->enter($__internal_0f2094cfd9a7c77da0d0422c58c49af279d307cb86c194de8be5bcb8b97cfa62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e45c5e05e1a6faf01b648d98a0bd3868780e19e7cd14b74a2bcddffd51333114->leave($__internal_e45c5e05e1a6faf01b648d98a0bd3868780e19e7cd14b74a2bcddffd51333114_prof);

        
        $__internal_0f2094cfd9a7c77da0d0422c58c49af279d307cb86c194de8be5bcb8b97cfa62->leave($__internal_0f2094cfd9a7c77da0d0422c58c49af279d307cb86c194de8be5bcb8b97cfa62_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_2bae242a32b23c640182fe8600244f716a9b564defb472c346d1f10ad4ed3baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bae242a32b23c640182fe8600244f716a9b564defb472c346d1f10ad4ed3baa->enter($__internal_2bae242a32b23c640182fe8600244f716a9b564defb472c346d1f10ad4ed3baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_2a49378e37f446faf8a4325724c252ea89581ba14876c0d4c63b0b5d4d0f3dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a49378e37f446faf8a4325724c252ea89581ba14876c0d4c63b0b5d4d0f3dcf->enter($__internal_2a49378e37f446faf8a4325724c252ea89581ba14876c0d4c63b0b5d4d0f3dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_2a49378e37f446faf8a4325724c252ea89581ba14876c0d4c63b0b5d4d0f3dcf->leave($__internal_2a49378e37f446faf8a4325724c252ea89581ba14876c0d4c63b0b5d4d0f3dcf_prof);

        
        $__internal_2bae242a32b23c640182fe8600244f716a9b564defb472c346d1f10ad4ed3baa->leave($__internal_2bae242a32b23c640182fe8600244f716a9b564defb472c346d1f10ad4ed3baa_prof);

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
