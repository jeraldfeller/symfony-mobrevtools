<?php

/* @SgDatatables/Column/datetime.html.twig */
class __TwigTemplate_31298484d88def4fe563110882836c80400c1825d67a1ae9586f05e9fea65c6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "@SgDatatables/Column/datetime.html.twig", 9);
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
        $__internal_bb899e902865ebeb9b06e3c46e991afd01e75750a2bb165c6356331976647263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb899e902865ebeb9b06e3c46e991afd01e75750a2bb165c6356331976647263->enter($__internal_bb899e902865ebeb9b06e3c46e991afd01e75750a2bb165c6356331976647263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/datetime.html.twig"));

        $__internal_a0d8877314916f7061e90b629584417e9f2b10966f625599855e7cfec5ddeed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d8877314916f7061e90b629584417e9f2b10966f625599855e7cfec5ddeed3->enter($__internal_a0d8877314916f7061e90b629584417e9f2b10966f625599855e7cfec5ddeed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb899e902865ebeb9b06e3c46e991afd01e75750a2bb165c6356331976647263->leave($__internal_bb899e902865ebeb9b06e3c46e991afd01e75750a2bb165c6356331976647263_prof);

        
        $__internal_a0d8877314916f7061e90b629584417e9f2b10966f625599855e7cfec5ddeed3->leave($__internal_a0d8877314916f7061e90b629584417e9f2b10966f625599855e7cfec5ddeed3_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_7e16b17ea2d944d65297f9ce92b1bd8a66202bdd715d79f65c712b7817001200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e16b17ea2d944d65297f9ce92b1bd8a66202bdd715d79f65c712b7817001200->enter($__internal_7e16b17ea2d944d65297f9ce92b1bd8a66202bdd715d79f65c712b7817001200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_68989bb7553a78e1014df593a47a5be37a4ad6cb8ed063da9b87ed91d82b7ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68989bb7553a78e1014df593a47a5be37a4ad6cb8ed063da9b87ed91d82b7ae9->enter($__internal_68989bb7553a78e1014df593a47a5be37a4ad6cb8ed063da9b87ed91d82b7ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        // line 13
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "editable", array())) {
            // line 14
            echo "        \"render\": function(data, type, row, meta) {
            return render_editable_datetime(data, type, row, meta, '";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "dateFormat", array()), "html", null, true);
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
            echo "(data, type, row, meta, '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "dateFormat", array()), "html", null, true);
            echo "');
        },
    ";
        }
        
        $__internal_68989bb7553a78e1014df593a47a5be37a4ad6cb8ed063da9b87ed91d82b7ae9->leave($__internal_68989bb7553a78e1014df593a47a5be37a4ad6cb8ed063da9b87ed91d82b7ae9_prof);

        
        $__internal_7e16b17ea2d944d65297f9ce92b1bd8a66202bdd715d79f65c712b7817001200->leave($__internal_7e16b17ea2d944d65297f9ce92b1bd8a66202bdd715d79f65c712b7817001200_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Column/datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  69 => 18,  59 => 15,  56 => 14,  54 => 13,  49 => 12,  40 => 11,  11 => 9,);
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
            return render_editable_datetime(data, type, row, meta, '{{ column.data }}', '{{ column.dateFormat }}', '{{ column.index }}');
        },
    {% else %}
        \"render\": function(data, type, row, meta) {
            return {{ column.render }}(data, type, row, meta, '{{ column.dateFormat }}');
        },
    {% endif %}
{% endblock %}
", "@SgDatatables/Column/datetime.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Column\\datetime.html.twig");
    }
}
