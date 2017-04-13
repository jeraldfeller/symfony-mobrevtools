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
        $__internal_6a12670f887c5c9d5a0d5e9d3f027894b0f0a22a0bc09550d3f5b9e0fed2e129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a12670f887c5c9d5a0d5e9d3f027894b0f0a22a0bc09550d3f5b9e0fed2e129->enter($__internal_6a12670f887c5c9d5a0d5e9d3f027894b0f0a22a0bc09550d3f5b9e0fed2e129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offers/offers.html.twig"));

        $__internal_66393893a0c6b66f8d68b5c1e2d20819bcbea7eea438c8c9c2ddbf352be24d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66393893a0c6b66f8d68b5c1e2d20819bcbea7eea438c8c9c2ddbf352be24d38->enter($__internal_66393893a0c6b66f8d68b5c1e2d20819bcbea7eea438c8c9c2ddbf352be24d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offers/offers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a12670f887c5c9d5a0d5e9d3f027894b0f0a22a0bc09550d3f5b9e0fed2e129->leave($__internal_6a12670f887c5c9d5a0d5e9d3f027894b0f0a22a0bc09550d3f5b9e0fed2e129_prof);

        
        $__internal_66393893a0c6b66f8d68b5c1e2d20819bcbea7eea438c8c9c2ddbf352be24d38->leave($__internal_66393893a0c6b66f8d68b5c1e2d20819bcbea7eea438c8c9c2ddbf352be24d38_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a5524918ea698f0ef36c9da6ea40575214a1c8192d8af4b5fb57bcdbbcf4c0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5524918ea698f0ef36c9da6ea40575214a1c8192d8af4b5fb57bcdbbcf4c0fe->enter($__internal_a5524918ea698f0ef36c9da6ea40575214a1c8192d8af4b5fb57bcdbbcf4c0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_27cc749f71b9e1a0ab7098ac4fcc258560302479b4030351a53e597ec5f3be2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cc749f71b9e1a0ab7098ac4fcc258560302479b4030351a53e597ec5f3be2e->enter($__internal_27cc749f71b9e1a0ab7098ac4fcc258560302479b4030351a53e597ec5f3be2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 5
        echo "
";
        
        $__internal_27cc749f71b9e1a0ab7098ac4fcc258560302479b4030351a53e597ec5f3be2e->leave($__internal_27cc749f71b9e1a0ab7098ac4fcc258560302479b4030351a53e597ec5f3be2e_prof);

        
        $__internal_a5524918ea698f0ef36c9da6ea40575214a1c8192d8af4b5fb57bcdbbcf4c0fe->leave($__internal_a5524918ea698f0ef36c9da6ea40575214a1c8192d8af4b5fb57bcdbbcf4c0fe_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6d839447a4f612334b8167808612878c6f0da7997dd6543764dcd4b33088b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d839447a4f612334b8167808612878c6f0da7997dd6543764dcd4b33088b76->enter($__internal_a6d839447a4f612334b8167808612878c6f0da7997dd6543764dcd4b33088b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6864c44a4293f2ef9c1b4e636300d02f3be1da813c9dfa672dc89fd2db542344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6864c44a4293f2ef9c1b4e636300d02f3be1da813c9dfa672dc89fd2db542344->enter($__internal_6864c44a4293f2ef9c1b4e636300d02f3be1da813c9dfa672dc89fd2db542344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <span>Tools</span>
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
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apiResponse"]) ? $context["apiResponse"] : $this->getContext($context, "apiResponse")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 102
            echo "                                    <tr>
                                        <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "offerName", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "offerUrl", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 105
            echo twig_escape_filter($this->env, (( !(null === $this->getAttribute($context["row"], "offerCountry", array()))) ? ($this->getAttribute($context["row"], "offerCountry", array())) : ("Global")), "html", null, true);
            echo "</td>
                                        <td>";
            // line 106
            echo twig_escape_filter($this->env, (( !(null === $this->getAttribute($context["row"], "affiliateNetworkName", array()))) ? ($this->getAttribute($context["row"], "affiliateNetworkName", array())) : ("")), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6864c44a4293f2ef9c1b4e636300d02f3be1da813c9dfa672dc89fd2db542344->leave($__internal_6864c44a4293f2ef9c1b4e636300d02f3be1da813c9dfa672dc89fd2db542344_prof);

        
        $__internal_a6d839447a4f612334b8167808612878c6f0da7997dd6543764dcd4b33088b76->leave($__internal_a6d839447a4f612334b8167808612878c6f0da7997dd6543764dcd4b33088b76_prof);

    }

    // line 118
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d361694bf1d527af66d8f98573cc3e5bb5e0795b31d1bb6e0c9485f5e18dbf4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d361694bf1d527af66d8f98573cc3e5bb5e0795b31d1bb6e0c9485f5e18dbf4a->enter($__internal_d361694bf1d527af66d8f98573cc3e5bb5e0795b31d1bb6e0c9485f5e18dbf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3dde036b809a973697efdd0a35ba7187c66dbd1e42999bf8001f2bcf9f1495ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dde036b809a973697efdd0a35ba7187c66dbd1e42999bf8001f2bcf9f1495ae->enter($__internal_3dde036b809a973697efdd0a35ba7187c66dbd1e42999bf8001f2bcf9f1495ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 119
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
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/offers/offers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
";
        
        $__internal_3dde036b809a973697efdd0a35ba7187c66dbd1e42999bf8001f2bcf9f1495ae->leave($__internal_3dde036b809a973697efdd0a35ba7187c66dbd1e42999bf8001f2bcf9f1495ae_prof);

        
        $__internal_d361694bf1d527af66d8f98573cc3e5bb5e0795b31d1bb6e0c9485f5e18dbf4a->leave($__internal_d361694bf1d527af66d8f98573cc3e5bb5e0795b31d1bb6e0c9485f5e18dbf4a_prof);

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
        return array (  345 => 236,  224 => 119,  215 => 118,  197 => 109,  188 => 106,  184 => 105,  180 => 104,  176 => 103,  173 => 102,  169 => 101,  74 => 8,  65 => 7,  54 => 5,  51 => 3,  42 => 2,  11 => 1,);
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
                <span>Tools</span>
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
