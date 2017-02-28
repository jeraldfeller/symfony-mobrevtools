<?php

/* base.html.twig */
class __TwigTemplate_9bd64ea7d9b19b329ca4d21cce6b56b6a967c9ec62a8589919b49327cb3b4344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37a75d98e6371f6be53a6987a274ccf76e3616ac72818029ed1c74dc89bd00f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a75d98e6371f6be53a6987a274ccf76e3616ac72818029ed1c74dc89bd00f5->enter($__internal_37a75d98e6371f6be53a6987a274ccf76e3616ac72818029ed1c74dc89bd00f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b7ca03ead689e4c7da77724541df5dc7900e689027d034c72e051555fb85768d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ca03ead689e4c7da77724541df5dc7900e689027d034c72e051555fb85768d->enter($__internal_b7ca03ead689e4c7da77724541df5dc7900e689027d034c72e051555fb85768d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>Mobrevmedia Tools</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"Preview page of Creatunity for statistics, charts, recent events and reports\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN DATATABLES -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <!-- END DATATABLES STYLES -->

        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/components-rounded.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/css/plugins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout2/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout2/css/themes/blue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout2/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->

        <!-- BEGIN BUTTONS PROGRESS -->
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/ladda/ladda-themeless.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END BUTTONS PROGRESS -->

        <!-- BEGIN TOASTR NOTIFICATION -->
        <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-toastr/toastr.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END TOASTR NOTIFICATION STYLES -->


        ";
        // line 43
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid\">
        <!-- BEGIN HEADER -->
        <div class=\"page-header navbar navbar-fixed-top\">
            <!-- BEGIN HEADER INNER -->
            <div class=\"page-header-inner \">
                <!-- BEGIN LOGO -->
                <div class=\"page-logo\">
                    <a href=\"/\">
                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout2/img/logo-default.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-default\" /> </a>
                    <div class=\"menu-toggler sidebar-toggler\">
                        <!-- DOC: Remove the above \"hide\" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
                <!-- DOC: Remove \"hide\" class to enable the page header actions -->
                <div class=\"page-actions\">
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-circle btn-outline red dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-plus\"></i>&nbsp;
                            <span class=\"hidden-sm hidden-xs\">New&nbsp;</span>&nbsp;
                            <i class=\"fa fa-angle-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"icon-docs\"></i> New Post </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"icon-tag\"></i> New Comment </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"icon-share\"></i> Share </a>
                            </li>
                            <li class=\"divider\"> </li>
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"icon-flag\"></i> Comments
                                    <span class=\"badge badge-success\">4</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"icon-users\"></i> Feedbacks
                                    <span class=\"badge badge-danger\">2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END PAGE ACTIONS -->
                <!-- BEGIN PAGE TOP -->
                <div class=\"page-top\">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <!-- DOC: Apply \"search-form-expanded\" right after the \"search-form\" class to have half expanded search box -->
                    <form class=\"search-form search-form-expanded\" action=\"page_general_search_3.html\" method=\"GET\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" name=\"query\">
                                <span class=\"input-group-btn\">
                                    <a href=\"javascript:;\" class=\"btn submit\">
                                        <i class=\"icon-magnifier\"></i>
                                    </a>
                                </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class=\"top-menu\">
                        <ul class=\"nav navbar-nav pull-right\">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class below \"dropdown-extended\" to change the dropdown styte -->
                            <!-- DOC: Apply \"dropdown-hoverable\" class after below \"dropdown\" and remove data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove \"dropdown-hoverable\" and add data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to the below A element with dropdown-toggle class -->
                            <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-bell\"></i>
                                    <span class=\"badge badge-default\"> 7 </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"external\">
                                        <h3>
                                            <span class=\"bold\">12 pending</span> notifications</h3>
                                        <a href=\"page_user_profile_1.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">just now</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-success\">
                                                                <i class=\"fa fa-plus\"></i>
                                                            </span> New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">3 mins</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">10 mins</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-warning\">
                                                                <i class=\"fa fa-bell-o\"></i>
                                                            </span> Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">14 hrs</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-info\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </span> Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">2 days</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">3 days</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">4 days</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-warning\">
                                                                <i class=\"fa fa-bell-o\"></i>
                                                            </span> Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">5 days</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-info\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </span> System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">9 days</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-envelope-open\"></i>
                                    <span class=\"badge badge-default\"> 4 </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"external\">
                                        <h3>You have
                                            <span class=\"bold\">7 New</span> Messages</h3>
                                        <a href=\"app_inbox.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"#\">
                                                        <span class=\"photo\">
                                                            <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "assets/layouts/layout3/img/avatar2.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                            <span class=\"from\"> Lisa Wong </span>
                                                            <span class=\"time\">Just Now </span>
                                                        </span>
                                                    <span class=\"message\"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                        <span class=\"photo\">
                                                            <img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "assets/layouts/layout3/img/avatar3.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                            <span class=\"from\"> Richard Doe </span>
                                                            <span class=\"time\">16 mins </span>
                                                        </span>
                                                    <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                        <span class=\"photo\">
                                                            <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "assets/layouts/layout3/img/avatar1.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                            <span class=\"from\"> Bob Nilson </span>
                                                            <span class=\"time\">2 hrs </span>
                                                        </span>
                                                    <span class=\"message\"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                        <span class=\"photo\">
                                                            <img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "assets/layouts/layout3/img/avatar2.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                            <span class=\"from\"> Lisa Wong </span>
                                                            <span class=\"time\">40 mins </span>
                                                        </span>
                                                    <span class=\"message\"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                        <span class=\"photo\">
                                                            <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "assets/layouts/layout3/img/avatar3.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                            <span class=\"from\"> Richard Doe </span>
                                                            <span class=\"time\">46 mins </span>
                                                        </span>
                                                    <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-extended dropdown-tasks\" id=\"header_task_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-calendar\"></i>
                                    <span class=\"badge badge-default\"> 3 </span>
                                </a>
                                <ul class=\"dropdown-menu extended tasks\">
                                    <li class=\"external\">
                                        <h3>You have
                                            <span class=\"bold\">12 pending</span> tasks</h3>
                                        <a href=\"app_todo.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"javascript:;\">
                                                        <span class=\"task\">
                                                            <span class=\"desc\">New release v1.2 </span>
                                                            <span class=\"percent\">30%</span>
                                                        </span>
                                                        <span class=\"progress\">
                                                            <span style=\"width: 40%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">40% Complete</span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                        <span class=\"task\">
                                                            <span class=\"desc\">Application deployment</span>
                                                            <span class=\"percent\">65%</span>
                                                        </span>
                                                        <span class=\"progress\">
                                                            <span style=\"width: 65%;\" class=\"progress-bar progress-bar-danger\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">65% Complete</span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                        <span class=\"task\">
                                                            <span class=\"desc\">Mobile app release</span>
                                                            <span class=\"percent\">98%</span>
                                                        </span>
                                                        <span class=\"progress\">
                                                            <span style=\"width: 98%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">98% Complete</span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                        <span class=\"task\">
                                                            <span class=\"desc\">Database migration</span>
                                                            <span class=\"percent\">10%</span>
                                                        </span>
                                                        <span class=\"progress\">
                                                            <span style=\"width: 10%;\" class=\"progress-bar progress-bar-warning\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">10% Complete</span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                        <span class=\"task\">
                                                            <span class=\"desc\">Web server upgrade</span>
                                                            <span class=\"percent\">58%</span>
                                                        </span>
                                                        <span class=\"progress\">
                                                            <span style=\"width: 58%;\" class=\"progress-bar progress-bar-info\" aria-valuenow=\"58\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">58% Complete</span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                        <span class=\"task\">
                                                            <span class=\"desc\">Mobile development</span>
                                                            <span class=\"percent\">85%</span>
                                                        </span>
                                                        <span class=\"progress\">
                                                            <span style=\"width: 85%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">85% Complete</span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                        <span class=\"task\">
                                                            <span class=\"desc\">New UI release</span>
                                                            <span class=\"percent\">38%</span>
                                                        </span>
                                                        <span class=\"progress progress-striped\">
                                                            <span style=\"width: 38%;\" class=\"progress-bar progress-bar-important\" aria-valuenow=\"18\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">38% Complete</span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-user\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <img alt=\"\" class=\"img-circle\" src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "assets/layouts/layout2/img/avatar3_small.jpg\" />
                                    <span class=\"username username-hide-on-mobile\"> Nick </span>
                                    <i class=\"fa fa-angle-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-default\">
                                    <li>
                                        <a href=\"page_user_profile_1.html\">
                                            <i class=\"icon-user\"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href=\"app_calendar.html\">
                                            <i class=\"icon-calendar\"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href=\"app_inbox.html\">
                                            <i class=\"icon-envelope-open\"></i> My Inbox
                                            <span class=\"badge badge-danger\"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"app_todo_2.html\">
                                            <i class=\"icon-rocket\"></i> My Tasks
                                            <span class=\"badge badge-success\"> 7 </span>
                                        </a>
                                    </li>
                                    <li class=\"divider\"> </li>
                                    <li>
                                        <a href=\"page_user_lock_1.html\">
                                            <i class=\"icon-lock\"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href=\"/user/logout\">
                                            <i class=\"icon-key\"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-extended quick-sidebar-toggler\">
                                <span class=\"sr-only\">Toggle Quick Sidebar</span>
                                <i class=\"icon-logout\"></i>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class=\"clearfix\"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN SIDEBAR -->
            <div class=\"page-sidebar-wrapper\">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                <div class=\"page-sidebar navbar-collapse collapse\">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                    <ul class=\"page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu \" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\">
                        ";
        // line 486
        $this->displayBlock('nav', $context, $blocks);
        // line 488
        echo "                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class=\"page-content-wrapper\">
                <!-- BEGIN CONTENT BODY -->
                <div class=\"page-content\">
                ";
        // line 498
        $this->displayBlock('body', $context, $blocks);
        // line 499
        echo "                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT BODY -->
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href=\"javascript:;\" class=\"page-quick-sidebar-toggler\">
                <i class=\"icon-login\"></i>
            </a>
            <div class=\"page-quick-sidebar-wrapper\" data-close-on-body-click=\"false\">
                <div class=\"page-quick-sidebar\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\">
                            <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_1\" data-toggle=\"tab\"> Users
                                <span class=\"badge badge-danger\">2</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_2\" data-toggle=\"tab\"> Alerts
                                <span class=\"badge badge-success\">7</span>
                            </a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> More
                                <i class=\"fa fa-angle-down\"></i>
                            </a>
                            <ul class=\"dropdown-menu pull-right\">
                                <li>
                                    <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                        <i class=\"icon-bell\"></i> Alerts </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                        <i class=\"icon-info\"></i> Notifications </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                        <i class=\"icon-speech\"></i> Activities </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                        <i class=\"icon-settings\"></i> Settings </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active page-quick-sidebar-chat\" id=\"quick_sidebar_tab_1\">
                            <div class=\"page-quick-sidebar-chat-users\" data-rail-color=\"#ddd\" data-wrapper-class=\"page-quick-sidebar-list\">
                                <h3 class=\"list-heading\">Staff</h3>
                                <ul class=\"media-list list-items\">
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-success\">8</span>
                                        </div>
                                        <img class=\"media-object\" src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "assets/layouts/layout/img/avatar3.jpg\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Bob Nilson</h4>
                                            <div class=\"media-heading-sub\"> Project Manager </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <img class=\"media-object\" src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "assets/layouts/layout/img/avatar1.jpg\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Nick Larson</h4>
                                            <div class=\"media-heading-sub\"> Art Director </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-danger\">3</span>
                                        </div>
                                        <img class=\"media-object\" src=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "assets/layouts/layout/img/avatar4.jpg\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Deon Hubert</h4>
                                            <div class=\"media-heading-sub\"> CTO </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <img class=\"media-object\" src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "assets/layouts/layout/img/avatar2.jpg\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Ella Wong</h4>
                                            <div class=\"media-heading-sub\"> CEO </div>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class=\"list-heading\">Customers</h3>
                                <ul class=\"media-list list-items\">
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-warning\">2</span>
                                        </div>
                                        <img class=\"media-object\" src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "assets/layouts/layout/img/avatar6.jpg\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Lara Kunis</h4>
                                            <div class=\"media-heading-sub\"> CEO, Loop Inc </div>
                                            <div class=\"media-heading-small\"> Last seen 03:10 AM </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"label label-sm label-success\">new</span>
                                        </div>
                                        <img class=\"media-object\" src=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "assets/layouts/layout/img/avatar7.jpg\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Ernie Kyllonen</h4>
                                            <div class=\"media-heading-sub\"> Project Manager,
                                                <br> SmartBizz PTL </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <img class=\"media-object\" src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "assets/layouts/layout/img/avatar8.jpg\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Lisa Stone</h4>
                                            <div class=\"media-heading-sub\"> CTO, Keort Inc </div>
                                            <div class=\"media-heading-small\"> Last seen 13:10 PM </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-success\">7</span>
                                        </div>
                                        <img class=\"media-object\" src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout/img/avatar9.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Deon Portalatin</h4>
                                            <div class=\"media-heading-sub\"> CFO, H&D LTD </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <img class=\"media-object\" src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout/img/avatar10.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Irina Savikova</h4>
                                            <div class=\"media-heading-sub\"> CEO, Tizda Motors Inc </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-danger\">4</span>
                                        </div>
                                        <img class=\"media-object\" src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout/img/avatar11.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Maria Gomez</h4>
                                            <div class=\"media-heading-sub\"> Manager, Infomatic Inc </div>
                                            <div class=\"media-heading-small\"> Last seen 03:10 AM </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"page-quick-sidebar-item\">
                                <div class=\"page-quick-sidebar-chat-user\">
                                    <div class=\"page-quick-sidebar-nav\">
                                        <a href=\"javascript:;\" class=\"page-quick-sidebar-back-to-list\">
                                            <i class=\"icon-arrow-left\"></i>Back</a>
                                    </div>
                                    <div class=\"page-quick-sidebar-chat-user-messages\">
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:15</span>
                                                <span class=\"body\"> When could you send me the report ? </span>
                                            </div>
                                        </div>
                                        <div class=\"post in\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                <span class=\"datetime\">20:15</span>
                                                <span class=\"body\"> Its almost done. I will be sending it shortly </span>
                                            </div>
                                        </div>
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:15</span>
                                                <span class=\"body\"> Alright. Thanks! :) </span>
                                            </div>
                                        </div>
                                        <div class=\"post in\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                <span class=\"datetime\">20:16</span>
                                                <span class=\"body\"> You are most welcome. Sorry for the delay. </span>
                                            </div>
                                        </div>
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:17</span>
                                                <span class=\"body\"> No probs. Just take your time :) </span>
                                            </div>
                                        </div>
                                        <div class=\"post in\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                <span class=\"datetime\">20:40</span>
                                                <span class=\"body\"> Alright. I just emailed it to you. </span>
                                            </div>
                                        </div>
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 710
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:17</span>
                                                <span class=\"body\"> Great! Thanks. Will check it right away. </span>
                                            </div>
                                        </div>
                                        <div class=\"post in\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 719
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout/img/avatar2.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                <span class=\"datetime\">20:40</span>
                                                <span class=\"body\"> Please let me know if you have any comment. </span>
                                            </div>
                                        </div>
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout/img/avatar3.jpg"), "html", null, true);
        echo "\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:17</span>
                                                <span class=\"body\"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"page-quick-sidebar-chat-user-form\">
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Type a message here...\">
                                            <div class=\"input-group-btn\">
                                                <button type=\"button\" class=\"btn green\">
                                                    <i class=\"icon-paper-clip\"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane page-quick-sidebar-alerts\" id=\"quick_sidebar_tab_2\">
                            <div class=\"page-quick-sidebar-alerts-list\">
                                <h3 class=\"list-heading\">General</h3>
                                <ul class=\"feeds list-items\">
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-check\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 4 pending tasks.
                                                        <span class=\"label label-sm label-warning \"> Take action
                                                            <i class=\"fa fa-share\"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> Just now </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bar-chart-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> Finance Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-danger\">
                                                        <i class=\"fa fa-user\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> New order received with
                                                        <span class=\"label label-sm label-success\"> Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 30 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-success\">
                                                        <i class=\"fa fa-user\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-bell-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                        <span class=\"label label-sm label-warning\"> Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 2 hours </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-default\">
                                                            <i class=\"fa fa-briefcase\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> IPO Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <h3 class=\"list-heading\">System</h3>
                                <ul class=\"feeds list-items\">
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-check\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 4 pending tasks.
                                                        <span class=\"label label-sm label-warning \"> Take action
                                                            <i class=\"fa fa-share\"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> Just now </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-danger\">
                                                            <i class=\"fa fa-bar-chart-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> Finance Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-default\">
                                                        <i class=\"fa fa-user\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> New order received with
                                                        <span class=\"label label-sm label-success\"> Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 30 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-success\">
                                                        <i class=\"fa fa-user\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-warning\">
                                                        <i class=\"fa fa-bell-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                        <span class=\"label label-sm label-default \"> Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 2 hours </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-info\">
                                                            <i class=\"fa fa-briefcase\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> IPO Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"tab-pane page-quick-sidebar-settings\" id=\"quick_sidebar_tab_3\">
                            <div class=\"page-quick-sidebar-settings-list\">
                                <h3 class=\"list-heading\">General Settings</h3>
                                <ul class=\"list-items borderless\">
                                    <li> Enable Notifications
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Allow Tracking
                                        <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"info\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Log Errors
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Auto Sumbit Issues
                                        <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Enable SMS Alerts
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                </ul>
                                <h3 class=\"list-heading\">System Settings</h3>
                                <ul class=\"list-items borderless\">
                                    <li> Security Level
                                        <select class=\"form-control input-inline input-sm input-small\">
                                            <option value=\"1\">Normal</option>
                                            <option value=\"2\" selected>Medium</option>
                                            <option value=\"e\">High</option>
                                        </select>
                                    </li>
                                    <li> Failed Email Attempts
                                        <input class=\"form-control input-inline input-sm input-small\" value=\"5\" /> </li>
                                    <li> Secondary SMTP Port
                                        <input class=\"form-control input-inline input-sm input-small\" value=\"3560\" /> </li>
                                    <li> Notify On System Error
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Notify On SMTP Error
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                </ul>
                                <div class=\"inner-content\">
                                    <button class=\"btn btn-success\">
                                        <i class=\"icon-settings\"></i> Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class=\"page-footer\">
            <div class=\"page-footer-inner\"> 2016 &copy; Metronic Theme By
                <a target=\"_blank\" href=\"http://keenthemes.com\">Keenthemes</a> &nbsp;|&nbsp;
                <a href=\"http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes\" title=\"Purchase Metronic just for 27\$ and get lifetime updates for free\" target=\"_blank\">Purchase Metronic!</a>
                <div class=\"scroll-to-top\">
                    <i class=\"icon-arrow-up\"></i>
                </div>
            </div>
        </div>
        <!-- END FOOTER -->

        <!-- BEGIN CORE PLUGINS -->
        <script src=\"";
        // line 1080
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1081
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1082
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1083
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1084
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js "), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1085
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"";
        // line 1088
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1089
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/scripts/common.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"";
        // line 1092
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout2/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1093
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/layout2/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1094
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1095
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layouts/global/scripts/quick-nav.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN BUTTON PROGRESS -->
        <script src=\"";
        // line 1098
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/ladda/spin.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1099
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/ladda/ladda.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/scripts/ui-buttons.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END BUTTON PROGRESS -->
        <!-- BEGIN TOASTR NOTICATION -->
        <script src=\"";
        // line 1103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-toastr/toastr.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/scripts/ui-toastr.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- BEGIN DATATABLES -->
        <script src=\"";
        // line 1106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!--<script src=\"https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
        <script src=\"https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>-->
        <script src=\"";
        // line 1109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 1112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/scripts/table-datatables-fixedheader.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- END DATATABLES-->

        <!-- CHECKBOX RANGE -->
        <script src=\"";
        // line 1116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/checkboxes/jquery.checkboxes-1.2.0.js"), "html", null, true);
        echo "\"></script>
        <!-- END CHECKBOX -->
        <script>
            Ladda.bind( '.spinnerBtn' );
        </script>
        ";
        // line 1121
        $this->displayBlock('javascripts', $context, $blocks);
        // line 1122
        echo "    </body>
</html>
";
        
        $__internal_37a75d98e6371f6be53a6987a274ccf76e3616ac72818029ed1c74dc89bd00f5->leave($__internal_37a75d98e6371f6be53a6987a274ccf76e3616ac72818029ed1c74dc89bd00f5_prof);

        
        $__internal_b7ca03ead689e4c7da77724541df5dc7900e689027d034c72e051555fb85768d->leave($__internal_b7ca03ead689e4c7da77724541df5dc7900e689027d034c72e051555fb85768d_prof);

    }

    // line 43
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff0613acbb71fcdd72dbd6a43357a31cca96f769e7a7239682b0b615edd80265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0613acbb71fcdd72dbd6a43357a31cca96f769e7a7239682b0b615edd80265->enter($__internal_ff0613acbb71fcdd72dbd6a43357a31cca96f769e7a7239682b0b615edd80265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bd0718ec9c70b4cac122f9d13545c70eccc6e0ba235202a4596c9b6442b4c77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0718ec9c70b4cac122f9d13545c70eccc6e0ba235202a4596c9b6442b4c77b->enter($__internal_bd0718ec9c70b4cac122f9d13545c70eccc6e0ba235202a4596c9b6442b4c77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bd0718ec9c70b4cac122f9d13545c70eccc6e0ba235202a4596c9b6442b4c77b->leave($__internal_bd0718ec9c70b4cac122f9d13545c70eccc6e0ba235202a4596c9b6442b4c77b_prof);

        
        $__internal_ff0613acbb71fcdd72dbd6a43357a31cca96f769e7a7239682b0b615edd80265->leave($__internal_ff0613acbb71fcdd72dbd6a43357a31cca96f769e7a7239682b0b615edd80265_prof);

    }

    // line 486
    public function block_nav($context, array $blocks = array())
    {
        $__internal_3a273f5dbe8d3f1db46e811bbae47bf0dbc451687f9828f6cc7d6e7e4bd20ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a273f5dbe8d3f1db46e811bbae47bf0dbc451687f9828f6cc7d6e7e4bd20ed4->enter($__internal_3a273f5dbe8d3f1db46e811bbae47bf0dbc451687f9828f6cc7d6e7e4bd20ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_bce98b062fa9b556cc0eb11e0fdff7fd6d353d441329346c36a300ab15d1c3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce98b062fa9b556cc0eb11e0fdff7fd6d353d441329346c36a300ab15d1c3e8->enter($__internal_bce98b062fa9b556cc0eb11e0fdff7fd6d353d441329346c36a300ab15d1c3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 487
        echo "                        ";
        
        $__internal_bce98b062fa9b556cc0eb11e0fdff7fd6d353d441329346c36a300ab15d1c3e8->leave($__internal_bce98b062fa9b556cc0eb11e0fdff7fd6d353d441329346c36a300ab15d1c3e8_prof);

        
        $__internal_3a273f5dbe8d3f1db46e811bbae47bf0dbc451687f9828f6cc7d6e7e4bd20ed4->leave($__internal_3a273f5dbe8d3f1db46e811bbae47bf0dbc451687f9828f6cc7d6e7e4bd20ed4_prof);

    }

    // line 498
    public function block_body($context, array $blocks = array())
    {
        $__internal_989592fd8d95baddd114872695bfb982b034d9c4aa4a3b4527e9c65e749febc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989592fd8d95baddd114872695bfb982b034d9c4aa4a3b4527e9c65e749febc8->enter($__internal_989592fd8d95baddd114872695bfb982b034d9c4aa4a3b4527e9c65e749febc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e93591d3f02c2893392e3ff532266bb1147d34486763c3bdfc530256806b5644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93591d3f02c2893392e3ff532266bb1147d34486763c3bdfc530256806b5644->enter($__internal_e93591d3f02c2893392e3ff532266bb1147d34486763c3bdfc530256806b5644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e93591d3f02c2893392e3ff532266bb1147d34486763c3bdfc530256806b5644->leave($__internal_e93591d3f02c2893392e3ff532266bb1147d34486763c3bdfc530256806b5644_prof);

        
        $__internal_989592fd8d95baddd114872695bfb982b034d9c4aa4a3b4527e9c65e749febc8->leave($__internal_989592fd8d95baddd114872695bfb982b034d9c4aa4a3b4527e9c65e749febc8_prof);

    }

    // line 1121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e5476707ee2e2e38b7ff80dd83617c88ce3e9d0158ef89a9044b007bc2a42b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5476707ee2e2e38b7ff80dd83617c88ce3e9d0158ef89a9044b007bc2a42b9->enter($__internal_7e5476707ee2e2e38b7ff80dd83617c88ce3e9d0158ef89a9044b007bc2a42b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8c23e91238dda0036fe8c221176f1e441c627f7989d1a0b71c49de7b11e4cfd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c23e91238dda0036fe8c221176f1e441c627f7989d1a0b71c49de7b11e4cfd2->enter($__internal_8c23e91238dda0036fe8c221176f1e441c627f7989d1a0b71c49de7b11e4cfd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8c23e91238dda0036fe8c221176f1e441c627f7989d1a0b71c49de7b11e4cfd2->leave($__internal_8c23e91238dda0036fe8c221176f1e441c627f7989d1a0b71c49de7b11e4cfd2_prof);

        
        $__internal_7e5476707ee2e2e38b7ff80dd83617c88ce3e9d0158ef89a9044b007bc2a42b9->leave($__internal_7e5476707ee2e2e38b7ff80dd83617c88ce3e9d0158ef89a9044b007bc2a42b9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1415 => 1121,  1398 => 498,  1388 => 487,  1379 => 486,  1362 => 43,  1350 => 1122,  1348 => 1121,  1340 => 1116,  1333 => 1112,  1329 => 1111,  1325 => 1110,  1321 => 1109,  1315 => 1106,  1310 => 1104,  1306 => 1103,  1300 => 1100,  1296 => 1099,  1292 => 1098,  1286 => 1095,  1282 => 1094,  1278 => 1093,  1274 => 1092,  1268 => 1089,  1264 => 1088,  1258 => 1085,  1254 => 1084,  1250 => 1083,  1246 => 1082,  1242 => 1081,  1238 => 1080,  883 => 728,  871 => 719,  859 => 710,  847 => 701,  835 => 692,  823 => 683,  811 => 674,  799 => 665,  787 => 656,  767 => 639,  754 => 629,  744 => 622,  730 => 611,  719 => 603,  705 => 592,  689 => 579,  679 => 572,  666 => 562,  656 => 555,  598 => 499,  596 => 498,  584 => 488,  582 => 486,  507 => 414,  376 => 286,  362 => 275,  348 => 264,  334 => 253,  320 => 242,  130 => 55,  117 => 45,  114 => 44,  112 => 43,  105 => 39,  98 => 35,  91 => 31,  87 => 30,  83 => 29,  77 => 26,  73 => 25,  65 => 20,  61 => 19,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  29 => 1,);
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
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>Mobrevmedia Tools</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
        <meta content=\"Preview page of Creatunity for statistics, charts, recent events and reports\" name=\"description\" />
        <meta content=\"\" name=\"author\" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN DATATABLES -->
        <link href=\"{{ asset('assets/global/plugins/datatables/datatables.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

        <!-- END DATATABLES STYLES -->

        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=\"{{ asset('assets/global/css/components-rounded.min.css') }}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
        <link href=\"{{ asset('assets/global/css/plugins.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href=\"{{ asset('assets/layouts/layout2/css/layout.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('assets/layouts/layout2/css/themes/blue.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\" />
        <link href=\"{{ asset('assets/layouts/layout2/css/custom.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END THEME LAYOUT STYLES -->

        <!-- BEGIN BUTTONS PROGRESS -->
        <link href=\"{{ asset('assets/global/plugins/ladda/ladda-themeless.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END BUTTONS PROGRESS -->

        <!-- BEGIN TOASTR NOTIFICATION -->
        <link href=\"{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- END TOASTR NOTIFICATION STYLES -->


        {% block stylesheets %}{% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body class=\"page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid\">
        <!-- BEGIN HEADER -->
        <div class=\"page-header navbar navbar-fixed-top\">
            <!-- BEGIN HEADER INNER -->
            <div class=\"page-header-inner \">
                <!-- BEGIN LOGO -->
                <div class=\"page-logo\">
                    <a href=\"/\">
                        <img src=\"{{ asset('assets/layouts/layout2/img/logo-default.png') }}\" alt=\"logo\" class=\"logo-default\" /> </a>
                    <div class=\"menu-toggler sidebar-toggler\">
                        <!-- DOC: Remove the above \"hide\" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
                <!-- DOC: Remove \"hide\" class to enable the page header actions -->
                <div class=\"page-actions\">
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-circle btn-outline red dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-plus\"></i>&nbsp;
                            <span class=\"hidden-sm hidden-xs\">New&nbsp;</span>&nbsp;
                            <i class=\"fa fa-angle-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"icon-docs\"></i> New Post </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"icon-tag\"></i> New Comment </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"icon-share\"></i> Share </a>
                            </li>
                            <li class=\"divider\"> </li>
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"icon-flag\"></i> Comments
                                    <span class=\"badge badge-success\">4</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"javascript:;\">
                                    <i class=\"icon-users\"></i> Feedbacks
                                    <span class=\"badge badge-danger\">2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END PAGE ACTIONS -->
                <!-- BEGIN PAGE TOP -->
                <div class=\"page-top\">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <!-- DOC: Apply \"search-form-expanded\" right after the \"search-form\" class to have half expanded search box -->
                    <form class=\"search-form search-form-expanded\" action=\"page_general_search_3.html\" method=\"GET\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" name=\"query\">
                                <span class=\"input-group-btn\">
                                    <a href=\"javascript:;\" class=\"btn submit\">
                                        <i class=\"icon-magnifier\"></i>
                                    </a>
                                </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class=\"top-menu\">
                        <ul class=\"nav navbar-nav pull-right\">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class below \"dropdown-extended\" to change the dropdown styte -->
                            <!-- DOC: Apply \"dropdown-hoverable\" class after below \"dropdown\" and remove data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove \"dropdown-hoverable\" and add data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to the below A element with dropdown-toggle class -->
                            <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-bell\"></i>
                                    <span class=\"badge badge-default\"> 7 </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"external\">
                                        <h3>
                                            <span class=\"bold\">12 pending</span> notifications</h3>
                                        <a href=\"page_user_profile_1.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 250px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">just now</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-success\">
                                                                <i class=\"fa fa-plus\"></i>
                                                            </span> New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">3 mins</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">10 mins</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-warning\">
                                                                <i class=\"fa fa-bell-o\"></i>
                                                            </span> Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">14 hrs</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-info\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </span> Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">2 days</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">3 days</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">4 days</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-warning\">
                                                                <i class=\"fa fa-bell-o\"></i>
                                                            </span> Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">5 days</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-info\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </span> System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <span class=\"time\">9 days</span>
                                                        <span class=\"details\">
                                                            <span class=\"label label-sm label-icon label-danger\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </span> Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-envelope-open\"></i>
                                    <span class=\"badge badge-default\"> 4 </span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"external\">
                                        <h3>You have
                                            <span class=\"bold\">7 New</span> Messages</h3>
                                        <a href=\"app_inbox.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"#\">
                                                        <span class=\"photo\">
                                                            <img src=\"{{ asset('') }}assets/layouts/layout3/img/avatar2.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                            <span class=\"from\"> Lisa Wong </span>
                                                            <span class=\"time\">Just Now </span>
                                                        </span>
                                                    <span class=\"message\"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                        <span class=\"photo\">
                                                            <img src=\"{{ asset('') }}assets/layouts/layout3/img/avatar3.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                            <span class=\"from\"> Richard Doe </span>
                                                            <span class=\"time\">16 mins </span>
                                                        </span>
                                                    <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                        <span class=\"photo\">
                                                            <img src=\"{{ asset('') }}assets/layouts/layout3/img/avatar1.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                            <span class=\"from\"> Bob Nilson </span>
                                                            <span class=\"time\">2 hrs </span>
                                                        </span>
                                                    <span class=\"message\"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                        <span class=\"photo\">
                                                            <img src=\"{{ asset('') }}assets/layouts/layout3/img/avatar2.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                            <span class=\"from\"> Lisa Wong </span>
                                                            <span class=\"time\">40 mins </span>
                                                        </span>
                                                    <span class=\"message\"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                        <span class=\"photo\">
                                                            <img src=\"{{ asset('') }}assets/layouts/layout3/img/avatar3.jpg\" class=\"img-circle\" alt=\"\"> </span>
                                                        <span class=\"subject\">
                                                            <span class=\"from\"> Richard Doe </span>
                                                            <span class=\"time\">46 mins </span>
                                                        </span>
                                                    <span class=\"message\"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-extended dropdown-tasks\" id=\"header_task_bar\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <i class=\"icon-calendar\"></i>
                                    <span class=\"badge badge-default\"> 3 </span>
                                </a>
                                <ul class=\"dropdown-menu extended tasks\">
                                    <li class=\"external\">
                                        <h3>You have
                                            <span class=\"bold\">12 pending</span> tasks</h3>
                                        <a href=\"app_todo.html\">view all</a>
                                    </li>
                                    <li>
                                        <ul class=\"dropdown-menu-list scroller\" style=\"height: 275px;\" data-handle-color=\"#637283\">
                                            <li>
                                                <a href=\"javascript:;\">
                                                        <span class=\"task\">
                                                            <span class=\"desc\">New release v1.2 </span>
                                                            <span class=\"percent\">30%</span>
                                                        </span>
                                                        <span class=\"progress\">
                                                            <span style=\"width: 40%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">40% Complete</span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                        <span class=\"task\">
                                                            <span class=\"desc\">Application deployment</span>
                                                            <span class=\"percent\">65%</span>
                                                        </span>
                                                        <span class=\"progress\">
                                                            <span style=\"width: 65%;\" class=\"progress-bar progress-bar-danger\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">65% Complete</span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                        <span class=\"task\">
                                                            <span class=\"desc\">Mobile app release</span>
                                                            <span class=\"percent\">98%</span>
                                                        </span>
                                                        <span class=\"progress\">
                                                            <span style=\"width: 98%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"98\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">98% Complete</span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                        <span class=\"task\">
                                                            <span class=\"desc\">Database migration</span>
                                                            <span class=\"percent\">10%</span>
                                                        </span>
                                                        <span class=\"progress\">
                                                            <span style=\"width: 10%;\" class=\"progress-bar progress-bar-warning\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">10% Complete</span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                        <span class=\"task\">
                                                            <span class=\"desc\">Web server upgrade</span>
                                                            <span class=\"percent\">58%</span>
                                                        </span>
                                                        <span class=\"progress\">
                                                            <span style=\"width: 58%;\" class=\"progress-bar progress-bar-info\" aria-valuenow=\"58\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">58% Complete</span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                        <span class=\"task\">
                                                            <span class=\"desc\">Mobile development</span>
                                                            <span class=\"percent\">85%</span>
                                                        </span>
                                                        <span class=\"progress\">
                                                            <span style=\"width: 85%;\" class=\"progress-bar progress-bar-success\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">85% Complete</span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                        <span class=\"task\">
                                                            <span class=\"desc\">New UI release</span>
                                                            <span class=\"percent\">38%</span>
                                                        </span>
                                                        <span class=\"progress progress-striped\">
                                                            <span style=\"width: 38%;\" class=\"progress-bar progress-bar-important\" aria-valuenow=\"18\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                <span class=\"sr-only\">38% Complete</span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-user\">
                                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                                    <img alt=\"\" class=\"img-circle\" src=\"{{ asset('') }}assets/layouts/layout2/img/avatar3_small.jpg\" />
                                    <span class=\"username username-hide-on-mobile\"> Nick </span>
                                    <i class=\"fa fa-angle-down\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-default\">
                                    <li>
                                        <a href=\"page_user_profile_1.html\">
                                            <i class=\"icon-user\"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href=\"app_calendar.html\">
                                            <i class=\"icon-calendar\"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href=\"app_inbox.html\">
                                            <i class=\"icon-envelope-open\"></i> My Inbox
                                            <span class=\"badge badge-danger\"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"app_todo_2.html\">
                                            <i class=\"icon-rocket\"></i> My Tasks
                                            <span class=\"badge badge-success\"> 7 </span>
                                        </a>
                                    </li>
                                    <li class=\"divider\"> </li>
                                    <li>
                                        <a href=\"page_user_lock_1.html\">
                                            <i class=\"icon-lock\"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href=\"/user/logout\">
                                            <i class=\"icon-key\"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                            <li class=\"dropdown dropdown-extended quick-sidebar-toggler\">
                                <span class=\"sr-only\">Toggle Quick Sidebar</span>
                                <i class=\"icon-logout\"></i>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class=\"clearfix\"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class=\"page-container\">
            <!-- BEGIN SIDEBAR -->
            <div class=\"page-sidebar-wrapper\">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                <div class=\"page-sidebar navbar-collapse collapse\">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply \"page-sidebar-menu-light\" class right after \"page-sidebar-menu\" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply \"page-sidebar-menu-hover-submenu\" class right after \"page-sidebar-menu\" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply \"page-sidebar-menu-closed\" class right after \"page-sidebar-menu\" to collapse(\"page-sidebar-closed\" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll=\"false\" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand=\"true\" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed=\"200\" to adjust the sub menu slide up/down speed -->
                    <ul class=\"page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu \" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\">
                        {% block nav %}
                        {% endblock %}
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class=\"page-content-wrapper\">
                <!-- BEGIN CONTENT BODY -->
                <div class=\"page-content\">
                {% block body %}{% endblock %}
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT BODY -->
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href=\"javascript:;\" class=\"page-quick-sidebar-toggler\">
                <i class=\"icon-login\"></i>
            </a>
            <div class=\"page-quick-sidebar-wrapper\" data-close-on-body-click=\"false\">
                <div class=\"page-quick-sidebar\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\">
                            <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_1\" data-toggle=\"tab\"> Users
                                <span class=\"badge badge-danger\">2</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_2\" data-toggle=\"tab\"> Alerts
                                <span class=\"badge badge-success\">7</span>
                            </a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> More
                                <i class=\"fa fa-angle-down\"></i>
                            </a>
                            <ul class=\"dropdown-menu pull-right\">
                                <li>
                                    <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                        <i class=\"icon-bell\"></i> Alerts </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                        <i class=\"icon-info\"></i> Notifications </a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                        <i class=\"icon-speech\"></i> Activities </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"javascript:;\" data-target=\"#quick_sidebar_tab_3\" data-toggle=\"tab\">
                                        <i class=\"icon-settings\"></i> Settings </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active page-quick-sidebar-chat\" id=\"quick_sidebar_tab_1\">
                            <div class=\"page-quick-sidebar-chat-users\" data-rail-color=\"#ddd\" data-wrapper-class=\"page-quick-sidebar-list\">
                                <h3 class=\"list-heading\">Staff</h3>
                                <ul class=\"media-list list-items\">
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-success\">8</span>
                                        </div>
                                        <img class=\"media-object\" src=\"{{ asset('') }}assets/layouts/layout/img/avatar3.jpg\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Bob Nilson</h4>
                                            <div class=\"media-heading-sub\"> Project Manager </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <img class=\"media-object\" src=\"{{ asset('') }}assets/layouts/layout/img/avatar1.jpg\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Nick Larson</h4>
                                            <div class=\"media-heading-sub\"> Art Director </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-danger\">3</span>
                                        </div>
                                        <img class=\"media-object\" src=\"{{ asset('') }}assets/layouts/layout/img/avatar4.jpg\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Deon Hubert</h4>
                                            <div class=\"media-heading-sub\"> CTO </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <img class=\"media-object\" src=\"{{ asset('') }}assets/layouts/layout/img/avatar2.jpg\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Ella Wong</h4>
                                            <div class=\"media-heading-sub\"> CEO </div>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class=\"list-heading\">Customers</h3>
                                <ul class=\"media-list list-items\">
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-warning\">2</span>
                                        </div>
                                        <img class=\"media-object\" src=\"{{ asset('') }}assets/layouts/layout/img/avatar6.jpg\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Lara Kunis</h4>
                                            <div class=\"media-heading-sub\"> CEO, Loop Inc </div>
                                            <div class=\"media-heading-small\"> Last seen 03:10 AM </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"label label-sm label-success\">new</span>
                                        </div>
                                        <img class=\"media-object\" src=\"{{ asset('') }}assets/layouts/layout/img/avatar7.jpg\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Ernie Kyllonen</h4>
                                            <div class=\"media-heading-sub\"> Project Manager,
                                                <br> SmartBizz PTL </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <img class=\"media-object\" src=\"{{ asset('') }}assets/layouts/layout/img/avatar8.jpg\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Lisa Stone</h4>
                                            <div class=\"media-heading-sub\"> CTO, Keort Inc </div>
                                            <div class=\"media-heading-small\"> Last seen 13:10 PM </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-success\">7</span>
                                        </div>
                                        <img class=\"media-object\" src=\"{{ asset('assets/layouts/layout/img/avatar9.jpg') }}\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Deon Portalatin</h4>
                                            <div class=\"media-heading-sub\"> CFO, H&D LTD </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <img class=\"media-object\" src=\"{{ asset('assets/layouts/layout/img/avatar10.jpg') }}\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Irina Savikova</h4>
                                            <div class=\"media-heading-sub\"> CEO, Tizda Motors Inc </div>
                                        </div>
                                    </li>
                                    <li class=\"media\">
                                        <div class=\"media-status\">
                                            <span class=\"badge badge-danger\">4</span>
                                        </div>
                                        <img class=\"media-object\" src=\"{{ asset('assets/layouts/layout/img/avatar11.jpg') }}\" alt=\"...\">
                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">Maria Gomez</h4>
                                            <div class=\"media-heading-sub\"> Manager, Infomatic Inc </div>
                                            <div class=\"media-heading-small\"> Last seen 03:10 AM </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"page-quick-sidebar-item\">
                                <div class=\"page-quick-sidebar-chat-user\">
                                    <div class=\"page-quick-sidebar-nav\">
                                        <a href=\"javascript:;\" class=\"page-quick-sidebar-back-to-list\">
                                            <i class=\"icon-arrow-left\"></i>Back</a>
                                    </div>
                                    <div class=\"page-quick-sidebar-chat-user-messages\">
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"{{ asset('assets/layouts/layout/img/avatar3.jpg') }}\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:15</span>
                                                <span class=\"body\"> When could you send me the report ? </span>
                                            </div>
                                        </div>
                                        <div class=\"post in\">
                                            <img class=\"avatar\" alt=\"\" src=\"{{ asset('assets/layouts/layout/img/avatar2.jpg') }}\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                <span class=\"datetime\">20:15</span>
                                                <span class=\"body\"> Its almost done. I will be sending it shortly </span>
                                            </div>
                                        </div>
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"{{ asset('assets/layouts/layout/img/avatar3.jpg') }}\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:15</span>
                                                <span class=\"body\"> Alright. Thanks! :) </span>
                                            </div>
                                        </div>
                                        <div class=\"post in\">
                                            <img class=\"avatar\" alt=\"\" src=\"{{ asset('assets/layouts/layout/img/avatar2.jpg') }}\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                <span class=\"datetime\">20:16</span>
                                                <span class=\"body\"> You are most welcome. Sorry for the delay. </span>
                                            </div>
                                        </div>
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"{{ asset('assets/layouts/layout/img/avatar3.jpg') }}\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:17</span>
                                                <span class=\"body\"> No probs. Just take your time :) </span>
                                            </div>
                                        </div>
                                        <div class=\"post in\">
                                            <img class=\"avatar\" alt=\"\" src=\"{{ asset('assets/layouts/layout/img/avatar2.jpg') }}\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                <span class=\"datetime\">20:40</span>
                                                <span class=\"body\"> Alright. I just emailed it to you. </span>
                                            </div>
                                        </div>
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"{{ asset('assets/layouts/layout/img/avatar3.jpg') }}\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:17</span>
                                                <span class=\"body\"> Great! Thanks. Will check it right away. </span>
                                            </div>
                                        </div>
                                        <div class=\"post in\">
                                            <img class=\"avatar\" alt=\"\" src=\"{{ asset('assets/layouts/layout/img/avatar2.jpg') }}\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Ella Wong</a>
                                                <span class=\"datetime\">20:40</span>
                                                <span class=\"body\"> Please let me know if you have any comment. </span>
                                            </div>
                                        </div>
                                        <div class=\"post out\">
                                            <img class=\"avatar\" alt=\"\" src=\"{{ asset('assets/layouts/layout/img/avatar3.jpg') }}\" />
                                            <div class=\"message\">
                                                <span class=\"arrow\"></span>
                                                <a href=\"javascript:;\" class=\"name\">Bob Nilson</a>
                                                <span class=\"datetime\">20:17</span>
                                                <span class=\"body\"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"page-quick-sidebar-chat-user-form\">
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Type a message here...\">
                                            <div class=\"input-group-btn\">
                                                <button type=\"button\" class=\"btn green\">
                                                    <i class=\"icon-paper-clip\"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane page-quick-sidebar-alerts\" id=\"quick_sidebar_tab_2\">
                            <div class=\"page-quick-sidebar-alerts-list\">
                                <h3 class=\"list-heading\">General</h3>
                                <ul class=\"feeds list-items\">
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-check\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 4 pending tasks.
                                                        <span class=\"label label-sm label-warning \"> Take action
                                                            <i class=\"fa fa-share\"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> Just now </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-success\">
                                                            <i class=\"fa fa-bar-chart-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> Finance Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-danger\">
                                                        <i class=\"fa fa-user\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> New order received with
                                                        <span class=\"label label-sm label-success\"> Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 30 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-success\">
                                                        <i class=\"fa fa-user\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-bell-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                        <span class=\"label label-sm label-warning\"> Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 2 hours </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-default\">
                                                            <i class=\"fa fa-briefcase\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> IPO Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <h3 class=\"list-heading\">System</h3>
                                <ul class=\"feeds list-items\">
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-check\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 4 pending tasks.
                                                        <span class=\"label label-sm label-warning \"> Take action
                                                            <i class=\"fa fa-share\"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> Just now </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-danger\">
                                                            <i class=\"fa fa-bar-chart-o\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> Finance Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-default\">
                                                        <i class=\"fa fa-user\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-info\">
                                                        <i class=\"fa fa-shopping-cart\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> New order received with
                                                        <span class=\"label label-sm label-success\"> Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 30 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-success\">
                                                        <i class=\"fa fa-user\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> You have 5 pending membership that requires a quick review. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 24 mins </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col1\">
                                            <div class=\"cont\">
                                                <div class=\"cont-col1\">
                                                    <div class=\"label label-sm label-warning\">
                                                        <i class=\"fa fa-bell-o\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"cont-col2\">
                                                    <div class=\"desc\"> Web server hardware needs to be upgraded.
                                                        <span class=\"label label-sm label-default \"> Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col2\">
                                            <div class=\"date\"> 2 hours </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <div class=\"col1\">
                                                <div class=\"cont\">
                                                    <div class=\"cont-col1\">
                                                        <div class=\"label label-sm label-info\">
                                                            <i class=\"fa fa-briefcase\"></i>
                                                        </div>
                                                    </div>
                                                    <div class=\"cont-col2\">
                                                        <div class=\"desc\"> IPO Report for year 2013 has been released. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col2\">
                                                <div class=\"date\"> 20 mins </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"tab-pane page-quick-sidebar-settings\" id=\"quick_sidebar_tab_3\">
                            <div class=\"page-quick-sidebar-settings-list\">
                                <h3 class=\"list-heading\">General Settings</h3>
                                <ul class=\"list-items borderless\">
                                    <li> Enable Notifications
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Allow Tracking
                                        <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"info\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Log Errors
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Auto Sumbit Issues
                                        <input type=\"checkbox\" class=\"make-switch\" data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Enable SMS Alerts
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"success\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                </ul>
                                <h3 class=\"list-heading\">System Settings</h3>
                                <ul class=\"list-items borderless\">
                                    <li> Security Level
                                        <select class=\"form-control input-inline input-sm input-small\">
                                            <option value=\"1\">Normal</option>
                                            <option value=\"2\" selected>Medium</option>
                                            <option value=\"e\">High</option>
                                        </select>
                                    </li>
                                    <li> Failed Email Attempts
                                        <input class=\"form-control input-inline input-sm input-small\" value=\"5\" /> </li>
                                    <li> Secondary SMTP Port
                                        <input class=\"form-control input-inline input-sm input-small\" value=\"3560\" /> </li>
                                    <li> Notify On System Error
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"danger\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                    <li> Notify On SMTP Error
                                        <input type=\"checkbox\" class=\"make-switch\" checked data-size=\"small\" data-on-color=\"warning\" data-on-text=\"ON\" data-off-color=\"default\" data-off-text=\"OFF\"> </li>
                                </ul>
                                <div class=\"inner-content\">
                                    <button class=\"btn btn-success\">
                                        <i class=\"icon-settings\"></i> Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class=\"page-footer\">
            <div class=\"page-footer-inner\"> 2016 &copy; Metronic Theme By
                <a target=\"_blank\" href=\"http://keenthemes.com\">Keenthemes</a> &nbsp;|&nbsp;
                <a href=\"http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes\" title=\"Purchase Metronic just for 27\$ and get lifetime updates for free\" target=\"_blank\">Purchase Metronic!</a>
                <div class=\"scroll-to-top\">
                    <i class=\"icon-arrow-up\"></i>
                </div>
            </div>
        </div>
        <!-- END FOOTER -->

        <!-- BEGIN CORE PLUGINS -->
        <script src=\"{{ asset('assets/global/plugins/jquery.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/js.cookie.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/jquery.blockui.min.js ') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=\"{{ asset('assets/global/scripts/app.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/scripts/common.js') }}\" type=\"text/javascript\"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src=\"{{ asset('assets/layouts/layout2/scripts/layout.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/layouts/layout2/scripts/demo.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/layouts/global/scripts/quick-sidebar.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/layouts/global/scripts/quick-nav.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <!-- BEGIN BUTTON PROGRESS -->
        <script src=\"{{ asset('assets/global/plugins/ladda/spin.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/ladda/ladda.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/pages/scripts/ui-buttons.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END BUTTON PROGRESS -->
        <!-- BEGIN TOASTR NOTICATION -->
        <script src=\"{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/pages/scripts/ui-toastr.min.js') }}\" type=\"text/javascript\"></script>
        <!-- BEGIN DATATABLES -->
        <script src=\"{{ asset('assets/global/scripts/datatable.js') }}\" type=\"text/javascript\"></script>
        <!--<script src=\"https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
        <script src=\"https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>-->
        <script src=\"{{ asset('assets/global/plugins/datatables/datatables.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/pages/scripts/table-datatables-fixedheader.min.js') }}\" type=\"text/javascript\"></script>
        <!-- END DATATABLES-->

        <!-- CHECKBOX RANGE -->
        <script src=\"{{ asset('assets/global/plugins/checkboxes/jquery.checkboxes-1.2.0.js') }}\"></script>
        <!-- END CHECKBOX -->
        <script>
            Ladda.bind( '.spinnerBtn' );
        </script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app\\Resources\\views\\base.html.twig");
    }
}
