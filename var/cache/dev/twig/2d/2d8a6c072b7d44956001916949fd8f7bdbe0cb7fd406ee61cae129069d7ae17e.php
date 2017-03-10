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
        $__internal_9a83413a15cbd25bdbc603efb771f6d32f081633aff668b5b87497adb64c75de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a83413a15cbd25bdbc603efb771f6d32f081633aff668b5b87497adb64c75de->enter($__internal_9a83413a15cbd25bdbc603efb771f6d32f081633aff668b5b87497adb64c75de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_936daa6825910a0997604065569cda662af4af7f5463bf59edcb578d78db6ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936daa6825910a0997604065569cda662af4af7f5463bf59edcb578d78db6ffe->enter($__internal_936daa6825910a0997604065569cda662af4af7f5463bf59edcb578d78db6ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9a83413a15cbd25bdbc603efb771f6d32f081633aff668b5b87497adb64c75de->leave($__internal_9a83413a15cbd25bdbc603efb771f6d32f081633aff668b5b87497adb64c75de_prof);

        
        $__internal_936daa6825910a0997604065569cda662af4af7f5463bf59edcb578d78db6ffe->leave($__internal_936daa6825910a0997604065569cda662af4af7f5463bf59edcb578d78db6ffe_prof);

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
