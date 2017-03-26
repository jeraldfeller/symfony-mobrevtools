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
        $__internal_5121aa936e85062dce293aca14d909659600162ecf5859236a7297e8af947afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5121aa936e85062dce293aca14d909659600162ecf5859236a7297e8af947afd->enter($__internal_5121aa936e85062dce293aca14d909659600162ecf5859236a7297e8af947afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $__internal_dabade418c71fc44acc5fe046d2b1de4cd4cb4d3320079f416162ee8bfc1d400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabade418c71fc44acc5fe046d2b1de4cd4cb4d3320079f416162ee8bfc1d400->enter($__internal_dabade418c71fc44acc5fe046d2b1de4cd4cb4d3320079f416162ee8bfc1d400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5121aa936e85062dce293aca14d909659600162ecf5859236a7297e8af947afd->leave($__internal_5121aa936e85062dce293aca14d909659600162ecf5859236a7297e8af947afd_prof);

        
        $__internal_dabade418c71fc44acc5fe046d2b1de4cd4cb4d3320079f416162ee8bfc1d400->leave($__internal_dabade418c71fc44acc5fe046d2b1de4cd4cb4d3320079f416162ee8bfc1d400_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_fcd1dac4a6e4e6394e6d54cc14dcf080a6124245ce7d33e5f68134cb6ad869c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd1dac4a6e4e6394e6d54cc14dcf080a6124245ce7d33e5f68134cb6ad869c9->enter($__internal_fcd1dac4a6e4e6394e6d54cc14dcf080a6124245ce7d33e5f68134cb6ad869c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_dc673737ded68ad1191f6731b2ad7eebf64a1d1c51d4b1cc9499c72b622345c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc673737ded68ad1191f6731b2ad7eebf64a1d1c51d4b1cc9499c72b622345c7->enter($__internal_dc673737ded68ad1191f6731b2ad7eebf64a1d1c51d4b1cc9499c72b622345c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_dc673737ded68ad1191f6731b2ad7eebf64a1d1c51d4b1cc9499c72b622345c7->leave($__internal_dc673737ded68ad1191f6731b2ad7eebf64a1d1c51d4b1cc9499c72b622345c7_prof);

        
        $__internal_fcd1dac4a6e4e6394e6d54cc14dcf080a6124245ce7d33e5f68134cb6ad869c9->leave($__internal_fcd1dac4a6e4e6394e6d54cc14dcf080a6124245ce7d33e5f68134cb6ad869c9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_889310651806057f7d8c5cf5ed95e027d3a56e86d87d7871cef4dc9274c65321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889310651806057f7d8c5cf5ed95e027d3a56e86d87d7871cef4dc9274c65321->enter($__internal_889310651806057f7d8c5cf5ed95e027d3a56e86d87d7871cef4dc9274c65321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f91ddbd769bcd10aaf85ac40fc0ba64561863aa894bd29754c9d037d0e22a074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91ddbd769bcd10aaf85ac40fc0ba64561863aa894bd29754c9d037d0e22a074->enter($__internal_f91ddbd769bcd10aaf85ac40fc0ba64561863aa894bd29754c9d037d0e22a074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f91ddbd769bcd10aaf85ac40fc0ba64561863aa894bd29754c9d037d0e22a074->leave($__internal_f91ddbd769bcd10aaf85ac40fc0ba64561863aa894bd29754c9d037d0e22a074_prof);

        
        $__internal_889310651806057f7d8c5cf5ed95e027d3a56e86d87d7871cef4dc9274c65321->leave($__internal_889310651806057f7d8c5cf5ed95e027d3a56e86d87d7871cef4dc9274c65321_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5301978a7b8845b07c5096caa484f5ccc50d3ac52f108e797b728e0c52a9e3fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5301978a7b8845b07c5096caa484f5ccc50d3ac52f108e797b728e0c52a9e3fb->enter($__internal_5301978a7b8845b07c5096caa484f5ccc50d3ac52f108e797b728e0c52a9e3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bc465d6c18964abeb658e66e64d7dbe7bac078a9ae09445ba1c4a868fbc53df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc465d6c18964abeb658e66e64d7dbe7bac078a9ae09445ba1c4a868fbc53df2->enter($__internal_bc465d6c18964abeb658e66e64d7dbe7bac078a9ae09445ba1c4a868fbc53df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_bc465d6c18964abeb658e66e64d7dbe7bac078a9ae09445ba1c4a868fbc53df2->leave($__internal_bc465d6c18964abeb658e66e64d7dbe7bac078a9ae09445ba1c4a868fbc53df2_prof);

        
        $__internal_5301978a7b8845b07c5096caa484f5ccc50d3ac52f108e797b728e0c52a9e3fb->leave($__internal_5301978a7b8845b07c5096caa484f5ccc50d3ac52f108e797b728e0c52a9e3fb_prof);

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
