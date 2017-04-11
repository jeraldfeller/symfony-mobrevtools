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
        $__internal_5a82137fc7495529fcdde8aa3b26ff84ba67f9d543b6a332c926e32d305749d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a82137fc7495529fcdde8aa3b26ff84ba67f9d543b6a332c926e32d305749d3->enter($__internal_5a82137fc7495529fcdde8aa3b26ff84ba67f9d543b6a332c926e32d305749d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:datetime.html.twig"));

        $__internal_ab2487535b2f5d2f0900839b681849a134d9876cb975f9c5c82e34d5a00bc9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2487535b2f5d2f0900839b681849a134d9876cb975f9c5c82e34d5a00bc9ae->enter($__internal_ab2487535b2f5d2f0900839b681849a134d9876cb975f9c5c82e34d5a00bc9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a82137fc7495529fcdde8aa3b26ff84ba67f9d543b6a332c926e32d305749d3->leave($__internal_5a82137fc7495529fcdde8aa3b26ff84ba67f9d543b6a332c926e32d305749d3_prof);

        
        $__internal_ab2487535b2f5d2f0900839b681849a134d9876cb975f9c5c82e34d5a00bc9ae->leave($__internal_ab2487535b2f5d2f0900839b681849a134d9876cb975f9c5c82e34d5a00bc9ae_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_38c0565af82613b6d6d0ebe5c35d591447da73f2ec88f9d8a45cf2b40885acfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c0565af82613b6d6d0ebe5c35d591447da73f2ec88f9d8a45cf2b40885acfd->enter($__internal_38c0565af82613b6d6d0ebe5c35d591447da73f2ec88f9d8a45cf2b40885acfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_ede8ad1fd6f5c1e4577649e75507bbc0c95b5f998ddfa417dcdaafe848c7f88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede8ad1fd6f5c1e4577649e75507bbc0c95b5f998ddfa417dcdaafe848c7f88f->enter($__internal_ede8ad1fd6f5c1e4577649e75507bbc0c95b5f998ddfa417dcdaafe848c7f88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_ede8ad1fd6f5c1e4577649e75507bbc0c95b5f998ddfa417dcdaafe848c7f88f->leave($__internal_ede8ad1fd6f5c1e4577649e75507bbc0c95b5f998ddfa417dcdaafe848c7f88f_prof);

        
        $__internal_38c0565af82613b6d6d0ebe5c35d591447da73f2ec88f9d8a45cf2b40885acfd->leave($__internal_38c0565af82613b6d6d0ebe5c35d591447da73f2ec88f9d8a45cf2b40885acfd_prof);

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
