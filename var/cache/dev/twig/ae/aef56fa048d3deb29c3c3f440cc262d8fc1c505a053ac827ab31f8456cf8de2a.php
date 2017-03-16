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
        $__internal_557a9cdaf7b9a9cdab6943c40996e722b3e99b0d1d2914a5fc10439d1942aff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557a9cdaf7b9a9cdab6943c40996e722b3e99b0d1d2914a5fc10439d1942aff4->enter($__internal_557a9cdaf7b9a9cdab6943c40996e722b3e99b0d1d2914a5fc10439d1942aff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        $__internal_38cf24e5339519b8bf6f6e54161f30f3dd7a1cbaa74fd0e4723b7a324b88b87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38cf24e5339519b8bf6f6e54161f30f3dd7a1cbaa74fd0e4723b7a324b88b87f->enter($__internal_38cf24e5339519b8bf6f6e54161f30f3dd7a1cbaa74fd0e4723b7a324b88b87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_557a9cdaf7b9a9cdab6943c40996e722b3e99b0d1d2914a5fc10439d1942aff4->leave($__internal_557a9cdaf7b9a9cdab6943c40996e722b3e99b0d1d2914a5fc10439d1942aff4_prof);

        
        $__internal_38cf24e5339519b8bf6f6e54161f30f3dd7a1cbaa74fd0e4723b7a324b88b87f->leave($__internal_38cf24e5339519b8bf6f6e54161f30f3dd7a1cbaa74fd0e4723b7a324b88b87f_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_0d065075b5431581ab12a46edb54e2b437ba7e1b3c52cca061328bd7e287ebfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d065075b5431581ab12a46edb54e2b437ba7e1b3c52cca061328bd7e287ebfa->enter($__internal_0d065075b5431581ab12a46edb54e2b437ba7e1b3c52cca061328bd7e287ebfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_cf86ef35d2b037d58f65d5c612f8acbf81018f800262df2bf4d77f7527e80a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf86ef35d2b037d58f65d5c612f8acbf81018f800262df2bf4d77f7527e80a99->enter($__internal_cf86ef35d2b037d58f65d5c612f8acbf81018f800262df2bf4d77f7527e80a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_cf86ef35d2b037d58f65d5c612f8acbf81018f800262df2bf4d77f7527e80a99->leave($__internal_cf86ef35d2b037d58f65d5c612f8acbf81018f800262df2bf4d77f7527e80a99_prof);

        
        $__internal_0d065075b5431581ab12a46edb54e2b437ba7e1b3c52cca061328bd7e287ebfa->leave($__internal_0d065075b5431581ab12a46edb54e2b437ba7e1b3c52cca061328bd7e287ebfa_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_9c84bb40603f2ac30d2c68b51e5b520a67e842d4bfacbe959de59ee425a193d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c84bb40603f2ac30d2c68b51e5b520a67e842d4bfacbe959de59ee425a193d2->enter($__internal_9c84bb40603f2ac30d2c68b51e5b520a67e842d4bfacbe959de59ee425a193d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_fca5c16878027faad6817ebf22ac57e0c34b762916d1fc21603461bd1098efc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca5c16878027faad6817ebf22ac57e0c34b762916d1fc21603461bd1098efc3->enter($__internal_fca5c16878027faad6817ebf22ac57e0c34b762916d1fc21603461bd1098efc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_fca5c16878027faad6817ebf22ac57e0c34b762916d1fc21603461bd1098efc3->leave($__internal_fca5c16878027faad6817ebf22ac57e0c34b762916d1fc21603461bd1098efc3_prof);

        
        $__internal_9c84bb40603f2ac30d2c68b51e5b520a67e842d4bfacbe959de59ee425a193d2->leave($__internal_9c84bb40603f2ac30d2c68b51e5b520a67e842d4bfacbe959de59ee425a193d2_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_38e13226db609c51be119cc6bb77ef12c5f986c01245a4fcb2aa8aa3a03a76ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e13226db609c51be119cc6bb77ef12c5f986c01245a4fcb2aa8aa3a03a76ca->enter($__internal_38e13226db609c51be119cc6bb77ef12c5f986c01245a4fcb2aa8aa3a03a76ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_892cab52ab6ec0fbf1d6e9297b017ceca8c1b89261dd020580c0824878f59031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892cab52ab6ec0fbf1d6e9297b017ceca8c1b89261dd020580c0824878f59031->enter($__internal_892cab52ab6ec0fbf1d6e9297b017ceca8c1b89261dd020580c0824878f59031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_892cab52ab6ec0fbf1d6e9297b017ceca8c1b89261dd020580c0824878f59031->leave($__internal_892cab52ab6ec0fbf1d6e9297b017ceca8c1b89261dd020580c0824878f59031_prof);

        
        $__internal_38e13226db609c51be119cc6bb77ef12c5f986c01245a4fcb2aa8aa3a03a76ca->leave($__internal_38e13226db609c51be119cc6bb77ef12c5f986c01245a4fcb2aa8aa3a03a76ca_prof);

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
