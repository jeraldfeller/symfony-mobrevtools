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
        $__internal_2275969870f1074a36a0a4cb4e7dcb86d1006f8f1c831402852af4853d389fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2275969870f1074a36a0a4cb4e7dcb86d1006f8f1c831402852af4853d389fbf->enter($__internal_2275969870f1074a36a0a4cb4e7dcb86d1006f8f1c831402852af4853d389fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a64d1319bf351afce085165ac7c3a480d88902798b065c8c2b929633d9b83375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64d1319bf351afce085165ac7c3a480d88902798b065c8c2b929633d9b83375->enter($__internal_a64d1319bf351afce085165ac7c3a480d88902798b065c8c2b929633d9b83375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2275969870f1074a36a0a4cb4e7dcb86d1006f8f1c831402852af4853d389fbf->leave($__internal_2275969870f1074a36a0a4cb4e7dcb86d1006f8f1c831402852af4853d389fbf_prof);

        
        $__internal_a64d1319bf351afce085165ac7c3a480d88902798b065c8c2b929633d9b83375->leave($__internal_a64d1319bf351afce085165ac7c3a480d88902798b065c8c2b929633d9b83375_prof);

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
