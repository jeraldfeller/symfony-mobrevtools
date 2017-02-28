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
        $__internal_7e5703078e1a2a370601ad4f4f39b756bae9efc44c31ac9573c4b857ab69a991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5703078e1a2a370601ad4f4f39b756bae9efc44c31ac9573c4b857ab69a991->enter($__internal_7e5703078e1a2a370601ad4f4f39b756bae9efc44c31ac9573c4b857ab69a991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $__internal_7b81a7b5bbb5b32e4885447e6984f954c6b24339745617ef9989538fdc8aeef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b81a7b5bbb5b32e4885447e6984f954c6b24339745617ef9989538fdc8aeef6->enter($__internal_7b81a7b5bbb5b32e4885447e6984f954c6b24339745617ef9989538fdc8aeef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e5703078e1a2a370601ad4f4f39b756bae9efc44c31ac9573c4b857ab69a991->leave($__internal_7e5703078e1a2a370601ad4f4f39b756bae9efc44c31ac9573c4b857ab69a991_prof);

        
        $__internal_7b81a7b5bbb5b32e4885447e6984f954c6b24339745617ef9989538fdc8aeef6->leave($__internal_7b81a7b5bbb5b32e4885447e6984f954c6b24339745617ef9989538fdc8aeef6_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_e2e95e5c81b582ed6895ccfce45afefdeb08cee31b0917bb383adc29f9265f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e95e5c81b582ed6895ccfce45afefdeb08cee31b0917bb383adc29f9265f36->enter($__internal_e2e95e5c81b582ed6895ccfce45afefdeb08cee31b0917bb383adc29f9265f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_d92ca99ac9dc83c580c5ed3ce41907a9ab34d8d973b5336258bf7a7427676ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92ca99ac9dc83c580c5ed3ce41907a9ab34d8d973b5336258bf7a7427676ff9->enter($__internal_d92ca99ac9dc83c580c5ed3ce41907a9ab34d8d973b5336258bf7a7427676ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_d92ca99ac9dc83c580c5ed3ce41907a9ab34d8d973b5336258bf7a7427676ff9->leave($__internal_d92ca99ac9dc83c580c5ed3ce41907a9ab34d8d973b5336258bf7a7427676ff9_prof);

        
        $__internal_e2e95e5c81b582ed6895ccfce45afefdeb08cee31b0917bb383adc29f9265f36->leave($__internal_e2e95e5c81b582ed6895ccfce45afefdeb08cee31b0917bb383adc29f9265f36_prof);

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
