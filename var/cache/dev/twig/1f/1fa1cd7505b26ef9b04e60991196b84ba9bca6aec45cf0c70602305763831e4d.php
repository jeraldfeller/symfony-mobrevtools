<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_af5aa7b23cf43e00858890d5c81df63821c55bb99833b464116cf0360424cded extends Twig_Template
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
        $__internal_12595b816c41e3722655da91217a278576924bf4ccfd989aad3d232eee270cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12595b816c41e3722655da91217a278576924bf4ccfd989aad3d232eee270cbb->enter($__internal_12595b816c41e3722655da91217a278576924bf4ccfd989aad3d232eee270cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_20116c6e8bf9304864621352818b6fc5123df827e33fd13a453c9420c6f7bf3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20116c6e8bf9304864621352818b6fc5123df827e33fd13a453c9420c6f7bf3c->enter($__internal_20116c6e8bf9304864621352818b6fc5123df827e33fd13a453c9420c6f7bf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_12595b816c41e3722655da91217a278576924bf4ccfd989aad3d232eee270cbb->leave($__internal_12595b816c41e3722655da91217a278576924bf4ccfd989aad3d232eee270cbb_prof);

        
        $__internal_20116c6e8bf9304864621352818b6fc5123df827e33fd13a453c9420c6f7bf3c->leave($__internal_20116c6e8bf9304864621352818b6fc5123df827e33fd13a453c9420c6f7bf3c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
