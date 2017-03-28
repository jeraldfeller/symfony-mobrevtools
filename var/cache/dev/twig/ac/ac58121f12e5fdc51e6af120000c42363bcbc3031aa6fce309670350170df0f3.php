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
        $__internal_2433e53e094d6ac986bd1395edd3630b7a34c3ae630a603b4dfc502030efbd28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2433e53e094d6ac986bd1395edd3630b7a34c3ae630a603b4dfc502030efbd28->enter($__internal_2433e53e094d6ac986bd1395edd3630b7a34c3ae630a603b4dfc502030efbd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $__internal_424ad6d2219d05670d2951208e8c5e029242c77496b3dcbbaa2f344c818acd88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424ad6d2219d05670d2951208e8c5e029242c77496b3dcbbaa2f344c818acd88->enter($__internal_424ad6d2219d05670d2951208e8c5e029242c77496b3dcbbaa2f344c818acd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2433e53e094d6ac986bd1395edd3630b7a34c3ae630a603b4dfc502030efbd28->leave($__internal_2433e53e094d6ac986bd1395edd3630b7a34c3ae630a603b4dfc502030efbd28_prof);

        
        $__internal_424ad6d2219d05670d2951208e8c5e029242c77496b3dcbbaa2f344c818acd88->leave($__internal_424ad6d2219d05670d2951208e8c5e029242c77496b3dcbbaa2f344c818acd88_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_ed7ea1ed8a9bcc4b8b199707a992dbefd59760c60248e49b18fa28cd677c8e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7ea1ed8a9bcc4b8b199707a992dbefd59760c60248e49b18fa28cd677c8e4b->enter($__internal_ed7ea1ed8a9bcc4b8b199707a992dbefd59760c60248e49b18fa28cd677c8e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_90b2f2cdc9129a6d1fdba5f78a1f684d039fbf3c9359c7eedf440324be259bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b2f2cdc9129a6d1fdba5f78a1f684d039fbf3c9359c7eedf440324be259bd2->enter($__internal_90b2f2cdc9129a6d1fdba5f78a1f684d039fbf3c9359c7eedf440324be259bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_90b2f2cdc9129a6d1fdba5f78a1f684d039fbf3c9359c7eedf440324be259bd2->leave($__internal_90b2f2cdc9129a6d1fdba5f78a1f684d039fbf3c9359c7eedf440324be259bd2_prof);

        
        $__internal_ed7ea1ed8a9bcc4b8b199707a992dbefd59760c60248e49b18fa28cd677c8e4b->leave($__internal_ed7ea1ed8a9bcc4b8b199707a992dbefd59760c60248e49b18fa28cd677c8e4b_prof);

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
