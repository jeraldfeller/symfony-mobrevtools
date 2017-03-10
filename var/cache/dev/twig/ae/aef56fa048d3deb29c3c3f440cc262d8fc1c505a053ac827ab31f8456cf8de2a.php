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
        $__internal_1df374f33b0a5615df80f5c3e445e11238456b36503534ad513b913108f3a3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df374f33b0a5615df80f5c3e445e11238456b36503534ad513b913108f3a3ba->enter($__internal_1df374f33b0a5615df80f5c3e445e11238456b36503534ad513b913108f3a3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        $__internal_e7f8a5e83bdc941e50fdfb11e549a7034b2a7c73c06898aab63ff026f5433670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f8a5e83bdc941e50fdfb11e549a7034b2a7c73c06898aab63ff026f5433670->enter($__internal_e7f8a5e83bdc941e50fdfb11e549a7034b2a7c73c06898aab63ff026f5433670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/Datatable/datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_1df374f33b0a5615df80f5c3e445e11238456b36503534ad513b913108f3a3ba->leave($__internal_1df374f33b0a5615df80f5c3e445e11238456b36503534ad513b913108f3a3ba_prof);

        
        $__internal_e7f8a5e83bdc941e50fdfb11e549a7034b2a7c73c06898aab63ff026f5433670->leave($__internal_e7f8a5e83bdc941e50fdfb11e549a7034b2a7c73c06898aab63ff026f5433670_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_0372a61d74d2bb5a44f2e2745f610b12da58f11fefd68241067e9b1e1876821b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0372a61d74d2bb5a44f2e2745f610b12da58f11fefd68241067e9b1e1876821b->enter($__internal_0372a61d74d2bb5a44f2e2745f610b12da58f11fefd68241067e9b1e1876821b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_e065b3f61471006db28daefc6e71e87adacd506776a9b4b64a23ae6871a4f4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e065b3f61471006db28daefc6e71e87adacd506776a9b4b64a23ae6871a4f4d1->enter($__internal_e065b3f61471006db28daefc6e71e87adacd506776a9b4b64a23ae6871a4f4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_e065b3f61471006db28daefc6e71e87adacd506776a9b4b64a23ae6871a4f4d1->leave($__internal_e065b3f61471006db28daefc6e71e87adacd506776a9b4b64a23ae6871a4f4d1_prof);

        
        $__internal_0372a61d74d2bb5a44f2e2745f610b12da58f11fefd68241067e9b1e1876821b->leave($__internal_0372a61d74d2bb5a44f2e2745f610b12da58f11fefd68241067e9b1e1876821b_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_489d472eb02136386deafc3efaefc3313bdd7cb7e5aca1d6c3ef1b7410d916b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489d472eb02136386deafc3efaefc3313bdd7cb7e5aca1d6c3ef1b7410d916b4->enter($__internal_489d472eb02136386deafc3efaefc3313bdd7cb7e5aca1d6c3ef1b7410d916b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_d495e8a166deb50376b79d979489677822295b7b3f8badb9fd6cfe61543496b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d495e8a166deb50376b79d979489677822295b7b3f8badb9fd6cfe61543496b7->enter($__internal_d495e8a166deb50376b79d979489677822295b7b3f8badb9fd6cfe61543496b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_d495e8a166deb50376b79d979489677822295b7b3f8badb9fd6cfe61543496b7->leave($__internal_d495e8a166deb50376b79d979489677822295b7b3f8badb9fd6cfe61543496b7_prof);

        
        $__internal_489d472eb02136386deafc3efaefc3313bdd7cb7e5aca1d6c3ef1b7410d916b4->leave($__internal_489d472eb02136386deafc3efaefc3313bdd7cb7e5aca1d6c3ef1b7410d916b4_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_33d178507f477f8fe4fa6e691a1e04fd8f93d8c85dc386d9dc68753c2c41319d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d178507f477f8fe4fa6e691a1e04fd8f93d8c85dc386d9dc68753c2c41319d->enter($__internal_33d178507f477f8fe4fa6e691a1e04fd8f93d8c85dc386d9dc68753c2c41319d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_435e1cc0e1abdda4f42332ec790ee8e729b6efcc3188bb030ed9f377a5c200ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435e1cc0e1abdda4f42332ec790ee8e729b6efcc3188bb030ed9f377a5c200ae->enter($__internal_435e1cc0e1abdda4f42332ec790ee8e729b6efcc3188bb030ed9f377a5c200ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "@SgDatatables/Datatable/datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_435e1cc0e1abdda4f42332ec790ee8e729b6efcc3188bb030ed9f377a5c200ae->leave($__internal_435e1cc0e1abdda4f42332ec790ee8e729b6efcc3188bb030ed9f377a5c200ae_prof);

        
        $__internal_33d178507f477f8fe4fa6e691a1e04fd8f93d8c85dc386d9dc68753c2c41319d->leave($__internal_33d178507f477f8fe4fa6e691a1e04fd8f93d8c85dc386d9dc68753c2c41319d_prof);

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
