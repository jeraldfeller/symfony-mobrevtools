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
        $__internal_b38399ed02f02be7ac2aae72318e1b8c4e8f181f0b142fd475bdd817512d010c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b38399ed02f02be7ac2aae72318e1b8c4e8f181f0b142fd475bdd817512d010c->enter($__internal_b38399ed02f02be7ac2aae72318e1b8c4e8f181f0b142fd475bdd817512d010c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_88a3a9e3f632b3c5b90ad647c89d6406742f1dfdf49c6e51f9b1322efebf0ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a3a9e3f632b3c5b90ad647c89d6406742f1dfdf49c6e51f9b1322efebf0ca2->enter($__internal_88a3a9e3f632b3c5b90ad647c89d6406742f1dfdf49c6e51f9b1322efebf0ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b38399ed02f02be7ac2aae72318e1b8c4e8f181f0b142fd475bdd817512d010c->leave($__internal_b38399ed02f02be7ac2aae72318e1b8c4e8f181f0b142fd475bdd817512d010c_prof);

        
        $__internal_88a3a9e3f632b3c5b90ad647c89d6406742f1dfdf49c6e51f9b1322efebf0ca2->leave($__internal_88a3a9e3f632b3c5b90ad647c89d6406742f1dfdf49c6e51f9b1322efebf0ca2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f93826dc9043c94ec237b1c92f5a829029187b01983e907a0c3f7304174b0e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93826dc9043c94ec237b1c92f5a829029187b01983e907a0c3f7304174b0e75->enter($__internal_f93826dc9043c94ec237b1c92f5a829029187b01983e907a0c3f7304174b0e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_48f5c4518dc9eb45baa48d9511211dc2395bb70ca00ff45104a6464fef8a4883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f5c4518dc9eb45baa48d9511211dc2395bb70ca00ff45104a6464fef8a4883->enter($__internal_48f5c4518dc9eb45baa48d9511211dc2395bb70ca00ff45104a6464fef8a4883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_48f5c4518dc9eb45baa48d9511211dc2395bb70ca00ff45104a6464fef8a4883->leave($__internal_48f5c4518dc9eb45baa48d9511211dc2395bb70ca00ff45104a6464fef8a4883_prof);

        
        $__internal_f93826dc9043c94ec237b1c92f5a829029187b01983e907a0c3f7304174b0e75->leave($__internal_f93826dc9043c94ec237b1c92f5a829029187b01983e907a0c3f7304174b0e75_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3bbcb7b6a2d63562e1224c04dd105a9b4908196b1d5ce4e9fab1345c4d78b498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bbcb7b6a2d63562e1224c04dd105a9b4908196b1d5ce4e9fab1345c4d78b498->enter($__internal_3bbcb7b6a2d63562e1224c04dd105a9b4908196b1d5ce4e9fab1345c4d78b498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_93eaf550c2ecd010603b80aa11dfb9d128fc259c664a6d4a5aeaf5e611eef3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93eaf550c2ecd010603b80aa11dfb9d128fc259c664a6d4a5aeaf5e611eef3b4->enter($__internal_93eaf550c2ecd010603b80aa11dfb9d128fc259c664a6d4a5aeaf5e611eef3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_93eaf550c2ecd010603b80aa11dfb9d128fc259c664a6d4a5aeaf5e611eef3b4->leave($__internal_93eaf550c2ecd010603b80aa11dfb9d128fc259c664a6d4a5aeaf5e611eef3b4_prof);

        
        $__internal_3bbcb7b6a2d63562e1224c04dd105a9b4908196b1d5ce4e9fab1345c4d78b498->leave($__internal_3bbcb7b6a2d63562e1224c04dd105a9b4908196b1d5ce4e9fab1345c4d78b498_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e065120930b0af0aa5b6d2ad5db4c0a8cc271a9f112c15fae08f9cfaee086465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e065120930b0af0aa5b6d2ad5db4c0a8cc271a9f112c15fae08f9cfaee086465->enter($__internal_e065120930b0af0aa5b6d2ad5db4c0a8cc271a9f112c15fae08f9cfaee086465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b2c7797ce88bc2aba809bd8e31e8d091125adf1980ac5ee961045a43ea280b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c7797ce88bc2aba809bd8e31e8d091125adf1980ac5ee961045a43ea280b05->enter($__internal_b2c7797ce88bc2aba809bd8e31e8d091125adf1980ac5ee961045a43ea280b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b2c7797ce88bc2aba809bd8e31e8d091125adf1980ac5ee961045a43ea280b05->leave($__internal_b2c7797ce88bc2aba809bd8e31e8d091125adf1980ac5ee961045a43ea280b05_prof);

        
        $__internal_e065120930b0af0aa5b6d2ad5db4c0a8cc271a9f112c15fae08f9cfaee086465->leave($__internal_e065120930b0af0aa5b6d2ad5db4c0a8cc271a9f112c15fae08f9cfaee086465_prof);

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
