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
        $__internal_9928c801a4d44dcdcc3d11b9218db459b2967d673b979b7d6819cecc2a9b1a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9928c801a4d44dcdcc3d11b9218db459b2967d673b979b7d6819cecc2a9b1a17->enter($__internal_9928c801a4d44dcdcc3d11b9218db459b2967d673b979b7d6819cecc2a9b1a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $__internal_e78593637bd191a5b6a972cdc0718980eb61c2854fc7dce64960b62b59989c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78593637bd191a5b6a972cdc0718980eb61c2854fc7dce64960b62b59989c66->enter($__internal_e78593637bd191a5b6a972cdc0718980eb61c2854fc7dce64960b62b59989c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9928c801a4d44dcdcc3d11b9218db459b2967d673b979b7d6819cecc2a9b1a17->leave($__internal_9928c801a4d44dcdcc3d11b9218db459b2967d673b979b7d6819cecc2a9b1a17_prof);

        
        $__internal_e78593637bd191a5b6a972cdc0718980eb61c2854fc7dce64960b62b59989c66->leave($__internal_e78593637bd191a5b6a972cdc0718980eb61c2854fc7dce64960b62b59989c66_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_aa1a306396dd94e148c5b0d45ad311a07add5332a3354aa8be594ede6eca6b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1a306396dd94e148c5b0d45ad311a07add5332a3354aa8be594ede6eca6b84->enter($__internal_aa1a306396dd94e148c5b0d45ad311a07add5332a3354aa8be594ede6eca6b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_b44e1b28a8c2614f6546d937075ae985068eef59d685e8c8f49742e946c4b7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44e1b28a8c2614f6546d937075ae985068eef59d685e8c8f49742e946c4b7a9->enter($__internal_b44e1b28a8c2614f6546d937075ae985068eef59d685e8c8f49742e946c4b7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

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
        
        $__internal_b44e1b28a8c2614f6546d937075ae985068eef59d685e8c8f49742e946c4b7a9->leave($__internal_b44e1b28a8c2614f6546d937075ae985068eef59d685e8c8f49742e946c4b7a9_prof);

        
        $__internal_aa1a306396dd94e148c5b0d45ad311a07add5332a3354aa8be594ede6eca6b84->leave($__internal_aa1a306396dd94e148c5b0d45ad311a07add5332a3354aa8be594ede6eca6b84_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_5b42fce6d6e7b4aa4dde80656d997a834bf84a025cbc9624593220d4aad1f65b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b42fce6d6e7b4aa4dde80656d997a834bf84a025cbc9624593220d4aad1f65b->enter($__internal_5b42fce6d6e7b4aa4dde80656d997a834bf84a025cbc9624593220d4aad1f65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_8eacfc3e83c350f152aa120bb249765b896636ff9328b70ac66894acfc7d5198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eacfc3e83c350f152aa120bb249765b896636ff9328b70ac66894acfc7d5198->enter($__internal_8eacfc3e83c350f152aa120bb249765b896636ff9328b70ac66894acfc7d5198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_8eacfc3e83c350f152aa120bb249765b896636ff9328b70ac66894acfc7d5198->leave($__internal_8eacfc3e83c350f152aa120bb249765b896636ff9328b70ac66894acfc7d5198_prof);

        
        $__internal_5b42fce6d6e7b4aa4dde80656d997a834bf84a025cbc9624593220d4aad1f65b->leave($__internal_5b42fce6d6e7b4aa4dde80656d997a834bf84a025cbc9624593220d4aad1f65b_prof);

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
