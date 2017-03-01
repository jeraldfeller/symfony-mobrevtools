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
        $__internal_535636d1fa0faa624bc9089122d9dc7e720bf7987771a79307c1764f2fe38c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535636d1fa0faa624bc9089122d9dc7e720bf7987771a79307c1764f2fe38c93->enter($__internal_535636d1fa0faa624bc9089122d9dc7e720bf7987771a79307c1764f2fe38c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $__internal_f0ec7d9151663d16aa64864b94fa002a230070e2e77653c8cfb680bb583afcb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ec7d9151663d16aa64864b94fa002a230070e2e77653c8cfb680bb583afcb7->enter($__internal_f0ec7d9151663d16aa64864b94fa002a230070e2e77653c8cfb680bb583afcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_535636d1fa0faa624bc9089122d9dc7e720bf7987771a79307c1764f2fe38c93->leave($__internal_535636d1fa0faa624bc9089122d9dc7e720bf7987771a79307c1764f2fe38c93_prof);

        
        $__internal_f0ec7d9151663d16aa64864b94fa002a230070e2e77653c8cfb680bb583afcb7->leave($__internal_f0ec7d9151663d16aa64864b94fa002a230070e2e77653c8cfb680bb583afcb7_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_7df70ac125489f3fb5e3c995ec8d17d748bf7615c4cbd667d868dc2642a9aa6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df70ac125489f3fb5e3c995ec8d17d748bf7615c4cbd667d868dc2642a9aa6a->enter($__internal_7df70ac125489f3fb5e3c995ec8d17d748bf7615c4cbd667d868dc2642a9aa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_cd09c571d3a7d1b005379e54369f2e1ecd7912eb77a1d01db63dc0609343d242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd09c571d3a7d1b005379e54369f2e1ecd7912eb77a1d01db63dc0609343d242->enter($__internal_cd09c571d3a7d1b005379e54369f2e1ecd7912eb77a1d01db63dc0609343d242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_cd09c571d3a7d1b005379e54369f2e1ecd7912eb77a1d01db63dc0609343d242->leave($__internal_cd09c571d3a7d1b005379e54369f2e1ecd7912eb77a1d01db63dc0609343d242_prof);

        
        $__internal_7df70ac125489f3fb5e3c995ec8d17d748bf7615c4cbd667d868dc2642a9aa6a->leave($__internal_7df70ac125489f3fb5e3c995ec8d17d748bf7615c4cbd667d868dc2642a9aa6a_prof);

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
