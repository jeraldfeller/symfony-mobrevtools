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
        $__internal_d03417dec8896f7e2712d4fcbc41c494e178dc289ba259d647f7924c79237978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03417dec8896f7e2712d4fcbc41c494e178dc289ba259d647f7924c79237978->enter($__internal_d03417dec8896f7e2712d4fcbc41c494e178dc289ba259d647f7924c79237978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_a757a9be9448a243a92bdf6bf836215e6010b592b38b384664c5755f2b429bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a757a9be9448a243a92bdf6bf836215e6010b592b38b384664c5755f2b429bb4->enter($__internal_a757a9be9448a243a92bdf6bf836215e6010b592b38b384664c5755f2b429bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_d03417dec8896f7e2712d4fcbc41c494e178dc289ba259d647f7924c79237978->leave($__internal_d03417dec8896f7e2712d4fcbc41c494e178dc289ba259d647f7924c79237978_prof);

        
        $__internal_a757a9be9448a243a92bdf6bf836215e6010b592b38b384664c5755f2b429bb4->leave($__internal_a757a9be9448a243a92bdf6bf836215e6010b592b38b384664c5755f2b429bb4_prof);

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
