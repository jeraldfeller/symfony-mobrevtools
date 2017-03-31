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
        $__internal_5c2bb7259a115b6cdfb9fb5c5cf64cb3424745369667df3a67d5128d51848c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2bb7259a115b6cdfb9fb5c5cf64cb3424745369667df3a67d5128d51848c10->enter($__internal_5c2bb7259a115b6cdfb9fb5c5cf64cb3424745369667df3a67d5128d51848c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_ea34ddc4615055de5f7bae4f21bd16e166bc98082e34b8bafe3aad71a354a5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea34ddc4615055de5f7bae4f21bd16e166bc98082e34b8bafe3aad71a354a5df->enter($__internal_ea34ddc4615055de5f7bae4f21bd16e166bc98082e34b8bafe3aad71a354a5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5c2bb7259a115b6cdfb9fb5c5cf64cb3424745369667df3a67d5128d51848c10->leave($__internal_5c2bb7259a115b6cdfb9fb5c5cf64cb3424745369667df3a67d5128d51848c10_prof);

        
        $__internal_ea34ddc4615055de5f7bae4f21bd16e166bc98082e34b8bafe3aad71a354a5df->leave($__internal_ea34ddc4615055de5f7bae4f21bd16e166bc98082e34b8bafe3aad71a354a5df_prof);

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
