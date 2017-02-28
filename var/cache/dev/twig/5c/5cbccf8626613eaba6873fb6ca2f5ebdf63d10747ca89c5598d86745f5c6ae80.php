<?php

/* :settings:api-access.html.twig */
class __TwigTemplate_58b3ad240e2895ba04457e0da4e027472566bfa28fc8c0ec4b8800bfe90da0d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":settings:api-access.html.twig", 1);
        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a196b8803f2db8aaad0e2eac9bf2399189a301942fb67142c775e12bbc1a7889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a196b8803f2db8aaad0e2eac9bf2399189a301942fb67142c775e12bbc1a7889->enter($__internal_a196b8803f2db8aaad0e2eac9bf2399189a301942fb67142c775e12bbc1a7889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $__internal_93ddc085629df08490b2892431050c159e0ca64969e4e111ec33f5820ca0cde0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ddc085629df08490b2892431050c159e0ca64969e4e111ec33f5820ca0cde0->enter($__internal_93ddc085629df08490b2892431050c159e0ca64969e4e111ec33f5820ca0cde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a196b8803f2db8aaad0e2eac9bf2399189a301942fb67142c775e12bbc1a7889->leave($__internal_a196b8803f2db8aaad0e2eac9bf2399189a301942fb67142c775e12bbc1a7889_prof);

        
        $__internal_93ddc085629df08490b2892431050c159e0ca64969e4e111ec33f5820ca0cde0->leave($__internal_93ddc085629df08490b2892431050c159e0ca64969e4e111ec33f5820ca0cde0_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4f98b38a563b5ee3d2f2f0c33a42ac937a322177bafde02976be8360d6f22c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f98b38a563b5ee3d2f2f0c33a42ac937a322177bafde02976be8360d6f22c5f->enter($__internal_4f98b38a563b5ee3d2f2f0c33a42ac937a322177bafde02976be8360d6f22c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_9f3461c584680659ab9ba89a9a7cb4cac0f94fd2994db97af481c66a184e05f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3461c584680659ab9ba89a9a7cb4cac0f94fd2994db97af481c66a184e05f7->enter($__internal_9f3461c584680659ab9ba89a9a7cb4cac0f94fd2994db97af481c66a184e05f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_9f3461c584680659ab9ba89a9a7cb4cac0f94fd2994db97af481c66a184e05f7->leave($__internal_9f3461c584680659ab9ba89a9a7cb4cac0f94fd2994db97af481c66a184e05f7_prof);

        
        $__internal_4f98b38a563b5ee3d2f2f0c33a42ac937a322177bafde02976be8360d6f22c5f->leave($__internal_4f98b38a563b5ee3d2f2f0c33a42ac937a322177bafde02976be8360d6f22c5f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e0d6776cc18c37383bd7b894e263fcedb908c659fb0012e9e3f130ed4035536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0d6776cc18c37383bd7b894e263fcedb908c659fb0012e9e3f130ed4035536->enter($__internal_8e0d6776cc18c37383bd7b894e263fcedb908c659fb0012e9e3f130ed4035536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49c6b63d96ba647cb058b61d9d26827ca307f9509fb2d8a35743bbc22701f58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c6b63d96ba647cb058b61d9d26827ca307f9509fb2d8a35743bbc22701f58c->enter($__internal_49c6b63d96ba647cb058b61d9d26827ca307f9509fb2d8a35743bbc22701f58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1 class=\"page-title\"> Global Settings
        <small>api access credentials</small>
    </h1>
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"/\">Home</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>Global Settings</span>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo "</span>
            </li>
        </ul>
        <div class=\"page-toolbar\">
            <div class=\"btn-group pull-right\">
                <button type=\"button\" class=\"btn btn-fit-height grey-salt dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"true\"> Actions
                    <i class=\"fa fa-angle-down\"></i>
                </button>
                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-bell\"></i> Action</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-shield\"></i> Another action</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-user\"></i> Something else here</a>
                    </li>
                    <li class=\"divider\"> </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-bag\"></i> Separated link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <div class=\"row\">
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Settings:getApiAccessCredentials"));
        // line 57
        echo "
    </div>
    <!-- AJAX CALLS -->
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/global-settings/ajax-global-settings.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
";
        
        $__internal_49c6b63d96ba647cb058b61d9d26827ca307f9509fb2d8a35743bbc22701f58c->leave($__internal_49c6b63d96ba647cb058b61d9d26827ca307f9509fb2d8a35743bbc22701f58c_prof);

        
        $__internal_8e0d6776cc18c37383bd7b894e263fcedb908c659fb0012e9e3f130ed4035536->leave($__internal_8e0d6776cc18c37383bd7b894e263fcedb908c659fb0012e9e3f130ed4035536_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d44c0d56c85cb761a32d6326a94aafc74d4ce8cd66da922b845b357a04a9a6f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44c0d56c85cb761a32d6326a94aafc74d4ce8cd66da922b845b357a04a9a6f0->enter($__internal_d44c0d56c85cb761a32d6326a94aafc74d4ce8cd66da922b845b357a04a9a6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_95e5e6898abb4eb98897b8caeece702bd2bfa22db3dcbb9840d61e188f646421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e5e6898abb4eb98897b8caeece702bd2bfa22db3dcbb9840d61e188f646421->enter($__internal_95e5e6898abb4eb98897b8caeece702bd2bfa22db3dcbb9840d61e188f646421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_95e5e6898abb4eb98897b8caeece702bd2bfa22db3dcbb9840d61e188f646421->leave($__internal_95e5e6898abb4eb98897b8caeece702bd2bfa22db3dcbb9840d61e188f646421_prof);

        
        $__internal_d44c0d56c85cb761a32d6326a94aafc74d4ce8cd66da922b845b357a04a9a6f0->leave($__internal_d44c0d56c85cb761a32d6326a94aafc74d4ce8cd66da922b845b357a04a9a6f0_prof);

    }

    public function getTemplateName()
    {
        return ":settings:api-access.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 64,  146 => 63,  133 => 60,  128 => 57,  126 => 55,  91 => 23,  74 => 8,  65 => 7,  54 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block nav %}
    {{ render(controller(
    'AppBundle:Navmenu:getNavmenu'
    )) }}
{% endblock %}
{% block body %}
    <h1 class=\"page-title\"> Global Settings
        <small>api access credentials</small>
    </h1>
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"/\">Home</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>Global Settings</span>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>{{ page }}</span>
            </li>
        </ul>
        <div class=\"page-toolbar\">
            <div class=\"btn-group pull-right\">
                <button type=\"button\" class=\"btn btn-fit-height grey-salt dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"1000\" data-close-others=\"true\"> Actions
                    <i class=\"fa fa-angle-down\"></i>
                </button>
                <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-bell\"></i> Action</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-shield\"></i> Another action</a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-user\"></i> Something else here</a>
                    </li>
                    <li class=\"divider\"> </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"icon-bag\"></i> Separated link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <div class=\"row\">
        {{ render(controller(
            'AppBundle:Settings:getApiAccessCredentials'
        )) }}
    </div>
    <!-- AJAX CALLS -->
    <script src=\"{{ asset('assets/ajax/global-settings/ajax-global-settings.js') }}\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
{% endblock %}
{% block javascripts %}

{% endblock %}
", ":settings:api-access.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app/Resources\\views/settings/api-access.html.twig");
    }
}
