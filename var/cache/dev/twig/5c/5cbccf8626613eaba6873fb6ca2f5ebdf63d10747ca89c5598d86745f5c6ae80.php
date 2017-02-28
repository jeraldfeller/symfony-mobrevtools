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
        $__internal_41ac6ecc3017abda4cd2cd5b912e08f3b4567b88807597491332ec8ac57cf2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ac6ecc3017abda4cd2cd5b912e08f3b4567b88807597491332ec8ac57cf2d2->enter($__internal_41ac6ecc3017abda4cd2cd5b912e08f3b4567b88807597491332ec8ac57cf2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $__internal_4937fede5f671acd16d1fa174739080d9e956a7e59f043eb77e581ab148071a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4937fede5f671acd16d1fa174739080d9e956a7e59f043eb77e581ab148071a3->enter($__internal_4937fede5f671acd16d1fa174739080d9e956a7e59f043eb77e581ab148071a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41ac6ecc3017abda4cd2cd5b912e08f3b4567b88807597491332ec8ac57cf2d2->leave($__internal_41ac6ecc3017abda4cd2cd5b912e08f3b4567b88807597491332ec8ac57cf2d2_prof);

        
        $__internal_4937fede5f671acd16d1fa174739080d9e956a7e59f043eb77e581ab148071a3->leave($__internal_4937fede5f671acd16d1fa174739080d9e956a7e59f043eb77e581ab148071a3_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_f197eb16e2fd28b5bd298e442938e5642f2726df401091198bc0055444d68adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f197eb16e2fd28b5bd298e442938e5642f2726df401091198bc0055444d68adb->enter($__internal_f197eb16e2fd28b5bd298e442938e5642f2726df401091198bc0055444d68adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_824253c854af52d0b07e9c9f684930c7bf68649ed059088269b2573c4a161b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824253c854af52d0b07e9c9f684930c7bf68649ed059088269b2573c4a161b94->enter($__internal_824253c854af52d0b07e9c9f684930c7bf68649ed059088269b2573c4a161b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_824253c854af52d0b07e9c9f684930c7bf68649ed059088269b2573c4a161b94->leave($__internal_824253c854af52d0b07e9c9f684930c7bf68649ed059088269b2573c4a161b94_prof);

        
        $__internal_f197eb16e2fd28b5bd298e442938e5642f2726df401091198bc0055444d68adb->leave($__internal_f197eb16e2fd28b5bd298e442938e5642f2726df401091198bc0055444d68adb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9dec620973c6a7a9e1196c9106c67407ade4d3fa2fb559bc4caefbe37df2526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9dec620973c6a7a9e1196c9106c67407ade4d3fa2fb559bc4caefbe37df2526->enter($__internal_b9dec620973c6a7a9e1196c9106c67407ade4d3fa2fb559bc4caefbe37df2526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b87399c17e91897c76cd29c36e4efb1cb12cd0c0596bca435aad6547ca77194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b87399c17e91897c76cd29c36e4efb1cb12cd0c0596bca435aad6547ca77194->enter($__internal_7b87399c17e91897c76cd29c36e4efb1cb12cd0c0596bca435aad6547ca77194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7b87399c17e91897c76cd29c36e4efb1cb12cd0c0596bca435aad6547ca77194->leave($__internal_7b87399c17e91897c76cd29c36e4efb1cb12cd0c0596bca435aad6547ca77194_prof);

        
        $__internal_b9dec620973c6a7a9e1196c9106c67407ade4d3fa2fb559bc4caefbe37df2526->leave($__internal_b9dec620973c6a7a9e1196c9106c67407ade4d3fa2fb559bc4caefbe37df2526_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd3e9c45f5f080ddd08e9e3600434b73757c5e729de4050a94a058861e303a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3e9c45f5f080ddd08e9e3600434b73757c5e729de4050a94a058861e303a28->enter($__internal_cd3e9c45f5f080ddd08e9e3600434b73757c5e729de4050a94a058861e303a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d5e276032327efdf1a653fa24d4de880e9453fa1038ad7654f38179b6fd2c55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e276032327efdf1a653fa24d4de880e9453fa1038ad7654f38179b6fd2c55b->enter($__internal_d5e276032327efdf1a653fa24d4de880e9453fa1038ad7654f38179b6fd2c55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_d5e276032327efdf1a653fa24d4de880e9453fa1038ad7654f38179b6fd2c55b->leave($__internal_d5e276032327efdf1a653fa24d4de880e9453fa1038ad7654f38179b6fd2c55b_prof);

        
        $__internal_cd3e9c45f5f080ddd08e9e3600434b73757c5e729de4050a94a058861e303a28->leave($__internal_cd3e9c45f5f080ddd08e9e3600434b73757c5e729de4050a94a058861e303a28_prof);

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
