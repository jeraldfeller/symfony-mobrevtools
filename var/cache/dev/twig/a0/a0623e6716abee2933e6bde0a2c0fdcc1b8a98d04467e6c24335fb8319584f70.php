<?php

/* reports/ip.html.twig */
class __TwigTemplate_fa34176e86f8ff18986b3ed81dfb0c1727d7cbccd9c38064542a75070d9af076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/ip.html.twig", 1);
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
        $__internal_2b76c8e25ba06707c370d09dee4159f20fa76b26c8551904c9f462e2491d7aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b76c8e25ba06707c370d09dee4159f20fa76b26c8551904c9f462e2491d7aac->enter($__internal_2b76c8e25ba06707c370d09dee4159f20fa76b26c8551904c9f462e2491d7aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/ip.html.twig"));

        $__internal_aaf2134a75d01cdcd7bfc1ba609e11645e4638daa566b1cebc24e3f7bc3d3400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf2134a75d01cdcd7bfc1ba609e11645e4638daa566b1cebc24e3f7bc3d3400->enter($__internal_aaf2134a75d01cdcd7bfc1ba609e11645e4638daa566b1cebc24e3f7bc3d3400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/ip.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b76c8e25ba06707c370d09dee4159f20fa76b26c8551904c9f462e2491d7aac->leave($__internal_2b76c8e25ba06707c370d09dee4159f20fa76b26c8551904c9f462e2491d7aac_prof);

        
        $__internal_aaf2134a75d01cdcd7bfc1ba609e11645e4638daa566b1cebc24e3f7bc3d3400->leave($__internal_aaf2134a75d01cdcd7bfc1ba609e11645e4638daa566b1cebc24e3f7bc3d3400_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4cc572998b4d1741cb8f88fabad8a0d06ce9b2a929cb44f159351ef2680d9771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc572998b4d1741cb8f88fabad8a0d06ce9b2a929cb44f159351ef2680d9771->enter($__internal_4cc572998b4d1741cb8f88fabad8a0d06ce9b2a929cb44f159351ef2680d9771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4817d3edcc9ad3058e2b20b789691f43d58f5546a1980b63e4e780d2b4ef9dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4817d3edcc9ad3058e2b20b789691f43d58f5546a1980b63e4e780d2b4ef9dff->enter($__internal_4817d3edcc9ad3058e2b20b789691f43d58f5546a1980b63e4e780d2b4ef9dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4817d3edcc9ad3058e2b20b789691f43d58f5546a1980b63e4e780d2b4ef9dff->leave($__internal_4817d3edcc9ad3058e2b20b789691f43d58f5546a1980b63e4e780d2b4ef9dff_prof);

        
        $__internal_4cc572998b4d1741cb8f88fabad8a0d06ce9b2a929cb44f159351ef2680d9771->leave($__internal_4cc572998b4d1741cb8f88fabad8a0d06ce9b2a929cb44f159351ef2680d9771_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_1cf76027ed80bc119bc1bb6b6650ab16a02f1ed66aa5f14a964df03d83863f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf76027ed80bc119bc1bb6b6650ab16a02f1ed66aa5f14a964df03d83863f15->enter($__internal_1cf76027ed80bc119bc1bb6b6650ab16a02f1ed66aa5f14a964df03d83863f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_8b035439e528d97d77516027e1c864c592d11b0268003dae3e5a26648eab43d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b035439e528d97d77516027e1c864c592d11b0268003dae3e5a26648eab43d3->enter($__internal_8b035439e528d97d77516027e1c864c592d11b0268003dae3e5a26648eab43d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 19
        echo "
";
        
        $__internal_8b035439e528d97d77516027e1c864c592d11b0268003dae3e5a26648eab43d3->leave($__internal_8b035439e528d97d77516027e1c864c592d11b0268003dae3e5a26648eab43d3_prof);

        
        $__internal_1cf76027ed80bc119bc1bb6b6650ab16a02f1ed66aa5f14a964df03d83863f15->leave($__internal_1cf76027ed80bc119bc1bb6b6650ab16a02f1ed66aa5f14a964df03d83863f15_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f6b402373d93a477054e694253a5fc992a62499df1ae54e515d85499f9f527c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6b402373d93a477054e694253a5fc992a62499df1ae54e515d85499f9f527c->enter($__internal_7f6b402373d93a477054e694253a5fc992a62499df1ae54e515d85499f9f527c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a0b1ecbedb6af7be52116628e402daeaf406924cd3b367077ca902569362865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0b1ecbedb6af7be52116628e402daeaf406924cd3b367077ca902569362865->enter($__internal_6a0b1ecbedb6af7be52116628e402daeaf406924cd3b367077ca902569362865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterTrafficSource\" class=\"form-control select2\">
                                    <option></option>
                                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "trafficSource", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 80
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trafficName", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trafficName", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                </select>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterCampaign\" class=\"form-control select2\">
                                    <option></option>
                                    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "campaigns", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 89
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "campaignName", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "campaignName", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                </select>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterGeo\" class=\"form-control select2\">
                                    <option></option>
                                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "geos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 98
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "geo", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "geo", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                </select>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterCarrier\" class=\"form-control select2\">
                                    <option></option>
                                    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "carriers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 107
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mobileCarrier", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mobileCarrier", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                                </select>
                            </div>

                             <div class=\"col-md-2\">
                                <button class=\"btn blue spinnerBtn ladda-button\" id=\"filterBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-search\"></i> Filter</span></button>
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

                                    <table class=\"table table-striped table-bordered table-hover dt-responsive table-checkable order-column table-header-fixed\" width=\"100%\" id=\"datatable-responsive\">
                                        <thead>
                                        <tr>
                                            <th>Id </th>
                                            <th>Traffic Source </th>
                                            <th>Campaign</th>
                                            <th>Geo </th>
                                            <th>Mobile Carrier </th>
                                            <th>IP </th>
                                            <th>IP </th>
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
        
        $__internal_6a0b1ecbedb6af7be52116628e402daeaf406924cd3b367077ca902569362865->leave($__internal_6a0b1ecbedb6af7be52116628e402daeaf406924cd3b367077ca902569362865_prof);

        
        $__internal_7f6b402373d93a477054e694253a5fc992a62499df1ae54e515d85499f9f527c->leave($__internal_7f6b402373d93a477054e694253a5fc992a62499df1ae54e515d85499f9f527c_prof);

    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7a712437c2f37a7742a03499ac79d99e5ffb164758462c2d6ca6c2a7c0758a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a712437c2f37a7742a03499ac79d99e5ffb164758462c2d6ca6c2a7c0758a6->enter($__internal_d7a712437c2f37a7742a03499ac79d99e5ffb164758462c2d6ca6c2a7c0758a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ce5c72504a17315242cfaf943620e3b1a597ea2d9f70d4576dd93a6054c8da69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5c72504a17315242cfaf943620e3b1a597ea2d9f70d4576dd93a6054c8da69->enter($__internal_ce5c72504a17315242cfaf943620e3b1a597ea2d9f70d4576dd93a6054c8da69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 154
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/autosize/autosize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/clockface/js/clockface.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 162
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

                \$(\"#selectFilterTrafficSource\").select2({
                    allowClear: true,
                    placeholder: 'Select TrafficSource',
                    width: null
                });

                \$(\"#selectFilterCampaign\").select2({
                    allowClear: true,
                    placeholder: 'Select Campaign',
                    width: null
                });
                \$(\"#selectFilterGeo\").select2({
                    allowClear: true,
                    placeholder: 'Select Geo',
                    width: null
                });

                \$(\"#selectFilterCarrier\").select2({
                    allowClear: true,
                    placeholder: 'Select Carrier',
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
                \"fnServerData\": function (sSource, aoData, fnCallback) {
                    aoData.push( {
                        \"name\": \"traffic\", \"value\": \$('#selectFilterTrafficSource').val()
                    } );
                    aoData.push( {
                        \"name\": \"campaign\", \"value\": \$('#selectFilterCampaign').val()
                    } );
                    aoData.push( {
                        \"name\": \"geo\", \"value\": \$('#selectFilterGeo').val()
                    } );
                    aoData.push( {
                        \"name\": \"mobileCarrier\", \"value\": \$('#selectFilterCarrier').val()
                    } );
                    \$.getJSON(sSource, aoData, function (json) {
                        /* Do whatever additional processing you want on the callback, then tell DataTables */
                        fnCallback(json)
                    });
                },
                \"sAjaxSource\": \"/ajax/get-reports-ip\",

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
                        \"targets\": [ 0, 6 ],
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
                        extend: 'csvHtml5',
                        className: 'btn blue btn-outline',
                        title: 'Whitelist Ip',
                        text: '<i class=\"fa fa-file-excel-o\"></i> Export Whitelist',
                        exportOptions: {
                            columns: [1, 2, 3, 5]

                        }
                    },
                    {
                        extend: 'csvHtml5',
                        className: 'btn green btn-outline',
                        title: 'Blacklist Ip',
                        text: '<i class=\"fa fa-file-excel-o\"></i> Export Blacklist',
                        exportOptions: {
                            columns: [1, 2, 3, 6]
                        }
                    },
                    {
                        extend: 'copyHtml5',
                        className: 'btn purple btn-outline whitelistBtn',
                        text: '<i class=\"fa fa-copy\"></i> Copy to Clipboard Whitelist',
                        header: false,
                        exportOptions: {
                            columns: [5]
                        }
                    },
                    {
                        extend: 'copyHtml5',
                        className: 'btn dark btn-outline ',
                        text: '<i class=\"fa fa-copy\"></i> Copy to Clipboard Blacklist',
                        header: false,
                        exportOptions: {
                            columns: [6]
                        }


                    }
                ]


            });


            \$('#filterBtn').click(function(){
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
        
        $__internal_ce5c72504a17315242cfaf943620e3b1a597ea2d9f70d4576dd93a6054c8da69->leave($__internal_ce5c72504a17315242cfaf943620e3b1a597ea2d9f70d4576dd93a6054c8da69_prof);

        
        $__internal_d7a712437c2f37a7742a03499ac79d99e5ffb164758462c2d6ca6c2a7c0758a6->leave($__internal_d7a712437c2f37a7742a03499ac79d99e5ffb164758462c2d6ca6c2a7c0758a6_prof);

    }

    public function getTemplateName()
    {
        return "reports/ip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 162,  363 => 161,  359 => 160,  355 => 159,  351 => 158,  347 => 157,  343 => 156,  339 => 155,  334 => 154,  325 => 153,  272 => 109,  261 => 107,  257 => 106,  249 => 100,  238 => 98,  234 => 97,  226 => 91,  215 => 89,  211 => 88,  203 => 82,  192 => 80,  188 => 79,  143 => 37,  126 => 22,  117 => 21,  106 => 19,  103 => 17,  94 => 16,  77 => 9,  73 => 8,  69 => 7,  65 => 6,  61 => 5,  57 => 4,  52 => 3,  43 => 2,  11 => 1,);
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
                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterTrafficSource\" class=\"form-control select2\">
                                    <option></option>
                                    {% for item in filters.trafficSource %}
    <option value=\"{{ item.trafficName }}\">{{ item.trafficName }}</option>
{% endfor %}
                                </select>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterCampaign\" class=\"form-control select2\">
                                    <option></option>
                                    {% for item in filters.campaigns %}
    <option value=\"{{ item.campaignName }}\">{{ item.campaignName }}</option>
{% endfor %}
                                </select>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterGeo\" class=\"form-control select2\">
                                    <option></option>
                                    {% for item in filters.geos %}
    <option value=\"{{ item.geo }}\">{{ item.geo }}</option>
{% endfor %}
                                </select>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterCarrier\" class=\"form-control select2\">
                                    <option></option>
                                    {% for item in filters.carriers %}
    <option value=\"{{ item.mobileCarrier }}\">{{ item.mobileCarrier }}</option>
{% endfor %}
                                </select>
                            </div>

                             <div class=\"col-md-2\">
                                <button class=\"btn blue spinnerBtn ladda-button\" id=\"filterBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-search\"></i> Filter</span></button>
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

                                    <table class=\"table table-striped table-bordered table-hover dt-responsive table-checkable order-column table-header-fixed\" width=\"100%\" id=\"datatable-responsive\">
                                        <thead>
                                        <tr>
                                            <th>Id </th>
                                            <th>Traffic Source </th>
                                            <th>Campaign</th>
                                            <th>Geo </th>
                                            <th>Mobile Carrier </th>
                                            <th>IP </th>
                                            <th>IP </th>
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
    <script type=\"text/javascript\">

        var ComponentsSelect2 = function() {

            var handleDemo = function() {

                // Set the \"bootstrap\" theme as the default theme for all Select2
                // widgets.
                //
                // @see https://github.com/select2/select2/issues/2927
                \$.fn.select2.defaults.set(\"theme\", \"bootstrap\");

                \$(\"#selectFilterTrafficSource\").select2({
                    allowClear: true,
                    placeholder: 'Select TrafficSource',
                    width: null
                });

                \$(\"#selectFilterCampaign\").select2({
                    allowClear: true,
                    placeholder: 'Select Campaign',
                    width: null
                });
                \$(\"#selectFilterGeo\").select2({
                    allowClear: true,
                    placeholder: 'Select Geo',
                    width: null
                });

                \$(\"#selectFilterCarrier\").select2({
                    allowClear: true,
                    placeholder: 'Select Carrier',
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
                \"fnServerData\": function (sSource, aoData, fnCallback) {
                    aoData.push( {
                        \"name\": \"traffic\", \"value\": \$('#selectFilterTrafficSource').val()
                    } );
                    aoData.push( {
                        \"name\": \"campaign\", \"value\": \$('#selectFilterCampaign').val()
                    } );
                    aoData.push( {
                        \"name\": \"geo\", \"value\": \$('#selectFilterGeo').val()
                    } );
                    aoData.push( {
                        \"name\": \"mobileCarrier\", \"value\": \$('#selectFilterCarrier').val()
                    } );
                    \$.getJSON(sSource, aoData, function (json) {
                        /* Do whatever additional processing you want on the callback, then tell DataTables */
                        fnCallback(json)
                    });
                },
                \"sAjaxSource\": \"/ajax/get-reports-ip\",

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
                        \"targets\": [ 0, 6 ],
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
                        extend: 'csvHtml5',
                        className: 'btn blue btn-outline',
                        title: 'Whitelist Ip',
                        text: '<i class=\"fa fa-file-excel-o\"></i> Export Whitelist',
                        exportOptions: {
                            columns: [1, 2, 3, 5]

                        }
                    },
                    {
                        extend: 'csvHtml5',
                        className: 'btn green btn-outline',
                        title: 'Blacklist Ip',
                        text: '<i class=\"fa fa-file-excel-o\"></i> Export Blacklist',
                        exportOptions: {
                            columns: [1, 2, 3, 6]
                        }
                    },
                    {
                        extend: 'copyHtml5',
                        className: 'btn purple btn-outline whitelistBtn',
                        text: '<i class=\"fa fa-copy\"></i> Copy to Clipboard Whitelist',
                        header: false,
                        exportOptions: {
                            columns: [5]
                        }
                    },
                    {
                        extend: 'copyHtml5',
                        className: 'btn dark btn-outline ',
                        text: '<i class=\"fa fa-copy\"></i> Copy to Clipboard Blacklist',
                        header: false,
                        exportOptions: {
                            columns: [6]
                        }


                    }
                ]


            });


            \$('#filterBtn').click(function(){
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
", "reports/ip.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app\\Resources\\views\\reports\\ip.html.twig");
    }
}
