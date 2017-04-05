<?php

/* SgDatatablesBundle:Column:image.html.twig */
class __TwigTemplate_aecbbd3842bc34b86975959503278ddd568cafbba66f82b6247ea0f762e0eae5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:image.html.twig", 9);
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
        $__internal_dafdb78365f3385afd1e1957d1c3fca35cdd4e84d290c904d9342199dec4ba97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafdb78365f3385afd1e1957d1c3fca35cdd4e84d290c904d9342199dec4ba97->enter($__internal_dafdb78365f3385afd1e1957d1c3fca35cdd4e84d290c904d9342199dec4ba97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $__internal_cbbd76a35da7e4205737e221fb143fd293a910f79408b98dae3cb65c4f77bd2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbd76a35da7e4205737e221fb143fd293a910f79408b98dae3cb65c4f77bd2e->enter($__internal_cbbd76a35da7e4205737e221fb143fd293a910f79408b98dae3cb65c4f77bd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dafdb78365f3385afd1e1957d1c3fca35cdd4e84d290c904d9342199dec4ba97->leave($__internal_dafdb78365f3385afd1e1957d1c3fca35cdd4e84d290c904d9342199dec4ba97_prof);

        
        $__internal_cbbd76a35da7e4205737e221fb143fd293a910f79408b98dae3cb65c4f77bd2e->leave($__internal_cbbd76a35da7e4205737e221fb143fd293a910f79408b98dae3cb65c4f77bd2e_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_f0257abc96c726b2e2ef5dfc47b852c1f4ef7fd19ad51e1e19942cd03d5151b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0257abc96c726b2e2ef5dfc47b852c1f4ef7fd19ad51e1e19942cd03d5151b4->enter($__internal_f0257abc96c726b2e2ef5dfc47b852c1f4ef7fd19ad51e1e19942cd03d5151b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_11a14acb32f23a99ec1f82b7065d91ab0fb952db6e42f7a0e802bc71b7ece3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a14acb32f23a99ec1f82b7065d91ab0fb952db6e42f7a0e802bc71b7ece3d0->enter($__internal_11a14acb32f23a99ec1f82b7065d91ab0fb952db6e42f7a0e802bc71b7ece3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_11a14acb32f23a99ec1f82b7065d91ab0fb952db6e42f7a0e802bc71b7ece3d0->leave($__internal_11a14acb32f23a99ec1f82b7065d91ab0fb952db6e42f7a0e802bc71b7ece3d0_prof);

        
        $__internal_f0257abc96c726b2e2ef5dfc47b852c1f4ef7fd19ad51e1e19942cd03d5151b4->leave($__internal_f0257abc96c726b2e2ef5dfc47b852c1f4ef7fd19ad51e1e19942cd03d5151b4_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:image.html.twig";
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
", "SgDatatablesBundle:Column:image.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/image.html.twig");
    }
}
