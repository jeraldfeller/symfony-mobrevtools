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
        $__internal_656134a32531aa0cd1bccd5129ceab224171fecf4296e31f26f69b879445cb89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656134a32531aa0cd1bccd5129ceab224171fecf4296e31f26f69b879445cb89->enter($__internal_656134a32531aa0cd1bccd5129ceab224171fecf4296e31f26f69b879445cb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/datetime.html.twig"));

        $__internal_18b6bdde044449f1d19ffbb49195a21d2bbd0017401931251b521469514d4221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b6bdde044449f1d19ffbb49195a21d2bbd0017401931251b521469514d4221->enter($__internal_18b6bdde044449f1d19ffbb49195a21d2bbd0017401931251b521469514d4221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_656134a32531aa0cd1bccd5129ceab224171fecf4296e31f26f69b879445cb89->leave($__internal_656134a32531aa0cd1bccd5129ceab224171fecf4296e31f26f69b879445cb89_prof);

        
        $__internal_18b6bdde044449f1d19ffbb49195a21d2bbd0017401931251b521469514d4221->leave($__internal_18b6bdde044449f1d19ffbb49195a21d2bbd0017401931251b521469514d4221_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_d5bd58092de045a14fc75e7d5338c3c32af88c3bbff68f6afaa86e7cc72aa0dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5bd58092de045a14fc75e7d5338c3c32af88c3bbff68f6afaa86e7cc72aa0dd->enter($__internal_d5bd58092de045a14fc75e7d5338c3c32af88c3bbff68f6afaa86e7cc72aa0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_6b283b6a4fd74970a6c11d69b52bccf362146bcc710359430a0377cef423f7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b283b6a4fd74970a6c11d69b52bccf362146bcc710359430a0377cef423f7be->enter($__internal_6b283b6a4fd74970a6c11d69b52bccf362146bcc710359430a0377cef423f7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_6b283b6a4fd74970a6c11d69b52bccf362146bcc710359430a0377cef423f7be->leave($__internal_6b283b6a4fd74970a6c11d69b52bccf362146bcc710359430a0377cef423f7be_prof);

        
        $__internal_d5bd58092de045a14fc75e7d5338c3c32af88c3bbff68f6afaa86e7cc72aa0dd->leave($__internal_d5bd58092de045a14fc75e7d5338c3c32af88c3bbff68f6afaa86e7cc72aa0dd_prof);

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
