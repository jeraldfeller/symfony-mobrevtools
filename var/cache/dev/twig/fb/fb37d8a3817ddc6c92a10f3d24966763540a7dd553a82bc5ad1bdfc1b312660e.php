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
        $__internal_5d63ffda2a653765ad8a33844cab2fa7d10820219aa3fe00298f675ee7122636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d63ffda2a653765ad8a33844cab2fa7d10820219aa3fe00298f675ee7122636->enter($__internal_5d63ffda2a653765ad8a33844cab2fa7d10820219aa3fe00298f675ee7122636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        $__internal_73599ae2c6c88fc976378a0227b7c16a9397231d8da0278a66dc06ca15e74730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73599ae2c6c88fc976378a0227b7c16a9397231d8da0278a66dc06ca15e74730->enter($__internal_73599ae2c6c88fc976378a0227b7c16a9397231d8da0278a66dc06ca15e74730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_5d63ffda2a653765ad8a33844cab2fa7d10820219aa3fe00298f675ee7122636->leave($__internal_5d63ffda2a653765ad8a33844cab2fa7d10820219aa3fe00298f675ee7122636_prof);

        
        $__internal_73599ae2c6c88fc976378a0227b7c16a9397231d8da0278a66dc06ca15e74730->leave($__internal_73599ae2c6c88fc976378a0227b7c16a9397231d8da0278a66dc06ca15e74730_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_4360fe7cb6336c64a5f44d53f0c70b8fe7d19021410f8fede3c85ec42d9d0760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4360fe7cb6336c64a5f44d53f0c70b8fe7d19021410f8fede3c85ec42d9d0760->enter($__internal_4360fe7cb6336c64a5f44d53f0c70b8fe7d19021410f8fede3c85ec42d9d0760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_e73a0d25f0b3d017868b887a65e5410d2165353989db13a76df47001fa370f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73a0d25f0b3d017868b887a65e5410d2165353989db13a76df47001fa370f3e->enter($__internal_e73a0d25f0b3d017868b887a65e5410d2165353989db13a76df47001fa370f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_e73a0d25f0b3d017868b887a65e5410d2165353989db13a76df47001fa370f3e->leave($__internal_e73a0d25f0b3d017868b887a65e5410d2165353989db13a76df47001fa370f3e_prof);

        
        $__internal_4360fe7cb6336c64a5f44d53f0c70b8fe7d19021410f8fede3c85ec42d9d0760->leave($__internal_4360fe7cb6336c64a5f44d53f0c70b8fe7d19021410f8fede3c85ec42d9d0760_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_c7b37208df1c31ea7e591409ab52892322c12cd26345ee88faaac85f2123e3bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b37208df1c31ea7e591409ab52892322c12cd26345ee88faaac85f2123e3bc->enter($__internal_c7b37208df1c31ea7e591409ab52892322c12cd26345ee88faaac85f2123e3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_3ccc500302939693144b6b9340fb3da17554e4e8d63e65075c19e8d9b46590af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccc500302939693144b6b9340fb3da17554e4e8d63e65075c19e8d9b46590af->enter($__internal_3ccc500302939693144b6b9340fb3da17554e4e8d63e65075c19e8d9b46590af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_3ccc500302939693144b6b9340fb3da17554e4e8d63e65075c19e8d9b46590af->leave($__internal_3ccc500302939693144b6b9340fb3da17554e4e8d63e65075c19e8d9b46590af_prof);

        
        $__internal_c7b37208df1c31ea7e591409ab52892322c12cd26345ee88faaac85f2123e3bc->leave($__internal_c7b37208df1c31ea7e591409ab52892322c12cd26345ee88faaac85f2123e3bc_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_7506ed5b01398b0b65337b720688e61530d7a2dbbc9d0412aa26d4674443a00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7506ed5b01398b0b65337b720688e61530d7a2dbbc9d0412aa26d4674443a00f->enter($__internal_7506ed5b01398b0b65337b720688e61530d7a2dbbc9d0412aa26d4674443a00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_f4defbf2c4c687552cd7534244b3dd40e66c3a4c0795eada036a028bc9ebbdec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4defbf2c4c687552cd7534244b3dd40e66c3a4c0795eada036a028bc9ebbdec->enter($__internal_f4defbf2c4c687552cd7534244b3dd40e66c3a4c0795eada036a028bc9ebbdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_f4defbf2c4c687552cd7534244b3dd40e66c3a4c0795eada036a028bc9ebbdec->leave($__internal_f4defbf2c4c687552cd7534244b3dd40e66c3a4c0795eada036a028bc9ebbdec_prof);

        
        $__internal_7506ed5b01398b0b65337b720688e61530d7a2dbbc9d0412aa26d4674443a00f->leave($__internal_7506ed5b01398b0b65337b720688e61530d7a2dbbc9d0412aa26d4674443a00f_prof);

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
