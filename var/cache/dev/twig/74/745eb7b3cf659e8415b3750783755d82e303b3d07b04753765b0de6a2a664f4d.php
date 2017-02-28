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
        $__internal_960ccc3ec08e499b18e73a58082641afbd2822b748a726af6523e09761ef1a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960ccc3ec08e499b18e73a58082641afbd2822b748a726af6523e09761ef1a8f->enter($__internal_960ccc3ec08e499b18e73a58082641afbd2822b748a726af6523e09761ef1a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $__internal_c7ecdb29774cd23b38d85d61249086bc6efab877cf5718e33d988802a8e8eb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ecdb29774cd23b38d85d61249086bc6efab877cf5718e33d988802a8e8eb6d->enter($__internal_c7ecdb29774cd23b38d85d61249086bc6efab877cf5718e33d988802a8e8eb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_960ccc3ec08e499b18e73a58082641afbd2822b748a726af6523e09761ef1a8f->leave($__internal_960ccc3ec08e499b18e73a58082641afbd2822b748a726af6523e09761ef1a8f_prof);

        
        $__internal_c7ecdb29774cd23b38d85d61249086bc6efab877cf5718e33d988802a8e8eb6d->leave($__internal_c7ecdb29774cd23b38d85d61249086bc6efab877cf5718e33d988802a8e8eb6d_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_de8a16149b19ef2951c4b1c895d41dd930858d2d38c4d0030ac71dd5c23f8559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8a16149b19ef2951c4b1c895d41dd930858d2d38c4d0030ac71dd5c23f8559->enter($__internal_de8a16149b19ef2951c4b1c895d41dd930858d2d38c4d0030ac71dd5c23f8559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_524d17ad5bcf7d267e4b9a6143602a607b19d33b2b6fba8415152564ed113c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524d17ad5bcf7d267e4b9a6143602a607b19d33b2b6fba8415152564ed113c30->enter($__internal_524d17ad5bcf7d267e4b9a6143602a607b19d33b2b6fba8415152564ed113c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_524d17ad5bcf7d267e4b9a6143602a607b19d33b2b6fba8415152564ed113c30->leave($__internal_524d17ad5bcf7d267e4b9a6143602a607b19d33b2b6fba8415152564ed113c30_prof);

        
        $__internal_de8a16149b19ef2951c4b1c895d41dd930858d2d38c4d0030ac71dd5c23f8559->leave($__internal_de8a16149b19ef2951c4b1c895d41dd930858d2d38c4d0030ac71dd5c23f8559_prof);

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
