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
        $__internal_e6e161b2a55f956f907cc01664364e22262fd05481532d4f5e0a47045b570a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e161b2a55f956f907cc01664364e22262fd05481532d4f5e0a47045b570a0f->enter($__internal_e6e161b2a55f956f907cc01664364e22262fd05481532d4f5e0a47045b570a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $__internal_e8a8bd4b3137227cbf4e53bbc35a0ffd58cf39832512cb92ad4a524e585a5bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a8bd4b3137227cbf4e53bbc35a0ffd58cf39832512cb92ad4a524e585a5bdf->enter($__internal_e8a8bd4b3137227cbf4e53bbc35a0ffd58cf39832512cb92ad4a524e585a5bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6e161b2a55f956f907cc01664364e22262fd05481532d4f5e0a47045b570a0f->leave($__internal_e6e161b2a55f956f907cc01664364e22262fd05481532d4f5e0a47045b570a0f_prof);

        
        $__internal_e8a8bd4b3137227cbf4e53bbc35a0ffd58cf39832512cb92ad4a524e585a5bdf->leave($__internal_e8a8bd4b3137227cbf4e53bbc35a0ffd58cf39832512cb92ad4a524e585a5bdf_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_0a4c0fbe828ef94f804a324e83c5e240c35525b9cefd2813152e0b528d750ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4c0fbe828ef94f804a324e83c5e240c35525b9cefd2813152e0b528d750ed5->enter($__internal_0a4c0fbe828ef94f804a324e83c5e240c35525b9cefd2813152e0b528d750ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_5e84cec8f734ce2478ea3169ba448855f16f67ebc49c84fa109fa34ca26e84ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e84cec8f734ce2478ea3169ba448855f16f67ebc49c84fa109fa34ca26e84ec->enter($__internal_5e84cec8f734ce2478ea3169ba448855f16f67ebc49c84fa109fa34ca26e84ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_5e84cec8f734ce2478ea3169ba448855f16f67ebc49c84fa109fa34ca26e84ec->leave($__internal_5e84cec8f734ce2478ea3169ba448855f16f67ebc49c84fa109fa34ca26e84ec_prof);

        
        $__internal_0a4c0fbe828ef94f804a324e83c5e240c35525b9cefd2813152e0b528d750ed5->leave($__internal_0a4c0fbe828ef94f804a324e83c5e240c35525b9cefd2813152e0b528d750ed5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_35d8306f56fad15202eb1da5895d79af34aa03c70410c745f5d814f9db844a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35d8306f56fad15202eb1da5895d79af34aa03c70410c745f5d814f9db844a25->enter($__internal_35d8306f56fad15202eb1da5895d79af34aa03c70410c745f5d814f9db844a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9ff6657302a66c4a5500dc1891abd25f55ee07e689b28fef3ced40284e94422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ff6657302a66c4a5500dc1891abd25f55ee07e689b28fef3ced40284e94422->enter($__internal_d9ff6657302a66c4a5500dc1891abd25f55ee07e689b28fef3ced40284e94422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d9ff6657302a66c4a5500dc1891abd25f55ee07e689b28fef3ced40284e94422->leave($__internal_d9ff6657302a66c4a5500dc1891abd25f55ee07e689b28fef3ced40284e94422_prof);

        
        $__internal_35d8306f56fad15202eb1da5895d79af34aa03c70410c745f5d814f9db844a25->leave($__internal_35d8306f56fad15202eb1da5895d79af34aa03c70410c745f5d814f9db844a25_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa8aa924cea497aeb22fb9d6e3ad17077a811fa1f2a2f194febf50423f8dda6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa8aa924cea497aeb22fb9d6e3ad17077a811fa1f2a2f194febf50423f8dda6a->enter($__internal_aa8aa924cea497aeb22fb9d6e3ad17077a811fa1f2a2f194febf50423f8dda6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f0f3faffc8c815894e131376a85731dd589b1eac469204aa3a56ed63c4d4f0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f3faffc8c815894e131376a85731dd589b1eac469204aa3a56ed63c4d4f0cf->enter($__internal_f0f3faffc8c815894e131376a85731dd589b1eac469204aa3a56ed63c4d4f0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_f0f3faffc8c815894e131376a85731dd589b1eac469204aa3a56ed63c4d4f0cf->leave($__internal_f0f3faffc8c815894e131376a85731dd589b1eac469204aa3a56ed63c4d4f0cf_prof);

        
        $__internal_aa8aa924cea497aeb22fb9d6e3ad17077a811fa1f2a2f194febf50423f8dda6a->leave($__internal_aa8aa924cea497aeb22fb9d6e3ad17077a811fa1f2a2f194febf50423f8dda6a_prof);

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
