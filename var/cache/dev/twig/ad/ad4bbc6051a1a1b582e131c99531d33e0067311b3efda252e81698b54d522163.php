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
        $__internal_12eb45056a3075d855358a6cd8783c7ceffaa16882e61ca194bfe201dfac838b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12eb45056a3075d855358a6cd8783c7ceffaa16882e61ca194bfe201dfac838b->enter($__internal_12eb45056a3075d855358a6cd8783c7ceffaa16882e61ca194bfe201dfac838b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4e858ef2a786a47bb174a85de4061cafb87b34d6152cb411070f8915ca71ae3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e858ef2a786a47bb174a85de4061cafb87b34d6152cb411070f8915ca71ae3e->enter($__internal_4e858ef2a786a47bb174a85de4061cafb87b34d6152cb411070f8915ca71ae3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12eb45056a3075d855358a6cd8783c7ceffaa16882e61ca194bfe201dfac838b->leave($__internal_12eb45056a3075d855358a6cd8783c7ceffaa16882e61ca194bfe201dfac838b_prof);

        
        $__internal_4e858ef2a786a47bb174a85de4061cafb87b34d6152cb411070f8915ca71ae3e->leave($__internal_4e858ef2a786a47bb174a85de4061cafb87b34d6152cb411070f8915ca71ae3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae219ab7009a1af7713427ffb8a22fbadf5d12ac07d528904ec0abc81916a3a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae219ab7009a1af7713427ffb8a22fbadf5d12ac07d528904ec0abc81916a3a2->enter($__internal_ae219ab7009a1af7713427ffb8a22fbadf5d12ac07d528904ec0abc81916a3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_635d0eaf9d16f41746a08820790fa1d2e890b278f4b66a1e46dcc2275f245c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635d0eaf9d16f41746a08820790fa1d2e890b278f4b66a1e46dcc2275f245c14->enter($__internal_635d0eaf9d16f41746a08820790fa1d2e890b278f4b66a1e46dcc2275f245c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_635d0eaf9d16f41746a08820790fa1d2e890b278f4b66a1e46dcc2275f245c14->leave($__internal_635d0eaf9d16f41746a08820790fa1d2e890b278f4b66a1e46dcc2275f245c14_prof);

        
        $__internal_ae219ab7009a1af7713427ffb8a22fbadf5d12ac07d528904ec0abc81916a3a2->leave($__internal_ae219ab7009a1af7713427ffb8a22fbadf5d12ac07d528904ec0abc81916a3a2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_988fff5eb8cbd98a520c3ede69ea6ef5c573b6c57c36a3685283d87f4ccbb960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988fff5eb8cbd98a520c3ede69ea6ef5c573b6c57c36a3685283d87f4ccbb960->enter($__internal_988fff5eb8cbd98a520c3ede69ea6ef5c573b6c57c36a3685283d87f4ccbb960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4d818574f03e28fe5c17d3babddbcae30856cf5fbc2b8732b390cee69bcda3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d818574f03e28fe5c17d3babddbcae30856cf5fbc2b8732b390cee69bcda3ff->enter($__internal_4d818574f03e28fe5c17d3babddbcae30856cf5fbc2b8732b390cee69bcda3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4d818574f03e28fe5c17d3babddbcae30856cf5fbc2b8732b390cee69bcda3ff->leave($__internal_4d818574f03e28fe5c17d3babddbcae30856cf5fbc2b8732b390cee69bcda3ff_prof);

        
        $__internal_988fff5eb8cbd98a520c3ede69ea6ef5c573b6c57c36a3685283d87f4ccbb960->leave($__internal_988fff5eb8cbd98a520c3ede69ea6ef5c573b6c57c36a3685283d87f4ccbb960_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8736ba2f068b2892805bfe3482bf24bd604853e72a739d418018b11b0edce025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8736ba2f068b2892805bfe3482bf24bd604853e72a739d418018b11b0edce025->enter($__internal_8736ba2f068b2892805bfe3482bf24bd604853e72a739d418018b11b0edce025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_062c65d928c4cff8b7894927c82e8a533ce59104ac922f4c027c2d621ee618ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062c65d928c4cff8b7894927c82e8a533ce59104ac922f4c027c2d621ee618ef->enter($__internal_062c65d928c4cff8b7894927c82e8a533ce59104ac922f4c027c2d621ee618ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_062c65d928c4cff8b7894927c82e8a533ce59104ac922f4c027c2d621ee618ef->leave($__internal_062c65d928c4cff8b7894927c82e8a533ce59104ac922f4c027c2d621ee618ef_prof);

        
        $__internal_8736ba2f068b2892805bfe3482bf24bd604853e72a739d418018b11b0edce025->leave($__internal_8736ba2f068b2892805bfe3482bf24bd604853e72a739d418018b11b0edce025_prof);

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
