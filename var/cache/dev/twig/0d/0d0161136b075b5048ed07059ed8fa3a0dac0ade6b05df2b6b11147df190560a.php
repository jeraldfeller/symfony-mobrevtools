<?php

/* @SgDatatables/Datatable/ajax.html.twig */
class __TwigTemplate_9ae50dadcb67974dda7ec6c5847d29e579c6e4a690cf0d8ce4ad82b6577eca21 extends Twig_Template
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
        $__internal_afebf3753c599376193436234015f19c635c441e44a42126736a6c313bb9913b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afebf3753c599376193436234015f19c635c441e44a42126736a6c313bb9913b->enter($__internal_afebf3753c599376193436234015f19c635c441e44a42126736a6c313bb9913b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/ajax.html.twig"));

        $__internal_1b19ec74144c48be0a21584735e1ef141d29698a782f7a5c897941a0c5ed23e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b19ec74144c48be0a21584735e1ef141d29698a782f7a5c897941a0c5ed23e1->enter($__internal_1b19ec74144c48be0a21584735e1ef141d29698a782f7a5c897941a0c5ed23e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/ajax.html.twig"));

        // line 9
        echo "\"serverSide\": true,
";
        // line 10
        if (($this->getAttribute((isset($context["view_ajax"]) ? $context["view_ajax"] : $this->getContext($context, "view_ajax")), "pipeline", array()) > 0)) {
            // line 11
            echo "    \"ajax\": \$.fn.dataTable.pipeline({
        \"url\": \"";
            // line 12
            echo $this->getAttribute((isset($context["view_ajax"]) ? $context["view_ajax"] : $this->getContext($context, "view_ajax")), "url", array());
            echo "\",
        \"method\": \"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_ajax"]) ? $context["view_ajax"] : $this->getContext($context, "view_ajax")), "type", array()), "html", null, true);
            echo "\",
        \"pages\": ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_ajax"]) ? $context["view_ajax"] : $this->getContext($context, "view_ajax")), "pipeline", array()), "html", null, true);
            echo "
    }),
";
        } else {
            // line 17
            echo "    \"ajax\": {
        \"url\": \"";
            // line 18
            echo $this->getAttribute((isset($context["view_ajax"]) ? $context["view_ajax"] : $this->getContext($context, "view_ajax")), "url", array());
            echo "\",
        \"type\": \"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_ajax"]) ? $context["view_ajax"] : $this->getContext($context, "view_ajax")), "type", array()), "html", null, true);
            echo "\"
    },
";
        }
        
        $__internal_afebf3753c599376193436234015f19c635c441e44a42126736a6c313bb9913b->leave($__internal_afebf3753c599376193436234015f19c635c441e44a42126736a6c313bb9913b_prof);

        
        $__internal_1b19ec74144c48be0a21584735e1ef141d29698a782f7a5c897941a0c5ed23e1->leave($__internal_1b19ec74144c48be0a21584735e1ef141d29698a782f7a5c897941a0c5ed23e1_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Datatable/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  50 => 18,  47 => 17,  41 => 14,  37 => 13,  33 => 12,  30 => 11,  28 => 10,  25 => 9,);
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
\"serverSide\": true,
{% if view_ajax.pipeline > 0 %}
    \"ajax\": \$.fn.dataTable.pipeline({
        \"url\": \"{{ view_ajax.url|raw }}\",
        \"method\": \"{{ view_ajax.type }}\",
        \"pages\": {{ view_ajax.pipeline }}
    }),
{% else %}
    \"ajax\": {
        \"url\": \"{{ view_ajax.url|raw }}\",
        \"type\": \"{{ view_ajax.type }}\"
    },
{% endif %}
", "@SgDatatables/Datatable/ajax.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Datatable\\ajax.html.twig");
    }
}
