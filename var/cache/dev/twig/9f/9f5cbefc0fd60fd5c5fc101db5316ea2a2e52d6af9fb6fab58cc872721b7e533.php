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
        $__internal_cb90377f86bcbfe99042c3d4880e8a13189488a7221ebb42f0af4ee8de58cade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb90377f86bcbfe99042c3d4880e8a13189488a7221ebb42f0af4ee8de58cade->enter($__internal_cb90377f86bcbfe99042c3d4880e8a13189488a7221ebb42f0af4ee8de58cade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9909765fc53b980511f09dbbcdd2e9300c8a8bac6cfd353fb73cf6eec51b36e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9909765fc53b980511f09dbbcdd2e9300c8a8bac6cfd353fb73cf6eec51b36e5->enter($__internal_9909765fc53b980511f09dbbcdd2e9300c8a8bac6cfd353fb73cf6eec51b36e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb90377f86bcbfe99042c3d4880e8a13189488a7221ebb42f0af4ee8de58cade->leave($__internal_cb90377f86bcbfe99042c3d4880e8a13189488a7221ebb42f0af4ee8de58cade_prof);

        
        $__internal_9909765fc53b980511f09dbbcdd2e9300c8a8bac6cfd353fb73cf6eec51b36e5->leave($__internal_9909765fc53b980511f09dbbcdd2e9300c8a8bac6cfd353fb73cf6eec51b36e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c81653be159f12c9e3a594bfadfa18748f348140fffb3e6491532c7b24a8392b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c81653be159f12c9e3a594bfadfa18748f348140fffb3e6491532c7b24a8392b->enter($__internal_c81653be159f12c9e3a594bfadfa18748f348140fffb3e6491532c7b24a8392b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_423a1b8028edde7136f3a8478210009fe5cd8f5f655a06da24346e3c8fd97bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423a1b8028edde7136f3a8478210009fe5cd8f5f655a06da24346e3c8fd97bda->enter($__internal_423a1b8028edde7136f3a8478210009fe5cd8f5f655a06da24346e3c8fd97bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_423a1b8028edde7136f3a8478210009fe5cd8f5f655a06da24346e3c8fd97bda->leave($__internal_423a1b8028edde7136f3a8478210009fe5cd8f5f655a06da24346e3c8fd97bda_prof);

        
        $__internal_c81653be159f12c9e3a594bfadfa18748f348140fffb3e6491532c7b24a8392b->leave($__internal_c81653be159f12c9e3a594bfadfa18748f348140fffb3e6491532c7b24a8392b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04cc4efe2eece72d8d2afc4214158dcb09ea347b381f036fb3f73bb45d597e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04cc4efe2eece72d8d2afc4214158dcb09ea347b381f036fb3f73bb45d597e49->enter($__internal_04cc4efe2eece72d8d2afc4214158dcb09ea347b381f036fb3f73bb45d597e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_542d9298031868d207097f24f4405c933b10a7d09731e0b90113619d3be7080a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542d9298031868d207097f24f4405c933b10a7d09731e0b90113619d3be7080a->enter($__internal_542d9298031868d207097f24f4405c933b10a7d09731e0b90113619d3be7080a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_542d9298031868d207097f24f4405c933b10a7d09731e0b90113619d3be7080a->leave($__internal_542d9298031868d207097f24f4405c933b10a7d09731e0b90113619d3be7080a_prof);

        
        $__internal_04cc4efe2eece72d8d2afc4214158dcb09ea347b381f036fb3f73bb45d597e49->leave($__internal_04cc4efe2eece72d8d2afc4214158dcb09ea347b381f036fb3f73bb45d597e49_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd2c5556ab5955ae81ee4668fc05f676c197124401e4f626a10dd0038bc3d926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2c5556ab5955ae81ee4668fc05f676c197124401e4f626a10dd0038bc3d926->enter($__internal_cd2c5556ab5955ae81ee4668fc05f676c197124401e4f626a10dd0038bc3d926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_391d4e793476837d792f11fda6e20c24ba7e47ac0f8a63db6ea35b503bb34bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391d4e793476837d792f11fda6e20c24ba7e47ac0f8a63db6ea35b503bb34bc0->enter($__internal_391d4e793476837d792f11fda6e20c24ba7e47ac0f8a63db6ea35b503bb34bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_391d4e793476837d792f11fda6e20c24ba7e47ac0f8a63db6ea35b503bb34bc0->leave($__internal_391d4e793476837d792f11fda6e20c24ba7e47ac0f8a63db6ea35b503bb34bc0_prof);

        
        $__internal_cd2c5556ab5955ae81ee4668fc05f676c197124401e4f626a10dd0038bc3d926->leave($__internal_cd2c5556ab5955ae81ee4668fc05f676c197124401e4f626a10dd0038bc3d926_prof);

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
