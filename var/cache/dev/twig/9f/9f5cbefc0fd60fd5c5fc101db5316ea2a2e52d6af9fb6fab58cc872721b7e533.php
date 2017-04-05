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
        $__internal_b8401f75035c13275a436116e9ff56d048a9ae59c51ab7c7c76c47104415c5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8401f75035c13275a436116e9ff56d048a9ae59c51ab7c7c76c47104415c5e0->enter($__internal_b8401f75035c13275a436116e9ff56d048a9ae59c51ab7c7c76c47104415c5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ecbbf203bf4ae4140b583981bc3a58957cb5565115df1e455092d9c4b865a111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbbf203bf4ae4140b583981bc3a58957cb5565115df1e455092d9c4b865a111->enter($__internal_ecbbf203bf4ae4140b583981bc3a58957cb5565115df1e455092d9c4b865a111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8401f75035c13275a436116e9ff56d048a9ae59c51ab7c7c76c47104415c5e0->leave($__internal_b8401f75035c13275a436116e9ff56d048a9ae59c51ab7c7c76c47104415c5e0_prof);

        
        $__internal_ecbbf203bf4ae4140b583981bc3a58957cb5565115df1e455092d9c4b865a111->leave($__internal_ecbbf203bf4ae4140b583981bc3a58957cb5565115df1e455092d9c4b865a111_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c713ac841b5f99d9ceb39eede987d052396780fa0a228b632b4c17258998cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c713ac841b5f99d9ceb39eede987d052396780fa0a228b632b4c17258998cff->enter($__internal_0c713ac841b5f99d9ceb39eede987d052396780fa0a228b632b4c17258998cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cba05f351a92146f1c897bf85446c5142f8f8cebdd944aba1a15c75baa32c7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba05f351a92146f1c897bf85446c5142f8f8cebdd944aba1a15c75baa32c7cc->enter($__internal_cba05f351a92146f1c897bf85446c5142f8f8cebdd944aba1a15c75baa32c7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cba05f351a92146f1c897bf85446c5142f8f8cebdd944aba1a15c75baa32c7cc->leave($__internal_cba05f351a92146f1c897bf85446c5142f8f8cebdd944aba1a15c75baa32c7cc_prof);

        
        $__internal_0c713ac841b5f99d9ceb39eede987d052396780fa0a228b632b4c17258998cff->leave($__internal_0c713ac841b5f99d9ceb39eede987d052396780fa0a228b632b4c17258998cff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f48ce4f247073761b7e7ba1c1705305446c43e42733266c00a15c5d359b9366d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48ce4f247073761b7e7ba1c1705305446c43e42733266c00a15c5d359b9366d->enter($__internal_f48ce4f247073761b7e7ba1c1705305446c43e42733266c00a15c5d359b9366d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3026f048b5fc79f9582d1a722d49ad8cf48935ba208760ff9400e3316893af8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3026f048b5fc79f9582d1a722d49ad8cf48935ba208760ff9400e3316893af8d->enter($__internal_3026f048b5fc79f9582d1a722d49ad8cf48935ba208760ff9400e3316893af8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3026f048b5fc79f9582d1a722d49ad8cf48935ba208760ff9400e3316893af8d->leave($__internal_3026f048b5fc79f9582d1a722d49ad8cf48935ba208760ff9400e3316893af8d_prof);

        
        $__internal_f48ce4f247073761b7e7ba1c1705305446c43e42733266c00a15c5d359b9366d->leave($__internal_f48ce4f247073761b7e7ba1c1705305446c43e42733266c00a15c5d359b9366d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eac3d7198a69eb4a9ecf672115cb0fb45adb25258ac358cdb6b921340cd3463e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac3d7198a69eb4a9ecf672115cb0fb45adb25258ac358cdb6b921340cd3463e->enter($__internal_eac3d7198a69eb4a9ecf672115cb0fb45adb25258ac358cdb6b921340cd3463e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_54cda4a63deb26bb226a22e4ceb21704c41cee2b64c3ef60dccc1bffdf369840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cda4a63deb26bb226a22e4ceb21704c41cee2b64c3ef60dccc1bffdf369840->enter($__internal_54cda4a63deb26bb226a22e4ceb21704c41cee2b64c3ef60dccc1bffdf369840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_54cda4a63deb26bb226a22e4ceb21704c41cee2b64c3ef60dccc1bffdf369840->leave($__internal_54cda4a63deb26bb226a22e4ceb21704c41cee2b64c3ef60dccc1bffdf369840_prof);

        
        $__internal_eac3d7198a69eb4a9ecf672115cb0fb45adb25258ac358cdb6b921340cd3463e->leave($__internal_eac3d7198a69eb4a9ecf672115cb0fb45adb25258ac358cdb6b921340cd3463e_prof);

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
