<?php

/* SgDatatablesBundle:Datatable:editable.html.twig */
class __TwigTemplate_4b3cc17396474befce3f6b4be92c511cce8909bc2553d7206c119d5ccd9c7de3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12b0cb1b3ad44aee78aa90672e5f8260e675a5d8c59817a185bf0b2471f4797e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b0cb1b3ad44aee78aa90672e5f8260e675a5d8c59817a185bf0b2471f4797e->enter($__internal_12b0cb1b3ad44aee78aa90672e5f8260e675a5d8c59817a185bf0b2471f4797e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:editable.html.twig"));

        $__internal_2c52271c42f220c33d14ea4cb1ae70619991521c413313e6c20b057714468616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c52271c42f220c33d14ea4cb1ae70619991521c413313e6c20b057714468616->enter($__internal_2c52271c42f220c33d14ea4cb1ae70619991521c413313e6c20b057714468616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:editable.html.twig"));

        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["view_columns"]) ? $context["view_columns"] : $this->getContext($context, "view_columns")));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 10
            echo "    ";
            if (($this->getAttribute($context["column"], "editable", array(), "any", true, true) && (true == $this->getAttribute($context["column"], "editable", array())))) {
                // line 11
                echo "        ";
                $context["token"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("editable");
                // line 12
                echo "        var str = '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "data", array()), "html", null, true);
                echo "'.split(\".\").join(\"_\");
        str = 'span.sg-editable-' + str;
        \$(str).editable({
            ";
                // line 16
                echo "            ";
                if (("datetime" == $this->getAttribute($context["column"], "alias", array()))) {
                    // line 17
                    echo "            viewformat: '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "dateFormat", array()), "html", null, true);
                    echo "',
            combodate: {maxYear: 2050},
            ";
                }
                // line 20
                echo "            ";
                // line 21
                echo "            ";
                if (("boolean" == $this->getAttribute($context["column"], "alias", array()))) {
                    // line 22
                    echo "            source: [{'true': \"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["column"], "trueLabel", array())) ? ($this->getAttribute($context["column"], "trueLabel", array())) : ("true")), "html", null, true);
                    echo "\"}, {'false': \"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["column"], "falseLabel", array())) ? ($this->getAttribute($context["column"], "falseLabel", array())) : ("false")), "html", null, true);
                    echo "\"}],
            emptytext: 'false',
            ";
                }
                // line 25
                echo "            name: '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "data", array()), "html", null, true);
                echo "',
            url: \"";
                // line 26
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sg_datatables_edit");
                echo "\",
            title: '";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true);
                echo " ' + \"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.actions.edit", array(), "messages"), "html", null, true);
                echo "\",
            params: function (params) {
                params.entity = '";
                // line 29
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["datatable"]) ? $context["datatable"] : $this->getContext($context, "datatable")), "entity", array()), "js"), "html", null, true);
                echo "';
                params.token = '";
                // line 30
                echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
                echo "';

                return params;
            },
            container: 'body',
            emptytext: \"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.actions.edit", array(), "messages"), "html", null, true);
                echo "\",
            ";
                // line 37
                echo "            ";
                if (((($this->getAttribute((isset($context["view_ajax"]) ? $context["view_ajax"] : $this->getContext($context, "view_ajax")), "pipeline", array()) > 0) || $this->getAttribute($context["column"], "isAssociation", array())) || ($this->getAttribute($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "extensions", array(), "any", false, true), "responsive", array(), "any", true, true) && (true == $this->getAttribute($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "extensions", array()), "responsive", array()))))) {
                    // line 38
                    echo "            success: function(response, newValue) {
                ";
                    // line 39
                    if (($this->getAttribute((isset($context["view_ajax"]) ? $context["view_ajax"] : $this->getContext($context, "view_ajax")), "pipeline", array()) > 0)) {
                        // line 40
                        echo "                    oTable.clearPipeline().draw();
                ";
                    } else {
                        // line 42
                        echo "                    oTable.draw();
                ";
                    }
                    // line 44
                    echo "                ";
                    if ($this->getAttribute($context["column"], "isAssociation", array())) {
                        // line 45
                        echo "                    alert(\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("editable.tableRedraw", array(), "messages"), "html", null, true);
                        echo "\");
                ";
                    }
                    // line 47
                    echo "            }
            ";
                }
                // line 49
                echo "        });
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_12b0cb1b3ad44aee78aa90672e5f8260e675a5d8c59817a185bf0b2471f4797e->leave($__internal_12b0cb1b3ad44aee78aa90672e5f8260e675a5d8c59817a185bf0b2471f4797e_prof);

        
        $__internal_2c52271c42f220c33d14ea4cb1ae70619991521c413313e6c20b057714468616->leave($__internal_2c52271c42f220c33d14ea4cb1ae70619991521c413313e6c20b057714468616_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:editable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 49,  123 => 47,  117 => 45,  114 => 44,  110 => 42,  106 => 40,  104 => 39,  101 => 38,  98 => 37,  94 => 35,  86 => 30,  82 => 29,  75 => 27,  71 => 26,  66 => 25,  57 => 22,  54 => 21,  52 => 20,  45 => 17,  42 => 16,  35 => 12,  32 => 11,  29 => 10,  25 => 9,);
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
{% for column in view_columns %}
    {% if column.editable is defined and true == column.editable %}
        {% set token = csrf_token('editable') %}
        var str = '{{ column.data }}'.split(\".\").join(\"_\");
        str = 'span.sg-editable-' + str;
        \$(str).editable({
            {# datetime column #}
            {% if 'datetime' == column.alias %}
            viewformat: '{{ column.dateFormat }}',
            combodate: {maxYear: 2050},
            {% endif %}
            {# boolean column #}
            {% if 'boolean' == column.alias %}
            source: [{'true': \"{{ column.trueLabel ? column.trueLabel : 'true' }}\"}, {'false': \"{{ column.falseLabel ? column.falseLabel : 'false' }}\"}],
            emptytext: 'false',
            {% endif %}
            name: '{{ column.data }}',
            url: \"{{ path('sg_datatables_edit') }}\",
            title: '{{ column.title }} ' + \"{{ 'datatables.actions.edit'|trans({}, 'messages') }}\",
            params: function (params) {
                params.entity = '{{ datatable.entity|e('js') }}';
                params.token = '{{ token }}';

                return params;
            },
            container: 'body',
            emptytext: \"{{ 'datatables.actions.edit'|trans({}, 'messages') }}\",
            {# many-to-one associations, Pipelining and the Responsive-extension need a complete table redraw #}
            {% if view_ajax.pipeline > 0 or column.isAssociation or view_features.extensions.responsive is defined and true == view_features.extensions.responsive %}
            success: function(response, newValue) {
                {% if view_ajax.pipeline > 0 %}
                    oTable.clearPipeline().draw();
                {% else %}
                    oTable.draw();
                {% endif %}
                {% if column.isAssociation %}
                    alert(\"{{ 'editable.tableRedraw'|trans({}, 'messages') }}\");
                {% endif %}
            }
            {% endif %}
        });
    {% endif %}
{% endfor %}
", "SgDatatablesBundle:Datatable:editable.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Datatable/editable.html.twig");
    }
}
