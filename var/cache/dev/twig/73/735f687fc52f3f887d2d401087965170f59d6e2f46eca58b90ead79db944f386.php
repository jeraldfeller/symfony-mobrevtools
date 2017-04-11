<?php

/* @SgDatatables/Filters/filter_text.html.twig */
class __TwigTemplate_ae54dcdea4a633430c1a1006294d8d538958a9ac2480335ef3862e76394179b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Filters:filter.html.twig", "@SgDatatables/Filters/filter_text.html.twig", 9);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Filters:filter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5519c9d7161313749a331104967ca61beced3673a1235cae1c6e71707e09cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5519c9d7161313749a331104967ca61beced3673a1235cae1c6e71707e09cda->enter($__internal_a5519c9d7161313749a331104967ca61beced3673a1235cae1c6e71707e09cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_text.html.twig"));

        $__internal_727eefb11cc70df41f7f926111fd47b80cad14f1f067ef41474a163d9efebd88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727eefb11cc70df41f7f926111fd47b80cad14f1f067ef41474a163d9efebd88->enter($__internal_727eefb11cc70df41f7f926111fd47b80cad14f1f067ef41474a163d9efebd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_text.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5519c9d7161313749a331104967ca61beced3673a1235cae1c6e71707e09cda->leave($__internal_a5519c9d7161313749a331104967ca61beced3673a1235cae1c6e71707e09cda_prof);

        
        $__internal_727eefb11cc70df41f7f926111fd47b80cad14f1f067ef41474a163d9efebd88->leave($__internal_727eefb11cc70df41f7f926111fd47b80cad14f1f067ef41474a163d9efebd88_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Filters/filter_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 9,);
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
{% extends 'SgDatatablesBundle:Filters:filter.html.twig' %}
", "@SgDatatables/Filters/filter_text.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Filters\\filter_text.html.twig");
    }
}
