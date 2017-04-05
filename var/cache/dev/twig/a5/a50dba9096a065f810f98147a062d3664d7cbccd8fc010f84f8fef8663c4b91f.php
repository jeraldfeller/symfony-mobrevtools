<?php

/* SgDatatablesBundle:Column:action.html.twig */
class __TwigTemplate_9ad371ca442dab88f82df2e5a39dfc9583d63567b6a97cffc888d364e9fa67f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:action.html.twig", 9);
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
        $__internal_54fadb8cb830c4d6f79042e95b1c9df82afbf5612eaca498f399c1f4317fecee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54fadb8cb830c4d6f79042e95b1c9df82afbf5612eaca498f399c1f4317fecee->enter($__internal_54fadb8cb830c4d6f79042e95b1c9df82afbf5612eaca498f399c1f4317fecee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $__internal_95b6fbf487f0b9dcf11847390c046cd22ec7fc8128989a042112dcd79374dd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b6fbf487f0b9dcf11847390c046cd22ec7fc8128989a042112dcd79374dd02->enter($__internal_95b6fbf487f0b9dcf11847390c046cd22ec7fc8128989a042112dcd79374dd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54fadb8cb830c4d6f79042e95b1c9df82afbf5612eaca498f399c1f4317fecee->leave($__internal_54fadb8cb830c4d6f79042e95b1c9df82afbf5612eaca498f399c1f4317fecee_prof);

        
        $__internal_95b6fbf487f0b9dcf11847390c046cd22ec7fc8128989a042112dcd79374dd02->leave($__internal_95b6fbf487f0b9dcf11847390c046cd22ec7fc8128989a042112dcd79374dd02_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_8b10da160ea3cf3e8e65df1835577ae756f6f94a3c26050e26ec4b2f4487a708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b10da160ea3cf3e8e65df1835577ae756f6f94a3c26050e26ec4b2f4487a708->enter($__internal_8b10da160ea3cf3e8e65df1835577ae756f6f94a3c26050e26ec4b2f4487a708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_917ac6425aac6314d403bddaff0bb7e2b7a9e8ece355c653ac7567ed76fe70f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917ac6425aac6314d403bddaff0bb7e2b7a9e8ece355c653ac7567ed76fe70f0->enter($__internal_917ac6425aac6314d403bddaff0bb7e2b7a9e8ece355c653ac7567ed76fe70f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

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
        
        $__internal_917ac6425aac6314d403bddaff0bb7e2b7a9e8ece355c653ac7567ed76fe70f0->leave($__internal_917ac6425aac6314d403bddaff0bb7e2b7a9e8ece355c653ac7567ed76fe70f0_prof);

        
        $__internal_8b10da160ea3cf3e8e65df1835577ae756f6f94a3c26050e26ec4b2f4487a708->leave($__internal_8b10da160ea3cf3e8e65df1835577ae756f6f94a3c26050e26ec4b2f4487a708_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_fcc3c87ce7db99746bab5693fe68c2eda179d8abde54004a63bb1d3e1123306b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc3c87ce7db99746bab5693fe68c2eda179d8abde54004a63bb1d3e1123306b->enter($__internal_fcc3c87ce7db99746bab5693fe68c2eda179d8abde54004a63bb1d3e1123306b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_1f01f68732857983d94cc478b39acfa2027fae387910e3e1c12100435bba2b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f01f68732857983d94cc478b39acfa2027fae387910e3e1c12100435bba2b8b->enter($__internal_1f01f68732857983d94cc478b39acfa2027fae387910e3e1c12100435bba2b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 32
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    \"render\": function(data, type, row, meta) {
        ";
        // line 34
        $this->loadTemplate("SgDatatablesBundle:Action:action.html.twig", "SgDatatablesBundle:Column:action.html.twig", 34)->display(array_merge($context, array("column" => (isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "actions" => $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "actions", array()))));
        // line 35
        echo "    },
";
        
        $__internal_1f01f68732857983d94cc478b39acfa2027fae387910e3e1c12100435bba2b8b->leave($__internal_1f01f68732857983d94cc478b39acfa2027fae387910e3e1c12100435bba2b8b_prof);

        
        $__internal_fcc3c87ce7db99746bab5693fe68c2eda179d8abde54004a63bb1d3e1123306b->leave($__internal_fcc3c87ce7db99746bab5693fe68c2eda179d8abde54004a63bb1d3e1123306b_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:action.html.twig";
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
", "SgDatatablesBundle:Column:action.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/action.html.twig");
    }
}
