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
        $__internal_2d1f65503aabc4a6d5dbed814034082821774f9d8b4fc61188491d708a729ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d1f65503aabc4a6d5dbed814034082821774f9d8b4fc61188491d708a729ff7->enter($__internal_2d1f65503aabc4a6d5dbed814034082821774f9d8b4fc61188491d708a729ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        $__internal_b3fbf1b65e4758b1ef4fd08445a62a2ec808414c494efd251bd74fa2b602bd56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fbf1b65e4758b1ef4fd08445a62a2ec808414c494efd251bd74fa2b602bd56->enter($__internal_b3fbf1b65e4758b1ef4fd08445a62a2ec808414c494efd251bd74fa2b602bd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_2d1f65503aabc4a6d5dbed814034082821774f9d8b4fc61188491d708a729ff7->leave($__internal_2d1f65503aabc4a6d5dbed814034082821774f9d8b4fc61188491d708a729ff7_prof);

        
        $__internal_b3fbf1b65e4758b1ef4fd08445a62a2ec808414c494efd251bd74fa2b602bd56->leave($__internal_b3fbf1b65e4758b1ef4fd08445a62a2ec808414c494efd251bd74fa2b602bd56_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_d39e2a55ce272376419570dd3487529cbe6ea3deb362fbf25bc8578366b000d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39e2a55ce272376419570dd3487529cbe6ea3deb362fbf25bc8578366b000d8->enter($__internal_d39e2a55ce272376419570dd3487529cbe6ea3deb362fbf25bc8578366b000d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_1ed64272fb3269c98e31bcd2db75315623f6a2056e33458c13a1897e5ab7bf83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed64272fb3269c98e31bcd2db75315623f6a2056e33458c13a1897e5ab7bf83->enter($__internal_1ed64272fb3269c98e31bcd2db75315623f6a2056e33458c13a1897e5ab7bf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_1ed64272fb3269c98e31bcd2db75315623f6a2056e33458c13a1897e5ab7bf83->leave($__internal_1ed64272fb3269c98e31bcd2db75315623f6a2056e33458c13a1897e5ab7bf83_prof);

        
        $__internal_d39e2a55ce272376419570dd3487529cbe6ea3deb362fbf25bc8578366b000d8->leave($__internal_d39e2a55ce272376419570dd3487529cbe6ea3deb362fbf25bc8578366b000d8_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_84b5ff19aff644b0cb7f3eaeebdbd4583f2d04d12cc367decee6573d81a43118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b5ff19aff644b0cb7f3eaeebdbd4583f2d04d12cc367decee6573d81a43118->enter($__internal_84b5ff19aff644b0cb7f3eaeebdbd4583f2d04d12cc367decee6573d81a43118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_a77bb26359eb255cc0e66bf1028ff90b6c34ada8e3388fce2ad08051aba7f393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77bb26359eb255cc0e66bf1028ff90b6c34ada8e3388fce2ad08051aba7f393->enter($__internal_a77bb26359eb255cc0e66bf1028ff90b6c34ada8e3388fce2ad08051aba7f393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_a77bb26359eb255cc0e66bf1028ff90b6c34ada8e3388fce2ad08051aba7f393->leave($__internal_a77bb26359eb255cc0e66bf1028ff90b6c34ada8e3388fce2ad08051aba7f393_prof);

        
        $__internal_84b5ff19aff644b0cb7f3eaeebdbd4583f2d04d12cc367decee6573d81a43118->leave($__internal_84b5ff19aff644b0cb7f3eaeebdbd4583f2d04d12cc367decee6573d81a43118_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_e180cd761d8e2db49482053b3eb075ddc5723e83a1c2256a945a7924b2063eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e180cd761d8e2db49482053b3eb075ddc5723e83a1c2256a945a7924b2063eda->enter($__internal_e180cd761d8e2db49482053b3eb075ddc5723e83a1c2256a945a7924b2063eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_3de34d013af7b3457771be319850651960c9ab52a66bf88ad1975f2d3ef334c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de34d013af7b3457771be319850651960c9ab52a66bf88ad1975f2d3ef334c1->enter($__internal_3de34d013af7b3457771be319850651960c9ab52a66bf88ad1975f2d3ef334c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_3de34d013af7b3457771be319850651960c9ab52a66bf88ad1975f2d3ef334c1->leave($__internal_3de34d013af7b3457771be319850651960c9ab52a66bf88ad1975f2d3ef334c1_prof);

        
        $__internal_e180cd761d8e2db49482053b3eb075ddc5723e83a1c2256a945a7924b2063eda->leave($__internal_e180cd761d8e2db49482053b3eb075ddc5723e83a1c2256a945a7924b2063eda_prof);

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
