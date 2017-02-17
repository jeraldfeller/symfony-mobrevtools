<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_64f254faad4dafb71132411fc15d137185cd0b2b288ac95586590c22a24148dd extends Twig_Template
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
        $__internal_97e525749653cde87701ef7786213684110e112a9e4c2b1fa6e9af076eada14a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e525749653cde87701ef7786213684110e112a9e4c2b1fa6e9af076eada14a->enter($__internal_97e525749653cde87701ef7786213684110e112a9e4c2b1fa6e9af076eada14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_27f3e9d19dbd9211608d3c5d8762bd2903aa045bf55f61c66b4e7bb19d42140e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f3e9d19dbd9211608d3c5d8762bd2903aa045bf55f61c66b4e7bb19d42140e->enter($__internal_27f3e9d19dbd9211608d3c5d8762bd2903aa045bf55f61c66b4e7bb19d42140e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_97e525749653cde87701ef7786213684110e112a9e4c2b1fa6e9af076eada14a->leave($__internal_97e525749653cde87701ef7786213684110e112a9e4c2b1fa6e9af076eada14a_prof);

        
        $__internal_27f3e9d19dbd9211608d3c5d8762bd2903aa045bf55f61c66b4e7bb19d42140e->leave($__internal_27f3e9d19dbd9211608d3c5d8762bd2903aa045bf55f61c66b4e7bb19d42140e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
