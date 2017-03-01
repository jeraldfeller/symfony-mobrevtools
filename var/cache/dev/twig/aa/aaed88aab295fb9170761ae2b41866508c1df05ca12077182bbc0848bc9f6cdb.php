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
        $__internal_1cd840b0c24055038c3dd7247a41fcc2363ff396deb764c42d124c6b40ba6f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd840b0c24055038c3dd7247a41fcc2363ff396deb764c42d124c6b40ba6f29->enter($__internal_1cd840b0c24055038c3dd7247a41fcc2363ff396deb764c42d124c6b40ba6f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $__internal_75bd791407ccd4bc34c3065cf26abebcbcc515595aed96991d3c7fe4d3ed2bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bd791407ccd4bc34c3065cf26abebcbcc515595aed96991d3c7fe4d3ed2bf1->enter($__internal_75bd791407ccd4bc34c3065cf26abebcbcc515595aed96991d3c7fe4d3ed2bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cd840b0c24055038c3dd7247a41fcc2363ff396deb764c42d124c6b40ba6f29->leave($__internal_1cd840b0c24055038c3dd7247a41fcc2363ff396deb764c42d124c6b40ba6f29_prof);

        
        $__internal_75bd791407ccd4bc34c3065cf26abebcbcc515595aed96991d3c7fe4d3ed2bf1->leave($__internal_75bd791407ccd4bc34c3065cf26abebcbcc515595aed96991d3c7fe4d3ed2bf1_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_e0d89659512ecf173e3f02056b7c02e78a2cb9697f47939e96fec66a3c8d5152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d89659512ecf173e3f02056b7c02e78a2cb9697f47939e96fec66a3c8d5152->enter($__internal_e0d89659512ecf173e3f02056b7c02e78a2cb9697f47939e96fec66a3c8d5152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_dfa9153d8fdcb0ef20f28abc83f0bc5896f4f096ae7f4ca63ec843a160fa1701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa9153d8fdcb0ef20f28abc83f0bc5896f4f096ae7f4ca63ec843a160fa1701->enter($__internal_dfa9153d8fdcb0ef20f28abc83f0bc5896f4f096ae7f4ca63ec843a160fa1701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_dfa9153d8fdcb0ef20f28abc83f0bc5896f4f096ae7f4ca63ec843a160fa1701->leave($__internal_dfa9153d8fdcb0ef20f28abc83f0bc5896f4f096ae7f4ca63ec843a160fa1701_prof);

        
        $__internal_e0d89659512ecf173e3f02056b7c02e78a2cb9697f47939e96fec66a3c8d5152->leave($__internal_e0d89659512ecf173e3f02056b7c02e78a2cb9697f47939e96fec66a3c8d5152_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_38f03707c5f46ae5ab8048c514e66b1a5c5d76128b83a725e99c0ee45575655e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f03707c5f46ae5ab8048c514e66b1a5c5d76128b83a725e99c0ee45575655e->enter($__internal_38f03707c5f46ae5ab8048c514e66b1a5c5d76128b83a725e99c0ee45575655e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b99b0aaaf7004a597cf78c9ae3d2cdbb88d5682644247d09b2a6692a9d83b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b99b0aaaf7004a597cf78c9ae3d2cdbb88d5682644247d09b2a6692a9d83b30->enter($__internal_8b99b0aaaf7004a597cf78c9ae3d2cdbb88d5682644247d09b2a6692a9d83b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b99b0aaaf7004a597cf78c9ae3d2cdbb88d5682644247d09b2a6692a9d83b30->leave($__internal_8b99b0aaaf7004a597cf78c9ae3d2cdbb88d5682644247d09b2a6692a9d83b30_prof);

        
        $__internal_38f03707c5f46ae5ab8048c514e66b1a5c5d76128b83a725e99c0ee45575655e->leave($__internal_38f03707c5f46ae5ab8048c514e66b1a5c5d76128b83a725e99c0ee45575655e_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c2910629db1eceefc3a2489cfd93d0bff469831a7dc4171ca565660a21a3268a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2910629db1eceefc3a2489cfd93d0bff469831a7dc4171ca565660a21a3268a->enter($__internal_c2910629db1eceefc3a2489cfd93d0bff469831a7dc4171ca565660a21a3268a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2f7b0b1f3fba5f85ebfec72e09828571a903d4411e4ef4ea2e26b29b930d60b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7b0b1f3fba5f85ebfec72e09828571a903d4411e4ef4ea2e26b29b930d60b4->enter($__internal_2f7b0b1f3fba5f85ebfec72e09828571a903d4411e4ef4ea2e26b29b930d60b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_2f7b0b1f3fba5f85ebfec72e09828571a903d4411e4ef4ea2e26b29b930d60b4->leave($__internal_2f7b0b1f3fba5f85ebfec72e09828571a903d4411e4ef4ea2e26b29b930d60b4_prof);

        
        $__internal_c2910629db1eceefc3a2489cfd93d0bff469831a7dc4171ca565660a21a3268a->leave($__internal_c2910629db1eceefc3a2489cfd93d0bff469831a7dc4171ca565660a21a3268a_prof);

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
