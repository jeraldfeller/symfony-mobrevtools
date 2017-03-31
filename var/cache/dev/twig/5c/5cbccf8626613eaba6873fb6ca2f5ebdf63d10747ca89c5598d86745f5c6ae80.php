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
        $__internal_c19c0e6fa08ddb0c12acf1a5f525dd60a3fb5e68721e96f13fd0aa72ae16f7e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19c0e6fa08ddb0c12acf1a5f525dd60a3fb5e68721e96f13fd0aa72ae16f7e0->enter($__internal_c19c0e6fa08ddb0c12acf1a5f525dd60a3fb5e68721e96f13fd0aa72ae16f7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $__internal_71a3ce772759db03aaf36f039813dd70b27b0da582ed7d36e8e3c50b4309e406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a3ce772759db03aaf36f039813dd70b27b0da582ed7d36e8e3c50b4309e406->enter($__internal_71a3ce772759db03aaf36f039813dd70b27b0da582ed7d36e8e3c50b4309e406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c19c0e6fa08ddb0c12acf1a5f525dd60a3fb5e68721e96f13fd0aa72ae16f7e0->leave($__internal_c19c0e6fa08ddb0c12acf1a5f525dd60a3fb5e68721e96f13fd0aa72ae16f7e0_prof);

        
        $__internal_71a3ce772759db03aaf36f039813dd70b27b0da582ed7d36e8e3c50b4309e406->leave($__internal_71a3ce772759db03aaf36f039813dd70b27b0da582ed7d36e8e3c50b4309e406_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_02667af5f8a3cc29d442907ca1672879b93bcfeab861d9e8e61e7a8b2264e2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02667af5f8a3cc29d442907ca1672879b93bcfeab861d9e8e61e7a8b2264e2c0->enter($__internal_02667af5f8a3cc29d442907ca1672879b93bcfeab861d9e8e61e7a8b2264e2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_ed989aaa60567a032eb313dded069f67339949a37ae3434a28ad303ea2319b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed989aaa60567a032eb313dded069f67339949a37ae3434a28ad303ea2319b66->enter($__internal_ed989aaa60567a032eb313dded069f67339949a37ae3434a28ad303ea2319b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_ed989aaa60567a032eb313dded069f67339949a37ae3434a28ad303ea2319b66->leave($__internal_ed989aaa60567a032eb313dded069f67339949a37ae3434a28ad303ea2319b66_prof);

        
        $__internal_02667af5f8a3cc29d442907ca1672879b93bcfeab861d9e8e61e7a8b2264e2c0->leave($__internal_02667af5f8a3cc29d442907ca1672879b93bcfeab861d9e8e61e7a8b2264e2c0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c6feabf8ce333df6192312e43e8cc1f21e45cdfbb4407e1fa40a87904495c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6feabf8ce333df6192312e43e8cc1f21e45cdfbb4407e1fa40a87904495c77->enter($__internal_9c6feabf8ce333df6192312e43e8cc1f21e45cdfbb4407e1fa40a87904495c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e89e5eb13f0baa85459d607d23a6b30bf0d437a441bdb05cf36532d818c06931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89e5eb13f0baa85459d607d23a6b30bf0d437a441bdb05cf36532d818c06931->enter($__internal_e89e5eb13f0baa85459d607d23a6b30bf0d437a441bdb05cf36532d818c06931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e89e5eb13f0baa85459d607d23a6b30bf0d437a441bdb05cf36532d818c06931->leave($__internal_e89e5eb13f0baa85459d607d23a6b30bf0d437a441bdb05cf36532d818c06931_prof);

        
        $__internal_9c6feabf8ce333df6192312e43e8cc1f21e45cdfbb4407e1fa40a87904495c77->leave($__internal_9c6feabf8ce333df6192312e43e8cc1f21e45cdfbb4407e1fa40a87904495c77_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3795035f18067a2fa5b5d50e51ea70704475de9213657a9c8a75b8c5b31bbc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3795035f18067a2fa5b5d50e51ea70704475de9213657a9c8a75b8c5b31bbc1->enter($__internal_a3795035f18067a2fa5b5d50e51ea70704475de9213657a9c8a75b8c5b31bbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_64e1abbb6f6f6308b94db6f3b10183a6469e5512b91b8385d07dd39e03ed630d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e1abbb6f6f6308b94db6f3b10183a6469e5512b91b8385d07dd39e03ed630d->enter($__internal_64e1abbb6f6f6308b94db6f3b10183a6469e5512b91b8385d07dd39e03ed630d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_64e1abbb6f6f6308b94db6f3b10183a6469e5512b91b8385d07dd39e03ed630d->leave($__internal_64e1abbb6f6f6308b94db6f3b10183a6469e5512b91b8385d07dd39e03ed630d_prof);

        
        $__internal_a3795035f18067a2fa5b5d50e51ea70704475de9213657a9c8a75b8c5b31bbc1->leave($__internal_a3795035f18067a2fa5b5d50e51ea70704475de9213657a9c8a75b8c5b31bbc1_prof);

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
