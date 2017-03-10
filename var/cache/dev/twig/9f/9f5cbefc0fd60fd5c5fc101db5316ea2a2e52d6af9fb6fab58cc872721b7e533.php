<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_85d12e649210931c67134325f95080093f5d5f05409e9d2829f43e0fa7ad76d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_fe9c120a5a87a6f730bb00e8eca7f23f2e80beac1520e2cca7db6896aef0cc56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9c120a5a87a6f730bb00e8eca7f23f2e80beac1520e2cca7db6896aef0cc56->enter($__internal_fe9c120a5a87a6f730bb00e8eca7f23f2e80beac1520e2cca7db6896aef0cc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_42bfba9b9689557407de95581b0b7eeacb7e99385adf19b3a9c330afea168959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bfba9b9689557407de95581b0b7eeacb7e99385adf19b3a9c330afea168959->enter($__internal_42bfba9b9689557407de95581b0b7eeacb7e99385adf19b3a9c330afea168959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe9c120a5a87a6f730bb00e8eca7f23f2e80beac1520e2cca7db6896aef0cc56->leave($__internal_fe9c120a5a87a6f730bb00e8eca7f23f2e80beac1520e2cca7db6896aef0cc56_prof);

        
        $__internal_42bfba9b9689557407de95581b0b7eeacb7e99385adf19b3a9c330afea168959->leave($__internal_42bfba9b9689557407de95581b0b7eeacb7e99385adf19b3a9c330afea168959_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d87866f57772cd809711bd495ecd818a85138181be4500f730363ee49dab243c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87866f57772cd809711bd495ecd818a85138181be4500f730363ee49dab243c->enter($__internal_d87866f57772cd809711bd495ecd818a85138181be4500f730363ee49dab243c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c1f4fdd6a223148e8f1d85d32b65e0bb20ab659c4e0b616293cfbfad71f151b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f4fdd6a223148e8f1d85d32b65e0bb20ab659c4e0b616293cfbfad71f151b3->enter($__internal_c1f4fdd6a223148e8f1d85d32b65e0bb20ab659c4e0b616293cfbfad71f151b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c1f4fdd6a223148e8f1d85d32b65e0bb20ab659c4e0b616293cfbfad71f151b3->leave($__internal_c1f4fdd6a223148e8f1d85d32b65e0bb20ab659c4e0b616293cfbfad71f151b3_prof);

        
        $__internal_d87866f57772cd809711bd495ecd818a85138181be4500f730363ee49dab243c->leave($__internal_d87866f57772cd809711bd495ecd818a85138181be4500f730363ee49dab243c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5b38eed38be831185dac2480eef1f26158f6f808bfed103413a46d7479d0192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b38eed38be831185dac2480eef1f26158f6f808bfed103413a46d7479d0192->enter($__internal_a5b38eed38be831185dac2480eef1f26158f6f808bfed103413a46d7479d0192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9720ce26531f5bab67ffb7f093c6b43b31566490bb4c469cec9c1976bcffc3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9720ce26531f5bab67ffb7f093c6b43b31566490bb4c469cec9c1976bcffc3d8->enter($__internal_9720ce26531f5bab67ffb7f093c6b43b31566490bb4c469cec9c1976bcffc3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9720ce26531f5bab67ffb7f093c6b43b31566490bb4c469cec9c1976bcffc3d8->leave($__internal_9720ce26531f5bab67ffb7f093c6b43b31566490bb4c469cec9c1976bcffc3d8_prof);

        
        $__internal_a5b38eed38be831185dac2480eef1f26158f6f808bfed103413a46d7479d0192->leave($__internal_a5b38eed38be831185dac2480eef1f26158f6f808bfed103413a46d7479d0192_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba8233dcd9f31414092602ad44e650672aa445c3e12d31dded2bfe595e8157a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba8233dcd9f31414092602ad44e650672aa445c3e12d31dded2bfe595e8157a9->enter($__internal_ba8233dcd9f31414092602ad44e650672aa445c3e12d31dded2bfe595e8157a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_489c977f69e0daf38b2e603dedea88372aa058ad9ca73e3357f976850057a406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489c977f69e0daf38b2e603dedea88372aa058ad9ca73e3357f976850057a406->enter($__internal_489c977f69e0daf38b2e603dedea88372aa058ad9ca73e3357f976850057a406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_489c977f69e0daf38b2e603dedea88372aa058ad9ca73e3357f976850057a406->leave($__internal_489c977f69e0daf38b2e603dedea88372aa058ad9ca73e3357f976850057a406_prof);

        
        $__internal_ba8233dcd9f31414092602ad44e650672aa445c3e12d31dded2bfe595e8157a9->leave($__internal_ba8233dcd9f31414092602ad44e650672aa445c3e12d31dded2bfe595e8157a9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
