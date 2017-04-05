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
        $__internal_c785ed66772d9f3657bac5a36f258a352689f054e1a18afab23eb1b9f4d79417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c785ed66772d9f3657bac5a36f258a352689f054e1a18afab23eb1b9f4d79417->enter($__internal_c785ed66772d9f3657bac5a36f258a352689f054e1a18afab23eb1b9f4d79417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $__internal_dca5c40ce6afa42e49d8a1373072d0256cee13e16f77a6d2f5ed362b15d8c33f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca5c40ce6afa42e49d8a1373072d0256cee13e16f77a6d2f5ed362b15d8c33f->enter($__internal_dca5c40ce6afa42e49d8a1373072d0256cee13e16f77a6d2f5ed362b15d8c33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c785ed66772d9f3657bac5a36f258a352689f054e1a18afab23eb1b9f4d79417->leave($__internal_c785ed66772d9f3657bac5a36f258a352689f054e1a18afab23eb1b9f4d79417_prof);

        
        $__internal_dca5c40ce6afa42e49d8a1373072d0256cee13e16f77a6d2f5ed362b15d8c33f->leave($__internal_dca5c40ce6afa42e49d8a1373072d0256cee13e16f77a6d2f5ed362b15d8c33f_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b72bef049d00dce6da3e613ee0278f03b41a10913ae84c9b47528f8d5364bd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72bef049d00dce6da3e613ee0278f03b41a10913ae84c9b47528f8d5364bd8b->enter($__internal_b72bef049d00dce6da3e613ee0278f03b41a10913ae84c9b47528f8d5364bd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_23eb9dad27ab502348427cd932310d64bd9b3f1ba380a73a4b1b99a7457d8f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23eb9dad27ab502348427cd932310d64bd9b3f1ba380a73a4b1b99a7457d8f13->enter($__internal_23eb9dad27ab502348427cd932310d64bd9b3f1ba380a73a4b1b99a7457d8f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_23eb9dad27ab502348427cd932310d64bd9b3f1ba380a73a4b1b99a7457d8f13->leave($__internal_23eb9dad27ab502348427cd932310d64bd9b3f1ba380a73a4b1b99a7457d8f13_prof);

        
        $__internal_b72bef049d00dce6da3e613ee0278f03b41a10913ae84c9b47528f8d5364bd8b->leave($__internal_b72bef049d00dce6da3e613ee0278f03b41a10913ae84c9b47528f8d5364bd8b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_76c1bc117e35fb823025c1b9767e889fcd56c45a18ec4095d361a3f2302fd25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c1bc117e35fb823025c1b9767e889fcd56c45a18ec4095d361a3f2302fd25b->enter($__internal_76c1bc117e35fb823025c1b9767e889fcd56c45a18ec4095d361a3f2302fd25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b121685e1431ebdf215bff8d0f229eb45d2b019b77da47740275d8f6a3e6cb25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b121685e1431ebdf215bff8d0f229eb45d2b019b77da47740275d8f6a3e6cb25->enter($__internal_b121685e1431ebdf215bff8d0f229eb45d2b019b77da47740275d8f6a3e6cb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b121685e1431ebdf215bff8d0f229eb45d2b019b77da47740275d8f6a3e6cb25->leave($__internal_b121685e1431ebdf215bff8d0f229eb45d2b019b77da47740275d8f6a3e6cb25_prof);

        
        $__internal_76c1bc117e35fb823025c1b9767e889fcd56c45a18ec4095d361a3f2302fd25b->leave($__internal_76c1bc117e35fb823025c1b9767e889fcd56c45a18ec4095d361a3f2302fd25b_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5ccb6b2f83e7abc57ee75f6282ac570b1ce2984fc697b0cfe9072b74449f361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ccb6b2f83e7abc57ee75f6282ac570b1ce2984fc697b0cfe9072b74449f361->enter($__internal_a5ccb6b2f83e7abc57ee75f6282ac570b1ce2984fc697b0cfe9072b74449f361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9dd78dbd6ab6d96a54d9a811484d29f5e3c895c62929afc56a089125c2a783fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd78dbd6ab6d96a54d9a811484d29f5e3c895c62929afc56a089125c2a783fd->enter($__internal_9dd78dbd6ab6d96a54d9a811484d29f5e3c895c62929afc56a089125c2a783fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_9dd78dbd6ab6d96a54d9a811484d29f5e3c895c62929afc56a089125c2a783fd->leave($__internal_9dd78dbd6ab6d96a54d9a811484d29f5e3c895c62929afc56a089125c2a783fd_prof);

        
        $__internal_a5ccb6b2f83e7abc57ee75f6282ac570b1ce2984fc697b0cfe9072b74449f361->leave($__internal_a5ccb6b2f83e7abc57ee75f6282ac570b1ce2984fc697b0cfe9072b74449f361_prof);

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
