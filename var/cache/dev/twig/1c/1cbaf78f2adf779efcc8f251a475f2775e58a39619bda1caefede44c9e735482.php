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
        $__internal_22323f7b687dc12a073679dc09d33cebcc761c2cc413bcba4f01909dede1dc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22323f7b687dc12a073679dc09d33cebcc761c2cc413bcba4f01909dede1dc6f->enter($__internal_22323f7b687dc12a073679dc09d33cebcc761c2cc413bcba4f01909dede1dc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/datetime.html.twig"));

        $__internal_4e5c7060b791b39215152abb046cb4346002d07be437cc4a839147e62e317c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5c7060b791b39215152abb046cb4346002d07be437cc4a839147e62e317c66->enter($__internal_4e5c7060b791b39215152abb046cb4346002d07be437cc4a839147e62e317c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22323f7b687dc12a073679dc09d33cebcc761c2cc413bcba4f01909dede1dc6f->leave($__internal_22323f7b687dc12a073679dc09d33cebcc761c2cc413bcba4f01909dede1dc6f_prof);

        
        $__internal_4e5c7060b791b39215152abb046cb4346002d07be437cc4a839147e62e317c66->leave($__internal_4e5c7060b791b39215152abb046cb4346002d07be437cc4a839147e62e317c66_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_765ddf3bccded0c9d6dcfeacac54d272cbb3651380fec27b2d4ef8c467882429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765ddf3bccded0c9d6dcfeacac54d272cbb3651380fec27b2d4ef8c467882429->enter($__internal_765ddf3bccded0c9d6dcfeacac54d272cbb3651380fec27b2d4ef8c467882429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_3e2f5bcb8e2a1e87c66d5333a891515416f2f2ab30cfe47937a01ed965c2d91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2f5bcb8e2a1e87c66d5333a891515416f2f2ab30cfe47937a01ed965c2d91f->enter($__internal_3e2f5bcb8e2a1e87c66d5333a891515416f2f2ab30cfe47937a01ed965c2d91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_3e2f5bcb8e2a1e87c66d5333a891515416f2f2ab30cfe47937a01ed965c2d91f->leave($__internal_3e2f5bcb8e2a1e87c66d5333a891515416f2f2ab30cfe47937a01ed965c2d91f_prof);

        
        $__internal_765ddf3bccded0c9d6dcfeacac54d272cbb3651380fec27b2d4ef8c467882429->leave($__internal_765ddf3bccded0c9d6dcfeacac54d272cbb3651380fec27b2d4ef8c467882429_prof);

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
