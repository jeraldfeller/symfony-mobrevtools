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
        $__internal_8e42faeb0f3e1eaa36e5fbef051a6c249109867f6d91851dd276ed3a65041407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e42faeb0f3e1eaa36e5fbef051a6c249109867f6d91851dd276ed3a65041407->enter($__internal_8e42faeb0f3e1eaa36e5fbef051a6c249109867f6d91851dd276ed3a65041407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        $__internal_41d75330439d6334e19075a338bc92747f365e8e5b6cb933c6127c627381f691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d75330439d6334e19075a338bc92747f365e8e5b6cb933c6127c627381f691->enter($__internal_41d75330439d6334e19075a338bc92747f365e8e5b6cb933c6127c627381f691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_8e42faeb0f3e1eaa36e5fbef051a6c249109867f6d91851dd276ed3a65041407->leave($__internal_8e42faeb0f3e1eaa36e5fbef051a6c249109867f6d91851dd276ed3a65041407_prof);

        
        $__internal_41d75330439d6334e19075a338bc92747f365e8e5b6cb933c6127c627381f691->leave($__internal_41d75330439d6334e19075a338bc92747f365e8e5b6cb933c6127c627381f691_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_81453c0f6d9f05366e6b5a407e11acea4b6ebd7551b324eb4287ba0eeb9c8b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81453c0f6d9f05366e6b5a407e11acea4b6ebd7551b324eb4287ba0eeb9c8b86->enter($__internal_81453c0f6d9f05366e6b5a407e11acea4b6ebd7551b324eb4287ba0eeb9c8b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_55ce7b96baebb84201722ba0d3b38b0daf0411be0f7bca936dc7aad408b67aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ce7b96baebb84201722ba0d3b38b0daf0411be0f7bca936dc7aad408b67aaf->enter($__internal_55ce7b96baebb84201722ba0d3b38b0daf0411be0f7bca936dc7aad408b67aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_55ce7b96baebb84201722ba0d3b38b0daf0411be0f7bca936dc7aad408b67aaf->leave($__internal_55ce7b96baebb84201722ba0d3b38b0daf0411be0f7bca936dc7aad408b67aaf_prof);

        
        $__internal_81453c0f6d9f05366e6b5a407e11acea4b6ebd7551b324eb4287ba0eeb9c8b86->leave($__internal_81453c0f6d9f05366e6b5a407e11acea4b6ebd7551b324eb4287ba0eeb9c8b86_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_054ea0bf261579da135219763173b8084e5ae311267f0c91117a1242f6ec9add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054ea0bf261579da135219763173b8084e5ae311267f0c91117a1242f6ec9add->enter($__internal_054ea0bf261579da135219763173b8084e5ae311267f0c91117a1242f6ec9add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_b504c2b8e5acc7614a98bf673639294cb1acc797e332711f53a7e144b99e4c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b504c2b8e5acc7614a98bf673639294cb1acc797e332711f53a7e144b99e4c76->enter($__internal_b504c2b8e5acc7614a98bf673639294cb1acc797e332711f53a7e144b99e4c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_b504c2b8e5acc7614a98bf673639294cb1acc797e332711f53a7e144b99e4c76->leave($__internal_b504c2b8e5acc7614a98bf673639294cb1acc797e332711f53a7e144b99e4c76_prof);

        
        $__internal_054ea0bf261579da135219763173b8084e5ae311267f0c91117a1242f6ec9add->leave($__internal_054ea0bf261579da135219763173b8084e5ae311267f0c91117a1242f6ec9add_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_640cfe8ba4d0199a646383d363a02607f96f33c5a231e30f283d281505d837b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640cfe8ba4d0199a646383d363a02607f96f33c5a231e30f283d281505d837b9->enter($__internal_640cfe8ba4d0199a646383d363a02607f96f33c5a231e30f283d281505d837b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_c16c07cf210ce07656f48fd4d2f575c87cc54c9b6824bd81f032b5feaf3ef54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16c07cf210ce07656f48fd4d2f575c87cc54c9b6824bd81f032b5feaf3ef54b->enter($__internal_c16c07cf210ce07656f48fd4d2f575c87cc54c9b6824bd81f032b5feaf3ef54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_c16c07cf210ce07656f48fd4d2f575c87cc54c9b6824bd81f032b5feaf3ef54b->leave($__internal_c16c07cf210ce07656f48fd4d2f575c87cc54c9b6824bd81f032b5feaf3ef54b_prof);

        
        $__internal_640cfe8ba4d0199a646383d363a02607f96f33c5a231e30f283d281505d837b9->leave($__internal_640cfe8ba4d0199a646383d363a02607f96f33c5a231e30f283d281505d837b9_prof);

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
