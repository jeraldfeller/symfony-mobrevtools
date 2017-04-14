<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4d906b41c419cd60b60a5b877ec20488b7f480c37438477fe264a596ed445dca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3e9d3d865d4d14c9f9c7fcc27837675fb9ceb0d0a513c13217b864a328b37b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9d3d865d4d14c9f9c7fcc27837675fb9ceb0d0a513c13217b864a328b37b86->enter($__internal_3e9d3d865d4d14c9f9c7fcc27837675fb9ceb0d0a513c13217b864a328b37b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_df356842c171a0d31dd9d517d5150d360348a4f862e5375ad6e54bd7e47d4661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df356842c171a0d31dd9d517d5150d360348a4f862e5375ad6e54bd7e47d4661->enter($__internal_df356842c171a0d31dd9d517d5150d360348a4f862e5375ad6e54bd7e47d4661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e9d3d865d4d14c9f9c7fcc27837675fb9ceb0d0a513c13217b864a328b37b86->leave($__internal_3e9d3d865d4d14c9f9c7fcc27837675fb9ceb0d0a513c13217b864a328b37b86_prof);

        
        $__internal_df356842c171a0d31dd9d517d5150d360348a4f862e5375ad6e54bd7e47d4661->leave($__internal_df356842c171a0d31dd9d517d5150d360348a4f862e5375ad6e54bd7e47d4661_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e68fee16edd53fa1fa4358dc068a6a90cca223acf83571252db407672cede267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68fee16edd53fa1fa4358dc068a6a90cca223acf83571252db407672cede267->enter($__internal_e68fee16edd53fa1fa4358dc068a6a90cca223acf83571252db407672cede267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f15670a6d1b2e8287760bf25bcea099691597e0f1f390ff6ba644954a8688ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f15670a6d1b2e8287760bf25bcea099691597e0f1f390ff6ba644954a8688ea->enter($__internal_8f15670a6d1b2e8287760bf25bcea099691597e0f1f390ff6ba644954a8688ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8f15670a6d1b2e8287760bf25bcea099691597e0f1f390ff6ba644954a8688ea->leave($__internal_8f15670a6d1b2e8287760bf25bcea099691597e0f1f390ff6ba644954a8688ea_prof);

        
        $__internal_e68fee16edd53fa1fa4358dc068a6a90cca223acf83571252db407672cede267->leave($__internal_e68fee16edd53fa1fa4358dc068a6a90cca223acf83571252db407672cede267_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e907b01697d213de3aedcd225903de2a1b1b2deab56b30e852f4e88cb871c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e907b01697d213de3aedcd225903de2a1b1b2deab56b30e852f4e88cb871c20->enter($__internal_5e907b01697d213de3aedcd225903de2a1b1b2deab56b30e852f4e88cb871c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_49ce2eafb394e78369f1e98c6e8120cfda694f2ace0d5f4e7542be8f6eadcc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ce2eafb394e78369f1e98c6e8120cfda694f2ace0d5f4e7542be8f6eadcc79->enter($__internal_49ce2eafb394e78369f1e98c6e8120cfda694f2ace0d5f4e7542be8f6eadcc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_49ce2eafb394e78369f1e98c6e8120cfda694f2ace0d5f4e7542be8f6eadcc79->leave($__internal_49ce2eafb394e78369f1e98c6e8120cfda694f2ace0d5f4e7542be8f6eadcc79_prof);

        
        $__internal_5e907b01697d213de3aedcd225903de2a1b1b2deab56b30e852f4e88cb871c20->leave($__internal_5e907b01697d213de3aedcd225903de2a1b1b2deab56b30e852f4e88cb871c20_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_820b31a2f79990ecfc6d7daee85934a5380e5b39a7f8fd878a493162455c2f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_820b31a2f79990ecfc6d7daee85934a5380e5b39a7f8fd878a493162455c2f7e->enter($__internal_820b31a2f79990ecfc6d7daee85934a5380e5b39a7f8fd878a493162455c2f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d30a1e89e99e9309faf4b7e0c5a53316e2a295cdfbaf65afd9d3cab15160bd9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30a1e89e99e9309faf4b7e0c5a53316e2a295cdfbaf65afd9d3cab15160bd9a->enter($__internal_d30a1e89e99e9309faf4b7e0c5a53316e2a295cdfbaf65afd9d3cab15160bd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d30a1e89e99e9309faf4b7e0c5a53316e2a295cdfbaf65afd9d3cab15160bd9a->leave($__internal_d30a1e89e99e9309faf4b7e0c5a53316e2a295cdfbaf65afd9d3cab15160bd9a_prof);

        
        $__internal_820b31a2f79990ecfc6d7daee85934a5380e5b39a7f8fd878a493162455c2f7e->leave($__internal_820b31a2f79990ecfc6d7daee85934a5380e5b39a7f8fd878a493162455c2f7e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
