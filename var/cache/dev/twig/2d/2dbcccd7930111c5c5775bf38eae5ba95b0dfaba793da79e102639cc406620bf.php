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
        $__internal_6b9326820e098cbffb239100975472ab3149eff4c178f26f710b9baf6e86b46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9326820e098cbffb239100975472ab3149eff4c178f26f710b9baf6e86b46d->enter($__internal_6b9326820e098cbffb239100975472ab3149eff4c178f26f710b9baf6e86b46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/image.html.twig"));

        $__internal_910136775cc5b2fad4e31145dff73fe83a13bcdd2e701152a089c8975bd2cebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910136775cc5b2fad4e31145dff73fe83a13bcdd2e701152a089c8975bd2cebf->enter($__internal_910136775cc5b2fad4e31145dff73fe83a13bcdd2e701152a089c8975bd2cebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b9326820e098cbffb239100975472ab3149eff4c178f26f710b9baf6e86b46d->leave($__internal_6b9326820e098cbffb239100975472ab3149eff4c178f26f710b9baf6e86b46d_prof);

        
        $__internal_910136775cc5b2fad4e31145dff73fe83a13bcdd2e701152a089c8975bd2cebf->leave($__internal_910136775cc5b2fad4e31145dff73fe83a13bcdd2e701152a089c8975bd2cebf_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_7b862cab34f8ac7509eab33d56eeeb2c3ca4d1b21772886fab2c66c551f72953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b862cab34f8ac7509eab33d56eeeb2c3ca4d1b21772886fab2c66c551f72953->enter($__internal_7b862cab34f8ac7509eab33d56eeeb2c3ca4d1b21772886fab2c66c551f72953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_ecd576f48792eb617c930787fe610395339fac9b0975daba561eb4bb4b89af54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd576f48792eb617c930787fe610395339fac9b0975daba561eb4bb4b89af54->enter($__internal_ecd576f48792eb617c930787fe610395339fac9b0975daba561eb4bb4b89af54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_ecd576f48792eb617c930787fe610395339fac9b0975daba561eb4bb4b89af54->leave($__internal_ecd576f48792eb617c930787fe610395339fac9b0975daba561eb4bb4b89af54_prof);

        
        $__internal_7b862cab34f8ac7509eab33d56eeeb2c3ca4d1b21772886fab2c66c551f72953->leave($__internal_7b862cab34f8ac7509eab33d56eeeb2c3ca4d1b21772886fab2c66c551f72953_prof);

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
