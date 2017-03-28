<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_73436ba810e44fa54b35dbdafdd8931743bb3418379962027e803f9c65a1b67b extends Twig_Template
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
        $__internal_493a8fbb1fd7ee6b33394793c6008497ddeeaea815a964e9545254932cf0704a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493a8fbb1fd7ee6b33394793c6008497ddeeaea815a964e9545254932cf0704a->enter($__internal_493a8fbb1fd7ee6b33394793c6008497ddeeaea815a964e9545254932cf0704a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1ded2f0f3022390c8f5a644cce06da22db0178dc496f0f67eec2152006696c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ded2f0f3022390c8f5a644cce06da22db0178dc496f0f67eec2152006696c10->enter($__internal_1ded2f0f3022390c8f5a644cce06da22db0178dc496f0f67eec2152006696c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_493a8fbb1fd7ee6b33394793c6008497ddeeaea815a964e9545254932cf0704a->leave($__internal_493a8fbb1fd7ee6b33394793c6008497ddeeaea815a964e9545254932cf0704a_prof);

        
        $__internal_1ded2f0f3022390c8f5a644cce06da22db0178dc496f0f67eec2152006696c10->leave($__internal_1ded2f0f3022390c8f5a644cce06da22db0178dc496f0f67eec2152006696c10_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
