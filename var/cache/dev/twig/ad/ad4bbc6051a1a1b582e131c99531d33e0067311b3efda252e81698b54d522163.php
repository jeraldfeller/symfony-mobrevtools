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
        $__internal_5453eba44e665975df99d5c9cd12904f42fcce0bc2e0df64373d944693314dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5453eba44e665975df99d5c9cd12904f42fcce0bc2e0df64373d944693314dea->enter($__internal_5453eba44e665975df99d5c9cd12904f42fcce0bc2e0df64373d944693314dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_04442d608a7d80613cb63b691b9b4c70f8a06e65fb8ed778c28f01fc0d55b703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04442d608a7d80613cb63b691b9b4c70f8a06e65fb8ed778c28f01fc0d55b703->enter($__internal_04442d608a7d80613cb63b691b9b4c70f8a06e65fb8ed778c28f01fc0d55b703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5453eba44e665975df99d5c9cd12904f42fcce0bc2e0df64373d944693314dea->leave($__internal_5453eba44e665975df99d5c9cd12904f42fcce0bc2e0df64373d944693314dea_prof);

        
        $__internal_04442d608a7d80613cb63b691b9b4c70f8a06e65fb8ed778c28f01fc0d55b703->leave($__internal_04442d608a7d80613cb63b691b9b4c70f8a06e65fb8ed778c28f01fc0d55b703_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ef85eda8f0ab04b7cca23d7ae453341c67936dfb106490df2160c6e2c878482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef85eda8f0ab04b7cca23d7ae453341c67936dfb106490df2160c6e2c878482->enter($__internal_6ef85eda8f0ab04b7cca23d7ae453341c67936dfb106490df2160c6e2c878482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7626679bf023bcd864121b470983bf61efade0235f300155eaaa50632ada5f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7626679bf023bcd864121b470983bf61efade0235f300155eaaa50632ada5f30->enter($__internal_7626679bf023bcd864121b470983bf61efade0235f300155eaaa50632ada5f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7626679bf023bcd864121b470983bf61efade0235f300155eaaa50632ada5f30->leave($__internal_7626679bf023bcd864121b470983bf61efade0235f300155eaaa50632ada5f30_prof);

        
        $__internal_6ef85eda8f0ab04b7cca23d7ae453341c67936dfb106490df2160c6e2c878482->leave($__internal_6ef85eda8f0ab04b7cca23d7ae453341c67936dfb106490df2160c6e2c878482_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f54603fb7b1974d91dd02b2d24faa93cb9eb81925c46758dc85137e3e393515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f54603fb7b1974d91dd02b2d24faa93cb9eb81925c46758dc85137e3e393515->enter($__internal_0f54603fb7b1974d91dd02b2d24faa93cb9eb81925c46758dc85137e3e393515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_79c1c07c966bda776bc07feaa7cf8e13fe83233f4c8388e20c4a7a4b88b8ba28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c1c07c966bda776bc07feaa7cf8e13fe83233f4c8388e20c4a7a4b88b8ba28->enter($__internal_79c1c07c966bda776bc07feaa7cf8e13fe83233f4c8388e20c4a7a4b88b8ba28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_79c1c07c966bda776bc07feaa7cf8e13fe83233f4c8388e20c4a7a4b88b8ba28->leave($__internal_79c1c07c966bda776bc07feaa7cf8e13fe83233f4c8388e20c4a7a4b88b8ba28_prof);

        
        $__internal_0f54603fb7b1974d91dd02b2d24faa93cb9eb81925c46758dc85137e3e393515->leave($__internal_0f54603fb7b1974d91dd02b2d24faa93cb9eb81925c46758dc85137e3e393515_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f52c51f1bf3e962da98c0af5e7a953a639a86ea412ee83541a6730bd50b10bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f52c51f1bf3e962da98c0af5e7a953a639a86ea412ee83541a6730bd50b10bf->enter($__internal_3f52c51f1bf3e962da98c0af5e7a953a639a86ea412ee83541a6730bd50b10bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f43f437a7710b52652b1aed5593771aae85a32ae752a8227350a8c2a4f6748b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43f437a7710b52652b1aed5593771aae85a32ae752a8227350a8c2a4f6748b9->enter($__internal_f43f437a7710b52652b1aed5593771aae85a32ae752a8227350a8c2a4f6748b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f43f437a7710b52652b1aed5593771aae85a32ae752a8227350a8c2a4f6748b9->leave($__internal_f43f437a7710b52652b1aed5593771aae85a32ae752a8227350a8c2a4f6748b9_prof);

        
        $__internal_3f52c51f1bf3e962da98c0af5e7a953a639a86ea412ee83541a6730bd50b10bf->leave($__internal_3f52c51f1bf3e962da98c0af5e7a953a639a86ea412ee83541a6730bd50b10bf_prof);

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
