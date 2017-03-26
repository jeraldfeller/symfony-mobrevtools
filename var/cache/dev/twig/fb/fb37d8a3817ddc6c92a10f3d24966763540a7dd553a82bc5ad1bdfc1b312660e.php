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
        $__internal_a73bbfc8209cb553227a9d203a00968de82e108974df00409d81ba1486200fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73bbfc8209cb553227a9d203a00968de82e108974df00409d81ba1486200fb9->enter($__internal_a73bbfc8209cb553227a9d203a00968de82e108974df00409d81ba1486200fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        $__internal_7363b2b5bbf6842d0bd4622737b10d75c74cb8ffb6ebe9a85354b98c10da42f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7363b2b5bbf6842d0bd4622737b10d75c74cb8ffb6ebe9a85354b98c10da42f3->enter($__internal_7363b2b5bbf6842d0bd4622737b10d75c74cb8ffb6ebe9a85354b98c10da42f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_a73bbfc8209cb553227a9d203a00968de82e108974df00409d81ba1486200fb9->leave($__internal_a73bbfc8209cb553227a9d203a00968de82e108974df00409d81ba1486200fb9_prof);

        
        $__internal_7363b2b5bbf6842d0bd4622737b10d75c74cb8ffb6ebe9a85354b98c10da42f3->leave($__internal_7363b2b5bbf6842d0bd4622737b10d75c74cb8ffb6ebe9a85354b98c10da42f3_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_98465faa97b90451ad52c9c6e3f2963ecd4a79901b7f1cf76f2e876b07903da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98465faa97b90451ad52c9c6e3f2963ecd4a79901b7f1cf76f2e876b07903da7->enter($__internal_98465faa97b90451ad52c9c6e3f2963ecd4a79901b7f1cf76f2e876b07903da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_20d910727b56af1df12c843479a049508e9fb3175a817a2a86ac3d200526feca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d910727b56af1df12c843479a049508e9fb3175a817a2a86ac3d200526feca->enter($__internal_20d910727b56af1df12c843479a049508e9fb3175a817a2a86ac3d200526feca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_20d910727b56af1df12c843479a049508e9fb3175a817a2a86ac3d200526feca->leave($__internal_20d910727b56af1df12c843479a049508e9fb3175a817a2a86ac3d200526feca_prof);

        
        $__internal_98465faa97b90451ad52c9c6e3f2963ecd4a79901b7f1cf76f2e876b07903da7->leave($__internal_98465faa97b90451ad52c9c6e3f2963ecd4a79901b7f1cf76f2e876b07903da7_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_46c0d5e0646e7cdcc987ecaaaa52f3a0040068ad873a38e33def4b66c42d1f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c0d5e0646e7cdcc987ecaaaa52f3a0040068ad873a38e33def4b66c42d1f91->enter($__internal_46c0d5e0646e7cdcc987ecaaaa52f3a0040068ad873a38e33def4b66c42d1f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_5b582425b5243a46debc9e8e88006bcc7111a4fe61d20692d0866b41c7afff16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b582425b5243a46debc9e8e88006bcc7111a4fe61d20692d0866b41c7afff16->enter($__internal_5b582425b5243a46debc9e8e88006bcc7111a4fe61d20692d0866b41c7afff16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_5b582425b5243a46debc9e8e88006bcc7111a4fe61d20692d0866b41c7afff16->leave($__internal_5b582425b5243a46debc9e8e88006bcc7111a4fe61d20692d0866b41c7afff16_prof);

        
        $__internal_46c0d5e0646e7cdcc987ecaaaa52f3a0040068ad873a38e33def4b66c42d1f91->leave($__internal_46c0d5e0646e7cdcc987ecaaaa52f3a0040068ad873a38e33def4b66c42d1f91_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_ae4212d7fd657f1199f096e0face81eb8102f52afe6ab210abc89faac0fbfb0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4212d7fd657f1199f096e0face81eb8102f52afe6ab210abc89faac0fbfb0f->enter($__internal_ae4212d7fd657f1199f096e0face81eb8102f52afe6ab210abc89faac0fbfb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_9da354f3e80ce2fed353b7cfb564da13066fb3074d3b11f69fee13a3c0762ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da354f3e80ce2fed353b7cfb564da13066fb3074d3b11f69fee13a3c0762ab5->enter($__internal_9da354f3e80ce2fed353b7cfb564da13066fb3074d3b11f69fee13a3c0762ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_9da354f3e80ce2fed353b7cfb564da13066fb3074d3b11f69fee13a3c0762ab5->leave($__internal_9da354f3e80ce2fed353b7cfb564da13066fb3074d3b11f69fee13a3c0762ab5_prof);

        
        $__internal_ae4212d7fd657f1199f096e0face81eb8102f52afe6ab210abc89faac0fbfb0f->leave($__internal_ae4212d7fd657f1199f096e0face81eb8102f52afe6ab210abc89faac0fbfb0f_prof);

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
