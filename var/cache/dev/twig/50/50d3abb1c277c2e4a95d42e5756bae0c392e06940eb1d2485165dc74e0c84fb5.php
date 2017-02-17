<?php

/* @SgDatatables/Datatable/highlight.js.twig */
class __TwigTemplate_bbdbe6079177d3fc143ad0fbf839159bbafc6110661f90f0984e50ee0bf22b34 extends Twig_Template
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
        $__internal_bd83d214aa97d29fc135c7a11b089f0ef2def55b24f888730a036bc86daa7d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd83d214aa97d29fc135c7a11b089f0ef2def55b24f888730a036bc86daa7d07->enter($__internal_bd83d214aa97d29fc135c7a11b089f0ef2def55b24f888730a036bc86daa7d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/highlight.js.twig"));

        $__internal_e0f01edeaa18c4820b7337f484efedfc74a17628bb6cb9de86a8341d23d8fcc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f01edeaa18c4820b7337f484efedfc74a17628bb6cb9de86a8341d23d8fcc1->enter($__internal_e0f01edeaa18c4820b7337f484efedfc74a17628bb6cb9de86a8341d23d8fcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/highlight.js.twig"));

        // line 9
        echo "
function highlightTable(v) {
    try {
        \$(selector).not(\".select2-selection__rendered\").highlight(v);
        \$(\".highlight\").css({ backgroundColor: \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_features"]) ? $context["view_features"] : $this->getContext($context, "view_features")), "highlightColor", array()), "js", null, true);
        echo "\" });
    } catch(e) {
        console.log(e.message + ': Make sure that jquery.highlight.js is loaded.');
    }
}

function removeHighlight() {
    \$(selector).removeClass(\"highlight\");
}

function storageValue(field, value) {
    localStorage.setItem(field, value);
}

function getStorageValue(field) {
    var myValue = null;
    if (localStorage.getItem(field)) {
        myValue = localStorage.getItem(field);
    }

    return myValue;
}

function getValue(t) {
    return \$(t).val();
}

function setupHighlight(fieldId, searchValue, val) {
    if (getStorageValue(fieldId) == null && val == searchValue) {
        removeHighlight();
    }

    if (getStorageValue(fieldId) && val == searchValue) {
        highlightTable(getStorageValue(fieldId));
    }

    storageValue(fieldId, val);
}

";
        // line 53
        echo "highlightTable(oTable.search());

";
        // line 56
        if ($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "individualFiltering", array())) {
            // line 57
            echo "
    ";
            // line 59
            echo "    ";
            if (("head" == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "individualFilteringPosition", array()))) {
                // line 60
                echo "        \$(selector + \"_wrapper\").find(\"tr .individual_filtering\").not(\"input[style='display: none;']\").each(function() {
            var searchValue = \$(this).data('search-column');
            var fieldId = \$(this).data('filter-property-id');

            var val = getValue(this);

            ";
                // line 67
                echo "            if (val) {
                if (val.constructor == Array) {
                    for (var index = 0; index < val.length; ++index) {
                        highlightTable(val[index]);
                    }
                }
            }

            ";
                // line 76
                echo "            if (\$(this).data('select2')) {
                var s2 = \$(this).select2('val');
                if (s2) {
                    if (s2.constructor == Array) {
                        for (index = 0; index < s2.length; ++index) {
                            highlightTable(s2[index]);
                        }
                    }
                }
            }

            setupHighlight(fieldId, searchValue, val);
        });
    ";
            }
            // line 90
            echo "
    ";
            // line 92
            echo "    ";
            if (("foot" == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "individualFilteringPosition", array()))) {
                // line 93
                echo "        console.info('foot position: highlight feature not implemented');
    ";
            }
            // line 95
            echo "
    ";
            // line 97
            echo "    ";
            if (("both" == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "individualFilteringPosition", array()))) {
                // line 98
                echo "        console.info('both position: highlight feature not implemented');
    ";
            }
            // line 100
            echo "
";
        }
        
        $__internal_bd83d214aa97d29fc135c7a11b089f0ef2def55b24f888730a036bc86daa7d07->leave($__internal_bd83d214aa97d29fc135c7a11b089f0ef2def55b24f888730a036bc86daa7d07_prof);

        
        $__internal_e0f01edeaa18c4820b7337f484efedfc74a17628bb6cb9de86a8341d23d8fcc1->leave($__internal_e0f01edeaa18c4820b7337f484efedfc74a17628bb6cb9de86a8341d23d8fcc1_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Datatable/highlight.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 100,  135 => 98,  132 => 97,  129 => 95,  125 => 93,  122 => 92,  119 => 90,  103 => 76,  93 => 67,  85 => 60,  82 => 59,  79 => 57,  77 => 56,  73 => 53,  31 => 13,  25 => 9,);
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

function highlightTable(v) {
    try {
        \$(selector).not(\".select2-selection__rendered\").highlight(v);
        \$(\".highlight\").css({ backgroundColor: \"{{ view_features.highlightColor }}\" });
    } catch(e) {
        console.log(e.message + ': Make sure that jquery.highlight.js is loaded.');
    }
}

function removeHighlight() {
    \$(selector).removeClass(\"highlight\");
}

function storageValue(field, value) {
    localStorage.setItem(field, value);
}

function getStorageValue(field) {
    var myValue = null;
    if (localStorage.getItem(field)) {
        myValue = localStorage.getItem(field);
    }

    return myValue;
}

function getValue(t) {
    return \$(t).val();
}

function setupHighlight(fieldId, searchValue, val) {
    if (getStorageValue(fieldId) == null && val == searchValue) {
        removeHighlight();
    }

    if (getStorageValue(fieldId) && val == searchValue) {
        highlightTable(getStorageValue(fieldId));
    }

    storageValue(fieldId, val);
}

{# global search #}
highlightTable(oTable.search());

{# individual filtering #}
{% if view_options.individualFiltering %}

    {# head #}
    {% if 'head' == view_options.individualFilteringPosition %}
        \$(selector + \"_wrapper\").find(\"tr .individual_filtering\").not(\"input[style='display: none;']\").each(function() {
            var searchValue = \$(this).data('search-column');
            var fieldId = \$(this).data('filter-property-id');

            var val = getValue(this);

            {# multiselect #}
            if (val) {
                if (val.constructor == Array) {
                    for (var index = 0; index < val.length; ++index) {
                        highlightTable(val[index]);
                    }
                }
            }

            {# select2 multiselect #}
            if (\$(this).data('select2')) {
                var s2 = \$(this).select2('val');
                if (s2) {
                    if (s2.constructor == Array) {
                        for (index = 0; index < s2.length; ++index) {
                            highlightTable(s2[index]);
                        }
                    }
                }
            }

            setupHighlight(fieldId, searchValue, val);
        });
    {% endif %}

    {# foot #}
    {% if 'foot' == view_options.individualFilteringPosition %}
        console.info('foot position: highlight feature not implemented');
    {% endif %}

    {# both #}
    {% if 'both' == view_options.individualFilteringPosition %}
        console.info('both position: highlight feature not implemented');
    {% endif %}

{% endif %}
", "@SgDatatables/Datatable/highlight.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Datatable\\highlight.js.twig");
    }
}
