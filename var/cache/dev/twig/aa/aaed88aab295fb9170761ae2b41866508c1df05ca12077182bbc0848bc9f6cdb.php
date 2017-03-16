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
        $__internal_a85decece01adbde34b08f5d545307d3e1b5fed7ac7a4039c75d270ebcbd8cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85decece01adbde34b08f5d545307d3e1b5fed7ac7a4039c75d270ebcbd8cfc->enter($__internal_a85decece01adbde34b08f5d545307d3e1b5fed7ac7a4039c75d270ebcbd8cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $__internal_0368b6ff258509f5448a93d142ddfdc99c2e8bdd1f67a14da79d31453f05a398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0368b6ff258509f5448a93d142ddfdc99c2e8bdd1f67a14da79d31453f05a398->enter($__internal_0368b6ff258509f5448a93d142ddfdc99c2e8bdd1f67a14da79d31453f05a398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a85decece01adbde34b08f5d545307d3e1b5fed7ac7a4039c75d270ebcbd8cfc->leave($__internal_a85decece01adbde34b08f5d545307d3e1b5fed7ac7a4039c75d270ebcbd8cfc_prof);

        
        $__internal_0368b6ff258509f5448a93d142ddfdc99c2e8bdd1f67a14da79d31453f05a398->leave($__internal_0368b6ff258509f5448a93d142ddfdc99c2e8bdd1f67a14da79d31453f05a398_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_54c10b5efb70a82356cb07b2be021056dc21d21fe826eabf44f9ab2c4bd8e27d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54c10b5efb70a82356cb07b2be021056dc21d21fe826eabf44f9ab2c4bd8e27d->enter($__internal_54c10b5efb70a82356cb07b2be021056dc21d21fe826eabf44f9ab2c4bd8e27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_c4c58cbdaf67262357208e052461373c28aa9187e0fd071b959f6b72e0680a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c58cbdaf67262357208e052461373c28aa9187e0fd071b959f6b72e0680a88->enter($__internal_c4c58cbdaf67262357208e052461373c28aa9187e0fd071b959f6b72e0680a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_c4c58cbdaf67262357208e052461373c28aa9187e0fd071b959f6b72e0680a88->leave($__internal_c4c58cbdaf67262357208e052461373c28aa9187e0fd071b959f6b72e0680a88_prof);

        
        $__internal_54c10b5efb70a82356cb07b2be021056dc21d21fe826eabf44f9ab2c4bd8e27d->leave($__internal_54c10b5efb70a82356cb07b2be021056dc21d21fe826eabf44f9ab2c4bd8e27d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_219d1ae794eff0e0e392b2f9598132807468930c6b71ec91294492668096e55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219d1ae794eff0e0e392b2f9598132807468930c6b71ec91294492668096e55a->enter($__internal_219d1ae794eff0e0e392b2f9598132807468930c6b71ec91294492668096e55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8b8eb14206a8591a6358d746d7da6d9c534bb649d405170fc29f94792c6a641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b8eb14206a8591a6358d746d7da6d9c534bb649d405170fc29f94792c6a641->enter($__internal_d8b8eb14206a8591a6358d746d7da6d9c534bb649d405170fc29f94792c6a641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d8b8eb14206a8591a6358d746d7da6d9c534bb649d405170fc29f94792c6a641->leave($__internal_d8b8eb14206a8591a6358d746d7da6d9c534bb649d405170fc29f94792c6a641_prof);

        
        $__internal_219d1ae794eff0e0e392b2f9598132807468930c6b71ec91294492668096e55a->leave($__internal_219d1ae794eff0e0e392b2f9598132807468930c6b71ec91294492668096e55a_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_29c53d17812bbfc4ac5a5ee327eb7f29bcaafb0d66550057c0db363c10ea16e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c53d17812bbfc4ac5a5ee327eb7f29bcaafb0d66550057c0db363c10ea16e7->enter($__internal_29c53d17812bbfc4ac5a5ee327eb7f29bcaafb0d66550057c0db363c10ea16e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1c468fb9fc338ed7d4338884ed2ec8d9abb288fb1e3dae612af4ac471dccaa3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c468fb9fc338ed7d4338884ed2ec8d9abb288fb1e3dae612af4ac471dccaa3d->enter($__internal_1c468fb9fc338ed7d4338884ed2ec8d9abb288fb1e3dae612af4ac471dccaa3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_1c468fb9fc338ed7d4338884ed2ec8d9abb288fb1e3dae612af4ac471dccaa3d->leave($__internal_1c468fb9fc338ed7d4338884ed2ec8d9abb288fb1e3dae612af4ac471dccaa3d_prof);

        
        $__internal_29c53d17812bbfc4ac5a5ee327eb7f29bcaafb0d66550057c0db363c10ea16e7->leave($__internal_29c53d17812bbfc4ac5a5ee327eb7f29bcaafb0d66550057c0db363c10ea16e7_prof);

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
