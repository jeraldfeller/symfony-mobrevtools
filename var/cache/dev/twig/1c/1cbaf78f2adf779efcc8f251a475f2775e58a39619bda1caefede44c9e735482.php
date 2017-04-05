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
        $__internal_301cba14cfbcc43c28a2d66490b353c4ae59b61c304c3637d5bff407b204d013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301cba14cfbcc43c28a2d66490b353c4ae59b61c304c3637d5bff407b204d013->enter($__internal_301cba14cfbcc43c28a2d66490b353c4ae59b61c304c3637d5bff407b204d013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/datetime.html.twig"));

        $__internal_b96b9eb59a5c1aba9f72ff36ff0af1be6dbdabdfa8ab3a60eededd77a0954cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96b9eb59a5c1aba9f72ff36ff0af1be6dbdabdfa8ab3a60eededd77a0954cac->enter($__internal_b96b9eb59a5c1aba9f72ff36ff0af1be6dbdabdfa8ab3a60eededd77a0954cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_301cba14cfbcc43c28a2d66490b353c4ae59b61c304c3637d5bff407b204d013->leave($__internal_301cba14cfbcc43c28a2d66490b353c4ae59b61c304c3637d5bff407b204d013_prof);

        
        $__internal_b96b9eb59a5c1aba9f72ff36ff0af1be6dbdabdfa8ab3a60eededd77a0954cac->leave($__internal_b96b9eb59a5c1aba9f72ff36ff0af1be6dbdabdfa8ab3a60eededd77a0954cac_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_7293ecac3713f314641ff30b3dde50d237a7adfef90b85dd988be54c3a2a673c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7293ecac3713f314641ff30b3dde50d237a7adfef90b85dd988be54c3a2a673c->enter($__internal_7293ecac3713f314641ff30b3dde50d237a7adfef90b85dd988be54c3a2a673c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_e0535f7d876b1d7327a8b275e97e21e5ceb0b5e0b4daac3d5030902ffdb1df53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0535f7d876b1d7327a8b275e97e21e5ceb0b5e0b4daac3d5030902ffdb1df53->enter($__internal_e0535f7d876b1d7327a8b275e97e21e5ceb0b5e0b4daac3d5030902ffdb1df53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_e0535f7d876b1d7327a8b275e97e21e5ceb0b5e0b4daac3d5030902ffdb1df53->leave($__internal_e0535f7d876b1d7327a8b275e97e21e5ceb0b5e0b4daac3d5030902ffdb1df53_prof);

        
        $__internal_7293ecac3713f314641ff30b3dde50d237a7adfef90b85dd988be54c3a2a673c->leave($__internal_7293ecac3713f314641ff30b3dde50d237a7adfef90b85dd988be54c3a2a673c_prof);

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
