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
        $__internal_76ef2f94b0b26667622c2a2ef28961ea98c944b7a0398b905406a2027e0cfc14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ef2f94b0b26667622c2a2ef28961ea98c944b7a0398b905406a2027e0cfc14->enter($__internal_76ef2f94b0b26667622c2a2ef28961ea98c944b7a0398b905406a2027e0cfc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_2afad88d67da1e59673ecef6388cbeb2558161213e8ad6ef2a4bf9d23b8e928f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afad88d67da1e59673ecef6388cbeb2558161213e8ad6ef2a4bf9d23b8e928f->enter($__internal_2afad88d67da1e59673ecef6388cbeb2558161213e8ad6ef2a4bf9d23b8e928f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_76ef2f94b0b26667622c2a2ef28961ea98c944b7a0398b905406a2027e0cfc14->leave($__internal_76ef2f94b0b26667622c2a2ef28961ea98c944b7a0398b905406a2027e0cfc14_prof);

        
        $__internal_2afad88d67da1e59673ecef6388cbeb2558161213e8ad6ef2a4bf9d23b8e928f->leave($__internal_2afad88d67da1e59673ecef6388cbeb2558161213e8ad6ef2a4bf9d23b8e928f_prof);

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
