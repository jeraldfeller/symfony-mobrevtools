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
        $__internal_19e5e2cde54eb7a93b81b83a056b363ca2c382731a540bf2402a6fe41b5a9c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e5e2cde54eb7a93b81b83a056b363ca2c382731a540bf2402a6fe41b5a9c8e->enter($__internal_19e5e2cde54eb7a93b81b83a056b363ca2c382731a540bf2402a6fe41b5a9c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_d32b25dab13bf56774cd56dfbcf1fb801f16030d5f088f40bc7ba0850f8f6cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32b25dab13bf56774cd56dfbcf1fb801f16030d5f088f40bc7ba0850f8f6cd6->enter($__internal_d32b25dab13bf56774cd56dfbcf1fb801f16030d5f088f40bc7ba0850f8f6cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_19e5e2cde54eb7a93b81b83a056b363ca2c382731a540bf2402a6fe41b5a9c8e->leave($__internal_19e5e2cde54eb7a93b81b83a056b363ca2c382731a540bf2402a6fe41b5a9c8e_prof);

        
        $__internal_d32b25dab13bf56774cd56dfbcf1fb801f16030d5f088f40bc7ba0850f8f6cd6->leave($__internal_d32b25dab13bf56774cd56dfbcf1fb801f16030d5f088f40bc7ba0850f8f6cd6_prof);

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
