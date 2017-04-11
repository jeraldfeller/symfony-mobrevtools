<?php

/* SgDatatablesBundle:Filters:filter_daterange.html.twig */
class __TwigTemplate_24b9c07b163333a6c9eeed49051a2a29ecc7e2330e550f9677994c97cdb52a8a extends Twig_Template
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
        $__internal_7ea564e4a07c80078be57ba77d27b4601147ec25504ef7b3a79bcd38bb06e4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea564e4a07c80078be57ba77d27b4601147ec25504ef7b3a79bcd38bb06e4c1->enter($__internal_7ea564e4a07c80078be57ba77d27b4601147ec25504ef7b3a79bcd38bb06e4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_daterange.html.twig"));

        $__internal_144b0322c45bf4cc5a797cf57a2fbf10937588b622a0570de83053b2e7478b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144b0322c45bf4cc5a797cf57a2fbf10937588b622a0570de83053b2e7478b32->enter($__internal_144b0322c45bf4cc5a797cf57a2fbf10937588b622a0570de83053b2e7478b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter_daterange.html.twig"));

        // line 9
        $this->displayBlock('html', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_7ea564e4a07c80078be57ba77d27b4601147ec25504ef7b3a79bcd38bb06e4c1->leave($__internal_7ea564e4a07c80078be57ba77d27b4601147ec25504ef7b3a79bcd38bb06e4c1_prof);

        
        $__internal_144b0322c45bf4cc5a797cf57a2fbf10937588b622a0570de83053b2e7478b32->leave($__internal_144b0322c45bf4cc5a797cf57a2fbf10937588b622a0570de83053b2e7478b32_prof);

    }

    // line 9
    public function block_html($context, array $blocks = array())
    {
        $__internal_6b9202cc00bc3cab666bbb18d1f295aed33498f861312c7afea68e16bff60932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9202cc00bc3cab666bbb18d1f295aed33498f861312c7afea68e16bff60932->enter($__internal_6b9202cc00bc3cab666bbb18d1f295aed33498f861312c7afea68e16bff60932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_68e4559ebeaf34ce655e2f42983030eed8ae828875dee1df2ace3880ca629525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e4559ebeaf34ce655e2f42983030eed8ae828875dee1df2ace3880ca629525->enter($__internal_68e4559ebeaf34ce655e2f42983030eed8ae828875dee1df2ace3880ca629525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

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
        
        $__internal_68e4559ebeaf34ce655e2f42983030eed8ae828875dee1df2ace3880ca629525->leave($__internal_68e4559ebeaf34ce655e2f42983030eed8ae828875dee1df2ace3880ca629525_prof);

        
        $__internal_6b9202cc00bc3cab666bbb18d1f295aed33498f861312c7afea68e16bff60932->leave($__internal_6b9202cc00bc3cab666bbb18d1f295aed33498f861312c7afea68e16bff60932_prof);

    }

    // line 18
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ee873e5206ca8509635a517547158b5a2956542eed6cd9186823c9769324e25a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee873e5206ca8509635a517547158b5a2956542eed6cd9186823c9769324e25a->enter($__internal_ee873e5206ca8509635a517547158b5a2956542eed6cd9186823c9769324e25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4ed1acb5c08c874bb09e8d58838004f380915583e5e8eeb6f8ae2834bc6b386f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed1acb5c08c874bb09e8d58838004f380915583e5e8eeb6f8ae2834bc6b386f->enter($__internal_4ed1acb5c08c874bb09e8d58838004f380915583e5e8eeb6f8ae2834bc6b386f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_4ed1acb5c08c874bb09e8d58838004f380915583e5e8eeb6f8ae2834bc6b386f->leave($__internal_4ed1acb5c08c874bb09e8d58838004f380915583e5e8eeb6f8ae2834bc6b386f_prof);

        
        $__internal_ee873e5206ca8509635a517547158b5a2956542eed6cd9186823c9769324e25a->leave($__internal_ee873e5206ca8509635a517547158b5a2956542eed6cd9186823c9769324e25a_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Filters:filter_daterange.html.twig";
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
", "SgDatatablesBundle:Filters:filter_daterange.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Filters/filter_daterange.html.twig");
    }
}
