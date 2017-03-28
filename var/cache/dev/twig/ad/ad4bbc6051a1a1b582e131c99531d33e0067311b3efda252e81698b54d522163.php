<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2e19e4bfd8672deb9def05088e9007699ca0e397f9173b176435a32badaa5bbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_2d9b10dc7ef01d9bd1e040919996f68c22a92d00c302bd17c498cfac18082448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d9b10dc7ef01d9bd1e040919996f68c22a92d00c302bd17c498cfac18082448->enter($__internal_2d9b10dc7ef01d9bd1e040919996f68c22a92d00c302bd17c498cfac18082448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5004f8408235aaa8c2bbccef5ff17a4fca9bae0c1ac9d25977aa8c63202d9159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5004f8408235aaa8c2bbccef5ff17a4fca9bae0c1ac9d25977aa8c63202d9159->enter($__internal_5004f8408235aaa8c2bbccef5ff17a4fca9bae0c1ac9d25977aa8c63202d9159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d9b10dc7ef01d9bd1e040919996f68c22a92d00c302bd17c498cfac18082448->leave($__internal_2d9b10dc7ef01d9bd1e040919996f68c22a92d00c302bd17c498cfac18082448_prof);

        
        $__internal_5004f8408235aaa8c2bbccef5ff17a4fca9bae0c1ac9d25977aa8c63202d9159->leave($__internal_5004f8408235aaa8c2bbccef5ff17a4fca9bae0c1ac9d25977aa8c63202d9159_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ffcbf66a9af9fd5cc0cd7c10a14db35e985469d22c654b1343b84c26072ff5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ffcbf66a9af9fd5cc0cd7c10a14db35e985469d22c654b1343b84c26072ff5a->enter($__internal_8ffcbf66a9af9fd5cc0cd7c10a14db35e985469d22c654b1343b84c26072ff5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c0f947b5efeb1f01a19189ab58e066bf236a0d51c5b7ee9dd771a5d952284c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f947b5efeb1f01a19189ab58e066bf236a0d51c5b7ee9dd771a5d952284c19->enter($__internal_c0f947b5efeb1f01a19189ab58e066bf236a0d51c5b7ee9dd771a5d952284c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c0f947b5efeb1f01a19189ab58e066bf236a0d51c5b7ee9dd771a5d952284c19->leave($__internal_c0f947b5efeb1f01a19189ab58e066bf236a0d51c5b7ee9dd771a5d952284c19_prof);

        
        $__internal_8ffcbf66a9af9fd5cc0cd7c10a14db35e985469d22c654b1343b84c26072ff5a->leave($__internal_8ffcbf66a9af9fd5cc0cd7c10a14db35e985469d22c654b1343b84c26072ff5a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81a84de7b61dcfcdaa3f5d4222b7c02c30c213d265f324e3967e5a6285d235b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a84de7b61dcfcdaa3f5d4222b7c02c30c213d265f324e3967e5a6285d235b3->enter($__internal_81a84de7b61dcfcdaa3f5d4222b7c02c30c213d265f324e3967e5a6285d235b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a494783d20f5a89d33fd5d20e84c19126da15ecf8eaabc72c7d091e6b9d7e350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a494783d20f5a89d33fd5d20e84c19126da15ecf8eaabc72c7d091e6b9d7e350->enter($__internal_a494783d20f5a89d33fd5d20e84c19126da15ecf8eaabc72c7d091e6b9d7e350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a494783d20f5a89d33fd5d20e84c19126da15ecf8eaabc72c7d091e6b9d7e350->leave($__internal_a494783d20f5a89d33fd5d20e84c19126da15ecf8eaabc72c7d091e6b9d7e350_prof);

        
        $__internal_81a84de7b61dcfcdaa3f5d4222b7c02c30c213d265f324e3967e5a6285d235b3->leave($__internal_81a84de7b61dcfcdaa3f5d4222b7c02c30c213d265f324e3967e5a6285d235b3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7bba3092292521099c9dc47af80462b76a842c02c8ac9b8ae52f2bf224801a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bba3092292521099c9dc47af80462b76a842c02c8ac9b8ae52f2bf224801a3b->enter($__internal_7bba3092292521099c9dc47af80462b76a842c02c8ac9b8ae52f2bf224801a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f58456a7aba072666641b42fe2eb3bf422df17fe577192e7f8db6ddab36de3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f58456a7aba072666641b42fe2eb3bf422df17fe577192e7f8db6ddab36de3b->enter($__internal_4f58456a7aba072666641b42fe2eb3bf422df17fe577192e7f8db6ddab36de3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4f58456a7aba072666641b42fe2eb3bf422df17fe577192e7f8db6ddab36de3b->leave($__internal_4f58456a7aba072666641b42fe2eb3bf422df17fe577192e7f8db6ddab36de3b_prof);

        
        $__internal_7bba3092292521099c9dc47af80462b76a842c02c8ac9b8ae52f2bf224801a3b->leave($__internal_7bba3092292521099c9dc47af80462b76a842c02c8ac9b8ae52f2bf224801a3b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
