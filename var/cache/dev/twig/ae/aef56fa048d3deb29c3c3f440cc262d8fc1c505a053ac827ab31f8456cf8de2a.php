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
        $__internal_2f57b010671b2b25bfc995fd3a9e0867452fa1d9b571f828ba05c32683ccfc6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f57b010671b2b25bfc995fd3a9e0867452fa1d9b571f828ba05c32683ccfc6d->enter($__internal_2f57b010671b2b25bfc995fd3a9e0867452fa1d9b571f828ba05c32683ccfc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        $__internal_5801ca7030c82dfbb24cf76ca9b374f45a2cbec56779177fa19d1f46dee53502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5801ca7030c82dfbb24cf76ca9b374f45a2cbec56779177fa19d1f46dee53502->enter($__internal_5801ca7030c82dfbb24cf76ca9b374f45a2cbec56779177fa19d1f46dee53502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_2f57b010671b2b25bfc995fd3a9e0867452fa1d9b571f828ba05c32683ccfc6d->leave($__internal_2f57b010671b2b25bfc995fd3a9e0867452fa1d9b571f828ba05c32683ccfc6d_prof);

        
        $__internal_5801ca7030c82dfbb24cf76ca9b374f45a2cbec56779177fa19d1f46dee53502->leave($__internal_5801ca7030c82dfbb24cf76ca9b374f45a2cbec56779177fa19d1f46dee53502_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_9758259f0721612357ed3e6dab3cf435f4d5fd168f7e574dbad7a40ffab7af80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9758259f0721612357ed3e6dab3cf435f4d5fd168f7e574dbad7a40ffab7af80->enter($__internal_9758259f0721612357ed3e6dab3cf435f4d5fd168f7e574dbad7a40ffab7af80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_72a3fb18ab826bcc7ac24cae9fa858b6457b234a1b0a7d0e5956e2a315e2cccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a3fb18ab826bcc7ac24cae9fa858b6457b234a1b0a7d0e5956e2a315e2cccf->enter($__internal_72a3fb18ab826bcc7ac24cae9fa858b6457b234a1b0a7d0e5956e2a315e2cccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_72a3fb18ab826bcc7ac24cae9fa858b6457b234a1b0a7d0e5956e2a315e2cccf->leave($__internal_72a3fb18ab826bcc7ac24cae9fa858b6457b234a1b0a7d0e5956e2a315e2cccf_prof);

        
        $__internal_9758259f0721612357ed3e6dab3cf435f4d5fd168f7e574dbad7a40ffab7af80->leave($__internal_9758259f0721612357ed3e6dab3cf435f4d5fd168f7e574dbad7a40ffab7af80_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_6cd3acfbc70fea9314fe394ad30127f0b3a185a42b386d17b2034fd01a51ea7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd3acfbc70fea9314fe394ad30127f0b3a185a42b386d17b2034fd01a51ea7e->enter($__internal_6cd3acfbc70fea9314fe394ad30127f0b3a185a42b386d17b2034fd01a51ea7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_d901523dce435e588dbad6d45444b53e95538c80ebdbf32f62e2506998022fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d901523dce435e588dbad6d45444b53e95538c80ebdbf32f62e2506998022fe7->enter($__internal_d901523dce435e588dbad6d45444b53e95538c80ebdbf32f62e2506998022fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_d901523dce435e588dbad6d45444b53e95538c80ebdbf32f62e2506998022fe7->leave($__internal_d901523dce435e588dbad6d45444b53e95538c80ebdbf32f62e2506998022fe7_prof);

        
        $__internal_6cd3acfbc70fea9314fe394ad30127f0b3a185a42b386d17b2034fd01a51ea7e->leave($__internal_6cd3acfbc70fea9314fe394ad30127f0b3a185a42b386d17b2034fd01a51ea7e_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_49d3fbe301e6ea343c0fcf0b9724aee301821512f1fe04d5f42aa1af50cb09ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d3fbe301e6ea343c0fcf0b9724aee301821512f1fe04d5f42aa1af50cb09ef->enter($__internal_49d3fbe301e6ea343c0fcf0b9724aee301821512f1fe04d5f42aa1af50cb09ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_3aa0da4c22502a5e26d8c990bab0824c218266b4810776d40456b8e030b8b60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa0da4c22502a5e26d8c990bab0824c218266b4810776d40456b8e030b8b60b->enter($__internal_3aa0da4c22502a5e26d8c990bab0824c218266b4810776d40456b8e030b8b60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_3aa0da4c22502a5e26d8c990bab0824c218266b4810776d40456b8e030b8b60b->leave($__internal_3aa0da4c22502a5e26d8c990bab0824c218266b4810776d40456b8e030b8b60b_prof);

        
        $__internal_49d3fbe301e6ea343c0fcf0b9724aee301821512f1fe04d5f42aa1af50cb09ef->leave($__internal_49d3fbe301e6ea343c0fcf0b9724aee301821512f1fe04d5f42aa1af50cb09ef_prof);

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
