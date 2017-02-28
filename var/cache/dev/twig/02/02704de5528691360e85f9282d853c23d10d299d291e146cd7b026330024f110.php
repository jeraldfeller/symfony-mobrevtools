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
        $__internal_8daf3b309ee98b3fe9f334e4c0a374f8584fea3fd3d4f228b5e19b86e16fcd4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8daf3b309ee98b3fe9f334e4c0a374f8584fea3fd3d4f228b5e19b86e16fcd4c->enter($__internal_8daf3b309ee98b3fe9f334e4c0a374f8584fea3fd3d4f228b5e19b86e16fcd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/action.html.twig"));

        $__internal_bf0f5c7b2dcceae59b6edc400d9ac391e005b54782708eabbf1f4855c851ff4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0f5c7b2dcceae59b6edc400d9ac391e005b54782708eabbf1f4855c851ff4c->enter($__internal_bf0f5c7b2dcceae59b6edc400d9ac391e005b54782708eabbf1f4855c851ff4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8daf3b309ee98b3fe9f334e4c0a374f8584fea3fd3d4f228b5e19b86e16fcd4c->leave($__internal_8daf3b309ee98b3fe9f334e4c0a374f8584fea3fd3d4f228b5e19b86e16fcd4c_prof);

        
        $__internal_bf0f5c7b2dcceae59b6edc400d9ac391e005b54782708eabbf1f4855c851ff4c->leave($__internal_bf0f5c7b2dcceae59b6edc400d9ac391e005b54782708eabbf1f4855c851ff4c_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_2e20453f5c35830b9929b5131fef76f52c4520a9c9acb60de3ddbd925f2c303c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e20453f5c35830b9929b5131fef76f52c4520a9c9acb60de3ddbd925f2c303c->enter($__internal_2e20453f5c35830b9929b5131fef76f52c4520a9c9acb60de3ddbd925f2c303c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_2ed1273c58f3adc783c85d53b2bf4025d92362979c5800df85606972309947e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed1273c58f3adc783c85d53b2bf4025d92362979c5800df85606972309947e6->enter($__internal_2ed1273c58f3adc783c85d53b2bf4025d92362979c5800df85606972309947e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

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
        
        $__internal_2ed1273c58f3adc783c85d53b2bf4025d92362979c5800df85606972309947e6->leave($__internal_2ed1273c58f3adc783c85d53b2bf4025d92362979c5800df85606972309947e6_prof);

        
        $__internal_2e20453f5c35830b9929b5131fef76f52c4520a9c9acb60de3ddbd925f2c303c->leave($__internal_2e20453f5c35830b9929b5131fef76f52c4520a9c9acb60de3ddbd925f2c303c_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_74b3e48fa4ee9ef5dbaff26dbbd3832b24743cadf783794dc10a1ec78d895f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b3e48fa4ee9ef5dbaff26dbbd3832b24743cadf783794dc10a1ec78d895f03->enter($__internal_74b3e48fa4ee9ef5dbaff26dbbd3832b24743cadf783794dc10a1ec78d895f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_3d5b0356c286acf3da15f46299b5ac22361d8bd95908796ef8b8981b7265fdb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5b0356c286acf3da15f46299b5ac22361d8bd95908796ef8b8981b7265fdb7->enter($__internal_3d5b0356c286acf3da15f46299b5ac22361d8bd95908796ef8b8981b7265fdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_3d5b0356c286acf3da15f46299b5ac22361d8bd95908796ef8b8981b7265fdb7->leave($__internal_3d5b0356c286acf3da15f46299b5ac22361d8bd95908796ef8b8981b7265fdb7_prof);

        
        $__internal_74b3e48fa4ee9ef5dbaff26dbbd3832b24743cadf783794dc10a1ec78d895f03->leave($__internal_74b3e48fa4ee9ef5dbaff26dbbd3832b24743cadf783794dc10a1ec78d895f03_prof);

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
