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
        $__internal_624b8442f481e4d10dd4b24bf45177900a447e3b2a3a5fa3bea9f9a0e6d819a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624b8442f481e4d10dd4b24bf45177900a447e3b2a3a5fa3bea9f9a0e6d819a7->enter($__internal_624b8442f481e4d10dd4b24bf45177900a447e3b2a3a5fa3bea9f9a0e6d819a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/image.html.twig"));

        $__internal_e1360d19b15a6cc3b606b6c7f87280051803c13db24712fb8738167e17aa98d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1360d19b15a6cc3b606b6c7f87280051803c13db24712fb8738167e17aa98d9->enter($__internal_e1360d19b15a6cc3b606b6c7f87280051803c13db24712fb8738167e17aa98d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_624b8442f481e4d10dd4b24bf45177900a447e3b2a3a5fa3bea9f9a0e6d819a7->leave($__internal_624b8442f481e4d10dd4b24bf45177900a447e3b2a3a5fa3bea9f9a0e6d819a7_prof);

        
        $__internal_e1360d19b15a6cc3b606b6c7f87280051803c13db24712fb8738167e17aa98d9->leave($__internal_e1360d19b15a6cc3b606b6c7f87280051803c13db24712fb8738167e17aa98d9_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_f54446c85b36c47fd4ce05f6d4c44309fe2ccb2582d5b0a35ab2f94e8f4c6876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54446c85b36c47fd4ce05f6d4c44309fe2ccb2582d5b0a35ab2f94e8f4c6876->enter($__internal_f54446c85b36c47fd4ce05f6d4c44309fe2ccb2582d5b0a35ab2f94e8f4c6876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_194e576d0a830ebfb8171dd946646aabacc2060418b60f52994d4f7040cd8df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194e576d0a830ebfb8171dd946646aabacc2060418b60f52994d4f7040cd8df0->enter($__internal_194e576d0a830ebfb8171dd946646aabacc2060418b60f52994d4f7040cd8df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_194e576d0a830ebfb8171dd946646aabacc2060418b60f52994d4f7040cd8df0->leave($__internal_194e576d0a830ebfb8171dd946646aabacc2060418b60f52994d4f7040cd8df0_prof);

        
        $__internal_f54446c85b36c47fd4ce05f6d4c44309fe2ccb2582d5b0a35ab2f94e8f4c6876->leave($__internal_f54446c85b36c47fd4ce05f6d4c44309fe2ccb2582d5b0a35ab2f94e8f4c6876_prof);

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
