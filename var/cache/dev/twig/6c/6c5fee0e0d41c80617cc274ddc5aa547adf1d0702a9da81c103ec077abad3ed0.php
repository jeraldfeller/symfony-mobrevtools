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
        $__internal_fe8a06f1b659c5663fe3184af4c0c329c50607cff88b6f1344b4ba45166610d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8a06f1b659c5663fe3184af4c0c329c50607cff88b6f1344b4ba45166610d6->enter($__internal_fe8a06f1b659c5663fe3184af4c0c329c50607cff88b6f1344b4ba45166610d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_813248378f9418ddc9777d62ab736ccdc290029a08bd9550f24b9f81c4e335f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813248378f9418ddc9777d62ab736ccdc290029a08bd9550f24b9f81c4e335f3->enter($__internal_813248378f9418ddc9777d62ab736ccdc290029a08bd9550f24b9f81c4e335f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_fe8a06f1b659c5663fe3184af4c0c329c50607cff88b6f1344b4ba45166610d6->leave($__internal_fe8a06f1b659c5663fe3184af4c0c329c50607cff88b6f1344b4ba45166610d6_prof);

        
        $__internal_813248378f9418ddc9777d62ab736ccdc290029a08bd9550f24b9f81c4e335f3->leave($__internal_813248378f9418ddc9777d62ab736ccdc290029a08bd9550f24b9f81c4e335f3_prof);

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
