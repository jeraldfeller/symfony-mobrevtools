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
        $__internal_5ae9c4157caea831dfa994841b3bcb998edadf5c29df0016b2b1746c6fd8dfb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae9c4157caea831dfa994841b3bcb998edadf5c29df0016b2b1746c6fd8dfb3->enter($__internal_5ae9c4157caea831dfa994841b3bcb998edadf5c29df0016b2b1746c6fd8dfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_eee1fb9c1c279b887ff0cf23ae5d7a29808c491915a2ef4fbfc46b379c9189a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee1fb9c1c279b887ff0cf23ae5d7a29808c491915a2ef4fbfc46b379c9189a5->enter($__internal_eee1fb9c1c279b887ff0cf23ae5d7a29808c491915a2ef4fbfc46b379c9189a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_5ae9c4157caea831dfa994841b3bcb998edadf5c29df0016b2b1746c6fd8dfb3->leave($__internal_5ae9c4157caea831dfa994841b3bcb998edadf5c29df0016b2b1746c6fd8dfb3_prof);

        
        $__internal_eee1fb9c1c279b887ff0cf23ae5d7a29808c491915a2ef4fbfc46b379c9189a5->leave($__internal_eee1fb9c1c279b887ff0cf23ae5d7a29808c491915a2ef4fbfc46b379c9189a5_prof);

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
