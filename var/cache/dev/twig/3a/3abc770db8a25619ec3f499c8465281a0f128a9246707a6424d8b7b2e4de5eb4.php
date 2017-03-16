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
        $__internal_d0bc87410e5af6c7b45209bb6577e0dec650406ce7f4e4ef8bfab7a5c521f6ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0bc87410e5af6c7b45209bb6577e0dec650406ce7f4e4ef8bfab7a5c521f6ef->enter($__internal_d0bc87410e5af6c7b45209bb6577e0dec650406ce7f4e4ef8bfab7a5c521f6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8313a7b6f7d3c202f7278740471c7eb4c9ae86aa244a38c0e09236b94cd1512c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8313a7b6f7d3c202f7278740471c7eb4c9ae86aa244a38c0e09236b94cd1512c->enter($__internal_8313a7b6f7d3c202f7278740471c7eb4c9ae86aa244a38c0e09236b94cd1512c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0bc87410e5af6c7b45209bb6577e0dec650406ce7f4e4ef8bfab7a5c521f6ef->leave($__internal_d0bc87410e5af6c7b45209bb6577e0dec650406ce7f4e4ef8bfab7a5c521f6ef_prof);

        
        $__internal_8313a7b6f7d3c202f7278740471c7eb4c9ae86aa244a38c0e09236b94cd1512c->leave($__internal_8313a7b6f7d3c202f7278740471c7eb4c9ae86aa244a38c0e09236b94cd1512c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ebc3f1803b6f0894ec7907ab0f696355743cbfbff0bb3789784658fa67ff9b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ebc3f1803b6f0894ec7907ab0f696355743cbfbff0bb3789784658fa67ff9b5->enter($__internal_4ebc3f1803b6f0894ec7907ab0f696355743cbfbff0bb3789784658fa67ff9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_13317b8a0954b7aade3de934037e9fca213a35697aae8965207a0e89baa706d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13317b8a0954b7aade3de934037e9fca213a35697aae8965207a0e89baa706d0->enter($__internal_13317b8a0954b7aade3de934037e9fca213a35697aae8965207a0e89baa706d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_13317b8a0954b7aade3de934037e9fca213a35697aae8965207a0e89baa706d0->leave($__internal_13317b8a0954b7aade3de934037e9fca213a35697aae8965207a0e89baa706d0_prof);

        
        $__internal_4ebc3f1803b6f0894ec7907ab0f696355743cbfbff0bb3789784658fa67ff9b5->leave($__internal_4ebc3f1803b6f0894ec7907ab0f696355743cbfbff0bb3789784658fa67ff9b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b7ea93e2fd2f8485e36c1a153cbde374944662c6d653448561c7663494d88fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7ea93e2fd2f8485e36c1a153cbde374944662c6d653448561c7663494d88fd->enter($__internal_0b7ea93e2fd2f8485e36c1a153cbde374944662c6d653448561c7663494d88fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9efb0b60fadc45a0b6f904dd64fe03573e1f95f3ee30f34d798d23ed58d1075e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efb0b60fadc45a0b6f904dd64fe03573e1f95f3ee30f34d798d23ed58d1075e->enter($__internal_9efb0b60fadc45a0b6f904dd64fe03573e1f95f3ee30f34d798d23ed58d1075e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9efb0b60fadc45a0b6f904dd64fe03573e1f95f3ee30f34d798d23ed58d1075e->leave($__internal_9efb0b60fadc45a0b6f904dd64fe03573e1f95f3ee30f34d798d23ed58d1075e_prof);

        
        $__internal_0b7ea93e2fd2f8485e36c1a153cbde374944662c6d653448561c7663494d88fd->leave($__internal_0b7ea93e2fd2f8485e36c1a153cbde374944662c6d653448561c7663494d88fd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a7efcfa5e338c492012c75233b2cb05dc6d12c04a8a4df87dacd8915dffaab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7efcfa5e338c492012c75233b2cb05dc6d12c04a8a4df87dacd8915dffaab6->enter($__internal_6a7efcfa5e338c492012c75233b2cb05dc6d12c04a8a4df87dacd8915dffaab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f2d201c1c6efbe8cc3c815b3d6b366c642f090f8205bafebf549e67d2126d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2d201c1c6efbe8cc3c815b3d6b366c642f090f8205bafebf549e67d2126d37->enter($__internal_1f2d201c1c6efbe8cc3c815b3d6b366c642f090f8205bafebf549e67d2126d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f2d201c1c6efbe8cc3c815b3d6b366c642f090f8205bafebf549e67d2126d37->leave($__internal_1f2d201c1c6efbe8cc3c815b3d6b366c642f090f8205bafebf549e67d2126d37_prof);

        
        $__internal_6a7efcfa5e338c492012c75233b2cb05dc6d12c04a8a4df87dacd8915dffaab6->leave($__internal_6a7efcfa5e338c492012c75233b2cb05dc6d12c04a8a4df87dacd8915dffaab6_prof);

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
