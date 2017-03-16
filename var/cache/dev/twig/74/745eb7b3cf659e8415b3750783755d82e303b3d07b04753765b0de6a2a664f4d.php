<?php

/* @SgDatatables/Column/timeago.html.twig */
class __TwigTemplate_bf89322f0377173bb882342daa36a11b73b249bc49712d6b01d5cb21c972f82f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "@SgDatatables/Column/timeago.html.twig", 9);
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
        $__internal_ed2bb5048701e849a7261161beef6c14b8459f0308b68f61ed4489239aea3fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2bb5048701e849a7261161beef6c14b8459f0308b68f61ed4489239aea3fb1->enter($__internal_ed2bb5048701e849a7261161beef6c14b8459f0308b68f61ed4489239aea3fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $__internal_d0fbb6ff3857482b92179f7305a62774f623fffa2e3e9735c285e2466f7cc9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fbb6ff3857482b92179f7305a62774f623fffa2e3e9735c285e2466f7cc9b3->enter($__internal_d0fbb6ff3857482b92179f7305a62774f623fffa2e3e9735c285e2466f7cc9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed2bb5048701e849a7261161beef6c14b8459f0308b68f61ed4489239aea3fb1->leave($__internal_ed2bb5048701e849a7261161beef6c14b8459f0308b68f61ed4489239aea3fb1_prof);

        
        $__internal_d0fbb6ff3857482b92179f7305a62774f623fffa2e3e9735c285e2466f7cc9b3->leave($__internal_d0fbb6ff3857482b92179f7305a62774f623fffa2e3e9735c285e2466f7cc9b3_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_d0ed87684c9f3e1c7823a92ca293fbe90e876a0472c1b0798c5642ab02c9828c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ed87684c9f3e1c7823a92ca293fbe90e876a0472c1b0798c5642ab02c9828c->enter($__internal_d0ed87684c9f3e1c7823a92ca293fbe90e876a0472c1b0798c5642ab02c9828c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_4d170657602d2893f2e1b81fd223ce5d7f6a580807ecc138e2eb6faca38d2c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d170657602d2893f2e1b81fd223ce5d7f6a580807ecc138e2eb6faca38d2c08->enter($__internal_4d170657602d2893f2e1b81fd223ce5d7f6a580807ecc138e2eb6faca38d2c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 12
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    \"render\": function(data, type, row, meta) {
        return ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "render", array()), "html", null, true);
        echo "(data, type, row, meta);
    },
";
        
        $__internal_4d170657602d2893f2e1b81fd223ce5d7f6a580807ecc138e2eb6faca38d2c08->leave($__internal_4d170657602d2893f2e1b81fd223ce5d7f6a580807ecc138e2eb6faca38d2c08_prof);

        
        $__internal_d0ed87684c9f3e1c7823a92ca293fbe90e876a0472c1b0798c5642ab02c9828c->leave($__internal_d0ed87684c9f3e1c7823a92ca293fbe90e876a0472c1b0798c5642ab02c9828c_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Column/timeago.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  49 => 12,  40 => 11,  11 => 9,);
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
    \"render\": function(data, type, row, meta) {
        return {{ column.render }}(data, type, row, meta);
    },
{% endblock %}
", "@SgDatatables/Column/timeago.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Column\\timeago.html.twig");
    }
}
