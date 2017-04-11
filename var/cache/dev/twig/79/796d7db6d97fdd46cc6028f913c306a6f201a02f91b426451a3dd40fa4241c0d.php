<?php

/* @SgDatatables/Datatable/options.html.twig */
class __TwigTemplate_7f4e5e7b99465ccd0d093afbb5b02e82d85e687ea28f6a1fbc6600ad711595e6 extends Twig_Template
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
        $__internal_072151b305c90b286ff7f97a19d5d5c5bbb4b02c6335d5ac8d7b36330d14c25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072151b305c90b286ff7f97a19d5d5c5bbb4b02c6335d5ac8d7b36330d14c25b->enter($__internal_072151b305c90b286ff7f97a19d5d5c5bbb4b02c6335d5ac8d7b36330d14c25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/options.html.twig"));

        $__internal_e7c6ddba2eaea8942a1b015b7514005f8646ae04a4f8603251734b37fba0e3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c6ddba2eaea8942a1b015b7514005f8646ae04a4f8603251734b37fba0e3ed->enter($__internal_e7c6ddba2eaea8942a1b015b7514005f8646ae04a4f8603251734b37fba0e3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/options.html.twig"));

        // line 9
        echo "\"displayStart\": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "displayStart", array()), "html", null, true);
        echo ",

";
        // line 11
        if (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "deferLoading", array()) >= 0)) {
            // line 12
            echo "    \"deferLoading\": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "deferLoading", array()), "html", null, true);
            echo ",
";
        }
        // line 14
        echo "
";
        // line 15
        if (((false == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "useIntegrationOptions", array())) || (true == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "forceDom", array())))) {
            // line 16
            echo "    \"dom\": \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "dom", array()), "js"), "html", null, true);
            echo "\",
";
        }
        // line 18
        echo "
\"lengthMenu\": ";
        // line 19
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->lengthJoin($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "lengthMenu", array()));
        echo ",
\"orderClasses\": ";
        // line 20
        echo (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "orderClasses", array())) ? ("true") : ("false"));
        echo ",
\"order\": ";
        // line 21
        echo twig_jsonencode_filter($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "order", array()));
        echo ",
\"orderMulti\": ";
        // line 22
        echo (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "orderMulti", array())) ? ("true") : ("false"));
        echo ",

\"pageLength\": ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "pageLength", array()), "html", null, true);
        echo ",
\"pagingType\": \"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "pagingType", array()), "html", null, true);
        echo "\",

";
        // line 27
        if ((false == $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "useIntegrationOptions", array()))) {
            // line 28
            echo "    \"renderer\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "renderer", array()), "html", null, true);
            echo "\",
";
        }
        // line 30
        echo "
\"scrollCollapse\": ";
        // line 31
        echo (($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "scrollCollapse", array())) ? ("true") : ("false"));
        echo ",
\"searchDelay\": ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "searchDelay", array()), "html", null, true);
        echo ",
\"stateDuration\": ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "stateDuration", array()), "html", null, true);
        echo ",

";
        // line 35
        if ($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "stripeClasses", array())) {
            // line 36
            echo "    \"stripeClasses\": [";
            echo twig_jsonencode_filter(twig_join_filter($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "stripeClasses", array()), ", "));
            echo "],
";
        }
        // line 38
        echo "
\"rowId\": \"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "rowId", array()), "html", null, true);
        echo "\",

";
        
        $__internal_072151b305c90b286ff7f97a19d5d5c5bbb4b02c6335d5ac8d7b36330d14c25b->leave($__internal_072151b305c90b286ff7f97a19d5d5c5bbb4b02c6335d5ac8d7b36330d14c25b_prof);

        
        $__internal_e7c6ddba2eaea8942a1b015b7514005f8646ae04a4f8603251734b37fba0e3ed->leave($__internal_e7c6ddba2eaea8942a1b015b7514005f8646ae04a4f8603251734b37fba0e3ed_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Datatable/options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 39,  111 => 38,  105 => 36,  103 => 35,  98 => 33,  94 => 32,  90 => 31,  87 => 30,  81 => 28,  79 => 27,  74 => 25,  70 => 24,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  50 => 18,  44 => 16,  42 => 15,  39 => 14,  33 => 12,  31 => 11,  25 => 9,);
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
\"displayStart\": {{ view_options.displayStart }},

{% if view_options.deferLoading >= 0 %}
    \"deferLoading\": {{ view_options.deferLoading }},
{% endif %}

{% if false == view_options.useIntegrationOptions or true == view_options.forceDom %}
    \"dom\": \"{{ view_options.dom|e('js') }}\",
{% endif %}

\"lengthMenu\": {{ view_options.lengthMenu|length_join|raw }},
\"orderClasses\": {{ view_options.orderClasses ? 'true' : 'false' }},
\"order\": {{ view_options.order|json_encode()|raw }},
\"orderMulti\": {{ view_options.orderMulti ? 'true' : 'false' }},

\"pageLength\": {{ view_options.pageLength }},
\"pagingType\": \"{{ view_options.pagingType }}\",

{% if false == view_options.useIntegrationOptions %}
    \"renderer\": \"{{ view_options.renderer }}\",
{% endif %}

\"scrollCollapse\": {{ view_options.scrollCollapse ? 'true' : 'false' }},
\"searchDelay\": {{ view_options.searchDelay }},
\"stateDuration\": {{ view_options.stateDuration }},

{% if view_options.stripeClasses %}
    \"stripeClasses\": [{{ view_options.stripeClasses|join(\", \")|json_encode|raw }}],
{% endif %}

\"rowId\": \"{{ view_options.rowId }}\",

{#
\"class\"               -> datatable_html.html.twig
\"individualFiltering\" -> datatable_js.html.twig
#}
", "@SgDatatables/Datatable/options.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Datatable\\options.html.twig");
    }
}
