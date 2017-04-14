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
        $__internal_33b50d9bce107e3658cb68f478eddc0da71d874e460483211c2be71301bd694b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b50d9bce107e3658cb68f478eddc0da71d874e460483211c2be71301bd694b->enter($__internal_33b50d9bce107e3658cb68f478eddc0da71d874e460483211c2be71301bd694b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_78808e42a65cf13217ff81b3f5cd348eb7d4812911f15697f3109c2a989ddc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78808e42a65cf13217ff81b3f5cd348eb7d4812911f15697f3109c2a989ddc56->enter($__internal_78808e42a65cf13217ff81b3f5cd348eb7d4812911f15697f3109c2a989ddc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_33b50d9bce107e3658cb68f478eddc0da71d874e460483211c2be71301bd694b->leave($__internal_33b50d9bce107e3658cb68f478eddc0da71d874e460483211c2be71301bd694b_prof);

        
        $__internal_78808e42a65cf13217ff81b3f5cd348eb7d4812911f15697f3109c2a989ddc56->leave($__internal_78808e42a65cf13217ff81b3f5cd348eb7d4812911f15697f3109c2a989ddc56_prof);

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
