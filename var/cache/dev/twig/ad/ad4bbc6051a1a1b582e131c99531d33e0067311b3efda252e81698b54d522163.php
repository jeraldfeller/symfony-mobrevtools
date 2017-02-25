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
        $__internal_924ed7fc392b6a25e9146c90c13e1786dc170100b775292d4d7b25e3be8cd8b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924ed7fc392b6a25e9146c90c13e1786dc170100b775292d4d7b25e3be8cd8b0->enter($__internal_924ed7fc392b6a25e9146c90c13e1786dc170100b775292d4d7b25e3be8cd8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_803a69fca3001ee91e420f76f10ced15505189ec1e4974bf3142a56f7df0db79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803a69fca3001ee91e420f76f10ced15505189ec1e4974bf3142a56f7df0db79->enter($__internal_803a69fca3001ee91e420f76f10ced15505189ec1e4974bf3142a56f7df0db79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_924ed7fc392b6a25e9146c90c13e1786dc170100b775292d4d7b25e3be8cd8b0->leave($__internal_924ed7fc392b6a25e9146c90c13e1786dc170100b775292d4d7b25e3be8cd8b0_prof);

        
        $__internal_803a69fca3001ee91e420f76f10ced15505189ec1e4974bf3142a56f7df0db79->leave($__internal_803a69fca3001ee91e420f76f10ced15505189ec1e4974bf3142a56f7df0db79_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0cdbd8989782fa4dbb2aa432eae543a2f5d30aaadca7930de427fbe562e4c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0cdbd8989782fa4dbb2aa432eae543a2f5d30aaadca7930de427fbe562e4c13->enter($__internal_a0cdbd8989782fa4dbb2aa432eae543a2f5d30aaadca7930de427fbe562e4c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_48e3778a920fb72fabdafcffa14cdfa573c241b87331527044ba09ead3d8a961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e3778a920fb72fabdafcffa14cdfa573c241b87331527044ba09ead3d8a961->enter($__internal_48e3778a920fb72fabdafcffa14cdfa573c241b87331527044ba09ead3d8a961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_48e3778a920fb72fabdafcffa14cdfa573c241b87331527044ba09ead3d8a961->leave($__internal_48e3778a920fb72fabdafcffa14cdfa573c241b87331527044ba09ead3d8a961_prof);

        
        $__internal_a0cdbd8989782fa4dbb2aa432eae543a2f5d30aaadca7930de427fbe562e4c13->leave($__internal_a0cdbd8989782fa4dbb2aa432eae543a2f5d30aaadca7930de427fbe562e4c13_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc2d54870af1876df5edff5361fb7a08d767273d6609ca8289130c6fe9003fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2d54870af1876df5edff5361fb7a08d767273d6609ca8289130c6fe9003fff->enter($__internal_cc2d54870af1876df5edff5361fb7a08d767273d6609ca8289130c6fe9003fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bf0cf5956e9dd6c0bc7573c574ec48fc251b897b1a7f28256ad28e4beb03c3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0cf5956e9dd6c0bc7573c574ec48fc251b897b1a7f28256ad28e4beb03c3b9->enter($__internal_bf0cf5956e9dd6c0bc7573c574ec48fc251b897b1a7f28256ad28e4beb03c3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bf0cf5956e9dd6c0bc7573c574ec48fc251b897b1a7f28256ad28e4beb03c3b9->leave($__internal_bf0cf5956e9dd6c0bc7573c574ec48fc251b897b1a7f28256ad28e4beb03c3b9_prof);

        
        $__internal_cc2d54870af1876df5edff5361fb7a08d767273d6609ca8289130c6fe9003fff->leave($__internal_cc2d54870af1876df5edff5361fb7a08d767273d6609ca8289130c6fe9003fff_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8fcf6c155e38573b6befc380370219c55da2a952092f455cbdbc630d76fad2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fcf6c155e38573b6befc380370219c55da2a952092f455cbdbc630d76fad2b->enter($__internal_a8fcf6c155e38573b6befc380370219c55da2a952092f455cbdbc630d76fad2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eef61195f1f9c29d70029bf32939ec885572feea57756df708409431e7a0164e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef61195f1f9c29d70029bf32939ec885572feea57756df708409431e7a0164e->enter($__internal_eef61195f1f9c29d70029bf32939ec885572feea57756df708409431e7a0164e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_eef61195f1f9c29d70029bf32939ec885572feea57756df708409431e7a0164e->leave($__internal_eef61195f1f9c29d70029bf32939ec885572feea57756df708409431e7a0164e_prof);

        
        $__internal_a8fcf6c155e38573b6befc380370219c55da2a952092f455cbdbc630d76fad2b->leave($__internal_a8fcf6c155e38573b6befc380370219c55da2a952092f455cbdbc630d76fad2b_prof);

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
