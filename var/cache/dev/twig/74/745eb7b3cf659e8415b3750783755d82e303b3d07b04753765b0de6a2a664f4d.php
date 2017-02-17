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
        $__internal_2441226f12a17acc8a4b0a42ba51ae119522632e3b677d083eaf53d8a0ca0c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2441226f12a17acc8a4b0a42ba51ae119522632e3b677d083eaf53d8a0ca0c77->enter($__internal_2441226f12a17acc8a4b0a42ba51ae119522632e3b677d083eaf53d8a0ca0c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $__internal_a259d7e162dcc010d94069d6977acb372957fbc8c41110869eb852b540cfb5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a259d7e162dcc010d94069d6977acb372957fbc8c41110869eb852b540cfb5b5->enter($__internal_a259d7e162dcc010d94069d6977acb372957fbc8c41110869eb852b540cfb5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Column/timeago.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2441226f12a17acc8a4b0a42ba51ae119522632e3b677d083eaf53d8a0ca0c77->leave($__internal_2441226f12a17acc8a4b0a42ba51ae119522632e3b677d083eaf53d8a0ca0c77_prof);

        
        $__internal_a259d7e162dcc010d94069d6977acb372957fbc8c41110869eb852b540cfb5b5->leave($__internal_a259d7e162dcc010d94069d6977acb372957fbc8c41110869eb852b540cfb5b5_prof);

    }

    // line 11
    public function block_data($context, array $blocks = array())
    {
        $__internal_08640f4e64f2d7f6fb72662127b087c7a70eee5accc56750d16ea5aa5103450d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08640f4e64f2d7f6fb72662127b087c7a70eee5accc56750d16ea5aa5103450d->enter($__internal_08640f4e64f2d7f6fb72662127b087c7a70eee5accc56750d16ea5aa5103450d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_202d77add860583561e8934eb61569dd15c5913e508729332937049ab485081e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202d77add860583561e8934eb61569dd15c5913e508729332937049ab485081e->enter($__internal_202d77add860583561e8934eb61569dd15c5913e508729332937049ab485081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

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
        
        $__internal_202d77add860583561e8934eb61569dd15c5913e508729332937049ab485081e->leave($__internal_202d77add860583561e8934eb61569dd15c5913e508729332937049ab485081e_prof);

        
        $__internal_08640f4e64f2d7f6fb72662127b087c7a70eee5accc56750d16ea5aa5103450d->leave($__internal_08640f4e64f2d7f6fb72662127b087c7a70eee5accc56750d16ea5aa5103450d_prof);

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
