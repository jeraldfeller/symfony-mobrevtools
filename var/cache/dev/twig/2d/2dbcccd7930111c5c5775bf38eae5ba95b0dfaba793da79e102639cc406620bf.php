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
        $__internal_8934aa77fdb72f9bdbb89e5bc39fbc83c1652494fc3742e8756638953f2de62f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8934aa77fdb72f9bdbb89e5bc39fbc83c1652494fc3742e8756638953f2de62f->enter($__internal_8934aa77fdb72f9bdbb89e5bc39fbc83c1652494fc3742e8756638953f2de62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/image.html.twig"));

        $__internal_88990881f9ddcd9132374ec70450d4bb9888b06f6c97c96e41c0b91c0a501b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88990881f9ddcd9132374ec70450d4bb9888b06f6c97c96e41c0b91c0a501b96->enter($__internal_88990881f9ddcd9132374ec70450d4bb9888b06f6c97c96e41c0b91c0a501b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8934aa77fdb72f9bdbb89e5bc39fbc83c1652494fc3742e8756638953f2de62f->leave($__internal_8934aa77fdb72f9bdbb89e5bc39fbc83c1652494fc3742e8756638953f2de62f_prof);

        
        $__internal_88990881f9ddcd9132374ec70450d4bb9888b06f6c97c96e41c0b91c0a501b96->leave($__internal_88990881f9ddcd9132374ec70450d4bb9888b06f6c97c96e41c0b91c0a501b96_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_e63eaf7360ace5eed4336a46be9b1756e0fbe9a58f27b5ee0bab4b815e2811df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63eaf7360ace5eed4336a46be9b1756e0fbe9a58f27b5ee0bab4b815e2811df->enter($__internal_e63eaf7360ace5eed4336a46be9b1756e0fbe9a58f27b5ee0bab4b815e2811df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_d3a2612cc5832e509ee8bf71d8965d714672256f09d6badb442a52f4a61a01fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a2612cc5832e509ee8bf71d8965d714672256f09d6badb442a52f4a61a01fd->enter($__internal_d3a2612cc5832e509ee8bf71d8965d714672256f09d6badb442a52f4a61a01fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_d3a2612cc5832e509ee8bf71d8965d714672256f09d6badb442a52f4a61a01fd->leave($__internal_d3a2612cc5832e509ee8bf71d8965d714672256f09d6badb442a52f4a61a01fd_prof);

        
        $__internal_e63eaf7360ace5eed4336a46be9b1756e0fbe9a58f27b5ee0bab4b815e2811df->leave($__internal_e63eaf7360ace5eed4336a46be9b1756e0fbe9a58f27b5ee0bab4b815e2811df_prof);

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
