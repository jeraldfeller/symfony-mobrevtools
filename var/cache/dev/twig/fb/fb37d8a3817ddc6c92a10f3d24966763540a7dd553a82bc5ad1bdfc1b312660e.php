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
        $__internal_368f93db6beaa15f63849e2de018f3b6a265037eeb88e380df032c338be6c8f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368f93db6beaa15f63849e2de018f3b6a265037eeb88e380df032c338be6c8f1->enter($__internal_368f93db6beaa15f63849e2de018f3b6a265037eeb88e380df032c338be6c8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        $__internal_a62eb19ea98ee5848f11c74526664fc96a31391f9c2cad09d8101f3ce921739d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62eb19ea98ee5848f11c74526664fc96a31391f9c2cad09d8101f3ce921739d->enter($__internal_a62eb19ea98ee5848f11c74526664fc96a31391f9c2cad09d8101f3ce921739d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_368f93db6beaa15f63849e2de018f3b6a265037eeb88e380df032c338be6c8f1->leave($__internal_368f93db6beaa15f63849e2de018f3b6a265037eeb88e380df032c338be6c8f1_prof);

        
        $__internal_a62eb19ea98ee5848f11c74526664fc96a31391f9c2cad09d8101f3ce921739d->leave($__internal_a62eb19ea98ee5848f11c74526664fc96a31391f9c2cad09d8101f3ce921739d_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_979c36e667d57291a679f5d985a3fe56a07219ebe42ce53f715e75e7bba5ae11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979c36e667d57291a679f5d985a3fe56a07219ebe42ce53f715e75e7bba5ae11->enter($__internal_979c36e667d57291a679f5d985a3fe56a07219ebe42ce53f715e75e7bba5ae11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_172b0676a8ac1e8c297f598f0b641cd1c43202b50088bde5c86a53881af9f55e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172b0676a8ac1e8c297f598f0b641cd1c43202b50088bde5c86a53881af9f55e->enter($__internal_172b0676a8ac1e8c297f598f0b641cd1c43202b50088bde5c86a53881af9f55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_172b0676a8ac1e8c297f598f0b641cd1c43202b50088bde5c86a53881af9f55e->leave($__internal_172b0676a8ac1e8c297f598f0b641cd1c43202b50088bde5c86a53881af9f55e_prof);

        
        $__internal_979c36e667d57291a679f5d985a3fe56a07219ebe42ce53f715e75e7bba5ae11->leave($__internal_979c36e667d57291a679f5d985a3fe56a07219ebe42ce53f715e75e7bba5ae11_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_e39a06ca742d2d1cb5c2209ce5916b76c44adf93f3db01ff16ec8ae85a34ca8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39a06ca742d2d1cb5c2209ce5916b76c44adf93f3db01ff16ec8ae85a34ca8d->enter($__internal_e39a06ca742d2d1cb5c2209ce5916b76c44adf93f3db01ff16ec8ae85a34ca8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_28653e1635f620a04530db9fe72a6a6954c5bb530cdfc3d7b93c86fd1d23e73b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28653e1635f620a04530db9fe72a6a6954c5bb530cdfc3d7b93c86fd1d23e73b->enter($__internal_28653e1635f620a04530db9fe72a6a6954c5bb530cdfc3d7b93c86fd1d23e73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_28653e1635f620a04530db9fe72a6a6954c5bb530cdfc3d7b93c86fd1d23e73b->leave($__internal_28653e1635f620a04530db9fe72a6a6954c5bb530cdfc3d7b93c86fd1d23e73b_prof);

        
        $__internal_e39a06ca742d2d1cb5c2209ce5916b76c44adf93f3db01ff16ec8ae85a34ca8d->leave($__internal_e39a06ca742d2d1cb5c2209ce5916b76c44adf93f3db01ff16ec8ae85a34ca8d_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_8f82a132969976e2dfb3c94aae794e7cda13ccb8f3ce72239d501f11307195e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f82a132969976e2dfb3c94aae794e7cda13ccb8f3ce72239d501f11307195e7->enter($__internal_8f82a132969976e2dfb3c94aae794e7cda13ccb8f3ce72239d501f11307195e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_ad01edadadaccb2b7dbf6b404fc021f011a4b20e9d262cb0fa32331c70ed9ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad01edadadaccb2b7dbf6b404fc021f011a4b20e9d262cb0fa32331c70ed9ad4->enter($__internal_ad01edadadaccb2b7dbf6b404fc021f011a4b20e9d262cb0fa32331c70ed9ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_ad01edadadaccb2b7dbf6b404fc021f011a4b20e9d262cb0fa32331c70ed9ad4->leave($__internal_ad01edadadaccb2b7dbf6b404fc021f011a4b20e9d262cb0fa32331c70ed9ad4_prof);

        
        $__internal_8f82a132969976e2dfb3c94aae794e7cda13ccb8f3ce72239d501f11307195e7->leave($__internal_8f82a132969976e2dfb3c94aae794e7cda13ccb8f3ce72239d501f11307195e7_prof);

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
