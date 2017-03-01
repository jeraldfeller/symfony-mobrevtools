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
        $__internal_521e75d684deeb0baee72034f1412b2828fe716b12f4ed6ef0075baad0c75847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521e75d684deeb0baee72034f1412b2828fe716b12f4ed6ef0075baad0c75847->enter($__internal_521e75d684deeb0baee72034f1412b2828fe716b12f4ed6ef0075baad0c75847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $__internal_2512eb1885ea1e4769431d2a528edf071cac8b717c90ae66d38eb1a96470849c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2512eb1885ea1e4769431d2a528edf071cac8b717c90ae66d38eb1a96470849c->enter($__internal_2512eb1885ea1e4769431d2a528edf071cac8b717c90ae66d38eb1a96470849c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_521e75d684deeb0baee72034f1412b2828fe716b12f4ed6ef0075baad0c75847->leave($__internal_521e75d684deeb0baee72034f1412b2828fe716b12f4ed6ef0075baad0c75847_prof);

        
        $__internal_2512eb1885ea1e4769431d2a528edf071cac8b717c90ae66d38eb1a96470849c->leave($__internal_2512eb1885ea1e4769431d2a528edf071cac8b717c90ae66d38eb1a96470849c_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_ed74334fbef0882d3e227cc916f17d269b0b8536d8c94a2c5cdebddd83f72d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed74334fbef0882d3e227cc916f17d269b0b8536d8c94a2c5cdebddd83f72d2f->enter($__internal_ed74334fbef0882d3e227cc916f17d269b0b8536d8c94a2c5cdebddd83f72d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_769f564a975d7de48c6fc95816608154e3b2da14f2ba4b256675b8f35afeaf86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769f564a975d7de48c6fc95816608154e3b2da14f2ba4b256675b8f35afeaf86->enter($__internal_769f564a975d7de48c6fc95816608154e3b2da14f2ba4b256675b8f35afeaf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_769f564a975d7de48c6fc95816608154e3b2da14f2ba4b256675b8f35afeaf86->leave($__internal_769f564a975d7de48c6fc95816608154e3b2da14f2ba4b256675b8f35afeaf86_prof);

        
        $__internal_ed74334fbef0882d3e227cc916f17d269b0b8536d8c94a2c5cdebddd83f72d2f->leave($__internal_ed74334fbef0882d3e227cc916f17d269b0b8536d8c94a2c5cdebddd83f72d2f_prof);

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
