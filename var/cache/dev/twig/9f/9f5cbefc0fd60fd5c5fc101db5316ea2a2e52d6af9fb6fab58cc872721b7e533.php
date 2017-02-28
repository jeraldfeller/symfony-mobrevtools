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
        $__internal_3237e19b79d81b2a815c2b7adf2423e53d1903f3a6752abb7dc205655ebf1b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3237e19b79d81b2a815c2b7adf2423e53d1903f3a6752abb7dc205655ebf1b60->enter($__internal_3237e19b79d81b2a815c2b7adf2423e53d1903f3a6752abb7dc205655ebf1b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_60070eeb9fb139201d28664f3b30d869c4cf3a19ba1aa1f1e07103469b1bb717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60070eeb9fb139201d28664f3b30d869c4cf3a19ba1aa1f1e07103469b1bb717->enter($__internal_60070eeb9fb139201d28664f3b30d869c4cf3a19ba1aa1f1e07103469b1bb717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3237e19b79d81b2a815c2b7adf2423e53d1903f3a6752abb7dc205655ebf1b60->leave($__internal_3237e19b79d81b2a815c2b7adf2423e53d1903f3a6752abb7dc205655ebf1b60_prof);

        
        $__internal_60070eeb9fb139201d28664f3b30d869c4cf3a19ba1aa1f1e07103469b1bb717->leave($__internal_60070eeb9fb139201d28664f3b30d869c4cf3a19ba1aa1f1e07103469b1bb717_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aaacbb286e930e9558887652dc5104c37cf23aff2619c0c0b4f7fad295444b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaacbb286e930e9558887652dc5104c37cf23aff2619c0c0b4f7fad295444b7e->enter($__internal_aaacbb286e930e9558887652dc5104c37cf23aff2619c0c0b4f7fad295444b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9ad012bc4d404e983a02b5b69cbba5d4e8139d773efff3f2477a040ea55c0bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad012bc4d404e983a02b5b69cbba5d4e8139d773efff3f2477a040ea55c0bfd->enter($__internal_9ad012bc4d404e983a02b5b69cbba5d4e8139d773efff3f2477a040ea55c0bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9ad012bc4d404e983a02b5b69cbba5d4e8139d773efff3f2477a040ea55c0bfd->leave($__internal_9ad012bc4d404e983a02b5b69cbba5d4e8139d773efff3f2477a040ea55c0bfd_prof);

        
        $__internal_aaacbb286e930e9558887652dc5104c37cf23aff2619c0c0b4f7fad295444b7e->leave($__internal_aaacbb286e930e9558887652dc5104c37cf23aff2619c0c0b4f7fad295444b7e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0437c38a1646f85e05d76e74fb34ec843044e5c4dd799daaa5f5174a9317dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0437c38a1646f85e05d76e74fb34ec843044e5c4dd799daaa5f5174a9317dd0->enter($__internal_e0437c38a1646f85e05d76e74fb34ec843044e5c4dd799daaa5f5174a9317dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_01e54fbfacc1eb255192edffc4ad07384968cf350319d8d79b63460ad6d0f1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e54fbfacc1eb255192edffc4ad07384968cf350319d8d79b63460ad6d0f1d3->enter($__internal_01e54fbfacc1eb255192edffc4ad07384968cf350319d8d79b63460ad6d0f1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_01e54fbfacc1eb255192edffc4ad07384968cf350319d8d79b63460ad6d0f1d3->leave($__internal_01e54fbfacc1eb255192edffc4ad07384968cf350319d8d79b63460ad6d0f1d3_prof);

        
        $__internal_e0437c38a1646f85e05d76e74fb34ec843044e5c4dd799daaa5f5174a9317dd0->leave($__internal_e0437c38a1646f85e05d76e74fb34ec843044e5c4dd799daaa5f5174a9317dd0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c45ffef76244dd2a13080e4dcb97e1539073c6eb4496ec18f9efa0b440f69d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c45ffef76244dd2a13080e4dcb97e1539073c6eb4496ec18f9efa0b440f69d4->enter($__internal_4c45ffef76244dd2a13080e4dcb97e1539073c6eb4496ec18f9efa0b440f69d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5134a0271e47931b574a215bccc5843c5e1884d2bfd9a109183dabac559e4ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5134a0271e47931b574a215bccc5843c5e1884d2bfd9a109183dabac559e4ae9->enter($__internal_5134a0271e47931b574a215bccc5843c5e1884d2bfd9a109183dabac559e4ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5134a0271e47931b574a215bccc5843c5e1884d2bfd9a109183dabac559e4ae9->leave($__internal_5134a0271e47931b574a215bccc5843c5e1884d2bfd9a109183dabac559e4ae9_prof);

        
        $__internal_4c45ffef76244dd2a13080e4dcb97e1539073c6eb4496ec18f9efa0b440f69d4->leave($__internal_4c45ffef76244dd2a13080e4dcb97e1539073c6eb4496ec18f9efa0b440f69d4_prof);

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
