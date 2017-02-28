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
        $__internal_bd6012ad1016da9b0664a8366ce51566cce6842a61e3c74785217773f630d372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6012ad1016da9b0664a8366ce51566cce6842a61e3c74785217773f630d372->enter($__internal_bd6012ad1016da9b0664a8366ce51566cce6842a61e3c74785217773f630d372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/boolean.html.twig"));

        $__internal_2dc3d2ba49c116a289f064167abcb29a445c343233b1da8eac7e8cc71690bf09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc3d2ba49c116a289f064167abcb29a445c343233b1da8eac7e8cc71690bf09->enter($__internal_2dc3d2ba49c116a289f064167abcb29a445c343233b1da8eac7e8cc71690bf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd6012ad1016da9b0664a8366ce51566cce6842a61e3c74785217773f630d372->leave($__internal_bd6012ad1016da9b0664a8366ce51566cce6842a61e3c74785217773f630d372_prof);

        
        $__internal_2dc3d2ba49c116a289f064167abcb29a445c343233b1da8eac7e8cc71690bf09->leave($__internal_2dc3d2ba49c116a289f064167abcb29a445c343233b1da8eac7e8cc71690bf09_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_3b84cfe71ea0a14c3ecb544b49198de3e28430078aae3854aac9a5c2d51fa49a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b84cfe71ea0a14c3ecb544b49198de3e28430078aae3854aac9a5c2d51fa49a->enter($__internal_3b84cfe71ea0a14c3ecb544b49198de3e28430078aae3854aac9a5c2d51fa49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_e77a8b9632ab5360479520a8859ee74d3e1009720653481b2de2a594ac986434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77a8b9632ab5360479520a8859ee74d3e1009720653481b2de2a594ac986434->enter($__internal_e77a8b9632ab5360479520a8859ee74d3e1009720653481b2de2a594ac986434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_e77a8b9632ab5360479520a8859ee74d3e1009720653481b2de2a594ac986434->leave($__internal_e77a8b9632ab5360479520a8859ee74d3e1009720653481b2de2a594ac986434_prof);

        
        $__internal_3b84cfe71ea0a14c3ecb544b49198de3e28430078aae3854aac9a5c2d51fa49a->leave($__internal_3b84cfe71ea0a14c3ecb544b49198de3e28430078aae3854aac9a5c2d51fa49a_prof);

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
