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
        $__internal_235e5c6b53a5ace6f0d6ef68c29e88bc4b214cdcd5c515828cbfa61365ad5b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_235e5c6b53a5ace6f0d6ef68c29e88bc4b214cdcd5c515828cbfa61365ad5b50->enter($__internal_235e5c6b53a5ace6f0d6ef68c29e88bc4b214cdcd5c515828cbfa61365ad5b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:traffic-source.html.twig"));

        $__internal_f3861980df8a4b4a6f90a69298866fb644b72d40d55e5affa0735717dbb2f379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3861980df8a4b4a6f90a69298866fb644b72d40d55e5affa0735717dbb2f379->enter($__internal_f3861980df8a4b4a6f90a69298866fb644b72d40d55e5affa0735717dbb2f379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:traffic-source.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_235e5c6b53a5ace6f0d6ef68c29e88bc4b214cdcd5c515828cbfa61365ad5b50->leave($__internal_235e5c6b53a5ace6f0d6ef68c29e88bc4b214cdcd5c515828cbfa61365ad5b50_prof);

        
        $__internal_f3861980df8a4b4a6f90a69298866fb644b72d40d55e5affa0735717dbb2f379->leave($__internal_f3861980df8a4b4a6f90a69298866fb644b72d40d55e5affa0735717dbb2f379_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_93d93157ad60e9aec4bfd1167777cbdf2ef4aa0a8323367ce31179f1a5f73fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d93157ad60e9aec4bfd1167777cbdf2ef4aa0a8323367ce31179f1a5f73fe7->enter($__internal_93d93157ad60e9aec4bfd1167777cbdf2ef4aa0a8323367ce31179f1a5f73fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_88b06794e2fb49bb025336184d53f75d49b3e141e19f2b7f5ba06f07913a8a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b06794e2fb49bb025336184d53f75d49b3e141e19f2b7f5ba06f07913a8a62->enter($__internal_88b06794e2fb49bb025336184d53f75d49b3e141e19f2b7f5ba06f07913a8a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    <li class=\"nav-item\">
        <a href=\"/\" class=\"nav-link nav-toggle\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Dashboard</span>
        </a>
    </li>

    <li class=\"nav-item start active open\">
        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
            <i class=\"fa fa-gears\"></i>
            <span class=\"title\">Global Settings</span>
            <span class=\"selected\"></span>
            <span class=\"arrow open\"></span>
        </a>
        <ul class=\"sub-menu\">
            <li class=\"nav-item\">
                <a href=\"/global-settings/api-access\" class=\"nav-link \">
                    <span class=\"title\">API Access</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/global-settings/traffic-source\" class=\"nav-link \">
                    <span class=\"title\">Traffic Source</span>
                </a>
            </li>
        </ul>
    </li>
";
        
        $__internal_88b06794e2fb49bb025336184d53f75d49b3e141e19f2b7f5ba06f07913a8a62->leave($__internal_88b06794e2fb49bb025336184d53f75d49b3e141e19f2b7f5ba06f07913a8a62_prof);

        
        $__internal_93d93157ad60e9aec4bfd1167777cbdf2ef4aa0a8323367ce31179f1a5f73fe7->leave($__internal_93d93157ad60e9aec4bfd1167777cbdf2ef4aa0a8323367ce31179f1a5f73fe7_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb31810cee07424f615595dfe293d5b43a92b35328f135c70dc4c5ec65a8f26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb31810cee07424f615595dfe293d5b43a92b35328f135c70dc4c5ec65a8f26c->enter($__internal_cb31810cee07424f615595dfe293d5b43a92b35328f135c70dc4c5ec65a8f26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5842334cfa5bc7353df733552c32819baf11ba55de6d45fe53a3668907dc0d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5842334cfa5bc7353df733552c32819baf11ba55de6d45fe53a3668907dc0d79->enter($__internal_5842334cfa5bc7353df733552c32819baf11ba55de6d45fe53a3668907dc0d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
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
        // line 47
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
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-body\" id=\"displayTrafficSourceContent\">
                                    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/img/loading-spinner-grey.gif"), "html", null, true);
        echo "\" alt=\"\" class=\"loading\">
                                    <span> &nbsp;&nbsp;Loading... </span>

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

                    <div class=\"table-toolbar\">
                        <div class=\"row\">

                        </div>
                    </div>
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
        
        $__internal_5842334cfa5bc7353df733552c32819baf11ba55de6d45fe53a3668907dc0d79->leave($__internal_5842334cfa5bc7353df733552c32819baf11ba55de6d45fe53a3668907dc0d79_prof);

        
        $__internal_cb31810cee07424f615595dfe293d5b43a92b35328f135c70dc4c5ec65a8f26c->leave($__internal_cb31810cee07424f615595dfe293d5b43a92b35328f135c70dc4c5ec65a8f26c_prof);

    }

    // line 149
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31f9176e5b71437edf943a42868455c072477e0dcacc492d97142d4622a77a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f9176e5b71437edf943a42868455c072477e0dcacc492d97142d4622a77a20->enter($__internal_31f9176e5b71437edf943a42868455c072477e0dcacc492d97142d4622a77a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9481f24b402d1b1d4b73fc3d630272a63dbb3edc49e10672e23dc1ac4d6ac0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9481f24b402d1b1d4b73fc3d630272a63dbb3edc49e10672e23dc1ac4d6ac0db->enter($__internal_9481f24b402d1b1d4b73fc3d630272a63dbb3edc49e10672e23dc1ac4d6ac0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 150
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
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/global-settings/ajax-global-settings.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
";
        
        $__internal_9481f24b402d1b1d4b73fc3d630272a63dbb3edc49e10672e23dc1ac4d6ac0db->leave($__internal_9481f24b402d1b1d4b73fc3d630272a63dbb3edc49e10672e23dc1ac4d6ac0db_prof);

        
        $__internal_31f9176e5b71437edf943a42868455c072477e0dcacc492d97142d4622a77a20->leave($__internal_31f9176e5b71437edf943a42868455c072477e0dcacc492d97142d4622a77a20_prof);

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
        return array (  418 => 328,  238 => 150,  229 => 149,  162 => 92,  114 => 47,  97 => 32,  88 => 31,  51 => 3,  42 => 2,  11 => 1,);
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
    <li class=\"nav-item\">
        <a href=\"/\" class=\"nav-link nav-toggle\">
            <i class=\"icon-home\"></i>
            <span class=\"title\">Dashboard</span>
        </a>
    </li>

    <li class=\"nav-item start active open\">
        <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
            <i class=\"fa fa-gears\"></i>
            <span class=\"title\">Global Settings</span>
            <span class=\"selected\"></span>
            <span class=\"arrow open\"></span>
        </a>
        <ul class=\"sub-menu\">
            <li class=\"nav-item\">
                <a href=\"/global-settings/api-access\" class=\"nav-link \">
                    <span class=\"title\">API Access</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"/global-settings/traffic-source\" class=\"nav-link \">
                    <span class=\"title\">Traffic Source</span>
                </a>
            </li>
        </ul>
    </li>
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
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-body\" id=\"displayTrafficSourceContent\">
                                    <img src=\"{{ asset('assets/global/img/loading-spinner-grey.gif') }}\" alt=\"\" class=\"loading\">
                                    <span> &nbsp;&nbsp;Loading... </span>

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

                    <div class=\"table-toolbar\">
                        <div class=\"row\">

                        </div>
                    </div>
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
