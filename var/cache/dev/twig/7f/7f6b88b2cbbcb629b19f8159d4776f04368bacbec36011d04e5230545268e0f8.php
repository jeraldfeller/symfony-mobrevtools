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
        $__internal_a80d58e00b67ab11330d9ef786a8c4762cbba24cb85fb897663b71541e7d3e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a80d58e00b67ab11330d9ef786a8c4762cbba24cb85fb897663b71541e7d3e44->enter($__internal_a80d58e00b67ab11330d9ef786a8c4762cbba24cb85fb897663b71541e7d3e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:multiselect.html.twig"));

        $__internal_73bd6601884fee41686d8c90994c4f784cb34803efef3f40ff8dd1d312117602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73bd6601884fee41686d8c90994c4f784cb34803efef3f40ff8dd1d312117602->enter($__internal_73bd6601884fee41686d8c90994c4f784cb34803efef3f40ff8dd1d312117602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:multiselect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a80d58e00b67ab11330d9ef786a8c4762cbba24cb85fb897663b71541e7d3e44->leave($__internal_a80d58e00b67ab11330d9ef786a8c4762cbba24cb85fb897663b71541e7d3e44_prof);

        
        $__internal_73bd6601884fee41686d8c90994c4f784cb34803efef3f40ff8dd1d312117602->leave($__internal_73bd6601884fee41686d8c90994c4f784cb34803efef3f40ff8dd1d312117602_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_ec6415f5539351fe7b4297b819524ed9fb44b4a03bdbf1441fb1fad6a63fb85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6415f5539351fe7b4297b819524ed9fb44b4a03bdbf1441fb1fad6a63fb85f->enter($__internal_ec6415f5539351fe7b4297b819524ed9fb44b4a03bdbf1441fb1fad6a63fb85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_07bcbb045ce28a324a01f3b352520f0901437bb8c34db519092dd25066187a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bcbb045ce28a324a01f3b352520f0901437bb8c34db519092dd25066187a59->enter($__internal_07bcbb045ce28a324a01f3b352520f0901437bb8c34db519092dd25066187a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

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
        
        $__internal_07bcbb045ce28a324a01f3b352520f0901437bb8c34db519092dd25066187a59->leave($__internal_07bcbb045ce28a324a01f3b352520f0901437bb8c34db519092dd25066187a59_prof);

        
        $__internal_ec6415f5539351fe7b4297b819524ed9fb44b4a03bdbf1441fb1fad6a63fb85f->leave($__internal_ec6415f5539351fe7b4297b819524ed9fb44b4a03bdbf1441fb1fad6a63fb85f_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_3c01d39117e0ce9603e6365e095acd19cd4245005027bcc3883d8cb835596958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c01d39117e0ce9603e6365e095acd19cd4245005027bcc3883d8cb835596958->enter($__internal_3c01d39117e0ce9603e6365e095acd19cd4245005027bcc3883d8cb835596958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_abf5da8f281e0b47a77b5791fe7100b36a772fe65d0a5977c90fdc38da927e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf5da8f281e0b47a77b5791fe7100b36a772fe65d0a5977c90fdc38da927e6c->enter($__internal_abf5da8f281e0b47a77b5791fe7100b36a772fe65d0a5977c90fdc38da927e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_abf5da8f281e0b47a77b5791fe7100b36a772fe65d0a5977c90fdc38da927e6c->leave($__internal_abf5da8f281e0b47a77b5791fe7100b36a772fe65d0a5977c90fdc38da927e6c_prof);

        
        $__internal_3c01d39117e0ce9603e6365e095acd19cd4245005027bcc3883d8cb835596958->leave($__internal_3c01d39117e0ce9603e6365e095acd19cd4245005027bcc3883d8cb835596958_prof);

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
