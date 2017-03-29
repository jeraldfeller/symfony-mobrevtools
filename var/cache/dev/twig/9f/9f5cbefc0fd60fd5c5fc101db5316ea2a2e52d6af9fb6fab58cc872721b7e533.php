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
        $__internal_3aea4b3766cd345390f553d69e681b80d1eed2d426bf3bf860e8c7b78dfe2a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aea4b3766cd345390f553d69e681b80d1eed2d426bf3bf860e8c7b78dfe2a92->enter($__internal_3aea4b3766cd345390f553d69e681b80d1eed2d426bf3bf860e8c7b78dfe2a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b3de59aaa2afd47c50ad408395c1172df35889f183f5f0950ee8868d1ba879a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3de59aaa2afd47c50ad408395c1172df35889f183f5f0950ee8868d1ba879a7->enter($__internal_b3de59aaa2afd47c50ad408395c1172df35889f183f5f0950ee8868d1ba879a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aea4b3766cd345390f553d69e681b80d1eed2d426bf3bf860e8c7b78dfe2a92->leave($__internal_3aea4b3766cd345390f553d69e681b80d1eed2d426bf3bf860e8c7b78dfe2a92_prof);

        
        $__internal_b3de59aaa2afd47c50ad408395c1172df35889f183f5f0950ee8868d1ba879a7->leave($__internal_b3de59aaa2afd47c50ad408395c1172df35889f183f5f0950ee8868d1ba879a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_627c76d72d140698197c7e73bf5a678f85988e6c85766e14a237f72aa3d4b65c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627c76d72d140698197c7e73bf5a678f85988e6c85766e14a237f72aa3d4b65c->enter($__internal_627c76d72d140698197c7e73bf5a678f85988e6c85766e14a237f72aa3d4b65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7344c3cdf2acced10259dd65b1dd296602a16eb3dd3101628009c2068da16383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7344c3cdf2acced10259dd65b1dd296602a16eb3dd3101628009c2068da16383->enter($__internal_7344c3cdf2acced10259dd65b1dd296602a16eb3dd3101628009c2068da16383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7344c3cdf2acced10259dd65b1dd296602a16eb3dd3101628009c2068da16383->leave($__internal_7344c3cdf2acced10259dd65b1dd296602a16eb3dd3101628009c2068da16383_prof);

        
        $__internal_627c76d72d140698197c7e73bf5a678f85988e6c85766e14a237f72aa3d4b65c->leave($__internal_627c76d72d140698197c7e73bf5a678f85988e6c85766e14a237f72aa3d4b65c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_930c7ce142e5877c8fde2386c5c400bb8bc7efd847fc0085753687b764afc041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930c7ce142e5877c8fde2386c5c400bb8bc7efd847fc0085753687b764afc041->enter($__internal_930c7ce142e5877c8fde2386c5c400bb8bc7efd847fc0085753687b764afc041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_81a02d3d0312dcd2e2e06d317d7fd8147aab97a7de7c757f33b340e64ac82c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a02d3d0312dcd2e2e06d317d7fd8147aab97a7de7c757f33b340e64ac82c6c->enter($__internal_81a02d3d0312dcd2e2e06d317d7fd8147aab97a7de7c757f33b340e64ac82c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_81a02d3d0312dcd2e2e06d317d7fd8147aab97a7de7c757f33b340e64ac82c6c->leave($__internal_81a02d3d0312dcd2e2e06d317d7fd8147aab97a7de7c757f33b340e64ac82c6c_prof);

        
        $__internal_930c7ce142e5877c8fde2386c5c400bb8bc7efd847fc0085753687b764afc041->leave($__internal_930c7ce142e5877c8fde2386c5c400bb8bc7efd847fc0085753687b764afc041_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3e102e242d6ecb022158b1c9469d749b98f02806cda53ae0b46fe141417a535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e102e242d6ecb022158b1c9469d749b98f02806cda53ae0b46fe141417a535->enter($__internal_a3e102e242d6ecb022158b1c9469d749b98f02806cda53ae0b46fe141417a535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a41b693a62f8c085afc2d9faa1813ec6f56ec042d03248e29ea209be89575ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41b693a62f8c085afc2d9faa1813ec6f56ec042d03248e29ea209be89575ee8->enter($__internal_a41b693a62f8c085afc2d9faa1813ec6f56ec042d03248e29ea209be89575ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a41b693a62f8c085afc2d9faa1813ec6f56ec042d03248e29ea209be89575ee8->leave($__internal_a41b693a62f8c085afc2d9faa1813ec6f56ec042d03248e29ea209be89575ee8_prof);

        
        $__internal_a3e102e242d6ecb022158b1c9469d749b98f02806cda53ae0b46fe141417a535->leave($__internal_a3e102e242d6ecb022158b1c9469d749b98f02806cda53ae0b46fe141417a535_prof);

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
