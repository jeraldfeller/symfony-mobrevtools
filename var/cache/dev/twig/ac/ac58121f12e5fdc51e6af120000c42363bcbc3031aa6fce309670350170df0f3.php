<?php

/* SgDatatablesBundle:Column:image.html.twig */
class __TwigTemplate_aecbbd3842bc34b86975959503278ddd568cafbba66f82b6247ea0f762e0eae5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:image.html.twig", 9);
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
        $__internal_43ba5aa83aebb4b5d72614554cd12fca01730db093dbd775493e81324d3c8fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ba5aa83aebb4b5d72614554cd12fca01730db093dbd775493e81324d3c8fa4->enter($__internal_43ba5aa83aebb4b5d72614554cd12fca01730db093dbd775493e81324d3c8fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $__internal_0d74c7d6fbf8f0c1c2721f71146e852bbdbe18dff1f2b0e7f74375a789665f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d74c7d6fbf8f0c1c2721f71146e852bbdbe18dff1f2b0e7f74375a789665f49->enter($__internal_0d74c7d6fbf8f0c1c2721f71146e852bbdbe18dff1f2b0e7f74375a789665f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43ba5aa83aebb4b5d72614554cd12fca01730db093dbd775493e81324d3c8fa4->leave($__internal_43ba5aa83aebb4b5d72614554cd12fca01730db093dbd775493e81324d3c8fa4_prof);

        
        $__internal_0d74c7d6fbf8f0c1c2721f71146e852bbdbe18dff1f2b0e7f74375a789665f49->leave($__internal_0d74c7d6fbf8f0c1c2721f71146e852bbdbe18dff1f2b0e7f74375a789665f49_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_02a9e4788275a5582849944847494cb14bdf871072d7ac58b623da0c5aa964b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a9e4788275a5582849944847494cb14bdf871072d7ac58b623da0c5aa964b7->enter($__internal_02a9e4788275a5582849944847494cb14bdf871072d7ac58b623da0c5aa964b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_7f24e30022bb3956bced48f8c5c8d4a5a45ca1fb1232ca93b820705a1058cbc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f24e30022bb3956bced48f8c5c8d4a5a45ca1fb1232ca93b820705a1058cbc5->enter($__internal_7f24e30022bb3956bced48f8c5c8d4a5a45ca1fb1232ca93b820705a1058cbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        // line 13
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "isAssociation", array())) {
            // line 14
            echo "        \"render\": function(data, type, row, meta) {
            if (data === undefined) {
                var str = \"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
            echo "\";
                var res = str.split(\".\");
                return row[res[0]];
            } else {
                return data;
            }
        },
    ";
        }
        
        $__internal_7f24e30022bb3956bced48f8c5c8d4a5a45ca1fb1232ca93b820705a1058cbc5->leave($__internal_7f24e30022bb3956bced48f8c5c8d4a5a45ca1fb1232ca93b820705a1058cbc5_prof);

        
        $__internal_02a9e4788275a5582849944847494cb14bdf871072d7ac58b623da0c5aa964b7->leave($__internal_02a9e4788275a5582849944847494cb14bdf871072d7ac58b623da0c5aa964b7_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  56 => 14,  54 => 13,  49 => 12,  40 => 11,  11 => 9,);
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
    {% if column.isAssociation %}
        \"render\": function(data, type, row, meta) {
            if (data === undefined) {
                var str = \"{{ column.data }}\";
                var res = str.split(\".\");
                return row[res[0]];
            } else {
                return data;
            }
        },
    {% endif %}
{% endblock %}
", "SgDatatablesBundle:Column:image.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/image.html.twig");
    }
}
