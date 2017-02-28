<?php

/* settings/traffic-source.html.twig */
class __TwigTemplate_91c85e58d2d71f5ed85ca94087cd09f1e8401133d77e236153ecc6b794e8d26a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "settings/traffic-source.html.twig", 1);
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
        $__internal_77dabaade01a09559ac6bdadb808ff54f4080f84ef35e2b25c2fe0c71873a5a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77dabaade01a09559ac6bdadb808ff54f4080f84ef35e2b25c2fe0c71873a5a8->enter($__internal_77dabaade01a09559ac6bdadb808ff54f4080f84ef35e2b25c2fe0c71873a5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/traffic-source.html.twig"));

        $__internal_aa9a05154c6ff0cb3fd9e4fab8204c1b40bdb31efd99232eba59d12822002f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9a05154c6ff0cb3fd9e4fab8204c1b40bdb31efd99232eba59d12822002f7d->enter($__internal_aa9a05154c6ff0cb3fd9e4fab8204c1b40bdb31efd99232eba59d12822002f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "settings/traffic-source.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77dabaade01a09559ac6bdadb808ff54f4080f84ef35e2b25c2fe0c71873a5a8->leave($__internal_77dabaade01a09559ac6bdadb808ff54f4080f84ef35e2b25c2fe0c71873a5a8_prof);

        
        $__internal_aa9a05154c6ff0cb3fd9e4fab8204c1b40bdb31efd99232eba59d12822002f7d->leave($__internal_aa9a05154c6ff0cb3fd9e4fab8204c1b40bdb31efd99232eba59d12822002f7d_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4e524f3a94d4630a51659cfb94477611f279fb22441851f708bd1a9a97edca61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e524f3a94d4630a51659cfb94477611f279fb22441851f708bd1a9a97edca61->enter($__internal_4e524f3a94d4630a51659cfb94477611f279fb22441851f708bd1a9a97edca61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_a1844c43f60456a5f9952a1ee4f6e683ab2721ecf60f99fe4752ae4e409f355e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1844c43f60456a5f9952a1ee4f6e683ab2721ecf60f99fe4752ae4e409f355e->enter($__internal_a1844c43f60456a5f9952a1ee4f6e683ab2721ecf60f99fe4752ae4e409f355e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_a1844c43f60456a5f9952a1ee4f6e683ab2721ecf60f99fe4752ae4e409f355e->leave($__internal_a1844c43f60456a5f9952a1ee4f6e683ab2721ecf60f99fe4752ae4e409f355e_prof);

        
        $__internal_4e524f3a94d4630a51659cfb94477611f279fb22441851f708bd1a9a97edca61->leave($__internal_4e524f3a94d4630a51659cfb94477611f279fb22441851f708bd1a9a97edca61_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_449ac1c16c1ec697f1a258bf40513136a55c0a4b3bd8c9912a27cd89d189f817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449ac1c16c1ec697f1a258bf40513136a55c0a4b3bd8c9912a27cd89d189f817->enter($__internal_449ac1c16c1ec697f1a258bf40513136a55c0a4b3bd8c9912a27cd89d189f817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0d818e891420d0d479236c42b3673a16d1a259ba14a19cb98a5645eb1d8caeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d818e891420d0d479236c42b3673a16d1a259ba14a19cb98a5645eb1d8caeb->enter($__internal_e0d818e891420d0d479236c42b3673a16d1a259ba14a19cb98a5645eb1d8caeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e0d818e891420d0d479236c42b3673a16d1a259ba14a19cb98a5645eb1d8caeb->leave($__internal_e0d818e891420d0d479236c42b3673a16d1a259ba14a19cb98a5645eb1d8caeb_prof);

        
        $__internal_449ac1c16c1ec697f1a258bf40513136a55c0a4b3bd8c9912a27cd89d189f817->leave($__internal_449ac1c16c1ec697f1a258bf40513136a55c0a4b3bd8c9912a27cd89d189f817_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9a268bc3cf85d5c3955d0a5b69ae802565a55863cb9a081f8f4d1cd928f9d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a268bc3cf85d5c3955d0a5b69ae802565a55863cb9a081f8f4d1cd928f9d37->enter($__internal_c9a268bc3cf85d5c3955d0a5b69ae802565a55863cb9a081f8f4d1cd928f9d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_39a952fc1fe2de1e3b7b5a9168bb6a827c9834708613e9a76657ff5dcbaf2fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a952fc1fe2de1e3b7b5a9168bb6a827c9834708613e9a76657ff5dcbaf2fb0->enter($__internal_39a952fc1fe2de1e3b7b5a9168bb6a827c9834708613e9a76657ff5dcbaf2fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_39a952fc1fe2de1e3b7b5a9168bb6a827c9834708613e9a76657ff5dcbaf2fb0->leave($__internal_39a952fc1fe2de1e3b7b5a9168bb6a827c9834708613e9a76657ff5dcbaf2fb0_prof);

        
        $__internal_c9a268bc3cf85d5c3955d0a5b69ae802565a55863cb9a081f8f4d1cd928f9d37->leave($__internal_c9a268bc3cf85d5c3955d0a5b69ae802565a55863cb9a081f8f4d1cd928f9d37_prof);

    }

    public function getTemplateName()
    {
        return "settings/traffic-source.html.twig";
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
", "settings/traffic-source.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app\\Resources\\views\\settings\\traffic-source.html.twig");
    }
}
