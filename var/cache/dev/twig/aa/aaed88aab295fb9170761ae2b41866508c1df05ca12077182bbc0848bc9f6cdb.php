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
        $__internal_7ff303640ce1ff4d38a9ad0ef7117368416af60a1b0dd67974123c48d571502f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff303640ce1ff4d38a9ad0ef7117368416af60a1b0dd67974123c48d571502f->enter($__internal_7ff303640ce1ff4d38a9ad0ef7117368416af60a1b0dd67974123c48d571502f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $__internal_8c9e523869d19912f4ff58fdb57030b9fc247ba501e210cfafe293177c183897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9e523869d19912f4ff58fdb57030b9fc247ba501e210cfafe293177c183897->enter($__internal_8c9e523869d19912f4ff58fdb57030b9fc247ba501e210cfafe293177c183897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ff303640ce1ff4d38a9ad0ef7117368416af60a1b0dd67974123c48d571502f->leave($__internal_7ff303640ce1ff4d38a9ad0ef7117368416af60a1b0dd67974123c48d571502f_prof);

        
        $__internal_8c9e523869d19912f4ff58fdb57030b9fc247ba501e210cfafe293177c183897->leave($__internal_8c9e523869d19912f4ff58fdb57030b9fc247ba501e210cfafe293177c183897_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_5d4b89b38e97341324c424e8e1dcb9fa1789e036182f4e40ff79634fdc942688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4b89b38e97341324c424e8e1dcb9fa1789e036182f4e40ff79634fdc942688->enter($__internal_5d4b89b38e97341324c424e8e1dcb9fa1789e036182f4e40ff79634fdc942688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_8716caf0d6c4095edbe5100fe3413396b29be8b37b7cae9b759af0f1695de6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8716caf0d6c4095edbe5100fe3413396b29be8b37b7cae9b759af0f1695de6b6->enter($__internal_8716caf0d6c4095edbe5100fe3413396b29be8b37b7cae9b759af0f1695de6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_8716caf0d6c4095edbe5100fe3413396b29be8b37b7cae9b759af0f1695de6b6->leave($__internal_8716caf0d6c4095edbe5100fe3413396b29be8b37b7cae9b759af0f1695de6b6_prof);

        
        $__internal_5d4b89b38e97341324c424e8e1dcb9fa1789e036182f4e40ff79634fdc942688->leave($__internal_5d4b89b38e97341324c424e8e1dcb9fa1789e036182f4e40ff79634fdc942688_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_052ac0521c7922cb15d906a97b4f1ca9d5480a0e4c768badbd8bca5c5a21ec61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052ac0521c7922cb15d906a97b4f1ca9d5480a0e4c768badbd8bca5c5a21ec61->enter($__internal_052ac0521c7922cb15d906a97b4f1ca9d5480a0e4c768badbd8bca5c5a21ec61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff0b28bfaa64233cd48041b6e74ecfd97b8dd7b01bdcc379d45c68e909ce42ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff0b28bfaa64233cd48041b6e74ecfd97b8dd7b01bdcc379d45c68e909ce42ed->enter($__internal_ff0b28bfaa64233cd48041b6e74ecfd97b8dd7b01bdcc379d45c68e909ce42ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ff0b28bfaa64233cd48041b6e74ecfd97b8dd7b01bdcc379d45c68e909ce42ed->leave($__internal_ff0b28bfaa64233cd48041b6e74ecfd97b8dd7b01bdcc379d45c68e909ce42ed_prof);

        
        $__internal_052ac0521c7922cb15d906a97b4f1ca9d5480a0e4c768badbd8bca5c5a21ec61->leave($__internal_052ac0521c7922cb15d906a97b4f1ca9d5480a0e4c768badbd8bca5c5a21ec61_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ddf999277f909bfba9e9335ecc1b3883b117e60b67c041544d38159d0b404b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf999277f909bfba9e9335ecc1b3883b117e60b67c041544d38159d0b404b0f->enter($__internal_ddf999277f909bfba9e9335ecc1b3883b117e60b67c041544d38159d0b404b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_594ec601a6e5a529ba86eaad9e0320827ef80ee9bc054d9d4e7edb31df81655a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594ec601a6e5a529ba86eaad9e0320827ef80ee9bc054d9d4e7edb31df81655a->enter($__internal_594ec601a6e5a529ba86eaad9e0320827ef80ee9bc054d9d4e7edb31df81655a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_594ec601a6e5a529ba86eaad9e0320827ef80ee9bc054d9d4e7edb31df81655a->leave($__internal_594ec601a6e5a529ba86eaad9e0320827ef80ee9bc054d9d4e7edb31df81655a_prof);

        
        $__internal_ddf999277f909bfba9e9335ecc1b3883b117e60b67c041544d38159d0b404b0f->leave($__internal_ddf999277f909bfba9e9335ecc1b3883b117e60b67c041544d38159d0b404b0f_prof);

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
