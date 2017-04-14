<?php

/* reports/metrics.html.twig */
class __TwigTemplate_cf571cf4862c990b35d199900f48e95d97310c24e01508c6ff59fef669d99d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/metrics.html.twig", 1);
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
        $__internal_4e40343c99ab38e8a2c3f2f5ea6f20a505dca7727e034f25796e4633a6160064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e40343c99ab38e8a2c3f2f5ea6f20a505dca7727e034f25796e4633a6160064->enter($__internal_4e40343c99ab38e8a2c3f2f5ea6f20a505dca7727e034f25796e4633a6160064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/metrics.html.twig"));

        $__internal_04ef21036c13d29d0f986a918be164040b5ef712d074c040e28d1cbab87beb70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ef21036c13d29d0f986a918be164040b5ef712d074c040e28d1cbab87beb70->enter($__internal_04ef21036c13d29d0f986a918be164040b5ef712d074c040e28d1cbab87beb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/metrics.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e40343c99ab38e8a2c3f2f5ea6f20a505dca7727e034f25796e4633a6160064->leave($__internal_4e40343c99ab38e8a2c3f2f5ea6f20a505dca7727e034f25796e4633a6160064_prof);

        
        $__internal_04ef21036c13d29d0f986a918be164040b5ef712d074c040e28d1cbab87beb70->leave($__internal_04ef21036c13d29d0f986a918be164040b5ef712d074c040e28d1cbab87beb70_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55bbe214665981044b2879e83fa24c21227fc96683781e81e5fedc10ad33b4d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bbe214665981044b2879e83fa24c21227fc96683781e81e5fedc10ad33b4d3->enter($__internal_55bbe214665981044b2879e83fa24c21227fc96683781e81e5fedc10ad33b4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_29e8a075f15769016b16cdc5e21e18791bb901d829a9f6ccde4b21a09548960b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e8a075f15769016b16cdc5e21e18791bb901d829a9f6ccde4b21a09548960b->enter($__internal_29e8a075f15769016b16cdc5e21e18791bb901d829a9f6ccde4b21a09548960b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_29e8a075f15769016b16cdc5e21e18791bb901d829a9f6ccde4b21a09548960b->leave($__internal_29e8a075f15769016b16cdc5e21e18791bb901d829a9f6ccde4b21a09548960b_prof);

        
        $__internal_55bbe214665981044b2879e83fa24c21227fc96683781e81e5fedc10ad33b4d3->leave($__internal_55bbe214665981044b2879e83fa24c21227fc96683781e81e5fedc10ad33b4d3_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_77c04c6dbf543f65397416d08be1b4ae73bfcbf96f1ddb0225c1d0a620b93e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c04c6dbf543f65397416d08be1b4ae73bfcbf96f1ddb0225c1d0a620b93e55->enter($__internal_77c04c6dbf543f65397416d08be1b4ae73bfcbf96f1ddb0225c1d0a620b93e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_f31290ac82276b81b28c7e2aab41abfe2307635061abd6fa7e0787137b57f502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31290ac82276b81b28c7e2aab41abfe2307635061abd6fa7e0787137b57f502->enter($__internal_f31290ac82276b81b28c7e2aab41abfe2307635061abd6fa7e0787137b57f502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 19
        echo "
";
        
        $__internal_f31290ac82276b81b28c7e2aab41abfe2307635061abd6fa7e0787137b57f502->leave($__internal_f31290ac82276b81b28c7e2aab41abfe2307635061abd6fa7e0787137b57f502_prof);

        
        $__internal_77c04c6dbf543f65397416d08be1b4ae73bfcbf96f1ddb0225c1d0a620b93e55->leave($__internal_77c04c6dbf543f65397416d08be1b4ae73bfcbf96f1ddb0225c1d0a620b93e55_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c3ac3a0d8cdc4275e5417fefa4d0e1ef5be6b63941eecf47afcd1840e95a966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3ac3a0d8cdc4275e5417fefa4d0e1ef5be6b63941eecf47afcd1840e95a966->enter($__internal_7c3ac3a0d8cdc4275e5417fefa4d0e1ef5be6b63941eecf47afcd1840e95a966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17681e1691cd8cd7c75ad4b9b34678fea4c485f52b6e3804a3fa95276b6b3db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17681e1691cd8cd7c75ad4b9b34678fea4c485f52b6e3804a3fa95276b6b3db8->enter($__internal_17681e1691cd8cd7c75ad4b9b34678fea4c485f52b6e3804a3fa95276b6b3db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "    <h1 class=\"page-title\"> ";
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo "

    </h1>
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"/\">Home</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>Data Report</span>
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
                            <div class=\"col-md-6 col-xs-12\">
                                <select id=\"chooseCampaign\" class=\"form-control select2\">
                                <option></option>
                                </select>
                            </div>

                            <div class=\"col-md-6 col-xs-12\">
                                <select id=\"chooseVariables\" class=\"select2_multiple form-control\" multiple=\"multiple\">
                                    <option value=\"CR\">CR</option>
                                    <option value=\"CV\">CV</option>
                                    <option value=\"CTR\">CTR</option>
                                    <option value=\"CPV\">CPV</option>
                                    <option value=\"EPV\">EPV</option>
                                    <option value=\"VCCP\">VISITS, CONVERSION, COST, PROFIT</option>
                                </select>
                            </div>
                            <br>
                            <br>
                            <br>

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

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"chooseTZ\" class=\"form-control select2\">
                                    <option value=\"America/Chicago\">America/Chicago</option>
                                    <option value=\"America/New_York\">America/New_York</option>
                                </select>
                            </div>


                            <div class=\"col-md-2 col-xs-12\">
                                <div class=\"md-checkbox-inline\">
                                    <div class=\"md-checkbox has-dark\">
                                        <input type=\"checkbox\" id=\"includeHours\" value=\"1\" class=\"md-check\">
                                            <label for=\"includeHours\">
                                            <span></span>
                                             <span class=\"check\"></span>
                                        <span class=\"box\"></span> Include Hours </label>
                                    </div>
                                </div>
                            </div>

                             <div class=\"col-md-2\">
                                <button class=\"btn blue spinnerBtn ladda-button\" id=\"generateMetricsBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-area-chart\"></i> Generate</span></button>
                            </div>

                        </div>

                    </div>
                    <div class=\"tools\"> </div>
                </div>

                    <div class=\"portlet-body\">
                         <div class=\"row\" id=\"graphContainer\">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_17681e1691cd8cd7c75ad4b9b34678fea4c485f52b6e3804a3fa95276b6b3db8->leave($__internal_17681e1691cd8cd7c75ad4b9b34678fea4c485f52b6e3804a3fa95276b6b3db8_prof);

        
        $__internal_7c3ac3a0d8cdc4275e5417fefa4d0e1ef5be6b63941eecf47afcd1840e95a966->leave($__internal_7c3ac3a0d8cdc4275e5417fefa4d0e1ef5be6b63941eecf47afcd1840e95a966_prof);

    }

    // line 149
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4578aeda52ee0c01ee27c7b9bd604448e6edcd170e18ecd43ec45ff0b2d153cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4578aeda52ee0c01ee27c7b9bd604448e6edcd170e18ecd43ec45ff0b2d153cc->enter($__internal_4578aeda52ee0c01ee27c7b9bd604448e6edcd170e18ecd43ec45ff0b2d153cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ef48d71d55b852722b83862b8271b486c2f51fb237093137f592327737e649d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef48d71d55b852722b83862b8271b486c2f51fb237093137f592327737e649d3->enter($__internal_ef48d71d55b852722b83862b8271b486c2f51fb237093137f592327737e649d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 150
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/autosize/autosize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/clockface/js/clockface.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/scripts/components-date-time-pickers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.categories.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.stack.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.crosshair.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.axislabels.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/flot/jquery.flot.time.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/highcharts/js/highcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/highcharts/js/highcharts-3d.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/highcharts/js/highcharts-more.js"), "html", null, true);
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

                \$(\".select2#chooseCampaign\").select2({
                    placeholder: \"Select Campaign\",
                    allowClear: true
                });
                \$(\".select2#chooseTZ\").select2({
                    placeholder: \"Select TimeZone\",
                    allowClear: true
                });
                \$(\".select2_multiple\").select2({
                    placeholder: \"Select Variables\",
                    allowClear: true
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
                getActiveCampaigns(0, 'active');
                ComponentsSelect2.init();
                \$('#generateMetricsBtn').click(function(){
                    \$from = \$('#date-from').val();
                    \$to = \$('#date-to').val();
                    \$campaign = \$('#chooseCampaign').val();
                    \$tz = \$('#chooseTZ').val();
                    \$btn = \$(this)[0];
                    if( \$('#includeHours').prop('checked') == true){
                        \$includeHours = 1;
                    }else{
                        \$includeHours = 0;
                    }
                   console.log(\$('#includeHours').prop('checked'));
                    \$data = {
                        from: \$from,
                        to: \$to,
                        campaign: \$campaign,
                        tz: \$tz,
                        includeHours: \$includeHours
                    };

                    \$variables = \$('#chooseVariables').val();

                    getCampaignMetrics(\$data, \$variables, \$btn);
                });
            });
        }


    </script>

    <!-- AJAX CALLS -->
    <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/reports/metrics.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/common/common.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
";
        
        $__internal_ef48d71d55b852722b83862b8271b486c2f51fb237093137f592327737e649d3->leave($__internal_ef48d71d55b852722b83862b8271b486c2f51fb237093137f592327737e649d3_prof);

        
        $__internal_4578aeda52ee0c01ee27c7b9bd604448e6edcd170e18ecd43ec45ff0b2d153cc->leave($__internal_4578aeda52ee0c01ee27c7b9bd604448e6edcd170e18ecd43ec45ff0b2d153cc_prof);

    }

    public function getTemplateName()
    {
        return "reports/metrics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 337,  523 => 336,  356 => 172,  352 => 171,  348 => 170,  342 => 167,  338 => 166,  334 => 165,  330 => 164,  326 => 163,  322 => 162,  318 => 161,  314 => 160,  309 => 158,  305 => 157,  301 => 156,  297 => 155,  293 => 154,  289 => 153,  285 => 152,  281 => 151,  276 => 150,  267 => 149,  145 => 37,  126 => 22,  117 => 21,  106 => 19,  103 => 17,  94 => 16,  77 => 9,  73 => 8,  69 => 7,  65 => 6,  61 => 5,  57 => 4,  52 => 3,  43 => 2,  11 => 1,);
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
    <h1 class=\"page-title\"> {{ page }}

    </h1>
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"/\">Home</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span>Data Report</span>
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
                            <div class=\"col-md-6 col-xs-12\">
                                <select id=\"chooseCampaign\" class=\"form-control select2\">
                                <option></option>
                                </select>
                            </div>

                            <div class=\"col-md-6 col-xs-12\">
                                <select id=\"chooseVariables\" class=\"select2_multiple form-control\" multiple=\"multiple\">
                                    <option value=\"CR\">CR</option>
                                    <option value=\"CV\">CV</option>
                                    <option value=\"CTR\">CTR</option>
                                    <option value=\"CPV\">CPV</option>
                                    <option value=\"EPV\">EPV</option>
                                    <option value=\"VCCP\">VISITS, CONVERSION, COST, PROFIT</option>
                                </select>
                            </div>
                            <br>
                            <br>
                            <br>

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

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"chooseTZ\" class=\"form-control select2\">
                                    <option value=\"America/Chicago\">America/Chicago</option>
                                    <option value=\"America/New_York\">America/New_York</option>
                                </select>
                            </div>


                            <div class=\"col-md-2 col-xs-12\">
                                <div class=\"md-checkbox-inline\">
                                    <div class=\"md-checkbox has-dark\">
                                        <input type=\"checkbox\" id=\"includeHours\" value=\"1\" class=\"md-check\">
                                            <label for=\"includeHours\">
                                            <span></span>
                                             <span class=\"check\"></span>
                                        <span class=\"box\"></span> Include Hours </label>
                                    </div>
                                </div>
                            </div>

                             <div class=\"col-md-2\">
                                <button class=\"btn blue spinnerBtn ladda-button\" id=\"generateMetricsBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-area-chart\"></i> Generate</span></button>
                            </div>

                        </div>

                    </div>
                    <div class=\"tools\"> </div>
                </div>

                    <div class=\"portlet-body\">
                         <div class=\"row\" id=\"graphContainer\">

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

    <script src=\"{{ asset('assets/global/plugins/flot/jquery.flot.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/flot/jquery.flot.resize.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/flot/jquery.flot.categories.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/flot/jquery.flot.pie.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/flot/jquery.flot.stack.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/flot/jquery.flot.crosshair.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/flot/jquery.flot.axislabels.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/flot/jquery.flot.time.js') }}\" type=\"text/javascript\"></script>


    <script src=\"{{ asset('assets/global/plugins/highcharts/js/highcharts.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/highcharts/js/highcharts-3d.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/global/plugins/highcharts/js/highcharts-more.js') }}\" type=\"text/javascript\"></script>
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

                \$(\".select2#chooseCampaign\").select2({
                    placeholder: \"Select Campaign\",
                    allowClear: true
                });
                \$(\".select2#chooseTZ\").select2({
                    placeholder: \"Select TimeZone\",
                    allowClear: true
                });
                \$(\".select2_multiple\").select2({
                    placeholder: \"Select Variables\",
                    allowClear: true
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
                getActiveCampaigns(0, 'active');
                ComponentsSelect2.init();
                \$('#generateMetricsBtn').click(function(){
                    \$from = \$('#date-from').val();
                    \$to = \$('#date-to').val();
                    \$campaign = \$('#chooseCampaign').val();
                    \$tz = \$('#chooseTZ').val();
                    \$btn = \$(this)[0];
                    if( \$('#includeHours').prop('checked') == true){
                        \$includeHours = 1;
                    }else{
                        \$includeHours = 0;
                    }
                   console.log(\$('#includeHours').prop('checked'));
                    \$data = {
                        from: \$from,
                        to: \$to,
                        campaign: \$campaign,
                        tz: \$tz,
                        includeHours: \$includeHours
                    };

                    \$variables = \$('#chooseVariables').val();

                    getCampaignMetrics(\$data, \$variables, \$btn);
                });
            });
        }


    </script>

    <!-- AJAX CALLS -->
    <script src=\"{{ asset('assets/ajax/reports/metrics.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/ajax/common/common.js') }}\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
{% endblock %}
", "reports/metrics.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app\\Resources\\views\\reports\\metrics.html.twig");
    }
}
