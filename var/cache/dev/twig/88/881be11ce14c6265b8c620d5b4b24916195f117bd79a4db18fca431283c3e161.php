<?php

/* SgDatatablesBundle:Column:boolean.html.twig */
class __TwigTemplate_2b201915c09dd6d3df3dfd680acc2d7a5e732244d00aa8574fc29a6145895c4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:boolean.html.twig", 9);
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
        $__internal_73587eacdb4603f9204c884ba11e5e5e35462f5e6dc9b6a4da3a01347f470a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73587eacdb4603f9204c884ba11e5e5e35462f5e6dc9b6a4da3a01347f470a1a->enter($__internal_73587eacdb4603f9204c884ba11e5e5e35462f5e6dc9b6a4da3a01347f470a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:boolean.html.twig"));

        $__internal_6e365ea0e1d9f4ad3deafac38f2a6ad704c91e0b0587fc111ce60fef944c5100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e365ea0e1d9f4ad3deafac38f2a6ad704c91e0b0587fc111ce60fef944c5100->enter($__internal_6e365ea0e1d9f4ad3deafac38f2a6ad704c91e0b0587fc111ce60fef944c5100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73587eacdb4603f9204c884ba11e5e5e35462f5e6dc9b6a4da3a01347f470a1a->leave($__internal_73587eacdb4603f9204c884ba11e5e5e35462f5e6dc9b6a4da3a01347f470a1a_prof);

        
        $__internal_6e365ea0e1d9f4ad3deafac38f2a6ad704c91e0b0587fc111ce60fef944c5100->leave($__internal_6e365ea0e1d9f4ad3deafac38f2a6ad704c91e0b0587fc111ce60fef944c5100_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_da0a2608df3ec3c92d394f315ed49f138ed092b20f96f6474379fc3c846964a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0a2608df3ec3c92d394f315ed49f138ed092b20f96f6474379fc3c846964a5->enter($__internal_da0a2608df3ec3c92d394f315ed49f138ed092b20f96f6474379fc3c846964a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_29ffbfe296e4d52b1e2eced9c00e729c85e820b61929d809b2ada8d23deb18ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ffbfe296e4d52b1e2eced9c00e729c85e820b61929d809b2ada8d23deb18ed->enter($__internal_29ffbfe296e4d52b1e2eced9c00e729c85e820b61929d809b2ada8d23deb18ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_29ffbfe296e4d52b1e2eced9c00e729c85e820b61929d809b2ada8d23deb18ed->leave($__internal_29ffbfe296e4d52b1e2eced9c00e729c85e820b61929d809b2ada8d23deb18ed_prof);

        
        $__internal_da0a2608df3ec3c92d394f315ed49f138ed092b20f96f6474379fc3c846964a5->leave($__internal_da0a2608df3ec3c92d394f315ed49f138ed092b20f96f6474379fc3c846964a5_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:boolean.html.twig";
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
", "SgDatatablesBundle:Column:boolean.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/boolean.html.twig");
    }
}
