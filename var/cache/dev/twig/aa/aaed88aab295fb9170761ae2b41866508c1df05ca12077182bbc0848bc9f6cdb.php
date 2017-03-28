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
        $__internal_484771ec5c67097c6cb7c289ee88fa154ea762deda153c0008b5904ef1e52d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_484771ec5c67097c6cb7c289ee88fa154ea762deda153c0008b5904ef1e52d3b->enter($__internal_484771ec5c67097c6cb7c289ee88fa154ea762deda153c0008b5904ef1e52d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $__internal_ba4d45014fa16f0698d0e3d19f24ae838a404e319b6ec4ebc5b4ddd917d48822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4d45014fa16f0698d0e3d19f24ae838a404e319b6ec4ebc5b4ddd917d48822->enter($__internal_ba4d45014fa16f0698d0e3d19f24ae838a404e319b6ec4ebc5b4ddd917d48822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_484771ec5c67097c6cb7c289ee88fa154ea762deda153c0008b5904ef1e52d3b->leave($__internal_484771ec5c67097c6cb7c289ee88fa154ea762deda153c0008b5904ef1e52d3b_prof);

        
        $__internal_ba4d45014fa16f0698d0e3d19f24ae838a404e319b6ec4ebc5b4ddd917d48822->leave($__internal_ba4d45014fa16f0698d0e3d19f24ae838a404e319b6ec4ebc5b4ddd917d48822_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_beb22c07a0de290eb2a9288fa5dc44637da49ecee19f1a9558effc08bb368ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb22c07a0de290eb2a9288fa5dc44637da49ecee19f1a9558effc08bb368ff2->enter($__internal_beb22c07a0de290eb2a9288fa5dc44637da49ecee19f1a9558effc08bb368ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6482590c6947affd4ceae27493c6d76c0b31925771e0c12192d64f44d768a9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6482590c6947affd4ceae27493c6d76c0b31925771e0c12192d64f44d768a9a5->enter($__internal_6482590c6947affd4ceae27493c6d76c0b31925771e0c12192d64f44d768a9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_6482590c6947affd4ceae27493c6d76c0b31925771e0c12192d64f44d768a9a5->leave($__internal_6482590c6947affd4ceae27493c6d76c0b31925771e0c12192d64f44d768a9a5_prof);

        
        $__internal_beb22c07a0de290eb2a9288fa5dc44637da49ecee19f1a9558effc08bb368ff2->leave($__internal_beb22c07a0de290eb2a9288fa5dc44637da49ecee19f1a9558effc08bb368ff2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa4213f581c266cb74e0b1ccd69505943253b90d4b426df1ecf28f4cd8d0e899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4213f581c266cb74e0b1ccd69505943253b90d4b426df1ecf28f4cd8d0e899->enter($__internal_aa4213f581c266cb74e0b1ccd69505943253b90d4b426df1ecf28f4cd8d0e899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf951b38785bf4e8e85cd7d3ab7e4a73b131cea224a5a3a56b6e9f864bfd0442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf951b38785bf4e8e85cd7d3ab7e4a73b131cea224a5a3a56b6e9f864bfd0442->enter($__internal_cf951b38785bf4e8e85cd7d3ab7e4a73b131cea224a5a3a56b6e9f864bfd0442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf951b38785bf4e8e85cd7d3ab7e4a73b131cea224a5a3a56b6e9f864bfd0442->leave($__internal_cf951b38785bf4e8e85cd7d3ab7e4a73b131cea224a5a3a56b6e9f864bfd0442_prof);

        
        $__internal_aa4213f581c266cb74e0b1ccd69505943253b90d4b426df1ecf28f4cd8d0e899->leave($__internal_aa4213f581c266cb74e0b1ccd69505943253b90d4b426df1ecf28f4cd8d0e899_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f64b9ff5798ca9640b1bb580f65fe20796f0c5d6143985aec09215a2511f2595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64b9ff5798ca9640b1bb580f65fe20796f0c5d6143985aec09215a2511f2595->enter($__internal_f64b9ff5798ca9640b1bb580f65fe20796f0c5d6143985aec09215a2511f2595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_020c19d872c5863895787a048682e4229ad0b8c1e68c0c1eda9fc072f81aaab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020c19d872c5863895787a048682e4229ad0b8c1e68c0c1eda9fc072f81aaab3->enter($__internal_020c19d872c5863895787a048682e4229ad0b8c1e68c0c1eda9fc072f81aaab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_020c19d872c5863895787a048682e4229ad0b8c1e68c0c1eda9fc072f81aaab3->leave($__internal_020c19d872c5863895787a048682e4229ad0b8c1e68c0c1eda9fc072f81aaab3_prof);

        
        $__internal_f64b9ff5798ca9640b1bb580f65fe20796f0c5d6143985aec09215a2511f2595->leave($__internal_f64b9ff5798ca9640b1bb580f65fe20796f0c5d6143985aec09215a2511f2595_prof);

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
