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
        $__internal_c02d1e0e4cbe9e6fd850ee36ef3c1073b88b0bb4fb00ae0658aada9fb295a4c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02d1e0e4cbe9e6fd850ee36ef3c1073b88b0bb4fb00ae0658aada9fb295a4c6->enter($__internal_c02d1e0e4cbe9e6fd850ee36ef3c1073b88b0bb4fb00ae0658aada9fb295a4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_08c6d891a7d156dff261c9db93d477f3f4f8e25ffba881bc95e9aa0b391e141e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c6d891a7d156dff261c9db93d477f3f4f8e25ffba881bc95e9aa0b391e141e->enter($__internal_08c6d891a7d156dff261c9db93d477f3f4f8e25ffba881bc95e9aa0b391e141e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c02d1e0e4cbe9e6fd850ee36ef3c1073b88b0bb4fb00ae0658aada9fb295a4c6->leave($__internal_c02d1e0e4cbe9e6fd850ee36ef3c1073b88b0bb4fb00ae0658aada9fb295a4c6_prof);

        
        $__internal_08c6d891a7d156dff261c9db93d477f3f4f8e25ffba881bc95e9aa0b391e141e->leave($__internal_08c6d891a7d156dff261c9db93d477f3f4f8e25ffba881bc95e9aa0b391e141e_prof);

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
