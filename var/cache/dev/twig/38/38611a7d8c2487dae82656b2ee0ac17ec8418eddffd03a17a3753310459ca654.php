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
        $__internal_07718e0fc83ccf090b2ce237dbd45ba817928dd9ea9a425c60be031dbaab1ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07718e0fc83ccf090b2ce237dbd45ba817928dd9ea9a425c60be031dbaab1ae6->enter($__internal_07718e0fc83ccf090b2ce237dbd45ba817928dd9ea9a425c60be031dbaab1ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_f06a6868ef0ac2f0e2e3d804c40885c74397846fafa19e602377b0135a29f81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06a6868ef0ac2f0e2e3d804c40885c74397846fafa19e602377b0135a29f81b->enter($__internal_f06a6868ef0ac2f0e2e3d804c40885c74397846fafa19e602377b0135a29f81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_07718e0fc83ccf090b2ce237dbd45ba817928dd9ea9a425c60be031dbaab1ae6->leave($__internal_07718e0fc83ccf090b2ce237dbd45ba817928dd9ea9a425c60be031dbaab1ae6_prof);

        
        $__internal_f06a6868ef0ac2f0e2e3d804c40885c74397846fafa19e602377b0135a29f81b->leave($__internal_f06a6868ef0ac2f0e2e3d804c40885c74397846fafa19e602377b0135a29f81b_prof);

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
