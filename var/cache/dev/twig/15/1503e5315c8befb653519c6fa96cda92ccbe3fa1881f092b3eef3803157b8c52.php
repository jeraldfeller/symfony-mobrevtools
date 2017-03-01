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
        $__internal_2cf9a1e5d7228aa617d02ccc8620a4af32af3b0aded98659603f02bb2ac80b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf9a1e5d7228aa617d02ccc8620a4af32af3b0aded98659603f02bb2ac80b12->enter($__internal_2cf9a1e5d7228aa617d02ccc8620a4af32af3b0aded98659603f02bb2ac80b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_text.html.twig"));

        $__internal_afed81ad4750d044325bf7e15f8b017478e758bfc7e37af5e72e3be73d621370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afed81ad4750d044325bf7e15f8b017478e758bfc7e37af5e72e3be73d621370->enter($__internal_afed81ad4750d044325bf7e15f8b017478e758bfc7e37af5e72e3be73d621370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_text.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf9a1e5d7228aa617d02ccc8620a4af32af3b0aded98659603f02bb2ac80b12->leave($__internal_2cf9a1e5d7228aa617d02ccc8620a4af32af3b0aded98659603f02bb2ac80b12_prof);

        
        $__internal_afed81ad4750d044325bf7e15f8b017478e758bfc7e37af5e72e3be73d621370->leave($__internal_afed81ad4750d044325bf7e15f8b017478e758bfc7e37af5e72e3be73d621370_prof);

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
