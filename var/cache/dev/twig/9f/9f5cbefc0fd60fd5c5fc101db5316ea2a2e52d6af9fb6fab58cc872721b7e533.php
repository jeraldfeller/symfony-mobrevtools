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
        $__internal_91934f9d17dd36dd84e4611acad93cccc3e5f162b9f953e59e94166b87ea860d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91934f9d17dd36dd84e4611acad93cccc3e5f162b9f953e59e94166b87ea860d->enter($__internal_91934f9d17dd36dd84e4611acad93cccc3e5f162b9f953e59e94166b87ea860d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ca9aa83727d718e8fde0e863af7f6b04870ac4451129364fb86bea88dd0521a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9aa83727d718e8fde0e863af7f6b04870ac4451129364fb86bea88dd0521a3->enter($__internal_ca9aa83727d718e8fde0e863af7f6b04870ac4451129364fb86bea88dd0521a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91934f9d17dd36dd84e4611acad93cccc3e5f162b9f953e59e94166b87ea860d->leave($__internal_91934f9d17dd36dd84e4611acad93cccc3e5f162b9f953e59e94166b87ea860d_prof);

        
        $__internal_ca9aa83727d718e8fde0e863af7f6b04870ac4451129364fb86bea88dd0521a3->leave($__internal_ca9aa83727d718e8fde0e863af7f6b04870ac4451129364fb86bea88dd0521a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6f87be6943d2f64ee4e3e99e4dae3322422d34b5455f9f4fe0ed8f9d8dd8372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f87be6943d2f64ee4e3e99e4dae3322422d34b5455f9f4fe0ed8f9d8dd8372->enter($__internal_a6f87be6943d2f64ee4e3e99e4dae3322422d34b5455f9f4fe0ed8f9d8dd8372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_439b90ca83c9493d38172a91e390164a835e4b5d553a013d7cc8ad3745c524c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439b90ca83c9493d38172a91e390164a835e4b5d553a013d7cc8ad3745c524c9->enter($__internal_439b90ca83c9493d38172a91e390164a835e4b5d553a013d7cc8ad3745c524c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_439b90ca83c9493d38172a91e390164a835e4b5d553a013d7cc8ad3745c524c9->leave($__internal_439b90ca83c9493d38172a91e390164a835e4b5d553a013d7cc8ad3745c524c9_prof);

        
        $__internal_a6f87be6943d2f64ee4e3e99e4dae3322422d34b5455f9f4fe0ed8f9d8dd8372->leave($__internal_a6f87be6943d2f64ee4e3e99e4dae3322422d34b5455f9f4fe0ed8f9d8dd8372_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1df165e7c36dd2963465da8d330c8ce13c8d88543027bb1a9c64efdae8a0af53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df165e7c36dd2963465da8d330c8ce13c8d88543027bb1a9c64efdae8a0af53->enter($__internal_1df165e7c36dd2963465da8d330c8ce13c8d88543027bb1a9c64efdae8a0af53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4caa8ed3fcf6755647ca3e36b02383f2f70b1f81442a914bfac54d3684861ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4caa8ed3fcf6755647ca3e36b02383f2f70b1f81442a914bfac54d3684861ac7->enter($__internal_4caa8ed3fcf6755647ca3e36b02383f2f70b1f81442a914bfac54d3684861ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4caa8ed3fcf6755647ca3e36b02383f2f70b1f81442a914bfac54d3684861ac7->leave($__internal_4caa8ed3fcf6755647ca3e36b02383f2f70b1f81442a914bfac54d3684861ac7_prof);

        
        $__internal_1df165e7c36dd2963465da8d330c8ce13c8d88543027bb1a9c64efdae8a0af53->leave($__internal_1df165e7c36dd2963465da8d330c8ce13c8d88543027bb1a9c64efdae8a0af53_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd3d7d3ce68cf336fde5524a1a0c17704e779c07f256792a7c74c37095626e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3d7d3ce68cf336fde5524a1a0c17704e779c07f256792a7c74c37095626e27->enter($__internal_fd3d7d3ce68cf336fde5524a1a0c17704e779c07f256792a7c74c37095626e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4fd29a3cadf4d4ea414e19ab93c1bcd2e41e98c78d813a49d0267649d67212b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd29a3cadf4d4ea414e19ab93c1bcd2e41e98c78d813a49d0267649d67212b5->enter($__internal_4fd29a3cadf4d4ea414e19ab93c1bcd2e41e98c78d813a49d0267649d67212b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4fd29a3cadf4d4ea414e19ab93c1bcd2e41e98c78d813a49d0267649d67212b5->leave($__internal_4fd29a3cadf4d4ea414e19ab93c1bcd2e41e98c78d813a49d0267649d67212b5_prof);

        
        $__internal_fd3d7d3ce68cf336fde5524a1a0c17704e779c07f256792a7c74c37095626e27->leave($__internal_fd3d7d3ce68cf336fde5524a1a0c17704e779c07f256792a7c74c37095626e27_prof);

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
