<?php

/* SgDatatablesBundle:Filters:filter_text.html.twig */
class __TwigTemplate_8392d38bb5cf6289ebad56b1af8f6a07d40f96bd2e6b6e05ba0e59104ded7b05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Filters:filter.html.twig", "SgDatatablesBundle:Filters:filter_text.html.twig", 9);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Filters:filter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3df2104a57d1a708f546a9354cc07b1b5e9de7aa526b13a251ce26316401ee1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df2104a57d1a708f546a9354cc07b1b5e9de7aa526b13a251ce26316401ee1f->enter($__internal_3df2104a57d1a708f546a9354cc07b1b5e9de7aa526b13a251ce26316401ee1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_text.html.twig"));

        $__internal_c914231d0c9e85630c1055306fb55cacaacc5c87c3a52c29da8b8900dd78daf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c914231d0c9e85630c1055306fb55cacaacc5c87c3a52c29da8b8900dd78daf7->enter($__internal_c914231d0c9e85630c1055306fb55cacaacc5c87c3a52c29da8b8900dd78daf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_text.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3df2104a57d1a708f546a9354cc07b1b5e9de7aa526b13a251ce26316401ee1f->leave($__internal_3df2104a57d1a708f546a9354cc07b1b5e9de7aa526b13a251ce26316401ee1f_prof);

        
        $__internal_c914231d0c9e85630c1055306fb55cacaacc5c87c3a52c29da8b8900dd78daf7->leave($__internal_c914231d0c9e85630c1055306fb55cacaacc5c87c3a52c29da8b8900dd78daf7_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Filters:filter_text.html.twig";
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
", "SgDatatablesBundle:Filters:filter_text.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Filters/filter_text.html.twig");
    }
}
