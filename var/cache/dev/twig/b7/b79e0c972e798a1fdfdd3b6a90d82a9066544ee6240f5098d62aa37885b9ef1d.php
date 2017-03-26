<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d2aeafa4d61c01806b2e613eb46fa969fe03363d4f8d6a297f2912ebdd70bbd9 extends Twig_Template
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
        $__internal_6734f8b2d30e080a42aa005c817a7c335c3336c2bda826ed48550751d1a695da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6734f8b2d30e080a42aa005c817a7c335c3336c2bda826ed48550751d1a695da->enter($__internal_6734f8b2d30e080a42aa005c817a7c335c3336c2bda826ed48550751d1a695da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_0500f40f8de012f011f50c20ddc2feeae646f7356ba77c9979d7c4476b166d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0500f40f8de012f011f50c20ddc2feeae646f7356ba77c9979d7c4476b166d51->enter($__internal_0500f40f8de012f011f50c20ddc2feeae646f7356ba77c9979d7c4476b166d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6734f8b2d30e080a42aa005c817a7c335c3336c2bda826ed48550751d1a695da->leave($__internal_6734f8b2d30e080a42aa005c817a7c335c3336c2bda826ed48550751d1a695da_prof);

        
        $__internal_0500f40f8de012f011f50c20ddc2feeae646f7356ba77c9979d7c4476b166d51->leave($__internal_0500f40f8de012f011f50c20ddc2feeae646f7356ba77c9979d7c4476b166d51_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
