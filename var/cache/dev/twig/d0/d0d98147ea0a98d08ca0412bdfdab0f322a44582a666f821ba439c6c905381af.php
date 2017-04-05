<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fe7f60eb986e6a4d6d095544b5013d1a1503e7be391c773c312c2e06278a5597 extends Twig_Template
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
        $__internal_ca87c42bee5d5e94ff2f8d031f18dbc67b48d8231fec26d7364f969aa66f11f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca87c42bee5d5e94ff2f8d031f18dbc67b48d8231fec26d7364f969aa66f11f3->enter($__internal_ca87c42bee5d5e94ff2f8d031f18dbc67b48d8231fec26d7364f969aa66f11f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e07d2297749f3a7a98ce28c26d69acd35bf7cf171e66b1159d2b627a8d6ba8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07d2297749f3a7a98ce28c26d69acd35bf7cf171e66b1159d2b627a8d6ba8f6->enter($__internal_e07d2297749f3a7a98ce28c26d69acd35bf7cf171e66b1159d2b627a8d6ba8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ca87c42bee5d5e94ff2f8d031f18dbc67b48d8231fec26d7364f969aa66f11f3->leave($__internal_ca87c42bee5d5e94ff2f8d031f18dbc67b48d8231fec26d7364f969aa66f11f3_prof);

        
        $__internal_e07d2297749f3a7a98ce28c26d69acd35bf7cf171e66b1159d2b627a8d6ba8f6->leave($__internal_e07d2297749f3a7a98ce28c26d69acd35bf7cf171e66b1159d2b627a8d6ba8f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
