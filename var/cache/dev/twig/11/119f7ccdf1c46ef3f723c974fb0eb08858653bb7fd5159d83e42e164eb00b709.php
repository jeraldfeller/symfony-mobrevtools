<?php

/* SgDatatablesBundle:Filters:filter_select2.html.twig */
class __TwigTemplate_c09d15376bb8f2fd1773e4a1ed9b929fbe19c21c1aa665509c5bccaef4964a19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Filters:filter.html.twig", "SgDatatablesBundle:Filters:filter_select2.html.twig", 9);
        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Filters:filter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fb5117214b048492138e119f1ccea31f34834fb1cd2a2c9eb876a0ea753ac71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb5117214b048492138e119f1ccea31f34834fb1cd2a2c9eb876a0ea753ac71->enter($__internal_0fb5117214b048492138e119f1ccea31f34834fb1cd2a2c9eb876a0ea753ac71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_select2.html.twig"));

        $__internal_e494fc9b4fbd19f0962586e66dcc1e8f59c82e0393e37f5f31248806b2248870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e494fc9b4fbd19f0962586e66dcc1e8f59c82e0393e37f5f31248806b2248870->enter($__internal_e494fc9b4fbd19f0962586e66dcc1e8f59c82e0393e37f5f31248806b2248870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_select2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb5117214b048492138e119f1ccea31f34834fb1cd2a2c9eb876a0ea753ac71->leave($__internal_0fb5117214b048492138e119f1ccea31f34834fb1cd2a2c9eb876a0ea753ac71_prof);

        
        $__internal_e494fc9b4fbd19f0962586e66dcc1e8f59c82e0393e37f5f31248806b2248870->leave($__internal_e494fc9b4fbd19f0962586e66dcc1e8f59c82e0393e37f5f31248806b2248870_prof);

    }

    // line 11
    public function block_html($context, array $blocks = array())
    {
        $__internal_b625112aef48ac20e0a332c19d381782ef4fbf0bb13ebe08f68558c8d3943327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b625112aef48ac20e0a332c19d381782ef4fbf0bb13ebe08f68558c8d3943327->enter($__internal_b625112aef48ac20e0a332c19d381782ef4fbf0bb13ebe08f68558c8d3943327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_31c544ddda2c9762ad26a99c25f6616fbe2bdb4fbb350c73a51ec7ad063ccdac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c544ddda2c9762ad26a99c25f6616fbe2bdb4fbb350c73a51ec7ad063ccdac->enter($__internal_31c544ddda2c9762ad26a99c25f6616fbe2bdb4fbb350c73a51ec7ad063ccdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        // line 12
        echo "    <select
        ";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "multiple", array())) {
            echo "multiple=\"multiple\"";
        }
        // line 14
        echo "        id=\"";
        echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
        echo "-sg-filter-";
        echo twig_escape_filter($this->env, (isset($context["selectorId"]) ? $context["selectorId"] : $this->getContext($context, "selectorId")), "html", null, true);
        echo "\"
        class=\"individual_filtering";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "class", array()), "html", null, true);
        }
        echo "\"
        style=\"width:100%;\"
        ";
        // line 17
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array())) {
            echo "name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "        data-filter-property-id=\"";
        echo twig_escape_filter($this->env, (isset($context["filterColumnId"]) ? $context["filterColumnId"] : $this->getContext($context, "filterColumnId")), "html", null, true);
        echo "\"
        data-search-column=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "searchColumn", array()), "html", null, true);
        echo "\"
    >
        ";
        // line 21
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "searchColumn", array())) {
            // line 22
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "searchColumn", array()), "html", null, true);
            echo "\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "searchColumn", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("filter.default", array(), "messages"), "html", null, true);
            echo ")
            </option>
        ";
        }
        // line 26
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "selectOptions", array()));
        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
            // line 27
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </select>
    ";
        // line 30
        if ((true == $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "cancelButton", array()))) {
            // line 31
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["cancel_button_html"]) ? $context["cancel_button_html"] : $this->getContext($context, "cancel_button_html")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_31c544ddda2c9762ad26a99c25f6616fbe2bdb4fbb350c73a51ec7ad063ccdac->leave($__internal_31c544ddda2c9762ad26a99c25f6616fbe2bdb4fbb350c73a51ec7ad063ccdac_prof);

        
        $__internal_b625112aef48ac20e0a332c19d381782ef4fbf0bb13ebe08f68558c8d3943327->leave($__internal_b625112aef48ac20e0a332c19d381782ef4fbf0bb13ebe08f68558c8d3943327_prof);

    }

    // line 35
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c3a29b0ca6987f25c8e8f080c3af1ceddb958ef127befa25e6c21d511d01e6fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a29b0ca6987f25c8e8f080c3af1ceddb958ef127befa25e6c21d511d01e6fa->enter($__internal_c3a29b0ca6987f25c8e8f080c3af1ceddb958ef127befa25e6c21d511d01e6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_e7b13f86224e68c57a994b1147514a039da54b047eabe849a55310043769b5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b13f86224e68c57a994b1147514a039da54b047eabe849a55310043769b5ed->enter($__internal_e7b13f86224e68c57a994b1147514a039da54b047eabe849a55310043769b5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 36
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

    <script>
        \$('#";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
        echo "-sg-filter-";
        echo twig_escape_filter($this->env, (isset($context["selectorId"]) ? $context["selectorId"] : $this->getContext($context, "selectorId")), "html", null, true);
        echo "').select2({
            ";
        // line 40
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "placeholder", array())) {
            echo "placeholder: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "placeholder", array()), "html", null, true);
            echo "\",";
        }
        // line 41
        echo "            tags: ";
        echo (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "tags", array())) ? ("true") : ("false"));
        echo ",
            allowClear: ";
        // line 42
        echo (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "allowClear", array())) ? ("true") : ("false"));
        echo ",
            language: \"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "language", array()), "html", null, true);
        echo "\",
            dropdownAutoWidth : true,
            ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "url", array())) {
            // line 46
            echo "            ajax: {
                url: \"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "url", array()));
            echo "\",
                dataType: 'json',
                delay: ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "delay", array()), "html", null, true);
            echo ",
                cache: ";
            // line 50
            echo (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "cache", array())) ? ("true") : ("false"));
            echo ",
                data: function (params) {
                    return {
                        q: params.term,
                        page: params.page
                    };
                },
                processResults: function (data, params) {
                    params.page = params.page || 1;

                    var resultArray = [];
                    for (var id in data) {
                        resultArray.push({
                            id : data[id],
                            text : data[id]
                        });
                    }

                    return {
                        results: resultArray,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                }
            },
            ";
        }
        // line 77
        echo "        });
        ";
        // line 78
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "searchColumn", array())) {
            // line 79
            echo "            \$('#";
            echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
            echo "-sg-filter-";
            echo twig_escape_filter($this->env, (isset($context["selectorId"]) ? $context["selectorId"] : $this->getContext($context, "selectorId")), "html", null, true);
            echo "').val(\$('#";
            echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
            echo "-sg-filter-";
            echo twig_escape_filter($this->env, (isset($context["selectorId"]) ? $context["selectorId"] : $this->getContext($context, "selectorId")), "html", null, true);
            echo " option:first-child').val()).trigger('change');
        ";
        }
        // line 81
        echo "    </script>
