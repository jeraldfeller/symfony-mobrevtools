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
        $__internal_18f21b0c41de03998574c976dda6736b7a81f85b4c0d09f16a12b0390038f24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f21b0c41de03998574c976dda6736b7a81f85b4c0d09f16a12b0390038f24f->enter($__internal_18f21b0c41de03998574c976dda6736b7a81f85b4c0d09f16a12b0390038f24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $__internal_f38770da90c4e040ad12d1d06b477891ab62e3b708d49c71d18465cca4ca4921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38770da90c4e040ad12d1d06b477891ab62e3b708d49c71d18465cca4ca4921->enter($__internal_f38770da90c4e040ad12d1d06b477891ab62e3b708d49c71d18465cca4ca4921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18f21b0c41de03998574c976dda6736b7a81f85b4c0d09f16a12b0390038f24f->leave($__internal_18f21b0c41de03998574c976dda6736b7a81f85b4c0d09f16a12b0390038f24f_prof);

        
        $__internal_f38770da90c4e040ad12d1d06b477891ab62e3b708d49c71d18465cca4ca4921->leave($__internal_f38770da90c4e040ad12d1d06b477891ab62e3b708d49c71d18465cca4ca4921_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_0e82dadbfaf9f48303ab2cec0ec80bdabc03a8db4eacfa88e2e018a4cfdb1f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e82dadbfaf9f48303ab2cec0ec80bdabc03a8db4eacfa88e2e018a4cfdb1f24->enter($__internal_0e82dadbfaf9f48303ab2cec0ec80bdabc03a8db4eacfa88e2e018a4cfdb1f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_f7a225cdd3c52bd67276bdf6974fad9916998f1cde49d3d4e59f4d1de6544055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a225cdd3c52bd67276bdf6974fad9916998f1cde49d3d4e59f4d1de6544055->enter($__internal_f7a225cdd3c52bd67276bdf6974fad9916998f1cde49d3d4e59f4d1de6544055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_f7a225cdd3c52bd67276bdf6974fad9916998f1cde49d3d4e59f4d1de6544055->leave($__internal_f7a225cdd3c52bd67276bdf6974fad9916998f1cde49d3d4e59f4d1de6544055_prof);

        
        $__internal_0e82dadbfaf9f48303ab2cec0ec80bdabc03a8db4eacfa88e2e018a4cfdb1f24->leave($__internal_0e82dadbfaf9f48303ab2cec0ec80bdabc03a8db4eacfa88e2e018a4cfdb1f24_prof);

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
