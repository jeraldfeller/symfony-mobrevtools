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
        $__internal_f71c1db8b8c2dda79ad7567a85cf296f6222a1b6430873aa89514dda38c48ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71c1db8b8c2dda79ad7567a85cf296f6222a1b6430873aa89514dda38c48ca2->enter($__internal_f71c1db8b8c2dda79ad7567a85cf296f6222a1b6430873aa89514dda38c48ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_a8255ff30a5032b1dd9dcf4d8441543b6a6013c8b95dbfd7bb75a5ace5745c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8255ff30a5032b1dd9dcf4d8441543b6a6013c8b95dbfd7bb75a5ace5745c83->enter($__internal_a8255ff30a5032b1dd9dcf4d8441543b6a6013c8b95dbfd7bb75a5ace5745c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f71c1db8b8c2dda79ad7567a85cf296f6222a1b6430873aa89514dda38c48ca2->leave($__internal_f71c1db8b8c2dda79ad7567a85cf296f6222a1b6430873aa89514dda38c48ca2_prof);

        
        $__internal_a8255ff30a5032b1dd9dcf4d8441543b6a6013c8b95dbfd7bb75a5ace5745c83->leave($__internal_a8255ff30a5032b1dd9dcf4d8441543b6a6013c8b95dbfd7bb75a5ace5745c83_prof);

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
