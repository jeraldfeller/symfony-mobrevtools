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
        $__internal_343fdcc57a0d2ea480e388bf92422e44e5b5b93a25697bdcc1093b5fc17b8288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343fdcc57a0d2ea480e388bf92422e44e5b5b93a25697bdcc1093b5fc17b8288->enter($__internal_343fdcc57a0d2ea480e388bf92422e44e5b5b93a25697bdcc1093b5fc17b8288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $__internal_fd1ce06ce2acb949074ff1294551ce842519b2fbd05d7a1ade938243c0b70a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1ce06ce2acb949074ff1294551ce842519b2fbd05d7a1ade938243c0b70a4f->enter($__internal_fd1ce06ce2acb949074ff1294551ce842519b2fbd05d7a1ade938243c0b70a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_343fdcc57a0d2ea480e388bf92422e44e5b5b93a25697bdcc1093b5fc17b8288->leave($__internal_343fdcc57a0d2ea480e388bf92422e44e5b5b93a25697bdcc1093b5fc17b8288_prof);

        
        $__internal_fd1ce06ce2acb949074ff1294551ce842519b2fbd05d7a1ade938243c0b70a4f->leave($__internal_fd1ce06ce2acb949074ff1294551ce842519b2fbd05d7a1ade938243c0b70a4f_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_03ce9500c99ccf2587c321e16927a9ba1fb79985ea625e0af9c483046fb3f986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ce9500c99ccf2587c321e16927a9ba1fb79985ea625e0af9c483046fb3f986->enter($__internal_03ce9500c99ccf2587c321e16927a9ba1fb79985ea625e0af9c483046fb3f986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_3a7ac40c47a90a07686ceb46aea58d4ee12efe05e8ff15f855ae7686aa5a6fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7ac40c47a90a07686ceb46aea58d4ee12efe05e8ff15f855ae7686aa5a6fb0->enter($__internal_3a7ac40c47a90a07686ceb46aea58d4ee12efe05e8ff15f855ae7686aa5a6fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_3a7ac40c47a90a07686ceb46aea58d4ee12efe05e8ff15f855ae7686aa5a6fb0->leave($__internal_3a7ac40c47a90a07686ceb46aea58d4ee12efe05e8ff15f855ae7686aa5a6fb0_prof);

        
        $__internal_03ce9500c99ccf2587c321e16927a9ba1fb79985ea625e0af9c483046fb3f986->leave($__internal_03ce9500c99ccf2587c321e16927a9ba1fb79985ea625e0af9c483046fb3f986_prof);

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
