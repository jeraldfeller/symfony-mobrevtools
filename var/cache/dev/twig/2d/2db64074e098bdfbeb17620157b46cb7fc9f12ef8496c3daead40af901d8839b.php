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
        $__internal_c6c7de3f27dd0d653bff05d25a1aba7e60112a6db99fff46821ffe1f2967d899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c7de3f27dd0d653bff05d25a1aba7e60112a6db99fff46821ffe1f2967d899->enter($__internal_c6c7de3f27dd0d653bff05d25a1aba7e60112a6db99fff46821ffe1f2967d899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_93c0a7b8cb8ff443ec0a36d4a9a88840f4575f8250f12dabb566b495c052eb29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c0a7b8cb8ff443ec0a36d4a9a88840f4575f8250f12dabb566b495c052eb29->enter($__internal_93c0a7b8cb8ff443ec0a36d4a9a88840f4575f8250f12dabb566b495c052eb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_c6c7de3f27dd0d653bff05d25a1aba7e60112a6db99fff46821ffe1f2967d899->leave($__internal_c6c7de3f27dd0d653bff05d25a1aba7e60112a6db99fff46821ffe1f2967d899_prof);

        
        $__internal_93c0a7b8cb8ff443ec0a36d4a9a88840f4575f8250f12dabb566b495c052eb29->leave($__internal_93c0a7b8cb8ff443ec0a36d4a9a88840f4575f8250f12dabb566b495c052eb29_prof);

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
