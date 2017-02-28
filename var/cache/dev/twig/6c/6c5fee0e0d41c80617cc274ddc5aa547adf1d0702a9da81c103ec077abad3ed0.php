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
        $__internal_44110747cd07968e7846a70bce53fd4ed91be9613c2a674435071be6c213292a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44110747cd07968e7846a70bce53fd4ed91be9613c2a674435071be6c213292a->enter($__internal_44110747cd07968e7846a70bce53fd4ed91be9613c2a674435071be6c213292a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_b70ce64368fd1dd2fbcaf57f46d1967fce1bdd3bc62fe1319d8198765c842bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70ce64368fd1dd2fbcaf57f46d1967fce1bdd3bc62fe1319d8198765c842bb6->enter($__internal_b70ce64368fd1dd2fbcaf57f46d1967fce1bdd3bc62fe1319d8198765c842bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_44110747cd07968e7846a70bce53fd4ed91be9613c2a674435071be6c213292a->leave($__internal_44110747cd07968e7846a70bce53fd4ed91be9613c2a674435071be6c213292a_prof);

        
        $__internal_b70ce64368fd1dd2fbcaf57f46d1967fce1bdd3bc62fe1319d8198765c842bb6->leave($__internal_b70ce64368fd1dd2fbcaf57f46d1967fce1bdd3bc62fe1319d8198765c842bb6_prof);

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
