<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1e2af730eb385af8d51df122d2295a4e63ed605b4e3891b933bb3960c5080881 extends Twig_Template
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
        $__internal_72a59f59196789379559eef921b4fa52a135ff1b7302f6b4db6a5fd1c0038ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a59f59196789379559eef921b4fa52a135ff1b7302f6b4db6a5fd1c0038ce0->enter($__internal_72a59f59196789379559eef921b4fa52a135ff1b7302f6b4db6a5fd1c0038ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_7cdb69da07be72dfae3fad2e782470438e1f22b898de58935929f4e62ef0b43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cdb69da07be72dfae3fad2e782470438e1f22b898de58935929f4e62ef0b43e->enter($__internal_7cdb69da07be72dfae3fad2e782470438e1f22b898de58935929f4e62ef0b43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_72a59f59196789379559eef921b4fa52a135ff1b7302f6b4db6a5fd1c0038ce0->leave($__internal_72a59f59196789379559eef921b4fa52a135ff1b7302f6b4db6a5fd1c0038ce0_prof);

        
        $__internal_7cdb69da07be72dfae3fad2e782470438e1f22b898de58935929f4e62ef0b43e->leave($__internal_7cdb69da07be72dfae3fad2e782470438e1f22b898de58935929f4e62ef0b43e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
