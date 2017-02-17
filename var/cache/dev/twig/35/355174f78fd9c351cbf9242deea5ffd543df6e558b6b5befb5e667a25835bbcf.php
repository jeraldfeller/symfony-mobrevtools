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
        $__internal_b3460b11abf6821e37809df1d579187ef272a84f33c4c906a861351118a8b0e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3460b11abf6821e37809df1d579187ef272a84f33c4c906a861351118a8b0e1->enter($__internal_b3460b11abf6821e37809df1d579187ef272a84f33c4c906a861351118a8b0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ced0526da5df406e1a8a611a3de4e7fd88fc8f3cba56bd551da8a194dea11e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced0526da5df406e1a8a611a3de4e7fd88fc8f3cba56bd551da8a194dea11e74->enter($__internal_ced0526da5df406e1a8a611a3de4e7fd88fc8f3cba56bd551da8a194dea11e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b3460b11abf6821e37809df1d579187ef272a84f33c4c906a861351118a8b0e1->leave($__internal_b3460b11abf6821e37809df1d579187ef272a84f33c4c906a861351118a8b0e1_prof);

        
        $__internal_ced0526da5df406e1a8a611a3de4e7fd88fc8f3cba56bd551da8a194dea11e74->leave($__internal_ced0526da5df406e1a8a611a3de4e7fd88fc8f3cba56bd551da8a194dea11e74_prof);

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
