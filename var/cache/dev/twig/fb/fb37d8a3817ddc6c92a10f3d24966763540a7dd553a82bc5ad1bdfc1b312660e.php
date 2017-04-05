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
        $__internal_fd2d069c87ed99d2b32b7e0ef3d7d52519ff4606202fd7d039aaa4cddff71c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2d069c87ed99d2b32b7e0ef3d7d52519ff4606202fd7d039aaa4cddff71c71->enter($__internal_fd2d069c87ed99d2b32b7e0ef3d7d52519ff4606202fd7d039aaa4cddff71c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        $__internal_606da9d780d68e972c59d76df41352eddbe579bdbd36e7560d3c9269bd9ebb7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606da9d780d68e972c59d76df41352eddbe579bdbd36e7560d3c9269bd9ebb7d->enter($__internal_606da9d780d68e972c59d76df41352eddbe579bdbd36e7560d3c9269bd9ebb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_fd2d069c87ed99d2b32b7e0ef3d7d52519ff4606202fd7d039aaa4cddff71c71->leave($__internal_fd2d069c87ed99d2b32b7e0ef3d7d52519ff4606202fd7d039aaa4cddff71c71_prof);

        
        $__internal_606da9d780d68e972c59d76df41352eddbe579bdbd36e7560d3c9269bd9ebb7d->leave($__internal_606da9d780d68e972c59d76df41352eddbe579bdbd36e7560d3c9269bd9ebb7d_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_5b374e26461ef42304a8d68a997908a412b997906e4bb80edb3ff4dab6398a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b374e26461ef42304a8d68a997908a412b997906e4bb80edb3ff4dab6398a26->enter($__internal_5b374e26461ef42304a8d68a997908a412b997906e4bb80edb3ff4dab6398a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_be2dc3e6f007e73e251034f445ae7e626695aac812a757895a2ec8f5c9363c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2dc3e6f007e73e251034f445ae7e626695aac812a757895a2ec8f5c9363c77->enter($__internal_be2dc3e6f007e73e251034f445ae7e626695aac812a757895a2ec8f5c9363c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_be2dc3e6f007e73e251034f445ae7e626695aac812a757895a2ec8f5c9363c77->leave($__internal_be2dc3e6f007e73e251034f445ae7e626695aac812a757895a2ec8f5c9363c77_prof);

        
        $__internal_5b374e26461ef42304a8d68a997908a412b997906e4bb80edb3ff4dab6398a26->leave($__internal_5b374e26461ef42304a8d68a997908a412b997906e4bb80edb3ff4dab6398a26_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_bc4adb82ba8999179dd59c2d0aeb9898a369ff6abfddcb306c1e262e97530dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4adb82ba8999179dd59c2d0aeb9898a369ff6abfddcb306c1e262e97530dd3->enter($__internal_bc4adb82ba8999179dd59c2d0aeb9898a369ff6abfddcb306c1e262e97530dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_bb8df1e2c427e36fc3dca8c645c86333121ceb4b6ac39e47335ab7ad8163e0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8df1e2c427e36fc3dca8c645c86333121ceb4b6ac39e47335ab7ad8163e0d1->enter($__internal_bb8df1e2c427e36fc3dca8c645c86333121ceb4b6ac39e47335ab7ad8163e0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_bb8df1e2c427e36fc3dca8c645c86333121ceb4b6ac39e47335ab7ad8163e0d1->leave($__internal_bb8df1e2c427e36fc3dca8c645c86333121ceb4b6ac39e47335ab7ad8163e0d1_prof);

        
        $__internal_bc4adb82ba8999179dd59c2d0aeb9898a369ff6abfddcb306c1e262e97530dd3->leave($__internal_bc4adb82ba8999179dd59c2d0aeb9898a369ff6abfddcb306c1e262e97530dd3_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_9f2d1c971544c10732bbf34de1da694c747f4fddf880e057761cb31ba5792d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2d1c971544c10732bbf34de1da694c747f4fddf880e057761cb31ba5792d51->enter($__internal_9f2d1c971544c10732bbf34de1da694c747f4fddf880e057761cb31ba5792d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_1e9ff1ba7e0b6130be22f4432b496336b388dfe7cdd03518865d202e19e839ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9ff1ba7e0b6130be22f4432b496336b388dfe7cdd03518865d202e19e839ed->enter($__internal_1e9ff1ba7e0b6130be22f4432b496336b388dfe7cdd03518865d202e19e839ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_1e9ff1ba7e0b6130be22f4432b496336b388dfe7cdd03518865d202e19e839ed->leave($__internal_1e9ff1ba7e0b6130be22f4432b496336b388dfe7cdd03518865d202e19e839ed_prof);

        
        $__internal_9f2d1c971544c10732bbf34de1da694c747f4fddf880e057761cb31ba5792d51->leave($__internal_9f2d1c971544c10732bbf34de1da694c747f4fddf880e057761cb31ba5792d51_prof);

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
