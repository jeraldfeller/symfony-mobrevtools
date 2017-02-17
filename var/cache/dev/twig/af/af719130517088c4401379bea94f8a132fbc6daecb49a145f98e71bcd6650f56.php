<?php

/* @SgDatatables/Action/multiselect_actions.html.twig */
class __TwigTemplate_2993f9d9111671c982335cc9a31e4c8f2b755e9711ad17bd727c33599927081c extends Twig_Template
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
        $__internal_2db7da19199a4cbcfffc5a18b8a199469f25b49a0baa9023aae73ce87365db3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db7da19199a4cbcfffc5a18b8a199469f25b49a0baa9023aae73ce87365db3e->enter($__internal_2db7da19199a4cbcfffc5a18b8a199469f25b49a0baa9023aae73ce87365db3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Action/multiselect_actions.html.twig"));

        $__internal_deab57b6b3526464a77a6198797d6478f3657a7e6438b61ae4bb05b7e4cb897b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deab57b6b3526464a77a6198797d6478f3657a7e6438b61ae4bb05b7e4cb897b->enter($__internal_deab57b6b3526464a77a6198797d6478f3657a7e6438b61ae4bb05b7e4cb897b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Action/multiselect_actions.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    <div>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "actions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 12
            echo "            ";
            if ($this->getAttribute($context["action"], "isRenderIfClosure", array())) {
                // line 13
                echo "                ";
                $context["route"] = (($this->getAttribute($context["action"], "route", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["action"], "route", array()), $this->getAttribute($context["action"], "routeParameters", array()))) : (""));
                // line 14
                echo "                ";
                ob_start();
                // line 15
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "attributes", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "='";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "'";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "                ";
                $context["attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 17
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatableIcon($this->env, $this->getAttribute($context["action"], "icon", array()), $this->getAttribute($context["action"], "label", array()));
                echo "</a>
            ";
            }
            // line 19
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
";
        $context["multiple_actions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
\$(\"#";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "_multiselect_actions\").append(\"";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["multiple_actions"]) ? $context["multiple_actions"] : $this->getContext($context, "multiple_actions")), "js"), "html", null, true);
        echo "\");

\$(\".";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "_multiselect_checkall\").click(function(event) {
    var that = this;
    \$(\"input.";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "_multiselect_checkbox:checkbox\").each(function() {
        this.checked = that.checked;
    });
});

\$(selector).on('click', 'input.";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "_multiselect_checkbox', function(event) {
    updateCheckAll();
});

