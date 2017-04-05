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
        $__internal_e0ceb9eb513601f75b7785d8df8d48ec8d349b6cdc5613e70631a47121e6e580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ceb9eb513601f75b7785d8df8d48ec8d349b6cdc5613e70631a47121e6e580->enter($__internal_e0ceb9eb513601f75b7785d8df8d48ec8d349b6cdc5613e70631a47121e6e580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        $__internal_47fd04a21539926c17f3b79deb5ca5e81d2066d81fc22a4a581dee4d10dc6e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47fd04a21539926c17f3b79deb5ca5e81d2066d81fc22a4a581dee4d10dc6e3e->enter($__internal_47fd04a21539926c17f3b79deb5ca5e81d2066d81fc22a4a581dee4d10dc6e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_e0ceb9eb513601f75b7785d8df8d48ec8d349b6cdc5613e70631a47121e6e580->leave($__internal_e0ceb9eb513601f75b7785d8df8d48ec8d349b6cdc5613e70631a47121e6e580_prof);

        
        $__internal_47fd04a21539926c17f3b79deb5ca5e81d2066d81fc22a4a581dee4d10dc6e3e->leave($__internal_47fd04a21539926c17f3b79deb5ca5e81d2066d81fc22a4a581dee4d10dc6e3e_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_37596ee4e38960bc97937d54768bec6bece51134c1a6abc206674111bd8a4ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37596ee4e38960bc97937d54768bec6bece51134c1a6abc206674111bd8a4ff7->enter($__internal_37596ee4e38960bc97937d54768bec6bece51134c1a6abc206674111bd8a4ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_884afe60af6f58ae9f44adc592ed92fe243859f9b5262be736c75740ecd06eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884afe60af6f58ae9f44adc592ed92fe243859f9b5262be736c75740ecd06eb5->enter($__internal_884afe60af6f58ae9f44adc592ed92fe243859f9b5262be736c75740ecd06eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_884afe60af6f58ae9f44adc592ed92fe243859f9b5262be736c75740ecd06eb5->leave($__internal_884afe60af6f58ae9f44adc592ed92fe243859f9b5262be736c75740ecd06eb5_prof);

        
        $__internal_37596ee4e38960bc97937d54768bec6bece51134c1a6abc206674111bd8a4ff7->leave($__internal_37596ee4e38960bc97937d54768bec6bece51134c1a6abc206674111bd8a4ff7_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_305b92159ffe6691e45a63aa0acceb697fc1d77a1b2cc989ddd1dfc7ae65c985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305b92159ffe6691e45a63aa0acceb697fc1d77a1b2cc989ddd1dfc7ae65c985->enter($__internal_305b92159ffe6691e45a63aa0acceb697fc1d77a1b2cc989ddd1dfc7ae65c985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_1f672e3e7f734ffa304a363ebab64e231beeb99d03bd9bc8e68a63b22e067243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f672e3e7f734ffa304a363ebab64e231beeb99d03bd9bc8e68a63b22e067243->enter($__internal_1f672e3e7f734ffa304a363ebab64e231beeb99d03bd9bc8e68a63b22e067243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_1f672e3e7f734ffa304a363ebab64e231beeb99d03bd9bc8e68a63b22e067243->leave($__internal_1f672e3e7f734ffa304a363ebab64e231beeb99d03bd9bc8e68a63b22e067243_prof);

        
        $__internal_305b92159ffe6691e45a63aa0acceb697fc1d77a1b2cc989ddd1dfc7ae65c985->leave($__internal_305b92159ffe6691e45a63aa0acceb697fc1d77a1b2cc989ddd1dfc7ae65c985_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_e57b8a8cae0d0005fe06d6adbc79adc09c5892e2d41243b8bcae9b257678c7c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57b8a8cae0d0005fe06d6adbc79adc09c5892e2d41243b8bcae9b257678c7c0->enter($__internal_e57b8a8cae0d0005fe06d6adbc79adc09c5892e2d41243b8bcae9b257678c7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_4080a556d84d988327e107daac403ec5b8a2d1e3742944aba6807e0be40d5ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4080a556d84d988327e107daac403ec5b8a2d1e3742944aba6807e0be40d5ecf->enter($__internal_4080a556d84d988327e107daac403ec5b8a2d1e3742944aba6807e0be40d5ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_4080a556d84d988327e107daac403ec5b8a2d1e3742944aba6807e0be40d5ecf->leave($__internal_4080a556d84d988327e107daac403ec5b8a2d1e3742944aba6807e0be40d5ecf_prof);

        
        $__internal_e57b8a8cae0d0005fe06d6adbc79adc09c5892e2d41243b8bcae9b257678c7c0->leave($__internal_e57b8a8cae0d0005fe06d6adbc79adc09c5892e2d41243b8bcae9b257678c7c0_prof);

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
