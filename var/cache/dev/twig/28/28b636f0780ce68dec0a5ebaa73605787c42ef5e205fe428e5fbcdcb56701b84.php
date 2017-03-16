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
        $__internal_49c62438c1818dc00f7702a681e875c203a32d9ad55d1453e7dac59cb85b2867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c62438c1818dc00f7702a681e875c203a32d9ad55d1453e7dac59cb85b2867->enter($__internal_49c62438c1818dc00f7702a681e875c203a32d9ad55d1453e7dac59cb85b2867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_4f25dd2feb1f5a231311ac6e955a9166a197dae559c72a7c811b0cdd40aa42a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f25dd2feb1f5a231311ac6e955a9166a197dae559c72a7c811b0cdd40aa42a4->enter($__internal_4f25dd2feb1f5a231311ac6e955a9166a197dae559c72a7c811b0cdd40aa42a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_49c62438c1818dc00f7702a681e875c203a32d9ad55d1453e7dac59cb85b2867->leave($__internal_49c62438c1818dc00f7702a681e875c203a32d9ad55d1453e7dac59cb85b2867_prof);

        
        $__internal_4f25dd2feb1f5a231311ac6e955a9166a197dae559c72a7c811b0cdd40aa42a4->leave($__internal_4f25dd2feb1f5a231311ac6e955a9166a197dae559c72a7c811b0cdd40aa42a4_prof);

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
