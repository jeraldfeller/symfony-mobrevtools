<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a9f338539ac3ea48cf9f9035fd41b9e1f8b30f31cba658f1b3b2ee51190c590f extends Twig_Template
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
        $__internal_19efae4c62fbe537943ff713f1377611fcf1c69199906db247a902405f9dcb88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19efae4c62fbe537943ff713f1377611fcf1c69199906db247a902405f9dcb88->enter($__internal_19efae4c62fbe537943ff713f1377611fcf1c69199906db247a902405f9dcb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_f9e7d5f53e64d2fe4752f9cbc2b2d910cd48a6373900c13014886e5d5426cdd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e7d5f53e64d2fe4752f9cbc2b2d910cd48a6373900c13014886e5d5426cdd4->enter($__internal_f9e7d5f53e64d2fe4752f9cbc2b2d910cd48a6373900c13014886e5d5426cdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_19efae4c62fbe537943ff713f1377611fcf1c69199906db247a902405f9dcb88->leave($__internal_19efae4c62fbe537943ff713f1377611fcf1c69199906db247a902405f9dcb88_prof);

        
        $__internal_f9e7d5f53e64d2fe4752f9cbc2b2d910cd48a6373900c13014886e5d5426cdd4->leave($__internal_f9e7d5f53e64d2fe4752f9cbc2b2d910cd48a6373900c13014886e5d5426cdd4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
