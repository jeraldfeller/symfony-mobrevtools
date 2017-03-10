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
        $__internal_0c80430b9d373e0b51a01bcf9ff97b07dbd45d7de746263bf006f1c4ae40008a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c80430b9d373e0b51a01bcf9ff97b07dbd45d7de746263bf006f1c4ae40008a->enter($__internal_0c80430b9d373e0b51a01bcf9ff97b07dbd45d7de746263bf006f1c4ae40008a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $__internal_d7fde4c89876c4dc5e6d8533a5c9ee4163fdc33a4eeed1921852a694e0837002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fde4c89876c4dc5e6d8533a5c9ee4163fdc33a4eeed1921852a694e0837002->enter($__internal_d7fde4c89876c4dc5e6d8533a5c9ee4163fdc33a4eeed1921852a694e0837002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c80430b9d373e0b51a01bcf9ff97b07dbd45d7de746263bf006f1c4ae40008a->leave($__internal_0c80430b9d373e0b51a01bcf9ff97b07dbd45d7de746263bf006f1c4ae40008a_prof);

        
        $__internal_d7fde4c89876c4dc5e6d8533a5c9ee4163fdc33a4eeed1921852a694e0837002->leave($__internal_d7fde4c89876c4dc5e6d8533a5c9ee4163fdc33a4eeed1921852a694e0837002_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_c5425314ece967feaaa87afe0b4f5218a1b463aa8443c102204493221573a017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5425314ece967feaaa87afe0b4f5218a1b463aa8443c102204493221573a017->enter($__internal_c5425314ece967feaaa87afe0b4f5218a1b463aa8443c102204493221573a017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_ec181698adb9f41249b3ea096ccbea6453341b606da686b1ba90ad89c5ba9d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec181698adb9f41249b3ea096ccbea6453341b606da686b1ba90ad89c5ba9d6f->enter($__internal_ec181698adb9f41249b3ea096ccbea6453341b606da686b1ba90ad89c5ba9d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

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
        
        $__internal_ec181698adb9f41249b3ea096ccbea6453341b606da686b1ba90ad89c5ba9d6f->leave($__internal_ec181698adb9f41249b3ea096ccbea6453341b606da686b1ba90ad89c5ba9d6f_prof);

        
        $__internal_c5425314ece967feaaa87afe0b4f5218a1b463aa8443c102204493221573a017->leave($__internal_c5425314ece967feaaa87afe0b4f5218a1b463aa8443c102204493221573a017_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_a57bcb03fadba86bcba514355d8cddf532dcc8fb8858b627a36d008a1bc25b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57bcb03fadba86bcba514355d8cddf532dcc8fb8858b627a36d008a1bc25b29->enter($__internal_a57bcb03fadba86bcba514355d8cddf532dcc8fb8858b627a36d008a1bc25b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_92595c9b35d130fb3fbc78196ab651155d03a4c4831a4c73cd79419d3a192431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92595c9b35d130fb3fbc78196ab651155d03a4c4831a4c73cd79419d3a192431->enter($__internal_92595c9b35d130fb3fbc78196ab651155d03a4c4831a4c73cd79419d3a192431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_92595c9b35d130fb3fbc78196ab651155d03a4c4831a4c73cd79419d3a192431->leave($__internal_92595c9b35d130fb3fbc78196ab651155d03a4c4831a4c73cd79419d3a192431_prof);

        
        $__internal_a57bcb03fadba86bcba514355d8cddf532dcc8fb8858b627a36d008a1bc25b29->leave($__internal_a57bcb03fadba86bcba514355d8cddf532dcc8fb8858b627a36d008a1bc25b29_prof);

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
