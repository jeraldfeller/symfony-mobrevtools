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
        $__internal_a834454bd342c9d81d8954177fc5cce7b14ecab3403a8b5f4545fd9a34f26f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a834454bd342c9d81d8954177fc5cce7b14ecab3403a8b5f4545fd9a34f26f16->enter($__internal_a834454bd342c9d81d8954177fc5cce7b14ecab3403a8b5f4545fd9a34f26f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        $__internal_d381e8cb6ff8a8b1dcae9a2c1f9d34313fb511a5af6c6a2c65639c74a9fe1061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d381e8cb6ff8a8b1dcae9a2c1f9d34313fb511a5af6c6a2c65639c74a9fe1061->enter($__internal_d381e8cb6ff8a8b1dcae9a2c1f9d34313fb511a5af6c6a2c65639c74a9fe1061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_a834454bd342c9d81d8954177fc5cce7b14ecab3403a8b5f4545fd9a34f26f16->leave($__internal_a834454bd342c9d81d8954177fc5cce7b14ecab3403a8b5f4545fd9a34f26f16_prof);

        
        $__internal_d381e8cb6ff8a8b1dcae9a2c1f9d34313fb511a5af6c6a2c65639c74a9fe1061->leave($__internal_d381e8cb6ff8a8b1dcae9a2c1f9d34313fb511a5af6c6a2c65639c74a9fe1061_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_47886de03c19e43656fba31baecec5095af5650ddb33b936bb8781aee4948291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47886de03c19e43656fba31baecec5095af5650ddb33b936bb8781aee4948291->enter($__internal_47886de03c19e43656fba31baecec5095af5650ddb33b936bb8781aee4948291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_451ad02a0cfff76794f40cf9dbfd1c842a005a945df7aac7e24abae6acac4544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451ad02a0cfff76794f40cf9dbfd1c842a005a945df7aac7e24abae6acac4544->enter($__internal_451ad02a0cfff76794f40cf9dbfd1c842a005a945df7aac7e24abae6acac4544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_451ad02a0cfff76794f40cf9dbfd1c842a005a945df7aac7e24abae6acac4544->leave($__internal_451ad02a0cfff76794f40cf9dbfd1c842a005a945df7aac7e24abae6acac4544_prof);

        
        $__internal_47886de03c19e43656fba31baecec5095af5650ddb33b936bb8781aee4948291->leave($__internal_47886de03c19e43656fba31baecec5095af5650ddb33b936bb8781aee4948291_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_eab14c344386b54da940e42030af4da8cfccb11fec7fcf7da1044b908135159a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab14c344386b54da940e42030af4da8cfccb11fec7fcf7da1044b908135159a->enter($__internal_eab14c344386b54da940e42030af4da8cfccb11fec7fcf7da1044b908135159a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_a9b1211514996f65d4be6a318fcd0f40f2871ebbfe875d81319488a6590cad04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b1211514996f65d4be6a318fcd0f40f2871ebbfe875d81319488a6590cad04->enter($__internal_a9b1211514996f65d4be6a318fcd0f40f2871ebbfe875d81319488a6590cad04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_a9b1211514996f65d4be6a318fcd0f40f2871ebbfe875d81319488a6590cad04->leave($__internal_a9b1211514996f65d4be6a318fcd0f40f2871ebbfe875d81319488a6590cad04_prof);

        
        $__internal_eab14c344386b54da940e42030af4da8cfccb11fec7fcf7da1044b908135159a->leave($__internal_eab14c344386b54da940e42030af4da8cfccb11fec7fcf7da1044b908135159a_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_73da4a5c6af961849e65c322c1b687a7a02d88ff709fd6e4c16abf17f1b43f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73da4a5c6af961849e65c322c1b687a7a02d88ff709fd6e4c16abf17f1b43f59->enter($__internal_73da4a5c6af961849e65c322c1b687a7a02d88ff709fd6e4c16abf17f1b43f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_8602b22d48aca05b61aa063cfef2537547b58b98384040eda063f62f7e153b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8602b22d48aca05b61aa063cfef2537547b58b98384040eda063f62f7e153b4e->enter($__internal_8602b22d48aca05b61aa063cfef2537547b58b98384040eda063f62f7e153b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_8602b22d48aca05b61aa063cfef2537547b58b98384040eda063f62f7e153b4e->leave($__internal_8602b22d48aca05b61aa063cfef2537547b58b98384040eda063f62f7e153b4e_prof);

        
        $__internal_73da4a5c6af961849e65c322c1b687a7a02d88ff709fd6e4c16abf17f1b43f59->leave($__internal_73da4a5c6af961849e65c322c1b687a7a02d88ff709fd6e4c16abf17f1b43f59_prof);

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
