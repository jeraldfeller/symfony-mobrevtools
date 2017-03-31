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
        $__internal_6e526b388468ef79cbab4b3e06e220f63a993820ae240b4bb73d68919a51f25e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e526b388468ef79cbab4b3e06e220f63a993820ae240b4bb73d68919a51f25e->enter($__internal_6e526b388468ef79cbab4b3e06e220f63a993820ae240b4bb73d68919a51f25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        $__internal_bd7bac4540c90b1cf10010ef03e2dfbdcaa4e9b0706647135514e9b804082011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7bac4540c90b1cf10010ef03e2dfbdcaa4e9b0706647135514e9b804082011->enter($__internal_bd7bac4540c90b1cf10010ef03e2dfbdcaa4e9b0706647135514e9b804082011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_6e526b388468ef79cbab4b3e06e220f63a993820ae240b4bb73d68919a51f25e->leave($__internal_6e526b388468ef79cbab4b3e06e220f63a993820ae240b4bb73d68919a51f25e_prof);

        
        $__internal_bd7bac4540c90b1cf10010ef03e2dfbdcaa4e9b0706647135514e9b804082011->leave($__internal_bd7bac4540c90b1cf10010ef03e2dfbdcaa4e9b0706647135514e9b804082011_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_a144cfbd28ab42efeb2a35a16faa4ae5aaa547a9d8b4571aba4e839d08102841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a144cfbd28ab42efeb2a35a16faa4ae5aaa547a9d8b4571aba4e839d08102841->enter($__internal_a144cfbd28ab42efeb2a35a16faa4ae5aaa547a9d8b4571aba4e839d08102841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_99c3bdef12ab792d878f04db9cb98079aa39a3697f7f8a91a685f76e249fd54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c3bdef12ab792d878f04db9cb98079aa39a3697f7f8a91a685f76e249fd54a->enter($__internal_99c3bdef12ab792d878f04db9cb98079aa39a3697f7f8a91a685f76e249fd54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_99c3bdef12ab792d878f04db9cb98079aa39a3697f7f8a91a685f76e249fd54a->leave($__internal_99c3bdef12ab792d878f04db9cb98079aa39a3697f7f8a91a685f76e249fd54a_prof);

        
        $__internal_a144cfbd28ab42efeb2a35a16faa4ae5aaa547a9d8b4571aba4e839d08102841->leave($__internal_a144cfbd28ab42efeb2a35a16faa4ae5aaa547a9d8b4571aba4e839d08102841_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_22f812b6a48ff915bf43bd19c7b15cbb81f09620f71b7b5eb1dffb5183201bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f812b6a48ff915bf43bd19c7b15cbb81f09620f71b7b5eb1dffb5183201bf0->enter($__internal_22f812b6a48ff915bf43bd19c7b15cbb81f09620f71b7b5eb1dffb5183201bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_be69c80a4ce2d3cc7f3683de3561363631d5c99efc5121d4ac17c44adb010598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be69c80a4ce2d3cc7f3683de3561363631d5c99efc5121d4ac17c44adb010598->enter($__internal_be69c80a4ce2d3cc7f3683de3561363631d5c99efc5121d4ac17c44adb010598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_be69c80a4ce2d3cc7f3683de3561363631d5c99efc5121d4ac17c44adb010598->leave($__internal_be69c80a4ce2d3cc7f3683de3561363631d5c99efc5121d4ac17c44adb010598_prof);

        
        $__internal_22f812b6a48ff915bf43bd19c7b15cbb81f09620f71b7b5eb1dffb5183201bf0->leave($__internal_22f812b6a48ff915bf43bd19c7b15cbb81f09620f71b7b5eb1dffb5183201bf0_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_7a1083f4745f1ac99381dd85a13f0fa7fdf86057888eef548b00477d6fe79cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1083f4745f1ac99381dd85a13f0fa7fdf86057888eef548b00477d6fe79cc1->enter($__internal_7a1083f4745f1ac99381dd85a13f0fa7fdf86057888eef548b00477d6fe79cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_e56d17bbe0da3abc113232933ceff07fee73e8fdac993544c7ebcf63d9f0e473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56d17bbe0da3abc113232933ceff07fee73e8fdac993544c7ebcf63d9f0e473->enter($__internal_e56d17bbe0da3abc113232933ceff07fee73e8fdac993544c7ebcf63d9f0e473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_e56d17bbe0da3abc113232933ceff07fee73e8fdac993544c7ebcf63d9f0e473->leave($__internal_e56d17bbe0da3abc113232933ceff07fee73e8fdac993544c7ebcf63d9f0e473_prof);

        
        $__internal_7a1083f4745f1ac99381dd85a13f0fa7fdf86057888eef548b00477d6fe79cc1->leave($__internal_7a1083f4745f1ac99381dd85a13f0fa7fdf86057888eef548b00477d6fe79cc1_prof);

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
