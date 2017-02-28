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
        $__internal_7b8df580d815f5a960f9148b1fc5f36f1766b30938d483afe249649a8ac063ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8df580d815f5a960f9148b1fc5f36f1766b30938d483afe249649a8ac063ee->enter($__internal_7b8df580d815f5a960f9148b1fc5f36f1766b30938d483afe249649a8ac063ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        $__internal_b8357ebda6a1cf0890657bbd23372254637677d46459f32929e504f864a32ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8357ebda6a1cf0890657bbd23372254637677d46459f32929e504f864a32ea2->enter($__internal_b8357ebda6a1cf0890657bbd23372254637677d46459f32929e504f864a32ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_7b8df580d815f5a960f9148b1fc5f36f1766b30938d483afe249649a8ac063ee->leave($__internal_7b8df580d815f5a960f9148b1fc5f36f1766b30938d483afe249649a8ac063ee_prof);

        
        $__internal_b8357ebda6a1cf0890657bbd23372254637677d46459f32929e504f864a32ea2->leave($__internal_b8357ebda6a1cf0890657bbd23372254637677d46459f32929e504f864a32ea2_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_478b74fa1187d73744963dec423b0617c44d1c7c541749300ba92337b50c41cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478b74fa1187d73744963dec423b0617c44d1c7c541749300ba92337b50c41cc->enter($__internal_478b74fa1187d73744963dec423b0617c44d1c7c541749300ba92337b50c41cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_1013e646c1e3e7a5a94671c8b4766e4578c5959f7e4ad5411e23dd288cf2c524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1013e646c1e3e7a5a94671c8b4766e4578c5959f7e4ad5411e23dd288cf2c524->enter($__internal_1013e646c1e3e7a5a94671c8b4766e4578c5959f7e4ad5411e23dd288cf2c524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_1013e646c1e3e7a5a94671c8b4766e4578c5959f7e4ad5411e23dd288cf2c524->leave($__internal_1013e646c1e3e7a5a94671c8b4766e4578c5959f7e4ad5411e23dd288cf2c524_prof);

        
        $__internal_478b74fa1187d73744963dec423b0617c44d1c7c541749300ba92337b50c41cc->leave($__internal_478b74fa1187d73744963dec423b0617c44d1c7c541749300ba92337b50c41cc_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_90df964f091c514688fc5c22fd633e1e9c7ccf47f0facf78aa66de922089cd53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90df964f091c514688fc5c22fd633e1e9c7ccf47f0facf78aa66de922089cd53->enter($__internal_90df964f091c514688fc5c22fd633e1e9c7ccf47f0facf78aa66de922089cd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_fbcfad0f7bb31597dcc67621d5fb1e58c69d4f9e69291dc31a5b70f638d31a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbcfad0f7bb31597dcc67621d5fb1e58c69d4f9e69291dc31a5b70f638d31a7a->enter($__internal_fbcfad0f7bb31597dcc67621d5fb1e58c69d4f9e69291dc31a5b70f638d31a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_fbcfad0f7bb31597dcc67621d5fb1e58c69d4f9e69291dc31a5b70f638d31a7a->leave($__internal_fbcfad0f7bb31597dcc67621d5fb1e58c69d4f9e69291dc31a5b70f638d31a7a_prof);

        
        $__internal_90df964f091c514688fc5c22fd633e1e9c7ccf47f0facf78aa66de922089cd53->leave($__internal_90df964f091c514688fc5c22fd633e1e9c7ccf47f0facf78aa66de922089cd53_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_bc081b753e4f2bf8c63d14c7349ba60ce48d0d905b2b6a917d8ae5eb5fb8b77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc081b753e4f2bf8c63d14c7349ba60ce48d0d905b2b6a917d8ae5eb5fb8b77e->enter($__internal_bc081b753e4f2bf8c63d14c7349ba60ce48d0d905b2b6a917d8ae5eb5fb8b77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_c82081f2f0e4a8add176357e7bcf9a6d92f4ad2f2bc12f43c5242325420653f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82081f2f0e4a8add176357e7bcf9a6d92f4ad2f2bc12f43c5242325420653f1->enter($__internal_c82081f2f0e4a8add176357e7bcf9a6d92f4ad2f2bc12f43c5242325420653f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_c82081f2f0e4a8add176357e7bcf9a6d92f4ad2f2bc12f43c5242325420653f1->leave($__internal_c82081f2f0e4a8add176357e7bcf9a6d92f4ad2f2bc12f43c5242325420653f1_prof);

        
        $__internal_bc081b753e4f2bf8c63d14c7349ba60ce48d0d905b2b6a917d8ae5eb5fb8b77e->leave($__internal_bc081b753e4f2bf8c63d14c7349ba60ce48d0d905b2b6a917d8ae5eb5fb8b77e_prof);

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
