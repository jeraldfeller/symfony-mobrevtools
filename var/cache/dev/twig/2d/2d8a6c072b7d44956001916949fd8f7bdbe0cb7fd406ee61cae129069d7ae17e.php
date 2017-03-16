<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_659be6ed298a7cf014cf7e87cfd53676a6b5019eeac91e18050a9a1fc1cba5fb extends Twig_Template
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
        $__internal_e03fe5ef5f297d56b21d134be4731134cade6d97fa2a28fa30a5c9b130b68156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03fe5ef5f297d56b21d134be4731134cade6d97fa2a28fa30a5c9b130b68156->enter($__internal_e03fe5ef5f297d56b21d134be4731134cade6d97fa2a28fa30a5c9b130b68156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_e035a13ac5bd3d7523a3e4a352763cac7e685a55e22f67d1e892b2868602b871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e035a13ac5bd3d7523a3e4a352763cac7e685a55e22f67d1e892b2868602b871->enter($__internal_e035a13ac5bd3d7523a3e4a352763cac7e685a55e22f67d1e892b2868602b871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e03fe5ef5f297d56b21d134be4731134cade6d97fa2a28fa30a5c9b130b68156->leave($__internal_e03fe5ef5f297d56b21d134be4731134cade6d97fa2a28fa30a5c9b130b68156_prof);

        
        $__internal_e035a13ac5bd3d7523a3e4a352763cac7e685a55e22f67d1e892b2868602b871->leave($__internal_e035a13ac5bd3d7523a3e4a352763cac7e685a55e22f67d1e892b2868602b871_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
