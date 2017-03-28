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
        $__internal_2f3048fef951c12299e4caf87539bbe8cbad022fbaa4d4393b547cf185372aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f3048fef951c12299e4caf87539bbe8cbad022fbaa4d4393b547cf185372aca->enter($__internal_2f3048fef951c12299e4caf87539bbe8cbad022fbaa4d4393b547cf185372aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:datetime.html.twig"));

        $__internal_0aad2bb828417ffc787638ea0a658089a0e6aaa90035057d3a76715e1c57f6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aad2bb828417ffc787638ea0a658089a0e6aaa90035057d3a76715e1c57f6c1->enter($__internal_0aad2bb828417ffc787638ea0a658089a0e6aaa90035057d3a76715e1c57f6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f3048fef951c12299e4caf87539bbe8cbad022fbaa4d4393b547cf185372aca->leave($__internal_2f3048fef951c12299e4caf87539bbe8cbad022fbaa4d4393b547cf185372aca_prof);

        
        $__internal_0aad2bb828417ffc787638ea0a658089a0e6aaa90035057d3a76715e1c57f6c1->leave($__internal_0aad2bb828417ffc787638ea0a658089a0e6aaa90035057d3a76715e1c57f6c1_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_b04afcb3d9313e33a69c6e9f8b22c7201289e621717a918e1f6766025b8470c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b04afcb3d9313e33a69c6e9f8b22c7201289e621717a918e1f6766025b8470c1->enter($__internal_b04afcb3d9313e33a69c6e9f8b22c7201289e621717a918e1f6766025b8470c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_ad38a8e15bba8783b5cfcf44de39456e0629f9bdbe640ef35413bd909b2715b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad38a8e15bba8783b5cfcf44de39456e0629f9bdbe640ef35413bd909b2715b4->enter($__internal_ad38a8e15bba8783b5cfcf44de39456e0629f9bdbe640ef35413bd909b2715b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_ad38a8e15bba8783b5cfcf44de39456e0629f9bdbe640ef35413bd909b2715b4->leave($__internal_ad38a8e15bba8783b5cfcf44de39456e0629f9bdbe640ef35413bd909b2715b4_prof);

        
        $__internal_b04afcb3d9313e33a69c6e9f8b22c7201289e621717a918e1f6766025b8470c1->leave($__internal_b04afcb3d9313e33a69c6e9f8b22c7201289e621717a918e1f6766025b8470c1_prof);

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
