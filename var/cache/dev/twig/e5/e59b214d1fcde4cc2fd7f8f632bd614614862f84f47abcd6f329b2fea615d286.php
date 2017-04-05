<?php

/* SgDatatablesBundle:Datatable:language.html.twig */
class __TwigTemplate_1d539161447cb2682b371c40a4fe37fefd79e59311a9e450381a873f7eb20e4d extends Twig_Template
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
        $__internal_fb6e3bae02245bc510dbf496037e8e63f5729dd7b7ebe217603855fe571396c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6e3bae02245bc510dbf496037e8e63f5729dd7b7ebe217603855fe571396c0->enter($__internal_fb6e3bae02245bc510dbf496037e8e63f5729dd7b7ebe217603855fe571396c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:language.html.twig"));

        $__internal_55c995ff38b158aeee58d7238898fc6f284e7b8afeb052cbdcc0b90842cc805d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c995ff38b158aeee58d7238898fc6f284e7b8afeb052cbdcc0b90842cc805d->enter($__internal_55c995ff38b158aeee58d7238898fc6f284e7b8afeb052cbdcc0b90842cc805d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:language.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    ";
        if ($this->getAttribute((isset($context["view_options"]) ? $context["view_options"] : $this->getContext($context, "view_options")), "countAllResults", array())) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.datatable.infoFiltered", array(), "messages"), "html", null, true);
        } else {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("query.filtered", array(), "messages"), "html", null, true);
        }
        $context["filtered"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "
\"language\": {
    \"processing\": \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.datatable.processing", array(), "messages"), "html", null, true);
        echo "\",
    \"lengthMenu\": \"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.datatable.lengthMenu", array(), "messages"), "html", null, true);
        echo "\",
    \"zeroRecords\": \"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.datatable.zeroRecords", array(), "messages"), "html", null, true);
        echo "\",
    \"info\": \"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.datatable.info", array(), "messages"), "html", null, true);
        echo "\",
    \"infoEmpty\": \"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.datatable.infoEmpty", array(), "messages"), "html", null, true);
        echo "\",
    \"sInfoFiltered\": \"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["filtered"]) ? $context["filtered"] : $this->getContext($context, "filtered")), "html", null, true);
        echo "\",
    \"infoPostFix\": \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.datatable.infoPostFix", array(), "messages"), "html", null, true);
        echo "\",
    \"search\": \"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.datatable.search", array(), "messages"), "html", null, true);
        echo "\",
    \"searchPlaceholder\": \"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.datatable.searchPlaceholder", array(), "messages"), "html", null, true);
        echo "\",
    \"url\": \"\",
    \"paginate\": {
        \"first\": \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.datatable.first", array(), "messages"), "html", null, true);
        echo "\",
        \"previous\": \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.datatable.previous", array(), "messages"), "html", null, true);
        echo "\",
        \"next\": \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.datatable.next", array(), "messages"), "html", null, true);
        echo "\",
        \"last\": \"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("datatables.datatable.last", array(), "messages"), "html", null, true);
        echo "\"
    }
}
";
        
        $__internal_fb6e3bae02245bc510dbf496037e8e63f5729dd7b7ebe217603855fe571396c0->leave($__internal_fb6e3bae02245bc510dbf496037e8e63f5729dd7b7ebe217603855fe571396c0_prof);

        
        $__internal_55c995ff38b158aeee58d7238898fc6f284e7b8afeb052cbdcc0b90842cc805d->leave($__internal_55c995ff38b158aeee58d7238898fc6f284e7b8afeb052cbdcc0b90842cc805d_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  89 => 31,  85 => 30,  81 => 29,  75 => 26,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  55 => 21,  51 => 20,  47 => 19,  43 => 18,  39 => 16,  34 => 13,  30 => 11,  27 => 10,  25 => 9,);
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
{% set filtered %}
    {% if view_options.countAllResults %}
        {{ 'datatables.datatable.infoFiltered'|trans({}, 'messages') -}}
    {% else %}
        {{ 'query.filtered'|trans({}, 'messages') -}}
    {% endif %}
{% endset %}

\"language\": {
    \"processing\": \"{{ 'datatables.datatable.processing'|trans({}, 'messages') }}\",
    \"lengthMenu\": \"{{ 'datatables.datatable.lengthMenu'|trans({}, 'messages') }}\",
    \"zeroRecords\": \"{{ 'datatables.datatable.zeroRecords'|trans({}, 'messages') }}\",
    \"info\": \"{{ 'datatables.datatable.info'|trans({}, 'messages') }}\",
    \"infoEmpty\": \"{{ 'datatables.datatable.infoEmpty'|trans({}, 'messages') }}\",
    \"sInfoFiltered\": \"{{ filtered }}\",
    \"infoPostFix\": \"{{ 'datatables.datatable.infoPostFix'|trans({}, 'messages') }}\",
    \"search\": \"{{ 'datatables.datatable.search'|trans({}, 'messages') }}\",
    \"searchPlaceholder\": \"{{ 'datatables.datatable.searchPlaceholder'|trans({}, 'messages') }}\",
    \"url\": \"\",
    \"paginate\": {
        \"first\": \"{{ 'datatables.datatable.first'|trans({}, 'messages') }}\",
        \"previous\": \"{{ 'datatables.datatable.previous'|trans({}, 'messages') }}\",
        \"next\": \"{{ 'datatables.datatable.next'|trans({}, 'messages') }}\",
        \"last\": \"{{ 'datatables.datatable.last'|trans({}, 'messages') }}\"
    }
}
", "SgDatatablesBundle:Datatable:language.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Datatable/language.html.twig");
    }
}
