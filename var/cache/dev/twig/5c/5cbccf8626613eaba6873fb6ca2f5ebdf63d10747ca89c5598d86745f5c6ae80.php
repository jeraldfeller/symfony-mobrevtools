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
        $__internal_bd5e638a5f16e644d4112ef2a62aba56d53b6103f31c45bf05cd42b5e86f4d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5e638a5f16e644d4112ef2a62aba56d53b6103f31c45bf05cd42b5e86f4d4f->enter($__internal_bd5e638a5f16e644d4112ef2a62aba56d53b6103f31c45bf05cd42b5e86f4d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $__internal_9cfdb53784a731be31d2ee11dc2bce8815064d6485b80f85b15a95eccc12b124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfdb53784a731be31d2ee11dc2bce8815064d6485b80f85b15a95eccc12b124->enter($__internal_9cfdb53784a731be31d2ee11dc2bce8815064d6485b80f85b15a95eccc12b124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd5e638a5f16e644d4112ef2a62aba56d53b6103f31c45bf05cd42b5e86f4d4f->leave($__internal_bd5e638a5f16e644d4112ef2a62aba56d53b6103f31c45bf05cd42b5e86f4d4f_prof);

        
        $__internal_9cfdb53784a731be31d2ee11dc2bce8815064d6485b80f85b15a95eccc12b124->leave($__internal_9cfdb53784a731be31d2ee11dc2bce8815064d6485b80f85b15a95eccc12b124_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_1a392a8f75aaea3e1ed9aaab24ac0e5f895dc245d59dd2f4238133a1ecb93b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a392a8f75aaea3e1ed9aaab24ac0e5f895dc245d59dd2f4238133a1ecb93b23->enter($__internal_1a392a8f75aaea3e1ed9aaab24ac0e5f895dc245d59dd2f4238133a1ecb93b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_d07997085ddc8469d36388e6798a585f415ec6bfd54d41ddf1f0a231618d860a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07997085ddc8469d36388e6798a585f415ec6bfd54d41ddf1f0a231618d860a->enter($__internal_d07997085ddc8469d36388e6798a585f415ec6bfd54d41ddf1f0a231618d860a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_d07997085ddc8469d36388e6798a585f415ec6bfd54d41ddf1f0a231618d860a->leave($__internal_d07997085ddc8469d36388e6798a585f415ec6bfd54d41ddf1f0a231618d860a_prof);

        
        $__internal_1a392a8f75aaea3e1ed9aaab24ac0e5f895dc245d59dd2f4238133a1ecb93b23->leave($__internal_1a392a8f75aaea3e1ed9aaab24ac0e5f895dc245d59dd2f4238133a1ecb93b23_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec411714bb83849841c4895ee87fc0dcfa19f058f13283aed486fbcc40e1cfc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec411714bb83849841c4895ee87fc0dcfa19f058f13283aed486fbcc40e1cfc2->enter($__internal_ec411714bb83849841c4895ee87fc0dcfa19f058f13283aed486fbcc40e1cfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_989b4b039b0d351a7e377194b892bd0f68cc05e7d54399320f8127b86f287471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989b4b039b0d351a7e377194b892bd0f68cc05e7d54399320f8127b86f287471->enter($__internal_989b4b039b0d351a7e377194b892bd0f68cc05e7d54399320f8127b86f287471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_989b4b039b0d351a7e377194b892bd0f68cc05e7d54399320f8127b86f287471->leave($__internal_989b4b039b0d351a7e377194b892bd0f68cc05e7d54399320f8127b86f287471_prof);

        
        $__internal_ec411714bb83849841c4895ee87fc0dcfa19f058f13283aed486fbcc40e1cfc2->leave($__internal_ec411714bb83849841c4895ee87fc0dcfa19f058f13283aed486fbcc40e1cfc2_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da74d9674045254722716da3202824f0f47163d316e87232ff7bc1318155af3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da74d9674045254722716da3202824f0f47163d316e87232ff7bc1318155af3e->enter($__internal_da74d9674045254722716da3202824f0f47163d316e87232ff7bc1318155af3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c91b0e461bec240889fb7b3619eaf4cc89cf58c51c7dc2e5665dfcd982f63a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91b0e461bec240889fb7b3619eaf4cc89cf58c51c7dc2e5665dfcd982f63a32->enter($__internal_c91b0e461bec240889fb7b3619eaf4cc89cf58c51c7dc2e5665dfcd982f63a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_c91b0e461bec240889fb7b3619eaf4cc89cf58c51c7dc2e5665dfcd982f63a32->leave($__internal_c91b0e461bec240889fb7b3619eaf4cc89cf58c51c7dc2e5665dfcd982f63a32_prof);

        
        $__internal_da74d9674045254722716da3202824f0f47163d316e87232ff7bc1318155af3e->leave($__internal_da74d9674045254722716da3202824f0f47163d316e87232ff7bc1318155af3e_prof);

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
