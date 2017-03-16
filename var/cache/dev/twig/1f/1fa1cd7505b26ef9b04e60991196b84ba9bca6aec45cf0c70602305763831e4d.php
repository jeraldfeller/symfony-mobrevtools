<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_af5aa7b23cf43e00858890d5c81df63821c55bb99833b464116cf0360424cded extends Twig_Template
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
        $__internal_3b69aaaca5d8471c840443a3e7af8f89e6d04a2c5a10247c671a444401d85ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b69aaaca5d8471c840443a3e7af8f89e6d04a2c5a10247c671a444401d85ccb->enter($__internal_3b69aaaca5d8471c840443a3e7af8f89e6d04a2c5a10247c671a444401d85ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_61ee0c5f9d27c4082e11728acdbdf2b7ad245164e12dffb9a3d8b3dd41105e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ee0c5f9d27c4082e11728acdbdf2b7ad245164e12dffb9a3d8b3dd41105e50->enter($__internal_61ee0c5f9d27c4082e11728acdbdf2b7ad245164e12dffb9a3d8b3dd41105e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3b69aaaca5d8471c840443a3e7af8f89e6d04a2c5a10247c671a444401d85ccb->leave($__internal_3b69aaaca5d8471c840443a3e7af8f89e6d04a2c5a10247c671a444401d85ccb_prof);

        
        $__internal_61ee0c5f9d27c4082e11728acdbdf2b7ad245164e12dffb9a3d8b3dd41105e50->leave($__internal_61ee0c5f9d27c4082e11728acdbdf2b7ad245164e12dffb9a3d8b3dd41105e50_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
