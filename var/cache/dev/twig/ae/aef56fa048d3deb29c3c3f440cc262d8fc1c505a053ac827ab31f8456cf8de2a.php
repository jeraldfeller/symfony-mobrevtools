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
        $__internal_5e92a14f99b743a9b8b0bd4c8761f6d1ac605eaa275a0f609b4479ece3473243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e92a14f99b743a9b8b0bd4c8761f6d1ac605eaa275a0f609b4479ece3473243->enter($__internal_5e92a14f99b743a9b8b0bd4c8761f6d1ac605eaa275a0f609b4479ece3473243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        $__internal_0700f4e9fe6c84972f9a2739d91c9b699916d9dcd173dc20e5ffffe8b3c3861b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0700f4e9fe6c84972f9a2739d91c9b699916d9dcd173dc20e5ffffe8b3c3861b->enter($__internal_0700f4e9fe6c84972f9a2739d91c9b699916d9dcd173dc20e5ffffe8b3c3861b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_5e92a14f99b743a9b8b0bd4c8761f6d1ac605eaa275a0f609b4479ece3473243->leave($__internal_5e92a14f99b743a9b8b0bd4c8761f6d1ac605eaa275a0f609b4479ece3473243_prof);

        
        $__internal_0700f4e9fe6c84972f9a2739d91c9b699916d9dcd173dc20e5ffffe8b3c3861b->leave($__internal_0700f4e9fe6c84972f9a2739d91c9b699916d9dcd173dc20e5ffffe8b3c3861b_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_adc15fba5658a601e77e09175b566d56d3884768d52fbe13a52fc6877841f212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc15fba5658a601e77e09175b566d56d3884768d52fbe13a52fc6877841f212->enter($__internal_adc15fba5658a601e77e09175b566d56d3884768d52fbe13a52fc6877841f212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_15a99c96ed016c46652eb4f4fe4c5dde0cc420b99ff91c2dd90962501ccd3f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a99c96ed016c46652eb4f4fe4c5dde0cc420b99ff91c2dd90962501ccd3f81->enter($__internal_15a99c96ed016c46652eb4f4fe4c5dde0cc420b99ff91c2dd90962501ccd3f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_15a99c96ed016c46652eb4f4fe4c5dde0cc420b99ff91c2dd90962501ccd3f81->leave($__internal_15a99c96ed016c46652eb4f4fe4c5dde0cc420b99ff91c2dd90962501ccd3f81_prof);

        
        $__internal_adc15fba5658a601e77e09175b566d56d3884768d52fbe13a52fc6877841f212->leave($__internal_adc15fba5658a601e77e09175b566d56d3884768d52fbe13a52fc6877841f212_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_1d6c028fba2f9312d4f0db0763ad675cea0c41639649d65cb5a96e93915795e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6c028fba2f9312d4f0db0763ad675cea0c41639649d65cb5a96e93915795e0->enter($__internal_1d6c028fba2f9312d4f0db0763ad675cea0c41639649d65cb5a96e93915795e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_ea560a09e32a7332e5f358f07a7374591d20b4577daf416d4cd7ecb0ea86ea96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea560a09e32a7332e5f358f07a7374591d20b4577daf416d4cd7ecb0ea86ea96->enter($__internal_ea560a09e32a7332e5f358f07a7374591d20b4577daf416d4cd7ecb0ea86ea96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_ea560a09e32a7332e5f358f07a7374591d20b4577daf416d4cd7ecb0ea86ea96->leave($__internal_ea560a09e32a7332e5f358f07a7374591d20b4577daf416d4cd7ecb0ea86ea96_prof);

        
        $__internal_1d6c028fba2f9312d4f0db0763ad675cea0c41639649d65cb5a96e93915795e0->leave($__internal_1d6c028fba2f9312d4f0db0763ad675cea0c41639649d65cb5a96e93915795e0_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_ab59055a4696f8b08cf5249f5f75f1d7994a8abfb23f5b16db336fb86c19446f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab59055a4696f8b08cf5249f5f75f1d7994a8abfb23f5b16db336fb86c19446f->enter($__internal_ab59055a4696f8b08cf5249f5f75f1d7994a8abfb23f5b16db336fb86c19446f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_1f086fe9dabe9018f99cb11a4fa4e97029b6fef3bf807843466156826582352f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f086fe9dabe9018f99cb11a4fa4e97029b6fef3bf807843466156826582352f->enter($__internal_1f086fe9dabe9018f99cb11a4fa4e97029b6fef3bf807843466156826582352f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_1f086fe9dabe9018f99cb11a4fa4e97029b6fef3bf807843466156826582352f->leave($__internal_1f086fe9dabe9018f99cb11a4fa4e97029b6fef3bf807843466156826582352f_prof);

        
        $__internal_ab59055a4696f8b08cf5249f5f75f1d7994a8abfb23f5b16db336fb86c19446f->leave($__internal_ab59055a4696f8b08cf5249f5f75f1d7994a8abfb23f5b16db336fb86c19446f_prof);

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
