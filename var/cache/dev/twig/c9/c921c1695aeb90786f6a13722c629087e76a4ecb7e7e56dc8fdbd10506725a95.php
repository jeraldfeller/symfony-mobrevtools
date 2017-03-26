<?php

/* @SgDatatables/Datatable/search_columns.html.twig */
class __TwigTemplate_5cf11024df1a4d3fb901712fedb8ca323adcfff7eaca6c9e57324f73d4782e1b extends Twig_Template
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
        $__internal_f0043d2376f8d7f7fd84b43fd07afd66cf1ef5847936cec6ec09dae735695d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0043d2376f8d7f7fd84b43fd07afd66cf1ef5847936cec6ec09dae735695d68->enter($__internal_f0043d2376f8d7f7fd84b43fd07afd66cf1ef5847936cec6ec09dae735695d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/search_columns.html.twig"));

        $__internal_6380116bc15279ff70c9c095fd1aad0ee06697e0968cda978e82156e13d59010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6380116bc15279ff70c9c095fd1aad0ee06697e0968cda978e82156e13d59010->enter($__internal_6380116bc15279ff70c9c095fd1aad0ee06697e0968cda978e82156e13d59010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/search_columns.html.twig"));

        // line 9
        echo "\"searchCols\": [
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["view_columns"]) ? $context["view_columns"] : $this->getContext($context, "view_columns")));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "        ";
            if (($this->getAttribute($this->getAttribute($context["column"], "filter", array(), "any", false, true), "searchColumn", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["column"], "filter", array()), "searchColumn", array())) > 0))) {
                echo "{\"search\" : \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["column"], "filter", array()), "searchColumn", array()), "html", null, true);
                echo "\"}";
            } else {
                echo "null";
            }
            echo ",
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "]
";
        
        $__internal_f0043d2376f8d7f7fd84b43fd07afd66cf1ef5847936cec6ec09dae735695d68->leave($__internal_f0043d2376f8d7f7fd84b43fd07afd66cf1ef5847936cec6ec09dae735695d68_prof);

        
        $__internal_6380116bc15279ff70c9c095fd1aad0ee06697e0968cda978e82156e13d59010->leave($__internal_6380116bc15279ff70c9c095fd1aad0ee06697e0968cda978e82156e13d59010_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Datatable/search_columns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  32 => 11,  28 => 10,  25 => 9,);
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
\"searchCols\": [
    {% for column in view_columns %}
        {% if column.filter.searchColumn is defined and column.filter.searchColumn|length > 0 %}{\"search\" : \"{{ column.filter.searchColumn }}\"}{% else %}null{% endif %},
    {% endfor %}
]
", "@SgDatatables/Datatable/search_columns.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Datatable\\search_columns.html.twig");
    }
}
