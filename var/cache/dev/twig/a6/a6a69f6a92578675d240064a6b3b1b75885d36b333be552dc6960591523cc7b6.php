<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_413ed890f23ee8e56426582c09d114cb570bea315f70bde6d509bce804448684 extends Twig_Template
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
        $__internal_bc6c5f6a2d6142fb86bba85eff4f83a3bf2f62a9914871a6887f742d1ecde989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6c5f6a2d6142fb86bba85eff4f83a3bf2f62a9914871a6887f742d1ecde989->enter($__internal_bc6c5f6a2d6142fb86bba85eff4f83a3bf2f62a9914871a6887f742d1ecde989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_f45cea314aec9609183a733cd957f3d9f9c681243bd12c8275bcf3e0f8c1bc0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45cea314aec9609183a733cd957f3d9f9c681243bd12c8275bcf3e0f8c1bc0a->enter($__internal_f45cea314aec9609183a733cd957f3d9f9c681243bd12c8275bcf3e0f8c1bc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_bc6c5f6a2d6142fb86bba85eff4f83a3bf2f62a9914871a6887f742d1ecde989->leave($__internal_bc6c5f6a2d6142fb86bba85eff4f83a3bf2f62a9914871a6887f742d1ecde989_prof);

        
        $__internal_f45cea314aec9609183a733cd957f3d9f9c681243bd12c8275bcf3e0f8c1bc0a->leave($__internal_f45cea314aec9609183a733cd957f3d9f9c681243bd12c8275bcf3e0f8c1bc0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
