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
        $__internal_c25009461134c8355db23cbe62b573a1b53734ae243643cff5cd1329804af501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25009461134c8355db23cbe62b573a1b53734ae243643cff5cd1329804af501->enter($__internal_c25009461134c8355db23cbe62b573a1b53734ae243643cff5cd1329804af501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:boolean.html.twig"));

        $__internal_ff84e4c9ccbfceb2e7738f536913d4ecac634edb25dd52e953417b2f7b1e4d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff84e4c9ccbfceb2e7738f536913d4ecac634edb25dd52e953417b2f7b1e4d8b->enter($__internal_ff84e4c9ccbfceb2e7738f536913d4ecac634edb25dd52e953417b2f7b1e4d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c25009461134c8355db23cbe62b573a1b53734ae243643cff5cd1329804af501->leave($__internal_c25009461134c8355db23cbe62b573a1b53734ae243643cff5cd1329804af501_prof);

        
        $__internal_ff84e4c9ccbfceb2e7738f536913d4ecac634edb25dd52e953417b2f7b1e4d8b->leave($__internal_ff84e4c9ccbfceb2e7738f536913d4ecac634edb25dd52e953417b2f7b1e4d8b_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_c702f837560c93a522642a292f02c1b92de5730bfb048f1cd15462b226846a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c702f837560c93a522642a292f02c1b92de5730bfb048f1cd15462b226846a5e->enter($__internal_c702f837560c93a522642a292f02c1b92de5730bfb048f1cd15462b226846a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_64ecea5e0d51487b566e7a8bb9ea1a93ec7f698ba400ea6d5d661606609e82b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ecea5e0d51487b566e7a8bb9ea1a93ec7f698ba400ea6d5d661606609e82b3->enter($__internal_64ecea5e0d51487b566e7a8bb9ea1a93ec7f698ba400ea6d5d661606609e82b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_64ecea5e0d51487b566e7a8bb9ea1a93ec7f698ba400ea6d5d661606609e82b3->leave($__internal_64ecea5e0d51487b566e7a8bb9ea1a93ec7f698ba400ea6d5d661606609e82b3_prof);

        
        $__internal_c702f837560c93a522642a292f02c1b92de5730bfb048f1cd15462b226846a5e->leave($__internal_c702f837560c93a522642a292f02c1b92de5730bfb048f1cd15462b226846a5e_prof);

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
