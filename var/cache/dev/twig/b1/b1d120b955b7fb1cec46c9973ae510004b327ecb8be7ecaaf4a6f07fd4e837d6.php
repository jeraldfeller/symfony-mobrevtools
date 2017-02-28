<?php

/* @SgDatatables/Filters/filter_select2.html.twig */
class __TwigTemplate_dcc02c1476f82365c1210ae92fd1f8f354d5e5950fa6b13e5fd36a744b7cc782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Filters:filter.html.twig", "@SgDatatables/Filters/filter_select2.html.twig", 9);
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
        $__internal_02c348df18bb4a400ae76e4e647e4f31a14f07fc640a7125c2347a9dcea7a387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c348df18bb4a400ae76e4e647e4f31a14f07fc640a7125c2347a9dcea7a387->enter($__internal_02c348df18bb4a400ae76e4e647e4f31a14f07fc640a7125c2347a9dcea7a387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_select2.html.twig"));

        $__internal_b08a72b9d1083fcb1184fde8507540879f38700e832647b89e53427ebe124c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b08a72b9d1083fcb1184fde8507540879f38700e832647b89e53427ebe124c56->enter($__internal_b08a72b9d1083fcb1184fde8507540879f38700e832647b89e53427ebe124c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_select2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02c348df18bb4a400ae76e4e647e4f31a14f07fc640a7125c2347a9dcea7a387->leave($__internal_02c348df18bb4a400ae76e4e647e4f31a14f07fc640a7125c2347a9dcea7a387_prof);

        
        $__internal_b08a72b9d1083fcb1184fde8507540879f38700e832647b89e53427ebe124c56->leave($__internal_b08a72b9d1083fcb1184fde8507540879f38700e832647b89e53427ebe124c56_prof);

    }

    // line 11
    public function block_html($context, array $blocks = array())
    {
        $__internal_9e37f66e1fb94ce968b8bd31b487dcca5cbf9737a403732549e007cda179166d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e37f66e1fb94ce968b8bd31b487dcca5cbf9737a403732549e007cda179166d->enter($__internal_9e37f66e1fb94ce968b8bd31b487dcca5cbf9737a403732549e007cda179166d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_561247b0256c84c00a13b9d0c871b56439e92883182edcf6cd4af6a42620b7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561247b0256c84c00a13b9d0c871b56439e92883182edcf6cd4af6a42620b7c0->enter($__internal_561247b0256c84c00a13b9d0c871b56439e92883182edcf6cd4af6a42620b7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

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
        
        $__internal_561247b0256c84c00a13b9d0c871b56439e92883182edcf6cd4af6a42620b7c0->leave($__internal_561247b0256c84c00a13b9d0c871b56439e92883182edcf6cd4af6a42620b7c0_prof);

        
        $__internal_9e37f66e1fb94ce968b8bd31b487dcca5cbf9737a403732549e007cda179166d->leave($__internal_9e37f66e1fb94ce968b8bd31b487dcca5cbf9737a403732549e007cda179166d_prof);

    }

    // line 35
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_30309fe6ed92b3d8d08995801bff4c92f11e461a3eccc5c3521af7e94e9721f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30309fe6ed92b3d8d08995801bff4c92f11e461a3eccc5c3521af7e94e9721f2->enter($__internal_30309fe6ed92b3d8d08995801bff4c92f11e461a3eccc5c3521af7e94e9721f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_72c5aba15e12868b89144413e0e6d71cb3517980b8ffafe483330415bf59a340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c5aba15e12868b89144413e0e6d71cb3517980b8ffafe483330415bf59a340->enter($__internal_72c5aba15e12868b89144413e0e6d71cb3517980b8ffafe483330415bf59a340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_72c5aba15e12868b89144413e0e6d71cb3517980b8ffafe483330415bf59a340->leave($__internal_72c5aba15e12868b89144413e0e6d71cb3517980b8ffafe483330415bf59a340_prof);

        
        $__internal_30309fe6ed92b3d8d08995801bff4c92f11e461a3eccc5c3521af7e94e9721f2->leave($__internal_30309fe6ed92b3d8d08995801bff4c92f11e461a3eccc5c3521af7e94e9721f2_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Filters/filter_select2.html.twig";
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
", "@SgDatatables/Filters/filter_select2.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Filters\\filter_select2.html.twig");
    }
}
