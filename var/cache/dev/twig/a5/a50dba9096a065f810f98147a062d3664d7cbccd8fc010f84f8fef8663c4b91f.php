<?php

/* SgDatatablesBundle:Column:action.html.twig */
class __TwigTemplate_9ad371ca442dab88f82df2e5a39dfc9583d63567b6a97cffc888d364e9fa67f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:action.html.twig", 9);
        $this->blocks = array(
            'common' => array($this, 'block_common'),
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Column:column.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaf9ed44cf2faca803621d2a9c8deb5d77ab161091af6d949d2821cc2bb611a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf9ed44cf2faca803621d2a9c8deb5d77ab161091af6d949d2821cc2bb611a3->enter($__internal_aaf9ed44cf2faca803621d2a9c8deb5d77ab161091af6d949d2821cc2bb611a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $__internal_29f015b0761be3bfb05531c4f5726e7e5424e81570e480c39b402253dcf65065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f015b0761be3bfb05531c4f5726e7e5424e81570e480c39b402253dcf65065->enter($__internal_29f015b0761be3bfb05531c4f5726e7e5424e81570e480c39b402253dcf65065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaf9ed44cf2faca803621d2a9c8deb5d77ab161091af6d949d2821cc2bb611a3->leave($__internal_aaf9ed44cf2faca803621d2a9c8deb5d77ab161091af6d949d2821cc2bb611a3_prof);

        
        $__internal_29f015b0761be3bfb05531c4f5726e7e5424e81570e480c39b402253dcf65065->leave($__internal_29f015b0761be3bfb05531c4f5726e7e5424e81570e480c39b402253dcf65065_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_86e0d5ea0f1833551f86f8d6980d85cb1b1d1b82df3cdcf2f0bc0fd91765ea07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e0d5ea0f1833551f86f8d6980d85cb1b1d1b82df3cdcf2f0bc0fd91765ea07->enter($__internal_86e0d5ea0f1833551f86f8d6980d85cb1b1d1b82df3cdcf2f0bc0fd91765ea07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_acd7fd70d7006445671dbed7efcae93a68bfa45e96efd6fe2f17c016188d8a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd7fd70d7006445671dbed7efcae93a68bfa45e96efd6fe2f17c016188d8a0d->enter($__internal_acd7fd70d7006445671dbed7efcae93a68bfa45e96efd6fe2f17c016188d8a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        // line 12
        echo "    \"contentPadding\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "padding", array()), "html", null, true);
        echo "\",
    \"defaultContent\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "defaultContent", array()), "html", null, true);
        echo "\",
    \"name\": \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), "html", null, true);
        echo "\",
    \"orderable\": false,
    \"searchable\": false,
    \"title\": \"";
        // line 17
        echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "title", array());
        echo "\",
    ";
        // line 18
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "type", array())) {
            // line 19
            echo "        \"type\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "type", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 21
        echo "    ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "visible", array())) {
            // line 22
            echo "        \"visible\": true,
        \"className\": \"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "class", array()), "html", null, true);
            echo "\",
    ";
        } else {
            // line 25
            echo "        \"visible\": false,
        \"className\": \"never ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "class", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 28
        echo "    \"width\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array()), "html", null, true);
        echo "\",
";
        
        $__internal_acd7fd70d7006445671dbed7efcae93a68bfa45e96efd6fe2f17c016188d8a0d->leave($__internal_acd7fd70d7006445671dbed7efcae93a68bfa45e96efd6fe2f17c016188d8a0d_prof);

        
        $__internal_86e0d5ea0f1833551f86f8d6980d85cb1b1d1b82df3cdcf2f0bc0fd91765ea07->leave($__internal_86e0d5ea0f1833551f86f8d6980d85cb1b1d1b82df3cdcf2f0bc0fd91765ea07_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_c56538d18797c6d24b2595f672fcd8a607aa4bc55efe6f04a03dfdea63d0d11a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c56538d18797c6d24b2595f672fcd8a607aa4bc55efe6f04a03dfdea63d0d11a->enter($__internal_c56538d18797c6d24b2595f672fcd8a607aa4bc55efe6f04a03dfdea63d0d11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_bb597f9b795e938d90173778e6cf25dde60e45a91f671d3f34c6d8acce9524b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb597f9b795e938d90173778e6cf25dde60e45a91f671d3f34c6d8acce9524b3->enter($__internal_bb597f9b795e938d90173778e6cf25dde60e45a91f671d3f34c6d8acce9524b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 32
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    \"render\": function(data, type, row, meta) {
        ";
        // line 34
        $this->loadTemplate("SgDatatablesBundle:Action:action.html.twig", "SgDatatablesBundle:Column:action.html.twig", 34)->display(array_merge($context, array("column" => (isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "actions" => $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "actions", array()))));
        // line 35
        echo "    },
";
        
        $__internal_bb597f9b795e938d90173778e6cf25dde60e45a91f671d3f34c6d8acce9524b3->leave($__internal_bb597f9b795e938d90173778e6cf25dde60e45a91f671d3f34c6d8acce9524b3_prof);

        
        $__internal_c56538d18797c6d24b2595f672fcd8a607aa4bc55efe6f04a03dfdea63d0d11a->leave($__internal_c56538d18797c6d24b2595f672fcd8a607aa4bc55efe6f04a03dfdea63d0d11a_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 35,  124 => 34,  118 => 32,  109 => 31,  96 => 28,  91 => 26,  88 => 25,  83 => 23,  80 => 22,  77 => 21,  71 => 19,  69 => 18,  65 => 17,  59 => 14,  55 => 13,  50 => 12,  41 => 11,  11 => 9,);
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

{% block common %}
    \"contentPadding\": \"{{ column.padding }}\",
    \"defaultContent\": \"{{ column.defaultContent }}\",
    \"name\": \"{{ column.name }}\",
    \"orderable\": false,
    \"searchable\": false,
    \"title\": \"{{ column.title|raw }}\",
    {% if column.type %}
        \"type\": \"{{ column.type }}\",
    {% endif %}
    {% if column.visible %}
        \"visible\": true,
        \"className\": \"{{ column.class }}\",
    {% else %}
        \"visible\": false,
        \"className\": \"never {{ column.class }}\",
    {% endif %}
    \"width\": \"{{ column.width }}\",
{% endblock %}

{% block data %}
    \"data\": \"{{ column.data }}\",
    \"render\": function(data, type, row, meta) {
        {% include 'SgDatatablesBundle:Action:action.html.twig' with { 'column': column, 'actions': column.actions } %}
    },
{% endblock %}
", "SgDatatablesBundle:Column:action.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/action.html.twig");
    }
}
