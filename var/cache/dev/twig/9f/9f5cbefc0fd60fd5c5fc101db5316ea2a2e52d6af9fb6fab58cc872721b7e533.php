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
        $__internal_2d8c51263016adecc34135c5b157e0c369f81bd60b09759ed1857b356cf6e5f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d8c51263016adecc34135c5b157e0c369f81bd60b09759ed1857b356cf6e5f3->enter($__internal_2d8c51263016adecc34135c5b157e0c369f81bd60b09759ed1857b356cf6e5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4cb14cd18d3fcb3df5fe9aa81668988f9a54fb350191a40ef05af084bcefd824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb14cd18d3fcb3df5fe9aa81668988f9a54fb350191a40ef05af084bcefd824->enter($__internal_4cb14cd18d3fcb3df5fe9aa81668988f9a54fb350191a40ef05af084bcefd824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d8c51263016adecc34135c5b157e0c369f81bd60b09759ed1857b356cf6e5f3->leave($__internal_2d8c51263016adecc34135c5b157e0c369f81bd60b09759ed1857b356cf6e5f3_prof);

        
        $__internal_4cb14cd18d3fcb3df5fe9aa81668988f9a54fb350191a40ef05af084bcefd824->leave($__internal_4cb14cd18d3fcb3df5fe9aa81668988f9a54fb350191a40ef05af084bcefd824_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dfde3387022217fd4c699e7db8673bd498512d963a51cd007c06b6e6b9d684a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfde3387022217fd4c699e7db8673bd498512d963a51cd007c06b6e6b9d684a4->enter($__internal_dfde3387022217fd4c699e7db8673bd498512d963a51cd007c06b6e6b9d684a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_65bf946ffbae5298aea2e0ad83d7fe1512850ca6aa6657aa7f736a6a81ccee36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65bf946ffbae5298aea2e0ad83d7fe1512850ca6aa6657aa7f736a6a81ccee36->enter($__internal_65bf946ffbae5298aea2e0ad83d7fe1512850ca6aa6657aa7f736a6a81ccee36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_65bf946ffbae5298aea2e0ad83d7fe1512850ca6aa6657aa7f736a6a81ccee36->leave($__internal_65bf946ffbae5298aea2e0ad83d7fe1512850ca6aa6657aa7f736a6a81ccee36_prof);

        
        $__internal_dfde3387022217fd4c699e7db8673bd498512d963a51cd007c06b6e6b9d684a4->leave($__internal_dfde3387022217fd4c699e7db8673bd498512d963a51cd007c06b6e6b9d684a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9585a541cac96c888f638d7eb074264a36a336803220c5e5361de515b5013875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9585a541cac96c888f638d7eb074264a36a336803220c5e5361de515b5013875->enter($__internal_9585a541cac96c888f638d7eb074264a36a336803220c5e5361de515b5013875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4dca515b002ce7f5407d3b42f44abe6029e82369fd458351840c5a63902f4d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dca515b002ce7f5407d3b42f44abe6029e82369fd458351840c5a63902f4d7e->enter($__internal_4dca515b002ce7f5407d3b42f44abe6029e82369fd458351840c5a63902f4d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4dca515b002ce7f5407d3b42f44abe6029e82369fd458351840c5a63902f4d7e->leave($__internal_4dca515b002ce7f5407d3b42f44abe6029e82369fd458351840c5a63902f4d7e_prof);

        
        $__internal_9585a541cac96c888f638d7eb074264a36a336803220c5e5361de515b5013875->leave($__internal_9585a541cac96c888f638d7eb074264a36a336803220c5e5361de515b5013875_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_784a76c7f39cd4a235b1f7b516c9237030d8c7232e09b55587bd271e1ab2f060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_784a76c7f39cd4a235b1f7b516c9237030d8c7232e09b55587bd271e1ab2f060->enter($__internal_784a76c7f39cd4a235b1f7b516c9237030d8c7232e09b55587bd271e1ab2f060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f2a0b7bb5e09ffd173948a1033d3ad609784f9b0ac6d5f844cfa6a9395290da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2a0b7bb5e09ffd173948a1033d3ad609784f9b0ac6d5f844cfa6a9395290da->enter($__internal_2f2a0b7bb5e09ffd173948a1033d3ad609784f9b0ac6d5f844cfa6a9395290da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f2a0b7bb5e09ffd173948a1033d3ad609784f9b0ac6d5f844cfa6a9395290da->leave($__internal_2f2a0b7bb5e09ffd173948a1033d3ad609784f9b0ac6d5f844cfa6a9395290da_prof);

        
        $__internal_784a76c7f39cd4a235b1f7b516c9237030d8c7232e09b55587bd271e1ab2f060->leave($__internal_784a76c7f39cd4a235b1f7b516c9237030d8c7232e09b55587bd271e1ab2f060_prof);

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
