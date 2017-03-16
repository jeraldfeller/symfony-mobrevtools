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
        $__internal_6847fab27b933e2b4d676e8e42b12b47e88431752d2eda9f470eef7f949c3c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6847fab27b933e2b4d676e8e42b12b47e88431752d2eda9f470eef7f949c3c3a->enter($__internal_6847fab27b933e2b4d676e8e42b12b47e88431752d2eda9f470eef7f949c3c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $__internal_098a6a3e751b754fcc1130bd63d6aa16109d9fa7b8d1278ad69fb8c04eae2cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098a6a3e751b754fcc1130bd63d6aa16109d9fa7b8d1278ad69fb8c04eae2cb5->enter($__internal_098a6a3e751b754fcc1130bd63d6aa16109d9fa7b8d1278ad69fb8c04eae2cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6847fab27b933e2b4d676e8e42b12b47e88431752d2eda9f470eef7f949c3c3a->leave($__internal_6847fab27b933e2b4d676e8e42b12b47e88431752d2eda9f470eef7f949c3c3a_prof);

        
        $__internal_098a6a3e751b754fcc1130bd63d6aa16109d9fa7b8d1278ad69fb8c04eae2cb5->leave($__internal_098a6a3e751b754fcc1130bd63d6aa16109d9fa7b8d1278ad69fb8c04eae2cb5_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_f84e77da235db4da20cccb2dc09d36e7e51d68ad29cd66fcf0ff5ac2a61d50b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84e77da235db4da20cccb2dc09d36e7e51d68ad29cd66fcf0ff5ac2a61d50b7->enter($__internal_f84e77da235db4da20cccb2dc09d36e7e51d68ad29cd66fcf0ff5ac2a61d50b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_4a443f192e5d62789eb8376fe11871f67ce041dda7a01d670741bcb0618decff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a443f192e5d62789eb8376fe11871f67ce041dda7a01d670741bcb0618decff->enter($__internal_4a443f192e5d62789eb8376fe11871f67ce041dda7a01d670741bcb0618decff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

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
        
        $__internal_4a443f192e5d62789eb8376fe11871f67ce041dda7a01d670741bcb0618decff->leave($__internal_4a443f192e5d62789eb8376fe11871f67ce041dda7a01d670741bcb0618decff_prof);

        
        $__internal_f84e77da235db4da20cccb2dc09d36e7e51d68ad29cd66fcf0ff5ac2a61d50b7->leave($__internal_f84e77da235db4da20cccb2dc09d36e7e51d68ad29cd66fcf0ff5ac2a61d50b7_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_cf33fd6f4fe1aefde41fe55eb7e394e045641f9c100064293582e8d649b1204f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf33fd6f4fe1aefde41fe55eb7e394e045641f9c100064293582e8d649b1204f->enter($__internal_cf33fd6f4fe1aefde41fe55eb7e394e045641f9c100064293582e8d649b1204f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_8987e163004dafaa341466db22bda9ff3a029fc2ca9359e1cfd687cfccbffe50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8987e163004dafaa341466db22bda9ff3a029fc2ca9359e1cfd687cfccbffe50->enter($__internal_8987e163004dafaa341466db22bda9ff3a029fc2ca9359e1cfd687cfccbffe50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_8987e163004dafaa341466db22bda9ff3a029fc2ca9359e1cfd687cfccbffe50->leave($__internal_8987e163004dafaa341466db22bda9ff3a029fc2ca9359e1cfd687cfccbffe50_prof);

        
        $__internal_cf33fd6f4fe1aefde41fe55eb7e394e045641f9c100064293582e8d649b1204f->leave($__internal_cf33fd6f4fe1aefde41fe55eb7e394e045641f9c100064293582e8d649b1204f_prof);

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
