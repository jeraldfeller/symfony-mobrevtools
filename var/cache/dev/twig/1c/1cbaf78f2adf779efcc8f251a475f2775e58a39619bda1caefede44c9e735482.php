<?php

/* @SgDatatables/Column/datetime.html.twig */
class __TwigTemplate_31298484d88def4fe563110882836c80400c1825d67a1ae9586f05e9fea65c6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "@SgDatatables/Column/datetime.html.twig", 9);
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
        $__internal_836f8653b8fb037ce0dd4c812fe6269d00fb60b689154578b9873023869b2a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836f8653b8fb037ce0dd4c812fe6269d00fb60b689154578b9873023869b2a86->enter($__internal_836f8653b8fb037ce0dd4c812fe6269d00fb60b689154578b9873023869b2a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/datetime.html.twig"));

        $__internal_ba12df57e7229ed683d743f2a1f86d133a38b7b82a973b9a1580d49709377b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba12df57e7229ed683d743f2a1f86d133a38b7b82a973b9a1580d49709377b49->enter($__internal_ba12df57e7229ed683d743f2a1f86d133a38b7b82a973b9a1580d49709377b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_836f8653b8fb037ce0dd4c812fe6269d00fb60b689154578b9873023869b2a86->leave($__internal_836f8653b8fb037ce0dd4c812fe6269d00fb60b689154578b9873023869b2a86_prof);

        
        $__internal_ba12df57e7229ed683d743f2a1f86d133a38b7b82a973b9a1580d49709377b49->leave($__internal_ba12df57e7229ed683d743f2a1f86d133a38b7b82a973b9a1580d49709377b49_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_f4288e0d96b263edb3a76d7017458029187df44ef45865743773c1f1dfbf59a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4288e0d96b263edb3a76d7017458029187df44ef45865743773c1f1dfbf59a4->enter($__internal_f4288e0d96b263edb3a76d7017458029187df44ef45865743773c1f1dfbf59a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_62fad47437fc5b5589fe10377db8cf4f16c131b89c20db8554cff25ba38b6201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62fad47437fc5b5589fe10377db8cf4f16c131b89c20db8554cff25ba38b6201->enter($__internal_62fad47437fc5b5589fe10377db8cf4f16c131b89c20db8554cff25ba38b6201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        // line 13
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "editable", array())) {
            // line 14
            echo "        \"render\": function(data, type, row, meta) {
            return render_editable_datetime(data, type, row, meta, '";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "dateFormat", array()), "html", null, true);
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
            echo "(data, type, row, meta, '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "dateFormat", array()), "html", null, true);
            echo "');
        },
    ";
        }
        
        $__internal_62fad47437fc5b5589fe10377db8cf4f16c131b89c20db8554cff25ba38b6201->leave($__internal_62fad47437fc5b5589fe10377db8cf4f16c131b89c20db8554cff25ba38b6201_prof);

        
        $__internal_f4288e0d96b263edb3a76d7017458029187df44ef45865743773c1f1dfbf59a4->leave($__internal_f4288e0d96b263edb3a76d7017458029187df44ef45865743773c1f1dfbf59a4_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Column/datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  69 => 18,  59 => 15,  56 => 14,  54 => 13,  49 => 12,  40 => 11,  11 => 9,);
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
            return render_editable_datetime(data, type, row, meta, '{{ column.data }}', '{{ column.dateFormat }}', '{{ column.index }}');
        },
    {% else %}
        \"render\": function(data, type, row, meta) {
            return {{ column.render }}(data, type, row, meta, '{{ column.dateFormat }}');
        },
    {% endif %}
{% endblock %}
", "@SgDatatables/Column/datetime.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Column\\datetime.html.twig");
    }
}