";
        
        $__internal_e7b13f86224e68c57a994b1147514a039da54b047eabe849a55310043769b5ed->leave($__internal_e7b13f86224e68c57a994b1147514a039da54b047eabe849a55310043769b5ed_prof);

        
        $__internal_c3a29b0ca6987f25c8e8f080c3af1ceddb958ef127befa25e6c21d511d01e6fa->leave($__internal_c3a29b0ca6987f25c8e8f080c3af1ceddb958ef127befa25e6c21d511d01e6fa_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Filters:filter_select2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 81,  229 => 79,  227 => 78,  224 => 77,  194 => 50,  190 => 49,  185 => 47,  182 => 46,  180 => 45,  175 => 43,  171 => 42,  166 => 41,  160 => 40,  154 => 39,  147 => 36,  138 => 35,  124 => 31,  122 => 30,  119 => 29,  108 => 27,  103 => 26,  95 => 23,  90 => 22,  88 => 21,  83 => 19,  78 => 18,  72 => 17,  64 => 15,  57 => 14,  53 => 13,  50 => 12,  41 => 11,  11 => 9,);
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

{% block html %}
    <select
        {% if column.filter.multiple %}multiple=\"multiple\"{% endif %}
        id=\"{{ tableId }}-sg-filter-{{ selectorId }}\"
        class=\"individual_filtering{% if column.filter.class %} {{ column.filter.class }}{% endif %}\"
        style=\"width:100%;\"
        {% if column.name %}name=\"{{ column.name }}\"{% endif %}
        data-filter-property-id=\"{{ filterColumnId }}\"
        data-search-column=\"{{ column.filter.searchColumn }}\"
    >
        {% if column.filter.searchColumn %}
            <option value=\"{{ column.filter.searchColumn }}\">
                {{ column.filter.searchColumn }} ({{ 'filter.default'|trans({}, 'messages') }})
            </option>
        {% endif %}
        {% for key, name in column.filter.selectOptions %}
            <option value=\"{{ key }}\">{{ name }}</option>
        {% endfor %}
    </select>
    {% if true == column.filter.cancelButton %}
        {{ cancel_button_html }}
    {% endif %}
{% endblock %}

{% block javascript %}
    {{ parent() }}

    <script>
        \$('#{{ tableId }}-sg-filter-{{ selectorId }}').select2({
            {% if column.filter.placeholder %}placeholder: \"{{ column.filter.placeholder }}\",{% endif %}
            tags: {{ column.filter.tags ? 'true' : 'false' }},
            allowClear: {{ column.filter.allowClear ? 'true' : 'false' }},
            language: \"{{ column.filter.language }}\",
            dropdownAutoWidth : true,
            {% if column.filter.url %}
            ajax: {
                url: \"{{ path(column.filter.url) }}\",
                dataType: 'json',
                delay: {{ column.filter.delay }},
                cache: {{ column.filter.cache ? 'true' : 'false' }},
                data: function (params) {
                    return {
                        q: params.term,
                        page: params.page
                    };
                },
                processResults: function (data, params) {
                    params.page = params.page || 1;

                    var resultArray = [];
                    for (var id in data) {
                        resultArray.push({
                            id : data[id],
                            text : data[id]
                        });
                    }

                    return {
                        results: resultArray,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                }
            },
            {% endif %}
        });
        {% if column.filter.searchColumn %}
            \$('#{{ tableId }}-sg-filter-{{ selectorId }}').val(\$('#{{ tableId }}-sg-filter-{{ selectorId }} option:first-child').val()).trigger('change');
        {% endif %}
    </script>
{% endblock %}
", "SgDatatablesBundle:Filters:filter_select2.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Filters/filter_select2.html.twig");
    }
}
