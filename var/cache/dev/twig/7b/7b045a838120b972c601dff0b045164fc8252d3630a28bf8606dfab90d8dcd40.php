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
        $__internal_f537de7654d89254f670552a5ea9da441df247df8097311f7b62404696e2dfc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f537de7654d89254f670552a5ea9da441df247df8097311f7b62404696e2dfc1->enter($__internal_f537de7654d89254f670552a5ea9da441df247df8097311f7b62404696e2dfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_3ad4c269fc375d202665d2fd954338a4bcf1d4e8b0052e22f49c158f0997f6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad4c269fc375d202665d2fd954338a4bcf1d4e8b0052e22f49c158f0997f6f3->enter($__internal_3ad4c269fc375d202665d2fd954338a4bcf1d4e8b0052e22f49c158f0997f6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f537de7654d89254f670552a5ea9da441df247df8097311f7b62404696e2dfc1->leave($__internal_f537de7654d89254f670552a5ea9da441df247df8097311f7b62404696e2dfc1_prof);

        
        $__internal_3ad4c269fc375d202665d2fd954338a4bcf1d4e8b0052e22f49c158f0997f6f3->leave($__internal_3ad4c269fc375d202665d2fd954338a4bcf1d4e8b0052e22f49c158f0997f6f3_prof);

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
