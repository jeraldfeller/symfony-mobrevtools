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
        $__internal_2836e1eacde3a48769b0d7a585857af1b2924bb3a7536383d02de0fbb5bde906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2836e1eacde3a48769b0d7a585857af1b2924bb3a7536383d02de0fbb5bde906->enter($__internal_2836e1eacde3a48769b0d7a585857af1b2924bb3a7536383d02de0fbb5bde906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        $__internal_6dda2cde542bed8a8a32ba11353435a586c781dcad7b1ba21466453acf9bd219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dda2cde542bed8a8a32ba11353435a586c781dcad7b1ba21466453acf9bd219->enter($__internal_6dda2cde542bed8a8a32ba11353435a586c781dcad7b1ba21466453acf9bd219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_2836e1eacde3a48769b0d7a585857af1b2924bb3a7536383d02de0fbb5bde906->leave($__internal_2836e1eacde3a48769b0d7a585857af1b2924bb3a7536383d02de0fbb5bde906_prof);

        
        $__internal_6dda2cde542bed8a8a32ba11353435a586c781dcad7b1ba21466453acf9bd219->leave($__internal_6dda2cde542bed8a8a32ba11353435a586c781dcad7b1ba21466453acf9bd219_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_6b95784b5810d51f7be883ed98c58707bb80c1f8efe1a864d748485b50b13e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b95784b5810d51f7be883ed98c58707bb80c1f8efe1a864d748485b50b13e98->enter($__internal_6b95784b5810d51f7be883ed98c58707bb80c1f8efe1a864d748485b50b13e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_6f0d0d1e0f3b38853e08a9c69a5f9de7fb255ce67d3482e5adb2eb62c22269a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0d0d1e0f3b38853e08a9c69a5f9de7fb255ce67d3482e5adb2eb62c22269a0->enter($__internal_6f0d0d1e0f3b38853e08a9c69a5f9de7fb255ce67d3482e5adb2eb62c22269a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_6f0d0d1e0f3b38853e08a9c69a5f9de7fb255ce67d3482e5adb2eb62c22269a0->leave($__internal_6f0d0d1e0f3b38853e08a9c69a5f9de7fb255ce67d3482e5adb2eb62c22269a0_prof);

        
        $__internal_6b95784b5810d51f7be883ed98c58707bb80c1f8efe1a864d748485b50b13e98->leave($__internal_6b95784b5810d51f7be883ed98c58707bb80c1f8efe1a864d748485b50b13e98_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_d0a8273542e7144452697e3cbf4336e88f256735ba95effbc310244dbd0cd11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0a8273542e7144452697e3cbf4336e88f256735ba95effbc310244dbd0cd11f->enter($__internal_d0a8273542e7144452697e3cbf4336e88f256735ba95effbc310244dbd0cd11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_57f7e9220caa0ec13f7be2d0c247534282ccb754093c281573d9177865d883c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f7e9220caa0ec13f7be2d0c247534282ccb754093c281573d9177865d883c2->enter($__internal_57f7e9220caa0ec13f7be2d0c247534282ccb754093c281573d9177865d883c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_57f7e9220caa0ec13f7be2d0c247534282ccb754093c281573d9177865d883c2->leave($__internal_57f7e9220caa0ec13f7be2d0c247534282ccb754093c281573d9177865d883c2_prof);

        
        $__internal_d0a8273542e7144452697e3cbf4336e88f256735ba95effbc310244dbd0cd11f->leave($__internal_d0a8273542e7144452697e3cbf4336e88f256735ba95effbc310244dbd0cd11f_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_df77580b534badf424a142719b4e52236a76bcdc9e3f192c783e10fbf1a11490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df77580b534badf424a142719b4e52236a76bcdc9e3f192c783e10fbf1a11490->enter($__internal_df77580b534badf424a142719b4e52236a76bcdc9e3f192c783e10fbf1a11490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_0bd2200611e65001e8a371e4dac028bbfb7bccf5c91af2689f2271912a899af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd2200611e65001e8a371e4dac028bbfb7bccf5c91af2689f2271912a899af1->enter($__internal_0bd2200611e65001e8a371e4dac028bbfb7bccf5c91af2689f2271912a899af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_0bd2200611e65001e8a371e4dac028bbfb7bccf5c91af2689f2271912a899af1->leave($__internal_0bd2200611e65001e8a371e4dac028bbfb7bccf5c91af2689f2271912a899af1_prof);

        
        $__internal_df77580b534badf424a142719b4e52236a76bcdc9e3f192c783e10fbf1a11490->leave($__internal_df77580b534badf424a142719b4e52236a76bcdc9e3f192c783e10fbf1a11490_prof);

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
