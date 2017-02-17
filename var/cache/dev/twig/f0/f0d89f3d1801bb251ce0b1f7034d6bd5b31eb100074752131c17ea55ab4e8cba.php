<?php

/* SgDatatablesBundle:Column:array.html.twig */
class __TwigTemplate_ac4f2984505110665aa982fcde9928b40ddb8a43608e266d64742261e6b714cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:array.html.twig", 9);
        $this->blocks = array(
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Column:column.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc36ea976dcf17bd70c39d24344fcb60a38b1352316aeb76e6250a105fd17530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc36ea976dcf17bd70c39d24344fcb60a38b1352316aeb76e6250a105fd17530->enter($__internal_dc36ea976dcf17bd70c39d24344fcb60a38b1352316aeb76e6250a105fd17530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:array.html.twig"));

        $__internal_cd10866a503de0079159d97c06bbefefcd96c8433d8428763af598112e04b160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd10866a503de0079159d97c06bbefefcd96c8433d8428763af598112e04b160->enter($__internal_cd10866a503de0079159d97c06bbefefcd96c8433d8428763af598112e04b160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:array.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc36ea976dcf17bd70c39d24344fcb60a38b1352316aeb76e6250a105fd17530->leave($__internal_dc36ea976dcf17bd70c39d24344fcb60a38b1352316aeb76e6250a105fd17530_prof);

        
        $__internal_cd10866a503de0079159d97c06bbefefcd96c8433d8428763af598112e04b160->leave($__internal_cd10866a503de0079159d97c06bbefefcd96c8433d8428763af598112e04b160_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_3e47e41052063fbd87240a6931529c8fa52debb12fe873c304960701b5695a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e47e41052063fbd87240a6931529c8fa52debb12fe873c304960701b5695a85->enter($__internal_3e47e41052063fbd87240a6931529c8fa52debb12fe873c304960701b5695a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_ab173ecb73b3b9dca144c45c6d4d42c75c5b3cca372d93456fb185edcd0632b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab173ecb73b3b9dca144c45c6d4d42c75c5b3cca372d93456fb185edcd0632b8->enter($__internal_ab173ecb73b3b9dca144c45c6d4d42c75c5b3cca372d93456fb185edcd0632b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        // line 13
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "default", array()) && (null === $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array())))) {
            // line 14
            echo "        \"render\": function(data) {
            if (\"\" == data) {
                return \"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "default", array()), "html", null, true);
            echo "\";
            } else {
                return data;
            }
        },
    ";
        }
        // line 22
        echo "    ";
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "count", array()) && (null === $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array())))) {
            // line 23
            echo "        \"render\": function(data, type, row, meta) {
            var array = data.split(',');
            var count = (data == '') ? 0 : array.length;
            ";
            // line 26
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "countAction", array())) {
                // line 27
                echo "                ";
                $this->loadTemplate("SgDatatablesBundle:Action:action.html.twig", "SgDatatablesBundle:Column:array.html.twig", 27)->display(array_merge($context, array("actions" => $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "countAction", array()))));
                // line 28
                echo "            ";
            } else {
                // line 29
                echo "                return count;
            ";
            }
            // line 31
            echo "        },
    ";
        }
        // line 33
        echo "    ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array())) {
            // line 34
            echo "        \"render\": function(data, type, row, meta) {
            return ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array()), "html", null, true);
            echo "(data, type, row, meta);
        },
    ";
        }
        
        $__internal_ab173ecb73b3b9dca144c45c6d4d42c75c5b3cca372d93456fb185edcd0632b8->leave($__internal_ab173ecb73b3b9dca144c45c6d4d42c75c5b3cca372d93456fb185edcd0632b8_prof);

        
        $__internal_3e47e41052063fbd87240a6931529c8fa52debb12fe873c304960701b5695a85->leave($__internal_3e47e41052063fbd87240a6931529c8fa52debb12fe873c304960701b5695a85_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 35,  96 => 34,  93 => 33,  89 => 31,  85 => 29,  82 => 28,  79 => 27,  77 => 26,  72 => 23,  69 => 22,  60 => 16,  56 => 14,  54 => 13,  49 => 12,  40 => 11,  11 => 9,);
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

{% block data %}
    \"data\": \"{{ column.data }}\",
    {% if column.default and column.render is null %}
        \"render\": function(data) {
            if (\"\" == data) {
                return \"{{ column.default }}\";
            } else {
                return data;
            }
        },
    {% endif %}
    {% if column.count and column.render is null %}
        \"render\": function(data, type, row, meta) {
            var array = data.split(',');
            var count = (data == '') ? 0 : array.length;
            {% if (column.countAction) %}
                {% include 'SgDatatablesBundle:Action:action.html.twig' with { 'actions': column.countAction } %}
            {% else %}
                return count;
            {% endif %}
        },
    {% endif %}
    {% if column.render %}
        \"render\": function(data, type, row, meta) {
            return {{ column.render }}(data, type, row, meta);
        },
    {% endif %}
{% endblock %}
", "SgDatatablesBundle:Column:array.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/array.html.twig");
    }
}
