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
        $__internal_031738201b6d8a1ea8b2a4ece799268ce943db48ea73f09542bb8955601d4d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_031738201b6d8a1ea8b2a4ece799268ce943db48ea73f09542bb8955601d4d42->enter($__internal_031738201b6d8a1ea8b2a4ece799268ce943db48ea73f09542bb8955601d4d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $__internal_d99f0d6e7b23047dcb287df298e4c8ab858db412af9afd84cd99129577165929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99f0d6e7b23047dcb287df298e4c8ab858db412af9afd84cd99129577165929->enter($__internal_d99f0d6e7b23047dcb287df298e4c8ab858db412af9afd84cd99129577165929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_031738201b6d8a1ea8b2a4ece799268ce943db48ea73f09542bb8955601d4d42->leave($__internal_031738201b6d8a1ea8b2a4ece799268ce943db48ea73f09542bb8955601d4d42_prof);

        
        $__internal_d99f0d6e7b23047dcb287df298e4c8ab858db412af9afd84cd99129577165929->leave($__internal_d99f0d6e7b23047dcb287df298e4c8ab858db412af9afd84cd99129577165929_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_a475cc9ba8ccd9b8ffdd21320d8ee31afad9447b27829344defe221c322668dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a475cc9ba8ccd9b8ffdd21320d8ee31afad9447b27829344defe221c322668dc->enter($__internal_a475cc9ba8ccd9b8ffdd21320d8ee31afad9447b27829344defe221c322668dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_3c91ae08bda5b77c6558282dc89734b49444dbfa76bd5b4cc131aae9d72bf3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c91ae08bda5b77c6558282dc89734b49444dbfa76bd5b4cc131aae9d72bf3ec->enter($__internal_3c91ae08bda5b77c6558282dc89734b49444dbfa76bd5b4cc131aae9d72bf3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_3c91ae08bda5b77c6558282dc89734b49444dbfa76bd5b4cc131aae9d72bf3ec->leave($__internal_3c91ae08bda5b77c6558282dc89734b49444dbfa76bd5b4cc131aae9d72bf3ec_prof);

        
        $__internal_a475cc9ba8ccd9b8ffdd21320d8ee31afad9447b27829344defe221c322668dc->leave($__internal_a475cc9ba8ccd9b8ffdd21320d8ee31afad9447b27829344defe221c322668dc_prof);

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
