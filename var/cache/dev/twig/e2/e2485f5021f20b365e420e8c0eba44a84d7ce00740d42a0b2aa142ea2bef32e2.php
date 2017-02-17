<?php

/* default/index.html.twig */
class __TwigTemplate_355644dd551407ce59f1c8798b9c19dc6c59d2dcabb7875c60e99d8e0aa7a879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_025e69d23835f25a1f9072d142b9787c1e568c3dd3f50815f21b05fe33ab070c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025e69d23835f25a1f9072d142b9787c1e568c3dd3f50815f21b05fe33ab070c->enter($__internal_025e69d23835f25a1f9072d142b9787c1e568c3dd3f50815f21b05fe33ab070c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_f1508d433548eb1084b997785d8232995fd5ea7cac543c849f5eb6b2fe06d53e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1508d433548eb1084b997785d8232995fd5ea7cac543c849f5eb6b2fe06d53e->enter($__internal_f1508d433548eb1084b997785d8232995fd5ea7cac543c849f5eb6b2fe06d53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_025e69d23835f25a1f9072d142b9787c1e568c3dd3f50815f21b05fe33ab070c->leave($__internal_025e69d23835f25a1f9072d142b9787c1e568c3dd3f50815f21b05fe33ab070c_prof);

        
        $__internal_f1508d433548eb1084b997785d8232995fd5ea7cac543c849f5eb6b2fe06d53e->leave($__internal_f1508d433548eb1084b997785d8232995fd5ea7cac543c849f5eb6b2fe06d53e_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_206da1641a4c543d69c30d6a9b0762a7004fc019df087b23957a6622f892da00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_206da1641a4c543d69c30d6a9b0762a7004fc019df087b23957a6622f892da00->enter($__internal_206da1641a4c543d69c30d6a9b0762a7004fc019df087b23957a6622f892da00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8c7668db4ead454966e276f25622b89ca219af85354a083af0de989473731a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7668db4ead454966e276f25622b89ca219af85354a083af0de989473731a33->enter($__internal_8c7668db4ead454966e276f25622b89ca219af85354a083af0de989473731a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/jqvmap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL PLUGINS -->
";
        
        $__internal_8c7668db4ead454966e276f25622b89ca219af85354a083af0de989473731a33->leave($__internal_8c7668db4ead454966e276f25622b89ca219af85354a083af0de989473731a33_prof);

        
        $__internal_206da1641a4c543d69c30d6a9b0762a7004fc019df087b23957a6622f892da00->leave($__internal_206da1641a4c543d69c30d6a9b0762a7004fc019df087b23957a6622f892da00_prof);

    }

    // line 10
    public function block_nav($context, array $blocks = array())
    {
        $__internal_0249badaa36fe1320b856efc5ab3df59c87351970b79a22958ff303fc1b97661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0249badaa36fe1320b856efc5ab3df59c87351970b79a22958ff303fc1b97661->enter($__internal_0249badaa36fe1320b856efc5ab3df59c87351970b79a22958ff303fc1b97661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_f39ed34e0fed253ea0267ff1f67f6e0e2bbdf3bbb2022022f8f27663af4d13b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39ed34e0fed253ea0267ff1f67f6e0e2bbdf3bbb2022022f8f27663af4d13b9->enter($__internal_f39ed34e0fed253ea0267ff1f67f6e0e2bbdf3bbb2022022f8f27663af4d13b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 11
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 13
        echo "
";
        
        $__internal_f39ed34e0fed253ea0267ff1f67f6e0e2bbdf3bbb2022022f8f27663af4d13b9->leave($__internal_f39ed34e0fed253ea0267ff1f67f6e0e2bbdf3bbb2022022f8f27663af4d13b9_prof);

        
        $__internal_0249badaa36fe1320b856efc5ab3df59c87351970b79a22958ff303fc1b97661->leave($__internal_0249badaa36fe1320b856efc5ab3df59c87351970b79a22958ff303fc1b97661_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_434cad7712d3513c4453bc44c4437e5d98a396cbebeb55d30364ec25a4ebf4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434cad7712d3513c4453bc44c4437e5d98a396cbebeb55d30364ec25a4ebf4ec->enter($__internal_434cad7712d3513c4453bc44c4437e5d98a396cbebeb55d30364ec25a4ebf4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cb77ba08e2f204fb47e7581c5c8b33c7ff3abeec3d8144057c907d80a3993c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb77ba08e2f204fb47e7581c5c8b33c7ff3abeec3d8144057c907d80a3993c1->enter($__internal_2cb77ba08e2f204fb47e7581c5c8b33c7ff3abeec3d8144057c907d80a3993c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "



            <h1 class=\"page-title\"> Admin Dashboard 2
                <small>statistics, charts, recent events and reports</small>
            </h1>
            <div class=\"page-bar\">
                <ul class=\"page-breadcrumb\">
                    <li>
                        <i class=\"icon-home\"></i>
                        <a href=\"/\">Home</a>
                        <i class=\"fa fa-angle-right\"></i>
                    </li>
                    <li>
                        <span>Dashboard</span>
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
                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"dashboard-stat2 \">
                        <div class=\"display\">
                            <div class=\"number\">
                                <h3 class=\"font-green-sharp\">
                                    <span data-counter=\"counterup\" data-value=\"7800\">0</span>
                                    <small class=\"font-green-sharp\">\$</small>
                                </h3>
                                <small>TOTAL PROFIT</small>
                            </div>
                            <div class=\"icon\">
                                <i class=\"icon-pie-chart\"></i>
                            </div>
                        </div>
                        <div class=\"progress-info\">
                            <div class=\"progress\">
                                        <span style=\"width: 76%;\" class=\"progress-bar progress-bar-success green-sharp\">
                                            <span class=\"sr-only\">76% progress</span>
                                        </span>
                            </div>
                            <div class=\"status\">
                                <div class=\"status-title\"> progress </div>
                                <div class=\"status-number\"> 76% </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"dashboard-stat2 \">
                        <div class=\"display\">
                            <div class=\"number\">
                                <h3 class=\"font-red-haze\">
                                    <span data-counter=\"counterup\" data-value=\"1349\">0</span>
                                </h3>
                                <small>NEW FEEDBACKS</small>
                            </div>
                            <div class=\"icon\">
                                <i class=\"icon-like\"></i>
                            </div>
                        </div>
                        <div class=\"progress-info\">
                            <div class=\"progress\">
                                        <span style=\"width: 85%;\" class=\"progress-bar progress-bar-success red-haze\">
                                            <span class=\"sr-only\">85% change</span>
                                        </span>
                            </div>
                            <div class=\"status\">
                                <div class=\"status-title\"> change </div>
                                <div class=\"status-number\"> 85% </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"dashboard-stat2 \">
                        <div class=\"display\">
                            <div class=\"number\">
                                <h3 class=\"font-blue-sharp\">
                                    <span data-counter=\"counterup\" data-value=\"567\"></span>
                                </h3>
                                <small>NEW ORDERS</small>
                            </div>
                            <div class=\"icon\">
                                <i class=\"icon-basket\"></i>
                            </div>
                        </div>
                        <div class=\"progress-info\">
                            <div class=\"progress\">
                                        <span style=\"width: 45%;\" class=\"progress-bar progress-bar-success blue-sharp\">
                                            <span class=\"sr-only\">45% grow</span>
                                        </span>
                            </div>
                            <div class=\"status\">
                                <div class=\"status-title\"> grow </div>
                                <div class=\"status-number\"> 45% </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"dashboard-stat2 \">
                        <div class=\"display\">
                            <div class=\"number\">
                                <h3 class=\"font-purple-soft\">
                                    <span data-counter=\"counterup\" data-value=\"276\"></span>
                                </h3>
                                <small>NEW USERS</small>
                            </div>
                            <div class=\"icon\">
                                <i class=\"icon-user\"></i>
                            </div>
                        </div>
                        <div class=\"progress-info\">
                            <div class=\"progress\">
                                        <span style=\"width: 57%;\" class=\"progress-bar progress-bar-success purple-soft\">
                                            <span class=\"sr-only\">56% change</span>
                                        </span>
                            </div>
                            <div class=\"status\">
                                <div class=\"status-title\"> change </div>
                                <div class=\"status-number\"> 57% </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <span class=\"caption-subject bold uppercase font-dark\">Revenue</span>
                                <span class=\"caption-helper\">distance stats...</span>
                            </div>
                            <div class=\"actions\">
                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"#\">
                                    <i class=\"icon-cloud-upload\"></i>
                                </a>
                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"#\">
                                    <i class=\"icon-wrench\"></i>
                                </a>
                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"#\">
                                    <i class=\"icon-trash\"></i>
                                </a>
                                <a class=\"btn btn-circle btn-icon-only btn-default fullscreen\" href=\"#\"> </a>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div id=\"dashboard_amchart_1\" class=\"CSSAnimationChart\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption \">
                                <span class=\"caption-subject font-dark bold uppercase\">Finance</span>
                                <span class=\"caption-helper\">distance stats...</span>
                            </div>
                            <div class=\"actions\">
                                <a href=\"#\" class=\"btn btn-circle green btn-outline btn-sm\">
                                    <i class=\"fa fa-pencil\"></i> Export </a>
                                <a href=\"#\" class=\"btn btn-circle green btn-outline btn-sm\">
                                    <i class=\"fa fa-print\"></i> Print </a>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div id=\"dashboard_amchart_3\" class=\"CSSAnimationChart\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title tabbable-line\">
                            <div class=\"caption\">
                                <i class=\"icon-bubbles font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">Comments</span>
                            </div>
                            <ul class=\"nav nav-tabs\">
                                <li class=\"active\">
                                    <a href=\"#portlet_comments_1\" data-toggle=\"tab\"> Pending </a>
                                </li>
                                <li>
                                    <a href=\"#portlet_comments_2\" data-toggle=\"tab\"> Approved </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"portlet_comments_1\">
                                    <!-- BEGIN: Comments -->
                                    <div class=\"mt-comments\">
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar1.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Michael Baker</span>
                                                    <span class=\"mt-comment-date\">26 Feb, 10:30AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-pending\">Pending</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar6.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Larisa Maskalyova</span>
                                                    <span class=\"mt-comment-date\">12 Feb, 08:30AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> It is a long established fact that a reader will be distracted. </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-rejected\">Rejected</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar8.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Natasha Kim</span>
                                                    <span class=\"mt-comment-date\">19 Dec,09:50 AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> The generated Lorem or non-characteristic Ipsum is therefore or non-characteristic. </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-pending\">Pending</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar4.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Sebastian Davidson</span>
                                                    <span class=\"mt-comment-date\">10 Dec, 09:20 AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> The standard chunk of Lorem or non-characteristic Ipsum used since the 1500s or non-characteristic. </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-rejected\">Rejected</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Comments -->
                                </div>
                                <div class=\"tab-pane\" id=\"portlet_comments_2\">
                                    <!-- BEGIN: Comments -->
                                    <div class=\"mt-comments\">
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar4.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Michael Baker</span>
                                                    <span class=\"mt-comment-date\">26 Feb, 10:30AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-approved\">Approved</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar8.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Larisa Maskalyova</span>
                                                    <span class=\"mt-comment-date\">12 Feb, 08:30AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> It is a long established fact that a reader will be distracted by. </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-approved\">Approved</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar6.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Natasha Kim</span>
                                                    <span class=\"mt-comment-date\">19 Dec,09:50 AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-approved\">Approved</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar1.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Sebastian Davidson</span>
                                                    <span class=\"mt-comment-date\">10 Dec, 09:20 AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> The standard chunk of Lorem Ipsum used since the 1500s </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-approved\">Approved</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Comments -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title tabbable-line\">
                            <div class=\"caption\">
                                <i class=\" icon-social-twitter font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">Quick Actions</span>
                            </div>
                            <ul class=\"nav nav-tabs\">
                                <li class=\"active\">
                                    <a href=\"#tab_actions_pending\" data-toggle=\"tab\"> Pending </a>
                                </li>
                                <li>
                                    <a href=\"#tab_actions_completed\" data-toggle=\"tab\"> Completed </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"tab_actions_pending\">
                                    <!-- BEGIN: Actions -->
                                    <div class=\"mt-actions\">
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar10.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\"icon-magnet\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Natasha Kim</span>
                                                            <p class=\"mt-action-desc\">Dummy text of the printing</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-green\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar3.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\" icon-bubbles\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Gavin Bond</span>
                                                            <p class=\"mt-action-desc\">pending for approval</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-red\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar2.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\"icon-call-in\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Diana Berri</span>
                                                            <p class=\"mt-action-desc\">Lorem Ipsum is simply dummy text</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-green\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar7.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\" icon-bell\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">John Clark</span>
                                                            <p class=\"mt-action-desc\">Text of the printing and typesetting industry</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-red\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"";
        // line 585
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar8.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\"icon-magnet\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Donna Clarkson </span>
                                                            <p class=\"mt-action-desc\">Simply dummy text of the printing</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-green\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar9.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\"icon-magnet\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Tom Larson</span>
                                                            <p class=\"mt-action-desc\">Lorem Ipsum is simply dummy text</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-green\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Actions -->
                                </div>
                                <div class=\"tab-pane\" id=\"tab_actions_completed\">
                                    <!-- BEGIN:Completed-->
                                    <div class=\"mt-actions\">
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar1.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\"icon-action-redo\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Frank Cameron</span>
                                                            <p class=\"mt-action-desc\">Lorem Ipsum is simply dummy</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-red\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar8.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\"icon-cup\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Ella Davidson </span>
                                                            <p class=\"mt-action-desc\">Text of the printing and typesetting industry</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-green\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons\">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar5.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\" icon-graduation\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Jason Dickens </span>
                                                            <p class=\"mt-action-desc\">Dummy text of the printing and typesetting industry</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-red\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar2.jpg"), "html", null, true);
        echo "\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\"icon-badge\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Jan Kim</span>
                                                            <p class=\"mt-action-desc\">Lorem Ipsum is simply dummy</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-green\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Completed -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light portlet-fit \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-directions font-green hide\"></i>
                                <span class=\"caption-subject bold font-dark uppercase \"> Activities</span>
                                <span class=\"caption-helper\">Horizontal Timeline</span>
                            </div>
                            <div class=\"actions\">
                                <div class=\"btn-group\">
                                    <a class=\"btn blue btn-outline btn-circle btn-sm\" href=\"javascript:;\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Actions
                                        <i class=\"fa fa-angle-down\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <a href=\"javascript:;\"> Action 1</a>
                                        </li>
                                        <li class=\"divider\"> </li>
                                        <li>
                                            <a href=\"javascript:;\">Action 2</a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">Action 3</a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">Action 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"cd-horizontal-timeline mt-timeline-horizontal\" data-spacing=\"60\">
                                <div class=\"timeline\">
                                    <div class=\"events-wrapper\">
                                        <div class=\"events\">
                                            <ol>
                                                <li>
                                                    <a href=\"#0\" data-date=\"16/01/2014\" class=\"border-after-red bg-after-red selected\">16 Jan</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"28/02/2014\" class=\"border-after-red bg-after-red\">28 Feb</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"20/04/2014\" class=\"border-after-red bg-after-red\">20 Mar</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"20/05/2014\" class=\"border-after-red bg-after-red\">20 May</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"09/07/2014\" class=\"border-after-red bg-after-red\">09 Jul</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"30/08/2014\" class=\"border-after-red bg-after-red\">30 Aug</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"15/09/2014\" class=\"border-after-red bg-after-red\">15 Sep</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"01/11/2014\" class=\"border-after-red bg-after-red\">01 Nov</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"10/12/2014\" class=\"border-after-red bg-after-red\">10 Dec</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"19/01/2015\" class=\"border-after-red bg-after-red\">29 Jan</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"03/03/2015\" class=\"border-after-red bg-after-red\">3 Mar</a>
                                                </li>
                                            </ol>
                                            <span class=\"filling-line bg-red\" aria-hidden=\"true\"></span>
                                        </div>
                                        <!-- .events -->
                                    </div>
                                    <!-- .events-wrapper -->
                                    <ul class=\"cd-timeline-navigation mt-ht-nav-icon\">
                                        <li>
                                            <a href=\"#0\" class=\"prev inactive btn btn-outline red md-skip\">
                                                <i class=\"fa fa-chevron-left\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#0\" class=\"next btn btn-outline red md-skip\">
                                                <i class=\"fa fa-chevron-right\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- .cd-timeline-navigation -->
                                </div>
                                <!-- .timeline -->
                                <div class=\"events-content\">
                                    <ol>
                                        <li class=\"selected\" data-date=\"16/01/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">New User</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 865
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_3.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">16 January 2014 : 7:45 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, mi felis, aliquam at iaculis mi felis, aliquam
                                                    at iaculis finibus eu ex. Integer efficitur tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non est rhoncus volutpat.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle red btn-outline\">Read More</a>
                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-icon-only blue\">
                                                    <i class=\"fa fa-plus\"></i>
                                                </a>
                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-icon-only green pull-right\">
                                                    <i class=\"fa fa-twitter\"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li data-date=\"28/02/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Sending Shipment</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 891
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_3.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Hugh Grant</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">28 February 2014 : 10:15 AM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-outline green-jungle\">Download Shipment List</a>
                                                <div class=\"btn-group dropup pull-right\">
                                                    <button class=\"btn btn-circle blue-steel dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"false\"> Actions
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                                        <li>
                                                            <a href=\"javascript:;\">Action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Something else here </a>
                                                        </li>
                                                        <li class=\"divider\"> </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-date=\"20/04/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Blue Chambray</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 933
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar8_1.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue\">Rory Matthew</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">20 April 2014 : 10:45 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle red\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"20/05/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 957
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_2.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">20 May 2014 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"09/07/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Event Success</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 979
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_1.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Matt Goldman</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">9 July 2014 : 8:15 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-outline purple-medium\">View Summary</a>
                                                <div class=\"btn-group dropup pull-right\">
                                                    <button class=\"btn btn-circle green dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"false\"> Actions
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                                        <li>
                                                            <a href=\"javascript:;\">Action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Something else here </a>
                                                        </li>
                                                        <li class=\"divider\"> </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-date=\"30/08/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Conference Call</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1018
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_1.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Rory Matthew</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">30 August 2014 : 5:45 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <img class=\"timeline-body-img pull-left\" src=\"";
        // line 1027
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/blog/5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle red\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"15/09/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Conference Decision</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1043
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_5.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Jessica Wolf</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">15 September 2014 : 8:30 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <img class=\"timeline-body-img pull-right\" src=\"";
        // line 1052
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/blog/6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-sharp\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"01/11/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1064
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_2.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">1 November 2014 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"10/12/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1086
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_2.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">10 December 2015 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"19/01/2015\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_2.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">19 January 2015 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"03/03/2015\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_2.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">3 March 2015 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <!-- .events-content -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light portlet-fit \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-directions font-green hide\"></i>
                                <span class=\"caption-subject bold font-dark uppercase\"> Events</span>
                                <span class=\"caption-helper\">Horizontal Timeline</span>
                            </div>
                            <div class=\"actions\">
                                <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                    <label class=\"btn green btn-outline btn-circle btn-sm active\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">Actions</label>
                                    <label class=\"btn  green btn-outline btn-circle btn-sm\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Tools</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"cd-horizontal-timeline mt-timeline-horizontal\" data-spacing=\"60\">
                                <div class=\"timeline mt-timeline-square\">
                                    <div class=\"events-wrapper\">
                                        <div class=\"events\">
                                            <ol>
                                                <li>
                                                    <a href=\"#0\" data-date=\"16/01/2014\" class=\"border-after-blue bg-after-blue selected\">Expo 2016</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"28/02/2014\" class=\"border-after-blue bg-after-blue\">New Promo</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"20/04/2014\" class=\"border-after-blue bg-after-blue\">Meeting</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"20/05/2014\" class=\"border-after-blue bg-after-blue\">Launch</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"09/07/2014\" class=\"border-after-blue bg-after-blue\">Party</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"30/08/2014\" class=\"border-after-blue bg-after-blue\">Reports</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"15/09/2014\" class=\"border-after-blue bg-after-blue\">HR</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"01/11/2014\" class=\"border-after-blue bg-after-blue\">IPO</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"10/12/2014\" class=\"border-after-blue bg-after-blue\">Board</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"19/01/2015\" class=\"border-after-blue bg-after-blue\">Revenue</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"03/03/2015\" class=\"border-after-blue bg-after-blue\">Dinner</a>
                                                </li>
                                            </ol>
                                            <span class=\"filling-line bg-blue\" aria-hidden=\"true\"></span>
                                        </div>
                                        <!-- .events -->
                                    </div>
                                    <!-- .events-wrapper -->
                                    <ul class=\"cd-timeline-navigation mt-ht-nav-icon\">
                                        <li>
                                            <a href=\"#0\" class=\"prev inactive btn blue md-skip\">
                                                <i class=\"fa fa-chevron-left\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#0\" class=\"next btn blue md-skip\">
                                                <i class=\"fa fa-chevron-right\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- .cd-timeline-navigation -->
                                </div>
                                <!-- .timeline -->
                                <div class=\"events-content\">
                                    <ol>
                                        <li class=\"selected\" data-date=\"16/01/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Expo 2016 Launch</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_2.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Lisa Bold</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">23 February 2014</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod mi felis, aliquam at iaculis eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis mi felis, aliquam at
                                                    iaculis eu, onsectetur adipiscing elit finibus eu ex. Integer efficitur leo eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas onsectetur adipiscing elit nunc. Suspendisse potenti</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle dark btn-outline\">Read More</a>
                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-icon-only green pull-right\">
                                                    <i class=\"fa fa-twitter\"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li data-date=\"28/02/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Sending Shipment</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_3.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Hugh Grant</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">28 February 2014 : 10:15 AM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-outline green-jungle\">Download Shipment List</a>
                                                <div class=\"btn-group dropup pull-right\">
                                                    <button class=\"btn btn-circle blue-steel dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"false\"> Actions
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                                        <li>
                                                            <a href=\"javascript:;\">Action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Something else here </a>
                                                        </li>
                                                        <li class=\"divider\"> </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-date=\"20/04/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Blue Chambray</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_1.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue\">Rory Matthew</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">20 April 2014 : 10:45 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle red\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"20/05/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_2.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">20 May 2014 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"09/07/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Event Success</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("}assets/pages/media/users/avatar80_1.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Matt Goldman</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">9 July 2014 : 8:15 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-outline purple-medium\">View Summary</a>
                                                <div class=\"btn-group dropup pull-right\">
                                                    <button class=\"btn btn-circle green dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"false\"> Actions
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                                        <li>
                                                            <a href=\"javascript:;\">Action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Something else here </a>
                                                        </li>
                                                        <li class=\"divider\"> </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-date=\"30/08/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Conference Call</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_1.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Rory Matthew</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">30 August 2014 : 5:45 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <img class=\"timeline-body-img pull-left\" src=\"";
        // line 1397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/blog/5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle red\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"15/09/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Conference Decision</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_5.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Jessica Wolf</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">15 September 2014 : 8:30 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <img class=\"timeline-body-img pull-right\" src=\"";
        // line 1422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/blog/6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-sharp\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"01/11/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_2.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">1 November 2014 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"10/12/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_2.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">10 December 2014 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"19/01/2015\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_2.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">19 January 2015 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"03/03/2015\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"";
        // line 1500
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_2.jpg"), "html", null, true);
        echo "\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">3 March 2015 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <!-- .events-content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption caption-md\">
                                <i class=\"icon-bar-chart font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">Member Activity</span>
                                <span class=\"caption-helper\">weekly stats...</span>
                            </div>
                            <div class=\"actions\">
                                <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                    <label class=\"btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm active\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">Today</label>
                                    <label class=\"btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Week</label>
                                    <label class=\"btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Month</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row number-stats margin-bottom-30\">
                                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                    <div class=\"stat-left\">
                                        <div class=\"stat-chart\">
                                            <!-- do not line break \"sparkline_bar\" div. sparkline chart has an issue when the container div has line break -->
                                            <div id=\"sparkline_bar\"></div>
                                        </div>
                                        <div class=\"stat-number\">
                                            <div class=\"title\"> Total </div>
                                            <div class=\"number\"> 2460 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                    <div class=\"stat-right\">
                                        <div class=\"stat-chart\">
                                            <!-- do not line break \"sparkline_bar\" div. sparkline chart has an issue when the container div has line break -->
                                            <div id=\"sparkline_bar2\"></div>
                                        </div>
                                        <div class=\"stat-number\">
                                            <div class=\"title\"> New </div>
                                            <div class=\"number\"> 719 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"table-scrollable table-scrollable-borderless\">
                                <table class=\"table table-hover table-light\">
                                    <thead>
                                    <tr class=\"uppercase\">
                                        <th colspan=\"2\"> MEMBER </th>
                                        <th> Earnings </th>
                                        <th> CASES </th>
                                        <th> CLOSED </th>
                                        <th> RATE </th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td class=\"fit\">
                                            <img class=\"user-pic rounded\" src=\"";
        // line 1584
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar4.jpg"), "html", null, true);
        echo "\"> </td>
                                        <td>
                                            <a href=\"javascript:;\" class=\"primary-link\">Brain</a>
                                        </td>
                                        <td> \$345 </td>
                                        <td> 45 </td>
                                        <td> 124 </td>
                                        <td>
                                            <span class=\"bold theme-font\">80%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"fit\">
                                            <img class=\"user-pic rounded\" src=\"";
        // line 1597
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar5.jpg"), "html", null, true);
        echo "\"> </td>
                                        <td>
                                            <a href=\"javascript:;\" class=\"primary-link\">Nick</a>
                                        </td>
                                        <td> \$560 </td>
                                        <td> 12 </td>
                                        <td> 24 </td>
                                        <td>
                                            <span class=\"bold theme-font\">67%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"fit\">
                                            <img class=\"user-pic rounded\" src=\"";
        // line 1610
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar6.jpg"), "html", null, true);
        echo "\"> </td>
                                        <td>
                                            <a href=\"javascript:;\" class=\"primary-link\">Tim</a>
                                        </td>
                                        <td> \$1,345 </td>
                                        <td> 450 </td>
                                        <td> 46 </td>
                                        <td>
                                            <span class=\"bold theme-font\">98%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"fit\">
                                            <img class=\"user-pic rounded\" src=\"";
        // line 1623
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar7.jpg"), "html", null, true);
        echo "\"> </td>
                                        <td>
                                            <a href=\"javascript:;\" class=\"primary-link\">Tom</a>
                                        </td>
                                        <td> \$645 </td>
                                        <td> 50 </td>
                                        <td> 89 </td>
                                        <td>
                                            <span class=\"bold theme-font\">58%</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption caption-md\">
                                <i class=\"icon-bar-chart font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">Customer Support</span>
                                <span class=\"caption-helper\">45 pending</span>
                            </div>
                            <div class=\"inputs\">
                                <div class=\"portlet-input input-inline input-small \">
                                    <div class=\"input-icon right\">
                                        <i class=\"icon-magnifier\"></i>
                                        <input type=\"text\" class=\"form-control form-control-solid input-circle\" placeholder=\"search...\"> </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"scroller\" style=\"height: 338px;\" data-always-visible=\"1\" data-rail-visible1=\"0\" data-handle-color=\"#D7DCE2\">
                                <div class=\"general-item-list\">
                                    <div class=\"item\">
                                        <div class=\"item-head\">
                                            <div class=\"item-details\">
                                                <img class=\"item-pic rounded\" src=\"";
        // line 1661
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar4.jpg"), "html", null, true);
        echo "\">
                                                <a href=\"\" class=\"item-name primary-link\">Nick Larson</a>
                                                <span class=\"item-label\">3 hrs ago</span>
                                            </div>
                                                    <span class=\"item-status\">
                                                        <span class=\"badge badge-empty badge-success\"></span> Open</span>
                                        </div>
                                        <div class=\"item-body\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"item-head\">
                                            <div class=\"item-details\">
                                                <img class=\"item-pic rounded\" src=\"";
        // line 1673
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar3.jpg"), "html", null, true);
        echo "\">
                                                <a href=\"\" class=\"item-name primary-link\">Mark</a>
                                                <span class=\"item-label\">5 hrs ago</span>
                                            </div>
                                                    <span class=\"item-status\">
                                                        <span class=\"badge badge-empty badge-warning\"></span> Pending</span>
                                        </div>
                                        <div class=\"item-body\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet. </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"item-head\">
                                            <div class=\"item-details\">
                                                <img class=\"item-pic rounded\" src=\"";
        // line 1685
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar6.jpg"), "html", null, true);
        echo "\">
                                                <a href=\"\" class=\"item-name primary-link\">Nick Larson</a>
                                                <span class=\"item-label\">8 hrs ago</span>
                                            </div>
                                                    <span class=\"item-status\">
                                                        <span class=\"badge badge-empty badge-primary\"></span> Closed</span>
                                        </div>
                                        <div class=\"item-body\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"item-head\">
                                            <div class=\"item-details\">
                                                <img class=\"item-pic rounded\" src=\"";
        // line 1697
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar7.jpg"), "html", null, true);
        echo "\">
                                                <a href=\"\" class=\"item-name primary-link\">Nick Larson</a>
                                                <span class=\"item-label\">12 hrs ago</span>
                                            </div>
                                                    <span class=\"item-status\">
                                                        <span class=\"badge badge-empty badge-danger\"></span> Pending</span>
                                        </div>
                                        <div class=\"item-body\"> Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"item-head\">
                                            <div class=\"item-details\">
                                                <img class=\"item-pic rounded\" src=\"";
        // line 1709
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar9.jpg"), "html", null, true);
        echo "\">
                                                <a href=\"\" class=\"item-name primary-link\">Richard Stone</a>
                                                <span class=\"item-label\">2 days ago</span>
                                            </div>
                                                    <span class=\"item-status\">
                                                        <span class=\"badge badge-empty badge-danger\"></span> Open</span>
                                        </div>
                                        <div class=\"item-body\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat. </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"item-head\">
                                            <div class=\"item-details\">
                                                <img class=\"item-pic rounded\" src=\"";
        // line 1721
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar8.jpg"), "html", null, true);
        echo "\">
                                                <a href=\"\" class=\"item-name primary-link\">Dan</a>
                                                <span class=\"item-label\">3 days ago</span>
                                            </div>
                                                    <span class=\"item-status\">
                                                        <span class=\"badge badge-empty badge-warning\"></span> Pending</span>
                                        </div>
                                        <div class=\"item-body\"> Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"item-head\">
                                            <div class=\"item-details\">
                                                <img class=\"item-pic rounded\" src=\"";
        // line 1733
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar2.jpg"), "html", null, true);
        echo "\">
                                                <a href=\"\" class=\"item-name primary-link\">Larry</a>
                                                <span class=\"item-label\">4 hrs ago</span>
                                            </div>
                                                    <span class=\"item-status\">
                                                        <span class=\"badge badge-empty badge-success\"></span> Open</span>
                                        </div>
                                        <div class=\"item-body\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-cursor font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">General Stats</span>
                            </div>
                            <div class=\"actions\">
                                <a href=\"javascript:;\" class=\"btn btn-sm btn-circle red easy-pie-chart-reload\">
                                    <i class=\"fa fa-repeat\"></i> Reload </a>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"easy-pie-chart\">
                                        <div class=\"number transactions\" data-percent=\"55\">
                                            <span>+55</span>% </div>
                                        <a class=\"title\" href=\"javascript:;\"> Transactions
                                            <i class=\"icon-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"margin-bottom-10 visible-sm\"> </div>
                                <div class=\"col-md-4\">
                                    <div class=\"easy-pie-chart\">
                                        <div class=\"number visits\" data-percent=\"85\">
                                            <span>+85</span>% </div>
                                        <a class=\"title\" href=\"javascript:;\"> New Visits
                                            <i class=\"icon-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"margin-bottom-10 visible-sm\"> </div>
                                <div class=\"col-md-4\">
                                    <div class=\"easy-pie-chart\">
                                        <div class=\"number bounce\" data-percent=\"46\">
                                            <span>-46</span>% </div>
                                        <a class=\"title\" href=\"javascript:;\"> Bounce
                                            <i class=\"icon-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-equalizer font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">Server Stats</span>
                                <span class=\"caption-helper\">monthly stats...</span>
                            </div>
                            <div class=\"tools\">
                                <a href=\"\" class=\"collapse\"> </a>
                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                <a href=\"\" class=\"reload\"> </a>
                                <a href=\"\" class=\"remove\"> </a>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"sparkline-chart\">
                                        <div class=\"number\" id=\"sparkline_bar5\"></div>
                                        <a class=\"title\" href=\"javascript:;\"> Network
                                            <i class=\"icon-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"margin-bottom-10 visible-sm\"> </div>
                                <div class=\"col-md-4\">
                                    <div class=\"sparkline-chart\">
                                        <div class=\"number\" id=\"sparkline_bar6\"></div>
                                        <a class=\"title\" href=\"javascript:;\"> CPU Load
                                            <i class=\"icon-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"margin-bottom-10 visible-sm\"> </div>
                                <div class=\"col-md-4\">
                                    <div class=\"sparkline-chart\">
                                        <div class=\"number\" id=\"sparkline_line\"></div>
                                        <a class=\"title\" href=\"javascript:;\"> Load Rate
                                            <i class=\"icon-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <!-- BEGIN REGIONAL STATS PORTLET-->
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-share font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">Regional Stats</span>
                            </div>
                            <div class=\"actions\">
                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                    <i class=\"icon-cloud-upload\"></i>
                                </a>
                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                    <i class=\"icon-wrench\"></i>
                                </a>
                                <a class=\"btn btn-circle btn-icon-only btn-default fullscreen\" data-container=\"false\" data-placement=\"bottom\" href=\"javascript:;\"> </a>
                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                    <i class=\"icon-trash\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div id=\"region_statistics_loading\">
                                <img src=\"";
        // line 1868
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/img/loading.gif"), "html", null, true);
        echo "\" alt=\"loading\" /> </div>
                            <div id=\"region_statistics_content\" class=\"display-none\">
                                <div class=\"btn-toolbar margin-bottom-10\">
                                    <div class=\"btn-group btn-group-circle\" data-toggle=\"buttons\">
                                        <a href=\"\" class=\"btn grey-salsa btn-sm active\"> Users </a>
                                        <a href=\"\" class=\"btn grey-salsa btn-sm\"> Orders </a>
                                    </div>
                                    <div class=\"btn-group pull-right\">
                                        <a href=\"\" class=\"btn btn-circle grey-salsa btn-sm dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Select Region
                                            <span class=\"fa fa-angle-down\"> </span>
                                        </a>
                                        <ul class=\"dropdown-menu pull-right\">
                                            <li>
                                                <a href=\"javascript:;\" id=\"regional_stat_world\"> World </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\" id=\"regional_stat_usa\"> USA </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\" id=\"regional_stat_europe\"> Europe </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\" id=\"regional_stat_russia\"> Russia </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\" id=\"regional_stat_germany\"> Germany </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id=\"vmap_world\" class=\"vmaps display-none\"> </div>
                                <div id=\"vmap_usa\" class=\"vmaps display-none\"> </div>
                                <div id=\"vmap_europe\" class=\"vmaps display-none\"> </div>
                                <div id=\"vmap_russia\" class=\"vmaps display-none\"> </div>
                                <div id=\"vmap_germany\" class=\"vmaps display-none\"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- END REGIONAL STATS PORTLET-->
                </div>
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <!-- BEGIN PORTLET-->
                    <div class=\"portlet light \">
                        <div class=\"portlet-title tabbable-line\">
                            <div class=\"caption\">
                                <i class=\"icon-globe font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">Feeds</span>
                            </div>
                            <ul class=\"nav nav-tabs\">
                                <li class=\"active\">
                                    <a href=\"#tab_1_1\" class=\"active\" data-toggle=\"tab\"> System </a>
                                </li>
                                <li>
                                    <a href=\"#tab_1_2\" data-toggle=\"tab\"> Activities </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"portlet-body\">
                            <!--BEGIN TABS-->
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"tab_1_1\">
                                    <div class=\"scroller\" style=\"height: 339px;\" data-always-visible=\"1\" data-rail-visible=\"0\">
                                        <ul class=\"feeds\">
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-success\">
                                                                <i class=\"fa fa-bell-o\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> You have 4 pending tasks.
                                                                        <span class=\"label label-sm label-info\"> Take action
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
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New version v1.4 just lunched! </div>
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
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> Database server #12 overloaded. Please fix the issue. </div>
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
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
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
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 40 mins </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-warning\">
                                                                <i class=\"fa fa-plus\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New user registered. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 1.5 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-success\">
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
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-default\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 3 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-warning\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 5 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-info\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 18 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-default\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 21 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-info\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 22 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-default\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 21 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-info\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 22 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-default\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 21 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-info\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 22 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-default\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 21 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-info\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 22 hours </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab_1_2\">
                                    <div class=\"scroller\" style=\"height: 290px;\" data-always-visible=\"1\" data-rail-visible1=\"1\">
                                        <ul class=\"feeds\">
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New order received </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> 10 mins </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-danger\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> Order #24DOP4 has been rejected.
                                                                        <span class=\"label label-sm label-danger \"> Take action
                                                                            <i class=\"fa fa-share\"></i>
                                                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 24 mins </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--END TABS-->
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-bubble font-dark hide\"></i>
                                <span class=\"caption-subject font-hide bold uppercase\">Recent Users</span>
                            </div>
                            <div class=\"actions\">
                                <div class=\"btn-group\">
                                    <a class=\"btn green-haze btn-outline btn-circle btn-sm\" href=\"javascript:;\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Actions
                                        <i class=\"fa fa-angle-down\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <a href=\"javascript:;\"> Option 1</a>
                                        </li>
                                        <li class=\"divider\"> </li>
                                        <li>
                                            <a href=\"javascript:;\">Option 2</a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">Option 3</a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">Option 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <!--begin: widget 1-1 -->
                                    <div class=\"mt-widget-1\">
                                        <div class=\"mt-icon\">
                                            <a href=\"#\">
                                                <i class=\"icon-plus\"></i>
                                            </a>
                                        </div>
                                        <div class=\"mt-img\">
                                            <img src=\"";
        // line 2495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_8.jpg"), "html", null, true);
        echo "\"> </div>
                                        <div class=\"mt-body\">
                                            <h3 class=\"mt-username\">Diana Ellison</h3>
                                            <p class=\"mt-user-title\"> Lorem Ipsum is simply dummy text. </p>
                                            <div class=\"mt-stats\">
                                                <div class=\"btn-group btn-group btn-group-justified\">
                                                    <a href=\"javascript:;\" class=\"btn font-red\">
                                                        <i class=\"icon-bubbles\"></i> 1,7k </a>
                                                    <a href=\"javascript:;\" class=\"btn font-green\">
                                                        <i class=\"icon-social-twitter\"></i> 2,6k </a>
                                                    <a href=\"javascript:;\" class=\"btn font-yellow\">
                                                        <i class=\"icon-emoticon-smile\"></i> 3,7k </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: widget 1-1 -->
                                </div>
                                <div class=\"col-md-4\">
                                    <!--begin: widget 1-2 -->
                                    <div class=\"mt-widget-1\">
                                        <div class=\"mt-icon\">
                                            <a href=\"#\">
                                                <i class=\"icon-plus\"></i>
                                            </a>
                                        </div>
                                        <div class=\"mt-img\">
                                            <img src=\"";
        // line 2522
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_7.jpg"), "html", null, true);
        echo "\"> </div>
                                        <div class=\"mt-body\">
                                            <h3 class=\"mt-username\">Jason Baker</h3>
                                            <p class=\"mt-user-title\"> Lorem Ipsum is simply dummy text. </p>
                                            <div class=\"mt-stats\">
                                                <div class=\"btn-group btn-group btn-group-justified\">
                                                    <a href=\"javascript:;\" class=\"btn font-yellow\">
                                                        <i class=\"icon-bubbles\"></i> 1,7k </a>
                                                    <a href=\"javascript:;\" class=\"btn font-blue\">
                                                        <i class=\"icon-social-twitter\"></i> 2,6k </a>
                                                    <a href=\"javascript:;\" class=\"btn font-green\">
                                                        <i class=\"icon-emoticon-smile\"></i> 3,7k </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: widget 1-2 -->
                                </div>
                                <div class=\"col-md-4\">
                                    <!--begin: widget 1-3 -->
                                    <div class=\"mt-widget-1\">
                                        <div class=\"mt-icon\">
                                            <a href=\"#\">
                                                <i class=\"icon-plus\"></i>
                                            </a>
                                        </div>
                                        <div class=\"mt-img\">
                                            <img src=\"";
        // line 2549
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/media/users/avatar80_6.jpg"), "html", null, true);
        echo "\"> </div>
                                        <div class=\"mt-body\">
                                            <h3 class=\"mt-username\">Julia Berry</h3>
                                            <p class=\"mt-user-title\"> Lorem Ipsum is simply dummy text. </p>
                                            <div class=\"mt-stats\">
                                                <div class=\"btn-group btn-group btn-group-justified\">
                                                    <a href=\"javascript:;\" class=\"btn font-yellow\">
                                                        <i class=\"icon-bubbles\"></i> 1,7k </a>
                                                    <a href=\"javascript:;\" class=\"btn font-red\">
                                                        <i class=\"icon-social-twitter\"></i> 2,6k </a>
                                                    <a href=\"javascript:;\" class=\"btn font-green\">
                                                        <i class=\"icon-emoticon-smile\"></i> 3,7k </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: widget 1-3 -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"portlet light portlet-fit \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-microphone font-dark hide\"></i>
                                <span class=\"caption-subject bold font-dark uppercase\"> Recent Works</span>
                                <span class=\"caption-helper\">default option...</span>
                            </div>
                            <div class=\"actions\">
                                <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                    <label class=\"btn red btn-outline btn-circle btn-sm active\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">Settings</label>
                                    <label class=\"btn  red btn-outline btn-circle btn-sm\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Tools</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"mt-widget-2\">
                                        <div class=\"mt-head\" style=\"background-image: url(";
        // line 2590
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/background/32.jpg"), "html", null, true);
        echo ");\">
                                            <div class=\"mt-head-label\">
                                                <button type=\"button\" class=\"btn btn-success\">Manhattan</button>
                                            </div>
                                            <div class=\"mt-head-user\">
                                                <div class=\"mt-head-user-img\">
                                                    <img src=\"";
        // line 2596
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/avatars/team7.jpg"), "html", null, true);
        echo "\"> </div>
                                                <div class=\"mt-head-user-info\">
                                                    <span class=\"mt-user-name\">Chris Jagers</span>
                                                            <span class=\"mt-user-time\">
                                                                <i class=\"icon-emoticon-smile\"></i> 3 mins ago </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-body\">
                                            <h3 class=\"mt-body-title\"> Thomas Clark </h3>
                                            <p class=\"mt-body-description\"> It is a long established fact that a reader will be distracted </p>
                                            <ul class=\"mt-body-stats\">
                                                <li class=\"font-green\">
                                                    <i class=\"icon-emoticon-smile\"></i> 3,7k</li>
                                                <li class=\"font-yellow\">
                                                    <i class=\" icon-social-twitter\"></i> 3,7k</li>
                                                <li class=\"font-red\">
                                                    <i class=\"  icon-bubbles\"></i> 3,7k</li>
                                            </ul>
                                            <div class=\"mt-body-actions\">
                                                <div class=\"btn-group btn-group btn-group-justified\">
                                                    <a href=\"javascript:;\" class=\"btn\">
                                                        <i class=\"icon-bubbles\"></i> Bookmark </a>
                                                    <a href=\"javascript:;\" class=\"btn \">
                                                        <i class=\"icon-social-twitter\"></i> Share </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"mt-widget-2\">
                                        <div class=\"mt-head\" style=\"background-image: url(";
        // line 2628
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/background/43.jpg"), "html", null, true);
        echo ");\">
                                            <div class=\"mt-head-label\">
                                                <button type=\"button\" class=\"btn btn-danger\">London</button>
                                            </div>
                                            <div class=\"mt-head-user\">
                                                <div class=\"mt-head-user-img\">
                                                    <img src=\"";
        // line 2634
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/avatars/team3.jpg"), "html", null, true);
        echo "\"> </div>
                                                <div class=\"mt-head-user-info\">
                                                    <span class=\"mt-user-name\">Harry Harris</span>
                                                            <span class=\"mt-user-time\">
                                                                <i class=\"icon-user\"></i> 3 mins ago </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-body\">
                                            <h3 class=\"mt-body-title\"> Christian Davidson </h3>
                                            <p class=\"mt-body-description\"> It is a long established fact that a reader will be distracted </p>
                                            <ul class=\"mt-body-stats\">
                                                <li class=\"font-green\">
                                                    <i class=\"icon-emoticon-smile\"></i> 3,7k</li>
                                                <li class=\"font-yellow\">
                                                    <i class=\" icon-social-twitter\"></i> 3,7k</li>
                                                <li class=\"font-red\">
                                                    <i class=\"  icon-bubbles\"></i> 3,7k</li>
                                            </ul>
                                            <div class=\"mt-body-actions\">
                                                <div class=\"btn-group btn-group btn-group-justified\">
                                                    <a href=\"javascript:;\" class=\"btn \">
                                                        <i class=\"icon-bubbles\"></i> Bookmark </a>
                                                    <a href=\"javascript:;\" class=\"btn \">
                                                        <i class=\"icon-social-twitter\"></i> Share </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light portlet-fit \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-microphone font-dark hide\"></i>
                                <span class=\"caption-subject bold font-dark uppercase\"> Recent Projects</span>
                                <span class=\"caption-helper\">default option...</span>
                            </div>
                            <div class=\"actions\">
                                <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                    <label class=\"btn blue btn-outline btn-circle btn-sm active\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">Actions</label>
                                    <label class=\"btn  blue btn-outline btn-circle btn-sm\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Tools</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"mt-widget-4\">
                                        <div class=\"mt-img-container\">
                                            <img src=\"";
        // line 2690
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/background/34.jpg"), "html", null, true);
        echo "\" /> </div>
                                        <div class=\"mt-container bg-purple-opacity\">
                                            <div class=\"mt-head-title\"> Website Revamp & Deployment </div>
                                            <div class=\"mt-body-icons\">
                                                <a href=\"#\">
                                                    <i class=\" icon-pencil\"></i>
                                                </a>
                                                <a href=\"#\">
                                                    <i class=\" icon-map\"></i>
                                                </a>
                                                <a href=\"#\">
                                                    <i class=\" icon-trash\"></i>
                                                </a>
                                            </div>
                                            <div class=\"mt-footer-button\">
                                                <button type=\"button\" class=\"btn btn-circle btn-danger btn-sm\">Dior</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"mt-widget-4\">
                                        <div class=\"mt-img-container\">
                                            <img src=\"";
        // line 2713
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/background/46.jpg"), "html", null, true);
        echo "\" /> </div>
                                        <div class=\"mt-container bg-green-opacity\">
                                            <div class=\"mt-head-title\"> CRM Development & Deployment </div>
                                            <div class=\"mt-body-icons\">
                                                <a href=\"#\">
                                                    <i class=\" icon-social-twitter\"></i>
                                                </a>
                                                <a href=\"#\">
                                                    <i class=\" icon-bubbles\"></i>
                                                </a>
                                                <a href=\"#\">
                                                    <i class=\" icon-bell\"></i>
                                                </a>
                                            </div>
                                            <div class=\"mt-footer-button\">
                                                <button type=\"button\" class=\"btn btn-circle blue-ebonyclay btn-sm\">Nike</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"mt-widget-4\">
                                        <div class=\"mt-img-container\">
                                            <img src=\"";
        // line 2736
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/img/background/37.jpg"), "html", null, true);
        echo "\" /> </div>
                                        <div class=\"mt-container bg-dark-opacity\">
                                            <div class=\"mt-head-title\"> Marketing Campaigns </div>
                                            <div class=\"mt-body-icons\">
                                                <a href=\"#\">
                                                    <i class=\" icon-bubbles\"></i>
                                                </a>
                                                <a href=\"#\">
                                                    <i class=\" icon-map\"></i>
                                                </a>
                                                <a href=\"#\">
                                                    <i class=\" icon-cup\"></i>
                                                </a>
                                            </div>
                                            <div class=\"mt-footer-button\">
                                                <button type=\"button\" class=\"btn btn-circle btn-success btn-sm\">Honda</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"portlet light portlet-fit \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-microphone font-dark hide\"></i>
                                <span class=\"caption-subject bold font-dark uppercase\"> Activities</span>
                                <span class=\"caption-helper\">default option...</span>
                            </div>
                            <div class=\"actions\">
                                <div class=\"btn-group\">
                                    <a class=\"btn red btn-outline btn-circle btn-sm\" href=\"javascript:;\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Actions
                                        <i class=\"fa fa-angle-down\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <a href=\"javascript:;\"> Option 1</a>
                                        </li>
                                        <li class=\"divider\"> </li>
                                        <li>
                                            <a href=\"javascript:;\">Option 2</a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">Option 3</a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">Option 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"mt-widget-3\">
                                        <div class=\"mt-head bg-blue-hoki\">
                                            <div class=\"mt-head-icon\">
                                                <i class=\" icon-social-twitter\"></i>
                                            </div>
                                            <div class=\"mt-head-desc\"> Lorem Ipsum is simply dummy text of the ... </div>
                                            <span class=\"mt-head-date\"> 25 Jan, 2015 </span>
                                            <div class=\"mt-head-button\">
                                                <button type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Add</button>
                                            </div>
                                        </div>
                                        <div class=\"mt-body-actions-icons\">
                                            <div class=\"btn-group btn-group btn-group-justified\">
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-align-justify\"></i>
                                                            </span>RECORD </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-camera\"></i>
                                                            </span>PHOTO </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-calendar\"></i>
                                                            </span>DATE </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-record\"></i>
                                                            </span>RANC </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"mt-widget-3\">
                                        <div class=\"mt-head bg-red\">
                                            <div class=\"mt-head-icon\">
                                                <i class=\"icon-user\"></i>
                                            </div>
                                            <div class=\"mt-head-desc\"> Lorem Ipsum is simply dummy text of the ... </div>
                                            <span class=\"mt-head-date\"> 12 Feb, 2016 </span>
                                            <div class=\"mt-head-button\">
                                                <button type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Add</button>
                                            </div>
                                        </div>
                                        <div class=\"mt-body-actions-icons\">
                                            <div class=\"btn-group btn-group btn-group-justified\">
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-align-justify\"></i>
                                                            </span>RECORD </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-camera\"></i>
                                                            </span>PHOTO </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-calendar\"></i>
                                                            </span>DATE </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-record\"></i>
                                                            </span>RANC </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"mt-widget-3\">
                                        <div class=\"mt-head bg-green\">
                                            <div class=\"mt-head-icon\">
                                                <i class=\" icon-graduation\"></i>
                                            </div>
                                            <div class=\"mt-head-desc\"> Lorem Ipsum is simply dummy text of the ... </div>
                                            <span class=\"mt-head-date\"> 3 Mar, 2015 </span>
                                            <div class=\"mt-head-button\">
                                                <button type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Add</button>
                                            </div>
                                        </div>
                                        <div class=\"mt-body-actions-icons\">
                                            <div class=\"btn-group btn-group btn-group-justified\">
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-align-justify\"></i>
                                                            </span>RECORD </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-camera\"></i>
                                                            </span>PHOTO </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-calendar\"></i>
                                                            </span>DATE </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-record\"></i>
                                                            </span>RANC </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


";
        
        $__internal_2cb77ba08e2f204fb47e7581c5c8b33c7ff3abeec3d8144057c907d80a3993c1->leave($__internal_2cb77ba08e2f204fb47e7581c5c8b33c7ff3abeec3d8144057c907d80a3993c1_prof);

        
        $__internal_434cad7712d3513c4453bc44c4437e5d98a396cbebeb55d30364ec25a4ebf4ec->leave($__internal_434cad7712d3513c4453bc44c4437e5d98a396cbebeb55d30364ec25a4ebf4ec_prof);

    }

    // line 2901
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ca32b1ef14e5f7941edb12ea42d3686c355b8ec5fde8c9e62811393fad1ddda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ca32b1ef14e5f7941edb12ea42d3686c355b8ec5fde8c9e62811393fad1ddda->enter($__internal_4ca32b1ef14e5f7941edb12ea42d3686c355b8ec5fde8c9e62811393fad1ddda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_843f3d6e0ad79ae3bbdadecb4402dff852418bd4bbb0c926c5f1fa33e9f87d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843f3d6e0ad79ae3bbdadecb4402dff852418bd4bbb0c926c5f1fa33e9f87d1a->enter($__internal_843f3d6e0ad79ae3bbdadecb4402dff852418bd4bbb0c926c5f1fa33e9f87d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2902
        echo "    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"";
        // line 2903
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2904
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2905
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2906
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/morris/raphael-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2907
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/counterup/jquery.waypoints.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2908
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2909
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/amcharts/amcharts/amcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2910
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/amcharts/amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2911
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/amcharts/amcharts/pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2912
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/amcharts/amcharts/radar.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2913
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/light.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2914
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/patterns.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2915
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/chalk.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2916
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/amcharts/ammap/ammap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2917
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/amcharts/ammap/maps/js/worldLow.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2918
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/amcharts/amstockcharts/amstock.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2919
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2920
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/horizontal-timeline/horizontal-timeline.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2921
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2922
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2923
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.categories.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2924
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2925
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery.sparkline.min.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
    <script src=\"";
        // line 2926
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2927
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2928
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2929
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2930
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2931
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 2932
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"";
        // line 2935
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/scripts/dashboard.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
";
        
        $__internal_843f3d6e0ad79ae3bbdadecb4402dff852418bd4bbb0c926c5f1fa33e9f87d1a->leave($__internal_843f3d6e0ad79ae3bbdadecb4402dff852418bd4bbb0c926c5f1fa33e9f87d1a_prof);

        
        $__internal_4ca32b1ef14e5f7941edb12ea42d3686c355b8ec5fde8c9e62811393fad1ddda->leave($__internal_4ca32b1ef14e5f7941edb12ea42d3686c355b8ec5fde8c9e62811393fad1ddda_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3338 => 2935,  3332 => 2932,  3328 => 2931,  3324 => 2930,  3320 => 2929,  3316 => 2928,  3312 => 2927,  3308 => 2926,  3304 => 2925,  3300 => 2924,  3296 => 2923,  3292 => 2922,  3288 => 2921,  3284 => 2920,  3280 => 2919,  3276 => 2918,  3272 => 2917,  3268 => 2916,  3264 => 2915,  3260 => 2914,  3256 => 2913,  3252 => 2912,  3248 => 2911,  3244 => 2910,  3240 => 2909,  3236 => 2908,  3232 => 2907,  3228 => 2906,  3224 => 2905,  3220 => 2904,  3216 => 2903,  3213 => 2902,  3204 => 2901,  3029 => 2736,  3003 => 2713,  2977 => 2690,  2918 => 2634,  2909 => 2628,  2874 => 2596,  2865 => 2590,  2821 => 2549,  2791 => 2522,  2761 => 2495,  2131 => 1868,  1993 => 1733,  1978 => 1721,  1963 => 1709,  1948 => 1697,  1933 => 1685,  1918 => 1673,  1903 => 1661,  1862 => 1623,  1846 => 1610,  1830 => 1597,  1814 => 1584,  1727 => 1500,  1702 => 1478,  1677 => 1456,  1652 => 1434,  1637 => 1422,  1625 => 1413,  1606 => 1397,  1594 => 1388,  1552 => 1349,  1527 => 1327,  1500 => 1303,  1455 => 1261,  1429 => 1238,  1318 => 1130,  1293 => 1108,  1268 => 1086,  1243 => 1064,  1228 => 1052,  1216 => 1043,  1197 => 1027,  1185 => 1018,  1143 => 979,  1118 => 957,  1091 => 933,  1046 => 891,  1017 => 865,  880 => 731,  849 => 703,  818 => 675,  787 => 647,  750 => 613,  719 => 585,  688 => 557,  657 => 529,  626 => 501,  595 => 473,  539 => 420,  511 => 395,  483 => 370,  455 => 345,  421 => 314,  393 => 289,  365 => 264,  337 => 239,  112 => 16,  103 => 15,  92 => 13,  89 => 11,  80 => 10,  67 => 7,  63 => 6,  59 => 5,  55 => 4,  52 => 3,  43 => 2,  11 => 1,);
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
{% block stylesheets %}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href=\"{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/morris/morris.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- END PAGE LEVEL PLUGINS -->
{% endblock %}
{% block nav %}
    {{ render(controller(
    'AppBundle:Navmenu:getNavmenu'
    )) }}
{% endblock %}
{% block body %}




            <h1 class=\"page-title\"> Admin Dashboard 2
                <small>statistics, charts, recent events and reports</small>
            </h1>
            <div class=\"page-bar\">
                <ul class=\"page-breadcrumb\">
                    <li>
                        <i class=\"icon-home\"></i>
                        <a href=\"/\">Home</a>
                        <i class=\"fa fa-angle-right\"></i>
                    </li>
                    <li>
                        <span>Dashboard</span>
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
                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"dashboard-stat2 \">
                        <div class=\"display\">
                            <div class=\"number\">
                                <h3 class=\"font-green-sharp\">
                                    <span data-counter=\"counterup\" data-value=\"7800\">0</span>
                                    <small class=\"font-green-sharp\">\$</small>
                                </h3>
                                <small>TOTAL PROFIT</small>
                            </div>
                            <div class=\"icon\">
                                <i class=\"icon-pie-chart\"></i>
                            </div>
                        </div>
                        <div class=\"progress-info\">
                            <div class=\"progress\">
                                        <span style=\"width: 76%;\" class=\"progress-bar progress-bar-success green-sharp\">
                                            <span class=\"sr-only\">76% progress</span>
                                        </span>
                            </div>
                            <div class=\"status\">
                                <div class=\"status-title\"> progress </div>
                                <div class=\"status-number\"> 76% </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"dashboard-stat2 \">
                        <div class=\"display\">
                            <div class=\"number\">
                                <h3 class=\"font-red-haze\">
                                    <span data-counter=\"counterup\" data-value=\"1349\">0</span>
                                </h3>
                                <small>NEW FEEDBACKS</small>
                            </div>
                            <div class=\"icon\">
                                <i class=\"icon-like\"></i>
                            </div>
                        </div>
                        <div class=\"progress-info\">
                            <div class=\"progress\">
                                        <span style=\"width: 85%;\" class=\"progress-bar progress-bar-success red-haze\">
                                            <span class=\"sr-only\">85% change</span>
                                        </span>
                            </div>
                            <div class=\"status\">
                                <div class=\"status-title\"> change </div>
                                <div class=\"status-number\"> 85% </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"dashboard-stat2 \">
                        <div class=\"display\">
                            <div class=\"number\">
                                <h3 class=\"font-blue-sharp\">
                                    <span data-counter=\"counterup\" data-value=\"567\"></span>
                                </h3>
                                <small>NEW ORDERS</small>
                            </div>
                            <div class=\"icon\">
                                <i class=\"icon-basket\"></i>
                            </div>
                        </div>
                        <div class=\"progress-info\">
                            <div class=\"progress\">
                                        <span style=\"width: 45%;\" class=\"progress-bar progress-bar-success blue-sharp\">
                                            <span class=\"sr-only\">45% grow</span>
                                        </span>
                            </div>
                            <div class=\"status\">
                                <div class=\"status-title\"> grow </div>
                                <div class=\"status-number\"> 45% </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                    <div class=\"dashboard-stat2 \">
                        <div class=\"display\">
                            <div class=\"number\">
                                <h3 class=\"font-purple-soft\">
                                    <span data-counter=\"counterup\" data-value=\"276\"></span>
                                </h3>
                                <small>NEW USERS</small>
                            </div>
                            <div class=\"icon\">
                                <i class=\"icon-user\"></i>
                            </div>
                        </div>
                        <div class=\"progress-info\">
                            <div class=\"progress\">
                                        <span style=\"width: 57%;\" class=\"progress-bar progress-bar-success purple-soft\">
                                            <span class=\"sr-only\">56% change</span>
                                        </span>
                            </div>
                            <div class=\"status\">
                                <div class=\"status-title\"> change </div>
                                <div class=\"status-number\"> 57% </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <span class=\"caption-subject bold uppercase font-dark\">Revenue</span>
                                <span class=\"caption-helper\">distance stats...</span>
                            </div>
                            <div class=\"actions\">
                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"#\">
                                    <i class=\"icon-cloud-upload\"></i>
                                </a>
                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"#\">
                                    <i class=\"icon-wrench\"></i>
                                </a>
                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"#\">
                                    <i class=\"icon-trash\"></i>
                                </a>
                                <a class=\"btn btn-circle btn-icon-only btn-default fullscreen\" href=\"#\"> </a>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div id=\"dashboard_amchart_1\" class=\"CSSAnimationChart\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption \">
                                <span class=\"caption-subject font-dark bold uppercase\">Finance</span>
                                <span class=\"caption-helper\">distance stats...</span>
                            </div>
                            <div class=\"actions\">
                                <a href=\"#\" class=\"btn btn-circle green btn-outline btn-sm\">
                                    <i class=\"fa fa-pencil\"></i> Export </a>
                                <a href=\"#\" class=\"btn btn-circle green btn-outline btn-sm\">
                                    <i class=\"fa fa-print\"></i> Print </a>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div id=\"dashboard_amchart_3\" class=\"CSSAnimationChart\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title tabbable-line\">
                            <div class=\"caption\">
                                <i class=\"icon-bubbles font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">Comments</span>
                            </div>
                            <ul class=\"nav nav-tabs\">
                                <li class=\"active\">
                                    <a href=\"#portlet_comments_1\" data-toggle=\"tab\"> Pending </a>
                                </li>
                                <li>
                                    <a href=\"#portlet_comments_2\" data-toggle=\"tab\"> Approved </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"portlet_comments_1\">
                                    <!-- BEGIN: Comments -->
                                    <div class=\"mt-comments\">
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar1.jpg') }}\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Michael Baker</span>
                                                    <span class=\"mt-comment-date\">26 Feb, 10:30AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-pending\">Pending</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar6.jpg') }}\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Larisa Maskalyova</span>
                                                    <span class=\"mt-comment-date\">12 Feb, 08:30AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> It is a long established fact that a reader will be distracted. </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-rejected\">Rejected</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar8.jpg') }}\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Natasha Kim</span>
                                                    <span class=\"mt-comment-date\">19 Dec,09:50 AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> The generated Lorem or non-characteristic Ipsum is therefore or non-characteristic. </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-pending\">Pending</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar4.jpg') }}\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Sebastian Davidson</span>
                                                    <span class=\"mt-comment-date\">10 Dec, 09:20 AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> The standard chunk of Lorem or non-characteristic Ipsum used since the 1500s or non-characteristic. </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-rejected\">Rejected</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Comments -->
                                </div>
                                <div class=\"tab-pane\" id=\"portlet_comments_2\">
                                    <!-- BEGIN: Comments -->
                                    <div class=\"mt-comments\">
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar4.jpg') }}\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Michael Baker</span>
                                                    <span class=\"mt-comment-date\">26 Feb, 10:30AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-approved\">Approved</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar8.jpg') }}\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Larisa Maskalyova</span>
                                                    <span class=\"mt-comment-date\">12 Feb, 08:30AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> It is a long established fact that a reader will be distracted by. </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-approved\">Approved</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar6.jpg') }}\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Natasha Kim</span>
                                                    <span class=\"mt-comment-date\">19 Dec,09:50 AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-approved\">Approved</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-comment\">
                                            <div class=\"mt-comment-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar1.jpg') }}\" /> </div>
                                            <div class=\"mt-comment-body\">
                                                <div class=\"mt-comment-info\">
                                                    <span class=\"mt-comment-author\">Sebastian Davidson</span>
                                                    <span class=\"mt-comment-date\">10 Dec, 09:20 AM</span>
                                                </div>
                                                <div class=\"mt-comment-text\"> The standard chunk of Lorem Ipsum used since the 1500s </div>
                                                <div class=\"mt-comment-details\">
                                                    <span class=\"mt-comment-status mt-comment-status-approved\">Approved</span>
                                                    <ul class=\"mt-comment-actions\">
                                                        <li>
                                                            <a href=\"#\">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">View</a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Comments -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title tabbable-line\">
                            <div class=\"caption\">
                                <i class=\" icon-social-twitter font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">Quick Actions</span>
                            </div>
                            <ul class=\"nav nav-tabs\">
                                <li class=\"active\">
                                    <a href=\"#tab_actions_pending\" data-toggle=\"tab\"> Pending </a>
                                </li>
                                <li>
                                    <a href=\"#tab_actions_completed\" data-toggle=\"tab\"> Completed </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"tab_actions_pending\">
                                    <!-- BEGIN: Actions -->
                                    <div class=\"mt-actions\">
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar10.jpg') }}\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\"icon-magnet\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Natasha Kim</span>
                                                            <p class=\"mt-action-desc\">Dummy text of the printing</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-green\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar3.jpg') }}\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\" icon-bubbles\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Gavin Bond</span>
                                                            <p class=\"mt-action-desc\">pending for approval</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-red\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar2.jpg') }}\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\"icon-call-in\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Diana Berri</span>
                                                            <p class=\"mt-action-desc\">Lorem Ipsum is simply dummy text</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-green\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar7.jpg') }}\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\" icon-bell\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">John Clark</span>
                                                            <p class=\"mt-action-desc\">Text of the printing and typesetting industry</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-red\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar8.jpg') }}\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\"icon-magnet\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Donna Clarkson </span>
                                                            <p class=\"mt-action-desc\">Simply dummy text of the printing</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-green\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar9.jpg') }}\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\"icon-magnet\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Tom Larson</span>
                                                            <p class=\"mt-action-desc\">Lorem Ipsum is simply dummy text</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-green\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Actions -->
                                </div>
                                <div class=\"tab-pane\" id=\"tab_actions_completed\">
                                    <!-- BEGIN:Completed-->
                                    <div class=\"mt-actions\">
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar1.jpg') }}\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\"icon-action-redo\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Frank Cameron</span>
                                                            <p class=\"mt-action-desc\">Lorem Ipsum is simply dummy</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-red\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar8.jpg') }}\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\"icon-cup\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Ella Davidson </span>
                                                            <p class=\"mt-action-desc\">Text of the printing and typesetting industry</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-green\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons\">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar5.jpg') }}\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\" icon-graduation\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Jason Dickens </span>
                                                            <p class=\"mt-action-desc\">Dummy text of the printing and typesetting industry</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-red\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-action\">
                                            <div class=\"mt-action-img\">
                                                <img src=\"{{ asset('assets/pages/media/users/avatar2.jpg') }}\" /> </div>
                                            <div class=\"mt-action-body\">
                                                <div class=\"mt-action-row\">
                                                    <div class=\"mt-action-info \">
                                                        <div class=\"mt-action-icon \">
                                                            <i class=\"icon-badge\"></i>
                                                        </div>
                                                        <div class=\"mt-action-details \">
                                                            <span class=\"mt-action-author\">Jan Kim</span>
                                                            <p class=\"mt-action-desc\">Lorem Ipsum is simply dummy</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"mt-action-datetime \">
                                                        <span class=\"mt-action-date\">3 jun</span>
                                                        <span class=\"mt-action-dot bg-green\"></span>
                                                        <span class=\"mt=action-time\">9:30-13:00</span>
                                                    </div>
                                                    <div class=\"mt-action-buttons \">
                                                        <div class=\"btn-group btn-group-circle\">
                                                            <button type=\"button\" class=\"btn btn-outline green btn-sm\">Appove</button>
                                                            <button type=\"button\" class=\"btn btn-outline red btn-sm\">Reject</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Completed -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light portlet-fit \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-directions font-green hide\"></i>
                                <span class=\"caption-subject bold font-dark uppercase \"> Activities</span>
                                <span class=\"caption-helper\">Horizontal Timeline</span>
                            </div>
                            <div class=\"actions\">
                                <div class=\"btn-group\">
                                    <a class=\"btn blue btn-outline btn-circle btn-sm\" href=\"javascript:;\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Actions
                                        <i class=\"fa fa-angle-down\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <a href=\"javascript:;\"> Action 1</a>
                                        </li>
                                        <li class=\"divider\"> </li>
                                        <li>
                                            <a href=\"javascript:;\">Action 2</a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">Action 3</a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">Action 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"cd-horizontal-timeline mt-timeline-horizontal\" data-spacing=\"60\">
                                <div class=\"timeline\">
                                    <div class=\"events-wrapper\">
                                        <div class=\"events\">
                                            <ol>
                                                <li>
                                                    <a href=\"#0\" data-date=\"16/01/2014\" class=\"border-after-red bg-after-red selected\">16 Jan</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"28/02/2014\" class=\"border-after-red bg-after-red\">28 Feb</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"20/04/2014\" class=\"border-after-red bg-after-red\">20 Mar</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"20/05/2014\" class=\"border-after-red bg-after-red\">20 May</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"09/07/2014\" class=\"border-after-red bg-after-red\">09 Jul</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"30/08/2014\" class=\"border-after-red bg-after-red\">30 Aug</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"15/09/2014\" class=\"border-after-red bg-after-red\">15 Sep</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"01/11/2014\" class=\"border-after-red bg-after-red\">01 Nov</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"10/12/2014\" class=\"border-after-red bg-after-red\">10 Dec</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"19/01/2015\" class=\"border-after-red bg-after-red\">29 Jan</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"03/03/2015\" class=\"border-after-red bg-after-red\">3 Mar</a>
                                                </li>
                                            </ol>
                                            <span class=\"filling-line bg-red\" aria-hidden=\"true\"></span>
                                        </div>
                                        <!-- .events -->
                                    </div>
                                    <!-- .events-wrapper -->
                                    <ul class=\"cd-timeline-navigation mt-ht-nav-icon\">
                                        <li>
                                            <a href=\"#0\" class=\"prev inactive btn btn-outline red md-skip\">
                                                <i class=\"fa fa-chevron-left\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#0\" class=\"next btn btn-outline red md-skip\">
                                                <i class=\"fa fa-chevron-right\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- .cd-timeline-navigation -->
                                </div>
                                <!-- .timeline -->
                                <div class=\"events-content\">
                                    <ol>
                                        <li class=\"selected\" data-date=\"16/01/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">New User</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_3.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">16 January 2014 : 7:45 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, mi felis, aliquam at iaculis mi felis, aliquam
                                                    at iaculis finibus eu ex. Integer efficitur tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non est rhoncus volutpat.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle red btn-outline\">Read More</a>
                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-icon-only blue\">
                                                    <i class=\"fa fa-plus\"></i>
                                                </a>
                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-icon-only green pull-right\">
                                                    <i class=\"fa fa-twitter\"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li data-date=\"28/02/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Sending Shipment</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_3.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Hugh Grant</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">28 February 2014 : 10:15 AM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-outline green-jungle\">Download Shipment List</a>
                                                <div class=\"btn-group dropup pull-right\">
                                                    <button class=\"btn btn-circle blue-steel dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"false\"> Actions
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                                        <li>
                                                            <a href=\"javascript:;\">Action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Something else here </a>
                                                        </li>
                                                        <li class=\"divider\"> </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-date=\"20/04/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Blue Chambray</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar8_1.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue\">Rory Matthew</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">20 April 2014 : 10:45 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle red\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"20/05/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_2.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">20 May 2014 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"09/07/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Event Success</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_1.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Matt Goldman</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">9 July 2014 : 8:15 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-outline purple-medium\">View Summary</a>
                                                <div class=\"btn-group dropup pull-right\">
                                                    <button class=\"btn btn-circle green dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"false\"> Actions
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                                        <li>
                                                            <a href=\"javascript:;\">Action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Something else here </a>
                                                        </li>
                                                        <li class=\"divider\"> </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-date=\"30/08/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Conference Call</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_1.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Rory Matthew</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">30 August 2014 : 5:45 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <img class=\"timeline-body-img pull-left\" src=\"{{ asset('assets/pages/media/blog/5.jpg') }}\" alt=\"\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle red\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"15/09/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Conference Decision</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_5.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Jessica Wolf</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">15 September 2014 : 8:30 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <img class=\"timeline-body-img pull-right\" src=\"{{ asset('assets/pages/media/blog/6.jpg') }}\" alt=\"\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-sharp\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"01/11/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_2.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">1 November 2014 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"10/12/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_2.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">10 December 2015 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"19/01/2015\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_2.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">19 January 2015 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"03/03/2015\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_2.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">3 March 2015 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <!-- .events-content -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light portlet-fit \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-directions font-green hide\"></i>
                                <span class=\"caption-subject bold font-dark uppercase\"> Events</span>
                                <span class=\"caption-helper\">Horizontal Timeline</span>
                            </div>
                            <div class=\"actions\">
                                <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                    <label class=\"btn green btn-outline btn-circle btn-sm active\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">Actions</label>
                                    <label class=\"btn  green btn-outline btn-circle btn-sm\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Tools</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"cd-horizontal-timeline mt-timeline-horizontal\" data-spacing=\"60\">
                                <div class=\"timeline mt-timeline-square\">
                                    <div class=\"events-wrapper\">
                                        <div class=\"events\">
                                            <ol>
                                                <li>
                                                    <a href=\"#0\" data-date=\"16/01/2014\" class=\"border-after-blue bg-after-blue selected\">Expo 2016</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"28/02/2014\" class=\"border-after-blue bg-after-blue\">New Promo</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"20/04/2014\" class=\"border-after-blue bg-after-blue\">Meeting</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"20/05/2014\" class=\"border-after-blue bg-after-blue\">Launch</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"09/07/2014\" class=\"border-after-blue bg-after-blue\">Party</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"30/08/2014\" class=\"border-after-blue bg-after-blue\">Reports</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"15/09/2014\" class=\"border-after-blue bg-after-blue\">HR</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"01/11/2014\" class=\"border-after-blue bg-after-blue\">IPO</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"10/12/2014\" class=\"border-after-blue bg-after-blue\">Board</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"19/01/2015\" class=\"border-after-blue bg-after-blue\">Revenue</a>
                                                </li>
                                                <li>
                                                    <a href=\"#0\" data-date=\"03/03/2015\" class=\"border-after-blue bg-after-blue\">Dinner</a>
                                                </li>
                                            </ol>
                                            <span class=\"filling-line bg-blue\" aria-hidden=\"true\"></span>
                                        </div>
                                        <!-- .events -->
                                    </div>
                                    <!-- .events-wrapper -->
                                    <ul class=\"cd-timeline-navigation mt-ht-nav-icon\">
                                        <li>
                                            <a href=\"#0\" class=\"prev inactive btn blue md-skip\">
                                                <i class=\"fa fa-chevron-left\"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#0\" class=\"next btn blue md-skip\">
                                                <i class=\"fa fa-chevron-right\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- .cd-timeline-navigation -->
                                </div>
                                <!-- .timeline -->
                                <div class=\"events-content\">
                                    <ol>
                                        <li class=\"selected\" data-date=\"16/01/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Expo 2016 Launch</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_2.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Lisa Bold</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">23 February 2014</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod mi felis, aliquam at iaculis eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis mi felis, aliquam at
                                                    iaculis eu, onsectetur adipiscing elit finibus eu ex. Integer efficitur leo eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas onsectetur adipiscing elit nunc. Suspendisse potenti</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle dark btn-outline\">Read More</a>
                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-icon-only green pull-right\">
                                                    <i class=\"fa fa-twitter\"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li data-date=\"28/02/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Sending Shipment</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_3.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Hugh Grant</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">28 February 2014 : 10:15 AM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-outline green-jungle\">Download Shipment List</a>
                                                <div class=\"btn-group dropup pull-right\">
                                                    <button class=\"btn btn-circle blue-steel dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"false\"> Actions
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                                        <li>
                                                            <a href=\"javascript:;\">Action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Something else here </a>
                                                        </li>
                                                        <li class=\"divider\"> </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-date=\"20/04/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Blue Chambray</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_1.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue\">Rory Matthew</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">20 April 2014 : 10:45 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle red\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"20/05/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_2.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">20 May 2014 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"09/07/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Event Success</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('}assets/pages/media/users/avatar80_1.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Matt Goldman</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">9 July 2014 : 8:15 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle btn-outline purple-medium\">View Summary</a>
                                                <div class=\"btn-group dropup pull-right\">
                                                    <button class=\"btn btn-circle green dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" aria-expanded=\"false\"> Actions
                                                        <i class=\"fa fa-angle-down\"></i>
                                                    </button>
                                                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                                        <li>
                                                            <a href=\"javascript:;\">Action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Another action </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Something else here </a>
                                                        </li>
                                                        <li class=\"divider\"> </li>
                                                        <li>
                                                            <a href=\"javascript:;\">Separated link </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-date=\"30/08/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Conference Call</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_1.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Rory Matthew</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">30 August 2014 : 5:45 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <img class=\"timeline-body-img pull-left\" src=\"{{ asset('assets/pages/media/blog/5.jpg') }}\" alt=\"\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle red\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"15/09/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Conference Decision</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_5.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Jessica Wolf</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">15 September 2014 : 8:30 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <img class=\"timeline-body-img pull-right\" src=\"{{ asset('assets/pages/media/blog/6.jpg') }}\" alt=\"\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                    qui ut.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-sharp\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"01/11/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_2.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">1 November 2014 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"10/12/2014\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_2.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">10 December 2014 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"19/01/2015\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_2.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">19 January 2015 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                        <li data-date=\"03/03/2015\">
                                            <div class=\"mt-title\">
                                                <h2 class=\"mt-content-title\">Timeline Received</h2>
                                            </div>
                                            <div class=\"mt-author\">
                                                <div class=\"mt-avatar\">
                                                    <img src=\"{{ asset('assets/pages/media/users/avatar80_2.jpg') }}\" />
                                                </div>
                                                <div class=\"mt-author-name\">
                                                    <a href=\"javascript:;\" class=\"font-blue-madison\">Andres Iniesta</a>
                                                </div>
                                                <div class=\"mt-author-datetime font-grey-mint\">3 March 2015 : 12:20 PM</div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"mt-content border-grey-steel\">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget dolor
                                                    tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non
                                                    est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent dignissim luctus
                                                    risus sed sodales.</p>
                                                <a href=\"javascript:;\" class=\"btn btn-circle green-turquoise\">Read More</a>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <!-- .events-content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption caption-md\">
                                <i class=\"icon-bar-chart font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">Member Activity</span>
                                <span class=\"caption-helper\">weekly stats...</span>
                            </div>
                            <div class=\"actions\">
                                <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                    <label class=\"btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm active\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">Today</label>
                                    <label class=\"btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Week</label>
                                    <label class=\"btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Month</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row number-stats margin-bottom-30\">
                                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                    <div class=\"stat-left\">
                                        <div class=\"stat-chart\">
                                            <!-- do not line break \"sparkline_bar\" div. sparkline chart has an issue when the container div has line break -->
                                            <div id=\"sparkline_bar\"></div>
                                        </div>
                                        <div class=\"stat-number\">
                                            <div class=\"title\"> Total </div>
                                            <div class=\"number\"> 2460 </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                    <div class=\"stat-right\">
                                        <div class=\"stat-chart\">
                                            <!-- do not line break \"sparkline_bar\" div. sparkline chart has an issue when the container div has line break -->
                                            <div id=\"sparkline_bar2\"></div>
                                        </div>
                                        <div class=\"stat-number\">
                                            <div class=\"title\"> New </div>
                                            <div class=\"number\"> 719 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"table-scrollable table-scrollable-borderless\">
                                <table class=\"table table-hover table-light\">
                                    <thead>
                                    <tr class=\"uppercase\">
                                        <th colspan=\"2\"> MEMBER </th>
                                        <th> Earnings </th>
                                        <th> CASES </th>
                                        <th> CLOSED </th>
                                        <th> RATE </th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td class=\"fit\">
                                            <img class=\"user-pic rounded\" src=\"{{ asset('assets/pages/media/users/avatar4.jpg') }}\"> </td>
                                        <td>
                                            <a href=\"javascript:;\" class=\"primary-link\">Brain</a>
                                        </td>
                                        <td> \$345 </td>
                                        <td> 45 </td>
                                        <td> 124 </td>
                                        <td>
                                            <span class=\"bold theme-font\">80%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"fit\">
                                            <img class=\"user-pic rounded\" src=\"{{ asset('assets/pages/media/users/avatar5.jpg') }}\"> </td>
                                        <td>
                                            <a href=\"javascript:;\" class=\"primary-link\">Nick</a>
                                        </td>
                                        <td> \$560 </td>
                                        <td> 12 </td>
                                        <td> 24 </td>
                                        <td>
                                            <span class=\"bold theme-font\">67%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"fit\">
                                            <img class=\"user-pic rounded\" src=\"{{ asset('assets/pages/media/users/avatar6.jpg') }}\"> </td>
                                        <td>
                                            <a href=\"javascript:;\" class=\"primary-link\">Tim</a>
                                        </td>
                                        <td> \$1,345 </td>
                                        <td> 450 </td>
                                        <td> 46 </td>
                                        <td>
                                            <span class=\"bold theme-font\">98%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class=\"fit\">
                                            <img class=\"user-pic rounded\" src=\"{{ asset('assets/pages/media/users/avatar7.jpg') }}\"> </td>
                                        <td>
                                            <a href=\"javascript:;\" class=\"primary-link\">Tom</a>
                                        </td>
                                        <td> \$645 </td>
                                        <td> 50 </td>
                                        <td> 89 </td>
                                        <td>
                                            <span class=\"bold theme-font\">58%</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption caption-md\">
                                <i class=\"icon-bar-chart font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">Customer Support</span>
                                <span class=\"caption-helper\">45 pending</span>
                            </div>
                            <div class=\"inputs\">
                                <div class=\"portlet-input input-inline input-small \">
                                    <div class=\"input-icon right\">
                                        <i class=\"icon-magnifier\"></i>
                                        <input type=\"text\" class=\"form-control form-control-solid input-circle\" placeholder=\"search...\"> </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"scroller\" style=\"height: 338px;\" data-always-visible=\"1\" data-rail-visible1=\"0\" data-handle-color=\"#D7DCE2\">
                                <div class=\"general-item-list\">
                                    <div class=\"item\">
                                        <div class=\"item-head\">
                                            <div class=\"item-details\">
                                                <img class=\"item-pic rounded\" src=\"{{ asset('assets/pages/media/users/avatar4.jpg') }}\">
                                                <a href=\"\" class=\"item-name primary-link\">Nick Larson</a>
                                                <span class=\"item-label\">3 hrs ago</span>
                                            </div>
                                                    <span class=\"item-status\">
                                                        <span class=\"badge badge-empty badge-success\"></span> Open</span>
                                        </div>
                                        <div class=\"item-body\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"item-head\">
                                            <div class=\"item-details\">
                                                <img class=\"item-pic rounded\" src=\"{{ asset('assets/pages/media/users/avatar3.jpg') }}\">
                                                <a href=\"\" class=\"item-name primary-link\">Mark</a>
                                                <span class=\"item-label\">5 hrs ago</span>
                                            </div>
                                                    <span class=\"item-status\">
                                                        <span class=\"badge badge-empty badge-warning\"></span> Pending</span>
                                        </div>
                                        <div class=\"item-body\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet. </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"item-head\">
                                            <div class=\"item-details\">
                                                <img class=\"item-pic rounded\" src=\"{{ asset('assets/pages/media/users/avatar6.jpg') }}\">
                                                <a href=\"\" class=\"item-name primary-link\">Nick Larson</a>
                                                <span class=\"item-label\">8 hrs ago</span>
                                            </div>
                                                    <span class=\"item-status\">
                                                        <span class=\"badge badge-empty badge-primary\"></span> Closed</span>
                                        </div>
                                        <div class=\"item-body\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh. </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"item-head\">
                                            <div class=\"item-details\">
                                                <img class=\"item-pic rounded\" src=\"{{ asset('assets/pages/media/users/avatar7.jpg') }}\">
                                                <a href=\"\" class=\"item-name primary-link\">Nick Larson</a>
                                                <span class=\"item-label\">12 hrs ago</span>
                                            </div>
                                                    <span class=\"item-status\">
                                                        <span class=\"badge badge-empty badge-danger\"></span> Pending</span>
                                        </div>
                                        <div class=\"item-body\"> Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"item-head\">
                                            <div class=\"item-details\">
                                                <img class=\"item-pic rounded\" src=\"{{ asset('assets/pages/media/users/avatar9.jpg') }}\">
                                                <a href=\"\" class=\"item-name primary-link\">Richard Stone</a>
                                                <span class=\"item-label\">2 days ago</span>
                                            </div>
                                                    <span class=\"item-status\">
                                                        <span class=\"badge badge-empty badge-danger\"></span> Open</span>
                                        </div>
                                        <div class=\"item-body\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat. </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"item-head\">
                                            <div class=\"item-details\">
                                                <img class=\"item-pic rounded\" src=\"{{ asset('assets/pages/media/users/avatar8.jpg') }}\">
                                                <a href=\"\" class=\"item-name primary-link\">Dan</a>
                                                <span class=\"item-label\">3 days ago</span>
                                            </div>
                                                    <span class=\"item-status\">
                                                        <span class=\"badge badge-empty badge-warning\"></span> Pending</span>
                                        </div>
                                        <div class=\"item-body\"> Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                    </div>
                                    <div class=\"item\">
                                        <div class=\"item-head\">
                                            <div class=\"item-details\">
                                                <img class=\"item-pic rounded\" src=\"{{ asset('assets/pages/media/users/avatar2.jpg') }}\">
                                                <a href=\"\" class=\"item-name primary-link\">Larry</a>
                                                <span class=\"item-label\">4 hrs ago</span>
                                            </div>
                                                    <span class=\"item-status\">
                                                        <span class=\"badge badge-empty badge-success\"></span> Open</span>
                                        </div>
                                        <div class=\"item-body\"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-cursor font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">General Stats</span>
                            </div>
                            <div class=\"actions\">
                                <a href=\"javascript:;\" class=\"btn btn-sm btn-circle red easy-pie-chart-reload\">
                                    <i class=\"fa fa-repeat\"></i> Reload </a>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"easy-pie-chart\">
                                        <div class=\"number transactions\" data-percent=\"55\">
                                            <span>+55</span>% </div>
                                        <a class=\"title\" href=\"javascript:;\"> Transactions
                                            <i class=\"icon-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"margin-bottom-10 visible-sm\"> </div>
                                <div class=\"col-md-4\">
                                    <div class=\"easy-pie-chart\">
                                        <div class=\"number visits\" data-percent=\"85\">
                                            <span>+85</span>% </div>
                                        <a class=\"title\" href=\"javascript:;\"> New Visits
                                            <i class=\"icon-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"margin-bottom-10 visible-sm\"> </div>
                                <div class=\"col-md-4\">
                                    <div class=\"easy-pie-chart\">
                                        <div class=\"number bounce\" data-percent=\"46\">
                                            <span>-46</span>% </div>
                                        <a class=\"title\" href=\"javascript:;\"> Bounce
                                            <i class=\"icon-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-equalizer font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">Server Stats</span>
                                <span class=\"caption-helper\">monthly stats...</span>
                            </div>
                            <div class=\"tools\">
                                <a href=\"\" class=\"collapse\"> </a>
                                <a href=\"#portlet-config\" data-toggle=\"modal\" class=\"config\"> </a>
                                <a href=\"\" class=\"reload\"> </a>
                                <a href=\"\" class=\"remove\"> </a>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"sparkline-chart\">
                                        <div class=\"number\" id=\"sparkline_bar5\"></div>
                                        <a class=\"title\" href=\"javascript:;\"> Network
                                            <i class=\"icon-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"margin-bottom-10 visible-sm\"> </div>
                                <div class=\"col-md-4\">
                                    <div class=\"sparkline-chart\">
                                        <div class=\"number\" id=\"sparkline_bar6\"></div>
                                        <a class=\"title\" href=\"javascript:;\"> CPU Load
                                            <i class=\"icon-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class=\"margin-bottom-10 visible-sm\"> </div>
                                <div class=\"col-md-4\">
                                    <div class=\"sparkline-chart\">
                                        <div class=\"number\" id=\"sparkline_line\"></div>
                                        <a class=\"title\" href=\"javascript:;\"> Load Rate
                                            <i class=\"icon-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <!-- BEGIN REGIONAL STATS PORTLET-->
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-share font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">Regional Stats</span>
                            </div>
                            <div class=\"actions\">
                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                    <i class=\"icon-cloud-upload\"></i>
                                </a>
                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                    <i class=\"icon-wrench\"></i>
                                </a>
                                <a class=\"btn btn-circle btn-icon-only btn-default fullscreen\" data-container=\"false\" data-placement=\"bottom\" href=\"javascript:;\"> </a>
                                <a class=\"btn btn-circle btn-icon-only btn-default\" href=\"javascript:;\">
                                    <i class=\"icon-trash\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div id=\"region_statistics_loading\">
                                <img src=\"{{ asset('assets/global/img/loading.gif') }}\" alt=\"loading\" /> </div>
                            <div id=\"region_statistics_content\" class=\"display-none\">
                                <div class=\"btn-toolbar margin-bottom-10\">
                                    <div class=\"btn-group btn-group-circle\" data-toggle=\"buttons\">
                                        <a href=\"\" class=\"btn grey-salsa btn-sm active\"> Users </a>
                                        <a href=\"\" class=\"btn grey-salsa btn-sm\"> Orders </a>
                                    </div>
                                    <div class=\"btn-group pull-right\">
                                        <a href=\"\" class=\"btn btn-circle grey-salsa btn-sm dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Select Region
                                            <span class=\"fa fa-angle-down\"> </span>
                                        </a>
                                        <ul class=\"dropdown-menu pull-right\">
                                            <li>
                                                <a href=\"javascript:;\" id=\"regional_stat_world\"> World </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\" id=\"regional_stat_usa\"> USA </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\" id=\"regional_stat_europe\"> Europe </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\" id=\"regional_stat_russia\"> Russia </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\" id=\"regional_stat_germany\"> Germany </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id=\"vmap_world\" class=\"vmaps display-none\"> </div>
                                <div id=\"vmap_usa\" class=\"vmaps display-none\"> </div>
                                <div id=\"vmap_europe\" class=\"vmaps display-none\"> </div>
                                <div id=\"vmap_russia\" class=\"vmaps display-none\"> </div>
                                <div id=\"vmap_germany\" class=\"vmaps display-none\"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- END REGIONAL STATS PORTLET-->
                </div>
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <!-- BEGIN PORTLET-->
                    <div class=\"portlet light \">
                        <div class=\"portlet-title tabbable-line\">
                            <div class=\"caption\">
                                <i class=\"icon-globe font-dark hide\"></i>
                                <span class=\"caption-subject font-dark bold uppercase\">Feeds</span>
                            </div>
                            <ul class=\"nav nav-tabs\">
                                <li class=\"active\">
                                    <a href=\"#tab_1_1\" class=\"active\" data-toggle=\"tab\"> System </a>
                                </li>
                                <li>
                                    <a href=\"#tab_1_2\" data-toggle=\"tab\"> Activities </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"portlet-body\">
                            <!--BEGIN TABS-->
                            <div class=\"tab-content\">
                                <div class=\"tab-pane active\" id=\"tab_1_1\">
                                    <div class=\"scroller\" style=\"height: 339px;\" data-always-visible=\"1\" data-rail-visible=\"0\">
                                        <ul class=\"feeds\">
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-success\">
                                                                <i class=\"fa fa-bell-o\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> You have 4 pending tasks.
                                                                        <span class=\"label label-sm label-info\"> Take action
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
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New version v1.4 just lunched! </div>
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
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> Database server #12 overloaded. Please fix the issue. </div>
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
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
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
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 40 mins </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-warning\">
                                                                <i class=\"fa fa-plus\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New user registered. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 1.5 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-success\">
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
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-default\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 3 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-warning\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 5 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-info\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 18 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-default\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 21 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-info\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 22 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-default\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 21 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-info\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 22 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-default\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 21 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-info\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 22 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-default\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 21 hours </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-info\">
                                                                <i class=\"fa fa-bullhorn\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> New order received. Please take care of it. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 22 hours </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab_1_2\">
                                    <div class=\"scroller\" style=\"height: 290px;\" data-always-visible=\"1\" data-rail-visible1=\"1\">
                                        <ul class=\"feeds\">
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New order received </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> 10 mins </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <div class=\"col1\">
                                                    <div class=\"cont\">
                                                        <div class=\"cont-col1\">
                                                            <div class=\"label label-sm label-danger\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                            </div>
                                                        </div>
                                                        <div class=\"cont-col2\">
                                                            <div class=\"desc\"> Order #24DOP4 has been rejected.
                                                                        <span class=\"label label-sm label-danger \"> Take action
                                                                            <i class=\"fa fa-share\"></i>
                                                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col2\">
                                                    <div class=\"date\"> 24 mins </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"javascript:;\">
                                                    <div class=\"col1\">
                                                        <div class=\"cont\">
                                                            <div class=\"cont-col1\">
                                                                <div class=\"label label-sm label-success\">
                                                                    <i class=\"fa fa-bell-o\"></i>
                                                                </div>
                                                            </div>
                                                            <div class=\"cont-col2\">
                                                                <div class=\"desc\"> New user registered </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col2\">
                                                        <div class=\"date\"> Just now </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--END TABS-->
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-bubble font-dark hide\"></i>
                                <span class=\"caption-subject font-hide bold uppercase\">Recent Users</span>
                            </div>
                            <div class=\"actions\">
                                <div class=\"btn-group\">
                                    <a class=\"btn green-haze btn-outline btn-circle btn-sm\" href=\"javascript:;\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Actions
                                        <i class=\"fa fa-angle-down\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <a href=\"javascript:;\"> Option 1</a>
                                        </li>
                                        <li class=\"divider\"> </li>
                                        <li>
                                            <a href=\"javascript:;\">Option 2</a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">Option 3</a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">Option 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <!--begin: widget 1-1 -->
                                    <div class=\"mt-widget-1\">
                                        <div class=\"mt-icon\">
                                            <a href=\"#\">
                                                <i class=\"icon-plus\"></i>
                                            </a>
                                        </div>
                                        <div class=\"mt-img\">
                                            <img src=\"{{ asset('assets/pages/media/users/avatar80_8.jpg') }}\"> </div>
                                        <div class=\"mt-body\">
                                            <h3 class=\"mt-username\">Diana Ellison</h3>
                                            <p class=\"mt-user-title\"> Lorem Ipsum is simply dummy text. </p>
                                            <div class=\"mt-stats\">
                                                <div class=\"btn-group btn-group btn-group-justified\">
                                                    <a href=\"javascript:;\" class=\"btn font-red\">
                                                        <i class=\"icon-bubbles\"></i> 1,7k </a>
                                                    <a href=\"javascript:;\" class=\"btn font-green\">
                                                        <i class=\"icon-social-twitter\"></i> 2,6k </a>
                                                    <a href=\"javascript:;\" class=\"btn font-yellow\">
                                                        <i class=\"icon-emoticon-smile\"></i> 3,7k </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: widget 1-1 -->
                                </div>
                                <div class=\"col-md-4\">
                                    <!--begin: widget 1-2 -->
                                    <div class=\"mt-widget-1\">
                                        <div class=\"mt-icon\">
                                            <a href=\"#\">
                                                <i class=\"icon-plus\"></i>
                                            </a>
                                        </div>
                                        <div class=\"mt-img\">
                                            <img src=\"{{ asset('assets/pages/media/users/avatar80_7.jpg') }}\"> </div>
                                        <div class=\"mt-body\">
                                            <h3 class=\"mt-username\">Jason Baker</h3>
                                            <p class=\"mt-user-title\"> Lorem Ipsum is simply dummy text. </p>
                                            <div class=\"mt-stats\">
                                                <div class=\"btn-group btn-group btn-group-justified\">
                                                    <a href=\"javascript:;\" class=\"btn font-yellow\">
                                                        <i class=\"icon-bubbles\"></i> 1,7k </a>
                                                    <a href=\"javascript:;\" class=\"btn font-blue\">
                                                        <i class=\"icon-social-twitter\"></i> 2,6k </a>
                                                    <a href=\"javascript:;\" class=\"btn font-green\">
                                                        <i class=\"icon-emoticon-smile\"></i> 3,7k </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: widget 1-2 -->
                                </div>
                                <div class=\"col-md-4\">
                                    <!--begin: widget 1-3 -->
                                    <div class=\"mt-widget-1\">
                                        <div class=\"mt-icon\">
                                            <a href=\"#\">
                                                <i class=\"icon-plus\"></i>
                                            </a>
                                        </div>
                                        <div class=\"mt-img\">
                                            <img src=\"{{ asset('assets/pages/media/users/avatar80_6.jpg') }}\"> </div>
                                        <div class=\"mt-body\">
                                            <h3 class=\"mt-username\">Julia Berry</h3>
                                            <p class=\"mt-user-title\"> Lorem Ipsum is simply dummy text. </p>
                                            <div class=\"mt-stats\">
                                                <div class=\"btn-group btn-group btn-group-justified\">
                                                    <a href=\"javascript:;\" class=\"btn font-yellow\">
                                                        <i class=\"icon-bubbles\"></i> 1,7k </a>
                                                    <a href=\"javascript:;\" class=\"btn font-red\">
                                                        <i class=\"icon-social-twitter\"></i> 2,6k </a>
                                                    <a href=\"javascript:;\" class=\"btn font-green\">
                                                        <i class=\"icon-emoticon-smile\"></i> 3,7k </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: widget 1-3 -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"portlet light portlet-fit \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-microphone font-dark hide\"></i>
                                <span class=\"caption-subject bold font-dark uppercase\"> Recent Works</span>
                                <span class=\"caption-helper\">default option...</span>
                            </div>
                            <div class=\"actions\">
                                <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                    <label class=\"btn red btn-outline btn-circle btn-sm active\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">Settings</label>
                                    <label class=\"btn  red btn-outline btn-circle btn-sm\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Tools</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"mt-widget-2\">
                                        <div class=\"mt-head\" style=\"background-image: url({{ asset('assets/pages/img/background/32.jpg') }});\">
                                            <div class=\"mt-head-label\">
                                                <button type=\"button\" class=\"btn btn-success\">Manhattan</button>
                                            </div>
                                            <div class=\"mt-head-user\">
                                                <div class=\"mt-head-user-img\">
                                                    <img src=\"{{ asset('assets/pages/img/avatars/team7.jpg') }}\"> </div>
                                                <div class=\"mt-head-user-info\">
                                                    <span class=\"mt-user-name\">Chris Jagers</span>
                                                            <span class=\"mt-user-time\">
                                                                <i class=\"icon-emoticon-smile\"></i> 3 mins ago </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-body\">
                                            <h3 class=\"mt-body-title\"> Thomas Clark </h3>
                                            <p class=\"mt-body-description\"> It is a long established fact that a reader will be distracted </p>
                                            <ul class=\"mt-body-stats\">
                                                <li class=\"font-green\">
                                                    <i class=\"icon-emoticon-smile\"></i> 3,7k</li>
                                                <li class=\"font-yellow\">
                                                    <i class=\" icon-social-twitter\"></i> 3,7k</li>
                                                <li class=\"font-red\">
                                                    <i class=\"  icon-bubbles\"></i> 3,7k</li>
                                            </ul>
                                            <div class=\"mt-body-actions\">
                                                <div class=\"btn-group btn-group btn-group-justified\">
                                                    <a href=\"javascript:;\" class=\"btn\">
                                                        <i class=\"icon-bubbles\"></i> Bookmark </a>
                                                    <a href=\"javascript:;\" class=\"btn \">
                                                        <i class=\"icon-social-twitter\"></i> Share </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"mt-widget-2\">
                                        <div class=\"mt-head\" style=\"background-image: url({{ asset('assets/pages/img/background/43.jpg') }});\">
                                            <div class=\"mt-head-label\">
                                                <button type=\"button\" class=\"btn btn-danger\">London</button>
                                            </div>
                                            <div class=\"mt-head-user\">
                                                <div class=\"mt-head-user-img\">
                                                    <img src=\"{{ asset('assets/pages/img/avatars/team3.jpg') }}\"> </div>
                                                <div class=\"mt-head-user-info\">
                                                    <span class=\"mt-user-name\">Harry Harris</span>
                                                            <span class=\"mt-user-time\">
                                                                <i class=\"icon-user\"></i> 3 mins ago </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mt-body\">
                                            <h3 class=\"mt-body-title\"> Christian Davidson </h3>
                                            <p class=\"mt-body-description\"> It is a long established fact that a reader will be distracted </p>
                                            <ul class=\"mt-body-stats\">
                                                <li class=\"font-green\">
                                                    <i class=\"icon-emoticon-smile\"></i> 3,7k</li>
                                                <li class=\"font-yellow\">
                                                    <i class=\" icon-social-twitter\"></i> 3,7k</li>
                                                <li class=\"font-red\">
                                                    <i class=\"  icon-bubbles\"></i> 3,7k</li>
                                            </ul>
                                            <div class=\"mt-body-actions\">
                                                <div class=\"btn-group btn-group btn-group-justified\">
                                                    <a href=\"javascript:;\" class=\"btn \">
                                                        <i class=\"icon-bubbles\"></i> Bookmark </a>
                                                    <a href=\"javascript:;\" class=\"btn \">
                                                        <i class=\"icon-social-twitter\"></i> Share </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xs-12 col-sm-12\">
                    <div class=\"portlet light portlet-fit \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-microphone font-dark hide\"></i>
                                <span class=\"caption-subject bold font-dark uppercase\"> Recent Projects</span>
                                <span class=\"caption-helper\">default option...</span>
                            </div>
                            <div class=\"actions\">
                                <div class=\"btn-group btn-group-devided\" data-toggle=\"buttons\">
                                    <label class=\"btn blue btn-outline btn-circle btn-sm active\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option1\">Actions</label>
                                    <label class=\"btn  blue btn-outline btn-circle btn-sm\">
                                        <input type=\"radio\" name=\"options\" class=\"toggle\" id=\"option2\">Tools</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"mt-widget-4\">
                                        <div class=\"mt-img-container\">
                                            <img src=\"{{ asset('assets/pages/img/background/34.jpg') }}\" /> </div>
                                        <div class=\"mt-container bg-purple-opacity\">
                                            <div class=\"mt-head-title\"> Website Revamp & Deployment </div>
                                            <div class=\"mt-body-icons\">
                                                <a href=\"#\">
                                                    <i class=\" icon-pencil\"></i>
                                                </a>
                                                <a href=\"#\">
                                                    <i class=\" icon-map\"></i>
                                                </a>
                                                <a href=\"#\">
                                                    <i class=\" icon-trash\"></i>
                                                </a>
                                            </div>
                                            <div class=\"mt-footer-button\">
                                                <button type=\"button\" class=\"btn btn-circle btn-danger btn-sm\">Dior</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"mt-widget-4\">
                                        <div class=\"mt-img-container\">
                                            <img src=\"{{ asset('assets/pages/img/background/46.jpg') }}\" /> </div>
                                        <div class=\"mt-container bg-green-opacity\">
                                            <div class=\"mt-head-title\"> CRM Development & Deployment </div>
                                            <div class=\"mt-body-icons\">
                                                <a href=\"#\">
                                                    <i class=\" icon-social-twitter\"></i>
                                                </a>
                                                <a href=\"#\">
                                                    <i class=\" icon-bubbles\"></i>
                                                </a>
                                                <a href=\"#\">
                                                    <i class=\" icon-bell\"></i>
                                                </a>
                                            </div>
                                            <div class=\"mt-footer-button\">
                                                <button type=\"button\" class=\"btn btn-circle blue-ebonyclay btn-sm\">Nike</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"mt-widget-4\">
                                        <div class=\"mt-img-container\">
                                            <img src=\"{{ asset('assets/pages/img/background/37.jpg') }}\" /> </div>
                                        <div class=\"mt-container bg-dark-opacity\">
                                            <div class=\"mt-head-title\"> Marketing Campaigns </div>
                                            <div class=\"mt-body-icons\">
                                                <a href=\"#\">
                                                    <i class=\" icon-bubbles\"></i>
                                                </a>
                                                <a href=\"#\">
                                                    <i class=\" icon-map\"></i>
                                                </a>
                                                <a href=\"#\">
                                                    <i class=\" icon-cup\"></i>
                                                </a>
                                            </div>
                                            <div class=\"mt-footer-button\">
                                                <button type=\"button\" class=\"btn btn-circle btn-success btn-sm\">Honda</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"portlet light portlet-fit \">
                        <div class=\"portlet-title\">
                            <div class=\"caption\">
                                <i class=\"icon-microphone font-dark hide\"></i>
                                <span class=\"caption-subject bold font-dark uppercase\"> Activities</span>
                                <span class=\"caption-helper\">default option...</span>
                            </div>
                            <div class=\"actions\">
                                <div class=\"btn-group\">
                                    <a class=\"btn red btn-outline btn-circle btn-sm\" href=\"javascript:;\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\"> Actions
                                        <i class=\"fa fa-angle-down\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <a href=\"javascript:;\"> Option 1</a>
                                        </li>
                                        <li class=\"divider\"> </li>
                                        <li>
                                            <a href=\"javascript:;\">Option 2</a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">Option 3</a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">Option 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"portlet-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"mt-widget-3\">
                                        <div class=\"mt-head bg-blue-hoki\">
                                            <div class=\"mt-head-icon\">
                                                <i class=\" icon-social-twitter\"></i>
                                            </div>
                                            <div class=\"mt-head-desc\"> Lorem Ipsum is simply dummy text of the ... </div>
                                            <span class=\"mt-head-date\"> 25 Jan, 2015 </span>
                                            <div class=\"mt-head-button\">
                                                <button type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Add</button>
                                            </div>
                                        </div>
                                        <div class=\"mt-body-actions-icons\">
                                            <div class=\"btn-group btn-group btn-group-justified\">
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-align-justify\"></i>
                                                            </span>RECORD </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-camera\"></i>
                                                            </span>PHOTO </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-calendar\"></i>
                                                            </span>DATE </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-record\"></i>
                                                            </span>RANC </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"mt-widget-3\">
                                        <div class=\"mt-head bg-red\">
                                            <div class=\"mt-head-icon\">
                                                <i class=\"icon-user\"></i>
                                            </div>
                                            <div class=\"mt-head-desc\"> Lorem Ipsum is simply dummy text of the ... </div>
                                            <span class=\"mt-head-date\"> 12 Feb, 2016 </span>
                                            <div class=\"mt-head-button\">
                                                <button type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Add</button>
                                            </div>
                                        </div>
                                        <div class=\"mt-body-actions-icons\">
                                            <div class=\"btn-group btn-group btn-group-justified\">
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-align-justify\"></i>
                                                            </span>RECORD </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-camera\"></i>
                                                            </span>PHOTO </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-calendar\"></i>
                                                            </span>DATE </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-record\"></i>
                                                            </span>RANC </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"mt-widget-3\">
                                        <div class=\"mt-head bg-green\">
                                            <div class=\"mt-head-icon\">
                                                <i class=\" icon-graduation\"></i>
                                            </div>
                                            <div class=\"mt-head-desc\"> Lorem Ipsum is simply dummy text of the ... </div>
                                            <span class=\"mt-head-date\"> 3 Mar, 2015 </span>
                                            <div class=\"mt-head-button\">
                                                <button type=\"button\" class=\"btn btn-circle btn-outline white btn-sm\">Add</button>
                                            </div>
                                        </div>
                                        <div class=\"mt-body-actions-icons\">
                                            <div class=\"btn-group btn-group btn-group-justified\">
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-align-justify\"></i>
                                                            </span>RECORD </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-camera\"></i>
                                                            </span>PHOTO </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-calendar\"></i>
                                                            </span>DATE </a>
                                                <a href=\"javascript:;\" class=\"btn \">
                                                            <span class=\"mt-icon\">
                                                                <i class=\"glyphicon glyphicon-record\"></i>
                                                            </span>RANC </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


{% endblock %}
{% block javascripts %}
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src=\"{{ asset('assets/global/plugins/moment.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/morris/morris.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/morris/raphael-min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/counterup/jquery.waypoints.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/counterup/jquery.counterup.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/amcharts/amcharts/amcharts.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/amcharts/amcharts/serial.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/amcharts/amcharts/pie.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/amcharts/amcharts/radar.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/amcharts/amcharts/themes/light.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/amcharts/amcharts/themes/patterns.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/amcharts/amcharts/themes/chalk.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/amcharts/ammap/ammap.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/amcharts/amstockcharts/amstock.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/horizontal-timeline/horizontal-timeline.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/flot/jquery.flot.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/flot/jquery.flot.resize.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/flot/jquery.flot.categories.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/jquery.sparkline.min.js') }}\"  type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src=\"{{ asset('assets/pages/scripts/dashboard.min.js') }}\" type=\"text/javascript\"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
{% endblock %}

", "default/index.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app\\Resources\\views\\default\\index.html.twig");
    }
}
