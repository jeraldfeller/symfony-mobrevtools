<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_85cc88737432beff2edfa3a8c75fe32752a9f5d73459be98e794fc7f9e1e0764 extends Twig_Template
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
        $__internal_455cd6a5657f632f1750c3ebe47cad5dc484008533b3093c59b0aa4e29161c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455cd6a5657f632f1750c3ebe47cad5dc484008533b3093c59b0aa4e29161c86->enter($__internal_455cd6a5657f632f1750c3ebe47cad5dc484008533b3093c59b0aa4e29161c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_dfef119fdc8bfecc6a924d3919c4127e68ab15eb24a6fba6f23ba47ad1144b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfef119fdc8bfecc6a924d3919c4127e68ab15eb24a6fba6f23ba47ad1144b7d->enter($__internal_dfef119fdc8bfecc6a924d3919c4127e68ab15eb24a6fba6f23ba47ad1144b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_455cd6a5657f632f1750c3ebe47cad5dc484008533b3093c59b0aa4e29161c86->leave($__internal_455cd6a5657f632f1750c3ebe47cad5dc484008533b3093c59b0aa4e29161c86_prof);

        
        $__internal_dfef119fdc8bfecc6a924d3919c4127e68ab15eb24a6fba6f23ba47ad1144b7d->leave($__internal_dfef119fdc8bfecc6a924d3919c4127e68ab15eb24a6fba6f23ba47ad1144b7d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
