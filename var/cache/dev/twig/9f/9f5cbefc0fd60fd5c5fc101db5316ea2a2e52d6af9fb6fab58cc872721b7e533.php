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
        $__internal_36455000623c88071ace4c8d90894d3aa4b7b30441852d407d31fccee8b5a8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36455000623c88071ace4c8d90894d3aa4b7b30441852d407d31fccee8b5a8e9->enter($__internal_36455000623c88071ace4c8d90894d3aa4b7b30441852d407d31fccee8b5a8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8673b53b41006520bcc9053ba85ad61d0071e2b1134644feadf64031dba9512f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8673b53b41006520bcc9053ba85ad61d0071e2b1134644feadf64031dba9512f->enter($__internal_8673b53b41006520bcc9053ba85ad61d0071e2b1134644feadf64031dba9512f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36455000623c88071ace4c8d90894d3aa4b7b30441852d407d31fccee8b5a8e9->leave($__internal_36455000623c88071ace4c8d90894d3aa4b7b30441852d407d31fccee8b5a8e9_prof);

        
        $__internal_8673b53b41006520bcc9053ba85ad61d0071e2b1134644feadf64031dba9512f->leave($__internal_8673b53b41006520bcc9053ba85ad61d0071e2b1134644feadf64031dba9512f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f9048a9ba4a7fee474a17ac9820ceb68d24d8d8beeb7435b8131c2e5b962656b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9048a9ba4a7fee474a17ac9820ceb68d24d8d8beeb7435b8131c2e5b962656b->enter($__internal_f9048a9ba4a7fee474a17ac9820ceb68d24d8d8beeb7435b8131c2e5b962656b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c83c026072659af8706e81e0f2f4983df0677aec4e2a5d20f09d3914136d0815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83c026072659af8706e81e0f2f4983df0677aec4e2a5d20f09d3914136d0815->enter($__internal_c83c026072659af8706e81e0f2f4983df0677aec4e2a5d20f09d3914136d0815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c83c026072659af8706e81e0f2f4983df0677aec4e2a5d20f09d3914136d0815->leave($__internal_c83c026072659af8706e81e0f2f4983df0677aec4e2a5d20f09d3914136d0815_prof);

        
        $__internal_f9048a9ba4a7fee474a17ac9820ceb68d24d8d8beeb7435b8131c2e5b962656b->leave($__internal_f9048a9ba4a7fee474a17ac9820ceb68d24d8d8beeb7435b8131c2e5b962656b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e68954abeed626f3798b8cc70a37136d642246479275e58cc3b33c0bf2951eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68954abeed626f3798b8cc70a37136d642246479275e58cc3b33c0bf2951eac->enter($__internal_e68954abeed626f3798b8cc70a37136d642246479275e58cc3b33c0bf2951eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f0851d1e1b3978e22a7bd5461dc7917b19865a09499232d673d527bb0c17493f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0851d1e1b3978e22a7bd5461dc7917b19865a09499232d673d527bb0c17493f->enter($__internal_f0851d1e1b3978e22a7bd5461dc7917b19865a09499232d673d527bb0c17493f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f0851d1e1b3978e22a7bd5461dc7917b19865a09499232d673d527bb0c17493f->leave($__internal_f0851d1e1b3978e22a7bd5461dc7917b19865a09499232d673d527bb0c17493f_prof);

        
        $__internal_e68954abeed626f3798b8cc70a37136d642246479275e58cc3b33c0bf2951eac->leave($__internal_e68954abeed626f3798b8cc70a37136d642246479275e58cc3b33c0bf2951eac_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_970b1a6ce9acf0a2e6c6238559a33b979c402cd58ab45eb557c5e4f936311a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970b1a6ce9acf0a2e6c6238559a33b979c402cd58ab45eb557c5e4f936311a33->enter($__internal_970b1a6ce9acf0a2e6c6238559a33b979c402cd58ab45eb557c5e4f936311a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_903f7fc41faf1099e60f490452194128122b314851ab962405845da0719f546f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903f7fc41faf1099e60f490452194128122b314851ab962405845da0719f546f->enter($__internal_903f7fc41faf1099e60f490452194128122b314851ab962405845da0719f546f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_903f7fc41faf1099e60f490452194128122b314851ab962405845da0719f546f->leave($__internal_903f7fc41faf1099e60f490452194128122b314851ab962405845da0719f546f_prof);

        
        $__internal_970b1a6ce9acf0a2e6c6238559a33b979c402cd58ab45eb557c5e4f936311a33->leave($__internal_970b1a6ce9acf0a2e6c6238559a33b979c402cd58ab45eb557c5e4f936311a33_prof);

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
