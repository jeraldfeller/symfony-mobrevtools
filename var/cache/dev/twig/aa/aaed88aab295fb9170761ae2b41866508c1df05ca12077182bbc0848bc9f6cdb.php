<?php

/* settings/api-access.html.twig */
class __TwigTemplate_6a5b88769539411badb9a0ff49929f4db2200ea2c5a1a020853d89af2103db40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "settings/api-access.html.twig", 1);
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
        $__internal_8536c848c45d6f11103849d4cd782028c424cefcc9d5fde9d771faab5839c4cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8536c848c45d6f11103849d4cd782028c424cefcc9d5fde9d771faab5839c4cd->enter($__internal_8536c848c45d6f11103849d4cd782028c424cefcc9d5fde9d771faab5839c4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $__internal_c847cd2f0a8e1c00c7fa96cd372d444ecdaf414d88c76aebf4ae7aa17f126b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c847cd2f0a8e1c00c7fa96cd372d444ecdaf414d88c76aebf4ae7aa17f126b0e->enter($__internal_c847cd2f0a8e1c00c7fa96cd372d444ecdaf414d88c76aebf4ae7aa17f126b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8536c848c45d6f11103849d4cd782028c424cefcc9d5fde9d771faab5839c4cd->leave($__internal_8536c848c45d6f11103849d4cd782028c424cefcc9d5fde9d771faab5839c4cd_prof);

        
        $__internal_c847cd2f0a8e1c00c7fa96cd372d444ecdaf414d88c76aebf4ae7aa17f126b0e->leave($__internal_c847cd2f0a8e1c00c7fa96cd372d444ecdaf414d88c76aebf4ae7aa17f126b0e_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_60dcf12ef8b463fb54c61c0c23d942d62ff370c7169c3100ee7465c91f06f493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60dcf12ef8b463fb54c61c0c23d942d62ff370c7169c3100ee7465c91f06f493->enter($__internal_60dcf12ef8b463fb54c61c0c23d942d62ff370c7169c3100ee7465c91f06f493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_2d6b61b70fa6844f3363de84f9b2a81d0761cf56acc0fabd8f9b4f7385e63e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6b61b70fa6844f3363de84f9b2a81d0761cf56acc0fabd8f9b4f7385e63e00->enter($__internal_2d6b61b70fa6844f3363de84f9b2a81d0761cf56acc0fabd8f9b4f7385e63e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_2d6b61b70fa6844f3363de84f9b2a81d0761cf56acc0fabd8f9b4f7385e63e00->leave($__internal_2d6b61b70fa6844f3363de84f9b2a81d0761cf56acc0fabd8f9b4f7385e63e00_prof);

        
        $__internal_60dcf12ef8b463fb54c61c0c23d942d62ff370c7169c3100ee7465c91f06f493->leave($__internal_60dcf12ef8b463fb54c61c0c23d942d62ff370c7169c3100ee7465c91f06f493_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d426fac6aba923b003e3ec3c3abbf1f767491d5ea49b79cfe4f216f2adf0cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d426fac6aba923b003e3ec3c3abbf1f767491d5ea49b79cfe4f216f2adf0cb3->enter($__internal_3d426fac6aba923b003e3ec3c3abbf1f767491d5ea49b79cfe4f216f2adf0cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b4d088aaee004c3f9a0231db961c89d9201b60c0f02fcb1dbc2e9a506da764c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4d088aaee004c3f9a0231db961c89d9201b60c0f02fcb1dbc2e9a506da764c->enter($__internal_0b4d088aaee004c3f9a0231db961c89d9201b60c0f02fcb1dbc2e9a506da764c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b4d088aaee004c3f9a0231db961c89d9201b60c0f02fcb1dbc2e9a506da764c->leave($__internal_0b4d088aaee004c3f9a0231db961c89d9201b60c0f02fcb1dbc2e9a506da764c_prof);

        
        $__internal_3d426fac6aba923b003e3ec3c3abbf1f767491d5ea49b79cfe4f216f2adf0cb3->leave($__internal_3d426fac6aba923b003e3ec3c3abbf1f767491d5ea49b79cfe4f216f2adf0cb3_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2be82e0d07dc4dacce0973372a7676792adb29b9c5e9e121d1dc91380ca83924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be82e0d07dc4dacce0973372a7676792adb29b9c5e9e121d1dc91380ca83924->enter($__internal_2be82e0d07dc4dacce0973372a7676792adb29b9c5e9e121d1dc91380ca83924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bb438128593f0452cb1666da82bbad2b3cf791e139f461035555a93fdcb1c3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb438128593f0452cb1666da82bbad2b3cf791e139f461035555a93fdcb1c3ba->enter($__internal_bb438128593f0452cb1666da82bbad2b3cf791e139f461035555a93fdcb1c3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_bb438128593f0452cb1666da82bbad2b3cf791e139f461035555a93fdcb1c3ba->leave($__internal_bb438128593f0452cb1666da82bbad2b3cf791e139f461035555a93fdcb1c3ba_prof);

        
        $__internal_2be82e0d07dc4dacce0973372a7676792adb29b9c5e9e121d1dc91380ca83924->leave($__internal_2be82e0d07dc4dacce0973372a7676792adb29b9c5e9e121d1dc91380ca83924_prof);

    }

    public function getTemplateName()
    {
        return "settings/api-access.html.twig";
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
", "settings/api-access.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app\\Resources\\views\\settings\\api-access.html.twig");
    }
}
