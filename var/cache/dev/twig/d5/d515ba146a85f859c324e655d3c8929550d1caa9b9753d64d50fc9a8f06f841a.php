<?php

/* SgDatatablesBundle:Column:timeago.html.twig */
class __TwigTemplate_a00b788ac1f6ffea78b30eb9cee63529e0f817f7fd2786398898034e010c0aff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:timeago.html.twig", 9);
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
        $__internal_d42efd88dfddb89f23babd2dfeb5e2635271bd3adba6ff512fc06bfe85ba7153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d42efd88dfddb89f23babd2dfeb5e2635271bd3adba6ff512fc06bfe85ba7153->enter($__internal_d42efd88dfddb89f23babd2dfeb5e2635271bd3adba6ff512fc06bfe85ba7153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $__internal_26bc5ad3d7afa33bd0efccad0d2879918afb87a4b64bd837ead27ffb64c1cfde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bc5ad3d7afa33bd0efccad0d2879918afb87a4b64bd837ead27ffb64c1cfde->enter($__internal_26bc5ad3d7afa33bd0efccad0d2879918afb87a4b64bd837ead27ffb64c1cfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d42efd88dfddb89f23babd2dfeb5e2635271bd3adba6ff512fc06bfe85ba7153->leave($__internal_d42efd88dfddb89f23babd2dfeb5e2635271bd3adba6ff512fc06bfe85ba7153_prof);

        
        $__internal_26bc5ad3d7afa33bd0efccad0d2879918afb87a4b64bd837ead27ffb64c1cfde->leave($__internal_26bc5ad3d7afa33bd0efccad0d2879918afb87a4b64bd837ead27ffb64c1cfde_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_b8709a7478a4caf354c882aa15acf241609abf66b7d813007c3da20325f5f226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8709a7478a4caf354c882aa15acf241609abf66b7d813007c3da20325f5f226->enter($__internal_b8709a7478a4caf354c882aa15acf241609abf66b7d813007c3da20325f5f226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_46bad4a36da301aa42e058e3aa20f844536a224281f6a1f02e6a8029e86b0e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bad4a36da301aa42e058e3aa20f844536a224281f6a1f02e6a8029e86b0e7a->enter($__internal_46bad4a36da301aa42e058e3aa20f844536a224281f6a1f02e6a8029e86b0e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_46bad4a36da301aa42e058e3aa20f844536a224281f6a1f02e6a8029e86b0e7a->leave($__internal_46bad4a36da301aa42e058e3aa20f844536a224281f6a1f02e6a8029e86b0e7a_prof);

        
        $__internal_b8709a7478a4caf354c882aa15acf241609abf66b7d813007c3da20325f5f226->leave($__internal_b8709a7478a4caf354c882aa15acf241609abf66b7d813007c3da20325f5f226_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:timeago.html.twig";
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
", "SgDatatablesBundle:Column:timeago.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/timeago.html.twig");
    }
}
