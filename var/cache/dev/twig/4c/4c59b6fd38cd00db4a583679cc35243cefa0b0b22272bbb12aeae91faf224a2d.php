<?php

/* reports/trafficmonitoring.html.twig */
class __TwigTemplate_2579ddaaceb85fbc00584b49549d8af2873d78c95981f8f8f59d44a7790acfe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reports/trafficmonitoring.html.twig", 1);
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
        $__internal_801b1b214d2608db732790a44f02bfba549f5c9c075fbbdfaa68140db343999b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801b1b214d2608db732790a44f02bfba549f5c9c075fbbdfaa68140db343999b->enter($__internal_801b1b214d2608db732790a44f02bfba549f5c9c075fbbdfaa68140db343999b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/trafficmonitoring.html.twig"));

        $__internal_d313d6b47430234c8daa560df57b83fe36067aa14224336817d9f9eb41afed49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d313d6b47430234c8daa560df57b83fe36067aa14224336817d9f9eb41afed49->enter($__internal_d313d6b47430234c8daa560df57b83fe36067aa14224336817d9f9eb41afed49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reports/trafficmonitoring.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_801b1b214d2608db732790a44f02bfba549f5c9c075fbbdfaa68140db343999b->leave($__internal_801b1b214d2608db732790a44f02bfba549f5c9c075fbbdfaa68140db343999b_prof);

        
        $__internal_d313d6b47430234c8daa560df57b83fe36067aa14224336817d9f9eb41afed49->leave($__internal_d313d6b47430234c8daa560df57b83fe36067aa14224336817d9f9eb41afed49_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b4bd4e2d1dc80969cff027ca29d3ff8986d85c70d53fbac9cb09267d2220623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4bd4e2d1dc80969cff027ca29d3ff8986d85c70d53fbac9cb09267d2220623->enter($__internal_5b4bd4e2d1dc80969cff027ca29d3ff8986d85c70d53fbac9cb09267d2220623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9b5e0024cc6823a9e64e04d35422678be3bf449538398155526e6dea4d7d4653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5e0024cc6823a9e64e04d35422678be3bf449538398155526e6dea4d7d4653->enter($__internal_9b5e0024cc6823a9e64e04d35422678be3bf449538398155526e6dea4d7d4653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

";
        
        $__internal_9b5e0024cc6823a9e64e04d35422678be3bf449538398155526e6dea4d7d4653->leave($__internal_9b5e0024cc6823a9e64e04d35422678be3bf449538398155526e6dea4d7d4653_prof);

        
        $__internal_5b4bd4e2d1dc80969cff027ca29d3ff8986d85c70d53fbac9cb09267d2220623->leave($__internal_5b4bd4e2d1dc80969cff027ca29d3ff8986d85c70d53fbac9cb09267d2220623_prof);

    }

    // line 12
    public function block_nav($context, array $blocks = array())
    {
        $__internal_1ff57a88ae598e0b0a0048a79f2756bf10e8855da07166a6f7dbd3a67d3307c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff57a88ae598e0b0a0048a79f2756bf10e8855da07166a6f7dbd3a67d3307c7->enter($__internal_1ff57a88ae598e0b0a0048a79f2756bf10e8855da07166a6f7dbd3a67d3307c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_b23517d8946e55133aacd4c5af97beebac2865a8464c240fbf77f267f0ec76f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23517d8946e55133aacd4c5af97beebac2865a8464c240fbf77f267f0ec76f9->enter($__internal_b23517d8946e55133aacd4c5af97beebac2865a8464c240fbf77f267f0ec76f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Navmenu:getNavmenu"));
        // line 15
        echo "
";
        
        $__internal_b23517d8946e55133aacd4c5af97beebac2865a8464c240fbf77f267f0ec76f9->leave($__internal_b23517d8946e55133aacd4c5af97beebac2865a8464c240fbf77f267f0ec76f9_prof);

        
        $__internal_1ff57a88ae598e0b0a0048a79f2756bf10e8855da07166a6f7dbd3a67d3307c7->leave($__internal_1ff57a88ae598e0b0a0048a79f2756bf10e8855da07166a6f7dbd3a67d3307c7_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_f88225f56967887688b1a99baa0294c674f9485cade82ac45cce34085ebb2b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f88225f56967887688b1a99baa0294c674f9485cade82ac45cce34085ebb2b6d->enter($__internal_f88225f56967887688b1a99baa0294c674f9485cade82ac45cce34085ebb2b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fad80eea6ddc81072e10ccf9b44b202dad55a03f0b18b175b4a25b91f207842a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad80eea6ddc81072e10ccf9b44b202dad55a03f0b18b175b4a25b91f207842a->enter($__internal_fad80eea6ddc81072e10ccf9b44b202dad55a03f0b18b175b4a25b91f207842a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
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
        // line 33
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
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "trafficSource", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 76
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trafficSourceName", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "trafficSourceName", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                                </select>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterCampaign\" class=\"form-control select2\">
                                    <option></option>
                                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "campaigns", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 85
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
        // line 87
        echo "                                </select>
                            </div>

                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterPlacement\" class=\"form-control select2\">
                                    <option></option>
                                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "placements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 94
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placement", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placement", array()), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                </select>
                            </div>


                            <div class=\"col-md-2 col-xs-12\">
                                <select id=\"selectFilterGeo\" class=\"form-control select2\">
                                    <option></option>
                                    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")), "geos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 104
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
        // line 106
        echo "                                </select>
                            </div>


                             <div class=\"col-md-2\">
                                <button class=\"btn blue spinnerBtn ladda-button\" id=\"filterBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-search\"></i> Filter</span></button>
                                <button class=\"btn blue pull-right\" data-toggle=\"modal\" href=\"#modalDisplayTrafficMonitoringSettings\"><i class=\"fa fa-gear\"></i> Settings</button>
                            </div>
                            <div class=\"modal fade\" id=\"modalDisplayTrafficMonitoringSettings\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-md\">
                                <div class=\"modal-content\">

                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                        </button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel2\">Campaign Settings</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12\">
                                                <table class=\"table table-striped\">
                                                    <thead>
                                                        <th>Campaign Name</th>
                                                        <th># of Visits</th>
                                                    </thead>
                                                    <tbody id=\"displayTrafficMonitoringSettingsContainer\">

                                                    </tbody>


                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                        <button type=\"submit\" class=\"btn btn-primary pull-right spinnerBtn ladda-button\" id=\"updateTrafficMonitoringSettingsBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\">Save </span></button>
                                    </div>
                                </div>
                            </div>
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
                                            <th>Traffic Source </th>
                                            <th>Campaign</th>
                                            <th>Campaign ID</th>
                                            <th>Placement </th>
                                            <th>Geo </th>
                                            <th>Timestamp </th>
                                            <th>Last Hour Visits </th>
                                            <th>Current Time Visits</th>
                                            <th>Visits Percentage</th>
                                            <th>Status</th>
                                            <th>Disable <br> Notification</th>
                                        </tr>
                                        </thead>
                                         <tfoot>
                                        <tr>
                                            <th colspan=\"12\"><button class=\"btn blue spinnerBtn ladda-button pull-right\" id=\"saveNotificationSettingsBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-save\"></i> Save </span></button></th>
                                        </tr>
                                        </tfoot>
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
        
        $__internal_fad80eea6ddc81072e10ccf9b44b202dad55a03f0b18b175b4a25b91f207842a->leave($__internal_fad80eea6ddc81072e10ccf9b44b202dad55a03f0b18b175b4a25b91f207842a_prof);

        
        $__internal_f88225f56967887688b1a99baa0294c674f9485cade82ac45cce34085ebb2b6d->leave($__internal_f88225f56967887688b1a99baa0294c674f9485cade82ac45cce34085ebb2b6d_prof);

    }

    // line 195
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aaa28546b763ed8f418fa6d63d9b238db7e93c9ff6fed6559a4321c7ee66fa8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa28546b763ed8f418fa6d63d9b238db7e93c9ff6fed6559a4321c7ee66fa8d->enter($__internal_aaa28546b763ed8f418fa6d63d9b238db7e93c9ff6fed6559a4321c7ee66fa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_86fa185711c2d13d02c0bf4f1559efb1e7add7bd85a91617707e957f37ee0310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fa185711c2d13d02c0bf4f1559efb1e7add7bd85a91617707e957f37ee0310->enter($__internal_86fa185711c2d13d02c0bf4f1559efb1e7add7bd85a91617707e957f37ee0310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 196
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/autosize/autosize.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/moment.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/clockface/js/clockface.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 204
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

                \$(\"#selectFilterPlacement\").select2({
                    allowClear: true,
                    placeholder: 'Select Placement',
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
                \"fnServerParams\": function ( aoData ) {
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
                        \"name\": \"placement\", \"value\": \$('#selectFilterPlacement').val()
                    } );
                },
                \"sAjaxSource\": \"/ajax/get-reports-traffic-monitoring\",

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
                \"dom\": \"<'row' <'col-md-12'>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>\"
            });


            \$('#filterBtn').click(function(){
                var l = Ladda.create(\$(this)[0]);
                l.start();
                oTable.ajax.reload(function () {
                    l.stop();
                });
            })
            setInterval(tick, 60000);

            function tick()
            {
                //get the mins of the current time
                var mins = new Date().getMinutes();
                if(mins == \"00\"){
                    table.ajax.reload();
                    getTrafficSourceTrafficMonitoringFilter();
                }
            }

           getWithTrafficCampaigns(0, 'traffic')

            \$('#updateTrafficMonitoringSettingsBtn').on('click', function(){
                var btn = \$(this)[0];
                var data = {items:[]};
                \$('.camp-record').each(function () {
                    var campId = \$(this).data('campid');
                    var visit = \$(this).val();

                    data.items.push({
                        campid: campId,
                        visit: visit
                    })
                });

                updateTrafficMonitoringSettings(data.items, btn);
                delete data.items;
            });

            \$('#saveNotificationSettingsBtn').on('click', function(){
                var btn = \$(this)[0];
                var data = {items:[]};
                \$('.notificationCampaignRecord').each(function () {
                    var id = \$(this).data('id');
                    var isChecked = \$(this).is(':checked');

                    data.items.push({
                        id: id,
                        isChecked: isChecked
                    });
                });
                updateTrafficMonitoringNotificationSettings(data.items, btn);
                delete data.items;

            });
        });

    </script>

    <!-- AJAX CALLS -->
    <script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/reports/traffic-monitoring.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ajax/common/common.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
";
        
        $__internal_86fa185711c2d13d02c0bf4f1559efb1e7add7bd85a91617707e957f37ee0310->leave($__internal_86fa185711c2d13d02c0bf4f1559efb1e7add7bd85a91617707e957f37ee0310_prof);

        
        $__internal_aaa28546b763ed8f418fa6d63d9b238db7e93c9ff6fed6559a4321c7ee66fa8d->leave($__internal_aaa28546b763ed8f418fa6d63d9b238db7e93c9ff6fed6559a4321c7ee66fa8d_prof);

    }

    public function getTemplateName()
    {
        return "reports/trafficmonitoring.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  693 => 482,  689 => 481,  409 => 204,  405 => 203,  401 => 202,  397 => 201,  393 => 200,  389 => 199,  385 => 198,  381 => 197,  376 => 196,  367 => 195,  269 => 106,  258 => 104,  254 => 103,  245 => 96,  234 => 94,  230 => 93,  222 => 87,  211 => 85,  207 => 84,  199 => 78,  188 => 76,  184 => 75,  139 => 33,  122 => 18,  113 => 17,  102 => 15,  99 => 13,  90 => 12,  77 => 9,  73 => 8,  69 => 7,  65 => 6,  61 => 5,  57 => 4,  52 => 3,  43 => 2,  11 => 1,);
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
    <option value=\"{{ item.trafficSourceName }}\">{{ item.trafficSourceName }}</option>
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
                                <select id=\"selectFilterPlacement\" class=\"form-control select2\">
                                    <option></option>
                                    {% for item in filters.placements %}
    <option value=\"{{ item.placement }}\">{{ item.placement }}</option>
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


                             <div class=\"col-md-2\">
                                <button class=\"btn blue spinnerBtn ladda-button\" id=\"filterBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-search\"></i> Filter</span></button>
                                <button class=\"btn blue pull-right\" data-toggle=\"modal\" href=\"#modalDisplayTrafficMonitoringSettings\"><i class=\"fa fa-gear\"></i> Settings</button>
                            </div>
                            <div class=\"modal fade\" id=\"modalDisplayTrafficMonitoringSettings\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                            <div class=\"modal-dialog modal-md\">
                                <div class=\"modal-content\">

                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                        </button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel2\">Campaign Settings</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12\">
                                                <table class=\"table table-striped\">
                                                    <thead>
                                                        <th>Campaign Name</th>
                                                        <th># of Visits</th>
                                                    </thead>
                                                    <tbody id=\"displayTrafficMonitoringSettingsContainer\">

                                                    </tbody>


                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                        <button type=\"submit\" class=\"btn btn-primary pull-right spinnerBtn ladda-button\" id=\"updateTrafficMonitoringSettingsBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\">Save </span></button>
                                    </div>
                                </div>
                            </div>
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
                                            <th>Traffic Source </th>
                                            <th>Campaign</th>
                                            <th>Campaign ID</th>
                                            <th>Placement </th>
                                            <th>Geo </th>
                                            <th>Timestamp </th>
                                            <th>Last Hour Visits </th>
                                            <th>Current Time Visits</th>
                                            <th>Visits Percentage</th>
                                            <th>Status</th>
                                            <th>Disable <br> Notification</th>
                                        </tr>
                                        </thead>
                                         <tfoot>
                                        <tr>
                                            <th colspan=\"12\"><button class=\"btn blue spinnerBtn ladda-button pull-right\" id=\"saveNotificationSettingsBtn\" data-style=\"expand-right\" data-size=\"l\"><span class=\"ladda-label\"><i class=\"fa fa-save\"></i> Save </span></button></th>
                                        </tr>
                                        </tfoot>
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

                \$(\"#selectFilterPlacement\").select2({
                    allowClear: true,
                    placeholder: 'Select Placement',
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
                \"fnServerParams\": function ( aoData ) {
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
                        \"name\": \"placement\", \"value\": \$('#selectFilterPlacement').val()
                    } );
                },
                \"sAjaxSource\": \"/ajax/get-reports-traffic-monitoring\",

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
                \"dom\": \"<'row' <'col-md-12'>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>\"
            });


            \$('#filterBtn').click(function(){
                var l = Ladda.create(\$(this)[0]);
                l.start();
                oTable.ajax.reload(function () {
                    l.stop();
                });
            })
            setInterval(tick, 60000);

            function tick()
            {
                //get the mins of the current time
                var mins = new Date().getMinutes();
                if(mins == \"00\"){
                    table.ajax.reload();
                    getTrafficSourceTrafficMonitoringFilter();
                }
            }

           getWithTrafficCampaigns(0, 'traffic')

            \$('#updateTrafficMonitoringSettingsBtn').on('click', function(){
                var btn = \$(this)[0];
                var data = {items:[]};
                \$('.camp-record').each(function () {
                    var campId = \$(this).data('campid');
                    var visit = \$(this).val();

                    data.items.push({
                        campid: campId,
                        visit: visit
                    })
                });

                updateTrafficMonitoringSettings(data.items, btn);
                delete data.items;
            });

            \$('#saveNotificationSettingsBtn').on('click', function(){
                var btn = \$(this)[0];
                var data = {items:[]};
                \$('.notificationCampaignRecord').each(function () {
                    var id = \$(this).data('id');
                    var isChecked = \$(this).is(':checked');

                    data.items.push({
                        id: id,
                        isChecked: isChecked
                    });
                });
                updateTrafficMonitoringNotificationSettings(data.items, btn);
                delete data.items;

            });
        });

    </script>

    <!-- AJAX CALLS -->
    <script src=\"{{ asset('assets/ajax/reports/traffic-monitoring.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/ajax/common/common.js') }}\" type=\"text/javascript\"></script>
    <!-- END AJAX CALLS -->
{% endblock %}
", "reports/trafficmonitoring.html.twig", "C:\\wamp\\www\\symfony-mobrevtools\\app\\Resources\\views\\reports\\trafficmonitoring.html.twig");
    }
}
