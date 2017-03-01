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
        $__internal_28a3e6b2ddab7c4fe0f2dbcb1f2003c38d7fb980026b3c0c2ea7bc7030cda23b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a3e6b2ddab7c4fe0f2dbcb1f2003c38d7fb980026b3c0c2ea7bc7030cda23b->enter($__internal_28a3e6b2ddab7c4fe0f2dbcb1f2003c38d7fb980026b3c0c2ea7bc7030cda23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_c68f710e719ac62b82f9e1ead88736263be68f141c4adbea27f0be7fb53e2d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68f710e719ac62b82f9e1ead88736263be68f141c4adbea27f0be7fb53e2d49->enter($__internal_c68f710e719ac62b82f9e1ead88736263be68f141c4adbea27f0be7fb53e2d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_28a3e6b2ddab7c4fe0f2dbcb1f2003c38d7fb980026b3c0c2ea7bc7030cda23b->leave($__internal_28a3e6b2ddab7c4fe0f2dbcb1f2003c38d7fb980026b3c0c2ea7bc7030cda23b_prof);

        
        $__internal_c68f710e719ac62b82f9e1ead88736263be68f141c4adbea27f0be7fb53e2d49->leave($__internal_c68f710e719ac62b82f9e1ead88736263be68f141c4adbea27f0be7fb53e2d49_prof);

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
