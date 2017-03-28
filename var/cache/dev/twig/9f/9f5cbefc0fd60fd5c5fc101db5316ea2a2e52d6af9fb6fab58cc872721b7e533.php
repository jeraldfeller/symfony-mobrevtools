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
        $__internal_8f942c23ac53abdb13bee98542091a78ff8e9bc267ac3b99d375d9fae78e6b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f942c23ac53abdb13bee98542091a78ff8e9bc267ac3b99d375d9fae78e6b95->enter($__internal_8f942c23ac53abdb13bee98542091a78ff8e9bc267ac3b99d375d9fae78e6b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f89ba5af7079883214e4269adea7bba190ca908990d9be4f13013540746b1508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89ba5af7079883214e4269adea7bba190ca908990d9be4f13013540746b1508->enter($__internal_f89ba5af7079883214e4269adea7bba190ca908990d9be4f13013540746b1508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f942c23ac53abdb13bee98542091a78ff8e9bc267ac3b99d375d9fae78e6b95->leave($__internal_8f942c23ac53abdb13bee98542091a78ff8e9bc267ac3b99d375d9fae78e6b95_prof);

        
        $__internal_f89ba5af7079883214e4269adea7bba190ca908990d9be4f13013540746b1508->leave($__internal_f89ba5af7079883214e4269adea7bba190ca908990d9be4f13013540746b1508_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fbccb7ff74929f621fd0e00f1729357ff27d42357fc1540c7f75c69d4589aa22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbccb7ff74929f621fd0e00f1729357ff27d42357fc1540c7f75c69d4589aa22->enter($__internal_fbccb7ff74929f621fd0e00f1729357ff27d42357fc1540c7f75c69d4589aa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed852ac4c28e743271bbdfe7b94f4a634265160f6732fb027902238a17add9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed852ac4c28e743271bbdfe7b94f4a634265160f6732fb027902238a17add9c8->enter($__internal_ed852ac4c28e743271bbdfe7b94f4a634265160f6732fb027902238a17add9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ed852ac4c28e743271bbdfe7b94f4a634265160f6732fb027902238a17add9c8->leave($__internal_ed852ac4c28e743271bbdfe7b94f4a634265160f6732fb027902238a17add9c8_prof);

        
        $__internal_fbccb7ff74929f621fd0e00f1729357ff27d42357fc1540c7f75c69d4589aa22->leave($__internal_fbccb7ff74929f621fd0e00f1729357ff27d42357fc1540c7f75c69d4589aa22_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c9258ab138a108b91ab7f470886ef4a313a547cf1a1678b6ddbaba95c3f0b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9258ab138a108b91ab7f470886ef4a313a547cf1a1678b6ddbaba95c3f0b80->enter($__internal_9c9258ab138a108b91ab7f470886ef4a313a547cf1a1678b6ddbaba95c3f0b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2e6546f00f0805d49cba019ea908537ae42b330b9aa03e21c640d9cad7a59456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6546f00f0805d49cba019ea908537ae42b330b9aa03e21c640d9cad7a59456->enter($__internal_2e6546f00f0805d49cba019ea908537ae42b330b9aa03e21c640d9cad7a59456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e6546f00f0805d49cba019ea908537ae42b330b9aa03e21c640d9cad7a59456->leave($__internal_2e6546f00f0805d49cba019ea908537ae42b330b9aa03e21c640d9cad7a59456_prof);

        
        $__internal_9c9258ab138a108b91ab7f470886ef4a313a547cf1a1678b6ddbaba95c3f0b80->leave($__internal_9c9258ab138a108b91ab7f470886ef4a313a547cf1a1678b6ddbaba95c3f0b80_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_433caf8d0c45f8140947c69ac869877efdf1a0b02eb81ef40ca483f50dd3f13a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433caf8d0c45f8140947c69ac869877efdf1a0b02eb81ef40ca483f50dd3f13a->enter($__internal_433caf8d0c45f8140947c69ac869877efdf1a0b02eb81ef40ca483f50dd3f13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e376f6be963829cb9c16591927acfccb0c3b900e9825e181fb5f8d9e219ac24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e376f6be963829cb9c16591927acfccb0c3b900e9825e181fb5f8d9e219ac24->enter($__internal_9e376f6be963829cb9c16591927acfccb0c3b900e9825e181fb5f8d9e219ac24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9e376f6be963829cb9c16591927acfccb0c3b900e9825e181fb5f8d9e219ac24->leave($__internal_9e376f6be963829cb9c16591927acfccb0c3b900e9825e181fb5f8d9e219ac24_prof);

        
        $__internal_433caf8d0c45f8140947c69ac869877efdf1a0b02eb81ef40ca483f50dd3f13a->leave($__internal_433caf8d0c45f8140947c69ac869877efdf1a0b02eb81ef40ca483f50dd3f13a_prof);

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
