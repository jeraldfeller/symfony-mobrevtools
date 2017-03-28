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
        $__internal_54734dca38589aac767944ff34b78f08c3765224fcb07bce8784e7220f577676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54734dca38589aac767944ff34b78f08c3765224fcb07bce8784e7220f577676->enter($__internal_54734dca38589aac767944ff34b78f08c3765224fcb07bce8784e7220f577676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $__internal_e0398fa8ab5d2e88e86be43cd7e50d4f5087990b34665be5c8954d8994d38676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0398fa8ab5d2e88e86be43cd7e50d4f5087990b34665be5c8954d8994d38676->enter($__internal_e0398fa8ab5d2e88e86be43cd7e50d4f5087990b34665be5c8954d8994d38676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54734dca38589aac767944ff34b78f08c3765224fcb07bce8784e7220f577676->leave($__internal_54734dca38589aac767944ff34b78f08c3765224fcb07bce8784e7220f577676_prof);

        
        $__internal_e0398fa8ab5d2e88e86be43cd7e50d4f5087990b34665be5c8954d8994d38676->leave($__internal_e0398fa8ab5d2e88e86be43cd7e50d4f5087990b34665be5c8954d8994d38676_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_0ee9884fc557eed481f88c7ea72a44b5cbb56bb46f83eeb0fbb9984b1cdf1da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee9884fc557eed481f88c7ea72a44b5cbb56bb46f83eeb0fbb9984b1cdf1da4->enter($__internal_0ee9884fc557eed481f88c7ea72a44b5cbb56bb46f83eeb0fbb9984b1cdf1da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_390b264de359ddb61c9ec06503a5a8de724d7eeaec287199e87599c85213ccd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390b264de359ddb61c9ec06503a5a8de724d7eeaec287199e87599c85213ccd4->enter($__internal_390b264de359ddb61c9ec06503a5a8de724d7eeaec287199e87599c85213ccd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_390b264de359ddb61c9ec06503a5a8de724d7eeaec287199e87599c85213ccd4->leave($__internal_390b264de359ddb61c9ec06503a5a8de724d7eeaec287199e87599c85213ccd4_prof);

        
        $__internal_0ee9884fc557eed481f88c7ea72a44b5cbb56bb46f83eeb0fbb9984b1cdf1da4->leave($__internal_0ee9884fc557eed481f88c7ea72a44b5cbb56bb46f83eeb0fbb9984b1cdf1da4_prof);

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
