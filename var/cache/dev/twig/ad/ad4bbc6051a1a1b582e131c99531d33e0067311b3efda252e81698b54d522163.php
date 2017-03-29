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
        $__internal_9d43f5c6d9c7312c9d21b58b39899b2b3614dc4f0b1c411966e3e2fc307e6844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d43f5c6d9c7312c9d21b58b39899b2b3614dc4f0b1c411966e3e2fc307e6844->enter($__internal_9d43f5c6d9c7312c9d21b58b39899b2b3614dc4f0b1c411966e3e2fc307e6844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1eb1ae9aa10ae3b5cb9a346cf549637b2d7ace67714a174ab0c3444a7fc436ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb1ae9aa10ae3b5cb9a346cf549637b2d7ace67714a174ab0c3444a7fc436ab->enter($__internal_1eb1ae9aa10ae3b5cb9a346cf549637b2d7ace67714a174ab0c3444a7fc436ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d43f5c6d9c7312c9d21b58b39899b2b3614dc4f0b1c411966e3e2fc307e6844->leave($__internal_9d43f5c6d9c7312c9d21b58b39899b2b3614dc4f0b1c411966e3e2fc307e6844_prof);

        
        $__internal_1eb1ae9aa10ae3b5cb9a346cf549637b2d7ace67714a174ab0c3444a7fc436ab->leave($__internal_1eb1ae9aa10ae3b5cb9a346cf549637b2d7ace67714a174ab0c3444a7fc436ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b9ddaab9736568651eba3eddfc1a8d3a39cb6c0e55aba7e75bcd1623da1f6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b9ddaab9736568651eba3eddfc1a8d3a39cb6c0e55aba7e75bcd1623da1f6ff->enter($__internal_7b9ddaab9736568651eba3eddfc1a8d3a39cb6c0e55aba7e75bcd1623da1f6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d1f9203abe7403b794f579aa201f74196c2224a55b3d74becb3ebfc42bd52fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f9203abe7403b794f579aa201f74196c2224a55b3d74becb3ebfc42bd52fda->enter($__internal_d1f9203abe7403b794f579aa201f74196c2224a55b3d74becb3ebfc42bd52fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d1f9203abe7403b794f579aa201f74196c2224a55b3d74becb3ebfc42bd52fda->leave($__internal_d1f9203abe7403b794f579aa201f74196c2224a55b3d74becb3ebfc42bd52fda_prof);

        
        $__internal_7b9ddaab9736568651eba3eddfc1a8d3a39cb6c0e55aba7e75bcd1623da1f6ff->leave($__internal_7b9ddaab9736568651eba3eddfc1a8d3a39cb6c0e55aba7e75bcd1623da1f6ff_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a1b5136b6b050b72d05d70b8890d51ed1ca3a3652cd98e7fc406777d52577a2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b5136b6b050b72d05d70b8890d51ed1ca3a3652cd98e7fc406777d52577a2e->enter($__internal_a1b5136b6b050b72d05d70b8890d51ed1ca3a3652cd98e7fc406777d52577a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_157aa7ecd42b3894e282221d27c14a449dc56ecc76a3f7673a3af8057a21a24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157aa7ecd42b3894e282221d27c14a449dc56ecc76a3f7673a3af8057a21a24f->enter($__internal_157aa7ecd42b3894e282221d27c14a449dc56ecc76a3f7673a3af8057a21a24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_157aa7ecd42b3894e282221d27c14a449dc56ecc76a3f7673a3af8057a21a24f->leave($__internal_157aa7ecd42b3894e282221d27c14a449dc56ecc76a3f7673a3af8057a21a24f_prof);

        
        $__internal_a1b5136b6b050b72d05d70b8890d51ed1ca3a3652cd98e7fc406777d52577a2e->leave($__internal_a1b5136b6b050b72d05d70b8890d51ed1ca3a3652cd98e7fc406777d52577a2e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4440ce472809028df62d6aa9c91f0eda7d43d060c6eee9407a70b72a8a7bbea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4440ce472809028df62d6aa9c91f0eda7d43d060c6eee9407a70b72a8a7bbea6->enter($__internal_4440ce472809028df62d6aa9c91f0eda7d43d060c6eee9407a70b72a8a7bbea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b9a547d53cfe83591da81b69357a3cec7f2c1cb3b868068281fb30d4a1e1efac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a547d53cfe83591da81b69357a3cec7f2c1cb3b868068281fb30d4a1e1efac->enter($__internal_b9a547d53cfe83591da81b69357a3cec7f2c1cb3b868068281fb30d4a1e1efac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b9a547d53cfe83591da81b69357a3cec7f2c1cb3b868068281fb30d4a1e1efac->leave($__internal_b9a547d53cfe83591da81b69357a3cec7f2c1cb3b868068281fb30d4a1e1efac_prof);

        
        $__internal_4440ce472809028df62d6aa9c91f0eda7d43d060c6eee9407a70b72a8a7bbea6->leave($__internal_4440ce472809028df62d6aa9c91f0eda7d43d060c6eee9407a70b72a8a7bbea6_prof);

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
