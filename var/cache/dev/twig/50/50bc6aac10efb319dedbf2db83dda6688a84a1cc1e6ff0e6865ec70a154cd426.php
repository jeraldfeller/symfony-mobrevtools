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
        $__internal_2a639166adbc627e524a8a2938b13e18886cb1d42c245274ae870561ad879733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a639166adbc627e524a8a2938b13e18886cb1d42c245274ae870561ad879733->enter($__internal_2a639166adbc627e524a8a2938b13e18886cb1d42c245274ae870561ad879733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_aa16c208e1bfb029179c654ac9b6ff4072932966cf162f5bd8a2adbc82134d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa16c208e1bfb029179c654ac9b6ff4072932966cf162f5bd8a2adbc82134d89->enter($__internal_aa16c208e1bfb029179c654ac9b6ff4072932966cf162f5bd8a2adbc82134d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2a639166adbc627e524a8a2938b13e18886cb1d42c245274ae870561ad879733->leave($__internal_2a639166adbc627e524a8a2938b13e18886cb1d42c245274ae870561ad879733_prof);

        
        $__internal_aa16c208e1bfb029179c654ac9b6ff4072932966cf162f5bd8a2adbc82134d89->leave($__internal_aa16c208e1bfb029179c654ac9b6ff4072932966cf162f5bd8a2adbc82134d89_prof);

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
