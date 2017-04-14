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
        $__internal_493dff878f641cb699cbba8859f11c6f6cd60e05464e88198ef31389a3e88b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493dff878f641cb699cbba8859f11c6f6cd60e05464e88198ef31389a3e88b36->enter($__internal_493dff878f641cb699cbba8859f11c6f6cd60e05464e88198ef31389a3e88b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $__internal_b622affca95055b55c39625f3ff4684d2950b5875b9c81ace8315f13bd975908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b622affca95055b55c39625f3ff4684d2950b5875b9c81ace8315f13bd975908->enter($__internal_b622affca95055b55c39625f3ff4684d2950b5875b9c81ace8315f13bd975908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_493dff878f641cb699cbba8859f11c6f6cd60e05464e88198ef31389a3e88b36->leave($__internal_493dff878f641cb699cbba8859f11c6f6cd60e05464e88198ef31389a3e88b36_prof);

        
        $__internal_b622affca95055b55c39625f3ff4684d2950b5875b9c81ace8315f13bd975908->leave($__internal_b622affca95055b55c39625f3ff4684d2950b5875b9c81ace8315f13bd975908_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_227b48172a5472c35e1b8e5412ac4c92bdc34536470443ceefdbbaf768527f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227b48172a5472c35e1b8e5412ac4c92bdc34536470443ceefdbbaf768527f2a->enter($__internal_227b48172a5472c35e1b8e5412ac4c92bdc34536470443ceefdbbaf768527f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_0900eed8de1116b3428f3361047f985225b9ab9a6a08f43264cdf52ff3f3e5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0900eed8de1116b3428f3361047f985225b9ab9a6a08f43264cdf52ff3f3e5d1->enter($__internal_0900eed8de1116b3428f3361047f985225b9ab9a6a08f43264cdf52ff3f3e5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_0900eed8de1116b3428f3361047f985225b9ab9a6a08f43264cdf52ff3f3e5d1->leave($__internal_0900eed8de1116b3428f3361047f985225b9ab9a6a08f43264cdf52ff3f3e5d1_prof);

        
        $__internal_227b48172a5472c35e1b8e5412ac4c92bdc34536470443ceefdbbaf768527f2a->leave($__internal_227b48172a5472c35e1b8e5412ac4c92bdc34536470443ceefdbbaf768527f2a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc8db3cdfff65032752c2d0a1484dfacb70e8ffa97c965b991264cf148391c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc8db3cdfff65032752c2d0a1484dfacb70e8ffa97c965b991264cf148391c3f->enter($__internal_fc8db3cdfff65032752c2d0a1484dfacb70e8ffa97c965b991264cf148391c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ec39b42f87d4b6375e773505b8418c3f0944c49347a4921136d516ef8ff7ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec39b42f87d4b6375e773505b8418c3f0944c49347a4921136d516ef8ff7ff9->enter($__internal_4ec39b42f87d4b6375e773505b8418c3f0944c49347a4921136d516ef8ff7ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1 class=\"page-title\"> ";
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo "
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
        // line 22
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
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Settings:getApiAccessCredentials"));
        // line 56
        echo "
    </div>
    <!-- AJAX CALLS -->
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/global-settings/ajax-global-settings.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
";
        
        $__internal_4ec39b42f87d4b6375e773505b8418c3f0944c49347a4921136d516ef8ff7ff9->leave($__internal_4ec39b42f87d4b6375e773505b8418c3f0944c49347a4921136d516ef8ff7ff9_prof);

        
        $__internal_fc8db3cdfff65032752c2d0a1484dfacb70e8ffa97c965b991264cf148391c3f->leave($__internal_fc8db3cdfff65032752c2d0a1484dfacb70e8ffa97c965b991264cf148391c3f_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7dc2c24d022a90e6d28994478a54d63753ef052dd9f720318a09462e7e3af47c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc2c24d022a90e6d28994478a54d63753ef052dd9f720318a09462e7e3af47c->enter($__internal_7dc2c24d022a90e6d28994478a54d63753ef052dd9f720318a09462e7e3af47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_54cacf0ef7095d10335cb7114c45e340e902e5bd82957b040fdd6e1910e6911c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cacf0ef7095d10335cb7114c45e340e902e5bd82957b040fdd6e1910e6911c->enter($__internal_54cacf0ef7095d10335cb7114c45e340e902e5bd82957b040fdd6e1910e6911c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "
";
        
        $__internal_54cacf0ef7095d10335cb7114c45e340e902e5bd82957b040fdd6e1910e6911c->leave($__internal_54cacf0ef7095d10335cb7114c45e340e902e5bd82957b040fdd6e1910e6911c_prof);

        
        $__internal_7dc2c24d022a90e6d28994478a54d63753ef052dd9f720318a09462e7e3af47c->leave($__internal_7dc2c24d022a90e6d28994478a54d63753ef052dd9f720318a09462e7e3af47c_prof);

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
        return array (  156 => 63,  147 => 62,  134 => 59,  129 => 56,  127 => 54,  92 => 22,  74 => 8,  65 => 7,  54 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
    <h1 class=\"page-title\"> {{ page }}
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
