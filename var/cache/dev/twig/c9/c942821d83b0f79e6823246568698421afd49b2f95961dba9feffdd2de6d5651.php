<?php

/* SgDatatablesBundle:Column:datetime.html.twig */
class __TwigTemplate_c13508994095f20f47270d57534bb440f65f9fda851e79b240f795e6326504ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:datetime.html.twig", 9);
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
        $__internal_6240308349c133a0f605e24a92e402d7172dd1e7c6b72f5123e86f368a76600e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6240308349c133a0f605e24a92e402d7172dd1e7c6b72f5123e86f368a76600e->enter($__internal_6240308349c133a0f605e24a92e402d7172dd1e7c6b72f5123e86f368a76600e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:datetime.html.twig"));

        $__internal_e471f36766ba43a24fbdb8db7cd6347f8f7e804bb53edfb89ca6d1a375a2f06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e471f36766ba43a24fbdb8db7cd6347f8f7e804bb53edfb89ca6d1a375a2f06d->enter($__internal_e471f36766ba43a24fbdb8db7cd6347f8f7e804bb53edfb89ca6d1a375a2f06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6240308349c133a0f605e24a92e402d7172dd1e7c6b72f5123e86f368a76600e->leave($__internal_6240308349c133a0f605e24a92e402d7172dd1e7c6b72f5123e86f368a76600e_prof);

        
        $__internal_e471f36766ba43a24fbdb8db7cd6347f8f7e804bb53edfb89ca6d1a375a2f06d->leave($__internal_e471f36766ba43a24fbdb8db7cd6347f8f7e804bb53edfb89ca6d1a375a2f06d_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_2aa198dfcb8ee13a2995e9d8720b85ec3469a37f0f072df8ccec37f5f2fefa88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa198dfcb8ee13a2995e9d8720b85ec3469a37f0f072df8ccec37f5f2fefa88->enter($__internal_2aa198dfcb8ee13a2995e9d8720b85ec3469a37f0f072df8ccec37f5f2fefa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_33f1208b63d655fef6bcf154f61e8e0a9f5c41e77a7667ce6460d5180ca5cec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f1208b63d655fef6bcf154f61e8e0a9f5c41e77a7667ce6460d5180ca5cec4->enter($__internal_33f1208b63d655fef6bcf154f61e8e0a9f5c41e77a7667ce6460d5180ca5cec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_33f1208b63d655fef6bcf154f61e8e0a9f5c41e77a7667ce6460d5180ca5cec4->leave($__internal_33f1208b63d655fef6bcf154f61e8e0a9f5c41e77a7667ce6460d5180ca5cec4_prof);

        
        $__internal_2aa198dfcb8ee13a2995e9d8720b85ec3469a37f0f072df8ccec37f5f2fefa88->leave($__internal_2aa198dfcb8ee13a2995e9d8720b85ec3469a37f0f072df8ccec37f5f2fefa88_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:datetime.html.twig";
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
", "SgDatatablesBundle:Column:datetime.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/datetime.html.twig");
    }
}
