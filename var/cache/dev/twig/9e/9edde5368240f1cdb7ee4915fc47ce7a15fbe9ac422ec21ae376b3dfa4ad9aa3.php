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
        $__internal_af660b2b73ff946816c0286065f12001ba9e9e019037f40e0f8072b7e5818442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af660b2b73ff946816c0286065f12001ba9e9e019037f40e0f8072b7e5818442->enter($__internal_af660b2b73ff946816c0286065f12001ba9e9e019037f40e0f8072b7e5818442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_daterange.html.twig"));

        $__internal_d4188099fdc1041437b72589b77c8c1ac0242771273b98fc8dadf10473b546c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4188099fdc1041437b72589b77c8c1ac0242771273b98fc8dadf10473b546c8->enter($__internal_d4188099fdc1041437b72589b77c8c1ac0242771273b98fc8dadf10473b546c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Filters/filter_daterange.html.twig"));

        // line 9
        $this->displayBlock('html', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_af660b2b73ff946816c0286065f12001ba9e9e019037f40e0f8072b7e5818442->leave($__internal_af660b2b73ff946816c0286065f12001ba9e9e019037f40e0f8072b7e5818442_prof);

        
        $__internal_d4188099fdc1041437b72589b77c8c1ac0242771273b98fc8dadf10473b546c8->leave($__internal_d4188099fdc1041437b72589b77c8c1ac0242771273b98fc8dadf10473b546c8_prof);

    }

    // line 9
    public function block_html($context, array $blocks = array())
    {
        $__internal_cca70f689b330452ecb47ba1e5408709a6d67b8b859306c5616723964feffb9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca70f689b330452ecb47ba1e5408709a6d67b8b859306c5616723964feffb9a->enter($__internal_cca70f689b330452ecb47ba1e5408709a6d67b8b859306c5616723964feffb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_2130e0c63556df1bfb2d7a3cbf386e52a8ccdc3a170540e4fe730d8c4266a4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2130e0c63556df1bfb2d7a3cbf386e52a8ccdc3a170540e4fe730d8c4266a4ed->enter($__internal_2130e0c63556df1bfb2d7a3cbf386e52a8ccdc3a170540e4fe730d8c4266a4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

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
        
        $__internal_2130e0c63556df1bfb2d7a3cbf386e52a8ccdc3a170540e4fe730d8c4266a4ed->leave($__internal_2130e0c63556df1bfb2d7a3cbf386e52a8ccdc3a170540e4fe730d8c4266a4ed_prof);

        
        $__internal_cca70f689b330452ecb47ba1e5408709a6d67b8b859306c5616723964feffb9a->leave($__internal_cca70f689b330452ecb47ba1e5408709a6d67b8b859306c5616723964feffb9a_prof);

    }

    // line 18
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_2f685d2c236a009f245282eaca4f8a6d93d175a6516a2d7b0069d80803c33a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f685d2c236a009f245282eaca4f8a6d93d175a6516a2d7b0069d80803c33a30->enter($__internal_2f685d2c236a009f245282eaca4f8a6d93d175a6516a2d7b0069d80803c33a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_cd8bf2718ef702343c44cbf1bd71a0e1eef22a9dadfdeed17c9098c11064d2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8bf2718ef702343c44cbf1bd71a0e1eef22a9dadfdeed17c9098c11064d2f0->enter($__internal_cd8bf2718ef702343c44cbf1bd71a0e1eef22a9dadfdeed17c9098c11064d2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_cd8bf2718ef702343c44cbf1bd71a0e1eef22a9dadfdeed17c9098c11064d2f0->leave($__internal_cd8bf2718ef702343c44cbf1bd71a0e1eef22a9dadfdeed17c9098c11064d2f0_prof);

        
        $__internal_2f685d2c236a009f245282eaca4f8a6d93d175a6516a2d7b0069d80803c33a30->leave($__internal_2f685d2c236a009f245282eaca4f8a6d93d175a6516a2d7b0069d80803c33a30_prof);

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
