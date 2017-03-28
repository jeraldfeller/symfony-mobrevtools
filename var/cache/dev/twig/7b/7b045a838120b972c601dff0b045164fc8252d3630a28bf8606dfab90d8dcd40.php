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
        $__internal_e002e0182316d7d8192854fa3e96a56676f84bb056ce6bbe7ab7a03a922ecc77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e002e0182316d7d8192854fa3e96a56676f84bb056ce6bbe7ab7a03a922ecc77->enter($__internal_e002e0182316d7d8192854fa3e96a56676f84bb056ce6bbe7ab7a03a922ecc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_50ea437b3890f86d1450110d363f11381f8d10c1cb7eb67e90fb2ecd19669b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ea437b3890f86d1450110d363f11381f8d10c1cb7eb67e90fb2ecd19669b86->enter($__internal_50ea437b3890f86d1450110d363f11381f8d10c1cb7eb67e90fb2ecd19669b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e002e0182316d7d8192854fa3e96a56676f84bb056ce6bbe7ab7a03a922ecc77->leave($__internal_e002e0182316d7d8192854fa3e96a56676f84bb056ce6bbe7ab7a03a922ecc77_prof);

        
        $__internal_50ea437b3890f86d1450110d363f11381f8d10c1cb7eb67e90fb2ecd19669b86->leave($__internal_50ea437b3890f86d1450110d363f11381f8d10c1cb7eb67e90fb2ecd19669b86_prof);

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
