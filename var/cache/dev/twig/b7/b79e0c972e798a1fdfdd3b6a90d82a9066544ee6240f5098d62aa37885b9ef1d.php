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
        $__internal_1bccc42623f48083b6ea9f937ad2f25118e512e345681d2065ff8963b0671752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bccc42623f48083b6ea9f937ad2f25118e512e345681d2065ff8963b0671752->enter($__internal_1bccc42623f48083b6ea9f937ad2f25118e512e345681d2065ff8963b0671752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c7bbb5d1deafbb89205b493d63ce6da2548a0a129b640a7c6ac69d2a32010d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bbb5d1deafbb89205b493d63ce6da2548a0a129b640a7c6ac69d2a32010d6b->enter($__internal_c7bbb5d1deafbb89205b493d63ce6da2548a0a129b640a7c6ac69d2a32010d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1bccc42623f48083b6ea9f937ad2f25118e512e345681d2065ff8963b0671752->leave($__internal_1bccc42623f48083b6ea9f937ad2f25118e512e345681d2065ff8963b0671752_prof);

        
        $__internal_c7bbb5d1deafbb89205b493d63ce6da2548a0a129b640a7c6ac69d2a32010d6b->leave($__internal_c7bbb5d1deafbb89205b493d63ce6da2548a0a129b640a7c6ac69d2a32010d6b_prof);

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
