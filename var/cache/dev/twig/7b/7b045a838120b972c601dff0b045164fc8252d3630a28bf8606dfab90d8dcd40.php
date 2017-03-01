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
        $__internal_6702edc5f5eca21a6b2951ae0d57c1ec80eaac7e7261ecb9a2d640fed277db68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6702edc5f5eca21a6b2951ae0d57c1ec80eaac7e7261ecb9a2d640fed277db68->enter($__internal_6702edc5f5eca21a6b2951ae0d57c1ec80eaac7e7261ecb9a2d640fed277db68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f2055b0a8810e4618c0e74439bac71ff37d618f75abc20e666db56422326b6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2055b0a8810e4618c0e74439bac71ff37d618f75abc20e666db56422326b6bd->enter($__internal_f2055b0a8810e4618c0e74439bac71ff37d618f75abc20e666db56422326b6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6702edc5f5eca21a6b2951ae0d57c1ec80eaac7e7261ecb9a2d640fed277db68->leave($__internal_6702edc5f5eca21a6b2951ae0d57c1ec80eaac7e7261ecb9a2d640fed277db68_prof);

        
        $__internal_f2055b0a8810e4618c0e74439bac71ff37d618f75abc20e666db56422326b6bd->leave($__internal_f2055b0a8810e4618c0e74439bac71ff37d618f75abc20e666db56422326b6bd_prof);

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
