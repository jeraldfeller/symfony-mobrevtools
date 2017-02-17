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
        $__internal_94a1f186f788c317e3869063b7940d30552f9efac8deaa5714caedd1253cf81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a1f186f788c317e3869063b7940d30552f9efac8deaa5714caedd1253cf81e->enter($__internal_94a1f186f788c317e3869063b7940d30552f9efac8deaa5714caedd1253cf81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $__internal_a98e4a109b9dc712ba05b0516ba07cb0c3e62e5da2cba9270171c12e27adbcda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98e4a109b9dc712ba05b0516ba07cb0c3e62e5da2cba9270171c12e27adbcda->enter($__internal_a98e4a109b9dc712ba05b0516ba07cb0c3e62e5da2cba9270171c12e27adbcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94a1f186f788c317e3869063b7940d30552f9efac8deaa5714caedd1253cf81e->leave($__internal_94a1f186f788c317e3869063b7940d30552f9efac8deaa5714caedd1253cf81e_prof);

        
        $__internal_a98e4a109b9dc712ba05b0516ba07cb0c3e62e5da2cba9270171c12e27adbcda->leave($__internal_a98e4a109b9dc712ba05b0516ba07cb0c3e62e5da2cba9270171c12e27adbcda_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_536a07ff57cbd9932b11799f384be1ff1272fa283268fea7a9b283c054537aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536a07ff57cbd9932b11799f384be1ff1272fa283268fea7a9b283c054537aa1->enter($__internal_536a07ff57cbd9932b11799f384be1ff1272fa283268fea7a9b283c054537aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_5f92a2d39e43ed2206538c9b784d50305a56700f66623c25a67b7bc9a0737207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f92a2d39e43ed2206538c9b784d50305a56700f66623c25a67b7bc9a0737207->enter($__internal_5f92a2d39e43ed2206538c9b784d50305a56700f66623c25a67b7bc9a0737207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

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
        
        $__internal_5f92a2d39e43ed2206538c9b784d50305a56700f66623c25a67b7bc9a0737207->leave($__internal_5f92a2d39e43ed2206538c9b784d50305a56700f66623c25a67b7bc9a0737207_prof);

        
        $__internal_536a07ff57cbd9932b11799f384be1ff1272fa283268fea7a9b283c054537aa1->leave($__internal_536a07ff57cbd9932b11799f384be1ff1272fa283268fea7a9b283c054537aa1_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_f53695f37c8d2f5dc9893a0485d9de3bebc23ec8071af291d8072b030cbcd7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53695f37c8d2f5dc9893a0485d9de3bebc23ec8071af291d8072b030cbcd7cc->enter($__internal_f53695f37c8d2f5dc9893a0485d9de3bebc23ec8071af291d8072b030cbcd7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_02812c1f8aabc445370eea75380d553765d589adca135a36e257c3bb7243b6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02812c1f8aabc445370eea75380d553765d589adca135a36e257c3bb7243b6de->enter($__internal_02812c1f8aabc445370eea75380d553765d589adca135a36e257c3bb7243b6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_02812c1f8aabc445370eea75380d553765d589adca135a36e257c3bb7243b6de->leave($__internal_02812c1f8aabc445370eea75380d553765d589adca135a36e257c3bb7243b6de_prof);

        
        $__internal_f53695f37c8d2f5dc9893a0485d9de3bebc23ec8071af291d8072b030cbcd7cc->leave($__internal_f53695f37c8d2f5dc9893a0485d9de3bebc23ec8071af291d8072b030cbcd7cc_prof);

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
