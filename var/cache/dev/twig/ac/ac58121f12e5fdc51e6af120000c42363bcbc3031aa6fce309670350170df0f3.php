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
        $__internal_fa16ec6cc1ea62cde6fbc8e135960d4f2ddecd4edec0b4f031f7f02c910022af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa16ec6cc1ea62cde6fbc8e135960d4f2ddecd4edec0b4f031f7f02c910022af->enter($__internal_fa16ec6cc1ea62cde6fbc8e135960d4f2ddecd4edec0b4f031f7f02c910022af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $__internal_5d0ccebd71f551b2e28bae12ae592a8b83c9704c35d6226c6a2a51afc74bfbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0ccebd71f551b2e28bae12ae592a8b83c9704c35d6226c6a2a51afc74bfbdb->enter($__internal_5d0ccebd71f551b2e28bae12ae592a8b83c9704c35d6226c6a2a51afc74bfbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa16ec6cc1ea62cde6fbc8e135960d4f2ddecd4edec0b4f031f7f02c910022af->leave($__internal_fa16ec6cc1ea62cde6fbc8e135960d4f2ddecd4edec0b4f031f7f02c910022af_prof);

        
        $__internal_5d0ccebd71f551b2e28bae12ae592a8b83c9704c35d6226c6a2a51afc74bfbdb->leave($__internal_5d0ccebd71f551b2e28bae12ae592a8b83c9704c35d6226c6a2a51afc74bfbdb_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_e1a62ded2a31e9e32f3bd27511c881c8fe8219228ff499e99477fe6d262e0906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a62ded2a31e9e32f3bd27511c881c8fe8219228ff499e99477fe6d262e0906->enter($__internal_e1a62ded2a31e9e32f3bd27511c881c8fe8219228ff499e99477fe6d262e0906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_ce2ed5f26b52fd62f22b596c394be6d5489e14686be2bbac4e794714a4883241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2ed5f26b52fd62f22b596c394be6d5489e14686be2bbac4e794714a4883241->enter($__internal_ce2ed5f26b52fd62f22b596c394be6d5489e14686be2bbac4e794714a4883241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_ce2ed5f26b52fd62f22b596c394be6d5489e14686be2bbac4e794714a4883241->leave($__internal_ce2ed5f26b52fd62f22b596c394be6d5489e14686be2bbac4e794714a4883241_prof);

        
        $__internal_e1a62ded2a31e9e32f3bd27511c881c8fe8219228ff499e99477fe6d262e0906->leave($__internal_e1a62ded2a31e9e32f3bd27511c881c8fe8219228ff499e99477fe6d262e0906_prof);

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
