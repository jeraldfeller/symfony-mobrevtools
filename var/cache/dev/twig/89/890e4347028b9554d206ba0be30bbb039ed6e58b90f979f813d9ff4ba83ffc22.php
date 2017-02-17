<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_f544f412f143d9c4dc7ec46d19891d06889329c7b23ede88ea98486e55801520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_445f0687e3beb93a26dde319aa897677a0c5d09ca669324e04ea626a65ff16be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445f0687e3beb93a26dde319aa897677a0c5d09ca669324e04ea626a65ff16be->enter($__internal_445f0687e3beb93a26dde319aa897677a0c5d09ca669324e04ea626a65ff16be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_97cce74e37513026cd24d958220e4d4a3217501d3e92c64373d155d1a7ce4bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97cce74e37513026cd24d958220e4d4a3217501d3e92c64373d155d1a7ce4bde->enter($__internal_97cce74e37513026cd24d958220e4d4a3217501d3e92c64373d155d1a7ce4bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_445f0687e3beb93a26dde319aa897677a0c5d09ca669324e04ea626a65ff16be->leave($__internal_445f0687e3beb93a26dde319aa897677a0c5d09ca669324e04ea626a65ff16be_prof);

        
        $__internal_97cce74e37513026cd24d958220e4d4a3217501d3e92c64373d155d1a7ce4bde->leave($__internal_97cce74e37513026cd24d958220e4d4a3217501d3e92c64373d155d1a7ce4bde_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
