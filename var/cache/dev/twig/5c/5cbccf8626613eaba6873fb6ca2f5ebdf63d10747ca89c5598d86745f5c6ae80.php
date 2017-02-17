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
        $__internal_9569ab4a8ad599b190e49ad48177b7fbfd7c885454124518f67c7c306c395156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9569ab4a8ad599b190e49ad48177b7fbfd7c885454124518f67c7c306c395156->enter($__internal_9569ab4a8ad599b190e49ad48177b7fbfd7c885454124518f67c7c306c395156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $__internal_3d1c4a8e243f41d51a4728f10e00f63ed0cbe2002e216b0fbe7121135c775a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1c4a8e243f41d51a4728f10e00f63ed0cbe2002e216b0fbe7121135c775a46->enter($__internal_3d1c4a8e243f41d51a4728f10e00f63ed0cbe2002e216b0fbe7121135c775a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9569ab4a8ad599b190e49ad48177b7fbfd7c885454124518f67c7c306c395156->leave($__internal_9569ab4a8ad599b190e49ad48177b7fbfd7c885454124518f67c7c306c395156_prof);

        
        $__internal_3d1c4a8e243f41d51a4728f10e00f63ed0cbe2002e216b0fbe7121135c775a46->leave($__internal_3d1c4a8e243f41d51a4728f10e00f63ed0cbe2002e216b0fbe7121135c775a46_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_1357692eb40ea6f43afa30fa3cc41d5904ad84f006fbbff57357e0c64ce3a85a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1357692eb40ea6f43afa30fa3cc41d5904ad84f006fbbff57357e0c64ce3a85a->enter($__internal_1357692eb40ea6f43afa30fa3cc41d5904ad84f006fbbff57357e0c64ce3a85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_35927304778b2709f9acee7edfe9a45eaa58b15935687b795510fc87671f6d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35927304778b2709f9acee7edfe9a45eaa58b15935687b795510fc87671f6d05->enter($__internal_35927304778b2709f9acee7edfe9a45eaa58b15935687b795510fc87671f6d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    <li class=\"nav-item\">
        <a href=\"/\" class=\"nav-link nav-toggle\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Dashboard</span>
        </a>
    </li>

    <li class=\"nav-item start active open\">
        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
            <i class=\"fa fa-gears\"></i>
            <span class=\"title\">Global Settings</span>
            <span class=\"selected\"></span>
            <span class=\"arrow open\"></span>
        </a>
        <ul class=\"sub-menu\">
            <li class=\"nav-item\">
                <a href=\"/global-settings/api-access\" class=\"nav-link \">
                    <span class=\"title\">API Access</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/global-settings/traffic-source\" class=\"nav-link \">
                    <span class=\"title\">Traffic Source</span>
                </a>
            </li>
        </ul>
    </li>
";
        
        $__internal_35927304778b2709f9acee7edfe9a45eaa58b15935687b795510fc87671f6d05->leave($__internal_35927304778b2709f9acee7edfe9a45eaa58b15935687b795510fc87671f6d05_prof);

        
        $__internal_1357692eb40ea6f43afa30fa3cc41d5904ad84f006fbbff57357e0c64ce3a85a->leave($__internal_1357692eb40ea6f43afa30fa3cc41d5904ad84f006fbbff57357e0c64ce3a85a_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fb02b47fd700b32f95a3f75a15c1e0a24cd593b26bce72810e1de5d3bbe76d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb02b47fd700b32f95a3f75a15c1e0a24cd593b26bce72810e1de5d3bbe76d2->enter($__internal_8fb02b47fd700b32f95a3f75a15c1e0a24cd593b26bce72810e1de5d3bbe76d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2021b533a90c5902725d4bece125bbbca35b53ab30d9b0584f2e9b76b720a73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2021b533a90c5902725d4bece125bbbca35b53ab30d9b0584f2e9b76b720a73e->enter($__internal_2021b533a90c5902725d4bece125bbbca35b53ab30d9b0584f2e9b76b720a73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
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
        // line 47
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
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Settings:getApiAccessCredentials"));
        // line 81
        echo "
    </div>
    <!-- AJAX CALLS -->
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/global-settings/ajax-global-settings.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
";
        
        $__internal_2021b533a90c5902725d4bece125bbbca35b53ab30d9b0584f2e9b76b720a73e->leave($__internal_2021b533a90c5902725d4bece125bbbca35b53ab30d9b0584f2e9b76b720a73e_prof);

        
        $__internal_8fb02b47fd700b32f95a3f75a15c1e0a24cd593b26bce72810e1de5d3bbe76d2->leave($__internal_8fb02b47fd700b32f95a3f75a15c1e0a24cd593b26bce72810e1de5d3bbe76d2_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0966a294a2c8642aee1506109e8df7ab5a24a05a314996eea56c591d8236592f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0966a294a2c8642aee1506109e8df7ab5a24a05a314996eea56c591d8236592f->enter($__internal_0966a294a2c8642aee1506109e8df7ab5a24a05a314996eea56c591d8236592f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_31f17170268db64009da027440f85d8167fa5157d70c45121889f12b5ad11bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f17170268db64009da027440f85d8167fa5157d70c45121889f12b5ad11bed->enter($__internal_31f17170268db64009da027440f85d8167fa5157d70c45121889f12b5ad11bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "    <script>
        Ladda.bind( '.spinnerBtn' );
    </script>
";
        
        $__internal_31f17170268db64009da027440f85d8167fa5157d70c45121889f12b5ad11bed->leave($__internal_31f17170268db64009da027440f85d8167fa5157d70c45121889f12b5ad11bed_prof);

        
        $__internal_0966a294a2c8642aee1506109e8df7ab5a24a05a314996eea56c591d8236592f->leave($__internal_0966a294a2c8642aee1506109e8df7ab5a24a05a314996eea56c591d8236592f_prof);

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
        return array (  178 => 88,  169 => 87,  156 => 84,  151 => 81,  149 => 79,  114 => 47,  97 => 32,  88 => 31,  51 => 3,  42 => 2,  11 => 1,);
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
    <li class=\"nav-item\">
        <a href=\"/\" class=\"nav-link nav-toggle\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Dashboard</span>
        </a>
    </li>

    <li class=\"nav-item start active open\">
        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
            <i class=\"fa fa-gears\"></i>
            <span class=\"title\">Global Settings</span>
            <span class=\"selected\"></span>
            <span class=\"arrow open\"></span>
        </a>
        <ul class=\"sub-menu\">
            <li class=\"nav-item\">
                <a href=\"/global-settings/api-access\" class=\"nav-link \">
                    <span class=\"title\">API Access</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/global-settings/traffic-source\" class=\"nav-link \">
                    <span class=\"title\">Traffic Source</span>
                </a>
            </li>
        </ul>
    </li>
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
    <script>
        Ladda.bind( '.spinnerBtn' );
    </script>
{% endblock %}
", ":settings:api-access.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app/Resources\\views/settings/api-access.html.twig");
    }
}
