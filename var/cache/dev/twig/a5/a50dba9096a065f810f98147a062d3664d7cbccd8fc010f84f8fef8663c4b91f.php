<?php

/* SgDatatablesBundle:Column:action.html.twig */
class __TwigTemplate_9ad371ca442dab88f82df2e5a39dfc9583d63567b6a97cffc888d364e9fa67f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:action.html.twig", 9);
        $this->blocks = array(
            'common' => array($this, 'block_common'),
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Column:column.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54ca91f43e72ae15ad39cf96da32bf799f4778c9a70e730e77ab0de13cbd3488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ca91f43e72ae15ad39cf96da32bf799f4778c9a70e730e77ab0de13cbd3488->enter($__internal_54ca91f43e72ae15ad39cf96da32bf799f4778c9a70e730e77ab0de13cbd3488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $__internal_4efb66af7cfb6ce442a396ee90e38de7f35f0ab4906e24ac3521b52e388062dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efb66af7cfb6ce442a396ee90e38de7f35f0ab4906e24ac3521b52e388062dd->enter($__internal_4efb66af7cfb6ce442a396ee90e38de7f35f0ab4906e24ac3521b52e388062dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54ca91f43e72ae15ad39cf96da32bf799f4778c9a70e730e77ab0de13cbd3488->leave($__internal_54ca91f43e72ae15ad39cf96da32bf799f4778c9a70e730e77ab0de13cbd3488_prof);

        
        $__internal_4efb66af7cfb6ce442a396ee90e38de7f35f0ab4906e24ac3521b52e388062dd->leave($__internal_4efb66af7cfb6ce442a396ee90e38de7f35f0ab4906e24ac3521b52e388062dd_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_9ed564c0175739a93468e17c51ff8454472b6b5ebe569d22659463375e71e2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed564c0175739a93468e17c51ff8454472b6b5ebe569d22659463375e71e2e4->enter($__internal_9ed564c0175739a93468e17c51ff8454472b6b5ebe569d22659463375e71e2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_072fc4d9171851b879f27e11a493fbf4c17cc5ce4e5250e06cbad28e31cb4a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072fc4d9171851b879f27e11a493fbf4c17cc5ce4e5250e06cbad28e31cb4a7d->enter($__internal_072fc4d9171851b879f27e11a493fbf4c17cc5ce4e5250e06cbad28e31cb4a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        // line 12
        echo "    \"contentPadding\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "padding", array()), "html", null, true);
        echo "\",
    \"defaultContent\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "defaultContent", array()), "html", null, true);
        echo "\",
    \"name\": \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), "html", null, true);
        echo "\",
    \"orderable\": false,
    \"searchable\": false,
    \"title\": \"";
        // line 17
        echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "title", array());
        echo "\",
    ";
        // line 18
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "type", array())) {
            // line 19
            echo "        \"type\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "type", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 21
        echo "    ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "visible", array())) {
            // line 22
            echo "        \"visible\": true,
        \"className\": \"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "class", array()), "html", null, true);
            echo "\",
    ";
        } else {
            // line 25
            echo "        \"visible\": false,
        \"className\": \"never ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "class", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 28
        echo "    \"width\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array()), "html", null, true);
        echo "\",
";
        
        $__internal_072fc4d9171851b879f27e11a493fbf4c17cc5ce4e5250e06cbad28e31cb4a7d->leave($__internal_072fc4d9171851b879f27e11a493fbf4c17cc5ce4e5250e06cbad28e31cb4a7d_prof);

        
        $__internal_9ed564c0175739a93468e17c51ff8454472b6b5ebe569d22659463375e71e2e4->leave($__internal_9ed564c0175739a93468e17c51ff8454472b6b5ebe569d22659463375e71e2e4_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_f4e42c49606bdadc2c9d60dd9a9598c606cbab1d04ccd2e92c23fd2030a6be82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e42c49606bdadc2c9d60dd9a9598c606cbab1d04ccd2e92c23fd2030a6be82->enter($__internal_f4e42c49606bdadc2c9d60dd9a9598c606cbab1d04ccd2e92c23fd2030a6be82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_452bb8b547754a6e33e151dbae8181e955daefea0868848053698c9280f7d4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452bb8b547754a6e33e151dbae8181e955daefea0868848053698c9280f7d4fa->enter($__internal_452bb8b547754a6e33e151dbae8181e955daefea0868848053698c9280f7d4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 32
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    \"render\": function(data, type, row, meta) {
        ";
        // line 34
        $this->loadTemplate("SgDatatablesBundle:Action:action.html.twig", "SgDatatablesBundle:Column:action.html.twig", 34)->display(array_merge($context, array("column" => (isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "actions" => $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "actions", array()))));
        // line 35
        echo "    },
";
        
        $__internal_452bb8b547754a6e33e151dbae8181e955daefea0868848053698c9280f7d4fa->leave($__internal_452bb8b547754a6e33e151dbae8181e955daefea0868848053698c9280f7d4fa_prof);

        
        $__internal_f4e42c49606bdadc2c9d60dd9a9598c606cbab1d04ccd2e92c23fd2030a6be82->leave($__internal_f4e42c49606bdadc2c9d60dd9a9598c606cbab1d04ccd2e92c23fd2030a6be82_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 35,  124 => 34,  118 => 32,  109 => 31,  96 => 28,  91 => 26,  88 => 25,  83 => 23,  80 => 22,  77 => 21,  71 => 19,  69 => 18,  65 => 17,  59 => 14,  55 => 13,  50 => 12,  41 => 11,  11 => 9,);
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

{% block common %}
    \"contentPadding\": \"{{ column.padding }}\",
    \"defaultContent\": \"{{ column.defaultContent }}\",
    \"name\": \"{{ column.name }}\",
    \"orderable\": false,
    \"searchable\": false,
    \"title\": \"{{ column.title|raw }}\",
    {% if column.type %}
        \"type\": \"{{ column.type }}\",
    {% endif %}
    {% if column.visible %}
        \"visible\": true,
        \"className\": \"{{ column.class }}\",
    {% else %}
        \"visible\": false,
        \"className\": \"never {{ column.class }}\",
    {% endif %}
    \"width\": \"{{ column.width }}\",
{% endblock %}

{% block data %}
    \"data\": \"{{ column.data }}\",
    \"render\": function(data, type, row, meta) {
        {% include 'SgDatatablesBundle:Action:action.html.twig' with { 'column': column, 'actions': column.actions } %}
    },
{% endblock %}
", "SgDatatablesBundle:Column:action.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/action.html.twig");
    }
}
