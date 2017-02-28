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
        $__internal_a982eb62b3a4194a8fdb5b3639405ee1be3f60cc92242336f203a6aad35cd423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a982eb62b3a4194a8fdb5b3639405ee1be3f60cc92242336f203a6aad35cd423->enter($__internal_a982eb62b3a4194a8fdb5b3639405ee1be3f60cc92242336f203a6aad35cd423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/metrics.html.twig"));

        $__internal_c5eae64db5885ccc83111c3aff89856adcfe5f55113b9f5c77c00fe6aa5487ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5eae64db5885ccc83111c3aff89856adcfe5f55113b9f5c77c00fe6aa5487ea->enter($__internal_c5eae64db5885ccc83111c3aff89856adcfe5f55113b9f5c77c00fe6aa5487ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/metrics.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a982eb62b3a4194a8fdb5b3639405ee1be3f60cc92242336f203a6aad35cd423->leave($__internal_a982eb62b3a4194a8fdb5b3639405ee1be3f60cc92242336f203a6aad35cd423_prof);

        
        $__internal_c5eae64db5885ccc83111c3aff89856adcfe5f55113b9f5c77c00fe6aa5487ea->leave($__internal_c5eae64db5885ccc83111c3aff89856adcfe5f55113b9f5c77c00fe6aa5487ea_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_381d353b4c8fc7e244b522b43e23ab22b39a1f8f3f9eef47a0481b57554dd836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381d353b4c8fc7e244b522b43e23ab22b39a1f8f3f9eef47a0481b57554dd836->enter($__internal_381d353b4c8fc7e244b522b43e23ab22b39a1f8f3f9eef47a0481b57554dd836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9d0b5de480ef768b510f1ffde9ba0b78ce741459a7579d0769ef7beb2199b52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0b5de480ef768b510f1ffde9ba0b78ce741459a7579d0769ef7beb2199b52e->enter($__internal_9d0b5de480ef768b510f1ffde9ba0b78ce741459a7579d0769ef7beb2199b52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9d0b5de480ef768b510f1ffde9ba0b78ce741459a7579d0769ef7beb2199b52e->leave($__internal_9d0b5de480ef768b510f1ffde9ba0b78ce741459a7579d0769ef7beb2199b52e_prof);

        
        $__internal_381d353b4c8fc7e244b522b43e23ab22b39a1f8f3f9eef47a0481b57554dd836->leave($__internal_381d353b4c8fc7e244b522b43e23ab22b39a1f8f3f9eef47a0481b57554dd836_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b178bb91fcd3587e654b2dbc0d353d422683e4405d38caf2d684c4b45f333d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b178bb91fcd3587e654b2dbc0d353d422683e4405d38caf2d684c4b45f333d9b->enter($__internal_b178bb91fcd3587e654b2dbc0d353d422683e4405d38caf2d684c4b45f333d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_60e90918b2fa2c24e2ba47eaa923ef218cc6ca095b88e4b2eba4c1dec0718d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e90918b2fa2c24e2ba47eaa923ef218cc6ca095b88e4b2eba4c1dec0718d17->enter($__internal_60e90918b2fa2c24e2ba47eaa923ef218cc6ca095b88e4b2eba4c1dec0718d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 19
        echo "
";
        
        $__internal_60e90918b2fa2c24e2ba47eaa923ef218cc6ca095b88e4b2eba4c1dec0718d17->leave($__internal_60e90918b2fa2c24e2ba47eaa923ef218cc6ca095b88e4b2eba4c1dec0718d17_prof);

        
        $__internal_b178bb91fcd3587e654b2dbc0d353d422683e4405d38caf2d684c4b45f333d9b->leave($__internal_b178bb91fcd3587e654b2dbc0d353d422683e4405d38caf2d684c4b45f333d9b_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_115ffc457db3d46c9df9f38c2e16aa18bec680c0e8335e2e71e9f353614d2430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115ffc457db3d46c9df9f38c2e16aa18bec680c0e8335e2e71e9f353614d2430->enter($__internal_115ffc457db3d46c9df9f38c2e16aa18bec680c0e8335e2e71e9f353614d2430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d55c14ed92156cc56e2556513a9417364d9b7ad0ee33283d8d9a8d2929a962f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55c14ed92156cc56e2556513a9417364d9b7ad0ee33283d8d9a8d2929a962f3->enter($__internal_d55c14ed92156cc56e2556513a9417364d9b7ad0ee33283d8d9a8d2929a962f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                            <label for=\"checkbox14\">
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
        
        $__internal_d55c14ed92156cc56e2556513a9417364d9b7ad0ee33283d8d9a8d2929a962f3->leave($__internal_d55c14ed92156cc56e2556513a9417364d9b7ad0ee33283d8d9a8d2929a962f3_prof);

        
        $__internal_115ffc457db3d46c9df9f38c2e16aa18bec680c0e8335e2e71e9f353614d2430->leave($__internal_115ffc457db3d46c9df9f38c2e16aa18bec680c0e8335e2e71e9f353614d2430_prof);

    }

    // line 149
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b56366398786d10a3e62fc3edc8d6c7039e75fc6b493f2588cf366eaf5a2f516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56366398786d10a3e62fc3edc8d6c7039e75fc6b493f2588cf366eaf5a2f516->enter($__internal_b56366398786d10a3e62fc3edc8d6c7039e75fc6b493f2588cf366eaf5a2f516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7801529978c37b79dd8d9b0e6ba1fc3a2d945226a0e7f919903a9f0110397a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7801529978c37b79dd8d9b0e6ba1fc3a2d945226a0e7f919903a9f0110397a77->enter($__internal_7801529978c37b79dd8d9b0e6ba1fc3a2d945226a0e7f919903a9f0110397a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7801529978c37b79dd8d9b0e6ba1fc3a2d945226a0e7f919903a9f0110397a77->leave($__internal_7801529978c37b79dd8d9b0e6ba1fc3a2d945226a0e7f919903a9f0110397a77_prof);

        
        $__internal_b56366398786d10a3e62fc3edc8d6c7039e75fc6b493f2588cf366eaf5a2f516->leave($__internal_b56366398786d10a3e62fc3edc8d6c7039e75fc6b493f2588cf366eaf5a2f516_prof);

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
        return array (  525 => 337,  521 => 336,  354 => 172,  350 => 171,  346 => 170,  340 => 167,  336 => 166,  332 => 165,  328 => 164,  324 => 163,  320 => 162,  316 => 161,  312 => 160,  307 => 158,  303 => 157,  299 => 156,  295 => 155,  291 => 154,  287 => 153,  283 => 152,  279 => 151,  274 => 150,  265 => 149,  143 => 37,  126 => 22,  117 => 21,  106 => 19,  103 => 17,  94 => 16,  77 => 9,  73 => 8,  69 => 7,  65 => 6,  61 => 5,  57 => 4,  52 => 3,  43 => 2,  11 => 1,);
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
                                            <label for=\"checkbox14\">
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
