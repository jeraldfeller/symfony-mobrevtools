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
        $__internal_60f6f527115528a4b6989a431ab72e6d90c70706b74cb3192844f6eb7695c4ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f6f527115528a4b6989a431ab72e6d90c70706b74cb3192844f6eb7695c4ad->enter($__internal_60f6f527115528a4b6989a431ab72e6d90c70706b74cb3192844f6eb7695c4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:datetime.html.twig"));

        $__internal_f0aa2ca77a6ccdd1800853b08aefec7f1bddc982f751aca3547acfeb2baff402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0aa2ca77a6ccdd1800853b08aefec7f1bddc982f751aca3547acfeb2baff402->enter($__internal_f0aa2ca77a6ccdd1800853b08aefec7f1bddc982f751aca3547acfeb2baff402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60f6f527115528a4b6989a431ab72e6d90c70706b74cb3192844f6eb7695c4ad->leave($__internal_60f6f527115528a4b6989a431ab72e6d90c70706b74cb3192844f6eb7695c4ad_prof);

        
        $__internal_f0aa2ca77a6ccdd1800853b08aefec7f1bddc982f751aca3547acfeb2baff402->leave($__internal_f0aa2ca77a6ccdd1800853b08aefec7f1bddc982f751aca3547acfeb2baff402_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_9817ed3f631d35a0b12fcb11903bdc8d0a03dd9ac22be5c8cee3dbfda4ab3743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9817ed3f631d35a0b12fcb11903bdc8d0a03dd9ac22be5c8cee3dbfda4ab3743->enter($__internal_9817ed3f631d35a0b12fcb11903bdc8d0a03dd9ac22be5c8cee3dbfda4ab3743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_3f6033cd16f496a93a864d179fa0adac538a381c991091cf305d622136a17ccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6033cd16f496a93a864d179fa0adac538a381c991091cf305d622136a17ccd->enter($__internal_3f6033cd16f496a93a864d179fa0adac538a381c991091cf305d622136a17ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_3f6033cd16f496a93a864d179fa0adac538a381c991091cf305d622136a17ccd->leave($__internal_3f6033cd16f496a93a864d179fa0adac538a381c991091cf305d622136a17ccd_prof);

        
        $__internal_9817ed3f631d35a0b12fcb11903bdc8d0a03dd9ac22be5c8cee3dbfda4ab3743->leave($__internal_9817ed3f631d35a0b12fcb11903bdc8d0a03dd9ac22be5c8cee3dbfda4ab3743_prof);

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
