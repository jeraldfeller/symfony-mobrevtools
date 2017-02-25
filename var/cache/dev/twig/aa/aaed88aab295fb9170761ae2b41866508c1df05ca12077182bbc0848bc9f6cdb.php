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
        $__internal_cdd641a41a47ff8e373975b702b87703db14fb2bde1d24fb98a5b3650d5ad82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd641a41a47ff8e373975b702b87703db14fb2bde1d24fb98a5b3650d5ad82f->enter($__internal_cdd641a41a47ff8e373975b702b87703db14fb2bde1d24fb98a5b3650d5ad82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $__internal_dccf6f6e8cf933fad02cb41322e6c9f3a22488cd832930355dd5c828b923e3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dccf6f6e8cf933fad02cb41322e6c9f3a22488cd832930355dd5c828b923e3b9->enter($__internal_dccf6f6e8cf933fad02cb41322e6c9f3a22488cd832930355dd5c828b923e3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdd641a41a47ff8e373975b702b87703db14fb2bde1d24fb98a5b3650d5ad82f->leave($__internal_cdd641a41a47ff8e373975b702b87703db14fb2bde1d24fb98a5b3650d5ad82f_prof);

        
        $__internal_dccf6f6e8cf933fad02cb41322e6c9f3a22488cd832930355dd5c828b923e3b9->leave($__internal_dccf6f6e8cf933fad02cb41322e6c9f3a22488cd832930355dd5c828b923e3b9_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_5ea023bd662939678b458026afa17d010e4b5bffadf6799afab1c79e5a1c1693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea023bd662939678b458026afa17d010e4b5bffadf6799afab1c79e5a1c1693->enter($__internal_5ea023bd662939678b458026afa17d010e4b5bffadf6799afab1c79e5a1c1693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_9f6b2ff52275f66e92d7792ce217ae81c362d13d246f2febc7c966ab1eea9979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6b2ff52275f66e92d7792ce217ae81c362d13d246f2febc7c966ab1eea9979->enter($__internal_9f6b2ff52275f66e92d7792ce217ae81c362d13d246f2febc7c966ab1eea9979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_9f6b2ff52275f66e92d7792ce217ae81c362d13d246f2febc7c966ab1eea9979->leave($__internal_9f6b2ff52275f66e92d7792ce217ae81c362d13d246f2febc7c966ab1eea9979_prof);

        
        $__internal_5ea023bd662939678b458026afa17d010e4b5bffadf6799afab1c79e5a1c1693->leave($__internal_5ea023bd662939678b458026afa17d010e4b5bffadf6799afab1c79e5a1c1693_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee27831deb271f0126c17a789a1de2a6fc1a5c8d5c6c7d5216dd711205300b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee27831deb271f0126c17a789a1de2a6fc1a5c8d5c6c7d5216dd711205300b7a->enter($__internal_ee27831deb271f0126c17a789a1de2a6fc1a5c8d5c6c7d5216dd711205300b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39dec5aaeff2243ab12fe00314635402a3e9c274a0fc6c2e9aa50d4150019abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39dec5aaeff2243ab12fe00314635402a3e9c274a0fc6c2e9aa50d4150019abd->enter($__internal_39dec5aaeff2243ab12fe00314635402a3e9c274a0fc6c2e9aa50d4150019abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39dec5aaeff2243ab12fe00314635402a3e9c274a0fc6c2e9aa50d4150019abd->leave($__internal_39dec5aaeff2243ab12fe00314635402a3e9c274a0fc6c2e9aa50d4150019abd_prof);

        
        $__internal_ee27831deb271f0126c17a789a1de2a6fc1a5c8d5c6c7d5216dd711205300b7a->leave($__internal_ee27831deb271f0126c17a789a1de2a6fc1a5c8d5c6c7d5216dd711205300b7a_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1eb1217bb42107d10eeacc64688397656579b502563c3bf177cf08a0b0ec70f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb1217bb42107d10eeacc64688397656579b502563c3bf177cf08a0b0ec70f2->enter($__internal_1eb1217bb42107d10eeacc64688397656579b502563c3bf177cf08a0b0ec70f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b6edb90ecf560f93879faa9b711a022009c1b1e3df24cb4f853305d206af3c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6edb90ecf560f93879faa9b711a022009c1b1e3df24cb4f853305d206af3c48->enter($__internal_b6edb90ecf560f93879faa9b711a022009c1b1e3df24cb4f853305d206af3c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_b6edb90ecf560f93879faa9b711a022009c1b1e3df24cb4f853305d206af3c48->leave($__internal_b6edb90ecf560f93879faa9b711a022009c1b1e3df24cb4f853305d206af3c48_prof);

        
        $__internal_1eb1217bb42107d10eeacc64688397656579b502563c3bf177cf08a0b0ec70f2->leave($__internal_1eb1217bb42107d10eeacc64688397656579b502563c3bf177cf08a0b0ec70f2_prof);

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
