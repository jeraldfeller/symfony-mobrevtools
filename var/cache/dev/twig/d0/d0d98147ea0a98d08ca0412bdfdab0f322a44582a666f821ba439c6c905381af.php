<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fe7f60eb986e6a4d6d095544b5013d1a1503e7be391c773c312c2e06278a5597 extends Twig_Template
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
        $__internal_7531dc0610c8a7ab3f5c2880676492649f73a583528ef2b33d3cf64d1dbe2f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7531dc0610c8a7ab3f5c2880676492649f73a583528ef2b33d3cf64d1dbe2f8e->enter($__internal_7531dc0610c8a7ab3f5c2880676492649f73a583528ef2b33d3cf64d1dbe2f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_dc3f46c68c3be8366e6ffa326021f347e916de6c4b40033d231f518b6a992911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3f46c68c3be8366e6ffa326021f347e916de6c4b40033d231f518b6a992911->enter($__internal_dc3f46c68c3be8366e6ffa326021f347e916de6c4b40033d231f518b6a992911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7531dc0610c8a7ab3f5c2880676492649f73a583528ef2b33d3cf64d1dbe2f8e->leave($__internal_7531dc0610c8a7ab3f5c2880676492649f73a583528ef2b33d3cf64d1dbe2f8e_prof);

        
        $__internal_dc3f46c68c3be8366e6ffa326021f347e916de6c4b40033d231f518b6a992911->leave($__internal_dc3f46c68c3be8366e6ffa326021f347e916de6c4b40033d231f518b6a992911_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
