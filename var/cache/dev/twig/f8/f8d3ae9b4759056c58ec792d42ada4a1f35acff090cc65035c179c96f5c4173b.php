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
        $__internal_88c5857ddb8ef727e0db4b5f039e8552d16d41cfd0f7e72907c7fa5920b9d11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c5857ddb8ef727e0db4b5f039e8552d16d41cfd0f7e72907c7fa5920b9d11d->enter($__internal_88c5857ddb8ef727e0db4b5f039e8552d16d41cfd0f7e72907c7fa5920b9d11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter.html.twig"));

        $__internal_12151253fb277f749a59844beea6d54a95437d0ea78c1787589e46700420c232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12151253fb277f749a59844beea6d54a95437d0ea78c1787589e46700420c232->enter($__internal_12151253fb277f749a59844beea6d54a95437d0ea78c1787589e46700420c232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter.html.twig"));

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
        
        $__internal_88c5857ddb8ef727e0db4b5f039e8552d16d41cfd0f7e72907c7fa5920b9d11d->leave($__internal_88c5857ddb8ef727e0db4b5f039e8552d16d41cfd0f7e72907c7fa5920b9d11d_prof);

        
        $__internal_12151253fb277f749a59844beea6d54a95437d0ea78c1787589e46700420c232->leave($__internal_12151253fb277f749a59844beea6d54a95437d0ea78c1787589e46700420c232_prof);

    }

    // line 28
    public function block_html($context, array $blocks = array())
    {
        $__internal_2dd27d9a706cd14c54df6f409eaf1d8784882deafb1000f2486aa55fa01a0b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd27d9a706cd14c54df6f409eaf1d8784882deafb1000f2486aa55fa01a0b4d->enter($__internal_2dd27d9a706cd14c54df6f409eaf1d8784882deafb1000f2486aa55fa01a0b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_6ea0cd989a41b1eb725da8aff4932f88a4e915c58fe004217c48ff6b496f8343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea0cd989a41b1eb725da8aff4932f88a4e915c58fe004217c48ff6b496f8343->enter($__internal_6ea0cd989a41b1eb725da8aff4932f88a4e915c58fe004217c48ff6b496f8343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

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
        
        $__internal_6ea0cd989a41b1eb725da8aff4932f88a4e915c58fe004217c48ff6b496f8343->leave($__internal_6ea0cd989a41b1eb725da8aff4932f88a4e915c58fe004217c48ff6b496f8343_prof);

        
        $__internal_2dd27d9a706cd14c54df6f409eaf1d8784882deafb1000f2486aa55fa01a0b4d->leave($__internal_2dd27d9a706cd14c54df6f409eaf1d8784882deafb1000f2486aa55fa01a0b4d_prof);

    }

    // line 43
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_457e1d6eeb9d188282730d3d1da83df113719d04aac459fa3f73d0d9186f4852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457e1d6eeb9d188282730d3d1da83df113719d04aac459fa3f73d0d9186f4852->enter($__internal_457e1d6eeb9d188282730d3d1da83df113719d04aac459fa3f73d0d9186f4852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_68faef19666fb2e6a7b31b857899a53f8d8fc06cfc9c3902e9485840f428269c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68faef19666fb2e6a7b31b857899a53f8d8fc06cfc9c3902e9485840f428269c->enter($__internal_68faef19666fb2e6a7b31b857899a53f8d8fc06cfc9c3902e9485840f428269c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 44
        echo "    ";
        if ((true == $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "cancelButton", array()))) {
            // line 45
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["cancel_button_js"]) ? $context["cancel_button_js"] : $this->getContext($context, "cancel_button_js")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_68faef19666fb2e6a7b31b857899a53f8d8fc06cfc9c3902e9485840f428269c->leave($__internal_68faef19666fb2e6a7b31b857899a53f8d8fc06cfc9c3902e9485840f428269c_prof);

        
        $__internal_457e1d6eeb9d188282730d3d1da83df113719d04aac459fa3f73d0d9186f4852->leave($__internal_457e1d6eeb9d188282730d3d1da83df113719d04aac459fa3f73d0d9186f4852_prof);

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
