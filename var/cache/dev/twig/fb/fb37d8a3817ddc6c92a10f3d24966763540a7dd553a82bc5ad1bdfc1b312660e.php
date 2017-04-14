<?php

/* SgDatatablesBundle:Datatable:datatable.html.twig */
class __TwigTemplate_96fe856a15ee3425c4d560f05347ec119541eb2424ad3676c8772eb22eb52950 extends Twig_Template
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
        $__internal_9d49453a631992e15ca036dde85090543a962d35efdaba812204da4f10661730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d49453a631992e15ca036dde85090543a962d35efdaba812204da4f10661730->enter($__internal_9d49453a631992e15ca036dde85090543a962d35efdaba812204da4f10661730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        $__internal_0f9250bc439bbc5d098dc658d29780d1034447c392793d05f17482d972f86870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9250bc439bbc5d098dc658d29780d1034447c392793d05f17482d972f86870->enter($__internal_0f9250bc439bbc5d098dc658d29780d1034447c392793d05f17482d972f86870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_9d49453a631992e15ca036dde85090543a962d35efdaba812204da4f10661730->leave($__internal_9d49453a631992e15ca036dde85090543a962d35efdaba812204da4f10661730_prof);

        
        $__internal_0f9250bc439bbc5d098dc658d29780d1034447c392793d05f17482d972f86870->leave($__internal_0f9250bc439bbc5d098dc658d29780d1034447c392793d05f17482d972f86870_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_428bf779657e0c9d8aff045a3d54d61b31c573f8f4fe0279e4024c2725862f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428bf779657e0c9d8aff045a3d54d61b31c573f8f4fe0279e4024c2725862f7f->enter($__internal_428bf779657e0c9d8aff045a3d54d61b31c573f8f4fe0279e4024c2725862f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_82cb9f445982d324522cab509ceb4636dcf78a7e261f5ea2cdf6e09c5a62503a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cb9f445982d324522cab509ceb4636dcf78a7e261f5ea2cdf6e09c5a62503a->enter($__internal_82cb9f445982d324522cab509ceb4636dcf78a7e261f5ea2cdf6e09c5a62503a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_82cb9f445982d324522cab509ceb4636dcf78a7e261f5ea2cdf6e09c5a62503a->leave($__internal_82cb9f445982d324522cab509ceb4636dcf78a7e261f5ea2cdf6e09c5a62503a_prof);

        
        $__internal_428bf779657e0c9d8aff045a3d54d61b31c573f8f4fe0279e4024c2725862f7f->leave($__internal_428bf779657e0c9d8aff045a3d54d61b31c573f8f4fe0279e4024c2725862f7f_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_ced8c8554aa5456a01b3dd32d220422d3a68175945a43f048fb055ba3b5d79ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced8c8554aa5456a01b3dd32d220422d3a68175945a43f048fb055ba3b5d79ab->enter($__internal_ced8c8554aa5456a01b3dd32d220422d3a68175945a43f048fb055ba3b5d79ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_c5b13d2a97513299a6c7201b662e98a8038acd5c2fa92ba97816ec5e9dd824e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b13d2a97513299a6c7201b662e98a8038acd5c2fa92ba97816ec5e9dd824e2->enter($__internal_c5b13d2a97513299a6c7201b662e98a8038acd5c2fa92ba97816ec5e9dd824e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_c5b13d2a97513299a6c7201b662e98a8038acd5c2fa92ba97816ec5e9dd824e2->leave($__internal_c5b13d2a97513299a6c7201b662e98a8038acd5c2fa92ba97816ec5e9dd824e2_prof);

        
        $__internal_ced8c8554aa5456a01b3dd32d220422d3a68175945a43f048fb055ba3b5d79ab->leave($__internal_ced8c8554aa5456a01b3dd32d220422d3a68175945a43f048fb055ba3b5d79ab_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_be1abca8afab7a389ac2359187e002b4b45f3bdfe44c2c5ba6af0d2d923b02ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1abca8afab7a389ac2359187e002b4b45f3bdfe44c2c5ba6af0d2d923b02ba->enter($__internal_be1abca8afab7a389ac2359187e002b4b45f3bdfe44c2c5ba6af0d2d923b02ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_ff59f7c2ffa2c6ed83b9a9a8e5307ccaee2a524edd35cdd2d61c6b44b8d34f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff59f7c2ffa2c6ed83b9a9a8e5307ccaee2a524edd35cdd2d61c6b44b8d34f38->enter($__internal_ff59f7c2ffa2c6ed83b9a9a8e5307ccaee2a524edd35cdd2d61c6b44b8d34f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_ff59f7c2ffa2c6ed83b9a9a8e5307ccaee2a524edd35cdd2d61c6b44b8d34f38->leave($__internal_ff59f7c2ffa2c6ed83b9a9a8e5307ccaee2a524edd35cdd2d61c6b44b8d34f38_prof);

        
        $__internal_be1abca8afab7a389ac2359187e002b4b45f3bdfe44c2c5ba6af0d2d923b02ba->leave($__internal_be1abca8afab7a389ac2359187e002b4b45f3bdfe44c2c5ba6af0d2d923b02ba_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:Datatable:datatable.html.twig";
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
", "SgDatatablesBundle:Datatable:datatable.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\sg\\datatablesbundle\\Sg\\DatatablesBundle/Resources/views/Datatable/datatable.html.twig");
    }
}
