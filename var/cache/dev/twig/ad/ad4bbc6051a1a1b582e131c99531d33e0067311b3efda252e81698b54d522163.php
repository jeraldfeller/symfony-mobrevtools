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
        $__internal_925623850e5a2d6061d746dbb30782d2b23fdeffac58898fdb6fe3190d2e81bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925623850e5a2d6061d746dbb30782d2b23fdeffac58898fdb6fe3190d2e81bd->enter($__internal_925623850e5a2d6061d746dbb30782d2b23fdeffac58898fdb6fe3190d2e81bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5e02f1fff1540e922e78e6aad6f5b49c5661577de1c30eb45174acfde568e14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e02f1fff1540e922e78e6aad6f5b49c5661577de1c30eb45174acfde568e14c->enter($__internal_5e02f1fff1540e922e78e6aad6f5b49c5661577de1c30eb45174acfde568e14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925623850e5a2d6061d746dbb30782d2b23fdeffac58898fdb6fe3190d2e81bd->leave($__internal_925623850e5a2d6061d746dbb30782d2b23fdeffac58898fdb6fe3190d2e81bd_prof);

        
        $__internal_5e02f1fff1540e922e78e6aad6f5b49c5661577de1c30eb45174acfde568e14c->leave($__internal_5e02f1fff1540e922e78e6aad6f5b49c5661577de1c30eb45174acfde568e14c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75b0c9fd0f98c463bd8be5aa081d119bf8afcb4fd5405b953dbcc49d398f9b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b0c9fd0f98c463bd8be5aa081d119bf8afcb4fd5405b953dbcc49d398f9b26->enter($__internal_75b0c9fd0f98c463bd8be5aa081d119bf8afcb4fd5405b953dbcc49d398f9b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_53070e430fba71aa3ed834343e04a1c0736c3077d3add0aca1f245e539729764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53070e430fba71aa3ed834343e04a1c0736c3077d3add0aca1f245e539729764->enter($__internal_53070e430fba71aa3ed834343e04a1c0736c3077d3add0aca1f245e539729764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_53070e430fba71aa3ed834343e04a1c0736c3077d3add0aca1f245e539729764->leave($__internal_53070e430fba71aa3ed834343e04a1c0736c3077d3add0aca1f245e539729764_prof);

        
        $__internal_75b0c9fd0f98c463bd8be5aa081d119bf8afcb4fd5405b953dbcc49d398f9b26->leave($__internal_75b0c9fd0f98c463bd8be5aa081d119bf8afcb4fd5405b953dbcc49d398f9b26_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43e44d2ace4de65fc40f959f0756206c578157311c14c6b66509f9cf52823622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e44d2ace4de65fc40f959f0756206c578157311c14c6b66509f9cf52823622->enter($__internal_43e44d2ace4de65fc40f959f0756206c578157311c14c6b66509f9cf52823622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f9e4a0b338e73c7ddcc1640f89a81f5466697129ac5e5c40ebb439f03b267f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e4a0b338e73c7ddcc1640f89a81f5466697129ac5e5c40ebb439f03b267f64->enter($__internal_f9e4a0b338e73c7ddcc1640f89a81f5466697129ac5e5c40ebb439f03b267f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f9e4a0b338e73c7ddcc1640f89a81f5466697129ac5e5c40ebb439f03b267f64->leave($__internal_f9e4a0b338e73c7ddcc1640f89a81f5466697129ac5e5c40ebb439f03b267f64_prof);

        
        $__internal_43e44d2ace4de65fc40f959f0756206c578157311c14c6b66509f9cf52823622->leave($__internal_43e44d2ace4de65fc40f959f0756206c578157311c14c6b66509f9cf52823622_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27b601d4ca0aba50328937c651fd839a10efde42d2c49181e5e42a3f373fbc1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b601d4ca0aba50328937c651fd839a10efde42d2c49181e5e42a3f373fbc1d->enter($__internal_27b601d4ca0aba50328937c651fd839a10efde42d2c49181e5e42a3f373fbc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0f68dcc66480bfc9831bc22e2c6ad61f2412d101ca561606afe74c0f93679b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f68dcc66480bfc9831bc22e2c6ad61f2412d101ca561606afe74c0f93679b3->enter($__internal_e0f68dcc66480bfc9831bc22e2c6ad61f2412d101ca561606afe74c0f93679b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e0f68dcc66480bfc9831bc22e2c6ad61f2412d101ca561606afe74c0f93679b3->leave($__internal_e0f68dcc66480bfc9831bc22e2c6ad61f2412d101ca561606afe74c0f93679b3_prof);

        
        $__internal_27b601d4ca0aba50328937c651fd839a10efde42d2c49181e5e42a3f373fbc1d->leave($__internal_27b601d4ca0aba50328937c651fd839a10efde42d2c49181e5e42a3f373fbc1d_prof);

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
