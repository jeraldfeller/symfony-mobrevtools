<?php

/* offers/offers.html.twig */
class __TwigTemplate_b4da67c2158ca14613884c0a282741de697bcb66d2caaaf8fa63cb0365a7f495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "offers/offers.html.twig", 1);
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
        $__internal_bbeec2ded550f5da14611b2d60e811fad6c2e6f86fe0b18cd2130765f7de3ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbeec2ded550f5da14611b2d60e811fad6c2e6f86fe0b18cd2130765f7de3ed6->enter($__internal_bbeec2ded550f5da14611b2d60e811fad6c2e6f86fe0b18cd2130765f7de3ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offers/offers.html.twig"));

        $__internal_d246117bff6a18ba6016f970d3497fd97852cdbfb8d8a89ccbe0ac8bd3ce3c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d246117bff6a18ba6016f970d3497fd97852cdbfb8d8a89ccbe0ac8bd3ce3c09->enter($__internal_d246117bff6a18ba6016f970d3497fd97852cdbfb8d8a89ccbe0ac8bd3ce3c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offers/offers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbeec2ded550f5da14611b2d60e811fad6c2e6f86fe0b18cd2130765f7de3ed6->leave($__internal_bbeec2ded550f5da14611b2d60e811fad6c2e6f86fe0b18cd2130765f7de3ed6_prof);

        
        $__internal_d246117bff6a18ba6016f970d3497fd97852cdbfb8d8a89ccbe0ac8bd3ce3c09->leave($__internal_d246117bff6a18ba6016f970d3497fd97852cdbfb8d8a89ccbe0ac8bd3ce3c09_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_71af8778f0fa40de5cb02a5e0c3148b3899878854cb33e88d2995436369d15fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71af8778f0fa40de5cb02a5e0c3148b3899878854cb33e88d2995436369d15fc->enter($__internal_71af8778f0fa40de5cb02a5e0c3148b3899878854cb33e88d2995436369d15fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_3b24647153468a4bccef7075599b8c6f3ae5248dc8fadf2c956b567e3a7397a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b24647153468a4bccef7075599b8c6f3ae5248dc8fadf2c956b567e3a7397a1->enter($__internal_3b24647153468a4bccef7075599b8c6f3ae5248dc8fadf2c956b567e3a7397a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_3b24647153468a4bccef7075599b8c6f3ae5248dc8fadf2c956b567e3a7397a1->leave($__internal_3b24647153468a4bccef7075599b8c6f3ae5248dc8fadf2c956b567e3a7397a1_prof);

        
        $__internal_71af8778f0fa40de5cb02a5e0c3148b3899878854cb33e88d2995436369d15fc->leave($__internal_71af8778f0fa40de5cb02a5e0c3148b3899878854cb33e88d2995436369d15fc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_080e44752649379bb8faa4d42ffd489e65b5348824f649341b1756748a5193bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080e44752649379bb8faa4d42ffd489e65b5348824f649341b1756748a5193bc->enter($__internal_080e44752649379bb8faa4d42ffd489e65b5348824f649341b1756748a5193bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ced522d62f82aeb7d7f9b3391d8c22e7f3c5e30c8519b0d04cabee1c2595d250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced522d62f82aeb7d7f9b3391d8c22e7f3c5e30c8519b0d04cabee1c2595d250->enter($__internal_ced522d62f82aeb7d7f9b3391d8c22e7f3c5e30c8519b0d04cabee1c2595d250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1 class=\"page-title\"> Offers
        <small></small>
    </h1>
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"/\">Home</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>Offers</span>
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
                        <button type=\"button\" id=\"addOfferBtn\" class=\"btn btn-primary\"  data-toggle=\"modal\" href=\"#offer-modal\"><i class=\"fa fa-plus\"></i> Add Offers</button>
                    </div>
                    <div class=\"tools\"> </div>


                    <div class=\"modal fade\" id=\"offer-modal\" tabindex=\"-1\" role=\"basic\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\"><i class=\"fa fa-tag\"></i> New Offer</h4>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"row\">
                                                <div class=\"col-lg-12 col-md-12\">
                                                            <textarea rows=\"5\" id=\"offerDetails\" required=\"required\" class=\"form-control autosizeme\" placeholder=\"Offer name, Offer URL, Offer Country, Affiliate Network, Payout\"></textarea>
                                                </div>
                                     </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn dark btn-outline\" data-dismiss=\"modal\">Close</button>
                                    <button type=\"button\" id=\"addOfferBtnSave\"  class=\"btn blue ladda-button spinnerBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-plus\"></i> Add</span></button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>


                </div>
                    <div class=\"portlet-body\">
                        <table class=\"table table-striped table-bordered table-hover dt-responsive\" width=\"100%\" id=\"datatable-responsive\">
                            <thead>
                            <tr>
                                <th>Offer </th>
                                <th>Offer URL </th>
                                <th>Geo </th>
                                <th>Affiliate network</th>
                            </tr>
                            </thead>
                            <tbody id=\"offersDisplay\">
                                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apiResponse"]) ? $context["apiResponse"] : $this->getContext($context, "apiResponse")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 98
            echo "                                    <tr>
                                        <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "offerName", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "offerUrl", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 101
            echo twig_escape_filter($this->env, (( !(null === $this->getAttribute($context["row"], "offerCountry", array()))) ? ($this->getAttribute($context["row"], "offerCountry", array())) : ("Global")), "html", null, true);
            echo "</td>
                                        <td>";
            // line 102
            echo twig_escape_filter($this->env, (( !(null === $this->getAttribute($context["row"], "affiliateNetworkName", array()))) ? ($this->getAttribute($context["row"], "affiliateNetworkName", array())) : ("")), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_ced522d62f82aeb7d7f9b3391d8c22e7f3c5e30c8519b0d04cabee1c2595d250->leave($__internal_ced522d62f82aeb7d7f9b3391d8c22e7f3c5e30c8519b0d04cabee1c2595d250_prof);

        
        $__internal_080e44752649379bb8faa4d42ffd489e65b5348824f649341b1756748a5193bc->leave($__internal_080e44752649379bb8faa4d42ffd489e65b5348824f649341b1756748a5193bc_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1047050a39bb8c26cd092742a7894083eb1508b3f675ac39ff32b8ffed9b387f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1047050a39bb8c26cd092742a7894083eb1508b3f675ac39ff32b8ffed9b387f->enter($__internal_1047050a39bb8c26cd092742a7894083eb1508b3f675ac39ff32b8ffed9b387f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7d831f051fd0dcc3281a3c360d86d2f4496c65a30a89ad720135a95406f574e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d831f051fd0dcc3281a3c360d86d2f4496c65a30a89ad720135a95406f574e9->enter($__internal_7d831f051fd0dcc3281a3c360d86d2f4496c65a30a89ad720135a95406f574e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/autosize/autosize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        Ladda.bind( '.spinnerBtn' );
    </script>
    <script type=\"text/javascript\">

        \$(document).on('ready', function() {
            \$('#addOfferBtnSave').click(function(){
                \$btn = \$(this)[0];
                \$offers = \$('#offerDetails').val();
                \$splitOffers = \$offers.split('\\n');
                var data = {items:[]};


                \$.each(\$splitOffers, function(i, val) {

                    \$split = val.split(',');
                    data.items.push({
                        offerName: \$split[0],
                        offerURL: encodeURIComponent(\$split[1]),
                        offerCountry: \$split[2],
                        affiliateNetwork: \$split[3],
                        payout: \$split[4]
                    });

                });
                addOffers(\$btn, data.items);
            });

        });

</script>
        <script>
        var TableDatatablesManaged = function () {

            var initTable1 = function () {

                var table = \$('#datatable-responsive');

                var oTable = table.dataTable({
                    // Internationalisation. For more info refer to http://datatables.net/manual/i18n
                    \"language\": {
                        \"aria\": {
                            \"sortAscending\": \": activate to sort column ascending\",
                            \"sortDescending\": \": activate to sort column descending\"
                        },
                        \"emptyTable\": \"No data available in table\",
                        \"info\": \"Showing _START_ to _END_ of _TOTAL_ entries\",
                        \"infoEmpty\": \"No entries found\",
                        \"infoFiltered\": \"(filtered1 from _MAX_ total entries)\",
                        \"lengthMenu\": \"_MENU_ entries\",
                        \"search\": \"Search:\",
                        \"zeroRecords\": \"No matching records found\"
                    },

                    // Or you can use remote translation file
                    //\"language\": {
                    //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
                    //},

                    // setup buttons extentension: http://datatables.net/extensions/buttons/
                    buttons: [
                        { extend: 'print', className: 'btn dark btn-outline', title: 'print' },
                        { extend: 'pdf', className: 'btn green btn-outline', title: 'Offers_PDF' },
                        { extend: 'csv', className: 'btn purple btn-outline ', title: 'Offers_CSV' }
                    ],

                    // setup responsive extension: http://datatables.net/extensions/responsive/
                    responsive: {
                        details: {

                        }
                    },

                    \"order\": [
                        [0, 'asc']
                    ],

                    \"lengthMenu\": [
                        [20, 50, 100, 500, -1],
                        [20, 50, 100, 500, \"All\"] // change per page values here
                    ],
                    // set the initial value
                    \"pageLength\": 20,

                    \"dom\": \"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>\" // horizobtal scrollable datatable

                    // Uncomment below line(\"dom\" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
                    // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
                    // So when dropdowns used the scrollable div should be removed.
                    //\"dom\": \"<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>\",
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
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/offers/offers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
";
        
        $__internal_7d831f051fd0dcc3281a3c360d86d2f4496c65a30a89ad720135a95406f574e9->leave($__internal_7d831f051fd0dcc3281a3c360d86d2f4496c65a30a89ad720135a95406f574e9_prof);

        
        $__internal_1047050a39bb8c26cd092742a7894083eb1508b3f675ac39ff32b8ffed9b387f->leave($__internal_1047050a39bb8c26cd092742a7894083eb1508b3f675ac39ff32b8ffed9b387f_prof);

    }

    public function getTemplateName()
    {
        return "offers/offers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 232,  220 => 115,  211 => 114,  193 => 105,  184 => 102,  180 => 101,  176 => 100,  172 => 99,  169 => 98,  165 => 97,  74 => 8,  65 => 7,  54 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
    <h1 class=\"page-title\"> Offers
        <small></small>
    </h1>
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"/\">Home</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>Offers</span>
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
                        <button type=\"button\" id=\"addOfferBtn\" class=\"btn btn-primary\"  data-toggle=\"modal\" href=\"#offer-modal\"><i class=\"fa fa-plus\"></i> Add Offers</button>
                    </div>
                    <div class=\"tools\"> </div>


                    <div class=\"modal fade\" id=\"offer-modal\" tabindex=\"-1\" role=\"basic\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-lg\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\"><i class=\"fa fa-tag\"></i> New Offer</h4>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"row\">
                                                <div class=\"col-lg-12 col-md-12\">
                                                            <textarea rows=\"5\" id=\"offerDetails\" required=\"required\" class=\"form-control autosizeme\" placeholder=\"Offer name, Offer URL, Offer Country, Affiliate Network, Payout\"></textarea>
                                                </div>
                                     </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn dark btn-outline\" data-dismiss=\"modal\">Close</button>
                                    <button type=\"button\" id=\"addOfferBtnSave\"  class=\"btn blue ladda-button spinnerBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-plus\"></i> Add</span></button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>


                </div>
                    <div class=\"portlet-body\">
                        <table class=\"table table-striped table-bordered table-hover dt-responsive\" width=\"100%\" id=\"datatable-responsive\">
                            <thead>
                            <tr>
                                <th>Offer </th>
                                <th>Offer URL </th>
                                <th>Geo </th>
                                <th>Affiliate network</th>
                            </tr>
                            </thead>
                            <tbody id=\"offersDisplay\">
                                {% for row in apiResponse %}
                                    <tr>
                                        <td>{{ row.offerName }}</td>
                                        <td>{{ row.offerUrl }}</td>
                                        <td>{{ (row.offerCountry is not null) ? row.offerCountry : 'Global' }}</td>
                                        <td>{{ (row.affiliateNetworkName is not null) ? row.affiliateNetworkName : '' }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('assets/global/plugins/autosize/autosize.min.js') }}\" type=\"text/javascript\"></script>
    <script>
        Ladda.bind( '.spinnerBtn' );
    </script>
    <script type=\"text/javascript\">

        \$(document).on('ready', function() {
            \$('#addOfferBtnSave').click(function(){
                \$btn = \$(this)[0];
                \$offers = \$('#offerDetails').val();
                \$splitOffers = \$offers.split('\\n');
                var data = {items:[]};


                \$.each(\$splitOffers, function(i, val) {

                    \$split = val.split(',');
                    data.items.push({
                        offerName: \$split[0],
                        offerURL: encodeURIComponent(\$split[1]),
                        offerCountry: \$split[2],
                        affiliateNetwork: \$split[3],
                        payout: \$split[4]
                    });

                });
                addOffers(\$btn, data.items);
            });

        });

</script>
        <script>
        var TableDatatablesManaged = function () {

            var initTable1 = function () {

                var table = \$('#datatable-responsive');

                var oTable = table.dataTable({
                    // Internationalisation. For more info refer to http://datatables.net/manual/i18n
                    \"language\": {
                        \"aria\": {
                            \"sortAscending\": \": activate to sort column ascending\",
                            \"sortDescending\": \": activate to sort column descending\"
                        },
                        \"emptyTable\": \"No data available in table\",
                        \"info\": \"Showing _START_ to _END_ of _TOTAL_ entries\",
                        \"infoEmpty\": \"No entries found\",
                        \"infoFiltered\": \"(filtered1 from _MAX_ total entries)\",
                        \"lengthMenu\": \"_MENU_ entries\",
                        \"search\": \"Search:\",
                        \"zeroRecords\": \"No matching records found\"
                    },

                    // Or you can use remote translation file
                    //\"language\": {
                    //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
                    //},

                    // setup buttons extentension: http://datatables.net/extensions/buttons/
                    buttons: [
                        { extend: 'print', className: 'btn dark btn-outline', title: 'print' },
                        { extend: 'pdf', className: 'btn green btn-outline', title: 'Offers_PDF' },
                        { extend: 'csv', className: 'btn purple btn-outline ', title: 'Offers_CSV' }
                    ],

                    // setup responsive extension: http://datatables.net/extensions/responsive/
                    responsive: {
                        details: {

                        }
                    },

                    \"order\": [
                        [0, 'asc']
                    ],

                    \"lengthMenu\": [
                        [20, 50, 100, 500, -1],
                        [20, 50, 100, 500, \"All\"] // change per page values here
                    ],
                    // set the initial value
                    \"pageLength\": 20,

                    \"dom\": \"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>\" // horizobtal scrollable datatable

                    // Uncomment below line(\"dom\" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
                    // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
                    // So when dropdowns used the scrollable div should be removed.
                    //\"dom\": \"<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>\",
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
    <script src=\"{{ asset('assets/ajax/offers/offers.js') }}\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
{% endblock %}
", "offers/offers.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app\\Resources\\views\\offers\\offers.html.twig");
    }
}
