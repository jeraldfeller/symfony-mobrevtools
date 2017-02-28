<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5ff1b3496291d2dbf91cb11b4d58b7ef993b8d46e2ce3a8a1e89cebbe4a98496 extends Twig_Template
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
        $__internal_1e9cb1f352d2c17df0a6134b1626b21df8d8a439fba3a7c3ea0afebdbe242ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9cb1f352d2c17df0a6134b1626b21df8d8a439fba3a7c3ea0afebdbe242ea2->enter($__internal_1e9cb1f352d2c17df0a6134b1626b21df8d8a439fba3a7c3ea0afebdbe242ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_53f9ae3799047f68a356dfbf3a1d6f0ac6b56ad752a94dfab700985cee691582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f9ae3799047f68a356dfbf3a1d6f0ac6b56ad752a94dfab700985cee691582->enter($__internal_53f9ae3799047f68a356dfbf3a1d6f0ac6b56ad752a94dfab700985cee691582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_1e9cb1f352d2c17df0a6134b1626b21df8d8a439fba3a7c3ea0afebdbe242ea2->leave($__internal_1e9cb1f352d2c17df0a6134b1626b21df8d8a439fba3a7c3ea0afebdbe242ea2_prof);

        
        $__internal_53f9ae3799047f68a356dfbf3a1d6f0ac6b56ad752a94dfab700985cee691582->leave($__internal_53f9ae3799047f68a356dfbf3a1d6f0ac6b56ad752a94dfab700985cee691582_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
