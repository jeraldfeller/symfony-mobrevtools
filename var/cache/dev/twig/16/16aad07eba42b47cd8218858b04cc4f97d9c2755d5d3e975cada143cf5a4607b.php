<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_14eb860ce8da5f00eb2fd68e45f7ddb6d5d08f1e0b771334149e8aceefbbcb61 extends Twig_Template
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
        $__internal_bb6da421a95fcd037057844a5ba914f9c50960dacaf449d14175b98150f612f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb6da421a95fcd037057844a5ba914f9c50960dacaf449d14175b98150f612f5->enter($__internal_bb6da421a95fcd037057844a5ba914f9c50960dacaf449d14175b98150f612f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_65d292109e6f55201d2f1bb948893c6d3528a62b1e0e202b489b2f0b41ef1976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d292109e6f55201d2f1bb948893c6d3528a62b1e0e202b489b2f0b41ef1976->enter($__internal_65d292109e6f55201d2f1bb948893c6d3528a62b1e0e202b489b2f0b41ef1976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_bb6da421a95fcd037057844a5ba914f9c50960dacaf449d14175b98150f612f5->leave($__internal_bb6da421a95fcd037057844a5ba914f9c50960dacaf449d14175b98150f612f5_prof);

        
        $__internal_65d292109e6f55201d2f1bb948893c6d3528a62b1e0e202b489b2f0b41ef1976->leave($__internal_65d292109e6f55201d2f1bb948893c6d3528a62b1e0e202b489b2f0b41ef1976_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
