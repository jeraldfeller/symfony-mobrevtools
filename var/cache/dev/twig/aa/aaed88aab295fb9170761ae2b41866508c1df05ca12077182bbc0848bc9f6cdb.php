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
        $__internal_70d11910bac0f0881949b116e80bf4aef51300e54d90585a89dd0675c467dc01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d11910bac0f0881949b116e80bf4aef51300e54d90585a89dd0675c467dc01->enter($__internal_70d11910bac0f0881949b116e80bf4aef51300e54d90585a89dd0675c467dc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $__internal_bc8e262db9b5344913b19409588214b8b8e71f77f9451e4654371026b70fe7e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8e262db9b5344913b19409588214b8b8e71f77f9451e4654371026b70fe7e3->enter($__internal_bc8e262db9b5344913b19409588214b8b8e71f77f9451e4654371026b70fe7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70d11910bac0f0881949b116e80bf4aef51300e54d90585a89dd0675c467dc01->leave($__internal_70d11910bac0f0881949b116e80bf4aef51300e54d90585a89dd0675c467dc01_prof);

        
        $__internal_bc8e262db9b5344913b19409588214b8b8e71f77f9451e4654371026b70fe7e3->leave($__internal_bc8e262db9b5344913b19409588214b8b8e71f77f9451e4654371026b70fe7e3_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ffa3b0bc1f03244599c7a3dcd712d475d7efc680d7265e9d5468f833988c866a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa3b0bc1f03244599c7a3dcd712d475d7efc680d7265e9d5468f833988c866a->enter($__internal_ffa3b0bc1f03244599c7a3dcd712d475d7efc680d7265e9d5468f833988c866a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_144db5151846eaa5879bd72aecfeee4a918f0e49188ab9a70761f172afce4f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144db5151846eaa5879bd72aecfeee4a918f0e49188ab9a70761f172afce4f90->enter($__internal_144db5151846eaa5879bd72aecfeee4a918f0e49188ab9a70761f172afce4f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_144db5151846eaa5879bd72aecfeee4a918f0e49188ab9a70761f172afce4f90->leave($__internal_144db5151846eaa5879bd72aecfeee4a918f0e49188ab9a70761f172afce4f90_prof);

        
        $__internal_ffa3b0bc1f03244599c7a3dcd712d475d7efc680d7265e9d5468f833988c866a->leave($__internal_ffa3b0bc1f03244599c7a3dcd712d475d7efc680d7265e9d5468f833988c866a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c72b14a55b3d06e00202db8ce8496c5b8b1cb6221b0ed89d1f4f4546fc7078e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72b14a55b3d06e00202db8ce8496c5b8b1cb6221b0ed89d1f4f4546fc7078e3->enter($__internal_c72b14a55b3d06e00202db8ce8496c5b8b1cb6221b0ed89d1f4f4546fc7078e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cde2ec03e04f18be0a562e81517eaa6aac5f6e0f3248c59b89f51536ffe17c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde2ec03e04f18be0a562e81517eaa6aac5f6e0f3248c59b89f51536ffe17c7b->enter($__internal_cde2ec03e04f18be0a562e81517eaa6aac5f6e0f3248c59b89f51536ffe17c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cde2ec03e04f18be0a562e81517eaa6aac5f6e0f3248c59b89f51536ffe17c7b->leave($__internal_cde2ec03e04f18be0a562e81517eaa6aac5f6e0f3248c59b89f51536ffe17c7b_prof);

        
        $__internal_c72b14a55b3d06e00202db8ce8496c5b8b1cb6221b0ed89d1f4f4546fc7078e3->leave($__internal_c72b14a55b3d06e00202db8ce8496c5b8b1cb6221b0ed89d1f4f4546fc7078e3_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3fa2d5c550c33242103206122ca9d26ff9d9837aa537d5f1152e70550f29db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3fa2d5c550c33242103206122ca9d26ff9d9837aa537d5f1152e70550f29db4->enter($__internal_c3fa2d5c550c33242103206122ca9d26ff9d9837aa537d5f1152e70550f29db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5c4d89a9c3e632327f7972d3bd7f1003fd769f575012f9c31fbe0711763cadd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4d89a9c3e632327f7972d3bd7f1003fd769f575012f9c31fbe0711763cadd6->enter($__internal_5c4d89a9c3e632327f7972d3bd7f1003fd769f575012f9c31fbe0711763cadd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_5c4d89a9c3e632327f7972d3bd7f1003fd769f575012f9c31fbe0711763cadd6->leave($__internal_5c4d89a9c3e632327f7972d3bd7f1003fd769f575012f9c31fbe0711763cadd6_prof);

        
        $__internal_c3fa2d5c550c33242103206122ca9d26ff9d9837aa537d5f1152e70550f29db4->leave($__internal_c3fa2d5c550c33242103206122ca9d26ff9d9837aa537d5f1152e70550f29db4_prof);

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
