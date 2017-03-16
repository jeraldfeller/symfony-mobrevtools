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
        $__internal_a38d1cdd399d0f946554a5c4abe2a289cedaa0f358381e82577d8053049dc9f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38d1cdd399d0f946554a5c4abe2a289cedaa0f358381e82577d8053049dc9f5->enter($__internal_a38d1cdd399d0f946554a5c4abe2a289cedaa0f358381e82577d8053049dc9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e6f2390d4c992b5b7262e48d325b3b8eaa2a2c3953d216cde58d7fa3eaae2c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f2390d4c992b5b7262e48d325b3b8eaa2a2c3953d216cde58d7fa3eaae2c72->enter($__internal_e6f2390d4c992b5b7262e48d325b3b8eaa2a2c3953d216cde58d7fa3eaae2c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a38d1cdd399d0f946554a5c4abe2a289cedaa0f358381e82577d8053049dc9f5->leave($__internal_a38d1cdd399d0f946554a5c4abe2a289cedaa0f358381e82577d8053049dc9f5_prof);

        
        $__internal_e6f2390d4c992b5b7262e48d325b3b8eaa2a2c3953d216cde58d7fa3eaae2c72->leave($__internal_e6f2390d4c992b5b7262e48d325b3b8eaa2a2c3953d216cde58d7fa3eaae2c72_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe72d76a93341016056bc8d4c04f8d330419439cd12c48bd2976041fd2cb6c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe72d76a93341016056bc8d4c04f8d330419439cd12c48bd2976041fd2cb6c0f->enter($__internal_fe72d76a93341016056bc8d4c04f8d330419439cd12c48bd2976041fd2cb6c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_49bd1c4548b3243378d0fa68770fcd0b78f7ae36683627f45d180770ba639371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bd1c4548b3243378d0fa68770fcd0b78f7ae36683627f45d180770ba639371->enter($__internal_49bd1c4548b3243378d0fa68770fcd0b78f7ae36683627f45d180770ba639371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_49bd1c4548b3243378d0fa68770fcd0b78f7ae36683627f45d180770ba639371->leave($__internal_49bd1c4548b3243378d0fa68770fcd0b78f7ae36683627f45d180770ba639371_prof);

        
        $__internal_fe72d76a93341016056bc8d4c04f8d330419439cd12c48bd2976041fd2cb6c0f->leave($__internal_fe72d76a93341016056bc8d4c04f8d330419439cd12c48bd2976041fd2cb6c0f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_074e605ceed0e2d42e2a4937d14a79af78234e26970f3f9b1b3a6b38a8927542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074e605ceed0e2d42e2a4937d14a79af78234e26970f3f9b1b3a6b38a8927542->enter($__internal_074e605ceed0e2d42e2a4937d14a79af78234e26970f3f9b1b3a6b38a8927542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_549fd80eff782d046695523e567bd1c440a1158c9763be445f2cfb5d5d6c0a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549fd80eff782d046695523e567bd1c440a1158c9763be445f2cfb5d5d6c0a9d->enter($__internal_549fd80eff782d046695523e567bd1c440a1158c9763be445f2cfb5d5d6c0a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_549fd80eff782d046695523e567bd1c440a1158c9763be445f2cfb5d5d6c0a9d->leave($__internal_549fd80eff782d046695523e567bd1c440a1158c9763be445f2cfb5d5d6c0a9d_prof);

        
        $__internal_074e605ceed0e2d42e2a4937d14a79af78234e26970f3f9b1b3a6b38a8927542->leave($__internal_074e605ceed0e2d42e2a4937d14a79af78234e26970f3f9b1b3a6b38a8927542_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_61f82ebaa3af668cb1152b90e4a31fd766b255f7f111323166f0447335e68f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f82ebaa3af668cb1152b90e4a31fd766b255f7f111323166f0447335e68f16->enter($__internal_61f82ebaa3af668cb1152b90e4a31fd766b255f7f111323166f0447335e68f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_51193e434923b051d44e8d6ae53abd0178abc4653a336da173205170b8c298a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51193e434923b051d44e8d6ae53abd0178abc4653a336da173205170b8c298a9->enter($__internal_51193e434923b051d44e8d6ae53abd0178abc4653a336da173205170b8c298a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_51193e434923b051d44e8d6ae53abd0178abc4653a336da173205170b8c298a9->leave($__internal_51193e434923b051d44e8d6ae53abd0178abc4653a336da173205170b8c298a9_prof);

        
        $__internal_61f82ebaa3af668cb1152b90e4a31fd766b255f7f111323166f0447335e68f16->leave($__internal_61f82ebaa3af668cb1152b90e4a31fd766b255f7f111323166f0447335e68f16_prof);

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
