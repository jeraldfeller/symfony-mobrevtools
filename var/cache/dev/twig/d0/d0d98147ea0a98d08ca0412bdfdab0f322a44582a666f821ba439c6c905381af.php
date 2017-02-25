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
        $__internal_c6e9e5f45971f803fbcb81f70bf7cd900b1ba712a06adbb7ca1661a7232d5d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e9e5f45971f803fbcb81f70bf7cd900b1ba712a06adbb7ca1661a7232d5d19->enter($__internal_c6e9e5f45971f803fbcb81f70bf7cd900b1ba712a06adbb7ca1661a7232d5d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_ff3331e96af1079654771918a3ed13da4e312d55f6c99416d0ce0398110913ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3331e96af1079654771918a3ed13da4e312d55f6c99416d0ce0398110913ac->enter($__internal_ff3331e96af1079654771918a3ed13da4e312d55f6c99416d0ce0398110913ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c6e9e5f45971f803fbcb81f70bf7cd900b1ba712a06adbb7ca1661a7232d5d19->leave($__internal_c6e9e5f45971f803fbcb81f70bf7cd900b1ba712a06adbb7ca1661a7232d5d19_prof);

        
        $__internal_ff3331e96af1079654771918a3ed13da4e312d55f6c99416d0ce0398110913ac->leave($__internal_ff3331e96af1079654771918a3ed13da4e312d55f6c99416d0ce0398110913ac_prof);

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
