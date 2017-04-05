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
        $__internal_091d7bc53141d2d6581438ea106ed888e14dedd4c8af23981e87e2901a3705ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091d7bc53141d2d6581438ea106ed888e14dedd4c8af23981e87e2901a3705ed->enter($__internal_091d7bc53141d2d6581438ea106ed888e14dedd4c8af23981e87e2901a3705ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter.html.twig"));

        $__internal_5be6e85cf307012503730f2d2d0e3a832f52be38c119c2890f55f38757afae8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be6e85cf307012503730f2d2d0e3a832f52be38c119c2890f55f38757afae8c->enter($__internal_5be6e85cf307012503730f2d2d0e3a832f52be38c119c2890f55f38757afae8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Filters:filter.html.twig"));

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
        
        $__internal_091d7bc53141d2d6581438ea106ed888e14dedd4c8af23981e87e2901a3705ed->leave($__internal_091d7bc53141d2d6581438ea106ed888e14dedd4c8af23981e87e2901a3705ed_prof);

        
        $__internal_5be6e85cf307012503730f2d2d0e3a832f52be38c119c2890f55f38757afae8c->leave($__internal_5be6e85cf307012503730f2d2d0e3a832f52be38c119c2890f55f38757afae8c_prof);

    }

    // line 28
    public function block_html($context, array $blocks = array())
    {
        $__internal_b059c76cbd5c10a8e5c5e2c041a890394730b0fc3bb5d96be49c80242b256939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b059c76cbd5c10a8e5c5e2c041a890394730b0fc3bb5d96be49c80242b256939->enter($__internal_b059c76cbd5c10a8e5c5e2c041a890394730b0fc3bb5d96be49c80242b256939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

        $__internal_20d2c3f04248b8e762c9d4af26c05127055cb7ab7535857e6c8404b0ad512699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d2c3f04248b8e762c9d4af26c05127055cb7ab7535857e6c8404b0ad512699->enter($__internal_20d2c3f04248b8e762c9d4af26c05127055cb7ab7535857e6c8404b0ad512699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html"));

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
        
        $__internal_20d2c3f04248b8e762c9d4af26c05127055cb7ab7535857e6c8404b0ad512699->leave($__internal_20d2c3f04248b8e762c9d4af26c05127055cb7ab7535857e6c8404b0ad512699_prof);

        
        $__internal_b059c76cbd5c10a8e5c5e2c041a890394730b0fc3bb5d96be49c80242b256939->leave($__internal_b059c76cbd5c10a8e5c5e2c041a890394730b0fc3bb5d96be49c80242b256939_prof);

    }

    // line 43
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_09844fc58a15ede3397805d270f40ab600b2c3f5c951382a058991a2a929747a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09844fc58a15ede3397805d270f40ab600b2c3f5c951382a058991a2a929747a->enter($__internal_09844fc58a15ede3397805d270f40ab600b2c3f5c951382a058991a2a929747a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_8eb380a79c5a49e0a5daf48764d0927e0aea1ea69f4a12ac843780673ab39759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb380a79c5a49e0a5daf48764d0927e0aea1ea69f4a12ac843780673ab39759->enter($__internal_8eb380a79c5a49e0a5daf48764d0927e0aea1ea69f4a12ac843780673ab39759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 44
        echo "    ";
        if ((true == $this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filter", array()), "cancelButton", array()))) {
            // line 45
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["cancel_button_js"]) ? $context["cancel_button_js"] : $this->getContext($context, "cancel_button_js")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_8eb380a79c5a49e0a5daf48764d0927e0aea1ea69f4a12ac843780673ab39759->leave($__internal_8eb380a79c5a49e0a5daf48764d0927e0aea1ea69f4a12ac843780673ab39759_prof);

        
        $__internal_09844fc58a15ede3397805d270f40ab600b2c3f5c951382a058991a2a929747a->leave($__internal_09844fc58a15ede3397805d270f40ab600b2c3f5c951382a058991a2a929747a_prof);

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
