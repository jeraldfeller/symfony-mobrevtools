<?php

/* SgDatatablesBundle:Column:action.html.twig */
class __TwigTemplate_9ad371ca442dab88f82df2e5a39dfc9583d63567b6a97cffc888d364e9fa67f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:Column:column.html.twig", "SgDatatablesBundle:Column:action.html.twig", 9);
        $this->blocks = array(
            'common' => array($this, 'block_common'),
            'data' => array($this, 'block_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:Column:column.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b52667ea9b3f310cf9d81621b5f75b032db9649b214c1d5b62fbb01702f76e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b52667ea9b3f310cf9d81621b5f75b032db9649b214c1d5b62fbb01702f76e0->enter($__internal_7b52667ea9b3f310cf9d81621b5f75b032db9649b214c1d5b62fbb01702f76e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $__internal_509f1a37038b9e42f0ee1e5ee564113e357b115af3d4bee997ecb3d1813b1773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509f1a37038b9e42f0ee1e5ee564113e357b115af3d4bee997ecb3d1813b1773->enter($__internal_509f1a37038b9e42f0ee1e5ee564113e357b115af3d4bee997ecb3d1813b1773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:action.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b52667ea9b3f310cf9d81621b5f75b032db9649b214c1d5b62fbb01702f76e0->leave($__internal_7b52667ea9b3f310cf9d81621b5f75b032db9649b214c1d5b62fbb01702f76e0_prof);

        
        $__internal_509f1a37038b9e42f0ee1e5ee564113e357b115af3d4bee997ecb3d1813b1773->leave($__internal_509f1a37038b9e42f0ee1e5ee564113e357b115af3d4bee997ecb3d1813b1773_prof);

    }

    // line 11
    public function block_common($context, array $blocks = array())
    {
        $__internal_a2756c2fe57d4ebd9f47f353e9ce22b50fc3c5cae551e6f55df54678193361fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2756c2fe57d4ebd9f47f353e9ce22b50fc3c5cae551e6f55df54678193361fa->enter($__internal_a2756c2fe57d4ebd9f47f353e9ce22b50fc3c5cae551e6f55df54678193361fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_2aac260516482f6bc6c9095c3b4bef65154001b8ce44f88d1a59010af1c82e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aac260516482f6bc6c9095c3b4bef65154001b8ce44f88d1a59010af1c82e19->enter($__internal_2aac260516482f6bc6c9095c3b4bef65154001b8ce44f88d1a59010af1c82e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        // line 12
        echo "    \"contentPadding\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "padding", array()), "html", null, true);
        echo "\",
    \"defaultContent\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "defaultContent", array()), "html", null, true);
        echo "\",
    \"name\": \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "name", array()), "html", null, true);
        echo "\",
    \"orderable\": false,
    \"searchable\": false,
    \"title\": \"";
        // line 17
        echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "title", array());
        echo "\",
    ";
        // line 18
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "type", array())) {
            // line 19
            echo "        \"type\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "type", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 21
        echo "    ";
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "visible", array())) {
            // line 22
            echo "        \"visible\": true,
        \"className\": \"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "class", array()), "html", null, true);
            echo "\",
    ";
        } else {
            // line 25
            echo "        \"visible\": false,
        \"className\": \"never ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "class", array()), "html", null, true);
            echo "\",
    ";
        }
        // line 28
        echo "    \"width\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "width", array()), "html", null, true);
        echo "\",
";
        
        $__internal_2aac260516482f6bc6c9095c3b4bef65154001b8ce44f88d1a59010af1c82e19->leave($__internal_2aac260516482f6bc6c9095c3b4bef65154001b8ce44f88d1a59010af1c82e19_prof);

        
        $__internal_a2756c2fe57d4ebd9f47f353e9ce22b50fc3c5cae551e6f55df54678193361fa->leave($__internal_a2756c2fe57d4ebd9f47f353e9ce22b50fc3c5cae551e6f55df54678193361fa_prof);

    }

    // line 31
    public function block_data($context, array $blocks = array())
    {
        $__internal_c7c3e0ee23e528a70c6df37e7ced5ab0a048f25397440c568bcd84fcbce72bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c3e0ee23e528a70c6df37e7ced5ab0a048f25397440c568bcd84fcbce72bb8->enter($__internal_c7c3e0ee23e528a70c6df37e7ced5ab0a048f25397440c568bcd84fcbce72bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_e5a9676c0b7e850112f0c47edf2da16ef347cd7be998ec9bfc434f9ef60a415d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a9676c0b7e850112f0c47edf2da16ef347cd7be998ec9bfc434f9ef60a415d->enter($__internal_e5a9676c0b7e850112f0c47edf2da16ef347cd7be998ec9bfc434f9ef60a415d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 32
        echo "    \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    \"render\": function(data, type, row, meta) {
        ";
        // line 34
        $this->loadTemplate("SgDatatablesBundle:Action:action.html.twig", "SgDatatablesBundle:Column:action.html.twig", 34)->display(array_merge($context, array("column" => (isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "actions" => $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "actions", array()))));
        // line 35
        echo "    },
";
        
        $__internal_e5a9676c0b7e850112f0c47edf2da16ef347cd7be998ec9bfc434f9ef60a415d->leave($__internal_e5a9676c0b7e850112f0c47edf2da16ef347cd7be998ec9bfc434f9ef60a415d_prof);

        
        $__internal_c7c3e0ee23e528a70c6df37e7ced5ab0a048f25397440c568bcd84fcbce72bb8->leave($__internal_c7c3e0ee23e528a70c6df37e7ced5ab0a048f25397440c568bcd84fcbce72bb8_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Column:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 35,  124 => 34,  118 => 32,  109 => 31,  96 => 28,  91 => 26,  88 => 25,  83 => 23,  80 => 22,  77 => 21,  71 => 19,  69 => 18,  65 => 17,  59 => 14,  55 => 13,  50 => 12,  41 => 11,  11 => 9,);
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

{% block common %}
    \"contentPadding\": \"{{ column.padding }}\",
    \"defaultContent\": \"{{ column.defaultContent }}\",
    \"name\": \"{{ column.name }}\",
    \"orderable\": false,
    \"searchable\": false,
    \"title\": \"{{ column.title|raw }}\",
    {% if column.type %}
        \"type\": \"{{ column.type }}\",
    {% endif %}
    {% if column.visible %}
        \"visible\": true,
        \"className\": \"{{ column.class }}\",
    {% else %}
        \"visible\": false,
        \"className\": \"never {{ column.class }}\",
    {% endif %}
    \"width\": \"{{ column.width }}\",
{% endblock %}

{% block data %}
    \"data\": \"{{ column.data }}\",
    \"render\": function(data, type, row, meta) {
        {% include 'SgDatatablesBundle:Action:action.html.twig' with { 'column': column, 'actions': column.actions } %}
    },
{% endblock %}
", "SgDatatablesBundle:Column:action.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Column/action.html.twig");
    }
}
