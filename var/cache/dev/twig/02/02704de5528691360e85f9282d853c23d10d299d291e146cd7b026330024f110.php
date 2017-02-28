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
        $__internal_89446dd8b48a6233b3ad9f59e5f29f73cfe6d9a026f8284bac372e52f5a9cf60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89446dd8b48a6233b3ad9f59e5f29f73cfe6d9a026f8284bac372e52f5a9cf60->enter($__internal_89446dd8b48a6233b3ad9f59e5f29f73cfe6d9a026f8284bac372e52f5a9cf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/action.html.twig"));

        $__internal_7dc7e7cd3abebb20fd6cf0835f0b6355b668eb13abd8a71db4446e5c14de95af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc7e7cd3abebb20fd6cf0835f0b6355b668eb13abd8a71db4446e5c14de95af->enter($__internal_7dc7e7cd3abebb20fd6cf0835f0b6355b668eb13abd8a71db4446e5c14de95af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89446dd8b48a6233b3ad9f59e5f29f73cfe6d9a026f8284bac372e52f5a9cf60->leave($__internal_89446dd8b48a6233b3ad9f59e5f29f73cfe6d9a026f8284bac372e52f5a9cf60_prof);

        
        $__internal_7dc7e7cd3abebb20fd6cf0835f0b6355b668eb13abd8a71db4446e5c14de95af->leave($__internal_7dc7e7cd3abebb20fd6cf0835f0b6355b668eb13abd8a71db4446e5c14de95af_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_c5e47c3a0dfb25e9d60538f892c5a3b6ed3971ceab757d12d9189eb749a858c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e47c3a0dfb25e9d60538f892c5a3b6ed3971ceab757d12d9189eb749a858c1->enter($__internal_c5e47c3a0dfb25e9d60538f892c5a3b6ed3971ceab757d12d9189eb749a858c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_7ee53215be0e97299017eb08d04d44d127f016e04093d2b9915140f09bf1f6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee53215be0e97299017eb08d04d44d127f016e04093d2b9915140f09bf1f6b9->enter($__internal_7ee53215be0e97299017eb08d04d44d127f016e04093d2b9915140f09bf1f6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

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
        
        $__internal_7ee53215be0e97299017eb08d04d44d127f016e04093d2b9915140f09bf1f6b9->leave($__internal_7ee53215be0e97299017eb08d04d44d127f016e04093d2b9915140f09bf1f6b9_prof);

        
        $__internal_c5e47c3a0dfb25e9d60538f892c5a3b6ed3971ceab757d12d9189eb749a858c1->leave($__internal_c5e47c3a0dfb25e9d60538f892c5a3b6ed3971ceab757d12d9189eb749a858c1_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_52782c9f5474476c24d0065392de5f724147b141ebadf4436771a6eb4b563c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52782c9f5474476c24d0065392de5f724147b141ebadf4436771a6eb4b563c64->enter($__internal_52782c9f5474476c24d0065392de5f724147b141ebadf4436771a6eb4b563c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_62f8852c10e83eb252b6da49c68267caac77038352a253dd69966fd8f1057b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f8852c10e83eb252b6da49c68267caac77038352a253dd69966fd8f1057b27->enter($__internal_62f8852c10e83eb252b6da49c68267caac77038352a253dd69966fd8f1057b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_62f8852c10e83eb252b6da49c68267caac77038352a253dd69966fd8f1057b27->leave($__internal_62f8852c10e83eb252b6da49c68267caac77038352a253dd69966fd8f1057b27_prof);

        
        $__internal_52782c9f5474476c24d0065392de5f724147b141ebadf4436771a6eb4b563c64->leave($__internal_52782c9f5474476c24d0065392de5f724147b141ebadf4436771a6eb4b563c64_prof);

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
