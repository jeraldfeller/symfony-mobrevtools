<?php

/* reports/logtracker.html.twig */
class __TwigTemplate_9f784017a3ecd696725a6ca52bd678266f6303cad81af14880c1ba7ada23ea1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/logtracker.html.twig", 1);
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
        $__internal_0cbe638faed28570233b9aa8f1ac5e638666149ad38d053d40ad522b84b72777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cbe638faed28570233b9aa8f1ac5e638666149ad38d053d40ad522b84b72777->enter($__internal_0cbe638faed28570233b9aa8f1ac5e638666149ad38d053d40ad522b84b72777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/logtracker.html.twig"));

        $__internal_c1fced7462235929d7083238fdd31e15e280d7757e8058690ddb38007a2d7219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1fced7462235929d7083238fdd31e15e280d7757e8058690ddb38007a2d7219->enter($__internal_c1fced7462235929d7083238fdd31e15e280d7757e8058690ddb38007a2d7219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/logtracker.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cbe638faed28570233b9aa8f1ac5e638666149ad38d053d40ad522b84b72777->leave($__internal_0cbe638faed28570233b9aa8f1ac5e638666149ad38d053d40ad522b84b72777_prof);

        
        $__internal_c1fced7462235929d7083238fdd31e15e280d7757e8058690ddb38007a2d7219->leave($__internal_c1fced7462235929d7083238fdd31e15e280d7757e8058690ddb38007a2d7219_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37e59b12ef676af78f4b838ca0c969f8e6e8cbd6218469d101e1ed7445ce1abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e59b12ef676af78f4b838ca0c969f8e6e8cbd6218469d101e1ed7445ce1abd->enter($__internal_37e59b12ef676af78f4b838ca0c969f8e6e8cbd6218469d101e1ed7445ce1abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0e5b38863fd797e8802a5bdcb596037fbbd1394cc09cc2c82f80c08f43fdb813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5b38863fd797e8802a5bdcb596037fbbd1394cc09cc2c82f80c08f43fdb813->enter($__internal_0e5b38863fd797e8802a5bdcb596037fbbd1394cc09cc2c82f80c08f43fdb813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/clockface/css/clockface.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <style>
        .bootstrap-tagsinput {
            width: 100% !important;
        }
    </style>
";
        
        $__internal_0e5b38863fd797e8802a5bdcb596037fbbd1394cc09cc2c82f80c08f43fdb813->leave($__internal_0e5b38863fd797e8802a5bdcb596037fbbd1394cc09cc2c82f80c08f43fdb813_prof);

        
        $__internal_37e59b12ef676af78f4b838ca0c969f8e6e8cbd6218469d101e1ed7445ce1abd->leave($__internal_37e59b12ef676af78f4b838ca0c969f8e6e8cbd6218469d101e1ed7445ce1abd_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_05c7b6580395db53f12954839c1637a6cc6fd9928f2b3abe8714d2de9b88e01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c7b6580395db53f12954839c1637a6cc6fd9928f2b3abe8714d2de9b88e01e->enter($__internal_05c7b6580395db53f12954839c1637a6cc6fd9928f2b3abe8714d2de9b88e01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_d361e63e296083dad644eb57bfd2883c273662b62aabcdf387f39e7a199ec5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d361e63e296083dad644eb57bfd2883c273662b62aabcdf387f39e7a199ec5c4->enter($__internal_d361e63e296083dad644eb57bfd2883c273662b62aabcdf387f39e7a199ec5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 19
        echo "
";
        
        $__internal_d361e63e296083dad644eb57bfd2883c273662b62aabcdf387f39e7a199ec5c4->leave($__internal_d361e63e296083dad644eb57bfd2883c273662b62aabcdf387f39e7a199ec5c4_prof);

        
        $__internal_05c7b6580395db53f12954839c1637a6cc6fd9928f2b3abe8714d2de9b88e01e->leave($__internal_05c7b6580395db53f12954839c1637a6cc6fd9928f2b3abe8714d2de9b88e01e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb818eec73aec1c5517c321494b25d163066a68ae0cbd2ca2b9f407cc667fe35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb818eec73aec1c5517c321494b25d163066a68ae0cbd2ca2b9f407cc667fe35->enter($__internal_cb818eec73aec1c5517c321494b25d163066a68ae0cbd2ca2b9f407cc667fe35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61ff9edf7313c88ccc7c6a0d0b1d2c90d3234b1d82f12ca7051fc494452383f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ff9edf7313c88ccc7c6a0d0b1d2c90d3234b1d82f12ca7051fc494452383f0->enter($__internal_61ff9edf7313c88ccc7c6a0d0b1d2c90d3234b1d82f12ca7051fc494452383f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "    <h1 class=\"page-title\"> Reports

    </h1>
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"/\">Home</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>Reports</span>
             <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>";
        // line 37
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
        <div class=\"col-lg-12\">
            <div class=\"portlet light\">
                <div class=\"portlet-title\">

                    <div class=\"row\">
                        <div class=\"form-group\">
                             <div class=\"col-md-2\">
                                <button type=\"button\" id=\"refreshTable\" class=\"btn blue spinnerBtn ladda-button\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-refresh\"></i> Reload Table</span></button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=\"tools\"> </div>
                </div>

                    <div class=\"portlet-body\">

                        <div class=\"row\">

                            <div class=\"col-lg-12\">

                                    <table class=\"table table-striped table-bordered table-hover dt-responsive table-header-fixed\" width=\"100%\" id=\"datatable-responsive\">
                                        <thead>
                                        <tr>
                                             <th>Id </th>
                                            <th>Page Name </th>
                                            <th>Geo</th>
                                            <th>TID </th>
                                            <th>Campid </th>
                                            <th>Conversion </th>
                                            <th>UA </th>
                                            <th>IP</th>
                                            <th>Visit Count</th>
                                            <th>Color Density</th>
                                            <th>Resolution</th>
                                            <th>Orientation</th>

                                            <th>Platform</th>
                                            <th>Fonts</th>
                                            <th>App Version</th>
                                            <th>No of Plugins</th>
                                            <th>Plugins</th>
                                            <th>Date/Time</th>
                                            <th>TZ</th>
                                            <th>Country</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_61ff9edf7313c88ccc7c6a0d0b1d2c90d3234b1d82f12ca7051fc494452383f0->leave($__internal_61ff9edf7313c88ccc7c6a0d0b1d2c90d3234b1d82f12ca7051fc494452383f0_prof);

        
        $__internal_cb818eec73aec1c5517c321494b25d163066a68ae0cbd2ca2b9f407cc667fe35->leave($__internal_cb818eec73aec1c5517c321494b25d163066a68ae0cbd2ca2b9f407cc667fe35_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5141b2787f8b3e41ca63fca8d61355b79fcd273a76a7b8671d533aca51938ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5141b2787f8b3e41ca63fca8d61355b79fcd273a76a7b8671d533aca51938ae->enter($__internal_e5141b2787f8b3e41ca63fca8d61355b79fcd273a76a7b8671d533aca51938ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d6694986c52a343c82e36af1811977b844aeb28b4eef07d85466590e6813b26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6694986c52a343c82e36af1811977b844aeb28b4eef07d85466590e6813b26a->enter($__internal_d6694986c52a343c82e36af1811977b844aeb28b4eef07d85466590e6813b26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 132
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/autosize/autosize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/clockface/js/clockface.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/scripts/components-date-time-pickers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        Ladda.bind( '.spinnerBtn' );
    </script>

    <script>
        var lastChecked = null;
        /* Custom filtering function which will filter data in column four between two values */



        \$(document).on('ready', function() {

            var fixedHeaderOffset = 0;
            if (App.getViewPort().width < App.getResponsiveBreakpoint('md')) {
                if (\$('.page-header').hasClass('page-header-fixed-mobile')) {
                    fixedHeaderOffset = \$('.page-header').outerHeight(true);
                }
            } else if (\$('.page-header').hasClass('navbar-fixed-top')) {
                fixedHeaderOffset = \$('.page-header').outerHeight(true);
            } else if (\$('body').hasClass('page-header-fixed')) {
                fixedHeaderOffset = 64; // admin 5 fixed height
            }
            var table = \$('#datatable-responsive');
            var oTable = \$('#datatable-responsive').DataTable({
                fixedHeader: {
                    header: true,
                    headerOffset: fixedHeaderOffset
                },
                \"bProcessing\": true,
                \"bServerSide\": true,
                \"sAjaxSource\": \"/ajax/get-reports-log-tracker\",

                responsive: {
                    details: {

                    }
                },
                \"iDisplayLength\": 20,
                \"lengthMenu\": [
                    [20, 500, 1000, -1],
                    [20, 500, 1000, \"All\"] // change per page values here
                ],
                \"order\": [[ 0, \"desc\" ]],
                \"columnDefs\": [
                    {
                        \"targets\": [ 0 ],
                        \"visible\": false,
                        \"searchable\": false
                    }
                ],
                select: {
                    style: 'os',
                    selector: 'td:first-child'
                },
                //dom: '<\"wrapper\"lBfrtip>',
                //dom: '<lB<frt>ip>',
                \"dom\": \"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>\",
                buttons: [
                    {
                        extend: 'print',
                        className: 'btn blue btn-outline',
                        text: '<i class=\"fa fa-print\"></i> Print',
                        title: 'Log Tracker',
                        exportOptions: {
                            columns: [1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn green btn-outline',
                        text: '<i class=\"fa fa-file-pdf-o\"></i> PDF',
                        title: 'Log Tracker',
                        exportOptions: {
                            columns: [1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn purple btn-outline ',
                        text: '<i class=\"fa fa-file-excel-o\"></i> CSV',
                        title: 'Log Tracker',
                        exportOptions: {
                            columns: [1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn dark btn-outline ',
                        text: '<i class=\"fa fa-eye\"></i> Visible Columns'
                    }
                ]


            });


            \$('#refreshTable').click(function(){
                var l = Ladda.create(\$(this)[0]);
                l.start();
                oTable.ajax.reload(function () {
                    l.stop();
                });
            })
            setInterval(function(){
                oTable.ajax.reload();
            }, 300000);

        });

    </script>

    <!-- AJAX CALLS -->

    <!-- END AJAX CALLS -->
";
        
        $__internal_d6694986c52a343c82e36af1811977b844aeb28b4eef07d85466590e6813b26a->leave($__internal_d6694986c52a343c82e36af1811977b844aeb28b4eef07d85466590e6813b26a_prof);

        
        $__internal_e5141b2787f8b3e41ca63fca8d61355b79fcd273a76a7b8671d533aca51938ae->leave($__internal_e5141b2787f8b3e41ca63fca8d61355b79fcd273a76a7b8671d533aca51938ae_prof);

    }

    public function getTemplateName()
    {
        return "reports/logtracker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 140,  285 => 139,  281 => 138,  277 => 137,  273 => 136,  269 => 135,  265 => 134,  261 => 133,  256 => 132,  247 => 131,  143 => 37,  126 => 22,  117 => 21,  106 => 19,  103 => 17,  94 => 16,  77 => 9,  73 => 8,  69 => 7,  65 => 6,  61 => 5,  57 => 4,  52 => 3,  43 => 2,  11 => 1,);
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
    <link href=\"{{ asset('assets/global/plugins/select2/css/select2.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/clockface/css/clockface.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <style>
        .bootstrap-tagsinput {
            width: 100% !important;
        }
    </style>
{% endblock %}
{% block nav %}
    {{ render(controller(
    'AppBundle:Navmenu:getNavmenu'
    )) }}
{% endblock %}
{% block body %}
    <h1 class=\"page-title\"> Reports

    </h1>
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"/\">Home</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>Reports</span>
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
        <div class=\"col-lg-12\">
            <div class=\"portlet light\">
                <div class=\"portlet-title\">

                    <div class=\"row\">
                        <div class=\"form-group\">
                             <div class=\"col-md-2\">
                                <button type=\"button\" id=\"refreshTable\" class=\"btn blue spinnerBtn ladda-button\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-refresh\"></i> Reload Table</span></button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=\"tools\"> </div>
                </div>

                    <div class=\"portlet-body\">

                        <div class=\"row\">

                            <div class=\"col-lg-12\">

                                    <table class=\"table table-striped table-bordered table-hover dt-responsive table-header-fixed\" width=\"100%\" id=\"datatable-responsive\">
                                        <thead>
                                        <tr>
                                             <th>Id </th>
                                            <th>Page Name </th>
                                            <th>Geo</th>
                                            <th>TID </th>
                                            <th>Campid </th>
                                            <th>Conversion </th>
                                            <th>UA </th>
                                            <th>IP</th>
                                            <th>Visit Count</th>
                                            <th>Color Density</th>
                                            <th>Resolution</th>
                                            <th>Orientation</th>

                                            <th>Platform</th>
                                            <th>Fonts</th>
                                            <th>App Version</th>
                                            <th>No of Plugins</th>
                                            <th>Plugins</th>
                                            <th>Date/Time</th>
                                            <th>TZ</th>
                                            <th>Country</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('assets/global/plugins/autosize/autosize.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/moment.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/clockface/js/clockface.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/pages/scripts/components-date-time-pickers.js') }}\" type=\"text/javascript\"></script>
    <script>
        Ladda.bind( '.spinnerBtn' );
    </script>

    <script>
        var lastChecked = null;
        /* Custom filtering function which will filter data in column four between two values */



        \$(document).on('ready', function() {

            var fixedHeaderOffset = 0;
            if (App.getViewPort().width < App.getResponsiveBreakpoint('md')) {
                if (\$('.page-header').hasClass('page-header-fixed-mobile')) {
                    fixedHeaderOffset = \$('.page-header').outerHeight(true);
                }
            } else if (\$('.page-header').hasClass('navbar-fixed-top')) {
                fixedHeaderOffset = \$('.page-header').outerHeight(true);
            } else if (\$('body').hasClass('page-header-fixed')) {
                fixedHeaderOffset = 64; // admin 5 fixed height
            }
            var table = \$('#datatable-responsive');
            var oTable = \$('#datatable-responsive').DataTable({
                fixedHeader: {
                    header: true,
                    headerOffset: fixedHeaderOffset
                },
                \"bProcessing\": true,
                \"bServerSide\": true,
                \"sAjaxSource\": \"/ajax/get-reports-log-tracker\",

                responsive: {
                    details: {

                    }
                },
                \"iDisplayLength\": 20,
                \"lengthMenu\": [
                    [20, 500, 1000, -1],
                    [20, 500, 1000, \"All\"] // change per page values here
                ],
                \"order\": [[ 0, \"desc\" ]],
                \"columnDefs\": [
                    {
                        \"targets\": [ 0 ],
                        \"visible\": false,
                        \"searchable\": false
                    }
                ],
                select: {
                    style: 'os',
                    selector: 'td:first-child'
                },
                //dom: '<\"wrapper\"lBfrtip>',
                //dom: '<lB<frt>ip>',
                \"dom\": \"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>\",
                buttons: [
                    {
                        extend: 'print',
                        className: 'btn blue btn-outline',
                        text: '<i class=\"fa fa-print\"></i> Print',
                        title: 'Log Tracker',
                        exportOptions: {
                            columns: [1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn green btn-outline',
                        text: '<i class=\"fa fa-file-pdf-o\"></i> PDF',
                        title: 'Log Tracker',
                        exportOptions: {
                            columns: [1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn purple btn-outline ',
                        text: '<i class=\"fa fa-file-excel-o\"></i> CSV',
                        title: 'Log Tracker',
                        exportOptions: {
                            columns: [1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn dark btn-outline ',
                        text: '<i class=\"fa fa-eye\"></i> Visible Columns'
                    }
                ]


            });


            \$('#refreshTable').click(function(){
                var l = Ladda.create(\$(this)[0]);
                l.start();
                oTable.ajax.reload(function () {
                    l.stop();
                });
            })
            setInterval(function(){
                oTable.ajax.reload();
            }, 300000);

        });

    </script>

    <!-- AJAX CALLS -->

    <!-- END AJAX CALLS -->
{% endblock %}
", "reports/logtracker.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app\\Resources\\views\\reports\\logtracker.html.twig");
    }
}
