<?php

/* @SgDatatables/Datatable/datatable.html.twig */
class __TwigTemplate_9511773101718045658dd9534981ab7ddc98794244086f35ad8aec8eda486f86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sg_datatable' => array($this, 'block_sg_datatable'),
            'sg_datatable_html' => array($this, 'block_sg_datatable_html'),
            'sg_datatable_js' => array($this, 'block_sg_datatable_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f336e09c802d6113fef2ecda028a6734e31629c61bfc4d6748ebd75bf06c93b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f336e09c802d6113fef2ecda028a6734e31629c61bfc4d6748ebd75bf06c93b->enter($__internal_5f336e09c802d6113fef2ecda028a6734e31629c61bfc4d6748ebd75bf06c93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        $__internal_0583d271b8a37308b7bc2b13c8bcea416a8d0d071ce6d9058a19ba478597ac68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0583d271b8a37308b7bc2b13c8bcea416a8d0d071ce6d9058a19ba478597ac68->enter($__internal_0583d271b8a37308b7bc2b13c8bcea416a8d0d071ce6d9058a19ba478597ac68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_5f336e09c802d6113fef2ecda028a6734e31629c61bfc4d6748ebd75bf06c93b->leave($__internal_5f336e09c802d6113fef2ecda028a6734e31629c61bfc4d6748ebd75bf06c93b_prof);

        
        $__internal_0583d271b8a37308b7bc2b13c8bcea416a8d0d071ce6d9058a19ba478597ac68->leave($__internal_0583d271b8a37308b7bc2b13c8bcea416a8d0d071ce6d9058a19ba478597ac68_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_7b3ccb49396865d1c7a87af1e03528001f46a58f3841ab0515e3db4e0d5eec45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b3ccb49396865d1c7a87af1e03528001f46a58f3841ab0515e3db4e0d5eec45->enter($__internal_7b3ccb49396865d1c7a87af1e03528001f46a58f3841ab0515e3db4e0d5eec45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_4b34a1001232f40e22628c965f83344527d7dca612ada3cc60faae438359e5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b34a1001232f40e22628c965f83344527d7dca612ada3cc60faae438359e5ba->enter($__internal_4b34a1001232f40e22628c965f83344527d7dca612ada3cc60faae438359e5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('sg_datatable_html', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('sg_datatable_js', $context, $blocks);
        // line 22
        echo "
";
        
        $__internal_4b34a1001232f40e22628c965f83344527d7dca612ada3cc60faae438359e5ba->leave($__internal_4b34a1001232f40e22628c965f83344527d7dca612ada3cc60faae438359e5ba_prof);

        
        $__internal_7b3ccb49396865d1c7a87af1e03528001f46a58f3841ab0515e3db4e0d5eec45->leave($__internal_7b3ccb49396865d1c7a87af1e03528001f46a58f3841ab0515e3db4e0d5eec45_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_61fd838550dc05b7e40a1d4c3e9826215a995617f6d5eb6e0f6bb1462c6447d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61fd838550dc05b7e40a1d4c3e9826215a995617f6d5eb6e0f6bb1462c6447d1->enter($__internal_61fd838550dc05b7e40a1d4c3e9826215a995617f6d5eb6e0f6bb1462c6447d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_80e6cc56054e650279fe72e2da034191d4cd9ea0c451b57e326b748a68f0abb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e6cc56054e650279fe72e2da034191d4cd9ea0c451b57e326b748a68f0abb8->enter($__internal_80e6cc56054e650279fe72e2da034191d4cd9ea0c451b57e326b748a68f0abb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_80e6cc56054e650279fe72e2da034191d4cd9ea0c451b57e326b748a68f0abb8->leave($__internal_80e6cc56054e650279fe72e2da034191d4cd9ea0c451b57e326b748a68f0abb8_prof);

        
        $__internal_61fd838550dc05b7e40a1d4c3e9826215a995617f6d5eb6e0f6bb1462c6447d1->leave($__internal_61fd838550dc05b7e40a1d4c3e9826215a995617f6d5eb6e0f6bb1462c6447d1_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_57483220eeaff80cbf8b6e5c10f8ef8136466b6d3a9ade936e82b1620a5a533b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57483220eeaff80cbf8b6e5c10f8ef8136466b6d3a9ade936e82b1620a5a533b->enter($__internal_57483220eeaff80cbf8b6e5c10f8ef8136466b6d3a9ade936e82b1620a5a533b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_67b265ac1f320b4436e5e3a394b0dd564967eac5015451d27513bc81d8cde770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b265ac1f320b4436e5e3a394b0dd564967eac5015451d27513bc81d8cde770->enter($__internal_67b265ac1f320b4436e5e3a394b0dd564967eac5015451d27513bc81d8cde770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_67b265ac1f320b4436e5e3a394b0dd564967eac5015451d27513bc81d8cde770->leave($__internal_67b265ac1f320b4436e5e3a394b0dd564967eac5015451d27513bc81d8cde770_prof);

        
        $__internal_57483220eeaff80cbf8b6e5c10f8ef8136466b6d3a9ade936e82b1620a5a533b->leave($__internal_57483220eeaff80cbf8b6e5c10f8ef8136466b6d3a9ade936e82b1620a5a533b_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/Datatable/datatable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  104 => 19,  101 => 18,  92 => 17,  81 => 14,  79 => 13,  76 => 12,  67 => 11,  56 => 22,  54 => 17,  51 => 16,  49 => 11,  46 => 10,  28 => 9,);
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
{% block sg_datatable %}

    {% block sg_datatable_html %}

        {% include \"SgDatatablesBundle:Datatable:datatable_html.html.twig\" %}

    {% endblock %}

    {% block sg_datatable_js %}

        {% include \"SgDatatablesBundle:Datatable:datatable_js.html.twig\" %}

    {% endblock %}

{% endblock  %}
", "@SgDatatables/Datatable/datatable.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle\\Resources\\views\\Datatable\\datatable.html.twig");
    }
}
