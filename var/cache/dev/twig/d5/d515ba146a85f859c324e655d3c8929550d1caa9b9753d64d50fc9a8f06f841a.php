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
        $__internal_b58e24ea7649ce063d4fef546848dc30113364a60fb820c72d88019a42c866ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b58e24ea7649ce063d4fef546848dc30113364a60fb820c72d88019a42c866ec->enter($__internal_b58e24ea7649ce063d4fef546848dc30113364a60fb820c72d88019a42c866ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $__internal_c2b48fe21be388b20d8594f94d578d4bd2de9279a940fbafd9457ef9708d84a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b48fe21be388b20d8594f94d578d4bd2de9279a940fbafd9457ef9708d84a7->enter($__internal_c2b48fe21be388b20d8594f94d578d4bd2de9279a940fbafd9457ef9708d84a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b58e24ea7649ce063d4fef546848dc30113364a60fb820c72d88019a42c866ec->leave($__internal_b58e24ea7649ce063d4fef546848dc30113364a60fb820c72d88019a42c866ec_prof);

        
        $__internal_c2b48fe21be388b20d8594f94d578d4bd2de9279a940fbafd9457ef9708d84a7->leave($__internal_c2b48fe21be388b20d8594f94d578d4bd2de9279a940fbafd9457ef9708d84a7_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_25618c63ec0ef127779adaeb30b5ae0a094740ec06cc751592fddb30a1dba552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25618c63ec0ef127779adaeb30b5ae0a094740ec06cc751592fddb30a1dba552->enter($__internal_25618c63ec0ef127779adaeb30b5ae0a094740ec06cc751592fddb30a1dba552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_06ede11d9ec86994b69a3eb8667d061b387e49c6421a1f3cd39f6a831b16478b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ede11d9ec86994b69a3eb8667d061b387e49c6421a1f3cd39f6a831b16478b->enter($__internal_06ede11d9ec86994b69a3eb8667d061b387e49c6421a1f3cd39f6a831b16478b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_06ede11d9ec86994b69a3eb8667d061b387e49c6421a1f3cd39f6a831b16478b->leave($__internal_06ede11d9ec86994b69a3eb8667d061b387e49c6421a1f3cd39f6a831b16478b_prof);

        
        $__internal_25618c63ec0ef127779adaeb30b5ae0a094740ec06cc751592fddb30a1dba552->leave($__internal_25618c63ec0ef127779adaeb30b5ae0a094740ec06cc751592fddb30a1dba552_prof);

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
