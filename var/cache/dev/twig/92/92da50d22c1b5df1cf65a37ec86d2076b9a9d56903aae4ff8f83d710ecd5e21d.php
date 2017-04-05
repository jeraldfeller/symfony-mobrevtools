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
        $__internal_922ed30ab009c150412d021c59c2cd259639ddfb5839e182f8f0a57184ae97fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_922ed30ab009c150412d021c59c2cd259639ddfb5839e182f8f0a57184ae97fa->enter($__internal_922ed30ab009c150412d021c59c2cd259639ddfb5839e182f8f0a57184ae97fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_599df495f2405ec41fdee0b561474b43d779e03de835c0ea131a98f331bacd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599df495f2405ec41fdee0b561474b43d779e03de835c0ea131a98f331bacd7e->enter($__internal_599df495f2405ec41fdee0b561474b43d779e03de835c0ea131a98f331bacd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_922ed30ab009c150412d021c59c2cd259639ddfb5839e182f8f0a57184ae97fa->leave($__internal_922ed30ab009c150412d021c59c2cd259639ddfb5839e182f8f0a57184ae97fa_prof);

        
        $__internal_599df495f2405ec41fdee0b561474b43d779e03de835c0ea131a98f331bacd7e->leave($__internal_599df495f2405ec41fdee0b561474b43d779e03de835c0ea131a98f331bacd7e_prof);

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
