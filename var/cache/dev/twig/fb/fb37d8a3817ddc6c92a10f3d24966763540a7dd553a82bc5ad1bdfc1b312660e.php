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
        $__internal_808029b7293f6683977167bc947d385fe2efa4d7b8e9341f4e07d955e145ffdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808029b7293f6683977167bc947d385fe2efa4d7b8e9341f4e07d955e145ffdc->enter($__internal_808029b7293f6683977167bc947d385fe2efa4d7b8e9341f4e07d955e145ffdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        $__internal_1c19c9419ef5c7e941f26610a1c4c6657d5245b5ba052a2f617afefd7e02051a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c19c9419ef5c7e941f26610a1c4c6657d5245b5ba052a2f617afefd7e02051a->enter($__internal_1c19c9419ef5c7e941f26610a1c4c6657d5245b5ba052a2f617afefd7e02051a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_808029b7293f6683977167bc947d385fe2efa4d7b8e9341f4e07d955e145ffdc->leave($__internal_808029b7293f6683977167bc947d385fe2efa4d7b8e9341f4e07d955e145ffdc_prof);

        
        $__internal_1c19c9419ef5c7e941f26610a1c4c6657d5245b5ba052a2f617afefd7e02051a->leave($__internal_1c19c9419ef5c7e941f26610a1c4c6657d5245b5ba052a2f617afefd7e02051a_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_1dc1c2be7c623ef32820fec7438802c6ab391987ca9388d916bed98da33d5a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc1c2be7c623ef32820fec7438802c6ab391987ca9388d916bed98da33d5a97->enter($__internal_1dc1c2be7c623ef32820fec7438802c6ab391987ca9388d916bed98da33d5a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_d4d8c3245feaaddcdc7636f31f45f51a580de7367b1f77a5ae8a87688c43dde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d8c3245feaaddcdc7636f31f45f51a580de7367b1f77a5ae8a87688c43dde3->enter($__internal_d4d8c3245feaaddcdc7636f31f45f51a580de7367b1f77a5ae8a87688c43dde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_d4d8c3245feaaddcdc7636f31f45f51a580de7367b1f77a5ae8a87688c43dde3->leave($__internal_d4d8c3245feaaddcdc7636f31f45f51a580de7367b1f77a5ae8a87688c43dde3_prof);

        
        $__internal_1dc1c2be7c623ef32820fec7438802c6ab391987ca9388d916bed98da33d5a97->leave($__internal_1dc1c2be7c623ef32820fec7438802c6ab391987ca9388d916bed98da33d5a97_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_c7aecf85238415bcbcb9f0925acc90edfa6fe9267162d9a3c5e21c6860c68b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7aecf85238415bcbcb9f0925acc90edfa6fe9267162d9a3c5e21c6860c68b3e->enter($__internal_c7aecf85238415bcbcb9f0925acc90edfa6fe9267162d9a3c5e21c6860c68b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_95267531f87b27d626e7206e2a6540a9af3e04755ff3a6cfb8ed4561c49ae9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95267531f87b27d626e7206e2a6540a9af3e04755ff3a6cfb8ed4561c49ae9c2->enter($__internal_95267531f87b27d626e7206e2a6540a9af3e04755ff3a6cfb8ed4561c49ae9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_95267531f87b27d626e7206e2a6540a9af3e04755ff3a6cfb8ed4561c49ae9c2->leave($__internal_95267531f87b27d626e7206e2a6540a9af3e04755ff3a6cfb8ed4561c49ae9c2_prof);

        
        $__internal_c7aecf85238415bcbcb9f0925acc90edfa6fe9267162d9a3c5e21c6860c68b3e->leave($__internal_c7aecf85238415bcbcb9f0925acc90edfa6fe9267162d9a3c5e21c6860c68b3e_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_df8ae93f05ba5103b0f04507989a36015a3d8284a16d561a632419867a83590b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8ae93f05ba5103b0f04507989a36015a3d8284a16d561a632419867a83590b->enter($__internal_df8ae93f05ba5103b0f04507989a36015a3d8284a16d561a632419867a83590b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_c0e1a41743c6241897e78208c429dc15ad084b1a706d1dac52df848af6b305fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e1a41743c6241897e78208c429dc15ad084b1a706d1dac52df848af6b305fb->enter($__internal_c0e1a41743c6241897e78208c429dc15ad084b1a706d1dac52df848af6b305fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_c0e1a41743c6241897e78208c429dc15ad084b1a706d1dac52df848af6b305fb->leave($__internal_c0e1a41743c6241897e78208c429dc15ad084b1a706d1dac52df848af6b305fb_prof);

        
        $__internal_df8ae93f05ba5103b0f04507989a36015a3d8284a16d561a632419867a83590b->leave($__internal_df8ae93f05ba5103b0f04507989a36015a3d8284a16d561a632419867a83590b_prof);

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
