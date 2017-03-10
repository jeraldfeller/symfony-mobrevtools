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
        $__internal_56ad91c8dc3d165adbf2695fbf103bbe2f77ffa7e186a84a63da08a323f92e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ad91c8dc3d165adbf2695fbf103bbe2f77ffa7e186a84a63da08a323f92e4d->enter($__internal_56ad91c8dc3d165adbf2695fbf103bbe2f77ffa7e186a84a63da08a323f92e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a8576b04e7526357294b1a3940f0f294e6bd68f88e17b44aa41c86cf22197d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8576b04e7526357294b1a3940f0f294e6bd68f88e17b44aa41c86cf22197d84->enter($__internal_a8576b04e7526357294b1a3940f0f294e6bd68f88e17b44aa41c86cf22197d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56ad91c8dc3d165adbf2695fbf103bbe2f77ffa7e186a84a63da08a323f92e4d->leave($__internal_56ad91c8dc3d165adbf2695fbf103bbe2f77ffa7e186a84a63da08a323f92e4d_prof);

        
        $__internal_a8576b04e7526357294b1a3940f0f294e6bd68f88e17b44aa41c86cf22197d84->leave($__internal_a8576b04e7526357294b1a3940f0f294e6bd68f88e17b44aa41c86cf22197d84_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1dd78087035d247b7ea6aa739c933e337efd5e848525f63fd7b5086e7472c42c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd78087035d247b7ea6aa739c933e337efd5e848525f63fd7b5086e7472c42c->enter($__internal_1dd78087035d247b7ea6aa739c933e337efd5e848525f63fd7b5086e7472c42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_74c19641644429d7c8574f6ea267733742a1cb273ce7cfd8661743061b49af37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c19641644429d7c8574f6ea267733742a1cb273ce7cfd8661743061b49af37->enter($__internal_74c19641644429d7c8574f6ea267733742a1cb273ce7cfd8661743061b49af37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_74c19641644429d7c8574f6ea267733742a1cb273ce7cfd8661743061b49af37->leave($__internal_74c19641644429d7c8574f6ea267733742a1cb273ce7cfd8661743061b49af37_prof);

        
        $__internal_1dd78087035d247b7ea6aa739c933e337efd5e848525f63fd7b5086e7472c42c->leave($__internal_1dd78087035d247b7ea6aa739c933e337efd5e848525f63fd7b5086e7472c42c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b353c3eb6b753743924c667a5db245eca76dd19e105ed45e6c14aa979bee0e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b353c3eb6b753743924c667a5db245eca76dd19e105ed45e6c14aa979bee0e54->enter($__internal_b353c3eb6b753743924c667a5db245eca76dd19e105ed45e6c14aa979bee0e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9888f7efe77e40608842247cebce5819d3d52b98fcd4291ab627cf419c292f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9888f7efe77e40608842247cebce5819d3d52b98fcd4291ab627cf419c292f09->enter($__internal_9888f7efe77e40608842247cebce5819d3d52b98fcd4291ab627cf419c292f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9888f7efe77e40608842247cebce5819d3d52b98fcd4291ab627cf419c292f09->leave($__internal_9888f7efe77e40608842247cebce5819d3d52b98fcd4291ab627cf419c292f09_prof);

        
        $__internal_b353c3eb6b753743924c667a5db245eca76dd19e105ed45e6c14aa979bee0e54->leave($__internal_b353c3eb6b753743924c667a5db245eca76dd19e105ed45e6c14aa979bee0e54_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1b68483c4b43153f24ad5ce8b4b8695c11e59b355dcbe7961c1b3db030bcba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b68483c4b43153f24ad5ce8b4b8695c11e59b355dcbe7961c1b3db030bcba0->enter($__internal_e1b68483c4b43153f24ad5ce8b4b8695c11e59b355dcbe7961c1b3db030bcba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fbe35ef48a8c05488d453d3588c475688b55e5cceb3fc21a7d43f34761077071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe35ef48a8c05488d453d3588c475688b55e5cceb3fc21a7d43f34761077071->enter($__internal_fbe35ef48a8c05488d453d3588c475688b55e5cceb3fc21a7d43f34761077071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fbe35ef48a8c05488d453d3588c475688b55e5cceb3fc21a7d43f34761077071->leave($__internal_fbe35ef48a8c05488d453d3588c475688b55e5cceb3fc21a7d43f34761077071_prof);

        
        $__internal_e1b68483c4b43153f24ad5ce8b4b8695c11e59b355dcbe7961c1b3db030bcba0->leave($__internal_e1b68483c4b43153f24ad5ce8b4b8695c11e59b355dcbe7961c1b3db030bcba0_prof);

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
