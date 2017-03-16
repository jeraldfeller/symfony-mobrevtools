<?php

/* @SgDatatables/Filters/filter_daterange.html.twig */
class __TwigTemplate_b16102cf90b1a132342ff37a395092bf748f8a510a491f08b8734e46e7002f7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c3f31e4271152e4ec260f11a7129bb2295607ef5b41ac1cbbd9e083584f0790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3f31e4271152e4ec260f11a7129bb2295607ef5b41ac1cbbd9e083584f0790->enter($__internal_9c3f31e4271152e4ec260f11a7129bb2295607ef5b41ac1cbbd9e083584f0790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_daterange.html.twig"));

        $__internal_a5868545f314107b129d46152832d6d9c4790a468bdc7e0d6379661c133dc181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5868545f314107b129d46152832d6d9c4790a468bdc7e0d6379661c133dc181->enter($__internal_a5868545f314107b129d46152832d6d9c4790a468bdc7e0d6379661c133dc181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_daterange.html.twig"));

        // line 9
        $this->displayBlock('html', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_9c3f31e4271152e4ec260f11a7129bb2295607ef5b41ac1cbbd9e083584f0790->leave($__internal_9c3f31e4271152e4ec260f11a7129bb2295607ef5b41ac1cbbd9e083584f0790_prof);

        
        $__internal_a5868545f314107b129d46152832d6d9c4790a468bdc7e0d6379661c133dc181->leave($__internal_a5868545f314107b129d46152832d6d9c4790a468bdc7e0d6379661c133dc181_prof);

    }

    // line 9
    public function block_html($context, array $blocks = array())
    {
        $__internal_bac1507ebd6d009888496d99d7aa5e6b3108e896f7b69d6ed56283b95a53c1b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac1507ebd6d009888496d99d7aa5e6b3108e896f7b69d6ed56283b95a53c1b6->enter($__internal_bac1507ebd6d009888496d99d7aa5e6b3108e896f7b69d6ed56283b95a53c1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_07ed24ef60b28960482be8ab7ffd13e2a3882327e344a85cca2928935b29ce43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ed24ef60b28960482be8ab7ffd13e2a3882327e344a85cca2928935b29ce43->enter($__internal_07ed24ef60b28960482be8ab7ffd13e2a3882327e344a85cca2928935b29ce43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        // line 10
        echo "    <input type=\"text\"
        class=\"individual_filtering sg-daterange";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "class", array()), "html", null, true);
        }
        echo "\"
        style=\"";
        // line 12
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array())) {
            echo " width:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array()), "html", null, true);
            echo ";";
        }
        echo "\"
        placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, trim(strip_tags($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "title", array()))), "html", null, true);
        echo "\"
        data-filter-property-id=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["filterColumnId"]) ? $context["filterColumnId"] : $this->getContext($context, "filterColumnId")), "html", null, true);
        echo "\"
        ";
        // line 15
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array())) {
            echo "name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\"";
        }
        echo " />
