<?php

/* SgDatatablesBundle:Column:timeago.html.twig */
class __TwigTemplate_a00b788ac1f6ffea78b30eb9cee63529e0f817f7fd2786398898034e010c0aff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:timeago.html.twig", 9);
        $this->blocks = array(
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Column:column.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5bea953b9074e9eeb5b934b24e346aaaa225dd8b779f74feea8215905d9cc7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5bea953b9074e9eeb5b934b24e346aaaa225dd8b779f74feea8215905d9cc7a->enter($__internal_e5bea953b9074e9eeb5b934b24e346aaaa225dd8b779f74feea8215905d9cc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $__internal_fb2bd8e7ea1415feda63910246986934d6b2ff5b55e41b097ece7846525c0605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2bd8e7ea1415feda63910246986934d6b2ff5b55e41b097ece7846525c0605->enter($__internal_fb2bd8e7ea1415feda63910246986934d6b2ff5b55e41b097ece7846525c0605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5bea953b9074e9eeb5b934b24e346aaaa225dd8b779f74feea8215905d9cc7a->leave($__internal_e5bea953b9074e9eeb5b934b24e346aaaa225dd8b779f74feea8215905d9cc7a_prof);

        
        $__internal_fb2bd8e7ea1415feda63910246986934d6b2ff5b55e41b097ece7846525c0605->leave($__internal_fb2bd8e7ea1415feda63910246986934d6b2ff5b55e41b097ece7846525c0605_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_9db6b2cabcf161622e1387bfe41757fee7b95cfff6805fb8a7ab3a68848c75c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db6b2cabcf161622e1387bfe41757fee7b95cfff6805fb8a7ab3a68848c75c1->enter($__internal_9db6b2cabcf161622e1387bfe41757fee7b95cfff6805fb8a7ab3a68848c75c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_35179c0ea7688e68c27d35b491b775691193b1cfc57926e27608a1fbc21dfa72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35179c0ea7688e68c27d35b491b775691193b1cfc57926e27608a1fbc21dfa72->enter($__internal_35179c0ea7688e68c27d35b491b775691193b1cfc57926e27608a1fbc21dfa72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    \"render\": function(data, type, row, meta) {
        return ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array()), "html", null, true);
        echo "(data, type, row, meta);
    },
";
        
        $__internal_35179c0ea7688e68c27d35b491b775691193b1cfc57926e27608a1fbc21dfa72->leave($__internal_35179c0ea7688e68c27d35b491b775691193b1cfc57926e27608a1fbc21dfa72_prof);

        
        $__internal_9db6b2cabcf161622e1387bfe41757fee7b95cfff6805fb8a7ab3a68848c75c1->leave($__internal_9db6b2cabcf161622e1387bfe41757fee7b95cfff6805fb8a7ab3a68848c75c1_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:timeago.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  49 => 12,  40 => 11,  11 => 9,);
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
{% extends 'SgDatatablesBundle:Column:column.html.twig' %}

{% block data %}
    \"data\": \"{{ column.data }}\",
    \"render\": function(data, type, row, meta) {
        return {{ column.render }}(data, type, row, meta);
    },
{% endblock %}
", "SgDatatablesBundle:Column:timeago.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/timeago.html.twig");
    }
}
