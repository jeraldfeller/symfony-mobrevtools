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
        $__internal_d2bab4878fab75c206dd134429aceee644a2096a62ded87b6f82d6bbeee5cf51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2bab4878fab75c206dd134429aceee644a2096a62ded87b6f82d6bbeee5cf51->enter($__internal_d2bab4878fab75c206dd134429aceee644a2096a62ded87b6f82d6bbeee5cf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_80dba01a0e26648c077c48c48e086d6ee54ebaacc25177ca890b0178e4e2b400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dba01a0e26648c077c48c48e086d6ee54ebaacc25177ca890b0178e4e2b400->enter($__internal_80dba01a0e26648c077c48c48e086d6ee54ebaacc25177ca890b0178e4e2b400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d2bab4878fab75c206dd134429aceee644a2096a62ded87b6f82d6bbeee5cf51->leave($__internal_d2bab4878fab75c206dd134429aceee644a2096a62ded87b6f82d6bbeee5cf51_prof);

        
        $__internal_80dba01a0e26648c077c48c48e086d6ee54ebaacc25177ca890b0178e4e2b400->leave($__internal_80dba01a0e26648c077c48c48e086d6ee54ebaacc25177ca890b0178e4e2b400_prof);

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
