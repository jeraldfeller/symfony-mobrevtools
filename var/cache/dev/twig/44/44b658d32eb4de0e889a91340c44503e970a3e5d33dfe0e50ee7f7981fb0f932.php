<?php

/* @SgDatatables/Action/action.html.twig */
class __TwigTemplate_1f1c865d2cda80582d3ad80e4cd25b34a751ffed2fa99892cea69200c046e444 extends Twig_Template
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
        $__internal_a1add60687c4f120d8870157ae1d7f6418adf3b3a8f5fe9e5d678a1f80d39273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1add60687c4f120d8870157ae1d7f6418adf3b3a8f5fe9e5d678a1f80d39273->enter($__internal_a1add60687c4f120d8870157ae1d7f6418adf3b3a8f5fe9e5d678a1f80d39273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Action/action.html.twig"));

        $__internal_938639508eaedb54a568cc2c20dd6f6192befb0b2d9098c4a7360ec6afe7c88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938639508eaedb54a568cc2c20dd6f6192befb0b2d9098c4a7360ec6afe7c88e->enter($__internal_938639508eaedb54a568cc2c20dd6f6192befb0b2d9098c4a7360ec6afe7c88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Action/action.html.twig"));

        // line 9
        echo "var actionsString = \"\";

";
        // line 12
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "startHtml", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "startHtml", array())))) {
            // line 13
            echo "    actionsString += '";
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "startHtml", array());
            echo "';
";
        }
        // line 15
        echo "
var routeParameters, attributes, visibleFlag, roleFlag;

";
        // line 19
        if (twig_test_iterable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")))) {
            // line 20
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
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
                // line 21
                echo "        ";
                $this->loadTemplate("SgDatatablesBundle:Action:actions_string.html.twig", "@SgDatatables/Action/action.html.twig", 21)->display($context);
                // line 22
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
        } else {
            // line 24
            echo "    ";
            $this->loadTemplate("SgDatatablesBundle:Action:actions_string.html.twig", "@SgDatatables/Action/action.html.twig", 24)->display(array_merge($context, array("action" => (isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")))));
        }
        // line 26
        echo "
";
        // line 28
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "endHtml", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "endHtml", array())))) {
            // line 29
            echo "    actionsString += '";
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "endHtml", array());
            echo "';
";
        }
        // line 31
        echo "
return actionsString;
";
        
        $__internal_a1add60687c4f120d8870157ae1d7f6418adf3b3a8f5fe9e5d678a1f80d39273->leave($__internal_a1add60687c4f120d8870157ae1d7f6418adf3b3a8f5fe9e5d678a1f80d39273_prof);

        
        $__internal_938639508eaedb54a568cc2c20dd6f6192befb0b2d9098c4a7360ec6afe7c88e->leave($__internal_938639508eaedb54a568cc2c20dd6f6192befb0b2d9098c4a7360ec6afe7c88e_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Action/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  89 => 29,  87 => 28,  84 => 26,  80 => 24,  65 => 22,  62 => 21,  44 => 20,  42 => 19,  37 => 15,  31 => 13,  29 => 12,  25 => 9,);
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
var actionsString = \"\";

{# startHtml - for ActionColumn #}
{% if column.startHtml is defined and column.startHtml is not empty %}
    actionsString += '{{ column.startHtml|raw }}';
{% endif %}

var routeParameters, attributes, visibleFlag, roleFlag;

{# build actionsString #}
{% if actions is iterable %}
    {% for action in actions %}
        {% include 'SgDatatablesBundle:Action:actions_string.html.twig' %}
    {% endfor %}
{% else %}
    {% include 'SgDatatablesBundle:Action:actions_string.html.twig' with { 'action': actions } %}
{% endif %}

{# endHtml - for ActionColumn #}
{% if column.endHtml is defined and column.endHtml is not empty %}
    actionsString += '{{ column.endHtml|raw }}';
{% endif %}

return actionsString;
", "@SgDatatables/Action/action.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Action\\action.html.twig");
    }
}
