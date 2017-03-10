<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7917374b3bb77fd7c0414183bee09e024f78cdbac6f772ed65a2c56da7731e1d extends Twig_Template
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
        $__internal_f233fafad10f8b28ff043ef87155888e121ff088186f65246e00886b30bea4b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f233fafad10f8b28ff043ef87155888e121ff088186f65246e00886b30bea4b2->enter($__internal_f233fafad10f8b28ff043ef87155888e121ff088186f65246e00886b30bea4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_140614fdf7c8ffae04a79c357f817f7b59bff552ae1a364a8551cefd4f72e9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140614fdf7c8ffae04a79c357f817f7b59bff552ae1a364a8551cefd4f72e9dc->enter($__internal_140614fdf7c8ffae04a79c357f817f7b59bff552ae1a364a8551cefd4f72e9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f233fafad10f8b28ff043ef87155888e121ff088186f65246e00886b30bea4b2->leave($__internal_f233fafad10f8b28ff043ef87155888e121ff088186f65246e00886b30bea4b2_prof);

        
        $__internal_140614fdf7c8ffae04a79c357f817f7b59bff552ae1a364a8551cefd4f72e9dc->leave($__internal_140614fdf7c8ffae04a79c357f817f7b59bff552ae1a364a8551cefd4f72e9dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
