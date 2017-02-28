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
        $__internal_5ed093c6e3719a5c72803b37ada697455e2f5093b93329bb01ffba81471e6f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed093c6e3719a5c72803b37ada697455e2f5093b93329bb01ffba81471e6f46->enter($__internal_5ed093c6e3719a5c72803b37ada697455e2f5093b93329bb01ffba81471e6f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_ce63fa57d8f6511995973ae132ebdf92e995e523d51260363262c1abf568127a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce63fa57d8f6511995973ae132ebdf92e995e523d51260363262c1abf568127a->enter($__internal_ce63fa57d8f6511995973ae132ebdf92e995e523d51260363262c1abf568127a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5ed093c6e3719a5c72803b37ada697455e2f5093b93329bb01ffba81471e6f46->leave($__internal_5ed093c6e3719a5c72803b37ada697455e2f5093b93329bb01ffba81471e6f46_prof);

        
        $__internal_ce63fa57d8f6511995973ae132ebdf92e995e523d51260363262c1abf568127a->leave($__internal_ce63fa57d8f6511995973ae132ebdf92e995e523d51260363262c1abf568127a_prof);

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
