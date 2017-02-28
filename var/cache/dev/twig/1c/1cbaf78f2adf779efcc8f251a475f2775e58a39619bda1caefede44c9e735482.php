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
        $__internal_4e9b29af16c9447cbb28fd68ebcc7b47c88d0cf10b5b65186d89f84402f24698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9b29af16c9447cbb28fd68ebcc7b47c88d0cf10b5b65186d89f84402f24698->enter($__internal_4e9b29af16c9447cbb28fd68ebcc7b47c88d0cf10b5b65186d89f84402f24698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/datetime.html.twig"));

        $__internal_9d5e97a003924967148118aead6044f150df02088a5bb16ddd75175d3da17f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5e97a003924967148118aead6044f150df02088a5bb16ddd75175d3da17f5a->enter($__internal_9d5e97a003924967148118aead6044f150df02088a5bb16ddd75175d3da17f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e9b29af16c9447cbb28fd68ebcc7b47c88d0cf10b5b65186d89f84402f24698->leave($__internal_4e9b29af16c9447cbb28fd68ebcc7b47c88d0cf10b5b65186d89f84402f24698_prof);

        
        $__internal_9d5e97a003924967148118aead6044f150df02088a5bb16ddd75175d3da17f5a->leave($__internal_9d5e97a003924967148118aead6044f150df02088a5bb16ddd75175d3da17f5a_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_0ef6731cc53cd47a13302f088efc62adb5c420275eb1468e1118d31c61266180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef6731cc53cd47a13302f088efc62adb5c420275eb1468e1118d31c61266180->enter($__internal_0ef6731cc53cd47a13302f088efc62adb5c420275eb1468e1118d31c61266180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_768dbedd92061719cd2e6e6276217a8fca61b35151bf0976ce960be1ba1b8c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768dbedd92061719cd2e6e6276217a8fca61b35151bf0976ce960be1ba1b8c55->enter($__internal_768dbedd92061719cd2e6e6276217a8fca61b35151bf0976ce960be1ba1b8c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_768dbedd92061719cd2e6e6276217a8fca61b35151bf0976ce960be1ba1b8c55->leave($__internal_768dbedd92061719cd2e6e6276217a8fca61b35151bf0976ce960be1ba1b8c55_prof);

        
        $__internal_0ef6731cc53cd47a13302f088efc62adb5c420275eb1468e1118d31c61266180->leave($__internal_0ef6731cc53cd47a13302f088efc62adb5c420275eb1468e1118d31c61266180_prof);

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
