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
        $__internal_4e1ae49cf1f0fa91f0049c18c3e955a65c93acc526c2db1bd983d9b02216bccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1ae49cf1f0fa91f0049c18c3e955a65c93acc526c2db1bd983d9b02216bccf->enter($__internal_4e1ae49cf1f0fa91f0049c18c3e955a65c93acc526c2db1bd983d9b02216bccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3927d07d7daa2ab653b395ebb21d0efa8c50d033caf4dabb63bbd487690a1358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3927d07d7daa2ab653b395ebb21d0efa8c50d033caf4dabb63bbd487690a1358->enter($__internal_3927d07d7daa2ab653b395ebb21d0efa8c50d033caf4dabb63bbd487690a1358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e1ae49cf1f0fa91f0049c18c3e955a65c93acc526c2db1bd983d9b02216bccf->leave($__internal_4e1ae49cf1f0fa91f0049c18c3e955a65c93acc526c2db1bd983d9b02216bccf_prof);

        
        $__internal_3927d07d7daa2ab653b395ebb21d0efa8c50d033caf4dabb63bbd487690a1358->leave($__internal_3927d07d7daa2ab653b395ebb21d0efa8c50d033caf4dabb63bbd487690a1358_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eed63fbb60309e5307ef626ed9cce6c249e7b61afd282bb0566a3f0d2e0f102b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed63fbb60309e5307ef626ed9cce6c249e7b61afd282bb0566a3f0d2e0f102b->enter($__internal_eed63fbb60309e5307ef626ed9cce6c249e7b61afd282bb0566a3f0d2e0f102b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed3306736f19bd5dfb0498941127c8b6b986a9694f2a81d4aaad965e7b6a6dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3306736f19bd5dfb0498941127c8b6b986a9694f2a81d4aaad965e7b6a6dbc->enter($__internal_ed3306736f19bd5dfb0498941127c8b6b986a9694f2a81d4aaad965e7b6a6dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ed3306736f19bd5dfb0498941127c8b6b986a9694f2a81d4aaad965e7b6a6dbc->leave($__internal_ed3306736f19bd5dfb0498941127c8b6b986a9694f2a81d4aaad965e7b6a6dbc_prof);

        
        $__internal_eed63fbb60309e5307ef626ed9cce6c249e7b61afd282bb0566a3f0d2e0f102b->leave($__internal_eed63fbb60309e5307ef626ed9cce6c249e7b61afd282bb0566a3f0d2e0f102b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cfefe573772e906f21c02011644fbf4b6921f348c40cc45541f885e591889929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfefe573772e906f21c02011644fbf4b6921f348c40cc45541f885e591889929->enter($__internal_cfefe573772e906f21c02011644fbf4b6921f348c40cc45541f885e591889929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7ab3ad1c880620bb175d24592c0052186b355a3c433fa0e509e96638f9c44e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab3ad1c880620bb175d24592c0052186b355a3c433fa0e509e96638f9c44e25->enter($__internal_7ab3ad1c880620bb175d24592c0052186b355a3c433fa0e509e96638f9c44e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ab3ad1c880620bb175d24592c0052186b355a3c433fa0e509e96638f9c44e25->leave($__internal_7ab3ad1c880620bb175d24592c0052186b355a3c433fa0e509e96638f9c44e25_prof);

        
        $__internal_cfefe573772e906f21c02011644fbf4b6921f348c40cc45541f885e591889929->leave($__internal_cfefe573772e906f21c02011644fbf4b6921f348c40cc45541f885e591889929_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc21f5fde91c56c89b27cf76c6615151e0719c9c37f3a0b36d4a0a37165b46e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc21f5fde91c56c89b27cf76c6615151e0719c9c37f3a0b36d4a0a37165b46e7->enter($__internal_dc21f5fde91c56c89b27cf76c6615151e0719c9c37f3a0b36d4a0a37165b46e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dd27b430f73f502c2fba1e5a250ad7d514739112f0d07a6a1bdc92d209ad35e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd27b430f73f502c2fba1e5a250ad7d514739112f0d07a6a1bdc92d209ad35e6->enter($__internal_dd27b430f73f502c2fba1e5a250ad7d514739112f0d07a6a1bdc92d209ad35e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dd27b430f73f502c2fba1e5a250ad7d514739112f0d07a6a1bdc92d209ad35e6->leave($__internal_dd27b430f73f502c2fba1e5a250ad7d514739112f0d07a6a1bdc92d209ad35e6_prof);

        
        $__internal_dc21f5fde91c56c89b27cf76c6615151e0719c9c37f3a0b36d4a0a37165b46e7->leave($__internal_dc21f5fde91c56c89b27cf76c6615151e0719c9c37f3a0b36d4a0a37165b46e7_prof);

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
