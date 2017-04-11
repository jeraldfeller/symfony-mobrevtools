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
        $__internal_9e600a7a4abd4ce69780ebfef9d7fd0ecba90df3ad14d41922f4b6dc2def9b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e600a7a4abd4ce69780ebfef9d7fd0ecba90df3ad14d41922f4b6dc2def9b36->enter($__internal_9e600a7a4abd4ce69780ebfef9d7fd0ecba90df3ad14d41922f4b6dc2def9b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/action.html.twig"));

        $__internal_8117753c3ab3b10496f9ee9d3aad61a8800d2f2c2a753f8d79112e596b4b0f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8117753c3ab3b10496f9ee9d3aad61a8800d2f2c2a753f8d79112e596b4b0f82->enter($__internal_8117753c3ab3b10496f9ee9d3aad61a8800d2f2c2a753f8d79112e596b4b0f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e600a7a4abd4ce69780ebfef9d7fd0ecba90df3ad14d41922f4b6dc2def9b36->leave($__internal_9e600a7a4abd4ce69780ebfef9d7fd0ecba90df3ad14d41922f4b6dc2def9b36_prof);

        
        $__internal_8117753c3ab3b10496f9ee9d3aad61a8800d2f2c2a753f8d79112e596b4b0f82->leave($__internal_8117753c3ab3b10496f9ee9d3aad61a8800d2f2c2a753f8d79112e596b4b0f82_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_2b3fcc88b675a032e44c639e3a151c2f2d5117120821137e9f3bb79a6ed3cd18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3fcc88b675a032e44c639e3a151c2f2d5117120821137e9f3bb79a6ed3cd18->enter($__internal_2b3fcc88b675a032e44c639e3a151c2f2d5117120821137e9f3bb79a6ed3cd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_16303fbd1b3a2685115bddd875b2abb156ae2ea73ce9454379ee10efb625153f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16303fbd1b3a2685115bddd875b2abb156ae2ea73ce9454379ee10efb625153f->enter($__internal_16303fbd1b3a2685115bddd875b2abb156ae2ea73ce9454379ee10efb625153f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

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
        
        $__internal_16303fbd1b3a2685115bddd875b2abb156ae2ea73ce9454379ee10efb625153f->leave($__internal_16303fbd1b3a2685115bddd875b2abb156ae2ea73ce9454379ee10efb625153f_prof);

        
        $__internal_2b3fcc88b675a032e44c639e3a151c2f2d5117120821137e9f3bb79a6ed3cd18->leave($__internal_2b3fcc88b675a032e44c639e3a151c2f2d5117120821137e9f3bb79a6ed3cd18_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_fc8f3efcf97779bb63b9bedd5f2855f050f0dc252ade4c95430970e1a984b0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc8f3efcf97779bb63b9bedd5f2855f050f0dc252ade4c95430970e1a984b0b0->enter($__internal_fc8f3efcf97779bb63b9bedd5f2855f050f0dc252ade4c95430970e1a984b0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_cac2961235683f703059fc18dcf7a21af2f56b613055d6117fb8007f49ffedf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac2961235683f703059fc18dcf7a21af2f56b613055d6117fb8007f49ffedf5->enter($__internal_cac2961235683f703059fc18dcf7a21af2f56b613055d6117fb8007f49ffedf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_cac2961235683f703059fc18dcf7a21af2f56b613055d6117fb8007f49ffedf5->leave($__internal_cac2961235683f703059fc18dcf7a21af2f56b613055d6117fb8007f49ffedf5_prof);

        
        $__internal_fc8f3efcf97779bb63b9bedd5f2855f050f0dc252ade4c95430970e1a984b0b0->leave($__internal_fc8f3efcf97779bb63b9bedd5f2855f050f0dc252ade4c95430970e1a984b0b0_prof);

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
