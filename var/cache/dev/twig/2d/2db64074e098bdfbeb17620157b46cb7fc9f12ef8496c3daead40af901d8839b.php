<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_85cc88737432beff2edfa3a8c75fe32752a9f5d73459be98e794fc7f9e1e0764 extends Twig_Template
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
        $__internal_1161b706327545ff915e4001e80f917424b97c970d6480b7140b6ed423e7fe78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1161b706327545ff915e4001e80f917424b97c970d6480b7140b6ed423e7fe78->enter($__internal_1161b706327545ff915e4001e80f917424b97c970d6480b7140b6ed423e7fe78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_7653d7570926a4119e2a6f47597f8e62919c97efeecf7db2387ffb885adcabfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7653d7570926a4119e2a6f47597f8e62919c97efeecf7db2387ffb885adcabfc->enter($__internal_7653d7570926a4119e2a6f47597f8e62919c97efeecf7db2387ffb885adcabfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1161b706327545ff915e4001e80f917424b97c970d6480b7140b6ed423e7fe78->leave($__internal_1161b706327545ff915e4001e80f917424b97c970d6480b7140b6ed423e7fe78_prof);

        
        $__internal_7653d7570926a4119e2a6f47597f8e62919c97efeecf7db2387ffb885adcabfc->leave($__internal_7653d7570926a4119e2a6f47597f8e62919c97efeecf7db2387ffb885adcabfc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
