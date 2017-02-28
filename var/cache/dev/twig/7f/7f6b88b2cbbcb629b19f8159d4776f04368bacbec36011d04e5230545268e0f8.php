<?php

/* SgDatatablesBundle:Column:multiselect.html.twig */
class __TwigTemplate_f66e464eb76557f59af887e30e3acb7077f51c5ec67eacf5f3f0a5cdca8484b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:multiselect.html.twig", 9);
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
        $__internal_5e923dd61234c5fdc31dac3e6b147df2699f1701f3847e6372c5c362e7bfd1a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e923dd61234c5fdc31dac3e6b147df2699f1701f3847e6372c5c362e7bfd1a8->enter($__internal_5e923dd61234c5fdc31dac3e6b147df2699f1701f3847e6372c5c362e7bfd1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:multiselect.html.twig"));

        $__internal_95af92244deb1a1d2f1044aec2e1ebe1d424cfbc7b65e1a565c0ac39948dae6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95af92244deb1a1d2f1044aec2e1ebe1d424cfbc7b65e1a565c0ac39948dae6e->enter($__internal_95af92244deb1a1d2f1044aec2e1ebe1d424cfbc7b65e1a565c0ac39948dae6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:multiselect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e923dd61234c5fdc31dac3e6b147df2699f1701f3847e6372c5c362e7bfd1a8->leave($__internal_5e923dd61234c5fdc31dac3e6b147df2699f1701f3847e6372c5c362e7bfd1a8_prof);

        
        $__internal_95af92244deb1a1d2f1044aec2e1ebe1d424cfbc7b65e1a565c0ac39948dae6e->leave($__internal_95af92244deb1a1d2f1044aec2e1ebe1d424cfbc7b65e1a565c0ac39948dae6e_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_be60a95a6dd6368acd676168c81e39b0330fc1216d11cb28d7c9a19db0d76709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be60a95a6dd6368acd676168c81e39b0330fc1216d11cb28d7c9a19db0d76709->enter($__internal_be60a95a6dd6368acd676168c81e39b0330fc1216d11cb28d7c9a19db0d76709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_6511f53612e23d45dac43bd948baa145674c29344f9c5b7173743056ed2324d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6511f53612e23d45dac43bd948baa145674c29344f9c5b7173743056ed2324d2->enter($__internal_6511f53612e23d45dac43bd948baa145674c29344f9c5b7173743056ed2324d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

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
    \"title\": \"<input type='checkbox' name='";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "_multiselect_checkall' class='";
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "_multiselect_checkall' />\",
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
        
        $__internal_6511f53612e23d45dac43bd948baa145674c29344f9c5b7173743056ed2324d2->leave($__internal_6511f53612e23d45dac43bd948baa145674c29344f9c5b7173743056ed2324d2_prof);

        
        $__internal_be60a95a6dd6368acd676168c81e39b0330fc1216d11cb28d7c9a19db0d76709->leave($__internal_be60a95a6dd6368acd676168c81e39b0330fc1216d11cb28d7c9a19db0d76709_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_04e16c563851ba06d7d37533af3610bad9cca5b5734d8f4aabd74d98e959b4e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e16c563851ba06d7d37533af3610bad9cca5b5734d8f4aabd74d98e959b4e1->enter($__internal_04e16c563851ba06d7d37533af3610bad9cca5b5734d8f4aabd74d98e959b4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_d8db15ea1e8d35f1310177b4da24997a9a77aabb51cc4ea9353d9e0562e7e625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8db15ea1e8d35f1310177b4da24997a9a77aabb51cc4ea9353d9e0562e7e625->enter($__internal_d8db15ea1e8d35f1310177b4da24997a9a77aabb51cc4ea9353d9e0562e7e625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 32
        echo "    \"data\": null,
    \"render\": function(data, type, row, meta) {
        var output = \"\";
        var startHtml = \"\";
        var endHtml = \"\";
        var attributes = \"\";

        ";
        // line 40
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "startHtml", array())) {
            // line 41
            echo "            startHtml = '";
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "startHtml", array());
            echo "';
        ";
        }
        // line 43
        echo "
        ";
        // line 45
        echo "        ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "endHtml", array())) {
            // line 46
            echo "            endHtml = '";
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "endHtml", array());
            echo "';
        ";
        }
        // line 48
        echo "
        ";
        // line 50
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "attributes", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 51
            echo "            attributes += '";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" ';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
        ";
        // line 55
        echo "        var first;
        if (row.hasOwnProperty('";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "value", array()), "html", null, true);
        echo "') && typeof('";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "value", array()), "html", null, true);
        echo "') !== 'function') {
            first = row['";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "value", array()), "html", null, true);
        echo "'];
        }

        ";
        // line 61
        echo "        output += startHtml;
        if (true == row.sg_datatables_cbox) {
            output += \"<input type='checkbox' value='\";
            output += first;
            output += \"'\";
            output += attributes;
            output += \"/>\"
        }
        output += endHtml;

        return output;
    },
";
        
        $__internal_d8db15ea1e8d35f1310177b4da24997a9a77aabb51cc4ea9353d9e0562e7e625->leave($__internal_d8db15ea1e8d35f1310177b4da24997a9a77aabb51cc4ea9353d9e0562e7e625_prof);

        
        $__internal_04e16c563851ba06d7d37533af3610bad9cca5b5734d8f4aabd74d98e959b4e1->leave($__internal_04e16c563851ba06d7d37533af3610bad9cca5b5734d8f4aabd74d98e959b4e1_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:multiselect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 61,  181 => 57,  175 => 56,  172 => 55,  169 => 53,  158 => 51,  153 => 50,  150 => 48,  144 => 46,  141 => 45,  138 => 43,  132 => 41,  129 => 40,  120 => 32,  111 => 31,  98 => 28,  93 => 26,  90 => 25,  85 => 23,  82 => 22,  79 => 21,  73 => 19,  71 => 18,  65 => 17,  59 => 14,  55 => 13,  50 => 12,  41 => 11,  11 => 9,);
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
    \"title\": \"<input type='checkbox' name='{{ view_table_id }}_multiselect_checkall' class='{{ view_table_id }}_multiselect_checkall' />\",
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
    \"data\": null,
    \"render\": function(data, type, row, meta) {
        var output = \"\";
        var startHtml = \"\";
        var endHtml = \"\";
        var attributes = \"\";

        {# start_html #}
        {% if column.startHtml %}
            startHtml = '{{ column.startHtml|raw }}';
        {% endif %}

        {# end_html #}
        {% if column.endHtml %}
            endHtml = '{{ column.endHtml|raw }}';
        {% endif %}

        {# attributes #}
        {% for key, value in column.attributes %}
            attributes += '{{ key }}=\"{{ value }}\" ';
        {% endfor %}

        {# get value (e.g. the id) #}
        var first;
        if (row.hasOwnProperty('{{ column.value }}') && typeof('{{ column.value }}') !== 'function') {
            first = row['{{ column.value }}'];
        }

        {# return html #}
        output += startHtml;
        if (true == row.sg_datatables_cbox) {
            output += \"<input type='checkbox' value='\";
            output += first;
            output += \"'\";
            output += attributes;
            output += \"/>\"
        }
        output += endHtml;

        return output;
    },
{% endblock %}

", "SgDatatablesBundle:Column:multiselect.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/multiselect.html.twig");
    }
}
