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
        $__internal_34b740275be4c968f80ca77ee9ed5261df2f3d033473143eb989da0f9761844c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b740275be4c968f80ca77ee9ed5261df2f3d033473143eb989da0f9761844c->enter($__internal_34b740275be4c968f80ca77ee9ed5261df2f3d033473143eb989da0f9761844c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $__internal_364fca1103a7db0eff7b89a4534846cefe048286e852448a89469cbde5718d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364fca1103a7db0eff7b89a4534846cefe048286e852448a89469cbde5718d3b->enter($__internal_364fca1103a7db0eff7b89a4534846cefe048286e852448a89469cbde5718d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34b740275be4c968f80ca77ee9ed5261df2f3d033473143eb989da0f9761844c->leave($__internal_34b740275be4c968f80ca77ee9ed5261df2f3d033473143eb989da0f9761844c_prof);

        
        $__internal_364fca1103a7db0eff7b89a4534846cefe048286e852448a89469cbde5718d3b->leave($__internal_364fca1103a7db0eff7b89a4534846cefe048286e852448a89469cbde5718d3b_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_0eedb4a581f9c201a50b6a6cbb19005d360c13e24f7673cedc04139b0335bfb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eedb4a581f9c201a50b6a6cbb19005d360c13e24f7673cedc04139b0335bfb1->enter($__internal_0eedb4a581f9c201a50b6a6cbb19005d360c13e24f7673cedc04139b0335bfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_aef7d05cb997db0ddf5e6e525a494d812c3b03e28af3dd06b5fa6f2541942099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef7d05cb997db0ddf5e6e525a494d812c3b03e28af3dd06b5fa6f2541942099->enter($__internal_aef7d05cb997db0ddf5e6e525a494d812c3b03e28af3dd06b5fa6f2541942099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_aef7d05cb997db0ddf5e6e525a494d812c3b03e28af3dd06b5fa6f2541942099->leave($__internal_aef7d05cb997db0ddf5e6e525a494d812c3b03e28af3dd06b5fa6f2541942099_prof);

        
        $__internal_0eedb4a581f9c201a50b6a6cbb19005d360c13e24f7673cedc04139b0335bfb1->leave($__internal_0eedb4a581f9c201a50b6a6cbb19005d360c13e24f7673cedc04139b0335bfb1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5096132355cb44423f9789d62357f9e787bb10300fa5e9ea137e976bc2e493e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5096132355cb44423f9789d62357f9e787bb10300fa5e9ea137e976bc2e493e8->enter($__internal_5096132355cb44423f9789d62357f9e787bb10300fa5e9ea137e976bc2e493e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad089b4b87c5244f9b7e4dd52120ec15507f264495008c9f9a12548bc3afe925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad089b4b87c5244f9b7e4dd52120ec15507f264495008c9f9a12548bc3afe925->enter($__internal_ad089b4b87c5244f9b7e4dd52120ec15507f264495008c9f9a12548bc3afe925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ad089b4b87c5244f9b7e4dd52120ec15507f264495008c9f9a12548bc3afe925->leave($__internal_ad089b4b87c5244f9b7e4dd52120ec15507f264495008c9f9a12548bc3afe925_prof);

        
        $__internal_5096132355cb44423f9789d62357f9e787bb10300fa5e9ea137e976bc2e493e8->leave($__internal_5096132355cb44423f9789d62357f9e787bb10300fa5e9ea137e976bc2e493e8_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42100b887ceb54a515d9716202f9fb0fb08fe3dd73962caf49a11ca1c09e1d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42100b887ceb54a515d9716202f9fb0fb08fe3dd73962caf49a11ca1c09e1d1e->enter($__internal_42100b887ceb54a515d9716202f9fb0fb08fe3dd73962caf49a11ca1c09e1d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a1b39699c2a9892a412bd1201243eff294d78dc14a12a2859aa307130927322b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b39699c2a9892a412bd1201243eff294d78dc14a12a2859aa307130927322b->enter($__internal_a1b39699c2a9892a412bd1201243eff294d78dc14a12a2859aa307130927322b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_a1b39699c2a9892a412bd1201243eff294d78dc14a12a2859aa307130927322b->leave($__internal_a1b39699c2a9892a412bd1201243eff294d78dc14a12a2859aa307130927322b_prof);

        
        $__internal_42100b887ceb54a515d9716202f9fb0fb08fe3dd73962caf49a11ca1c09e1d1e->leave($__internal_42100b887ceb54a515d9716202f9fb0fb08fe3dd73962caf49a11ca1c09e1d1e_prof);

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
