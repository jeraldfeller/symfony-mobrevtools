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
        $__internal_712e3e6ab573f52c90ed658184a307c9fa1cc51f6e1ed5ac91c156ce82547f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712e3e6ab573f52c90ed658184a307c9fa1cc51f6e1ed5ac91c156ce82547f37->enter($__internal_712e3e6ab573f52c90ed658184a307c9fa1cc51f6e1ed5ac91c156ce82547f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $__internal_1beee2c1d3ea6c8c2f7004750a665169bb1dba94fcf44f3c19c6c170b4d84bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1beee2c1d3ea6c8c2f7004750a665169bb1dba94fcf44f3c19c6c170b4d84bea->enter($__internal_1beee2c1d3ea6c8c2f7004750a665169bb1dba94fcf44f3c19c6c170b4d84bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_712e3e6ab573f52c90ed658184a307c9fa1cc51f6e1ed5ac91c156ce82547f37->leave($__internal_712e3e6ab573f52c90ed658184a307c9fa1cc51f6e1ed5ac91c156ce82547f37_prof);

        
        $__internal_1beee2c1d3ea6c8c2f7004750a665169bb1dba94fcf44f3c19c6c170b4d84bea->leave($__internal_1beee2c1d3ea6c8c2f7004750a665169bb1dba94fcf44f3c19c6c170b4d84bea_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_32efad3f1238caad52b996ecc317768a7799e229b6eec4da43f38cf1a39a4ae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32efad3f1238caad52b996ecc317768a7799e229b6eec4da43f38cf1a39a4ae1->enter($__internal_32efad3f1238caad52b996ecc317768a7799e229b6eec4da43f38cf1a39a4ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_b69892d289dd4222488799423136600bc330595310cd481897043292fe284591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69892d289dd4222488799423136600bc330595310cd481897043292fe284591->enter($__internal_b69892d289dd4222488799423136600bc330595310cd481897043292fe284591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_b69892d289dd4222488799423136600bc330595310cd481897043292fe284591->leave($__internal_b69892d289dd4222488799423136600bc330595310cd481897043292fe284591_prof);

        
        $__internal_32efad3f1238caad52b996ecc317768a7799e229b6eec4da43f38cf1a39a4ae1->leave($__internal_32efad3f1238caad52b996ecc317768a7799e229b6eec4da43f38cf1a39a4ae1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1ce8449f26c2335e0b8fe23ba4c5bfaf2a2f0c44f43bf5663f575a80ed41aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ce8449f26c2335e0b8fe23ba4c5bfaf2a2f0c44f43bf5663f575a80ed41aa2->enter($__internal_b1ce8449f26c2335e0b8fe23ba4c5bfaf2a2f0c44f43bf5663f575a80ed41aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6fa466d1f445b5f896ea43a489300d84f4b90a2f187ff08ee1f2be883f24629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fa466d1f445b5f896ea43a489300d84f4b90a2f187ff08ee1f2be883f24629->enter($__internal_c6fa466d1f445b5f896ea43a489300d84f4b90a2f187ff08ee1f2be883f24629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c6fa466d1f445b5f896ea43a489300d84f4b90a2f187ff08ee1f2be883f24629->leave($__internal_c6fa466d1f445b5f896ea43a489300d84f4b90a2f187ff08ee1f2be883f24629_prof);

        
        $__internal_b1ce8449f26c2335e0b8fe23ba4c5bfaf2a2f0c44f43bf5663f575a80ed41aa2->leave($__internal_b1ce8449f26c2335e0b8fe23ba4c5bfaf2a2f0c44f43bf5663f575a80ed41aa2_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0788ba02bc8d9dea71ed3899c400ef9a84cfc0a7662d0e3aa4707aaf8f7e437d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0788ba02bc8d9dea71ed3899c400ef9a84cfc0a7662d0e3aa4707aaf8f7e437d->enter($__internal_0788ba02bc8d9dea71ed3899c400ef9a84cfc0a7662d0e3aa4707aaf8f7e437d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f762e00ba7ca950039b2b8c4a6e1284a16b43ec9d168c69ac5ac1e3fafb1a797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f762e00ba7ca950039b2b8c4a6e1284a16b43ec9d168c69ac5ac1e3fafb1a797->enter($__internal_f762e00ba7ca950039b2b8c4a6e1284a16b43ec9d168c69ac5ac1e3fafb1a797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_f762e00ba7ca950039b2b8c4a6e1284a16b43ec9d168c69ac5ac1e3fafb1a797->leave($__internal_f762e00ba7ca950039b2b8c4a6e1284a16b43ec9d168c69ac5ac1e3fafb1a797_prof);

        
        $__internal_0788ba02bc8d9dea71ed3899c400ef9a84cfc0a7662d0e3aa4707aaf8f7e437d->leave($__internal_0788ba02bc8d9dea71ed3899c400ef9a84cfc0a7662d0e3aa4707aaf8f7e437d_prof);

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
