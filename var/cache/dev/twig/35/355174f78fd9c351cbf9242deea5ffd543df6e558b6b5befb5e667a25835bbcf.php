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
        $__internal_e5c6f374abcde404ffe577a99f854b4fc3e4553fb8ca47f7864c6471bc26d98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c6f374abcde404ffe577a99f854b4fc3e4553fb8ca47f7864c6471bc26d98f->enter($__internal_e5c6f374abcde404ffe577a99f854b4fc3e4553fb8ca47f7864c6471bc26d98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_afba3b4b3563a83864b5f7214049bbf7128f2f3038efb809e17b1ae0cdfd3414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afba3b4b3563a83864b5f7214049bbf7128f2f3038efb809e17b1ae0cdfd3414->enter($__internal_afba3b4b3563a83864b5f7214049bbf7128f2f3038efb809e17b1ae0cdfd3414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e5c6f374abcde404ffe577a99f854b4fc3e4553fb8ca47f7864c6471bc26d98f->leave($__internal_e5c6f374abcde404ffe577a99f854b4fc3e4553fb8ca47f7864c6471bc26d98f_prof);

        
        $__internal_afba3b4b3563a83864b5f7214049bbf7128f2f3038efb809e17b1ae0cdfd3414->leave($__internal_afba3b4b3563a83864b5f7214049bbf7128f2f3038efb809e17b1ae0cdfd3414_prof);

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
