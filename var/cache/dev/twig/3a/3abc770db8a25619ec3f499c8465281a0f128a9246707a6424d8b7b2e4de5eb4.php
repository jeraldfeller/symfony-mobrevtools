<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_cb2592bed280ed0d30d9ec8af8178824544eb5507e32b1501beebf4dc584ac8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9be9b3f73fb5e71bd7bc09506e4213519ba3b8ece08268156671f062f27567a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be9b3f73fb5e71bd7bc09506e4213519ba3b8ece08268156671f062f27567a8->enter($__internal_9be9b3f73fb5e71bd7bc09506e4213519ba3b8ece08268156671f062f27567a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_963d88c68a3b80ebf81db273ff9b896f009f98bc5f4d4089c09d1781a6365f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963d88c68a3b80ebf81db273ff9b896f009f98bc5f4d4089c09d1781a6365f99->enter($__internal_963d88c68a3b80ebf81db273ff9b896f009f98bc5f4d4089c09d1781a6365f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be9b3f73fb5e71bd7bc09506e4213519ba3b8ece08268156671f062f27567a8->leave($__internal_9be9b3f73fb5e71bd7bc09506e4213519ba3b8ece08268156671f062f27567a8_prof);

        
        $__internal_963d88c68a3b80ebf81db273ff9b896f009f98bc5f4d4089c09d1781a6365f99->leave($__internal_963d88c68a3b80ebf81db273ff9b896f009f98bc5f4d4089c09d1781a6365f99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_887d6fe866713f0fbfc4b0fd6ab90e0ceb5f67be01a988e2f1365def3a244b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887d6fe866713f0fbfc4b0fd6ab90e0ceb5f67be01a988e2f1365def3a244b78->enter($__internal_887d6fe866713f0fbfc4b0fd6ab90e0ceb5f67be01a988e2f1365def3a244b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed3f54a977e96ca0a357291936f4fbc37c638ef3017b9641ac216e3a1ad00eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3f54a977e96ca0a357291936f4fbc37c638ef3017b9641ac216e3a1ad00eca->enter($__internal_ed3f54a977e96ca0a357291936f4fbc37c638ef3017b9641ac216e3a1ad00eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ed3f54a977e96ca0a357291936f4fbc37c638ef3017b9641ac216e3a1ad00eca->leave($__internal_ed3f54a977e96ca0a357291936f4fbc37c638ef3017b9641ac216e3a1ad00eca_prof);

        
        $__internal_887d6fe866713f0fbfc4b0fd6ab90e0ceb5f67be01a988e2f1365def3a244b78->leave($__internal_887d6fe866713f0fbfc4b0fd6ab90e0ceb5f67be01a988e2f1365def3a244b78_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98acc3cea5ed197ff700313756c9c5506161b7ff2caf89c769c9960351fa5af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98acc3cea5ed197ff700313756c9c5506161b7ff2caf89c769c9960351fa5af9->enter($__internal_98acc3cea5ed197ff700313756c9c5506161b7ff2caf89c769c9960351fa5af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c33a2b93437f765f113cc6ee3da4af5a9fdde674fd70e4d14b4f342381f5a142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33a2b93437f765f113cc6ee3da4af5a9fdde674fd70e4d14b4f342381f5a142->enter($__internal_c33a2b93437f765f113cc6ee3da4af5a9fdde674fd70e4d14b4f342381f5a142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c33a2b93437f765f113cc6ee3da4af5a9fdde674fd70e4d14b4f342381f5a142->leave($__internal_c33a2b93437f765f113cc6ee3da4af5a9fdde674fd70e4d14b4f342381f5a142_prof);

        
        $__internal_98acc3cea5ed197ff700313756c9c5506161b7ff2caf89c769c9960351fa5af9->leave($__internal_98acc3cea5ed197ff700313756c9c5506161b7ff2caf89c769c9960351fa5af9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6891270f865aacfee2da2d705e9190a8b10bf3ca0b4cf41e7c470643056f515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6891270f865aacfee2da2d705e9190a8b10bf3ca0b4cf41e7c470643056f515->enter($__internal_b6891270f865aacfee2da2d705e9190a8b10bf3ca0b4cf41e7c470643056f515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cf029a6e03751d9cb8e97c90dbfcaf12a04ae8d31905433cca78795e00c12caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf029a6e03751d9cb8e97c90dbfcaf12a04ae8d31905433cca78795e00c12caa->enter($__internal_cf029a6e03751d9cb8e97c90dbfcaf12a04ae8d31905433cca78795e00c12caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cf029a6e03751d9cb8e97c90dbfcaf12a04ae8d31905433cca78795e00c12caa->leave($__internal_cf029a6e03751d9cb8e97c90dbfcaf12a04ae8d31905433cca78795e00c12caa_prof);

        
        $__internal_b6891270f865aacfee2da2d705e9190a8b10bf3ca0b4cf41e7c470643056f515->leave($__internal_b6891270f865aacfee2da2d705e9190a8b10bf3ca0b4cf41e7c470643056f515_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
