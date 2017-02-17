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
        $__internal_1795e1d7d3912f6518c6000e57455df34beabb587984bbb28cc6cf437f725646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1795e1d7d3912f6518c6000e57455df34beabb587984bbb28cc6cf437f725646->enter($__internal_1795e1d7d3912f6518c6000e57455df34beabb587984bbb28cc6cf437f725646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:datetime.html.twig"));

        $__internal_119690fb648f2b6778d2d299b003dd41d6a6f92f32823a9679bd3da3d470eb82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119690fb648f2b6778d2d299b003dd41d6a6f92f32823a9679bd3da3d470eb82->enter($__internal_119690fb648f2b6778d2d299b003dd41d6a6f92f32823a9679bd3da3d470eb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1795e1d7d3912f6518c6000e57455df34beabb587984bbb28cc6cf437f725646->leave($__internal_1795e1d7d3912f6518c6000e57455df34beabb587984bbb28cc6cf437f725646_prof);

        
        $__internal_119690fb648f2b6778d2d299b003dd41d6a6f92f32823a9679bd3da3d470eb82->leave($__internal_119690fb648f2b6778d2d299b003dd41d6a6f92f32823a9679bd3da3d470eb82_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_1029d1be3ab0b2d823691cf4a74d566bc68038651e59df75b243fc906310c45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1029d1be3ab0b2d823691cf4a74d566bc68038651e59df75b243fc906310c45c->enter($__internal_1029d1be3ab0b2d823691cf4a74d566bc68038651e59df75b243fc906310c45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_0e6f5b3a35ce908eba3fef3930e9ea227a912aec5f5bba1e04f7749f879a184b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6f5b3a35ce908eba3fef3930e9ea227a912aec5f5bba1e04f7749f879a184b->enter($__internal_0e6f5b3a35ce908eba3fef3930e9ea227a912aec5f5bba1e04f7749f879a184b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_0e6f5b3a35ce908eba3fef3930e9ea227a912aec5f5bba1e04f7749f879a184b->leave($__internal_0e6f5b3a35ce908eba3fef3930e9ea227a912aec5f5bba1e04f7749f879a184b_prof);

        
        $__internal_1029d1be3ab0b2d823691cf4a74d566bc68038651e59df75b243fc906310c45c->leave($__internal_1029d1be3ab0b2d823691cf4a74d566bc68038651e59df75b243fc906310c45c_prof);

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
