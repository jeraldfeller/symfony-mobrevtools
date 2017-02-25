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
        $__internal_ae851d06864d2d961f8ad4182d8d5c0ce0e35cf500f7b0866cbbb551c52636cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae851d06864d2d961f8ad4182d8d5c0ce0e35cf500f7b0866cbbb551c52636cb->enter($__internal_ae851d06864d2d961f8ad4182d8d5c0ce0e35cf500f7b0866cbbb551c52636cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $__internal_89c9139283a1ac7b7d895e7e598ae264821b4215d1282625fcb1aa4363edbb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c9139283a1ac7b7d895e7e598ae264821b4215d1282625fcb1aa4363edbb15->enter($__internal_89c9139283a1ac7b7d895e7e598ae264821b4215d1282625fcb1aa4363edbb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae851d06864d2d961f8ad4182d8d5c0ce0e35cf500f7b0866cbbb551c52636cb->leave($__internal_ae851d06864d2d961f8ad4182d8d5c0ce0e35cf500f7b0866cbbb551c52636cb_prof);

        
        $__internal_89c9139283a1ac7b7d895e7e598ae264821b4215d1282625fcb1aa4363edbb15->leave($__internal_89c9139283a1ac7b7d895e7e598ae264821b4215d1282625fcb1aa4363edbb15_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4139528f35d606ce2219488cba396daa5edbdb64d2f091e9b2d80ab716b115d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4139528f35d606ce2219488cba396daa5edbdb64d2f091e9b2d80ab716b115d9->enter($__internal_4139528f35d606ce2219488cba396daa5edbdb64d2f091e9b2d80ab716b115d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_fb6945855616507967f637be885492f50b5063f397a21d7ad50c229c0c3d9803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6945855616507967f637be885492f50b5063f397a21d7ad50c229c0c3d9803->enter($__internal_fb6945855616507967f637be885492f50b5063f397a21d7ad50c229c0c3d9803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_fb6945855616507967f637be885492f50b5063f397a21d7ad50c229c0c3d9803->leave($__internal_fb6945855616507967f637be885492f50b5063f397a21d7ad50c229c0c3d9803_prof);

        
        $__internal_4139528f35d606ce2219488cba396daa5edbdb64d2f091e9b2d80ab716b115d9->leave($__internal_4139528f35d606ce2219488cba396daa5edbdb64d2f091e9b2d80ab716b115d9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b23656f456604e90d7b11b46f7ad8acdb1ebc84601b2a1238749fffdcdabeca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23656f456604e90d7b11b46f7ad8acdb1ebc84601b2a1238749fffdcdabeca0->enter($__internal_b23656f456604e90d7b11b46f7ad8acdb1ebc84601b2a1238749fffdcdabeca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4c38155d6dd43d8132986eeed820959f7f5d2fc943719e2fdbbc54743519b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c38155d6dd43d8132986eeed820959f7f5d2fc943719e2fdbbc54743519b26->enter($__internal_f4c38155d6dd43d8132986eeed820959f7f5d2fc943719e2fdbbc54743519b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f4c38155d6dd43d8132986eeed820959f7f5d2fc943719e2fdbbc54743519b26->leave($__internal_f4c38155d6dd43d8132986eeed820959f7f5d2fc943719e2fdbbc54743519b26_prof);

        
        $__internal_b23656f456604e90d7b11b46f7ad8acdb1ebc84601b2a1238749fffdcdabeca0->leave($__internal_b23656f456604e90d7b11b46f7ad8acdb1ebc84601b2a1238749fffdcdabeca0_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1d6c2aa5e557231a128420fdd8a421b1b3e877a446163cc8889ba5c399e3ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d6c2aa5e557231a128420fdd8a421b1b3e877a446163cc8889ba5c399e3ec1->enter($__internal_f1d6c2aa5e557231a128420fdd8a421b1b3e877a446163cc8889ba5c399e3ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_619fcce4710c8b4452845688e238b7932b43f875e97bc277713e59a7cbc6003e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_619fcce4710c8b4452845688e238b7932b43f875e97bc277713e59a7cbc6003e->enter($__internal_619fcce4710c8b4452845688e238b7932b43f875e97bc277713e59a7cbc6003e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_619fcce4710c8b4452845688e238b7932b43f875e97bc277713e59a7cbc6003e->leave($__internal_619fcce4710c8b4452845688e238b7932b43f875e97bc277713e59a7cbc6003e_prof);

        
        $__internal_f1d6c2aa5e557231a128420fdd8a421b1b3e877a446163cc8889ba5c399e3ec1->leave($__internal_f1d6c2aa5e557231a128420fdd8a421b1b3e877a446163cc8889ba5c399e3ec1_prof);

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
