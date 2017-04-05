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
        $__internal_17b500882c65d9cd26de24655d5fa4b7d61c295cf3a989889eb07ab82985659d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b500882c65d9cd26de24655d5fa4b7d61c295cf3a989889eb07ab82985659d->enter($__internal_17b500882c65d9cd26de24655d5fa4b7d61c295cf3a989889eb07ab82985659d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $__internal_b7175e08f5e3ed866316ce06b156658a07275a759d330c281bc1c3a86253993a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7175e08f5e3ed866316ce06b156658a07275a759d330c281bc1c3a86253993a->enter($__internal_b7175e08f5e3ed866316ce06b156658a07275a759d330c281bc1c3a86253993a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17b500882c65d9cd26de24655d5fa4b7d61c295cf3a989889eb07ab82985659d->leave($__internal_17b500882c65d9cd26de24655d5fa4b7d61c295cf3a989889eb07ab82985659d_prof);

        
        $__internal_b7175e08f5e3ed866316ce06b156658a07275a759d330c281bc1c3a86253993a->leave($__internal_b7175e08f5e3ed866316ce06b156658a07275a759d330c281bc1c3a86253993a_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_95f0836f0afb548da619529e609cb57594d148b044dd27342e0c1a718330b0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f0836f0afb548da619529e609cb57594d148b044dd27342e0c1a718330b0eb->enter($__internal_95f0836f0afb548da619529e609cb57594d148b044dd27342e0c1a718330b0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_4815f8443043503380f5b7c27b0fccdac2d3fb175016cd3595232fadd8a08882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4815f8443043503380f5b7c27b0fccdac2d3fb175016cd3595232fadd8a08882->enter($__internal_4815f8443043503380f5b7c27b0fccdac2d3fb175016cd3595232fadd8a08882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_4815f8443043503380f5b7c27b0fccdac2d3fb175016cd3595232fadd8a08882->leave($__internal_4815f8443043503380f5b7c27b0fccdac2d3fb175016cd3595232fadd8a08882_prof);

        
        $__internal_95f0836f0afb548da619529e609cb57594d148b044dd27342e0c1a718330b0eb->leave($__internal_95f0836f0afb548da619529e609cb57594d148b044dd27342e0c1a718330b0eb_prof);

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
