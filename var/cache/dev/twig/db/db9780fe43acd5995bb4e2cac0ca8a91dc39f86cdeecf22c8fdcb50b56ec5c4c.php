<?php

/* :settings:traffic-source.html.twig */
class __TwigTemplate_2ae575df5cdf20f046f7326ae7dd827da5a8953c5e880259b6d886fc983be10f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":settings:traffic-source.html.twig", 1);
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
        $__internal_6975756461771e5b74cad1d20d04c5f6b6c73ea418e928bce4ca65423246efc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6975756461771e5b74cad1d20d04c5f6b6c73ea418e928bce4ca65423246efc7->enter($__internal_6975756461771e5b74cad1d20d04c5f6b6c73ea418e928bce4ca65423246efc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:traffic-source.html.twig"));

        $__internal_cfc273f4c7f1f2102f1bb3cc9cd9660df42ca78d84427b6e52b16024e4335421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc273f4c7f1f2102f1bb3cc9cd9660df42ca78d84427b6e52b16024e4335421->enter($__internal_cfc273f4c7f1f2102f1bb3cc9cd9660df42ca78d84427b6e52b16024e4335421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:traffic-source.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6975756461771e5b74cad1d20d04c5f6b6c73ea418e928bce4ca65423246efc7->leave($__internal_6975756461771e5b74cad1d20d04c5f6b6c73ea418e928bce4ca65423246efc7_prof);

        
        $__internal_cfc273f4c7f1f2102f1bb3cc9cd9660df42ca78d84427b6e52b16024e4335421->leave($__internal_cfc273f4c7f1f2102f1bb3cc9cd9660df42ca78d84427b6e52b16024e4335421_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_bf5ee2e30041aec67a56cb5a6fddc8a8d391a36535e4c9fcb5e2cabe0b60627c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5ee2e30041aec67a56cb5a6fddc8a8d391a36535e4c9fcb5e2cabe0b60627c->enter($__internal_bf5ee2e30041aec67a56cb5a6fddc8a8d391a36535e4c9fcb5e2cabe0b60627c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_ee7a3d50941183f4777efdf9aeb06889264166e0cf67d1aa8f28b48e9704d395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7a3d50941183f4777efdf9aeb06889264166e0cf67d1aa8f28b48e9704d395->enter($__internal_ee7a3d50941183f4777efdf9aeb06889264166e0cf67d1aa8f28b48e9704d395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_ee7a3d50941183f4777efdf9aeb06889264166e0cf67d1aa8f28b48e9704d395->leave($__internal_ee7a3d50941183f4777efdf9aeb06889264166e0cf67d1aa8f28b48e9704d395_prof);

        
        $__internal_bf5ee2e30041aec67a56cb5a6fddc8a8d391a36535e4c9fcb5e2cabe0b60627c->leave($__internal_bf5ee2e30041aec67a56cb5a6fddc8a8d391a36535e4c9fcb5e2cabe0b60627c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_31f8d49e1b916159080d8e6fc9efc9e6f0b5aaafee9b9c5a65885f2380f66a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f8d49e1b916159080d8e6fc9efc9e6f0b5aaafee9b9c5a65885f2380f66a45->enter($__internal_31f8d49e1b916159080d8e6fc9efc9e6f0b5aaafee9b9c5a65885f2380f66a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a43a3fa5b3e585ea8abaf75203d91504c27f78161fd9f19991159dfb3a4f583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a43a3fa5b3e585ea8abaf75203d91504c27f78161fd9f19991159dfb3a4f583->enter($__internal_6a43a3fa5b3e585ea8abaf75203d91504c27f78161fd9f19991159dfb3a4f583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1 class=\"page-title\"> Global Settings
        <small>traffic sources</small>
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
        <div class=\"col-lg-12\">
            <div class=\"portlet light\">
                <div class=\"portlet-title\">
                    <div class=\"caption font-dark\">
                        <button type=\"button\" id=\"importTrafficSourceBtn\" class=\"btn btn-primary\"><i class=\"fa fa-cloud-download\"></i> Add Traffic Source</button>
                        <button type=\"button\" id=\"deleteRecordsBtn\" class=\"btn btn-danger\" data-toggle=\"modal\" href=\"#delete-modal\"><i class=\"fa fa-trash\"></i> Delete</button>
                    </div>

                    <!--DOC: Aplly \"modal-cached\" class after \"modal\" class to enable ajax content caching-->
                    <div class=\"modal fade\" id=\"import-modal\" role=\"basic\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                   <h4>Importing Traffic Source</h4>
                                </div>
                                <div class=\"modal-body\" id=\"displayTrafficSourceContent\">
                                    <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/img/loading-spinner-grey.gif"), "html", null, true);
        echo "\" alt=\"\" class=\"loading\">
                                    <span> &nbsp;&nbsp;Loading... </span>

                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn dark btn-outline\" data-dismiss=\"modal\">Close</button>
                                    <button type=\"button\" name=\"importTrafficSourceBtnSubmit\" id=\"importTrafficSourceBtnSave\"  class=\"btn blue ladda-button spinnerBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-save\"></i> Save</span></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"modal fade\" id=\"delete-modal\" tabindex=\"-1\" role=\"basic\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                                    <h4 class=\"modal-title\"><i class=\"fa fa-warning\"></i> Warning</h4>
                                </div>
                                <div class=\"modal-body\"> Are you sure do want to delete selected traffic source? </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn dark btn-outline\" data-dismiss=\"modal\">Close</button>
                                    <button type=\"button\" id=\"confirmDeleteRecordsBtn\"  class=\"btn red ladda-button spinnerBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-trash\"></i> Delete</span></button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <div class=\"portlet-body\">
                        <table class=\"table table-striped table-bordered table-hover table-checkable order-column\" id=\"datatable-responsive\">
                        <thead>
                        <tr>
                            <th>
                                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                    <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#datatable-responsive .checkboxes\" />
                                    <span></span>
                                </label>
                            </th>
                            <th>Traffic Source </th>
                            <th>Traffic Source ID</th>

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
";
        
        $__internal_6a43a3fa5b3e585ea8abaf75203d91504c27f78161fd9f19991159dfb3a4f583->leave($__internal_6a43a3fa5b3e585ea8abaf75203d91504c27f78161fd9f19991159dfb3a4f583_prof);

        
        $__internal_31f8d49e1b916159080d8e6fc9efc9e6f0b5aaafee9b9c5a65885f2380f66a45->leave($__internal_31f8d49e1b916159080d8e6fc9efc9e6f0b5aaafee9b9c5a65885f2380f66a45_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1cfa7f0182b84909dd29436b72937e155332c174493c35f9f5b64ddf061fa8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1cfa7f0182b84909dd29436b72937e155332c174493c35f9f5b64ddf061fa8a->enter($__internal_b1cfa7f0182b84909dd29436b72937e155332c174493c35f9f5b64ddf061fa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d848322a8188c48d4aa73c2d44fb2f44f653ced39be1873fa57d5abdd5c6ec98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d848322a8188c48d4aa73c2d44fb2f44f653ced39be1873fa57d5abdd5c6ec98->enter($__internal_d848322a8188c48d4aa73c2d44fb2f44f653ced39be1873fa57d5abdd5c6ec98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "    <script>
        Ladda.bind( '.spinnerBtn' );
    </script>
    <script>
        \$(document).on('ready', function() {


            \$('#importTrafficSourceBtn').click(function(){
                \$('#import-modal').modal('show');
                 apiGetTrafficSource();
            });


            \$('#importTrafficSourceBtnSave').on('click', function(){
                \$btnSpinner = \$(this)[0];
                var data = {items:[]};
                \$i = 0;
                \$('input:checkbox.traffic-record').each(function () {


                    if(\$(this).is(':checked') == true){
                        var trafficSourceId = (this.checked ? \$(this).data('trafficid') : \"\");
                        var trafficSourceName = (this.checked ? \$(this).data('trafficname') : \"\");

                        data.items.push({trafficSourceId: trafficSourceId, trafficSourceName: trafficSourceName});

                    }

                });

                console.log(data.items);
                apiAddTraffic(\$btnSpinner, data);

            });



            \$('#confirmDeleteRecordsBtn').on('click', function(){
                \$btnSpinner = \$(this)[0];
                var data = {items:[]};
                \$i = 0;
                \$('input:checkbox.report-record').each(function () {


                    if(\$(this).is(':checked') == true){
                        var id = (this.checked ? \$(this).data('id') : \"\");

                        data.items.push({id: id});
                        // \$campaigns.push({\$i: {vid: voluumId, campid: campId, campname: campName}});
                    }

                });

                console.log(data.items);
                trafficDelete(\$btnSpinner, data);

            });

        });
    </script>
    <script>
        var TableDatatablesManaged = function () {

            var initTable1 = function () {

                var table = \$('#datatable-responsive');

                // begin first table
                table.dataTable({

                    fixedHeader: true,
                    \"bProcessing\": true,
                    \"bServerSide\": true,
                    \"sAjaxSource\": \"/ajax/get-traffic-source\",
                    responsive: true,
                    // Internationalisation. For more info refer to http://datatables.net/manual/i18n
                    \"language\": {
                        \"aria\": {
                            \"sortAscending\": \": activate to sort column ascending\",
                            \"sortDescending\": \": activate to sort column descending\"
                        },
                        \"emptyTable\": \"No data available in table\",
                        \"info\": \"Showing _START_ to _END_ of _TOTAL_ records\",
                        \"infoEmpty\": \"No records found\",
                        \"infoFiltered\": \"(filtered1 from _MAX_ total records)\",
                        \"lengthMenu\": \"Show _MENU_\",
                        \"search\": \"Search:\",
                        \"zeroRecords\": \"No matching records found\",
                        \"paginate\": {
                            \"previous\":\"Prev\",
                            \"next\": \"Next\",
                            \"last\": \"Last\",
                            \"first\": \"First\"
                        }
                    },

                    // Or you can use remote translation file
                    //\"language\": {
                    //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
                    //},

                    // Uncomment below line(\"dom\" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
                    // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
                    // So when dropdowns used the scrollable div should be removed.
                    //\"dom\": \"<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>\",

                    \"bStateSave\": true, // save datatable state(pagination, sort, etc) in cookie.

                    \"lengthMenu\": [
                        [5, 15, 20, -1],
                        [5, 15, 20, \"All\"] // change per page values here
                    ],
                    // set the initial value
                    \"pageLength\": 5,
                    \"pagingType\": \"bootstrap_full_number\",
                    \"columnDefs\": [
                        {  // set default column settings
                            'orderable': false,
                            'targets': [0]
                        },
                        {
                            \"searchable\": false,
                            \"targets\": [0]
                        },
                        {
                            \"className\": \"dt-right\"
                            //\"targets\": [2]
                        }
                    ],
                    \"order\": [
                        [1, \"asc\"]
                    ] // set first column as a default sort by asc
                });

                var tableWrapper = jQuery('#sample_1_wrapper');

                table.find('.group-checkable').change(function () {
                    var set = jQuery(this).attr(\"data-set\");
                    var checked = jQuery(this).is(\":checked\");
                    jQuery(set).each(function () {
                        if (checked) {
                            \$(this).prop(\"checked\", true);
                            \$(this).parents('tr').addClass(\"active\");
                        } else {
                            \$(this).prop(\"checked\", false);
                            \$(this).parents('tr').removeClass(\"active\");
                        }
                    });
                });

                table.on('change', 'tbody tr .checkboxes', function () {
                    \$(this).parents('tr').toggleClass(\"active\");
                });
            }


            return {

                //main function to initiate the module
                init: function () {
                    if (!jQuery().dataTable) {
                        return;
                    }

                    initTable1();
                }

            };

        }();
        if (App.isAngularJsApp() === false) {
            jQuery(document).ready(function() {
                TableDatatablesManaged.init();
            });
        }
    </script>

    <!-- AJAX CALLS -->
    <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/global-settings/ajax-global-settings.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
";
        
        $__internal_d848322a8188c48d4aa73c2d44fb2f44f653ced39be1873fa57d5abdd5c6ec98->leave($__internal_d848322a8188c48d4aa73c2d44fb2f44f653ced39be1873fa57d5abdd5c6ec98_prof);

        
        $__internal_b1cfa7f0182b84909dd29436b72937e155332c174493c35f9f5b64ddf061fa8a->leave($__internal_b1cfa7f0182b84909dd29436b72937e155332c174493c35f9f5b64ddf061fa8a_prof);

    }

    public function getTemplateName()
    {
        return ":settings:traffic-source.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 305,  216 => 127,  207 => 126,  142 => 71,  91 => 23,  74 => 8,  65 => 7,  54 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
        <small>traffic sources</small>
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
        <div class=\"col-lg-12\">
            <div class=\"portlet light\">
                <div class=\"portlet-title\">
                    <div class=\"caption font-dark\">
                        <button type=\"button\" id=\"importTrafficSourceBtn\" class=\"btn btn-primary\"><i class=\"fa fa-cloud-download\"></i> Add Traffic Source</button>
                        <button type=\"button\" id=\"deleteRecordsBtn\" class=\"btn btn-danger\" data-toggle=\"modal\" href=\"#delete-modal\"><i class=\"fa fa-trash\"></i> Delete</button>
                    </div>

                    <!--DOC: Aplly \"modal-cached\" class after \"modal\" class to enable ajax content caching-->
                    <div class=\"modal fade\" id=\"import-modal\" role=\"basic\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                   <h4>Importing Traffic Source</h4>
                                </div>
                                <div class=\"modal-body\" id=\"displayTrafficSourceContent\">
                                    <img src=\"{{ asset('assets/global/img/loading-spinner-grey.gif') }}\" alt=\"\" class=\"loading\">
                                    <span> &nbsp;&nbsp;Loading... </span>

                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn dark btn-outline\" data-dismiss=\"modal\">Close</button>
                                    <button type=\"button\" name=\"importTrafficSourceBtnSubmit\" id=\"importTrafficSourceBtnSave\"  class=\"btn blue ladda-button spinnerBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-save\"></i> Save</span></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"modal fade\" id=\"delete-modal\" tabindex=\"-1\" role=\"basic\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
                                    <h4 class=\"modal-title\"><i class=\"fa fa-warning\"></i> Warning</h4>
                                </div>
                                <div class=\"modal-body\"> Are you sure do want to delete selected traffic source? </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn dark btn-outline\" data-dismiss=\"modal\">Close</button>
                                    <button type=\"button\" id=\"confirmDeleteRecordsBtn\"  class=\"btn red ladda-button spinnerBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-trash\"></i> Delete</span></button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                <div class=\"portlet-body\">
                        <table class=\"table table-striped table-bordered table-hover table-checkable order-column\" id=\"datatable-responsive\">
                        <thead>
                        <tr>
                            <th>
                                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                    <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#datatable-responsive .checkboxes\" />
                                    <span></span>
                                </label>
                            </th>
                            <th>Traffic Source </th>
                            <th>Traffic Source ID</th>

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
{% endblock %}
{% block javascripts %}
    <script>
        Ladda.bind( '.spinnerBtn' );
    </script>
    <script>
        \$(document).on('ready', function() {


            \$('#importTrafficSourceBtn').click(function(){
                \$('#import-modal').modal('show');
                 apiGetTrafficSource();
            });


            \$('#importTrafficSourceBtnSave').on('click', function(){
                \$btnSpinner = \$(this)[0];
                var data = {items:[]};
                \$i = 0;
                \$('input:checkbox.traffic-record').each(function () {


                    if(\$(this).is(':checked') == true){
                        var trafficSourceId = (this.checked ? \$(this).data('trafficid') : \"\");
                        var trafficSourceName = (this.checked ? \$(this).data('trafficname') : \"\");

                        data.items.push({trafficSourceId: trafficSourceId, trafficSourceName: trafficSourceName});

                    }

                });

                console.log(data.items);
                apiAddTraffic(\$btnSpinner, data);

            });



            \$('#confirmDeleteRecordsBtn').on('click', function(){
                \$btnSpinner = \$(this)[0];
                var data = {items:[]};
                \$i = 0;
                \$('input:checkbox.report-record').each(function () {


                    if(\$(this).is(':checked') == true){
                        var id = (this.checked ? \$(this).data('id') : \"\");

                        data.items.push({id: id});
                        // \$campaigns.push({\$i: {vid: voluumId, campid: campId, campname: campName}});
                    }

                });

                console.log(data.items);
                trafficDelete(\$btnSpinner, data);

            });

        });
    </script>
    <script>
        var TableDatatablesManaged = function () {

            var initTable1 = function () {

                var table = \$('#datatable-responsive');

                // begin first table
                table.dataTable({

                    fixedHeader: true,
                    \"bProcessing\": true,
                    \"bServerSide\": true,
                    \"sAjaxSource\": \"/ajax/get-traffic-source\",
                    responsive: true,
                    // Internationalisation. For more info refer to http://datatables.net/manual/i18n
                    \"language\": {
                        \"aria\": {
                            \"sortAscending\": \": activate to sort column ascending\",
                            \"sortDescending\": \": activate to sort column descending\"
                        },
                        \"emptyTable\": \"No data available in table\",
                        \"info\": \"Showing _START_ to _END_ of _TOTAL_ records\",
                        \"infoEmpty\": \"No records found\",
                        \"infoFiltered\": \"(filtered1 from _MAX_ total records)\",
                        \"lengthMenu\": \"Show _MENU_\",
                        \"search\": \"Search:\",
                        \"zeroRecords\": \"No matching records found\",
                        \"paginate\": {
                            \"previous\":\"Prev\",
                            \"next\": \"Next\",
                            \"last\": \"Last\",
                            \"first\": \"First\"
                        }
                    },

                    // Or you can use remote translation file
                    //\"language\": {
                    //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
                    //},

                    // Uncomment below line(\"dom\" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
                    // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
                    // So when dropdowns used the scrollable div should be removed.
                    //\"dom\": \"<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>\",

                    \"bStateSave\": true, // save datatable state(pagination, sort, etc) in cookie.

                    \"lengthMenu\": [
                        [5, 15, 20, -1],
                        [5, 15, 20, \"All\"] // change per page values here
                    ],
                    // set the initial value
                    \"pageLength\": 5,
                    \"pagingType\": \"bootstrap_full_number\",
                    \"columnDefs\": [
                        {  // set default column settings
                            'orderable': false,
                            'targets': [0]
                        },
                        {
                            \"searchable\": false,
                            \"targets\": [0]
                        },
                        {
                            \"className\": \"dt-right\"
                            //\"targets\": [2]
                        }
                    ],
                    \"order\": [
                        [1, \"asc\"]
                    ] // set first column as a default sort by asc
                });

                var tableWrapper = jQuery('#sample_1_wrapper');

                table.find('.group-checkable').change(function () {
                    var set = jQuery(this).attr(\"data-set\");
                    var checked = jQuery(this).is(\":checked\");
                    jQuery(set).each(function () {
                        if (checked) {
                            \$(this).prop(\"checked\", true);
                            \$(this).parents('tr').addClass(\"active\");
                        } else {
                            \$(this).prop(\"checked\", false);
                            \$(this).parents('tr').removeClass(\"active\");
                        }
                    });
                });

                table.on('change', 'tbody tr .checkboxes', function () {
                    \$(this).parents('tr').toggleClass(\"active\");
                });
            }


            return {

                //main function to initiate the module
                init: function () {
                    if (!jQuery().dataTable) {
                        return;
                    }

                    initTable1();
                }

            };

        }();
        if (App.isAngularJsApp() === false) {
            jQuery(document).ready(function() {
                TableDatatablesManaged.init();
            });
        }
    </script>

    <!-- AJAX CALLS -->
    <script src=\"{{ asset('assets/ajax/global-settings/ajax-global-settings.js') }}\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
{% endblock %}
", ":settings:traffic-source.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app/Resources\\views/settings/traffic-source.html.twig");
    }
}