";
        
        $__internal_07ed24ef60b28960482be8ab7ffd13e2a3882327e344a85cca2928935b29ce43->leave($__internal_07ed24ef60b28960482be8ab7ffd13e2a3882327e344a85cca2928935b29ce43_prof);

        
        $__internal_bac1507ebd6d009888496d99d7aa5e6b3108e896f7b69d6ed56283b95a53c1b6->leave($__internal_bac1507ebd6d009888496d99d7aa5e6b3108e896f7b69d6ed56283b95a53c1b6_prof);

    }

    // line 18
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c8d4d64a09de8a6b95196868fe249ba4972d80d3d8fe37139ee38d0fe52ed598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d4d64a09de8a6b95196868fe249ba4972d80d3d8fe37139ee38d0fe52ed598->enter($__internal_c8d4d64a09de8a6b95196868fe249ba4972d80d3d8fe37139ee38d0fe52ed598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4ee428583ac5f7f5b73075b03c7a793028e5652ad4efaf67f2c1db41cc73a988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee428583ac5f7f5b73075b03c7a793028e5652ad4efaf67f2c1db41cc73a988->enter($__internal_4ee428583ac5f7f5b73075b03c7a793028e5652ad4efaf67f2c1db41cc73a988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 19
        echo "    <script type=\"text/javascript\">
        try {
            moment.locale(\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\");
            \$(\"#";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
        echo " .sg-daterange\").daterangepicker({
                autoUpdateInput: false,
                locale: {
                    format: \"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("daterange.format", array(), "messages"), "html", null, true);
        echo "\",
                    applyLabel: \"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("daterange.apply", array(), "messages"), "html", null, true);
        echo "\",
                    cancelLabel: \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("daterange.cancel", array(), "messages"), "html", null, true);
        echo "\",
                    daysOfWeek: moment.weekdaysMin(),
                    monthNames: moment.monthsShort(),
                    firstDay: moment.localeData().firstDayOfWeek()
                }
            }).on('cancel.daterangepicker', function(ev, picker) {
                        \$(this).val('');
                        \$(this).change();
                    })
                    .on('apply.daterangepicker', function(ev, picker) {
                        \$(this).val(picker.startDate.format(\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("daterange.format", array(), "messages"), "html", null, true);
        echo "\") + ' - ' + picker.endDate.format(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("daterange.format", array(), "messages"), "html", null, true);
        echo "\"));
                        \$(this).change();
                    });
        } catch (e) {
            console.log(e.message);
        }
    </script>
";
        
        $__internal_4ee428583ac5f7f5b73075b03c7a793028e5652ad4efaf67f2c1db41cc73a988->leave($__internal_4ee428583ac5f7f5b73075b03c7a793028e5652ad4efaf67f2c1db41cc73a988_prof);

        
        $__internal_c8d4d64a09de8a6b95196868fe249ba4972d80d3d8fe37139ee38d0fe52ed598->leave($__internal_c8d4d64a09de8a6b95196868fe249ba4972d80d3d8fe37139ee38d0fe52ed598_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Filters/filter_daterange.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  124 => 27,  120 => 26,  116 => 25,  110 => 22,  106 => 21,  102 => 19,  93 => 18,  77 => 15,  73 => 14,  69 => 13,  61 => 12,  54 => 11,  51 => 10,  42 => 9,  32 => 18,  29 => 17,  27 => 9,);
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
{% block html %}
    <input type=\"text\"
        class=\"individual_filtering sg-daterange{% if column.filter.class %} {{ column.filter.class }}{% endif %}\"
        style=\"{% if column.width %} width:{{ column.width }};{% endif %}\"
        placeholder=\"{{ column.title|striptags|trim }}\"
        data-filter-property-id=\"{{ filterColumnId }}\"
        {% if column.name %}name=\"{{ column.name }}\"{% endif %} />
{% endblock %}

{% block javascript %}
    <script type=\"text/javascript\">
        try {
            moment.locale(\"{{ app.request.locale }}\");
            \$(\"#{{ tableId }} .sg-daterange\").daterangepicker({
                autoUpdateInput: false,
                locale: {
                    format: \"{{ 'daterange.format'|trans({}, 'messages') }}\",
                    applyLabel: \"{{ 'daterange.apply'|trans({}, 'messages') }}\",
                    cancelLabel: \"{{ 'daterange.cancel'|trans({}, 'messages') }}\",
                    daysOfWeek: moment.weekdaysMin(),
                    monthNames: moment.monthsShort(),
                    firstDay: moment.localeData().firstDayOfWeek()
                }
            }).on('cancel.daterangepicker', function(ev, picker) {
                        \$(this).val('');
                        \$(this).change();
                    })
                    .on('apply.daterangepicker', function(ev, picker) {
                        \$(this).val(picker.startDate.format(\"{{ 'daterange.format'|trans({}, 'messages') }}\") + ' - ' + picker.endDate.format(\"{{ 'daterange.format'|trans({}, 'messages') }}\"));
                        \$(this).change();
                    });
        } catch (e) {
            console.log(e.message);
        }
    </script>
{% endblock %}
", "@SgDatatables/Filters/filter_daterange.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Filters\\filter_daterange.html.twig");
    }
}
