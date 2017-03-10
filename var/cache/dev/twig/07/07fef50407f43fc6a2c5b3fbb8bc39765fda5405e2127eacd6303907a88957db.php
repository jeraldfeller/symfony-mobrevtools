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
        $__internal_9869358c9b9e859c59427c9f845f3e1ff5e4ea64fc674778a784aeead5aceffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9869358c9b9e859c59427c9f845f3e1ff5e4ea64fc674778a784aeead5aceffa->enter($__internal_9869358c9b9e859c59427c9f845f3e1ff5e4ea64fc674778a784aeead5aceffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_30958cb8e3fbedb8420fcf01fd1993880d6f173cce4941ceb053f3a2e3ea961f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30958cb8e3fbedb8420fcf01fd1993880d6f173cce4941ceb053f3a2e3ea961f->enter($__internal_30958cb8e3fbedb8420fcf01fd1993880d6f173cce4941ceb053f3a2e3ea961f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9869358c9b9e859c59427c9f845f3e1ff5e4ea64fc674778a784aeead5aceffa->leave($__internal_9869358c9b9e859c59427c9f845f3e1ff5e4ea64fc674778a784aeead5aceffa_prof);

        
        $__internal_30958cb8e3fbedb8420fcf01fd1993880d6f173cce4941ceb053f3a2e3ea961f->leave($__internal_30958cb8e3fbedb8420fcf01fd1993880d6f173cce4941ceb053f3a2e3ea961f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e78891d89b01b894b929c5a6807fe889a087bf6a6ce4872968d28439dc383a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78891d89b01b894b929c5a6807fe889a087bf6a6ce4872968d28439dc383a86->enter($__internal_e78891d89b01b894b929c5a6807fe889a087bf6a6ce4872968d28439dc383a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b80af31893a6be0df8210591947f4e4574fcad0d2c9667e46ba985216375c833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80af31893a6be0df8210591947f4e4574fcad0d2c9667e46ba985216375c833->enter($__internal_b80af31893a6be0df8210591947f4e4574fcad0d2c9667e46ba985216375c833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b80af31893a6be0df8210591947f4e4574fcad0d2c9667e46ba985216375c833->leave($__internal_b80af31893a6be0df8210591947f4e4574fcad0d2c9667e46ba985216375c833_prof);

        
        $__internal_e78891d89b01b894b929c5a6807fe889a087bf6a6ce4872968d28439dc383a86->leave($__internal_e78891d89b01b894b929c5a6807fe889a087bf6a6ce4872968d28439dc383a86_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe5fa05a9675c76d1eaabbfc16e212974d94f61f07af6154adea3a46cbdcc956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5fa05a9675c76d1eaabbfc16e212974d94f61f07af6154adea3a46cbdcc956->enter($__internal_fe5fa05a9675c76d1eaabbfc16e212974d94f61f07af6154adea3a46cbdcc956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e5ff4bd80189b56d4bd8c31d0457674388bdb7c0a8bc4fb29080c7613c1a62ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ff4bd80189b56d4bd8c31d0457674388bdb7c0a8bc4fb29080c7613c1a62ac->enter($__internal_e5ff4bd80189b56d4bd8c31d0457674388bdb7c0a8bc4fb29080c7613c1a62ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e5ff4bd80189b56d4bd8c31d0457674388bdb7c0a8bc4fb29080c7613c1a62ac->leave($__internal_e5ff4bd80189b56d4bd8c31d0457674388bdb7c0a8bc4fb29080c7613c1a62ac_prof);

        
        $__internal_fe5fa05a9675c76d1eaabbfc16e212974d94f61f07af6154adea3a46cbdcc956->leave($__internal_fe5fa05a9675c76d1eaabbfc16e212974d94f61f07af6154adea3a46cbdcc956_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a1d4b4483dc52d2f4947ffd52056e1efe9670d87e0f341b054cb28cc8333e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1d4b4483dc52d2f4947ffd52056e1efe9670d87e0f341b054cb28cc8333e8c->enter($__internal_9a1d4b4483dc52d2f4947ffd52056e1efe9670d87e0f341b054cb28cc8333e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0f790261de32a35a040d6c430ea995ec31e47a99803ec801994e1330534f8eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f790261de32a35a040d6c430ea995ec31e47a99803ec801994e1330534f8eef->enter($__internal_0f790261de32a35a040d6c430ea995ec31e47a99803ec801994e1330534f8eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0f790261de32a35a040d6c430ea995ec31e47a99803ec801994e1330534f8eef->leave($__internal_0f790261de32a35a040d6c430ea995ec31e47a99803ec801994e1330534f8eef_prof);

        
        $__internal_9a1d4b4483dc52d2f4947ffd52056e1efe9670d87e0f341b054cb28cc8333e8c->leave($__internal_9a1d4b4483dc52d2f4947ffd52056e1efe9670d87e0f341b054cb28cc8333e8c_prof);

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
