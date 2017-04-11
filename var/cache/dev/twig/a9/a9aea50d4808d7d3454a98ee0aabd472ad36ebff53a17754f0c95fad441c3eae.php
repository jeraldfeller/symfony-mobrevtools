<?php

/* @SgDatatables/Column/boolean.html.twig */
class __TwigTemplate_f1d39eca633cf3332e8ffb773c6983a0d039843d8894e0e94bd11223b314995c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "@SgDatatables/Column/boolean.html.twig", 9);
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
        $__internal_95ba33ffb926cef66372b7fe4ce1a478a889a8e3fdce8cda7bd625b8ac508412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ba33ffb926cef66372b7fe4ce1a478a889a8e3fdce8cda7bd625b8ac508412->enter($__internal_95ba33ffb926cef66372b7fe4ce1a478a889a8e3fdce8cda7bd625b8ac508412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/boolean.html.twig"));

        $__internal_5ec08682c44fa982d3d7860d70b406dc6f38fa2cbc9fa6f977863acdb0d48f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec08682c44fa982d3d7860d70b406dc6f38fa2cbc9fa6f977863acdb0d48f6d->enter($__internal_5ec08682c44fa982d3d7860d70b406dc6f38fa2cbc9fa6f977863acdb0d48f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95ba33ffb926cef66372b7fe4ce1a478a889a8e3fdce8cda7bd625b8ac508412->leave($__internal_95ba33ffb926cef66372b7fe4ce1a478a889a8e3fdce8cda7bd625b8ac508412_prof);

        
        $__internal_5ec08682c44fa982d3d7860d70b406dc6f38fa2cbc9fa6f977863acdb0d48f6d->leave($__internal_5ec08682c44fa982d3d7860d70b406dc6f38fa2cbc9fa6f977863acdb0d48f6d_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_40bf0ad7898e4f9ef63107371cdfc382086b8d5cce3f4e9c37d4997b455238e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40bf0ad7898e4f9ef63107371cdfc382086b8d5cce3f4e9c37d4997b455238e4->enter($__internal_40bf0ad7898e4f9ef63107371cdfc382086b8d5cce3f4e9c37d4997b455238e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_11564384f972512fd820a5e5b8beebfce3e9e3a228da7c16092cf7b1bcc800a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11564384f972512fd820a5e5b8beebfce3e9e3a228da7c16092cf7b1bcc800a0->enter($__internal_11564384f972512fd820a5e5b8beebfce3e9e3a228da7c16092cf7b1bcc800a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        // line 13
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "editable", array())) {
            // line 14
            echo "        \"render\": function(data, type, row, meta) {
            return render_editable_boolean(data, type, row, meta, '";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "trueLabel", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "falseLabel", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "index", array()), "html", null, true);
            echo "');
        },
    ";
        } else {
            // line 18
            echo "        \"render\": function(data, type, row, meta) {
            return ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array()), "html", null, true);
            echo "(data, type, row, meta, \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "trueIcon", array()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "falseIcon", array()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "trueLabel", array()), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "falseLabel", array()), "html", null, true);
            echo "\");
        },
    ";
        }
        
        $__internal_11564384f972512fd820a5e5b8beebfce3e9e3a228da7c16092cf7b1bcc800a0->leave($__internal_11564384f972512fd820a5e5b8beebfce3e9e3a228da7c16092cf7b1bcc800a0_prof);

        
        $__internal_40bf0ad7898e4f9ef63107371cdfc382086b8d5cce3f4e9c37d4997b455238e4->leave($__internal_40bf0ad7898e4f9ef63107371cdfc382086b8d5cce3f4e9c37d4997b455238e4_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Column/boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  71 => 18,  59 => 15,  56 => 14,  54 => 13,  49 => 12,  40 => 11,  11 => 9,);
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
    {% if column.editable %}
        \"render\": function(data, type, row, meta) {
            return render_editable_boolean(data, type, row, meta, '{{ column.data }}', '{{ column.trueLabel }}', '{{ column.falseLabel }}', '{{ column.index }}');
        },
    {% else %}
        \"render\": function(data, type, row, meta) {
            return {{ column.render }}(data, type, row, meta, \"{{ column.trueIcon }}\", \"{{ column.falseIcon }}\", \"{{ column.trueLabel }}\", \"{{ column.falseLabel }}\");
        },
    {% endif %}
{% endblock %}
", "@SgDatatables/Column/boolean.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Column\\boolean.html.twig");
    }
}
