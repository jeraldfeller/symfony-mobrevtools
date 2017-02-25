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
        $__internal_267e81ea148227daa6cb6039efd58d70e9ff7d6924b59bb4b7c22157ae2b19c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267e81ea148227daa6cb6039efd58d70e9ff7d6924b59bb4b7c22157ae2b19c1->enter($__internal_267e81ea148227daa6cb6039efd58d70e9ff7d6924b59bb4b7c22157ae2b19c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        $__internal_60a9eecafdfd8a784b5c631c5e8e9c2b6ea8e4e0d540511a351cf1c49a02ad7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a9eecafdfd8a784b5c631c5e8e9c2b6ea8e4e0d540511a351cf1c49a02ad7a->enter($__internal_60a9eecafdfd8a784b5c631c5e8e9c2b6ea8e4e0d540511a351cf1c49a02ad7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:Datatable:datatable.html.twig"));

        // line 9
        $this->displayBlock('sg_datatable', $context, $blocks);
        
        $__internal_267e81ea148227daa6cb6039efd58d70e9ff7d6924b59bb4b7c22157ae2b19c1->leave($__internal_267e81ea148227daa6cb6039efd58d70e9ff7d6924b59bb4b7c22157ae2b19c1_prof);

        
        $__internal_60a9eecafdfd8a784b5c631c5e8e9c2b6ea8e4e0d540511a351cf1c49a02ad7a->leave($__internal_60a9eecafdfd8a784b5c631c5e8e9c2b6ea8e4e0d540511a351cf1c49a02ad7a_prof);

    }

    public function block_sg_datatable($context, array $blocks = array())
    {
        $__internal_2a07091f490099e544f57812f7f26e619439944017b77a07eb480ccbb7578b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a07091f490099e544f57812f7f26e619439944017b77a07eb480ccbb7578b77->enter($__internal_2a07091f490099e544f57812f7f26e619439944017b77a07eb480ccbb7578b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

        $__internal_229401b095748ffd4bdf52a3757e4d506b12334be91e45d0ce5e0c9e91baf8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229401b095748ffd4bdf52a3757e4d506b12334be91e45d0ce5e0c9e91baf8d0->enter($__internal_229401b095748ffd4bdf52a3757e4d506b12334be91e45d0ce5e0c9e91baf8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable"));

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
        
        $__internal_229401b095748ffd4bdf52a3757e4d506b12334be91e45d0ce5e0c9e91baf8d0->leave($__internal_229401b095748ffd4bdf52a3757e4d506b12334be91e45d0ce5e0c9e91baf8d0_prof);

        
        $__internal_2a07091f490099e544f57812f7f26e619439944017b77a07eb480ccbb7578b77->leave($__internal_2a07091f490099e544f57812f7f26e619439944017b77a07eb480ccbb7578b77_prof);

    }

    // line 11
    public function block_sg_datatable_html($context, array $blocks = array())
    {
        $__internal_8df98a6313347c6a2426b3779ad0057ec6218066110fe86b85511a6dc975f2b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df98a6313347c6a2426b3779ad0057ec6218066110fe86b85511a6dc975f2b6->enter($__internal_8df98a6313347c6a2426b3779ad0057ec6218066110fe86b85511a6dc975f2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        $__internal_42fdf7e4bf3f955d4020e685cf994aca62a046cc41fd21fac5c89d711f4bc89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42fdf7e4bf3f955d4020e685cf994aca62a046cc41fd21fac5c89d711f4bc89b->enter($__internal_42fdf7e4bf3f955d4020e685cf994aca62a046cc41fd21fac5c89d711f4bc89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_html"));

        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_html.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 13)->display($context);
        // line 14
        echo "
    ";
        
        $__internal_42fdf7e4bf3f955d4020e685cf994aca62a046cc41fd21fac5c89d711f4bc89b->leave($__internal_42fdf7e4bf3f955d4020e685cf994aca62a046cc41fd21fac5c89d711f4bc89b_prof);

        
        $__internal_8df98a6313347c6a2426b3779ad0057ec6218066110fe86b85511a6dc975f2b6->leave($__internal_8df98a6313347c6a2426b3779ad0057ec6218066110fe86b85511a6dc975f2b6_prof);

    }

    // line 17
    public function block_sg_datatable_js($context, array $blocks = array())
    {
        $__internal_d9a1e9f7607d49b48c9515451391804483b63a4e8b3dade3bdf0b82a5bad8405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a1e9f7607d49b48c9515451391804483b63a4e8b3dade3bdf0b82a5bad8405->enter($__internal_d9a1e9f7607d49b48c9515451391804483b63a4e8b3dade3bdf0b82a5bad8405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        $__internal_433f1945b7980fd939821130142c7135ec98452cfe11d1e887b4df4442289c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433f1945b7980fd939821130142c7135ec98452cfe11d1e887b4df4442289c18->enter($__internal_433f1945b7980fd939821130142c7135ec98452cfe11d1e887b4df4442289c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sg_datatable_js"));

        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("SgDatatablesBundle:Datatable:datatable_js.html.twig", "SgDatatablesBundle:Datatable:datatable.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        
        $__internal_433f1945b7980fd939821130142c7135ec98452cfe11d1e887b4df4442289c18->leave($__internal_433f1945b7980fd939821130142c7135ec98452cfe11d1e887b4df4442289c18_prof);

        
        $__internal_d9a1e9f7607d49b48c9515451391804483b63a4e8b3dade3bdf0b82a5bad8405->leave($__internal_d9a1e9f7607d49b48c9515451391804483b63a4e8b3dade3bdf0b82a5bad8405_prof);

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
