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
        $__internal_ca5e0e099f45e2c1012d739bdd8b4081130adece1f5065c164b2cb95e4edbedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5e0e099f45e2c1012d739bdd8b4081130adece1f5065c164b2cb95e4edbedd->enter($__internal_ca5e0e099f45e2c1012d739bdd8b4081130adece1f5065c164b2cb95e4edbedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e0bb46bf70d1c31ac6c863d7a40f03d7a086f537f419171a519bfe25c453f00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0bb46bf70d1c31ac6c863d7a40f03d7a086f537f419171a519bfe25c453f00c->enter($__internal_e0bb46bf70d1c31ac6c863d7a40f03d7a086f537f419171a519bfe25c453f00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca5e0e099f45e2c1012d739bdd8b4081130adece1f5065c164b2cb95e4edbedd->leave($__internal_ca5e0e099f45e2c1012d739bdd8b4081130adece1f5065c164b2cb95e4edbedd_prof);

        
        $__internal_e0bb46bf70d1c31ac6c863d7a40f03d7a086f537f419171a519bfe25c453f00c->leave($__internal_e0bb46bf70d1c31ac6c863d7a40f03d7a086f537f419171a519bfe25c453f00c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92ceb918772ff99433edae9d21c928091f159d78edb4c9c00751ca914075e152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ceb918772ff99433edae9d21c928091f159d78edb4c9c00751ca914075e152->enter($__internal_92ceb918772ff99433edae9d21c928091f159d78edb4c9c00751ca914075e152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d714d63058210df537c0bbf232fb934a57887f088d6519b5856aa0207370d8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d714d63058210df537c0bbf232fb934a57887f088d6519b5856aa0207370d8f2->enter($__internal_d714d63058210df537c0bbf232fb934a57887f088d6519b5856aa0207370d8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d714d63058210df537c0bbf232fb934a57887f088d6519b5856aa0207370d8f2->leave($__internal_d714d63058210df537c0bbf232fb934a57887f088d6519b5856aa0207370d8f2_prof);

        
        $__internal_92ceb918772ff99433edae9d21c928091f159d78edb4c9c00751ca914075e152->leave($__internal_92ceb918772ff99433edae9d21c928091f159d78edb4c9c00751ca914075e152_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a6be79bc64d4854460ff451c0bfb2acc3cb9ae269328a69020027c7991a98c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6be79bc64d4854460ff451c0bfb2acc3cb9ae269328a69020027c7991a98c8->enter($__internal_5a6be79bc64d4854460ff451c0bfb2acc3cb9ae269328a69020027c7991a98c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e8fbd38f1ba907ee1b824b1b1b88db24af2ce95baca50bc5c7009e9a2cecadf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fbd38f1ba907ee1b824b1b1b88db24af2ce95baca50bc5c7009e9a2cecadf9->enter($__internal_e8fbd38f1ba907ee1b824b1b1b88db24af2ce95baca50bc5c7009e9a2cecadf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e8fbd38f1ba907ee1b824b1b1b88db24af2ce95baca50bc5c7009e9a2cecadf9->leave($__internal_e8fbd38f1ba907ee1b824b1b1b88db24af2ce95baca50bc5c7009e9a2cecadf9_prof);

        
        $__internal_5a6be79bc64d4854460ff451c0bfb2acc3cb9ae269328a69020027c7991a98c8->leave($__internal_5a6be79bc64d4854460ff451c0bfb2acc3cb9ae269328a69020027c7991a98c8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_78d9c285e4ef0ce9f6b08a8676037eec3848a0cdb00f8b99e47210554f104d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d9c285e4ef0ce9f6b08a8676037eec3848a0cdb00f8b99e47210554f104d20->enter($__internal_78d9c285e4ef0ce9f6b08a8676037eec3848a0cdb00f8b99e47210554f104d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a74f35801e11069ca3e94b279c963a7f8058d48ea50aa374abdb668dd4be23f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74f35801e11069ca3e94b279c963a7f8058d48ea50aa374abdb668dd4be23f8->enter($__internal_a74f35801e11069ca3e94b279c963a7f8058d48ea50aa374abdb668dd4be23f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a74f35801e11069ca3e94b279c963a7f8058d48ea50aa374abdb668dd4be23f8->leave($__internal_a74f35801e11069ca3e94b279c963a7f8058d48ea50aa374abdb668dd4be23f8_prof);

        
        $__internal_78d9c285e4ef0ce9f6b08a8676037eec3848a0cdb00f8b99e47210554f104d20->leave($__internal_78d9c285e4ef0ce9f6b08a8676037eec3848a0cdb00f8b99e47210554f104d20_prof);

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
