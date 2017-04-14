<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_f544f412f143d9c4dc7ec46d19891d06889329c7b23ede88ea98486e55801520 extends Twig_Template
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
        $__internal_501d4f95a63fb40de2b0c511fd6ce9d58a547ac30c63741cd07b817574a0615a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501d4f95a63fb40de2b0c511fd6ce9d58a547ac30c63741cd07b817574a0615a->enter($__internal_501d4f95a63fb40de2b0c511fd6ce9d58a547ac30c63741cd07b817574a0615a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_daf02033918053aa16e6345970d453ac98c12f3da1976ace0a273603c2e0d37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf02033918053aa16e6345970d453ac98c12f3da1976ace0a273603c2e0d37e->enter($__internal_daf02033918053aa16e6345970d453ac98c12f3da1976ace0a273603c2e0d37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_501d4f95a63fb40de2b0c511fd6ce9d58a547ac30c63741cd07b817574a0615a->leave($__internal_501d4f95a63fb40de2b0c511fd6ce9d58a547ac30c63741cd07b817574a0615a_prof);

        
        $__internal_daf02033918053aa16e6345970d453ac98c12f3da1976ace0a273603c2e0d37e->leave($__internal_daf02033918053aa16e6345970d453ac98c12f3da1976ace0a273603c2e0d37e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
