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
        $__internal_39795262dfe04b00a2348279c4af0d00cda608932d3dcce9da5cd67b98af9231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39795262dfe04b00a2348279c4af0d00cda608932d3dcce9da5cd67b98af9231->enter($__internal_39795262dfe04b00a2348279c4af0d00cda608932d3dcce9da5cd67b98af9231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $__internal_5773fc59e45b1f343dae5deb04da89fe12fd5e6e6b9dbec696e96c4add8c1652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5773fc59e45b1f343dae5deb04da89fe12fd5e6e6b9dbec696e96c4add8c1652->enter($__internal_5773fc59e45b1f343dae5deb04da89fe12fd5e6e6b9dbec696e96c4add8c1652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39795262dfe04b00a2348279c4af0d00cda608932d3dcce9da5cd67b98af9231->leave($__internal_39795262dfe04b00a2348279c4af0d00cda608932d3dcce9da5cd67b98af9231_prof);

        
        $__internal_5773fc59e45b1f343dae5deb04da89fe12fd5e6e6b9dbec696e96c4add8c1652->leave($__internal_5773fc59e45b1f343dae5deb04da89fe12fd5e6e6b9dbec696e96c4add8c1652_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_dd56a061be1482c4a3b8aca705d98bcc60b049a333c2a48e66783c7fa67d98dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd56a061be1482c4a3b8aca705d98bcc60b049a333c2a48e66783c7fa67d98dd->enter($__internal_dd56a061be1482c4a3b8aca705d98bcc60b049a333c2a48e66783c7fa67d98dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_c7e92632cabe43b585d398689109b8852b832d2722cb87652bdc6fa749cd4f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e92632cabe43b585d398689109b8852b832d2722cb87652bdc6fa749cd4f56->enter($__internal_c7e92632cabe43b585d398689109b8852b832d2722cb87652bdc6fa749cd4f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_c7e92632cabe43b585d398689109b8852b832d2722cb87652bdc6fa749cd4f56->leave($__internal_c7e92632cabe43b585d398689109b8852b832d2722cb87652bdc6fa749cd4f56_prof);

        
        $__internal_dd56a061be1482c4a3b8aca705d98bcc60b049a333c2a48e66783c7fa67d98dd->leave($__internal_dd56a061be1482c4a3b8aca705d98bcc60b049a333c2a48e66783c7fa67d98dd_prof);

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
