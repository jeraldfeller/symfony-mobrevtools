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
        $__internal_c7c049bf4653963de4b9f2425001757922d72d7ff2e8113bd33dbed82a3980ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c049bf4653963de4b9f2425001757922d72d7ff2e8113bd33dbed82a3980ab->enter($__internal_c7c049bf4653963de4b9f2425001757922d72d7ff2e8113bd33dbed82a3980ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_text.html.twig"));

        $__internal_9b42c69566f0890a7ef96eb1bfbce15c05e3e78dbc3a71f31f1f6008e8d8e329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b42c69566f0890a7ef96eb1bfbce15c05e3e78dbc3a71f31f1f6008e8d8e329->enter($__internal_9b42c69566f0890a7ef96eb1bfbce15c05e3e78dbc3a71f31f1f6008e8d8e329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_text.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7c049bf4653963de4b9f2425001757922d72d7ff2e8113bd33dbed82a3980ab->leave($__internal_c7c049bf4653963de4b9f2425001757922d72d7ff2e8113bd33dbed82a3980ab_prof);

        
        $__internal_9b42c69566f0890a7ef96eb1bfbce15c05e3e78dbc3a71f31f1f6008e8d8e329->leave($__internal_9b42c69566f0890a7ef96eb1bfbce15c05e3e78dbc3a71f31f1f6008e8d8e329_prof);

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
