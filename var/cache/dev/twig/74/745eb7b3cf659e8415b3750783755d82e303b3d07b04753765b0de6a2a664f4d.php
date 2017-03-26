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
        $__internal_a185d634eb6a901d591bb9c6cdd6f9079f51d2788694e2b809d3d396a57bf303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a185d634eb6a901d591bb9c6cdd6f9079f51d2788694e2b809d3d396a57bf303->enter($__internal_a185d634eb6a901d591bb9c6cdd6f9079f51d2788694e2b809d3d396a57bf303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $__internal_53953d9f157c261be7b4b42e0e4467fc3a7a17f6e6312c09062bb075bc50d82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53953d9f157c261be7b4b42e0e4467fc3a7a17f6e6312c09062bb075bc50d82d->enter($__internal_53953d9f157c261be7b4b42e0e4467fc3a7a17f6e6312c09062bb075bc50d82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a185d634eb6a901d591bb9c6cdd6f9079f51d2788694e2b809d3d396a57bf303->leave($__internal_a185d634eb6a901d591bb9c6cdd6f9079f51d2788694e2b809d3d396a57bf303_prof);

        
        $__internal_53953d9f157c261be7b4b42e0e4467fc3a7a17f6e6312c09062bb075bc50d82d->leave($__internal_53953d9f157c261be7b4b42e0e4467fc3a7a17f6e6312c09062bb075bc50d82d_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_6341966f58bfc417ed109bba83124ee8a9c8d1dd7aeeb1f34a24e9a2339f3b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6341966f58bfc417ed109bba83124ee8a9c8d1dd7aeeb1f34a24e9a2339f3b34->enter($__internal_6341966f58bfc417ed109bba83124ee8a9c8d1dd7aeeb1f34a24e9a2339f3b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_c2c06a4a47f845e96114364255d49a798a4b697ae33833b3caac02bf8c8e619d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c06a4a47f845e96114364255d49a798a4b697ae33833b3caac02bf8c8e619d->enter($__internal_c2c06a4a47f845e96114364255d49a798a4b697ae33833b3caac02bf8c8e619d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_c2c06a4a47f845e96114364255d49a798a4b697ae33833b3caac02bf8c8e619d->leave($__internal_c2c06a4a47f845e96114364255d49a798a4b697ae33833b3caac02bf8c8e619d_prof);

        
        $__internal_6341966f58bfc417ed109bba83124ee8a9c8d1dd7aeeb1f34a24e9a2339f3b34->leave($__internal_6341966f58bfc417ed109bba83124ee8a9c8d1dd7aeeb1f34a24e9a2339f3b34_prof);

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
