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
        $__internal_f058ee95638009d0c32dac1c4b288ed3f50c6df0a78e665aa122af7fcc37ff18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f058ee95638009d0c32dac1c4b288ed3f50c6df0a78e665aa122af7fcc37ff18->enter($__internal_f058ee95638009d0c32dac1c4b288ed3f50c6df0a78e665aa122af7fcc37ff18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $__internal_3bfd526562b41edc5a2721996f7de25445d60b8c32f0fe444eea3d606374a9c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bfd526562b41edc5a2721996f7de25445d60b8c32f0fe444eea3d606374a9c0->enter($__internal_3bfd526562b41edc5a2721996f7de25445d60b8c32f0fe444eea3d606374a9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f058ee95638009d0c32dac1c4b288ed3f50c6df0a78e665aa122af7fcc37ff18->leave($__internal_f058ee95638009d0c32dac1c4b288ed3f50c6df0a78e665aa122af7fcc37ff18_prof);

        
        $__internal_3bfd526562b41edc5a2721996f7de25445d60b8c32f0fe444eea3d606374a9c0->leave($__internal_3bfd526562b41edc5a2721996f7de25445d60b8c32f0fe444eea3d606374a9c0_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_ed86a91ac09d71000e4decef97fb8f930c0b7ddf5c6beeaf399e335107e0b0bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed86a91ac09d71000e4decef97fb8f930c0b7ddf5c6beeaf399e335107e0b0bd->enter($__internal_ed86a91ac09d71000e4decef97fb8f930c0b7ddf5c6beeaf399e335107e0b0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_99937e5aea6505ff22f38b26aeb018aff47f18851c9519f874177e663cd83e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99937e5aea6505ff22f38b26aeb018aff47f18851c9519f874177e663cd83e8f->enter($__internal_99937e5aea6505ff22f38b26aeb018aff47f18851c9519f874177e663cd83e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_99937e5aea6505ff22f38b26aeb018aff47f18851c9519f874177e663cd83e8f->leave($__internal_99937e5aea6505ff22f38b26aeb018aff47f18851c9519f874177e663cd83e8f_prof);

        
        $__internal_ed86a91ac09d71000e4decef97fb8f930c0b7ddf5c6beeaf399e335107e0b0bd->leave($__internal_ed86a91ac09d71000e4decef97fb8f930c0b7ddf5c6beeaf399e335107e0b0bd_prof);

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
