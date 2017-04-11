<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2e0557381109275464dda13e3bca7456e491bafccb80d7f6989304463485d66d extends Twig_Template
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
        $__internal_07256085fab6cfcf36c6e1952247850cd92c8a2615d3c0869a789be727781f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07256085fab6cfcf36c6e1952247850cd92c8a2615d3c0869a789be727781f8c->enter($__internal_07256085fab6cfcf36c6e1952247850cd92c8a2615d3c0869a789be727781f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_7f5d715fbd2c7feabe54ede8e56108602a495145e4bf89160d85d2fb454d5e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5d715fbd2c7feabe54ede8e56108602a495145e4bf89160d85d2fb454d5e28->enter($__internal_7f5d715fbd2c7feabe54ede8e56108602a495145e4bf89160d85d2fb454d5e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_07256085fab6cfcf36c6e1952247850cd92c8a2615d3c0869a789be727781f8c->leave($__internal_07256085fab6cfcf36c6e1952247850cd92c8a2615d3c0869a789be727781f8c_prof);

        
        $__internal_7f5d715fbd2c7feabe54ede8e56108602a495145e4bf89160d85d2fb454d5e28->leave($__internal_7f5d715fbd2c7feabe54ede8e56108602a495145e4bf89160d85d2fb454d5e28_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
