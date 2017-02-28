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
        $__internal_b00ae4716c4eaac56b278b5a16ca332acf43c098ea646f898b6d9a6c98b769ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00ae4716c4eaac56b278b5a16ca332acf43c098ea646f898b6d9a6c98b769ac->enter($__internal_b00ae4716c4eaac56b278b5a16ca332acf43c098ea646f898b6d9a6c98b769ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_6bc527a7f8b0cd279b8804010d9cb4145f221829235d9748ea08afc0349fb9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc527a7f8b0cd279b8804010d9cb4145f221829235d9748ea08afc0349fb9b1->enter($__internal_6bc527a7f8b0cd279b8804010d9cb4145f221829235d9748ea08afc0349fb9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b00ae4716c4eaac56b278b5a16ca332acf43c098ea646f898b6d9a6c98b769ac->leave($__internal_b00ae4716c4eaac56b278b5a16ca332acf43c098ea646f898b6d9a6c98b769ac_prof);

        
        $__internal_6bc527a7f8b0cd279b8804010d9cb4145f221829235d9748ea08afc0349fb9b1->leave($__internal_6bc527a7f8b0cd279b8804010d9cb4145f221829235d9748ea08afc0349fb9b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4980ecaaa476d94b9218d01b96ed87959473cd82bfd258970664189624db2b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4980ecaaa476d94b9218d01b96ed87959473cd82bfd258970664189624db2b7d->enter($__internal_4980ecaaa476d94b9218d01b96ed87959473cd82bfd258970664189624db2b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0ef6ba164749841fc9c1c2ee5d3bf969c56dcc490b78e02cd78c98341a97079b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef6ba164749841fc9c1c2ee5d3bf969c56dcc490b78e02cd78c98341a97079b->enter($__internal_0ef6ba164749841fc9c1c2ee5d3bf969c56dcc490b78e02cd78c98341a97079b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0ef6ba164749841fc9c1c2ee5d3bf969c56dcc490b78e02cd78c98341a97079b->leave($__internal_0ef6ba164749841fc9c1c2ee5d3bf969c56dcc490b78e02cd78c98341a97079b_prof);

        
        $__internal_4980ecaaa476d94b9218d01b96ed87959473cd82bfd258970664189624db2b7d->leave($__internal_4980ecaaa476d94b9218d01b96ed87959473cd82bfd258970664189624db2b7d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b523d410c75aa91c8b4975b9f88b8b5057fe4fa3e0728bd66b7fcdb4ac79ffc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b523d410c75aa91c8b4975b9f88b8b5057fe4fa3e0728bd66b7fcdb4ac79ffc0->enter($__internal_b523d410c75aa91c8b4975b9f88b8b5057fe4fa3e0728bd66b7fcdb4ac79ffc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0c5a2ec638efe5f9ee722e079fd0fc0d841b54e4e8fa95aac8d69f065729c370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5a2ec638efe5f9ee722e079fd0fc0d841b54e4e8fa95aac8d69f065729c370->enter($__internal_0c5a2ec638efe5f9ee722e079fd0fc0d841b54e4e8fa95aac8d69f065729c370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c5a2ec638efe5f9ee722e079fd0fc0d841b54e4e8fa95aac8d69f065729c370->leave($__internal_0c5a2ec638efe5f9ee722e079fd0fc0d841b54e4e8fa95aac8d69f065729c370_prof);

        
        $__internal_b523d410c75aa91c8b4975b9f88b8b5057fe4fa3e0728bd66b7fcdb4ac79ffc0->leave($__internal_b523d410c75aa91c8b4975b9f88b8b5057fe4fa3e0728bd66b7fcdb4ac79ffc0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ef8e0f40b1cd197b80c37a326f54c4b0ee850e3e89449bcc9d2d7d49a61d365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef8e0f40b1cd197b80c37a326f54c4b0ee850e3e89449bcc9d2d7d49a61d365->enter($__internal_5ef8e0f40b1cd197b80c37a326f54c4b0ee850e3e89449bcc9d2d7d49a61d365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_facb31c697329ba13d6f60ed8b0de310311ccf84a69d2869524aed13e2b9ef08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_facb31c697329ba13d6f60ed8b0de310311ccf84a69d2869524aed13e2b9ef08->enter($__internal_facb31c697329ba13d6f60ed8b0de310311ccf84a69d2869524aed13e2b9ef08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_facb31c697329ba13d6f60ed8b0de310311ccf84a69d2869524aed13e2b9ef08->leave($__internal_facb31c697329ba13d6f60ed8b0de310311ccf84a69d2869524aed13e2b9ef08_prof);

        
        $__internal_5ef8e0f40b1cd197b80c37a326f54c4b0ee850e3e89449bcc9d2d7d49a61d365->leave($__internal_5ef8e0f40b1cd197b80c37a326f54c4b0ee850e3e89449bcc9d2d7d49a61d365_prof);

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
