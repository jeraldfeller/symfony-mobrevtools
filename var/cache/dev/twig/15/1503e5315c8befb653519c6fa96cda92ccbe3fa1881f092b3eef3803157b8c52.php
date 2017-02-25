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
        $__internal_5ae60196a328f8d1c674fbbb65a10cab12ab21a016f8f9f4f303aebcbbcfcbfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae60196a328f8d1c674fbbb65a10cab12ab21a016f8f9f4f303aebcbbcfcbfd->enter($__internal_5ae60196a328f8d1c674fbbb65a10cab12ab21a016f8f9f4f303aebcbbcfcbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_text.html.twig"));

        $__internal_15a0d5e3ec9b683b07e5a5f584e188a8717131fc1d12ce7d2ea52bb6dd327ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a0d5e3ec9b683b07e5a5f584e188a8717131fc1d12ce7d2ea52bb6dd327ba0->enter($__internal_15a0d5e3ec9b683b07e5a5f584e188a8717131fc1d12ce7d2ea52bb6dd327ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_text.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ae60196a328f8d1c674fbbb65a10cab12ab21a016f8f9f4f303aebcbbcfcbfd->leave($__internal_5ae60196a328f8d1c674fbbb65a10cab12ab21a016f8f9f4f303aebcbbcfcbfd_prof);

        
        $__internal_15a0d5e3ec9b683b07e5a5f584e188a8717131fc1d12ce7d2ea52bb6dd327ba0->leave($__internal_15a0d5e3ec9b683b07e5a5f584e188a8717131fc1d12ce7d2ea52bb6dd327ba0_prof);

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
