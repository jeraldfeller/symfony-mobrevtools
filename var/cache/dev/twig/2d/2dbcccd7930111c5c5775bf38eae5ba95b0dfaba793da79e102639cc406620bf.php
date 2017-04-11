<?php

/* @SgDatatables/Column/image.html.twig */
class __TwigTemplate_c4759359278d173f668354e28d71982e51066ef6deac95441b2d426739ccb912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "@SgDatatables/Column/image.html.twig", 9);
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
        $__internal_fb1a87fce41f6b8cd00ee7065c393280adc983b7f8c4fcc31b8f47fb188bb871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb1a87fce41f6b8cd00ee7065c393280adc983b7f8c4fcc31b8f47fb188bb871->enter($__internal_fb1a87fce41f6b8cd00ee7065c393280adc983b7f8c4fcc31b8f47fb188bb871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/image.html.twig"));

        $__internal_7eecf21875cc0adbf7cbc5eaa758c8d6042ff65175f89d6348ba9cc2d3a2e4ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eecf21875cc0adbf7cbc5eaa758c8d6042ff65175f89d6348ba9cc2d3a2e4ff->enter($__internal_7eecf21875cc0adbf7cbc5eaa758c8d6042ff65175f89d6348ba9cc2d3a2e4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb1a87fce41f6b8cd00ee7065c393280adc983b7f8c4fcc31b8f47fb188bb871->leave($__internal_fb1a87fce41f6b8cd00ee7065c393280adc983b7f8c4fcc31b8f47fb188bb871_prof);

        
        $__internal_7eecf21875cc0adbf7cbc5eaa758c8d6042ff65175f89d6348ba9cc2d3a2e4ff->leave($__internal_7eecf21875cc0adbf7cbc5eaa758c8d6042ff65175f89d6348ba9cc2d3a2e4ff_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_abfc3c2dc8358246b04049e28c061b57df4373a1b3e2b5cd04375da843006e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abfc3c2dc8358246b04049e28c061b57df4373a1b3e2b5cd04375da843006e49->enter($__internal_abfc3c2dc8358246b04049e28c061b57df4373a1b3e2b5cd04375da843006e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_17a7718fa703b4c0d446173475e1da4689a583440f7c095b2892071f9cfb320a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a7718fa703b4c0d446173475e1da4689a583440f7c095b2892071f9cfb320a->enter($__internal_17a7718fa703b4c0d446173475e1da4689a583440f7c095b2892071f9cfb320a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        // line 13
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "isAssociation", array())) {
            // line 14
            echo "        \"render\": function(data, type, row, meta) {
            if (data === undefined) {
                var str = \"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
            echo "\";
                var res = str.split(\".\");
                return row[res[0]];
            } else {
                return data;
            }
        },
    ";
        }
        
        $__internal_17a7718fa703b4c0d446173475e1da4689a583440f7c095b2892071f9cfb320a->leave($__internal_17a7718fa703b4c0d446173475e1da4689a583440f7c095b2892071f9cfb320a_prof);

        
        $__internal_abfc3c2dc8358246b04049e28c061b57df4373a1b3e2b5cd04375da843006e49->leave($__internal_abfc3c2dc8358246b04049e28c061b57df4373a1b3e2b5cd04375da843006e49_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Column/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  56 => 14,  54 => 13,  49 => 12,  40 => 11,  11 => 9,);
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
    {% if column.isAssociation %}
        \"render\": function(data, type, row, meta) {
            if (data === undefined) {
                var str = \"{{ column.data }}\";
                var res = str.split(\".\");
                return row[res[0]];
            } else {
                return data;
            }
        },
    {% endif %}
{% endblock %}
", "@SgDatatables/Column/image.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Column\\image.html.twig");
    }
}