\$(\".";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "_multiselect_action_click\").on('click', function(event) {
    var length = \$(\"input.";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "_multiselect_checkbox:checkbox:checked\").length;

    event.preventDefault();

    if (length > 0) {
        if (!confirm( \"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.bulk.confirmMsg", array(), "messages"), "html", null, true);
        echo "\" )) {
            return;
        }

        ";
        // line 46
        $context["token"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("multiselect");
        // line 47
        echo "
        \$.ajax({
            url: \$(this).attr(\"href\"),
            type: \"POST\",
            cache: false,
            data: {
                'data': \$(\"input:checkbox:checked.";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "_multiselect_checkbox\", oTable.rows().nodes()).serializeArray(),
                'token': '";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "'
            },
            success: function(msg) {
                ";
        // line 57
        if (($this->getAttribute((isset($context["view_ajax"]) ? $context["view_ajax"] : $this->getContext($context, "view_ajax")), "pipeline", array()) > 0)) {
            // line 58
            echo "                    oTable.clearPipeline().draw();
                ";
        } else {
            // line 60
            echo "                    oTable.draw();
                ";
        }
        // line 62
        echo "            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest + ' ' + textStatus + ' ' +errorThrown);
            }
        })
    } else {
        alert(\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.bulk.selectError", array(), "messages"), "html", null, true);
        echo "\");
    }
});

function updateCheckAll(){
    var \$individual_all        = \$(\"input.";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "_multiselect_checkbox:checkbox\");
    var \$individual_checked    = \$(\"input.";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "_multiselect_checkbox:checkbox:checked\");
    var \$all                   = \$(\".";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "_multiselect_checkall\");

    if(\$individual_checked.length === 0){
        \$all.prop('checked', false);
        \$all.prop('indeterminate', false);
    } else if (\$individual_checked.length === \$individual_all.length){
        \$all.prop('checked', true);
        \$all.prop('indeterminate', false);
    } else {
        \$all.prop('checked', false);
        \$all.prop('indeterminate', true);
    }
}
";
        
        $__internal_2db7da19199a4cbcfffc5a18b8a199469f25b49a0baa9023aae73ce87365db3e->leave($__internal_2db7da19199a4cbcfffc5a18b8a199469f25b49a0baa9023aae73ce87365db3e_prof);

        
        $__internal_deab57b6b3526464a77a6198797d6478f3657a7e6438b61ae4bb05b7e4cb897b->leave($__internal_deab57b6b3526464a77a6198797d6478f3657a7e6438b61ae4bb05b7e4cb897b_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Action/multiselect_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 75,  179 => 74,  175 => 73,  167 => 68,  159 => 62,  155 => 60,  151 => 58,  149 => 57,  143 => 54,  139 => 53,  131 => 47,  129 => 46,  122 => 42,  114 => 37,  110 => 36,  103 => 32,  95 => 27,  90 => 25,  83 => 23,  80 => 22,  76 => 20,  70 => 19,  60 => 17,  57 => 16,  43 => 15,  40 => 14,  37 => 13,  34 => 12,  30 => 11,  27 => 10,  25 => 9,);
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
{% set multiple_actions %}
    <div>
        {% for action in column.actions %}
            {% if action.isRenderIfClosure %}
                {% set route = action.route ? path(action.route, action.routeParameters) : '' %}
                {% set attributes %}
                    {% for key, value in action.attributes %} {{ key }}='{{ value }}'{% endfor %}
                {% endset %}
                <a href=\"{{ route }}\" {{ attributes }}>{{ datatable_icon(action.icon, action.label) }}</a>
            {% endif %}
        {% endfor %}
    </div>
{% endset %}

\$(\"#{{ view_table_id }}_multiselect_actions\").append(\"{{ multiple_actions|e('js') }}\");

\$(\".{{ view_table_id }}_multiselect_checkall\").click(function(event) {
    var that = this;
    \$(\"input.{{ view_table_id }}_multiselect_checkbox:checkbox\").each(function() {
        this.checked = that.checked;
    });
});

\$(selector).on('click', 'input.{{ view_table_id }}_multiselect_checkbox', function(event) {
    updateCheckAll();
});

\$(\".{{ view_table_id }}_multiselect_action_click\").on('click', function(event) {
    var length = \$(\"input.{{ view_table_id }}_multiselect_checkbox:checkbox:checked\").length;

    event.preventDefault();

    if (length > 0) {
        if (!confirm( \"{{ 'datatables.bulk.confirmMsg'|trans({}, 'messages') }}\" )) {
            return;
        }

        {% set token = csrf_token('multiselect') %}

        \$.ajax({
            url: \$(this).attr(\"href\"),
            type: \"POST\",
            cache: false,
            data: {
                'data': \$(\"input:checkbox:checked.{{ view_table_id }}_multiselect_checkbox\", oTable.rows().nodes()).serializeArray(),
                'token': '{{ token }}'
            },
            success: function(msg) {
                {% if view_ajax.pipeline > 0 %}
                    oTable.clearPipeline().draw();
                {% else %}
                    oTable.draw();
                {% endif %}
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest + ' ' + textStatus + ' ' +errorThrown);
            }
        })
    } else {
        alert(\"{{ 'datatables.bulk.selectError'|trans({}, 'messages') }}\");
    }
});

function updateCheckAll(){
    var \$individual_all        = \$(\"input.{{ view_table_id }}_multiselect_checkbox:checkbox\");
    var \$individual_checked    = \$(\"input.{{ view_table_id }}_multiselect_checkbox:checkbox:checked\");
    var \$all                   = \$(\".{{ view_table_id }}_multiselect_checkall\");

    if(\$individual_checked.length === 0){
        \$all.prop('checked', false);
        \$all.prop('indeterminate', false);
    } else if (\$individual_checked.length === \$individual_all.length){
        \$all.prop('checked', true);
        \$all.prop('indeterminate', false);
    } else {
        \$all.prop('checked', false);
        \$all.prop('indeterminate', true);
    }
}
", "@SgDatatables/Action/multiselect_actions.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Action\\multiselect_actions.html.twig");
    }
}
