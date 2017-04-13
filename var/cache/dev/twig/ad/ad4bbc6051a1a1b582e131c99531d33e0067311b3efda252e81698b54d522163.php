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
        $__internal_7e7ac49a263a08949d889ffa548ab62b30cb64f8ae4e7b359ab2b46ba5c674be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7ac49a263a08949d889ffa548ab62b30cb64f8ae4e7b359ab2b46ba5c674be->enter($__internal_7e7ac49a263a08949d889ffa548ab62b30cb64f8ae4e7b359ab2b46ba5c674be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c7cbc92c4409ab2d5f71cc46c938f87dd370044262e937727e3e7ec8483dc949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cbc92c4409ab2d5f71cc46c938f87dd370044262e937727e3e7ec8483dc949->enter($__internal_c7cbc92c4409ab2d5f71cc46c938f87dd370044262e937727e3e7ec8483dc949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e7ac49a263a08949d889ffa548ab62b30cb64f8ae4e7b359ab2b46ba5c674be->leave($__internal_7e7ac49a263a08949d889ffa548ab62b30cb64f8ae4e7b359ab2b46ba5c674be_prof);

        
        $__internal_c7cbc92c4409ab2d5f71cc46c938f87dd370044262e937727e3e7ec8483dc949->leave($__internal_c7cbc92c4409ab2d5f71cc46c938f87dd370044262e937727e3e7ec8483dc949_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7728e5cd2198c93bf0872838e086241a2c3b679623525536fc097f5c6382ba84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7728e5cd2198c93bf0872838e086241a2c3b679623525536fc097f5c6382ba84->enter($__internal_7728e5cd2198c93bf0872838e086241a2c3b679623525536fc097f5c6382ba84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d905e8ac91abfc76b6ea30f8c0d083052ddfd3fbfe05e65ce06b9a534f0f2e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d905e8ac91abfc76b6ea30f8c0d083052ddfd3fbfe05e65ce06b9a534f0f2e72->enter($__internal_d905e8ac91abfc76b6ea30f8c0d083052ddfd3fbfe05e65ce06b9a534f0f2e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d905e8ac91abfc76b6ea30f8c0d083052ddfd3fbfe05e65ce06b9a534f0f2e72->leave($__internal_d905e8ac91abfc76b6ea30f8c0d083052ddfd3fbfe05e65ce06b9a534f0f2e72_prof);

        
        $__internal_7728e5cd2198c93bf0872838e086241a2c3b679623525536fc097f5c6382ba84->leave($__internal_7728e5cd2198c93bf0872838e086241a2c3b679623525536fc097f5c6382ba84_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_392d61a3b90c8af60062197cea8a0ae8298d44cdb35275cb2034203382313b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392d61a3b90c8af60062197cea8a0ae8298d44cdb35275cb2034203382313b38->enter($__internal_392d61a3b90c8af60062197cea8a0ae8298d44cdb35275cb2034203382313b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_78be5546fdf1d68f19b7591f3417cb0afa1601c8f6939ae8d279eada2da583fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78be5546fdf1d68f19b7591f3417cb0afa1601c8f6939ae8d279eada2da583fd->enter($__internal_78be5546fdf1d68f19b7591f3417cb0afa1601c8f6939ae8d279eada2da583fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_78be5546fdf1d68f19b7591f3417cb0afa1601c8f6939ae8d279eada2da583fd->leave($__internal_78be5546fdf1d68f19b7591f3417cb0afa1601c8f6939ae8d279eada2da583fd_prof);

        
        $__internal_392d61a3b90c8af60062197cea8a0ae8298d44cdb35275cb2034203382313b38->leave($__internal_392d61a3b90c8af60062197cea8a0ae8298d44cdb35275cb2034203382313b38_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62a0a1db0847cc3008030a0a1280870c662459137d0e511d84f55b0498773106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a0a1db0847cc3008030a0a1280870c662459137d0e511d84f55b0498773106->enter($__internal_62a0a1db0847cc3008030a0a1280870c662459137d0e511d84f55b0498773106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ed89aedf9d72cd933bfbc6d96065ecbd8ffd76c5827b10aedc8f5fdbbebb8f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed89aedf9d72cd933bfbc6d96065ecbd8ffd76c5827b10aedc8f5fdbbebb8f4->enter($__internal_3ed89aedf9d72cd933bfbc6d96065ecbd8ffd76c5827b10aedc8f5fdbbebb8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3ed89aedf9d72cd933bfbc6d96065ecbd8ffd76c5827b10aedc8f5fdbbebb8f4->leave($__internal_3ed89aedf9d72cd933bfbc6d96065ecbd8ffd76c5827b10aedc8f5fdbbebb8f4_prof);

        
        $__internal_62a0a1db0847cc3008030a0a1280870c662459137d0e511d84f55b0498773106->leave($__internal_62a0a1db0847cc3008030a0a1280870c662459137d0e511d84f55b0498773106_prof);

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
