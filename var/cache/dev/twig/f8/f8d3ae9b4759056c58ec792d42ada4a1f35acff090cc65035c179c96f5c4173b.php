<?php

/* SgDatatablesBundle:Filters:filter.html.twig */
class __TwigTemplate_dc8fcd26254244cdc70ff2a6a4499f4b276b5a14f5064940f95c705935609153 extends Twig_Template
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
        $__internal_21f7972840bc0e590e3fce4d45db326fbc57ef8a34efa833f3e05f85e2fef49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f7972840bc0e590e3fce4d45db326fbc57ef8a34efa833f3e05f85e2fef49f->enter($__internal_21f7972840bc0e590e3fce4d45db326fbc57ef8a34efa833f3e05f85e2fef49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter.html.twig"));

        $__internal_8921489990910402d884f6a7773867202d0998189078d3ad9e291d6c83bd9439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8921489990910402d884f6a7773867202d0998189078d3ad9e291d6c83bd9439->enter($__internal_8921489990910402d884f6a7773867202d0998189078d3ad9e291d6c83bd9439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    <button type=\"button\"
            id=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
        echo "-sg-filter-cancel-button-";
        echo twig_escape_filter($this->env, (isset($context["selectorId"]) ? $context["selectorId"] : $this->getContext($context, "selectorId")), "html", null, true);
        echo "\"
            class=\"btn btn-default btn-sm\"
    >&times;</button>
";
        $context["cancel_button_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "
";
        // line 16
        ob_start();
        // line 17
        echo "    <script>
        \$(\"#";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
        echo "-sg-filter-cancel-button-";
        echo twig_escape_filter($this->env, (isset($context["selectorId"]) ? $context["selectorId"] : $this->getContext($context, "selectorId")), "html", null, true);
        echo "\").click(function() {
            if ('' != \$(\"#";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
        echo "-sg-filter-";
        echo twig_escape_filter($this->env, (isset($context["selectorId"]) ? $context["selectorId"] : $this->getContext($context, "selectorId")), "html", null, true);
        echo "\").val()) {
                \$(\"#";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
        echo "-sg-filter-";
        echo twig_escape_filter($this->env, (isset($context["selectorId"]) ? $context["selectorId"] : $this->getContext($context, "selectorId")), "html", null, true);
        echo "\")
                    .val('')
                    .change();
            }
        });
    </script>
";
        $context["cancel_button_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('html', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_21f7972840bc0e590e3fce4d45db326fbc57ef8a34efa833f3e05f85e2fef49f->leave($__internal_21f7972840bc0e590e3fce4d45db326fbc57ef8a34efa833f3e05f85e2fef49f_prof);

        
        $__internal_8921489990910402d884f6a7773867202d0998189078d3ad9e291d6c83bd9439->leave($__internal_8921489990910402d884f6a7773867202d0998189078d3ad9e291d6c83bd9439_prof);

    }

    // line 28
    public function block_html($context, array $blocks = array())
    {
        $__internal_4f81d41a248c7033ef07bfbf9346d7d615d19b467ecb12256e6f7d5345008538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f81d41a248c7033ef07bfbf9346d7d615d19b467ecb12256e6f7d5345008538->enter($__internal_4f81d41a248c7033ef07bfbf9346d7d615d19b467ecb12256e6f7d5345008538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_174a26366c36d5d7c503b6dcfe264d452082dd44814f99f59a281287839993e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174a26366c36d5d7c503b6dcfe264d452082dd44814f99f59a281287839993e7->enter($__internal_174a26366c36d5d7c503b6dcfe264d452082dd44814f99f59a281287839993e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        // line 29
        echo "    <input type=\"text\"
           id=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["tableId"]) ? $context["tableId"] : $this->getContext($context, "tableId")), "html", null, true);
        echo "-sg-filter-";
        echo twig_escape_filter($this->env, (isset($context["selectorId"]) ? $context["selectorId"] : $this->getContext($context, "selectorId")), "html", null, true);
        echo "\"
           class=\"individual_filtering";
        // line 31
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "class", array()), "html", null, true);
        }
        echo "\"
           style=\"";
        // line 32
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array())) {
            echo " width:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array()), "html", null, true);
            echo ";";
        }
        echo "\"
           placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, trim(strip_tags($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "title", array()))), "html", null, true);
        echo "\"
           data-filter-property-id=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["filterColumnId"]) ? $context["filterColumnId"] : $this->getContext($context, "filterColumnId")), "html", null, true);
        echo "\"
           data-search-column=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "searchColumn", array()), "html", null, true);
        echo "\"
           ";
        // line 36
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array())) {
            echo "name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\"";
        }
        // line 37
        echo "           ";
        if ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "searchColumn", array())) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "searchColumn", array()), "html", null, true);
            echo "\"";
        }
        echo " />
    ";
        // line 38
        if ((true == $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "cancelButton", array()))) {
            // line 39
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["cancel_button_html"]) ? $context["cancel_button_html"] : $this->getContext($context, "cancel_button_html")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_174a26366c36d5d7c503b6dcfe264d452082dd44814f99f59a281287839993e7->leave($__internal_174a26366c36d5d7c503b6dcfe264d452082dd44814f99f59a281287839993e7_prof);

        
        $__internal_4f81d41a248c7033ef07bfbf9346d7d615d19b467ecb12256e6f7d5345008538->leave($__internal_4f81d41a248c7033ef07bfbf9346d7d615d19b467ecb12256e6f7d5345008538_prof);

    }

    // line 43
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_69219a9091ca4f84b417ac929be8139b566ee9950ca24c5ea1cb793e29a35a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69219a9091ca4f84b417ac929be8139b566ee9950ca24c5ea1cb793e29a35a93->enter($__internal_69219a9091ca4f84b417ac929be8139b566ee9950ca24c5ea1cb793e29a35a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_8b7c6b35f04a924f6d76b93007f111944b491c358e494452a6cdf9976cda38d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7c6b35f04a924f6d76b93007f111944b491c358e494452a6cdf9976cda38d2->enter($__internal_8b7c6b35f04a924f6d76b93007f111944b491c358e494452a6cdf9976cda38d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 44
        echo "    ";
        if ((true == $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "cancelButton", array()))) {
            // line 45
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["cancel_button_js"]) ? $context["cancel_button_js"] : $this->getContext($context, "cancel_button_js")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_8b7c6b35f04a924f6d76b93007f111944b491c358e494452a6cdf9976cda38d2->leave($__internal_8b7c6b35f04a924f6d76b93007f111944b491c358e494452a6cdf9976cda38d2_prof);

        
        $__internal_69219a9091ca4f84b417ac929be8139b566ee9950ca24c5ea1cb793e29a35a93->leave($__internal_69219a9091ca4f84b417ac929be8139b566ee9950ca24c5ea1cb793e29a35a93_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Filters:filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 45,  176 => 44,  167 => 43,  153 => 39,  151 => 38,  142 => 37,  136 => 36,  132 => 35,  128 => 34,  124 => 33,  116 => 32,  109 => 31,  103 => 30,  100 => 29,  91 => 28,  81 => 43,  78 => 42,  76 => 28,  73 => 27,  61 => 20,  55 => 19,  49 => 18,  46 => 17,  44 => 16,  41 => 15,  32 => 11,  29 => 10,  27 => 9,);
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
{% set cancel_button_html %}
    <button type=\"button\"
            id=\"{{ tableId }}-sg-filter-cancel-button-{{ selectorId }}\"
            class=\"btn btn-default btn-sm\"
    >&times;</button>
{% endset %}

{% set cancel_button_js %}
    <script>
        \$(\"#{{ tableId }}-sg-filter-cancel-button-{{ selectorId }}\").click(function() {
            if ('' != \$(\"#{{ tableId }}-sg-filter-{{ selectorId }}\").val()) {
                \$(\"#{{ tableId }}-sg-filter-{{ selectorId }}\")
                    .val('')
                    .change();
            }
        });
    </script>
{% endset %}

{% block html %}
    <input type=\"text\"
           id=\"{{ tableId }}-sg-filter-{{ selectorId }}\"
           class=\"individual_filtering{% if column.filter.class %} {{ column.filter.class }}{% endif %}\"
           style=\"{% if column.width %} width:{{ column.width }};{% endif %}\"
           placeholder=\"{{ column.title|striptags|trim }}\"
           data-filter-property-id=\"{{ filterColumnId }}\"
           data-search-column=\"{{ column.filter.searchColumn }}\"
           {% if column.name %}name=\"{{ column.name }}\"{% endif %}
           {% if column.filter.searchColumn %}value=\"{{ column.filter.searchColumn }}\"{% endif %} />
    {% if true == column.filter.cancelButton %}
        {{ cancel_button_html }}
    {% endif %}
{% endblock %}

{% block javascript %}
    {% if true == column.filter.cancelButton %}
        {{ cancel_button_js }}
    {% endif %}
{% endblock %}
", "SgDatatablesBundle:Filters:filter.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Filters/filter.html.twig");
    }
}
