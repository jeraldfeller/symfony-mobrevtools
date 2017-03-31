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
        $__internal_75cfbe0d104127bac3434958cf76de4211cef6740dac33962252bc58f52f58d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75cfbe0d104127bac3434958cf76de4211cef6740dac33962252bc58f52f58d1->enter($__internal_75cfbe0d104127bac3434958cf76de4211cef6740dac33962252bc58f52f58d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/image.html.twig"));

        $__internal_dde28447f66a3129d12526b31d4e8e7f206c1db8e3053aee6ef403266b7b6605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde28447f66a3129d12526b31d4e8e7f206c1db8e3053aee6ef403266b7b6605->enter($__internal_dde28447f66a3129d12526b31d4e8e7f206c1db8e3053aee6ef403266b7b6605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75cfbe0d104127bac3434958cf76de4211cef6740dac33962252bc58f52f58d1->leave($__internal_75cfbe0d104127bac3434958cf76de4211cef6740dac33962252bc58f52f58d1_prof);

        
        $__internal_dde28447f66a3129d12526b31d4e8e7f206c1db8e3053aee6ef403266b7b6605->leave($__internal_dde28447f66a3129d12526b31d4e8e7f206c1db8e3053aee6ef403266b7b6605_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_bb2839912cf24605c185a70426496dcc625b227486647a8733be49961906146a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb2839912cf24605c185a70426496dcc625b227486647a8733be49961906146a->enter($__internal_bb2839912cf24605c185a70426496dcc625b227486647a8733be49961906146a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_f698339045feb76ea7a8a611cfab9ebf1a2122e6a541e844be23f553d7e4d1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f698339045feb76ea7a8a611cfab9ebf1a2122e6a541e844be23f553d7e4d1f7->enter($__internal_f698339045feb76ea7a8a611cfab9ebf1a2122e6a541e844be23f553d7e4d1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_f698339045feb76ea7a8a611cfab9ebf1a2122e6a541e844be23f553d7e4d1f7->leave($__internal_f698339045feb76ea7a8a611cfab9ebf1a2122e6a541e844be23f553d7e4d1f7_prof);

        
        $__internal_bb2839912cf24605c185a70426496dcc625b227486647a8733be49961906146a->leave($__internal_bb2839912cf24605c185a70426496dcc625b227486647a8733be49961906146a_prof);

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
