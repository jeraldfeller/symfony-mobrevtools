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
        $__internal_dfffefb85c4927b6be811e9ca20c44caf3694032bedb9bafd6103252ae5afcc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfffefb85c4927b6be811e9ca20c44caf3694032bedb9bafd6103252ae5afcc6->enter($__internal_dfffefb85c4927b6be811e9ca20c44caf3694032bedb9bafd6103252ae5afcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ba0001ac3103a5fb7d9adab7515320399b90526683f13ffab06947726a739f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0001ac3103a5fb7d9adab7515320399b90526683f13ffab06947726a739f21->enter($__internal_ba0001ac3103a5fb7d9adab7515320399b90526683f13ffab06947726a739f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfffefb85c4927b6be811e9ca20c44caf3694032bedb9bafd6103252ae5afcc6->leave($__internal_dfffefb85c4927b6be811e9ca20c44caf3694032bedb9bafd6103252ae5afcc6_prof);

        
        $__internal_ba0001ac3103a5fb7d9adab7515320399b90526683f13ffab06947726a739f21->leave($__internal_ba0001ac3103a5fb7d9adab7515320399b90526683f13ffab06947726a739f21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_55a6169cbee0a0e4341c61a7a2ab1a4c013c478a01d4c125c317e5710f7c3dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a6169cbee0a0e4341c61a7a2ab1a4c013c478a01d4c125c317e5710f7c3dbf->enter($__internal_55a6169cbee0a0e4341c61a7a2ab1a4c013c478a01d4c125c317e5710f7c3dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e0cb491efaf9df6adf5db72b0984d964c8efcdf0c2084d809ba014aaaddf4bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0cb491efaf9df6adf5db72b0984d964c8efcdf0c2084d809ba014aaaddf4bd8->enter($__internal_e0cb491efaf9df6adf5db72b0984d964c8efcdf0c2084d809ba014aaaddf4bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e0cb491efaf9df6adf5db72b0984d964c8efcdf0c2084d809ba014aaaddf4bd8->leave($__internal_e0cb491efaf9df6adf5db72b0984d964c8efcdf0c2084d809ba014aaaddf4bd8_prof);

        
        $__internal_55a6169cbee0a0e4341c61a7a2ab1a4c013c478a01d4c125c317e5710f7c3dbf->leave($__internal_55a6169cbee0a0e4341c61a7a2ab1a4c013c478a01d4c125c317e5710f7c3dbf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_27ff19650eecb3f9b49a721924f1d13d4252fe62623a5bf1cc7cfd90d569e2d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ff19650eecb3f9b49a721924f1d13d4252fe62623a5bf1cc7cfd90d569e2d5->enter($__internal_27ff19650eecb3f9b49a721924f1d13d4252fe62623a5bf1cc7cfd90d569e2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4040a7f08bcdab8af30134d2185b5dade9a28496e7f9d7c5679c7b5e23dd22da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4040a7f08bcdab8af30134d2185b5dade9a28496e7f9d7c5679c7b5e23dd22da->enter($__internal_4040a7f08bcdab8af30134d2185b5dade9a28496e7f9d7c5679c7b5e23dd22da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4040a7f08bcdab8af30134d2185b5dade9a28496e7f9d7c5679c7b5e23dd22da->leave($__internal_4040a7f08bcdab8af30134d2185b5dade9a28496e7f9d7c5679c7b5e23dd22da_prof);

        
        $__internal_27ff19650eecb3f9b49a721924f1d13d4252fe62623a5bf1cc7cfd90d569e2d5->leave($__internal_27ff19650eecb3f9b49a721924f1d13d4252fe62623a5bf1cc7cfd90d569e2d5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70641ad11cb8dab835322954c3a21c99af4d1bce3567a121228e60060c14507f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70641ad11cb8dab835322954c3a21c99af4d1bce3567a121228e60060c14507f->enter($__internal_70641ad11cb8dab835322954c3a21c99af4d1bce3567a121228e60060c14507f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_19ba3088699a0aa3b660f832786a4ba81ea1bc8663840ace437182a67f79dd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ba3088699a0aa3b660f832786a4ba81ea1bc8663840ace437182a67f79dd6e->enter($__internal_19ba3088699a0aa3b660f832786a4ba81ea1bc8663840ace437182a67f79dd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_19ba3088699a0aa3b660f832786a4ba81ea1bc8663840ace437182a67f79dd6e->leave($__internal_19ba3088699a0aa3b660f832786a4ba81ea1bc8663840ace437182a67f79dd6e_prof);

        
        $__internal_70641ad11cb8dab835322954c3a21c99af4d1bce3567a121228e60060c14507f->leave($__internal_70641ad11cb8dab835322954c3a21c99af4d1bce3567a121228e60060c14507f_prof);

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
