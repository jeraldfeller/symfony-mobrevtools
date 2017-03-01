<?php

/* @SgDatatables/Column/image.html.twig */
class __TwigTemplate_c4759359278d173f668354e28d71982e51066ef6deac95441b2d426739ccb912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "@SgDatatables/Column/image.html.twig", 9);
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
        $__internal_dedadbf232aebef1779107b96d9d9f1481732403eab9b2b837d87b0c90f0e9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dedadbf232aebef1779107b96d9d9f1481732403eab9b2b837d87b0c90f0e9d9->enter($__internal_dedadbf232aebef1779107b96d9d9f1481732403eab9b2b837d87b0c90f0e9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/image.html.twig"));

        $__internal_54d6c721b0690dff0fc849d730e95837b366780b7e2cfe3866bb0648a82b49f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d6c721b0690dff0fc849d730e95837b366780b7e2cfe3866bb0648a82b49f1->enter($__internal_54d6c721b0690dff0fc849d730e95837b366780b7e2cfe3866bb0648a82b49f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dedadbf232aebef1779107b96d9d9f1481732403eab9b2b837d87b0c90f0e9d9->leave($__internal_dedadbf232aebef1779107b96d9d9f1481732403eab9b2b837d87b0c90f0e9d9_prof);

        
        $__internal_54d6c721b0690dff0fc849d730e95837b366780b7e2cfe3866bb0648a82b49f1->leave($__internal_54d6c721b0690dff0fc849d730e95837b366780b7e2cfe3866bb0648a82b49f1_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_00925a541fb66ff5c00285bcaa72a5acd700f687092d12575eedef856b479555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00925a541fb66ff5c00285bcaa72a5acd700f687092d12575eedef856b479555->enter($__internal_00925a541fb66ff5c00285bcaa72a5acd700f687092d12575eedef856b479555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_ceb50934a68b4c282e9cc4d415a8060a46fd462fc5c5b88d9a13c26e700e83c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb50934a68b4c282e9cc4d415a8060a46fd462fc5c5b88d9a13c26e700e83c8->enter($__internal_ceb50934a68b4c282e9cc4d415a8060a46fd462fc5c5b88d9a13c26e700e83c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_ceb50934a68b4c282e9cc4d415a8060a46fd462fc5c5b88d9a13c26e700e83c8->leave($__internal_ceb50934a68b4c282e9cc4d415a8060a46fd462fc5c5b88d9a13c26e700e83c8_prof);

        
        $__internal_00925a541fb66ff5c00285bcaa72a5acd700f687092d12575eedef856b479555->leave($__internal_00925a541fb66ff5c00285bcaa72a5acd700f687092d12575eedef856b479555_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Column/image.html.twig";
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
", "@SgDatatables/Column/image.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Column\\image.html.twig");
    }
}
