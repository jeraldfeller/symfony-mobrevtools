<?php

/* reports/conversions.html.twig */
class __TwigTemplate_22bbd5e3d1224597987319154c36d482e1c675ec4dcf78fefc562b170e1850f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/conversions.html.twig", 1);
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
        $__internal_32a50d4ad16fafc0c5f772f6de83f9cfa4c335a80062ed3e1e59c8a518db52c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a50d4ad16fafc0c5f772f6de83f9cfa4c335a80062ed3e1e59c8a518db52c4->enter($__internal_32a50d4ad16fafc0c5f772f6de83f9cfa4c335a80062ed3e1e59c8a518db52c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/conversions.html.twig"));

        $__internal_2f4437286056b622ad58cd2f4c3abf5f66974d16a27ded59a9c750330a5f2384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4437286056b622ad58cd2f4c3abf5f66974d16a27ded59a9c750330a5f2384->enter($__internal_2f4437286056b622ad58cd2f4c3abf5f66974d16a27ded59a9c750330a5f2384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/conversions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32a50d4ad16fafc0c5f772f6de83f9cfa4c335a80062ed3e1e59c8a518db52c4->leave($__internal_32a50d4ad16fafc0c5f772f6de83f9cfa4c335a80062ed3e1e59c8a518db52c4_prof);

        
        $__internal_2f4437286056b622ad58cd2f4c3abf5f66974d16a27ded59a9c750330a5f2384->leave($__internal_2f4437286056b622ad58cd2f4c3abf5f66974d16a27ded59a9c750330a5f2384_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_170bf47c2bce1086becbca8b58858775a8593c2ca2601e4337fc8462f1ee3852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170bf47c2bce1086becbca8b58858775a8593c2ca2601e4337fc8462f1ee3852->enter($__internal_170bf47c2bce1086becbca8b58858775a8593c2ca2601e4337fc8462f1ee3852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2971ab8a70e6f8ff2e51147d701b8f20d3b0286da923a0c5acff3c55ec02b91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2971ab8a70e6f8ff2e51147d701b8f20d3b0286da923a0c5acff3c55ec02b91b->enter($__internal_2971ab8a70e6f8ff2e51147d701b8f20d3b0286da923a0c5acff3c55ec02b91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2971ab8a70e6f8ff2e51147d701b8f20d3b0286da923a0c5acff3c55ec02b91b->leave($__internal_2971ab8a70e6f8ff2e51147d701b8f20d3b0286da923a0c5acff3c55ec02b91b_prof);

        
        $__internal_170bf47c2bce1086becbca8b58858775a8593c2ca2601e4337fc8462f1ee3852->leave($__internal_170bf47c2bce1086becbca8b58858775a8593c2ca2601e4337fc8462f1ee3852_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_7e4ab98e62d1c4b8e9716da8b0f2b77d533ba2517f81eca1d9182ff10fc65faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4ab98e62d1c4b8e9716da8b0f2b77d533ba2517f81eca1d9182ff10fc65faa->enter($__internal_7e4ab98e62d1c4b8e9716da8b0f2b77d533ba2517f81eca1d9182ff10fc65faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_c6bc7556acf38a95fa3d3eeb78831ea0ba8c00f5279e1c9bf9612668c5afe819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bc7556acf38a95fa3d3eeb78831ea0ba8c00f5279e1c9bf9612668c5afe819->enter($__internal_c6bc7556acf38a95fa3d3eeb78831ea0ba8c00f5279e1c9bf9612668c5afe819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 19
        echo "
";
        
        $__internal_c6bc7556acf38a95fa3d3eeb78831ea0ba8c00f5279e1c9bf9612668c5afe819->leave($__internal_c6bc7556acf38a95fa3d3eeb78831ea0ba8c00f5279e1c9bf9612668c5afe819_prof);

        
        $__internal_7e4ab98e62d1c4b8e9716da8b0f2b77d533ba2517f81eca1d9182ff10fc65faa->leave($__internal_7e4ab98e62d1c4b8e9716da8b0f2b77d533ba2517f81eca1d9182ff10fc65faa_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_3267bb383e0af73cebc05a052022f878b30db361c1db9991ee8be52b246ef1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3267bb383e0af73cebc05a052022f878b30db361c1db9991ee8be52b246ef1c8->enter($__internal_3267bb383e0af73cebc05a052022f878b30db361c1db9991ee8be52b246ef1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27328fa5bf8d534514127ac9f5146626ccaa4717639c6dc53f6162e6e512715b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27328fa5bf8d534514127ac9f5146626ccaa4717639c6dc53f6162e6e512715b->enter($__internal_27328fa5bf8d534514127ac9f5146626ccaa4717639c6dc53f6162e6e512715b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <div class=\"col-md-3 col-xs-12\">
                                <select id=\"selectFilterCampaign\" class=\"select2 form-control\" tabindex=\"-1\">
                                    <option></option>

                                </select>

                            </div>
                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterGeo\" class=\"select2 form-control\" tabindex=\"-1\">
                                    <option></option>

                                </select>

                            </div>


                            <div class=\"col-md-3 col-xs-12\">
                                <select id=\"selectFilterIsp\" class=\"select2 form-control\" tabindex=\"-1\">
                                    <option></option>

                                </select>

                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterMobileCarrier\" class=\"select2 form-control\" tabindex=\"-1\">
                                    <option></option>


                                </select>

                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterConnectionType\" class=\"select2 form-control\" tabindex=\"-1\">
                                    <option></option>

                                </select>

                            </div>


                            <br><br>
                            <br>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterIp\" class=\"select2 form-control\" tabindex=\"-1\">
                                    <option></option>

                                </select>

                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <input type=\"number\" step=\"10\" class=\"form-control\" id=\"inputFilterConversions\" placeholder=\"Conversions >=\">

                            </div>
                            <div class=\"col-md-2 col-xs-12\">
                                <input type=\"number\" step=\"10\" class=\"form-control\" id=\"inputFilterRevenue\" placeholder=\"Revenue >=\">
                            </div>
                            <div class=\"col-md-2 col-xs-12\">
                                <input type=\"number\" step=\"10\" class=\"form-control\" id=\"inputFilterCost\" placeholder=\"Cost >=\">
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <input type=\"number\" step=\"10\" class=\"form-control\" id=\"inputFilterProfit\" placeholder=\"Profit >=\">
                            </div>

                            <div class=\"col-md-1 col-xs-12\">
                                <input type=\"number\" step=\"10\" class=\"form-control\" id=\"inputFilterRoi\" placeholder=\"ROI >=\">
                            </div>

                            <div class=\"col-md-1\">
                                <button class=\"btn btn-info\" id=\"filterBtn\"> <i class=\"fa fa-search\"></i> Search</button>

                            </div>
                            <br><br>
                            <br>
                            <div class=\"col-md-3\">

                                <input type=\"hidden\" id=\"isExport\" value=\"0\">
                                <input type=\"hidden\" id=\"ipColumn\" value=\"2\">
                                <select class=\"form-control\" id=\"tableView\">
                                    <option value=\"byCampaign\">View IP Ranges by Campaign</option>
                                    <option value=\"ipRanges\">View All IP Ranges</option>
                                </select>
                            </div>

                            <div class=\"col-md-2\">
                                <button style=\"width: 100%;\" class=\"btn btn-info\" id=\"switchBtn\"> <i class=\"fa fa-exchange\"></i> Switch View</button>

                            </div>

                            <div class=\"col-md-1\">
                                <select class=\"form-control\" id=\"subnetLevel\">
                                    <option value=\"16\">/16</option>
                                    <option value=\"24\">/24</option>
                                </select>
                            </div>

                            <div class=\"col-md-5\">
                                <button class=\"btn btn-info\" id=\"switchSubnetLevel\"> <i class=\"fa fa-exchange\"></i> Switch Subnet Level</button>

                            </div>

                            <br>

                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"form-group\">

                            <div class=\"col-md-4 col-xs-12\">
                                            <div class=\"input-group\" id=\"defaultrange\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Select Date Range\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn default date-range-toggle\" type=\"button\">
                                                                <i class=\"fa fa-calendar\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                            </div>
                            <input type=\"hidden\" id=\"date-from\">
                            <input type=\"hidden\" id=\"date-to\">
                            <div class=\"col-md-1 col-xs-12\">
                                <select id=\"selectImportType\" class=\"form-control select2\">
                                    <option value=\"active\" selected>Active</option>
                                    <option value=\"archived\">Archived</option>
                                    <option value=\"imported\">Imported</option>
                                </select>
                            </div>
                            <div class=\"col-md-4 col-xs-12\">
                                <select id=\"chooseCampaign\" class=\"form-control select2_multiple\"  multiple=\"multiple\">

                                </select>
                            </div>
                            <div class=\"col-md-1 col-xs-12\">
                                <div class=\"caption font-dark\">
                                    <button type=\"button\" id=\"updateConversionsTable\" class=\"btn blue spinnerBtn ladda-button\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i id=\"updateIcon\" class=\"fa fa-refresh\"></i> <span  id=\"updateText\">Update</span></span></button>
                                </div>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn blue\"> <i class=\"fa fa-upload\"></i> Import</button>
                                        <button type=\"button\" class=\"btn blue dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <span class=\"caret\"></span>
                                            <span class=\"sr-only\">Toggle Dropdown</span>
                                        </button>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"#\" data-toggle=\"modal\" data-target=\".bs-example-modal-md\"><i class=\"fa fa-plus-circle\"></i> Add</a>
                                            </li>
                                            <li><a href=\"#\" id=\"updateLabelBtn\"><i class=\"fa fa-refresh\"></i> Update</a>
                                            </li>
                                            <li><a href=\"#\" id=\"removeLabelBtn\"><i class=\"fa fa-times-circle\"></i> Remove</a>
                                            </li>
                                        </ul>
                                </div>
                            </div>


                            <!-- Import Modals -->
                            <div class=\"modal fade bs-example-modal-md\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-md\">
                                    <div class=\"modal-content\">

                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                            </button>
                                            <h4 class=\"modal-title\" id=\"myModalLabel2\">Import IP Data</h4>
                                        </div>
                                        <form id=\"importFile\">
                                            <div class=\"modal-body\">
                                                <h4>Label</h4>
                                                <input type=\"text\" class=\"form-control\" id=\"importLabel\" name=\"importLabel\">
                                                <br>
                                                <label class=\"btn btn-primary btn-file\">
                                                    Choose File <i class=\"fa fa-folder-open\"></i>
                                                    <input type=\"file\" id=\"importFile\" name=\"importFile\"  style=\"display: none;\" onchange=\"\$('#upload-file-info').html(\$(this).val());\">
                                                </label>
                                                <span readonly id=\"upload-file-info\"> </span>

                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"submit\" class=\"btn btn-primary pull-right\" id=\"importSubmitBtn\"><i class=\"fa fa-upload\"></i> Import <span id=\"importSubmitBtn-spinner\" style=\"display: none;\"><i  class=\"fa fa-spinner fa-spin\"></i></span></button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>


<div class=\"modal fade\" id=\"modalDisplayLabelForUpdate\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-md\">
                                    <div class=\"modal-content\">

                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                            </button>
                                            <h4 class=\"modal-title\" id=\"updateLabelTitle\">Update</h4>
                                        </div>
                                        <form id=\"importFileUpdate\">
                                            <div class=\"modal-body\">
                                                <h4>Label</h4>
                                                <select id=\"selectLabelToUpdate\" name=\"labelToUpdate\" class=\"form-control\" tabindex=\"-1\" style=\"width: 100%;\">
                                                    <option></option>

                                                </select>
                                                <br>
                                                <br>
                                                <label class=\"btn btn-primary btn-file\">
                                                    Choose File <i class=\"fa fa-folder-open\"></i>
                                                    <input type=\"file\" id=\"importFileUpdate\" name=\"importFileUpdate\"  style=\"display: none;\" onchange=\"\$('#upload-file-info-update').html(\$(this).val());\">
                                                </label>
                                                <span readonly id=\"upload-file-info-update\"> </span>

                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"submit\" class=\"btn btn-primary pull-right spinnerBtn ladd-button\" id=\"importSubmitUpdateBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-upload\"></i> Import </span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class=\"modal fade\" id=\"modalDisplayLabelForDelete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-md\">
                                    <div class=\"modal-content\">

                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                            </button>
                                            <h4 class=\"modal-title\" id=\"myModalLabel2\">Delete Label</h4>
                                        </div>
                                            <div class=\"modal-body\">
                                                <h4>Label</h4>
                                                <select id=\"selectLabelToRemove\" class=\"select2_multiple_labels form-control\" tabindex=\"-1\" style=\"width: 100%;\" multiple=\"multiple\">
                                                    <option></option>

                                                </select>

                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"button\" id=\"deleteLabelBtn\" class=\"btn red spinnerBtn ladda-button\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-times-circle\"></i> Remove </span></button>
                                            </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=\"progress progress-striped\" id=\"divProgress\" style=\"display:none;\">
                            <div id=\"progressDiv\" class=\"progress-bar progress-bar-info progress-animated active\"  aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <br>
                    <br>
                    <div class=\"tools\"> </div>
                </div>

                    <div class=\"portlet-body\">

                        <div class=\"row\">

                            <div class=\"col-lg-12\">

                                    <table class=\"table table-striped table-bordered table-hover dt-responsive table-checkable order-column table-header-fixed\" width=\"100%\" id=\"datatable-responsive\">
                                        <thead>
                                        <tr>

                                            <th>Id </th>
                                            <th id=\"index1\">Campaign</th>
                                            <th id=\"index2\">IP Range</th>
                                            <th>Visits</th>
                                            <th>Conversions</th>
                                            <th>Revenue</th>
                                            <th>Cost</th>
                                            <th>Profit</th>
                                            <th>ROI</th>
                                            <th>Country</th>
                                            <th>ISP/Carrier</th>
                                            <th>Mobile Carrier</th>
                                            <th>Connection Type</th>
                                        </tr>
                                        </thead>
                                        <tfoot class=\"bg-primary\">
                                            <tr>
                                                <th colspan=\"3\">Total</th>
                                                <th><span id=\"totalVisits\"></span></th>
                                                <th><span id=\"totalConversions\"></span></th>
                                                <th><span id=\"totalRevenue\"></span></th>
                                                <th><span id=\"totalCost\"></span></th>
                                                <th><span id=\"totalProfit\"></span></th>
                                                <th colspan=\"5\"><span id=\"totalRoi\"></span></th>
                                            </tr>
                                        </tfoot>
                                        <tbody id=\"\">

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
        
        $__internal_27328fa5bf8d534514127ac9f5146626ccaa4717639c6dc53f6162e6e512715b->leave($__internal_27328fa5bf8d534514127ac9f5146626ccaa4717639c6dc53f6162e6e512715b_prof);

        
        $__internal_3267bb383e0af73cebc05a052022f878b30db361c1db9991ee8be52b246ef1c8->leave($__internal_3267bb383e0af73cebc05a052022f878b30db361c1db9991ee8be52b246ef1c8_prof);

    }

    // line 391
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_534caba303a7f0c541322428d9e6cc53fae362f5f7e8933927fbdf5a0fbd3018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534caba303a7f0c541322428d9e6cc53fae362f5f7e8933927fbdf5a0fbd3018->enter($__internal_534caba303a7f0c541322428d9e6cc53fae362f5f7e8933927fbdf5a0fbd3018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a92fdf4092d51cec1da9375e9000ee11a60b2ea50b5dff8344037ad32974b2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92fdf4092d51cec1da9375e9000ee11a60b2ea50b5dff8344037ad32974b2ee->enter($__internal_a92fdf4092d51cec1da9375e9000ee11a60b2ea50b5dff8344037ad32974b2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 392
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/autosize/autosize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/clockface/js/clockface.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/scripts/components-date-time-pickers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        Ladda.bind( '.spinnerBtn' );
    </script>
    <script type=\"text/javascript\">

        var ComponentsSelect2 = function() {

            var handleDemo = function() {

                // Set the \"bootstrap\" theme as the default theme for all Select2
                // widgets.
                //
                // @see https://github.com/select2/select2/issues/2927
                \$.fn.select2.defaults.set(\"theme\", \"bootstrap\");

                \$(\"#selectFilterCampaign\").select2({
                    placeholder: \"Select Campaign\",
                    allowClear: true,
                    width: null
                });
                \$(\"#selectFilterGeo\").select2({
                    placeholder: \"Select Geo\",
                    allowClear: true,
                    width: null
                });

                \$(\"#selectFilterIsp\").select2({
                    placeholder: \"Select ISP/Carrier\",
                    allowClear: true,
                    width: null
                });

                \$(\"#selectFilterMobileCarrier\").select2({
                    placeholder: \"Select Mobile Carrier\",
                    allowClear: true,
                    width: null
                });

                \$(\"#selectFilterConnectionType\").select2({
                    placeholder: \"Select Connection Type\",
                    allowClear: true,
                    width: null
                });

                \$(\"#selectFilterIp\").select2({
                    placeholder: \"Filter Individual IP\",
                    allowClear: true,
                    width: null
                });

                \$(\"#selectArchiveCampaign\").select2({
                    placeholder: \"Select Campaign\",
                    allowClear: true,
                    width: null
                });

                \$(\"#selectImportType\").select2({
                    placeholder: \"Select Import Type\",
                    allowClear: true,
                    width: null
                });

                \$(\"#selectLabelToRemove\").select2({
                    placeholder: \"Select Label\",
                    allowClear: true,
                    width: null
                });
                \$(\"#selectLabelToUpdate\").select2({
                    placeholder: \"Select Label\",
                    allowClear: true,
                    width: null
                });

                \$(\"#chooseCampaign\").select2({
                    placeholder: \"Selec Campaign\",
                    allowClear: true,
                    width: null
                });


                // @see https://select2.github.io/examples.html#data-ajax
                function formatRepo(repo) {
                    if (repo.loading) return repo.text;

                    var markup = \"<div class='select2-result-repository clearfix'>\" +
                            \"<div class='select2-result-repository__avatar'><img src='\" + repo.owner.avatar_url + \"' /></div>\" +
                            \"<div class='select2-result-repository__meta'>\" +
                            \"<div class='select2-result-repository__title'>\" + repo.full_name + \"</div>\";

                    if (repo.description) {
                        markup += \"<div class='select2-result-repository__description'>\" + repo.description + \"</div>\";
                    }

                    markup += \"<div class='select2-result-repository__statistics'>\" +
                    \"<div class='select2-result-repository__forks'><span class='glyphicon glyphicon-flash'></span> \" + repo.forks_count + \" Forks</div>\" +
                    \"<div class='select2-result-repository__stargazers'><span class='glyphicon glyphicon-star'></span> \" + repo.stargazers_count + \" Stars</div>\" +
                    \"<div class='select2-result-repository__watchers'><span class='glyphicon glyphicon-eye-open'></span> \" + repo.watchers_count + \" Watchers</div>\" +
                    \"</div>\" +
                    \"</div></div>\";

                    return markup;
                }

                function formatRepoSelection(repo) {
                    return repo.full_name || repo.text;
                }

                \$(\".js-data-example-ajax\").select2({
                    width: \"off\",
                    ajax: {
                        url: \"https://api.github.com/search/repositories\",
                        dataType: 'json',
                        delay: 250,
                        data: function(params) {
                            return {
                                q: params.term, // search term
                                page: params.page
                            };
                        },
                        processResults: function(data, page) {
                            // parse the results into the format expected by Select2.
                            // since we are using custom formatting functions we do not need to
                            // alter the remote JSON data
                            return {
                                results: data.items
                            };
                        },
                        cache: true
                    },
                    escapeMarkup: function(markup) {
                        return markup;
                    }, // let our custom formatter work
                    minimumInputLength: 1,
                    templateResult: formatRepo,
                    templateSelection: formatRepoSelection
                });

                \$(\"button[data-select2-open]\").click(function() {
                    \$(\"#\" + \$(this).data(\"select2-open\")).select2(\"open\");
                });

                \$(\":checkbox\").on(\"click\", function() {
                    \$(this).parent().nextAll(\"select\").prop(\"disabled\", !this.checked);
                });

                // copy Bootstrap validation states to Select2 dropdown
                //
                // add .has-waring, .has-error, .has-succes to the Select2 dropdown
                // (was #select2-drop in Select2 v3.x, in Select2 v4 can be selected via
                // body > .select2-container) if _any_ of the opened Select2's parents
                // has one of these forementioned classes (YUCK! ;-))
                \$(\".select2, .select2-multiple, .select2-allow-clear, .js-data-example-ajax\").on(\"select2:open\", function() {
                    if (\$(this).parents(\"[class*='has-']\").length) {
                        var classNames = \$(this).parents(\"[class*='has-']\")[0].className.split(/\\s+/);

                        for (var i = 0; i < classNames.length; ++i) {
                            if (classNames[i].match(\"has-\")) {
                                \$(\"body > .select2-container\").addClass(classNames[i]);
                            }
                        }
                    }
                });

                \$(\".js-btn-set-scaling-classes\").on(\"click\", function() {
                    \$(\"#select2-multiple-input-sm, #select2-single-input-sm\").next(\".select2-container--bootstrap\").addClass(\"input-sm\");
                    \$(\"#select2-multiple-input-lg, #select2-single-input-lg\").next(\".select2-container--bootstrap\").addClass(\"input-lg\");
                    \$(this).removeClass(\"btn-primary btn-outline\").prop(\"disabled\", true);
                });
            }

            return {
                //main function to initiate the module
                init: function() {
                    handleDemo();
                }
            };

        }();

        if (App.isAngularJsApp() === false) {
            jQuery(document).ready(function() {
                ComponentsSelect2.init();
            });
        }


    </script>
    <script>
        var lastChecked = null;
        /* Custom filtering function which will filter data in column four between two values */

        \$dropdownFilterColumns = [1, 2, 3];
        \$default = true;
        \$archiveDefault = true;
        \$tableView = \$('#tableView').val();

        \$(document).on('ready', function() {
            getActiveCampaigns(1, 'active');



            \$(\"#selectImportType\").select2().on(\"change\", function(e){
                if(\$(\"#selectImportType\").val() == 'archived'){
                    \$('#updateText').html('Update');
                    \$('#updateIcon').removeClass('fa-eye');
                    \$('#updateIcon').addClass('fa-refresh');
                    \$('#chooseCampaign').empty();
                    \$archiveCampaigns =  JSON.parse(localStorage.getItem(\"archiveCampaigns\"));
                    \$('#chooseCampaign').append(\$('<option>', {
                        value: 'All',
                        text: 'All'
                    }));
                    \$.each(\$archiveCampaigns, function(i, val) {
                        \$('#chooseCampaign').append(\$('<option>', {
                            value: val.campaignId + '|' + val.campaignName + '|' + val.countryName + '|0|100000|0',
                            text: val.campaignName
                        }));
                    });
                }else if(\$(\"#selectImportType\").val() == 'active'){
                    \$('#updateText').html('Update');
                    \$('#updateIcon').removeClass('fa-eye');
                    \$('#updateIcon').addClass('fa-refresh');
                    \$('#chooseCampaign').empty();
                    \$activeCampaigns =  JSON.parse(localStorage.getItem(\"activeCampaigns\"));
                    \$('#chooseCampaign').append(\$('<option>', {
                        value: 'All',
                        text: 'All'
                    }));
                    \$.each(\$activeCampaigns, function(i, val) {
                        \$('#chooseCampaign').append(\$('<option>', {
                            value: val.campaignId + '|' + val.campaignName + '|' + val.countryName + '|0|100000|0',
                            text: val.campaignName
                        }));
                    });
                }else if(\$(\"#selectImportType\").val() == 'imported'){
                    \$('#updateText').html('View');
                    \$('#updateIcon').removeClass('fa-refresh');
                    \$('#updateIcon').addClass('fa-eye');
                    \$('#chooseCampaign').empty();
                    \$importedCampaigns =  JSON.parse(localStorage.getItem(\"importedCampaigns\"));
                    console.log(\$importedCampaigns);
                    \$('#chooseCampaign').append(\$('<option>', {
                        value: 'All',
                        text: 'All'
                    }));
                    \$.each(\$importedCampaigns, function(i, val) {
                        \$('#chooseCampaign').append(\$('<option>', {
                            value: val.id + '|' + val.description,
                            text: val.description
                        }));
                    });
                }
            });


            if(\$('#isExport').val() == 1){
                \$tableView = 'ipRanges';

            }else{
                \$tableView = \$('#tableView').val()
            }

            \$('#switchBtn').click(function(){
                if(\$('#tableView').val() == 'ipRanges'){
                    \$tableView = \$('#tableView').val()
                    \$('#index1').html('IP Range');
                    \$('#index2').html('Campaign');
                    \$('#ipColumn').val(1);
                    console.log(\$tableView);
                    oTable.ajax.reload(function(){
                        oTable.fixedHeader.enable();
                    });

                }
                else if(\$('#tableView').val() == 'byCampaign'){
                    \$tableView = \$('#tableView').val()
                    \$('#index2').html('IP Range');
                    \$('#index1').html('Campaign');
                    \$('#ipColumn').val(2);
                    oTable.ajax.reload(function(){
                        oTable.fixedHeader.enable();
                    });
                }


            });




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
                    headerOffset: fixedHeaderOffset,
                    footer: true
                },
                \"bProcessing\": true,
                \"bServerSide\": true,
                \"sAjaxSource\": \"/ajax/get-reports-conversions\",
                \"fnServerParams\": function ( aoData ) {
                    aoData.push( {
                        \"name\": \"campaign\", \"value\": \$('#selectFilterCampaign').val()
                    } );
                    aoData.push( {
                        \"name\": \"geo\", \"value\": \$('#selectFilterGeo').val()
                    } );
                    aoData.push( {
                        \"name\": \"isp\", \"value\": \$('#selectFilterIsp').val()
                    } );
                    aoData.push( {
                        \"name\": \"mobileCarrier\", \"value\": \$('#selectFilterMobileCarrier').val()
                    } );
                    aoData.push( {
                        \"name\": \"connectionType\", \"value\": \$('#selectFilterConnectionType').val()
                    } );
                    aoData.push( {
                        \"name\": \"ip\", \"value\": \$('#selectFilterIp').val()
                    } );
                    aoData.push( {
                        \"name\": \"conversions\", \"value\": \$('#inputFilterConversions').val()
                    } );
                    aoData.push( {
                        \"name\": \"revenue\", \"value\": \$('#inputFilterRevenue').val()
                    } );
                    aoData.push( {
                        \"name\": \"cost\", \"value\": \$('#inputFilterCost').val()
                    } );
                    aoData.push( {
                        \"name\": \"profit\", \"value\": \$('#inputFilterProfit').val()
                    } );
                    aoData.push( {
                        \"name\": \"roi\", \"value\": \$('#inputFilterRoi').val()
                    } );
                    aoData.push( {
                        \"name\": \"tableView\", \"value\": \$tableView
                    } );
                    aoData.push( {
                        \"name\": \"subnetLevel\", \"value\":  \$('#subnetLevel').val()
                    } );

                },
                responsive: {
                    details: {

                    }
                },
                \"iDisplayLength\": 20,
                \"lengthMenu\": [
                    [20, 500, 1000, -1],
                    [20, 500, 1000, \"All\"] // change per page values here
                ],
                \"columnDefs\": [
                    {
                        \"className\": \"dt-right\",
                        \"targets\": [ 0 ],
                        \"visible\": false,
                        \"searchable\": false
                        //\"targets\": [2]
                    },

                ],
                \"order\": [[10, \"desc\"]],
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
                        title: 'Conversion List ' + \$('#date-from').val().replace(/\\//g, '.') + ' - ' + \$('#date-to').val().replace(/\\//g, '.') + ' ' + \$('#selectImportType').val(),
                            exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn green btn-outline',
                        text: '<i class=\"fa fa-file-pdf-o\"></i> PDF',
                        title: 'Conversion List ' + \$('#date-from').val().replace(/\\//g, '.') + ' - ' + \$('#date-to').val().replace(/\\//g, '.') + ' ' + \$('#selectImportType').val(),
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn purple btn-outline ',
                        text: '<i class=\"fa fa-file-excel-o\"></i> CSV',
                        title: 'Conversion List ' + \$('#date-from').val().replace(/\\//g, '.') + ' - ' + \$('#date-to').val().replace(/\\//g, '.') + ' ' + \$('#selectImportType').val(),
                        exportOptions: {
                            columns: ':visible'
                        },
                        action: function(e, dt, button, config) {
                            \$('#index1').html('IP Range');
                            \$('#index2').html('Campaign');
                            \$('#isExport').val('1');
                            \$tableView = 'ipRanges';
                            var table =  \$('#datatable-responsive').DataTable();

                            //order = [ 0, 2, 1, 3, 4, 5, 6, 7, 8 ,9, 10, 11, 12];
                            oTable.ajax.reload(function(){
                                \$('#isExport').val('0');
                                \$activeCampaignDate = \$('#conversions-datepicker').val()
                                \$archiveCmapaignDate = \$('#conversions-datepicker-archive').val()
                                \$archive = \$('#conversions-datepicker-archive').val();
                                if(\$archive != ''){
                                    \$include = 'archive';
                                    \$date = \$archiveCmapaignDate;
                                }else{

                                    if(\$default == true){
                                        \$include = 'default';
                                        \$date = \$activeCampaignDate;
                                    }else{
                                        \$include = 'traffic';
                                        \$date = \$activeCampaignDate;
                                    }
                                }

                                \$data = {
                                    date: \$date,
                                    archive: \$('#selectArchiveCampaign').val(),
                                    include: \$include,
                                    dateFilter: 1
                                }
                                \$.fn.dataTable.ext.buttons.csvHtml5.action(e, dt, button, config);
                            })
                            setTimeout(function(){
                                \$tableView = \$('#tableView').val();
                                oTable.ajax.reload(function(){
                                    if(\$tableView == 'ipRanges'){
                                        \$('#index1').html('IP Range');
                                        \$('#index2').html('Campaign');
                                    }else{
                                        \$('#index2').html('IP Range');
                                        \$('#index1').html('Campaign');
                                    }
                                });
                            }, 6000);

                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn dark btn-outline ',
                        text: '<i class=\"fa fa-eye\"></i> Visible Columns'
                    }
                ],
                colReorder: true,
                \"fnRowCallback\": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                    // Bold the grade for all 'A' grade browsers
                    if ( aData[7].includes('-') == true )
                    {
                        \$('td:eq(6)', nRow).css('color', 'red');
                    }else if(aData[7].includes != '\$0.00') {
                        \$('td:eq(6)', nRow).css('color', 'green');
                    }else{
                        \$('td:eq(6)', nRow).css('color', '');
                    }
                    if ( aData[8].includes('-') == true )
                    {
                        \$('td:eq(7)', nRow).css('color', 'red');
                    }else if(aData[8].includes != '\$0.00') {
                        \$('td:eq(7)', nRow).css('color', 'green');
                    }

                }


            });





            \$('#updateConversionsTable').click(function(){
                \$btn = \$(this)[0];
                \$default = false;
                \$from = \$('#date-from').val();
                \$to = \$('#date-to').val();
                \$include = \$('#selectImportType').val();
                \$('#progressDiv').css('width', '0%').attr('aria-valuenow', 0);
                if(\$('#chooseCampaign').val()[0] == 'All'){
                    var allItems = [];
                    var allOptions = \$(\".select2_multiple option\");
                    allOptions.each(function() {
                        allItems .push( \$(this).val() );
                    });
                    \$campaign = allItems;
                }else{
                    \$campaign = \$('#chooseCampaign').val()
                }
                \$data = {
                    from: \$from,
                    to: \$to,
                    campaign: \$campaign,
                    include: \$include,
                    count: \$campaign.length
                }

                oTable.fixedHeader.disable();
                if(\$(\"#selectImportType\").val() != 'imported'){
                    getReportConversions(\$btn, 'conversions', \$data);
                }else{
                    getImportedDataReport(\$btn, \$data);
                }


            })


            \$('#filterBtn').click(function(){
                if(\$('#tableView').val() == 'ipRanges'){
                    \$('#index1').html('IP Range');
                    \$('#index2').html('Campaign');
                    oTable.ajax.reload(function(){
                        oTable.fixedHeader.enable();
                    });
                    var l = Ladda.create(\$(this)[0]);
                    l.start();
                    oTable.ajax.reload(function () {
                        oTable.fixedHeader.enable();
                        l.stop();
                    });

                }
                else if(\$('#tableView').val() == 'byCampaign'){
                    \$('#index2').html('IP Range');
                    \$('#index1').html('Campaign');
                    var l = Ladda.create(\$(this)[0]);
                    l.start();
                    oTable.ajax.reload(function () {
                        oTable.fixedHeader.enable();
                        l.stop()
                    });
                }


            })

            \$('#switchSubnetLevel').click(function(){
                if(\$('#tableView').val() == 'ipRanges'){
                    \$('#index1').html('IP Range');
                    \$('#index2').html('Campaign');
                    var l = Ladda.create(\$(this)[0]);
                    l.start();
                    oTable.ajax.reload(function () {
                        oTable.fixedHeader.enable();
                        l.stop()
                    });

                }
                if(\$('#tableView').val() == 'byCampaign'){
                    \$('#index2').html('IP Range');
                    \$('#index1').html('Campaign');
                    var l = Ladda.create(\$(this)[0]);
                    l.start();
                    oTable.ajax.reload(function () {
                        oTable.fixedHeader.enable();
                        l.stop()
                    });
                }
            });

            \$('#removeLabelBtn').on('click', function(){
                getLabels('#modalDisplayLabelForDelete', '#selectLabelToRemove');
            });

            \$('#updateLabelBtn').on('click', function(){
                getLabels('#modalDisplayLabelForUpdate', '#selectLabelToUpdate');
            });

            \$('#deleteLabelBtn').on('click', function(){
                \$btn = \$(this)[0];
                \$label = \$('#selectLabelToRemove').val();

                console.log(\$label);
                removeLabel(\$label, \$btn);

            });



            window.onbeforeunload = function() {
                \$.ajax({
                    url: \"clear-tmp-files\",
                    cache: false,
                    async: false
                });

                return null;
            };
        });

    </script>

    <!-- AJAX CALLS -->
    <script src=\"";
        // line 1013
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/reports/conversions.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 1014
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/common/common.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
";
        
        $__internal_a92fdf4092d51cec1da9375e9000ee11a60b2ea50b5dff8344037ad32974b2ee->leave($__internal_a92fdf4092d51cec1da9375e9000ee11a60b2ea50b5dff8344037ad32974b2ee_prof);

        
        $__internal_534caba303a7f0c541322428d9e6cc53fae362f5f7e8933927fbdf5a0fbd3018->leave($__internal_534caba303a7f0c541322428d9e6cc53fae362f5f7e8933927fbdf5a0fbd3018_prof);

    }

    public function getTemplateName()
    {
        return "reports/conversions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1169 => 1014,  1165 => 1013,  549 => 400,  545 => 399,  541 => 398,  537 => 397,  533 => 396,  529 => 395,  525 => 394,  521 => 393,  516 => 392,  507 => 391,  143 => 37,  126 => 22,  117 => 21,  106 => 19,  103 => 17,  94 => 16,  77 => 9,  73 => 8,  69 => 7,  65 => 6,  61 => 5,  57 => 4,  52 => 3,  43 => 2,  11 => 1,);
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
                        <div class=\"col-md-3 col-xs-12\">
                                <select id=\"selectFilterCampaign\" class=\"select2 form-control\" tabindex=\"-1\">
                                    <option></option>

                                </select>

                            </div>
                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterGeo\" class=\"select2 form-control\" tabindex=\"-1\">
                                    <option></option>

                                </select>

                            </div>


                            <div class=\"col-md-3 col-xs-12\">
                                <select id=\"selectFilterIsp\" class=\"select2 form-control\" tabindex=\"-1\">
                                    <option></option>

                                </select>

                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterMobileCarrier\" class=\"select2 form-control\" tabindex=\"-1\">
                                    <option></option>


                                </select>

                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterConnectionType\" class=\"select2 form-control\" tabindex=\"-1\">
                                    <option></option>

                                </select>

                            </div>


                            <br><br>
                            <br>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterIp\" class=\"select2 form-control\" tabindex=\"-1\">
                                    <option></option>

                                </select>

                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <input type=\"number\" step=\"10\" class=\"form-control\" id=\"inputFilterConversions\" placeholder=\"Conversions >=\">

                            </div>
                            <div class=\"col-md-2 col-xs-12\">
                                <input type=\"number\" step=\"10\" class=\"form-control\" id=\"inputFilterRevenue\" placeholder=\"Revenue >=\">
                            </div>
                            <div class=\"col-md-2 col-xs-12\">
                                <input type=\"number\" step=\"10\" class=\"form-control\" id=\"inputFilterCost\" placeholder=\"Cost >=\">
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <input type=\"number\" step=\"10\" class=\"form-control\" id=\"inputFilterProfit\" placeholder=\"Profit >=\">
                            </div>

                            <div class=\"col-md-1 col-xs-12\">
                                <input type=\"number\" step=\"10\" class=\"form-control\" id=\"inputFilterRoi\" placeholder=\"ROI >=\">
                            </div>

                            <div class=\"col-md-1\">
                                <button class=\"btn btn-info\" id=\"filterBtn\"> <i class=\"fa fa-search\"></i> Search</button>

                            </div>
                            <br><br>
                            <br>
                            <div class=\"col-md-3\">

                                <input type=\"hidden\" id=\"isExport\" value=\"0\">
                                <input type=\"hidden\" id=\"ipColumn\" value=\"2\">
                                <select class=\"form-control\" id=\"tableView\">
                                    <option value=\"byCampaign\">View IP Ranges by Campaign</option>
                                    <option value=\"ipRanges\">View All IP Ranges</option>
                                </select>
                            </div>

                            <div class=\"col-md-2\">
                                <button style=\"width: 100%;\" class=\"btn btn-info\" id=\"switchBtn\"> <i class=\"fa fa-exchange\"></i> Switch View</button>

                            </div>

                            <div class=\"col-md-1\">
                                <select class=\"form-control\" id=\"subnetLevel\">
                                    <option value=\"16\">/16</option>
                                    <option value=\"24\">/24</option>
                                </select>
                            </div>

                            <div class=\"col-md-5\">
                                <button class=\"btn btn-info\" id=\"switchSubnetLevel\"> <i class=\"fa fa-exchange\"></i> Switch Subnet Level</button>

                            </div>

                            <br>

                        </div>
                    </div>
                    <br>
                    <div class=\"row\">
                        <div class=\"form-group\">

                            <div class=\"col-md-4 col-xs-12\">
                                            <div class=\"input-group\" id=\"defaultrange\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Select Date Range\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn default date-range-toggle\" type=\"button\">
                                                                <i class=\"fa fa-calendar\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                            </div>
                            <input type=\"hidden\" id=\"date-from\">
                            <input type=\"hidden\" id=\"date-to\">
                            <div class=\"col-md-1 col-xs-12\">
                                <select id=\"selectImportType\" class=\"form-control select2\">
                                    <option value=\"active\" selected>Active</option>
                                    <option value=\"archived\">Archived</option>
                                    <option value=\"imported\">Imported</option>
                                </select>
                            </div>
                            <div class=\"col-md-4 col-xs-12\">
                                <select id=\"chooseCampaign\" class=\"form-control select2_multiple\"  multiple=\"multiple\">

                                </select>
                            </div>
                            <div class=\"col-md-1 col-xs-12\">
                                <div class=\"caption font-dark\">
                                    <button type=\"button\" id=\"updateConversionsTable\" class=\"btn blue spinnerBtn ladda-button\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i id=\"updateIcon\" class=\"fa fa-refresh\"></i> <span  id=\"updateText\">Update</span></span></button>
                                </div>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn blue\"> <i class=\"fa fa-upload\"></i> Import</button>
                                        <button type=\"button\" class=\"btn blue dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <span class=\"caret\"></span>
                                            <span class=\"sr-only\">Toggle Dropdown</span>
                                        </button>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"#\" data-toggle=\"modal\" data-target=\".bs-example-modal-md\"><i class=\"fa fa-plus-circle\"></i> Add</a>
                                            </li>
                                            <li><a href=\"#\" id=\"updateLabelBtn\"><i class=\"fa fa-refresh\"></i> Update</a>
                                            </li>
                                            <li><a href=\"#\" id=\"removeLabelBtn\"><i class=\"fa fa-times-circle\"></i> Remove</a>
                                            </li>
                                        </ul>
                                </div>
                            </div>


                            <!-- Import Modals -->
                            <div class=\"modal fade bs-example-modal-md\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-md\">
                                    <div class=\"modal-content\">

                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                            </button>
                                            <h4 class=\"modal-title\" id=\"myModalLabel2\">Import IP Data</h4>
                                        </div>
                                        <form id=\"importFile\">
                                            <div class=\"modal-body\">
                                                <h4>Label</h4>
                                                <input type=\"text\" class=\"form-control\" id=\"importLabel\" name=\"importLabel\">
                                                <br>
                                                <label class=\"btn btn-primary btn-file\">
                                                    Choose File <i class=\"fa fa-folder-open\"></i>
                                                    <input type=\"file\" id=\"importFile\" name=\"importFile\"  style=\"display: none;\" onchange=\"\$('#upload-file-info').html(\$(this).val());\">
                                                </label>
                                                <span readonly id=\"upload-file-info\"> </span>

                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"submit\" class=\"btn btn-primary pull-right\" id=\"importSubmitBtn\"><i class=\"fa fa-upload\"></i> Import <span id=\"importSubmitBtn-spinner\" style=\"display: none;\"><i  class=\"fa fa-spinner fa-spin\"></i></span></button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>


<div class=\"modal fade\" id=\"modalDisplayLabelForUpdate\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-md\">
                                    <div class=\"modal-content\">

                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                            </button>
                                            <h4 class=\"modal-title\" id=\"updateLabelTitle\">Update</h4>
                                        </div>
                                        <form id=\"importFileUpdate\">
                                            <div class=\"modal-body\">
                                                <h4>Label</h4>
                                                <select id=\"selectLabelToUpdate\" name=\"labelToUpdate\" class=\"form-control\" tabindex=\"-1\" style=\"width: 100%;\">
                                                    <option></option>

                                                </select>
                                                <br>
                                                <br>
                                                <label class=\"btn btn-primary btn-file\">
                                                    Choose File <i class=\"fa fa-folder-open\"></i>
                                                    <input type=\"file\" id=\"importFileUpdate\" name=\"importFileUpdate\"  style=\"display: none;\" onchange=\"\$('#upload-file-info-update').html(\$(this).val());\">
                                                </label>
                                                <span readonly id=\"upload-file-info-update\"> </span>

                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"submit\" class=\"btn btn-primary pull-right spinnerBtn ladd-button\" id=\"importSubmitUpdateBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-upload\"></i> Import </span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class=\"modal fade\" id=\"modalDisplayLabelForDelete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                <div class=\"modal-dialog modal-md\">
                                    <div class=\"modal-content\">

                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                            </button>
                                            <h4 class=\"modal-title\" id=\"myModalLabel2\">Delete Label</h4>
                                        </div>
                                            <div class=\"modal-body\">
                                                <h4>Label</h4>
                                                <select id=\"selectLabelToRemove\" class=\"select2_multiple_labels form-control\" tabindex=\"-1\" style=\"width: 100%;\" multiple=\"multiple\">
                                                    <option></option>

                                                </select>

                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"button\" id=\"deleteLabelBtn\" class=\"btn red spinnerBtn ladda-button\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-times-circle\"></i> Remove </span></button>
                                            </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=\"progress progress-striped\" id=\"divProgress\" style=\"display:none;\">
                            <div id=\"progressDiv\" class=\"progress-bar progress-bar-info progress-animated active\"  aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <br>
                    <br>
                    <div class=\"tools\"> </div>
                </div>

                    <div class=\"portlet-body\">

                        <div class=\"row\">

                            <div class=\"col-lg-12\">

                                    <table class=\"table table-striped table-bordered table-hover dt-responsive table-checkable order-column table-header-fixed\" width=\"100%\" id=\"datatable-responsive\">
                                        <thead>
                                        <tr>

                                            <th>Id </th>
                                            <th id=\"index1\">Campaign</th>
                                            <th id=\"index2\">IP Range</th>
                                            <th>Visits</th>
                                            <th>Conversions</th>
                                            <th>Revenue</th>
                                            <th>Cost</th>
                                            <th>Profit</th>
                                            <th>ROI</th>
                                            <th>Country</th>
                                            <th>ISP/Carrier</th>
                                            <th>Mobile Carrier</th>
                                            <th>Connection Type</th>
                                        </tr>
                                        </thead>
                                        <tfoot class=\"bg-primary\">
                                            <tr>
                                                <th colspan=\"3\">Total</th>
                                                <th><span id=\"totalVisits\"></span></th>
                                                <th><span id=\"totalConversions\"></span></th>
                                                <th><span id=\"totalRevenue\"></span></th>
                                                <th><span id=\"totalCost\"></span></th>
                                                <th><span id=\"totalProfit\"></span></th>
                                                <th colspan=\"5\"><span id=\"totalRoi\"></span></th>
                                            </tr>
                                        </tfoot>
                                        <tbody id=\"\">

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
    <script type=\"text/javascript\">

        var ComponentsSelect2 = function() {

            var handleDemo = function() {

                // Set the \"bootstrap\" theme as the default theme for all Select2
                // widgets.
                //
                // @see https://github.com/select2/select2/issues/2927
                \$.fn.select2.defaults.set(\"theme\", \"bootstrap\");

                \$(\"#selectFilterCampaign\").select2({
                    placeholder: \"Select Campaign\",
                    allowClear: true,
                    width: null
                });
                \$(\"#selectFilterGeo\").select2({
                    placeholder: \"Select Geo\",
                    allowClear: true,
                    width: null
                });

                \$(\"#selectFilterIsp\").select2({
                    placeholder: \"Select ISP/Carrier\",
                    allowClear: true,
                    width: null
                });

                \$(\"#selectFilterMobileCarrier\").select2({
                    placeholder: \"Select Mobile Carrier\",
                    allowClear: true,
                    width: null
                });

                \$(\"#selectFilterConnectionType\").select2({
                    placeholder: \"Select Connection Type\",
                    allowClear: true,
                    width: null
                });

                \$(\"#selectFilterIp\").select2({
                    placeholder: \"Filter Individual IP\",
                    allowClear: true,
                    width: null
                });

                \$(\"#selectArchiveCampaign\").select2({
                    placeholder: \"Select Campaign\",
                    allowClear: true,
                    width: null
                });

                \$(\"#selectImportType\").select2({
                    placeholder: \"Select Import Type\",
                    allowClear: true,
                    width: null
                });

                \$(\"#selectLabelToRemove\").select2({
                    placeholder: \"Select Label\",
                    allowClear: true,
                    width: null
                });
                \$(\"#selectLabelToUpdate\").select2({
                    placeholder: \"Select Label\",
                    allowClear: true,
                    width: null
                });

                \$(\"#chooseCampaign\").select2({
                    placeholder: \"Selec Campaign\",
                    allowClear: true,
                    width: null
                });


                // @see https://select2.github.io/examples.html#data-ajax
                function formatRepo(repo) {
                    if (repo.loading) return repo.text;

                    var markup = \"<div class='select2-result-repository clearfix'>\" +
                            \"<div class='select2-result-repository__avatar'><img src='\" + repo.owner.avatar_url + \"' /></div>\" +
                            \"<div class='select2-result-repository__meta'>\" +
                            \"<div class='select2-result-repository__title'>\" + repo.full_name + \"</div>\";

                    if (repo.description) {
                        markup += \"<div class='select2-result-repository__description'>\" + repo.description + \"</div>\";
                    }

                    markup += \"<div class='select2-result-repository__statistics'>\" +
                    \"<div class='select2-result-repository__forks'><span class='glyphicon glyphicon-flash'></span> \" + repo.forks_count + \" Forks</div>\" +
                    \"<div class='select2-result-repository__stargazers'><span class='glyphicon glyphicon-star'></span> \" + repo.stargazers_count + \" Stars</div>\" +
                    \"<div class='select2-result-repository__watchers'><span class='glyphicon glyphicon-eye-open'></span> \" + repo.watchers_count + \" Watchers</div>\" +
                    \"</div>\" +
                    \"</div></div>\";

                    return markup;
                }

                function formatRepoSelection(repo) {
                    return repo.full_name || repo.text;
                }

                \$(\".js-data-example-ajax\").select2({
                    width: \"off\",
                    ajax: {
                        url: \"https://api.github.com/search/repositories\",
                        dataType: 'json',
                        delay: 250,
                        data: function(params) {
                            return {
                                q: params.term, // search term
                                page: params.page
                            };
                        },
                        processResults: function(data, page) {
                            // parse the results into the format expected by Select2.
                            // since we are using custom formatting functions we do not need to
                            // alter the remote JSON data
                            return {
                                results: data.items
                            };
                        },
                        cache: true
                    },
                    escapeMarkup: function(markup) {
                        return markup;
                    }, // let our custom formatter work
                    minimumInputLength: 1,
                    templateResult: formatRepo,
                    templateSelection: formatRepoSelection
                });

                \$(\"button[data-select2-open]\").click(function() {
                    \$(\"#\" + \$(this).data(\"select2-open\")).select2(\"open\");
                });

                \$(\":checkbox\").on(\"click\", function() {
                    \$(this).parent().nextAll(\"select\").prop(\"disabled\", !this.checked);
                });

                // copy Bootstrap validation states to Select2 dropdown
                //
                // add .has-waring, .has-error, .has-succes to the Select2 dropdown
                // (was #select2-drop in Select2 v3.x, in Select2 v4 can be selected via
                // body > .select2-container) if _any_ of the opened Select2's parents
                // has one of these forementioned classes (YUCK! ;-))
                \$(\".select2, .select2-multiple, .select2-allow-clear, .js-data-example-ajax\").on(\"select2:open\", function() {
                    if (\$(this).parents(\"[class*='has-']\").length) {
                        var classNames = \$(this).parents(\"[class*='has-']\")[0].className.split(/\\s+/);

                        for (var i = 0; i < classNames.length; ++i) {
                            if (classNames[i].match(\"has-\")) {
                                \$(\"body > .select2-container\").addClass(classNames[i]);
                            }
                        }
                    }
                });

                \$(\".js-btn-set-scaling-classes\").on(\"click\", function() {
                    \$(\"#select2-multiple-input-sm, #select2-single-input-sm\").next(\".select2-container--bootstrap\").addClass(\"input-sm\");
                    \$(\"#select2-multiple-input-lg, #select2-single-input-lg\").next(\".select2-container--bootstrap\").addClass(\"input-lg\");
                    \$(this).removeClass(\"btn-primary btn-outline\").prop(\"disabled\", true);
                });
            }

            return {
                //main function to initiate the module
                init: function() {
                    handleDemo();
                }
            };

        }();

        if (App.isAngularJsApp() === false) {
            jQuery(document).ready(function() {
                ComponentsSelect2.init();
            });
        }


    </script>
    <script>
        var lastChecked = null;
        /* Custom filtering function which will filter data in column four between two values */

        \$dropdownFilterColumns = [1, 2, 3];
        \$default = true;
        \$archiveDefault = true;
        \$tableView = \$('#tableView').val();

        \$(document).on('ready', function() {
            getActiveCampaigns(1, 'active');



            \$(\"#selectImportType\").select2().on(\"change\", function(e){
                if(\$(\"#selectImportType\").val() == 'archived'){
                    \$('#updateText').html('Update');
                    \$('#updateIcon').removeClass('fa-eye');
                    \$('#updateIcon').addClass('fa-refresh');
                    \$('#chooseCampaign').empty();
                    \$archiveCampaigns =  JSON.parse(localStorage.getItem(\"archiveCampaigns\"));
                    \$('#chooseCampaign').append(\$('<option>', {
                        value: 'All',
                        text: 'All'
                    }));
                    \$.each(\$archiveCampaigns, function(i, val) {
                        \$('#chooseCampaign').append(\$('<option>', {
                            value: val.campaignId + '|' + val.campaignName + '|' + val.countryName + '|0|100000|0',
                            text: val.campaignName
                        }));
                    });
                }else if(\$(\"#selectImportType\").val() == 'active'){
                    \$('#updateText').html('Update');
                    \$('#updateIcon').removeClass('fa-eye');
                    \$('#updateIcon').addClass('fa-refresh');
                    \$('#chooseCampaign').empty();
                    \$activeCampaigns =  JSON.parse(localStorage.getItem(\"activeCampaigns\"));
                    \$('#chooseCampaign').append(\$('<option>', {
                        value: 'All',
                        text: 'All'
                    }));
                    \$.each(\$activeCampaigns, function(i, val) {
                        \$('#chooseCampaign').append(\$('<option>', {
                            value: val.campaignId + '|' + val.campaignName + '|' + val.countryName + '|0|100000|0',
                            text: val.campaignName
                        }));
                    });
                }else if(\$(\"#selectImportType\").val() == 'imported'){
                    \$('#updateText').html('View');
                    \$('#updateIcon').removeClass('fa-refresh');
                    \$('#updateIcon').addClass('fa-eye');
                    \$('#chooseCampaign').empty();
                    \$importedCampaigns =  JSON.parse(localStorage.getItem(\"importedCampaigns\"));
                    console.log(\$importedCampaigns);
                    \$('#chooseCampaign').append(\$('<option>', {
                        value: 'All',
                        text: 'All'
                    }));
                    \$.each(\$importedCampaigns, function(i, val) {
                        \$('#chooseCampaign').append(\$('<option>', {
                            value: val.id + '|' + val.description,
                            text: val.description
                        }));
                    });
                }
            });


            if(\$('#isExport').val() == 1){
                \$tableView = 'ipRanges';

            }else{
                \$tableView = \$('#tableView').val()
            }

            \$('#switchBtn').click(function(){
                if(\$('#tableView').val() == 'ipRanges'){
                    \$tableView = \$('#tableView').val()
                    \$('#index1').html('IP Range');
                    \$('#index2').html('Campaign');
                    \$('#ipColumn').val(1);
                    console.log(\$tableView);
                    oTable.ajax.reload(function(){
                        oTable.fixedHeader.enable();
                    });

                }
                else if(\$('#tableView').val() == 'byCampaign'){
                    \$tableView = \$('#tableView').val()
                    \$('#index2').html('IP Range');
                    \$('#index1').html('Campaign');
                    \$('#ipColumn').val(2);
                    oTable.ajax.reload(function(){
                        oTable.fixedHeader.enable();
                    });
                }


            });




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
                    headerOffset: fixedHeaderOffset,
                    footer: true
                },
                \"bProcessing\": true,
                \"bServerSide\": true,
                \"sAjaxSource\": \"/ajax/get-reports-conversions\",
                \"fnServerParams\": function ( aoData ) {
                    aoData.push( {
                        \"name\": \"campaign\", \"value\": \$('#selectFilterCampaign').val()
                    } );
                    aoData.push( {
                        \"name\": \"geo\", \"value\": \$('#selectFilterGeo').val()
                    } );
                    aoData.push( {
                        \"name\": \"isp\", \"value\": \$('#selectFilterIsp').val()
                    } );
                    aoData.push( {
                        \"name\": \"mobileCarrier\", \"value\": \$('#selectFilterMobileCarrier').val()
                    } );
                    aoData.push( {
                        \"name\": \"connectionType\", \"value\": \$('#selectFilterConnectionType').val()
                    } );
                    aoData.push( {
                        \"name\": \"ip\", \"value\": \$('#selectFilterIp').val()
                    } );
                    aoData.push( {
                        \"name\": \"conversions\", \"value\": \$('#inputFilterConversions').val()
                    } );
                    aoData.push( {
                        \"name\": \"revenue\", \"value\": \$('#inputFilterRevenue').val()
                    } );
                    aoData.push( {
                        \"name\": \"cost\", \"value\": \$('#inputFilterCost').val()
                    } );
                    aoData.push( {
                        \"name\": \"profit\", \"value\": \$('#inputFilterProfit').val()
                    } );
                    aoData.push( {
                        \"name\": \"roi\", \"value\": \$('#inputFilterRoi').val()
                    } );
                    aoData.push( {
                        \"name\": \"tableView\", \"value\": \$tableView
                    } );
                    aoData.push( {
                        \"name\": \"subnetLevel\", \"value\":  \$('#subnetLevel').val()
                    } );

                },
                responsive: {
                    details: {

                    }
                },
                \"iDisplayLength\": 20,
                \"lengthMenu\": [
                    [20, 500, 1000, -1],
                    [20, 500, 1000, \"All\"] // change per page values here
                ],
                \"columnDefs\": [
                    {
                        \"className\": \"dt-right\",
                        \"targets\": [ 0 ],
                        \"visible\": false,
                        \"searchable\": false
                        //\"targets\": [2]
                    },

                ],
                \"order\": [[10, \"desc\"]],
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
                        title: 'Conversion List ' + \$('#date-from').val().replace(/\\//g, '.') + ' - ' + \$('#date-to').val().replace(/\\//g, '.') + ' ' + \$('#selectImportType').val(),
                            exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn green btn-outline',
                        text: '<i class=\"fa fa-file-pdf-o\"></i> PDF',
                        title: 'Conversion List ' + \$('#date-from').val().replace(/\\//g, '.') + ' - ' + \$('#date-to').val().replace(/\\//g, '.') + ' ' + \$('#selectImportType').val(),
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn purple btn-outline ',
                        text: '<i class=\"fa fa-file-excel-o\"></i> CSV',
                        title: 'Conversion List ' + \$('#date-from').val().replace(/\\//g, '.') + ' - ' + \$('#date-to').val().replace(/\\//g, '.') + ' ' + \$('#selectImportType').val(),
                        exportOptions: {
                            columns: ':visible'
                        },
                        action: function(e, dt, button, config) {
                            \$('#index1').html('IP Range');
                            \$('#index2').html('Campaign');
                            \$('#isExport').val('1');
                            \$tableView = 'ipRanges';
                            var table =  \$('#datatable-responsive').DataTable();

                            //order = [ 0, 2, 1, 3, 4, 5, 6, 7, 8 ,9, 10, 11, 12];
                            oTable.ajax.reload(function(){
                                \$('#isExport').val('0');
                                \$activeCampaignDate = \$('#conversions-datepicker').val()
                                \$archiveCmapaignDate = \$('#conversions-datepicker-archive').val()
                                \$archive = \$('#conversions-datepicker-archive').val();
                                if(\$archive != ''){
                                    \$include = 'archive';
                                    \$date = \$archiveCmapaignDate;
                                }else{

                                    if(\$default == true){
                                        \$include = 'default';
                                        \$date = \$activeCampaignDate;
                                    }else{
                                        \$include = 'traffic';
                                        \$date = \$activeCampaignDate;
                                    }
                                }

                                \$data = {
                                    date: \$date,
                                    archive: \$('#selectArchiveCampaign').val(),
                                    include: \$include,
                                    dateFilter: 1
                                }
                                \$.fn.dataTable.ext.buttons.csvHtml5.action(e, dt, button, config);
                            })
                            setTimeout(function(){
                                \$tableView = \$('#tableView').val();
                                oTable.ajax.reload(function(){
                                    if(\$tableView == 'ipRanges'){
                                        \$('#index1').html('IP Range');
                                        \$('#index2').html('Campaign');
                                    }else{
                                        \$('#index2').html('IP Range');
                                        \$('#index1').html('Campaign');
                                    }
                                });
                            }, 6000);

                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn dark btn-outline ',
                        text: '<i class=\"fa fa-eye\"></i> Visible Columns'
                    }
                ],
                colReorder: true,
                \"fnRowCallback\": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                    // Bold the grade for all 'A' grade browsers
                    if ( aData[7].includes('-') == true )
                    {
                        \$('td:eq(6)', nRow).css('color', 'red');
                    }else if(aData[7].includes != '\$0.00') {
                        \$('td:eq(6)', nRow).css('color', 'green');
                    }else{
                        \$('td:eq(6)', nRow).css('color', '');
                    }
                    if ( aData[8].includes('-') == true )
                    {
                        \$('td:eq(7)', nRow).css('color', 'red');
                    }else if(aData[8].includes != '\$0.00') {
                        \$('td:eq(7)', nRow).css('color', 'green');
                    }

                }


            });





            \$('#updateConversionsTable').click(function(){
                \$btn = \$(this)[0];
                \$default = false;
                \$from = \$('#date-from').val();
                \$to = \$('#date-to').val();
                \$include = \$('#selectImportType').val();
                \$('#progressDiv').css('width', '0%').attr('aria-valuenow', 0);
                if(\$('#chooseCampaign').val()[0] == 'All'){
                    var allItems = [];
                    var allOptions = \$(\".select2_multiple option\");
                    allOptions.each(function() {
                        allItems .push( \$(this).val() );
                    });
                    \$campaign = allItems;
                }else{
                    \$campaign = \$('#chooseCampaign').val()
                }
                \$data = {
                    from: \$from,
                    to: \$to,
                    campaign: \$campaign,
                    include: \$include,
                    count: \$campaign.length
                }

                oTable.fixedHeader.disable();
                if(\$(\"#selectImportType\").val() != 'imported'){
                    getReportConversions(\$btn, 'conversions', \$data);
                }else{
                    getImportedDataReport(\$btn, \$data);
                }


            })


            \$('#filterBtn').click(function(){
                if(\$('#tableView').val() == 'ipRanges'){
                    \$('#index1').html('IP Range');
                    \$('#index2').html('Campaign');
                    oTable.ajax.reload(function(){
                        oTable.fixedHeader.enable();
                    });
                    var l = Ladda.create(\$(this)[0]);
                    l.start();
                    oTable.ajax.reload(function () {
                        oTable.fixedHeader.enable();
                        l.stop();
                    });

                }
                else if(\$('#tableView').val() == 'byCampaign'){
                    \$('#index2').html('IP Range');
                    \$('#index1').html('Campaign');
                    var l = Ladda.create(\$(this)[0]);
                    l.start();
                    oTable.ajax.reload(function () {
                        oTable.fixedHeader.enable();
                        l.stop()
                    });
                }


            })

            \$('#switchSubnetLevel').click(function(){
                if(\$('#tableView').val() == 'ipRanges'){
                    \$('#index1').html('IP Range');
                    \$('#index2').html('Campaign');
                    var l = Ladda.create(\$(this)[0]);
                    l.start();
                    oTable.ajax.reload(function () {
                        oTable.fixedHeader.enable();
                        l.stop()
                    });

                }
                if(\$('#tableView').val() == 'byCampaign'){
                    \$('#index2').html('IP Range');
                    \$('#index1').html('Campaign');
                    var l = Ladda.create(\$(this)[0]);
                    l.start();
                    oTable.ajax.reload(function () {
                        oTable.fixedHeader.enable();
                        l.stop()
                    });
                }
            });

            \$('#removeLabelBtn').on('click', function(){
                getLabels('#modalDisplayLabelForDelete', '#selectLabelToRemove');
            });

            \$('#updateLabelBtn').on('click', function(){
                getLabels('#modalDisplayLabelForUpdate', '#selectLabelToUpdate');
            });

            \$('#deleteLabelBtn').on('click', function(){
                \$btn = \$(this)[0];
                \$label = \$('#selectLabelToRemove').val();

                console.log(\$label);
                removeLabel(\$label, \$btn);

            });



            window.onbeforeunload = function() {
                \$.ajax({
                    url: \"clear-tmp-files\",
                    cache: false,
                    async: false
                });

                return null;
            };
        });

    </script>

    <!-- AJAX CALLS -->
    <script src=\"{{ asset('assets/ajax/reports/conversions.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/ajax/common/common.js') }}\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
{% endblock %}
", "reports/conversions.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app\\Resources\\views\\reports\\conversions.html.twig");
    }
}
