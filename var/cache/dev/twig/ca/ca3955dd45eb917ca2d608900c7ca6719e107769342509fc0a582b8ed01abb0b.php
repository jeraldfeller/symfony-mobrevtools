<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_eeadfd55b826f7fc0e467c8e8d540d18b4fccc747789d773b73bb62ddac9d188 extends Twig_Template
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
        $__internal_1fb04a68ef7ef3c6e63357e74065ffe33e6c99841eefe2a37878f6544ad8a842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb04a68ef7ef3c6e63357e74065ffe33e6c99841eefe2a37878f6544ad8a842->enter($__internal_1fb04a68ef7ef3c6e63357e74065ffe33e6c99841eefe2a37878f6544ad8a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_aa298e864fe08244842e8e23ddf74dc11b1b1e7e05a8e76aec84f02b1b6ad676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa298e864fe08244842e8e23ddf74dc11b1b1e7e05a8e76aec84f02b1b6ad676->enter($__internal_aa298e864fe08244842e8e23ddf74dc11b1b1e7e05a8e76aec84f02b1b6ad676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1fb04a68ef7ef3c6e63357e74065ffe33e6c99841eefe2a37878f6544ad8a842->leave($__internal_1fb04a68ef7ef3c6e63357e74065ffe33e6c99841eefe2a37878f6544ad8a842_prof);

        
        $__internal_aa298e864fe08244842e8e23ddf74dc11b1b1e7e05a8e76aec84f02b1b6ad676->leave($__internal_aa298e864fe08244842e8e23ddf74dc11b1b1e7e05a8e76aec84f02b1b6ad676_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
