<?php

/* SgDatatablesBundle:Column:datetime.html.twig */
class __TwigTemplate_c13508994095f20f47270d57534bb440f65f9fda851e79b240f795e6326504ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:datetime.html.twig", 9);
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
        $__internal_82bb3c344972015b8269f7e4ec1d5191b2bc1f92a0f179ab4da30815b941aedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82bb3c344972015b8269f7e4ec1d5191b2bc1f92a0f179ab4da30815b941aedd->enter($__internal_82bb3c344972015b8269f7e4ec1d5191b2bc1f92a0f179ab4da30815b941aedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:datetime.html.twig"));

        $__internal_f01b5def0b40e39c508f1830042bb19286b54873ae77f4fcc82ca349d22f655c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01b5def0b40e39c508f1830042bb19286b54873ae77f4fcc82ca349d22f655c->enter($__internal_f01b5def0b40e39c508f1830042bb19286b54873ae77f4fcc82ca349d22f655c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82bb3c344972015b8269f7e4ec1d5191b2bc1f92a0f179ab4da30815b941aedd->leave($__internal_82bb3c344972015b8269f7e4ec1d5191b2bc1f92a0f179ab4da30815b941aedd_prof);

        
        $__internal_f01b5def0b40e39c508f1830042bb19286b54873ae77f4fcc82ca349d22f655c->leave($__internal_f01b5def0b40e39c508f1830042bb19286b54873ae77f4fcc82ca349d22f655c_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_6c9b618b83677de1ab706d208216c60c2bfdf04722f7dff5bae3fad5ecd38ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9b618b83677de1ab706d208216c60c2bfdf04722f7dff5bae3fad5ecd38ccb->enter($__internal_6c9b618b83677de1ab706d208216c60c2bfdf04722f7dff5bae3fad5ecd38ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_f0dc434c5da6835aec710d8c43c808e0964dd4693395f39110eeb8379c783f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0dc434c5da6835aec710d8c43c808e0964dd4693395f39110eeb8379c783f79->enter($__internal_f0dc434c5da6835aec710d8c43c808e0964dd4693395f39110eeb8379c783f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_f0dc434c5da6835aec710d8c43c808e0964dd4693395f39110eeb8379c783f79->leave($__internal_f0dc434c5da6835aec710d8c43c808e0964dd4693395f39110eeb8379c783f79_prof);

        
        $__internal_6c9b618b83677de1ab706d208216c60c2bfdf04722f7dff5bae3fad5ecd38ccb->leave($__internal_6c9b618b83677de1ab706d208216c60c2bfdf04722f7dff5bae3fad5ecd38ccb_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:datetime.html.twig";
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
", "SgDatatablesBundle:Column:datetime.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/datetime.html.twig");
    }
}
