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
        $__internal_c6297fae0ff37e9abd6e964fdfe86520039594a8ccf8c18989c3eec6ef5c48ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6297fae0ff37e9abd6e964fdfe86520039594a8ccf8c18989c3eec6ef5c48ac->enter($__internal_c6297fae0ff37e9abd6e964fdfe86520039594a8ccf8c18989c3eec6ef5c48ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_87ea3e089dcfbb10fd74cafacf41600764c31a4f7bccd5d4f0b718bcc5b3c7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ea3e089dcfbb10fd74cafacf41600764c31a4f7bccd5d4f0b718bcc5b3c7c7->enter($__internal_87ea3e089dcfbb10fd74cafacf41600764c31a4f7bccd5d4f0b718bcc5b3c7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6297fae0ff37e9abd6e964fdfe86520039594a8ccf8c18989c3eec6ef5c48ac->leave($__internal_c6297fae0ff37e9abd6e964fdfe86520039594a8ccf8c18989c3eec6ef5c48ac_prof);

        
        $__internal_87ea3e089dcfbb10fd74cafacf41600764c31a4f7bccd5d4f0b718bcc5b3c7c7->leave($__internal_87ea3e089dcfbb10fd74cafacf41600764c31a4f7bccd5d4f0b718bcc5b3c7c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34d480947ca5e92d23b6675c9a4500202f9fd05a04ddbf0a10312858143300bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d480947ca5e92d23b6675c9a4500202f9fd05a04ddbf0a10312858143300bf->enter($__internal_34d480947ca5e92d23b6675c9a4500202f9fd05a04ddbf0a10312858143300bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2dae8ece996c13237ff8e25ddc48aa345ae1cd81b902e3daf9076ec2e57efad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dae8ece996c13237ff8e25ddc48aa345ae1cd81b902e3daf9076ec2e57efad1->enter($__internal_2dae8ece996c13237ff8e25ddc48aa345ae1cd81b902e3daf9076ec2e57efad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2dae8ece996c13237ff8e25ddc48aa345ae1cd81b902e3daf9076ec2e57efad1->leave($__internal_2dae8ece996c13237ff8e25ddc48aa345ae1cd81b902e3daf9076ec2e57efad1_prof);

        
        $__internal_34d480947ca5e92d23b6675c9a4500202f9fd05a04ddbf0a10312858143300bf->leave($__internal_34d480947ca5e92d23b6675c9a4500202f9fd05a04ddbf0a10312858143300bf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6be4aea5e76f0181de7310c04ad52c169eff37fc1d0c9353091b68add8a33bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be4aea5e76f0181de7310c04ad52c169eff37fc1d0c9353091b68add8a33bed->enter($__internal_6be4aea5e76f0181de7310c04ad52c169eff37fc1d0c9353091b68add8a33bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_24c974fea42c447680a3929151d00f4e4c3cee1355f7065026dd08e102bb61c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c974fea42c447680a3929151d00f4e4c3cee1355f7065026dd08e102bb61c0->enter($__internal_24c974fea42c447680a3929151d00f4e4c3cee1355f7065026dd08e102bb61c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_24c974fea42c447680a3929151d00f4e4c3cee1355f7065026dd08e102bb61c0->leave($__internal_24c974fea42c447680a3929151d00f4e4c3cee1355f7065026dd08e102bb61c0_prof);

        
        $__internal_6be4aea5e76f0181de7310c04ad52c169eff37fc1d0c9353091b68add8a33bed->leave($__internal_6be4aea5e76f0181de7310c04ad52c169eff37fc1d0c9353091b68add8a33bed_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff423e72a813fb14bbc1ec2217b5258461a93a769071d9c6d17637a1ee2941a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff423e72a813fb14bbc1ec2217b5258461a93a769071d9c6d17637a1ee2941a9->enter($__internal_ff423e72a813fb14bbc1ec2217b5258461a93a769071d9c6d17637a1ee2941a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c910e79ff4a9f913200308c55f2727a1050a6ade0f221fbc50de3251ed72344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c910e79ff4a9f913200308c55f2727a1050a6ade0f221fbc50de3251ed72344->enter($__internal_8c910e79ff4a9f913200308c55f2727a1050a6ade0f221fbc50de3251ed72344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8c910e79ff4a9f913200308c55f2727a1050a6ade0f221fbc50de3251ed72344->leave($__internal_8c910e79ff4a9f913200308c55f2727a1050a6ade0f221fbc50de3251ed72344_prof);

        
        $__internal_ff423e72a813fb14bbc1ec2217b5258461a93a769071d9c6d17637a1ee2941a9->leave($__internal_ff423e72a813fb14bbc1ec2217b5258461a93a769071d9c6d17637a1ee2941a9_prof);

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
