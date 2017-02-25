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
        $__internal_6566b94aca0bda41a7f213f945f750e7b5884bc90999049bcc900a17d900192e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6566b94aca0bda41a7f213f945f750e7b5884bc90999049bcc900a17d900192e->enter($__internal_6566b94aca0bda41a7f213f945f750e7b5884bc90999049bcc900a17d900192e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $__internal_e72bfedbe06b985f6ff8fecb366403dcce9d1dbd2623c7e4447b218836a0f46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72bfedbe06b985f6ff8fecb366403dcce9d1dbd2623c7e4447b218836a0f46e->enter($__internal_e72bfedbe06b985f6ff8fecb366403dcce9d1dbd2623c7e4447b218836a0f46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6566b94aca0bda41a7f213f945f750e7b5884bc90999049bcc900a17d900192e->leave($__internal_6566b94aca0bda41a7f213f945f750e7b5884bc90999049bcc900a17d900192e_prof);

        
        $__internal_e72bfedbe06b985f6ff8fecb366403dcce9d1dbd2623c7e4447b218836a0f46e->leave($__internal_e72bfedbe06b985f6ff8fecb366403dcce9d1dbd2623c7e4447b218836a0f46e_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_c23eeab9fff3f6dcc408d0706c425507cebeebbe80c33925cbd381d8ccc29f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23eeab9fff3f6dcc408d0706c425507cebeebbe80c33925cbd381d8ccc29f40->enter($__internal_c23eeab9fff3f6dcc408d0706c425507cebeebbe80c33925cbd381d8ccc29f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_7acbaac619bef81f2e272c346389f5944dbfb7398c05b039989ec384375c8256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7acbaac619bef81f2e272c346389f5944dbfb7398c05b039989ec384375c8256->enter($__internal_7acbaac619bef81f2e272c346389f5944dbfb7398c05b039989ec384375c8256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_7acbaac619bef81f2e272c346389f5944dbfb7398c05b039989ec384375c8256->leave($__internal_7acbaac619bef81f2e272c346389f5944dbfb7398c05b039989ec384375c8256_prof);

        
        $__internal_c23eeab9fff3f6dcc408d0706c425507cebeebbe80c33925cbd381d8ccc29f40->leave($__internal_c23eeab9fff3f6dcc408d0706c425507cebeebbe80c33925cbd381d8ccc29f40_prof);

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
