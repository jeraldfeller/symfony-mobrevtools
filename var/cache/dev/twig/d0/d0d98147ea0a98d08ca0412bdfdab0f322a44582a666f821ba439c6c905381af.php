<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fe7f60eb986e6a4d6d095544b5013d1a1503e7be391c773c312c2e06278a5597 extends Twig_Template
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
        $__internal_8773d911d650e50ae72b6e70152a95126b761a77026b9685116138f41f8936c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8773d911d650e50ae72b6e70152a95126b761a77026b9685116138f41f8936c9->enter($__internal_8773d911d650e50ae72b6e70152a95126b761a77026b9685116138f41f8936c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_67880d5ec4bfd8854a150f126d0013fbe4038de9c16dab74673e61c9d56ec70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67880d5ec4bfd8854a150f126d0013fbe4038de9c16dab74673e61c9d56ec70b->enter($__internal_67880d5ec4bfd8854a150f126d0013fbe4038de9c16dab74673e61c9d56ec70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8773d911d650e50ae72b6e70152a95126b761a77026b9685116138f41f8936c9->leave($__internal_8773d911d650e50ae72b6e70152a95126b761a77026b9685116138f41f8936c9_prof);

        
        $__internal_67880d5ec4bfd8854a150f126d0013fbe4038de9c16dab74673e61c9d56ec70b->leave($__internal_67880d5ec4bfd8854a150f126d0013fbe4038de9c16dab74673e61c9d56ec70b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
