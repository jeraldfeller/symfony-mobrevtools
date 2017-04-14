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
        $__internal_85c098dc97e463aec98d9299b45f79092f86f59278bc45d4c509b7e3e5dda6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c098dc97e463aec98d9299b45f79092f86f59278bc45d4c509b7e3e5dda6fc->enter($__internal_85c098dc97e463aec98d9299b45f79092f86f59278bc45d4c509b7e3e5dda6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $__internal_3547ca7e51499d5deb08d2ba7c2ebbbfd8c9225891e118c3963073585a30154c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3547ca7e51499d5deb08d2ba7c2ebbbfd8c9225891e118c3963073585a30154c->enter($__internal_3547ca7e51499d5deb08d2ba7c2ebbbfd8c9225891e118c3963073585a30154c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85c098dc97e463aec98d9299b45f79092f86f59278bc45d4c509b7e3e5dda6fc->leave($__internal_85c098dc97e463aec98d9299b45f79092f86f59278bc45d4c509b7e3e5dda6fc_prof);

        
        $__internal_3547ca7e51499d5deb08d2ba7c2ebbbfd8c9225891e118c3963073585a30154c->leave($__internal_3547ca7e51499d5deb08d2ba7c2ebbbfd8c9225891e118c3963073585a30154c_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_e8090531227c93940a2235b3297a4f780168fcd210236f858721a95026339af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8090531227c93940a2235b3297a4f780168fcd210236f858721a95026339af4->enter($__internal_e8090531227c93940a2235b3297a4f780168fcd210236f858721a95026339af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_a8d7ceb6dbaec01cba62420db3a7f9389457aa314873661f4141f8f1d2c4e9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d7ceb6dbaec01cba62420db3a7f9389457aa314873661f4141f8f1d2c4e9a1->enter($__internal_a8d7ceb6dbaec01cba62420db3a7f9389457aa314873661f4141f8f1d2c4e9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_a8d7ceb6dbaec01cba62420db3a7f9389457aa314873661f4141f8f1d2c4e9a1->leave($__internal_a8d7ceb6dbaec01cba62420db3a7f9389457aa314873661f4141f8f1d2c4e9a1_prof);

        
        $__internal_e8090531227c93940a2235b3297a4f780168fcd210236f858721a95026339af4->leave($__internal_e8090531227c93940a2235b3297a4f780168fcd210236f858721a95026339af4_prof);

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
