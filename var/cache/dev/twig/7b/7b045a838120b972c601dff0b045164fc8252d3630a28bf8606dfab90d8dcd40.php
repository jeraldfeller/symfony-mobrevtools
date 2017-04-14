<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2d481a650911b2bcff592189240468d538b8d95c9771da246eb06edeaf5acea5 extends Twig_Template
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
        $__internal_27991b1b68807e8f0512697ed1e5bae440a36d16977d6bcd81fa0fe83edcd18c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27991b1b68807e8f0512697ed1e5bae440a36d16977d6bcd81fa0fe83edcd18c->enter($__internal_27991b1b68807e8f0512697ed1e5bae440a36d16977d6bcd81fa0fe83edcd18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_fdeafbdd36333334283c22757e3961b334340b21175e7e5329424bceb1a576cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdeafbdd36333334283c22757e3961b334340b21175e7e5329424bceb1a576cf->enter($__internal_fdeafbdd36333334283c22757e3961b334340b21175e7e5329424bceb1a576cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_27991b1b68807e8f0512697ed1e5bae440a36d16977d6bcd81fa0fe83edcd18c->leave($__internal_27991b1b68807e8f0512697ed1e5bae440a36d16977d6bcd81fa0fe83edcd18c_prof);

        
        $__internal_fdeafbdd36333334283c22757e3961b334340b21175e7e5329424bceb1a576cf->leave($__internal_fdeafbdd36333334283c22757e3961b334340b21175e7e5329424bceb1a576cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
