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
        $__internal_f7ee05ec599fd02f1baadae44521125d15db9ab3205e1407f647333963e0ea90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ee05ec599fd02f1baadae44521125d15db9ab3205e1407f647333963e0ea90->enter($__internal_f7ee05ec599fd02f1baadae44521125d15db9ab3205e1407f647333963e0ea90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_7b9ff7fe74c95322d273ca4f36b3b83b74d7cbda313d3df3461692fd703765ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9ff7fe74c95322d273ca4f36b3b83b74d7cbda313d3df3461692fd703765ff->enter($__internal_7b9ff7fe74c95322d273ca4f36b3b83b74d7cbda313d3df3461692fd703765ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_f7ee05ec599fd02f1baadae44521125d15db9ab3205e1407f647333963e0ea90->leave($__internal_f7ee05ec599fd02f1baadae44521125d15db9ab3205e1407f647333963e0ea90_prof);

        
        $__internal_7b9ff7fe74c95322d273ca4f36b3b83b74d7cbda313d3df3461692fd703765ff->leave($__internal_7b9ff7fe74c95322d273ca4f36b3b83b74d7cbda313d3df3461692fd703765ff_prof);

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
