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
        $__internal_9e1dc6432e42a7695682a3e7622a9518215fa45865addc58d54a18cec3596fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1dc6432e42a7695682a3e7622a9518215fa45865addc58d54a18cec3596fa8->enter($__internal_9e1dc6432e42a7695682a3e7622a9518215fa45865addc58d54a18cec3596fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_daterange.html.twig"));

        $__internal_dfc8e5484ef6dda781f491021fa7f4919d419f2390231434877491fec0597852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc8e5484ef6dda781f491021fa7f4919d419f2390231434877491fec0597852->enter($__internal_dfc8e5484ef6dda781f491021fa7f4919d419f2390231434877491fec0597852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_daterange.html.twig"));

        // line 9
        $this->displayBlock('html', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_9e1dc6432e42a7695682a3e7622a9518215fa45865addc58d54a18cec3596fa8->leave($__internal_9e1dc6432e42a7695682a3e7622a9518215fa45865addc58d54a18cec3596fa8_prof);

        
        $__internal_dfc8e5484ef6dda781f491021fa7f4919d419f2390231434877491fec0597852->leave($__internal_dfc8e5484ef6dda781f491021fa7f4919d419f2390231434877491fec0597852_prof);

    }

    // line 9
    public function block_html($context, array $blocks = array())
    {
        $__internal_c0593cce5ebce9a5f4b213d12e1ace54098853c9fc9b4fd516c9e35133e2fec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0593cce5ebce9a5f4b213d12e1ace54098853c9fc9b4fd516c9e35133e2fec8->enter($__internal_c0593cce5ebce9a5f4b213d12e1ace54098853c9fc9b4fd516c9e35133e2fec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_2775a9d07f5c6654b695c0d8be1863e500ad550af006c6bac5b6943ead465bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2775a9d07f5c6654b695c0d8be1863e500ad550af006c6bac5b6943ead465bec->enter($__internal_2775a9d07f5c6654b695c0d8be1863e500ad550af006c6bac5b6943ead465bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

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
        
        $__internal_2775a9d07f5c6654b695c0d8be1863e500ad550af006c6bac5b6943ead465bec->leave($__internal_2775a9d07f5c6654b695c0d8be1863e500ad550af006c6bac5b6943ead465bec_prof);

        
        $__internal_c0593cce5ebce9a5f4b213d12e1ace54098853c9fc9b4fd516c9e35133e2fec8->leave($__internal_c0593cce5ebce9a5f4b213d12e1ace54098853c9fc9b4fd516c9e35133e2fec8_prof);

    }

    // line 18
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ddc38e5b80e6ff52bf8a337c45d225ce05fe670a689391dc71717ca74e96c752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc38e5b80e6ff52bf8a337c45d225ce05fe670a689391dc71717ca74e96c752->enter($__internal_ddc38e5b80e6ff52bf8a337c45d225ce05fe670a689391dc71717ca74e96c752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_addd25b11398af664a4fbbd9ab73ddced276bad82e94a553bd9cdd10377bd3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_addd25b11398af664a4fbbd9ab73ddced276bad82e94a553bd9cdd10377bd3f5->enter($__internal_addd25b11398af664a4fbbd9ab73ddced276bad82e94a553bd9cdd10377bd3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_addd25b11398af664a4fbbd9ab73ddced276bad82e94a553bd9cdd10377bd3f5->leave($__internal_addd25b11398af664a4fbbd9ab73ddced276bad82e94a553bd9cdd10377bd3f5_prof);

        
        $__internal_ddc38e5b80e6ff52bf8a337c45d225ce05fe670a689391dc71717ca74e96c752->leave($__internal_ddc38e5b80e6ff52bf8a337c45d225ce05fe670a689391dc71717ca74e96c752_prof);

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
