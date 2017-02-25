<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0aa6b500b50e6fd7edf03bb9da16ee35ab4fa887871cb7f76b6be25cf61b7e23 extends Twig_Template
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
        $__internal_b841f16a8d8cd7db1f853a216abbfd7f368f4f3ead24f64cfa85832d2893e760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b841f16a8d8cd7db1f853a216abbfd7f368f4f3ead24f64cfa85832d2893e760->enter($__internal_b841f16a8d8cd7db1f853a216abbfd7f368f4f3ead24f64cfa85832d2893e760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_df51bb1f002961a196d5c38d6ed47ce380b36bd95d8ff3aca90734a61c947d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df51bb1f002961a196d5c38d6ed47ce380b36bd95d8ff3aca90734a61c947d6d->enter($__internal_df51bb1f002961a196d5c38d6ed47ce380b36bd95d8ff3aca90734a61c947d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b841f16a8d8cd7db1f853a216abbfd7f368f4f3ead24f64cfa85832d2893e760->leave($__internal_b841f16a8d8cd7db1f853a216abbfd7f368f4f3ead24f64cfa85832d2893e760_prof);

        
        $__internal_df51bb1f002961a196d5c38d6ed47ce380b36bd95d8ff3aca90734a61c947d6d->leave($__internal_df51bb1f002961a196d5c38d6ed47ce380b36bd95d8ff3aca90734a61c947d6d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
