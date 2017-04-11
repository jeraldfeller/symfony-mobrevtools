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
        $__internal_a22339f19644d66772c7f093a10e55b6d1c7f191d07067f9e4a3d4d52112733e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22339f19644d66772c7f093a10e55b6d1c7f191d07067f9e4a3d4d52112733e->enter($__internal_a22339f19644d66772c7f093a10e55b6d1c7f191d07067f9e4a3d4d52112733e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_03462a4d15b14027b658c281e76549b040550e7c638c9cb3b31830d761966dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03462a4d15b14027b658c281e76549b040550e7c638c9cb3b31830d761966dfa->enter($__internal_03462a4d15b14027b658c281e76549b040550e7c638c9cb3b31830d761966dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a22339f19644d66772c7f093a10e55b6d1c7f191d07067f9e4a3d4d52112733e->leave($__internal_a22339f19644d66772c7f093a10e55b6d1c7f191d07067f9e4a3d4d52112733e_prof);

        
        $__internal_03462a4d15b14027b658c281e76549b040550e7c638c9cb3b31830d761966dfa->leave($__internal_03462a4d15b14027b658c281e76549b040550e7c638c9cb3b31830d761966dfa_prof);

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
