<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_af5aa7b23cf43e00858890d5c81df63821c55bb99833b464116cf0360424cded extends Twig_Template
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
        $__internal_731e47b5583fca7b6a385fa46a08e514f8d2a9c9b81f9a2da79e647e67e623f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731e47b5583fca7b6a385fa46a08e514f8d2a9c9b81f9a2da79e647e67e623f1->enter($__internal_731e47b5583fca7b6a385fa46a08e514f8d2a9c9b81f9a2da79e647e67e623f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_2b96e1729691f868686aa298fce41247b612ed010e8b3165fd191f4f25f45583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b96e1729691f868686aa298fce41247b612ed010e8b3165fd191f4f25f45583->enter($__internal_2b96e1729691f868686aa298fce41247b612ed010e8b3165fd191f4f25f45583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_731e47b5583fca7b6a385fa46a08e514f8d2a9c9b81f9a2da79e647e67e623f1->leave($__internal_731e47b5583fca7b6a385fa46a08e514f8d2a9c9b81f9a2da79e647e67e623f1_prof);

        
        $__internal_2b96e1729691f868686aa298fce41247b612ed010e8b3165fd191f4f25f45583->leave($__internal_2b96e1729691f868686aa298fce41247b612ed010e8b3165fd191f4f25f45583_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
