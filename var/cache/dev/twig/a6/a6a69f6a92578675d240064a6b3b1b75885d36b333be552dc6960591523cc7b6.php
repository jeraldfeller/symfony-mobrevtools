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
        $__internal_43ea1c127aff91377b175cdc6c71675261d089bd457b9a025bb6c488737a8023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ea1c127aff91377b175cdc6c71675261d089bd457b9a025bb6c488737a8023->enter($__internal_43ea1c127aff91377b175cdc6c71675261d089bd457b9a025bb6c488737a8023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_dc4a636b12e5df796b325621a03f49bea1c2c65c8e65d846a13875515c1fcbb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4a636b12e5df796b325621a03f49bea1c2c65c8e65d846a13875515c1fcbb3->enter($__internal_dc4a636b12e5df796b325621a03f49bea1c2c65c8e65d846a13875515c1fcbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_43ea1c127aff91377b175cdc6c71675261d089bd457b9a025bb6c488737a8023->leave($__internal_43ea1c127aff91377b175cdc6c71675261d089bd457b9a025bb6c488737a8023_prof);

        
        $__internal_dc4a636b12e5df796b325621a03f49bea1c2c65c8e65d846a13875515c1fcbb3->leave($__internal_dc4a636b12e5df796b325621a03f49bea1c2c65c8e65d846a13875515c1fcbb3_prof);

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
