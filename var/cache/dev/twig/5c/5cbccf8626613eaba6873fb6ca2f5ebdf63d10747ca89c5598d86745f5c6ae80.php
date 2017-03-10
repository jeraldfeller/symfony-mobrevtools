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
        $__internal_8267d8def8d694d763d79a04fa2b97e963de77186995ad177b6a3519d4bbdff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8267d8def8d694d763d79a04fa2b97e963de77186995ad177b6a3519d4bbdff6->enter($__internal_8267d8def8d694d763d79a04fa2b97e963de77186995ad177b6a3519d4bbdff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $__internal_f28387bd5a443ce17c6025bb4be083545340eeac2bb613e5ff9008d20ab5141c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28387bd5a443ce17c6025bb4be083545340eeac2bb613e5ff9008d20ab5141c->enter($__internal_f28387bd5a443ce17c6025bb4be083545340eeac2bb613e5ff9008d20ab5141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8267d8def8d694d763d79a04fa2b97e963de77186995ad177b6a3519d4bbdff6->leave($__internal_8267d8def8d694d763d79a04fa2b97e963de77186995ad177b6a3519d4bbdff6_prof);

        
        $__internal_f28387bd5a443ce17c6025bb4be083545340eeac2bb613e5ff9008d20ab5141c->leave($__internal_f28387bd5a443ce17c6025bb4be083545340eeac2bb613e5ff9008d20ab5141c_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a6b58d6dc644318fa93395bd3d18d78ca92dd4945e7c7eb841328eef8d2ac6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b58d6dc644318fa93395bd3d18d78ca92dd4945e7c7eb841328eef8d2ac6ff->enter($__internal_a6b58d6dc644318fa93395bd3d18d78ca92dd4945e7c7eb841328eef8d2ac6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_0044cf284913469898add0c9480344c6f3d2285e1b3544c50540faf33930dbcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0044cf284913469898add0c9480344c6f3d2285e1b3544c50540faf33930dbcc->enter($__internal_0044cf284913469898add0c9480344c6f3d2285e1b3544c50540faf33930dbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_0044cf284913469898add0c9480344c6f3d2285e1b3544c50540faf33930dbcc->leave($__internal_0044cf284913469898add0c9480344c6f3d2285e1b3544c50540faf33930dbcc_prof);

        
        $__internal_a6b58d6dc644318fa93395bd3d18d78ca92dd4945e7c7eb841328eef8d2ac6ff->leave($__internal_a6b58d6dc644318fa93395bd3d18d78ca92dd4945e7c7eb841328eef8d2ac6ff_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a28fe407ee587cace7dbe3a1c4c55bd519208b4eb88508a8d21085b766f652d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28fe407ee587cace7dbe3a1c4c55bd519208b4eb88508a8d21085b766f652d5->enter($__internal_a28fe407ee587cace7dbe3a1c4c55bd519208b4eb88508a8d21085b766f652d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75e8b056ed437281b252d88a0651a16255d0d9303bde034fcdf65e581ee21f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e8b056ed437281b252d88a0651a16255d0d9303bde034fcdf65e581ee21f72->enter($__internal_75e8b056ed437281b252d88a0651a16255d0d9303bde034fcdf65e581ee21f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_75e8b056ed437281b252d88a0651a16255d0d9303bde034fcdf65e581ee21f72->leave($__internal_75e8b056ed437281b252d88a0651a16255d0d9303bde034fcdf65e581ee21f72_prof);

        
        $__internal_a28fe407ee587cace7dbe3a1c4c55bd519208b4eb88508a8d21085b766f652d5->leave($__internal_a28fe407ee587cace7dbe3a1c4c55bd519208b4eb88508a8d21085b766f652d5_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb6031fc5c6e9a953edcfac98cdc66e556aaff8015b37b62b4003168bcc1b0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6031fc5c6e9a953edcfac98cdc66e556aaff8015b37b62b4003168bcc1b0da->enter($__internal_cb6031fc5c6e9a953edcfac98cdc66e556aaff8015b37b62b4003168bcc1b0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_abd6c21d70e66719f42c819df02f5cd9905348ad7ba3d6a18635ddcab4fd1ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd6c21d70e66719f42c819df02f5cd9905348ad7ba3d6a18635ddcab4fd1ee5->enter($__internal_abd6c21d70e66719f42c819df02f5cd9905348ad7ba3d6a18635ddcab4fd1ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_abd6c21d70e66719f42c819df02f5cd9905348ad7ba3d6a18635ddcab4fd1ee5->leave($__internal_abd6c21d70e66719f42c819df02f5cd9905348ad7ba3d6a18635ddcab4fd1ee5_prof);

        
        $__internal_cb6031fc5c6e9a953edcfac98cdc66e556aaff8015b37b62b4003168bcc1b0da->leave($__internal_cb6031fc5c6e9a953edcfac98cdc66e556aaff8015b37b62b4003168bcc1b0da_prof);

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
