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
        $__internal_3a0d0add9a9dd0fa1985a809e63ef653df5eca2d530757cc870301eb3f73be97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0d0add9a9dd0fa1985a809e63ef653df5eca2d530757cc870301eb3f73be97->enter($__internal_3a0d0add9a9dd0fa1985a809e63ef653df5eca2d530757cc870301eb3f73be97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_f35e9a4445041d5037e91fb593dbf233322eebadf56746426a7fb9bb2648d025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35e9a4445041d5037e91fb593dbf233322eebadf56746426a7fb9bb2648d025->enter($__internal_f35e9a4445041d5037e91fb593dbf233322eebadf56746426a7fb9bb2648d025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3a0d0add9a9dd0fa1985a809e63ef653df5eca2d530757cc870301eb3f73be97->leave($__internal_3a0d0add9a9dd0fa1985a809e63ef653df5eca2d530757cc870301eb3f73be97_prof);

        
        $__internal_f35e9a4445041d5037e91fb593dbf233322eebadf56746426a7fb9bb2648d025->leave($__internal_f35e9a4445041d5037e91fb593dbf233322eebadf56746426a7fb9bb2648d025_prof);

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
