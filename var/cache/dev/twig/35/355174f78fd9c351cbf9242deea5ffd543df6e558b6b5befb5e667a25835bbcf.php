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
        $__internal_4f49cc8861d7599501499353037998432d7e1f67a50ba725ac8f5f37bb6f5073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f49cc8861d7599501499353037998432d7e1f67a50ba725ac8f5f37bb6f5073->enter($__internal_4f49cc8861d7599501499353037998432d7e1f67a50ba725ac8f5f37bb6f5073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_04cc98fc50143881943a4effb34cf2af07203aaa27166235c8aca8a856934a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04cc98fc50143881943a4effb34cf2af07203aaa27166235c8aca8a856934a42->enter($__internal_04cc98fc50143881943a4effb34cf2af07203aaa27166235c8aca8a856934a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4f49cc8861d7599501499353037998432d7e1f67a50ba725ac8f5f37bb6f5073->leave($__internal_4f49cc8861d7599501499353037998432d7e1f67a50ba725ac8f5f37bb6f5073_prof);

        
        $__internal_04cc98fc50143881943a4effb34cf2af07203aaa27166235c8aca8a856934a42->leave($__internal_04cc98fc50143881943a4effb34cf2af07203aaa27166235c8aca8a856934a42_prof);

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
