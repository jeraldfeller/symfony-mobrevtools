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
        $__internal_d7dd81f5880af5de63b4f59f4192622b21bf15bd1a52118733c2a124b18a0ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7dd81f5880af5de63b4f59f4192622b21bf15bd1a52118733c2a124b18a0ce9->enter($__internal_d7dd81f5880af5de63b4f59f4192622b21bf15bd1a52118733c2a124b18a0ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $__internal_f65d4b477ca1d9cf6238413b97e0969e8ba865926c64a18e08ca8494397600d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65d4b477ca1d9cf6238413b97e0969e8ba865926c64a18e08ca8494397600d9->enter($__internal_f65d4b477ca1d9cf6238413b97e0969e8ba865926c64a18e08ca8494397600d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7dd81f5880af5de63b4f59f4192622b21bf15bd1a52118733c2a124b18a0ce9->leave($__internal_d7dd81f5880af5de63b4f59f4192622b21bf15bd1a52118733c2a124b18a0ce9_prof);

        
        $__internal_f65d4b477ca1d9cf6238413b97e0969e8ba865926c64a18e08ca8494397600d9->leave($__internal_f65d4b477ca1d9cf6238413b97e0969e8ba865926c64a18e08ca8494397600d9_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_4d78a5710251aa0fea6ddb62aa20b3be0e5a2838512820ee0abd645da87c9d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d78a5710251aa0fea6ddb62aa20b3be0e5a2838512820ee0abd645da87c9d74->enter($__internal_4d78a5710251aa0fea6ddb62aa20b3be0e5a2838512820ee0abd645da87c9d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_aae98cc7012876e264f7590a44d790c324daa0c94bac7afb31d3b0e1af549c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae98cc7012876e264f7590a44d790c324daa0c94bac7afb31d3b0e1af549c0c->enter($__internal_aae98cc7012876e264f7590a44d790c324daa0c94bac7afb31d3b0e1af549c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_aae98cc7012876e264f7590a44d790c324daa0c94bac7afb31d3b0e1af549c0c->leave($__internal_aae98cc7012876e264f7590a44d790c324daa0c94bac7afb31d3b0e1af549c0c_prof);

        
        $__internal_4d78a5710251aa0fea6ddb62aa20b3be0e5a2838512820ee0abd645da87c9d74->leave($__internal_4d78a5710251aa0fea6ddb62aa20b3be0e5a2838512820ee0abd645da87c9d74_prof);

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
