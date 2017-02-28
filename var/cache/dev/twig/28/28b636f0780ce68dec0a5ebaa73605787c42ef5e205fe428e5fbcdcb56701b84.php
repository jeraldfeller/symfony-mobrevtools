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
        $__internal_93a14324dde89466507c19681ddc9bb56a18610bcdcb74fa8d4d25beb7b7536f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a14324dde89466507c19681ddc9bb56a18610bcdcb74fa8d4d25beb7b7536f->enter($__internal_93a14324dde89466507c19681ddc9bb56a18610bcdcb74fa8d4d25beb7b7536f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_802d5a81705643528308283a90a2ecc6ba33057f2713b9de2121fb07f76b08f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802d5a81705643528308283a90a2ecc6ba33057f2713b9de2121fb07f76b08f3->enter($__internal_802d5a81705643528308283a90a2ecc6ba33057f2713b9de2121fb07f76b08f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_93a14324dde89466507c19681ddc9bb56a18610bcdcb74fa8d4d25beb7b7536f->leave($__internal_93a14324dde89466507c19681ddc9bb56a18610bcdcb74fa8d4d25beb7b7536f_prof);

        
        $__internal_802d5a81705643528308283a90a2ecc6ba33057f2713b9de2121fb07f76b08f3->leave($__internal_802d5a81705643528308283a90a2ecc6ba33057f2713b9de2121fb07f76b08f3_prof);

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
