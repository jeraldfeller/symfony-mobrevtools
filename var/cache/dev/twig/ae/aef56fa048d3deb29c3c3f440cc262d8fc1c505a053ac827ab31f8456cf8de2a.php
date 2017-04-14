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
        $__internal_89d715a7004a3778ef55f89ad9efa4242b0c6bae4c06a444b85199634a7729b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d715a7004a3778ef55f89ad9efa4242b0c6bae4c06a444b85199634a7729b9->enter($__internal_89d715a7004a3778ef55f89ad9efa4242b0c6bae4c06a444b85199634a7729b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        $__internal_6ea9c581fc5b0363793d076335b945c5ba1863e9ad56089497591e2c5e19b28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea9c581fc5b0363793d076335b945c5ba1863e9ad56089497591e2c5e19b28a->enter($__internal_6ea9c581fc5b0363793d076335b945c5ba1863e9ad56089497591e2c5e19b28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_89d715a7004a3778ef55f89ad9efa4242b0c6bae4c06a444b85199634a7729b9->leave($__internal_89d715a7004a3778ef55f89ad9efa4242b0c6bae4c06a444b85199634a7729b9_prof);

        
        $__internal_6ea9c581fc5b0363793d076335b945c5ba1863e9ad56089497591e2c5e19b28a->leave($__internal_6ea9c581fc5b0363793d076335b945c5ba1863e9ad56089497591e2c5e19b28a_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_e5138708c975adabd69b472ecca8d88ad099ffe801e9a4e1a2e1a62114c48097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5138708c975adabd69b472ecca8d88ad099ffe801e9a4e1a2e1a62114c48097->enter($__internal_e5138708c975adabd69b472ecca8d88ad099ffe801e9a4e1a2e1a62114c48097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_f6cb04116765669351d608d78b8d625ac8f8fa6d7ea863fa84f407778bad9441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6cb04116765669351d608d78b8d625ac8f8fa6d7ea863fa84f407778bad9441->enter($__internal_f6cb04116765669351d608d78b8d625ac8f8fa6d7ea863fa84f407778bad9441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_f6cb04116765669351d608d78b8d625ac8f8fa6d7ea863fa84f407778bad9441->leave($__internal_f6cb04116765669351d608d78b8d625ac8f8fa6d7ea863fa84f407778bad9441_prof);

        
        $__internal_e5138708c975adabd69b472ecca8d88ad099ffe801e9a4e1a2e1a62114c48097->leave($__internal_e5138708c975adabd69b472ecca8d88ad099ffe801e9a4e1a2e1a62114c48097_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_5b263819b51424bdf15dd9995193530ec955c564b6c562e3d63734580a88aa5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b263819b51424bdf15dd9995193530ec955c564b6c562e3d63734580a88aa5d->enter($__internal_5b263819b51424bdf15dd9995193530ec955c564b6c562e3d63734580a88aa5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_8b4875630138662d72d0a5b5624b19a783470ee149123f123d1ec3ee89acb2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4875630138662d72d0a5b5624b19a783470ee149123f123d1ec3ee89acb2ff->enter($__internal_8b4875630138662d72d0a5b5624b19a783470ee149123f123d1ec3ee89acb2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_8b4875630138662d72d0a5b5624b19a783470ee149123f123d1ec3ee89acb2ff->leave($__internal_8b4875630138662d72d0a5b5624b19a783470ee149123f123d1ec3ee89acb2ff_prof);

        
        $__internal_5b263819b51424bdf15dd9995193530ec955c564b6c562e3d63734580a88aa5d->leave($__internal_5b263819b51424bdf15dd9995193530ec955c564b6c562e3d63734580a88aa5d_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_03e847a8011a3b6f26690c914ed209dee55855e5e645a8d1507cc7315f67712c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e847a8011a3b6f26690c914ed209dee55855e5e645a8d1507cc7315f67712c->enter($__internal_03e847a8011a3b6f26690c914ed209dee55855e5e645a8d1507cc7315f67712c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_40b0b6c73f769ed45eb953bd03a28e39f2b7711f3370f956850653de6f05c236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b0b6c73f769ed45eb953bd03a28e39f2b7711f3370f956850653de6f05c236->enter($__internal_40b0b6c73f769ed45eb953bd03a28e39f2b7711f3370f956850653de6f05c236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_40b0b6c73f769ed45eb953bd03a28e39f2b7711f3370f956850653de6f05c236->leave($__internal_40b0b6c73f769ed45eb953bd03a28e39f2b7711f3370f956850653de6f05c236_prof);

        
        $__internal_03e847a8011a3b6f26690c914ed209dee55855e5e645a8d1507cc7315f67712c->leave($__internal_03e847a8011a3b6f26690c914ed209dee55855e5e645a8d1507cc7315f67712c_prof);

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
