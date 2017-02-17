<?php

/* @SgDatatables/Column/action.html.twig */
class __TwigTemplate_e28324cb25b6b5be76513a954b4f99f768d5cdcc49f1eb417228c7c0c4475693 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "@SgDatatables/Column/action.html.twig", 9);
        $this->blocks = array(
            'common' => array($this, 'block_common'),
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Column:column.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32792943e0ab9a3540f6cebe4d3c8856680e829c26e1f5406ec54c7f547c9b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32792943e0ab9a3540f6cebe4d3c8856680e829c26e1f5406ec54c7f547c9b34->enter($__internal_32792943e0ab9a3540f6cebe4d3c8856680e829c26e1f5406ec54c7f547c9b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/action.html.twig"));

        $__internal_e3f7cb65df9929d2a0d60c502ece334a1332e68625d6bc26caa10882f0fbf3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f7cb65df9929d2a0d60c502ece334a1332e68625d6bc26caa10882f0fbf3d6->enter($__internal_e3f7cb65df9929d2a0d60c502ece334a1332e68625d6bc26caa10882f0fbf3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32792943e0ab9a3540f6cebe4d3c8856680e829c26e1f5406ec54c7f547c9b34->leave($__internal_32792943e0ab9a3540f6cebe4d3c8856680e829c26e1f5406ec54c7f547c9b34_prof);

        
        $__internal_e3f7cb65df9929d2a0d60c502ece334a1332e68625d6bc26caa10882f0fbf3d6->leave($__internal_e3f7cb65df9929d2a0d60c502ece334a1332e68625d6bc26caa10882f0fbf3d6_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_0508c70c6fa1d57d89fb6bdab03378e72caf570d71b12e059b4be029ee3a73b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0508c70c6fa1d57d89fb6bdab03378e72caf570d71b12e059b4be029ee3a73b9->enter($__internal_0508c70c6fa1d57d89fb6bdab03378e72caf570d71b12e059b4be029ee3a73b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_09e7a5f5913c34d334326aeedd894ae3b1245889dd93c0bcb9a28108cb77c00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e7a5f5913c34d334326aeedd894ae3b1245889dd93c0bcb9a28108cb77c00d->enter($__internal_09e7a5f5913c34d334326aeedd894ae3b1245889dd93c0bcb9a28108cb77c00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        // line 12
        echo "    \"contentPadding\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "padding", array()), "html", null, true);
        echo "\",
    \"defaultContent\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "defaultContent", array()), "html", null, true);
        echo "\",
    \"name\": \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), "html", null, true);
        echo "\",
    \"orderable\": false,
    \"searchable\": false,
    \"title\": \"";
        // line 17
        echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "title", array());
        echo "\",
    ";
        // line 18
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "type", array())) {
            // line 19
            echo "        \"type\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "type", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 21
        echo "    ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "visible", array())) {
            // line 22
            echo "        \"visible\": true,
        \"className\": \"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "class", array()), "html", null, true);
            echo "\",
    ";
        } else {
            // line 25
            echo "        \"visible\": false,
        \"className\": \"never ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "class", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 28
        echo "    \"width\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array()), "html", null, true);
        echo "\",
";
        
        $__internal_09e7a5f5913c34d334326aeedd894ae3b1245889dd93c0bcb9a28108cb77c00d->leave($__internal_09e7a5f5913c34d334326aeedd894ae3b1245889dd93c0bcb9a28108cb77c00d_prof);

        
        $__internal_0508c70c6fa1d57d89fb6bdab03378e72caf570d71b12e059b4be029ee3a73b9->leave($__internal_0508c70c6fa1d57d89fb6bdab03378e72caf570d71b12e059b4be029ee3a73b9_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_1387b2b57ca932da0f56e81df581db81329f50717afcf6c79d04ad68e4fcb4b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1387b2b57ca932da0f56e81df581db81329f50717afcf6c79d04ad68e4fcb4b7->enter($__internal_1387b2b57ca932da0f56e81df581db81329f50717afcf6c79d04ad68e4fcb4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_f03764240e797dcc2b652413917267c1a62267adc28c38a77efb1041c3751604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03764240e797dcc2b652413917267c1a62267adc28c38a77efb1041c3751604->enter($__internal_f03764240e797dcc2b652413917267c1a62267adc28c38a77efb1041c3751604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 32
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    \"render\": function(data, type, row, meta) {
        ";
        // line 34
        $this->loadTemplate("SgDatatablesBundle:Action:action.html.twig", "@SgDatatables/Column/action.html.twig", 34)->display(array_merge($context, array("column" => (isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "actions" => $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "actions", array()))));
        // line 35
        echo "    },
";
        
        $__internal_f03764240e797dcc2b652413917267c1a62267adc28c38a77efb1041c3751604->leave($__internal_f03764240e797dcc2b652413917267c1a62267adc28c38a77efb1041c3751604_prof);

        
        $__internal_1387b2b57ca932da0f56e81df581db81329f50717afcf6c79d04ad68e4fcb4b7->leave($__internal_1387b2b57ca932da0f56e81df581db81329f50717afcf6c79d04ad68e4fcb4b7_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Column/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 35,  124 => 34,  118 => 32,  109 => 31,  96 => 28,  91 => 26,  88 => 25,  83 => 23,  80 => 22,  77 => 21,  71 => 19,  69 => 18,  65 => 17,  59 => 14,  55 => 13,  50 => 12,  41 => 11,  11 => 9,);
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

{% block common %}
    \"contentPadding\": \"{{ column.padding }}\",
    \"defaultContent\": \"{{ column.defaultContent }}\",
    \"name\": \"{{ column.name }}\",
    \"orderable\": false,
    \"searchable\": false,
    \"title\": \"{{ column.title|raw }}\",
    {% if column.type %}
        \"type\": \"{{ column.type }}\",
    {% endif %}
    {% if column.visible %}
        \"visible\": true,
        \"className\": \"{{ column.class }}\",
    {% else %}
        \"visible\": false,
        \"className\": \"never {{ column.class }}\",
    {% endif %}
    \"width\": \"{{ column.width }}\",
{% endblock %}

{% block data %}
    \"data\": \"{{ column.data }}\",
    \"render\": function(data, type, row, meta) {
        {% include 'SgDatatablesBundle:Action:action.html.twig' with { 'column': column, 'actions': column.actions } %}
    },
{% endblock %}
", "@SgDatatables/Column/action.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Column\\action.html.twig");
    }
}
