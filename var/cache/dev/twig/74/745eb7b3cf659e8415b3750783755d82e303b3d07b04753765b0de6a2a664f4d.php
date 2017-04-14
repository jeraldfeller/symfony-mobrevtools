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
        $__internal_f3b5377dc928adb0d1de00964a68956b3c7b87d0e22ed13fe803abf1898d329f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b5377dc928adb0d1de00964a68956b3c7b87d0e22ed13fe803abf1898d329f->enter($__internal_f3b5377dc928adb0d1de00964a68956b3c7b87d0e22ed13fe803abf1898d329f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $__internal_56a74b67fdb60efa06019fd29b111e44de7f14b99b647dc81e80b7b72276fc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a74b67fdb60efa06019fd29b111e44de7f14b99b647dc81e80b7b72276fc88->enter($__internal_56a74b67fdb60efa06019fd29b111e44de7f14b99b647dc81e80b7b72276fc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3b5377dc928adb0d1de00964a68956b3c7b87d0e22ed13fe803abf1898d329f->leave($__internal_f3b5377dc928adb0d1de00964a68956b3c7b87d0e22ed13fe803abf1898d329f_prof);

        
        $__internal_56a74b67fdb60efa06019fd29b111e44de7f14b99b647dc81e80b7b72276fc88->leave($__internal_56a74b67fdb60efa06019fd29b111e44de7f14b99b647dc81e80b7b72276fc88_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_bcdbd532072c4e1c7402799f0bb8b3b701304fc2b55e9b55a3f1ea2de141158c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcdbd532072c4e1c7402799f0bb8b3b701304fc2b55e9b55a3f1ea2de141158c->enter($__internal_bcdbd532072c4e1c7402799f0bb8b3b701304fc2b55e9b55a3f1ea2de141158c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_d2a79e4166325db35583585f57c1b1ed17feeb763351436830628dbbe6555322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a79e4166325db35583585f57c1b1ed17feeb763351436830628dbbe6555322->enter($__internal_d2a79e4166325db35583585f57c1b1ed17feeb763351436830628dbbe6555322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_d2a79e4166325db35583585f57c1b1ed17feeb763351436830628dbbe6555322->leave($__internal_d2a79e4166325db35583585f57c1b1ed17feeb763351436830628dbbe6555322_prof);

        
        $__internal_bcdbd532072c4e1c7402799f0bb8b3b701304fc2b55e9b55a3f1ea2de141158c->leave($__internal_bcdbd532072c4e1c7402799f0bb8b3b701304fc2b55e9b55a3f1ea2de141158c_prof);

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
