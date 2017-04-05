<?php

/* SgDatatablesBundle:Column:boolean.html.twig */
class __TwigTemplate_2b201915c09dd6d3df3dfd680acc2d7a5e732244d00aa8574fc29a6145895c4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:boolean.html.twig", 9);
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
        $__internal_de5f76dba3645b75e58f70dc909835f3aca97d6c2b9dc4eecee397bf92e63799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de5f76dba3645b75e58f70dc909835f3aca97d6c2b9dc4eecee397bf92e63799->enter($__internal_de5f76dba3645b75e58f70dc909835f3aca97d6c2b9dc4eecee397bf92e63799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:boolean.html.twig"));

        $__internal_798e06a5dc89f114d54149e9cae722593d7ead0ef0981186cfd3884bb93bdf51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798e06a5dc89f114d54149e9cae722593d7ead0ef0981186cfd3884bb93bdf51->enter($__internal_798e06a5dc89f114d54149e9cae722593d7ead0ef0981186cfd3884bb93bdf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de5f76dba3645b75e58f70dc909835f3aca97d6c2b9dc4eecee397bf92e63799->leave($__internal_de5f76dba3645b75e58f70dc909835f3aca97d6c2b9dc4eecee397bf92e63799_prof);

        
        $__internal_798e06a5dc89f114d54149e9cae722593d7ead0ef0981186cfd3884bb93bdf51->leave($__internal_798e06a5dc89f114d54149e9cae722593d7ead0ef0981186cfd3884bb93bdf51_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_db5520cf8ab29964ff8355b5308de254fcfeb1d8cc9c534fab46b2bb845a0da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5520cf8ab29964ff8355b5308de254fcfeb1d8cc9c534fab46b2bb845a0da8->enter($__internal_db5520cf8ab29964ff8355b5308de254fcfeb1d8cc9c534fab46b2bb845a0da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_173b8a15d1c886fa8ea221dfdfdaeed486be66689591a0a069576afbc22c123f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173b8a15d1c886fa8ea221dfdfdaeed486be66689591a0a069576afbc22c123f->enter($__internal_173b8a15d1c886fa8ea221dfdfdaeed486be66689591a0a069576afbc22c123f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        // line 13
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "editable", array())) {
            // line 14
            echo "        \"render\": function(data, type, row, meta) {
            return render_editable_boolean(data, type, row, meta, '";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "trueLabel", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "falseLabel", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "index", array()), "html", null, true);
            echo "');
        },
    ";
        } else {
            // line 18
            echo "        \"render\": function(data, type, row, meta) {
            return ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array()), "html", null, true);
            echo "(data, type, row, meta, \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "trueIcon", array()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "falseIcon", array()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "trueLabel", array()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "falseLabel", array()), "html", null, true);
            echo "\");
        },
    ";
        }
        
        $__internal_173b8a15d1c886fa8ea221dfdfdaeed486be66689591a0a069576afbc22c123f->leave($__internal_173b8a15d1c886fa8ea221dfdfdaeed486be66689591a0a069576afbc22c123f_prof);

        
        $__internal_db5520cf8ab29964ff8355b5308de254fcfeb1d8cc9c534fab46b2bb845a0da8->leave($__internal_db5520cf8ab29964ff8355b5308de254fcfeb1d8cc9c534fab46b2bb845a0da8_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  71 => 18,  59 => 15,  56 => 14,  54 => 13,  49 => 12,  40 => 11,  11 => 9,);
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
    {% if column.editable %}
        \"render\": function(data, type, row, meta) {
            return render_editable_boolean(data, type, row, meta, '{{ column.data }}', '{{ column.trueLabel }}', '{{ column.falseLabel }}', '{{ column.index }}');
        },
    {% else %}
        \"render\": function(data, type, row, meta) {
            return {{ column.render }}(data, type, row, meta, \"{{ column.trueIcon }}\", \"{{ column.falseIcon }}\", \"{{ column.trueLabel }}\", \"{{ column.falseLabel }}\");
        },
    {% endif %}
{% endblock %}
", "SgDatatablesBundle:Column:boolean.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/boolean.html.twig");
    }
}
