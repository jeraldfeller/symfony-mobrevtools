<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_07235cec271b0570e565d6c3b66e1b9e899d812868fcfb6bdc3d8d27c4a873c9 extends Twig_Template
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
        $__internal_15a06ea4ff1374c643dadcb2d55106b94fcc491686ac2ac448810205db0738f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a06ea4ff1374c643dadcb2d55106b94fcc491686ac2ac448810205db0738f9->enter($__internal_15a06ea4ff1374c643dadcb2d55106b94fcc491686ac2ac448810205db0738f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_e153e8a4d09b046a6eaf03150b46bd71570ef98c779729efdfec090b498cd191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e153e8a4d09b046a6eaf03150b46bd71570ef98c779729efdfec090b498cd191->enter($__internal_e153e8a4d09b046a6eaf03150b46bd71570ef98c779729efdfec090b498cd191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_15a06ea4ff1374c643dadcb2d55106b94fcc491686ac2ac448810205db0738f9->leave($__internal_15a06ea4ff1374c643dadcb2d55106b94fcc491686ac2ac448810205db0738f9_prof);

        
        $__internal_e153e8a4d09b046a6eaf03150b46bd71570ef98c779729efdfec090b498cd191->leave($__internal_e153e8a4d09b046a6eaf03150b46bd71570ef98c779729efdfec090b498cd191_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
