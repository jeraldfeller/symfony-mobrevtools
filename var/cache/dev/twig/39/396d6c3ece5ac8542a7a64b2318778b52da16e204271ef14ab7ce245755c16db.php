<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8a540ad17a7413bd7b5318c55b11e6f0f1239e28f9a60314f3def6b779fc4a62 extends Twig_Template
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
        $__internal_7f20b2d8f2a1ad7f0dedee366c6ab6c640384a1c5c7b0da2373e21951ef88ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f20b2d8f2a1ad7f0dedee366c6ab6c640384a1c5c7b0da2373e21951ef88ae6->enter($__internal_7f20b2d8f2a1ad7f0dedee366c6ab6c640384a1c5c7b0da2373e21951ef88ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_a74b36ebb372916a53493ca6d6feb0a8ed91a268bb6bb171a99a9132d668d9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74b36ebb372916a53493ca6d6feb0a8ed91a268bb6bb171a99a9132d668d9e5->enter($__internal_a74b36ebb372916a53493ca6d6feb0a8ed91a268bb6bb171a99a9132d668d9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7f20b2d8f2a1ad7f0dedee366c6ab6c640384a1c5c7b0da2373e21951ef88ae6->leave($__internal_7f20b2d8f2a1ad7f0dedee366c6ab6c640384a1c5c7b0da2373e21951ef88ae6_prof);

        
        $__internal_a74b36ebb372916a53493ca6d6feb0a8ed91a268bb6bb171a99a9132d668d9e5->leave($__internal_a74b36ebb372916a53493ca6d6feb0a8ed91a268bb6bb171a99a9132d668d9e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
