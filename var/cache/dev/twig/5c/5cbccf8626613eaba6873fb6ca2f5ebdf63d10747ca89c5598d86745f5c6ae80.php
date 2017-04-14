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
        $__internal_8a73e55b8a42a4aec01aa32d2eaa381d9ad60ea09b5ff7478e47319315da9114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a73e55b8a42a4aec01aa32d2eaa381d9ad60ea09b5ff7478e47319315da9114->enter($__internal_8a73e55b8a42a4aec01aa32d2eaa381d9ad60ea09b5ff7478e47319315da9114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $__internal_235c6dde054a2fd99c1ddf3197acbdc96222d9d50d4e89897410674536821aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235c6dde054a2fd99c1ddf3197acbdc96222d9d50d4e89897410674536821aec->enter($__internal_235c6dde054a2fd99c1ddf3197acbdc96222d9d50d4e89897410674536821aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a73e55b8a42a4aec01aa32d2eaa381d9ad60ea09b5ff7478e47319315da9114->leave($__internal_8a73e55b8a42a4aec01aa32d2eaa381d9ad60ea09b5ff7478e47319315da9114_prof);

        
        $__internal_235c6dde054a2fd99c1ddf3197acbdc96222d9d50d4e89897410674536821aec->leave($__internal_235c6dde054a2fd99c1ddf3197acbdc96222d9d50d4e89897410674536821aec_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_54b9d806416718b86a8644945baab5ea0e6225af30e9b75514adc0ff4b25ea30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b9d806416718b86a8644945baab5ea0e6225af30e9b75514adc0ff4b25ea30->enter($__internal_54b9d806416718b86a8644945baab5ea0e6225af30e9b75514adc0ff4b25ea30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_3028777087591c99ff458f2297f0492391ed07cdd964af4d9b2321ea72eef245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3028777087591c99ff458f2297f0492391ed07cdd964af4d9b2321ea72eef245->enter($__internal_3028777087591c99ff458f2297f0492391ed07cdd964af4d9b2321ea72eef245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_3028777087591c99ff458f2297f0492391ed07cdd964af4d9b2321ea72eef245->leave($__internal_3028777087591c99ff458f2297f0492391ed07cdd964af4d9b2321ea72eef245_prof);

        
        $__internal_54b9d806416718b86a8644945baab5ea0e6225af30e9b75514adc0ff4b25ea30->leave($__internal_54b9d806416718b86a8644945baab5ea0e6225af30e9b75514adc0ff4b25ea30_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_79e8d23c08707c2d1cf714bb042c830b04956d0aeb8bb6d46fc23cf217f6d710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e8d23c08707c2d1cf714bb042c830b04956d0aeb8bb6d46fc23cf217f6d710->enter($__internal_79e8d23c08707c2d1cf714bb042c830b04956d0aeb8bb6d46fc23cf217f6d710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bce41c70b0c6177dfe75fff0cf3ae8402849e2f5362dd49df97ca09900571b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bce41c70b0c6177dfe75fff0cf3ae8402849e2f5362dd49df97ca09900571b6->enter($__internal_2bce41c70b0c6177dfe75fff0cf3ae8402849e2f5362dd49df97ca09900571b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1 class=\"page-title\"> ";
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo "
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
        // line 22
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
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Settings:getApiAccessCredentials"));
        // line 56
        echo "
    </div>
    <!-- AJAX CALLS -->
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/global-settings/ajax-global-settings.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
";
        
        $__internal_2bce41c70b0c6177dfe75fff0cf3ae8402849e2f5362dd49df97ca09900571b6->leave($__internal_2bce41c70b0c6177dfe75fff0cf3ae8402849e2f5362dd49df97ca09900571b6_prof);

        
        $__internal_79e8d23c08707c2d1cf714bb042c830b04956d0aeb8bb6d46fc23cf217f6d710->leave($__internal_79e8d23c08707c2d1cf714bb042c830b04956d0aeb8bb6d46fc23cf217f6d710_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_305a7745d7da89b5d0c3377c5140747da65be98fcce59b171394794731d042b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305a7745d7da89b5d0c3377c5140747da65be98fcce59b171394794731d042b5->enter($__internal_305a7745d7da89b5d0c3377c5140747da65be98fcce59b171394794731d042b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_57a54a809e028daeb6c5517d7a125d204e2de1d07cb8373adfbbe2a91f7cbc36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a54a809e028daeb6c5517d7a125d204e2de1d07cb8373adfbbe2a91f7cbc36->enter($__internal_57a54a809e028daeb6c5517d7a125d204e2de1d07cb8373adfbbe2a91f7cbc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "
";
        
        $__internal_57a54a809e028daeb6c5517d7a125d204e2de1d07cb8373adfbbe2a91f7cbc36->leave($__internal_57a54a809e028daeb6c5517d7a125d204e2de1d07cb8373adfbbe2a91f7cbc36_prof);

        
        $__internal_305a7745d7da89b5d0c3377c5140747da65be98fcce59b171394794731d042b5->leave($__internal_305a7745d7da89b5d0c3377c5140747da65be98fcce59b171394794731d042b5_prof);

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
        return array (  156 => 63,  147 => 62,  134 => 59,  129 => 56,  127 => 54,  92 => 22,  74 => 8,  65 => 7,  54 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
    <h1 class=\"page-title\"> {{ page }}
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
