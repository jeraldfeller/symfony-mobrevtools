<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_fe7f0f7316395a6d425a1a49b98b007ff324fe05d111bc701e58a9e74dc62c34 extends Twig_Template
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
        $__internal_f952992cc695f15aeb497da5a9b78483ea876998e1942a01f34fa0061190b38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f952992cc695f15aeb497da5a9b78483ea876998e1942a01f34fa0061190b38c->enter($__internal_f952992cc695f15aeb497da5a9b78483ea876998e1942a01f34fa0061190b38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_6bb0b0ba511842512d5220a6d30c47ec0510beb28b61482da01cc3a36cc477d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb0b0ba511842512d5220a6d30c47ec0510beb28b61482da01cc3a36cc477d0->enter($__internal_6bb0b0ba511842512d5220a6d30c47ec0510beb28b61482da01cc3a36cc477d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f952992cc695f15aeb497da5a9b78483ea876998e1942a01f34fa0061190b38c->leave($__internal_f952992cc695f15aeb497da5a9b78483ea876998e1942a01f34fa0061190b38c_prof);

        
        $__internal_6bb0b0ba511842512d5220a6d30c47ec0510beb28b61482da01cc3a36cc477d0->leave($__internal_6bb0b0ba511842512d5220a6d30c47ec0510beb28b61482da01cc3a36cc477d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
