<?php

/* :login:login.html.twig */
class __TwigTemplate_5ab71a5afd40e1104a562ba2592d0d7700ef37238653499c58a292d0fb9e2ddf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_516694398337f71c2f9831019f17caf66a325450cf6f13b150429ec4ff94f2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516694398337f71c2f9831019f17caf66a325450cf6f13b150429ec4ff94f2e4->enter($__internal_516694398337f71c2f9831019f17caf66a325450cf6f13b150429ec4ff94f2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":login:login.html.twig"));

        $__internal_fde07b2e5121fc82ec609ca18e7f6f12bef85348ed75d3a22fade44c66407871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde07b2e5121fc82ec609ca18e7f6f12bef85348ed75d3a22fade44c66407871->enter($__internal_fde07b2e5121fc82ec609ca18e7f6f12bef85348ed75d3a22fade44c66407871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":login:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset=\"utf-8\" />
    <title>Mobrevmedia Tools</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"Preview page of Metronic Admin Theme #2 for \" name=\"description\" />
    <meta content=\"\" name=\"author\" />
";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 53
        echo "    </head>
<!-- END HEAD -->

";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "


<!-- BEGIN CORE PLUGINS -->
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/backstretch/jquery.backstretch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/scripts/login-5.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
<!-- BEGIN BUTTON PROGRESS -->
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/ladda/spin.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/ladda/ladda.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/scripts/ui-buttons.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END BUTTON PROGRESS -->

<script>
    Ladda.bind( '#loginBtn' );
</script>
<!-- AJAX CALLS -->
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/users/ajax-login.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END AJAX CALLS -->
</body>

</html>

";
        
        $__internal_516694398337f71c2f9831019f17caf66a325450cf6f13b150429ec4ff94f2e4->leave($__internal_516694398337f71c2f9831019f17caf66a325450cf6f13b150429ec4ff94f2e4_prof);

        
        $__internal_fde07b2e5121fc82ec609ca18e7f6f12bef85348ed75d3a22fade44c66407871->leave($__internal_fde07b2e5121fc82ec609ca18e7f6f12bef85348ed75d3a22fade44c66407871_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_067ad40ee384a281f3b86dd12514967be20378b99e888889d45075a493910fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067ad40ee384a281f3b86dd12514967be20378b99e888889d45075a493910fae->enter($__internal_067ad40ee384a281f3b86dd12514967be20378b99e888889d45075a493910fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9eb1589edc0d5aa933381d43a4b947cd46a42b49d57c2d6595596fb287f538b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb1589edc0d5aa933381d43a4b947cd46a42b49d57c2d6595596fb287f538b9->enter($__internal_9eb1589edc0d5aa933381d43a4b947cd46a42b49d57c2d6595596fb287f538b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components-rounded.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/login-5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN BUTTONS PROGRESS -->
    <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/ladda/ladda-themeless.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END BUTTONS PROGRESS -->
    <link rel=\"shortcut icon\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
";
        
        $__internal_9eb1589edc0d5aa933381d43a4b947cd46a42b49d57c2d6595596fb287f538b9->leave($__internal_9eb1589edc0d5aa933381d43a4b947cd46a42b49d57c2d6595596fb287f538b9_prof);

        
        $__internal_067ad40ee384a281f3b86dd12514967be20378b99e888889d45075a493910fae->leave($__internal_067ad40ee384a281f3b86dd12514967be20378b99e888889d45075a493910fae_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c6a17fce4230f6f4c19c59a716623987266b20ff44b8f25b46004db0e85da42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6a17fce4230f6f4c19c59a716623987266b20ff44b8f25b46004db0e85da42->enter($__internal_5c6a17fce4230f6f4c19c59a716623987266b20ff44b8f25b46004db0e85da42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb4e9cb67d13a6b6c1f49cf199301e3071fed61724491ddd49f80e90ec9fea8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4e9cb67d13a6b6c1f49cf199301e3071fed61724491ddd49f80e90ec9fea8f->enter($__internal_fb4e9cb67d13a6b6c1f49cf199301e3071fed61724491ddd49f80e90ec9fea8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "<body class=\" login\">
    <!-- BEGIN : LOGIN PAGE 5-2 -->
    <div class=\"user-login-5\">
        <div class=\"row bs-reset\">
            <div class=\"col-md-6 login-container bs-reset\">
                <img class=\"login-logo login-6\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/login/login-invert.png"), "html", null, true);
        echo "\" />
                <div class=\"login-content\">

                    <h1>Metronic Admin Login</h1>
                    <p> Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat. Lorem ipsum dolor sit amet, coectetuer adipiscing. </p>
                    <form action=\"login-action\" class=\"login-form\" method=\"post\">
                        <div class=\"alert alert-danger display-hide\">
                            <button class=\"close\" data-close=\"alert\"></button>
                            <span>Enter any username and password. </span>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <input class=\"form-control form-control-solid placeholder-no-fix form-group\" type=\"text\" autocomplete=\"off\" placeholder=\"Username\" name=\"_email\" id=\"_email\" value=\"\" required/> </div>
                            <div class=\"col-xs-6\">
                                <input class=\"form-control form-control-solid placeholder-no-fix form-group\" type=\"password\" autocomplete=\"off\" placeholder=\"Password\" name=\"_password\" id=\"_password\" required/> </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <label class=\"rememberme mt-checkbox mt-checkbox-outline\">
                                    <input type=\"checkbox\" name=\"remember\" value=\"1\" /> Remember me
                                    <span></span>
                                </label>
                            </div>
                            <div class=\"col-sm-8 text-right\">
                                <div class=\"forgot-password\">
                                    <a href=\"javascript:;\" id=\"forget-password\" class=\"forget-password\">Forgot Password?</a>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary btn-md ladda-button\" data-style=\"expand-right\" data-size=\"m\">
                                                    <span class=\"ladda-label\">
                                                        <i class=\"icon-arrow-right\"></i> Sign In</span>
                                </button>
                            </div>
                        </div>
            </form>
                    <!-- BEGIN FORGOT PASSWORD FORM -->
                    <form class=\"forget-form\" action=\"javascript:;\" method=\"post\">
                        <h3>Forgot Password ?</h3>
                        <p> Enter your e-mail address below to reset your password. </p>
                        <div class=\"form-group\">
                            <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\" /> </div>
                        <div class=\"form-actions\">
                            <button type=\"button\" id=\"back-btn\" class=\"btn blue btn-outline\">Back</button>
                            <button type=\"submit\" class=\"btn blue uppercase pull-right\">Submit</button>
                        </div>
                    </form>
                    <!-- END FORGOT PASSWORD FORM -->
                </div>
                <div class=\"login-footer\">
                    <div class=\"row bs-reset\">
                        <div class=\"col-xs-7 bs-reset\">
                            <div class=\"login-copyright text-right\">
                                <p>Copyright &copy; Keenthemes 2015</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 bs-reset\">
                <div class=\"login-bg\"> </div>
            </div>
        </div>
    </div>
    <!-- END : LOGIN PAGE 5-2 -->
";
        
        $__internal_fb4e9cb67d13a6b6c1f49cf199301e3071fed61724491ddd49f80e90ec9fea8f->leave($__internal_fb4e9cb67d13a6b6c1f49cf199301e3071fed61724491ddd49f80e90ec9fea8f_prof);

        
        $__internal_5c6a17fce4230f6f4c19c59a716623987266b20ff44b8f25b46004db0e85da42->leave($__internal_5c6a17fce4230f6f4c19c59a716623987266b20ff44b8f25b46004db0e85da42_prof);

    }

    public function getTemplateName()
    {
        return ":login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 62,  248 => 57,  239 => 56,  227 => 51,  222 => 49,  216 => 46,  210 => 43,  206 => 42,  200 => 39,  196 => 38,  190 => 35,  186 => 34,  182 => 33,  178 => 32,  174 => 30,  165 => 29,  148 => 161,  138 => 154,  134 => 153,  130 => 152,  122 => 147,  116 => 144,  110 => 141,  106 => 140,  102 => 139,  98 => 138,  92 => 135,  88 => 134,  84 => 133,  80 => 132,  76 => 131,  72 => 130,  66 => 126,  64 => 56,  59 => 53,  57 => 29,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset=\"utf-8\" />
    <title>Mobrevmedia Tools</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"Preview page of Metronic Admin Theme #2 for \" name=\"description\" />
    <meta content=\"\" name=\"author\" />
{% block stylesheets %}
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=\"{{ asset('assets/global/css/components-rounded.min.css') }}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/css/plugins.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href=\"{{ asset('assets/global/plugins/select2/css/select2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href=\"{{ asset('assets/pages/css/login-5.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN BUTTONS PROGRESS -->
    <link href=\"{{ asset('assets/global/plugins/ladda/ladda-themeless.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END BUTTONS PROGRESS -->
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
{% endblock %}
    </head>
<!-- END HEAD -->

{% block body %}
<body class=\" login\">
    <!-- BEGIN : LOGIN PAGE 5-2 -->
    <div class=\"user-login-5\">
        <div class=\"row bs-reset\">
            <div class=\"col-md-6 login-container bs-reset\">
                <img class=\"login-logo login-6\" src=\"{{ asset('assets/pages/img/login/login-invert.png') }}\" />
                <div class=\"login-content\">

                    <h1>Metronic Admin Login</h1>
                    <p> Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat. Lorem ipsum dolor sit amet, coectetuer adipiscing. </p>
                    <form action=\"login-action\" class=\"login-form\" method=\"post\">
                        <div class=\"alert alert-danger display-hide\">
                            <button class=\"close\" data-close=\"alert\"></button>
                            <span>Enter any username and password. </span>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <input class=\"form-control form-control-solid placeholder-no-fix form-group\" type=\"text\" autocomplete=\"off\" placeholder=\"Username\" name=\"_email\" id=\"_email\" value=\"\" required/> </div>
                            <div class=\"col-xs-6\">
                                <input class=\"form-control form-control-solid placeholder-no-fix form-group\" type=\"password\" autocomplete=\"off\" placeholder=\"Password\" name=\"_password\" id=\"_password\" required/> </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <label class=\"rememberme mt-checkbox mt-checkbox-outline\">
                                    <input type=\"checkbox\" name=\"remember\" value=\"1\" /> Remember me
                                    <span></span>
                                </label>
                            </div>
                            <div class=\"col-sm-8 text-right\">
                                <div class=\"forgot-password\">
                                    <a href=\"javascript:;\" id=\"forget-password\" class=\"forget-password\">Forgot Password?</a>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary btn-md ladda-button\" data-style=\"expand-right\" data-size=\"m\">
                                                    <span class=\"ladda-label\">
                                                        <i class=\"icon-arrow-right\"></i> Sign In</span>
                                </button>
                            </div>
                        </div>
            </form>
                    <!-- BEGIN FORGOT PASSWORD FORM -->
                    <form class=\"forget-form\" action=\"javascript:;\" method=\"post\">
                        <h3>Forgot Password ?</h3>
                        <p> Enter your e-mail address below to reset your password. </p>
                        <div class=\"form-group\">
                            <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\" /> </div>
                        <div class=\"form-actions\">
                            <button type=\"button\" id=\"back-btn\" class=\"btn blue btn-outline\">Back</button>
                            <button type=\"submit\" class=\"btn blue uppercase pull-right\">Submit</button>
                        </div>
                    </form>
                    <!-- END FORGOT PASSWORD FORM -->
                </div>
                <div class=\"login-footer\">
                    <div class=\"row bs-reset\">
                        <div class=\"col-xs-7 bs-reset\">
                            <div class=\"login-copyright text-right\">
                                <p>Copyright &copy; Keenthemes 2015</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 bs-reset\">
                <div class=\"login-bg\"> </div>
            </div>
        </div>
    </div>
    <!-- END : LOGIN PAGE 5-2 -->
{% endblock %}



<!-- BEGIN CORE PLUGINS -->
<script src=\"{{ asset('assets/global/plugins/jquery.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/global/plugins/js.cookie.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/global/plugins/jquery.blockui.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src=\"{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src=\"{{ asset('assets/global/scripts/app.min.js') }}\" type=\"text/javascript\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src=\"{{ asset('assets/pages/scripts/login-5.min.js') }}\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
<!-- BEGIN BUTTON PROGRESS -->
<script src=\"{{ asset('assets/global/plugins/ladda/spin.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/global/plugins/ladda/ladda.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/pages/scripts/ui-buttons.min.js') }}\" type=\"text/javascript\"></script>
<!-- END BUTTON PROGRESS -->

<script>
    Ladda.bind( '#loginBtn' );
</script>
<!-- AJAX CALLS -->
<script src=\"{{ asset('assets/ajax/users/ajax-login.js') }}\" type=\"text/javascript\"></script>
<!-- END AJAX CALLS -->
</body>

</html>

", ":login:login.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app/Resources\\views/login/login.html.twig");
    }
}
