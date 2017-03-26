<?php

/* @SgDatatables/Action/top_actions.html.twig */
class __TwigTemplate_8dbf9093bf48e06b39cbbd86387c4e9898ebdbde37175a7324d6173d6add8806 extends Twig_Template
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
        $__internal_9531baf4754ae9005da41087841de72179b13ea73be9c9066748bd2f1907ee1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9531baf4754ae9005da41087841de72179b13ea73be9c9066748bd2f1907ee1a->enter($__internal_9531baf4754ae9005da41087841de72179b13ea73be9c9066748bd2f1907ee1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Action/top_actions.html.twig"));

        $__internal_f7c1326a8a99fd2408d429e8ab5af08a3cdba421b08033261bbca74d81dbc1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c1326a8a99fd2408d429e8ab5af08a3cdba421b08033261bbca74d81dbc1f8->enter($__internal_f7c1326a8a99fd2408d429e8ab5af08a3cdba421b08033261bbca74d81dbc1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Action/top_actions.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "route", array()), "html", null, true);
        echo "\"
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "attributes", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 12
            echo "            ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        ";
        if ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "confirm", array())) {
            // line 15
            echo "            ";
            if ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "confirmMessage", array())) {
                // line 16
                echo "                onclick=\"return confirm('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "confirmMessage", array()), "html", null, true);
                echo "');\"
            ";
            } else {
                // line 18
                echo "                onclick=\"return confirm('";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.bulk.confirmMsg", array(), "messages"), "html", null, true);
                echo "');\"
            ";
            }
            // line 20
            echo "        ";
        }
        // line 21
        echo "    >";
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatableIcon($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()));
        echo "</a>
";
        $context["link"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "
";
        // line 24
        if ($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "isRenderIfClosure", array())) {
            // line 25
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
            echo "
";
        }
        
        $__internal_9531baf4754ae9005da41087841de72179b13ea73be9c9066748bd2f1907ee1a->leave($__internal_9531baf4754ae9005da41087841de72179b13ea73be9c9066748bd2f1907ee1a_prof);

        
        $__internal_f7c1326a8a99fd2408d429e8ab5af08a3cdba421b08033261bbca74d81dbc1f8->leave($__internal_f7c1326a8a99fd2408d429e8ab5af08a3cdba421b08033261bbca74d81dbc1f8_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Action/top_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  77 => 24,  74 => 23,  68 => 21,  65 => 20,  59 => 18,  53 => 16,  50 => 15,  47 => 14,  36 => 12,  32 => 11,  27 => 10,  25 => 9,);
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
{% set link %}
    <a href=\"{{action.route }}\"
        {% for key, value in action.attributes %}
            {{ key }}=\"{{ value }}\"
        {% endfor %}
        {% if action.confirm %}
            {% if action.confirmMessage %}
                onclick=\"return confirm('{{ action.confirmMessage }}');\"
            {% else %}
                onclick=\"return confirm('{{ 'datatables.bulk.confirmMsg'|trans({}, 'messages') }}');\"
            {% endif %}
        {% endif %}
    >{{ datatable_icon(action.icon, action.label) }}</a>
{% endset %}

{% if action.isRenderIfClosure %}
    {{ link }}
{% endif %}
", "@SgDatatables/Action/top_actions.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Action\\top_actions.html.twig");
    }
}
