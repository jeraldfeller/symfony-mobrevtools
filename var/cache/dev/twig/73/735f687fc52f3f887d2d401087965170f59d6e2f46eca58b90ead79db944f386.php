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
        $__internal_623861fe4140e5f0f51cb4210aea276f5e54a1972fd1f1289ffc3da91dc0584d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623861fe4140e5f0f51cb4210aea276f5e54a1972fd1f1289ffc3da91dc0584d->enter($__internal_623861fe4140e5f0f51cb4210aea276f5e54a1972fd1f1289ffc3da91dc0584d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_text.html.twig"));

        $__internal_d00c73a9593351b4b90d9ebd4e1036aefb1163ba75a28314cfe95c0dc58a7e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00c73a9593351b4b90d9ebd4e1036aefb1163ba75a28314cfe95c0dc58a7e28->enter($__internal_d00c73a9593351b4b90d9ebd4e1036aefb1163ba75a28314cfe95c0dc58a7e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_text.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_623861fe4140e5f0f51cb4210aea276f5e54a1972fd1f1289ffc3da91dc0584d->leave($__internal_623861fe4140e5f0f51cb4210aea276f5e54a1972fd1f1289ffc3da91dc0584d_prof);

        
        $__internal_d00c73a9593351b4b90d9ebd4e1036aefb1163ba75a28314cfe95c0dc58a7e28->leave($__internal_d00c73a9593351b4b90d9ebd4e1036aefb1163ba75a28314cfe95c0dc58a7e28_prof);

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
