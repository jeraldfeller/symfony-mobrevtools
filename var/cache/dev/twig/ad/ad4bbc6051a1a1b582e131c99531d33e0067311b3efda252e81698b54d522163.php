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
        $__internal_ec66dad2f89c8f1ee559cf14170180e72855957ab62f85d23e2a6bcfefa6509b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec66dad2f89c8f1ee559cf14170180e72855957ab62f85d23e2a6bcfefa6509b->enter($__internal_ec66dad2f89c8f1ee559cf14170180e72855957ab62f85d23e2a6bcfefa6509b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dbcb3483d194753ffabd718cc2d568eb2cfcb215a1a0ef17fa0448841dcaa28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbcb3483d194753ffabd718cc2d568eb2cfcb215a1a0ef17fa0448841dcaa28c->enter($__internal_dbcb3483d194753ffabd718cc2d568eb2cfcb215a1a0ef17fa0448841dcaa28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec66dad2f89c8f1ee559cf14170180e72855957ab62f85d23e2a6bcfefa6509b->leave($__internal_ec66dad2f89c8f1ee559cf14170180e72855957ab62f85d23e2a6bcfefa6509b_prof);

        
        $__internal_dbcb3483d194753ffabd718cc2d568eb2cfcb215a1a0ef17fa0448841dcaa28c->leave($__internal_dbcb3483d194753ffabd718cc2d568eb2cfcb215a1a0ef17fa0448841dcaa28c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79f36a9cd13282e830e4669ce0f4e8ddcf4ce4a5b7d487646762d223990ad11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f36a9cd13282e830e4669ce0f4e8ddcf4ce4a5b7d487646762d223990ad11e->enter($__internal_79f36a9cd13282e830e4669ce0f4e8ddcf4ce4a5b7d487646762d223990ad11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b640fce318f3313a4e4b503d3cdc17e47379afed170d5eee923a7b050568219f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b640fce318f3313a4e4b503d3cdc17e47379afed170d5eee923a7b050568219f->enter($__internal_b640fce318f3313a4e4b503d3cdc17e47379afed170d5eee923a7b050568219f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b640fce318f3313a4e4b503d3cdc17e47379afed170d5eee923a7b050568219f->leave($__internal_b640fce318f3313a4e4b503d3cdc17e47379afed170d5eee923a7b050568219f_prof);

        
        $__internal_79f36a9cd13282e830e4669ce0f4e8ddcf4ce4a5b7d487646762d223990ad11e->leave($__internal_79f36a9cd13282e830e4669ce0f4e8ddcf4ce4a5b7d487646762d223990ad11e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25ca058cc5408642ffd0eb73bb613fee44643b5e750b42093368905d8a6ee0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ca058cc5408642ffd0eb73bb613fee44643b5e750b42093368905d8a6ee0fe->enter($__internal_25ca058cc5408642ffd0eb73bb613fee44643b5e750b42093368905d8a6ee0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a3088d3043fa6aab8c8e01de2709e4c91a7879837bd1b139f5629cef07fa5f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3088d3043fa6aab8c8e01de2709e4c91a7879837bd1b139f5629cef07fa5f00->enter($__internal_a3088d3043fa6aab8c8e01de2709e4c91a7879837bd1b139f5629cef07fa5f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a3088d3043fa6aab8c8e01de2709e4c91a7879837bd1b139f5629cef07fa5f00->leave($__internal_a3088d3043fa6aab8c8e01de2709e4c91a7879837bd1b139f5629cef07fa5f00_prof);

        
        $__internal_25ca058cc5408642ffd0eb73bb613fee44643b5e750b42093368905d8a6ee0fe->leave($__internal_25ca058cc5408642ffd0eb73bb613fee44643b5e750b42093368905d8a6ee0fe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04c79fbc08594c3b3625eb099c715521214b85c5bbf6561cc653dfbbbf699342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c79fbc08594c3b3625eb099c715521214b85c5bbf6561cc653dfbbbf699342->enter($__internal_04c79fbc08594c3b3625eb099c715521214b85c5bbf6561cc653dfbbbf699342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_66755ae632ace566258ba14fbf6f4952ddb18241db5f0c066682d84f778157ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66755ae632ace566258ba14fbf6f4952ddb18241db5f0c066682d84f778157ae->enter($__internal_66755ae632ace566258ba14fbf6f4952ddb18241db5f0c066682d84f778157ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_66755ae632ace566258ba14fbf6f4952ddb18241db5f0c066682d84f778157ae->leave($__internal_66755ae632ace566258ba14fbf6f4952ddb18241db5f0c066682d84f778157ae_prof);

        
        $__internal_04c79fbc08594c3b3625eb099c715521214b85c5bbf6561cc653dfbbbf699342->leave($__internal_04c79fbc08594c3b3625eb099c715521214b85c5bbf6561cc653dfbbbf699342_prof);

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
