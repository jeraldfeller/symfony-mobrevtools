<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_fbdefb194f8c2305efd335e0e387e4f4ae526acd801fdf32de222e89b99109a5 extends Twig_Template
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
        $__internal_424df1eb06740ced1986c67115593b134e782d5b3ade70e3f3c11d7e955f55df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424df1eb06740ced1986c67115593b134e782d5b3ade70e3f3c11d7e955f55df->enter($__internal_424df1eb06740ced1986c67115593b134e782d5b3ade70e3f3c11d7e955f55df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_9aa6e163e32969e44fa28f4940b47c8c0cd36f8d4cbe9a0b46c8851c7289db6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa6e163e32969e44fa28f4940b47c8c0cd36f8d4cbe9a0b46c8851c7289db6d->enter($__internal_9aa6e163e32969e44fa28f4940b47c8c0cd36f8d4cbe9a0b46c8851c7289db6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_424df1eb06740ced1986c67115593b134e782d5b3ade70e3f3c11d7e955f55df->leave($__internal_424df1eb06740ced1986c67115593b134e782d5b3ade70e3f3c11d7e955f55df_prof);

        
        $__internal_9aa6e163e32969e44fa28f4940b47c8c0cd36f8d4cbe9a0b46c8851c7289db6d->leave($__internal_9aa6e163e32969e44fa28f4940b47c8c0cd36f8d4cbe9a0b46c8851c7289db6d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
