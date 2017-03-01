<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d2aeafa4d61c01806b2e613eb46fa969fe03363d4f8d6a297f2912ebdd70bbd9 extends Twig_Template
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
        $__internal_59fdec69e8b0cb0f690e19bf35cca190b3576149bb1854506b767a6778a67af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59fdec69e8b0cb0f690e19bf35cca190b3576149bb1854506b767a6778a67af4->enter($__internal_59fdec69e8b0cb0f690e19bf35cca190b3576149bb1854506b767a6778a67af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_05be61236a98d4775542ae486d1533409bc5229ba0c35fbc1d4079d71edf5db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05be61236a98d4775542ae486d1533409bc5229ba0c35fbc1d4079d71edf5db6->enter($__internal_05be61236a98d4775542ae486d1533409bc5229ba0c35fbc1d4079d71edf5db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_59fdec69e8b0cb0f690e19bf35cca190b3576149bb1854506b767a6778a67af4->leave($__internal_59fdec69e8b0cb0f690e19bf35cca190b3576149bb1854506b767a6778a67af4_prof);

        
        $__internal_05be61236a98d4775542ae486d1533409bc5229ba0c35fbc1d4079d71edf5db6->leave($__internal_05be61236a98d4775542ae486d1533409bc5229ba0c35fbc1d4079d71edf5db6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
