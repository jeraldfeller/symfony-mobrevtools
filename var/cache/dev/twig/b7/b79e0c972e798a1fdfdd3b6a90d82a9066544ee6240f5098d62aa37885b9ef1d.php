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
        $__internal_883f457a76d76f5b413b0970c78617bc87c088d8b9cdb34eda6809ee5e2d2f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883f457a76d76f5b413b0970c78617bc87c088d8b9cdb34eda6809ee5e2d2f47->enter($__internal_883f457a76d76f5b413b0970c78617bc87c088d8b9cdb34eda6809ee5e2d2f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_7d3ae72299dcace49536b9320b01035234ad3b0773b75bd8e4195ab607ed0f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3ae72299dcace49536b9320b01035234ad3b0773b75bd8e4195ab607ed0f74->enter($__internal_7d3ae72299dcace49536b9320b01035234ad3b0773b75bd8e4195ab607ed0f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_883f457a76d76f5b413b0970c78617bc87c088d8b9cdb34eda6809ee5e2d2f47->leave($__internal_883f457a76d76f5b413b0970c78617bc87c088d8b9cdb34eda6809ee5e2d2f47_prof);

        
        $__internal_7d3ae72299dcace49536b9320b01035234ad3b0773b75bd8e4195ab607ed0f74->leave($__internal_7d3ae72299dcace49536b9320b01035234ad3b0773b75bd8e4195ab607ed0f74_prof);

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
