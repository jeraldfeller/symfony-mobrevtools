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
        $__internal_9c485fe4633332aede9f50b3b1db862daeb3584be3f20b86a879f5f16af061ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c485fe4633332aede9f50b3b1db862daeb3584be3f20b86a879f5f16af061ec->enter($__internal_9c485fe4633332aede9f50b3b1db862daeb3584be3f20b86a879f5f16af061ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $__internal_951e6486df97a044b17475fcac616300e17451e9898c41b49153eee787bc1ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951e6486df97a044b17475fcac616300e17451e9898c41b49153eee787bc1ec2->enter($__internal_951e6486df97a044b17475fcac616300e17451e9898c41b49153eee787bc1ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c485fe4633332aede9f50b3b1db862daeb3584be3f20b86a879f5f16af061ec->leave($__internal_9c485fe4633332aede9f50b3b1db862daeb3584be3f20b86a879f5f16af061ec_prof);

        
        $__internal_951e6486df97a044b17475fcac616300e17451e9898c41b49153eee787bc1ec2->leave($__internal_951e6486df97a044b17475fcac616300e17451e9898c41b49153eee787bc1ec2_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_7bf04564f18f63aeb65901085bda33e178b3cee6438efa760e2d4901f9a7db71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf04564f18f63aeb65901085bda33e178b3cee6438efa760e2d4901f9a7db71->enter($__internal_7bf04564f18f63aeb65901085bda33e178b3cee6438efa760e2d4901f9a7db71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_3e852568d691a2df0be9a7fe3fc86a8502e6b4fffe92002c832fb73a60de31a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e852568d691a2df0be9a7fe3fc86a8502e6b4fffe92002c832fb73a60de31a2->enter($__internal_3e852568d691a2df0be9a7fe3fc86a8502e6b4fffe92002c832fb73a60de31a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_3e852568d691a2df0be9a7fe3fc86a8502e6b4fffe92002c832fb73a60de31a2->leave($__internal_3e852568d691a2df0be9a7fe3fc86a8502e6b4fffe92002c832fb73a60de31a2_prof);

        
        $__internal_7bf04564f18f63aeb65901085bda33e178b3cee6438efa760e2d4901f9a7db71->leave($__internal_7bf04564f18f63aeb65901085bda33e178b3cee6438efa760e2d4901f9a7db71_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e25ab6fc85e19dff12f8eef8cf4458f2ab83cf3f554424a9e5b15e56442d2f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25ab6fc85e19dff12f8eef8cf4458f2ab83cf3f554424a9e5b15e56442d2f27->enter($__internal_e25ab6fc85e19dff12f8eef8cf4458f2ab83cf3f554424a9e5b15e56442d2f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c10a358284017b3e0732046a2fdb308b9e536a52030a9a856a256e7d759540a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10a358284017b3e0732046a2fdb308b9e536a52030a9a856a256e7d759540a8->enter($__internal_c10a358284017b3e0732046a2fdb308b9e536a52030a9a856a256e7d759540a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c10a358284017b3e0732046a2fdb308b9e536a52030a9a856a256e7d759540a8->leave($__internal_c10a358284017b3e0732046a2fdb308b9e536a52030a9a856a256e7d759540a8_prof);

        
        $__internal_e25ab6fc85e19dff12f8eef8cf4458f2ab83cf3f554424a9e5b15e56442d2f27->leave($__internal_e25ab6fc85e19dff12f8eef8cf4458f2ab83cf3f554424a9e5b15e56442d2f27_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d39728958272c7b731b340787226525b42a5fec6353cf1ceeac1190bdd78bf09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39728958272c7b731b340787226525b42a5fec6353cf1ceeac1190bdd78bf09->enter($__internal_d39728958272c7b731b340787226525b42a5fec6353cf1ceeac1190bdd78bf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_478c5726ab952abc31afff88ca5b460f14acc681cffec65e12999cc02e775e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478c5726ab952abc31afff88ca5b460f14acc681cffec65e12999cc02e775e14->enter($__internal_478c5726ab952abc31afff88ca5b460f14acc681cffec65e12999cc02e775e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_478c5726ab952abc31afff88ca5b460f14acc681cffec65e12999cc02e775e14->leave($__internal_478c5726ab952abc31afff88ca5b460f14acc681cffec65e12999cc02e775e14_prof);

        
        $__internal_d39728958272c7b731b340787226525b42a5fec6353cf1ceeac1190bdd78bf09->leave($__internal_d39728958272c7b731b340787226525b42a5fec6353cf1ceeac1190bdd78bf09_prof);

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
