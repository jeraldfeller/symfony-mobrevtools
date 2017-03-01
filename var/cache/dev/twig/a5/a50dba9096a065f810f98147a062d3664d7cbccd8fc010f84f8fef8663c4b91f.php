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
        $__internal_f30b9fa29a3c7f9acbe956e16264da9e5378f7a95078f9878ac51d6048339c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30b9fa29a3c7f9acbe956e16264da9e5378f7a95078f9878ac51d6048339c40->enter($__internal_f30b9fa29a3c7f9acbe956e16264da9e5378f7a95078f9878ac51d6048339c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $__internal_66a1b7cb192e19e10a682eda4885f6d45eb68c69f05fe32d7f93cb21548ab8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a1b7cb192e19e10a682eda4885f6d45eb68c69f05fe32d7f93cb21548ab8c5->enter($__internal_66a1b7cb192e19e10a682eda4885f6d45eb68c69f05fe32d7f93cb21548ab8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f30b9fa29a3c7f9acbe956e16264da9e5378f7a95078f9878ac51d6048339c40->leave($__internal_f30b9fa29a3c7f9acbe956e16264da9e5378f7a95078f9878ac51d6048339c40_prof);

        
        $__internal_66a1b7cb192e19e10a682eda4885f6d45eb68c69f05fe32d7f93cb21548ab8c5->leave($__internal_66a1b7cb192e19e10a682eda4885f6d45eb68c69f05fe32d7f93cb21548ab8c5_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_651660617386efb3cdaace13a6725ed98eee6056b5c4895ce364daca4ba83531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651660617386efb3cdaace13a6725ed98eee6056b5c4895ce364daca4ba83531->enter($__internal_651660617386efb3cdaace13a6725ed98eee6056b5c4895ce364daca4ba83531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_0d6b99a897ca9b0819f76d537d4ecd7e8ee91684dce888eb94ce158f90545ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6b99a897ca9b0819f76d537d4ecd7e8ee91684dce888eb94ce158f90545ddb->enter($__internal_0d6b99a897ca9b0819f76d537d4ecd7e8ee91684dce888eb94ce158f90545ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

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
        
        $__internal_0d6b99a897ca9b0819f76d537d4ecd7e8ee91684dce888eb94ce158f90545ddb->leave($__internal_0d6b99a897ca9b0819f76d537d4ecd7e8ee91684dce888eb94ce158f90545ddb_prof);

        
        $__internal_651660617386efb3cdaace13a6725ed98eee6056b5c4895ce364daca4ba83531->leave($__internal_651660617386efb3cdaace13a6725ed98eee6056b5c4895ce364daca4ba83531_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_3fda7d38a45e9f083bd0b5033d4468fc285d99d9f7c1891b1aa99dc25059e608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fda7d38a45e9f083bd0b5033d4468fc285d99d9f7c1891b1aa99dc25059e608->enter($__internal_3fda7d38a45e9f083bd0b5033d4468fc285d99d9f7c1891b1aa99dc25059e608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_b5777c6a2cf5683d7b4c4ed1098878bf5fcdb732fcef8390150c7aab9fab3860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5777c6a2cf5683d7b4c4ed1098878bf5fcdb732fcef8390150c7aab9fab3860->enter($__internal_b5777c6a2cf5683d7b4c4ed1098878bf5fcdb732fcef8390150c7aab9fab3860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_b5777c6a2cf5683d7b4c4ed1098878bf5fcdb732fcef8390150c7aab9fab3860->leave($__internal_b5777c6a2cf5683d7b4c4ed1098878bf5fcdb732fcef8390150c7aab9fab3860_prof);

        
        $__internal_3fda7d38a45e9f083bd0b5033d4468fc285d99d9f7c1891b1aa99dc25059e608->leave($__internal_3fda7d38a45e9f083bd0b5033d4468fc285d99d9f7c1891b1aa99dc25059e608_prof);

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
