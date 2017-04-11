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
        $__internal_624d689945150e211b8030cedd924c8044bf4b12e3637313f8421f9095f07b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624d689945150e211b8030cedd924c8044bf4b12e3637313f8421f9095f07b6d->enter($__internal_624d689945150e211b8030cedd924c8044bf4b12e3637313f8421f9095f07b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $__internal_5f8e950fbdaee85a32eea727d00c246e6fdf7302657ebf359a5a293b9ee4feac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8e950fbdaee85a32eea727d00c246e6fdf7302657ebf359a5a293b9ee4feac->enter($__internal_5f8e950fbdaee85a32eea727d00c246e6fdf7302657ebf359a5a293b9ee4feac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_624d689945150e211b8030cedd924c8044bf4b12e3637313f8421f9095f07b6d->leave($__internal_624d689945150e211b8030cedd924c8044bf4b12e3637313f8421f9095f07b6d_prof);

        
        $__internal_5f8e950fbdaee85a32eea727d00c246e6fdf7302657ebf359a5a293b9ee4feac->leave($__internal_5f8e950fbdaee85a32eea727d00c246e6fdf7302657ebf359a5a293b9ee4feac_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_4ed2984713ea3e8919c8bf79c07959a9a044b6254f51e0fed745dd021997a7a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed2984713ea3e8919c8bf79c07959a9a044b6254f51e0fed745dd021997a7a5->enter($__internal_4ed2984713ea3e8919c8bf79c07959a9a044b6254f51e0fed745dd021997a7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_f50f3387e6e08915f9751f060941701f08d58de311af9536f036762fc81f3615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50f3387e6e08915f9751f060941701f08d58de311af9536f036762fc81f3615->enter($__internal_f50f3387e6e08915f9751f060941701f08d58de311af9536f036762fc81f3615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_f50f3387e6e08915f9751f060941701f08d58de311af9536f036762fc81f3615->leave($__internal_f50f3387e6e08915f9751f060941701f08d58de311af9536f036762fc81f3615_prof);

        
        $__internal_4ed2984713ea3e8919c8bf79c07959a9a044b6254f51e0fed745dd021997a7a5->leave($__internal_4ed2984713ea3e8919c8bf79c07959a9a044b6254f51e0fed745dd021997a7a5_prof);

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
