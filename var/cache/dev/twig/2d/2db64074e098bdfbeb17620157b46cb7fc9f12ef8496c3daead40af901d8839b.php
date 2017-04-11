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
        $__internal_fa7b95afd734282ba4520d0c8817c34df1649efd8bdd37627c0088c56557fbee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7b95afd734282ba4520d0c8817c34df1649efd8bdd37627c0088c56557fbee->enter($__internal_fa7b95afd734282ba4520d0c8817c34df1649efd8bdd37627c0088c56557fbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_8f87af8422d1a10629248d90eaed7e9785f66550b7babf025b3dcccde459843c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f87af8422d1a10629248d90eaed7e9785f66550b7babf025b3dcccde459843c->enter($__internal_8f87af8422d1a10629248d90eaed7e9785f66550b7babf025b3dcccde459843c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_fa7b95afd734282ba4520d0c8817c34df1649efd8bdd37627c0088c56557fbee->leave($__internal_fa7b95afd734282ba4520d0c8817c34df1649efd8bdd37627c0088c56557fbee_prof);

        
        $__internal_8f87af8422d1a10629248d90eaed7e9785f66550b7babf025b3dcccde459843c->leave($__internal_8f87af8422d1a10629248d90eaed7e9785f66550b7babf025b3dcccde459843c_prof);

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
