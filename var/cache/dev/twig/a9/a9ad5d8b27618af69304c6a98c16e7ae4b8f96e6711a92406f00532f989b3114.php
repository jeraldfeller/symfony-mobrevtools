<?php

/* SgDatatablesBundle:Action:actions_string.html.twig */
class __TwigTemplate_7db7a36e1bd87cbfcf27db99172d7493a08075d44ed5ca42d2c7649eb1c6ef5e extends Twig_Template
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
        $__internal_2620b2f45636c953ae52331d844614da14a25ba578d6a9b6a8a5d6106d17d0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2620b2f45636c953ae52331d844614da14a25ba578d6a9b6a8a5d6106d17d0c5->enter($__internal_2620b2f45636c953ae52331d844614da14a25ba578d6a9b6a8a5d6106d17d0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Action:actions_string.html.twig"));

        $__internal_6c22f7fa597e5485f94f6a53c569d326e9e1f00b15246318ff9a6f7563f92995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c22f7fa597e5485f94f6a53c569d326e9e1f00b15246318ff9a6f7563f92995->enter($__internal_6c22f7fa597e5485f94f6a53c569d326e9e1f00b15246318ff9a6f7563f92995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Action:actions_string.html.twig"));

        // line 9
        echo "routeParameters = new Array();
attributes = \"\";

if (true == row.sg_datatables_actions[";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "index", array()), "html", null, true);
        echo "][\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "route", array()), "html", null, true);
        echo "\"]) {
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "routeParameters", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 14
            echo "        routeParameters[\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"] = row.";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo ";
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    var route  = Routing.generate(\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "route", array()), "html", null, true);
        echo "\", routeParameters);

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "attributes", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 20
            echo "        attributes += '";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" ';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    var url  = \"<a \";
    url += 'href=\"' + route + '\" ';
    url += attributes;
    ";
        // line 26
        if ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "confirm", array())) {
            // line 27
            echo "        url += 'onclick=\"';
        ";
            // line 28
            if ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "confirmMessage", array())) {
                // line 29
                echo "            url += \"return confirm('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "confirmMessage", array()), "html", null, true);
                echo "')\" + '\" ';
        ";
            } else {
                // line 31
                echo "            url += \"return confirm('";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.bulk.confirmMsg", array(), "messages"), "html", null, true);
                echo "')\" + '\" ';
        ";
            }
            // line 33
            echo "    ";
        }
        // line 34
        echo "    url += \">\";

    ";
        // line 37
        echo "    ";
        if (("array" == $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "alias", array()))) {
            // line 38
            echo "        if (count !== 'undefined') {
            url += count + ' ';
        }
    ";
        }
        // line 42
        echo "
    url += '";
        // line 43
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatableIcon($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()));
        echo "';
    url += \"</a>\";

    actionsString += url;
}
";
        
        $__internal_2620b2f45636c953ae52331d844614da14a25ba578d6a9b6a8a5d6106d17d0c5->leave($__internal_2620b2f45636c953ae52331d844614da14a25ba578d6a9b6a8a5d6106d17d0c5_prof);

        
        $__internal_6c22f7fa597e5485f94f6a53c569d326e9e1f00b15246318ff9a6f7563f92995->leave($__internal_6c22f7fa597e5485f94f6a53c569d326e9e1f00b15246318ff9a6f7563f92995_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Action:actions_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  115 => 42,  109 => 38,  106 => 37,  102 => 34,  99 => 33,  93 => 31,  87 => 29,  85 => 28,  82 => 27,  80 => 26,  74 => 22,  63 => 20,  59 => 19,  54 => 17,  51 => 16,  40 => 14,  36 => 13,  30 => 12,  25 => 9,);
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
routeParameters = new Array();
attributes = \"\";

if (true == row.sg_datatables_actions[{{ column.index }}][\"{{ action.route }}\"]) {
    {% for key, value in action.routeParameters %}
        routeParameters[\"{{ key }}\"] = row.{{ value }};
    {% endfor %}

    var route  = Routing.generate(\"{{ action.route }}\", routeParameters);

    {% for key, value in action.attributes %}
        attributes += '{{ key }}=\"{{ value }}\" ';
    {% endfor %}

    var url  = \"<a \";
    url += 'href=\"' + route + '\" ';
    url += attributes;
    {% if action.confirm %}
        url += 'onclick=\"';
        {% if action.confirmMessage %}
            url += \"return confirm('{{ action.confirmMessage }}')\" + '\" ';
        {% else %}
            url += \"return confirm('{{ 'datatables.bulk.confirmMsg'|trans({}, 'messages') }}')\" + '\" ';
        {% endif %}
    {% endif %}
    url += \">\";

    {# count - for ArrayColumn #}
    {% if 'array' == column.alias %}
        if (count !== 'undefined') {
            url += count + ' ';
        }
    {% endif %}

    url += '{{ datatable_icon(action.icon, action.label) }}';
    url += \"</a>\";

    actionsString += url;
}
", "SgDatatablesBundle:Action:actions_string.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Action/actions_string.html.twig");
    }
}
