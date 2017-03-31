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
        $__internal_7be2b2fe986b599f0b540cf59b99f3b2e2e5436115d3dcad8f24283c557f6d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be2b2fe986b599f0b540cf59b99f3b2e2e5436115d3dcad8f24283c557f6d09->enter($__internal_7be2b2fe986b599f0b540cf59b99f3b2e2e5436115d3dcad8f24283c557f6d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $__internal_0b7b833bb9186a8f3c8715469288e87c6b880aa1c59a1fd669e3c524b9725ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7b833bb9186a8f3c8715469288e87c6b880aa1c59a1fd669e3c524b9725ca3->enter($__internal_0b7b833bb9186a8f3c8715469288e87c6b880aa1c59a1fd669e3c524b9725ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7be2b2fe986b599f0b540cf59b99f3b2e2e5436115d3dcad8f24283c557f6d09->leave($__internal_7be2b2fe986b599f0b540cf59b99f3b2e2e5436115d3dcad8f24283c557f6d09_prof);

        
        $__internal_0b7b833bb9186a8f3c8715469288e87c6b880aa1c59a1fd669e3c524b9725ca3->leave($__internal_0b7b833bb9186a8f3c8715469288e87c6b880aa1c59a1fd669e3c524b9725ca3_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_943f57398b7e99f823b8a734ea578932002c736413088163e84e3d26d023db07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943f57398b7e99f823b8a734ea578932002c736413088163e84e3d26d023db07->enter($__internal_943f57398b7e99f823b8a734ea578932002c736413088163e84e3d26d023db07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_955172d7c8baf970412b28b1b250d005196eeb1cb5fb881182669f7cc4f7f5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955172d7c8baf970412b28b1b250d005196eeb1cb5fb881182669f7cc4f7f5c3->enter($__internal_955172d7c8baf970412b28b1b250d005196eeb1cb5fb881182669f7cc4f7f5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_955172d7c8baf970412b28b1b250d005196eeb1cb5fb881182669f7cc4f7f5c3->leave($__internal_955172d7c8baf970412b28b1b250d005196eeb1cb5fb881182669f7cc4f7f5c3_prof);

        
        $__internal_943f57398b7e99f823b8a734ea578932002c736413088163e84e3d26d023db07->leave($__internal_943f57398b7e99f823b8a734ea578932002c736413088163e84e3d26d023db07_prof);

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
