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
        $__internal_4a2057d01a3f6bb06754adbab9f5dc7edfc3d006b13b14208f0a33605eedb945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2057d01a3f6bb06754adbab9f5dc7edfc3d006b13b14208f0a33605eedb945->enter($__internal_4a2057d01a3f6bb06754adbab9f5dc7edfc3d006b13b14208f0a33605eedb945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_5b7a22549c29e20d7368aab98a4a17c119a040e46d6f05b94a595244dc8b1437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7a22549c29e20d7368aab98a4a17c119a040e46d6f05b94a595244dc8b1437->enter($__internal_5b7a22549c29e20d7368aab98a4a17c119a040e46d6f05b94a595244dc8b1437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4a2057d01a3f6bb06754adbab9f5dc7edfc3d006b13b14208f0a33605eedb945->leave($__internal_4a2057d01a3f6bb06754adbab9f5dc7edfc3d006b13b14208f0a33605eedb945_prof);

        
        $__internal_5b7a22549c29e20d7368aab98a4a17c119a040e46d6f05b94a595244dc8b1437->leave($__internal_5b7a22549c29e20d7368aab98a4a17c119a040e46d6f05b94a595244dc8b1437_prof);

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
