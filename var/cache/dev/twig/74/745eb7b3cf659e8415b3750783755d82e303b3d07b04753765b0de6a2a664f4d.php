<?php

/* @SgDatatables/Column/timeago.html.twig */
class __TwigTemplate_bf89322f0377173bb882342daa36a11b73b249bc49712d6b01d5cb21c972f82f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "@SgDatatables/Column/timeago.html.twig", 9);
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
        $__internal_3be1440bcaac8efa237463611d31e063a8539e462d2ba9c06b1d0aec591c3d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be1440bcaac8efa237463611d31e063a8539e462d2ba9c06b1d0aec591c3d56->enter($__internal_3be1440bcaac8efa237463611d31e063a8539e462d2ba9c06b1d0aec591c3d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $__internal_437ac4bfa2b5224ea44071c0ef98e5604bad720ac4abf66c45d874b5ded8b541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437ac4bfa2b5224ea44071c0ef98e5604bad720ac4abf66c45d874b5ded8b541->enter($__internal_437ac4bfa2b5224ea44071c0ef98e5604bad720ac4abf66c45d874b5ded8b541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3be1440bcaac8efa237463611d31e063a8539e462d2ba9c06b1d0aec591c3d56->leave($__internal_3be1440bcaac8efa237463611d31e063a8539e462d2ba9c06b1d0aec591c3d56_prof);

        
        $__internal_437ac4bfa2b5224ea44071c0ef98e5604bad720ac4abf66c45d874b5ded8b541->leave($__internal_437ac4bfa2b5224ea44071c0ef98e5604bad720ac4abf66c45d874b5ded8b541_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_6a8db5d22085cad2f4522eae5fa9f8ad8fcba591a4b4e2cb4b2b4f8dc00e9010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a8db5d22085cad2f4522eae5fa9f8ad8fcba591a4b4e2cb4b2b4f8dc00e9010->enter($__internal_6a8db5d22085cad2f4522eae5fa9f8ad8fcba591a4b4e2cb4b2b4f8dc00e9010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_18c7e6fe671611a853a31a8a412a770bf20019aaa015001d861c3c6c7af2879b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c7e6fe671611a853a31a8a412a770bf20019aaa015001d861c3c6c7af2879b->enter($__internal_18c7e6fe671611a853a31a8a412a770bf20019aaa015001d861c3c6c7af2879b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    \"render\": function(data, type, row, meta) {
        return ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array()), "html", null, true);
        echo "(data, type, row, meta);
    },
";
        
        $__internal_18c7e6fe671611a853a31a8a412a770bf20019aaa015001d861c3c6c7af2879b->leave($__internal_18c7e6fe671611a853a31a8a412a770bf20019aaa015001d861c3c6c7af2879b_prof);

        
        $__internal_6a8db5d22085cad2f4522eae5fa9f8ad8fcba591a4b4e2cb4b2b4f8dc00e9010->leave($__internal_6a8db5d22085cad2f4522eae5fa9f8ad8fcba591a4b4e2cb4b2b4f8dc00e9010_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Column/timeago.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  49 => 12,  40 => 11,  11 => 9,);
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
    \"render\": function(data, type, row, meta) {
        return {{ column.render }}(data, type, row, meta);
    },
{% endblock %}
", "@SgDatatables/Column/timeago.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Column\\timeago.html.twig");
    }
}
