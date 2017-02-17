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
        $__internal_0e3488d8e74af726ca447c4622ab9f9cc06d3bf06607dd8f7c53ebf326108af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3488d8e74af726ca447c4622ab9f9cc06d3bf06607dd8f7c53ebf326108af2->enter($__internal_0e3488d8e74af726ca447c4622ab9f9cc06d3bf06607dd8f7c53ebf326108af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_b8f4f3224c0c01d483dac33b6f84a1e9b1e98f768efa31b40f6a403c95256790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f4f3224c0c01d483dac33b6f84a1e9b1e98f768efa31b40f6a403c95256790->enter($__internal_b8f4f3224c0c01d483dac33b6f84a1e9b1e98f768efa31b40f6a403c95256790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0e3488d8e74af726ca447c4622ab9f9cc06d3bf06607dd8f7c53ebf326108af2->leave($__internal_0e3488d8e74af726ca447c4622ab9f9cc06d3bf06607dd8f7c53ebf326108af2_prof);

        
        $__internal_b8f4f3224c0c01d483dac33b6f84a1e9b1e98f768efa31b40f6a403c95256790->leave($__internal_b8f4f3224c0c01d483dac33b6f84a1e9b1e98f768efa31b40f6a403c95256790_prof);

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
