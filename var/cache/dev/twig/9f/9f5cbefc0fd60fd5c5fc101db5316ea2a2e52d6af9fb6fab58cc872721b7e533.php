<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_85d12e649210931c67134325f95080093f5d5f05409e9d2829f43e0fa7ad76d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2cd6ced2a6d21240ce9fc2cacabbebe02bd89912bfab3eace87e466c4f2bfc3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd6ced2a6d21240ce9fc2cacabbebe02bd89912bfab3eace87e466c4f2bfc3e->enter($__internal_2cd6ced2a6d21240ce9fc2cacabbebe02bd89912bfab3eace87e466c4f2bfc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f95af462881fda5f5a26b63aca48ea48e98e35cf821b29af18a4c9ecf449b3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95af462881fda5f5a26b63aca48ea48e98e35cf821b29af18a4c9ecf449b3af->enter($__internal_f95af462881fda5f5a26b63aca48ea48e98e35cf821b29af18a4c9ecf449b3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cd6ced2a6d21240ce9fc2cacabbebe02bd89912bfab3eace87e466c4f2bfc3e->leave($__internal_2cd6ced2a6d21240ce9fc2cacabbebe02bd89912bfab3eace87e466c4f2bfc3e_prof);

        
        $__internal_f95af462881fda5f5a26b63aca48ea48e98e35cf821b29af18a4c9ecf449b3af->leave($__internal_f95af462881fda5f5a26b63aca48ea48e98e35cf821b29af18a4c9ecf449b3af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7c0743b488abbe332830b9ff7bec9fb1046f82ed783524c86c62a056e05aedb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0743b488abbe332830b9ff7bec9fb1046f82ed783524c86c62a056e05aedb9->enter($__internal_7c0743b488abbe332830b9ff7bec9fb1046f82ed783524c86c62a056e05aedb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e8468719f31777beb24b2ce5bcdea37a6036c21e293cb353995563a225ae9e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8468719f31777beb24b2ce5bcdea37a6036c21e293cb353995563a225ae9e13->enter($__internal_e8468719f31777beb24b2ce5bcdea37a6036c21e293cb353995563a225ae9e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e8468719f31777beb24b2ce5bcdea37a6036c21e293cb353995563a225ae9e13->leave($__internal_e8468719f31777beb24b2ce5bcdea37a6036c21e293cb353995563a225ae9e13_prof);

        
        $__internal_7c0743b488abbe332830b9ff7bec9fb1046f82ed783524c86c62a056e05aedb9->leave($__internal_7c0743b488abbe332830b9ff7bec9fb1046f82ed783524c86c62a056e05aedb9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_89602cbaecf495c99550e10c37e0d8ece0b62416eb35ad5fc8ff2ef973469252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89602cbaecf495c99550e10c37e0d8ece0b62416eb35ad5fc8ff2ef973469252->enter($__internal_89602cbaecf495c99550e10c37e0d8ece0b62416eb35ad5fc8ff2ef973469252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2a47f6be54ff68bf7bf5a707ea81b77c6087d61f25f52d4772bdb60a79c2c97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a47f6be54ff68bf7bf5a707ea81b77c6087d61f25f52d4772bdb60a79c2c97e->enter($__internal_2a47f6be54ff68bf7bf5a707ea81b77c6087d61f25f52d4772bdb60a79c2c97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2a47f6be54ff68bf7bf5a707ea81b77c6087d61f25f52d4772bdb60a79c2c97e->leave($__internal_2a47f6be54ff68bf7bf5a707ea81b77c6087d61f25f52d4772bdb60a79c2c97e_prof);

        
        $__internal_89602cbaecf495c99550e10c37e0d8ece0b62416eb35ad5fc8ff2ef973469252->leave($__internal_89602cbaecf495c99550e10c37e0d8ece0b62416eb35ad5fc8ff2ef973469252_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3acb8371bc95f7f061a5af0f24902ce8f8c6188f17f5470b01022162069d19be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acb8371bc95f7f061a5af0f24902ce8f8c6188f17f5470b01022162069d19be->enter($__internal_3acb8371bc95f7f061a5af0f24902ce8f8c6188f17f5470b01022162069d19be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e7e3196744365090dae4ebd68fe9a3b6b3fabc32c593a205988c576970ada48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7e3196744365090dae4ebd68fe9a3b6b3fabc32c593a205988c576970ada48->enter($__internal_9e7e3196744365090dae4ebd68fe9a3b6b3fabc32c593a205988c576970ada48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9e7e3196744365090dae4ebd68fe9a3b6b3fabc32c593a205988c576970ada48->leave($__internal_9e7e3196744365090dae4ebd68fe9a3b6b3fabc32c593a205988c576970ada48_prof);

        
        $__internal_3acb8371bc95f7f061a5af0f24902ce8f8c6188f17f5470b01022162069d19be->leave($__internal_3acb8371bc95f7f061a5af0f24902ce8f8c6188f17f5470b01022162069d19be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
