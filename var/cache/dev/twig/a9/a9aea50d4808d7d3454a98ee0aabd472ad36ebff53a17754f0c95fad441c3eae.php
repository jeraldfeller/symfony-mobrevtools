<?php

/* @SgDatatables/Column/boolean.html.twig */
class __TwigTemplate_f1d39eca633cf3332e8ffb773c6983a0d039843d8894e0e94bd11223b314995c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "@SgDatatables/Column/boolean.html.twig", 9);
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
        $__internal_19da699d2d658892c65487d092ebe031e22ca1506d37764e81d7da2c6840ddf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19da699d2d658892c65487d092ebe031e22ca1506d37764e81d7da2c6840ddf4->enter($__internal_19da699d2d658892c65487d092ebe031e22ca1506d37764e81d7da2c6840ddf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/boolean.html.twig"));

        $__internal_4a06780dbc03c07f079d6b9631a9aa0c13774ef5ec282cec280390be0f351067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a06780dbc03c07f079d6b9631a9aa0c13774ef5ec282cec280390be0f351067->enter($__internal_4a06780dbc03c07f079d6b9631a9aa0c13774ef5ec282cec280390be0f351067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19da699d2d658892c65487d092ebe031e22ca1506d37764e81d7da2c6840ddf4->leave($__internal_19da699d2d658892c65487d092ebe031e22ca1506d37764e81d7da2c6840ddf4_prof);

        
        $__internal_4a06780dbc03c07f079d6b9631a9aa0c13774ef5ec282cec280390be0f351067->leave($__internal_4a06780dbc03c07f079d6b9631a9aa0c13774ef5ec282cec280390be0f351067_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_05406646c09669aecc8b73d63879f5fee47a52c5eda70cb4439fa2e7696cb885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05406646c09669aecc8b73d63879f5fee47a52c5eda70cb4439fa2e7696cb885->enter($__internal_05406646c09669aecc8b73d63879f5fee47a52c5eda70cb4439fa2e7696cb885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_328a08c05563a5416fa6a5123ead2ea074241d9fef22f7428e91f52042bf1d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328a08c05563a5416fa6a5123ead2ea074241d9fef22f7428e91f52042bf1d70->enter($__internal_328a08c05563a5416fa6a5123ead2ea074241d9fef22f7428e91f52042bf1d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_328a08c05563a5416fa6a5123ead2ea074241d9fef22f7428e91f52042bf1d70->leave($__internal_328a08c05563a5416fa6a5123ead2ea074241d9fef22f7428e91f52042bf1d70_prof);

        
        $__internal_05406646c09669aecc8b73d63879f5fee47a52c5eda70cb4439fa2e7696cb885->leave($__internal_05406646c09669aecc8b73d63879f5fee47a52c5eda70cb4439fa2e7696cb885_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Column/boolean.html.twig";
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
", "@SgDatatables/Column/boolean.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Column\\boolean.html.twig");
    }
}
