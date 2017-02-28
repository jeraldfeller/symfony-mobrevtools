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
        $__internal_2c35a9b4be7573871e0b5d2dcef80a25e137523e286bb6e6f6764b53497372ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c35a9b4be7573871e0b5d2dcef80a25e137523e286bb6e6f6764b53497372ec->enter($__internal_2c35a9b4be7573871e0b5d2dcef80a25e137523e286bb6e6f6764b53497372ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/logtracker.html.twig"));

        $__internal_fbe125433b31ddcefe989b0be851be542233d3e7cfa56966c7dbf93742a6688d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe125433b31ddcefe989b0be851be542233d3e7cfa56966c7dbf93742a6688d->enter($__internal_fbe125433b31ddcefe989b0be851be542233d3e7cfa56966c7dbf93742a6688d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/logtracker.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c35a9b4be7573871e0b5d2dcef80a25e137523e286bb6e6f6764b53497372ec->leave($__internal_2c35a9b4be7573871e0b5d2dcef80a25e137523e286bb6e6f6764b53497372ec_prof);

        
        $__internal_fbe125433b31ddcefe989b0be851be542233d3e7cfa56966c7dbf93742a6688d->leave($__internal_fbe125433b31ddcefe989b0be851be542233d3e7cfa56966c7dbf93742a6688d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cae4d6ba8c9aba626182a8a236178649a0b59027ab21cb311eeb956971bfa9f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae4d6ba8c9aba626182a8a236178649a0b59027ab21cb311eeb956971bfa9f1->enter($__internal_cae4d6ba8c9aba626182a8a236178649a0b59027ab21cb311eeb956971bfa9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e0e0312e8abe7a033e9b592bed4ab01a345c25c2347eff122495aab4229182a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e0312e8abe7a033e9b592bed4ab01a345c25c2347eff122495aab4229182a0->enter($__internal_e0e0312e8abe7a033e9b592bed4ab01a345c25c2347eff122495aab4229182a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e0e0312e8abe7a033e9b592bed4ab01a345c25c2347eff122495aab4229182a0->leave($__internal_e0e0312e8abe7a033e9b592bed4ab01a345c25c2347eff122495aab4229182a0_prof);

        
        $__internal_cae4d6ba8c9aba626182a8a236178649a0b59027ab21cb311eeb956971bfa9f1->leave($__internal_cae4d6ba8c9aba626182a8a236178649a0b59027ab21cb311eeb956971bfa9f1_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_eb7977bd00a56f9ffab5487e10c674ec4df336bc6bacd7f83b620667f4747032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7977bd00a56f9ffab5487e10c674ec4df336bc6bacd7f83b620667f4747032->enter($__internal_eb7977bd00a56f9ffab5487e10c674ec4df336bc6bacd7f83b620667f4747032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_70aa8e1f940aff58c0485192efa4161c059f311abec2d8bf04d69f4e67af2a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70aa8e1f940aff58c0485192efa4161c059f311abec2d8bf04d69f4e67af2a01->enter($__internal_70aa8e1f940aff58c0485192efa4161c059f311abec2d8bf04d69f4e67af2a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 19
        echo "
";
        
        $__internal_70aa8e1f940aff58c0485192efa4161c059f311abec2d8bf04d69f4e67af2a01->leave($__internal_70aa8e1f940aff58c0485192efa4161c059f311abec2d8bf04d69f4e67af2a01_prof);

        
        $__internal_eb7977bd00a56f9ffab5487e10c674ec4df336bc6bacd7f83b620667f4747032->leave($__internal_eb7977bd00a56f9ffab5487e10c674ec4df336bc6bacd7f83b620667f4747032_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_40c2b6940b010ef507f90d7a75c9fc62e76eb23b283ab29796b1a0cc7de6b0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c2b6940b010ef507f90d7a75c9fc62e76eb23b283ab29796b1a0cc7de6b0b7->enter($__internal_40c2b6940b010ef507f90d7a75c9fc62e76eb23b283ab29796b1a0cc7de6b0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34053bf0130decd5d4d0a35ac81f3ef06bf0fa36a2e9cdc5b202de6b4e4511f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34053bf0130decd5d4d0a35ac81f3ef06bf0fa36a2e9cdc5b202de6b4e4511f4->enter($__internal_34053bf0130decd5d4d0a35ac81f3ef06bf0fa36a2e9cdc5b202de6b4e4511f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_34053bf0130decd5d4d0a35ac81f3ef06bf0fa36a2e9cdc5b202de6b4e4511f4->leave($__internal_34053bf0130decd5d4d0a35ac81f3ef06bf0fa36a2e9cdc5b202de6b4e4511f4_prof);

        
        $__internal_40c2b6940b010ef507f90d7a75c9fc62e76eb23b283ab29796b1a0cc7de6b0b7->leave($__internal_40c2b6940b010ef507f90d7a75c9fc62e76eb23b283ab29796b1a0cc7de6b0b7_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5dcf6197d0bc76a7dca390927a28d0f3097ba281c28c3b0c5f538eee43b8f6b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcf6197d0bc76a7dca390927a28d0f3097ba281c28c3b0c5f538eee43b8f6b0->enter($__internal_5dcf6197d0bc76a7dca390927a28d0f3097ba281c28c3b0c5f538eee43b8f6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d61cceeea598b727e2a62a1a644eda32e5958cb2f794b1faaf162dd8ccb50b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61cceeea598b727e2a62a1a644eda32e5958cb2f794b1faaf162dd8ccb50b6e->enter($__internal_d61cceeea598b727e2a62a1a644eda32e5958cb2f794b1faaf162dd8ccb50b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d61cceeea598b727e2a62a1a644eda32e5958cb2f794b1faaf162dd8ccb50b6e->leave($__internal_d61cceeea598b727e2a62a1a644eda32e5958cb2f794b1faaf162dd8ccb50b6e_prof);

        
        $__internal_5dcf6197d0bc76a7dca390927a28d0f3097ba281c28c3b0c5f538eee43b8f6b0->leave($__internal_5dcf6197d0bc76a7dca390927a28d0f3097ba281c28c3b0c5f538eee43b8f6b0_prof);

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
