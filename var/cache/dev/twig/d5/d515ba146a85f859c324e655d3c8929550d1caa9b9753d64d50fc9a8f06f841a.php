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
        $__internal_84b068e21837742a8987e528e6836f7ff276fded2a92a19e0e4bbcc9d413fd31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b068e21837742a8987e528e6836f7ff276fded2a92a19e0e4bbcc9d413fd31->enter($__internal_84b068e21837742a8987e528e6836f7ff276fded2a92a19e0e4bbcc9d413fd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $__internal_f7aba77f1fa0bfd96770108d905907af36688eee3f73a8669b34704f00a009ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7aba77f1fa0bfd96770108d905907af36688eee3f73a8669b34704f00a009ad->enter($__internal_f7aba77f1fa0bfd96770108d905907af36688eee3f73a8669b34704f00a009ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Column:timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84b068e21837742a8987e528e6836f7ff276fded2a92a19e0e4bbcc9d413fd31->leave($__internal_84b068e21837742a8987e528e6836f7ff276fded2a92a19e0e4bbcc9d413fd31_prof);

        
        $__internal_f7aba77f1fa0bfd96770108d905907af36688eee3f73a8669b34704f00a009ad->leave($__internal_f7aba77f1fa0bfd96770108d905907af36688eee3f73a8669b34704f00a009ad_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_6ddf27338ff6889384939c015d1c5084b329cfa7ee04fd65f83454d447120f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ddf27338ff6889384939c015d1c5084b329cfa7ee04fd65f83454d447120f92->enter($__internal_6ddf27338ff6889384939c015d1c5084b329cfa7ee04fd65f83454d447120f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_2bcc7e70f9b74603f744bbc48efbb3fe0e8ac6496c41329e65411eb3d51228d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcc7e70f9b74603f744bbc48efbb3fe0e8ac6496c41329e65411eb3d51228d2->enter($__internal_2bcc7e70f9b74603f744bbc48efbb3fe0e8ac6496c41329e65411eb3d51228d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_2bcc7e70f9b74603f744bbc48efbb3fe0e8ac6496c41329e65411eb3d51228d2->leave($__internal_2bcc7e70f9b74603f744bbc48efbb3fe0e8ac6496c41329e65411eb3d51228d2_prof);

        
        $__internal_6ddf27338ff6889384939c015d1c5084b329cfa7ee04fd65f83454d447120f92->leave($__internal_6ddf27338ff6889384939c015d1c5084b329cfa7ee04fd65f83454d447120f92_prof);

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
