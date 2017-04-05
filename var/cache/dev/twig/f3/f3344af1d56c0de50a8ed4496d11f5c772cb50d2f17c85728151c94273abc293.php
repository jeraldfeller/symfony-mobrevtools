<?php

/* SgDatatablesBundle:Datatable:datatable_js.html.twig */
class __TwigTemplate_726598927a441166d01a64483acd030577407de472df982091115c46e30e51de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sg_datatable_render_functions' => array($this, 'block_sg_datatable_render_functions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6d29fe900394b2b1a4a22c6bb8f467a74d3e2dd12c1ec3a0b78a99cb0e8917d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d29fe900394b2b1a4a22c6bb8f467a74d3e2dd12c1ec3a0b78a99cb0e8917d->enter($__internal_a6d29fe900394b2b1a4a22c6bb8f467a74d3e2dd12c1ec3a0b78a99cb0e8917d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable_js.html.twig"));

        $__internal_f38e8731293ad914f040e1026b27d620451bcb1ca7f97658aa10980dd92fb6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38e8731293ad914f040e1026b27d620451bcb1ca7f97658aa10980dd92fb6c8->enter($__internal_f38e8731293ad914f040e1026b27d620451bcb1ca7f97658aa10980dd92fb6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable_js.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {

        if (typeof window.pipelineFunctionAlreadyLoaded == 'undefined') {
            ";
        // line 5
        if (($this->getAttribute((isset($context["view_ajax"]) ? $context["view_ajax"] : $this->getContext($context, "view_ajax")), "pipeline", array()) > 0)) {
            // line 6
            echo "               ";
            $this->loadTemplate("SgDatatablesBundle:Datatable:pipeline.js.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 6)->display($context);
            // line 7
            echo "            ";
        }
        // line 8
        echo "        }

        var selector = \"#";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "\";

        var defaults = {
            ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:language.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 13)->display($context);
        // line 14
        echo "        };

        var features = {
            ";
        // line 17
        $this->loadTemplate("SgDatatablesBundle:Datatable:features.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 17)->display($context);
        // line 18
        echo "        };

        var options = {
            ";
        // line 21
        $this->loadTemplate("SgDatatablesBundle:Datatable:options.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 21)->display($context);
        // line 22
        echo "        };

        var callbacks = {
            ";
        // line 25
        $this->loadTemplate("SgDatatablesBundle:Datatable:callbacks.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 25)->display($context);
        // line 26
        echo "        };

        var ajax = {
            ";
        // line 29
        $this->loadTemplate("SgDatatablesBundle:Datatable:ajax.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 29)->display($context);
        // line 30
        echo "        };

        var searchCols = {
            ";
        // line 33
        $this->loadTemplate("SgDatatablesBundle:Datatable:search_columns.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 33)->display($context);
        // line 34
        echo "        };

        setTimeout(function() {
            var columns = {
                ";
        // line 38
        $this->loadTemplate("SgDatatablesBundle:Datatable:columns.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 38)->display($context);
        // line 39
        echo "            };

            \$.extend(defaults, features);
            \$.extend(defaults, options);
            \$.extend(defaults, callbacks);
            \$.extend(defaults, ajax);
            \$.extend(defaults, columns);
            \$.extend(defaults, searchCols);

            if (\$.fn.DataTable.isDataTable(selector)) {
                ";
        // line 52
        echo "            } else {
                var oTable = \$(selector)
                ";
        // line 55
        echo "                ";
        if ($this->getAttribute($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "extensions", array(), "any", false, true), "buttons", array(), "any", true, true)) {
            // line 56
            echo "                    ";
            if (((true == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "useIntegrationOptions", array())) && (false == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "getForceDom", array())))) {
                // line 57
                echo "                        .on('init.dt',
                            function() {
                                if ('bootstrap' == oTable.context[0].renderer) {
                                    oTable.buttons().container().appendTo('#' + oTable.table().container().id + ' .col-sm-6:eq(0)');
                                }

                                if ('foundation' == oTable.context[0].renderer) {
                                    oTable.buttons().container().appendTo('#' + oTable.table().container().id + ' .small-6.columns:eq(0)');
                                }

                                if ('jqueryui' == oTable.context[0].renderer) {
                                    oTable.buttons().container().appendTo('#' + oTable.table().container().id);
                                }
                            }
                        )
                    ";
            }
            // line 73
            echo "                ";
        }
        // line 74
        echo "                ";
        $this->loadTemplate("SgDatatablesBundle:Datatable:before_events.js.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 74)->display($context);
        // line 75
        echo "                .DataTable(defaults)
                        .on('draw.dt', function() {
                            ";
        // line 77
        $this->loadTemplate("SgDatatablesBundle:Datatable:editable.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 77)->display($context);
        // line 78
        echo "                            ";
        if ((true == $this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "highlight", array()))) {
            // line 79
            echo "                                ";
            $this->loadTemplate("SgDatatablesBundle:Datatable:highlight.js.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 79)->display($context);
            // line 80
            echo "                            ";
        }
        // line 81
        echo "                        })
                        ";
        // line 82
        $this->loadTemplate("SgDatatablesBundle:Datatable:after_events.js.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 82)->display($context);
        // line 83
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : null), "extensions", array(), "any", false, true), "responsive", array(), "any", true, true)) {
            // line 84
            echo "                            ";
            if ((true == $this->getAttribute($this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "extensions", array()), "responsive", array()))) {
                // line 85
                echo "                                .on( 'responsive-display', function ( e, datatable, row, showHide, update ) {
                                    if (showHide) {
                                        ";
                // line 87
                $this->loadTemplate("SgDatatablesBundle:Datatable:editable.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 87)->display($context);
                // line 88
                echo "                                    }
                                });
                            ";
            }
            // line 91
            echo "                        ";
        }
        // line 92
        echo "            }

            ";
        // line 94
        if ($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "individualFiltering", array())) {
            // line 95
            echo "
                ";
            // line 96
            if (("head" == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "individualFilteringPosition", array()))) {
                // line 97
                echo "                    \$(selector + '_wrapper tfoot tr').insertAfter(\$(selector + '_wrapper thead tr').first());
                ";
            }
            // line 99
            echo "
                ";
            // line 100
            if (("both" == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "individualFilteringPosition", array()))) {
                // line 101
                echo "                    \$(selector + '_wrapper tfoot tr').clone().insertAfter(\$(selector + '_wrapper thead tr').first());
                ";
            }
            // line 103
            echo "
                ";
            // line 105
            echo "
                var throttledSearch = \$.fn.DataTable.util.throttle(
                    function (event) {
                        if (event.type == \"keyup\") {
                            if (
                                    event.keyCode == 37 ||
                                    event.keyCode == 38 ||
                                    event.keyCode == 39 ||
                                    event.keyCode == 40 ||
                                    event.keyCode == 16 ||
                                    event.keyCode == 17 ||
                                    event.keyCode == 18
                            )
                                return;
                        }

                        oTable
                                .column(\$(event.currentTarget).data('filter-property-id'))
                                .search(this.value)
                                .draw();
                    },
                    options.searchDelay
                );

                \$(selector + \"_wrapper\").find(\"tr input.individual_filtering\").on(\"keyup change\", throttledSearch);

                \$(selector + \"_wrapper\" + \" select.individual_filtering\").on(\"keyup change\", function(event) {
                    var searchFieldId = \$(event.currentTarget).data('filter-property-id');
                    var searchValue = \$(this).val();
                    searchValue = searchValue ? searchValue.toString() : '';
                    oTable
                        .column(searchFieldId)
                        .search(searchValue)
                        .draw();
                });

            ";
        }
        // line 142
        echo "
            ";
        // line 143
        if ((isset($context["view_multiselect"]) ? $context["view_multiselect"] : $this->getContext($context, "view_multiselect"))) {
            // line 144
            echo "                ";
            $this->loadTemplate("SgDatatablesBundle:Action:multiselect_actions.html.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 144)->display(array_merge($context, array("column" => (isset($context["view_multiselect_column"]) ? $context["view_multiselect_column"] : $this->getContext($context, "view_multiselect_column")))));
            // line 145
            echo "            ";
        }
        // line 146
        echo "
        }, features.delay);
    });

</script>

";
        // line 152
        $this->displayBlock('sg_datatable_render_functions', $context, $blocks);
        
        $__internal_a6d29fe900394b2b1a4a22c6bb8f467a74d3e2dd12c1ec3a0b78a99cb0e8917d->leave($__internal_a6d29fe900394b2b1a4a22c6bb8f467a74d3e2dd12c1ec3a0b78a99cb0e8917d_prof);

        
        $__internal_f38e8731293ad914f040e1026b27d620451bcb1ca7f97658aa10980dd92fb6c8->leave($__internal_f38e8731293ad914f040e1026b27d620451bcb1ca7f97658aa10980dd92fb6c8_prof);

    }

    public function block_sg_datatable_render_functions($context, array $blocks = array())
    {
        $__internal_0a4a822973a92917cd5750fe722cd69fab2c9dd3e33cc6ae799e43a525ccbd1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4a822973a92917cd5750fe722cd69fab2c9dd3e33cc6ae799e43a525ccbd1d->enter($__internal_0a4a822973a92917cd5750fe722cd69fab2c9dd3e33cc6ae799e43a525ccbd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_render_functions"));

        $__internal_bac5cd0329412c611514c01f16601322777ed656ba32fb78f51e9d4bd9db6d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac5cd0329412c611514c01f16601322777ed656ba32fb78f51e9d4bd9db6d67->enter($__internal_bac5cd0329412c611514c01f16601322777ed656ba32fb78f51e9d4bd9db6d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_render_functions"));

        // line 153
        echo "
    <script type=\"text/javascript\">
        if (typeof window.renderFunctionsAlreadyLoaded == 'undefined') {
            ";
        // line 156
        $this->loadTemplate("SgDatatablesBundle:Datatable:render_functions.js.twig", "SgDatatablesBundle:Datatable:datatable_js.html.twig", 156)->display($context);
        // line 157
        echo "        }
    </script>

";
        
        $__internal_bac5cd0329412c611514c01f16601322777ed656ba32fb78f51e9d4bd9db6d67->leave($__internal_bac5cd0329412c611514c01f16601322777ed656ba32fb78f51e9d4bd9db6d67_prof);

        
        $__internal_0a4a822973a92917cd5750fe722cd69fab2c9dd3e33cc6ae799e43a525ccbd1d->leave($__internal_0a4a822973a92917cd5750fe722cd69fab2c9dd3e33cc6ae799e43a525ccbd1d_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:datatable_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 157,  289 => 156,  284 => 153,  266 => 152,  258 => 146,  255 => 145,  252 => 144,  250 => 143,  247 => 142,  208 => 105,  205 => 103,  201 => 101,  199 => 100,  196 => 99,  192 => 97,  190 => 96,  187 => 95,  185 => 94,  181 => 92,  178 => 91,  173 => 88,  171 => 87,  167 => 85,  164 => 84,  161 => 83,  159 => 82,  156 => 81,  153 => 80,  150 => 79,  147 => 78,  145 => 77,  141 => 75,  138 => 74,  135 => 73,  117 => 57,  114 => 56,  111 => 55,  107 => 52,  95 => 39,  93 => 38,  87 => 34,  85 => 33,  80 => 30,  78 => 29,  73 => 26,  71 => 25,  66 => 22,  64 => 21,  59 => 18,  57 => 17,  52 => 14,  50 => 13,  44 => 10,  40 => 8,  37 => 7,  34 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">
    \$(document).ready(function () {

        if (typeof window.pipelineFunctionAlreadyLoaded == 'undefined') {
            {% if view_ajax.pipeline > 0 %}
               {% include \"SgDatatablesBundle:Datatable:pipeline.js.twig\" %}
            {% endif %}
        }

        var selector = \"#{{ view_table_id }}\";

        var defaults = {
            {% include \"SgDatatablesBundle:Datatable:language.html.twig\" %}
        };

        var features = {
            {% include \"SgDatatablesBundle:Datatable:features.html.twig\" %}
        };

        var options = {
            {% include \"SgDatatablesBundle:Datatable:options.html.twig\" %}
        };

        var callbacks = {
            {% include \"SgDatatablesBundle:Datatable:callbacks.html.twig\" %}
        };

        var ajax = {
            {% include \"SgDatatablesBundle:Datatable:ajax.html.twig\" %}
        };

        var searchCols = {
            {% include \"SgDatatablesBundle:Datatable:search_columns.html.twig\" %}
        };

        setTimeout(function() {
            var columns = {
                {% include \"SgDatatablesBundle:Datatable:columns.html.twig\" %}
            };

            \$.extend(defaults, features);
            \$.extend(defaults, options);
            \$.extend(defaults, callbacks);
            \$.extend(defaults, ajax);
            \$.extend(defaults, columns);
            \$.extend(defaults, searchCols);

            if (\$.fn.DataTable.isDataTable(selector)) {
                {#
                    to check if datatable already exists
                #}
            } else {
                var oTable = \$(selector)
                {# Use the Button-Extension with integration options #}
                {% if view_features.extensions.buttons is defined %}
                    {% if true == view_options.useIntegrationOptions and false == view_options.getForceDom %}
                        .on('init.dt',
                            function() {
                                if ('bootstrap' == oTable.context[0].renderer) {
                                    oTable.buttons().container().appendTo('#' + oTable.table().container().id + ' .col-sm-6:eq(0)');
                                }

                                if ('foundation' == oTable.context[0].renderer) {
                                    oTable.buttons().container().appendTo('#' + oTable.table().container().id + ' .small-6.columns:eq(0)');
                                }

                                if ('jqueryui' == oTable.context[0].renderer) {
                                    oTable.buttons().container().appendTo('#' + oTable.table().container().id);
                                }
                            }
                        )
                    {% endif %}
                {% endif %}
                {% include \"SgDatatablesBundle:Datatable:before_events.js.twig\" %}
                .DataTable(defaults)
                        .on('draw.dt', function() {
                            {% include \"SgDatatablesBundle:Datatable:editable.html.twig\" %}
                            {% if true == view_features.highlight %}
                                {% include \"SgDatatablesBundle:Datatable:highlight.js.twig\" %}
                            {% endif %}
                        })
                        {% include \"SgDatatablesBundle:Datatable:after_events.js.twig\" %}
                        {% if view_features.extensions.responsive is defined %}
                            {% if true == view_features.extensions.responsive %}
                                .on( 'responsive-display', function ( e, datatable, row, showHide, update ) {
                                    if (showHide) {
                                        {% include \"SgDatatablesBundle:Datatable:editable.html.twig\" %}
                                    }
                                });
                            {% endif %}
                        {% endif %}
            }

            {% if view_options.individualFiltering %}

                {% if \"head\" == view_options.individualFilteringPosition %}
                    \$(selector + '_wrapper tfoot tr').insertAfter(\$(selector + '_wrapper thead tr').first());
                {% endif %}

                {% if \"both\" == view_options.individualFilteringPosition %}
                    \$(selector + '_wrapper tfoot tr').clone().insertAfter(\$(selector + '_wrapper thead tr').first());
                {% endif %}

                {# \"foot\" position -> datatable_html.html.twig #}

                var throttledSearch = \$.fn.DataTable.util.throttle(
                    function (event) {
                        if (event.type == \"keyup\") {
                            if (
                                    event.keyCode == 37 ||
                                    event.keyCode == 38 ||
                                    event.keyCode == 39 ||
                                    event.keyCode == 40 ||
                                    event.keyCode == 16 ||
                                    event.keyCode == 17 ||
                                    event.keyCode == 18
                            )
                                return;
                        }

                        oTable
                                .column(\$(event.currentTarget).data('filter-property-id'))
                                .search(this.value)
                                .draw();
                    },
                    options.searchDelay
                );

                \$(selector + \"_wrapper\").find(\"tr input.individual_filtering\").on(\"keyup change\", throttledSearch);

                \$(selector + \"_wrapper\" + \" select.individual_filtering\").on(\"keyup change\", function(event) {
                    var searchFieldId = \$(event.currentTarget).data('filter-property-id');
                    var searchValue = \$(this).val();
                    searchValue = searchValue ? searchValue.toString() : '';
                    oTable
                        .column(searchFieldId)
                        .search(searchValue)
                        .draw();
                });

            {% endif %}

            {% if view_multiselect %}
                {% include \"SgDatatablesBundle:Action:multiselect_actions.html.twig\" with {'column': view_multiselect_column} %}
            {% endif %}

        }, features.delay);
    });

</script>

{% block sg_datatable_render_functions %}

    <script type=\"text/javascript\">
        if (typeof window.renderFunctionsAlreadyLoaded == 'undefined') {
            {% include \"SgDatatablesBundle:Datatable:render_functions.js.twig\" %}
        }
    </script>

{% endblock %}
", "SgDatatablesBundle:Datatable:datatable_js.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Datatable/datatable_js.html.twig");
    }
}
