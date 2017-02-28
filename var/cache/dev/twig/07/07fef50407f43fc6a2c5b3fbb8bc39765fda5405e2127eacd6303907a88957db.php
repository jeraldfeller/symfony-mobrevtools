<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4d906b41c419cd60b60a5b877ec20488b7f480c37438477fe264a596ed445dca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_5f55bbc7c999c6a8e3e502ce677b1ae1136800fafd985feb894b0f862eeda580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f55bbc7c999c6a8e3e502ce677b1ae1136800fafd985feb894b0f862eeda580->enter($__internal_5f55bbc7c999c6a8e3e502ce677b1ae1136800fafd985feb894b0f862eeda580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b050164e7d6b09eaabcad7ca807189b9ebcdf024c53f430ddbea2be021eca7d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b050164e7d6b09eaabcad7ca807189b9ebcdf024c53f430ddbea2be021eca7d2->enter($__internal_b050164e7d6b09eaabcad7ca807189b9ebcdf024c53f430ddbea2be021eca7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f55bbc7c999c6a8e3e502ce677b1ae1136800fafd985feb894b0f862eeda580->leave($__internal_5f55bbc7c999c6a8e3e502ce677b1ae1136800fafd985feb894b0f862eeda580_prof);

        
        $__internal_b050164e7d6b09eaabcad7ca807189b9ebcdf024c53f430ddbea2be021eca7d2->leave($__internal_b050164e7d6b09eaabcad7ca807189b9ebcdf024c53f430ddbea2be021eca7d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_389973eced4922a220275d1d5a1421190be181e0d268d686e90cec1d86aa1007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_389973eced4922a220275d1d5a1421190be181e0d268d686e90cec1d86aa1007->enter($__internal_389973eced4922a220275d1d5a1421190be181e0d268d686e90cec1d86aa1007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_93d1a7b322851fac76867db6ba5861c911e3ea489954187068b84748a3bcfe3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d1a7b322851fac76867db6ba5861c911e3ea489954187068b84748a3bcfe3f->enter($__internal_93d1a7b322851fac76867db6ba5861c911e3ea489954187068b84748a3bcfe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_93d1a7b322851fac76867db6ba5861c911e3ea489954187068b84748a3bcfe3f->leave($__internal_93d1a7b322851fac76867db6ba5861c911e3ea489954187068b84748a3bcfe3f_prof);

        
        $__internal_389973eced4922a220275d1d5a1421190be181e0d268d686e90cec1d86aa1007->leave($__internal_389973eced4922a220275d1d5a1421190be181e0d268d686e90cec1d86aa1007_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_71ef7c1995bb20cebdd78b726dbde166561c8ef1f6dadf3994d57f47d917088f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ef7c1995bb20cebdd78b726dbde166561c8ef1f6dadf3994d57f47d917088f->enter($__internal_71ef7c1995bb20cebdd78b726dbde166561c8ef1f6dadf3994d57f47d917088f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_da4686e080dd33fca455181325f8048640f0e87dbab25ce4ffa90601b2f858aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4686e080dd33fca455181325f8048640f0e87dbab25ce4ffa90601b2f858aa->enter($__internal_da4686e080dd33fca455181325f8048640f0e87dbab25ce4ffa90601b2f858aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_da4686e080dd33fca455181325f8048640f0e87dbab25ce4ffa90601b2f858aa->leave($__internal_da4686e080dd33fca455181325f8048640f0e87dbab25ce4ffa90601b2f858aa_prof);

        
        $__internal_71ef7c1995bb20cebdd78b726dbde166561c8ef1f6dadf3994d57f47d917088f->leave($__internal_71ef7c1995bb20cebdd78b726dbde166561c8ef1f6dadf3994d57f47d917088f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b51cb36db21b7a1dc3e34895b41a58906461823a6251a298bc24cb037594504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b51cb36db21b7a1dc3e34895b41a58906461823a6251a298bc24cb037594504->enter($__internal_6b51cb36db21b7a1dc3e34895b41a58906461823a6251a298bc24cb037594504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6aa93b4c57f8fd2d502fc7e9db61925f29daae0d0e843e448ec8a1131bfbf2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa93b4c57f8fd2d502fc7e9db61925f29daae0d0e843e448ec8a1131bfbf2d6->enter($__internal_6aa93b4c57f8fd2d502fc7e9db61925f29daae0d0e843e448ec8a1131bfbf2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6aa93b4c57f8fd2d502fc7e9db61925f29daae0d0e843e448ec8a1131bfbf2d6->leave($__internal_6aa93b4c57f8fd2d502fc7e9db61925f29daae0d0e843e448ec8a1131bfbf2d6_prof);

        
        $__internal_6b51cb36db21b7a1dc3e34895b41a58906461823a6251a298bc24cb037594504->leave($__internal_6b51cb36db21b7a1dc3e34895b41a58906461823a6251a298bc24cb037594504_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
