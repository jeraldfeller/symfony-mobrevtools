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
        $__internal_c10a9318bce0b7806e42e6e1f09c8afb8d3092ab6bedfaf43cd7c6cef08ff872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10a9318bce0b7806e42e6e1f09c8afb8d3092ab6bedfaf43cd7c6cef08ff872->enter($__internal_c10a9318bce0b7806e42e6e1f09c8afb8d3092ab6bedfaf43cd7c6cef08ff872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_92c6a405ba43766a4ddd6604bed809f7ee15383c50ed92ed3c2d401c40f83471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c6a405ba43766a4ddd6604bed809f7ee15383c50ed92ed3c2d401c40f83471->enter($__internal_92c6a405ba43766a4ddd6604bed809f7ee15383c50ed92ed3c2d401c40f83471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_c10a9318bce0b7806e42e6e1f09c8afb8d3092ab6bedfaf43cd7c6cef08ff872->leave($__internal_c10a9318bce0b7806e42e6e1f09c8afb8d3092ab6bedfaf43cd7c6cef08ff872_prof);

        
        $__internal_92c6a405ba43766a4ddd6604bed809f7ee15383c50ed92ed3c2d401c40f83471->leave($__internal_92c6a405ba43766a4ddd6604bed809f7ee15383c50ed92ed3c2d401c40f83471_prof);

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
