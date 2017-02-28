<?php

/* @SgDatatables/Datatable/datatable_html.html.twig */
class __TwigTemplate_ec50682472f3218a8568c53576aa955086554a98e8b6ff0421fa2cb1291effd2 extends Twig_Template
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
        $__internal_b55b2aed822391331ade39a43135ef16cff28e77a9739565d8fe15db113da7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55b2aed822391331ade39a43135ef16cff28e77a9739565d8fe15db113da7bb->enter($__internal_b55b2aed822391331ade39a43135ef16cff28e77a9739565d8fe15db113da7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable_html.html.twig"));

        $__internal_9b613c78177bb44737964a783c6dd54d89bb4335b4ce864df26d34609362c7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b613c78177bb44737964a783c6dd54d89bb4335b4ce864df26d34609362c7f8->enter($__internal_9b613c78177bb44737964a783c6dd54d89bb4335b4ce864df26d34609362c7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable_html.html.twig"));

        // line 9
        if ((true == $this->getAttribute((isset($context["view_actions"]) ? $context["view_actions"] : $this->getContext($context, "view_actions")), "isAddIfClosure", array()))) {
            // line 10
            echo "    ";
            echo $this->getAttribute((isset($context["view_actions"]) ? $context["view_actions"] : $this->getContext($context, "view_actions")), "startHtml", array());
            echo "
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["view_actions"]) ? $context["view_actions"] : $this->getContext($context, "view_actions")), "actions", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 12
                echo "        ";
                $this->loadTemplate("SgDatatablesBundle:Action:top_actions.html.twig", "@SgDatatables/Datatable/datatable_html.html.twig", 12)->display($context);
                // line 13
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
            echo $this->getAttribute((isset($context["view_actions"]) ? $context["view_actions"] : $this->getContext($context, "view_actions")), "endHtml", array());
            echo "
";
        }
        // line 16
        echo "
<table cellpadding=\"0\" cellspacing=\"0\" class=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "class", array()), "html", null, true);
        echo "\" border=\"0\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
        echo "\" width=\"100%\">
    <thead>
    </thead>
    ";
        // line 20
        if (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "individualFiltering", array()) || (isset($context["view_multiselect"]) ? $context["view_multiselect"] : $this->getContext($context, "view_multiselect")))) {
            // line 21
            echo "        <tfoot>
            ";
            // line 22
            if ($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "individualFiltering", array())) {
                // line 23
                echo "            <tr>
                ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["view_columns"]) ? $context["view_columns"] : $this->getContext($context, "view_columns")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 25
                    echo "                    <td>
                        ";
                    // line 26
                    if ($this->getAttribute($context["column"], "searchable", array())) {
                        // line 27
                        echo "                            ";
                        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatableFilterRender($this->env, (isset($context["datatable"]) ? $context["datatable"] : $this->getContext($context, "datatable")), $context["column"], $this->getAttribute($context["loop"], "index0", array()));
                        echo "
                        ";
                    }
                    // line 29
                    echo "                    </td>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "            </tr>
            ";
            }
            // line 33
            echo "        </tfoot>
    ";
        }
        // line 35
        echo "    <tbody>
    </tbody>
</table>

";
        // line 39
        if ((isset($context["view_multiselect"]) ? $context["view_multiselect"] : $this->getContext($context, "view_multiselect"))) {
            // line 40
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["view_table_id"]) ? $context["view_table_id"] : $this->getContext($context, "view_table_id")), "html", null, true);
            echo "_multiselect_actions\"></div>
";
        }
        
        $__internal_b55b2aed822391331ade39a43135ef16cff28e77a9739565d8fe15db113da7bb->leave($__internal_b55b2aed822391331ade39a43135ef16cff28e77a9739565d8fe15db113da7bb_prof);

        
        $__internal_9b613c78177bb44737964a783c6dd54d89bb4335b4ce864df26d34609362c7f8->leave($__internal_9b613c78177bb44737964a783c6dd54d89bb4335b4ce864df26d34609362c7f8_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Datatable/datatable_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 40,  150 => 39,  144 => 35,  140 => 33,  136 => 31,  121 => 29,  115 => 27,  113 => 26,  110 => 25,  93 => 24,  90 => 23,  88 => 22,  85 => 21,  83 => 20,  75 => 17,  72 => 16,  66 => 14,  52 => 13,  49 => 12,  32 => 11,  27 => 10,  25 => 9,);
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
{% if true == view_actions.isAddIfClosure %}
    {{ view_actions.startHtml|raw }}
    {% for action in view_actions.actions %}
        {% include 'SgDatatablesBundle:Action:top_actions.html.twig' %}
    {% endfor %}
    {{ view_actions.endHtml|raw }}
{% endif %}

<table cellpadding=\"0\" cellspacing=\"0\" class=\"{{ view_options.class }}\" border=\"0\" id=\"{{ view_table_id }}\" width=\"100%\">
    <thead>
    </thead>
    {% if view_options.individualFiltering or view_multiselect %}
        <tfoot>
            {% if view_options.individualFiltering %}
            <tr>
                {% for column in view_columns %}
                    <td>
                        {% if column.searchable %}
                            {{ datatable_filter_render(datatable, column, loop.index0) }}
                        {% endif %}
                    </td>
                {% endfor %}
            </tr>
            {% endif %}
        </tfoot>
    {% endif %}
    <tbody>
    </tbody>
</table>

{% if view_multiselect %}
    <div id=\"{{ view_table_id }}_multiselect_actions\"></div>
{% endif %}
", "@SgDatatables/Datatable/datatable_html.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Datatable\\datatable_html.html.twig");
    }
}
