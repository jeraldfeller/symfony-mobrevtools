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
        $__internal_8a0ed47f226ac1f09724deff1556484d9f9d7523d38b2cd432737984c34397ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0ed47f226ac1f09724deff1556484d9f9d7523d38b2cd432737984c34397ca->enter($__internal_8a0ed47f226ac1f09724deff1556484d9f9d7523d38b2cd432737984c34397ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $__internal_bcf118637e9754f3d9aa6aa59e97ef262636df9d488d268d5a4cb7ba52194fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf118637e9754f3d9aa6aa59e97ef262636df9d488d268d5a4cb7ba52194fe3->enter($__internal_bcf118637e9754f3d9aa6aa59e97ef262636df9d488d268d5a4cb7ba52194fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a0ed47f226ac1f09724deff1556484d9f9d7523d38b2cd432737984c34397ca->leave($__internal_8a0ed47f226ac1f09724deff1556484d9f9d7523d38b2cd432737984c34397ca_prof);

        
        $__internal_bcf118637e9754f3d9aa6aa59e97ef262636df9d488d268d5a4cb7ba52194fe3->leave($__internal_bcf118637e9754f3d9aa6aa59e97ef262636df9d488d268d5a4cb7ba52194fe3_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_02adc024b57d965bfa5824626f1c274781f29c493f0e2649fcdf923ff7c25fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02adc024b57d965bfa5824626f1c274781f29c493f0e2649fcdf923ff7c25fb3->enter($__internal_02adc024b57d965bfa5824626f1c274781f29c493f0e2649fcdf923ff7c25fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_f1f8d822e0870552abce02aadf8e1368f8d57a963330cf622d9a99e4d223d484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f8d822e0870552abce02aadf8e1368f8d57a963330cf622d9a99e4d223d484->enter($__internal_f1f8d822e0870552abce02aadf8e1368f8d57a963330cf622d9a99e4d223d484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_f1f8d822e0870552abce02aadf8e1368f8d57a963330cf622d9a99e4d223d484->leave($__internal_f1f8d822e0870552abce02aadf8e1368f8d57a963330cf622d9a99e4d223d484_prof);

        
        $__internal_02adc024b57d965bfa5824626f1c274781f29c493f0e2649fcdf923ff7c25fb3->leave($__internal_02adc024b57d965bfa5824626f1c274781f29c493f0e2649fcdf923ff7c25fb3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8245809085f614854ada82ec3c56d6e79841237fb6ec088395b40a3ddf20bfb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8245809085f614854ada82ec3c56d6e79841237fb6ec088395b40a3ddf20bfb5->enter($__internal_8245809085f614854ada82ec3c56d6e79841237fb6ec088395b40a3ddf20bfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6cddcf16e92264d96b853673e956e002dc2479a2a1dde0beab036d2f3d6a46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cddcf16e92264d96b853673e956e002dc2479a2a1dde0beab036d2f3d6a46c->enter($__internal_e6cddcf16e92264d96b853673e956e002dc2479a2a1dde0beab036d2f3d6a46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e6cddcf16e92264d96b853673e956e002dc2479a2a1dde0beab036d2f3d6a46c->leave($__internal_e6cddcf16e92264d96b853673e956e002dc2479a2a1dde0beab036d2f3d6a46c_prof);

        
        $__internal_8245809085f614854ada82ec3c56d6e79841237fb6ec088395b40a3ddf20bfb5->leave($__internal_8245809085f614854ada82ec3c56d6e79841237fb6ec088395b40a3ddf20bfb5_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bbf572fa2da4ad4ff5a2b78dfde6ac358333a3fa54c5f00083b97cea8b0fd9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf572fa2da4ad4ff5a2b78dfde6ac358333a3fa54c5f00083b97cea8b0fd9bc->enter($__internal_bbf572fa2da4ad4ff5a2b78dfde6ac358333a3fa54c5f00083b97cea8b0fd9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f092fc63d8fd7ba77f0e84c146c0bf57aa2ad5cf7af1e0b284f2689425fe2cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f092fc63d8fd7ba77f0e84c146c0bf57aa2ad5cf7af1e0b284f2689425fe2cd->enter($__internal_6f092fc63d8fd7ba77f0e84c146c0bf57aa2ad5cf7af1e0b284f2689425fe2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_6f092fc63d8fd7ba77f0e84c146c0bf57aa2ad5cf7af1e0b284f2689425fe2cd->leave($__internal_6f092fc63d8fd7ba77f0e84c146c0bf57aa2ad5cf7af1e0b284f2689425fe2cd_prof);

        
        $__internal_bbf572fa2da4ad4ff5a2b78dfde6ac358333a3fa54c5f00083b97cea8b0fd9bc->leave($__internal_bbf572fa2da4ad4ff5a2b78dfde6ac358333a3fa54c5f00083b97cea8b0fd9bc_prof);

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
