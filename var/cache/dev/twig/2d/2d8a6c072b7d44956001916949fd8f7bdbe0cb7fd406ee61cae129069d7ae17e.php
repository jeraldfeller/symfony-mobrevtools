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
        $__internal_fd898d9e071bb2dfb0939a1001a717c662ca67fdf2a1c572e3ef80dfe5430109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd898d9e071bb2dfb0939a1001a717c662ca67fdf2a1c572e3ef80dfe5430109->enter($__internal_fd898d9e071bb2dfb0939a1001a717c662ca67fdf2a1c572e3ef80dfe5430109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_c4fa8234ac36a28d90fc364b2f17723770ec47a1a338840998c3d6603c3e232a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fa8234ac36a28d90fc364b2f17723770ec47a1a338840998c3d6603c3e232a->enter($__internal_c4fa8234ac36a28d90fc364b2f17723770ec47a1a338840998c3d6603c3e232a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fd898d9e071bb2dfb0939a1001a717c662ca67fdf2a1c572e3ef80dfe5430109->leave($__internal_fd898d9e071bb2dfb0939a1001a717c662ca67fdf2a1c572e3ef80dfe5430109_prof);

        
        $__internal_c4fa8234ac36a28d90fc364b2f17723770ec47a1a338840998c3d6603c3e232a->leave($__internal_c4fa8234ac36a28d90fc364b2f17723770ec47a1a338840998c3d6603c3e232a_prof);

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
