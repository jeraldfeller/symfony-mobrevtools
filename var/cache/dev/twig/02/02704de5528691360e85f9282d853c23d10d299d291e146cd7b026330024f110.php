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
        $__internal_0852ba230fd1476522801ca07ece8e2e9704130afa4f210b1f235a1cd11f3774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0852ba230fd1476522801ca07ece8e2e9704130afa4f210b1f235a1cd11f3774->enter($__internal_0852ba230fd1476522801ca07ece8e2e9704130afa4f210b1f235a1cd11f3774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/action.html.twig"));

        $__internal_8cb1a3a626c6d7209e4e594016eae0e0456c2609975a9498117428d722db12b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb1a3a626c6d7209e4e594016eae0e0456c2609975a9498117428d722db12b4->enter($__internal_8cb1a3a626c6d7209e4e594016eae0e0456c2609975a9498117428d722db12b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0852ba230fd1476522801ca07ece8e2e9704130afa4f210b1f235a1cd11f3774->leave($__internal_0852ba230fd1476522801ca07ece8e2e9704130afa4f210b1f235a1cd11f3774_prof);

        
        $__internal_8cb1a3a626c6d7209e4e594016eae0e0456c2609975a9498117428d722db12b4->leave($__internal_8cb1a3a626c6d7209e4e594016eae0e0456c2609975a9498117428d722db12b4_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_abb990a4434c87615865a7c8cc0f9d1ec791e10812c04a01064ee4dc74c38b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb990a4434c87615865a7c8cc0f9d1ec791e10812c04a01064ee4dc74c38b62->enter($__internal_abb990a4434c87615865a7c8cc0f9d1ec791e10812c04a01064ee4dc74c38b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_924b9fb78e5a920861b3a49547184b6d13a85463f00c30468e2f9c5b7b13224c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924b9fb78e5a920861b3a49547184b6d13a85463f00c30468e2f9c5b7b13224c->enter($__internal_924b9fb78e5a920861b3a49547184b6d13a85463f00c30468e2f9c5b7b13224c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

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
        
        $__internal_924b9fb78e5a920861b3a49547184b6d13a85463f00c30468e2f9c5b7b13224c->leave($__internal_924b9fb78e5a920861b3a49547184b6d13a85463f00c30468e2f9c5b7b13224c_prof);

        
        $__internal_abb990a4434c87615865a7c8cc0f9d1ec791e10812c04a01064ee4dc74c38b62->leave($__internal_abb990a4434c87615865a7c8cc0f9d1ec791e10812c04a01064ee4dc74c38b62_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_232dc3e3ba11b6bd8c6a41bb249d6a53ee13c244711ab7b935dad040d38f55f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232dc3e3ba11b6bd8c6a41bb249d6a53ee13c244711ab7b935dad040d38f55f2->enter($__internal_232dc3e3ba11b6bd8c6a41bb249d6a53ee13c244711ab7b935dad040d38f55f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_b58e87beed11a1b00216eaf2bbffe27a3e39f7fa5fa4a871e865a1d3e28e98b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58e87beed11a1b00216eaf2bbffe27a3e39f7fa5fa4a871e865a1d3e28e98b4->enter($__internal_b58e87beed11a1b00216eaf2bbffe27a3e39f7fa5fa4a871e865a1d3e28e98b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_b58e87beed11a1b00216eaf2bbffe27a3e39f7fa5fa4a871e865a1d3e28e98b4->leave($__internal_b58e87beed11a1b00216eaf2bbffe27a3e39f7fa5fa4a871e865a1d3e28e98b4_prof);

        
        $__internal_232dc3e3ba11b6bd8c6a41bb249d6a53ee13c244711ab7b935dad040d38f55f2->leave($__internal_232dc3e3ba11b6bd8c6a41bb249d6a53ee13c244711ab7b935dad040d38f55f2_prof);

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
