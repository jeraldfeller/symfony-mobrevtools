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
        $__internal_a921a2abaeb532ebabc978ae4af785f470126dba0a01ac364885489995bf6636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a921a2abaeb532ebabc978ae4af785f470126dba0a01ac364885489995bf6636->enter($__internal_a921a2abaeb532ebabc978ae4af785f470126dba0a01ac364885489995bf6636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $__internal_301f0e008e1cbbe0cee890b5aa0eef3e4948f1484c2001ccd70eb4d561df635f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301f0e008e1cbbe0cee890b5aa0eef3e4948f1484c2001ccd70eb4d561df635f->enter($__internal_301f0e008e1cbbe0cee890b5aa0eef3e4948f1484c2001ccd70eb4d561df635f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a921a2abaeb532ebabc978ae4af785f470126dba0a01ac364885489995bf6636->leave($__internal_a921a2abaeb532ebabc978ae4af785f470126dba0a01ac364885489995bf6636_prof);

        
        $__internal_301f0e008e1cbbe0cee890b5aa0eef3e4948f1484c2001ccd70eb4d561df635f->leave($__internal_301f0e008e1cbbe0cee890b5aa0eef3e4948f1484c2001ccd70eb4d561df635f_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_7e6d3e7a83ab4d3545f56b4700d0ae97ceccaa7230bc4dba6e5c8585d6cd1466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e6d3e7a83ab4d3545f56b4700d0ae97ceccaa7230bc4dba6e5c8585d6cd1466->enter($__internal_7e6d3e7a83ab4d3545f56b4700d0ae97ceccaa7230bc4dba6e5c8585d6cd1466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_92c13801c31cf3c589452b46a9bc303126244c3fd2bc4e0800742d1088959e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c13801c31cf3c589452b46a9bc303126244c3fd2bc4e0800742d1088959e9d->enter($__internal_92c13801c31cf3c589452b46a9bc303126244c3fd2bc4e0800742d1088959e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_92c13801c31cf3c589452b46a9bc303126244c3fd2bc4e0800742d1088959e9d->leave($__internal_92c13801c31cf3c589452b46a9bc303126244c3fd2bc4e0800742d1088959e9d_prof);

        
        $__internal_7e6d3e7a83ab4d3545f56b4700d0ae97ceccaa7230bc4dba6e5c8585d6cd1466->leave($__internal_7e6d3e7a83ab4d3545f56b4700d0ae97ceccaa7230bc4dba6e5c8585d6cd1466_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d70e4452820feb5bb471dddb14d33fef99561af6d7ca2622b4e35d033c0594f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d70e4452820feb5bb471dddb14d33fef99561af6d7ca2622b4e35d033c0594f->enter($__internal_5d70e4452820feb5bb471dddb14d33fef99561af6d7ca2622b4e35d033c0594f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2548309ce1d77bac76be4c692387d4de4b8b7430ea4e94f6ba752f6f38230f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2548309ce1d77bac76be4c692387d4de4b8b7430ea4e94f6ba752f6f38230f54->enter($__internal_2548309ce1d77bac76be4c692387d4de4b8b7430ea4e94f6ba752f6f38230f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2548309ce1d77bac76be4c692387d4de4b8b7430ea4e94f6ba752f6f38230f54->leave($__internal_2548309ce1d77bac76be4c692387d4de4b8b7430ea4e94f6ba752f6f38230f54_prof);

        
        $__internal_5d70e4452820feb5bb471dddb14d33fef99561af6d7ca2622b4e35d033c0594f->leave($__internal_5d70e4452820feb5bb471dddb14d33fef99561af6d7ca2622b4e35d033c0594f_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_56b15fe3652bdd38d529eff4bc34bae2c3d699db3298738b70f34fcc09728cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b15fe3652bdd38d529eff4bc34bae2c3d699db3298738b70f34fcc09728cec->enter($__internal_56b15fe3652bdd38d529eff4bc34bae2c3d699db3298738b70f34fcc09728cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8e7e88b0402babd56012aea3e1b27bb0ea8693a9d65d3144a47c02401c7283c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7e88b0402babd56012aea3e1b27bb0ea8693a9d65d3144a47c02401c7283c1->enter($__internal_8e7e88b0402babd56012aea3e1b27bb0ea8693a9d65d3144a47c02401c7283c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_8e7e88b0402babd56012aea3e1b27bb0ea8693a9d65d3144a47c02401c7283c1->leave($__internal_8e7e88b0402babd56012aea3e1b27bb0ea8693a9d65d3144a47c02401c7283c1_prof);

        
        $__internal_56b15fe3652bdd38d529eff4bc34bae2c3d699db3298738b70f34fcc09728cec->leave($__internal_56b15fe3652bdd38d529eff4bc34bae2c3d699db3298738b70f34fcc09728cec_prof);

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
