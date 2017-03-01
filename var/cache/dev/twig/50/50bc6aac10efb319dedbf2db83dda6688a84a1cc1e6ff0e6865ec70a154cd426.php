<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_e1347b4b5763be5a0c597476767506fa3fcb953f5ac2cb5827c9df986e23d30e extends Twig_Template
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
        $__internal_3bbf47e444275349d64957105e55cd9f28dbc6771efa6f01d2bfc4607db6711f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bbf47e444275349d64957105e55cd9f28dbc6771efa6f01d2bfc4607db6711f->enter($__internal_3bbf47e444275349d64957105e55cd9f28dbc6771efa6f01d2bfc4607db6711f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_a1dbd3c8f16a6c23b1516988a69bdc0541fb4d49e99a346425e71bf1f35af3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1dbd3c8f16a6c23b1516988a69bdc0541fb4d49e99a346425e71bf1f35af3ba->enter($__internal_a1dbd3c8f16a6c23b1516988a69bdc0541fb4d49e99a346425e71bf1f35af3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3bbf47e444275349d64957105e55cd9f28dbc6771efa6f01d2bfc4607db6711f->leave($__internal_3bbf47e444275349d64957105e55cd9f28dbc6771efa6f01d2bfc4607db6711f_prof);

        
        $__internal_a1dbd3c8f16a6c23b1516988a69bdc0541fb4d49e99a346425e71bf1f35af3ba->leave($__internal_a1dbd3c8f16a6c23b1516988a69bdc0541fb4d49e99a346425e71bf1f35af3ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
