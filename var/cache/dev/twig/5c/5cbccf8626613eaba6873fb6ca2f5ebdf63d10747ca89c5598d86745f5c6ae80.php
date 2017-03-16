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
        $__internal_f0daa4e87d59c0fe3660dd13162bbf5df0c1966b99a852084b7b095131af94b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0daa4e87d59c0fe3660dd13162bbf5df0c1966b99a852084b7b095131af94b2->enter($__internal_f0daa4e87d59c0fe3660dd13162bbf5df0c1966b99a852084b7b095131af94b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $__internal_67cc895dc9f7353072253005553f60e369c29f63bc5a6b0c1075e72b76cdccfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cc895dc9f7353072253005553f60e369c29f63bc5a6b0c1075e72b76cdccfb->enter($__internal_67cc895dc9f7353072253005553f60e369c29f63bc5a6b0c1075e72b76cdccfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:api-access.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0daa4e87d59c0fe3660dd13162bbf5df0c1966b99a852084b7b095131af94b2->leave($__internal_f0daa4e87d59c0fe3660dd13162bbf5df0c1966b99a852084b7b095131af94b2_prof);

        
        $__internal_67cc895dc9f7353072253005553f60e369c29f63bc5a6b0c1075e72b76cdccfb->leave($__internal_67cc895dc9f7353072253005553f60e369c29f63bc5a6b0c1075e72b76cdccfb_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d9630acee25d30f00951cdb3a0b1c9f4acdc7b86a65df1c4017ade2d33eea30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9630acee25d30f00951cdb3a0b1c9f4acdc7b86a65df1c4017ade2d33eea30e->enter($__internal_d9630acee25d30f00951cdb3a0b1c9f4acdc7b86a65df1c4017ade2d33eea30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_922077cb13437c2161109a896e1d2f4f57535c7ba3aff2d6adc8b22ccdc4b103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922077cb13437c2161109a896e1d2f4f57535c7ba3aff2d6adc8b22ccdc4b103->enter($__internal_922077cb13437c2161109a896e1d2f4f57535c7ba3aff2d6adc8b22ccdc4b103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_922077cb13437c2161109a896e1d2f4f57535c7ba3aff2d6adc8b22ccdc4b103->leave($__internal_922077cb13437c2161109a896e1d2f4f57535c7ba3aff2d6adc8b22ccdc4b103_prof);

        
        $__internal_d9630acee25d30f00951cdb3a0b1c9f4acdc7b86a65df1c4017ade2d33eea30e->leave($__internal_d9630acee25d30f00951cdb3a0b1c9f4acdc7b86a65df1c4017ade2d33eea30e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d6199b55ad2ee222341f0e2e6151121e260afc4634fc5bebdaa7226fc9a2563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6199b55ad2ee222341f0e2e6151121e260afc4634fc5bebdaa7226fc9a2563->enter($__internal_9d6199b55ad2ee222341f0e2e6151121e260afc4634fc5bebdaa7226fc9a2563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_043443d94e9aab78b38e97ca416d81f176e8cb4ad0b67cc8e5b934367878bb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043443d94e9aab78b38e97ca416d81f176e8cb4ad0b67cc8e5b934367878bb9a->enter($__internal_043443d94e9aab78b38e97ca416d81f176e8cb4ad0b67cc8e5b934367878bb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_043443d94e9aab78b38e97ca416d81f176e8cb4ad0b67cc8e5b934367878bb9a->leave($__internal_043443d94e9aab78b38e97ca416d81f176e8cb4ad0b67cc8e5b934367878bb9a_prof);

        
        $__internal_9d6199b55ad2ee222341f0e2e6151121e260afc4634fc5bebdaa7226fc9a2563->leave($__internal_9d6199b55ad2ee222341f0e2e6151121e260afc4634fc5bebdaa7226fc9a2563_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d91dac054e734d233e52cc5a8dbebddac0d1e804acff62b84c78b16989b8452b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91dac054e734d233e52cc5a8dbebddac0d1e804acff62b84c78b16989b8452b->enter($__internal_d91dac054e734d233e52cc5a8dbebddac0d1e804acff62b84c78b16989b8452b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dc773081e02f39ea4dbb7d24a9d83b766bf54a58d172edf49997f1ece9152e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc773081e02f39ea4dbb7d24a9d83b766bf54a58d172edf49997f1ece9152e1f->enter($__internal_dc773081e02f39ea4dbb7d24a9d83b766bf54a58d172edf49997f1ece9152e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "
";
        
        $__internal_dc773081e02f39ea4dbb7d24a9d83b766bf54a58d172edf49997f1ece9152e1f->leave($__internal_dc773081e02f39ea4dbb7d24a9d83b766bf54a58d172edf49997f1ece9152e1f_prof);

        
        $__internal_d91dac054e734d233e52cc5a8dbebddac0d1e804acff62b84c78b16989b8452b->leave($__internal_d91dac054e734d233e52cc5a8dbebddac0d1e804acff62b84c78b16989b8452b_prof);

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
